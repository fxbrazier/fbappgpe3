<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Picture;
use AppBundle\Entity\Picture_like;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/* include Form extension */
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PictureController extends Controller
{

    /**
     * @Route("/myadmin/picture/details/{id}", name="picture_details")
     */
    public function detailsAction($id, Request $request){
        $picture = $this->getDoctrine()
                      ->getRepository('AppBundle:Picture')
                      ->find($id);

        return $this->render('picture/details.html.twig', array(
            'picture' => $picture
            )
        );
    }

    /**
     * @Route("/myadmin/picture/delete/{id}", name="picture_delete")
     */
    public function deleteAction($id){
        $em = $this->getDoctrine()
                      ->getManager();
        $picture = $em->getRepository('AppBundle:Picture')->find($id);
        $em->remove($picture);
        $em->flush();
        $this->addFlash(
          'notice',
          'Picture removed'
        );
        return $this->redirectToRoute('picture_list');
    }

    /**
     * @Route("/participate", name="picture_participate")
     */
    public function participateAction(Request $request){
      if ($this->get('app.user_controller')->checkIfLogAction()) {
        $contest = $this->getDoctrine()
                      ->getRepository('AppBundle:Contest')
                      ->findCurrentContest(date("Y-m-d H:i:s"));

        $id = $contest[0]->getId();

        $user = $this->get('app.user_controller')->getInfosFbAction();
        //var_dump($user);die;

        $name = $user["first_name"].' '.$user["last_name"];

        $albums = $this->get('app.user_controller')->getAlbumsFbAction();

          $picture = new Picture();
          // Picture form
          $form = $this->createFormBuilder($picture)
          ->add('name', TextType::class, array(
            'attr' => array(
              'label' => 'Nom',
              'class' => 'form-control',
              'style' => 'margin-bottom:15px',
              'required' => true
            )))
          ->add('link', FileType::class, array(
            'attr' => array(
              'label' => 'Image',
              'class' => 'form-control',
              'style' => 'margin-bottom:15px',
              'required' => false
            )))
          ->add('hebergement', ChoiceType::class, array(
            'choices'  => array(
                'Importer une image' => 'local',
                'Sélectionner une image facebook' => 'facebook'
            ),
            'attr' => array(
              'class' => 'form-control',
              'style' => 'margin-bottom:15px',
              'required' => true
            )))
          ->add('valider', SubmitType::class, array(
                    'attr' => array(
                        'class' =>'btn-primary btn-lg',
                        'style' => 'margin-bottom:15px'
                    )))
                ->getForm();  

          $form->handleRequest($request); 

          //handle request add contest form
          if($form->isSubmitted() && $form->isValid()){

            $user = $this->get('app.user_controller')->getInfosFbAction();

            //on récupère l'utilisateur
            $thisUser = $this->getDoctrine()
                      ->getRepository('AppBundle:User')
                      ->findOneBy(array('id_fb' => $user['id']));
                      //var_dump($thisUser->getId());die;

                $hebergement = $form['hebergement']->getData();
                $name = $form['name']->getData();
                if ($hebergement == 'facebook') {
                  $link_name = $_POST["select-img"];
                }else{
                  $link =  $form['link']->getData();

                  //dossier de destination
                  $dir = $this->get('kernel')->getRootDir() . '/../web/images/';    

                  //génération d'un nom unique pour le fichier uploadé
                  $link_name = hash('sha512', session_id().microtime());
                  $extension = $link->guessExtension();   

                  $link_name = $link_name.'.'.$extension;   

                  $link->move($dir, $link_name); 
                }  

                $picture->setName($name);
                $picture->setLink($link_name);
                $picture->setGeolocalisation('');
                $picture->setidUser($thisUser->getId());
                $picture->setidContest($id);  

                $em = $this->getDoctrine()->getManager();
                $em->persist($picture); 

                // actually executes the queries (i.e. the INSERT query)
                $em->flush(); 

                return $this->redirectToRoute('homepage');  

          } 

        return $this->render('contest/participate.html.twig', array(
              'contest' => $picture,
              'form' => $form->createView(),
              'name' => $name,
              'albums' => $albums
              ));
      }else{
        return $this->redirectToRoute('login');
      }
    }

    /**
     * @Route("/picture/{id}", name="picture_picture")
     */
    public function pictureAction($id, Request $request){
        $picture = $this->getDoctrine()
                      ->getRepository('AppBundle:Picture')
                      ->findOneBy(array('id' => $id));

          $picture_like = new Picture_like();
          $form = $this->createFormBuilder($picture_like)
          ->add('voter', SubmitType::class, array(
                    'attr' => array(
                        'class' =>'btn-primary btn-lg',
                        'style' => 'margin-bottom:15px'
                    )))
                ->getForm();
                //var_dump($picture_like);die;
          $url = 'http://localhost/fbappgpe3/web/app_dev.php/loginVote';

          if ($this->get('app.user_controller')->checkIfLogAction()) {
            $log = true;
          }else{
            $log = false;
          }

          $form->handleRequest($request);

          //handle request add contest form
          if($form->isSubmitted() && $form->isValid()){
            $user = $this->get('app.user_controller')->getInfosFbAction();

            //on récupère l'utilisateur
            $thisUser = $this->getDoctrine()
                      ->getRepository('AppBundle:User')
                      ->findOneBy(array('id_fb' => $user['id']));
                      //var_dump($thisUser->getId());die;

            //verif unicité vote
            $vote = $this->getDoctrine()
                      ->getRepository('AppBundle:Picture_like')
                      ->findOneBy(array('id_picture' => $id, 'id_user' => $thisUser->getId()));
            if (!$vote) {
              $id_picture = $id;
                $id_user = $thisUser->getId(); 

                $picture_like->setIdPicture($id_picture);
                $picture_like->setIdUser($id_user); 

                $em = $this->getDoctrine()->getManager();
                $em->persist($picture_like);

                // actually executes the queries (i.e. the INSERT query)
                $em->flush(); 
            }
          }

          $nb = $this->getDoctrine()
                      ->getRepository('AppBundle:Picture_like')
                      ->findNbLike($id);

        return $this->render('picture/picture.html.twig', array(
            'picture' => $picture,
            'form' => $form->createView(),
            'nb' => $nb,
            'url' => $url,
            'log' => $log
        ));
    }
}


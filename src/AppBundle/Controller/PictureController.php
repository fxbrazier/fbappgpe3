<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Picture;

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
     * @Route("/myadmin", name="picture_list")
     */
    public function listAction(){
        $pictures = $this->getDoctrine()
                      ->getRepository('AppBundle:Picture')
                      ->findAll();

        return $this->render('picture/index.html.twig', array(
            'pictures' => $pictures,
            ));
    }


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
     * @Route("/participate/{id}", name="picture_participate")
     */
    public function participateAction($id, Request $request){
      if ($this->get('app.user_controller')->checkIfLogAction()) {
        $user = $this->get('app.user_controller')->getInfosFbAction();
        $name = $user["name"];

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
                $picture->setidUser('1');
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
    public function pictureAction($id){
        $picture = $this->getDoctrine()
                      ->getRepository('AppBundle:Picture')
                      ->findOneBy(array('id' => $id));
                      //var_dump($picture);die;

        return $this->render('picture/picture.html.twig', array(
            'picture' => $picture,
            ));
    }
}


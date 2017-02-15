<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Page;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;


/* include Form extension */
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PageController extends Controller
{

    /**
     * @Route("/page/{page_url}", name="page")
     */
    public function indexAction($page_url, Request $request){

      $page = $this->getDoctrine()
                    ->getRepository('AppBundle:Page')
                    ->findOneByUrl($page_url);
      /*return $this->render('page/'. $page_name .'.html.twig', array(
          'page' => $page,
          ));*/
      return $this->render('page/index.html.twig', array(
          'page' => $page,
          ));
    }


    /**
     * @Route("/myadmin/pages", name="page_list")
     */
    public function listAction(){
      if( $this->get('app.user_controller')->checkIfLogAdminAction() ) {

        $pages = $this->getDoctrine()
                      ->getRepository('AppBundle:Page')
                      ->findAll();

        return $this->render('page/list.html.twig', array(
            'pages' => $pages,
            ));

      }else{
         return $this->redirectToRoute('homepage');
      }
    }

    /**
     * @Route("/myadmin/page/create", name="page_create")
     */
    public function createAction(Request $request){
      if( $this->get('app.user_controller')->checkIfLogAdminAction() ) {

    	$page = new Page;
      // Page form
    	$form = $this->createFormBuilder($page)
			->add('title', TextType::class, array(
				'attr' => array(
					'class' => 'form-control',
					'style' => 'margin-bottom:15px'
				)))
			->add('content', TextareaType::class, array(
				'attr' => array(
					'class' => 'form-control',
					'style' => 'margin-bottom:15px'
				)))
      ->add('save', SubmitType::class, array(
          'attr' => array(
              'class' =>'btn-primary btn-lg',
              'style' => 'margin-bottom:15px'
          )))
      ->getForm();

	    $form->handleRequest($request);

      //handle request add page form
	    if($form->isSubmitted() && $form->isValid()){

            $error = false;
            $error_message = [];

            $title = $form['title']->getData();
            $content =  $form['content']->getData();
            $url = str_replace( ' ', '-', $title);

            // Check variables
            $repository = $this->getDoctrine()->getRepository('AppBundle:Page');
            $checkTitle = $repository->findOneByTitle( $title );
            if( !empty( $checkTitle ) ){
              $error = true;
              $error_message[] = 'The title is already been used';
            }
            elseif( strlen( $title ) < 3 || strlen( $title ) > 125 ){
              $error = true;
              $error_message[] = 'The title is too long';
            }
            elseif( strlen( $content ) < 3 ) {
              $error = true;
              $error_message[] = 'The content is too short';
            }


            if( $error ){
                $this->addFlash(
                  'error',
                  $error_message[0]
                );
            }
            else{
              $page->setTitle($title);
              $page->setUrl($url);
              $page->setContent($content);
              $em = $this->getDoctrine()->getManager();

              // tells Doctrine you want to (eventually) save the page (no queries yet)
              $em->persist($page);

              // actually executes the queries (i.e. the INSERT query)
              $em->flush();
              $this->addFlash(
                'notice',
                'Page Added'
              );
              return $this->redirectToRoute('page_list');
            }
	    }

	    return $this->render('page/create.html.twig', array('form' => $form->createView()));

      }else{
         return $this->redirectToRoute('homepage');
      }
    }

    /**
     * @Route("/myadmin/page/details/{id}", name="page_details")
     */
    public function detailsAction($id, Request $request){
      if( $this->get('app.user_controller')->checkIfLogAdminAction() ) {

        $page = $this->getDoctrine()
                      ->getRepository('AppBundle:Page')
                      ->find($id);

        return $this->render('page/details.html.twig', array(
            'page' => $page
            )
        );

      }else{
         return $this->redirectToRoute('homepage');
      }
    }


    /**
     * @Route("/myadmin/page/edit/{id}", name="page_edit")
     */
    public function editAction($id, Request $request){
      if( $this->get('app.user_controller')->checkIfLogAdminAction() ) {

        $page = $this->getDoctrine()
                      ->getRepository('AppBundle:Page')
                      ->find($id);
        // Page form
        $form = $this->createFormBuilder($page)
        ->add('title', TextType::class, array(
          'attr' => array(
            'class' => 'form-control',
            'style' => 'margin-bottom:15px'
          )))
        ->add('content', TextareaType::class, array(
          'attr' => array(
            'class' => 'form-control',
            'style' => 'margin-bottom:15px'
          )))
        ->add('update', SubmitType::class, array(
            'attr' => array(
                'class' =>'btn-primary btn-lg',
                'style' => 'margin-bottom:15px'
            )))
        ->getForm();

        $form->handleRequest($request);

        //handle request add page form
        if($form->isSubmitted() && $form->isValid()){

            $error = false;
            $error_message = [];
            
            $title = $form['title']->getData();
            $content =  $form['content']->getData();
            $url = str_replace( ' ', '-', $title);

            // Check variables
            $repository = $this->getDoctrine()->getRepository('AppBundle:Page');
            $checkTitle = $repository->findOneByTitle( $title );

            if( !empty( $checkTitle ) &&  $checkTitle->getId() != $id ){
              $error = true;
              $error_message[] = 'The title is already been used';
            }
            elseif( strlen( $title ) < 3 || strlen( $title ) > 125 ){
              $error = true;
              $error_message[] = 'The title is too long';
            }
            elseif( strlen( $content ) < 3 ) {
              $error = true;
              $error_message[] = 'The content is too short';
            }

            if( $error ){
              $this->addFlash(
                'error',
                $error_message[0]
              );
            }else{
              $page->setTitle($title);
              $page->setUrl($url);
              $page->setContent($content);

              $em = $this->getDoctrine()->getManager();
              $page = $em->getRepository('AppBundle:Page')->find($id);
              // tells Doctrine you want to (eventually) save the page (no queries yet)
              $em->persist($page);

              // actually executes the queries (i.e. the INSERT query)
              $em->flush();
              $this->addFlash(
                'notice',
                'Page Updated'
              );
            }
        }
        return $this->render('page/edit.html.twig', array(
            'page' => $page,
            'form' => $form->createView()
            )
        );

      }else{
         return $this->redirectToRoute('homepage');
      }
    }

    /**
     * @Route("/myadmin/page/delete/{id}", name="page_delete")
     */
    public function deleteAction($id){
      if( $this->get('app.user_controller')->checkIfLogAdminAction() ) {

        $em = $this->getDoctrine()
                      ->getManager();
        $page = $em->getRepository('AppBundle:Page')->find($id);
        $em->remove($page);
        $em->flush();
        $this->addFlash(
          'notice',
          'Page removed'
        );
        return $this->redirectToRoute('page_list');

      }else{
         return $this->redirectToRoute('homepage');
      }
    }
}


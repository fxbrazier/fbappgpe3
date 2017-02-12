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
     * @Route("/page/{page_name}", name="page")
     */
    public function indexAction($page_name, Request $request){

        $page = $this->getDoctrine()
                      ->getRepository('AppBundle:Page')
                      ->findOneByTitle($page_name);
        /*return $this->render('page/'. $page_name .'.html.twig', array(
            'page' => $page,
            ));*/
        return $this->render('page/index.html.twig', array(
            'page' => $page,
            ));
    }









    /**
     * @Route("/myadmin/page", name="page_list")
     */
    public function listAction(){
      //phpinfo();
        $pages = $this->getDoctrine()
                      ->getRepository('AppBundle:Page')
                      ->findAll();

        return $this->render('page/index.html.twig', array(
            'pages' => $pages,
            ));
    }

    /**
     * @Route("/myadmin/page/create", name="page_create")
     */
    public function createAction(Request $request){
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

            $title = $form['title']->getData();
            $content =  $form['content']->getData();
            /*// Gets the last page
            $repository = $this->getDoctrine()->getRepository('AppBundle:Page');
            // query for multiple products matching the given name, ordered by price
            $lastPage = $repository->findBy(
                array('endDate' => 'ASC')
            );
            dump($lastPage);
            die();
            if( $lastPage ){ 
            }
            */

            $page->setTitle($title);
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

	    return $this->render('page/create.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/myadmin/page/details/{id}", name="page_details")
     */
    public function detailsAction($id, Request $request){
        $page = $this->getDoctrine()
                      ->getRepository('AppBundle:Page')
                      ->find($id);

        return $this->render('page/details.html.twig', array(
            'page' => $page
            )
        );
    }


    /**
     * @Route("/myadmin/page/edit/{id}", name="page_edit")
     */
    public function editAction($id, Request $request){
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

              $title = $form['title']->getData();
              $content =  $form['content']->getData();


              $page->setTile($title);
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
              //return $this->redirectToRoute('page_edit/{id}');

        }
        return $this->render('page/edit.html.twig', array(
            'page' => $page,
            'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/myadmin/page/delete/{id}", name="page_delete")
     */
    public function deleteAction($id){
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
    }
}


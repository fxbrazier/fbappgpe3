<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contest;

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

class ContestController extends Controller
{
    /**
     * @Route("/myadmin/contest", name="contest_list")
     */
    public function listAction(){
      //phpinfo();
        $contests = $this->getDoctrine()
                      ->getRepository('AppBundle:Contest')
                      ->findAll();

        return $this->render('contest/index.html.twig', array(
            'contests' => $contests,
            ));
    }

    /**
     * @Route("/myadmin/contest/create", name="contest_create")
     */
    public function createAction(Request $request){
    	$contest = new Contest;
      // Contest form
    	$form = $this->createFormBuilder($contest)
			->add('name', TextType::class, array(
				'attr' => array(
					'class' => 'form-control',
					'style' => 'margin-bottom:15px'
				)))
			->add('description', TextareaType::class, array(
				'attr' => array(
					'class' => 'form-control',
					'style' => 'margin-bottom:15px'
				)))
			->add('startDate', DateTimeType::class, array(
				'attr' => array(
					'class' => '',
					'style' => 'margin-bottom:15px'
				)))
			->add('endDate', DateTimeType::class, array(
				'attr' => array(
					'class' => '',
					'style' => 'margin-bottom:15px'
				)))
			->add('status', ChoiceType::class, array(
                'choices' => array(
                    'published' => 'published',
                    'hide' => 'hide'
                ),
				'attr' => array(
					'class' => 'form-control',
					'style' => 'margin-bottom:15px'
				)))
      ->add('prize', TextareaType::class, array(
        'attr' => array(
          'class' => 'form-control',
          'style' => 'margin-bottom:15px'
        )))
			->add('description', TextareaType::class, array(
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

      //handle request add contest form
	    if($form->isSubmitted() && $form->isValid()){

            $name = $form['name']->getData();
            $description =  $form['description']->getData();
            $startDate = $form['startDate']->getData();
            $endDate = $form['endDate']->getData();
            $startDate = $form['startDate']->getData();
            $prize = $form['prize']->getData();
            $status = $form['status']->getData();

            // Gets the last contest
            $repository = $this->getDoctrine()->getRepository('AppBundle:Contest');
            // query for multiple products matching the given name, ordered by price
            $lastContest = $repository->findBy(
                array('endDate' => 'ASC')
            );
            dump($lastContest);
            die();
            if( $lastContest ){ 
            }






            if($status == 'published'){
              $status = 1;
            }else{
              $status = 0;
            }

            $contest->setName($name);
            $contest->setDescription($description);
            $contest->setStartDate($startDate);
            $contest->setStartDate($endDate);
            $contest->setPrize($prize);
            $contest->setStatus($status);
            $em = $this->getDoctrine()->getManager();

            // tells Doctrine you want to (eventually) save the contest (no queries yet)
            $em->persist($contest);

            // actually executes the queries (i.e. the INSERT query)
            $em->flush();
            $this->addFlash(
              'notice',
              'Contest Added'
            );
            return $this->redirectToRoute('contest_list');

	    }

	    return $this->render('contest/create.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/myadmin/contest/details/{id}", name="contest_details")
     */
    public function detailsAction($id, Request $request){
        $contest = $this->getDoctrine()
                      ->getRepository('AppBundle:Contest')
                      ->find($id);

        return $this->render('contest/details.html.twig', array(
            'contest' => $contest
            )
        );
    }


    /**
     * @Route("/myadmin/contest/edit/{id}", name="contest_edit")
     */
    public function editAction($id, Request $request){
        $contest = $this->getDoctrine()
                      ->getRepository('AppBundle:Contest')
                      ->find($id);
        // Contest form
        $form = $this->createFormBuilder($contest)
        ->add('name', TextType::class, array(
          'attr' => array(
            'class' => 'form-control',
            'style' => 'margin-bottom:15px'
          )))
        ->add('description', TextareaType::class, array(
          'attr' => array(
            'class' => 'form-control',
            'style' => 'margin-bottom:15px'
          )))
        ->add('startDate', DateTimeType::class, array(
          'attr' => array(
            'class' => '',
            'style' => 'margin-bottom:15px'
          )))
        ->add('endDate', DateTimeType::class, array(
          'attr' => array(
            'class' => '',
            'style' => 'margin-bottom:15px'
          )))
        ->add('status', ChoiceType::class, array(
                  'choices' => array(
                      'published' => 'published',
                      'hide' => 'hide'
                  ),
          'attr' => array(
            'class' => 'form-control',
            'style' => 'margin-bottom:15px'
          )))
        ->add('prize', TextareaType::class, array(
          'attr' => array(
            'class' => 'form-control',
            'style' => 'margin-bottom:15px'
          )))
        ->add('description', TextareaType::class, array(
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

        //handle request add contest form
        if($form->isSubmitted() && $form->isValid()){

              $name = $form['name']->getData();
              $description =  $form['description']->getData();
              $startDate = $form['startDate']->getData();
              $endDate = $form['endDate']->getData();
              $startDate = $form['startDate']->getData();
              $prize = $form['prize']->getData();
              $status = $form['status']->getData();

              if($status == 'published'){
                $status = 1;
              }else{
                $status = 0;
              }

              $contest->setName($name);
              $contest->setDescription($description);
              $contest->setStartDate($startDate);
              $contest->setStartDate($endDate);
              $contest->setPrize($prize);
              $contest->setStatus($status);
              $em = $this->getDoctrine()->getManager();
              $contest = $em->getRepository('AppBundle:Contest')->find($id);
              // tells Doctrine you want to (eventually) save the contest (no queries yet)
              $em->persist($contest);

              // actually executes the queries (i.e. the INSERT query)
              $em->flush();
              $this->addFlash(
                'notice',
                'Contest Updated'
              );
              //return $this->redirectToRoute('contest_edit/{id}');

        }
        return $this->render('contest/edit.html.twig', array(
            'contest' => $contest,
            'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/myadmin/contest/delete/{id}", name="contest_delete")
     */
    public function deleteAction($id){
        $em = $this->getDoctrine()
                      ->getManager();
        $contest = $em->getRepository('AppBundle:Contest')->find($id);
        $em->remove($contest);
        $em->flush();
        $this->addFlash(
          'notice',
          'Contest removed'
        );
        return $this->redirectToRoute('contest_list');
    }
}


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
      if( $this->get('app.user_controller')->checkIfLogAdminAction() ) {

        $contests = $this->getDoctrine()
                      ->getRepository('AppBundle:Contest')
                      ->findBy(
                          array(), array('status' => 'DESC')                      
                        );

        return $this->render('contest/index.html.twig', array(
            'contests' => $contests,
            ));
      }else{
            return $this->redirectToRoute('homepage');
      }
    }

    /**
     * @Route("/myadmin/contest/create", name="contest_create")
     */
    public function createAction(Request $request){
      if( $this->get('app.user_controller')->checkIfLogAdminAction() ) {

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

            $error = false;
            $error_message = [];
            // form variables
            $name = $form['name']->getData();
            $description =  $form['description']->getData();
            $startDate = $form['startDate']->getData();
            $endDate = $form['endDate']->getData();
            $startDate = $form['startDate']->getData();
            $prize = $form['prize']->getData();
            $status = $form['status']->getData();


            $repository = $this->getDoctrine()->getRepository('AppBundle:Contest');
            // Cheking form variables          
            
            $checkName = $repository->findOneByName( $name );
            if( is_null( $name )
                ||is_null( $description )
                ||is_null( $startDate )
                ||is_null( $endDate )
                ||is_null( $prize )
                ||is_null( $status )
            ){
              $error = true;
              $error_message[] = 'You need to fill all the inputs';
            }
            elseif( $checkName != null ){
              $error = true;
              $error_message[] = 'the name is already in use';

            }
            elseif( $startDate > $endDate  ){
              $error = true;
              $error_message[] = 'the end date need to be after the starting date';

            }
            elseif( $status != 'published' && $status != 'hide' ){
              $error = true;
              $error_message[] = 'Wrong status';

            }
            elseif( strlen( $prize ) < 3 ){
              $error = true;
              $error_message[] = 'Prize needs to be at least 3 characters long';

            }


            // createQueryBuilder() automatically selects FROM AppBundle:Contest
            // and aliases it to "c"
            // get contest that have a ending date after This contest starting date
            $query = $repository->createQueryBuilder('c')
                ->where('c.endDate > :startDate')
                ->setParameter('startDate', $startDate)
                ->orderBy('c.endDate', 'DESC')
                ->getQuery();

            $checkStartDate = $query->getResult();
                        // to get just one result:
            // $product = $query->setMaxResults(1)->getOneOrNullResult();

            if( !empty( $checkStartDate ) ){
              $error = true;
              $lowerDate = $checkStartDate[0]->getEndDate()->format('Y-m-d H:i:s');
              $error_message[] = 'pic a date that is after the ' . $lowerDate; 
            }

            if($status == 'published'){
              $status = 1;
            }else{
              $status = 0;
            }

            if( $error ){
                // actually executes the queries (i.e. the INSERT query)
                $this->addFlash(
                  'error',
                  $error_message[0]
                );
            }else{
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
          }else{
            return $this->redirectToRoute('homepage');
          }

	    }

	    return $this->render('contest/create.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/myadmin/contest/details/{id}", name="contest_details")
     */
    public function detailsAction($id, Request $request){
      if( $this->get('app.user_controller')->checkIfLogAdminAction() ) {

        $contest = $this->getDoctrine()
                      ->getRepository('AppBundle:Contest')
                      ->find($id);

        return $this->render('contest/details.html.twig', array(
            'contest' => $contest
            )
        );
      }else{
            return $this->redirectToRoute('homepage');
      }
    }


    /**
     * @Route("/myadmin/contest/edit/{id}", name="contest_edit")
     */
    public function editAction($id, Request $request){
     if( $this->get('app.user_controller')->checkIfLogAdminAction() ) {
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

          // get vars
          $name = $form['name']->getData();
          $description =  $form['description']->getData();
          $startDate = $form['startDate']->getData();
          $endDate = $form['endDate']->getData();
          $startDate = $form['startDate']->getData();
          $prize = $form['prize']->getData();
          $status = $form['status']->getData();

          // Cheking form variables          
          $repository = $this->getDoctrine()->getRepository('AppBundle:Contest');
          
          $checkName = $repository->findOneByName( $name );
          if( is_null( $name )
              ||is_null( $description )
              ||is_null( $startDate )
              ||is_null( $endDate )
              ||is_null( $prize )
              ||is_null( $status )

          ){
            $error = true;
            $error_message[] = 'You need to fill all the inputs';

          }
          elseif( $checkName != null && $checkName->getId() != $id ){
            $error = true;
            $error_message[] = 'the name is already in use';

          }
          elseif( $startDate > $endDate  ){
            $error = true;
            $error_message[] = 'the end date need to be after the starting date';

          }
          elseif( $status != 'published' && $status != 'hide' ){
            $error = true;
            $error_message[] = 'Wrong status';

          }
          elseif( strlen( $prize ) < 3 ){
            $error = true;
            $error_message[] = 'Prize needs to be at least 3 characters long';

          }


          // createQueryBuilder() automatically selects FROM AppBundle:Contest
          // and aliases it to "c"
          // get contest that have a ending date after This contest starting date
          $query = $repository->createQueryBuilder('c')
              ->where('c.endDate > :startDate')
              ->setParameter('startDate', $startDate)
              ->orderBy('c.endDate', 'DESC')
              ->getQuery();

          $checkStartDate = $query->getResult();
                      // to get just one result:
          // $product = $query->setMaxResults(1)->getOneOrNullResult();

          if( !empty( $checkStartDate ) ){
            $error = true;
            $lowerDate = $checkStartDate[0]->getEndDate()->format('Y-m-d H:i:s');
            $error_message[] = 'pic a date that is after the ' . $lowerDate; 
          }


          if($status == 'published'){
            $status = 1;
          }else{
            $status = 0;
          }

          if( $error ){
              $this->addFlash(
                'error',
                $error_message[0]
              );
          }else{
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
          }
        }
        return $this->render('contest/edit.html.twig', array(
            'contest' => $contest,
            'form' => $form->createView()
            )
        );
          }else{
          return $this->redirectToRoute('homepage');
      }
    }

    /**
     * @Route("/myadmin/contest/delete/{id}", name="contest_delete")
     */
    public function deleteAction($id){
      if( $this->get('app.user_controller')->checkIfLogAdminAction() ) {

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
      }else{
            return $this->redirectToRoute('homepage');
      }
    }
}


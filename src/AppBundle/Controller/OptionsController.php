<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Options;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/* include Form extension */
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class OptionsController extends Controller
{

    /**
     * @Route("/options", name="option_edit")
     */
    public function updateAction(Request $request){
        $options = $this->getDoctrine()
                      ->getRepository('AppBundle:Options')
                      ->findAll();
        var_dump($options);
        // Options form
        $form = $this->createFormBuilder($options)
        ->add('cgu', TextareaType::class, array(
          'attr' => array(
            'class' => 'form-control',
            'style' => 'margin-bottom:15px'
          )))
        ->add('rules', TextareaType::class, array(
          'attr' => array(
            'class' => 'form-control',
            'style' => 'margin-bottom:15px'
          )))
        ->add('update options', SubmitType::class, array(
            'attr' => array(
                'class' =>'btn-primary btn-lg',
                'style' => 'margin-bottom:15px'
            )))
        ->getForm();
        $form->handleRequest($request);

        //handle request add option form
        if($form->isSubmitted() && $form->isValid()){

              $cgu = $form['cgu']->getData();
              die($cgu);
              if($status == 'published'){
                $status = 1;
              }else{
                $status = 0;
              }

              $options->setName($name);
              $options->setDescription($description);
              $options->setStartDate($startDate);
              $options->setStartDate($endDate);
              $options->setPrize($prize);
              $options->setStatus($status);
              $em = $this->getDoctrine()->getManager();
              $options = $em->getRepository('AppBundle:Options')->find($id);
              // tells Doctrine you want to (eventually) save the option (no queries yet)
              $em->persist($options);

              // actually executes the queries (i.e. the INSERT query)
              $em->flush();
              $this->addFlash(
                'notice',
                'Options Updated'
              );
              //return $this->redirectToRoute('option_edit/{id}');

        }
        return $this->render('options/index.html.twig', array(
            //'options' => $options,
            'form' => $form->createView()
            )
        );
    }

}


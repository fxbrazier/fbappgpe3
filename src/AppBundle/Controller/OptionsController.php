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
        $_options = $this->getDoctrine()
                      ->getRepository('AppBundle:Options')
                      ->findAll();
        $options = [];
        foreach ($_options as $option) {
          $options[$option->getOptionName()] = $option->getOptionContent();
        }
        //var_dump($options);
        // Options form
        $form = $this->createFormBuilder($options)
        ->add('first_color_theme', TextType::class, [
          'attr' => [
            //'id' => 'color-picker',
            'style' => 'margin-bottom:15px'
          ]])
        ->add('second_color_theme', TextType::class, [
          'attr' => [
            //'id' => 'color-picker-2',
            'style' => 'margin-bottom:15px',
          ]])
        ->add('cgu', TextareaType::class, [
          'attr' => [
            'class' => 'form-control',
            'style' => 'margin-bottom:15px',
            //'value'=> $options['cgu'];
          ]])
        ->add('rules', TextareaType::class, [
          'attr' => [
            'class' => 'form-control',
            'style' => 'margin-bottom:15px'
          ]])
        ->add('update options', SubmitType::class, [
          'attr' => [
              'class' =>'btn-primary btn-lg',
              'style' => 'margin-bottom:15px'
          ]])
        ->getForm();
        $form->handleRequest($request);

        //handle request add option form
        if($form->isSubmitted() && $form->isValid()){
              //var_dump($form);
              /*$cgu = $form['cgu']->getData();
              $rules = $form['rules']->getData();
              $first_color_theme = $form['first_color_theme']->getData();
              $second_color_theme = $form['second_color_theme']->getData();*/
              
              $_options = [
                'cgu' => $form['cgu']->getData(),
                'rules' => $form['rules']->getData(),
                'first_color_theme' => $form['first_color_theme']->getData(),
                'second_color_theme' => $form['second_color_theme']->getData()
              ];
              var_dump($_options['cgu']);
              foreach ($_options as $name => $content) {
                $options->setOptionName($name);
                $options->setOptionContent($content);
                $em = $this->getDoctrine()->getManager();
                $options = $em->getRepository('AppBundle:Options')->findOneBy( ['option_name' => $name ] );
                var_dump($options);
                // tells Doctrine you want to (eventually) save the option (no queries yet)
              die();
                $em->persist($options);

                // actually executes the queries (i.e. the INSERT query)
                $em->flush();
              }

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


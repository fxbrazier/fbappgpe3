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

class PictureController extends Controller
{
    /**
     * @Route("/dashboard", name="picture_list")
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
     * @Route("/picture/details/{id}", name="picture_details")
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
     * @Route("/picture/delete/{id}", name="picture_delete")
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

}


<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Picture;
use AppBundle\Entity\Contest;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $contest = $this->getDoctrine()
                      ->getRepository('AppBundle:Contest')
                      ->findCurrentContest(date("Y-m-d H:i:s"));

        $id = $contest[0]->getId();
        //var_dump($contest);die;

        $pictures = $this->getDoctrine()
                      ->getRepository('AppBundle:Picture')
                      ->findBy(array('id_contest' => $id));
        //var_dump($pictures);die;

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => $dir = $this->get('kernel')->getRootDir() . '/../web/images/',
            'contest' => $contest,
            'pictures' => $pictures
        ]);
    }



  /**
   * @Route("/myadmin", name="picture_list")
   */
  public function listAction(){
    
      $em = $this->getDoctrine()->getManager(); //we call Doctrine

      $query = $em->createQuery( //create the query
          'SELECT COUNT(c)
          FROM AppBundle:Contest c'
      );


      /*
        $contest = $this->getDoctrine()
                      ->getRepository('AppBundle:Contest')
                      ->findCurrentContest(date("Y-m-d H:i:s"));

        $id = $contest[0]->getId();

        */
       
      $nbContest = $query->getResult()[0][1]; //get result query

      return $this->render('default/dashboard.html.twig', array(
          'nbContest' => $nbContest,
          ));
  }
}

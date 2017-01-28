<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/* include Form extension */
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserController extends Controller
{

    /**
    * @Method({"GET"})
    * @Route("/login", name="login")
    * @Template()
    */
    public function loginAction(Request $request)
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        $params = array(
            "last_username" => $session->get(SecurityContext::LAST_USERNAME),
            "error"         => $error,
        );

        return $params;
    }

    /**
    * @Method({"POST"})
    * @Route("/login_check", name="login_check")
    */
    public function check()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

    /**
    * @Method({"GET"})
    * @Route("/logout", name="logout")
    */
    public function logout()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }
}
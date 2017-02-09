<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/* include Form extension */
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Facebook;
use Facebook\FacebookRequest;

class UserController extends Controller
{

    /**
    * @Route("/login", name="login")
    */
    public function loginAction(Request $request)
    {
        //session_start();
        $fb = new Facebook\Facebook(['app_id' => '', // Replace {app-id} with your app id
            'app_secret' => '',
            'default_graph_version' => 'v2.5']);
        // var_dump($fb);
        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email', 'user_photos']; // Optional permissions
        $loginUrl = $helper->getLoginUrl('http://localhost/fbapp/fbappgpe3/web/app_dev.php/connect', $permissions);
        return $this->redirect($loginUrl);
        //$this->connect($loginUrl);

        /*$request = $this->getRequest();
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

        return $params;*/
    }

    /**
    * @Route("/login_check", name="login_check")
    */
    public function check()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

    /**
    * @Route("/logout", name="logout")
    */
    public function logout()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }
}
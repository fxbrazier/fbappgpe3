<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

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
        if (!session_id()) {
            session_start();
        }

        $fb = new Facebook\Facebook(['app_id' => '', // Replace {app-id} with your app id
            'app_secret' => '',
            'default_graph_version' => 'v2.5']);
        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email', 'user_likes', 'user_photos']; // Optional permissions
        $loginUrl = $helper->getLoginUrl('http://localhost/fbappgpe3/web/app_dev.php/loginCallback', $permissions);

        return $this->render('user/login.html.twig', array(
            'url' => $loginUrl
            ));
    }

    /**
     * @Route("/loginCallback", name="login_callback")
     */
    public function loginCallbackAction($redirectUrl)
    {
        if (!session_id()) {
            session_start();
        }

        $fb = new Facebook\Facebook([
          'app_id' => '',
          'app_secret' => '',
          'default_graph_version' => 'v2.5',
        ]); 

        $helper = $fb->getRedirectLoginHelper();  

        try {
          $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
          // When Graph returns an error
          echo 'Graph returned an error: ' . $e->getMessage();
          exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
          // When validation fails or other local issues
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
          var_dump($helper->getError());
          exit;
        }   

        if(isset($accessToken)){
            $_SESSION["ACCESS_TOKEN"] = (string) $accessToken;
        }else{
            unset($_SESSION["ACCESS_TOKEN"]);
        }

        return $this->redirectToRoute('homepage');
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
       unset($_SESSION["ACCESS_TOKEN"]);
       return $this->redirectToRoute('homepage');
    }
}
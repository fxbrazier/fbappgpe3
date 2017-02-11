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
    public function loginAction($msg)
    {
        if (!session_id()) {
            session_start();
        }

        $fb = new Facebook\Facebook(['app_id' => '1780532462163734', // Replace {app-id} with your app id
            'app_secret' => '07c750201b982bbb3af84ab97d556099',
            'default_graph_version' => 'v2.5']);
        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email', 'user_likes', 'user_photos']; // Optional permissions
        $loginUrl = $helper->getLoginUrl('http://localhost/fbappgpe3/web/app_dev.php/loginCallback', $permissions);

        return $this->render('user/login.html.twig', array(
            'url' => $loginUrl,
            'msg' => $msg
            ));
    }

    /**
     * @Route("/loginCallback", name="login_callback")
     */
    public function loginCallbackAction()
    {
        if (!session_id()) {
            session_start();
        }

        $fb = new Facebook\Facebook([
          'app_id' => '1780532462163734',
          'app_secret' => '07c750201b982bbb3af84ab97d556099',
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
    public function checkIfLogAction()
    {
        if (!session_id()) {
            session_start();
        }
        var_dump($_SESSION);

        if (!isset($_SESSION["ACCESS_TOKEN"])) {
            return false;
        }else{
            return true;
        }
    }

    /**
    * @Route("/login_admin_check", name="login_admin_check")
    */
    public function checkIfLogAdminAction()
    {
        if (!session_id()) {
            session_start();
        }

        if (!isset($_SESSION["ACCESS_TOKEN"])) {
            return $this->redirectToRoute('login', array('msg' => "Vous n'êtes pas autoriser à accéder à cette section"));
        }

        return true;
    }

    /**
    * @Route("/logout", name="logout")
    */
    public function logoutAction()
    {
        if (!session_id()) {
            session_start();
        }

        unset($_SESSION["ACCESS_TOKEN"]);
        //var_dump($_SESSION);die;
        return $this->redirectToRoute('homepage');
    }
}
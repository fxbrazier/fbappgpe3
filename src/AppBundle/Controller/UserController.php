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
        //session_start();
        $fb = new Facebook\Facebook(['app_id' => '', // Replace {app-id} with your app id
            'app_secret' => '',
            'default_graph_version' => 'v2.5']);
        // var_dump($fb);
        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email']; // Optional permissions
        $loginUrl = $helper->getLoginUrl('http://localhost/fbappgpe3/web/app_dev.php/loginCallback', $permissions);
        //return $this->redirectToRoute('login_callback');
    }

    /**
     * @Route("/loginCallback", name="login_callback")
     */
    public function loginCallbackAction($redirectUrl)
    {
        $session = new Session();
        $session->start();

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
          exit;
        }   

        if(isset($accessToken)){
            $session->set('access_token', (string) $accessToken);
        }else{
            $session->remove('access_token');
        }
    }

    /**
     * @Route("/connect", name="connect")
     */
    public function connectAction($redirectUrl)
    {
        $session = new Session();
        $session->start();

        $fb = new Facebook\Facebook(['app_id' => '', // Replace {app-id} with your app id
            'app_secret' => '',
            'default_graph_version' => 'v2.5']);
        //$fb->setDefaultApplication($this->appId, $this->appSecret);
        $helper = $fb->getRedirectLoginHelper($redirectUrl);
        $_SESSION['FBRLH_state']=$_GET['state'];
        //si la var session existe et que l'on un un fb token en session
        if (isset($_SESSION) && isset($_SESSION['FBRLH_state'])) {
            //on récupère la session active
            $this->session = "tot";
        } else {
            //on récupère le token de connexion
            $this->session = $helper->getSessionFromRedirect();
        }
        //si on a une session
        if ($this->session) {
            try {
                //génération du token
                $accessToken = $helper->getAccessToken();
                //si on a bien notre token de connexion on peut commencer à faire des requetes avec la classe facebookrequest
                $request = new FacebookRequest($this->session, 'GET', '/me');
                //on recupère un objet graph user
                $response = $request->execute()->getGraphObject('Facebook\GraphUser');
                //var_dump($response);
                //facebook id
                $facebookId = $response->getId();
                //image profil du user
                $imgProfile = '<img src="//graph.facebook.com/' . $facebookId . '/picture">';
                //si le user a refuser la permission de recupération du mail
                if ($response->getEmail() === null) {
                    throw new Exception('l\'email n\'est pas disponible');
                }
                return $response;
            } catch (Exception $e) {
                unset($_SESSION['FBRLH_state']);
                return $helper->getReRequestUrl(['email']);
            }
        } else {
            return $helper->getReRequestUrl(['email']);
        }
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
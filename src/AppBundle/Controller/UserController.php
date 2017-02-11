<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

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
        $permissions = ['email', 'user_photos']; // Optional permissions
        $loginUrl = $helper->getLoginUrl('http://localhost/fbappgpe3/web/app_dev.php/loginCallback', $permissions);

        return $this->render('user/login.html.twig', array(
            'url' => $loginUrl
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
     * @Route("/getInfosFb", name="user_infos_fb")
     */
    public function getInfosFbAction()
    {
        if (!session_id()) {
            session_start();
        }

        $fb = new Facebook\Facebook([
          'app_id' => '1780532462163734',
          'app_secret' => '07c750201b982bbb3af84ab97d556099',
          'default_graph_version' => 'v2.5',
        ]); 

        $fb->setDefaultAccessToken($_SESSION["ACCESS_TOKEN"]);

        try {

            $response = $fb->get('/me?fields=id,first_name,last_name,email,name');
            $user = $response->getGraphUser();

        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        return $user;
    }

     /**
     * @Route("/createOrUpdate", name="user_create_or_update")
     */
    public function createOrUpdateAction()
    {
        if (!session_id()) {
            session_start();
        }

        $fb = new Facebook\Facebook([
          'app_id' => '1780532462163734',
          'app_secret' => '07c750201b982bbb3af84ab97d556099',
          'default_graph_version' => 'v2.5',
        ]); 

        $fb->setDefaultAccessToken($_SESSION["ACCESS_TOKEN"]);

        try {

            $response = $fb->get('/me?fields=id,first_name,last_name,email,name');
            $user = $response->getGraphUser();

        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        return $user;
    }

    /**
     * @Route("/getAlbumsFb", name="get_albums_fb")
     */
    public function getAlbumsFbAction()
    {
        if (!session_id()) {
            session_start();
        }

        $fb = new Facebook\Facebook([
          'app_id' => '1780532462163734',
          'app_secret' => '07c750201b982bbb3af84ab97d556099',
          'default_graph_version' => 'v2.5',
        ]); 

        $fb->setDefaultAccessToken($_SESSION["ACCESS_TOKEN"]);

                try {

                  $response = $fb->get('/me?fields=albums{name,photos{name,source}}');
                  $albums = $response->getDecodedBody();
                  //$name = $response->getName();
                  //var_dump($name);die;
                  var_dump($albums);die;

                  /*foreach ($albums["albums"]["data"] as $album) {
                    echo "<h1>".$album["name"]."</h1>";
                    if (isset($album["photos"])) {
                      foreach ($album["photos"]["data"] as $photo) {
                        echo "<img width='100px' src='".$photo["source"]."'>";
                      }
                    }
                  }*/

                } catch(Facebook\Exceptions\FacebookResponseException $e) {
                  // When Graph returns an error
                  echo 'Graph returned an error: ' . $e->getMessage();
                  exit;
                } catch(Facebook\Exceptions\FacebookSDKException $e) {
                  // When validation fails or other local issues
                  echo 'Facebook SDK returned an error: ' . $e->getMessage();
                  exit;
                }

                return $albums;
    }

    /**
    * @Route("/login_check", name="login_check")
    */
    public function checkIfLogAction()
    {
        if (!session_id()) {
            session_start();
        }

        if (isset($_SESSION["ACCESS_TOKEN"])) {
            return true;
        }else{
            return false;
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

        if ($this->checkIfLogAction()) {
            
        }else{
            return false;
        }
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
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

        $fb = $this->getFacebook();
        $helper = $fb->getRedirectLoginHelper();
        $permissions = ['email', 'user_photos', 'publish_actions']; // Optional permissions
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
        $fb = $this->getFacebook();

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
            $_SESSION["ACCESS_TOKEN"] = (string) $accessToken;
            $user = $this->getInfosFbAction();

            //on vérifie que l'utilisateur existe déja en base
            $id_fb = $this->getDoctrine()
                      ->getRepository('AppBundle:User')
                      ->findBy(array('id_fb' => $user['id']));

            //si il existe pas, on le créé
            if (!$id_fb) {
                $this->createUserAction($user);
            }
            
        }else{
            unset($_SESSION["ACCESS_TOKEN"]);
            unset($_SESSION['user_id']);
            unset($_SESSION['user_name']);
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

        if (!empty($_SESSION['ACCESS_TOKEN'])){
            $fb = $this->getFacebook();

            $fb->setDefaultAccessToken($_SESSION["ACCESS_TOKEN"]);

            try {
                if(!empty($_SESSION['rerequest'])){
                    unset($_SESSION['rerequest']);
                }
                $response = $fb->get('/me?fields=id,first_name,last_name,email');
                $user = $response->getDecodedBody();
                $_SESSION['user_id']=$user['id'];
                $_SESSION['user_name']=$user['first_name'].' '.$user['last_name'];
                return $user;

            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                // When validation fails or other local issues
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
        }else{
            return $this->redirectToRoute('login');
        }
    }

    /**
     * @Route("/getAlbumsFb", name="get_albums_fb")
     */
    public function getAlbumsFbAction()
    {
        if (!session_id()) {
            session_start();
        }
        if (!empty($_SESSION['ACCESS_TOKEN'])){
            if (!empty($_SESSION['road'])) {
                unset($_SESSION['road']);
            }

            $fb = $this->getFacebook();

            $fb->setDefaultAccessToken($_SESSION["ACCESS_TOKEN"]);

            try {
                $permissionMiss = !in_array('user_photos', $this->getPermissionsGrantedAction());
                if ($permissionMiss && empty($_SESSION['rerequest'])){
                    $_SESSION['road'] = 'get_albums_fb';
                    $_SESSION['rerequest'] = true;
                    return $this->rerequestDeclinedPermissionsAction(['user_photos']);

                }elseif($permissionMiss && !empty($_SESSION['rerequest'])){
                    $error = "Permissions are missing :\n";
                    $error.="- user_photos";
                    return $error;
                }
                if(!empty($_SESSION['rerequest'])){
                    unset($_SESSION['rerequest']);
                }
                $response = $fb->get('/me?fields=albums{name,photos{name,source}}');
                $albums = $response->getDecodedBody();

                return $albums;

            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                // When validation fails or other local issues
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
        }else{
            return $this->redirectToRoute('login');
        }
    }

    /**
     * @Route("/createUser", name="user_create")
     */
    public function createUserAction($user)
    {
        $new_user = new User();
        $new_user->setFirstname($user['first_name']);
        $new_user->setLastname($user['last_name']);
        $new_user->setEmail($user['email']);
        $new_user->setBirthday('');
        $new_user->setGender('');
        $new_user->setTel('');
        $new_user->setCity('');
        $new_user->setIsDeleted('');
        $new_user->setIsCreated(date("Y-m-d H:i:s"));
        $new_user->setStatus('');
        $new_user->setIdFb($user['id']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($new_user); 

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
    }

    /**
     * @Route("/post_feed", name="post_feed")
     */
    public function postFeedFbAction($message, $caption, $photo_id)
    {
        if (!session_id()) {
            session_start();
        }
        if (!empty($_SESSION['road'])) {
            unset($_SESSION['road']);
        }
        if (!empty($_SESSION['ACCESS_TOKEN'])){
            $fb = $this->getFacebook();

            $fb->setDefaultAccessToken($_SESSION["ACCESS_TOKEN"]);

            try {
                $permissionGrant = $this->getPermissionsGrantedAction();
                $permissionRequired = ['user_photos', 'publish_actions'];
                $permissionMissing = array_diff($permissionRequired, $permissionGrant);
                if (!empty($permissionMissing) && empty($_SESSION['rerequest'])){
                    $_SESSION['road'] = 'post_feed';
                    $_SESSION['rerequest'] = true;
                    return $this->rerequestDeclinedPermissionsAction($permissionMissing);
                }elseif(!empty($permissionMissing) && !empty($_SESSION['rerequest'])){
                    $error = "Permissions are missing :\n";
                    foreach ($permissionMissing as $miss){
                        $error.="- ".$miss."\n";
                    }
                    return $error;
                }
                if(!empty($_SESSION['rerequest'])){
                    unset($_SESSION['rerequest']);
                }
                //$message = 'a message';
                //$caption = "I choose that picture for the contest !";
                //$photo_id = '10210997875202347';

                $data = [
                    'message' => $message,
                    'caption' => $caption,
                    //'link' => redirect to app,
                    'object_attachment' => $photo_id
                ];

                /* handle the result */
                $response = $fb->post('/me/feed', $data);
                $postFeed = $response->getDecodedBody();
                // id post return : $postFeed['id']
                return true;

            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                // When validation fails or other local issues
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
        }else{
            return $this->redirectToRoute('login');
        }
    }

    /**
    * @Route("/login_check", name="login_check")
    */
    public function checkIfLogAction()
    {
        if (!session_id()) {
            session_start();
        }

        if (isset($_SESSION["ACCESS_TOKEN"]) || !empty($_SESSION['ACCESS_TOKEN'])) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * @Route("/get_permissions", name="get_permissions")
     */
    public function getPermissionsGrantedAction()
    {
        if (!session_id()) {
            session_start();
        }
        if(!empty($_SESSION['ACCESS_TOKEN'])){
            $permissionsGranted = [];
            $fb = $this->getFacebook();
            $fb->setDefaultAccessToken($_SESSION["ACCESS_TOKEN"]);
            $response = $fb->get('/'.$_SESSION["user_id"].'/permissions');
            $permission = $response->getDecodedBody();
            foreach ($permission['data'] as $perm){
                if($perm['status'] == 'granted'){
                    array_push($permissionsGranted, $perm['permission']);
                }
            }
            return $permissionsGranted;
        }else{
            return $this->redirectToRoute('login');
        }

    }

    /**
     * @Route("/rerequest_declined_permissions", name="rerequest_declined_permissions")
     */
    public function rerequestDeclinedPermissionsAction($permissions = [])
    {
        if (!session_id()) {
            session_start();
        }
        $permissionsGranted = $this->getPermissionsGrantedAction();
        $permissionsReRequested = array_diff($permissions, $permissionsGranted);
        if(!empty($permissionsReRequested)){
            return $this->permissionReRequestAction($permissionsReRequested);
        }else{
            return true;
        }

    }

    /**
     * @Route("/permissions_rerequest", name="permissions_rerequest")
     */
    public function permissionReRequestAction($permissions)
    {
        if (!session_id()) {
            session_start();
        }
        $fb = $this->getFacebook();
        $helper = $fb->getRedirectLoginHelper();
        $loginUrl = $helper->getReRequestUrl('http://localhost/fbappgpe3/web/app_dev.php/rerequestCallback', $permissions);
        return $this->redirect($loginUrl);
    }

    /**
     * @Route("/rerequestCallback", name="permissions_rerequest_callback")
     */
    public function rerequestCallbackAction()
    {
        if (!session_id()) {
            session_start();
        }

        $fb = $this->getFacebook();

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
            $_SESSION["ACCESS_TOKEN"] = (string) $accessToken;
            $fb->setDefaultAccessToken($_SESSION["ACCESS_TOKEN"]);
            $response = $fb->get('/me');
            $user = $response->getDecodedBody();
            $_SESSION['user_id']=$user['id'];
            $_SESSION['user_name']=$user['first_name'].' '.$user['last_name'];
        }else{
            unset($_SESSION["ACCESS_TOKEN"]);
            unset($_SESSION['user_id']);
            unset($_SESSION['user_name']);
        }
        if(!empty($_SESSION['road'])){
            return $this->redirectToRoute($_SESSION['road']);
        }else{
            return $this->redirectToRoute('homepage');
        }
    }

    /**
    * @Route("/login_admin_check", name="login_admin_check")
    */
    /**
     * @Route("/login_admin_check", name="login_admin_check")
     */
    public function checkIfLogAdminAction()
    {
        if (!session_id()) {
            session_start();
        }
        if (!empty($_SESSION['ACCESS_TOKEN'])){
            if (!empty($_SESSION['road'])) {
                unset($_SESSION['road']);
            }

            $fb = $this->getFacebook();

            $fb->setDefaultAccessToken($_SESSION["ACCESS_TOKEN"]);

            try {

                if(!empty($_SESSION['rerequest'])){
                    unset($_SESSION['rerequest']);
                }

                $response = $fb->get('/'.$this->app_id.'/roles/', "".$this->app_id."|".$this->app_secret."");
                $admin = $response->getDecodedBody();
                foreach ($admin['data'] as $adm){
                    if($adm['app_id'] == $this->app_id && $adm['user'] == $_SESSION['user_id'] && $adm['role'] == 'administrators'){
                        return true;
                    }
                }
                return false;

            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                // When validation fails or other local issues
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
        }else{
            return $this->redirectToRoute('login');
        }
    }

    /**
     * @Route("/post_picture", name="post_picture")
     */
    public function postPictureFbAction()
    {
        if (!session_id()) {
            session_start();
        }
        if(!empty($_SESSION['ACCESS_TOKEN'])){
            if (!empty($_SESSION['road'])) {
                unset($_SESSION['road']);
            }

            $fb = $this->getFacebook();

            $fb->setDefaultAccessToken($_SESSION["ACCESS_TOKEN"]);

            try {
                $permissionGrant = $this->getPermissionsGrantedAction();
                $permissionRequired = ['publish_actions'];
                $permissionMissing = array_diff($permissionRequired, $permissionGrant);
                if (!empty($permissionMissing) && empty($_SESSION['rerequest'])){
                    $_SESSION['road'] = 'post_picture';
                    $_SESSION['rerequest'] = true;
                    return $this->rerequestDeclinedPermissionsAction($permissionMissing);
                }elseif(!empty($permissionMissing) && !empty($_SESSION['rerequest'])){
                    $error = "Permissions are missing :\n";
                    foreach ($permissionMissing as $miss){
                        $error.="- ".$miss."\n";
                    }
                    return $error;
                }
                if(!empty($_SESSION['rerequest'])){
                    unset($_SESSION['rerequest']);
                }
                if (!empty($_FILES)){
                    $message = 'a message';

                    $data = [
                        'message' => $message,
                        'source' => $fb->fileToUpload($_FILES['avatar']['tmp_name']),
                    ];

                    /* handle the result */

                    $response = $fb->post('/me/photos', $data);
                    $post_id = $response->getDecodedBody();

                    return $post_id['id'];
                }else{
                    return "Image is missing !";
                }

            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                // When Graph returns an error
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                // When validation fails or other local issues
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }

        }else{
            return $this->redirectToRoute('login');
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
        unset($_SESSION["user_id"]);
        unset($_SESSION["user_name"]);

        return $this->redirectToRoute('homepage');
    }
}
<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Picture;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Facebook;
use Facebook\FacebookRequest;

class DefaultController extends Controller
{
    protected $session = null;

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // Check session variable
        if ($this->container->get('session')->isStarted() && ($this->get('session')->get('loginUserId') != null)) {

            return $this->render('default/index.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
            ]);

        } else {

            return $this->loginAction($request);

        }
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        //session_start();
        $fb = new Facebook\Facebook(['app_id' => '206726503093196', // Replace {app-id} with your app id
            'app_secret' => '1c548a48073d86ac09379302ee2ab8d4',
            'default_graph_version' => 'v5.4']);
        // var_dump($fb);

        $helper = $fb->getRedirectLoginHelper();

        $permissions = ['email', 'user_photos']; // Optional permissions
        $loginUrl = $helper->getLoginUrl('http://localhost/fbapp/fbappgpe3/web/app_dev.php/connect', $permissions);

        return $this->redirect($loginUrl);
        //$this->connect($loginUrl);

    }

    /**
     * @Route("/connect", name="connect")
     */
    public function connectAction($redirectUrl)
    {
        $fb = new Facebook\Facebook(['app_id' => '206726503093196', // Replace {app-id} with your app id
            'app_secret' => '1c548a48073d86ac09379302ee2ab8d4',
            'default_graph_version' => 'v5.4']);
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
     * @Route("/accueil", name="home")
     */
    public function accueilAction(Request $request)
    {

        $fb = new Facebook\Facebook(['app_id' => '206726503093196', // Replace {app-id} with your app id
            'app_secret' => '1c548a48073d86ac09379302ee2ab8d4',
            'default_graph_version' => 'v5.4']);


        $helper = $fb->getRedirectLoginHelper();
        $_SESSION['FBRLH_state']=$_GET['state'];
        var_dump($_SESSION);
        var_dump($_GET['state']);

        try {
            $accessToken = $helper->getAccessToken();
        } catch (Facebook\Exceptions\FacebookResponseException $e) {
// When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
// When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        if (!isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
            exit;
        }
// Logged i
        echo '<h3>Access Token</h3>';
        var_dump($accessToken->getValue());
// The OAuth 2.0 client handler helps us manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();
// Get the access token metadata from /debug_token
        $tokenMetadata = $oAuth2Client->debugToken($accessToken);
        echo '<h3>Metadata</h3>';
        var_dump($tokenMetadata);
// Validation (these will throw FacebookSDKException's when they fail)

// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();
        $contests = $this->getDoctrine()
            ->getRepository('AppBundle:Contest')
            ->findAll();

        return $this->render('contest/index.html.twig', array(
            'contests' => $contests,
        ));
    }


}

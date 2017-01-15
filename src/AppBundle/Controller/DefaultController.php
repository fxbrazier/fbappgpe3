<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Picture;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Facebook;

class DefaultController extends Controller
{
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
        $fb = new Facebook\Facebook(['app_id' => '206726503093196', // Replace {app-id} with your app id
            'app_secret' => '1c548a48073d86ac09379302ee2ab8d4',
            'default_graph_version' => 'v5.4']);
        var_dump($fb);

        $helper = $fb->getRedirectLoginHelper();
        var_dump($helper);
        $permissions = ['email']; // Optional permissions
        $loginUrl = $helper->getLoginUrl('http://localhost/fbapp/fbappgpe3/web/home.php', $permissions);
        var_dump($loginUrl);
        //return $this->redirectToRoute($loginUrl, [], 301);
        return $this->redirect($loginUrl);

    }

    /**
     * @Route("/home", name="homepage")
     */
    public function homeAction(Request $request)
    {
        $fb = new Facebook([/* . . . */]);

        $helper = $fb->getCanvasHelper();
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

        if (isset($accessToken)) {
            var_dump($accessToken);
        } else {
            var_dump("morron");
        }

        return $this->render('contest/create.html.twig', []);
    }


}

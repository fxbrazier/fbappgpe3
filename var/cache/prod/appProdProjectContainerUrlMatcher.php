<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/contest')) {
            // contest_list
            if ($pathinfo === '/contest') {
                return array (  '_controller' => 'AppBundle\\Controller\\ContestController::listAction',  '_route' => 'contest_list',);
            }

            // contest_create
            if ($pathinfo === '/contest/create') {
                return array (  '_controller' => 'AppBundle\\Controller\\ContestController::createAction',  '_route' => 'contest_create',);
            }

            // contest_edit
            if ($pathinfo === '/contest/edit/{$id}') {
                return array (  '_controller' => 'AppBundle\\Controller\\ContestController::editAction',  '_route' => 'contest_edit',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

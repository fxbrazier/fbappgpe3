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

            // contest_details
            if (0 === strpos($pathinfo, '/contest/details') && preg_match('#^/contest/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contest_details')), array (  '_controller' => 'AppBundle\\Controller\\ContestController::detailsAction',));
            }

            // contest_edit
            if (0 === strpos($pathinfo, '/contest/edit') && preg_match('#^/contest/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contest_edit')), array (  '_controller' => 'AppBundle\\Controller\\ContestController::editAction',));
            }

            // contest_delete
            if (0 === strpos($pathinfo, '/contest/delete') && preg_match('#^/contest/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contest_delete')), array (  '_controller' => 'AppBundle\\Controller\\ContestController::deleteAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // option_edit
        if ($pathinfo === '/options') {
            return array (  '_controller' => 'AppBundle\\Controller\\OptionsController::updateAction',  '_route' => 'option_edit',);
        }

        // picture_list
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'AppBundle\\Controller\\PictureController::listAction',  '_route' => 'picture_list',);
        }

        if (0 === strpos($pathinfo, '/picture/de')) {
            // picture_details
            if (0 === strpos($pathinfo, '/picture/details') && preg_match('#^/picture/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'picture_details')), array (  '_controller' => 'AppBundle\\Controller\\PictureController::detailsAction',));
            }

            // picture_delete
            if (0 === strpos($pathinfo, '/picture/delete') && preg_match('#^/picture/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'picture_delete')), array (  '_controller' => 'AppBundle\\Controller\\PictureController::deleteAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

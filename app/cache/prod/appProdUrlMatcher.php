<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // baker_recipe_about
        if (rtrim($pathinfo, '/') === '/about') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'baker_recipe_about');
            }

            return array (  '_controller' => 'Baker\\RecipeBundle\\Controller\\PageController::aboutAction',  '_route' => 'baker_recipe_about',);
        }

        if (0 === strpos($pathinfo, '/recipe')) {
            // baker_recipe_list
            if ($pathinfo === '/recipes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_baker_recipe_list;
                }

                return array (  '_controller' => 'Baker\\RecipeBundle\\Controller\\RecipeController::listAction',  '_route' => 'baker_recipe_list',);
            }
            not_baker_recipe_list:

            // baker_recipe_read
            if (preg_match('#^/recipe/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_baker_recipe_read;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'baker_recipe_read')), array (  '_controller' => 'Baker\\RecipeBundle\\Controller\\RecipeController::readAction',));
            }
            not_baker_recipe_read:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

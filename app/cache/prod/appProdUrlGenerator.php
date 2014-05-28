<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'baker_recipe_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Baker\\RecipeBundle\\Controller\\PageController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about/',    ),  ),  4 =>   array (  ),),
        'baker_recipe_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Baker\\RecipeBundle\\Controller\\RecipeController::listAction',  ),  2 =>   array (    '_method' => 'GET',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recipes',    ),  ),  4 =>   array (  ),),
        'baker_recipe_read' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Baker\\RecipeBundle\\Controller\\RecipeController::readAction',  ),  2 =>   array (    '_method' => 'GET',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/recipe',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}

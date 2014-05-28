<?php

/* ::base.html.twig */
class __TwigTemplate_108a362243190d0f587393b055c37b1d075a5393a8d382b7d8a623774221e278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bmatznerfoundation/css/foundation.min.css"), "html", null, true);
        echo "\" media=\"screen, projection\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" media=\"screen, projection\" rel=\"stylesheet\"/>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

    <nav class=\"top-bar\" data-topbar>
        <ul class=\"title-area\">
            <li class=\"name\">
                <h1><a href=\"#\">The CookBook</a></h1>
            </li>

            <li class=\"toggle-topbar menu-icon\"><a href=\"#\"><span>Menu</span></a></li>
        </ul>

        <section class=\"top-bar-section\">
            <!-- Right Nav Section -->
            <ul class=\"right\">
                <li class=\"has-dropdown\">
                    <a href=\"#\">More Links</a>
                    <ul class=\"dropdown\">
                        <li><a href=\"http://www.markwylde.co.uk\">markwylde.co.uk</a></li>
                        <li><a href=\"https://github.com/markwylde/\">github.com/markwylde</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Left Nav Section -->
            <ul class=\"left\">
                <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("baker_recipe_about");
        echo "\">About</a></li>
                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("baker_recipe_list");
        echo "\">All Recipes</a></li>
                <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("baker_recipe_create");
        echo "\">Submit Recipe</a></li>
            </ul>
        </section>
    </nav>

        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bmatznerjquery/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bmatznerfoundation/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
        <script>\$(document).foundation();</script>
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        ";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 50,  126 => 45,  122 => 10,  119 => 9,  113 => 5,  107 => 51,  105 => 50,  100 => 48,  96 => 47,  93 => 46,  91 => 45,  83 => 40,  79 => 39,  75 => 38,  44 => 11,  42 => 9,  38 => 8,  34 => 7,  29 => 5,  23 => 1,);
    }
}

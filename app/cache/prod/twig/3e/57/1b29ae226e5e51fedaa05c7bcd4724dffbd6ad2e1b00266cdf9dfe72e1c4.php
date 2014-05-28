<?php

/* ::base.html.twig */
class __TwigTemplate_3e571b29ae226e5e51fedaa05c7bcd4724dffbd6ad2e1b00266cdf9dfe72e1c4 extends Twig_Template
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
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bmatznerfoundation/css/foundation.min.css"), "html", null, true);
        echo "\" media=\"screen, projection\" rel=\"stylesheet\"/>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

    <nav class=\"top-bar\" data-topbar>
        <ul class=\"title-area\">
            <li class=\"name\">
                <h1><a href=\"#\">My Site</a></h1>
            </li>
            <!-- Remove the class \"menu-icon\" to get rid of menu icon. Take out \"Menu\" to just have icon alone -->
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
        // line 36
        echo $this->env->getExtension('routing')->getPath("baker_recipe_about");
        echo "\">About</a></li>
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("baker_recipe_list");
        echo "\">All Recipes</a></li>
                <li><a href=\"#\">Submit Recipe</a></li>
            </ul>
        </section>
    </nav>

        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bmatznerjquery/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bmatznerfoundation/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
        <script>\$(document).foundation();</script>
        ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        ";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
    }

    // line 48
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
        return array (  123 => 48,  118 => 43,  114 => 8,  111 => 7,  105 => 5,  99 => 49,  97 => 48,  92 => 46,  88 => 45,  85 => 44,  83 => 43,  74 => 37,  70 => 36,  39 => 9,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}

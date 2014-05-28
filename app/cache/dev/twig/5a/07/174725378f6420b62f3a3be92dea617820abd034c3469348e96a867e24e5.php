<?php

/* ::base.html.twig */
class __TwigTemplate_5a07174725378f6420b62f3a3be92dea617820abd034c3469348e96a867e24e5 extends Twig_Template
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
        return array (  126 => 45,  113 => 5,  100 => 48,  34 => 7,  23 => 1,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 51,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 9,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 38,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 46,  88 => 6,  78 => 21,  46 => 12,  27 => 5,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 50,  91 => 45,  62 => 23,  49 => 19,  24 => 4,  25 => 4,  19 => 1,  79 => 39,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 8,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 50,  123 => 41,  120 => 40,  115 => 39,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 47,  83 => 40,  74 => 22,  66 => 20,  55 => 14,  52 => 15,  50 => 14,  43 => 9,  41 => 8,  35 => 5,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 10,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 24,  73 => 19,  64 => 17,  60 => 18,  57 => 17,  54 => 10,  51 => 12,  48 => 13,  45 => 17,  42 => 9,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}

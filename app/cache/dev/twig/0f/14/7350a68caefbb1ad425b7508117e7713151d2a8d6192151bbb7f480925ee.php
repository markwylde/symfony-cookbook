<?php

/* BakerRecipeBundle:Recipe:read.html.twig */
class __TwigTemplate_0f147350a68caefbb1ad425b7508117e7713151d2a8d6192151bbb7f480925ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "The CookBook - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "title"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <section role=\"main\" class=\"scroll-container\">
    <div class=\"row\">
        <div class=\"large-3 medium-4 columns\">

            <div class='sidebar'>
                <strong>Other recipes</strong>
                <ul class='side-nav'>
                    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipesList"]) ? $context["recipesList"] : $this->getContext($context, "recipesList")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 15
            echo "                        <li><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("baker_recipe_read", array("id" => $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "id"))), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "title"), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </ul>
            </div>
        </div>

        <div class='large-9 medium-8 columns'>

            <article class=\"recipe\">
                <header>
                    <h2>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "title"), "html", null, true);
        echo "</h2>
                    <div class=\"date\">This post was created on <time datetime=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "created"), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "created"), "l, F j, Y"), "html", null, true);
        echo "</time></div>
                </header>
                ";
        // line 28
        if ($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "path")) {
            // line 29
            echo "                <p>
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/documents/", 1 => $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "path")))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "title"), "html", null, true);
            echo " image not found\" class=\"large\" />
                </p>
                ";
        }
        // line 33
        echo "                <div>
                    <p>";
        // line 34
        echo strip_tags($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "content"), "<strong><b><u><i><a><p><h2><h3><h4><ul><li>");
        echo "</p>
                </div>
            </article>

        </div>
    </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "BakerRecipeBundle:Recipe:read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  84 => 30,  126 => 45,  113 => 5,  100 => 48,  34 => 7,  23 => 1,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 51,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 9,  102 => 32,  71 => 27,  67 => 26,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 28,  75 => 38,  68 => 14,  56 => 9,  87 => 29,  21 => 2,  26 => 6,  93 => 33,  88 => 6,  78 => 26,  46 => 9,  27 => 5,  44 => 11,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 50,  91 => 45,  62 => 23,  49 => 14,  24 => 4,  25 => 4,  19 => 1,  79 => 39,  72 => 16,  69 => 25,  47 => 9,  40 => 7,  37 => 8,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 50,  123 => 41,  120 => 40,  115 => 39,  111 => 37,  108 => 37,  101 => 34,  98 => 33,  96 => 47,  83 => 40,  74 => 25,  66 => 20,  55 => 14,  52 => 15,  50 => 14,  43 => 9,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 10,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 29,  73 => 19,  64 => 17,  60 => 18,  57 => 15,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 9,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}

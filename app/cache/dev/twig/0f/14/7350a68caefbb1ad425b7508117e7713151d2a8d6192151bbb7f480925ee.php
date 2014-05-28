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
        return array (  101 => 34,  98 => 33,  90 => 30,  87 => 29,  85 => 28,  78 => 26,  74 => 25,  64 => 17,  53 => 15,  49 => 14,  39 => 6,  36 => 5,  29 => 3,);
    }
}

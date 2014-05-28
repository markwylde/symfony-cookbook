<?php

/* BakerRecipeBundle:Recipe:create.html.twig */
class __TwigTemplate_5a467f0f120d223c025d72af909c41310f68f6f8b802e2e20aa7d9dc386bdf9a extends Twig_Template
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
        echo "The CookBook - Submit a new entry";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "

    <div class=\"row\">

        <h1>Submit your Recipe</h1>

        <div class=\"large-12 columns\">
        <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("baker_recipe_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"baker\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <p>
                <input type=\"submit\" value=\"Submit\">
            </p>
        </form>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "BakerRecipeBundle:Recipe:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  51 => 14,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}

<?php

/* BakerRecipeBundle:Page:about.html.twig */
class __TwigTemplate_fda7fae02af05d728830b1b2ea6e8da33d9053f06f6d7b3b34af8e0f99de5fa1 extends Twig_Template
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
        echo "The CookBook";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"row\">
        <div class=\"large-12 columns\">

            <h1>About The CookBook</h1>

            <img src='";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cooking.jpg"), "html", null, true);
        echo "' />

            <p>This is `The CookBook`, an example PHP application written using the Symfony framework.</p>

            <p>Have a look at our <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("baker_recipe_list");
        echo "\">Recipes</a> or
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("baker_recipe_create");
        echo "\">Submit</a> your own one to our database.</p>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "BakerRecipeBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  53 => 16,  46 => 12,  38 => 6,  35 => 5,  29 => 3,);
    }
}

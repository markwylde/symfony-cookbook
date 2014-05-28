<?php

/* BakerRecipeBundle:Recipe:list.html.twig */
class __TwigTemplate_2c8b76166f18651016e49d58612bb839d6f4b0268b8c30302964555626925df8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" media=\"screen, projection\" rel=\"stylesheet\"/>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "The CookBook - Recipes";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <div class=\"row\">
        <div class=\"large-12 columns\">

            <h1>Our Recipes</h1>
            <p>Want to cook a meal yourself tonight? Have a look at our delicious recipes</p>
            <table width=\"100%\">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Created</th>
                    </tr>
                </thead>
                <tbody>

                ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) ? $context["recipes"] : $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 27
            echo "                    <tr>
                        <td><a href='";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("baker_recipe_read", array("id" => $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "id"))), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "title"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "author"), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "created"), "m/d/Y"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                </tbody>
            </table>

            </ul>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "BakerRecipeBundle:Recipe:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  84 => 30,  80 => 29,  74 => 28,  71 => 27,  67 => 26,  49 => 10,  46 => 9,  40 => 7,  33 => 4,  30 => 3,);
    }
}

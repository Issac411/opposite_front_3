<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* politique/view.html.twig */
class __TwigTemplate_fe4336ba3ff2e296b0e93713859b0b1654eae5fe03b9af3622c6890f2fd5fc75 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "politique/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "politique/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "politique/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PolitiqueController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"container fontA styleBlocCentral\">
    <div class=\"barreBlocElement\"><button type=\"button\" class=\"btn btn-info\"><a  href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politiqueviewAll");
        echo "\">Retour</a></button><button type=\"button\" class=\"btn btn-info\"><a  href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politiqueedit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["politique"]) || array_key_exists("politique", $context) ? $context["politique"] : (function () { throw new RuntimeError('Variable "politique" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">Editer</a></button></div>
    <div class=\"container p-4 text-justify\">
        <div><h3 class=\"text-white\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["politique"]) || array_key_exists("politique", $context) ? $context["politique"] : (function () { throw new RuntimeError('Variable "politique" does not exist.', 14, $this->source); })()), "Libelle", [], "any", false, false, false, 14), "html", null, true);
        echo " <img height=\"57px\" width=\"57px\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["politique"]) || array_key_exists("politique", $context) ? $context["politique"] : (function () { throw new RuntimeError('Variable "politique" does not exist.', 14, $this->source); })()), "Logo", [], "any", false, false, false, 14), "html", null, true);
        echo "\"/></h3></div>
        <div>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["politique"]) || array_key_exists("politique", $context) ? $context["politique"] : (function () { throw new RuntimeError('Variable "politique" does not exist.', 15, $this->source); })()), "Description", [], "any", false, false, false, 15), "html", null, true);
        echo "</div>
    </div>


    <div class=\"alert alert-info\" role=\"alert\">
        <span> Partis politique liés : </span>
    </div>


    <div class=\"container\">
        <table>

        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partis"]) || array_key_exists("partis", $context) ? $context["partis"] : (function () { throw new RuntimeError('Variable "partis" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["parti"]) {
            // line 28
            echo "            <tr>
            <td> <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partiview", ["id" => twig_get_attribute($this->env, $this->source, $context["parti"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parti"], "Libelle", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></td>
                <td><img height=\"57px\" width=\"57px\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parti"], "Logo", [], "any", false, false, false, 30), "html", null, true);
            echo "\"/></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parti'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </table>
    </div>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "politique/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 33,  137 => 30,  131 => 29,  128 => 28,  124 => 27,  109 => 15,  103 => 14,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PolitiqueController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"container fontA styleBlocCentral\">
    <div class=\"barreBlocElement\"><button type=\"button\" class=\"btn btn-info\"><a  href=\"{{ path('politiqueviewAll')}}\">Retour</a></button><button type=\"button\" class=\"btn btn-info\"><a  href=\"{{ path('politiqueedit', {id:politique.id})}}\">Editer</a></button></div>
    <div class=\"container p-4 text-justify\">
        <div><h3 class=\"text-white\">{{ politique.Libelle }} <img height=\"57px\" width=\"57px\" src=\"{{ politique.Logo }}\"/></h3></div>
        <div>{{ politique.Description }}</div>
    </div>


    <div class=\"alert alert-info\" role=\"alert\">
        <span> Partis politique liés : </span>
    </div>


    <div class=\"container\">
        <table>

        {% for parti in partis %}
            <tr>
            <td> <a href=\"{{ path('partiview', {id:parti.id}) }}\"> {{ parti.Libelle }}</a></td>
                <td><img height=\"57px\" width=\"57px\" src=\"{{ parti.Logo }}\"/></td>
            </tr>
        {% endfor %}
        </table>
    </div>


</div>
{% endblock %}
", "politique/view.html.twig", "/var/www/html/symfony_project/opposite_front_3/templates/politique/view.html.twig");
    }
}

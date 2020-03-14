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

/* leader/view.html.twig */
class __TwigTemplate_b5b690a9f49b23e999ab889111ae3914bee0ede202990885c6649b42287ab344 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leader/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leader/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "leader/view.html.twig", 1);
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
        echo "\">Retour</a></button></div>
    <h3 class=\"text-white\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leader"]) || array_key_exists("leader", $context) ? $context["leader"] : (function () { throw new RuntimeError('Variable "leader" does not exist.', 13, $this->source); })()), "prenom", [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leader"]) || array_key_exists("leader", $context) ? $context["leader"] : (function () { throw new RuntimeError('Variable "leader" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"col-sm\">
            ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leader"]) || array_key_exists("leader", $context) ? $context["leader"] : (function () { throw new RuntimeError('Variable "leader" does not exist.', 16, $this->source); })()), "prenom", [], "any", false, false, false, 16), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leader"]) || array_key_exists("leader", $context) ? $context["leader"] : (function () { throw new RuntimeError('Variable "leader" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo " est lié au <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partiview", ["id" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leader"]) || array_key_exists("leader", $context) ? $context["leader"] : (function () { throw new RuntimeError('Variable "leader" does not exist.', 16, $this->source); })()), "parti", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16))]), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leader"]) || array_key_exists("leader", $context) ? $context["leader"] : (function () { throw new RuntimeError('Variable "leader" does not exist.', 16, $this->source); })()), "parti", [], "any", false, false, false, 16), "libelle", [], "any", false, false, false, 16), "html", null, true);
        echo "</a> <img height=\"57px\" width=\"57px\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["leader"]) || array_key_exists("leader", $context) ? $context["leader"] : (function () { throw new RuntimeError('Variable "leader" does not exist.', 16, $this->source); })()), "parti", [], "any", false, false, false, 16), "Logo", [], "any", false, false, false, 16), "html", null, true);
        echo "\"/>
            . Il est agé de ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leader"]) || array_key_exists("leader", $context) ? $context["leader"] : (function () { throw new RuntimeError('Variable "leader" does not exist.', 17, $this->source); })()), "age", [], "any", false, false, false, 17), "html", null, true);
        echo ".
            <div class=\"container pb-4\">


            </div>
        </div>
        <div class=\"col-sm\">
            <img class=\"profilePic\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leader"]) || array_key_exists("leader", $context) ? $context["leader"] : (function () { throw new RuntimeError('Variable "leader" does not exist.', 24, $this->source); })()), "photo", [], "any", false, false, false, 24), "html", null, true);
        echo "\" />
        </div>
    </div>





</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "leader/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 24,  120 => 17,  108 => 16,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    <div class=\"barreBlocElement\"><button type=\"button\" class=\"btn btn-info\"><a  href=\"{{ path('politiqueviewAll')}}\">Retour</a></button></div>
    <h3 class=\"text-white\">{{ leader.prenom }} {{ leader.nom }}</h3>
    <div class=\"row\">
        <div class=\"col-sm\">
            {{ leader.prenom }} {{ leader.nom }} est lié au <a href=\"{{ path('partiview', {id:leader.parti.id|number_format}) }}\" >{{ leader.parti.libelle }}</a> <img height=\"57px\" width=\"57px\" src=\"{{ leader.parti.Logo }}\"/>
            . Il est agé de {{ leader.age }}.
            <div class=\"container pb-4\">


            </div>
        </div>
        <div class=\"col-sm\">
            <img class=\"profilePic\" src=\"{{ leader.photo }}\" />
        </div>
    </div>





</div>
{% endblock %}
", "leader/view.html.twig", "/var/www/html/symfony_project/opposite_front_3/templates/leader/view.html.twig");
    }
}

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

/* parti/view.html.twig */
class __TwigTemplate_55a9fc4f8590abb18119bc11127c79a843d6a362ad464eafe957ca8445bd3717 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parti/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parti/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parti/view.html.twig", 1);
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
    <div class=\"barreBlocElement\"><button type=\"button\" class=\"btn btn-primary\"><a  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partiedit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["parti"]) || array_key_exists("parti", $context) ? $context["parti"] : (function () { throw new RuntimeError('Variable "parti" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">Editer</a></button></div>

    <h3 class=\"text-white\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parti"]) || array_key_exists("parti", $context) ? $context["parti"] : (function () { throw new RuntimeError('Variable "parti" does not exist.', 14, $this->source); })()), "Libelle", [], "any", false, false, false, 14), "html", null, true);
        echo " <img height=\"57px\" width=\"57px\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parti"]) || array_key_exists("parti", $context) ? $context["parti"] : (function () { throw new RuntimeError('Variable "parti" does not exist.', 14, $this->source); })()), "Logo", [], "any", false, false, false, 14), "html", null, true);
        echo "\"/></h3>

    Le ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parti"]) || array_key_exists("parti", $context) ? $context["parti"] : (function () { throw new RuntimeError('Variable "parti" does not exist.', 16, $this->source); })()), "Libelle", [], "any", false, false, false, 16), "html", null, true);
        echo " est un mouvement lié au <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politiqueview", ["id" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parti"]) || array_key_exists("parti", $context) ? $context["parti"] : (function () { throw new RuntimeError('Variable "parti" does not exist.', 16, $this->source); })()), "politique", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16))]), "html", null, true);
        echo " \">";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["parti"]) || array_key_exists("parti", $context) ? $context["parti"] : (function () { throw new RuntimeError('Variable "parti" does not exist.', 16, $this->source); })()), "politique", [], "any", false, false, false, 16), "libelle", [], "any", false, false, false, 16)), "html", null, true);
        echo "</a>.

        <div class=\"alert alert-info\" role=\"alert\">
            <span> Leaders liés : </span>
        </div>


        <div class=\"container\">
            <table>

                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leaders"]) || array_key_exists("leaders", $context) ? $context["leaders"] : (function () { throw new RuntimeError('Variable "leaders" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
            // line 27
            echo "                    <tr>
                        <td> <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("leaderview", ["id" => twig_get_attribute($this->env, $this->source, $context["leader"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leader"], "prenom", [], "any", false, false, false, 28), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leader"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo " <img height=\"57px\" width=\"57px\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["leader"], "photo", [], "any", false, false, false, 28), "html", null, true);
            echo "\"/></a></td>
                        <td></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </table>
        </div>

    </div>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "parti/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 32,  132 => 28,  129 => 27,  125 => 26,  108 => 16,  101 => 14,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    <div class=\"barreBlocElement\"><button type=\"button\" class=\"btn btn-primary\"><a  href=\"{{ path('partiedit', {id:parti.id}) }}\">Editer</a></button></div>

    <h3 class=\"text-white\">{{ parti.Libelle }} <img height=\"57px\" width=\"57px\" src=\"{{ parti.Logo }}\"/></h3>

    Le {{ parti.Libelle }} est un mouvement lié au <a href=\"{{ path('politiqueview', {id:parti.politique.id|number_format }) }} \">{{ parti.politique.libelle|lower }}</a>.

        <div class=\"alert alert-info\" role=\"alert\">
            <span> Leaders liés : </span>
        </div>


        <div class=\"container\">
            <table>

                {% for leader in leaders %}
                    <tr>
                        <td> <a href=\"{{ path('leaderview', {id:leader.id}) }}\"> {{ leader.prenom }} {{ leader.nom }} <img height=\"57px\" width=\"57px\" src=\"{{ leader.photo }}\"/></a></td>
                        <td></td>
                    </tr>
                {% endfor %}
            </table>
        </div>

    </div>


</div>
{% endblock %}
", "parti/view.html.twig", "/var/www/html/symfony_project/opposite_front_3/templates/parti/view.html.twig");
    }
}

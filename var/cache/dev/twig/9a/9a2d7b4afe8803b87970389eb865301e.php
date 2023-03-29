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

/* prestataire/show.html.twig */
class __TwigTemplate_63954e35ec85c53590b0599e06c1e683 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestataire/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestataire/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestataire/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Detail d'un prestataire";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; margin-bottom: 8em; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    h1{padding-bottom: 7%; color: green;}
</style>
<h1 style=\"text-align:center;\">Bienvenue , vous trouvez dans cette page nos informations</h1>
<div class=\"example-wrapper\">
    <h1> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        echo " </h1>
    <p>Numéro de téléphone : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 14, $this->source); })()), "NumTel", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
    <p>Numéro de TVA : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 15, $this->source); })()), "NumTva", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
    <p>Rue : ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["adresseRue"]) || array_key_exists("adresseRue", $context) ? $context["adresseRue"] : (function () { throw new RuntimeError('Variable "adresseRue" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</p>
    <p>Numéro : ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["adresseN"]) || array_key_exists("adresseN", $context) ? $context["adresseN"] : (function () { throw new RuntimeError('Variable "adresseN" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</p>
    <p>Commune : ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["commune"]) || array_key_exists("commune", $context) ? $context["commune"] : (function () { throw new RuntimeError('Variable "commune" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</p>
    <p>Code postal : ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["codePostal"]) || array_key_exists("codePostal", $context) ? $context["codePostal"] : (function () { throw new RuntimeError('Variable "codePostal" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</p>
    <p>Localité : ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["localite"]) || array_key_exists("localite", $context) ? $context["localite"] : (function () { throw new RuntimeError('Variable "localite" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</p>
    
    ";
        // line 22
        if (twig_in_filter("http", twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 22, $this->source); })()), "SiteInternet", [], "any", false, false, false, 22))) {
            echo " 
      <p>Lien vers le site officiel : <a href='";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 23, $this->source); })()), "SiteInternet", [], "any", false, false, false, 23), "html", null, true);
            echo "' target='_blank'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 23, $this->source); })()), "SiteInternet", [], "any", false, false, false, 23), "html", null, true);
            echo "</a> </p>
    ";
        } else {
            // line 25
            echo "    <a href='https://";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 25, $this->source); })()), "SiteInternet", [], "any", false, false, false, 25), "html", null, true);
            echo "' target='_blank'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestataire"]) || array_key_exists("prestataire", $context) ? $context["prestataire"] : (function () { throw new RuntimeError('Variable "prestataire" does not exist.', 25, $this->source); })()), "SiteInternet", [], "any", false, false, false, 25), "html", null, true);
            echo "</a>
    ";
        }
        // line 26
        echo "   
    <div style=\"margin-top: 10%;\">
      <h3> Listes des stages</h3>
      <ul>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stages"]) || array_key_exists("stages", $context) ? $context["stages"] : (function () { throw new RuntimeError('Variable "stages" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 31
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_stage", ["id" => twig_get_attribute($this->env, $this->source, $context["stage"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">
            <h4>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stage"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</h4>
          </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "      </ul>
    </div> 
    <div style=\"margin-top: 10%;\">
      <h3> Listes des promotions</h3>
      <ul>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 41
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">
            <h4>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "nom", [], "any", false, false, false, 42), "html", null, true);
            echo "</h4>
          </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "      </ul>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "prestataire/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 45,  189 => 42,  184 => 41,  180 => 40,  173 => 35,  164 => 32,  159 => 31,  155 => 30,  149 => 26,  141 => 25,  134 => 23,  130 => 22,  125 => 20,  121 => 19,  117 => 18,  113 => 17,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Detail d'un prestataire{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; margin-bottom: 8em; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    h1{padding-bottom: 7%; color: green;}
</style>
<h1 style=\"text-align:center;\">Bienvenue , vous trouvez dans cette page nos informations</h1>
<div class=\"example-wrapper\">
    <h1> {{ prestataire.nom}} </h1>
    <p>Numéro de téléphone : {{prestataire.NumTel}}</p>
    <p>Numéro de TVA : {{prestataire.NumTva}}</p>
    <p>Rue : {{adresseRue}}</p>
    <p>Numéro : {{adresseN}}</p>
    <p>Commune : {{commune}}</p>
    <p>Code postal : {{codePostal}}</p>
    <p>Localité : {{localite}}</p>
    
    {% if 'http' in prestataire.SiteInternet  %} 
      <p>Lien vers le site officiel : <a href='{{prestataire.SiteInternet}}' target='_blank'>{{prestataire.SiteInternet}}</a> </p>
    {% else %}
    <a href='https://{{prestataire.SiteInternet}}' target='_blank'>{{prestataire.SiteInternet}}</a>
    {% endif %}   
    <div style=\"margin-top: 10%;\">
      <h3> Listes des stages</h3>
      <ul>
        {% for stage in stages %}
          <a href=\"{{ path('afficher_stage', { id: stage.id } )}}\">
            <h4>{{stage.nom}}</h4>
          </a>
        {% endfor%}
      </ul>
    </div> 
    <div style=\"margin-top: 10%;\">
      <h3> Listes des promotions</h3>
      <ul>
        {% for promotion in promotions %}
          <a href=\"{{ path('afficher_promotion', { id: promotion.id } )}}\">
            <h4>{{promotion.nom}}</h4>
          </a>
        {% endfor%}
      </ul>
    </div>
</div>
{% endblock %}", "prestataire/show.html.twig", "C:\\symfony\\projet_web_bienEtre_2023_Alshahoud\\templates\\prestataire\\show.html.twig");
    }
}

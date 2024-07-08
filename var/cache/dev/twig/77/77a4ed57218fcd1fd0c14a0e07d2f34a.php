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

/* stage/show.html.twig */
class __TwigTemplate_5faa6bebc48c756c51f9b9e6b220dcf2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stage/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stage/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stage/show.html.twig", 1);
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

        echo "D'étail d'un stage ";
        
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
  .example-wrapper {margin: 1rem;}
  .date {color: red; font-weight: bold;}
</style>

    <div class=\"example-wrapper\">
      <h1> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo "! </h1>
      <p>Description : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
      ";
        // line 14
        if (twig_test_empty(twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14)))) {
            // line 15
            echo "      <p>Description n'existe pas</p>
      ";
        }
        // line 17
        echo "      <p>Tarif : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 17, $this->source); })()), "tarif", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
      <p>Informations Complementaires : ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 18, $this->source); })()), "infoComplementaire", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
      
      <p class=\"date\">Date debut : ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 20, $this->source); })()), "debut", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
        echo "</p>
      <p class=\"date\">Date de fin : ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 21, $this->source); })()), "fin", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
        echo "</p>
      <p class=\"date\">Affichage de : ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 22, $this->source); })()), "AffichageDe", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
        echo "</p>
      <p class=\"date\">Affichage jusque : ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stage"]) || array_key_exists("stage", $context) ? $context["stage"] : (function () { throw new RuntimeError('Variable "stage" does not exist.', 23, $this->source); })()), "AffichageJusque", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
        echo "</p>
        
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "stage/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 23,  128 => 22,  124 => 21,  120 => 20,  115 => 18,  110 => 17,  106 => 15,  104 => 14,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}D'étail d'un stage {% endblock %}

{% block body %}
<style>
  .example-wrapper {margin: 1rem;}
  .date {color: red; font-weight: bold;}
</style>

    <div class=\"example-wrapper\">
      <h1> {{ stage.nom}}! </h1>
      <p>Description : {{stage.description }}</p>
      {% if stage.description |trim is empty %}
      <p>Description n'existe pas</p>
      {% endif %}
      <p>Tarif : {{stage.tarif }}</p>
      <p>Informations Complementaires : {{stage.infoComplementaire }}</p>
      
      <p class=\"date\">Date debut : {{ stage.debut|date(\"d/m/Y\") }}</p>
      <p class=\"date\">Date de fin : {{ stage.fin|date(\"d/m/Y\") }}</p>
      <p class=\"date\">Affichage de : {{ stage.AffichageDe|date(\"d/m/Y\") }}</p>
      <p class=\"date\">Affichage jusque : {{ stage.AffichageJusque|date(\"d/m/Y\") }}</p>
        
    </div>
{% endblock %}", "stage/show.html.twig", "C:\\WEB_DEVELOPER\\ProjetBienEtre-sameth-2023\\templates\\stage\\show.html.twig");
    }
}

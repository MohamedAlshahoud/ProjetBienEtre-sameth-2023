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

/* categorie/showListePrestataire.html.twig */
class __TwigTemplate_70005f81e3cb5d0efc1cb20002d5a64e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/showListePrestataire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/showListePrestataire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/showListePrestataire.html.twig", 1);
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

        echo "Détail d'une catégorie";
        
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
        echo "    <div style=\"max-width: 1200px; margin: 0 auto;\">
        <h2 style=\"display: flex; align-items: center; justify-content: center; margin-top: 6%; color: green; font-size:35px; padding-bottom: 2em; \">
            Bienvenue dans cette Catégorie
        </h2>
        <div class=\"container\">
            <div class=\"row justify-content\">
                <div class=\"col-md-4\" style=\" display: flex; flex-direction: row; justify-content: space-between;\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prestataires"]) || array_key_exists("prestataires", $context) ? $context["prestataires"] : (function () { throw new RuntimeError('Variable "prestataires" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestataire"]) {
            // line 14
            echo "                        <div class=\"card shadow\" style=\"margin-top:8%; display: grid; justify-content: space-between; width: 35%;\">
                            <img src=\"/uploads/";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestataire"], "image", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\" style=\"height: 175px;\">
                            <div class=\"card-body text-center\">
                                <h5 class=\"card-title\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestataire"], "nom", [], "any", false, false, false, 17), "html", null, true);
            echo "</h5>
                                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_prestataire", ["id" => twig_get_attribute($this->env, $this->source, $context["prestataire"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Afficher</a>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestataire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo " 
                </div> 
            </div>
        </div>
        <div style=\"color:red; display: flex; align-items: center; justify-content: center; padding-top: 4em; padding-bottom: 3em; font-size: 30px; \">
            ";
        // line 26
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["prestataires"]) || array_key_exists("prestataires", $context) ? $context["prestataires"] : (function () { throw new RuntimeError('Variable "prestataires" does not exist.', 26, $this->source); })()));
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "categorie/showListePrestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 26,  123 => 21,  113 => 18,  109 => 17,  104 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détail d'une catégorie{% endblock %}

{% block body %}
    <div style=\"max-width: 1200px; margin: 0 auto;\">
        <h2 style=\"display: flex; align-items: center; justify-content: center; margin-top: 6%; color: green; font-size:35px; padding-bottom: 2em; \">
            Bienvenue dans cette Catégorie
        </h2>
        <div class=\"container\">
            <div class=\"row justify-content\">
                <div class=\"col-md-4\" style=\" display: flex; flex-direction: row; justify-content: space-between;\">
                    {% for prestataire in prestataires %}
                        <div class=\"card shadow\" style=\"margin-top:8%; display: grid; justify-content: space-between; width: 35%;\">
                            <img src=\"/uploads/{{prestataire.image}}\" class=\"card-img-top\" alt=\"...\" style=\"height: 175px;\">
                            <div class=\"card-body text-center\">
                                <h5 class=\"card-title\">{{prestataire.nom}}</h5>
                                <a href=\"{{ path('afficher_prestataire', { id: prestataire.id }) }}\" class=\"btn btn-success\">Afficher</a>
                            </div>
                        </div>
                    {% endfor%} 
                </div> 
            </div>
        </div>
        <div style=\"color:red; display: flex; align-items: center; justify-content: center; padding-top: 4em; padding-bottom: 3em; font-size: 30px; \">
            {{ knp_pagination_render(prestataires)}}
        </div>
    </div>
{% endblock %}
", "categorie/showListePrestataire.html.twig", "C:\\WEB_DEVELOPER\\ProjetBienEtre-sameth-2023\\templates\\categorie\\showListePrestataire.html.twig");
    }
}

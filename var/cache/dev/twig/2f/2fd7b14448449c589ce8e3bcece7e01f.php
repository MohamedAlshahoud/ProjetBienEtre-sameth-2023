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

/* home/index.html.twig */
class __TwigTemplate_127a047cbbe5a2850bb8d493949aa0f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Sameth - Accueil";
        
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
        echo "   ";
        echo twig_include($this->env, $context, "home/partials/home_slider.html.twig", ["slider" => (isset($context["homeSlider"]) || array_key_exists("homeSlider", $context) ? $context["homeSlider"] : (function () { throw new RuntimeError('Variable "homeSlider" does not exist.', 6, $this->source); })())]);
        echo "
   <div style=\"max-width: 1200px; margin: 0 auto;\">
      <h2 style=\"display: flex;  align-items: center; justify-content: center; margin-top: 6%; color: green; font-size:35px; \">
         Les 4 derniers prestataires
      </h2>
      <div class=\"container\">
         <div class=\"row justify-content\">
            <div class=\"d-flex flex-row\" style=\" display: flex; flex-direction: row;  justify-content: space-between; width: 100%;\">
               ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prestataires"]) || array_key_exists("prestataires", $context) ? $context["prestataires"] : (function () { throw new RuntimeError('Variable "prestataires" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestataire"]) {
            // line 15
            echo "                  <div class=\"card shadow\" style=\"margin-top:8%; display: grid; justify-content: space-between; width: 150px;\">
                     <img src=\"/uploads/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestataire"], "image", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\" style=\"height: 175px;\">
                     <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestataire"], "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "</h5>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_prestataire", ["id" => twig_get_attribute($this->env, $this->source, $context["prestataire"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Découvrir</a>
                     </div>
                  </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestataire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  
            </div>
         </div>
      </div> 
      <h2 style=\"display: flex; align-items: center; justify-content: center; margin-top: 6%; color: green; font-size:35px; \">
         Le service de mois
      </h2>
      <div class=\"container\">
         <div class=\"row justify-content-center\">
            <div class=\"col-md-4\">
                  <div class=\"card shadow\" style=\"margin-top:8%;\">
                     <img src=\"/assets/img/";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
                     <div class=\"card-body text-center\">
                        <p style=\"color: green; font-size: 22px;\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>
                        <p font-size: 18px;\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), "html", null, true);
        echo "</p>
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_categorie", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\" class=\"btn btn-success\">Découvrir</a>
                     </div>
                  </div>
            </div>
         </div>
      </div>    
   </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 37,  148 => 36,  144 => 35,  139 => 33,  126 => 22,  116 => 19,  112 => 18,  107 => 16,  104 => 15,  100 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sameth - Accueil{% endblock %}

{% block body %}
   {{include(\"home/partials/home_slider.html.twig\", {'slider': homeSlider }) }}
   <div style=\"max-width: 1200px; margin: 0 auto;\">
      <h2 style=\"display: flex;  align-items: center; justify-content: center; margin-top: 6%; color: green; font-size:35px; \">
         Les 4 derniers prestataires
      </h2>
      <div class=\"container\">
         <div class=\"row justify-content\">
            <div class=\"d-flex flex-row\" style=\" display: flex; flex-direction: row;  justify-content: space-between; width: 100%;\">
               {% for prestataire in prestataires %}
                  <div class=\"card shadow\" style=\"margin-top:8%; display: grid; justify-content: space-between; width: 150px;\">
                     <img src=\"/uploads/{{prestataire.image}}\" class=\"card-img-top\" alt=\"...\" style=\"height: 175px;\">
                     <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">{{prestataire.nom}}</h5>
                        <a href=\"{{ path('afficher_prestataire', { id: prestataire.id }) }}\" class=\"btn btn-success\">Découvrir</a>
                     </div>
                  </div>
               {% endfor%}  
            </div>
         </div>
      </div> 
      <h2 style=\"display: flex; align-items: center; justify-content: center; margin-top: 6%; color: green; font-size:35px; \">
         Le service de mois
      </h2>
      <div class=\"container\">
         <div class=\"row justify-content-center\">
            <div class=\"col-md-4\">
                  <div class=\"card shadow\" style=\"margin-top:8%;\">
                     <img src=\"/assets/img/{{categorie.image}}\" class=\"card-img-top\" alt=\"...\">
                     <div class=\"card-body text-center\">
                        <p style=\"color: green; font-size: 22px;\">{{ categorie.nom}}</p>
                        <p font-size: 18px;\">{{ categorie.description}}</p>
                        <a href=\"{{ path('afficher_categorie', { id: categorie.id }) }}\" class=\"btn btn-success\">Découvrir</a>
                     </div>
                  </div>
            </div>
         </div>
      </div>    
   </div>
{% endblock %}", "home/index.html.twig", "C:\\symfony\\projet_web_bienEtre_2023_Alshahoud\\templates\\home\\index.html.twig");
    }
}

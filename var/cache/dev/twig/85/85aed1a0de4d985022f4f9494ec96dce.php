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

/* prestataire/index.html.twig */
class __TwigTemplate_79f8c1c3505ba223001bdf10cd75cb91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestataire/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestataire/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestataire/index.html.twig", 1);
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

        echo "Recherche des prestataires";
        
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
        echo "    <main id=\"main\">
        <div style=\"max-width: 1200px; margin: 0 auto;\">
            <h2 style=\"display: flex; align-items: center; justify-content: center; margin-top: 6%; color: green; font-size:35px; \">
                Liste des prestatires
            </h2>
            <div class=\"container\">
                <div class=\"row justify-content\">
                    <div class=\"col-md-4\" style=\" display: flex; flex-direction: row; justify-content: space-between;\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prestataires"]) || array_key_exists("prestataires", $context) ? $context["prestataires"] : (function () { throw new RuntimeError('Variable "prestataires" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestataire"]) {
            // line 15
            echo "                            <div class=\"card shadow\" style=\"margin-top:8%; display: grid; justify-content: space-between; width: 35%;\">
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
            echo "\" class=\"btn btn-success\">Afficher</a>
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
            <div style=\"color:red; display: flex; align-items: center; justify-content: center; padding-top: 4em; font-size: 30px; \">
                ";
        // line 27
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["prestataires"]) || array_key_exists("prestataires", $context) ? $context["prestataires"] : (function () { throw new RuntimeError('Variable "prestataires" does not exist.', 27, $this->source); })()));
        echo "
            </div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "prestataire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 27,  124 => 22,  114 => 19,  110 => 18,  105 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recherche des prestataires{% endblock %}

{% block body %}
    <main id=\"main\">
        <div style=\"max-width: 1200px; margin: 0 auto;\">
            <h2 style=\"display: flex; align-items: center; justify-content: center; margin-top: 6%; color: green; font-size:35px; \">
                Liste des prestatires
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
            <div style=\"color:red; display: flex; align-items: center; justify-content: center; padding-top: 4em; font-size: 30px; \">
                {{ knp_pagination_render(prestataires)}}
            </div>
        </div>
    </main>
{% endblock %}


", "prestataire/index.html.twig", "C:\\symfony\\projet_web_bienEtre_2023 - apresavecNatacha\\templates\\prestataire\\index.html.twig");
    }
}

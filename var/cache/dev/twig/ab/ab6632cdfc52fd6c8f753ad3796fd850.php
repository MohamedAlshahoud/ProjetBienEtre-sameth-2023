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

/* base.html.twig */
class __TwigTemplate_e53aae4964581cf010172a71c192e864 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"description\">
        <meta content=\"\" name=\"keywords\">

        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        echo "        <link href=\"assets/img/favicon.png\" rel=\"icon\">
        <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

        ";
        // line 16
        echo "        <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
        
        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "    </head>
    <body>
        ";
        // line 33
        echo "        ";
        echo twig_include($this->env, $context, "layouts/partials/_search.html.twig");
        echo "

        ";
        // line 36
        echo "        ";
        echo twig_include($this->env, $context, "layouts/partials/_nav.html.twig");
        echo "

        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
        ";
        // line 41
        echo "        ";
        echo twig_include($this->env, $context, "layouts/partials/_footer.html.twig");
        echo "

        ";
        // line 44
        echo "        ";
        echo twig_include($this->env, $context, "layouts/partials/_back_to_top.html.twig");
        echo "

        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Sameth";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            ";
        // line 20
        echo "            ";
        // line 21
        echo "            <link href=\"assets/vendor/animate.css/animate.min.css\" rel=\"stylesheet\">
            <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
            <link href=\"assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
            <link href=\"assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">
           <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\">
            
             ";
        // line 28
        echo "            <link href=\"assets/css/style.css\" rel=\"stylesheet\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "

            ";
        // line 50
        echo "            <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
            <script src=\"assets/vendor/swiper/swiper-bundle.min.js\"></script>
            <script src=\"assets/vendor/php-email-form/validate.js\"></script>

            ";
        // line 55
        echo "            <script src=\"assets/js/main.js\"></script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 55,  206 => 50,  200 => 47,  190 => 46,  172 => 38,  161 => 28,  153 => 21,  151 => 20,  149 => 19,  139 => 18,  120 => 9,  108 => 58,  106 => 46,  100 => 44,  94 => 41,  91 => 39,  89 => 38,  83 => 36,  77 => 33,  73 => 30,  71 => 18,  67 => 16,  62 => 12,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"\" name=\"description\">
        <meta content=\"\" name=\"keywords\">

        <title>{% block title %}Sameth{% endblock %}</title>

        {# Favicons #}
        <link href=\"assets/img/favicon.png\" rel=\"icon\">
        <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

        {# Google Fonts #}
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\" rel=\"stylesheet\">
        
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
            {# Vendor CSS Files #}
            <link href=\"assets/vendor/animate.css/animate.min.css\" rel=\"stylesheet\">
            <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
            <link href=\"assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
            <link href=\"assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">
           <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\">
            
             {# Template Main CSS File #}
            <link href=\"assets/css/style.css\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    <body>
        {# Search #}
        {{ include('layouts/partials/_search.html.twig')}}

        {# Navigation #}
        {{ include('layouts/partials/_nav.html.twig')}}

        {% block body %}{% endblock %}

        {# footer #}
        {{ include('layouts/partials/_footer.html.twig')}}

        {# Back to top #}
        {{ include('layouts/partials/_back_to_top.html.twig')}}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}

            {# Vendor JS Files #}
            <script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
            <script src=\"assets/vendor/swiper/swiper-bundle.min.js\"></script>
            <script src=\"assets/vendor/php-email-form/validate.js\"></script>

            {# Template Main JS File #}
            <script src=\"assets/js/main.js\"></script>

        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\symfony\\projet_web_bienEtre_2023 - apresavecNatacha\\templates\\base.html.twig");
    }
}

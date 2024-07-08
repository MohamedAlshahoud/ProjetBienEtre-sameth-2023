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

/* layouts/partials/_nav.html.twig */
class __TwigTemplate_0c143518a258d123eb843a387be69d75 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default navbar-trans navbar-expand-lg fixed-top\">
    <div class=\"container\">
      <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class=\"navbar-brand text-brand\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Sam<span class=\"color-b\">eth</span></a>

      <div class=\"navbar-collapse collapse justify-content-center\" id=\"navbarDefault\">
        <ul class=\"navbar-nav\">

          <li class=\"nav-item\">
            <a class=\"nav-link ";
        // line 14
        if ((array_key_exists("current_menu", $context) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 14, $this->source); })()) == "home"))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link ";
        // line 17
        if ((array_key_exists("current_menu", $context) && ((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 17, $this->source); })()) == "categorie"))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie");
        echo "\">Catégories</a>
          </li>
            ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "getTypeUtilisateur", [], "any", false, false, false, 20) == "prestataire")) {
                // line 21
                echo "            <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_stage");
                echo "\">ajoute stage</a>
          </li>
          ";
            }
            // line 25
            echo "          ";
        }
        // line 26
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "getTypeUtilisateur", [], "any", false, false, false, 27) == "prestataire")) {
                // line 28
                echo "            <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
                // line 29
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_promotion");
                echo "\">ajoute promotion</a>
          </li>
          ";
            }
            // line 32
            echo "          ";
        }
        // line 33
        echo "          ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "            <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscrire</a>
          </li>
          ";
        }
        // line 38
        echo "          <li class=\"nav-item\" >
            <a class=\"nav-link \" href=\"/";
        // line 39
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) ? ("logout") : ("login"));
        echo "\" >";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) ? ("Déconnecter") : ("Se connecter"));
        echo "</a>
          </li>
        </ul>
      </Div>

      <button type=\"button\" class=\"btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\">
        <i class=\"bi bi-search\"></i>
      </button>
    </div>
  </nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layouts/partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 39,  127 => 38,  121 => 35,  118 => 34,  115 => 33,  112 => 32,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  94 => 25,  88 => 22,  85 => 21,  82 => 20,  80 => 19,  71 => 17,  61 => 14,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-default navbar-trans navbar-expand-lg fixed-top\">
    <div class=\"container\">
      <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarDefault\" aria-controls=\"navbarDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class=\"navbar-brand text-brand\" href=\"{{ path('app_home')}}\">Sam<span class=\"color-b\">eth</span></a>

      <div class=\"navbar-collapse collapse justify-content-center\" id=\"navbarDefault\">
        <ul class=\"navbar-nav\">

          <li class=\"nav-item\">
            <a class=\"nav-link {% if current_menu is defined and current_menu == 'home' %}active{% endif %}\" href=\"{{ path('app_home')}}\">Accueil</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link {% if current_menu is defined and current_menu == 'categorie' %}active{% endif %}\" href=\"{{path('categorie')}}\">Catégories</a>
          </li>
            {% if  app.user %}
          {% if  app.user.getTypeUtilisateur == 'prestataire'  %}
            <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{path('add_stage')}}\">ajoute stage</a>
          </li>
          {% endif %}
          {% endif %}
            {% if  app.user %}
          {% if  app.user.getTypeUtilisateur == 'prestataire'  %}
            <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{path('add_promotion')}}\">ajoute promotion</a>
          </li>
          {% endif %}
          {% endif %}
          {% if not app.user %}
            <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{path('app_register')}}\">S'inscrire</a>
          </li>
          {% endif %}
          <li class=\"nav-item\" >
            <a class=\"nav-link \" href=\"/{{app.user ? 'logout' : 'login'}}\" >{{app.user ? 'Déconnecter' : 'Se connecter'}}</a>
          </li>
        </ul>
      </Div>

      <button type=\"button\" class=\"btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\">
        <i class=\"bi bi-search\"></i>
      </button>
    </div>
  </nav>", "layouts/partials/_nav.html.twig", "C:\\WEB_DEVELOPER\\ProjetBienEtre-sameth-2023\\templates\\layouts\\partials\\_nav.html.twig");
    }
}

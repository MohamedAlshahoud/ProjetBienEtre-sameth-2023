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

/* categorie/partials/_intro_single.html.twig */
class __TwigTemplate_53ae1ba84e61732c6161e30ad26ac46c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/partials/_intro_single.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/partials/_intro_single.html.twig"));

        // line 1
        echo "<div>
  <h2 style=\"display: flex; align-items: center; justify-content: center; margin-top: 12%; color: green; font-size:35px; \">
    Catégories de services
  </h2>
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-md-4\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 9
            echo "          <div class=\"card shadow\" style=\"margin-top:8%; display: flex; justify-content: space-between;\">
            <img src=\"/assets/img/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "image", [], "any", false, false, false, 10), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\" style=\"height: 280px;\">
            <div class=\"card-body text-center\">
              <p style=\"color: green; font-size: 22px;\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
              <p style=\" font-size: 22px;\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
              <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Découvrir</a>
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "     
      </div>
    </div>
  </div> 
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "categorie/partials/_intro_single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  72 => 14,  68 => 13,  64 => 12,  59 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
  <h2 style=\"display: flex; align-items: center; justify-content: center; margin-top: 12%; color: green; font-size:35px; \">
    Catégories de services
  </h2>
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-md-4\">
        {% for categorie in categories%}
          <div class=\"card shadow\" style=\"margin-top:8%; display: flex; justify-content: space-between;\">
            <img src=\"/assets/img/{{categorie.image}}\" class=\"card-img-top\" alt=\"...\" style=\"height: 280px;\">
            <div class=\"card-body text-center\">
              <p style=\"color: green; font-size: 22px;\">{{ categorie.nom}}</p>
              <p style=\" font-size: 22px;\">{{ categorie.description}}</p>
              <a href=\"{{ path('afficher_categorie', { id: categorie.id }) }}\" class=\"btn btn-success\">Découvrir</a>
            </div>
          </div>
        {% endfor%}     
      </div>
    </div>
  </div> 
</div>", "categorie/partials/_intro_single.html.twig", "C:\\symfony\\projet_web_bienEtre_2023 - apresavecNatacha\\templates\\categorie\\partials\\_intro_single.html.twig");
    }
}

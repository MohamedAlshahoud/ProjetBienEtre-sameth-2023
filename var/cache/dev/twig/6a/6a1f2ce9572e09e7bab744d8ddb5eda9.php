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

/* search/search_result.html.twig */
class __TwigTemplate_619dac8f482691d397535723926c2879 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/search_result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/search_result.html.twig"));

        // line 1
        echo "<section class=\"intro-single\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12 col-lg-8\">
            <div class=\"title-single-box\">
              <h1 class=\"title-single\">Liste des prestataires</h1>
              <ul>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prestataires"]) || array_key_exists("prestataires", $context) ? $context["prestataires"] : (function () { throw new RuntimeError('Variable "prestataires" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prestataire"]) {
            // line 9
            echo "                  <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_prestataire", ["id" => twig_get_attribute($this->env, $this->source, $context["prestataire"], "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\">
                    <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prestataire"], "nom", [], "any", false, false, false, 10), "html", null, true);
            echo "</p> 
                  </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestataire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "search/search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  61 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"intro-single\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12 col-lg-8\">
            <div class=\"title-single-box\">
              <h1 class=\"title-single\">Liste des prestataires</h1>
              <ul>
                {% for prestataire in prestataires %}
                  <a href=\"{{ path('afficher_prestataire', { id: prestataire.id }) }}\">
                    <p>{{prestataire.nom}}</p> 
                  </a>
                {% endfor%}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>", "search/search_result.html.twig", "C:\\symfony\\projet_web_bienEtre_2023 - apresavecNatacha\\templates\\search\\search_result.html.twig");
    }
}

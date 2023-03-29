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

/* layouts/partials/_search.html.twig */
class __TwigTemplate_6e43cd6071ff2b75ba01323cf76d3125 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_search.html.twig"));

        // line 1
        echo "<div class=\"click-closed\"></div>
  <div class=\"box-collapse\">
    <div class=\"title-box-d\">
      <h3 class=\"title-d\">Recherche</h3>
    </div>
    <span class=\"close-box-collapse right-boxed bi bi-x\"></span>
    <div class=\"box-collapse-wrap form\">
      <div class=\"row\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 10, $this->source); })()), 'form_end');
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
        return "layouts/partials/_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"click-closed\"></div>
  <div class=\"box-collapse\">
    <div class=\"title-box-d\">
      <h3 class=\"title-d\">Recherche</h3>
    </div>
    <span class=\"close-box-collapse right-boxed bi bi-x\"></span>
    <div class=\"box-collapse-wrap form\">
      <div class=\"row\">
        {{form_start(search)}}
        {{form_end(search)}}
      </div>
    </div>
  </div>
</div>", "layouts/partials/_search.html.twig", "C:\\symfony\\projet_web_bienEtre_2023 - apresavecNatacha\\templates\\layouts\\partials\\_search.html.twig");
    }
}

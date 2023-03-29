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

/* home/partials/home_slider.html.twig */
class __TwigTemplate_7d0181c1e64e5715a37940a4fb4494a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/partials/home_slider.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/partials/home_slider.html.twig"));

        // line 1
        echo "<div class=\"intro intro-carousel swiper position-relative\">
  <div class=\"swiper-wrapper\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 4
            echo "      <div class=\"swiper-slide carousel-item-a intro-item bg-image\" style=\"background-image: url(/assets/img/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 4), "html", null, true);
            echo ")\">
        <div class=\"overlay overlay-a\"></div>
          <div class=\"intro-content display-table\">
            <div class=\"table-cell\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-lg-8\">
                    <div class=\"intro-body\">
                      <h1 class=\"intro-title mb-4\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 12), "html", null, true);
            echo "</h1>
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
  <div class=\"swiper-pagination\"></div>
</div>
  ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/partials/home_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  63 => 12,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"intro intro-carousel swiper position-relative\">
  <div class=\"swiper-wrapper\">
    {% for slide in slider%}
      <div class=\"swiper-slide carousel-item-a intro-item bg-image\" style=\"background-image: url(/assets/img/{{slide.image}})\">
        <div class=\"overlay overlay-a\"></div>
          <div class=\"intro-content display-table\">
            <div class=\"table-cell\">
              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-lg-8\">
                    <div class=\"intro-body\">
                      <h1 class=\"intro-title mb-4\">{{slide.title}}</h1>
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
        </div>
      {% endfor%}
    </div>
  <div class=\"swiper-pagination\"></div>
</div>
  ", "home/partials/home_slider.html.twig", "C:\\symfony\\projet_web_bienEtre_2023 - apresavecNatacha\\templates\\home\\partials\\home_slider.html.twig");
    }
}

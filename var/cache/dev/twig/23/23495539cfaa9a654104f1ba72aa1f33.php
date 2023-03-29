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

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_7a6118efa83a2131b074b4fde211e818 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_row' => [$this, 'block_collection_entry_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_form_row_row' => [$this, 'block_ea_form_row_row'],
                'ea_section_row' => [$this, 'block_ea_section_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'comparison_widget' => [$this, 'block_comparison_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'TODO_ea_fileupload_widget' => [$this, 'block_TODO_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
        // line 0
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/form_theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/form_theme.html.twig"));

        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_end', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_errors', $context, $blocks);
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('date_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('time_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('file_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('form_row', $context, $blocks);
        // line 117
        echo "
";
        // line 118
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('collection_row', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('collection_entry_row', $context, $blocks);
        // line 216
        echo "
";
        // line 217
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 242
        echo "
";
        // line 243
        $this->displayBlock('form_label', $context, $blocks);
        // line 283
        echo "
";
        // line 285
        echo "
";
        // line 286
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 291
        echo "
";
        // line 292
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 296
        echo "
";
        // line 297
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 344
        echo "
";
        // line 345
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 399
        echo "
";
        // line 400
        $this->displayBlock('ea_crud_rest', $context, $blocks);
        // line 403
        echo "
";
        // line 405
        $this->displayBlock('ea_crud_widget', $context, $blocks);
        // line 461
        echo "
";
        // line 462
        $this->displayBlock('ea_crud_widget_panels', $context, $blocks);
        // line 525
        echo "
";
        // line 527
        $this->displayBlock('ea_autocomplete_widget', $context, $blocks);
        // line 530
        echo "
";
        // line 531
        $this->displayBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 535
        echo "
";
        // line 537
        $this->displayBlock('ea_code_editor_widget', $context, $blocks);
        // line 547
        echo "
";
        // line 549
        $this->displayBlock('ea_text_editor_widget', $context, $blocks);
        // line 560
        echo "
";
        // line 562
        $this->displayBlock('ea_form_row_row', $context, $blocks);
        // line 565
        echo "
";
        // line 566
        $this->displayBlock('ea_section_row', $context, $blocks);
        // line 578
        echo "
";
        // line 580
        $this->displayBlock('ea_filters_widget', $context, $blocks);
        // line 602
        echo "
";
        // line 603
        $this->displayBlock('comparison_widget', $context, $blocks);
        // line 606
        echo "
";
        // line 607
        $this->displayBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 617
        echo "
";
        // line 618
        $this->displayBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 621
        echo "
";
        // line 622
        $this->displayBlock('ea_fileupload_widget', $context, $blocks);
        // line 684
        echo "
";
        // line 685
        $this->displayBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 752
        echo "
";
        // line 753
        $this->displayBlock('ea_slug_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 5
        echo "    ";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)) > 0) && twig_in_filter("ea_crud", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'errors', ["attr" => ["class" => "global-invalid-feedback"]]);
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "

    <div class=\"row\"> ";
        // line 12
        echo "        <input type=\"hidden\" name=\"referrer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "query", [], "any", false, false, false, 12), "get", [0 => "referrer"], "method", false, false, false, 12), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_end"));

        // line 16
        echo "            ";
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new RuntimeError('Variable "render_rest" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'rest');
            echo "
            ";
        }
        // line 19
        echo "        </div> ";
        // line 20
        echo "    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 24
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 24, $this->source); })())) > 0)) {
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 26), "")) : ("")), "html", null, true);
                echo " invalid-feedback d-block\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 26), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 34
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 34, $this->source); })()), [0 => "file", 1 => "hidden"]))) {
            // line 35
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 35, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 35), "")) : ("")))]);
        }
        // line 37
        if ((array_key_exists("type", $context) && (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()) == "range") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()) == "color")))) {
            // line 38
            echo "        ";
            // line 39
            $context["required"] = false;
        }
        // line 41
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 45
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 45, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "")) : ("")) . " form-inline"))]);
        // line 46
        echo "    <div class=\"datetime-widget datetime-widget-datetime\">";
        // line 47
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        // line 48
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 52
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 53
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 54
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 58
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 59
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 60
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 64
        if (((array_key_exists("vich", $context)) ? (_twig_default_filter((isset($context["vich"]) || array_key_exists("vich", $context) ? $context["vich"] : (function () { throw new RuntimeError('Variable "vich" does not exist.', 64, $this->source); })()), false)) : (false))) {
            // line 65
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 65, $this->source); })()), "file")) : ("file"));
            // line 66
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 68
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 75
        echo "    ";
        $context["row_attr"] = twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 75, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 76
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 76), "")) : ("")) . " form-group")]);
        // line 78
        echo "
    <div class=\"";
        // line 79
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 79), "ea_crud_form", [], "any", false, true, false, 79), "ea_field", [], "any", false, true, false, 79), "columns", [], "any", true, true, false, 79) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 79), "ea_crud_form", [], "any", false, true, false, 79), "ea_field", [], "any", false, true, false, 79), "columns", [], "any", false, false, false, 79)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 79), "ea_crud_form", [], "any", false, true, false, 79), "ea_field", [], "any", false, true, false, 79), "columns", [], "any", false, false, false, 79)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 79), "ea_crud_form", [], "any", false, true, false, 79), "ea_field", [], "any", false, true, false, 79), "defaultColumns", [], "any", true, true, false, 79) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 79), "ea_crud_form", [], "any", false, true, false, 79), "ea_field", [], "any", false, true, false, 79), "defaultColumns", [], "any", false, false, false, 79)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 79), "ea_crud_form", [], "any", false, true, false, 79), "ea_field", [], "any", false, true, false, 79), "defaultColumns", [], "any", false, false, false, 79)) : ("")))), "html", null, true);
        echo "\">
        <div ";
        // line 80
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 80, $this->source); })())];
        if (!twig_test_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 80, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        echo ">";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'label');
        // line 82
        echo "<div class=\"form-widget\">
                ";
        // line 83
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 83), "prepend_html", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 83), "prepend_html", [], "any", false, false, false, 83), null)) : (null)));
        // line 84
        echo "                ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 84), "append_html", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 84), "append_html", [], "any", false, false, false, 84), null)) : (null)));
        // line 85
        echo "                ";
        $context["has_input_groups"] = ((isset($context["has_prepend_html"]) || array_key_exists("has_prepend_html", $context) ? $context["has_prepend_html"] : (function () { throw new RuntimeError('Variable "has_prepend_html" does not exist.', 85, $this->source); })()) || (isset($context["has_append_html"]) || array_key_exists("has_append_html", $context) ? $context["has_append_html"] : (function () { throw new RuntimeError('Variable "has_append_html" does not exist.', 85, $this->source); })()));
        // line 86
        echo "
                ";
        // line 87
        if ((isset($context["has_input_groups"]) || array_key_exists("has_input_groups", $context) ? $context["has_input_groups"] : (function () { throw new RuntimeError('Variable "has_input_groups" does not exist.', 87, $this->source); })())) {
            echo "<div class=\"input-group\">";
        }
        // line 88
        echo "                    ";
        if ((isset($context["has_prepend_html"]) || array_key_exists("has_prepend_html", $context) ? $context["has_prepend_html"] : (function () { throw new RuntimeError('Variable "has_prepend_html" does not exist.', 88, $this->source); })())) {
            // line 89
            echo "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 90
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 90, $this->source); })()), "field", [], "any", false, false, false, 90), "prepend_html", [], "any", false, false, false, 90);
            echo "</span>
                        </div>
                    ";
        }
        // line 93
        echo "
                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'widget');
        echo "

                    ";
        // line 96
        if ((isset($context["has_append_html"]) || array_key_exists("has_append_html", $context) ? $context["has_append_html"] : (function () { throw new RuntimeError('Variable "has_append_html" does not exist.', 96, $this->source); })())) {
            // line 97
            echo "                        <span class=\"input-group-text\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 97, $this->source); })()), "field", [], "any", false, false, false, 97), "append_html", [], "any", false, false, false, 97);
            echo "</span>
                    ";
        }
        // line 99
        echo "                ";
        if ((isset($context["has_input_groups"]) || array_key_exists("has_input_groups", $context) ? $context["has_input_groups"] : (function () { throw new RuntimeError('Variable "has_input_groups" does not exist.', 99, $this->source); })())) {
            echo "</div>";
        }
        // line 100
        echo "
                ";
        // line 101
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 101), "help", [], "any", true, true, false, 101) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 101), "help", [], "any", false, false, false, 101)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 101), "help", [], "any", false, false, false, 101)) : (false))) {
            // line 102
            echo "                    <small class=\"form-help\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 102, $this->source); })()), "field", [], "any", false, false, false, 102), "help", [], "any", false, false, false, 102);
            echo "</small>
                ";
        } elseif ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 103
($context["form"] ?? null), "vars", [], "any", false, true, false, 103), "help", [], "any", true, true, false, 103) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 103), "help", [], "any", false, false, false, 103)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 103), "help", [], "any", false, false, false, 103)) : (false))) {
            // line 104
            echo "                    <small class=\"form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "vars", [], "any", false, false, false, 104), "help", [], "any", false, false, false, 104), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "vars", [], "any", false, false, false, 104), "help_translation_parameters", [], "any", false, false, false, 104), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "vars", [], "any", false, false, false, 104), "translation_domain", [], "any", false, false, false, 104));
            echo "</small>
                ";
        }
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'errors');
        // line 108
        echo "</div>
        </div>
    </div>

    ";
        // line 113
        echo "    ";
        if ((null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 113), "ea_crud_form", [], "any", false, true, false, 113), "ea_field", [], "any", false, true, false, 113), "columns", [], "any", true, true, false, 113)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 113), "ea_crud_form", [], "any", false, true, false, 113), "ea_field", [], "any", false, true, false, 113), "columns", [], "any", false, false, false, 113), null)) : (null)))) {
            // line 114
            echo "        <div class=\"flex-fill\"></div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 118
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 119
        echo "    ";
        if (("ea-autocomplete" == ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", true, true, false, 119)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", false, false, false, 119), false)) : (false)))) {
            // line 120
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 120, $this->source); })()), ["data-ea-i18n-no-results-found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-results-found", [], "EasyAdminBundle"), "data-ea-i18n-no-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-more-results", [], "EasyAdminBundle"), "data-ea-i18n-loading-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.loading-more-results", [], "EasyAdminBundle")]);
            // line 125
            echo "    ";
        }
        // line 126
        echo "
    ";
        // line 127
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 130
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_row"));

        // line 131
        echo "    ";
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 131, $this->source); })()), "rendered", [], "any", false, false, false, 131))) {
            // line 132
            echo "        ";
            $context["row_attr"] = twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 132, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 132, $this->source); })()), 'row')]);
            // line 133
            echo "    ";
        }
        // line 134
        echo "
    ";
        // line 135
        $context["row_attr"] = twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 135, $this->source); })()), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 137
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "vars", [], "any", false, false, false, 137), "ea_crud_form", [], "any", false, false, false, 137), "ea_field", [], "any", false, false, false, 137) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "vars", [], "any", false, false, false, 137), "ea_crud_form", [], "any", false, false, false, 137), "ea_field", [], "any", false, false, false, 137), "customOptions", [], "any", false, false, false, 137), "get", [0 => "entryIsComplex"], "method", false, false, false, 137))) ? ("true") : ("false")), "data-allow-add" => ((        // line 138
(isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 138, $this->source); })())) ? ("true") : ("false")), "data-allow-delete" => ((        // line 139
(isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 139, $this->source); })())) ? ("true") : ("false")), "data-num-items" => ((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 140
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "children", [], "any", false, false, false, 140))) ? (0) : (max(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "children", [], "any", false, false, false, 140))))), "data-form-type-name-placeholder" => ((        // line 141
array_key_exists("prototype", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 141, $this->source); })()), "vars", [], "any", false, false, false, 141), "name", [], "any", false, false, false, 141)) : (""))]);
        // line 143
        echo "
    ";
        // line 144
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 147
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 148
        echo "    ";
        // line 150
        echo "    ";
        $context["isEmptyCollection"] = ((null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 150, $this->source); })())) || (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 150, $this->source); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 150, $this->source); })()))));
        // line 151
        echo "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "ea_crud_form", [], "any", false, true, false, 151), "ea_field", [], "any", false, true, false, 151), "fieldFqcn", [], "any", true, true, false, 151) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "ea_crud_form", [], "any", false, true, false, 151), "ea_field", [], "any", false, true, false, 151), "fieldFqcn", [], "any", false, false, false, 151)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 151), "ea_crud_form", [], "any", false, true, false, 151), "ea_field", [], "any", false, true, false, 151), "fieldFqcn", [], "any", false, false, false, 151)) : (false)));
        // line 152
        echo "
    <div class=\"ea-form-collection-items\">
        ";
        // line 154
        if ((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 154, $this->source); })())) {
            // line 155
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        } elseif (        // line 156
(isset($context["is_array_field"]) || array_key_exists("is_array_field", $context) ? $context["is_array_field"] : (function () { throw new RuntimeError('Variable "is_array_field" does not exist.', 156, $this->source); })())) {
            // line 157
            echo "            ";
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
        ";
        } else {
            // line 159
            echo "            <div class=\"accordion\">
                ";
            // line 160
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
            </div>
        ";
        }
        // line 163
        echo "    </div>

    ";
        // line 165
        if (((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 165, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 165), "prototype", [], "any", true, true, false, 165))) {
            // line 166
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 166, $this->source); })()), ["data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)]);
            // line 167
            echo "    ";
        }
        // line 168
        echo "
    ";
        // line 169
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 169, $this->source); })()), false)) : (false))) {
            // line 170
            echo "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
        </button>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 177
    public function block_collection_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_entry_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "collection_entry_row"));

        // line 178
        echo "    ";
        $context["is_array_field"] = ("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField" == (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })())), "vars", [], "any", false, true, false, 178), "ea_crud_form", [], "any", false, true, false, 178), "ea_field", [], "any", false, true, false, 178), "fieldFqcn", [], "any", true, true, false, 178) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })())), "vars", [], "any", false, true, false, 178), "ea_crud_form", [], "any", false, true, false, 178), "ea_field", [], "any", false, true, false, 178), "fieldFqcn", [], "any", false, false, false, 178)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })())), "vars", [], "any", false, true, false, 178), "ea_crud_form", [], "any", false, true, false, 178), "ea_field", [], "any", false, true, false, 178), "fieldFqcn", [], "any", false, false, false, 178)) : (false)));
        // line 179
        echo "    ";
        $context["is_complex"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })())), "vars", [], "any", false, true, false, 179), "ea_crud_form", [], "any", false, true, false, 179), "ea_field", [], "any", false, true, false, 179), "customOptions", [], "any", false, true, false, 179), "get", [0 => "entryIsComplex"], "method", true, true, false, 179) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })())), "vars", [], "any", false, true, false, 179), "ea_crud_form", [], "any", false, true, false, 179), "ea_field", [], "any", false, true, false, 179), "customOptions", [], "any", false, true, false, 179), "get", [0 => "entryIsComplex"], "method", false, false, false, 179)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })())), "vars", [], "any", false, true, false, 179), "ea_crud_form", [], "any", false, true, false, 179), "ea_field", [], "any", false, true, false, 179), "customOptions", [], "any", false, true, false, 179), "get", [0 => "entryIsComplex"], "method", false, false, false, 179)) : (false));
        // line 180
        echo "    ";
        $context["allows_deleting_items"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })())), "vars", [], "any", false, true, false, 180), "allow_delete", [], "any", true, true, false, 180)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })())), "vars", [], "any", false, true, false, 180), "allow_delete", [], "any", false, false, false, 180), false)) : (false));
        // line 181
        echo "    ";
        $context["render_expanded"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })())), "vars", [], "any", false, true, false, 181), "ea_crud_form", [], "any", false, true, false, 181), "ea_field", [], "any", false, true, false, 181), "customOptions", [], "any", false, true, false, 181), "get", [0 => "renderExpanded"], "method", true, true, false, 181) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })())), "vars", [], "any", false, true, false, 181), "ea_crud_form", [], "any", false, true, false, 181), "ea_field", [], "any", false, true, false, 181), "customOptions", [], "any", false, true, false, 181), "get", [0 => "renderExpanded"], "method", false, false, false, 181)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })())), "vars", [], "any", false, true, false, 181), "ea_crud_form", [], "any", false, true, false, 181), "ea_field", [], "any", false, true, false, 181), "customOptions", [], "any", false, true, false, 181), "get", [0 => "renderExpanded"], "method", false, false, false, 181)) : (false));
        // line 182
        echo "    ";
        ob_start();
        // line 183
        echo "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
        echo "\">
            <i class=\"far fa-trash-alt\"></i>
        </button>
    ";
        $context["delete_item_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 188
        echo "
    <div class=\"field-collection-item ";
        // line 189
        echo (((isset($context["is_complex"]) || array_key_exists("is_complex", $context) ? $context["is_complex"] : (function () { throw new RuntimeError('Variable "is_complex" does not exist.', 189, $this->source); })())) ? ("field-collection-item-complex") : (""));
        echo "\">
        ";
        // line 190
        if (((array_key_exists("is_array_field", $context)) ? (_twig_default_filter((isset($context["is_array_field"]) || array_key_exists("is_array_field", $context) ? $context["is_array_field"] : (function () { throw new RuntimeError('Variable "is_array_field" does not exist.', 190, $this->source); })()), false)) : (false))) {
            // line 191
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), 'widget');
            echo "
            ";
            // line 192
            if ((isset($context["allows_deleting_items"]) || array_key_exists("allows_deleting_items", $context) ? $context["allows_deleting_items"] : (function () { throw new RuntimeError('Variable "allows_deleting_items" does not exist.', 192, $this->source); })())) {
                // line 193
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["delete_item_button"]) || array_key_exists("delete_item_button", $context) ? $context["delete_item_button"] : (function () { throw new RuntimeError('Variable "delete_item_button" does not exist.', 193, $this->source); })()), "html", null, true);
                echo "
            ";
            }
            // line 195
            echo "        ";
        } else {
            // line 196
            echo "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 198
            echo (((isset($context["render_expanded"]) || array_key_exists("render_expanded", $context) ? $context["render_expanded"] : (function () { throw new RuntimeError('Variable "render_expanded" does not exist.', 198, $this->source); })())) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 198, $this->source); })()), "html", null, true);
            echo "-contents\">
                        <i class=\"fas fw fa-chevron-right form-collection-item-collapse-marker\"></i>
                        ";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 200, $this->source); })())), "html", null, true);
            echo "
                    </button>

                    ";
            // line 203
            if ((isset($context["allows_deleting_items"]) || array_key_exists("allows_deleting_items", $context) ? $context["allows_deleting_items"] : (function () { throw new RuntimeError('Variable "allows_deleting_items" does not exist.', 203, $this->source); })())) {
                // line 204
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["delete_item_button"]) || array_key_exists("delete_item_button", $context) ? $context["delete_item_button"] : (function () { throw new RuntimeError('Variable "delete_item_button" does not exist.', 204, $this->source); })()), "html", null, true);
                echo "
                    ";
            }
            // line 206
            echo "                </h2>
                <div id=\"";
            // line 207
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 207, $this->source); })()), "html", null, true);
            echo "-contents\" class=\"accordion-collapse collapse ";
            echo (((isset($context["render_expanded"]) || array_key_exists("render_expanded", $context) ? $context["render_expanded"] : (function () { throw new RuntimeError('Variable "render_expanded" does not exist.', 207, $this->source); })())) ? ("show") : (""));
            echo "\">
                    <div class=\"accordion-body\">
                        ";
            // line 209
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), 'widget');
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 214
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 217
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 218
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 219
        if (twig_in_filter("collection", (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 219, $this->source); })()))) {
            // line 220
            echo "            ";
            // line 222
            echo "            ";
            $context["isEmptyCollection"] = ((null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 222, $this->source); })())) || (twig_test_iterable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 222, $this->source); })())) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 222, $this->source); })()))));
            // line 223
            echo "            ";
            if ((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 223, $this->source); })())) {
                // line 224
                echo "                ";
                $this->displayBlock("empty_collection", $context, $blocks);
                echo "
            ";
            }
            // line 226
            echo "            ";
            if (((isset($context["isEmptyCollection"]) || array_key_exists("isEmptyCollection", $context) ? $context["isEmptyCollection"] : (function () { throw new RuntimeError('Variable "isEmptyCollection" does not exist.', 226, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 226), "prototype", [], "any", true, true, false, 226))) {
                // line 227
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 227, $this->source); })()), ["data-empty-collection" =>                 $this->renderBlock("empty_collection", $context, $blocks)]);
                // line 228
                echo "            ";
            }
            // line 229
            echo "        ";
        }
        // line 230
        echo "
        ";
        // line 231
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 236, $this->source); })()),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 236), "css_class", [], "any", true, true, false, 236)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 236), "css_class", [], "any", false, false, false, 236), "")) : ("")), "html", null, true);
        echo "\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 243
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 244
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 244, $this->source); })()) === false)) {
            // line 245
            echo "<label>";
            echo "</label>";
        } else {
            // line 247
            if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 247, $this->source); })()))) {
                // line 248
                $context["element"] = "legend";
                // line 249
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 249, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 249)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 249), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 251
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 251, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 251, $this->source); })()), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 251)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 251), "")) : ("")) . " form-control-label"))]);
            }
            // line 253
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 253, $this->source); })())) {
                // line 254
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 254, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 254)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 254), "")) : ("")) . " required"))]);
            }
            // line 256
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 256, $this->source); })()))) {
                // line 257
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 257, $this->source); })()))) {
                    // line 258
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 258, $this->source); })()), ["%name%" =>                     // line 259
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 259, $this->source); })()), "%id%" =>                     // line 260
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 260, $this->source); })())]);
                } else {
                    // line 263
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 263, $this->source); })()));
                }
            }
            // line 266
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 266, $this->source); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 266, $this->source); })())) {
                $__internal_compile_2 = $context;
                $__internal_compile_3 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 266, $this->source); })())];
                if (!twig_test_iterable($__internal_compile_3)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 266, $this->getSourceContext());
                }
                $__internal_compile_3 = twig_to_array($__internal_compile_3);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_2;
            }
            echo ">";
            // line 267
            if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 267, $this->source); })()) === false)) {
                // line 268
                if ((((array_key_exists("label_html", $context)) ? (_twig_default_filter((isset($context["label_html"]) || array_key_exists("label_html", $context) ? $context["label_html"] : (function () { throw new RuntimeError('Variable "label_html" does not exist.', 268, $this->source); })()), false)) : (false)) === false)) {
                    // line 269
                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 269, $this->source); })()), "html", null, true);
                } else {
                    // line 271
                    echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 271, $this->source); })());
                }
            } else {
                // line 274
                if ((((array_key_exists("label_html", $context)) ? (_twig_default_filter((isset($context["label_html"]) || array_key_exists("label_html", $context) ? $context["label_html"] : (function () { throw new RuntimeError('Variable "label_html" does not exist.', 274, $this->source); })()), false)) : (false)) === false)) {
                    // line 275
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 275, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 275, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 275, $this->source); })())), "html", null, true);
                } else {
                    // line 277
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 277, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 277, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 277, $this->source); })()));
                }
            }
            // line 280
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 280, $this->source); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 286
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 287
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 288
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 288, $this->source); })()), "templatePath", [0 => "label/empty"], "method", false, false, false, 288));
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 292
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 293
        echo "    ";
        $context["force_error"] = true;
        // line 294
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 297
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 298
        echo "    <div class=\"ea-vich-file\">
        ";
        // line 299
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 299, $this->source); })()), "")) : ("")))) {
            // line 300
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 300, $this->source); })()), "."));
            // line 301
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 308
            echo "            <a class=\"ea-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 308, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 308, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 308, $this->source); })()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 309
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new RuntimeError('Variable "file_extension" does not exist.', 309, $this->source); })()), [], "array", true, true, false, 309) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new RuntimeError('Variable "file_extension" does not exist.', 309, $this->source); })()), [], "array", false, false, false, 309)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), (isset($context["file_extension"]) || array_key_exists("file_extension", $context) ? $context["file_extension"] : (function () { throw new RuntimeError('Variable "file_extension" does not exist.', 309, $this->source); })()), [], "array", false, false, false, 309), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>";
            // line 310
            if (((array_key_exists("download_label", $context)) ? (_twig_default_filter((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new RuntimeError('Variable "download_label" does not exist.', 310, $this->source); })()), false)) : (false))) {
                // line 311
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new RuntimeError('Variable "download_label" does not exist.', 311, $this->source); })()), [], "VichUploaderBundle"), "html", null, true);
            } else {
                // line 313
                echo twig_escape_filter($this->env, ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 313, $this->source); })()), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 313, $this->source); })()), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle"))), "html", null, true);
            }
            // line 315
            echo "</a>
        ";
        }
        // line 317
        echo "
        ";
        // line 318
        ob_start();
        // line 319
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "file", [], "any", false, false, false, 319), "vars", [], "any", false, false, false, 319), "id", [], "any", false, false, false, 319), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 322
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "file", [], "any", false, false, false, 322), "vars", [], "any", false, false, false, 322), "id", [], "any", false, false, false, 322), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 324
        echo "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 327
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "file", [], "any", false, false, false, 329), 'widget', ["attr" => ["onchange" => (isset($context["file_upload_js"]) || array_key_exists("file_upload_js", $context) ? $context["file_upload_js"] : (function () { throw new RuntimeError('Variable "file_upload_js" does not exist.', 329, $this->source); })())], "vich" => true]);
        echo "
            </div>

            ";
        // line 332
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 332)) {
            // line 333
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "delete", [], "any", false, false, false, 333), 'row');
            echo "
            ";
        }
        // line 335
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 336
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 336, $this->source); })()), "file", [], "any", false, false, false, 336), "vars", [], "any", false, false, false, 336), "id", [], "any", false, false, false, 336), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 340
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 341
        echo "    ";
        $context["force_error"] = true;
        // line 342
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 345
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 346
        echo "    ";
        $context["formTypeOptions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 346), "formTypeOptions", [], "any", true, true, false, 346)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 346), "formTypeOptions", [], "any", false, false, false, 346), "")) : (""));
        // line 347
        echo "    <div class=\"ea-vich-image\">
        ";
        // line 348
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 348, $this->source); })()), "")) : ("")))) {
            // line 349
            echo "            ";
            if (twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 349, $this->source); })()), "")) : ("")))) {
                // line 350
                echo "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 351
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 351) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 351, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 351)))) {
                    // line 352
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 352, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 352, $this->source); })()))) : ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 352, $this->source); })()))), "imagine_filter", twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 352, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 352)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 354
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 354, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 354, $this->source); })()))) : ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new RuntimeError('Variable "image_uri" does not exist.', 354, $this->source); })()))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 356
                echo "                </div>
            ";
            } else {
                // line 358
                echo "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 358, $this->source); })()));
                // line 359
                echo "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 360
                echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new RuntimeError('Variable "_lightbox_id" does not exist.', 360, $this->source); })()), "html", null, true);
                echo "\">
                    ";
                // line 361
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 361) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 361, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 361)))) {
                    // line 362
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 362, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 362, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 362, $this->source); })()))), "imagine_filter", twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 362, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 362)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 364
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 364, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 364, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 364, $this->source); })()))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 366
                echo "                </a>

                <div id=\"";
                // line 368
                echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) || array_key_exists("_lightbox_id", $context) ? $context["_lightbox_id"] : (function () { throw new RuntimeError('Variable "_lightbox_id" does not exist.', 368, $this->source); })()), "html", null, true);
                echo "\" class=\"ea-lightbox\">
                    ";
                // line 369
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 369) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 369, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 369)))) {
                    // line 370
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 370, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 370, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 370, $this->source); })()))), "imagine_filter", twig_get_attribute($this->env, $this->source, (isset($context["formTypeOptions"]) || array_key_exists("formTypeOptions", $context) ? $context["formTypeOptions"] : (function () { throw new RuntimeError('Variable "formTypeOptions" does not exist.', 370, $this->source); })()), "imagine_pattern", [], "any", false, false, false, 370)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 372
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["asset_helper"]) || array_key_exists("asset_helper", $context) ? $context["asset_helper"] : (function () { throw new RuntimeError('Variable "asset_helper" does not exist.', 372, $this->source); })()) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 372, $this->source); })()))) : ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new RuntimeError('Variable "download_uri" does not exist.', 372, $this->source); })()))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 374
                echo "                </div>
            ";
            }
            // line 376
            echo "        ";
        }
        // line 377
        echo "
        ";
        // line 378
        ob_start();
        // line 379
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 379, $this->source); })()), "file", [], "any", false, false, false, 379), "vars", [], "any", false, false, false, 379), "id", [], "any", false, false, false, 379), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 382
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 382, $this->source); })()), "file", [], "any", false, false, false, 382), "vars", [], "any", false, false, false, 382), "id", [], "any", false, false, false, 382), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 384
        echo "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 387
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 389
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 389, $this->source); })()), "file", [], "any", false, false, false, 389), 'widget', ["attr" => ["onchange" => (isset($context["file_upload_js"]) || array_key_exists("file_upload_js", $context) ? $context["file_upload_js"] : (function () { throw new RuntimeError('Variable "file_upload_js" does not exist.', 389, $this->source); })())], "vich" => true]);
        echo "
            </div>

            ";
        // line 392
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 392)) {
            // line 393
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "delete", [], "any", false, false, false, 393), 'row');
            echo "
            ";
        }
        // line 395
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 396
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "file", [], "any", false, false, false, 396), "vars", [], "any", false, false, false, 396), "id", [], "any", false, false, false, 396), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 400
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_rest"));

        // line 401
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), 'rest');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 405
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget"));

        // line 406
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ea_crud_form"]) || array_key_exists("ea_crud_form", $context) ? $context["ea_crud_form"] : (function () { throw new RuntimeError('Variable "ea_crud_form" does not exist.', 406, $this->source); })()), "form_tabs", [], "any", false, false, false, 406)) > 0)) {
            // line 407
            echo "        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 410
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ea_crud_form"]) || array_key_exists("ea_crud_form", $context) ? $context["ea_crud_form"] : (function () { throw new RuntimeError('Variable "ea_crud_form" does not exist.', 410, $this->source); })()), "form_tabs", [], "any", false, false, false, 410));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 411
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 412
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 412)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", [], "array", false, false, false, 412), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", [], "array", false, false, false, 412), "html", null, true);
                echo "-tab\" data-bs-toggle=\"tab\">";
                // line 413
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 413)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 413), false)) : (false))) {
                    // line 414
                    echo "<i class=\"fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 414), "html", null, true);
                    echo "\"></i>";
                }
                // line 416
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab_config"], "label", [], "array", false, false, false, 416), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 416, $this->source); })()), "i18n", [], "any", false, false, false, 416), "translationDomain", [], "any", false, false, false, 416)), "html", null, true);
                // line 417
                if ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 417) > 0)) {
                    // line 418
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 418)], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 419
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 419), "html", null, true);
                    // line 420
                    echo "</span>";
                }
                // line 422
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            echo "                </ul>
                <div class=\"tab-content\">
                    ";
            // line 427
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ea_crud_form"]) || array_key_exists("ea_crud_form", $context) ? $context["ea_crud_form"] : (function () { throw new RuntimeError('Variable "ea_crud_form" does not exist.', 427, $this->source); })()), "form_tabs", [], "any", false, false, false, 427));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 428
                echo "                        <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "id", [], "array", false, false, false, 428), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 428)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 428)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", false, false, false, 428), "")) : ("")), "html", null, true);
                echo "\">
                            ";
                // line 429
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 429)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", false, false, false, 429), false)) : (false))) {
                    // line 430
                    echo "                                <div class=\"content-header-help tab-help\">
                                    ";
                    // line 431
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", false, false, false, 431), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 431, $this->source); })()), "i18n", [], "any", false, false, false, 431), "translationDomain", [], "any", false, false, false, 431));
                    echo "
                                </div>
                            ";
                }
                // line 434
                echo "
                            <div class=\"row\">
                                ";
                // line 436
                if ((array_key_exists("tab_name", $context) && $context["tab_name"])) {
                    // line 437
                    echo "                                    ";
                    // line 448
                    echo "                                    ";
                    echo twig_call_macro($macros["_self"], "macro_recursiveTabForm", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 448, $this->source); })()), (isset($context["ea_crud_form"]) || array_key_exists("ea_crud_form", $context) ? $context["ea_crud_form"] : (function () { throw new RuntimeError('Variable "ea_crud_form" does not exist.', 448, $this->source); })()), $context["tab_name"]], 448, $context, $this->getSourceContext());
                    echo "
                                ";
                }
                // line 450
                echo "                                ";
                $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
                echo "
                            </div>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 454
            echo "                </div>
            </div>
        </div>
    ";
        } else {
            // line 458
            echo "        ";
            $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 462
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget_panels"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_crud_widget_panels"));

        // line 463
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ea_crud_form"]) || array_key_exists("ea_crud_form", $context) ? $context["ea_crud_form"] : (function () { throw new RuntimeError('Variable "ea_crud_form" does not exist.', 463, $this->source); })()), "form_panels", [], "any", false, false, false, 463), function ($__panel_config__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; return ( !twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 463) || (twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 463) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 463, $this->source); })()))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["panel_name"] => $context["panel_config"]) {
            // line 464
            echo "        ";
            $context["panel_has_header"] = ((((twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", true, true, false, 464)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 464), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 464)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 464), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 464)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 464), false)) : (false)));
            // line 465
            echo "
        ";
            // line 466
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsible", [], "any", false, false, false, 466);
            // line 467
            echo "        ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsed", [], "any", false, false, false, 467);
            // line 468
            echo "
        <div class=\"";
            // line 469
            (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", true, true, false, 469) &&  !(null === twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 469)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 469), "html", null, true))) : (print ("")));
            echo "\">
            <div class=\"form-panel\">
                ";
            // line 471
            if ((isset($context["panel_has_header"]) || array_key_exists("panel_has_header", $context) ? $context["panel_has_header"] : (function () { throw new RuntimeError('Variable "panel_has_header" does not exist.', 471, $this->source); })())) {
                // line 472
                echo "                    <div class=\"form-panel-header ";
                echo (((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 472, $this->source); })())) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 472)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 472), false)) : (false)))) ? ("with-help") : (""));
                echo "\">
                        <div class=\"form-panel-title\">
                            <a ";
                // line 474
                if ( !(isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 474, $this->source); })())) {
                    // line 475
                    echo "                                    href=\"#\" class=\"not-collapsible\"
                               ";
                } else {
                    // line 477
                    echo "                                    href=\"#content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                                    class=\"form-panel-collapse ";
                    // line 478
                    echo (((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 478, $this->source); })())) ? ("collapsed") : (""));
                    echo "\"
                                    aria-expanded=\"";
                    // line 479
                    echo (((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 479, $this->source); })())) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\"
                               ";
                }
                // line 481
                echo "                            >
                                ";
                // line 482
                if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 482, $this->source); })())) {
                    // line 483
                    echo "                                    <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                                ";
                }
                // line 485
                echo "
                                ";
                // line 486
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 486)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 486), false)) : (false))) {
                    // line 487
                    echo "                                    <i class=\"form-panel-icon ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 487), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 489
                echo "                                ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 489));
                echo "
                            </a>

                            ";
                // line 492
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 492)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 492), false)) : (false))) {
                    // line 493
                    echo "                                <div class=\"form-panel-help\">";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 493));
                    echo "</div>
                            ";
                }
                // line 495
                echo "                        </div>
                    </div>
                ";
            }
            // line 498
            echo "
                <div id=\"content-";
            // line 499
            echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
            echo "\" class=\"form-panel-body ";
            echo (( !(isset($context["panel_has_header"]) || array_key_exists("panel_has_header", $context) ? $context["panel_has_header"] : (function () { throw new RuntimeError('Variable "panel_has_header" does not exist.', 499, $this->source); })())) ? ("without-header") : (""));
            echo " ";
            echo (((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 499, $this->source); })())) ? ("collapse") : (""));
            echo " ";
            echo (( !(isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 499, $this->source); })())) ? ("show") : (""));
            echo "\">
                    <div class=\"row\">
                        ";
            // line 501
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 501, $this->source); })()), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 501), "block_prefixes", [], "any", false, false, false, 501)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 501), "ea_crud_form", [], "any", false, false, false, 501), "form_panel", [], "any", false, false, false, 501) == $context["panel_name"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 502
                echo "                            ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 502), "ea_crud_form", [], "any", false, false, false, 502), "form_tab", [], "any", false, false, false, 502) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 502), "ea_crud_form", [], "any", false, false, false, 502), "form_tab", [], "any", false, false, false, 502) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 502, $this->source); })())))) {
                    // line 503
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                            ";
                }
                // line 505
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 506
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 511
            echo "        ";
            // line 522
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_recursivePanelForm", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 522, $this->source); })())], 522, $context, $this->getSourceContext());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['panel_name'], $context['panel_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 527
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_widget"));

        // line 528
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 528, $this->source); })()), "autocomplete", [], "any", false, false, false, 528), 'widget', ["attr" => twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 528, $this->source); })()), ["required" => (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 528, $this->source); })())])]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 531
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_inner_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_autocomplete_inner_label"));

        // line 532
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 532, $this->source); })())), "vars", [], "any", false, false, false, 532), "name", [], "any", false, false, false, 532);
        // line 533
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 537
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_code_editor_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_code_editor_widget"));

        // line 538
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 538, $this->source); })()), 'widget', ["attr" => twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 538, $this->source); })()), ["data-ea-code-editor-field" => "true", "data-language" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 540
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 540, $this->source); })()), "vars", [], "any", false, false, false, 540), "ea_crud_form", [], "any", false, false, false, 540), "ea_field", [], "any", false, false, false, 540), "customOptions", [], "any", false, false, false, 540), "get", [0 => "language"], "method", false, false, false, 540), "data-tab-size" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 541
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 541, $this->source); })()), "vars", [], "any", false, false, false, 541), "ea_crud_form", [], "any", false, false, false, 541), "ea_field", [], "any", false, false, false, 541), "customOptions", [], "any", false, false, false, 541), "get", [0 => "tabSize"], "method", false, false, false, 541), "data-indent-with-tabs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 542
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 542, $this->source); })()), "vars", [], "any", false, false, false, 542), "ea_crud_form", [], "any", false, false, false, 542), "ea_field", [], "any", false, false, false, 542), "customOptions", [], "any", false, false, false, 542), "get", [0 => "indentWithTabs"], "method", false, false, false, 542)) ? ("true") : ("false")), "data-show-line-numbers" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 543
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 543, $this->source); })()), "vars", [], "any", false, false, false, 543), "ea_crud_form", [], "any", false, false, false, 543), "ea_field", [], "any", false, false, false, 543), "customOptions", [], "any", false, false, false, 543), "get", [0 => "showLineNumbers"], "method", false, false, false, 543)) ? ("true") : ("false")), "data-number-of-rows" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 544
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 544, $this->source); })()), "vars", [], "any", false, false, false, 544), "ea_crud_form", [], "any", false, false, false, 544), "ea_field", [], "any", false, false, false, 544), "customOptions", [], "any", false, false, false, 544), "get", [0 => "numOfRows"], "method", false, false, false, 544)])]);
        // line 545
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 549
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_text_editor_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_text_editor_widget"));

        // line 550
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 550, $this->source); })()), 'widget', ["attr" => twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 550, $this->source); })()), ["class" => "ea-text-editor-content d-none", "data-number-of-rows" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 552
($context["form"] ?? null), "vars", [], "any", false, true, false, 552), "ea_crud_form", [], "any", false, true, false, 552), "ea_field", [], "any", false, true, false, 552), "customOptions", [], "any", false, true, false, 552), "get", [0 => "numOfRows"], "method", true, true, false, 552)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 552), "ea_crud_form", [], "any", false, true, false, 552), "ea_field", [], "any", false, true, false, 552), "customOptions", [], "any", false, true, false, 552), "get", [0 => "numOfRows"], "method", false, false, false, 552), 5)) : (5)), "data-trix-editor-config" => json_encode(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 553
($context["form"] ?? null), "vars", [], "any", false, true, false, 553), "ea_crud_form", [], "any", false, true, false, 553), "ea_field", [], "any", false, true, false, 553), "customOptions", [], "any", false, true, false, 553), "get", [0 => "trixEditorConfig"], "method", true, true, false, 553)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 553), "ea_crud_form", [], "any", false, true, false, 553), "ea_field", [], "any", false, true, false, 553), "customOptions", [], "any", false, true, false, 553), "get", [0 => "trixEditorConfig"], "method", false, false, false, 553), null)) : (null)))])]);
        // line 554
        echo "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 557
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 557, $this->source); })()), "html", null, true);
        echo "\" class=\"trix-content\"></trix-editor>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 562
    public function block_ea_form_row_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_row_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_form_row_row"));

        // line 563
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 563, $this->source); })()), "vars", [], "any", false, false, false, 563), "row_attr", [], "any", false, false, false, 563), "class", [], "any", false, false, false, 563), "html", null, true);
        echo "\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 566
    public function block_ea_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_section_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_section_row"));

        // line 567
        echo "    <div class=\"form-section ";
        echo ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 567), "icon", [], "any", true, true, false, 567)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 567), "icon", [], "any", false, false, false, 567), false)) : (false)) == false) && (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 567), "label", [], "any", true, true, false, 567)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 567), "label", [], "any", false, false, false, 567), false)) : (false)) == false))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 567), "css_class", [], "any", true, true, false, 567)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 567), "css_class", [], "any", false, false, false, 567), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 569
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 569), "icon", [], "any", true, true, false, 569)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 569), "icon", [], "any", false, false, false, 569), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 569, $this->source); })()), "field", [], "any", false, false, false, 569), "icon", [], "any", false, false, false, 569), "html", null, true);
            echo "\"></i>";
        }
        // line 570
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 570), "label", [], "any", true, true, false, 570)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 570), "label", [], "any", false, false, false, 570), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 570), "label", [], "any", true, true, false, 570)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 570), "label", [], "any", false, false, false, 570), "")) : ("")), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 570, $this->source); })()), "i18n", [], "any", false, false, false, 570), "translationDomain", [], "any", false, false, false, 570));
        }
        echo "</span>
        </h2>

        ";
        // line 573
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 573), "help", [], "any", true, true, false, 573)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 573), "help", [], "any", false, false, false, 573), false)) : (false))) {
            // line 574
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 574, $this->source); })()), "field", [], "any", false, false, false, 574), "help", [], "any", false, false, false, 574), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 574, $this->source); })()), "i18n", [], "any", false, false, false, 574), "translationDomain", [], "any", false, false, false, 574));
            echo "</p>
        ";
        }
        // line 576
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 580
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_filters_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_filters_widget"));

        // line 581
        echo "    ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 581), "query", [], "any", false, true, false, 581), "all", [], "method", false, true, false, 581), "filters", [], "array", true, true, false, 581)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 581), "query", [], "any", false, true, false, 581), "all", [], "method", false, true, false, 581), "filters", [], "array", false, false, false, 581), [])) : ([])));
        // line 582
        echo "
    ";
        // line 583
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 583, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 584
            echo "        <div class=\"col-12\">
            <div class=\"filter-field py-1 px-3 ";
            // line 585
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 585)) {
                echo "pb-2";
            }
            echo "\" data-filter-property=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 585), "name", [], "any", false, false, false, 585), "html", null, true);
            echo "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 586
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 586), "html", null, true);
            echo "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 587
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 587), "name", [], "any", false, false, false, 587), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 587, $this->source); })()))) {
                echo "checked";
            }
            echo ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 588
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 588), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 588), "name", [], "any", false, false, false, 588), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 588, $this->source); })()))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 588), "html", null, true);
            echo "\"
                        ";
            // line 589
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 589), "label_attr", [], "any", true, true, false, 589)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 589), "label_attr", [], "any", false, false, false, 589), [])) : ([])));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                        ";
            // line 590
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 590), "label", [], "any", true, true, false, 590)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 590), "label", [], "any", false, false, false, 590), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 590), "name", [], "any", false, false, false, 590)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 590), "name", [], "any", false, false, false, 590)))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 590, $this->source); })()), "i18n", [], "any", false, false, false, 590), "translationDomain", [], "any", false, false, false, 590)), "html", null, true);
            echo "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 593
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 593), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 593), "name", [], "any", false, false, false, 593), (isset($context["applied_filters"]) || array_key_exists("applied_filters", $context) ? $context["applied_filters"] : (function () { throw new RuntimeError('Variable "applied_filters" does not exist.', 593, $this->source); })()))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 593), "html", null, true);
            echo "\">
                    <div class=\"form-widget my-2\">
                        ";
            // line 595
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 603
    public function block_comparison_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comparison_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comparison_widget"));

        // line 604
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 604, $this->source); })()), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 604, $this->source); })()), "vars", [], "any", false, false, false, 604), "attr", [], "any", false, false, false, 604), ["data-ea-comparison-id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 604, $this->source); })()), "vars", [], "any", false, false, false, 604), "id", [], "any", false, false, false, 604)])]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 607
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_numeric_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_numeric_filter_widget"));

        // line 608
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 609
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 609, $this->source); })()), "comparison", [], "any", false, false, false, 609), 'row');
        echo "
        ";
        // line 610
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 610, $this->source); })()), "value", [], "any", false, false, false, 610), 'row');
        echo "
        <div data-ea-value2-of-comparison-id=\"";
        // line 611
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 611, $this->source); })()), "comparison", [], "any", false, false, false, 611), "vars", [], "any", false, false, false, 611), "id", [], "any", false, false, false, 611), "html", null, true);
        echo "\" class=\"";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 611, $this->source); })()), "comparison", [], "any", false, false, false, 611), "vars", [], "any", false, false, false, 611), "value", [], "any", false, false, false, 611) != "between")) ? ("d-none") : (""));
        echo "\">
            ";
        // line 612
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 612, $this->source); })()), "value2", [], "any", false, false, false, 612), 'row');
        echo "
        </div>
    </div>";
        // line 615
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 615, $this->source); })()), 'errors');
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 618
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_datetime_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_datetime_filter_widget"));

        // line 619
        echo "    ";
        $this->displayBlock("ea_numeric_filter_widget", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 622
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_fileupload_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_fileupload_widget"));

        // line 623
        echo "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 625
        $context["placeholder"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.choose_file", [], "EasyAdminBundle");
        // line 626
        echo "            ";
        $context["title"] = "";
        // line 627
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 628
        echo "            ";
        if ((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 628, $this->source); })())) {
            // line 629
            echo "                ";
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 629, $this->source); })())) {
                // line 630
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 630, $this->source); })())) . " ") . (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 630, $this->source); })()));
                // line 631
                echo "                ";
            } else {
                // line 632
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 632, $this->source); })())), "filename", [], "any", false, false, false, 632);
                // line 633
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 633, $this->source); })())), "mTime", [], "any", false, false, false, 633));
                // line 634
                echo "                ";
            }
            // line 635
            echo "            ";
        }
        // line 636
        echo "            <div class=\"custom-file\">
                ";
        // line 637
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 637, $this->source); })()), "file", [], "any", false, false, false, 637), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 637, $this->source); })()), "file", [], "any", false, false, false, 637), "vars", [], "any", false, false, false, 637), "attr", [], "any", false, false, false, 637), ["placeholder" => (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 637, $this->source); })()), "title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 637, $this->source); })()), "data-files-label" => (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 637, $this->source); })()), "class" => "d-none"])]);
        echo "
                ";
        // line 638
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 638, $this->source); })()), "file", [], "any", false, false, false, 638), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (twig_test_empty($_label_ = (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 638, $this->source); })())) ? [] : ["label" => $_label_]));
        echo "
            </div>
            <div class=\"input-group-text\">";
        // line 641
        if ((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 641, $this->source); })())) {
            // line 642
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 642, $this->source); })())) {
                // line 643
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 643, $this->source); })()), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 643, $this->source); })()) + twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 643, $this->source); })()), "size", [], "any", false, false, false, 643)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 645
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 645, $this->source); })())), "size", [], "any", false, false, false, 645)), "html", null, true);
                echo "
                    ";
            }
        }
        // line 648
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 648, $this->source); })())) {
            // line 649
            echo "                    <label class=\"btn ea-fileupload-delete-btn ";
            echo ((twig_test_empty((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 649, $this->source); })()))) ? ("d-none") : (""));
            echo "\" for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 649, $this->source); })()), "delete", [], "any", false, false, false, 649), "vars", [], "any", false, false, false, 649), "id", [], "any", false, false, false, 649), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 653
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 653, $this->source); })()), "file", [], "any", false, false, false, 653), "vars", [], "any", false, false, false, 653), "id", [], "any", false, false, false, 653), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 658
        if (((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 658, $this->source); })()) && (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 658, $this->source); })()))) {
            // line 659
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 662
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 662, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 663
                echo "                        <tr>
                            <td>
                                ";
                // line 665
                if ((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 665, $this->source); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 665, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 665))), "html", null, true);
                    echo "\">";
                }
                // line 666
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 666)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 667
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 667), "html", null, true);
                echo "
                                    </span>
                                ";
                // line 669
                if ((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 669, $this->source); })())) {
                    echo "</a>";
                }
                // line 670
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 671
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 671)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 674
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 678
        echo "        ";
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 678, $this->source); })())) {
            // line 679
            echo "            <div class=\"d-none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 679, $this->source); })()), "delete", [], "any", false, false, false, 679), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 681
        echo "    </div>
    ";
        // line 682
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 682, $this->source); })()), "file", [], "any", false, false, false, 682), 'errors');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 685
    public function block_TODO_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "TODO_ea_fileupload_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "TODO_ea_fileupload_widget"));

        // line 686
        echo "    ";
        $context["placeholder"] = "";
        // line 687
        echo "    ";
        $context["title"] = "";
        // line 688
        echo "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 689
        echo "    ";
        if ((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 689, $this->source); })())) {
            // line 690
            echo "        ";
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 690, $this->source); })())) {
                // line 691
                echo "            ";
                $context["placeholder"] = ((twig_length_filter($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 691, $this->source); })())) . " ") . (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 691, $this->source); })()));
                // line 692
                echo "        ";
            } else {
                // line 693
                echo "            ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 693, $this->source); })())), "filename", [], "any", false, false, false, 693);
                // line 694
                echo "            ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 694, $this->source); })())), "mTime", [], "any", false, false, false, 694));
                // line 695
                echo "        ";
            }
            // line 696
            echo "    ";
        }
        // line 697
        echo "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 700
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 700, $this->source); })()), "file", [], "any", false, false, false, 700), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 700, $this->source); })()), "file", [], "any", false, false, false, 700), "vars", [], "any", false, false, false, 700), "attr", [], "any", false, false, false, 700), ["placeholder" => (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 700, $this->source); })()), "title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 700, $this->source); })()), "data-files-label" => (isset($context["filesLabel"]) || array_key_exists("filesLabel", $context) ? $context["filesLabel"] : (function () { throw new RuntimeError('Variable "filesLabel" does not exist.', 700, $this->source); })()), "class" => "form-control"])]);
        echo "

            ";
        // line 702
        if ((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 702, $this->source); })())) {
            // line 703
            echo "                <span class=\"input-group-text\">
                    ";
            // line 704
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 704, $this->source); })())) {
                // line 705
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 705, $this->source); })()), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 705, $this->source); })()) + twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 705, $this->source); })()), "size", [], "any", false, false, false, 705)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 707
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 707, $this->source); })())), "size", [], "any", false, false, false, 707)), "html", null, true);
                echo "
                    ";
            }
            // line 709
            echo "                </span>
            ";
        }
        // line 711
        echo "
            ";
        // line 712
        if (((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 712, $this->source); })()) && (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 712, $this->source); })()))) {
            // line 713
            echo "                <button class=\"btn ea-fileupload-delete-btn\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>
            ";
        }
        // line 717
        echo "
            ";
        // line 718
        if ((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 718, $this->source); })())) {
            // line 719
            echo "                <button class=\"btn\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </button>
            ";
        }
        // line 723
        echo "        </div>

        ";
        // line 725
        if (((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 725, $this->source); })()) && (isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 725, $this->source); })()))) {
            // line 726
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 729
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currentFiles"]) || array_key_exists("currentFiles", $context) ? $context["currentFiles"] : (function () { throw new RuntimeError('Variable "currentFiles" does not exist.', 729, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 730
                echo "                        <tr>
                            <td>
                                ";
                // line 732
                if ((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 732, $this->source); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 732, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 732))), "html", null, true);
                    echo "\">";
                }
                // line 733
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 733)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 734
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 734), "html", null, true);
                echo "
                                    </span>
                                    ";
                // line 736
                if ((isset($context["download_path"]) || array_key_exists("download_path", $context) ? $context["download_path"] : (function () { throw new RuntimeError('Variable "download_path" does not exist.', 736, $this->source); })())) {
                    echo "</a>";
                }
                // line 737
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 738
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 738)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 741
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 745
        echo "        ";
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 745, $this->source); })())) {
            // line 746
            echo "            <div class=\"d-none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 746, $this->source); })()), "delete", [], "any", false, false, false, 746), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 748
        echo "    </div>

    ";
        // line 750
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 750, $this->source); })()), "file", [], "any", false, false, false, 750), 'errors');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 753
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_slug_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ea_slug_widget"));

        // line 754
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 754, $this->source); })()), ["data-ea-slug-field" => "", "data-target" => json_encode(twig_array_map($this->env, twig_split_filter($this->env,         // line 756
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 756, $this->source); })()), "|"), function ($__name__) use ($context, $macros) { $context["name"] = $__name__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 756, $this->source); })()), "parent", [], "any", false, false, false, 756), "children", [], "any", false, false, false, 756), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 756, $this->source); })()), [], "array", false, false, false, 756), "vars", [], "any", false, false, false, 756), "id", [], "any", false, false, false, 756); }))]);
        // line 758
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-confirm-text", [], "array", true, true, false, 758)) {
            // line 759
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 759, $this->source); })()), ["data-confirm-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,             // line 760
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 760, $this->source); })()), "data-confirm-text", [], "array", false, false, false, 760))]);
            // line 762
            echo "    ";
        }
        // line 763
        echo "
    <div class=\"input-group\">
        ";
        // line 765
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <button type=\"button\" class=\"btn\">
            <i class=\"fas fa-lock fa-fw\"></i>
        </button>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 437
    public function macro_recursiveTabForm($__form__ = null, $__ea_crud_form__ = null, $__tab_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "ea_crud_form" => $__ea_crud_form__,
            "tab_name" => $__tab_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "recursiveTabForm"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "recursiveTabForm"));

            // line 438
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 438, $this->source); })()), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return ( !twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ea_crud_form"]) || array_key_exists("ea_crud_form", $context) ? $context["ea_crud_form"] : (function () { throw new RuntimeError('Variable "ea_crud_form" does not exist.', 438, $this->source); })()), "form_panels", [], "any", false, false, false, 438), function ($__panel_config__, $__form_panel__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; $context["form_panel"] = $__form_panel__; return ((isset($context["form_panel"]) || array_key_exists("form_panel", $context) ? $context["form_panel"] : (function () { throw new RuntimeError('Variable "form_panel" does not exist.', 438, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 438), "ea_crud_form", [], "any", false, false, false, 438), "form_panel", [], "any", false, false, false, 438)); }) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 438), "ea_crud_form", [], "any", false, true, false, 438), "form_tab", [], "any", true, true, false, 438) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 438), "ea_crud_form", [], "any", false, false, false, 438), "form_tab", [], "any", false, false, false, 438) == (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 438, $this->source); })()))) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 438), "ea_crud_form", [], "any", false, true, false, 438), "form_tabs", [], "any", true, true, false, 438))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 439
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 439), "ea_crud_form", [], "any", false, true, false, 439), "form_tabs", [], "any", true, true, false, 439)) {
                    // line 440
                    echo "                                                ";
                    // line 441
                    echo "                                                ";
                    echo twig_call_macro($macros["_self"], "macro_recursiveTabForm", [$context["field"], (isset($context["ea_crud_form"]) || array_key_exists("ea_crud_form", $context) ? $context["ea_crud_form"] : (function () { throw new RuntimeError('Variable "ea_crud_form" does not exist.', 441, $this->source); })()), (isset($context["tab_name"]) || array_key_exists("tab_name", $context) ? $context["tab_name"] : (function () { throw new RuntimeError('Variable "tab_name" does not exist.', 441, $this->source); })())], 441, $context, $this->getSourceContext());
                    echo "
                                            ";
                } else {
                    // line 443
                    echo "                                                ";
                    // line 444
                    echo "                                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                            ";
                }
                // line 446
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            echo "                                    ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 511
    public function macro_recursivePanelForm($__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "recursivePanelForm"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "recursivePanelForm"));

            // line 512
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 512, $this->source); })()), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 512), "block_prefixes", [], "any", false, false, false, 512)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 512), "ea_crud_form", [], "any", false, true, false, 512), "form_tab", [], "any", true, true, false, 512) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 512), "ea_crud_form", [], "any", false, false, false, 512), "form_tab", [], "any", false, false, false, 512)) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 512), "ea_crud_form", [], "any", false, true, false, 512), "form_tabs", [], "any", true, true, false, 512))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 513
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 513), "ea_crud_form", [], "any", false, true, false, 513), "form_tabs", [], "any", true, true, false, 513)) {
                    // line 514
                    echo "                    ";
                    // line 515
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_recursivePanelForm", [$context["field"]], 515, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 517
                    echo "                    ";
                    // line 518
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                ";
                }
                // line 520
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 521
            echo "        ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2709 => 521,  2703 => 520,  2697 => 518,  2695 => 517,  2689 => 515,  2687 => 514,  2684 => 513,  2679 => 512,  2660 => 511,  2645 => 447,  2639 => 446,  2633 => 444,  2631 => 443,  2625 => 441,  2623 => 440,  2620 => 439,  2615 => 438,  2594 => 437,  2578 => 765,  2574 => 763,  2571 => 762,  2569 => 760,  2567 => 759,  2564 => 758,  2562 => 756,  2560 => 754,  2550 => 753,  2538 => 750,  2534 => 748,  2528 => 746,  2525 => 745,  2519 => 741,  2510 => 738,  2507 => 737,  2503 => 736,  2498 => 734,  2493 => 733,  2487 => 732,  2483 => 730,  2479 => 729,  2474 => 726,  2472 => 725,  2468 => 723,  2462 => 719,  2460 => 718,  2457 => 717,  2451 => 713,  2449 => 712,  2446 => 711,  2442 => 709,  2436 => 707,  2430 => 705,  2428 => 704,  2425 => 703,  2423 => 702,  2418 => 700,  2413 => 697,  2410 => 696,  2407 => 695,  2404 => 694,  2401 => 693,  2398 => 692,  2395 => 691,  2392 => 690,  2389 => 689,  2386 => 688,  2383 => 687,  2380 => 686,  2370 => 685,  2358 => 682,  2355 => 681,  2349 => 679,  2346 => 678,  2340 => 674,  2331 => 671,  2328 => 670,  2324 => 669,  2319 => 667,  2314 => 666,  2308 => 665,  2304 => 663,  2300 => 662,  2295 => 659,  2293 => 658,  2284 => 653,  2274 => 649,  2272 => 648,  2265 => 645,  2259 => 643,  2257 => 642,  2255 => 641,  2250 => 638,  2246 => 637,  2243 => 636,  2240 => 635,  2237 => 634,  2234 => 633,  2231 => 632,  2228 => 631,  2225 => 630,  2222 => 629,  2219 => 628,  2216 => 627,  2213 => 626,  2211 => 625,  2207 => 623,  2197 => 622,  2184 => 619,  2174 => 618,  2164 => 615,  2159 => 612,  2153 => 611,  2149 => 610,  2145 => 609,  2142 => 608,  2132 => 607,  2119 => 604,  2109 => 603,  2081 => 595,  2070 => 593,  2064 => 590,  2050 => 589,  2042 => 588,  2036 => 587,  2032 => 586,  2024 => 585,  2021 => 584,  2004 => 583,  2001 => 582,  1998 => 581,  1988 => 580,  1977 => 576,  1971 => 574,  1969 => 573,  1960 => 570,  1954 => 569,  1946 => 567,  1936 => 566,  1923 => 563,  1913 => 562,  1900 => 557,  1895 => 554,  1893 => 553,  1892 => 552,  1890 => 550,  1880 => 549,  1869 => 545,  1867 => 544,  1866 => 543,  1865 => 542,  1864 => 541,  1863 => 540,  1861 => 538,  1851 => 537,  1838 => 533,  1835 => 532,  1825 => 531,  1812 => 528,  1802 => 527,  1785 => 522,  1783 => 511,  1774 => 506,  1768 => 505,  1762 => 503,  1759 => 502,  1755 => 501,  1744 => 499,  1741 => 498,  1736 => 495,  1730 => 493,  1728 => 492,  1721 => 489,  1715 => 487,  1713 => 486,  1710 => 485,  1706 => 483,  1704 => 482,  1701 => 481,  1694 => 479,  1690 => 478,  1685 => 477,  1681 => 475,  1679 => 474,  1671 => 472,  1669 => 471,  1664 => 469,  1661 => 468,  1658 => 467,  1656 => 466,  1653 => 465,  1650 => 464,  1644 => 463,  1634 => 462,  1620 => 458,  1614 => 454,  1595 => 450,  1589 => 448,  1587 => 437,  1585 => 436,  1581 => 434,  1575 => 431,  1572 => 430,  1570 => 429,  1559 => 428,  1542 => 427,  1538 => 425,  1530 => 422,  1527 => 420,  1525 => 419,  1521 => 418,  1519 => 417,  1517 => 416,  1512 => 414,  1510 => 413,  1501 => 412,  1498 => 411,  1494 => 410,  1489 => 407,  1486 => 406,  1476 => 405,  1463 => 401,  1453 => 400,  1440 => 396,  1437 => 395,  1431 => 393,  1429 => 392,  1423 => 389,  1419 => 388,  1416 => 387,  1412 => 384,  1407 => 382,  1400 => 379,  1398 => 378,  1395 => 377,  1392 => 376,  1388 => 374,  1382 => 372,  1376 => 370,  1374 => 369,  1370 => 368,  1366 => 366,  1360 => 364,  1354 => 362,  1352 => 361,  1348 => 360,  1345 => 359,  1342 => 358,  1338 => 356,  1332 => 354,  1326 => 352,  1324 => 351,  1321 => 350,  1318 => 349,  1316 => 348,  1313 => 347,  1310 => 346,  1300 => 345,  1287 => 342,  1284 => 341,  1274 => 340,  1261 => 336,  1258 => 335,  1252 => 333,  1250 => 332,  1244 => 329,  1240 => 328,  1237 => 327,  1233 => 324,  1228 => 322,  1221 => 319,  1219 => 318,  1216 => 317,  1212 => 315,  1209 => 313,  1206 => 311,  1204 => 310,  1201 => 309,  1196 => 308,  1193 => 301,  1190 => 300,  1188 => 299,  1185 => 298,  1175 => 297,  1162 => 294,  1159 => 293,  1149 => 292,  1136 => 288,  1133 => 287,  1123 => 286,  1110 => 280,  1106 => 277,  1103 => 275,  1101 => 274,  1097 => 271,  1094 => 269,  1092 => 268,  1090 => 267,  1075 => 266,  1071 => 263,  1068 => 260,  1067 => 259,  1066 => 258,  1064 => 257,  1062 => 256,  1059 => 254,  1057 => 253,  1054 => 251,  1051 => 249,  1049 => 248,  1047 => 247,  1043 => 245,  1041 => 244,  1031 => 243,  1021 => 238,  1019 => 237,  1013 => 236,  1003 => 235,  990 => 231,  987 => 230,  984 => 229,  981 => 228,  978 => 227,  975 => 226,  969 => 224,  966 => 223,  963 => 222,  961 => 220,  959 => 219,  956 => 218,  946 => 217,  935 => 214,  927 => 209,  920 => 207,  917 => 206,  911 => 204,  909 => 203,  903 => 200,  896 => 198,  892 => 196,  889 => 195,  883 => 193,  881 => 192,  876 => 191,  874 => 190,  870 => 189,  867 => 188,  860 => 184,  857 => 183,  854 => 182,  851 => 181,  848 => 180,  845 => 179,  842 => 178,  832 => 177,  818 => 172,  814 => 170,  812 => 169,  809 => 168,  806 => 167,  803 => 166,  801 => 165,  797 => 163,  791 => 160,  788 => 159,  782 => 157,  780 => 156,  775 => 155,  773 => 154,  769 => 152,  766 => 151,  763 => 150,  761 => 148,  751 => 147,  739 => 144,  736 => 143,  734 => 141,  733 => 140,  732 => 139,  731 => 138,  730 => 137,  729 => 135,  726 => 134,  723 => 133,  720 => 132,  717 => 131,  707 => 130,  695 => 127,  692 => 126,  689 => 125,  686 => 120,  683 => 119,  673 => 118,  661 => 114,  658 => 113,  652 => 108,  650 => 107,  644 => 104,  642 => 103,  637 => 102,  635 => 101,  632 => 100,  627 => 99,  621 => 97,  619 => 96,  614 => 94,  611 => 93,  605 => 90,  602 => 89,  599 => 88,  595 => 87,  592 => 86,  589 => 85,  586 => 84,  584 => 83,  581 => 82,  579 => 81,  568 => 80,  564 => 79,  561 => 78,  559 => 76,  557 => 75,  547 => 74,  536 => 68,  533 => 66,  531 => 65,  529 => 64,  519 => 63,  509 => 60,  507 => 59,  505 => 58,  495 => 57,  485 => 54,  483 => 53,  481 => 52,  471 => 51,  460 => 48,  458 => 47,  456 => 46,  453 => 45,  443 => 44,  433 => 41,  430 => 39,  428 => 38,  426 => 37,  423 => 35,  421 => 34,  411 => 33,  400 => 28,  389 => 26,  384 => 25,  381 => 24,  371 => 23,  360 => 20,  358 => 19,  352 => 17,  349 => 16,  339 => 15,  326 => 12,  321 => 9,  318 => 8,  312 => 6,  309 => 5,  299 => 4,  289 => 753,  286 => 752,  284 => 685,  281 => 684,  279 => 622,  276 => 621,  274 => 618,  271 => 617,  269 => 607,  266 => 606,  264 => 603,  261 => 602,  259 => 580,  256 => 578,  254 => 566,  251 => 565,  249 => 562,  246 => 560,  244 => 549,  241 => 547,  239 => 537,  236 => 535,  234 => 531,  231 => 530,  229 => 527,  226 => 525,  224 => 462,  221 => 461,  219 => 405,  216 => 403,  214 => 400,  211 => 399,  209 => 345,  206 => 344,  204 => 340,  201 => 339,  199 => 297,  196 => 296,  194 => 292,  191 => 291,  189 => 286,  186 => 285,  183 => 283,  181 => 243,  178 => 242,  175 => 240,  173 => 235,  170 => 234,  168 => 217,  165 => 216,  163 => 177,  160 => 176,  158 => 147,  155 => 146,  153 => 130,  150 => 129,  148 => 118,  145 => 117,  143 => 74,  140 => 73,  137 => 71,  135 => 63,  132 => 62,  130 => 57,  127 => 56,  125 => 51,  122 => 50,  120 => 44,  117 => 43,  115 => 33,  112 => 32,  109 => 30,  107 => 23,  104 => 22,  102 => 15,  99 => 14,  97 => 4,  94 => 3,  81 => 0,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% use '@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig' %}

{% block form_start %}
    {% if form.vars.errors|length > 0 and 'ea_crud' in form.vars.block_prefixes|default([]) %}
        {{ form_errors(form, {attr: { class: 'global-invalid-feedback' }}) }}
    {% endif %}

    {{ parent() }}

    <div class=\"row\"> {# this is closed in form_end #}
        <input type=\"hidden\" name=\"referrer\" value=\"{{ ea.request.query.get('referrer') }}\">
{% endblock form_start %}

{% block form_end %}
            {% if not render_rest is defined or render_rest %}
                {{ form_rest(form) }}
            {% endif %}
        </div> {# this closes the '<div class=\"row\">' of form_start #}
    </form>
{% endblock %}

{% block form_errors %}
    {% if errors|length > 0 %}
        {% for error in errors %}
            <div class=\"{{ attr.class|default('') }} invalid-feedback d-block\">{{ error.message }}</div>
        {% endfor %}
    {% endif %}
{% endblock form_errors %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default(''))|trim}) -%}
    {% endif %}
    {%- if type is defined and (type == 'range' or type == 'color') %}
        {# Attribute \"required\" is not supported #}
        {%- set required = false -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block datetime_widget %}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) %}
    <div class=\"datetime-widget datetime-widget-datetime\">
        {{- parent() -}}
    </div>
{% endblock datetime_widget %}

{% block date_widget -%}
    <div class=\"datetime-widget datetime-widget-date\">
        {{- parent() -}}
    </div>
{%- endblock date_widget %}

{% block time_widget -%}
    <div class=\"datetime-widget datetime-widget-time\">
        {{- parent() -}}
    </div>
{%- endblock time_widget %}

{% block file_widget -%}
    {% if vich|default(false) %}
        {%- set type = type|default('file') -%}
        {{- block('form_widget_simple') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock %}

{# Rows #}

{% block form_row %}
    {% set row_attr = row_attr|merge({
        class: row_attr.class|default('') ~ ' form-group'
    }) %}

    <div class=\"{{ form.vars.ea_crud_form.ea_field.columns ?? form.vars.ea_crud_form.ea_field.defaultColumns ?? '' }}\">
        <div {% with { attr: row_attr } %}{{ block('attributes') }}{% endwith %}>
            {{- form_label(form) -}}
            <div class=\"form-widget\">
                {% set has_prepend_html = ea.field.prepend_html|default(null) is not null %}
                {% set has_append_html = ea.field.append_html|default(null) is not null %}
                {% set has_input_groups = has_prepend_html or has_append_html %}

                {% if has_input_groups %}<div class=\"input-group\">{% endif %}
                    {% if has_prepend_html %}
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">{{ ea.field.prepend_html|raw }}</span>
                        </div>
                    {% endif %}

                    {{ form_widget(form) }}

                    {% if has_append_html %}
                        <span class=\"input-group-text\">{{ ea.field.append_html|raw }}</span>
                    {% endif %}
                {% if has_input_groups %}</div>{% endif %}

                {% if ea.field.help ?? false %}
                    <small class=\"form-help\">{{ ea.field.help|raw }}</small>
                {% elseif form.vars.help ?? false %}
                    <small class=\"form-help\">{{ form.vars.help|trans(form.vars.help_translation_parameters, form.vars.translation_domain)|raw }}</small>
                {% endif %}

                {{- form_errors(form) -}}
            </div>
        </div>
    </div>

    {# if a field doesn't define its columns explicitly, insert a fill element to make the field take the entire row space #}
    {% if form.vars.ea_crud_form.ea_field.columns|default(null) is null %}
        <div class=\"flex-fill\"></div>
    {% endif %}
{% endblock form_row %}

{% block choice_widget_collapsed %}
    {% if 'ea-autocomplete' == attr['data-ea-widget']|default(false) %}
        {% set attr = attr|merge({
            'data-ea-i18n-no-results-found': 'autocomplete.no-results-found'|trans({}, 'EasyAdminBundle'),
            'data-ea-i18n-no-more-results': 'autocomplete.no-more-results'|trans({}, 'EasyAdminBundle'),
            'data-ea-i18n-loading-more-results': 'autocomplete.loading-more-results'|trans({}, 'EasyAdminBundle'),
        }) %}
    {% endif %}

    {{ parent() }}
{% endblock choice_widget_collapsed %}

{% block collection_row %}
    {% if prototype is defined and not prototype.rendered %}
        {% set row_attr = row_attr|merge({ 'data-prototype': form_row(prototype) }) %}
    {% endif %}

    {% set row_attr = row_attr|merge({
        'data-ea-collection-field': 'true',
        'data-entry-is-complex': form.vars.ea_crud_form.ea_field and form.vars.ea_crud_form.ea_field.customOptions.get('entryIsComplex') ? 'true' : 'false',
        'data-allow-add': allow_add ? 'true' : 'false',
        'data-allow-delete': allow_delete ? 'true' : 'false',
        'data-num-items': form.children is empty ? 0 : max(form.children|keys),
        'data-form-type-name-placeholder': prototype is defined ? prototype.vars.name : '',
    }) %}

    {{ block('form_row') }}
{% endblock collection_row %}

{% block collection_widget %}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
               returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% set isEmptyCollection = value is null or (value is iterable and value is empty) %}
    {% set is_array_field = 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\ArrayField' == form.vars.ea_crud_form.ea_field.fieldFqcn ?? false %}

    <div class=\"ea-form-collection-items\">
        {% if isEmptyCollection %}
            {{ block('empty_collection') }}
        {% elseif is_array_field %}
            {{ block('form_widget') }}
        {% else %}
            <div class=\"accordion\">
                {{ block('form_widget') }}
            </div>
        {% endif %}
    </div>

    {% if isEmptyCollection or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {% if allow_add|default(false) %}
        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            {{ 'action.add_new_item'|trans({}, 'EasyAdminBundle') }}
        </button>
    {% endif %}
{% endblock collection_widget %}

{% block collection_entry_row %}
    {% set is_array_field = 'EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\Field\\\\ArrayField' == form_parent(form).vars.ea_crud_form.ea_field.fieldFqcn ?? false %}
    {% set is_complex = form_parent(form).vars.ea_crud_form.ea_field.customOptions.get('entryIsComplex') ?? false %}
    {% set allows_deleting_items = form_parent(form).vars.allow_delete|default(false) %}
    {% set render_expanded = form_parent(form).vars.ea_crud_form.ea_field.customOptions.get('renderExpanded') ?? false %}
    {% set delete_item_button %}
        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"{{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}\">
            <i class=\"far fa-trash-alt\"></i>
        </button>
    {% endset %}

    <div class=\"field-collection-item {{ is_complex ? 'field-collection-item-complex' }}\">
        {% if is_array_field|default(false) %}
            {{ form_widget(form) }}
            {% if allows_deleting_items %}
                {{ delete_item_button }}
            {% endif %}
        {% else %}
            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button {{ render_expanded ? '' : 'collapsed' }}\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#{{ id }}-contents\">
                        <i class=\"fas fw fa-chevron-right form-collection-item-collapse-marker\"></i>
                        {{ value|ea_as_string }}
                    </button>

                    {% if allows_deleting_items %}
                        {{ delete_item_button }}
                    {% endif %}
                </h2>
                <div id=\"{{ id }}-contents\" class=\"accordion-collapse collapse {{ render_expanded ? 'show' }}\">
                    <div class=\"accordion-body\">
                        {{ form_widget(form) }}
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock collection_entry_row %}

{% block form_widget_compound %}
    <div class=\"form-widget-compound\">
        {% if 'collection' in block_prefixes %}
            {# the \"is iterable\" check is needed because if an object implements __toString() and
               returns an empty string, \"is empty\" returns true even if it's not a collection #}
            {% set isEmptyCollection = value is null or (value is iterable and value is empty) %}
            {% if isEmptyCollection %}
                {{ block('empty_collection') }}
            {% endif %}
            {% if isEmptyCollection or form.vars.prototype is defined %}
                {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
            {% endif %}
        {% endif %}

        {{ parent() }}
    </div>
{% endblock form_widget_compound %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ ea.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{# Labels #}

{% block form_label -%}
    {% if label is same as(false) -%}
        <label>{# the empty <label> is needed to not break the form design #}</label>
    {%- else -%}
        {%- if compound is defined and compound -%}
            {%- set element = 'legend' -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- else -%}
            {%- set label_attr = label_attr|merge({for: id, class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>
        {%- if translation_domain is same as(false) -%}
            {%- if label_html|default(false) is same as(false) -%}
                {{- label -}}
            {%- else -%}
                {{- label|raw -}}
            {%- endif -%}
        {%- else -%}
            {%- if label_html|default(false) is same as(false) -%}
                {{- label|trans(label_translation_parameters, translation_domain) -}}
            {%- else -%}
                {{- label|trans(label_translation_parameters, translation_domain)|raw -}}
            {%- endif -%}
        {%- endif -%}
        </{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label %}

{# Errors #}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(ea.templatePath('label/empty')) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
    <div class=\"ea-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set file_extension = download_uri|split('.')|last %}
            {% set extension_icons = {
                'gif': 'fa-file-image-o',
                'jpg': 'fa-file-image-o',
                'pdf': 'fa-file-pdf-o',
                'png': 'fa-file-image-o',
                'zip': 'fa-file-archive-o'
            } %}
            <a class=\"ea-vich-file-name\" href=\"{{ asset_helper is same as(true) ? asset(download_uri) : download_uri }}\">
                <i class=\"fa fa-fw {{ extension_icons[file_extension] ?? 'fa-file-o' }}\"></i>
                {%- if download_label|default(false) -%}
                    {{ download_label|trans({}, 'VichUploaderBundle') }}
                {%- else -%}
                    {{ download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') }}
                {%- endif -%}
            </a>
        {% endif %}

        {% set file_upload_js %}
            var newFile = document.getElementById('{{ form.file.vars.id }}').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('{{ form.file.vars.id }}_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        {% endset %}

        <div class=\"ea-vich-file-actions\">
            {# the container element is needed to allow customizing the <input type=\"file\" /> #}
            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> {{ 'action.choose_file'|trans({}, 'EasyAdminBundle') }}
                {{ form_widget(form.file, { 'attr': { 'onchange': file_upload_js }, vich: true}) }}
            </div>

            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}
        </div>
        <div class=\"small\" id=\"{{ form.file.vars.id }}_new_file_name\"></div>
    </div>
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
    {% set formTypeOptions = ea_crud_form.ea_field.formTypeOptions|default('') %}
    <div class=\"ea-vich-image\">
        {% if image_uri|default('') is not empty %}
            {% if download_uri|default('') is empty %}
                <div class=\"ea-lightbox-thumbnail\">
                    {% if formTypeOptions.imagine_pattern is defined and formTypeOptions.imagine_pattern is not empty %}
                        <img style=\"cursor: initial\" src=\"{{ (asset_helper is same as(true) ? asset(image_uri) : image_uri)|ea_apply_filter_if_exists('imagine_filter', formTypeOptions.imagine_pattern) }}\">
                    {% else %}
                        <img style=\"cursor: initial\" src=\"{{ asset_helper is same as(true) ? asset(image_uri) : image_uri }}\">
                    {% endif %}
                </div>
            {% else %}
                {% set _lightbox_id = 'ea-lightbox-' ~ id %}

                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#{{ _lightbox_id }}\">
                    {% if formTypeOptions.imagine_pattern is defined and formTypeOptions.imagine_pattern is not empty %}
                        <img src=\"{{ (asset_helper is same as(true) ? asset(download_uri) : download_uri)|ea_apply_filter_if_exists('imagine_filter', formTypeOptions.imagine_pattern) }}\">
                    {% else %}
                        <img src=\"{{ asset_helper is same as(true) ? asset(download_uri) : download_uri }}\">
                    {% endif %}
                </a>

                <div id=\"{{ _lightbox_id }}\" class=\"ea-lightbox\">
                    {% if formTypeOptions.imagine_pattern is defined and formTypeOptions.imagine_pattern is not empty %}
                        <img src=\"{{ (asset_helper is same as(true) ? asset(download_uri) : download_uri)|ea_apply_filter_if_exists('imagine_filter', formTypeOptions.imagine_pattern) }}\">
                    {% else %}
                        <img src=\"{{ asset_helper is same as(true) ? asset(download_uri) : download_uri }}\">
                    {% endif %}
                </div>
            {% endif %}
        {% endif %}

        {% set file_upload_js %}
            var newFile = document.getElementById('{{ form.file.vars.id }}').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('{{ form.file.vars.id }}_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        {% endset %}

        <div class=\"ea-vich-image-actions\">
            {# the container element is needed to allow customizing the <input type=\"file\" /> #}
            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> {{ 'action.choose_file'|trans({}, 'EasyAdminBundle') }}
                {{ form_widget(form.file, { 'attr': { 'onchange': file_upload_js }, vich: true}) }}
            </div>

            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}
        </div>
        <div class=\"small\" id=\"{{ form.file.vars.id }}_new_file_name\"></div>
    </div>
{% endblock %}

{% block ea_crud_rest %}
    {{ form_rest(form) }}
{% endblock ea_crud_rest %}

{# EasyAdmin form type #}
{% block ea_crud_widget %}
    {% if ea_crud_form.form_tabs|length > 0 %}
        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    {% for tab_name, tab_config in ea_crud_form.form_tabs %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if tab_config.active %}active{% endif %}\" href=\"#{{ tab_config['id'] }}\" id=\"{{ tab_config['id'] }}-tab\" data-bs-toggle=\"tab\">
                                {%- if tab_config.icon|default(false) -%}
                                    <i class=\"fa-fw {{ tab_config.icon }}\"></i>
                                {%- endif -%}
                                {{ tab_config['label']|trans(domain = ea.i18n.translationDomain) }}
                                {%- if tab_config.errors > 0 -%}
                                    <span class=\"badge badge-danger\" title=\"{{ 'form.tab.error_badge_title'|trans({'%count%': tab_config.errors}, 'EasyAdminBundle') }}\">
                                        {{- tab_config.errors -}}
                                    </span>
                                {%- endif -%}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"tab-content\">
                    {% for tab_name, tab_config in ea_crud_form.form_tabs %}
                        <div id=\"{{ tab_config['id'] }}\" class=\"tab-pane {% if tab_config.active %}active{% endif %} {{ tab_config['css_class']|default('') }}\">
                            {% if tab_config['help']|default(false) %}
                                <div class=\"content-header-help tab-help\">
                                    {{ tab_config['help']|trans(domain = ea.i18n.translationDomain)|raw }}
                                </div>
                            {% endif %}

                            <div class=\"row\">
                                {% if tab_name is defined and tab_name %}
                                    {% macro recursiveTabForm(form, ea_crud_form, tab_name) %}
                                        {% for field in form|filter(field => not ea_crud_form.form_panels|filter((panel_config, form_panel) => form_panel == field.vars.ea_crud_form.form_panel) and ((field.vars.ea_crud_form.form_tab is defined and field.vars.ea_crud_form.form_tab == tab_name) or field.vars.ea_crud_form.form_tabs is defined)) %}
                                            {% if field.vars.ea_crud_form.form_tabs is defined %}
                                                {# If the field is a nested CRUD form then only render its children #}
                                                {{ _self.recursiveTabForm(field, ea_crud_form, tab_name) }}
                                            {% else %}
                                                {# Render all other fields #}
                                                {{ form_row(field) }}
                                            {% endif %}
                                        {% endfor %}
                                    {% endmacro %}
                                    {{ _self.recursiveTabForm(form, ea_crud_form, tab_name) }}
                                {% endif %}
                                {{ block('ea_crud_widget_panels') }}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% else %}
        {{ block('ea_crud_widget_panels') }}
    {% endif %}
{% endblock ea_crud_widget %}

{% block ea_crud_widget_panels %}
    {% for panel_name, panel_config in ea_crud_form.form_panels|filter(panel_config => not panel_config.form_tab or panel_config.form_tab == tab_name) %}
        {% set panel_has_header = panel_config.label|default(false) or panel_config.icon|default(false) or panel_config.help|default(false) %}

        {% set collapsible = panel_config.collapsible %}
        {% set collapsed = panel_config.collapsed %}

        <div class=\"{{ panel_config.css_class ?? '' }}\">
            <div class=\"form-panel\">
                {% if panel_has_header %}
                    <div class=\"form-panel-header {{ collapsible ? 'collapsible' }} {{ panel_config.help|default(false) is not empty ? 'with-help' }}\">
                        <div class=\"form-panel-title\">
                            <a {% if not collapsible %}
                                    href=\"#\" class=\"not-collapsible\"
                               {% else %}
                                    href=\"#content-{{ panel_name }}\" data-bs-toggle=\"collapse\"
                                    class=\"form-panel-collapse {{ collapsed ? 'collapsed' }}\"
                                    aria-expanded=\"{{ collapsed ? 'false' : 'true' }}\" aria-controls=\"content-{{ panel_name }}\"
                               {% endif %}
                            >
                                {% if collapsible %}
                                    <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                                {% endif %}

                                {% if panel_config.icon|default(false) %}
                                    <i class=\"form-panel-icon {{ panel_config.icon }}\"></i>
                                {% endif %}
                                {{ panel_config.label|trans|raw }}
                            </a>

                            {% if panel_config.help|default(false) %}
                                <div class=\"form-panel-help\">{{ panel_config.help|trans|raw }}</div>
                            {% endif %}
                        </div>
                    </div>
                {% endif %}

                <div id=\"content-{{ panel_name }}\" class=\"form-panel-body {{ not panel_has_header ? 'without-header' }} {{ collapsible ? 'collapse' }} {{ not collapsed ? 'show'}}\">
                    <div class=\"row\">
                        {% for field in form|filter(field => 'hidden' not in field.vars.block_prefixes and field.vars.ea_crud_form.form_panel == panel_name) %}
                            {% if not field.vars.ea_crud_form.form_tab or field.vars.ea_crud_form.form_tab == tab_name %}
                                {{ form_row(field) }}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        {% macro recursivePanelForm(form) %}
            {% for field in form|filter(field => 'hidden' not in field.vars.block_prefixes and ((field.vars.ea_crud_form.form_tab is defined and not field.vars.ea_crud_form.form_tab) or field.vars.ea_crud_form.form_tabs is defined)) %}
                {% if field.vars.ea_crud_form.form_tabs is defined %}
                    {# If the field is a nested CRUD form then only render its children #}
                    {{ _self.recursivePanelForm(field) }}
                {% else %}
                    {# Render all other fields #}
                    {{ form_row(field) }}
                {% endif %}
            {% endfor %}
        {% endmacro %}
        {{ _self.recursivePanelForm(form) }}
    {% endfor %}
{% endblock ea_crud_widget_panels %}

{# EasyAdminAutocomplete form type #}
{% block ea_autocomplete_widget %}
    {{ form_widget(form.autocomplete, { attr: attr|merge({ required: required }) }) }}
{% endblock ea_autocomplete_widget %}

{% block ea_autocomplete_inner_label %}
    {% set name = form_parent(form).vars.name %}
    {{ block('form_label') }}
{% endblock ea_autocomplete_inner_label %}

{# EasyAdmin's CodeEditor form type #}
{% block ea_code_editor_widget %}
    {{ form_widget(form, { attr: attr|merge({
        'data-ea-code-editor-field': 'true',
        'data-language': form.vars.ea_crud_form.ea_field.customOptions.get('language'),
        'data-tab-size': form.vars.ea_crud_form.ea_field.customOptions.get('tabSize'),
        'data-indent-with-tabs': form.vars.ea_crud_form.ea_field.customOptions.get('indentWithTabs') ? 'true' : 'false',
        'data-show-line-numbers': form.vars.ea_crud_form.ea_field.customOptions.get('showLineNumbers') ? 'true' : 'false',
        'data-number-of-rows': form.vars.ea_crud_form.ea_field.customOptions.get('numOfRows'),
    }) }) }}
{% endblock ea_code_editor_widget %}

{# EasyAdmin's TextEditor form type #}
{% block ea_text_editor_widget %}
    {{ form_widget(form, { attr: attr|merge({
        class: 'ea-text-editor-content d-none',
        'data-number-of-rows': form.vars.ea_crud_form.ea_field.customOptions.get('numOfRows')|default(5),
        'data-trix-editor-config': form.vars.ea_crud_form.ea_field.customOptions.get('trixEditorConfig')|default(null)|json_encode,
    }) }) }}

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"{{ id }}\" class=\"trix-content\"></trix-editor>
    </div>
{% endblock ea_text_editor_widget %}

{# EasyAdminSection form type #}
{% block ea_form_row_row %}
    <div class=\"{{ form.vars.row_attr.class }}\"></div>
{% endblock %}

{% block ea_section_row %}
    <div class=\"form-section {{ ea.field.icon|default(false) == false and ea.field.label|default(false) == false ? 'form-section-empty' }} {{ ea.field.css_class|default('') }}\">
        <h2>
            {% if ea.field.icon|default(false) %}<i class=\"fa fa-fw fa-{{ ea.field.icon }}\"></i>{% endif %}
            <span>{% if ea.field.label|default(false) %}{{ ea.field.label|default('')|trans(domain = ea.i18n.translationDomain)|raw }}{% endif %}</span>
        </h2>

        {% if ea.field.help|default(false) %}
            <p class=\"form-section-help\">{{ ea.field.help|trans(domain = ea.i18n.translationDomain)|raw }}</p>
        {% endif %}
    </div>
{% endblock ea_section_row %}

{# EasyAdminFilters form type #}
{% block ea_filters_widget %}
    {% set applied_filters = ea.request.query.all()['filters']|default([])|keys %}

    {% for field in form %}
        <div class=\"col-12\">
            <div class=\"filter-field py-1 px-3 {% if loop.last %}pb-2{% endif %}\" data-filter-property=\"{{ field.vars.name }}\">
                <div class=\"filter-heading\" id=\"filter-heading-{{ loop.index }}\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" {% if field.vars.name in applied_filters %}checked{% endif %}>
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-{{ loop.index }}\" aria-expanded=\"{{ field.vars.name in applied_filters ? 'true' : 'false' }}\" aria-controls=\"filter-content-{{ loop.index }}\"
                        {% for name, value in field.vars.label_attr|default([]) %}{{ name }}=\"{{ value|e('html_attr') }}\" {% endfor %}>
                        {{ field.vars.label|default(field.vars.name|humanize)|trans(domain = ea.i18n.translationDomain) }}
                    </a>
                </div>
                <div id=\"filter-content-{{ loop.index }}\" class=\"filter-content collapse {% if field.vars.name in applied_filters %}show{% endif %}\" aria-labelledby=\"filter-heading-{{ loop.index }}\">
                    <div class=\"form-widget my-2\">
                        {{ form_widget(field) }}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock ea_filters_widget %}

{% block comparison_widget %}
    {{ form_widget(form, { attr: form.vars.attr|merge({'data-ea-comparison-id': form.vars.id}) }) }}
{% endblock comparison_widget %}

{% block ea_numeric_filter_widget %}
    <div class=\"form-widget-compound\">
        {{ form_row(form.comparison) }}
        {{ form_row(form.value) }}
        <div data-ea-value2-of-comparison-id=\"{{ form.comparison.vars.id }}\" class=\"{{ form.comparison.vars.value != 'between' ? 'd-none' }}\">
            {{ form_row(form.value2) }}
        </div>
    </div>
    {{- form_errors(form) -}}
{% endblock ea_numeric_filter_widget %}

{% block ea_datetime_filter_widget %}
    {{ block('ea_numeric_filter_widget') }}
{% endblock ea_datetime_filter_widget %}

{% block ea_fileupload_widget %}
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            {% set placeholder = t('action.choose_file', {}, 'EasyAdminBundle') %}
            {% set title = '' %}
            {% set filesLabel = 'files'|trans({}, 'EasyAdminBundle') %}
            {% if currentFiles %}
                {% if multiple %}
                    {% set placeholder = currentFiles|length ~ ' ' ~ filesLabel %}
                {% else %}
                    {% set placeholder = (currentFiles|first).filename %}
                    {% set title = (currentFiles|first).mTime|date %}
                {% endif %}
            {% endif %}
            <div class=\"custom-file\">
                {{ form_widget(form.file, { attr: form.file.vars.attr|merge({ placeholder: placeholder, title: title, 'data-files-label': filesLabel, class: 'd-none' }) }) }}
                {{ form_label(form.file, placeholder, { label_attr: { class: 'custom-file-label' }}) }}
            </div>
            <div class=\"input-group-text\">
                {%- if currentFiles -%}
                    {% if multiple %}
                        {{ (currentFiles|reduce((carry, file) => carry + file.size))|ea_filesize }}
                    {% else %}
                        {{ (currentFiles|first).size|ea_filesize }}
                    {% endif %}
                {%- endif -%}
                {% if allow_delete %}
                    <label class=\"btn ea-fileupload-delete-btn {{ currentFiles is empty ? 'd-none' }}\" for=\"{{ form.delete.vars.id }}\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                {% endif %}
                <label class=\"btn\" for=\"{{ form.file.vars.id }}\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        {% if multiple and currentFiles %}
            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    {% for file in currentFiles %}
                        <tr>
                            <td>
                                {% if download_path %}<a href=\"{{ asset(download_path ~ file.filename) }}\">{% endif %}
                                    <span title=\"{{ file.mTime|date }}\">
                                        <i class=\"fa fa-file-o\"></i> {{ file.filename }}
                                    </span>
                                {% if download_path %}</a>{% endif %}
                            </td>
                            <td class=\"text-right file-size\">{{ file.size|ea_filesize }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
        {% if allow_delete %}
            <div class=\"d-none\">{{ form_widget(form.delete, { label: false }) }}</div>
        {% endif %}
    </div>
    {{ form_errors(form.file) }}
{% endblock %}

{% block TODO_ea_fileupload_widget %}
    {% set placeholder = '' %}
    {% set title = '' %}
    {% set filesLabel = 'files'|trans({}, 'EasyAdminBundle') %}
    {% if currentFiles %}
        {% if multiple %}
            {% set placeholder = currentFiles|length ~ ' ' ~ filesLabel %}
        {% else %}
            {% set placeholder = (currentFiles|first).filename %}
            {% set title = (currentFiles|first).mTime|date %}
        {% endif %}
    {% endif %}

    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            {{ form_widget(form.file, { attr: form.file.vars.attr|merge({ placeholder: placeholder, title: title, 'data-files-label': filesLabel, class: 'form-control' }) }) }}

            {% if currentFiles %}
                <span class=\"input-group-text\">
                    {% if multiple %}
                        {{ (currentFiles|reduce((carry, file) => carry + file.size))|ea_filesize }}
                    {% else %}
                        {{ (currentFiles|first).size|ea_filesize }}
                    {% endif %}
                </span>
            {% endif %}

            {% if currentFiles and allow_delete %}
                <button class=\"btn ea-fileupload-delete-btn\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>
            {% endif %}

            {% if currentFiles %}
                <button class=\"btn\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </button>
            {% endif %}
        </div>

        {% if multiple and currentFiles %}
            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    {% for file in currentFiles %}
                        <tr>
                            <td>
                                {% if download_path %}<a href=\"{{ asset(download_path ~ file.filename) }}\">{% endif %}
                                    <span title=\"{{ file.mTime|date }}\">
                                        <i class=\"fa fa-file-o\"></i> {{ file.filename }}
                                    </span>
                                    {% if download_path %}</a>{% endif %}
                            </td>
                            <td class=\"text-right file-size\">{{ file.size|ea_filesize }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}
        {% if allow_delete %}
            <div class=\"d-none\">{{ form_widget(form.delete, { label: false }) }}</div>
        {% endif %}
    </div>

    {{ form_errors(form.file) }}
{% endblock %}

{% block ea_slug_widget %}
    {% set attr = attr|merge({
        'data-ea-slug-field': '',
        'data-target': target|split('|')|map(name => form.parent.children[name].vars.id)|json_encode
    }) %}
    {% if attr['data-confirm-text'] is defined %}
        {% set attr = attr|merge({
            'data-confirm-text': attr['data-confirm-text']|trans
        }) %}
    {% endif %}

    <div class=\"input-group\">
        {{ block('form_widget') }}
        <button type=\"button\" class=\"btn\">
            <i class=\"fas fa-lock fa-fw\"></i>
        </button>
    </div>
{% endblock %}
", "@EasyAdmin/crud/form_theme.html.twig", "C:\\symfony\\projet_web_bienEtre_2023 - apresavecNatacha\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\form_theme.html.twig");
    }
}

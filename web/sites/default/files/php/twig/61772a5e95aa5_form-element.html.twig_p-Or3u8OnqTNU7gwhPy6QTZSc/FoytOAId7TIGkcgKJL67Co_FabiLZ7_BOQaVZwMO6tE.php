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

/* core/themes/stable/templates/form/form-element.html.twig */
class __TwigTemplate_ddd0a1b5dd727cdc279a9c3983d6ab0d9075af23bf303c43641fb47c42cda7ca extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 51
($context["type"] ?? null), 51, $this->source))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["name"] ?? null), 52, $this->source))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["name"] ?? null), 53, $this->source))), 5 => ((!twig_in_filter(        // line 54
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 6 => (((        // line 55
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 7 => ((        // line 56
($context["errors"] ?? null)) ? ("form-item--error") : (""))];
        // line 60
        $context["description_classes"] = [0 => "description", 1 => (((        // line 62
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 65
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
        echo ">
  ";
        // line 66
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 67
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 67, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 69
        echo "  ";
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 70
            echo "    <span class=\"field-prefix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 70, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 72
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 72))) {
            // line 73
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo ">
      ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 77
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 77, $this->source), "html", null, true);
        echo "
  ";
        // line 78
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 79
            echo "    <span class=\"field-suffix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 79, $this->source), "html", null, true);
            echo "</span>
  ";
        }
        // line 81
        echo "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 82
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 82, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 84
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 85
            echo "    <div class=\"form-item--error-message\">
      ";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 86, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 89
        echo "  ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 89))) {
            // line 90
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 90), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 90), 90, $this->source), "html", null, true);
            echo ">
      ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 94
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 94,  128 => 91,  123 => 90,  120 => 89,  114 => 86,  111 => 85,  108 => 84,  102 => 82,  99 => 81,  93 => 79,  91 => 78,  86 => 77,  80 => 74,  75 => 73,  72 => 72,  66 => 70,  63 => 69,  57 => 67,  55 => 66,  50 => 65,  48 => 62,  47 => 60,  45 => 56,  44 => 55,  43 => 54,  42 => 53,  41 => 52,  40 => 51,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable/templates/form/form-element.html.twig", "/home/jdiaz/emmatec/web/core/themes/stable/templates/form/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48, "if" => 66);
        static $filters = array("clean_class" => 51, "escape" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

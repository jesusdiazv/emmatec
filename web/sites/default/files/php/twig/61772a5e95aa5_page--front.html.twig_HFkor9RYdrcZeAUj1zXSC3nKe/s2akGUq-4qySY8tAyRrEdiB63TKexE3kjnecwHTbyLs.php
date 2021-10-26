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

/* themes/vani/templates/layout/page--front.html.twig */
class __TwigTemplate_d202aea02e1cdb79005da8f824886b54c54a83a7186fc50c72935fa0dc114bcc extends \Twig\Template
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
        // line 11
        $this->loadTemplate("@vani/template-parts/header.html.twig", "themes/vani/templates/layout/page--front.html.twig", 11)->display($context);
        // line 12
        $this->loadTemplate("@vani/template-parts/highlighted.html.twig", "themes/vani/templates/layout/page--front.html.twig", 12)->display($context);
        // line 13
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  ";
        // line 14
        $this->loadTemplate("@vani/template-parts/content_home.html.twig", "themes/vani/templates/layout/page--front.html.twig", 14)->display($context);
        // line 15
        echo "  <div class=\"container clear\">
    ";
        // line 16
        if (($context["front_sidebar"] ?? null)) {
            // line 17
            echo "      <div class=\"main-container\">
    ";
        }
        // line 19
        echo "    <main id=\"main\" class=\"page-content home-content clear\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 21
        echo "      ";
        $this->loadTemplate("@vani/template-parts/content_top.html.twig", "themes/vani/templates/layout/page--front.html.twig", 21)->display($context);
        // line 22
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
      ";
        // line 24
        echo "      ";
        $this->loadTemplate("@vani/template-parts/content_bottom.html.twig", "themes/vani/templates/layout/page--front.html.twig", 24)->display($context);
        // line 25
        echo "    </main>
    ";
        // line 26
        if (($context["front_sidebar"] ?? null)) {
            // line 27
            echo "      ";
            $this->loadTemplate("@vani/template-parts/sidebar_left.html.twig", "themes/vani/templates/layout/page--front.html.twig", 27)->display($context);
            // line 28
            echo "      ";
            $this->loadTemplate("@vani/template-parts/sidebar_right.html.twig", "themes/vani/templates/layout/page--front.html.twig", 28)->display($context);
            // line 29
            echo "      </div> ";
            // line 30
            echo "    ";
        }
        // line 31
        echo "  </div> ";
        // line 32
        echo "</div>";
        // line 33
        $this->loadTemplate("@vani/template-parts/footer.html.twig", "themes/vani/templates/layout/page--front.html.twig", 33)->display($context);
        // line 34
        if (($context["slider_show"] ?? null)) {
            // line 35
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("vani/slider"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/vani/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  93 => 34,  91 => 33,  89 => 32,  87 => 31,  84 => 30,  82 => 29,  79 => 28,  76 => 27,  74 => 26,  71 => 25,  68 => 24,  63 => 22,  60 => 21,  57 => 19,  53 => 17,  51 => 16,  48 => 15,  46 => 14,  43 => 13,  41 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/vani/templates/layout/page--front.html.twig", "/home/jdiaz/emmatec/web/themes/vani/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 11, "if" => 16);
        static $filters = array("escape" => 22);
        static $functions = array("attach_library" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['attach_library']
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

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

/* themes/bootstrap_barrio/templates/layout/page.html.twig */
class __TwigTemplate_d83727cff97312e594eaad3e4a6d073576952490854a07e1093ff2866d7607c6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 124
        echo "    </header>
    ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 125)) {
            // line 126
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 127, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 132
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 132)) {
            // line 133
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 140
            echo "    ";
        }
        // line 141
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 142
        $this->displayBlock('content', $context, $blocks);
        // line 169
        echo "    </div>
    ";
        // line 170
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 170) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 170)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 170))) {
            // line 171
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 172
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 172, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 173
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo "
          ";
            // line 174
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            echo "
          ";
            // line 175
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 179
        echo "    <footer class=\"site-footer\">
      ";
        // line 180
        $this->displayBlock('footer', $context, $blocks);
        // line 197
        echo "    </footer>
  </div>
</div>
";
    }

    // line 73
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 74) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 74)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 74))) {
            // line 75
            echo "          <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 75, $this->source), "html", null, true);
            echo ">
          ";
            // line 76
            if (($context["container_navbar"] ?? null)) {
                // line 77
                echo "          <div class=\"container\">
          ";
            }
            // line 79
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
              ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
              ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 81)) {
                // line 82
                echo "                <div class=\"form-inline navbar-form ml-auto\">
                  ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 86
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 87
                echo "          </div>
          ";
            }
            // line 89
            echo "          </nav>
        ";
        }
        // line 91
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 91, $this->source), "html", null, true);
        echo ">
          ";
        // line 92
        if (($context["container_navbar"] ?? null)) {
            // line 93
            echo "          <div class=\"container\">
          ";
        }
        // line 95
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
            ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 96) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 96))) {
            // line 97
            echo "              <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_btn_data"] ?? null), 97, $this->source), "html", null, true);
            echo "\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_class"] ?? null), 98, $this->source), "html", null, true);
            echo "\" id=\"CollapsingNavbar\">
                ";
            // line 99
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 100
                echo "                  <div class=\"offcanvas-header\">
                    <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                  </div>
                  <div class=\"offcanvas-body\">
                ";
            }
            // line 105
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
                ";
            // line 106
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 106)) {
                // line 107
                echo "                  <div class=\"form-inline navbar-form justify-content-end\">
                    ";
                // line 108
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 111
            echo "                ";
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 112
                echo "                  </div>
                ";
            }
            // line 114
            echo "\t          </div>
            ";
        }
        // line 116
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 117
            echo "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 119
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 120
            echo "          </div>
          ";
        }
        // line 122
        echo "        </nav>
      ";
    }

    // line 133
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 135, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 142
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 143, $this->source), "html", null, true);
        echo "\">
          ";
        // line 144
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 146
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 146, $this->source), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 149
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 152
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 152)) {
            // line 153
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 153, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 159
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 159)) {
            // line 160
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 160, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 162
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 166
        echo "          </div>
        </div>
      ";
    }

    // line 180
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 181, $this->source), "html", null, true);
        echo "\">
          ";
        // line 182
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 182) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 182)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 182)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 182))) {
            // line 183
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
            echo "
              ";
            // line 185
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
            echo "
              ";
            // line 186
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
            echo "
              ";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 190
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 190)) {
            // line 191
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 192
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 195
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_barrio/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 195,  376 => 192,  373 => 191,  370 => 190,  364 => 187,  360 => 186,  356 => 185,  352 => 184,  349 => 183,  347 => 182,  342 => 181,  338 => 180,  332 => 166,  325 => 162,  319 => 160,  316 => 159,  309 => 155,  303 => 153,  301 => 152,  295 => 149,  289 => 146,  284 => 144,  279 => 143,  275 => 142,  267 => 136,  263 => 135,  260 => 134,  256 => 133,  251 => 122,  247 => 120,  244 => 119,  240 => 117,  237 => 116,  233 => 114,  229 => 112,  226 => 111,  220 => 108,  217 => 107,  215 => 106,  210 => 105,  203 => 100,  201 => 99,  197 => 98,  192 => 97,  190 => 96,  185 => 95,  181 => 93,  179 => 92,  174 => 91,  170 => 89,  166 => 87,  163 => 86,  157 => 83,  154 => 82,  152 => 81,  148 => 80,  143 => 79,  139 => 77,  137 => 76,  132 => 75,  129 => 74,  125 => 73,  118 => 197,  116 => 180,  113 => 179,  106 => 175,  102 => 174,  98 => 173,  94 => 172,  91 => 171,  89 => 170,  86 => 169,  84 => 142,  81 => 141,  78 => 140,  75 => 133,  72 => 132,  65 => 128,  61 => 127,  58 => 126,  56 => 125,  53 => 124,  51 => 73,  47 => 72,  43 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap_barrio/templates/layout/page.html.twig", "/home/jdiaz/emmatec/web/themes/bootstrap_barrio/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 73, "if" => 125);
        static $filters = array("t" => 72, "escape" => 127);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
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

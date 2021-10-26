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

/* themes/d8w3css/templates/layout/page.html.twig */
class __TwigTemplate_1d0ff5133fd7be2f68edd862512baa6c271c791b42ac9e34290d0f8c2db520a5 extends \Twig\Template
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
        // line 57
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 57)) {
            // line 58
            echo "  <!-- Start: Main Navigation - Vertical -->
  <div id=\"main-navigation-v\" class=\"main-navigation-wrapper w3-sidebar w3-bar-block w3-animate-left w3-card w3-theme ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 59, $this->source), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Navigation"));
            echo "\" >
    <div id=\"main-navigation-inner-v\" class=\"main-navigation-inner-v\">
      <div id=\"close-nav\" class=\"close-nav w3-button w3-bar-block w3-large w3-theme ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 61, $this->source), "html", null, true);
            echo "\">
        <i class=\"fa fa-close\"></i>
      </div>
        ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Vertical -->
";
        }
        // line 69
        echo "<!-- Start: Page Wrapper -->
<div class=\"page-wrapper w3-col w3-clear w3-animate-opacity w3-text-theme ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_wrapper"] ?? null), 70, $this->source), "html", null, true);
        echo " \">
  <!-- Start: Header -->
  <header id=\"header\" class=\"w3-col w3-clear w3-theme-l4 ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_header"] ?? null), 72, $this->source), "html", null, true);
        echo "\" role=\"banner\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
    <div id=\"header-inner\" class=\"w3-container header-inner ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 73, $this->source), "html", null, true);
        echo "\">
      ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu_vertical", [], "any", false, false, true, 74)) {
            // line 75
            echo "        <div id=\"open-nav-inner\" class=\"open-nav-inner w3-opacity w3-hover-opacity-off w3-left w3-button w3-left-align w3-large w3-theme ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 75, $this->source), "html", null, true);
            echo "\">
          <i class=\"fa fa-bars\"></i>
        </div>
      ";
        }
        // line 79
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 79)) {
            // line 80
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 82
        echo "    </div>
  </header>
  <!-- End: Header -->
  ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 85)) {
            // line 86
            echo "  <!-- Start: Main Navigation - Horizontal -->
  <div id=\"main-navigation-h\" class=\"w3-col w3-clear main-navigation-wrapper w3-card w3-theme ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 87, $this->source), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main Navigation"));
            echo "\" >
    <div id=\"main-navigation-inner-h\" class=\"w3-row main-navigation-inner-h ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 88, $this->source), "html", null, true);
            echo "\">
      <div class=\"mobile-nav w3-hide-large w3-button w3-block w3-right-align w3-large w3-theme ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_primary_menu"] ?? null), 89, $this->source), "html", null, true);
            echo "\">
        <i class=\"fa fa-bars\"></i>
      </div>
        ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  <!-- End: Main Navigation - Horizontal -->
  ";
        }
        // line 97
        echo "  ";
        if ((($context["is_front"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_text", [], "any", false, false, true, 97))) {
            // line 98
            echo "    <!-- Start: Welcome Text -->
    <div id=\"welcome-text\" class=\"w3-col w3-clear w3-theme-l5 ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_welcome_text"] ?? null), 99, $this->source), "html", null, true);
            echo "\">
      <div id=\"welcome-text-inner\" class=\"w3-row welcome-text-inner ";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 100, $this->source), "html", null, true);
            echo "\">
        ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "welcome_text", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    <!-- End: Welcome Text -->
  ";
        }
        // line 106
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 106)) {
            // line 107
            echo "    <!-- Start: Highlighted -->
    <div id=\"highlighted\" class=\"w3-col w3-clear w3-theme-l2 ";
            // line 108
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_highlighted"] ?? null), 108, $this->source), "html", null, true);
            echo "\">
      <div id=\"highlighted-inner\" class=\"d8-fade w3-row highlighted-inner ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 109, $this->source), "html", null, true);
            echo "\">
        ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    <!-- End: Highlighted -->
  ";
        }
        // line 115
        echo "  ";
        if (($context["is_front"] ?? null)) {
            // line 116
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 116) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 116)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 116))) {
                // line 117
                echo "      <!-- Start: Top Container -->
      <div id=\"top-container\" class=\"w3-col w3-clear w3-theme-l4 ";
                // line 118
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_container"] ?? null), 118, $this->source), "html", null, true);
                echo "\">
        <div id=\"top-container-inner\" class=\"w3-row-padding w3-padding-large top-container-inner ";
                // line 119
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 119, $this->source), "html", null, true);
                echo "\">
          ";
                // line 120
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 120)) {
                    // line 121
                    echo "            <!-- Start: Top container first region -->
            <div class=\"";
                    // line 122
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 122, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " first-top\" >
              <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                    // line 123
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_first"] ?? null), 123, $this->source), "html", null, true);
                    echo "\">
               ";
                    // line 124
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
                    echo "
              </div>
            </div>
            <!-- End: Top Container First -->
          ";
                }
                // line 129
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 129)) {
                    // line 130
                    echo "            <!-- Start: Top Container Second  -->
            <div class=\"";
                    // line 131
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 131, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " second-top\">
              <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                    // line 132
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_second"] ?? null), 132, $this->source), "html", null, true);
                    echo "\">
               ";
                    // line 133
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                    echo "
              </div>
            </div>
            <!-- End: Top Container Second -->
          ";
                }
                // line 138
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 138)) {
                    // line 139
                    echo "          <!-- Start: Top Container Third -->
          <div class=\"";
                    // line 140
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_w3css"] ?? null), 140, $this->source), "html", null, true);
                    echo " top-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["top_region"] ?? null)) ? ("top-region") : ("")));
                    echo " third-top\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                    // line 141
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_top_third"] ?? null), 141, $this->source), "html", null, true);
                    echo "\">
              ";
                    // line 142
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
                    echo "
            </div>
          </div>
          <!-- End: Top Container Third -->
          ";
                }
                // line 147
                echo "        </div>
      </div>
      <!-- End: Top container -->
    ";
            }
            // line 151
            echo "  ";
        }
        // line 152
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 152) &&  !($context["is_front"] ?? null))) {
            // line 153
            echo "    <!-- Start: Page Title -->
    <div id=\"page-title\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_page_title"] ?? null), 154, $this->source), "html", null, true);
            echo "\">
      <div id=\"page-title-inner\" class=\"d8-fade w3-row page-title-inner ";
            // line 155
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 155, $this->source), "html", null, true);
            echo "\">
        ";
            // line 156
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
            echo "
      </div>
    </div>
    <!-- End: Page Title -- >
  ";
        }
        // line 161
        echo "  <!-- Start: Main -->
  <div id=\"main-container\" class=\"w3-col w3-clear w3-theme-l5 ";
        // line 162
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_main"] ?? null), 162, $this->source), "html", null, true);
        echo "\">
    <div id=\"main-container-inner\" class=\"w3-container main-container-inner ";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 163, $this->source), "html", null, true);
        echo "\">
      ";
        // line 164
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 164)) {
            // line 165
            echo "        <!-- Breadcrumb -->
        <div class=\"w3-col ";
            // line 166
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_breadcrumb"] ?? null), 166, $this->source), "html", null, true);
            echo "\">
          ";
            // line 167
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo "
        </div>
        <!-- End: Breadcrumb -->
      ";
        }
        // line 171
        echo "      <!-- Start Main Container  -->
      <div class=\"w3-col w3-clear w3-row-padding\">
        ";
        // line 173
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 173)) {
            // line 174
            echo "          <!-- Start Left SideBar -->
          <div class =\"";
            // line 175
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 175, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " first-sidebar\" role=\"complementary\">
            <div class=\"d8-fade w3-card w3-round w3-sidebar-first w3-mobile ";
            // line 176
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_first"] ?? null), 176, $this->source), "html", null, true);
            echo "\">
              ";
            // line 177
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
            echo "
            </div>
          </div>
          <!-- End: Left SideBar -->
        ";
        }
        // line 182
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 182)) {
            // line 183
            echo "          <!-- Start: Main Content -->
          <div class=\"";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_w3css"] ?? null), 184, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " w3css-content\" role=\"main\">
            <div class=\"d8-fade w3-card w3-round w3-mobile  ";
            // line 185
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_content"] ?? null), 185, $this->source), "html", null, true);
            echo "\">
              ";
            // line 186
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 186), 186, $this->source), "html", null, true);
            echo "
            </div>
          </div>
          <!-- End: Main Content -->
        ";
        }
        // line 191
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 191)) {
            // line 192
            echo "          <!-- Start: Right SideBar -->
          <div class=\"";
            // line 193
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 193, $this->source), "html", null, true);
            echo " main-box ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["main_region"] ?? null)) ? ("main-region") : ("")));
            echo " second-sidebar\" role=\"complementary\">
            <div class=\"d8-fade w3-card w3-round w3-sidebar-second w3-mobile ";
            // line 194
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_sidebar_second"] ?? null), 194, $this->source), "html", null, true);
            echo "\">
              ";
            // line 195
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
            echo "
            </div>
          </div>
          <!-- End: Right SideBar -->
        ";
        }
        // line 200
        echo "      </div>
      <!-- Endn: Main Container  -->
    </div>
  </div>
  <!-- End: Main -->
  ";
        // line 205
        if (($context["is_front"] ?? null)) {
            // line 206
            echo "    ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 206) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 206)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 206)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 206))) {
                // line 207
                echo "      <!-- Start: Bottom -->
      <div id=\"bottom-container\" class=\"w3-col w3-clear w3-theme-l2 ";
                // line 208
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_container"] ?? null), 208, $this->source), "html", null, true);
                echo "\">
        <div id=\"bottom-container-inner\" class=\"w3-row-padding w3-padding-large bottom-container-inner ";
                // line 209
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 209, $this->source), "html", null, true);
                echo "\">
            ";
                // line 210
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 210)) {
                    // line 211
                    echo "              <!-- Start: Bottom First -->
              <div class=\"";
                    // line 212
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 212, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " first-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 213
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_first"] ?? null), 213, $this->source), "html", null, true);
                    echo "\">
                  ";
                    // line 214
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                    echo "
                </div>
              </div>
              <!-- End: Bottom First -->
            ";
                }
                // line 219
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 219)) {
                    // line 220
                    echo "              <!-- Start: Bottom Second -->
              <div class=\"";
                    // line 221
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 221, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " second-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 222
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_second"] ?? null), 222, $this->source), "html", null, true);
                    echo "\">
                  ";
                    // line 223
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 223), 223, $this->source), "html", null, true);
                    echo "
                </div>
              </div>
              <!-- End: Bottom Second -->
            ";
                }
                // line 228
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 228)) {
                    // line 229
                    echo "              <!-- Start: Bottom Third  -->
              <div class=\"";
                    // line 230
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 230, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " third-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 231
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_third"] ?? null), 231, $this->source), "html", null, true);
                    echo "\">
                  ";
                    // line 232
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 232), 232, $this->source), "html", null, true);
                    echo "
                </div>
              </div>
              <!-- End: Bottom Third -->
            ";
                }
                // line 237
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 237)) {
                    // line 238
                    echo "              <!-- Start: Bottom Forth  -->
              <div class =\"";
                    // line 239
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_w3css"] ?? null), 239, $this->source), "html", null, true);
                    echo " bottom-box ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["bottom_region"] ?? null)) ? ("bottom-region") : ("")));
                    echo " forth-bottom\">
                <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                    // line 240
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_bottom_forth"] ?? null), 240, $this->source), "html", null, true);
                    echo "\">
                  ";
                    // line 241
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 241), 241, $this->source), "html", null, true);
                    echo "
                </div>
              </div>
              <!-- End: Bottom Forth -->
            ";
                }
                // line 246
                echo "        </div>
      </div>
      <!-- End: Bottom -->
    ";
            }
            // line 250
            echo "  ";
        }
        // line 251
        echo "  ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 251) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 251)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 251))) {
            // line 252
            echo "    <!-- start: Footer -->
    <div id=\"footer-container\" class=\"w3-col w3-clear w3-theme-d3 ";
            // line 253
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_container"] ?? null), 253, $this->source), "html", null, true);
            echo "\">
      <div id=\"footer-container-inner\" class=\"w3-row-padding w3-padding-large footer-container-inner ";
            // line 254
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 254, $this->source), "html", null, true);
            echo "\">

        ";
            // line 256
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 256)) {
                // line 257
                echo "          <!-- Start: Footer First  -->
          <div class=\"";
                // line 258
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 258, $this->source), "html", null, true);
                echo " footer-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " first-footer\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                // line 259
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_first"] ?? null), 259, $this->source), "html", null, true);
                echo "\">
              ";
                // line 260
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 260), 260, $this->source), "html", null, true);
                echo "
            </div>
          </div>
          <!-- End: Footer First -->
        ";
            }
            // line 265
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 265)) {
                // line 266
                echo "          <!-- Start: Footer Second Region -->
          <div class=\"";
                // line 267
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 267, $this->source), "html", null, true);
                echo " footer-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " second-footer\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l5 ";
                // line 268
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_second"] ?? null), 268, $this->source), "html", null, true);
                echo "\">
              ";
                // line 269
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
                echo "
            </div>
          </div>
        <!-- End: Footer Second -->
        ";
            }
            // line 274
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 274)) {
                // line 275
                echo "          <!-- Start: Footer Third -->
          <div class=\"";
                // line 276
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_w3css"] ?? null), 276, $this->source), "html", null, true);
                echo " footer-box ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["footer_region"] ?? null)) ? ("footer-region") : ("")));
                echo " third-footer\">
            <div class=\"d8-fade w3-card w3-round w3-mobile w3-theme-l4 ";
                // line 277
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_third"] ?? null), 277, $this->source), "html", null, true);
                echo "\">
              ";
                // line 278
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 278), 278, $this->source), "html", null, true);
                echo "
            </div>
          </div>
          <!-- End: Footer Third -->
        ";
            }
            // line 283
            echo "      </div>
    </div>
    <!-- End: Footer -->
  ";
        }
        // line 287
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 287) || ($context["show_social_icon"] ?? null))) {
            // line 288
            echo "    <!-- Start: Footer Menu -->
    <div id=\"footer-menu\" class=\"w3-col w3-clear w3-card w3-theme-d4 ";
            // line 289
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_footer_menu"] ?? null), 289, $this->source), "html", null, true);
            echo "\">
      <div id=\"footer-menu-inner\" class=\"w3-row footer-menu-inner ";
            // line 290
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 290, $this->source), "html", null, true);
            echo "\">
        ";
            // line 291
            if (($context["show_social_icon"] ?? null)) {
                // line 292
                echo "          <!-- Start: Social Media -->
          <div class=\"d8-fade w3-center w3-container w3-mobile social-media\">
            ";
                // line 294
                if (($context["facebook_url"] ?? null)) {
                    // line 295
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 295, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 297
                echo "            ";
                if (($context["twitter_url"] ?? null)) {
                    // line 298
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 298, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 300
                echo "            ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 301
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 301, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 303
                echo "            ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 304
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 304, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 306
                echo "            ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 307
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 307, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 309
                echo "            ";
                if (($context["instagram_url"] ?? null)) {
                    // line 310
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 310, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a>
            ";
                }
                // line 312
                echo "            ";
                if (($context["youtube_url"] ?? null)) {
                    // line 313
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 313, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
            ";
                }
                // line 315
                echo "            ";
                if (($context["drupal_url"] ?? null)) {
                    // line 316
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["drupal_url"] ?? null), 316, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity-off w3-hover-text-blue w3-show-inline-block w3-xxlarge w3-padding-large\" target=\"_blank\" ><i class=\"fa fa-drupal\"></i></a>
            ";
                }
                // line 318
                echo "            ";
                if (($context["rss_url"] ?? null)) {
                    // line 319
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 319, $this->source), "html", null, true);
                    echo "\" class=\"w3-opacity w3-hover-opacity w3-hover-text-red w3-show-inline-block w3-xxlarge w3-padding-large\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 321
                echo "          </div>
          <!-- End: Social Media -->
        ";
            }
            // line 324
            echo "        <!-- Start: Bottom Menu -->
        ";
            // line 325
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 325)) {
                // line 326
                echo "          <div class=\"d8-fade w3-container w3-center w3-mobile\">
            ";
                // line 327
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 327), 327, $this->source), "html", null, true);
                echo "
          </div>
          <!-- End: Bottom Menu -->
        ";
            }
            // line 331
            echo "      </div>
    </div>
    <!-- End: Footer Menu -->
  ";
        }
        // line 335
        echo "  ";
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 336
            echo "    <!-- Start: Copyright -->
    <div id=\"copyright\" class=\"w3-col w3-clear w3-theme-d5 ";
            // line 337
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_copyright"] ?? null), 337, $this->source), "html", null, true);
            echo "\">
      <div id=\"copyright-inner\" class=\"w3-row copyright-inner ";
            // line 338
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["website_width"] ?? null), 338, $this->source), "html", null, true);
            echo "\">
        ";
            // line 339
            if (($context["copyright_text"] ?? null)) {
                // line 340
                echo "          <!-- Start: Copyright -->
          <div class=\"w3-half w3-container w3-mobile\">
            <p class=\"w3-section w3-left-align w3-opacity w3-hover-opacity-off\">";
                // line 342
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 342, $this->source), "html", null, true);
                echo "</p>
          </div>
          <!-- End: Copyright -->
        ";
            }
            // line 346
            echo "        ";
            if (($context["show_credit_link"] ?? null)) {
                // line 347
                echo "          <!-- Start: Credit Link -->
          <div class=\"w3-half w3-container w3-mobile\">
            <p class=\"w3-section w3-right-align w3-opacity w3-hover-opacity-off\">Developed &#38; Designed by: <a href=\"https://www.alaahaddad.com\" title=\"Alaa Haddad\" target=\"_blank\">Alaa Haddad</a></p>
          </div>
          <!-- End: Credit Link -->
        ";
            }
            // line 353
            echo "      </div>
    </div>
    <!-- End: Copyright -->
  ";
        }
        // line 357
        echo "</div>
<!-- End: Page Wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/d8w3css/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  791 => 357,  785 => 353,  777 => 347,  774 => 346,  767 => 342,  763 => 340,  761 => 339,  757 => 338,  753 => 337,  750 => 336,  747 => 335,  741 => 331,  734 => 327,  731 => 326,  729 => 325,  726 => 324,  721 => 321,  715 => 319,  712 => 318,  706 => 316,  703 => 315,  697 => 313,  694 => 312,  688 => 310,  685 => 309,  679 => 307,  676 => 306,  670 => 304,  667 => 303,  661 => 301,  658 => 300,  652 => 298,  649 => 297,  643 => 295,  641 => 294,  637 => 292,  635 => 291,  631 => 290,  627 => 289,  624 => 288,  621 => 287,  615 => 283,  607 => 278,  603 => 277,  597 => 276,  594 => 275,  591 => 274,  583 => 269,  579 => 268,  573 => 267,  570 => 266,  567 => 265,  559 => 260,  555 => 259,  549 => 258,  546 => 257,  544 => 256,  539 => 254,  535 => 253,  532 => 252,  529 => 251,  526 => 250,  520 => 246,  512 => 241,  508 => 240,  502 => 239,  499 => 238,  496 => 237,  488 => 232,  484 => 231,  478 => 230,  475 => 229,  472 => 228,  464 => 223,  460 => 222,  454 => 221,  451 => 220,  448 => 219,  440 => 214,  436 => 213,  430 => 212,  427 => 211,  425 => 210,  421 => 209,  417 => 208,  414 => 207,  411 => 206,  409 => 205,  402 => 200,  394 => 195,  390 => 194,  384 => 193,  381 => 192,  378 => 191,  370 => 186,  366 => 185,  360 => 184,  357 => 183,  354 => 182,  346 => 177,  342 => 176,  336 => 175,  333 => 174,  331 => 173,  327 => 171,  320 => 167,  316 => 166,  313 => 165,  311 => 164,  307 => 163,  303 => 162,  300 => 161,  292 => 156,  288 => 155,  284 => 154,  281 => 153,  278 => 152,  275 => 151,  269 => 147,  261 => 142,  257 => 141,  251 => 140,  248 => 139,  245 => 138,  237 => 133,  233 => 132,  227 => 131,  224 => 130,  221 => 129,  213 => 124,  209 => 123,  203 => 122,  200 => 121,  198 => 120,  194 => 119,  190 => 118,  187 => 117,  184 => 116,  181 => 115,  173 => 110,  169 => 109,  165 => 108,  162 => 107,  159 => 106,  151 => 101,  147 => 100,  143 => 99,  140 => 98,  137 => 97,  129 => 92,  123 => 89,  119 => 88,  113 => 87,  110 => 86,  108 => 85,  103 => 82,  97 => 80,  94 => 79,  86 => 75,  84 => 74,  80 => 73,  74 => 72,  69 => 70,  66 => 69,  58 => 64,  52 => 61,  45 => 59,  42 => 58,  39 => 57,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/d8w3css/templates/layout/page.html.twig", "/home/jdiaz/emmatec/web/themes/d8w3css/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 57);
        static $filters = array("escape" => 59, "t" => 59);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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

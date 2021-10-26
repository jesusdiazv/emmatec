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

/* themes/business_responsive_theme/templates/layout/page.html.twig */
class __TwigTemplate_7bc10ae45d0e5689555795c4fe4587d37be679692ac5a41b7cd08187e157a218 extends \Twig\Template
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
        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-md-3\">
        ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 67)) {
            // line 68
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "

          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        
        ";
        }
        // line 78
        echo "      </div>

      ";
        // line 80
        if ((($context["show_social_icon"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 80))) {
            // line 81
            echo "        <div class=\"col-sm-8 col-md-9\">

          ";
            // line 83
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 83)) {
                // line 84
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 86
            echo "          
          ";
            // line 87
            if (($context["show_social_icon"] ?? null)) {
                // line 88
                echo "            <div class=\"social-media\">
              ";
                // line 89
                if (($context["facebook_url"] ?? null)) {
                    // line 90
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 90, $this->source), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
              ";
                }
                // line 92
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 93
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 93, $this->source), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
              ";
                }
                // line 95
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 96
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 96, $this->source), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
              ";
                }
                // line 98
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 99
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 99, $this->source), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
              ";
                }
                // line 101
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 102
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 102, $this->source), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
              ";
                }
                // line 104
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 105
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 105, $this->source), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fas fa-rss\"></i></a>
              ";
                }
                // line 107
                echo "            </div>
          ";
            }
            // line 109
            echo "
        </div>
      ";
        }
        // line 112
        echo "
    </div>
  </div>
</header>
<!--End Header & Navbar -->


<div class=\"container main-menuwrap\">
  <div class=\"row\">
    <div class=\"navbar-header col-md-12\">
      <nav class=\"navbar navbar-default\" role=\"navigation\">
        

        ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 125)) {
            // line 126
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 128
        echo "      </nav>
    </div>
  </div>
</div>


";
        // line 134
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 135
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 139
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 139, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 145
        echo "

<!--Highlighted-->
  ";
        // line 148
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 148)) {
            // line 149
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 152
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 157
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 161
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 162
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 162) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 162)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 162))) {
                // line 163
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
                // line 169
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 169, $this->source), "html", null, true);
                echo ">
            ";
                // line 170
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 170)) {
                    // line 171
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 173
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
                // line 176
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 176, $this->source), "html", null, true);
                echo ">
            ";
                // line 177
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 177)) {
                    // line 178
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 180
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
                // line 183
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null), 183, $this->source), "html", null, true);
                echo ">
            ";
                // line 184
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 184)) {
                    // line 185
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 187
                echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 194
        echo "<!--End Top Widget -->


<!-- Start Middle Widget -->
";
        // line 198
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_first", [], "any", false, false, true, 198) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_second", [], "any", false, false, true, 198)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_third", [], "any", false, false, true, 198))) {
            // line 199
            echo "  <div class=\"middlewidget\">
    <!-- start: Container -->
    <div class=\"container\">
      
      <div class=\"row\">
        <!-- Top widget first region -->
        <div class = ";
            // line 205
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_class"] ?? null), 205, $this->source), "html", null, true);
            echo ">
          ";
            // line 206
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_first", [], "any", false, false, true, 206)) {
                // line 207
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_first", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 209
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget second region -->
        <div class = ";
            // line 212
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_class"] ?? null), 212, $this->source), "html", null, true);
            echo ">
          ";
            // line 213
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_second", [], "any", false, false, true, 213)) {
                // line 214
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_second", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 216
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget third region -->
        <div class = ";
            // line 219
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_third_class"] ?? null), 219, $this->source), "html", null, true);
            echo ">
          ";
            // line 220
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_third", [], "any", false, false, true, 220)) {
                // line 221
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_third", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 223
            echo "        </div>
        <!-- End top widget third region -->
      </div>
    </div>
  </div>
";
        }
        // line 229
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 233
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 233) &&  !($context["is_front"] ?? null))) {
            // line 234
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 238
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 238), 238, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 243
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 252
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 252)) {
            // line 253
            echo "        <div class=\"row\">
          ";
            // line 254
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 254), 254, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 257
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 261
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 261), 261, $this->source), "html", null, true);
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 266
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 266)) {
            // line 267
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 268
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 268, $this->source), "html", null, true);
            echo " >
            ";
            // line 269
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 273
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 276
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 276)) {
            // line 277
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 278
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 278, $this->source), "html", null, true);
            echo ">
            ";
            // line 279
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 279), 279, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 283
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 286
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 286)) {
            // line 287
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 288
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 288, $this->source), "html", null, true);
            echo ">
            ";
            // line 289
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 289), 289, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 293
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 299
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 299)) {
            // line 300
            echo "      <div class=\"row\">
        ";
            // line 301
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 304
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->


<!-- Start: Price table widgets -->

";
        // line 312
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 312) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 312)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 312))) {
            // line 313
            echo "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 319
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 319)) {
                // line 320
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 320, $this->source), "html", null, true);
                echo ">
            ";
                // line 321
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 321), 321, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 323
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 327
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 327)) {
                // line 328
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 328, $this->source), "html", null, true);
                echo ">
            ";
                // line 329
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 331
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 335
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 335)) {
                // line 336
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 336, $this->source), "html", null, true);
                echo ">
            ";
                // line 337
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 337), 337, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 339
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 343
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 343)) {
                // line 344
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 344, $this->source), "html", null, true);
                echo ">
            ";
                // line 345
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 345), 345, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 347
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 355
        echo "
<!--End: Price table widgets -->


<!-- start: bottom -->
";
        // line 360
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 360) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 360)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 360))) {
            // line 361
            echo "  <div class=\"bottomwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start bottom First Region -->
        <div class = ";
            // line 367
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 367, $this->source), "html", null, true);
            echo ">
          ";
            // line 368
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 368)) {
                // line 369
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 369), 369, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 371
            echo "        </div>
        <!-- End bottom First Region -->

        <!-- Start bottom Second Region -->
        <div class = ";
            // line 375
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 375, $this->source), "html", null, true);
            echo ">
          ";
            // line 376
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 376)) {
                // line 377
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 377), 377, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 379
            echo "        </div>
        <!-- End bottom Second Region -->

        <!-- Start bottom third Region -->
        <div class = ";
            // line 383
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 383, $this->source), "html", null, true);
            echo ">
          ";
            // line 384
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 384)) {
                // line 385
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 385), 385, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 387
            echo "        </div>
        <!-- End bottom Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 393
        echo "<!--End bottom -->


<!-- start: Footer -->
";
        // line 397
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 397) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 397)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 397))) {
            // line 398
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = ";
            // line 404
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 404, $this->source), "html", null, true);
            echo ">
          ";
            // line 405
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 405)) {
                // line 406
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 406), 406, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 408
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 412
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 412, $this->source), "html", null, true);
            echo ">
          ";
            // line 413
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 413)) {
                // line 414
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 414), 414, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 416
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 420
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 420, $this->source), "html", null, true);
            echo ">
          ";
            // line 421
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 421)) {
                // line 422
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 422), 422, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 424
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 430
        echo "<!--End Footer -->


<!-- Start Footer Menu -->
";
        // line 434
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 434)) {
            // line 435
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 439
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 439), 439, $this->source), "html", null, true);
            echo "
        </div>
        
      </div>
    </div>
  </div>
";
        }
        // line 446
        echo "<!-- End Footer Menu -->


";
        // line 449
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 450
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 456
            if (($context["copyright_text"] ?? null)) {
                echo "        
          <p>";
                // line 457
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 457, $this->source), "html", null, true);
                echo "</p>        
        ";
            }
            // line 459
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 463
            if (($context["show_credit_link"] ?? null)) {
                // line 464
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 468
            echo "      <!-- End Credit link -->
            
    </div>
  </div>
</div>
";
        }
        // line 474
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/business_responsive_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  824 => 474,  816 => 468,  810 => 464,  808 => 463,  802 => 459,  797 => 457,  793 => 456,  785 => 450,  783 => 449,  778 => 446,  768 => 439,  762 => 435,  760 => 434,  754 => 430,  746 => 424,  740 => 422,  738 => 421,  734 => 420,  728 => 416,  722 => 414,  720 => 413,  716 => 412,  710 => 408,  704 => 406,  702 => 405,  698 => 404,  690 => 398,  688 => 397,  682 => 393,  674 => 387,  668 => 385,  666 => 384,  662 => 383,  656 => 379,  650 => 377,  648 => 376,  644 => 375,  638 => 371,  632 => 369,  630 => 368,  626 => 367,  618 => 361,  616 => 360,  609 => 355,  599 => 347,  593 => 345,  588 => 344,  586 => 343,  580 => 339,  574 => 337,  569 => 336,  567 => 335,  561 => 331,  555 => 329,  550 => 328,  548 => 327,  542 => 323,  536 => 321,  531 => 320,  529 => 319,  521 => 313,  519 => 312,  509 => 304,  503 => 301,  500 => 300,  498 => 299,  490 => 293,  483 => 289,  479 => 288,  476 => 287,  474 => 286,  469 => 283,  462 => 279,  458 => 278,  455 => 277,  453 => 276,  448 => 273,  441 => 269,  437 => 268,  434 => 267,  432 => 266,  424 => 261,  418 => 257,  412 => 254,  409 => 253,  407 => 252,  396 => 243,  388 => 238,  382 => 234,  380 => 233,  374 => 229,  366 => 223,  360 => 221,  358 => 220,  354 => 219,  349 => 216,  343 => 214,  341 => 213,  337 => 212,  332 => 209,  326 => 207,  324 => 206,  320 => 205,  312 => 199,  310 => 198,  304 => 194,  295 => 187,  289 => 185,  287 => 184,  283 => 183,  278 => 180,  272 => 178,  270 => 177,  266 => 176,  261 => 173,  255 => 171,  253 => 170,  249 => 169,  241 => 163,  239 => 162,  235 => 161,  229 => 157,  221 => 152,  216 => 149,  214 => 148,  209 => 145,  203 => 141,  194 => 139,  190 => 138,  185 => 135,  183 => 134,  175 => 128,  169 => 126,  167 => 125,  152 => 112,  147 => 109,  143 => 107,  137 => 105,  134 => 104,  128 => 102,  125 => 101,  119 => 99,  116 => 98,  110 => 96,  107 => 95,  101 => 93,  98 => 92,  92 => 90,  90 => 89,  87 => 88,  85 => 87,  82 => 86,  76 => 84,  74 => 83,  70 => 81,  68 => 80,  64 => 78,  50 => 68,  48 => 67,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/business_responsive_theme/templates/layout/page.html.twig", "/home/jdiaz/emmatec/web/themes/business_responsive_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 67, "for" => 138);
        static $filters = array("escape" => 68, "raw" => 139);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
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

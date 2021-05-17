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

/* core/themes/olivero/templates/layout/page.html.twig */
class __TwigTemplate_4e4f280eeef2871beeb1a70cd7ea4b4245fe3d249a9cd1af9b302cf070d5e591 extends \Twig\Template
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
        echo "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">

    ";
        // line 52
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 52) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 52)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 52))) {
            // line 53
            echo "      <header id=\"header\" class=\"header site-header\" role=\"banner\">

        ";
            // line 56
            echo "        <div class=\"site-header__fixable fixable\">
          <div class=\"header__left\">
            <button class=\"nav-primary__button\" aria-controls=\"site-header__inner\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
              <span class=\"nav-primary__icon\">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </button>
          </div>

          ";
            // line 68
            echo "          <div id=\"site-header__inner\" class=\"site-header__inner\">
            <div class=\"container site-header__inner__container\">

              ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "

              ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 73) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 73))) {
                // line 74
                echo "                <div class=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" aria-label=\"";
                // line 75
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle Main Menu"));
                echo "\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <span class=\"mobile-nav-button__label\">";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
                echo "</span>
                    <span class=\"mobile-nav-button__icon\"></span>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-menu-open=\"false\">

                  ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "

                  ";
                // line 85
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 85)) {
                    // line 86
                    echo "                    <div class=\"secondary-nav__wrapper\">
                      ";
                    // line 87
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                    echo "
                    </div>
                  ";
                }
                // line 90
                echo "                </div>
              ";
            }
            // line 92
            echo "            </div>
          </div>
        </div>
      </header>
    ";
        }
        // line 97
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <main id=\"content\" class=\"main-content \" role=\"main\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
        echo "
          <div class=\"main-content__container container\">
            ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
        echo "
            ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "
            ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_above", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "
            ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 107)) {
            // line 108
            echo "              <div class=\"sidebar-grid grid-full\">
                ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo "
                ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo "
              </div>
            ";
        } else {
            // line 113
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 115
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_below", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
        echo "
          </div>
        </main>
        <div class=\"social-bar\">
          ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo "
        ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "
      </div>
    </footer>

    <div class=\"overlay\"></div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 127,  183 => 126,  173 => 119,  165 => 115,  159 => 113,  153 => 110,  149 => 109,  146 => 108,  144 => 107,  140 => 106,  136 => 105,  132 => 104,  127 => 102,  120 => 97,  113 => 92,  109 => 90,  103 => 87,  100 => 86,  98 => 85,  93 => 83,  83 => 76,  79 => 75,  76 => 74,  74 => 73,  69 => 71,  64 => 68,  51 => 56,  47 => 53,  45 => 52,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Olivero's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.content: The main content of the current page.
 * - page.sidebar: Items for the first sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.social: Items for the social region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<div id=\"page-wrapper\" class=\"page-wrapper\">
  <div id=\"page\">

    {% if page.header or page.primary_menu or page.secondary_menu %}
      <header id=\"header\" class=\"header site-header\" role=\"banner\">

        {# Gets fixed by JS at wide widths. #}
        <div class=\"site-header__fixable fixable\">
          <div class=\"header__left\">
            <button class=\"nav-primary__button\" aria-controls=\"site-header__inner\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
              <span class=\"nav-primary__icon\">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </button>
          </div>

          {# Needs to extend full width so box shadow will also extend. #}
          <div id=\"site-header__inner\" class=\"site-header__inner\">
            <div class=\"container site-header__inner__container\">

              {{ page.header }}

              {% if page.primary_menu or page.secondary_menu %}
                <div class=\"mobile-buttons\">
                  <button class=\"mobile-nav-button\" aria-label=\"{{ 'Toggle Main Menu'|t }}\" aria-controls=\"header-nav\" aria-expanded=\"false\">
                    <span class=\"mobile-nav-button__label\">{{ 'Menu'|t }}</span>
                    <span class=\"mobile-nav-button__icon\"></span>
                  </button>
                </div>

                <div id=\"header-nav\" class=\"header-nav\" data-menu-open=\"false\">

                  {{ page.primary_menu }}

                  {% if page.secondary_menu %}
                    <div class=\"secondary-nav__wrapper\">
                      {{ page.secondary_menu }}
                    </div>
                  {% endif %}
                </div>
              {% endif %}
            </div>
          </div>
        </div>
      </header>
    {% endif %}

    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container\">
      <div id=\"main\" class=\"layout-main\">
        <main id=\"content\" class=\"main-content \" role=\"main\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          {{ page.hero }}
          <div class=\"main-content__container container\">
            {{ page.highlighted }}
            {{ page.breadcrumb }}
            {{ page.content_above }}
            {% if page.sidebar %}
              <div class=\"sidebar-grid grid-full\">
                {{ page.content }}
                {{ page.sidebar }}
              </div>
            {% else %}
              {{ page.content }}
            {% endif %}
            {{ page.content_below }}
          </div>
        </main>
        <div class=\"social-bar\">
          {{ page.social }}
        </div>
      </div>
    </div>

    <footer class=\"site-footer\">
      <div class=\"site-footer__inner container\">
        {{ page.footer_top }}
        {{ page.footer_bottom }}
      </div>
    </footer>

    <div class=\"overlay\"></div>

  </div>
</div>
", "core/themes/olivero/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\picturian_cloud\\web\\core\\themes\\olivero\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 52);
        static $filters = array("escape" => 71, "t" => 75);
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

<?php

/* themes/omega/omega/templates/page--front.html.twig */
class __TwigTemplate_b3fb2253648033de8860ed8bc54f5200983655aaeccd86226f34709f6d92e7a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8350a9ba36beb6adf2e0fdb8fa3046850c5686bb5727240180ce310f39777e8 = $this->env->getExtension("native_profiler");
        $__internal_a8350a9ba36beb6adf2e0fdb8fa3046850c5686bb5727240180ce310f39777e8->enter($__internal_a8350a9ba36beb6adf2e0fdb8fa3046850c5686bb5727240180ce310f39777e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/omega/omega/templates/page--front.html.twig"));

        $tags = array("if" => 15);
        $filters = array("t" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 14
        echo "<header role=\"banner\">
  ";
        // line 15
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 16
            echo "    <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\"/>
    </a>
  ";
        }
        // line 20
        echo "
  ";
        // line 21
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 22
            echo "    ";
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 23
                echo "      <h1>
        <a href=\"";
                // line 24
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
      </h1>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 29
                echo "      <div>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
    ";
            }
            // line 31
            echo "  ";
        }
        // line 32
        echo "</header>

<main role=\"main\">
  ";
        // line 35
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 36
            echo "    <h1>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
  ";
        }
        // line 38
        echo "
  ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

  ";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
</main>

";
        // line 44
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "block", array())) {
            // line 45
            echo "  <aside role=\"complementary\">
    ";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "block", array()), "html", null, true));
            echo "
  </aside>
";
        }
        // line 49
        echo "
";
        // line 50
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 51
            echo "  <aside role=\"complementary\">
    ";
            // line 52
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
  </aside>
";
        }
        // line 55
        echo "
";
        // line 56
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 57
            echo "  <aside role=\"complementary\">
    ";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
  </aside>
";
        }
        // line 61
        echo "
";
        // line 62
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 63
            echo "  <aside role=\"complementary\">
    ";
            // line 64
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
  </aside>
";
        }
        // line 66
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 67
            echo "  <aside role=\"complementary\">
    ";
            // line 68
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
  </aside>
";
        }
        // line 71
        echo "
";
        // line 72
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 73
            echo "  <footer role=\"contentinfo\">
    ";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
  </footer>
";
        }
        
        $__internal_a8350a9ba36beb6adf2e0fdb8fa3046850c5686bb5727240180ce310f39777e8->leave($__internal_a8350a9ba36beb6adf2e0fdb8fa3046850c5686bb5727240180ce310f39777e8_prof);

    }

    public function getTemplateName()
    {
        return "themes/omega/omega/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 74,  197 => 73,  195 => 72,  192 => 71,  186 => 68,  183 => 67,  181 => 66,  175 => 64,  172 => 63,  170 => 62,  167 => 61,  161 => 58,  158 => 57,  156 => 56,  153 => 55,  147 => 52,  144 => 51,  142 => 50,  139 => 49,  133 => 46,  130 => 45,  128 => 44,  122 => 41,  117 => 39,  114 => 38,  108 => 36,  106 => 35,  101 => 32,  98 => 31,  92 => 29,  90 => 28,  87 => 27,  77 => 24,  74 => 23,  71 => 22,  69 => 21,  66 => 20,  58 => 17,  51 => 16,  49 => 15,  46 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single Drupal page while offline.*/
/*  **/
/*  * All available variables are mirrored in page.html.twig.*/
/*  * Some may be blank but they are provided for consistency.*/
/*  **/
/*  * @see template_preprocess_maintenance_page()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <header role="banner">*/
/*   {% if logo %}*/
/*     <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">*/
/*       <img src="{{ logo }}" alt="{{ 'Home'|t }}"/>*/
/*     </a>*/
/*   {% endif %}*/
/* */
/*   {% if site_name or site_slogan %}*/
/*     {% if site_name %}*/
/*       <h1>*/
/*         <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*       </h1>*/
/*     {% endif %}*/
/* */
/*     {% if site_slogan %}*/
/*       <div>{{ site_slogan }}</div>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* </header>*/
/* */
/* <main role="main">*/
/*   {% if title %}*/
/*     <h1>{{ title }}</h1>*/
/*   {% endif %}*/
/* */
/*   {{ page.highlighted }}*/
/* */
/*   {{ page.content }}*/
/* </main>*/
/* */
/* {% if page.block %}*/
/*   <aside role="complementary">*/
/*     {{ page.block }}*/
/*   </aside>*/
/* {% endif %}*/
/* */
/* {% if page.sidebar_second %}*/
/*   <aside role="complementary">*/
/*     {{ page.sidebar_second }}*/
/*   </aside>*/
/* {% endif %}*/
/* */
/* {% if page.sidebar_second %}*/
/*   <aside role="complementary">*/
/*     {{ page.sidebar_second }}*/
/*   </aside>*/
/* {% endif %}*/
/* */
/* {% if page.sidebar_second %}*/
/*   <aside role="complementary">*/
/*     {{ page.sidebar_second }}*/
/*   </aside>*/
/* {% endif %}{% if page.sidebar_second %}*/
/*   <aside role="complementary">*/
/*     {{ page.sidebar_second }}*/
/*   </aside>*/
/* {% endif %}*/
/* */
/* {% if page.footer %}*/
/*   <footer role="contentinfo">*/
/*     {{ page.footer }}*/
/*   </footer>*/
/* {% endif %}*/
/* */

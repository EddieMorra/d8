<?php

/* core/themes/classy/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_d78a17aa3a34d76e9cccb6e9ae812cb00f187aa973fa91abac5f0b5680c05ac8 extends Twig_Template
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
        $__internal_948137b43c15cd4185cf98b97aff7eb792bb5f7a89c96c3f04c4448472da11d2 = $this->env->getExtension("native_profiler");
        $__internal_948137b43c15cd4185cf98b97aff7eb792bb5f7a89c96c3f04c4448472da11d2->enter($__internal_948137b43c15cd4185cf98b97aff7eb792bb5f7a89c96c3f04c4448472da11d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/navigation/menu-local-tasks.html.twig"));

        $tags = array("if" => 14);
        $filters = array("t" => 15);
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
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 15
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Primary tabs")));
            echo "</h2>
  <ul class=\"tabs primary\">";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true));
            echo "</ul>
";
        }
        // line 18
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 19
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Secondary tabs")));
            echo "</h2>
  <ul class=\"tabs secondary\">";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true));
            echo "</ul>
";
        }
        
        $__internal_948137b43c15cd4185cf98b97aff7eb792bb5f7a89c96c3f04c4448472da11d2->leave($__internal_948137b43c15cd4185cf98b97aff7eb792bb5f7a89c96c3f04c4448472da11d2_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  60 => 19,  58 => 18,  53 => 16,  48 => 15,  46 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display primary and secondary local tasks.*/
/*  **/
/*  * Available variables:*/
/*  * - primary: HTML list items representing primary tasks.*/
/*  * - secondary: HTML list items representing primary tasks.*/
/*  **/
/*  * Each item in these variables (primary and secondary) can be individually*/
/*  * themed in menu-local-task.html.twig.*/
/*  *//* */
/* #}*/
/* {% if primary %}*/
/*   <h2 class="visually-hidden">{{ 'Primary tabs'|t }}</h2>*/
/*   <ul class="tabs primary">{{ primary }}</ul>*/
/* {% endif %}*/
/* {% if secondary %}*/
/*   <h2 class="visually-hidden">{{ 'Secondary tabs'|t }}</h2>*/
/*   <ul class="tabs secondary">{{ secondary }}</ul>*/
/* {% endif %}*/
/* */

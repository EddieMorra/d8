<?php

/* core/themes/bartik/templates/page-title.html.twig */
class __TwigTemplate_2e97cbbd31d51ab260b052281839efdf3466bbc19beb8debdcb594d777f87006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/content/page-title.html.twig", "core/themes/bartik/templates/page-title.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/content/page-title.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b0596ad81162c5e259965321c6a10d10d13102ed355bb706288f1aba0180dd3 = $this->env->getExtension("native_profiler");
        $__internal_2b0596ad81162c5e259965321c6a10d10d13102ed355bb706288f1aba0180dd3->enter($__internal_2b0596ad81162c5e259965321c6a10d10d13102ed355bb706288f1aba0180dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/page-title.html.twig"));

        $tags = array("set" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array(),
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

        // line 16
        $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "title"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b0596ad81162c5e259965321c6a10d10d13102ed355bb706288f1aba0180dd3->leave($__internal_2b0596ad81162c5e259965321c6a10d10d13102ed355bb706288f1aba0180dd3_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 1,  51 => 16,  11 => 1,);
    }
}
/* {% extends "@classy/content/page-title.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation for a page title.*/
/*  **/
/*  * Available variables:*/
/*  * - title_attributes: HTML attributes for the page title element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  *//* */
/* #}*/
/* {% set title_attributes = title_attributes.addClass('title') %}*/
/* */

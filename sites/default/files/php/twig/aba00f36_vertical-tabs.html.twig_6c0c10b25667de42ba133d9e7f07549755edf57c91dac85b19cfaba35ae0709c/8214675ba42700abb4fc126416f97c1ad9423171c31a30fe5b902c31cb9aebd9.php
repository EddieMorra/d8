<?php

/* core/themes/classy/templates/navigation/vertical-tabs.html.twig */
class __TwigTemplate_ca1ac6cfcc0daeb5b5ca376182e53cad9c80ad80c147a7a6050b2015d4b2861b extends Twig_Template
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
        $__internal_69f68bf45e5036bed1d65516dca07bdf6742f525f8858a6f5722dda14c8da824 = $this->env->getExtension("native_profiler");
        $__internal_69f68bf45e5036bed1d65516dca07bdf6742f525f8858a6f5722dda14c8da824->enter($__internal_69f68bf45e5036bed1d65516dca07bdf6742f525f8858a6f5722dda14c8da824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/navigation/vertical-tabs.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 13
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "setAttribute", array(0 => "data-vertical-tabs-panes", 1 => true), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "</div>
";
        
        $__internal_69f68bf45e5036bed1d65516dca07bdf6742f525f8858a6f5722dda14c8da824->leave($__internal_69f68bf45e5036bed1d65516dca07bdf6742f525f8858a6f5722dda14c8da824_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/vertical-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for vertical tabs.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The rendered tabs.*/
/*  **/
/*  * @see template_preprocess_vertical_tabs()*/
/*  *//* */
/* #}*/
/* <div{{ attributes.setAttribute('data-vertical-tabs-panes', TRUE) }}>{{ children }}</div>*/
/* */

<?php

/* core/themes/classy/templates/navigation/menu-local-task.html.twig */
class __TwigTemplate_8ec773f9e00a504ff8cd154c37e09f5715c9556301b8f5b30ff691d73fff6be4 extends Twig_Template
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
        $__internal_be2a9f522c2f01d2c2ac90810c30a53324d75a18b93798f90b47bb062d54c0aa = $this->env->getExtension("native_profiler");
        $__internal_be2a9f522c2f01d2c2ac90810c30a53324d75a18b93798f90b47bb062d54c0aa->enter($__internal_be2a9f522c2f01d2c2ac90810c30a53324d75a18b93798f90b47bb062d54c0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/navigation/menu-local-task.html.twig"));

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

        // line 17
        echo "<li";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (((isset($context["is_active"]) ? $context["is_active"] : null)) ? ("is-active") : (""))), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</li>
";
        
        $__internal_be2a9f522c2f01d2c2ac90810c30a53324d75a18b93798f90b47bb062d54c0aa->leave($__internal_be2a9f522c2f01d2c2ac90810c30a53324d75a18b93798f90b47bb062d54c0aa_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a local task link.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the wrapper element.*/
/*  * - is_active: Whether the task item is an active tab.*/
/*  * - link: A rendered link element.*/
/*  **/
/*  * Note: This template renders the content for each task item in*/
/*  * menu-local-tasks.html.twig.*/
/*  **/
/*  * @see template_preprocess_menu_local_task()*/
/*  *//* */
/* #}*/
/* <li{{ attributes.addClass(is_active ? 'is-active') }}>{{ link }}</li>*/
/* */

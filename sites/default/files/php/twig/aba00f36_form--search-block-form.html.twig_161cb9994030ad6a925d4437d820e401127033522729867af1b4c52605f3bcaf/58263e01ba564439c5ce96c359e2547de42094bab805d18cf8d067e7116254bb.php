<?php

/* core/themes/bartik/templates/form--search-block-form.html.twig */
class __TwigTemplate_1229d21b2fa9840e54d6d8544a9d144ddb10d464def0a7bdb7e330b0bcbb6bd7 extends Twig_Template
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
        $__internal_1d0754e8472bb547dec18b63c4c375dece555b5eb8352672ab6c8d8a832827d4 = $this->env->getExtension("native_profiler");
        $__internal_1d0754e8472bb547dec18b63c4c375dece555b5eb8352672ab6c8d8a832827d4->enter($__internal_1d0754e8472bb547dec18b63c4c375dece555b5eb8352672ab6c8d8a832827d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/form--search-block-form.html.twig"));

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
        echo "<form";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "search-form", 1 => "search-block-form"), "method"), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
</form>
";
        
        $__internal_1d0754e8472bb547dec18b63c4c375dece555b5eb8352672ab6c8d8a832827d4->leave($__internal_1d0754e8472bb547dec18b63c4c375dece555b5eb8352672ab6c8d8a832827d4_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/form--search-block-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a 'form' element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The child elements of the form.*/
/*  **/
/*  * @see template_preprocess_form()*/
/*  *//* */
/* #}*/
/* <form{{ attributes.addClass('search-form', 'search-block-form') }}>*/
/*   {{ children }}*/
/* </form>*/
/* */

<?php

/* {# inline_template_start #}<div class="block-filter-text-source">{{ label }}</div> */
class __TwigTemplate_dc071b48c9599e8f738d091a25fcb216f054a4c232faea5afab70ae80b9f1590 extends Twig_Template
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
        $__internal_1976a1144fded5a0b5d2ab874f9d48e0340dda542d2c96426b7766cab4ae62a6 = $this->env->getExtension("native_profiler");
        $__internal_1976a1144fded5a0b5d2ab874f9d48e0340dda542d2c96426b7766cab4ae62a6->enter($__internal_1976a1144fded5a0b5d2ab874f9d48e0340dda542d2c96426b7766cab4ae62a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<div class=\"block-filter-text-source\">{{ label }}</div>"));

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

        // line 1
        echo "<div class=\"block-filter-text-source\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</div>";
        
        $__internal_1976a1144fded5a0b5d2ab874f9d48e0340dda542d2c96426b7766cab4ae62a6->leave($__internal_1976a1144fded5a0b5d2ab874f9d48e0340dda542d2c96426b7766cab4ae62a6_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"block-filter-text-source\">{{ label }}</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}<div class="block-filter-text-source">{{ label }}</div>*/

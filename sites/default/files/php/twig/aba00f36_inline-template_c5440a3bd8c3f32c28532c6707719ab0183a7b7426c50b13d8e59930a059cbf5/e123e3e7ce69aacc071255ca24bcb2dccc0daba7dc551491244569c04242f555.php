<?php

/* {# inline_template_start #}destination=/unpublished-content */
class __TwigTemplate_37ac42fd9c4ab1f41e07c6b8e6d56190a948a1d9d109491468c5f8a3df0dc10c extends Twig_Template
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
        $__internal_0e325e31ad53e6215ca40e0e9640c41a1fa5fcebe185960cd38d237a5a569e80 = $this->env->getExtension("native_profiler");
        $__internal_0e325e31ad53e6215ca40e0e9640c41a1fa5fcebe185960cd38d237a5a569e80->enter($__internal_0e325e31ad53e6215ca40e0e9640c41a1fa5fcebe185960cd38d237a5a569e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}destination=/unpublished-content"));

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
        echo "destination=/unpublished-content";
        
        $__internal_0e325e31ad53e6215ca40e0e9640c41a1fa5fcebe185960cd38d237a5a569e80->leave($__internal_0e325e31ad53e6215ca40e0e9640c41a1fa5fcebe185960cd38d237a5a569e80_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}destination=/unpublished-content";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}destination=/unpublished-content*/

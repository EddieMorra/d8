<?php

/* core/themes/classy/templates/field/file-link.html.twig */
class __TwigTemplate_ad3e1499b9b06d171d87af441f4b6eb51d8650a75bdd9679906b58fd066a391a extends Twig_Template
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
        $__internal_75a198b7d54b470f85475277a99115e92c8172f899e03d31baec45d4f26d29f0 = $this->env->getExtension("native_profiler");
        $__internal_75a198b7d54b470f85475277a99115e92c8172f899e03d31baec45d4f26d29f0->enter($__internal_75a198b7d54b470f85475277a99115e92c8172f899e03d31baec45d4f26d29f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/file-link.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array("attach_library" => 14);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array('attach_library')
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("classy/file"), "html", null, true));
        echo "
<span";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</span>
";
        
        $__internal_75a198b7d54b470f85475277a99115e92c8172f899e03d31baec45d4f26d29f0->leave($__internal_75a198b7d54b470f85475277a99115e92c8172f899e03d31baec45d4f26d29f0_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/file-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  46 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a link to a file.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: The HTML attributes for the containing element.*/
/*  * - link: A link to the file.*/
/*  * - icon: The icon image representing the file type.*/
/*  **/
/*  * @see template_preprocess_file_link()*/
/*  *//* */
/* #}*/
/* {{ attach_library('classy/file') }}*/
/* <span{{ attributes }}>{{ icon }} {{ link }}</span>*/
/* */

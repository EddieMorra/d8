<?php

/* themes/omega/omega/templates/block.html.twig */
class __TwigTemplate_400f9857e05d824f804520e9af549667555d4456e6939dd6ad9cf89940de12e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cd830e73b53c7601a3f27b061a5bf02caf76260dc4e456d042c8baf945c3757 = $this->env->getExtension("native_profiler");
        $__internal_9cd830e73b53c7601a3f27b061a5bf02caf76260dc4e456d042c8baf945c3757->enter($__internal_9cd830e73b53c7601a3f27b061a5bf02caf76260dc4e456d042c8baf945c3757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/omega/omega/templates/block.html.twig"));

        $tags = array("set" => 30, "if" => 38, "block" => 44);
        $filters = array("clean_class" => 32);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
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

        // line 30
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 32
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 33
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))));
        // line 36
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 38
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 39
            echo "    <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 41
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

  <div";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">
    ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "  </div>
</div>





";
        
        $__internal_9cd830e73b53c7601a3f27b061a5bf02caf76260dc4e456d042c8baf945c3757->leave($__internal_9cd830e73b53c7601a3f27b061a5bf02caf76260dc4e456d042c8baf945c3757_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a1a540fa9e50061b48610fca19567981e0f575365439e59345a39297e1c6631 = $this->env->getExtension("native_profiler");
        $__internal_3a1a540fa9e50061b48610fca19567981e0f575365439e59345a39297e1c6631->enter($__internal_3a1a540fa9e50061b48610fca19567981e0f575365439e59345a39297e1c6631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
    ";
        
        $__internal_3a1a540fa9e50061b48610fca19567981e0f575365439e59345a39297e1c6631->leave($__internal_3a1a540fa9e50061b48610fca19567981e0f575365439e59345a39297e1c6631_prof);

    }

    public function getTemplateName()
    {
        return "themes/omega/omega/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 45,  96 => 44,  82 => 47,  80 => 44,  76 => 43,  70 => 41,  62 => 39,  60 => 38,  56 => 37,  51 => 36,  49 => 33,  48 => 32,  47 => 30,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - module: The module that provided this block plugin.*/
/*  *   - cache: The cache settings.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: array of HTML attributes populated by modules, intended to*/
/*  *   be added to the main container tag of this template.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'block',*/
/*     'block-' ~ configuration.provider|clean_class,*/
/*     'block-' ~ plugin_id|clean_class,*/
/*   ]*/
/* %}*/
/* <div{{ attributes }}>*/
/*   {{ title_prefix }}*/
/*   {% if label %}*/
/*     <h2{{ title_attributes }}>{{ label }}</h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/* */
/*   <div{{ content_attributes }}>*/
/*     {% block content %}*/
/*       {{ content }}*/
/*     {% endblock %}*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */

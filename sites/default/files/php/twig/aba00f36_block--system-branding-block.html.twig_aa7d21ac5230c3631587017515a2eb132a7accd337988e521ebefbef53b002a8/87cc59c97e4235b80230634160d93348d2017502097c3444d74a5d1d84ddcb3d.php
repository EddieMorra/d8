<?php

/* core/themes/bartik/templates/block--system-branding-block.html.twig */
class __TwigTemplate_7fdc1d9b9ba38d2ca6a1a3c662401f2a6f7ce2039830e14955bfcb97c0aa4268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/bartik/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93658fcc205cbf7bbf8005b1cb37a6e43f7f28d59ce8a1da37aff38493f9ee03 = $this->env->getExtension("native_profiler");
        $__internal_93658fcc205cbf7bbf8005b1cb37a6e43f7f28d59ce8a1da37aff38493f9ee03->enter($__internal_93658fcc205cbf7bbf8005b1cb37a6e43f7f28d59ce8a1da37aff38493f9ee03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/block--system-branding-block.html.twig"));

        $tags = array("set" => 16, "if" => 18);
        $filters = array("t" => 19);
        $functions = array("path" => 19);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
                array('path')
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
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "site-branding"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93658fcc205cbf7bbf8005b1cb37a6e43f7f28d59ce8a1da37aff38493f9ee03->leave($__internal_93658fcc205cbf7bbf8005b1cb37a6e43f7f28d59ce8a1da37aff38493f9ee03_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_3bdff56ecb34dd21edf11216a99f382b29ead9fcdc7a377ae1a827b289be92d7 = $this->env->getExtension("native_profiler");
        $__internal_3bdff56ecb34dd21edf11216a99f382b29ead9fcdc7a377ae1a827b289be92d7->enter($__internal_3bdff56ecb34dd21edf11216a99f382b29ead9fcdc7a377ae1a827b289be92d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "  ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 19
            echo "    <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\" class=\"site-branding__logo\">
      <img src=\"";
            // line 20
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
    </a>
  ";
        }
        // line 23
        echo "  ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 24
            echo "    <div class=\"site-branding__text\">
      ";
            // line 25
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 26
                echo "        <div class=\"site-branding__name\">
          <a href=\"";
                // line 27
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
        </div>
      ";
            }
            // line 30
            echo "      ";
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 31
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
      ";
            }
            // line 33
            echo "    </div>
  ";
        }
        
        $__internal_3bdff56ecb34dd21edf11216a99f382b29ead9fcdc7a377ae1a827b289be92d7->leave($__internal_3bdff56ecb34dd21edf11216a99f382b29ead9fcdc7a377ae1a827b289be92d7_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  109 => 31,  106 => 30,  96 => 27,  93 => 26,  91 => 25,  88 => 24,  85 => 23,  77 => 20,  70 => 19,  67 => 18,  61 => 17,  54 => 1,  52 => 16,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation for a branding block.*/
/*  **/
/*  * Each branding element variable (logo, name, slogan) is only available if*/
/*  * enabled in the block configuration.*/
/*  **/
/*  * Available variables:*/
/*  * - site_logo: Logo for site as defined in Appearance or theme settings.*/
/*  * - site_name: Name for site as defined in Site information settings.*/
/*  * - site_slogan: Slogan for site as defined in Site information settings.*/
/*  *//* */
/* #}*/
/* {% set attributes = attributes.addClass('site-branding') %}*/
/* {% block content %}*/
/*   {% if site_logo %}*/
/*     <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home" class="site-branding__logo">*/
/*       <img src="{{ site_logo }}" alt="{{ 'Home'|t }}" />*/
/*     </a>*/
/*   {% endif %}*/
/*   {% if site_name or site_slogan %}*/
/*     <div class="site-branding__text">*/
/*       {% if site_name %}*/
/*         <div class="site-branding__name">*/
/*           <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if site_slogan %}*/
/*         <div class="site-branding__slogan">{{ site_slogan }}</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
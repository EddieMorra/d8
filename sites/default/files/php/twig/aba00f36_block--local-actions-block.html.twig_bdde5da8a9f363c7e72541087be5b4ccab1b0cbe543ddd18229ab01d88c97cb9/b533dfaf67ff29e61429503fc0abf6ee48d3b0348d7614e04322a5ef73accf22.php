<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_225b6d193ef1500c94818b7007b7171dfc3e43080c43a8086be6abc5def0b8b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce42cb6e8e3ec7b2a9c327081d3c104b6a0b577bdc8ba730f42dee8cd38f7187 = $this->env->getExtension("native_profiler");
        $__internal_ce42cb6e8e3ec7b2a9c327081d3c104b6a0b577bdc8ba730f42dee8cd38f7187->enter($__internal_ce42cb6e8e3ec7b2a9c327081d3c104b6a0b577bdc8ba730f42dee8cd38f7187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce42cb6e8e3ec7b2a9c327081d3c104b6a0b577bdc8ba730f42dee8cd38f7187->leave($__internal_ce42cb6e8e3ec7b2a9c327081d3c104b6a0b577bdc8ba730f42dee8cd38f7187_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f7d582c8cb788ecb0ac182138a25d1491039f4560c3e57daff87342103041d0 = $this->env->getExtension("native_profiler");
        $__internal_0f7d582c8cb788ecb0ac182138a25d1491039f4560c3e57daff87342103041d0->enter($__internal_0f7d582c8cb788ecb0ac182138a25d1491039f4560c3e57daff87342103041d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_0f7d582c8cb788ecb0ac182138a25d1491039f4560c3e57daff87342103041d0->leave($__internal_0f7d582c8cb788ecb0ac182138a25d1491039f4560c3e57daff87342103041d0_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "@block/block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for local actions (primary admin actions.)*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <ul class="action-links">*/
/*       {{ content }}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */

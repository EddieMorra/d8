<?php

/* themes/omega/omega/templates/omega-indicator.html.twig */
class __TwigTemplate_24516bfd60afc8d8af67503d7c44983f298f4648892a492f816caf20fae87108 extends Twig_Template
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
        $__internal_e7ecd7b49952f017e001e836bc760b1f9af93113e6fa460ceb2036300a24161b = $this->env->getExtension("native_profiler");
        $__internal_e7ecd7b49952f017e001e836bc760b1f9af93113e6fa460ceb2036300a24161b->enter($__internal_e7ecd7b49952f017e001e836bc760b1f9af93113e6fa460ceb2036300a24161b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/omega/omega/templates/omega-indicator.html.twig"));

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
        echo "<div id=\"omega-screen--indicator\" class=\"clearfix\">
  <div class=\"ologo\">
    ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
        echo "
  </div>
  <div class=\"indicator-data\">
    <div class=\"screen-size\">
      <h5>@screen width:</h5>
      <span class=\"data\"></span>
    </div>
    <div class=\"theme-name\">
      <h5>@theme:</h5>
      <span class=\"data\"></span>
    </div>
    <div class=\"screen-query\">
      <h5>@breakpoints:</h5>
      <span class=\"data\"></span>
    </div>
    <div class=\"screen-layout\">
      <h5>@layout:</h5>
      <span class=\"data\"></span>
    </div>
  </div>
</div>";
        
        $__internal_e7ecd7b49952f017e001e836bc760b1f9af93113e6fa460ceb2036300a24161b->leave($__internal_e7ecd7b49952f017e001e836bc760b1f9af93113e6fa460ceb2036300a24161b_prof);

    }

    public function getTemplateName()
    {
        return "themes/omega/omega/templates/omega-indicator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  46 => 1,);
    }
}
/* <div id="omega-screen--indicator" class="clearfix">*/
/*   <div class="ologo">*/
/*     {{ logo }}*/
/*   </div>*/
/*   <div class="indicator-data">*/
/*     <div class="screen-size">*/
/*       <h5>@screen width:</h5>*/
/*       <span class="data"></span>*/
/*     </div>*/
/*     <div class="theme-name">*/
/*       <h5>@theme:</h5>*/
/*       <span class="data"></span>*/
/*     </div>*/
/*     <div class="screen-query">*/
/*       <h5>@breakpoints:</h5>*/
/*       <span class="data"></span>*/
/*     </div>*/
/*     <div class="screen-layout">*/
/*       <h5>@layout:</h5>*/
/*       <span class="data"></span>*/
/*     </div>*/
/*   </div>*/
/* </div>*/

<?php

/* core/themes/classy/templates/content/links--node.html.twig */
class __TwigTemplate_81921d71d4b39fe5801f3752f5915823b42e1b51e97775ba399a0a2830a8cee7 extends Twig_Template
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
        $__internal_960e6faa9504c469739d7017502b043340c54835dcd240d2a82057c6c1dabb2e = $this->env->getExtension("native_profiler");
        $__internal_960e6faa9504c469739d7017502b043340c54835dcd240d2a82057c6c1dabb2e->enter($__internal_960e6faa9504c469739d7017502b043340c54835dcd240d2a82057c6c1dabb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content/links--node.html.twig"));

        $tags = array("if" => 36, "include" => 38);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
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

        // line 36
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 37
            echo "  <div class=\"node__links\">
    ";
            // line 38
            $this->loadTemplate("links.html.twig", "core/themes/classy/templates/content/links--node.html.twig", 38)->display($context);
            // line 39
            echo "  </div>
";
        }
        
        $__internal_960e6faa9504c469739d7017502b043340c54835dcd240d2a82057c6c1dabb2e->leave($__internal_960e6faa9504c469739d7017502b043340c54835dcd240d2a82057c6c1dabb2e_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/links--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 39,  51 => 38,  48 => 37,  46 => 36,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display node links.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Attributes for the UL containing the list of links.*/
/*  * - links: Links to be output.*/
/*  *   Each link will have the following elements:*/
/*  *   - title: The link text.*/
/*  *   - href: The link URL. If omitted, the 'title' is shown as a plain text*/
/*  *     item in the links list. If 'href' is supplied, the entire link is passed*/
/*  *     to l() as its $options parameter.*/
/*  *   - attributes: (optional) HTML attributes for the anchor, or for the <span>*/
/*  *     tag if no 'href' is supplied.*/
/*  * - heading: (optional) A heading to precede the links.*/
/*  *   - text: The heading text.*/
/*  *   - level: The heading level (e.g. 'h2', 'h3').*/
/*  *   - attributes: (optional) A keyed list of attributes for the heading.*/
/*  *   If the heading is a string, it will be used as the text of the heading and*/
/*  *   the level will default to 'h2'.*/
/*  **/
/*  *   Headings should be used on navigation menus and any list of links that*/
/*  *   consistently appears on multiple pages. To make the heading invisible use*/
/*  *   the 'visually-hidden' CSS class. Do not use 'display:none', which*/
/*  *   removes it from screen readers and assistive technology. Headings allow*/
/*  *   screen reader and keyboard only users to navigate to or skip the links.*/
/*  *   See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  *   http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  **/
/*  * @see template_preprocess_links()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if links %}*/
/*   <div class="node__links">*/
/*     {% include "links.html.twig" %}*/
/*   </div>*/
/* {% endif %}*/
/* */

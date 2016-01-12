<?php

/* themes/contrib/formata/templates/node.html.twig */
class __TwigTemplate_89ed14006b2dae6f156a0f9ee829633d9a40e53c6c666f50d3a4e674c313b2eb extends Twig_Template
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
        $tags = array("if" => 9);
        $filters = array("without" => 17);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('without'),
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

        // line 7
        echo "<article id=\"node-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "id", array()), "html", null, true));
        echo "\" class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array()), "html", null, true));
        echo " clearfix\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo " role=\"article\">
  ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 9
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 10
            echo "  <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
            echo ">
  <a href=\"";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
  </h2>
  ";
        }
        // line 14
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  <div class=\"content\"";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">
   ";
        // line 17
        echo "   ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "links"), "html", null, true));
        echo "
   </div>
   ";
        // line 19
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array())) {
            // line 20
            echo "   <div class=\"link-wrapper\">
    ";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 24
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/formata/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  91 => 21,  88 => 20,  86 => 19,  80 => 17,  76 => 15,  71 => 14,  63 => 11,  58 => 10,  56 => 9,  52 => 8,  43 => 7,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * display a node.*/
/*  *//* */
/*  #}*/
/* <article id="node-{{ node.id }}" class="{{ attributes.class}} clearfix"{{ attributes }} role="article">*/
/*   {{ title_prefix }}*/
/*   {% if not page %}*/
/*   <h2{{ title_attributes.addClass('node__title') }}>*/
/*   <a href="{{ url }}" rel="bookmark">{{ label }}</a>*/
/*   </h2>*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/*   <div class="content"{{ content_attributes }}>*/
/*    {# We hide links now so that we can render them later. #}*/
/*    {{ content|without('links') }}*/
/*    </div>*/
/*    {% if content.links %}*/
/*    <div class="link-wrapper">*/
/*     {{ content.links }}*/
/*     </div>*/
/*     {% endif %}*/
/* </article>*/
/* */

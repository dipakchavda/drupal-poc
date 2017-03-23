<?php

/* modules/google_map_field/templates/google_map_field.html.twig */
class __TwigTemplate_54fd5509153e8314fb31920ab08eb33885a1abb0206b42bd0ec066d3e7076b2e extends Twig_Template
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
        $tags = array("if" => 2);
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

        // line 1
        echo "<section class=\"google-map-field\">
  ";
        // line 2
        if ((isset($context["name"]) ? $context["name"] : null)) {
            // line 3
            echo "  <h2>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 5
        echo "  <div class=\"map-container\" style=\"width:";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true));
        echo ";height:";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true));
        echo ";\" data-controls-show=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["show_controls"]) ? $context["show_controls"] : null), "html", null, true));
        echo "\" data-marker-show=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["show_marker"]) ? $context["show_marker"] : null), "html", null, true));
        echo "\" data-type=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true));
        echo "\" data-lat=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["lat"]) ? $context["lat"] : null), "html", null, true));
        echo "\" data-lon=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["lon"]) ? $context["lon"] : null), "html", null, true));
        echo "\" data-zoom=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["zoom"]) ? $context["zoom"] : null), "html", null, true));
        echo "\"></div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/google_map_field/templates/google_map_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }
}
/* <section class="google-map-field">*/
/*   {% if name %}*/
/*   <h2>{{ name }}</h2>*/
/*   {% endif %}*/
/*   <div class="map-container" style="width:{{ width }};height:{{ height }};" data-controls-show="{{ show_controls }}" data-marker-show="{{ show_marker }}" data-type="{{ type }}" data-lat="{{ lat }}" data-lon="{{ lon }}" data-zoom="{{ zoom }}"></div>*/
/* </section>*/
/* */

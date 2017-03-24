<?php

/* modules/custom/nestle_general_web_parts/templates/hello-block.html.twig */
class __TwigTemplate_2900ca577dd80d49905fa304dc45b87740b58ffb862af69e8bb52be35cdc8446 extends Twig_Template
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
        $tags = array("for" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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
        echo "<div class=\"row\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
        foreach ($context['_seq'] as $context["nid"] => $context["row"]) {
            // line 3
            echo "\t\t<div class=\"col-md-3 col-xl-3 col-md-3\">
\t\t\t<a href=\"";
            // line 4
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content_url", array()), "html", null, true));
            echo "\">
\t\t\t\t<img class=\"responsive-image\" src=\"";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "image_data", array()), 0, array(), "array"), "uri", array()), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["row"], "image_data", array()), 0, array(), "array"), "alt", array()), "html", null, true));
            echo "\" />
\t\t\t\t<h2>";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "title", array()), "html", null, true));
            echo "</h2>
\t\t\t</a>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nid'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/nestle_general_web_parts/templates/hello-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  63 => 6,  57 => 5,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }
}
/* <div class="row">*/
/* 	{% for nid, row in content %}*/
/* 		<div class="col-md-3 col-xl-3 col-md-3">*/
/* 			<a href="{{ row.content_url }}">*/
/* 				<img class="responsive-image" src="{{ row.image_data[0].uri }}" alt="{{ row.image_data[0].alt }}" />*/
/* 				<h2>{{ row.title }}</h2>*/
/* 			</a>*/
/* 		</div>*/
/* 	{% endfor %}*/
/* </div>*/

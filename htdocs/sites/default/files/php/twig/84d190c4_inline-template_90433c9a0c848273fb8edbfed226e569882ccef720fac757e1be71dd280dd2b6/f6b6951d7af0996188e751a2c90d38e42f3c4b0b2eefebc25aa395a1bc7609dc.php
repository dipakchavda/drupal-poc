<?php

/* {# inline_template_start #}<div class="row row-striped">
  <div class="col-md-12">
    <div class="col-md-6">
      {{ field_product_image }}
    </div>
    <div class="col-md-6">
      <p>Created: <strong>{{ created }}</strong></p>
      <h2 class="warning">{{ title }}</h2>
      {{ body }}
      {{ view_node }} 
    </div>
  </div>
</div> */
class __TwigTemplate_cb9720f17e49e64f3d5b520c4e0c14bb1d4ba72a9a59537bff76160494bebdf0 extends Twig_Template
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
        echo "<div class=\"row row-striped\">
  <div class=\"col-md-12\">
    <div class=\"col-md-6\">
      ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_product_image"]) ? $context["field_product_image"] : null), "html", null, true));
        echo "
    </div>
    <div class=\"col-md-6\">
      <p>Created: <strong>";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "</strong></p>
      <h2 class=\"warning\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h2>
      ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "
      ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["view_node"]) ? $context["view_node"] : null), "html", null, true));
        echo " 
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"row row-striped\">
  <div class=\"col-md-12\">
    <div class=\"col-md-6\">
      {{ field_product_image }}
    </div>
    <div class=\"col-md-6\">
      <p>Created: <strong>{{ created }}</strong></p>
      <h2 class=\"warning\">{{ title }}</h2>
      {{ body }}
      {{ view_node }} 
    </div>
  </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 10,  74 => 9,  70 => 8,  66 => 7,  60 => 4,  55 => 1,);
    }
}
/* {# inline_template_start #}<div class="row row-striped">*/
/*   <div class="col-md-12">*/
/*     <div class="col-md-6">*/
/*       {{ field_product_image }}*/
/*     </div>*/
/*     <div class="col-md-6">*/
/*       <p>Created: <strong>{{ created }}</strong></p>*/
/*       <h2 class="warning">{{ title }}</h2>*/
/*       {{ body }}*/
/*       {{ view_node }} */
/*     </div>*/
/*   </div>*/
/* </div>*/

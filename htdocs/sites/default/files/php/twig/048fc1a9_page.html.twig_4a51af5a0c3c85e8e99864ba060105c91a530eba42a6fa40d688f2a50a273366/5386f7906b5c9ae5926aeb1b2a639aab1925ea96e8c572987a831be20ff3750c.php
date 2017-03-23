<?php

/* themes/bootstrap/templates/system/page.html.twig */
class __TwigTemplate_3b8afd3e3a5d1e06e98f4d1096049a672b9dcdcce1f94d0f78437cdf78f6715f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'jumbotron_section' => array($this, 'block_jumbotron_section'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("clean_class" => 67);
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

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 110
        echo "



<!--div class=\"main-content jumbotron\">

\t
\t
\t";
        // line 118
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "jumbotron_section", array())) {
            // line 119
            echo "        ";
            $this->displayBlock('jumbotron_section', $context, $blocks);
            // line 124
            echo "      ";
        }
        // line 125
        echo "\t
</div-->

";
        // line 129
        $this->displayBlock('main', $context, $blocks);
        // line 208
        echo "
";
        // line 209
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 210
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 66
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 67
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 70
        echo "\t
\t<div class=\"panel-pane pane-block pane-system-main-menu menu-main-wrapper\" id=\"main-menu-desktop\">
            <ul class=\"main-menu\">
              ";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
        echo "\t\t\t\t\t\t 
            </ul>
        </div>
\t\t
\t\t
    <header class=\"panel-display\" id=\"top\" role=\"banner\">
      ";
        // line 79
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 80
            echo "        
      ";
        }
        // line 82
        echo "      <div class=\"navbarheader\">
\t\t<div class=\"header-menu-btn\">
            <div id=\"nav-icon3\">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
\t\t";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "Socialshare", array()), "html", null, true));
        echo "
        ";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
\t    ";
        // line 93
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "userAccount", array()), "html", null, true));
        echo "
\t\t
\t\t
      </div>

      ";
        // line 99
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 100
            echo "        <!--div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          
        </div-->
      ";
        }
        // line 104
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 105
            echo "        
      ";
        }
        // line 107
        echo "    </header>
  ";
    }

    // line 119
    public function block_jumbotron_section($context, array $blocks = array())
    {
        // line 120
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 121
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "jumbotron_section", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 129
    public function block_main($context, array $blocks = array())
    {
        // line 130
        echo "  <div role=\"main\" id=\"content\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 134
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 135
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 140
            echo "      ";
        }
        // line 141
        echo "
      ";
        // line 143
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 144
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 149
            echo "      ";
        }
        // line 150
        echo "
      ";
        // line 152
        echo "      ";
        // line 153
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 154
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 155
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 156
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 157
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 160
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 163
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 164
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 167
            echo "        ";
        }
        // line 168
        echo "
        ";
        // line 170
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 171
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 174
            echo "        ";
        }
        // line 175
        echo "
        ";
        // line 177
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 178
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 181
            echo "        ";
        }
        // line 182
        echo "
        ";
        // line 184
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 185
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 188
            echo "        ";
        }
        // line 189
        echo "
        ";
        // line 191
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 195
        echo "      </section>

      ";
        // line 198
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 199
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 204
            echo "      ";
        }
        // line 205
        echo "    </div>
  </div>
";
    }

    // line 135
    public function block_header($context, array $blocks = array())
    {
        // line 136
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 137
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 144
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 145
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 146
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 164
    public function block_highlighted($context, array $blocks = array())
    {
        // line 165
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 171
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 172
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 178
    public function block_action_links($context, array $blocks = array())
    {
        // line 179
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 185
    public function block_help($context, array $blocks = array())
    {
        // line 186
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 191
    public function block_content($context, array $blocks = array())
    {
        // line 192
        echo "          <a id=\"main-content\"></a>
          ";
        // line 193
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 199
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 200
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 201
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 210
    public function block_footer($context, array $blocks = array())
    {
        // line 211
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 212
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 212,  401 => 211,  398 => 210,  391 => 201,  388 => 200,  385 => 199,  379 => 193,  376 => 192,  373 => 191,  366 => 186,  363 => 185,  356 => 179,  353 => 178,  346 => 172,  343 => 171,  336 => 165,  333 => 164,  326 => 146,  323 => 145,  320 => 144,  313 => 137,  310 => 136,  307 => 135,  301 => 205,  298 => 204,  295 => 199,  292 => 198,  288 => 195,  285 => 191,  282 => 189,  279 => 188,  276 => 185,  273 => 184,  270 => 182,  267 => 181,  264 => 178,  261 => 177,  258 => 175,  255 => 174,  252 => 171,  249 => 170,  246 => 168,  243 => 167,  240 => 164,  237 => 163,  231 => 160,  229 => 157,  228 => 156,  227 => 155,  226 => 154,  225 => 153,  223 => 152,  220 => 150,  217 => 149,  214 => 144,  211 => 143,  208 => 141,  205 => 140,  202 => 135,  199 => 134,  192 => 130,  189 => 129,  182 => 121,  179 => 120,  176 => 119,  171 => 107,  167 => 105,  164 => 104,  158 => 100,  155 => 99,  147 => 93,  143 => 92,  139 => 91,  128 => 82,  124 => 80,  122 => 79,  113 => 73,  108 => 70,  106 => 67,  105 => 66,  104 => 64,  102 => 63,  99 => 62,  93 => 210,  91 => 209,  88 => 208,  86 => 129,  81 => 125,  78 => 124,  75 => 119,  73 => 118,  63 => 110,  59 => 62,  57 => 61,  55 => 59,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Navigation:*/
/*  * - breadcrumb: The breadcrumb trail for the current page.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title: The page title, for use in the actual content.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the*/
/*  *   view and edit tabs when displaying a node).*/
/*  * - action_links: Actions local to the page, such as "Add menu" on the menu*/
/*  *   administration interface.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.navigation: Items for the navigation region.*/
/*  * - page.navigation_collapsible: Items for the navigation (collapsible) region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* {% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}*/
/* {# Navbar #}*/
/* {% if page.navigation or page.navigation_collapsible %}*/
/*   {% block navbar %}*/
/*     {%*/
/*       set navbar_classes = [*/
/*         'navbar',*/
/*         theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',*/
/*         theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,*/
/*       ]*/
/*     %}*/
/* 	*/
/* 	<div class="panel-pane pane-block pane-system-main-menu menu-main-wrapper" id="main-menu-desktop">*/
/*             <ul class="main-menu">*/
/*               {{ page.navigation_collapsible }}						 */
/*             </ul>*/
/*         </div>*/
/* 		*/
/* 		*/
/*     <header class="panel-display" id="top" role="banner">*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         */
/*       {% endif %}*/
/*       <div class="navbarheader">*/
/* 		<div class="header-menu-btn">*/
/*             <div id="nav-icon3">*/
/*                 <span></span>*/
/*                 <span></span>*/
/*                 <span></span>*/
/*                 <span></span>*/
/*             </div>*/
/*         </div>*/
/* 		{{page.Socialshare}}*/
/*         {{ page.navigation }}*/
/* 	    {{page.userAccount}}*/
/* 		*/
/* 		*/
/*       </div>*/
/* */
/*       {# Navigation (collapsible) #}*/
/*       {% if page.navigation_collapsible %}*/
/*         <!--div id="navbar-collapse" class="navbar-collapse collapse">*/
/*           */
/*         </div-->*/
/*       {% endif %}*/
/*       {% if not navbar_attributes.hasClass('container') %}*/
/*         */
/*       {% endif %}*/
/*     </header>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */
/* */
/* */
/* */
/* <!--div class="main-content jumbotron">*/
/* */
/* 	*/
/* 	*/
/* 	{% if page.jumbotron_section %}*/
/*         {% block jumbotron_section %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.jumbotron_section }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* 	*/
/* </div-->*/
/* */
/* {# Main #}*/
/* {% block main %}*/
/*   <div role="main" id="content" class="main-container {{ container }} js-quickedit-main-content">*/
/*     <div class="row">*/
/* */
/*       {# Header #}*/
/*       {% if page.header %}*/
/*         {% block header %}*/
/*           <div class="col-sm-12" role="heading">*/
/*             {{ page.header }}*/
/*           </div>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Sidebar First #}*/
/*       {% if page.sidebar_first %}*/
/*         {% block sidebar_first %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/* */
/*       {# Content #}*/
/*       {%*/
/*         set content_classes = [*/
/*           page.sidebar_first and page.sidebar_second ? 'col-sm-6',*/
/*           page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',*/
/*           page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',*/
/*           page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'*/
/*         ]*/
/*       %}*/
/*       <section{{ content_attributes.addClass(content_classes) }}>*/
/* */
/*         {# Highlighted #}*/
/*         {% if page.highlighted %}*/
/*           {% block highlighted %}*/
/*             <div class="highlighted">{{ page.highlighted }}</div>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Breadcrumbs #}*/
/*         {% if breadcrumb %}*/
/*           {% block breadcrumb %}*/
/*             {{ breadcrumb }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Action Links #}*/
/*         {% if action_links %}*/
/*           {% block action_links %}*/
/*             <ul class="action-links">{{ action_links }}</ul>*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Help #}*/
/*         {% if page.help %}*/
/*           {% block help %}*/
/*             {{ page.help }}*/
/*           {% endblock %}*/
/*         {% endif %}*/
/* */
/*         {# Content #}*/
/*         {% block content %}*/
/*           <a id="main-content"></a>*/
/*           {{ page.content }}*/
/*         {% endblock %}*/
/*       </section>*/
/* */
/*       {# Sidebar Second #}*/
/*       {% if page.sidebar_second %}*/
/*         {% block sidebar_second %}*/
/*           <aside class="col-sm-3" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endblock %}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% if page.footer %}*/
/*   {% block footer %}*/
/*     <footer class="footer {{ container }}" role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endblock %}*/
/* {% endif %}*/
/* */

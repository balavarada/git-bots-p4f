<?php

/* pav_xstore/template/extension/module/html.twig */
class __TwigTemplate_7c6b3caad000d40b648ae886c98b060404616f857cf3ade5eb281fed596400f3 extends Twig_Template
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
        // line 1
        echo "<div class=\"html-item\">";
        if ((isset($context["heading_title"]) ? $context["heading_title"] : null)) {
            // line 2
            echo "  <div class=\"html-heading\">\t
  \t<h2 >";
            // line 3
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h2>
  </div>
  ";
        }
        // line 6
        echo "  ";
        echo (isset($context["html"]) ? $context["html"] : null);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "pav_xstore/template/extension/module/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  25 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="html-item">{% if heading_title %}*/
/*   <div class="html-heading">	*/
/*   	<h2 >{{ heading_title }}</h2>*/
/*   </div>*/
/*   {% endif %}*/
/*   {{ html }}</div>*/
/* */

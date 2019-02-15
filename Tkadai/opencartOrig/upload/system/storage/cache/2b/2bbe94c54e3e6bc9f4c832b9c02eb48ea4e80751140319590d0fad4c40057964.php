<?php

/* pav_xstore/template/extension/module/pavmegamenu.twig */
class __TwigTemplate_6c61289fdc9b79af328cfda0914deecd20091d74c68657caebf28ae74ab6f6f0 extends Twig_Template
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
        echo "<nav id=\"pav-megamenu\" class=\"navbar\">
\t<div class=\"navbar-header\">
\t  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-megamenu\">
\t  \t<i class=\"fa fa-bars\"></i>
\t  </button>
\t</div>
\t<div class=\"collapse navbar-collapse\" id=\"bs-megamenu\">
\t\t";
        // line 8
        echo (isset($context["treemenu"]) ? $context["treemenu"] : null);
        echo "
\t</div>
</nav>

";
    }

    public function getTemplateName()
    {
        return "pav_xstore/template/extension/module/pavmegamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }
}
/* <nav id="pav-megamenu" class="navbar">*/
/* 	<div class="navbar-header">*/
/* 	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megamenu">*/
/* 	  	<i class="fa fa-bars"></i>*/
/* 	  </button>*/
/* 	</div>*/
/* 	<div class="collapse navbar-collapse" id="bs-megamenu">*/
/* 		{{ treemenu }}*/
/* 	</div>*/
/* </nav>*/
/* */
/* */

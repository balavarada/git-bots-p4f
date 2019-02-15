<?php

/* pav_xstore/template/extension/module/pavobuilder/pa_text/pa_text.twig */
class __TwigTemplate_d10daf159461014799f6ed6444f6a65abde87cf5556d9fa74ce5f759d1956b3b extends Twig_Template
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
        echo "<div class=\"pavo-widget-text pa-element pa_text ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "extra_class", array());
        echo "\">
\t";
        // line 3
        echo "\t\t";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "content", array());
        echo "
\t";
        // line 5
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "pav_xstore/template/extension/module/pavobuilder/pa_text/pa_text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* <div class="pavo-widget-text pa-element pa_text {{ settings.extra_class }}">*/
/* 	{% autoescape %}*/
/* 		{{ settings.content | raw }}*/
/* 	{% endautoescape %}*/
/* </div>*/

<?php

/* default/template/extension/module/pavobuilder/pa_column/pa_column.twig */
class __TwigTemplate_36037177744283d56aff6d9cdd36648a9fdb661c1a0a57f6b49cda3160f2c69f extends Twig_Template
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
        echo "<div class=\"pa-column-container";
        echo (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "bootstrap_class", array())) ? (twig_join_filter(array(0 => " ", 1 => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "bootstrap_class", array())))) : (""));
        echo " ";
        echo (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "extra_class_outer", array())) ? (twig_join_filter(array(0 => " ", 1 => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "extra_class_outer", array())))) : (""));
        echo "\" data-uniqid=\"";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "uniqid_id", array());
        echo "\" data-animate=\"";
        echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "animate", array())) ? ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "animate", array())) : ("none"));
        echo "\">
\t<div class=\"pa-column-inner";
        // line 2
        echo (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class", array())) ? (twig_join_filter(array(0 => " ", 1 => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class", array())))) : (""));
        echo "\">
\t\t";
        // line 3
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/pavobuilder/pa_column/pa_column.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 2,  19 => 1,);
    }
}
/* <div class="pa-column-container{{ settings.bootstrap_class ? [ ' ', settings.bootstrap_class ] | join() : '' }} {{ settings.extra_class_outer ? [ ' ', settings.extra_class_outer ] | join() : '' }}" data-uniqid="{{ settings.uniqid_id }}" data-animate="{{ data.animate ? data.animate : 'none' }}">*/
/* 	<div class="pa-column-inner{{ settings.class ? [ ' ', settings.class ] | join() : '' }}">*/
/* 		{{ content }}*/
/* 	</div>*/
/* </div>*/

<?php

/* default/template/extension/module/pavobuilder/pa_element_wrapper.twig */
class __TwigTemplate_33badf63cfc892920c82d75c17d93ad521c7579fb0a4a797db2e24ecec4f7265 extends Twig_Template
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
        echo "<div class=\"pa-element-container ";
        echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "widget", array())) ? (twig_join_filter(array(0 => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "widget", array()), 1 => "_", 2 => "element_wrapper"))) : ((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "module", array())) ? (twig_join_filter(array(0 => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "module", array()), 1 => "_", 2 => "module"))) : (""))));
        echo "\" data-uniqid=\"";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "uniqid_id", array());
        echo "\">
\t<div class=\"pa-element-inner ";
        // line 2
        echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "widget", array())) ? (twig_join_filter(array(0 => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "widget", array()), 1 => "_", 2 => "element"))) : ((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "module", array())) ? (twig_join_filter(array(0 => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "module", array()), 1 => "_", 2 => "module"))) : (""))));
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
        return "default/template/extension/module/pavobuilder/pa_element_wrapper.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="pa-element-container {{ data.widget ? [ data.widget, '_', 'element_wrapper' ] | join() : ( data.module ? [ data.module, '_', 'module' ] | join() : '' ) }}" data-uniqid="{{ settings.uniqid_id }}">*/
/* 	<div class="pa-element-inner {{ data.widget ? [ data.widget, '_', 'element' ] | join() : ( data.module ? [ data.module, '_', 'module' ] | join() : '' ) }}">*/
/* 		{{ content }}*/
/* 	</div>*/
/* </div>*/

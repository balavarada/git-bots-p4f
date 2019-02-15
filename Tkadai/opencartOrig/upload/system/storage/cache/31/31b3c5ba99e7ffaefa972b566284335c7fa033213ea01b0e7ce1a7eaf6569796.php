<?php

/* default/template/extension/module/pavobuilder/pa_single_image/pa_single_image.twig */
class __TwigTemplate_dac068643c0d059539400b40e4e62820c4d31a744cd56939123c7b6f153d4b7a extends Twig_Template
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
        echo "<div class=\"image-item effect-v10 ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout", array());
        echo "\">
\t<a href=\"";
        // line 2
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "link", array());
        echo "\" class=\"pa-element pa_single_image ";
        echo (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class", array())) ? (twig_join_filter(array(0 => " ", 1 => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class", array())))) : (""));
        echo "\">
\t\t<img class=\"img-responsive\" src=\"";
        // line 3
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "src", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "alt", array());
        echo "\" />
\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/pavobuilder/pa_single_image/pa_single_image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div class="image-item effect-v10 {{settings.layout}}">*/
/* 	<a href="{{ settings.link }}" class="pa-element pa_single_image {{ settings.class ? [ ' ', settings.class ] | join() : '' }}">*/
/* 		<img class="img-responsive" src="{{ settings.src }}" alt="{{ settings.alt }}" />*/
/* 	</a>*/
/* </div>*/
/* */

<?php

/* default/template/extension/module/pavobuilder/pa_row/pa_row.twig */
class __TwigTemplate_4467699ca2e3713e77f2d6ae6d1b25e41659493450f4b74aecbf9b036ebdba79 extends Twig_Template
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
        echo "<div class=\"pa-row-container";
        echo (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class", array())) ? (twig_join_filter(array(0 => " ", 1 => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class", array())))) : (""));
        echo "\" data-uniqid=\"";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "uniqid_id", array());
        echo "\" data-animate=\"";
        echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "animate", array())) ? ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "animate", array())) : ("none"));
        echo "\">
\t<div class=\"";
        // line 2
        echo ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "layout", array()) == "boxed")) ? ("container") : ("container-fullwidth"));
        echo "\">
\t\t<div class=\"pa-row-inner\">
\t\t\t";
        // line 4
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "background_video", array())) {
            // line 5
            echo "\t\t\t\t<div class=\"pa-bg-video\" data-video=\"";
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "background_video", array());
            echo "\"></div>
\t\t\t";
        }
        // line 7
        echo "\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 8
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/pavobuilder/pa_row/pa_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  41 => 7,  35 => 5,  33 => 4,  28 => 2,  19 => 1,);
    }
}
/* <div class="pa-row-container{{ settings.class ? [ ' ', settings.class ] | join() : '' }}" data-uniqid="{{ settings.uniqid_id }}" data-animate="{{ data.animate ? data.animate : 'none' }}">*/
/* 	<div class="{{ settings.layout == 'boxed' ? 'container' : 'container-fullwidth' }}">*/
/* 		<div class="pa-row-inner">*/
/* 			{% if ( settings.background_video ) %}*/
/* 				<div class="pa-bg-video" data-video="{{ settings.background_video }}"></div>*/
/* 			{% endif %}*/
/* 			<div class="row">*/
/* 				{{ content }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/

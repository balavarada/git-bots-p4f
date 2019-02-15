<?php

/* pav_xstore/template/extension/module/pavsliderlayer.twig */
class __TwigTemplate_926f760a496d960f51e6c34995db14769e867d577e3164901eda6aae644bade1 extends Twig_Template
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
        echo "<!-- <?php 

\t\$sliderParams['hide_navigator_after'] = \$sliderParams['show_navigator']?0:\$sliderParams['hide_navigator_after'];
\t\$class \t   = isset( \$sliderParams['fullwidth'] ) && !empty(\$sliderParams['fullwidth']) ? \$sliderParams['fullwidth']: 'boxed';
\t\$fullwidth = \$class ==\"boxed\"?\"off\":\"on\";

?> -->
";
        // line 8
        if (($this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "show_navigator", array()) == 1)) {
            // line 9
            echo "\t";
            $context["hide_navigator_after"] = 0;
        } else {
            // line 11
            echo "\t";
            $context["hide_navigator_after"] = $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "hide_navigator_after", array());
        }
        // line 13
        echo "
";
        // line 14
        if ($this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "fullwidth", array(), "any", true, true)) {
            $context["class"] = $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "fullwidth", array());
        } else {
            $context["class"] = "boxed";
        }
        // line 15
        echo "
";
        // line 16
        if (((isset($context["class"]) ? $context["class"] : null) == "boxed")) {
            $context["fullwidth"] = "off";
        } else {
            $context["fullwidth"] = "on";
        }
        // line 17
        echo "
";
        // line 18
        if (((isset($context["class"]) ? $context["class"] : null) == "boxed")) {
            // line 19
            echo "<div class=\"layerslider-wrapper\" style=\"max-width:";
            echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "width", array());
            echo "px;\">
";
        }
        // line 21
        echo "\t<div class=\"bannercontainer banner-";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\" style=\"padding: ";
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "padding", array());
        echo ";margin: ";
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "margin", array());
        echo ";\">
\t\t<div id=\"sliderlayer";
        // line 22
        echo (isset($context["randID"]) ? $context["randID"] : null);
        echo "\" class=\"layerslider rev_slider ";
        echo trim((isset($context["class"]) ? $context["class"] : null));
        echo "banner\" style=\"width:100%;height:";
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "height", array());
        echo "px; \" >\t
\t\t\t<ul>
\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sliders"]) ? $context["sliders"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 25
            echo "\t\t\t\t";
            if ($this->getAttribute($this->getAttribute($context["slider"], "params", array(), "array"), "slider_link", array())) {
                // line 26
                echo "\t\t\t\t\t";
                $context["slider_link"] = $this->getAttribute($this->getAttribute($context["slider"], "params", array(), "array"), "slider_link", array());
                // line 27
                echo "\t\t\t\t\t";
                $context["link"] = "data-link=\"{{ slider_link }}\"";
                // line 28
                echo "\t\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t\t";
                $context["link"] = "";
                // line 30
                echo "\t\t\t\t";
            }
            // line 31
            echo "
\t\t\t\t";
            // line 32
            if ($this->getAttribute($this->getAttribute($context["slider"], "params", array(), "array"), "slider_delay", array())) {
                // line 33
                echo "\t\t\t\t\t";
                $context["slider_delay"] = $this->getAttribute($this->getAttribute($context["slider"], "params", array(), "array"), "slider_delay", array());
                // line 34
                echo "\t\t\t\t\t";
                $context["sliderDelay"] = "data-delay=\"{{ slider_delay }}\"";
                // line 35
                echo "\t\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t\t";
                $context["sliderDelay"] = "";
                // line 37
                echo "\t\t\t\t";
            }
            // line 38
            echo "\t\t\t
\t\t\t\t<li ";
            // line 39
            echo (isset($context["link"]) ? $context["link"] : null);
            echo " ";
            echo (isset($context["sliderDelay"]) ? $context["sliderDelay"] : null);
            echo " data-masterspeed=\"";
            echo $this->getAttribute($this->getAttribute($context["slider"], "params", array(), "array"), "slider_duration", array());
            echo "\"  data-transition=\"";
            echo $this->getAttribute($this->getAttribute($context["slider"], "params", array(), "array"), "slider_transition", array());
            echo "\" data-slotamount=\"";
            echo $this->getAttribute($this->getAttribute($context["slider"], "params", array(), "array"), "slider_slot", array());
            echo "\" data-thumb=\"";
            echo $this->getAttribute($context["slider"], "thumbnail", array());
            echo "\">
\t\t\t\t\t";
            // line 40
            if ((($this->getAttribute($this->getAttribute($context["slider"], "params", array(), "array"), "slider_usevideo", array()) == "youtube") || ($this->getAttribute($this->getAttribute($context["slider"], "params", array(), "array"), "slider_usevideo", array()) == "vimeo"))) {
                // line 41
                echo "\t\t\t\t\t\t";
                $context["vurl"] = "http://player.vimeo.com/video/{{ slider['params'].slider_videoid }}";
                // line 42
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["slider"], "params", array(), "array"), "slider_usevideo", array()) == "youtube")) {
                    // line 43
                    echo "\t\t\t\t\t\t\t";
                    $context["vurl"] = "http://www.youtube.com/embed/{{ slider['params'].slider_videoid }}";
                    // line 44
                    echo "\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t
\t\t\t\t\t\t<div class=\"caption fade fullscreenvideo\" data-autoplay=\"true\" data-x=\"0\" data-y=\"0\" data-speed=\"500\" data-start=\"10\" data-easing=\"easeOutBack\"><iframe src=\"";
                // line 46
                echo (isset($context["vurl"]) ? $context["vurl"] : null);
                echo "?title=0&amp;byline=0&amp;portrait=0;api=1\" width=\"100%\" height=\"100%\"></iframe></div>

\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 48
$context["slider"], "main_image", array())) {
                // line 49
                echo "\t\t\t\t\t\t<img src=\"";
                echo $this->getAttribute($context["slider"], "main_image", array());
                echo "\"  alt=\"Image ";
                echo $context["_key"];
                echo "\"/>
\t\t\t\t\t";
            }
            // line 51
            echo "
\t\t\t\t\t";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["slider"], "layers_params", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["layer"]) {
                // line 53
                echo "\t\t\t\t\t\t";
                $context["type"] = $this->getAttribute($context["layer"], "layer_type", array());
                // line 54
                echo "\t\t\t\t\t\t";
                $context["endeffect"] = "";
                // line 55
                echo "
\t\t\t\t\t\t";
                // line 56
                if (($this->getAttribute($context["layer"], "layer_endanimation", array()) == "auto")) {
                    echo " ";
                    $context["layer_layer_endanimation"] = "";
                    echo " ";
                }
                // line 57
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["layer"], "layer_endtime", array())) {
                    echo " 
\t\t\t\t\t\t\t";
                    // line 58
                    $context["endeffect"] = " data-end=\"{{ layer.layer_endtime }}\"";
                    // line 59
                    echo "\t\t\t\t\t\t\t";
                    $context["endeffect"] = " data-endspeed=\"{{ layer.layer_endspeed }}\"";
                    // line 60
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["layer"], "layer_endeasing", array()) != "nothing")) {
                        // line 61
                        echo "\t\t\t\t\t\t\t\t";
                        $context["endeffect"] = " data-endeasing=\"{{ layer.layer_endeasing }}\"";
                        // line 62
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 63
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 64
                    echo "\t\t\t\t\t\t\t";
                    $context["layer_layer_endanimation"] = "";
                    // line 65
                    echo "\t\t\t\t\t\t";
                }
                // line 66
                echo "
\t\t\t\t\t\t<div class=\"caption ";
                // line 67
                echo $this->getAttribute($context["layer"], "layer_class", array());
                echo " ";
                echo $this->getAttribute($context["layer"], "layer_animation", array());
                echo " ";
                echo $this->getAttribute($context["layer"], "layer_easing", array());
                echo " ";
                echo (isset($context["layer_layer_endanimation"]) ? $context["layer_layer_endanimation"] : null);
                echo "\" data-x=\"";
                echo $this->getAttribute($context["layer"], "layer_left", array());
                echo "\" data-y=\"";
                echo $this->getAttribute($context["layer"], "layer_top", array());
                echo "\" data-speed=\"300\" data-start=\"";
                echo $this->getAttribute($context["layer"], "time_start", array());
                echo "\" data-easing=\"easeOutExpo\" ";
                echo (isset($context["endeffect"]) ? $context["endeffect"] : null);
                echo ">
\t\t\t\t\t\t\t";
                // line 68
                if (((isset($context["type"]) ? $context["type"] : null) == "image")) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo (isset($context["http_catalog"]) ? $context["http_catalog"] : null);
                    echo "image/";
                    echo $this->getAttribute($context["layer"], "layer_content", array());
                    echo "\">
\t\t\t\t\t\t\t";
                } elseif ((                // line 70
(isset($context["type"]) ? $context["type"] : null) == "video")) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["layer"], "layer_video_type", array()) == "vimeo")) {
                        // line 72
                        echo "\t\t\t\t\t\t\t\t\t<iframe src=\"http://player.vimeo.com/video/";
                        echo $this->getAttribute($context["layer"], "layer_video_id", array());
                        echo "?title=0&amp;byline=0&amp;portrait=0;api=1\" width=\"";
                        echo $this->getAttribute($context["layer"], "layer_video_width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["layer"], "layer_video_height", array());
                        echo "\"  style=\"width:";
                        echo $this->getAttribute($context["layer"], "layer_video_width", array());
                        echo "px;height:";
                        echo $this->getAttribute($context["layer"], "layer_video_height", array());
                        echo "px\"></iframe>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 74
                        echo "\t\t\t\t\t\t\t\t\t<iframe src=\"http://www.youtube.com/embed/";
                        echo $this->getAttribute($context["layer"], "layer_video_id", array());
                        echo "?title=0&amp;byline=0&amp;portrait=0;api=1\" width=\"";
                        echo $this->getAttribute($context["layer"], "layer_video_width", array());
                        echo "\" height=\"";
                        echo $this->getAttribute($context["layer"], "layer_video_height", array());
                        echo "\"  style=\"width:";
                        echo $this->getAttribute($context["layer"], "layer_video_width", array());
                        echo "px;height:";
                        echo $this->getAttribute($context["layer"], "layer_video_height", array());
                        echo "px\"></iframe>
\t\t\t\t\t\t\t\t";
                    }
                    // line 76
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["layer"], "layer_caption", array());
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 79
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t
\t\t\t\t</li>\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t \t
\t\t\t</ul>

\t\t\t";
        // line 86
        if ($this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "show_time_line", array())) {
            // line 87
            echo "\t\t\t<div class=\"tp-bannertimer tp-";
            echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "time_line_position", array());
            echo "\"></div>
\t\t\t";
        }
        // line 89
        echo "\t\t</div>
\t</div>

";
        // line 92
        if (((isset($context["class"]) ? $context["class"] : null) == "boxed")) {
            // line 93
            echo "</div>
";
        }
        // line 95
        echo "
<!--
##############################
 - ACTIVATE THE BANNER HERE -
##############################
-->
<script type=\"text/javascript\">

\tvar tpj=jQuery;
\t 
\tif (tpj.fn.cssOriginal!=undefined)
\t\ttpj.fn.css = tpj.fn.cssOriginal;

\t\ttpj('#sliderlayer";
        // line 108
        echo (isset($context["randID"]) ? $context["randID"] : null);
        echo "').revolution({
\t\t\t\tdelay:";
        // line 109
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "delay", array());
        echo ",
\t\t\t\tstartheight:";
        // line 110
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "height", array());
        echo ",
\t\t\t\tstartwidth:";
        // line 111
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "width", array());
        echo ",
\t\t\t\thideThumbs:";
        // line 112
        echo (isset($context["hide_navigator_after"]) ? $context["hide_navigator_after"] : null);
        echo ",
\t\t\t\tthumbWidth:";
        // line 113
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "thumbnail_width", array());
        echo ",\t\t\t\t\t\t
\t\t\t\tthumbHeight:";
        // line 114
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "thumbnail_height", array());
        echo ",
\t\t\t\tthumbAmount:";
        // line 115
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "thumbnail_amount", array());
        echo ",
\t\t\t\tnavigationType:\"";
        // line 116
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "navigator_type", array());
        echo "\",\t\t\t\t
\t\t\t\tnavigationArrows:\"";
        // line 117
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "navigator_arrows", array());
        echo "\",\t\t\t\t
\t\t\t\t";
        // line 118
        if (($this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "navigation_style", array()) != "none")) {
            // line 119
            echo "\t\t\t\tnavigationStyle:\"";
            echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "navigation_style", array());
            echo "\",\t\t\t 
\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\tnavOffsetHorizontal:";
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "offset_horizontal", array());
        echo ",
\t\t\t\tnavOffsetVertical:";
        // line 122
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "offset_vertical", array());
        echo ", 

\t\t\t\t";
        // line 124
        if ($this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "touch_mobile", array())) {
            echo "\t\t\t
\t\t\t\ttouchenabled:\"on\",
\t\t\t\t";
        } else {
            // line 126
            echo "\t
\t\t\t\ttouchenabled:\"off\", 
\t\t\t\t";
        }
        // line 129
        echo "
\t\t\t\t";
        // line 130
        if ($this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "stop_on_hover", array())) {
            echo "\t\t\t
\t\t\t\tonHoverStop:\"on\",
\t\t\t\t";
        } else {
            // line 132
            echo "\t
\t\t\t\tonHoverStop:\"off\", 
\t\t\t\t";
        }
        // line 135
        echo "
\t\t\t\t";
        // line 136
        if ($this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "shuffle_mode", array())) {
            echo "\t\t\t
\t\t\t\tshuffle:\"on\",
\t\t\t\t";
        } else {
            // line 138
            echo "\t
\t\t\t\tshuffle:\"off\", 
\t\t\t\t";
        }
        // line 141
        echo "
\t\t\t\tstopAtSlide:-1,\t\t\t\t\t\t
\t\t\t\tstopAfterLoops:-1,\t\t\t\t\t\t
\t\t\t\thideCaptionAtLimit:0,\t\t\t\t
\t\t\t\thideAllCaptionAtLilmit:0,\t\t\t\t
\t\t\t\thideSliderAtLimit:0,\t\t\t
\t\t\t\tfullWidth:\"";
        // line 147
        echo (isset($context["fullwidth"]) ? $context["fullwidth"] : null);
        echo "\",
\t\t\t\tshadow:";
        // line 148
        echo $this->getAttribute((isset($context["sliderParams"]) ? $context["sliderParams"] : null), "shadow_type", array());
        echo "\t 
\t\t\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "pav_xstore/template/extension/module/pavsliderlayer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 148,  458 => 147,  450 => 141,  445 => 138,  439 => 136,  436 => 135,  431 => 132,  425 => 130,  422 => 129,  417 => 126,  411 => 124,  406 => 122,  401 => 121,  395 => 119,  393 => 118,  389 => 117,  385 => 116,  381 => 115,  377 => 114,  373 => 113,  369 => 112,  365 => 111,  361 => 110,  357 => 109,  353 => 108,  338 => 95,  334 => 93,  332 => 92,  327 => 89,  321 => 87,  319 => 86,  314 => 83,  306 => 81,  298 => 79,  292 => 77,  289 => 76,  275 => 74,  261 => 72,  258 => 71,  256 => 70,  249 => 69,  247 => 68,  229 => 67,  226 => 66,  223 => 65,  220 => 64,  217 => 63,  214 => 62,  211 => 61,  208 => 60,  205 => 59,  203 => 58,  198 => 57,  192 => 56,  189 => 55,  186 => 54,  183 => 53,  179 => 52,  176 => 51,  168 => 49,  166 => 48,  161 => 46,  158 => 45,  155 => 44,  152 => 43,  149 => 42,  146 => 41,  144 => 40,  130 => 39,  127 => 38,  124 => 37,  121 => 36,  118 => 35,  115 => 34,  112 => 33,  110 => 32,  107 => 31,  104 => 30,  101 => 29,  98 => 28,  95 => 27,  92 => 26,  89 => 25,  85 => 24,  76 => 22,  67 => 21,  61 => 19,  59 => 18,  56 => 17,  50 => 16,  47 => 15,  41 => 14,  38 => 13,  34 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!-- <?php */
/* */
/* 	$sliderParams['hide_navigator_after'] = $sliderParams['show_navigator']?0:$sliderParams['hide_navigator_after'];*/
/* 	$class 	   = isset( $sliderParams['fullwidth'] ) && !empty($sliderParams['fullwidth']) ? $sliderParams['fullwidth']: 'boxed';*/
/* 	$fullwidth = $class =="boxed"?"off":"on";*/
/* */
/* ?> -->*/
/* {% if sliderParams.show_navigator == 1 %}*/
/* 	{% set hide_navigator_after = 0 %}*/
/* {% else %}*/
/* 	{% set hide_navigator_after = sliderParams.hide_navigator_after %}*/
/* {% endif %}*/
/* */
/* {% if sliderParams.fullwidth is defined %}{% set class = sliderParams.fullwidth %}{% else %}{% set class = 'boxed' %}{% endif %}*/
/* */
/* {% if class == 'boxed' %}{% set fullwidth = 'off' %}{% else %}{% set fullwidth = 'on' %}{% endif %}*/
/* */
/* {% if class == 'boxed' %}*/
/* <div class="layerslider-wrapper" style="max-width:{{ sliderParams.width }}px;">*/
/* {% endif %}*/
/* 	<div class="bannercontainer banner-{{ class }}" style="padding: {{ sliderParams.padding }};margin: {{ sliderParams.margin }};">*/
/* 		<div id="sliderlayer{{ randID }}" class="layerslider rev_slider {{ class|trim }}banner" style="width:100%;height:{{ sliderParams.height }}px; " >	*/
/* 			<ul>*/
/* 			{% for _key,slider in sliders %}*/
/* 				{% if slider['params'].slider_link %}*/
/* 					{% set slider_link = slider['params'].slider_link %}*/
/* 					{% set link = 'data-link="{{ slider_link }}"' %}*/
/* 				{% else %}*/
/* 					{% set link = '' %}*/
/* 				{% endif %}*/
/* */
/* 				{% if slider['params'].slider_delay %}*/
/* 					{% set slider_delay = slider['params'].slider_delay %}*/
/* 					{% set sliderDelay = 'data-delay="{{ slider_delay }}"' %}*/
/* 				{% else %}*/
/* 					{% set sliderDelay = '' %}*/
/* 				{% endif %}*/
/* 			*/
/* 				<li {{ link }} {{ sliderDelay }} data-masterspeed="{{ slider['params'].slider_duration }}"  data-transition="{{ slider['params'].slider_transition }}" data-slotamount="{{ slider['params'].slider_slot }}" data-thumb="{{ slider.thumbnail }}">*/
/* 					{% if slider['params'].slider_usevideo == 'youtube' or slider['params'].slider_usevideo == 'vimeo' %}*/
/* 						{% set vurl = "http://player.vimeo.com/video/{{ slider['params'].slider_videoid }}" %}*/
/* 						{% if slider['params'].slider_usevideo == 'youtube' %}*/
/* 							{% set vurl = "http://www.youtube.com/embed/{{ slider['params'].slider_videoid }}" %}*/
/* 						{% endif %}*/
/* 					*/
/* 						<div class="caption fade fullscreenvideo" data-autoplay="true" data-x="0" data-y="0" data-speed="500" data-start="10" data-easing="easeOutBack"><iframe src="{{ vurl }}?title=0&amp;byline=0&amp;portrait=0;api=1" width="100%" height="100%"></iframe></div>*/
/* */
/* 					{% elseif slider.main_image %}*/
/* 						<img src="{{ slider.main_image }}"  alt="Image {{ _key }}"/>*/
/* 					{% endif %}*/
/* */
/* 					{% for layer in slider['layers_params'] %}*/
/* 						{% set type = layer.layer_type %}*/
/* 						{% set endeffect = '' %}*/
/* */
/* 						{% if layer.layer_endanimation == 'auto' %} {% set layer_layer_endanimation = '' %} {% endif %}*/
/* 						{% if layer.layer_endtime %} */
/* 							{% set endeffect = ' data-end="{{ layer.layer_endtime }}"' %}*/
/* 							{% set endeffect = ' data-endspeed="{{ layer.layer_endspeed }}"' %}*/
/* 							{% if layer.layer_endeasing != 'nothing' %}*/
/* 								{% set endeffect = ' data-endeasing="{{ layer.layer_endeasing }}"' %}*/
/* 							{% endif %}*/
/* 						{% else %}*/
/* 							{% set layer_layer_endanimation = ''  %}*/
/* 						{% endif %}*/
/* */
/* 						<div class="caption {{ layer.layer_class }} {{ layer.layer_animation }} {{ layer.layer_easing }} {{ layer_layer_endanimation }}" data-x="{{ layer.layer_left }}" data-y="{{ layer.layer_top }}" data-speed="300" data-start="{{ layer.time_start }}" data-easing="easeOutExpo" {{ endeffect }}>*/
/* 							{% if type == 'image' %}*/
/* 								<img src="{{ http_catalog }}image/{{ layer.layer_content }}">*/
/* 							{% elseif type == 'video' %}*/
/* 								{% if layer.layer_video_type == 'vimeo' %}*/
/* 									<iframe src="http://player.vimeo.com/video/{{ layer.layer_video_id }}?title=0&amp;byline=0&amp;portrait=0;api=1" width="{{ layer.layer_video_width }}" height="{{ layer.layer_video_height }}"  style="width:{{ layer.layer_video_width }}px;height:{{ layer.layer_video_height }}px"></iframe>*/
/* 								{% else %}*/
/* 									<iframe src="http://www.youtube.com/embed/{{ layer.layer_video_id }}?title=0&amp;byline=0&amp;portrait=0;api=1" width="{{ layer.layer_video_width }}" height="{{ layer.layer_video_height }}"  style="width:{{ layer.layer_video_width }}px;height:{{ layer.layer_video_height }}px"></iframe>*/
/* 								{% endif %}*/
/* 							{% else %}*/
/* 								{{ layer.layer_caption }}*/
/* 							{% endif %}*/
/* 						</div>*/
/* */
/* 					{% endfor %}		*/
/* 				</li>			*/
/* 			{% endfor %}			 	*/
/* 			</ul>*/
/* */
/* 			{% if sliderParams.show_time_line %}*/
/* 			<div class="tp-bannertimer tp-{{ sliderParams.time_line_position }}"></div>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% if class == 'boxed' %}*/
/* </div>*/
/* {% endif %}*/
/* */
/* <!--*/
/* ##############################*/
/*  - ACTIVATE THE BANNER HERE -*/
/* ##############################*/
/* -->*/
/* <script type="text/javascript">*/
/* */
/* 	var tpj=jQuery;*/
/* 	 */
/* 	if (tpj.fn.cssOriginal!=undefined)*/
/* 		tpj.fn.css = tpj.fn.cssOriginal;*/
/* */
/* 		tpj('#sliderlayer{{ randID }}').revolution({*/
/* 				delay:{{ sliderParams.delay }},*/
/* 				startheight:{{ sliderParams.height }},*/
/* 				startwidth:{{ sliderParams.width }},*/
/* 				hideThumbs:{{ hide_navigator_after }},*/
/* 				thumbWidth:{{ sliderParams.thumbnail_width }},						*/
/* 				thumbHeight:{{ sliderParams.thumbnail_height }},*/
/* 				thumbAmount:{{ sliderParams.thumbnail_amount }},*/
/* 				navigationType:"{{ sliderParams.navigator_type }}",				*/
/* 				navigationArrows:"{{ sliderParams.navigator_arrows }}",				*/
/* 				{% if sliderParams.navigation_style != 'none' %}*/
/* 				navigationStyle:"{{ sliderParams.navigation_style }}",			 */
/* 				{% endif %}*/
/* 				navOffsetHorizontal:{{ sliderParams.offset_horizontal }},*/
/* 				navOffsetVertical:{{ sliderParams.offset_vertical }}, */
/* */
/* 				{% if sliderParams.touch_mobile %}			*/
/* 				touchenabled:"on",*/
/* 				{% else %}	*/
/* 				touchenabled:"off", */
/* 				{% endif %}*/
/* */
/* 				{% if sliderParams.stop_on_hover %}			*/
/* 				onHoverStop:"on",*/
/* 				{% else %}	*/
/* 				onHoverStop:"off", */
/* 				{% endif %}*/
/* */
/* 				{% if sliderParams.shuffle_mode %}			*/
/* 				shuffle:"on",*/
/* 				{% else %}	*/
/* 				shuffle:"off", */
/* 				{% endif %}*/
/* */
/* 				stopAtSlide:-1,						*/
/* 				stopAfterLoops:-1,						*/
/* 				hideCaptionAtLimit:0,				*/
/* 				hideAllCaptionAtLilmit:0,				*/
/* 				hideSliderAtLimit:0,			*/
/* 				fullWidth:"{{ fullwidth }}",*/
/* 				shadow:{{ sliderParams.shadow_type }}	 */
/* 			});*/
/* </script>*/
/* */

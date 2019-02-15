<?php

/* pav_xstore/template/extension/module/pavcatfeatured.twig */
class __TwigTemplate_38ddcce1da3cf7d6c5784be6d73064a83f2ac10b78a6cc8e4d2fca612ff76b63 extends Twig_Template
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
        $context["id"] = (twig_random($this->env, range(1, 9)) + twig_random($this->env));
        // line 2
        if (array_key_exists("categories", $context)) {
            // line 3
            echo "<div class=\"box box-normal categoryfeature ";
            echo (isset($context["prefix"]) ? $context["prefix"] : null);
            echo "\">
\t";
            // line 4
            if (((isset($context["titles"]) ? $context["titles"] : null) == 1)) {
                // line 5
                echo "\t<h4 class=\"panel-title\">";
                echo (isset($context["box_heading"]) ? $context["box_heading"] : null);
                echo "</h4>
\t";
            }
            // line 7
            echo " \t<span class=\"desciption-title\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</span>
\t<div class=\"";
            // line 8
            if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) <= ((isset($context["perview"]) ? $context["perview"] : null) * (isset($context["rows"]) ? $context["rows"] : null)))) {
                echo "swiper-no-swiping";
            }
            echo "\">
\t<div class=\"swiper-container swiper-containers\" id=\"catfeatured";
            // line 9
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "\t\t\t<div class=\"swiper-slide\">\t
\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t<div class=\"effect-v6\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t";
                // line 16
                if ((isset($context["showimg"]) ? $context["showimg"] : null)) {
                    // line 17
                    echo "\t\t\t\t\t\t\t<i class=\"";
                    echo $this->getAttribute($context["category"], "icon", array());
                    echo "\"></i>
\t\t\t\t\t\t\t";
                } else {
                    // line 19
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                    // line 20
                    echo $this->getAttribute($context["category"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t\t<div class=\"caption text-align\">
\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 24
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></h4>
\t\t\t\t\t\t\t\t<div class=\"category-items\"><a class=\"text-lighten\" href=\"";
                // line 25
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "items", array());
                echo "</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t</div>
\t\t<div class=\"swiper-pager\">
\t\t\t<div class=\"swiper-button-prev\"></div>
\t\t\t<div class=\"swiper-button-next\"></div>
\t\t</div>
\t</div>
</div>
</div>
";
        }
        // line 42
        echo "<script type=\"text/javascript\"><!--
\$('.swiper-containers').swiper({
    pause: 'hover',
\tnextButton: '.swiper-button-next',
\tprevButton: '.swiper-button-prev',
\tslidesPerView: ";
        // line 47
        echo (((isset($context["perview"]) ? $context["perview"] : null)) ? ((isset($context["perview"]) ? $context["perview"] : null)) : (2));
        echo ",
\tloop:";
        // line 48
        echo (((isset($context["loop"]) ? $context["loop"] : null)) ? ((isset($context["loop"]) ? $context["loop"] : null)) : ("false"));
        echo ",
    autoplay:";
        // line 49
        echo (((isset($context["auto_play_mode"]) ? $context["auto_play_mode"] : null)) ? ((isset($context["interval"]) ? $context["interval"] : null)) : ("false"));
        echo ",
    noSwipingClass: 'swiper-no-swiping',
\tslidesPerColumn:";
        // line 51
        echo (((isset($context["rows"]) ? $context["rows"] : null)) ? ((isset($context["rows"]) ? $context["rows"] : null)) : (1));
        echo ",


\tbreakpoints: {
    767: {
      slidesPerView: 1,
      ";
        // line 57
        if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) > (1 * (isset($context["rows"]) ? $context["rows"] : null)))) {
            // line 58
            echo "      noSwiping: false
      ";
        }
        // line 60
        echo "    },
    991: {
      slidesPerView: 2,
      ";
        // line 63
        if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) > (2 * (isset($context["rows"]) ? $context["rows"] : null)))) {
            // line 64
            echo "      noSwiping: false
      ";
        }
        // line 66
        echo "    }, 
  }
});
--></script> ";
    }

    public function getTemplateName()
    {
        return "pav_xstore/template/extension/module/pavcatfeatured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 66,  163 => 64,  161 => 63,  156 => 60,  152 => 58,  150 => 57,  141 => 51,  136 => 49,  132 => 48,  128 => 47,  121 => 42,  110 => 33,  94 => 25,  88 => 24,  85 => 23,  75 => 20,  70 => 19,  64 => 17,  62 => 16,  56 => 12,  52 => 11,  47 => 9,  41 => 8,  36 => 7,  30 => 5,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set id = random(1..9) + random() %}*/
/* {% if categories is defined %}*/
/* <div class="box box-normal categoryfeature {{ prefix }}">*/
/* 	{% if titles == 1 %}*/
/* 	<h4 class="panel-title">{{ box_heading }}</h4>*/
/* 	{% endif %}*/
/*  	<span class="desciption-title">{{ description }}</span>*/
/* 	<div class="{% if categories|length <= perview*rows %}swiper-no-swiping{% endif %}">*/
/* 	<div class="swiper-container swiper-containers" id="catfeatured{{id}}">*/
/* 		<div class="swiper-wrapper">*/
/* 			{% for category in categories %}*/
/* 			<div class="swiper-slide">	*/
/* 				<div class="product-thumb transition">*/
/* 					<div class="effect-v6">*/
/* 						<div class="image">*/
/* 							{% if showimg %}*/
/* 							<i class="{{ category.icon }}"></i>*/
/* 							{% else %}*/
/* 							<a href="{{ category.href }}">*/
/* 								<img class="img-responsive" src="{{ category.thumb }}" alt="{{ category.name }}" title="{{ category.name }}"/>*/
/* 							</a>*/
/* 							{% endif %}*/
/* 							<div class="caption text-align">*/
/* 								<h4><a href="{{ category.href }}">{{ category.name }}</a></h4>*/
/* 								<div class="category-items"><a class="text-lighten" href="{{ category.href }}">{{ category.items }}</a></div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			{% endfor %}*/
/* 		</div>*/
/* 		<div class="swiper-pager">*/
/* 			<div class="swiper-button-prev"></div>*/
/* 			<div class="swiper-button-next"></div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* </div>*/
/* {% endif %}*/
/* <script type="text/javascript"><!--*/
/* $('.swiper-containers').swiper({*/
/*     pause: 'hover',*/
/* 	nextButton: '.swiper-button-next',*/
/* 	prevButton: '.swiper-button-prev',*/
/* 	slidesPerView: {{ perview ? perview : 2}},*/
/* 	loop:{{ loop ? loop : 'false' }},*/
/*     autoplay:{{ auto_play_mode ? interval:'false' }},*/
/*     noSwipingClass: 'swiper-no-swiping',*/
/* 	slidesPerColumn:{{ rows ? rows : 1}},*/
/* */
/* */
/* 	breakpoints: {*/
/*     767: {*/
/*       slidesPerView: 1,*/
/*       {% if categories|length > 1*rows %}*/
/*       noSwiping: false*/
/*       {% endif %}*/
/*     },*/
/*     991: {*/
/*       slidesPerView: 2,*/
/*       {% if categories|length > 2*rows %}*/
/*       noSwiping: false*/
/*       {% endif %}*/
/*     }, */
/*   }*/
/* });*/
/* --></script> */

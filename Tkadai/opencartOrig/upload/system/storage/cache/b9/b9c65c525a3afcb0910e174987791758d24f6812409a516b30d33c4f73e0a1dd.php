<?php

/* pav_xstore/template/extension/module/carousel.twig */
class __TwigTemplate_9799d876e61676c8dce78bc35e859933a1955e3502f2bc7fbddaa67c855791e1 extends Twig_Template
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
        echo "<div class=\"carousel-tabs\">
  <div class=\"swiper-viewport\">
    <div id=\"carousel";
        // line 3
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"swiper-container\">
      <div class=\"swiper-wrapper\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"swiper-slide text-center\">";
            if ($this->getAttribute($context["banner"], "link", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" /></a>";
            } else {
                echo "<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>
    </div>
    <div class=\"swiper-pagination carousel";
        // line 8
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\"></div>
    <div class=\"swiper-pager\">
      <div class=\"swiper-button-next\" id=\"carousel-next\"></div>
      <div class=\"swiper-button-prev\" id=\"carousel-prev\"></div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#carousel";
        // line 16
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 6,
\tpagination: '.carousel";
        // line 19
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '#carousel-next',
   prevButton: '#carousel-prev',
\tautoplay: 2500,
\tloop: true,
   breakpoints:{
      325: {
          slidesPerView: 1,
      },
      500: {
          slidesPerView: 2,
      },
      768: {
          slidesPerView: 4,
      },
      1200: {
          slidesPerView: 6,
      },
   }
});
--></script>";
    }

    public function getTemplateName()
    {
        return "pav_xstore/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  69 => 16,  58 => 8,  54 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="carousel-tabs">*/
/*   <div class="swiper-viewport">*/
/*     <div id="carousel{{ module }}" class="swiper-container">*/
/*       <div class="swiper-wrapper">{% for banner in banners %}*/
/*       <div class="swiper-slide text-center">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*         {% endfor %}</div>*/
/*     </div>*/
/*     <div class="swiper-pagination carousel{{ module }}"></div>*/
/*     <div class="swiper-pager">*/
/*       <div class="swiper-button-next" id="carousel-next"></div>*/
/*       <div class="swiper-button-prev" id="carousel-prev"></div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#carousel{{ module }}').swiper({*/
/* 	mode: 'horizontal',*/
/* 	slidesPerView: 6,*/
/* 	pagination: '.carousel{{ module }}',*/
/* 	paginationClickable: true,*/
/* 	nextButton: '#carousel-next',*/
/*    prevButton: '#carousel-prev',*/
/* 	autoplay: 2500,*/
/* 	loop: true,*/
/*    breakpoints:{*/
/*       325: {*/
/*           slidesPerView: 1,*/
/*       },*/
/*       500: {*/
/*           slidesPerView: 2,*/
/*       },*/
/*       768: {*/
/*           slidesPerView: 4,*/
/*       },*/
/*       1200: {*/
/*           slidesPerView: 6,*/
/*       },*/
/*    }*/
/* });*/
/* --></script>*/

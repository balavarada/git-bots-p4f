<?php

/* pav_xstore/template/extension/module/pavobuilder/pa_latest_blogs/pa_latest_blogs.twig */
class __TwigTemplate_d19de651313a98f134b63a4f5656a3ffb2acd2273070a5dab18cc5b03928c7b5 extends Twig_Template
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
        echo "<div class=\"box panel panel-widget \">
    <div class=\"panel-heading text-center\">
    ";
        // line 4
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array()) == "enabled")) {
            // line 5
            echo "      <h3 class=\"panel-title\">";
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title_blogs", array());
            echo "</h3>
    ";
        }
        // line 7
        echo "    </div>
   <div class=\"margin-bottom-30 text-center\">   
      <p class=\"description-element\">";
        // line 9
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "description", array());
        echo "</p>
   </div>
   <div class=\"swiper-viewport ";
        // line 11
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "posts", array())) <= ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "view", array()) * $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "rows", array())))) {
            echo "swiper-no-swiping";
        }
        echo "\">
      <div class=\"swiper-container swiper-containerss\" id=\"latestblogs";
        // line 12
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\">
         <div class=\"swiper-wrapper\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "posts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 15
            echo "               <div class=\"swiper-slide\">
                  <div class=\"blogs-thumb transition\">
                     <div class=\"image text-center\">
                        <a href=\"";
            // line 18
            echo $this->getAttribute($context["post"], "link", array());
            echo "\" class=\"pa-element blog-image\">
                           <img class=\"img-responsive\" src=\"";
            // line 19
            echo $this->getAttribute($context["post"], "thumb", array());
            echo "\" alt=\"\" width=\"";
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "width", array());
            echo "\" height=\"";
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "height", array());
            echo "\" />
                        </a>
                     </div>
                     <div class=\"blog-body\">
                        <div class=\"blog-title\">
                           <a class=\"latest-posts-title\" href=\"";
            // line 24
            echo $this->getAttribute($context["post"], "link", array());
            echo "\" class=\"pa-element title\">
                           ";
            // line 25
            echo twig_slice($this->env, strip_tags($this->getAttribute($context["post"], "name", array())), 0, 50);
            echo "
                           </a>
                        </div>
                        <div class=\"blog-username \">
                           <span class=\"user\">  
                              <i class=\"fa fa-user-o\" aria-hidden=\"true\"></i>
                              <span>";
            // line 31
            echo $this->getAttribute($context["post"], "username", array());
            echo "</span>
                           </span>
                           <span class=\"date\">
                              <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
                              <span>";
            // line 35
            echo $this->getAttribute($context["post"], "date_added", array());
            echo "</span>
                           </span> 
                        </div>
                        <div class=\"blog-content\">
                           ";
            // line 39
            echo twig_slice($this->env, strip_tags($this->getAttribute($context["post"], "content", array())), 0, 80);
            echo "...
                        </div>
                        <a href=\"";
            // line 41
            echo $this->getAttribute($context["post"], "link", array());
            echo "\" class=\"readmore pa-element blog-image\">";
            echo (isset($context["entry_read_more_text"]) ? $context["entry_read_more_text"] : null);
            echo "</a>
                     </div>
                  </div>
               </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "         </div>
         <div class=\"swiper-pager\">
             <div class=\"swiper-button-prev\"></div>
             <div class=\"swiper-button-next\"></div>
         </div>
      </div>
   </div>
</div>
<script type=\"text/javascript\"><!--
    \$('#latestblogs";
        // line 55
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').swiper({
        pause: 'hover',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: ";
        // line 59
        echo (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "view", array())) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "view", array())) : (2));
        echo ",
        loop:";
        // line 60
        echo ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "loop", array()) == "true")) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "loop", array())) : ("false"));
        echo ",
        autoplay: ";
        // line 61
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "auto_play", array()) == "enabled")) {
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "interval", array());
        } else {
            echo "0";
        }
        echo ",
        noSwipingClass: 'swiper-no-swiping',
        slidesPerColumn:";
        // line 63
        echo (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "rows", array())) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "rows", array())) : (1));
        echo ",
        spaceBetween: 30,
        speed: 500,
        breakpoints: {
          767: {
            slidesPerView: 1,
            ";
        // line 69
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "posts", array())) > (1 * $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "rows", array())))) {
            // line 70
            echo "            noSwiping: false
            ";
        }
        // line 72
        echo "          },
          991: {
            slidesPerView: 2,
            ";
        // line 75
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "posts", array())) > (2 * $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "rows", array())))) {
            // line 76
            echo "            noSwiping: false
            ";
        }
        // line 78
        echo "          }, 
        }
    });
--></script>
";
    }

    public function getTemplateName()
    {
        return "pav_xstore/template/extension/module/pavobuilder/pa_latest_blogs/pa_latest_blogs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 78,  180 => 76,  178 => 75,  173 => 72,  169 => 70,  167 => 69,  158 => 63,  149 => 61,  145 => 60,  141 => 59,  134 => 55,  123 => 46,  110 => 41,  105 => 39,  98 => 35,  91 => 31,  82 => 25,  78 => 24,  66 => 19,  62 => 18,  57 => 15,  53 => 14,  48 => 12,  42 => 11,  37 => 9,  33 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set id = random(1..9) + random() %}*/
/* <div class="box panel panel-widget ">*/
/*     <div class="panel-heading text-center">*/
/*     {% if settings.title == 'enabled' %}*/
/*       <h3 class="panel-title">{{ settings.title_blogs }}</h3>*/
/*     {% endif %}*/
/*     </div>*/
/*    <div class="margin-bottom-30 text-center">   */
/*       <p class="description-element">{{ settings.description }}</p>*/
/*    </div>*/
/*    <div class="swiper-viewport {% if settings.posts|length <= settings.view*settings.rows %}swiper-no-swiping{% endif %}">*/
/*       <div class="swiper-container swiper-containerss" id="latestblogs{{id}}">*/
/*          <div class="swiper-wrapper">*/
/*             {% for post in settings.posts %}*/
/*                <div class="swiper-slide">*/
/*                   <div class="blogs-thumb transition">*/
/*                      <div class="image text-center">*/
/*                         <a href="{{ post.link }}" class="pa-element blog-image">*/
/*                            <img class="img-responsive" src="{{ post.thumb }}" alt="" width="{{ settings.width }}" height="{{ settings.height }}" />*/
/*                         </a>*/
/*                      </div>*/
/*                      <div class="blog-body">*/
/*                         <div class="blog-title">*/
/*                            <a class="latest-posts-title" href="{{ post.link }}" class="pa-element title">*/
/*                            {{ (post.name|striptags)|slice(0,50) }}*/
/*                            </a>*/
/*                         </div>*/
/*                         <div class="blog-username ">*/
/*                            <span class="user">  */
/*                               <i class="fa fa-user-o" aria-hidden="true"></i>*/
/*                               <span>{{ post.username }}</span>*/
/*                            </span>*/
/*                            <span class="date">*/
/*                               <i class="fa fa-clock-o" aria-hidden="true"></i>*/
/*                               <span>{{ post.date_added }}</span>*/
/*                            </span> */
/*                         </div>*/
/*                         <div class="blog-content">*/
/*                            {{ (post.content|striptags)|slice(0,80) }}...*/
/*                         </div>*/
/*                         <a href="{{ post.link }}" class="readmore pa-element blog-image">{{ entry_read_more_text }}</a>*/
/*                      </div>*/
/*                   </div>*/
/*                </div>*/
/*             {% endfor %}*/
/*          </div>*/
/*          <div class="swiper-pager">*/
/*              <div class="swiper-button-prev"></div>*/
/*              <div class="swiper-button-next"></div>*/
/*          </div>*/
/*       </div>*/
/*    </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*     $('#latestblogs{{id}}').swiper({*/
/*         pause: 'hover',*/
/*         nextButton: '.swiper-button-next',*/
/*         prevButton: '.swiper-button-prev',*/
/*         slidesPerView: {{ settings.view ? settings.view : 2 }},*/
/*         loop:{{ settings.loop == 'true' ? settings.loop : 'false'}},*/
/*         autoplay: {% if settings.auto_play == 'enabled' %}{{ settings.interval }}{% else %}0{% endif %},*/
/*         noSwipingClass: 'swiper-no-swiping',*/
/*         slidesPerColumn:{{ settings.rows ? settings.rows : 1 }},*/
/*         spaceBetween: 30,*/
/*         speed: 500,*/
/*         breakpoints: {*/
/*           767: {*/
/*             slidesPerView: 1,*/
/*             {% if (settings.posts|length) > (1*settings.rows) %}*/
/*             noSwiping: false*/
/*             {% endif %}*/
/*           },*/
/*           991: {*/
/*             slidesPerView: 2,*/
/*             {% if (settings.posts|length) > (2*settings.rows) %}*/
/*             noSwiping: false*/
/*             {% endif %}*/
/*           }, */
/*         }*/
/*     });*/
/* --></script>*/
/* */

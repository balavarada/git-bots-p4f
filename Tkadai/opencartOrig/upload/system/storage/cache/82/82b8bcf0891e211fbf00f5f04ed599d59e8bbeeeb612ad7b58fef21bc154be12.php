<?php

/* pav_xstore/template/extension/module/pavproductcarousel.twig */
class __TwigTemplate_f2ac1671b5102f2e6a8e509462c5e73fae87facdcfc87c8e7abf1508aea382c6 extends Twig_Template
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
        echo "<div class=\"";
        echo (isset($context["prefix"]) ? $context["prefix"] : null);
        echo " panel panel-module productcarousel\" id=\"module";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\">
    <div class=\"font-icon\"><i class=\"";
        // line 2
        echo (isset($context["fontawesome"]) ? $context["fontawesome"] : null);
        echo "\"></i></div>
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">";
        // line 4
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"swiper-viewport\">
\t\t<div class=\"";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) <= ((isset($context["itemsperpage"]) ? $context["itemsperpage"] : null) * (isset($context["cols"]) ? $context["cols"] : null)))) {
            echo "swiper-no-swiping";
        }
        echo "\">
            <div class=\"swiper-container\" id=\"productcarousel";
        // line 9
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\">
                ";
        // line 10
        if (trim((isset($context["message"]) ? $context["message"] : null))) {
            // line 11
            echo "                <div class=\"margin-bottom-30 text-center\">
                    <p class=\"description-element\">";
            // line 12
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "</p>
                </div>
                ";
        }
        // line 15
        echo "                <div class=\"swiper-pagination productcarousel";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\"></div>
                <div class=\"swiper-pager\">
                    <div class=\"swiper-button-next\"></div>
                    <div class=\"swiper-button-prev\"></div>
                </div>

                <div class=\"swiper-wrapper\">
                     ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["product"]) {
            // line 23
            echo "                       <div class=\"swiper-slide ";
            if (((isset($context["k"]) ? $context["k"] : null) == 0)) {
                echo "active";
            }
            echo "\">
                           <div class=\"product-layout product-inner product-thumb\">";
            // line 25
            echo "                              ";
            if ($this->getAttribute($context["product"], "thumb", array())) {
                // line 26
                echo "                              <div class=\"image\">
                                 ";
                // line 27
                if ($this->getAttribute($context["product"], "special", array())) {
                    // line 28
                    echo "                                    <div class=\"product-label-special label\">";
                    echo (isset($context["text_sale"]) ? $context["text_sale"] : null);
                    echo "</div>
                                 ";
                }
                // line 30
                echo "                                <a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
                                  <img id=\"image";
                // line 31
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "\" data=\"";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\" src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
                                </a>
                              </div>
                              ";
            }
            // line 35
            echo "                              <div class=\"product-meta clearfix\">
                                 <div class=\"caption\">
                                    <h4 class=\"name\"><a href=\"";
            // line 37
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
                                   ";
            // line 38
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 39
                echo "                                    <div class=\"rating\">
                                          ";
                // line 40
                $context["i"] = 1;
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 41
                    echo "                                             ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 42
                        echo "                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                                             ";
                    } else {
                        // line 44
                        echo "                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                                             ";
                    }
                    // line 46
                    echo "                                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                                    </div>
                                   ";
            }
            // line 49
            echo "                                   <p class=\"description\">";
            echo twig_slice($this->env, strip_tags($this->getAttribute($context["product"], "description", array())), 0, 58);
            echo "...</p>
                                   <div class=\"group-action clearfix\">
                                         ";
            // line 51
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 52
                echo "                                          <div class=\"price\">
                                             ";
                // line 53
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 54
                    echo "                                                ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
                                             ";
                } else {
                    // line 56
                    echo "                                                <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
                                             ";
                }
                // line 58
                echo "                                          </div>
                                         ";
            }
            // line 60
            echo "                                          <div class=\"button-group\">
                                             <button class=\"btn btn-cart\" type=\"button\" onclick=\"cart.add('";
            // line 61
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
                                             <button class=\"btn btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 62
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
                                             <button class=\"btn btn-compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 63
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                           </div>";
            // line 69
            echo "
                        </div>";
            // line 71
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type=\"text/javascript\"><!--
    \$('#productcarousel";
        // line 81
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').swiper({
        prevButton: '.swiper-button-prev',
        nextButton: '.swiper-button-next',
        loop:";
        // line 84
        echo (isset($context["loop"]) ? $context["loop"] : null);
        echo ",
        autoplay:";
        // line 85
        echo (((isset($context["auto_play_mode"]) ? $context["auto_play_mode"] : null)) ? ((isset($context["interval"]) ? $context["interval"] : null)) : ("false"));
        echo ",
        pause: 'hover',
        slidesPerView: ";
        // line 87
        echo (isset($context["itemsperpage"]) ? $context["itemsperpage"] : null);
        echo ",
        slidesPerColumn: ";
        // line 88
        echo (isset($context["cols"]) ? $context["cols"] : null);
        echo ",
        noSwipingClass: 'swiper-no-swiping',
        spaceBetween: 0,
        breakpoints:{
            767: {
              slidesPerView: 1,
              ";
        // line 94
        if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) > (1 * (isset($context["cols"]) ? $context["cols"] : null)))) {
            // line 95
            echo "              noSwiping: false
              ";
        }
        // line 97
        echo "              },
            991: {
              slidesPerView: 2,
              ";
        // line 100
        if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) > (2 * (isset($context["cols"]) ? $context["cols"] : null)))) {
            // line 101
            echo "              noSwiping: false
              ";
        }
        // line 103
        echo "            },
        }

    });
    --></script>
";
    }

    public function getTemplateName()
    {
        return "pav_xstore/template/extension/module/pavproductcarousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 103,  271 => 101,  269 => 100,  264 => 97,  260 => 95,  258 => 94,  249 => 88,  245 => 87,  240 => 85,  236 => 84,  230 => 81,  220 => 73,  213 => 71,  210 => 69,  200 => 63,  194 => 62,  188 => 61,  185 => 60,  181 => 58,  173 => 56,  167 => 54,  165 => 53,  162 => 52,  160 => 51,  154 => 49,  150 => 47,  144 => 46,  140 => 44,  136 => 42,  133 => 41,  128 => 40,  125 => 39,  123 => 38,  117 => 37,  113 => 35,  100 => 31,  95 => 30,  89 => 28,  87 => 27,  84 => 26,  81 => 25,  74 => 23,  70 => 22,  59 => 15,  53 => 12,  50 => 11,  48 => 10,  44 => 9,  38 => 8,  31 => 4,  26 => 2,  19 => 1,);
    }
}
/* <div class="{{ prefix }} panel panel-module productcarousel" id="module{{ id }}">*/
/*     <div class="font-icon"><i class="{{ fontawesome }}"></i></div>*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title">{{ heading_title }}</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <div class="swiper-viewport">*/
/* 		<div class="{% if products|length <= itemsperpage*cols %}swiper-no-swiping{% endif %}">*/
/*             <div class="swiper-container" id="productcarousel{{ id }}">*/
/*                 {% if message|trim %}*/
/*                 <div class="margin-bottom-30 text-center">*/
/*                     <p class="description-element">{{ message }}</p>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 <div class="swiper-pagination productcarousel{{ id }}"></div>*/
/*                 <div class="swiper-pager">*/
/*                     <div class="swiper-button-next"></div>*/
/*                     <div class="swiper-button-prev"></div>*/
/*                 </div>*/
/* */
/*                 <div class="swiper-wrapper">*/
/*                      {% for i, product in products %}*/
/*                        <div class="swiper-slide {% if k==0 %}active{% endif %}">*/
/*                            <div class="product-layout product-inner product-thumb">{# start product-inner #}*/
/*                               {% if product.thumb %}*/
/*                               <div class="image">*/
/*                                  {% if product.special %}*/
/*                                     <div class="product-label-special label">{{ text_sale }}</div>*/
/*                                  {% endif %}*/
/*                                 <a href="{{ product.href }}">*/
/*                                   <img id="image{{ id }}" data="{{ product.product_id }}" src="{{ product.thumb }}" alt="{{ product.name }}" class="img-responsive" />*/
/*                                 </a>*/
/*                               </div>*/
/*                               {% endif %}*/
/*                               <div class="product-meta clearfix">*/
/*                                  <div class="caption">*/
/*                                     <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                                    {% if product.rating %}*/
/*                                     <div class="rating">*/
/*                                           {% set i = 1 %}{% for i in i..5 %}*/
/*                                              {% if product.rating < i %}*/
/*                                                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                                              {% else %}*/
/*                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                                              {% endif %}*/
/*                                           {% endfor %}*/
/*                                     </div>*/
/*                                    {% endif %}*/
/*                                    <p class="description">{{ (product.description|striptags)|slice(0,58) }}...</p>*/
/*                                    <div class="group-action clearfix">*/
/*                                          {% if product.price %}*/
/*                                           <div class="price">*/
/*                                              {% if not product.special %}*/
/*                                                 {{ product.price }}*/
/*                                              {% else %}*/
/*                                                 <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*                                              {% endif %}*/
/*                                           </div>*/
/*                                          {% endif %}*/
/*                                           <div class="button-group">*/
/*                                              <button class="btn btn-cart" type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*                                              <button class="btn btn-wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                                              <button class="btn btn-compare" type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*                                           </div>*/
/*                                     </div>*/
/*                                  </div>*/
/*                               </div>*/
/*                            </div>{# end product-inner #}*/
/* */
/*                         </div>{# end box-product #}*/
/* */
/*                         {% endfor %}{# endforeach #}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/*     $('#productcarousel{{ id }}').swiper({*/
/*         prevButton: '.swiper-button-prev',*/
/*         nextButton: '.swiper-button-next',*/
/*         loop:{{ loop }},*/
/*         autoplay:{{ auto_play_mode ? interval:'false' }},*/
/*         pause: 'hover',*/
/*         slidesPerView: {{ itemsperpage }},*/
/*         slidesPerColumn: {{ cols }},*/
/*         noSwipingClass: 'swiper-no-swiping',*/
/*         spaceBetween: 0,*/
/*         breakpoints:{*/
/*             767: {*/
/*               slidesPerView: 1,*/
/*               {% if products|length > 1*cols %}*/
/*               noSwiping: false*/
/*               {% endif %}*/
/*               },*/
/*             991: {*/
/*               slidesPerView: 2,*/
/*               {% if products|length > 2*cols %}*/
/*               noSwiping: false*/
/*               {% endif %}*/
/*             },*/
/*         }*/
/* */
/*     });*/
/*     --></script>*/
/* */

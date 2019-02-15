<?php

/* pav_xstore/template/extension/module/pavlistingtabs.twig */
class __TwigTemplate_b1366065b0d8a24b73cbcb50df261c8859d0abbcad59c9a2f6477876b2a94138 extends Twig_Template
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
        echo "<div class=\"";
        echo (isset($context["module_class"]) ? $context["module_class"] : null);
        echo " panel panel-module product-listing-tabs\" id=\"module";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">";
        // line 4
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
    </div>
    ";
        // line 6
        if ( !twig_test_empty((isset($context["description"]) ? $context["description"] : null))) {
            // line 7
            echo "    <div class=\"margin-bottom-30 text-center\">
        <p class=\"description-element\">";
            // line 8
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "</p>
    </div>
    ";
        }
        // line 11
        echo "    <div class=\"tab-heading\">
        <ul class=\"nav nav-tabs\" id=\"listingtabs";
        // line 12
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            if (( !twig_test_empty($context["category"]) &&  !twig_test_empty($this->getAttribute($context["category"], "products", array())))) {
                // line 14
                echo "                <li ><a href=\"#tab-";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "\" data-toggle=\"tab\">";
                echo $this->getAttribute($context["category"], "category_name", array());
                echo "</a></li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </ul>
    </div>
    <div class=\"panel-body\">
        <div class=\"tab-content\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            echo "            <div class=\"swiper-container tab-pane fade ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "products", array())) <= ((isset($context["itemsperpage"]) ? $context["itemsperpage"] : null) * (isset($context["cols"]) ? $context["cols"] : null)))) {
                echo "swiper-no-swiping";
            }
            echo "\" id=\"tab-";
            echo $this->getAttribute($context["category"], "category_id", array());
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\">
            <div class=\"swiper-wrapper \">
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "products", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                if ( !twig_test_empty($context["product"])) {
                    // line 24
                    echo "                <div class=\"swiper-slide \">
                    <div class=\"product-layout product-thumb product-inner\">
                        ";
                    // line 26
                    if ($this->getAttribute($context["product"], "thumb", array())) {
                        // line 27
                        echo "                            <div class=\"image\"><a href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "\"><img src=\"";
                        echo $this->getAttribute($context["product"], "thumb", array());
                        echo "\" alt=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" title=\"";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "\" class=\"img-responsive\" /></a></div>
                        ";
                    }
                    // line 29
                    echo "                        <div class=\"product-meta clearfix\">
                            <div class=\"caption\">
                                <h4 class=\"name\"><a href=\"";
                    // line 31
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a></h4>
                                ";
                    // line 32
                    if ($this->getAttribute($context["product"], "rating", array())) {
                        // line 33
                        echo "                                    <div class=\"rating\">
                                        ";
                        // line 34
                        $context["i"] = 1;
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 35
                            echo "                                            ";
                            if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                // line 36
                                echo "                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                                            ";
                            } else {
                                // line 38
                                echo "                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                                            ";
                            }
                            // line 40
                            echo "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        echo "                                    </div>
                                ";
                    }
                    // line 43
                    echo "                                <p class=\"description\">";
                    echo twig_slice($this->env, strip_tags($this->getAttribute($context["product"], "description", array())), 0, 58);
                    echo "...</p>
                                <div class=\"group-action clearfix\">
                                    ";
                    // line 45
                    if ($this->getAttribute($context["product"], "price", array())) {
                        // line 46
                        echo "                                    <div class=\"price\">
                                        ";
                        // line 47
                        if ( !$this->getAttribute($context["product"], "special", array())) {
                            // line 48
                            echo "                                            ";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "
                                        ";
                        } else {
                            // line 50
                            echo "                                            <span class=\"price-new\">";
                            echo $this->getAttribute($context["product"], "special", array());
                            echo "</span> <span class=\"price-old\">";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span>
                                        ";
                        }
                        // line 52
                        echo "                                    </div>
                                    ";
                    }
                    // line 54
                    echo "                                    <div class=\"button-group\">
                                        <button class=\"btn btn-cart\" type=\"button\" onclick=\"cart.add('";
                    // line 55
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span></button>
                                        <button class=\"btn btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 56
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-heart\"></i></button>
                                        <button class=\"btn btn-compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 57
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-exchange\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </div>
            <div class=\"swiper-pager\">
                <div class=\"swiper-button-next\"></div>
                <div class=\"swiper-button-prev\"></div>
            </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </div>
    </div>
</div>
<script type=\"text/javascript\">
    \$(function () {
        \$('#listingtabs";
        // line 77
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " a:first').tab('show');
    });
    var tabs = {};
    \$('#listingtabs";
        // line 80
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " a').on('shown.bs.tab',function ( e ) {
        e.preventDefault();
        var id = e.currentTarget.hash.replace( '#tab-', '' );
        if ( typeof tabs[id] !== 'undefined' || tabs[id] == true )
            return;
        \$('#tab-'+id).swiper({
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            pause: 'hover',
            loop:";
        // line 89
        echo (((isset($context["loop"]) ? $context["loop"] : null)) ? ((isset($context["loop"]) ? $context["loop"] : null)) : ("false"));
        echo ",
            autoplay:";
        // line 90
        echo (((isset($context["auto_play_mode"]) ? $context["auto_play_mode"] : null)) ? ((isset($context["interval"]) ? $context["interval"] : null)) : ("false"));
        echo ",
            slidesPerView: ";
        // line 91
        echo (((isset($context["itemsperpage"]) ? $context["itemsperpage"] : null)) ? ((isset($context["itemsperpage"]) ? $context["itemsperpage"] : null)) : (2));
        echo ",
            slidesPerColumn: ";
        // line 92
        echo (((isset($context["cols"]) ? $context["cols"] : null)) ? ((isset($context["cols"]) ? $context["cols"] : null)) : (1));
        echo ",
            noSwipingClass: 'swiper-no-swiping',
            spaceBetween: 0,
            breakpoints: {
                767: {
                    slidesPerView: 1,
                    noSwiping: false
                },
                991: {
                    slidesPerView: 2,
                    noSwiping: false
                }, 
            }
        });
        tabs[id] = true;
        return false;
    });
</script>";
    }

    public function getTemplateName()
    {
        return "pav_xstore/template/extension/module/pavlistingtabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 92,  263 => 91,  259 => 90,  255 => 89,  243 => 80,  237 => 77,  230 => 72,  218 => 65,  201 => 57,  195 => 56,  189 => 55,  186 => 54,  182 => 52,  174 => 50,  168 => 48,  166 => 47,  163 => 46,  161 => 45,  155 => 43,  151 => 41,  145 => 40,  141 => 38,  137 => 36,  134 => 35,  129 => 34,  126 => 33,  124 => 32,  118 => 31,  114 => 29,  102 => 27,  100 => 26,  96 => 24,  91 => 23,  80 => 21,  76 => 20,  70 => 16,  57 => 14,  52 => 13,  48 => 12,  45 => 11,  39 => 8,  36 => 7,  34 => 6,  29 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set id = random(1..9) + random() %}*/
/* <div class="{{ module_class }} panel panel-module product-listing-tabs" id="module{{ id }}">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title">{{ heading_title }}</h3>*/
/*     </div>*/
/*     {% if description is not empty %}*/
/*     <div class="margin-bottom-30 text-center">*/
/*         <p class="description-element">{{ message }}</p>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="tab-heading">*/
/*         <ul class="nav nav-tabs" id="listingtabs{{id}}">*/
/*             {% for category in categories  if ((category is not empty) and category.products is not empty) %}*/
/*                 <li ><a href="#tab-{{ category.category_id }}{{ id }}" data-toggle="tab">{{ category.category_name}}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <div class="tab-content">*/
/*         {% for category in categories %}*/
/*             <div class="swiper-container tab-pane fade {% if category.products|length <= itemsperpage*cols %}swiper-no-swiping{% endif %}" id="tab-{{ category.category_id }}{{ id }}">*/
/*             <div class="swiper-wrapper ">*/
/*             {% for product in category.products if(product is not empty) %}*/
/*                 <div class="swiper-slide ">*/
/*                     <div class="product-layout product-thumb product-inner">*/
/*                         {% if product.thumb %}*/
/*                             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*                         {% endif %}*/
/*                         <div class="product-meta clearfix">*/
/*                             <div class="caption">*/
/*                                 <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                                 {% if product.rating %}*/
/*                                     <div class="rating">*/
/*                                         {% set i = 1 %}{% for i in i..5 %}*/
/*                                             {% if product.rating < i %}*/
/*                                                 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                                             {% else %}*/
/*                                                 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                                             {% endif %}*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 <p class="description">{{ (product.description|striptags)|slice(0,58) }}...</p>*/
/*                                 <div class="group-action clearfix">*/
/*                                     {% if product.price %}*/
/*                                     <div class="price">*/
/*                                         {% if not product.special %}*/
/*                                             {{ product.price }}*/
/*                                         {% else %}*/
/*                                             <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                     {% endif %}*/
/*                                     <div class="button-group">*/
/*                                         <button class="btn btn-cart" type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*                                         <button class="btn btn-wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                                         <button class="btn btn-compare" type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="swiper-pager">*/
/*                 <div class="swiper-button-next"></div>*/
/*                 <div class="swiper-button-prev"></div>*/
/*             </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/*     $(function () {*/
/*         $('#listingtabs{{id}} a:first').tab('show');*/
/*     });*/
/*     var tabs = {};*/
/*     $('#listingtabs{{id}} a').on('shown.bs.tab',function ( e ) {*/
/*         e.preventDefault();*/
/*         var id = e.currentTarget.hash.replace( '#tab-', '' );*/
/*         if ( typeof tabs[id] !== 'undefined' || tabs[id] == true )*/
/*             return;*/
/*         $('#tab-'+id).swiper({*/
/*             nextButton: '.swiper-button-next',*/
/*             prevButton: '.swiper-button-prev',*/
/*             pause: 'hover',*/
/*             loop:{{ loop ? loop : 'false' }},*/
/*             autoplay:{{ auto_play_mode ? interval:'false' }},*/
/*             slidesPerView: {{ itemsperpage ? itemsperpage : 2 }},*/
/*             slidesPerColumn: {{ cols ? cols : 1 }},*/
/*             noSwipingClass: 'swiper-no-swiping',*/
/*             spaceBetween: 0,*/
/*             breakpoints: {*/
/*                 767: {*/
/*                     slidesPerView: 1,*/
/*                     noSwiping: false*/
/*                 },*/
/*                 991: {*/
/*                     slidesPerView: 2,*/
/*                     noSwiping: false*/
/*                 }, */
/*             }*/
/*         });*/
/*         tabs[id] = true;*/
/*         return false;*/
/*     });*/
/* </script>*/

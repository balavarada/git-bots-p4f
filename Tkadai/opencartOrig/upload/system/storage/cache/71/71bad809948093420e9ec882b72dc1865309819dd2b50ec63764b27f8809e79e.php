<?php

/* pav_xstore/template/extension/module/featured.twig */
class __TwigTemplate_e1d1379c4980e676754a1707286cbf1f6a80093f0c460a431cedc815ad4652e0 extends Twig_Template
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
        echo "<div class=\"product-featured col-nopadding\">
  <div class=\"panel-heading\"> 
    <h3 class=\"panel-title\">";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
  </div>
  <div class=\"row\">
   ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "    <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
      <div class=\"product-thumb transition\">
        <div class=\"image\"><a href=\"";
            // line 9
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
        <div class=\"product-meta clearfix\">
          <div class=\"caption\">
            <h4 class=\"name\"><a href=\"";
            // line 12
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
            <p class=\"description\">";
            // line 13
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
            ";
            // line 14
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 15
                echo "            <div class=\"rating\">
              ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 17
                    echo "              ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 18
                        echo "              <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
              ";
                    } else {
                        // line 20
                        echo "              <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
              ";
                    }
                    // line 22
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            </div>
            ";
            }
            // line 25
            echo "            <div class=\"group-action clearfix\">
              ";
            // line 26
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 27
                echo "              <div class=\"price\">
                ";
                // line 28
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 29
                    echo "                ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
                ";
                } else {
                    // line 31
                    echo "                <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
                ";
                }
                // line 33
                echo "              </div>
              ";
            }
            // line 35
            echo "              <div class=\"button-group\">
                <button class=\"btn btn-cart\" type=\"button\" onclick=\"cart.add('";
            // line 36
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
                <button class=\"btn btn-wishlist\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 37
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button class=\"btn btn-compare\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 38
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
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pav_xstore/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 46,  132 => 38,  126 => 37,  120 => 36,  117 => 35,  113 => 33,  105 => 31,  99 => 29,  97 => 28,  94 => 27,  92 => 26,  89 => 25,  85 => 23,  79 => 22,  75 => 20,  71 => 18,  68 => 17,  64 => 16,  61 => 15,  59 => 14,  55 => 13,  49 => 12,  37 => 9,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="product-featured col-nopadding">*/
/*   <div class="panel-heading"> */
/*     <h3 class="panel-title">{{ heading_title }}</h3>*/
/*   </div>*/
/*   <div class="row">*/
/*    {% for product in products %}*/
/*     <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*       <div class="product-thumb transition">*/
/*         <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*         <div class="product-meta clearfix">*/
/*           <div class="caption">*/
/*             <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*             <p class="description">{{ product.description }}</p>*/
/*             {% if product.rating %}*/
/*             <div class="rating">*/
/*               {% for i in 5 %}*/
/*               {% if product.rating < i %}*/
/*               <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*               {% else %}*/
/*               <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="group-action clearfix">*/
/*               {% if product.price %}*/
/*               <div class="price">*/
/*                 {% if not product.special %}*/
/*                 {{ product.price }}*/
/*                 {% else %}*/
/*                 <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% endif %}*/
/*               <div class="button-group">*/
/*                 <button class="btn btn-cart" type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*                 <button class="btn btn-wishlist" type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                 <button class="btn btn-compare" type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */

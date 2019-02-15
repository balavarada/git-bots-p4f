<?php

/* default/template/extension/module/pavobuilder/pa_block_links/pa_block_links.twig */
class __TwigTemplate_12d3bf36f716e1bcea8683a17fc9886cfe9b46d4058c23bd2ca2a4c5e48c0388 extends Twig_Template
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
        echo "<div class=\"footer\">
  ";
        // line 2
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_title", array()) == "information")) {
            // line 3
            echo "    ";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array()) == "true")) {
                echo " 
    <h5>";
                // line 4
                echo (isset($context["text_information"]) ? $context["text_information"] : null);
                echo "</h5>
    ";
            }
            // line 6
            echo "    <ul class=\"list-unstyled\">
     ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "informations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 8
                echo "     <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "   </ul>
 ";
        }
        // line 12
        echo " ";
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_title", array()) == "service")) {
            // line 13
            echo "  ";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array()) == "true")) {
                echo " 
  <h5>";
                // line 14
                echo (isset($context["text_service"]) ? $context["text_service"] : null);
                echo "</h5>
  ";
            }
            // line 16
            echo "  <ul class=\"list-unstyled\">
    <li><a href=\"";
            // line 17
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "contact", array());
            echo "\">";
            echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
            echo "</a></li>
    <li><a href=\"";
            // line 18
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "return", array());
            echo "\">";
            echo (isset($context["text_return"]) ? $context["text_return"] : null);
            echo "</a></li>
    <li><a href=\"";
            // line 19
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sitemap", array());
            echo "\">";
            echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
            echo "</a></li>
  </ul>
";
        }
        // line 22
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_title", array()) == "my_account")) {
            // line 23
            echo "  ";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array()) == "true")) {
                echo " 
  <h5>";
                // line 24
                echo (isset($context["text_account"]) ? $context["text_account"] : null);
                echo "</h5>
  ";
            }
            // line 26
            echo "  <ul class=\"list-unstyled\">
    <li><a href=\"";
            // line 27
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "account", array());
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
    <li><a href=\"";
            // line 28
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "order", array());
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
    <li><a href=\"";
            // line 29
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "wishlist", array());
            echo "\">";
            echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
            echo "</a></li>
    <li><a href=\"";
            // line 30
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "newsletter", array());
            echo "\">";
            echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
            echo "</a></li>
  </ul>
";
        }
        // line 33
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_title", array()) == "extras")) {
            // line 34
            echo "  ";
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array()) == "true")) {
                echo " 
  <h5>";
                // line 35
                echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
                echo "</h5>
  ";
            }
            // line 37
            echo "  <ul class=\"list-unstyled\">
    <li><a href=\"";
            // line 38
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "manufacturer", array());
            echo "\">";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</a></li>
    <li><a href=\"";
            // line 39
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "voucher", array());
            echo "\">";
            echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
            echo "</a></li>
    <li><a href=\"";
            // line 40
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "affiliate", array());
            echo "\">";
            echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
            echo "</a></li>
    <li><a href=\"";
            // line 41
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "special", array());
            echo "\">";
            echo (isset($context["text_special"]) ? $context["text_special"] : null);
            echo "</a></li>
  </ul>
";
        }
        // line 44
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/pavobuilder/pa_block_links/pa_block_links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 44,  166 => 41,  160 => 40,  154 => 39,  148 => 38,  145 => 37,  140 => 35,  135 => 34,  133 => 33,  125 => 30,  119 => 29,  113 => 28,  107 => 27,  104 => 26,  99 => 24,  94 => 23,  92 => 22,  84 => 19,  78 => 18,  72 => 17,  69 => 16,  64 => 14,  59 => 13,  56 => 12,  52 => 10,  41 => 8,  37 => 7,  34 => 6,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="footer">*/
/*   {% if settings.footer_title == "information" %}*/
/*     {% if settings.title == "true" %} */
/*     <h5>{{ text_information }}</h5>*/
/*     {% endif %}*/
/*     <ul class="list-unstyled">*/
/*      {% for information in settings.informations %}*/
/*      <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*      {% endfor %}*/
/*    </ul>*/
/*  {% endif %}*/
/*  {% if settings.footer_title == "service" %}*/
/*   {% if settings.title == "true" %} */
/*   <h5>{{ text_service }}</h5>*/
/*   {% endif %}*/
/*   <ul class="list-unstyled">*/
/*     <li><a href="{{ settings.contact }}">{{ text_contact }}</a></li>*/
/*     <li><a href="{{ settings.return }}">{{ text_return }}</a></li>*/
/*     <li><a href="{{ settings.sitemap }}">{{ text_sitemap }}</a></li>*/
/*   </ul>*/
/* {% endif %}*/
/* {% if settings.footer_title == "my_account" %}*/
/*   {% if settings.title == "true" %} */
/*   <h5>{{ text_account }}</h5>*/
/*   {% endif %}*/
/*   <ul class="list-unstyled">*/
/*     <li><a href="{{ settings.account }}">{{ text_account }}</a></li>*/
/*     <li><a href="{{ settings.order }}">{{ text_order }}</a></li>*/
/*     <li><a href="{{ settings.wishlist }}">{{ text_wishlist }}</a></li>*/
/*     <li><a href="{{ settings.newsletter }}">{{ text_newsletter }}</a></li>*/
/*   </ul>*/
/* {% endif %}*/
/* {% if settings.footer_title == "extras" %}*/
/*   {% if settings.title == "true" %} */
/*   <h5>{{ text_extra }}</h5>*/
/*   {% endif %}*/
/*   <ul class="list-unstyled">*/
/*     <li><a href="{{ settings.manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*     <li><a href="{{ settings.voucher }}">{{ text_voucher }}</a></li>*/
/*     <li><a href="{{ settings.affiliate }}">{{ text_affiliate }}</a></li>*/
/*     <li><a href="{{ settings.special }}">{{ text_special }}</a></li>*/
/*   </ul>*/
/* {% endif %}*/
/* </div>*/
/* */

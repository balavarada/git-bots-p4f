<?php

/* pav_xstore/template/common/header.twig */
class __TwigTemplate_2d38806d7833f2831de7743a96f1e5a276bbc845806bb17deff37c3abe883663 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" class=\"";
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

                <meta property=\"fb:app_id\" content=\"";
        // line 13
        echo (isset($context["facebook_app_id"]) ? $context["facebook_app_id"] : null);
        echo "\"/>
            
<title>";
        // line 15
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 16
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 17
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 20
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 23
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Questrial\" rel=\"stylesheet\" type=\"text/css\" />

";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 30
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 33
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 36
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 39
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</head>
<body class= \"";
        // line 42
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
<header class=\"header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <div id=\"logo\">";
        // line 47
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" /></a>";
        } else {
            // line 48
            echo "          <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 49
        echo "</div>
      </div>
      <div class=\"col-sm-4\">";
        // line 51
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
      <div class=\"col-sm-4 top-setting\">
        ";
        // line 53
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
        <div id=\"top-links\" class=\"nav pull-right\">
          <ul class=\"list-inline\">
            <li class=\"dropdown\"><a href=\"";
        // line 56
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span> <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu dropdown-menu-right\">
                ";
        // line 58
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 59
            echo "                  <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
                  <li><a href=\"";
            // line 60
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\"><i class=\"fa-fw fa fa-unlock\"></i>";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
                ";
        } else {
            // line 62
            echo "                  <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\"><i class=\"fa-fw fa fa-key\"></i>";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
                  <li><a href=\"";
            // line 63
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\"><i class=\"fa-fw fa fa-unlock-alt\"></i>";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
                ";
        }
        // line 65
        echo "                <li><a href=\"";
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i class=\"fa fa-heart\"></i> <span>";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a></li>
                <li><a href=\"";
        // line 66
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span>";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</span></a></li>
                <li><a href=\"";
        // line 67
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><i class=\"fa fa-share\"></i> <span>";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a></li>
              </ul>
            </li>            
          </ul>
        </div>
        ";
        // line 72
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
      </div>
    </div>
  </div>
</header>
<div class=\"header-buttom\">
  <div class=\"container\">
    <div class=\"header-buttom-menu clearfix\">
      <div class=\"col-sm-8\">
        <div class=\"row\">
          ";
        // line 82
        echo (isset($context["pavmegamenu"]) ? $context["pavmegamenu"] : null);
        echo "
        </div>
      </div>
      <div class=\"col-sm-4\">
        <div class=\"row\">
          ";
        // line 87
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pav_xstore/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 87,  271 => 82,  258 => 72,  246 => 67,  238 => 66,  229 => 65,  222 => 63,  215 => 62,  208 => 60,  201 => 59,  199 => 58,  190 => 56,  184 => 53,  179 => 51,  175 => 49,  167 => 48,  155 => 47,  147 => 42,  144 => 41,  136 => 39,  132 => 38,  121 => 36,  117 => 35,  108 => 33,  104 => 32,  91 => 30,  87 => 29,  79 => 23,  73 => 21,  71 => 20,  65 => 18,  63 => 17,  59 => 16,  55 => 15,  50 => 13,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" class="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/*                 <meta property="fb:app_id" content="{{ facebook_app_id }}"/>*/
/*             */
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css" />*/
/* */
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* <body class= "{{ class }}">*/
/* <header class="header">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-sm-4">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" /></a>{% else %}*/
/*           <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}</div>*/
/*       </div>*/
/*       <div class="col-sm-4">{{ search }}</div>*/
/*       <div class="col-sm-4 top-setting">*/
/*         {{ currency }}*/
/*         <div id="top-links" class="nav pull-right">*/
/*           <ul class="list-inline">*/
/*             <li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span> <span class="caret"></span></a>*/
/*               <ul class="dropdown-menu dropdown-menu-right">*/
/*                 {% if logged %}*/
/*                   <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*                   <li><a href="{{ logout }}"><i class="fa-fw fa fa-unlock"></i>{{ text_logout }}</a></li>*/
/*                 {% else %}*/
/*                   <li><a href="{{ register }}"><i class="fa-fw fa fa-key"></i>{{ text_register }}</a></li>*/
/*                   <li><a href="{{ login }}"><i class="fa-fw fa fa-unlock-alt"></i>{{ text_login }}</a></li>*/
/*                 {% endif %}*/
/*                 <li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span>{{ text_wishlist }}</span></a></li>*/
/*                 <li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i class="fa fa-shopping-cart"></i> <span>{{ text_shopping_cart }}</span></a></li>*/
/*                 <li><a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> <span>{{ text_checkout }}</span></a></li>*/
/*               </ul>*/
/*             </li>            */
/*           </ul>*/
/*         </div>*/
/*         {{ language }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* <div class="header-buttom">*/
/*   <div class="container">*/
/*     <div class="header-buttom-menu clearfix">*/
/*       <div class="col-sm-8">*/
/*         <div class="row">*/
/*           {{ pavmegamenu }}*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-sm-4">*/
/*         <div class="row">*/
/*           {{ cart }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */

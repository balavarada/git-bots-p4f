<?php

/* pav_xstore/template/extension/module/pavuserpopup.twig */
class __TwigTemplate_15f84bd31cf29ec10c5517c6e4196c7d3323df3a5f6c424e78b16ee4263a007f extends Twig_Template
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
        echo "<!-- Modal -->

<div class=\"modal fade\" id=\"pav-user-login-popup\" role=\"dialog\">
  <div class=\"modal-dialog\">
  
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
             ";
        // line 14
        if (((isset($context["description"]) ? $context["description"] : null) != "")) {
            // line 15
            echo "            <div class=\"col-md-6\">
              ";
        } else {
            // line 17
            echo "                <div class=\"col-md-12\">
              ";
        }
        // line 19
        echo "              <p><strong>";
        echo (isset($context["text_i_am_returning_customer"]) ? $context["text_i_am_returning_customer"] : null);
        echo "</strong></p>
              <form action=\"";
        // line 20
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-popup-email\">";
        // line 22
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                  <input type=\"text\" name=\"email\" value=\"";
        // line 23
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-popup-email\" class=\"form-control\" />
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-popup-password\">";
        // line 26
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 27
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-popup-password\" class=\"form-control\" />
                  <a href=\"";
        // line 28
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a></div>
                <input type=\"submit\" value=\"";
        // line 29
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "\" class=\"btn btn-primary\" />
                ";
        // line 30
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 31
            echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
                ";
        }
        // line 33
        echo "              </form>
            </div>
            ";
        // line 35
        if (((isset($context["description"]) ? $context["description"] : null) != "")) {
            // line 36
            echo "            <div class=\"col-md-6\">
              ";
            // line 37
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "
            </div>    
            ";
        }
        // line 40
        echo "          </div>  
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\">
  \$(\"#top-links a[href='";
        // line 49
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "']\").click( function () {
    \$('#pav-user-login-popup').modal({
        show: 'false'
    }); 
    return false;
  } );
</script>
";
    }

    public function getTemplateName()
    {
        return "pav_xstore/template/extension/module/pavuserpopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  112 => 40,  106 => 37,  103 => 36,  101 => 35,  97 => 33,  91 => 31,  89 => 30,  85 => 29,  79 => 28,  73 => 27,  69 => 26,  61 => 23,  57 => 22,  52 => 20,  47 => 19,  43 => 17,  39 => 15,  37 => 14,  30 => 10,  19 => 1,);
    }
}
/* <!-- Modal -->*/
/* */
/* <div class="modal fade" id="pav-user-login-popup" role="dialog">*/
/*   <div class="modal-dialog">*/
/*   */
/*     <!-- Modal content-->*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ heading_title }}</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*           <div class="row">*/
/*              {% if description !="" %}*/
/*             <div class="col-md-6">*/
/*               {% else %}*/
/*                 <div class="col-md-12">*/
/*               {% endif %}*/
/*               <p><strong>{{ text_i_am_returning_customer }}</strong></p>*/
/*               <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*                 <div class="form-group">*/
/*                   <label class="control-label" for="input-popup-email">{{ entry_email }}</label>*/
/*                   <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-popup-email" class="form-control" />*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="control-label" for="input-popup-password">{{ entry_password }}</label>*/
/*                   <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-popup-password" class="form-control" />*/
/*                   <a href="{{ forgotten }}">{{ text_forgotten }}</a></div>*/
/*                 <input type="submit" value="{{ button_login }}" class="btn btn-primary" />*/
/*                 {% if redirect %}*/
/*                 <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*                 {% endif %}*/
/*               </form>*/
/*             </div>*/
/*             {% if description !="" %}*/
/*             <div class="col-md-6">*/
/*               {{ description }}*/
/*             </div>    */
/*             {% endif %}*/
/*           </div>  */
/*       </div>*/
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/*   $("#top-links a[href='{{ action }}']").click( function () {*/
/*     $('#pav-user-login-popup').modal({*/
/*         show: 'false'*/
/*     }); */
/*     return false;*/
/*   } );*/
/* </script>*/
/* */

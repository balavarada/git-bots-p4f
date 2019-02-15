<?php

/* extension/module/pavothemer/tool.twig */
class __TwigTemplate_68e0e24e93a9182704cb57c0fcb37dc5b47f49e565e62fda8d41c103209c6f3a extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "

  ";
        // line 4
        echo "  ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
  ";
        // line 6
        echo "
  ";
        // line 8
        echo "  <div id=\"content\">

    <div class=\"page-header\">
      <div class=\"container-fluid\">
        <h1><b>";
        // line 12
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</b></h1>
        <ul class=\"breadcrumb\">
          ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ul>

        <div class=\"pull-right\">
          <a href=\"#\" id=\"pavothemer-delete-all-export\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-danger\" data-original-title=\"";
        // line 20
        echo (isset($context["entry_delete_text"]) ? $context["entry_delete_text"] : null);
        echo "\"><i class=\"fa fa-trash-o\"></i></a>
        </div>
      </div>
    </div>

    <div class=\"container-fluid\">

      ";
        // line 27
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "error_warning", array())) {
            // line 28
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "error_warning", array());
            echo "
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
      ";
        }
        // line 32
        echo "      ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 33
            echo "        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
      ";
        }
        // line 37
        echo "
      ";
        // line 38
        echo (isset($context["samplesdemo"]) ? $context["samplesdemo"] : null);
        echo "

      <div class=\"panel panel-info\">
        <div class=\"panel-heading\"><h3 class=\"panel-title\"><i class=\"fa fa-exchange\"></i> ";
        // line 41
        echo (isset($context["entry_import_export_text"]) ? $context["entry_import_export_text"] : null);
        echo "</h3></div>
        <div class=\"panel-body\">
          <form class=\"form-horizontal\">
            <fieldset>

              <p class=\"text-black\"><b>";
        // line 46
        echo (isset($context["text_explain_use_tool"]) ? $context["text_explain_use_tool"] : null);
        echo "</b></p>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 48
        echo (isset($context["entry_progress_text"]) ? $context["entry_progress_text"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"progress-import\" class=\"progress progress-striped\">
                    <div id=\"progress-bar\" class=\"bar progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                  <div id=\"progress-text\"></div>
                </div>
              </div>

              <div class=\"form-group\">
                <div class=\"col-sm-10 col-sm-offset-2\">
                  <a href=\"";
        // line 59
        echo (isset($context["import_zip_ajax_url"]) ? $context["import_zip_ajax_url"] : null);
        echo "\" id=\"pavothemer-import\" class=\"btn btn-primary\" data-original-title=\"";
        echo (isset($context["entry_import_zip_file"]) ? $context["entry_import_zip_file"] : null);
        echo "\" data-toggle=\"tooltip\" data-loading-text=\"";
        echo (isset($context["entry_importing_text"]) ? $context["entry_importing_text"] : null);
        echo "\"><i class=\"fa fa-upload\"></i> ";
        echo (isset($context["entry_import_text"]) ? $context["entry_import_text"] : null);
        echo "</a>
                  <a href=\"";
        // line 60
        echo (isset($context["export_ajax_url"]) ? $context["export_ajax_url"] : null);
        echo "\" id=\"pavothemer-export\" class=\"btn btn-default\" data-start=\"";
        echo (isset($context["entry_create_export_path"]) ? $context["entry_create_export_path"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["entry_exporting_text"]) ? $context["entry_exporting_text"] : null);
        echo "\"><i class=\"fa fa-download\"></i> ";
        echo (isset($context["entry_export_text"]) ? $context["entry_export_text"] : null);
        echo "</a>
                </div>
              </div>
            </fieldset>
          </form>
          <fieldset>
            <legend>";
        // line 66
        echo (isset($context["entry_export_history_text"]) ? $context["entry_export_history_text"] : null);
        echo "</legend>
            <div class=\"table-responsive\">
              ";
        // line 68
        echo (isset($context["sample_histories_table"]) ? $context["sample_histories_table"] : null);
        echo "
            </div>
          </fieldset>
        </div>
      </div>

    </div>
  </div>
  ";
        // line 77
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/pavothemer/tool.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 77,  160 => 68,  155 => 66,  140 => 60,  130 => 59,  116 => 48,  111 => 46,  103 => 41,  97 => 38,  94 => 37,  86 => 33,  83 => 32,  75 => 28,  73 => 27,  63 => 20,  58 => 17,  47 => 15,  43 => 14,  38 => 12,  32 => 8,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* */
/*   {# start admin panel left sidebar #}*/
/*   {{ column_left }}*/
/*   {# end admin panel left sidebar #}*/
/* */
/*   {# start lexus theme control #}*/
/*   <div id="content">*/
/* */
/*     <div class="page-header">*/
/*       <div class="container-fluid">*/
/*         <h1><b>{{ heading_title }}</b></h1>*/
/*         <ul class="breadcrumb">*/
/*           {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/* */
/*         <div class="pull-right">*/
/*           <a href="#" id="pavothemer-delete-all-export" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="{{ entry_delete_text }}"><i class="fa fa-trash-o"></i></a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="container-fluid">*/
/* */
/*       {% if errors.error_warning %}*/
/*         <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ errors.error_warning }}*/
/*           <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if success %}*/
/*         <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*           <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {{ samplesdemo }}*/
/* */
/*       <div class="panel panel-info">*/
/*         <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-exchange"></i> {{ entry_import_export_text }}</h3></div>*/
/*         <div class="panel-body">*/
/*           <form class="form-horizontal">*/
/*             <fieldset>*/
/* */
/*               <p class="text-black"><b>{{ text_explain_use_tool }}</b></p>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_progress_text }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div id="progress-import" class="progress progress-striped">*/
/*                     <div id="progress-bar" class="bar progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>*/
/*                   </div>*/
/*                   <div id="progress-text"></div>*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="form-group">*/
/*                 <div class="col-sm-10 col-sm-offset-2">*/
/*                   <a href="{{ import_zip_ajax_url }}" id="pavothemer-import" class="btn btn-primary" data-original-title="{{ entry_import_zip_file }}" data-toggle="tooltip" data-loading-text="{{ entry_importing_text }}"><i class="fa fa-upload"></i> {{ entry_import_text }}</a>*/
/*                   <a href="{{ export_ajax_url }}" id="pavothemer-export" class="btn btn-default" data-start="{{ entry_create_export_path }}" data-loading-text="{{ entry_exporting_text }}"><i class="fa fa-download"></i> {{ entry_export_text }}</a>*/
/*                 </div>*/
/*               </div>*/
/*             </fieldset>*/
/*           </form>*/
/*           <fieldset>*/
/*             <legend>{{ entry_export_history_text }}</legend>*/
/*             <div class="table-responsive">*/
/*               {{ sample_histories_table }}*/
/*             </div>*/
/*           </fieldset>*/
/*         </div>*/
/*       </div>*/
/* */
/*     </div>*/
/*   </div>*/
/*   {# end lexus theme control #}*/
/* {{ footer }}*/

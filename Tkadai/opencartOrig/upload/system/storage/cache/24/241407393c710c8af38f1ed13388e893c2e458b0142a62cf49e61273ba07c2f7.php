<?php

/* extension/module/pavothemer/samplesdemo.twig */
class __TwigTemplate_e290571759c4e3689f13bbe6a33a93f05ccbeb71d466c111fe56b1516a2b6a65 extends Twig_Template
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
        echo "<div id=\"pavo-demos-list\" class=\"panel panel-primary\">
  <h4 class=\"panel-heading\">
    <i class=\"fa fa-gear\"></i> ";
        // line 3
        echo (isset($context["text_sample_demo_heading"]) ? $context["text_sample_demo_heading"] : null);
        echo "
    <a href=\"";
        // line 4
        echo (isset($context["refesh_demo"]) ? $context["refesh_demo"] : null);
        echo "\" class=\"refresh-demo\">
      <i class=\"fa fa-refresh\"></i>
    </a>
  </h4>
  <div class=\"panel-body\">
    <p class=\"text-black\"><b> ";
        // line 9
        echo (isset($context["text_explain_use_tool_sample_data"]) ? $context["text_explain_use_tool_sample_data"] : null);
        echo " </b></p>
    <div class=\"row\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["samples"]) ? $context["samples"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sample"]) {
            // line 12
            echo "      <div class=\"col-md-3 col-sm-4 col-sx-12\">
        <div class=\"pav-demo-sample\">
          <img src=\"";
            // line 14
            echo $this->getAttribute($context["sample"], "preview", array());
            echo "\">
          <p class=\"demo-name\"> ";
            // line 15
            echo $this->getAttribute($context["sample"], "name", array());
            echo " </p>
          <a href=\"";
            // line 16
            echo (isset($context["import_live_server"]) ? $context["import_live_server"] : null);
            echo "&demo=";
            echo $this->getAttribute($context["sample"], "key", array());
            echo "\" class=\"btn btn-warning btn-demo\" data-demo=\"";
            echo $this->getAttribute($context["sample"], "key", array());
            echo "\">";
            echo (isset($context["text_install"]) ? $context["text_install"] : null);
            echo "</a>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sample'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  </div>
  </div>
</div>
<div class=\"hide\">
  <div id=\"modal-install-samples\" class=\"white-popup\">
    <div class=\"inner\">
      <div class=\"row form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 27
        echo (isset($context["entry_progress_text"]) ? $context["entry_progress_text"] : null);
        echo "</label>
        <div class=\"col-sm-10\">
          <div id=\"progress-install\" class=\"progress progress-striped\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress-text\"></div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <a href=\"#\" class=\"btn btn-primary\" id=\"pav-install\">
            ";
        // line 38
        echo (isset($context["text_start_install"]) ? $context["text_start_install"] : null);
        echo "
            <br />
            <small>";
        // line 40
        echo (isset($context["text_install_info"]) ? $context["text_install_info"] : null);
        echo "</small>
          </a>
        </div>
        <div class=\"col-md-6\">
          <a href=\"#\" class=\"btn btn-danger col-md-6\" id=\"pav-mass-install\">
            ";
        // line 45
        echo (isset($context["text_mass_install"]) ? $context["text_mass_install"] : null);
        echo "
            <br />
            <small>";
        // line 47
        echo (isset($context["text_mass_install_info"]) ? $context["text_mass_install_info"] : null);
        echo "</small>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\">
  var PAV_PARAMS = window.PAV_PARAMS = {
    exporturl     : '";
        // line 56
        echo (isset($context["exporturl"]) ? $context["exporturl"] : null);
        echo "',
    liveinstall   : '";
        // line 57
        echo (isset($context["liveinstall"]) ? $context["liveinstall"] : null);
        echo "',
    massinstall   : '";
        // line 58
        echo (isset($context["massinstall"]) ? $context["massinstall"] : null);
        echo "',
    text_make_dir : '";
        // line 59
        echo (isset($context["text_create_directory"]) ? $context["text_create_directory"] : null);
        echo "',
    text_confirm  : '";
        // line 60
        echo (isset($context["text_confirm_delete"]) ? $context["text_confirm_delete"] : null);
        echo "',
    empty_select  : '";
        // line 61
        echo (isset($context["entry_empty_select"]) ? $context["entry_empty_select"] : null);
        echo "',
    confirm_import: '";
        // line 62
        echo (isset($context["text_confirm_import"]) ? $context["text_confirm_import"] : null);
        echo "',
    confirm_mass_import: '";
        // line 63
        echo (isset($context["text_confirm_mass_import"]) ? $context["text_confirm_mass_import"] : null);
        echo "',
    uploading_text: '";
        // line 64
        echo (isset($context["entry_uploading"]) ? $context["entry_uploading"] : null);
        echo "'
  }
</script>
<script type=\"text/template\" id=\"tmpl-import-manager\">
  <div id=\"modal-install-samples\" class=\"white-popup\" style=\"max-width: 800px\">
    <div class=\"inner\">
      <p class=\"text-warning\">";
        // line 70
        echo (isset($context["text_warning_using_installation"]) ? $context["text_warning_using_installation"] : null);
        echo "</p>
      <div class=\"row form-group\">
        <label class=\"col-sm-2 control-label\">";
        // line 72
        echo (isset($context["entry_progress_text"]) ? $context["entry_progress_text"] : null);
        echo "</label>
        <div class=\"col-sm-10\">
          <div id=\"progress-install\" class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress-text\"></div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"alert alert-info\">
          <div class=\"col-md-12\">
            <p>";
        // line 84
        echo (isset($context["text_install_info"]) ? $context["text_install_info"] : null);
        echo "     </p>
              <a href=\"#\" class=\"btn btn-primary\" id=\"pav-install\">
                <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> ";
        // line 86
        echo (isset($context["text_start_install"]) ? $context["text_start_install"] : null);
        echo "
              </a>
       
          </div>
        </div>
         <div class=\"alert alert-warning\">
            <div class=\"col-md-12\">
              <p>
               ";
        // line 94
        echo (isset($context["text_mass_install_info"]) ? $context["text_mass_install_info"] : null);
        echo "   </p> 
                <a href=\"#\" class=\"btn btn-danger\" id=\"pav-mass-install\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 95
        echo (isset($context["text_mass_install"]) ? $context["text_mass_install"] : null);
        echo "</a>
           
            </div>
         </div>   
      </div>
    </div>
  </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/pavothemer/samplesdemo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 95,  202 => 94,  191 => 86,  186 => 84,  171 => 72,  166 => 70,  157 => 64,  153 => 63,  149 => 62,  145 => 61,  141 => 60,  137 => 59,  133 => 58,  129 => 57,  125 => 56,  113 => 47,  108 => 45,  100 => 40,  95 => 38,  81 => 27,  72 => 20,  56 => 16,  52 => 15,  48 => 14,  44 => 12,  40 => 11,  35 => 9,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div id="pavo-demos-list" class="panel panel-primary">*/
/*   <h4 class="panel-heading">*/
/*     <i class="fa fa-gear"></i> {{ text_sample_demo_heading }}*/
/*     <a href="{{ refesh_demo }}" class="refresh-demo">*/
/*       <i class="fa fa-refresh"></i>*/
/*     </a>*/
/*   </h4>*/
/*   <div class="panel-body">*/
/*     <p class="text-black"><b> {{ text_explain_use_tool_sample_data }} </b></p>*/
/*     <div class="row">*/
/*     {% for sample in samples %}*/
/*       <div class="col-md-3 col-sm-4 col-sx-12">*/
/*         <div class="pav-demo-sample">*/
/*           <img src="{{ sample.preview }}">*/
/*           <p class="demo-name"> {{ sample.name }} </p>*/
/*           <a href="{{ import_live_server }}&demo={{sample.key}}" class="btn btn-warning btn-demo" data-demo="{{ sample.key }}">{{ text_install }}</a>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/*   </div>*/
/* </div>*/
/* <div class="hide">*/
/*   <div id="modal-install-samples" class="white-popup">*/
/*     <div class="inner">*/
/*       <div class="row form-group">*/
/*         <label class="col-sm-2 control-label">{{ entry_progress_text }}</label>*/
/*         <div class="col-sm-10">*/
/*           <div id="progress-install" class="progress progress-striped">*/
/*             <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>*/
/*           </div>*/
/*           <div class="progress-text"></div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-md-6">*/
/*           <a href="#" class="btn btn-primary" id="pav-install">*/
/*             {{ text_start_install }}*/
/*             <br />*/
/*             <small>{{ text_install_info }}</small>*/
/*           </a>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*           <a href="#" class="btn btn-danger col-md-6" id="pav-mass-install">*/
/*             {{ text_mass_install }}*/
/*             <br />*/
/*             <small>{{ text_mass_install_info }}</small>*/
/*           </a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/*   var PAV_PARAMS = window.PAV_PARAMS = {*/
/*     exporturl     : '{{ exporturl }}',*/
/*     liveinstall   : '{{ liveinstall }}',*/
/*     massinstall   : '{{ massinstall }}',*/
/*     text_make_dir : '{{ text_create_directory }}',*/
/*     text_confirm  : '{{ text_confirm_delete }}',*/
/*     empty_select  : '{{ entry_empty_select }}',*/
/*     confirm_import: '{{ text_confirm_import }}',*/
/*     confirm_mass_import: '{{ text_confirm_mass_import }}',*/
/*     uploading_text: '{{ entry_uploading }}'*/
/*   }*/
/* </script>*/
/* <script type="text/template" id="tmpl-import-manager">*/
/*   <div id="modal-install-samples" class="white-popup" style="max-width: 800px">*/
/*     <div class="inner">*/
/*       <p class="text-warning">{{ text_warning_using_installation }}</p>*/
/*       <div class="row form-group">*/
/*         <label class="col-sm-2 control-label">{{ entry_progress_text }}</label>*/
/*         <div class="col-sm-10">*/
/*           <div id="progress-install" class="progress">*/
/*             <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>*/
/*           </div>*/
/*           <div class="progress-text"></div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row">*/
/*         <div class="alert alert-info">*/
/*           <div class="col-md-12">*/
/*             <p>{{ text_install_info }}     </p>*/
/*               <a href="#" class="btn btn-primary" id="pav-install">*/
/*                 <i class="fa fa-cog" aria-hidden="true"></i> {{ text_start_install }}*/
/*               </a>*/
/*        */
/*           </div>*/
/*         </div>*/
/*          <div class="alert alert-warning">*/
/*             <div class="col-md-12">*/
/*               <p>*/
/*                {{ text_mass_install_info }}   </p> */
/*                 <a href="#" class="btn btn-danger" id="pav-mass-install"><i class="fa fa-cogs" aria-hidden="true"></i> {{ text_mass_install }}</a>*/
/*            */
/*             </div>*/
/*          </div>   */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </script>*/
/* */

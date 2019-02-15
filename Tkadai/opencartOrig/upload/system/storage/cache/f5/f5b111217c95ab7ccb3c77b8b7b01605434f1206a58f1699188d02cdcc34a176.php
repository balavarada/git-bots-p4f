<?php

/* extension/module/pavothemer/sampletable.twig */
class __TwigTemplate_4fb825d21c053827332eb3dc2c9a07370cf537b404cd6f3a3736a173d4a5a468 extends Twig_Template
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
        echo "<table id=\"sample-histories-table\" class=\"table table-bordered table-hover\">
  <thead>
    <tr>
      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
      <td class=\"text-left\">
        ";
        // line 6
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_added")) {
            // line 7
            echo "          <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["entry_created_at_text"]) ? $context["entry_created_at_text"] : null);
            echo "</a>
        ";
        } else {
            // line 9
            echo "          <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["entry_created_at_text"]) ? $context["entry_created_at_text"] : null);
            echo "</a>
        ";
        }
        // line 11
        echo "      </td>
      <td class=\"text-center\">
        ";
        // line 13
        echo (isset($context["entry_created_by_text"]) ? $context["entry_created_by_text"] : null);
        echo "
      </td>
      <td class=\"text-right\">";
        // line 15
        echo (isset($context["entry_actions_text"]) ? $context["entry_actions_text"] : null);
        echo "</td>
    </tr>
  </thead>
  <tbody>
    ";
        // line 19
        if ((isset($context["samples"]) ? $context["samples"] : null)) {
            // line 20
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["samples"]) ? $context["samples"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["sample"]) {
                // line 21
                echo "      <tr id=\"";
                echo $this->getAttribute($context["sample"], "name", array());
                echo "\">
        <td class=\"text-left\">
          ";
                // line 23
                if (twig_in_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "upload_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 24
                    echo "            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["sample"], "name", array());
                    echo "\" checked=\"checked\" />
          ";
                } else {
                    // line 26
                    echo "            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["sample"], "name", array());
                    echo "\" />
          ";
                }
                // line 28
                echo "        </td>
        <td class=\"text-left\">";
                // line 29
                echo $this->getAttribute($context["sample"], "created_at", array());
                echo "</td>
        <td class=\"text-center\">";
                // line 30
                echo $this->getAttribute($context["sample"], "created_by", array());
                echo "</td>
        <td class=\"text-right\">
          <a href=\"";
                // line 32
                echo $this->getAttribute($context["sample"], "download", array());
                echo "\" data-theme=\"";
                echo (isset($context["theme"]) ? $context["theme"] : null);
                echo "\" data-sample=\"";
                echo $this->getAttribute($context["sample"], "name", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["entry_downloading_text"]) ? $context["entry_downloading_text"] : null);
                echo "\" class=\"btn btn-default pavothemer-download\"><i class=\"fa fa-download\"></i> ";
                echo (isset($context["entry_download_text"]) ? $context["entry_download_text"] : null);
                echo "</a>
          <a href=\"";
                // line 33
                echo $this->getAttribute($context["sample"], "import", array());
                echo "\" data-theme=\"";
                echo (isset($context["theme"]) ? $context["theme"] : null);
                echo "\" data-sample=\"";
                echo $this->getAttribute($context["sample"], "name", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["entry_importing_text"]) ? $context["entry_importing_text"] : null);
                echo "\" class=\"btn btn-primary pavothemer-import\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["entry_import_text"]) ? $context["entry_import_text"] : null);
                echo "</a>
          <a href=\"";
                // line 34
                echo $this->getAttribute($context["sample"], "delete", array());
                echo "\" data-theme=\"";
                echo (isset($context["theme"]) ? $context["theme"] : null);
                echo "\" data-sample=\"";
                echo $this->getAttribute($context["sample"], "name", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["entry_deleting_text"]) ? $context["entry_deleting_text"] : null);
                echo "\" class=\"btn btn-danger pavothemer-delete-export\"><i class=\"fa fa-trash-o\"></i> ";
                echo (isset($context["entry_delete_text"]) ? $context["entry_delete_text"] : null);
                echo "</a>
        </td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sample'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "      <tr>
        <td class=\"text-center\" colspan=\"6\">";
            // line 40
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
    ";
        }
        // line 43
        echo "  </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "extension/module/pavothemer/sampletable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 43,  149 => 40,  146 => 39,  143 => 38,  125 => 34,  113 => 33,  101 => 32,  96 => 30,  92 => 29,  89 => 28,  83 => 26,  77 => 24,  75 => 23,  69 => 21,  64 => 20,  62 => 19,  55 => 15,  50 => 13,  46 => 11,  38 => 9,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* <table id="sample-histories-table" class="table table-bordered table-hover">*/
/*   <thead>*/
/*     <tr>*/
/*       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*       <td class="text-left">*/
/*         {% if sort == 'date_added' %}*/
/*           <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ entry_created_at_text }}</a>*/
/*         {% else %}*/
/*           <a href="{{ sort_date_added }}">{{ entry_created_at_text }}</a>*/
/*         {% endif %}*/
/*       </td>*/
/*       <td class="text-center">*/
/*         {{ entry_created_by_text }}*/
/*       </td>*/
/*       <td class="text-right">{{ entry_actions_text }}</td>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% if samples %}*/
/*       {% for sample in samples %}*/
/*       <tr id="{{ sample.name }}">*/
/*         <td class="text-left">*/
/*           {% if post.upload_id in selected %}*/
/*             <input type="checkbox" name="selected[]" value="{{ sample.name }}" checked="checked" />*/
/*           {% else %}*/
/*             <input type="checkbox" name="selected[]" value="{{ sample.name }}" />*/
/*           {% endif %}*/
/*         </td>*/
/*         <td class="text-left">{{ sample.created_at }}</td>*/
/*         <td class="text-center">{{ sample.created_by }}</td>*/
/*         <td class="text-right">*/
/*           <a href="{{ sample.download }}" data-theme="{{ theme }}" data-sample="{{ sample.name }}" data-loading-text="{{ entry_downloading_text }}" class="btn btn-default pavothemer-download"><i class="fa fa-download"></i> {{ entry_download_text }}</a>*/
/*           <a href="{{ sample.import }}" data-theme="{{ theme }}" data-sample="{{ sample.name }}" data-loading-text="{{ entry_importing_text }}" class="btn btn-primary pavothemer-import"><i class="fa fa-upload"></i> {{ entry_import_text }}</a>*/
/*           <a href="{{ sample.delete }}" data-theme="{{ theme }}" data-sample="{{ sample.name }}" data-loading-text="{{ entry_deleting_text }}" class="btn btn-danger pavothemer-delete-export"><i class="fa fa-trash-o"></i> {{ entry_delete_text }}</a>*/
/*         </td>*/
/*       </tr>*/
/*       {% endfor %}*/
/*     {% else %}*/
/*       <tr>*/
/*         <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*       </tr>*/
/*     {% endif %}*/
/*   </tbody>*/
/* </table>*/

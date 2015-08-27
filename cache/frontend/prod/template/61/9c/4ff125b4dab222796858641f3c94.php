<?php

/* _trip_set_time.html */
class __TwigTemplate_619c4ff125b4dab222796858641f3c94 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
\$(document).ready(function(){
    tinymce.init({selector:'#tour_description',
        mode : \"textareas\",
        plugins : \"paste\",

        theme_advanced_buttons3_add : \"pastetext,pasteword,selectall\",
        paste_auto_cleanup_on_paste : true,
        paste_preprocess : function(pl, o) {
            // Content string containing the HTML from the clipboard
            o.content = o.content;
        },
        paste_postprocess : function(pl, o) {
            // Content DOM node containing the DOM structure of the clipboard
            o.node.innerHTML = o.node.innerHTML ;
        }});
});
</script>
<div class=\"error\" id=\"popup_error_time\" style=\"display:none\"></div>
<div class=\"success\" id=\"popup_success_time\" style=\"display: none\"></div>
<div class=\"row box_1x\">
    <div class=\"col-md-12\">
        <p class=\"hightlight\">";
        // line 23
        echo twig_escape_filter($this->env, translate("Thời gian Tour"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-md-4\">
        <select class=\"form-control\" id=\"tour_time_type\" name=\"tour_time_type\">
            <option value=\"0\">";
        // line 27
        echo twig_escape_filter($this->env, translate("Chọn thời gian khởi hành"), "html", null, true);
        echo "</option>
            ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["time_type"]) ? $context["time_type"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 29
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getShowName"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "        </select>
    </div>
</div>
";
        // line 34
        echo get_partial("creat_trip_step1_fix_start");
        echo "
";
        // line 35
        echo get_partial("creat_trip_step1_daily_start");
        echo "
";
        // line 36
        echo get_partial("creat_trip_step1_weekly_start");
        echo "
";
        // line 37
        echo get_partial("creat_trip_step1_request", array("tour_detail" => (isset($context["tour_detail"]) ? $context["tour_detail"] : null)));
        echo "
<div class=\"row box_1x\">
    <div class=\"col-md-12\">
        <p class=\"hightlight\">";
        // line 40
        echo twig_escape_filter($this->env, translate("Tiêu đề"), "html", null, true);
        echo "</p>
        <input type=\"text\" class=\"form-control\" name=\"tour_title\" id=\"tour_title\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTitle"), "html", null, true);
        echo "\" />
    </div>
</div>
<div class=\"row box_1x\">
    <div class=\"col-md-12\">
        <p class=\"hightlight\">";
        // line 46
        echo twig_escape_filter($this->env, translate("Mô tả"), "html", null, true);
        echo "</p>
        <textarea class=\"form-control\" rows=\"5\" id=\"tour_description\" name=\"tour_description\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getDescription"), "html", null, true);
        echo "</textarea>
    </div>
</div>
";
        // line 50
        echo get_partial("tripManager/info_type_language_step_1", array("tour_id" => $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getId")));
        echo "
<div class=\"row box_2x\">
\t<div class=\"col-md-offset-8 col-md-4\">
\t\t<a class=\"btn btn_orange\" id=\"update_time\" href=\"#\">";
        // line 53
        echo twig_escape_filter($this->env, translate("Cập nhật"), "html", null, true);
        echo "</a>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_trip_set_time.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 53,  112 => 50,  106 => 47,  102 => 46,  94 => 41,  90 => 40,  84 => 37,  80 => 36,  76 => 35,  72 => 34,  67 => 31,  56 => 29,  52 => 28,  48 => 27,  41 => 23,  17 => 1,);
    }
}

<?php

/* _creat_trip_step3_other_price_day_discount.html */
class __TwigTemplate_1cc6901aee0cee43d1a352368287549b extends Twig_Template
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
    if(";
        // line 3
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tour_discount_day"]) ? $context["tour_discount_day"] : null)), "html", null, true);
        echo "){
    \t\$('#checkbox_discount_tour_day').click();
    }
});
</script>
<div class=\"row box_1x\">
    <div class=\"col-md-12\">
        <label class=\"hightlight\"><input type=\"checkbox\" value=\"checkbox_discount_tour_day\" id=\"checkbox_discount_tour_day\"/> ";
        // line 10
        echo twig_escape_filter($this->env, translate(" Tôi muốn tăng giảm giá theo sự kiện"), "html", null, true);
        echo "</label>
    </div>
</div>
<div id=\"div_checkbox_discount_tour_day\" style=\"display:none;border-radius: 5px; background-color: rgb(227, 227, 227);\">
\t<div class=\"row box_1x\">
\t\t<div class=\"col-md-12 col-sm-6\">
\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-3 \">
\t\t\t\t<select class=\"form-control\" id=\"select_discount_tour_day\" style=\"border: 2px solid rgb(132, 132, 132);padding: 0px\">
\t\t\t\t\t<option value=\"0\">";
        // line 18
        echo twig_escape_filter($this->env, translate("Mức giá"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 20
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate("Tăng"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "%</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 23
            echo "\t\t\t\t\t<option value=\"-";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate("Giảm"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "%</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 col-sm-3 \">
\t\t\t\t<select class=\"form-control\" id=\"select_discount_event\" style=\"border: 2px solid rgb(132, 132, 132);padding: 0px\">
\t\t\t\t\t<option value=\"0\">";
        // line 29
        echo twig_escape_filter($this->env, translate("Sự kiện"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("TourDiscountEventTypePeer", "get_all"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 31
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getShowName"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-3 \">
\t\t\t\t<input readonly style=\"border: 2px solid rgb(132, 132, 132);cursor: -webkit-grab;background-color: white\" class=\"form-control time_\" name=\"creat_trip_day_discount[start_date]\" id=\"creat_trip_day_discount_start_date\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, translate("Ngày bắt đầu"), "html", null, true);
        echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-3 \">
\t\t\t\t<input readonly style=\"border: 2px solid rgb(132, 132, 132);cursor: -webkit-grab;background-color: white\" class=\"form-control time_\" name=\"creat_trip_day_discount[end_date]\" id=\"creat_trip_day_discount_end_date\"  placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, translate("Ngày kết thúc"), "html", null, true);
        echo "\"//>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 col-sm-3 col-xs-3 \">
\t            <a class=\"btn btn_orange save\" id=\"add_new_price_discount_tour_day\">";
        // line 42
        echo twig_escape_filter($this->env, translate("Lưu"), "html", null, true);
        echo "</a>
\t      \t</div>
\t\t</div>
\t</div>
\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tour_discount_day"]) ? $context["tour_discount_day"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 47
            echo "\t<div class=\"row box_1x\" id=\"item_tour_discount_day-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">
\t\t<div class=\"col-md-12 col-sm-6\">
\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-3 \">
\t\t\t\t<select class=\"form-control\" id=\"select_discount_tour_day_add_new\" data-id=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" style=\"padding: 0px\">
\t\t\t\t\t";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 52
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
                if (((isset($context["value"]) ? $context["value"] : null) == $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getDiscount"))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, translate("Tăng"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "%</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 54
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 55
                echo "\t\t\t\t\t<option value=\"-";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
                if (((isset($context["value"]) ? $context["value"] : null) == (-$this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getDiscount")))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, translate("Giảm"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "%</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 57
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 col-sm-3 \">
\t\t\t\t<select class=\"form-control\" id=\"select_discount_event_add_new\" >
\t\t\t\t\t<option value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getValue"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-3 \">
\t\t\t\t<input readonly value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getDateStart"), "d-m-Y"), "html", null, true);
            echo "\" style=\"cursor: -webkit-grab;background-color: white\" class=\"form-control time_\" name=\"day_discount_start_date_new_add\" id=\"day_discount_start_date_new_add\" placeholder=\"";
            echo twig_escape_filter($this->env, translate("Ngày bắt đầu giảm giá"), "html", null, true);
            echo "\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-3 \">
\t\t\t\t<input readonly value=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getDateEnd"), "d-m-Y"), "html", null, true);
            echo "\" style=\"cursor: -webkit-grab;background-color: white\" class=\"form-control time_\" name=\"day_discount_end_date_new_add\" id=\"day_discount_end_date_new_add\"  placeholder=\"";
            echo twig_escape_filter($this->env, translate("Ngày kết thúc giảm giá"), "html", null, true);
            echo "\"//>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 col-sm-3 col-xs-3 \">
\t              <a class=\"btn btn_orange_outline save delete_new_price_discount_tour_day\"  id=\"delete_new_price_discount_tour_day-";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate("Xóa"), "html", null, true);
            echo "</a>
\t      \t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 76
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "_creat_trip_step3_other_price_day_discount.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 76,  219 => 71,  211 => 68,  203 => 65,  194 => 61,  188 => 57,  171 => 55,  166 => 54,  149 => 52,  145 => 51,  141 => 50,  134 => 47,  130 => 46,  123 => 42,  117 => 39,  111 => 36,  106 => 33,  95 => 31,  91 => 30,  87 => 29,  81 => 25,  68 => 23,  63 => 22,  50 => 20,  46 => 19,  42 => 18,  31 => 10,  21 => 3,  17 => 1,);
    }
}

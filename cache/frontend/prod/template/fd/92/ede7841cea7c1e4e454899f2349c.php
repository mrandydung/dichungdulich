<?php

/* _trip_set_schedule.html */
class __TwigTemplate_fd92ede7841cea7c1e4e454899f2349c extends Twig_Template
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
        echo "<div id=\"div_loading\"></div>
<div class=\"error\" id=\"popup_error_schedule\" style=\"display:none\"></div>
<div class=\"success\" id=\"popup_success_schedule\" style=\"display: none\"></div>
<script type=\"text/javascript\" src=\"/assets/js/typeahead.min.js?v=";
        // line 4
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"/js/map/jquery.geocomplete.js?v=";
        // line 5
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"/js/jsapi.js?v=";
        // line 6
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"/js/map/map_funcs.js?v=";
        // line 7
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
function gender_address(){
    \$('#end_new').typeahead({
        name: 'search_end',
        hint: true,
        highlight: true,
        remote: {
            cache: true,
            url: '/home/search_end?search_end=%QUERY',
            filter: function (parsedResponse) {
                return parsedResponse;
            }
        }
    });
}
\$(document).ready(function(){
    \$('input[type=\"checkbox\"]').click(function(){
        if (\$(this).attr(\"value\") == \"diemden\"){
            \$(\"#div_add_new_diem_den\").slideToggle(400);
        }
    });
    \$('#end').typeahead({
        name: 'search_end',
        hint: true,
        highlight: true,
        remote: {
            cache: true,
            url: '/home/search_end?search_end=%QUERY',
            filter: function (parsedResponse) {
                return parsedResponse;
            }
        }
    });
    \$('#end_new').typeahead({
        name: 'search_end',
        hint: true,
        highlight: true,
        remote: {
            cache: true,
            url: '/home/search_end?search_end=%QUERY',
            filter: function (parsedResponse) {
                return parsedResponse;
            }
        }
    });
    if (";
        // line 53
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tour_coo_item"]) ? $context["tour_coo_item"] : null)), "html", null, true);
        echo "){
        \$('#checkbox_diemden').click();
    }

    var locat;
    var options;
    \$(\"#start\").geocomplete(options)
    .bind(\"geocode:result\", function(event, result){
        locat = result.geometry.location;
        \$('#hidden_start').val(locat.lat() + ',' + locat.lng());
    })

});
</script>
<div class=\"row box_1x\">
    <div class=\"col-md-12\">
        <div class=\"row box_1x\">
            <div class=\"col-md-2 padding_top\">
                <p><strong>";
        // line 71
        echo twig_escape_filter($this->env, translate("Điểm đi"), "html", null, true);
        echo ":</strong></p>
            </div>
            <div class=\"col-md-6 \">
                <input type=\"text\" class=\"form-control a_\" placeholder=\"";
        // line 74
        echo twig_escape_filter($this->env, translate("Điểm đi"), "html", null, true);
        echo "\" id=\"start\" name=\"start\" value=\"";
        if ($this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getStart")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getStart"), "html", null, true);
        }
        echo "\" />
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-2 padding_top\">
                <p><strong>";
        // line 79
        echo twig_escape_filter($this->env, translate("Điểm đến"), "html", null, true);
        echo ":</strong></p>
            </div>
            <div class=\"col-md-6 \">
                <input type=\"text\" class=\"form-control b_\" placeholder=\"";
        // line 82
        echo twig_escape_filter($this->env, translate("Điểm đến"), "html", null, true);
        echo "\" id=\"end\" name=\"end\" value=\"";
        if ($this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getEnd")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getEnd"), "html", null, true);
        }
        echo "\">
            </div>
        </div>

        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <label class=\"hightlight\"><input type=\"checkbox\" value=\"diemden\" id=\"checkbox_diemden\"/> ";
        // line 88
        echo twig_escape_filter($this->env, translate(" Tôi muốn thêm điểm đến"), "html", null, true);
        echo "</label>
            </div>
        </div>

        <div id=\"div_add_new_diem_den\" style=\"display:none;background-color: rgb(227, 227, 227);border-radius: 5px;\">
            <div class=\"row box_1x\">
                <div class=\"col-md-12 col-sm-6\">
                    <div class=\"col-md-2 padding_top\">
                        <p><strong>";
        // line 96
        echo twig_escape_filter($this->env, translate("Điểm đến"), "html", null, true);
        echo ":</strong></p>
                    </div>
                    <div class=\"col-md-6 \">
                        <input type=\"text\" class=\"form-control b_\" placeholder=\"";
        // line 99
        echo twig_escape_filter($this->env, translate("Điểm đến"), "html", null, true);
        echo "\" id=\"end_new\" name=\"end_new\" value=\"\" style=\"border: 2px solid #848484;\">
                    </div>
                    <div class=\"col-md-2 col-sm-5 col-xs-5 \">
                        <a class=\"btn btn_orange save\" id=\"add_new_end\">";
        // line 102
        echo twig_escape_filter($this->env, translate("Thêm"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
            <div id=\"content_add_new_diem_den\">
                ";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tour_coo_item"]) ? $context["tour_coo_item"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 108
            echo "                <div class=\"row box_1x\" id=\"item_coo_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">
                    <div class=\"col-md-12 col-sm-6\">
                        <div class=\"col-md-2 padding_top\">
                            <p><strong></strong></p>
                        </div>
                        <div class=\"col-md-6 \">
                            <input type=\"text\" class=\"form-control b_\" placeholder=\"";
            // line 114
            echo twig_escape_filter($this->env, translate("Nhập điểm đến"), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" id=\"end_new_item\" name=\"end_new\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getNameEnd"), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"col-md-2 col-sm-5 col-xs-5 \">
                            <a class=\"btn btn_orange_outline save delete_new_end\" id=\"delete_new_end-";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate("Xóa"), "html", null, true);
            echo "</a>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 122
        echo "            </div>
        </div>       
    </div>
</div>
<div class=\"row box_1x\" style=\"padding-top:30px\">
    <div class=\"col-md-4\">
        <a class=\"btn btn_blue active\" id=\"lich_trinh_co_ban\">
            ";
        // line 129
        echo twig_escape_filter($this->env, translate("Lịch trình cơ bản"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"col-md-4\">
        <a class=\"btn btn_blue\" id=\"lich_trinh_chi_tiet\">
            ";
        // line 134
        echo twig_escape_filter($this->env, translate("Lịch trình chi tiết"), "html", null, true);
        echo "
        </a>
    </div>
</div>
<div id=\"simple\">
    ";
        // line 139
        echo get_partial("trip_set_schedule_simple", array("tour_id" => (isset($context["tour_id"]) ? $context["tour_id"] : null), "images" => (isset($context["images"]) ? $context["images"] : null), "tour_detail" => (isset($context["tour_detail"]) ? $context["tour_detail"] : null)));
        echo "
</div>
<div id=\"complicate\" style=\"display: none\">
    <div class=\"success\" id=\"popup_success_schedule_day\" style=\"display:none\"></div>
    <div class=\"error\" id=\"popup_error_schedule_day\" style=\"display:none\"></div>
    <div class=\"text-center box_1x\" id=\"div_next_prev_day\">
    </div>
    <div class=\"padding_top\">
        ";
        // line 147
        echo get_partial("trip_manager_personal/creat_trip_step2_detailed_schedule", array("tour_id" => (isset($context["tour_id"]) ? $context["tour_id"] : null), "tour_detail" => (isset($context["tour_detail"]) ? $context["tour_detail"] : null), "schedule_day_one" => (isset($context["schedule_day_one"]) ? $context["schedule_day_one"] : null), "vehicle_arr" => (isset($context["vehicle_arr"]) ? $context["vehicle_arr"] : null)));
        echo "
    </div>
</div>
<div class=\"row box_2x\">
    <div class=\"col-md-offset-8 col-md-4\">
        <a class=\"btn btn_blue\" id=\"update_schedule\">";
        // line 152
        echo twig_escape_filter($this->env, translate("Cập nhật"), "html", null, true);
        echo "</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_trip_set_schedule.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 152,  245 => 147,  234 => 139,  226 => 134,  218 => 129,  209 => 122,  196 => 117,  186 => 114,  176 => 108,  172 => 107,  164 => 102,  158 => 99,  152 => 96,  141 => 88,  128 => 82,  122 => 79,  110 => 74,  104 => 71,  83 => 53,  34 => 7,  30 => 6,  26 => 5,  22 => 4,  17 => 1,);
    }
}

<?php

/* indexSuccess.html */
class __TwigTemplate_c0c849608c6488cd096de9034501fd59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"/assets/dichungdulich/css/creat_trip.css?v=";
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"/assets/dichungdulich/css/bootstrap.vertical-tabs.css?v=";
        // line 4
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"/css/jqueryui/css/redmond/jquery-ui-1.8.16.custom.css?v=";
        // line 5
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script type=\"text/javascript\" src=\"/ajax_upload/js/jquery.form.min.js?v=";
        // line 6
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"/js/tinymce/tinymce.min.js?v=";
        // line 7
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
var  check_enable_step = ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["check_enable_step"]) ? $context["check_enable_step"] : null), "step", array(), "array"), "html", null, true);
        echo " ;
</script>
<script src=\" /assets/dichungdulich/js/create_trip.js?v=";
        // line 11
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"/js/jquery-ui.js?v=";
        // line 12
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"/js/datepicker-vi.js?v=";
        // line 13
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<input type=\"hidden\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["tour_id"]) ? $context["tour_id"] : null), "html", null, true);
        echo "\" id=\"tour_id\">
<script type=\"text/javascript\">
\$(document).ready(function(){
\t\$('#number_seat_tour').val(";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getNumberSeat"), "html", null, true);
        echo ");
\tif(";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTimeTypeId"), "html", null, true);
        echo " == '1'){
\t\t\$('#fix_start_time').show();
\t\t\$('#tour_time_type').val(";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTimeTypeId"), "html", null, true);
        echo ");
\t\t\$('#creat_trip_form_fix_start_start_date').val('";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getDateStart"), "d-m-Y"), "html", null, true);
        echo "');
\t\t\$('#creat_trip_form_fix_start_end_date').val('";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getDateEnd"), "d-m-Y"), "html", null, true);
        echo "');
\t\t\$('#creat_trip_form_fix_start_start_hour').val('";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getHourStart"), "html", null, true);
        echo "');
\t\tsetDatepickerStart();
\t\tsetDatepickerEnd();
\t}
\tif(";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTimeTypeId"), "html", null, true);
        echo " == '2'){
\t\t\$('#daily_start_time').show();
\t\t\$('#tour_time_type').val(";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTimeTypeId"), "html", null, true);
        echo ");
\t\t\$('#creat_trip_form_daily_start_hour').val('";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getHourDay"), "html", null, true);
        echo "');
\t\t\$('#creat_trip_form_daily_start_day_long').val('";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTimeCategoryDayId"), "html", null, true);
        echo "');
\t}
\tif(";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTimeTypeId"), "html", null, true);
        echo " == '3'){
\t\t\$('#weekly_start_time').show();
\t\t\$.each([";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getDayInWeek"), "html", null, true);
        echo "], function( index, value ) {
\t\t\t\$('#label_checkbox_week_'+value).addClass('active');
\t\t\t\$('#checkbox_week_'+value).prop('checked', true);
\t\t});
\t\t\$('#tour_time_type').val(";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTimeTypeId"), "html", null, true);
        echo ");
\t\t\$('#creat_trip_form_weekly_start_hour').val('";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getHourWeek"), "html", null, true);
        echo "');
\t\t\$('#creat_trip_form_weekly_start_time_category_day').val('";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTimeCategoryDayId"), "html", null, true);
        echo "');
\t}
\tif(";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTimeTypeId"), "html", null, true);
        echo " == '4'){
\t\t\$('#request_start_time').show();
\t\t\$('#tour_time_type').val(";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTimeTypeId"), "html", null, true);
        echo ");
\t\t\$('#select_date_request_service_day_long').val('";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTimeCategoryDayId"), "html", null, true);
        echo "');

\t}
\tif(";
        // line 49
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["utilities"]) ? $context["utilities"] : null)), "html", null, true);
        echo "){
\t\t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilities"]) ? $context["utilities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 51
            echo "\t\t\$('#ad_Checkbox";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "id"), "html", null, true);
            echo "').prop('checked', true);
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 53
        echo "\t}
\tif(";
        // line 54
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["sorting"]) ? $context["sorting"] : null)), "html", null, true);
        echo "){
\t\t";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sorting"]) ? $context["sorting"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 56
            echo "\t\t\$('#ad_Checkbox_sorting";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "id"), "html", null, true);
            echo "').prop('checked', true);
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 58
        echo "\t}
\tif(";
        // line 59
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["activities"]) ? $context["activities"] : null)), "html", null, true);
        echo "){
\t\t";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 61
            echo "\t\t\$('#ad_Checkbox_activities";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "id"), "html", null, true);
            echo "').prop('checked', true);
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 63
        echo "\t}
\tif(";
        // line 64
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["object_fit"]) ? $context["object_fit"] : null)), "html", null, true);
        echo "){
\t\t";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["object_fit"]) ? $context["object_fit"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 66
            echo "\t\t\$('#ad_Checkbox_object_fit";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "id"), "html", null, true);
            echo "').prop('checked', true);
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 68
        echo "\t}
});
</script>
<div class=\"white_bg box_2x\">
\t<div class=\"container thongtin\">
\t\t<div class=\"row box_1x\">
\t\t\t<div class=\"col-xs-3 tab_menu\">
\t\t\t\t<ul class=\"nav nav-tabs tabs-left \">
\t\t\t\t\t<li class=\"active \"><a href=\"#time\" data-toggle=\"tab\"><span class=\"time_set\"></span>";
        // line 76
        echo twig_escape_filter($this->env, translate("Thông tin cơ bản"), "html", null, true);
        echo "
\t\t\t\t\t\t<span id=\"icon_success_time\">";
        // line 77
        if ($this->getAttribute((isset($context["check_enable_step"]) ? $context["check_enable_step"] : null), "enable_time_set", array(), "array")) {
            echo "<span class=\"badge check glyphicon glyphicon-ok\"> </span>";
        }
        echo "</span></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#costs\" data-toggle=\"tab\"><span class=\"costs_set\"></span>";
        // line 79
        echo twig_escape_filter($this->env, translate("Chi phí"), "html", null, true);
        echo "
\t\t\t\t\t\t<span id=\"icon_success_cost\">";
        // line 80
        if ($this->getAttribute((isset($context["check_enable_step"]) ? $context["check_enable_step"] : null), "enable_cost", array(), "array")) {
            echo "<span class=\"badge check glyphicon glyphicon-ok\"> </span>";
        }
        echo "</span></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#schedule\" data-toggle=\"tab\" id=\"button_click_tab_schedule\"><span class=\"schedule_set\"></span>";
        // line 82
        echo twig_escape_filter($this->env, translate("Lịch trình"), "html", null, true);
        echo "
\t\t\t\t\t\t<span id=\"icon_success_schedule\">";
        // line 83
        if ($this->getAttribute((isset($context["check_enable_step"]) ? $context["check_enable_step"] : null), "enable_schedule", array(), "array")) {
            echo "<span class=\"badge check glyphicon glyphicon-ok\"> </span>";
        }
        echo "</span></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#utilities\" data-toggle=\"tab\"><span class=\"utilities_set\"></span>";
        // line 85
        echo twig_escape_filter($this->env, translate("Thông tin bổ sung"), "html", null, true);
        echo "
\t\t\t\t\t\t<span id=\"icon_success_utilities\">";
        // line 86
        if ($this->getAttribute((isset($context["check_enable_step"]) ? $context["check_enable_step"] : null), "enable_utilities", array(), "array")) {
            echo "<span class=\"badge check glyphicon glyphicon-ok\"> </span>";
        }
        echo "</span></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#note\" data-toggle=\"tab\"><span class=\"note_set\"></span>";
        // line 88
        echo twig_escape_filter($this->env, translate("Điều khoản"), "html", null, true);
        echo "
\t\t\t\t\t\t<span id=\"icon_success_note\">";
        // line 89
        if ($this->getAttribute((isset($context["check_enable_step"]) ? $context["check_enable_step"] : null), "enable_note", array(), "array")) {
            echo "<span class=\"badge check glyphicon glyphicon-ok\"> </span>";
        }
        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t";
        // line 92
        if ((!$this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getSuccessCreated"))) {
            // line 93
            echo "\t\t\t\t<div class=\"col-md-12 box_2x\">
\t\t\t\t\t";
            // line 94
            if (($this->getAttribute((isset($context["check_enable_step"]) ? $context["check_enable_step"] : null), "step", array(), "array") != "5")) {
                // line 95
                echo "\t\t\t\t\t<p id=\"content_step_finish\">";
                echo twig_escape_filter($this->env, translate("Còn"), "html", null, true);
                echo " <span id=\"still_step\">";
                echo twig_escape_filter($this->env, (5 - $this->getAttribute((isset($context["check_enable_step"]) ? $context["check_enable_step"] : null), "step", array(), "array")), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, translate("bước"), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            } else {
                // line 97
                echo "\t\t\t\t\t<p><span id=\"still_step\">";
                echo twig_escape_filter($this->env, translate("Đã hoàn thành các bước"), "html", null, true);
                echo "</span></p>
\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t<div class=\"box_1x\">
\t\t\t\t\t\t<a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getDetailUrlTourPreview"), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn_blue_outline\" ";
            if (($this->getAttribute((isset($context["check_enable_step"]) ? $context["check_enable_step"] : null), "step", array(), "array") != "5")) {
                echo "disabled";
                echo " ";
            }
            echo " id=\"preview_tour\">";
            echo twig_escape_filter($this->env, translate("Xem trước"), "html", null, true);
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"btn btn_blue\" ";
            // line 102
            if (($this->getAttribute((isset($context["check_enable_step"]) ? $context["check_enable_step"] : null), "step", array(), "array") != "5")) {
                echo "disabled";
                echo " ";
            }
            echo " id=\"create_tour\">";
            echo twig_escape_filter($this->env, translate("Đăng chuyến đi"), "html", null, true);
            echo "</a>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 105
        echo "\t\t\t</div>
\t\t\t<div class=\"col-xs-9 tab_body\">
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"time\">
\t\t\t\t\t\t";
        // line 109
        echo get_partial("trip_set_time", array("time_type" => (isset($context["time_type"]) ? $context["time_type"] : null), "tour_detail" => (isset($context["tour_detail"]) ? $context["tour_detail"] : null)));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"costs\">
\t\t\t\t\t\t";
        // line 112
        echo get_partial("trip_set_costs", array("tour_detail" => (isset($context["tour_detail"]) ? $context["tour_detail"] : null), "tour_price_kid_item" => (isset($context["tour_price_kid_item"]) ? $context["tour_price_kid_item"] : null), "tour_discount_day" => (isset($context["tour_discount_day"]) ? $context["tour_discount_day"] : null), "tour_discount_number" => (isset($context["tour_discount_number"]) ? $context["tour_discount_number"] : null), "tour_price_service_item" => (isset($context["tour_price_service_item"]) ? $context["tour_price_service_item"] : null)));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"schedule\">
\t\t\t\t\t\t";
        // line 115
        echo get_partial("trip_manager_personal/trip_set_schedule", array("tour_id" => (isset($context["tour_id"]) ? $context["tour_id"] : null), "tour_detail" => (isset($context["tour_detail"]) ? $context["tour_detail"] : null), "images" => (isset($context["images"]) ? $context["images"] : null), "tour_detail" => (isset($context["tour_detail"]) ? $context["tour_detail"] : null), "tour_coo_item" => (isset($context["tour_coo_item"]) ? $context["tour_coo_item"] : null), "schedule_day_one" => (isset($context["schedule_day_one"]) ? $context["schedule_day_one"] : null), "vehicle_arr" => (isset($context["vehicle_arr"]) ? $context["vehicle_arr"] : null)));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"utilities\">
\t\t\t\t\t\t";
        // line 118
        echo get_partial("utilities");
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"note\">
\t\t\t\t\t\t";
        // line 121
        echo get_partial("trip_set_note", array("tour_detail" => (isset($context["tour_detail"]) ? $context["tour_detail"] : null)));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>  \t
\t\t</div>
\t</div>
</div>
<div class=\"modal fade bs-example-modal-sm\" id=\"content_verified_phone\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-sm\" >
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 134
        echo twig_escape_filter($this->env, translate("Xác nhận số điện thoại để hoàn tất đăng chuyến đi"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"row \" style=\"text-align:center;\">
\t\t\t\t\t<div class=\"col-md-12\">\t\t\t\t
\t\t\t\t\t\t<div class=\"row box_1x\">
\t\t\t\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"phone_number\" placeholder=\"";
        // line 141
        echo twig_escape_filter($this->env, translate("Điền số điện thoại"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["phone_number"]) ? $context["phone_number"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t\t\t\t<button class=\"btn btn_blue\" type=\"button\" id=\"click_lay_ma_xac_thuc\">&nbsp;";
        // line 144
        echo twig_escape_filter($this->env, translate("Lấy mã"), "html", null, true);
        echo " &nbsp;</button>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row box_1x\" id=\"div_verified_phone\" style=\"display: none\">
\t\t\t\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 149
        echo twig_escape_filter($this->env, translate("Điền mã xác thực"), "html", null, true);
        echo "\" id=\"ma_xac_thuc\" >
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t\t\t\t\t<button class=\"btn btn_blue\" type=\"button\" id=\"submit_verified_phone\">";
        // line 152
        echo twig_escape_filter($this->env, translate("Xác thực"), "html", null, true);
        echo "</button> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row box_1x\">
\t\t\t\t\t\t\t<div class=\" col-md-12 text-center\">
\t\t\t\t\t\t\t\t<p><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span> ";
        // line 157
        echo twig_escape_filter($this->env, translate("Tôi đồng ý với điều khoản của Gheptour.vn"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"error\" id=\"popup_error_ma_xac_thuc\" style=\"display:none\"></div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" style=\"width:auto;\">";
        // line 165
        echo twig_escape_filter($this->env, translate("Hủy bỏ"), "html", null, true);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "indexSuccess.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 165,  438 => 157,  430 => 152,  424 => 149,  416 => 144,  408 => 141,  398 => 134,  382 => 121,  376 => 118,  370 => 115,  364 => 112,  358 => 109,  352 => 105,  341 => 102,  329 => 100,  326 => 99,  320 => 97,  310 => 95,  308 => 94,  305 => 93,  303 => 92,  295 => 89,  291 => 88,  284 => 86,  280 => 85,  273 => 83,  269 => 82,  262 => 80,  258 => 79,  251 => 77,  247 => 76,  237 => 68,  228 => 66,  224 => 65,  220 => 64,  217 => 63,  208 => 61,  204 => 60,  200 => 59,  197 => 58,  188 => 56,  184 => 55,  180 => 54,  177 => 53,  168 => 51,  164 => 50,  160 => 49,  154 => 46,  150 => 45,  145 => 43,  140 => 41,  136 => 40,  132 => 39,  125 => 35,  120 => 33,  115 => 31,  111 => 30,  107 => 29,  102 => 27,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  78 => 18,  74 => 17,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  51 => 9,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  29 => 3,  26 => 2,);
    }
}

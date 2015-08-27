<?php

/* _creat_trip_step3_other_price_service_discount.html */
class __TwigTemplate_042d0513a886e2d35860a16d88d859dd extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tour_price_service_item"]) ? $context["tour_price_service_item"] : null)), "html", null, true);
        echo "){
    \t\$('#checkbox_price_tour_service').click();
    }
});
</script>
<div class=\"row box_1x\">
    <div class=\"col-md-12\">
        <label class=\"hightlight\"><input type=\"checkbox\" value=\"checkbox_price_tour_service\" id=\"checkbox_price_tour_service\"/> ";
        // line 10
        echo twig_escape_filter($this->env, translate(" Tôi muốn thêm tùy chọn giá theo dịch vụ thêm"), "html", null, true);
        echo "</label>
    </div>
</div>
<div id=\"div_checkbox_price_tour_service\" style=\"display:none;border-radius: 5px; background-color: rgb(227, 227, 227);\">
\t<div class=\"row box_1x\">
\t\t<div class=\"col-md-12 col-sm-6\">
\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-6\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title_service\" style=\"border: 2px solid rgb(132, 132, 132)\" placeholder=\" ";
        // line 17
        echo twig_escape_filter($this->env, translate("Nhập loại dịch vụ thêm. VD: Khách sạn 2 sao"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-4\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"price_service\" style=\"border: 2px solid rgb(132, 132, 132)\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, translate("Chi phí phụ thu"), "html", null, true);
        echo "\">
\t\t\t\t\t<span class=\"input-group-addon\" style=\"border: 2px solid rgb(132, 132, 132)\">VNĐ</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 col-sm-3 col-xs-3 \">
            \t<a class=\"btn btn_orange save\" id=\"add_new_price_tour_service\">";
        // line 26
        echo twig_escape_filter($this->env, translate("Lưu"), "html", null, true);
        echo "</a>
      \t\t</div>
\t\t</div>
\t</div>
\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tour_price_service_item"]) ? $context["tour_price_service_item"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 31
            echo "\t<div class=\"row box_1x\" id=\"item_tour_price_service-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">
\t\t<div class=\"col-md-12 col-sm-6\">
\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getTitle"), "html", null, true);
            echo "\" id=\"title_service_add_new\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" readonly />
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-4\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, translate("Phụ thu"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getPrice")), "html", null, true);
            echo "\" id=\"price_service_add_new\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" readonly>
<!-- \t\t\t\t\t<span class=\"input-group-addon\">VNĐ</span> -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-4\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, translate("Giá mới"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getPrice") + $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getPrice"))), "html", null, true);
            echo "\" id=\"price_sum_service_add_new\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" readonly>
\t\t\t<!-- \t\t<span class=\"input-group-addon\">VNĐ</span> -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 col-sm-3 col-xs-3 \">
            \t <a class=\"btn btn_orange_outline save delete_new_price_service_tour\"  id=\"delete_new_price_service_tour-";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate("Xóa"), "html", null, true);
            echo "</a>
      \t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 54
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "_creat_trip_step3_other_price_service_discount.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 54,  108 => 49,  96 => 44,  83 => 38,  74 => 34,  67 => 31,  63 => 30,  56 => 26,  48 => 21,  41 => 17,  31 => 10,  21 => 3,  17 => 1,);
    }
}

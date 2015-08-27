<?php

/* _creat_trip_step3_other_price.html */
class __TwigTemplate_4a90d7f30e2394bbfcdc846c1e74c5c4 extends Twig_Template
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
\t\$('input[type=\"checkbox\"]').click(function(){
        if(\$(this).attr(\"value\")==\"checkbox_kid_price\"){
            \$(\"#div_checkbox_kid_price\").slideToggle(400);
        }
    });
\t\$('input[type=\"checkbox\"]').click(function(){
        if(\$(this).attr(\"value\")==\"checkbox_discount_tour_day\"){
            \$(\"#div_checkbox_discount_tour_day\").slideToggle(400);
        }
    });
\t\$('input[type=\"checkbox\"]').click(function(){
        if(\$(this).attr(\"value\")==\"checkbox_discount_tour_number\"){
            \$(\"#div_checkbox_discount_tour_number\").slideToggle(400);
        }
    });
\t\$('input[type=\"checkbox\"]').click(function(){
        if(\$(this).attr(\"value\")==\"checkbox_price_tour_service\"){
            \$(\"#div_checkbox_price_tour_service\").slideToggle(400);
        }
    });
    if(";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tour_price_kid_item"]) ? $context["tour_price_kid_item"] : null)), "html", null, true);
        echo "){
    \t\$('#checkbox_kid_price').click();
    }
});
</script>
<div class=\"col-md-10 col-sm-10\">
    <div class=\"col-md-12 box_2x\">
        <a></a>
    </div>
</div>
<div id=\"content_change_select_type_pricing_service\" ";
        // line 33
        if (($this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTypePricingServiceId") == "2")) {
            echo "style=\"display:none\"";
        }
        echo ">
    <div class=\"col-md-12\">
        ";
        // line 35
        echo get_partial("creat_trip_step3_other_price_service_discount", array("tour_detail" => (isset($context["tour_detail"]) ? $context["tour_detail"] : null), "tour_price_service_item" => (isset($context["tour_price_service_item"]) ? $context["tour_price_service_item"] : null)));
        echo "
        ";
        // line 36
        echo get_partial("creat_trip_step3_other_price_child_price", array("tour_price_kid_item" => (isset($context["tour_price_kid_item"]) ? $context["tour_price_kid_item"] : null)));
        echo "
    \t";
        // line 37
        echo get_partial("creat_trip_step3_other_price_number_discount", array("tour_discount_number" => (isset($context["tour_discount_number"]) ? $context["tour_discount_number"] : null)));
        echo "
    \t";
        // line 38
        echo get_partial("creat_trip_step3_other_price_day_discount", array("tour_discount_day" => (isset($context["tour_discount_day"]) ? $context["tour_discount_day"] : null)));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_creat_trip_step3_other_price.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 38,  69 => 37,  65 => 36,  61 => 35,  54 => 33,  41 => 23,  17 => 1,);
    }
}

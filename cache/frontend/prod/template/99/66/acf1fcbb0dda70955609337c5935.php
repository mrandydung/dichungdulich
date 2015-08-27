<?php

/* _trip_set_costs.html */
class __TwigTemplate_9966acf1fcbb0dda70955609337c5935 extends Twig_Template
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
        echo "<div class=\"error\" id=\"popup_error_price\" style=\"display:none\"></div>
<div class=\"success\" id=\"popup_success_price\" style=\"display: none\"></div>
<div class=\"box_1x\">
\t<div class=\"row\">
\t\t";
        // line 5
        echo get_partial("creat_trip_step3_price", array("tour_detail" => (isset($context["tour_detail"]) ? $context["tour_detail"] : null)));
        echo "
\t\t  ";
        // line 6
        echo get_partial("creat_trip_step3_other_price", array("tour_detail" => (isset($context["tour_detail"]) ? $context["tour_detail"] : null), "tour_price_kid_item" => (isset($context["tour_price_kid_item"]) ? $context["tour_price_kid_item"] : null), "tour_discount_day" => (isset($context["tour_discount_day"]) ? $context["tour_discount_day"] : null), "tour_discount_number" => (isset($context["tour_discount_number"]) ? $context["tour_discount_number"] : null), "tour_price_service_item" => (isset($context["tour_price_service_item"]) ? $context["tour_price_service_item"] : null)));
        echo "
    </div>
    <div class=\"row padding_top\">
        <div class=\"col-md-12\">
          <label class=\"checkbox-inline hightlight\"><input type=\"checkbox\" ";
        // line 10
        if (($this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getAllowBookingFast") == "1")) {
            echo "checked";
        }
        echo " id=\"allow_booking_fast\">";
        echo twig_escape_filter($this->env, translate("Tôi mặc định chấp nhận cho người dùng đăng ký tour thành công"), "html", null, true);
        echo "</label>
        </div>
    </div>
\t<div class=\"row padding_top\">
        <div class=\"cold-md-12\">
         \t<div class=\"col-md-4 col-sm-6\">
                <div class=\"col-md-12 padding_top\">
                    <p class=\"hightlight\">";
        // line 17
        echo twig_escape_filter($this->env, translate("Hình thức thanh toán"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-md-12 col-sm-6\">
                    <select class=\"form-control\" id=\"payment_type_id\" >
                        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("PaymentTypePeer", "getAll"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 22
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getPaymentTypeId") == $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getShowName"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "                    </select>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\" id=\"div_security_deposit\" ";
        // line 27
        if (($this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getPaymentTypeId") == "1")) {
            echo "style=\"display:none\"";
        }
        echo ">
                <div class=\"col-md-12 padding_top\">
                    <p class=\"hightlight\">";
        // line 29
        echo twig_escape_filter($this->env, translate("Số tiền đặt cọc tối thiểu"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-md-12 col-sm-6\">
                    <select class=\"form-control\" id=\"security_deposit\">
                        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(100, 0));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 34
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getSecurityDeposit") == (isset($context["val"]) ? $context["val"] : null))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo " %</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "                    </select>
                </div>
            </div>
        </div>
\t</div>
</div>
<div class=\"row box_2x\">
\t<div class=\"col-md-offset-8 col-md-4\">
\t\t<a class=\"btn btn_orange\" id=\"update_price\" href=\"#\">";
        // line 44
        echo twig_escape_filter($this->env, translate("Cập nhật"), "html", null, true);
        echo "</a>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_trip_set_costs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  112 => 36,  97 => 34,  93 => 33,  86 => 29,  79 => 27,  74 => 24,  59 => 22,  55 => 21,  48 => 17,  34 => 10,  27 => 6,  23 => 5,  17 => 1,);
    }
}

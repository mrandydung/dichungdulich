<?php

/* _creat_trip_step3_other_price_number_discount.html */
class __TwigTemplate_1028e06750483eff78b7f52c42709d36 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tour_discount_number"]) ? $context["tour_discount_number"] : null)), "html", null, true);
        echo "){
    \t\$('#checkbox_discount_tour_number').click();
    }
});
</script>
<div class=\"row box_1x\">
    <div class=\"col-md-12\">
        <label class=\"hightlight\"><input type=\"checkbox\" value=\"checkbox_discount_tour_number\" id=\"checkbox_discount_tour_number\"/> ";
        // line 10
        echo twig_escape_filter($this->env, translate(" Tôi muốn thêm giảm giá theo số lượng khách mua"), "html", null, true);
        echo "</label>
    </div>
</div>
<div id=\"div_checkbox_discount_tour_number\" style=\"display:none;border-radius: 5px; background-color: rgb(227, 227, 227);\">
\t<div class=\"row box_1x\">
\t\t<div class=\"col-md-12 col-sm-6\">
\t\t\t<div class=\"col-md-6 col-sm-5 col-xs-12\">
\t\t\t\t<select class=\"form-control\" id=\"select_discount_tour_number\" style=\"border: 2px solid rgb(132, 132, 132);padding: 0px\">
\t\t\t\t\t<option value=\"0\"> ";
        // line 18
        echo twig_escape_filter($this->env, translate("Mức giảm giá"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 20
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "%</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t<select class=\"form-control\" id=\"select_number_discount_number\" style=\"border: 2px solid rgb(132, 132, 132);padding: 0px\">
\t\t\t\t\t<option value=\"0\">";
        // line 26
        echo twig_escape_filter($this->env, translate("Số lượng mua tối thiểu"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 28
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, translate("khách"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 col-sm-3 col-xs-3 \">
            \t<a class=\"btn btn_orange save\" id=\"add_new_price_discount_tour_number\">";
        // line 33
        echo twig_escape_filter($this->env, translate("Lưu"), "html", null, true);
        echo "</a>
      \t\t</div>
\t\t</div>
\t</div>
\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tour_discount_number"]) ? $context["tour_discount_number"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 38
            echo "\t<div class=\"row box_1x\"  id=\"item_tour_discount_number-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">
\t\t<div class=\"col-md-12 col-sm-6\">
\t\t\t<div class=\"col-md-6 col-sm-5 col-xs-12\">
\t\t\t\t<select class=\"form-control\" id=\"select_discount_tour_number_add_new\" data-id=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" >
\t\t\t\t\t";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 43
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getDiscount") == (isset($context["valuel"]) ? $context["valuel"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "%</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 45
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t<select class=\"form-control\" id=\"select_number_discount_number_add_new\" data-id=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" >
\t\t\t\t\t";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 50
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getNumberDiscount") == (isset($context["value"]) ? $context["value"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, translate("khách"), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 52
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 col-sm-3 col-xs-3 \">
            \t<a class=\"btn btn_orange_outline save delete_new_price_discount_tour_number\"  id=\"delete_new_price_discount_tour_number-";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">Xóa</a>
      \t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "_creat_trip_step3_other_price_number_discount.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 60,  169 => 55,  164 => 52,  147 => 50,  143 => 49,  139 => 48,  134 => 45,  119 => 43,  115 => 42,  111 => 41,  104 => 38,  100 => 37,  93 => 33,  88 => 30,  75 => 28,  71 => 27,  67 => 26,  61 => 22,  50 => 20,  46 => 19,  42 => 18,  31 => 10,  21 => 3,  17 => 1,);
    }
}

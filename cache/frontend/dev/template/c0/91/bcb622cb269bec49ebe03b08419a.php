<?php

/* _creat_trip_step3_other_price_child_price.html */
class __TwigTemplate_c091bcb622cb269bec49ebe03b08419a extends Twig_Template
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
        echo "<div class=\"row box_1x\">
    <div class=\"col-md-12\">
        <label class=\"hightlight\"><input type=\"checkbox\" value=\"checkbox_kid_price\" id=\"checkbox_kid_price\"/> ";
        // line 3
        echo twig_escape_filter($this->env, translate(" Tôi muốn thêm giá trẻ em"), "html", null, true);
        echo "</label>
    </div>
</div>
<div id=\"div_checkbox_kid_price\" style=\"display:none;border-radius: 5px; background-color: rgb(227, 227, 227);\">
\t<div class=\"row box_1x\" >
\t\t<div class=\"col-md-12 col-sm-6\">
\t\t\t<div class=\"col-md-2 col-sm-6 col-xs-6\">
\t\t\t\t<select class=\"form-control\" id=\"price_kid_add\" name=\"price_kid_add\" style=\"border: 2px solid rgb(132, 132, 132);padding: 0px\" >
\t\t\t\t\t<option value=\"0\">";
        // line 11
        echo twig_escape_filter($this->env, translate("Mức giảm"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 13
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "%</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t<select class=\"form-control\" style=\"border: 2px solid rgb(132, 132, 132);\" id=\"from_age\" name=\"from_age\">
\t\t\t\t\t<option value=\"0\">";
        // line 19
        echo twig_escape_filter($this->env, translate("Tuổi từ"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 21
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, translate("tuổi"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t<select class=\"form-control\" style=\"border: 2px solid rgb(132, 132, 132);\" id=\"to_age\" name=\"to_age\">
\t\t\t\t\t<option value=\"0\">";
        // line 27
        echo twig_escape_filter($this->env, translate("đến tuổi"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 29
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, translate("tuổi"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 col-sm-5 col-xs-5 \">
\t            <a class=\"btn btn_orange save\" id=\"add_new_price_kid\">";
        // line 34
        echo twig_escape_filter($this->env, translate("Lưu"), "html", null, true);
        echo "</a>
\t      \t</div>
\t      </div>
\t</div>
\t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tour_price_kid_item"]) ? $context["tour_price_kid_item"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 39
            echo "  \t<div class=\"row box_1x\" id=\"item_coo_price_kid-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">
  \t\t<div class=\"col-md-12 col-sm-6\">
\t\t\t<div class=\"col-md-2 col-sm-6 col-xs-6\">
\t\t\t\t<select class=\"form-control\" id=\"price_kid_add_new\" name=\"price_kid_add_new\" data-id=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 44
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
                if (((isset($context["value"]) ? $context["value"] : null) == $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getDiscount"))) {
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
            // line 46
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t<select class=\"form-control\"  id=\"from_age_add_new\" name=\"from_age_add_new\" data-id=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 51
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
                if (((isset($context["value"]) ? $context["value"] : null) == $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getFromAge"))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, translate("tuổi"), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 53
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t<select class=\"form-control\"  id=\"to_age_add_new\" name=\"to_age_add_new\" data-id=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">
\t\t\t\t\t<option value=\"0\">";
            // line 57
            echo twig_escape_filter($this->env, translate("đến tuổi"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 59
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"  ";
                if (((isset($context["value"]) ? $context["value"] : null) == $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getToAge"))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, translate("tuổi"), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 61
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-2 col-sm-5 col-xs-5 \">
\t           <a class=\"btn btn_orange_outline save delete_price_kid_add_new\"  id=\"delete_price_kid_add_new-";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate("Xóa"), "html", null, true);
            echo "</a>
\t      \t</div>
\t      </div>
\t</div>
  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 69
        echo "\t<!-- <div class=\"col-md-12 col-sm-6\">
\t<div class=\"col-md-6 col-sm-6 col-xs-6\">
\t\t<input type=\"text\" class=\"form-control\"  name=\"description_price_kid_new_add\" data-id=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
        echo "\" id=\"description_price_kid_new_add\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getDescription"), "html", null, true);
        echo "\"/>
\t</div>
\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t<div class=\"input-group\">
\t\t\t<input type=\"text\" class=\"form-control\" name=\"price_kid_add_new\" id=\"price_kid_add_new\" data-id=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getPrice"), "html", null, true);
        echo "\"/>
\t\t\t<span class=\"input-group-addon\">VNĐ</span>
\t\t</div>
\t</div>
    <div class=\"col-md-2 col-sm-2 col-xs-2\">
    \t<a class=\"btn btn_orange_outline save delete_price_kid_add_new\"  id=\"delete_price_kid_add_new-";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
        echo "\">Xóa</a>
    </div>
  </div> -->
</div>";
    }

    public function getTemplateName()
    {
        return "_creat_trip_step3_other_price_child_price.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 80,  246 => 75,  237 => 71,  233 => 69,  220 => 64,  215 => 61,  198 => 59,  194 => 58,  190 => 57,  186 => 56,  181 => 53,  164 => 51,  160 => 50,  156 => 49,  151 => 46,  136 => 44,  132 => 43,  128 => 42,  121 => 39,  117 => 38,  110 => 34,  105 => 31,  92 => 29,  88 => 28,  84 => 27,  78 => 23,  65 => 21,  61 => 20,  57 => 19,  51 => 15,  40 => 13,  36 => 12,  32 => 11,  21 => 3,  17 => 1,);
    }
}

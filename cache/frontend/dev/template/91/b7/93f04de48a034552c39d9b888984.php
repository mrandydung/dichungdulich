<?php

/* _creat_trip_step1_weekly_start.html */
class __TwigTemplate_91b793f04de48a034552c39d9b888984 extends Twig_Template
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
        echo "<div id=\"weekly_start_time\" style=\"display: none\" >
    <div class=\"row padding_top\" >
        <div class=\"col-md-12\">
            <p>";
        // line 4
        echo twig_escape_filter($this->env, translate("Khởi hành vào"), "html", null, true);
        echo ":</p>
        </div>
        <div class=\"col-md-1\">
            <div data-toggle=\"buttons\">
                <label class=\"btn btn_blue_outline\" id=\"label_checkbox_week_1\">
                    <input type=\"checkbox\" autocomplete=\"off\" value=\"1\" class=\"checkbox_week\" id=\"checkbox_week_1\"> ";
        // line 9
        echo twig_escape_filter($this->env, translate("CN"), "html", null, true);
        echo "
                </label>
            </div>
        </div>
        <div class=\"col-md-1\">
            <div data-toggle=\"buttons\">
                <label class=\"btn btn_blue_outline\" id=\"label_checkbox_week_2\">
                    <input type=\"checkbox\" autocomplete=\"off\" value=\"2\" class=\"checkbox_week\" id=\"checkbox_week_2\">  ";
        // line 16
        echo twig_escape_filter($this->env, translate("T2"), "html", null, true);
        echo "
                </label>
            </div>
        </div>
        <div class=\"col-md-1\">
            <div data-toggle=\"buttons\">
                <label class=\"btn btn_blue_outline\" id=\"label_checkbox_week_3\">
                    <input type=\"checkbox\" autocomplete=\"off\" value=\"3\" class=\"checkbox_week\" id=\"checkbox_week_3\">  ";
        // line 23
        echo twig_escape_filter($this->env, translate("T3"), "html", null, true);
        echo "
                </label>
            </div>
        </div>
        <div class=\"col-md-1\">
            <div data-toggle=\"buttons\">
                <label class=\"btn btn_blue_outline\" id=\"label_checkbox_week_4\">
                    <input type=\"checkbox\" autocomplete=\"off\" value=\"4\" class=\"checkbox_week\" id=\"checkbox_week_4\"> ";
        // line 30
        echo twig_escape_filter($this->env, translate("T4"), "html", null, true);
        echo "
                </label>
            </div>
        </div>
        <div class=\"col-md-1\">
            <div data-toggle=\"buttons\">
                <label class=\"btn btn_blue_outline\" id=\"label_checkbox_week_5\">
                    <input type=\"checkbox\" autocomplete=\"off\" value=\"5\" class=\"checkbox_week\" id=\"checkbox_week_5\">  ";
        // line 37
        echo twig_escape_filter($this->env, translate("T5"), "html", null, true);
        echo "
                </label>
            </div>
        </div>
        <div class=\"col-md-1\">
            <div data-toggle=\"buttons\">
                <label class=\"btn btn_blue_outline\" id=\"label_checkbox_week_6\">
                    <input type=\"checkbox\" autocomplete=\"off\" value=\"6\" class=\"checkbox_week\" id=\"checkbox_week_6\">  ";
        // line 44
        echo twig_escape_filter($this->env, translate("T6"), "html", null, true);
        echo "
                </label>
            </div>
        </div>
        <div class=\"col-md-1\">
            <div data-toggle=\"buttons\">
                <label class=\"btn btn_blue_outline\" id=\"label_checkbox_week_7\">
                    <input type=\"checkbox\" autocomplete=\"off\" value=\"7\" class=\"checkbox_week\" id=\"checkbox_week_7\">  ";
        // line 51
        echo twig_escape_filter($this->env, translate("T7"), "html", null, true);
        echo "
                </label>
            </div>
        </div>
    </div>
    <div class=\"row padding_top\">
        <div class=\"col-md-3\">
            <select class=\"form-control hour_\" placeholder=\"Giờ đi\" id=\"creat_trip_form_weekly_start_hour\">
             <option value=\"1000\">";
        // line 59
        echo twig_escape_filter($this->env, translate("Chọn giờ đi"), "html", null, true);
        echo "</option>
                ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("HourPeer", "getAll"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 61
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getValue"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName")), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 63
        echo "            </select>
        </div>
        <div class=\"col-md-3\">
            <select class=\"form-control\" id=\"creat_trip_form_weekly_start_time_category_day\">
                <option value=\"0\">";
        // line 67
        echo twig_escape_filter($this->env, translate("Tour kéo dài"), "html", null, true);
        echo "</option>
                ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("TourTimeCategoryDayPeer", "getAll"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 69
            echo "                 <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getVal"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getShowName"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 71
        echo "            </select>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_creat_trip_step1_weekly_start.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 71,  134 => 69,  130 => 68,  126 => 67,  120 => 63,  109 => 61,  105 => 60,  101 => 59,  90 => 51,  80 => 44,  70 => 37,  60 => 30,  50 => 23,  40 => 16,  30 => 9,  22 => 4,  17 => 1,);
    }
}

<?php

/* _creat_trip_step1_daily_start.html */
class __TwigTemplate_b5eb7edef291f474f74701f12bae8295 extends Twig_Template
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
        echo "<div class=\"row padding_top\" style=\"display:none\" id=\"daily_start_time\">
\t<div class=\"col-md-3\">
\t\t<select class=\"form-control hour_\" placeholder=\"";
        // line 3
        echo twig_escape_filter($this->env, translate("Giờ đi"), "html", null, true);
        echo "\" name=\"creat_trip_form_daily_start[hour]\"  id=\"creat_trip_form_daily_start_hour\">
       <option value=\"1000\">";
        // line 4
        echo twig_escape_filter($this->env, translate("Chọn giờ đi"), "html", null, true);
        echo "</option>
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("HourPeer", "getAll"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 6
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getValue"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName")), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "        </select>
    </div>
    <div class=\"col-md-3\">
        <select class=\"form-control\" name=\"creat_trip_form_daily_start[day_long]\"  id=\"creat_trip_form_daily_start_day_long\">
            <option value=\"0\">";
        // line 12
        echo twig_escape_filter($this->env, translate("Tour kéo dài"), "html", null, true);
        echo "</option>
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("TourTimeCategoryDayPeer", "getAll"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 14
            echo "             <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getVal"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getShowName"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "        </select>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_creat_trip_step1_daily_start.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  58 => 14,  54 => 13,  50 => 12,  44 => 8,  33 => 6,  29 => 5,  25 => 4,  21 => 3,  17 => 1,);
    }
}

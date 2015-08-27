<?php

/* _creat_trip_step1_fix_start.html */
class __TwigTemplate_d7d9d67690c5aa7edb39dda8e0c29301 extends Twig_Template
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
        echo "<div class=\"row padding_top\" id=\"fix_start_time\" style=\"display: none\">
    <div class=\"col-md-3\">
        <input class=\"form-control time_\" placeholder=\"";
        // line 3
        echo twig_escape_filter($this->env, translate("Ngày bắt đầu"), "html", null, true);
        echo "\" name=\"creat_trip_form_fix_start[start_date]\"  id=\"creat_trip_form_fix_start_start_date\"/>
    </div>
    <div class=\"col-md-3\">
        <input class=\"form-control time_\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, translate("Ngày kết thúc"), "html", null, true);
        echo "\" name=\"creat_trip_form_fix_start[end_date]\"  id=\"creat_trip_form_fix_start_end_date\">
    </div>
    <div class=\"col-md-3\">
        <select class=\"form-control hour_\" name=\"creat_trip_form_fix_start[start_hour]\"  id=\"creat_trip_form_fix_start_start_hour\">
        <option value=\"1000\">";
        // line 10
        echo twig_escape_filter($this->env, translate("Chọn giờ đi"), "html", null, true);
        echo "</option>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("HourPeer", "getAll"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 12
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
        // line 14
        echo "        </select>
    </div>
</div> ";
    }

    public function getTemplateName()
    {
        return "_creat_trip_step1_fix_start.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  42 => 12,  38 => 11,  34 => 10,  27 => 6,  21 => 3,  17 => 1,);
    }
}

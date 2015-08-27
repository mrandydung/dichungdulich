<?php

/* _utilities.html */
class __TwigTemplate_a4f685a5cd6867fbaecb5d89de16d873 extends Twig_Template
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
        echo "<div class=\"success\" id=\"popup_success_utilities\" style=\"display: none\"></div>
<div class=\"error\" id=\"popup_error_utilities\" style=\"display: none\"></div>
<div class=\"row box_1x\">
\t<div class=\"col-md-12\">
\t\t<p class=\"hightlight\">";
        // line 5
        echo twig_escape_filter($this->env, translate("Đối tượng phù hợp"), "html", null, true);
        echo ": <span class=\"red\">(*)</span></p>
\t</div>
\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("TourObjectFitPeer", "getAll"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 8
            echo "\t<div class=\"col-md-3\"><input type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" id=\"ad_Checkbox_object_fit";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" class=\"ads_Checkbox_object_fit\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getShowName"), "html", null, true);
            echo "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "</div>
<div class=\"row box_1x\">
\t";
        // line 12
        echo get_partial("trip_manager_personal/check_radio_utilities");
        echo "
\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("TourUtilitiesPeer", "getAll"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 14
            echo "\t<div class=\"col-md-3\"><input type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" id=\"ad_Checkbox";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" class=\"ads_Checkbox\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getShowName"), "html", null, true);
            echo "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "</div>
<div class=\"row box_1x\">
\t<div class=\"col-md-12\">
\t\t<p class=\"hightlight\">";
        // line 19
        echo twig_escape_filter($this->env, translate("Phân loại"), "html", null, true);
        echo ":</p>
\t</div>
\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("TourSortingPeer", "getAll"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 22
            echo "\t<div class=\"col-md-3\"><input type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" id=\"ad_Checkbox_sorting";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" class=\"ads_Checkbox_sorting\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getShowName"), "html", null, true);
            echo "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "</div>
<div class=\"row box_1x\">
\t<div class=\"col-md-12\">
\t\t<p class=\"hightlight\">";
        // line 27
        echo twig_escape_filter($this->env, translate("Hoạt động chính"), "html", null, true);
        echo ":</p>
\t</div>
\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("TourActivitiesPeer", "getAll"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 30
            echo "\t<div class=\"col-md-3\"><input type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" id=\"ad_Checkbox_activities";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" class=\"ads_Checkbox_activities\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getShowName"), "html", null, true);
            echo "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "</div>

<div class=\"row box_2x\">
\t<div class=\"col-md-offset-8 col-md-4\">
\t\t<a class=\"btn btn_orange\" id=\"update_utilities\">";
        // line 36
        echo twig_escape_filter($this->env, translate("Cập nhật"), "html", null, true);
        echo "</a>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "_utilities.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 36,  132 => 32,  117 => 30,  113 => 29,  108 => 27,  103 => 24,  88 => 22,  84 => 21,  79 => 19,  74 => 16,  59 => 14,  55 => 13,  51 => 12,  47 => 10,  32 => 8,  28 => 7,  23 => 5,  17 => 1,);
    }
}

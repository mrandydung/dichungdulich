<?php

/* _creat_trip_step1_request.html */
class __TwigTemplate_043af4a2ae4d337cf20c906cf3b5ba30 extends Twig_Template
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
        echo "<div  style=\"display:none\" id=\"request_start_time\">
    <div class=\"row padding_top\">
        <div class=\"col-md-4\">
            <select class=\"form-control\" name=\"select_date_request_service_day_long\"  id=\"select_date_request_service_day_long\">
                <option value=\"0\">";
        // line 5
        echo twig_escape_filter($this->env, translate("Tour kéo dài"), "html", null, true);
        echo "</option>
                ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("TourTimeCategoryDayPeer", "getAll"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 7
            echo "                 <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getVal"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getShowName")), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "            </select>
        </div>
         <div class=\"col-md-4 col-sm-3 \">
            <input readonly style=\"border: 2px solid rgb(132, 132, 132);cursor: -webkit-grab;background-color: white\" class=\"form-control time_\" name=\"request_day_start_date\" id=\"request_day_start_date\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, translate("Chọn ngày khởi hành"), "html", null, true);
        echo " \">
        </div>
        <div class=\"col-md-2 col-sm-3 col-xs-3 \">
            <a class=\"btn btn_orange save\" id=\"add_new_date_request_service\">";
        // line 15
        echo twig_escape_filter($this->env, translate("Lưu"), "html", null, true);
        echo "</a>
        </div>
    </div>
    <div class=\"row padding_top\" id=\"div_new_date_request_service\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("TourDateRequestServicePeer", "get_date_request_tour", array("tour_id" => $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getId"))));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 20
            echo "        <div id=\"item_new_date_request_service-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">
            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                <input readonly class=\"form-control time_\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getDate"), "d-m-Y"), "html", null, true);
            echo "\"/>
            </div>
            <div class=\"col-md-1 col-sm-5 col-xs-5 \">
               <a class=\"btn btn_orange_outline save delete_request_day_start_date_add_new\" id=\"delete_request_day_start_date_add_new-";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate("Xóa"), "html", null, true);
            echo "</a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_creat_trip_step1_request.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  76 => 25,  70 => 22,  64 => 20,  60 => 19,  53 => 15,  47 => 12,  42 => 9,  31 => 7,  27 => 6,  23 => 5,  17 => 1,);
    }
}

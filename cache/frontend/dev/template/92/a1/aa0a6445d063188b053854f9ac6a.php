<?php

/* _index_body_booking_form_1.html */
class __TwigTemplate_92a1aa0a6445d063188b053854f9ac6a extends Twig_Template
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
        echo "<link href=\"/css/jqueryui/css/redmond/jquery-ui-1.8.16.custom.css?v=";
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script src=\"/js/jquery-ui.js?v=";
        // line 2
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"/js/datepicker-vi.js?v=";
        // line 3
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/assets/js/typeahead.min.js?v=";
        // line 4
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/assets/dichungdulich/js/form_search.js?v=";
        // line 5
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<form method=\"GET\" action=\"";
        // line 6
        if ($this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn")) {
            echo twig_escape_filter($this->env, url_for("@findTour_en"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@findTour"), "html", null, true);
        }
        echo "\">
    <div class=\"row\">
        <div class=\"col-md-4\">
            <input class=\"form-control_2 diemdi\" placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, translate("Chọn điểm đi"), "html", null, true);
        echo "\" name=\"booking_form[pick_address]\"  id=\"booking_form_pick_address\" value=\"";
        if ((isset($context["pick_address"]) ? $context["pick_address"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["pick_address"]) ? $context["pick_address"] : null), "html", null, true);
            echo " ";
        }
        echo "\" />
        </div>
        <div class=\"col-md-4\">
            <input class=\"form-control_2 diemden\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, translate("Chọn điểm đến"), "html", null, true);
        echo "\" name=\"booking_form[to_address]\"  id=\"booking_form_to_address\" value=\"";
        if ((isset($context["to_address"]) ? $context["to_address"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["to_address"]) ? $context["to_address"] : null), "html", null, true);
        }
        echo "\" />
        </div>
        <div class=\"col-md-2\">
            <input  class=\"form-control_2 time\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, translate("Ngày khởi hành"), "html", null, true);
        echo "\" name=\"booking_form[start_date]\"  id=\"booking_form_start_date\" value=\"";
        if ((isset($context["start_date"]) ? $context["start_date"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["start_date"]) ? $context["start_date"] : null), "html", null, true);
        }
        echo "\" />
        </div>
        <div class=\"col-md-2\">
            <button type=\"submit\" class=\"timkiem_btn\">";
        // line 18
        echo twig_escape_filter($this->env, translate("Tìm kiếm"), "html", null, true);
        echo "</button>
        </div>
        <input type=\"hidden\" id=\"coo_start\" name=\"coo_start\" value=\"";
        // line 20
        if ((isset($context["coo_start"]) ? $context["coo_start"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["coo_start"]) ? $context["coo_start"] : null), "html", null, true);
        }
        echo "\" />
        <input type=\"hidden\" id=\"coo_end\" name=\"coo_end\" value=\"";
        // line 21
        if ((isset($context["coo_end"]) ? $context["coo_end"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["coo_end"]) ? $context["coo_end"] : null), "html", null, true);
        }
        echo "\"></input>
    </div>
</form>
<script src=\"/js/map/jquery.geocomplete.js?v=";
        // line 24
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"/js/jsapi.js?v=";
        // line 25
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"/js/map/map_funcs.js?v=";
        // line 26
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "_index_body_booking_form_1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  102 => 25,  98 => 24,  90 => 21,  84 => 20,  79 => 18,  69 => 15,  59 => 12,  48 => 9,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  17 => 1,);
    }
}

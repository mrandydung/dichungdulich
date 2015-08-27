<?php

/* _creat_trip_step3_price.html */
class __TwigTemplate_c9a3abd32cbf21ffdba94426001fb381 extends Twig_Template
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
        echo "<div class=\"col-md-12 col-sm-6\">
    <div class=\"row\">      
        <div class=\"col-md-3 col-sm-3\">
            <div class=\"col-md-12 padding_top\">
                <p class=\"hightlight\">";
        // line 5
        echo twig_escape_filter($this->env, translate("Cách tính giá"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-12 col-sm-6\">
                <select class=\"form-control\" id=\"type_pricing_service_id\">
                    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("TypePricingServicePeer", "getAll"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 10
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTypePricingServiceId") == $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"))) {
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
        // line 12
        echo "                </select>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
                <div class=\"col-md-12 padding_top\">
                    <p class=\"hightlight\">";
        // line 17
        echo twig_escape_filter($this->env, translate("Giá/khách"), "html", null, true);
        echo "<span class=\"red\">(*)</span></p>
                </div>

            <div class=\"col-md-12 col-sm-6\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" id=\"price_tour\" ";
        // line 22
        if (($this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getTypePricingServiceId") == "1")) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getPrice"), "html", null, true);
            echo "\" ";
        } else {
            echo "value=\"Thỏa thuận\" disabled ";
        }
        echo ">
                    <span class=\"input-group-addon\">VNĐ</span>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"col-md-12 padding_top\">
                <p class=\"hightlight\">";
        // line 29
        echo twig_escape_filter($this->env, translate("Số khách tối thiểu"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-12 col-sm-6\">
               <select class=\"form-control\" id=\"number_seat_min_tour\">
                ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 34
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getNumberSeatMin") == (isset($context["val"]) ? $context["val"] : null))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "
            </select>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
            <div class=\"col-md-12 padding_top\">
                <p class=\"hightlight\">";
        // line 42
        echo twig_escape_filter($this->env, translate("Số khách tối đa"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col-md-12 col-sm-6\">
               <select class=\"form-control\" id=\"number_seat_tour\">
                <option value=\"1000\">";
        // line 46
        echo twig_escape_filter($this->env, translate("Không giới hạn"), "html", null, true);
        echo "</option>
                ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 48
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "                <option value=\"35\">35</option>
                <option value=\"40\">40</option>
                <option value=\"45\">45</option>
                <option value=\"50\">50</option>
                <option value=\"100\">100</option>
                <option value=\"150\">150</option>
                <option value=\"200\">200</option>
                <option value=\"300\">300</option>
                <option value=\"400\">400</option>
                <option value=\"500\">500</option>
            </select>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_creat_trip_step3_price.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 50,  129 => 48,  125 => 47,  121 => 46,  114 => 42,  106 => 36,  91 => 34,  87 => 33,  80 => 29,  64 => 22,  56 => 17,  49 => 12,  34 => 10,  30 => 9,  23 => 5,  17 => 1,);
    }
}

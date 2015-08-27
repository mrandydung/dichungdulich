<?php

/* _index_body_parter.html */
class __TwigTemplate_95a7a93f7ae0e54cba330c936c7547c2 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/dichungdulich/css/css_jsor.css?v=";
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\">
<script type=\"text/javascript\" src=\"/assets/dichungdulich/js/jssor.core.js?v=";
        // line 2
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/assets/dichungdulich/js/jssor.slider.js?v=";
        // line 3
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/assets/dichungdulich/js/jssor.utils.js?v=";
        // line 4
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/assets/dichungdulich/js/slide_partner.js?v=";
        // line 5
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<div class=\"gray_bg box_2x\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <h3>";
        // line 10
        echo twig_escape_filter($this->env, translate("Đối tác của chúng tôi"), "html", null, true);
        echo "</h3>\t\t\t\t\t
            </div>
            <div class=\"col-md-12\">
                <!-- Jssor Slider Begin -->
                <!-- You can move inline styles to css file or css block. -->
                <div id=\"slider1_container\" style=\"position: relative; top: 0px; left: 0px; width: 990px; height: 75px; overflow: hidden;\">
                    <!-- Loading Screen -->
                    <div u=\"loading\" style=\"position: absolute; top: 0px; left: 0px;\">
                        <div style=\"filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                             background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;\">
                        </div>
                        <div style=\"position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                             top: 0px; left: 0px;width: 100%;height:100%;\">
                        </div>
                    </div>

                    <!-- Slides Container -->
                    <div u=\"slides\" style=\"cursor: move; position: absolute; left: 0px; top: 0px; width: 990px; height: 75px; overflow: hidden;\">
                        <div><img u=\"image\" src=\"/img/parter/apttravel.png\" /></div>
                        <div><img u=\"image\" src=\"/img/parter/cbttravel.png\" /></div>
                        <div><img u=\"image\" src=\"/img/parter/cholon.png\" /></div>
                        <div><img u=\"image\" src=\"/img/parter/ivivucom.png\" /></div>
                        <div><img u=\"image\" src=\"/img/parter/khac.png\" /></div>
                        <div><img u=\"image\" src=\"/img/parter/mytour.png\" /></div>
                        <div><img u=\"image\" src=\"/img/parter/pystravel.png\" /></div>
                        <div><img u=\"image\" src=\"/img/parter/saigontourist.png\" /></div>
                        <div><img u=\"image\" src=\"/img/parter/touristone.png\" /></div>
                        <div><img u=\"image\" src=\"/img/parter/trippy.png\" /></div>
                        <div><img u=\"image\" src=\"/img/parter/humanitours.png\" /></div>
                        <div><img u=\"image\" src=\"/img/parter/viettravel.png\" /></div>
                    </div>
                    <!-- Arrow Left -->
                    <span u=\"arrowleft\" class=\"jssora03l\" style=\"width: 23px; height: 23px; top: 6px; left: 8px;\">
                    </span>
                    <!-- Arrow Right -->
                    <span u=\"arrowright\" class=\"jssora03r\" style=\"width: 23px; height: 23px; top: 6px; right: 8px\">
                    </span>
                    <!-- Arrow Navigator Skin End -->
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_index_body_parter.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  17 => 1,);
    }
}

<?php

/* _index_body_tour_list_subsite.html */
class __TwigTemplate_f4f2dd046468f2fa7f5aecc04622137d extends Twig_Template
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
        echo "<style>
    #carousel_tour_partner .carousel-inner .active.left { left: -33%; }
    #experience_carosel .carousel-inner .active.left { left: -33%; }
    #home_diem_den_item_partner .carousel-inner .active.left { left: -33%; }
    .carousel-inner .next        { left:  33%; }
    .carousel-inner .prev        { left: -33%; }
    .carousel-control.left,.carousel-control.right {background-image:none;}
    .item:not(.prev) {visibility: visible;}
    .item.right:not(.prev) {visibility: hidden;}
    .rightest{ visibility: visible;}
</style>
<script>
    \$(document).ready(function () {
        \$(' .item').each(function () {
            var next = \$(this).next();
            if (!next.length) {
                next = \$(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo(\$(this));

            if (next.next().length > 0) {

                next.next().children(':first-child').clone().appendTo(\$(this)).addClass('rightest');

            }
            else {
                \$(this).siblings(':first').children(':first-child').clone().appendTo(\$(this));

            }
        });
    });
</script>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\" style=\"padding-bottom:10px\">
             <a class=\"h3 t1\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, url_for("@findTour"), "html", null, true);
        echo "\" id=\"click_tour_noi_bat\">";
        echo twig_escape_filter($this->env, translate("Tour nổi bật"), "html", null, true);
        echo "
                 <small><span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"> </span></small>
             </a>
         </div>
        <div class=\"carousel slide \" id=\"carousel_tour_partner\" >
            <div class=\"carousel-inner\">
                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tour_on_homepage"]) ? $context["tour_on_homepage"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 43
            echo "                <div class=\"item ";
            if ((!(isset($context["key"]) ? $context["key"] : null))) {
                echo "active";
            }
            echo "\">
                    <div class=\"col-lg-4 col-xs-12 col-md-4 col-sm-12\">
                    <div class=\"col-md-12\" style=\"padding-left: 0px;padding-right: 0px\">
                 <div class=\"tour\">
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "url", array(), "array"), "html", null, true);
            echo "\">
                      <div class=\"tour_ava\">
                          <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "img_thumb", array(), "array"), "html", null, true);
            echo "\" width=\"100%\">
                          <div class=\"tour_name\">
                              <p class=\"name\" style=\"font-size: 13px;\">";
            // line 51
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "title", array(), "array"), 0, 38), "html", null, true);
            echo "</p>
                              <p class=\"time\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "time_category_day", array(), "array"), "html", null, true);
            echo "</p>
                              ";
            // line 53
            if (($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "number_seat", array(), "array") == "1000")) {
                // line 54
                echo "                              <p class=\"cho\">";
                echo twig_escape_filter($this->env, translate("Không giới hạn chỗ"), "html", null, true);
                echo "</p>
                              ";
            } else {
                // line 56
                echo "                              <p class=\"cho\">";
                echo twig_escape_filter($this->env, translate("Còn"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "number_seat", array(), "array") - $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "number_seat_booking", array(), "array")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "number_seat", array(), "array"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, translate("chỗ"), "html", null, true);
                echo "</p>
                              ";
            }
            // line 58
            echo "                          </div>
                      </div>
                    </a>
                    <div class=\"tour_user\">
                        <div class=\"user_ava\">
                            <img src=\"http://gheptour.vn/thumbnail/index.php?src=http://dichung.vn/";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "avatar", array(), "array"), "html", null, true);
            echo "&w=58&h=60&q=100\"/>
                        </div>
                        <div class=\"user_name\">
                            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "url_user", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "fullname", array(), "array"), "html", null, true);
            echo "</a>
                            <p><div class=\"rating mg-b-10 fl-l\" data-value=\"5\"><span class=\"star-img stars-5\"></span></div></p>
                        </div>
                        <div class=\"tour_gia text-right\">
                            <a>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "price"), "html", null, true);
            echo " </a>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                      ";
            // line 74
            if ($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "discount")) {
                // line 75
                echo "                    <div class=\"sale\">
                        <p class=\"giamgia dai\">";
                // line 76
                echo twig_escape_filter($this->env, translate("Giảm giá"), "html", null, true);
                echo "</p>
                        <p class=\"gia\">";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "discount"), "html", null, true);
                echo "%</p>
                    </div>
                    ";
            }
            // line 80
            echo "                </div>
            </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 85
        echo "
            </div>
            <a class=\"left carousel-control\" href=\"#carousel_tour_partner\" data-slide=\"prev\"><i class=\"glyphicon glyphicon-chevron-left\"></i></a>
            <a class=\"right carousel-control\" href=\"#carousel_tour_partner\" data-slide=\"next\"><i class=\"glyphicon glyphicon-chevron-right\"></i></a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_index_body_tour_list_subsite.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 85,  161 => 80,  155 => 77,  151 => 76,  148 => 75,  146 => 74,  139 => 70,  130 => 66,  124 => 63,  117 => 58,  105 => 56,  99 => 54,  97 => 53,  93 => 52,  89 => 51,  84 => 49,  79 => 47,  69 => 43,  65 => 42,  54 => 36,  17 => 1,);
    }
}

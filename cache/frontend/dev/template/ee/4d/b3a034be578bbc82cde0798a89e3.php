<?php

/* _index_body_area.html */
class __TwigTemplate_ee4db3a034be578bbc82cde0798a89e3 extends Twig_Template
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
        echo "<div class=\"white_bg\">
    <div class=\"container box_3x\">
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"padding-bottom:15px\">
                <a class=\"h3 t1\" href=\"";
        // line 5
        if ($this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn")) {
            echo twig_escape_filter($this->env, url_for("@findTour_en"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@findTour"), "html", null, true);
        }
        echo "\" id=\"click_diem_den_pho_bien\">";
        echo twig_escape_filter($this->env, translate("Điểm đến phổ biến"), "html", null, true);
        echo " 
                    <small><span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"> </span></small>
                </a>
            </div>
            <div class=\"col-md-4\">
                <div class=\"vung\">
                    <div id=\"mien_bac\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
                        <div class=\"carousel-inner\" role=\"listbox\">
                            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("HomeDiemDenItemPeer", "get_trong_nuoc"));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 14
            echo "                            ";
            if (((isset($context["key"]) ? $context["key"] : null) == "0")) {
                // line 15
                echo "                            <div class=\"item active\">
                                ";
            } else {
                // line 17
                echo "                                <div class=\"item \">
                                    ";
            }
            // line 19
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "get_url_find_tour"), "html", null, true);
            echo "?booking_form%5Bpick_address%5D=&booking_form%5Bto_address%5D=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "&booking_form%5Bstart_date%5D=&coo_start=&coo_end=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getGooglePosition"), "html", null, true);
            echo "\">
                                        <img src=\"http://gheptour.vn/thumbnail/index.php?src=";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getImg"), "html", null, true);
            echo "&w=310&h=220&q=100\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "\" width=\"100%\" />
                                        <h3 class=\"description_vung_du_lich\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "</h3>
                                    </a>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "                            </div>
                            <a class=\"left carousel-control\" href=\"#mien_bac\" role=\"button\" data-slide=\"prev\">
                                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#mien_bac\" role=\"button\" data-slide=\"next\">
                                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"phanvung\"><p><a href=\"";
        // line 36
        if ((!$this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn"))) {
            echo twig_escape_filter($this->env, url_for("@tour_trong_nuoc"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@tour_trong_nuoc_en"), "html", null, true);
        }
        echo "\" class=\"white\" id=\"click_diem_den_trong_nuoc\">";
        echo twig_escape_filter($this->env, translate("Trong nước"), "html", null, true);
        echo "</a></p></div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"vung\">
                        <div id=\"mien_trung\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
                            <div class=\"carousel-inner\" role=\"listbox\">
                                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("HomeDiemDenItemPeer", "get_quoc_te"));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 43
            echo "                                ";
            if (((isset($context["key"]) ? $context["key"] : null) == "0")) {
                // line 44
                echo "                                <div class=\"item active\">
                                    ";
            } else {
                // line 46
                echo "                                    <div class=\"item \">
                                        ";
            }
            // line 48
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "get_url_find_tour"), "html", null, true);
            echo "?booking_form%5Bpick_address%5D=&booking_form%5Bto_address%5D=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "&booking_form%5Bstart_date%5D=&coo_start=&coo_end=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getGooglePosition"), "html", null, true);
            echo "\">
                                            <img src=\"http://gheptour.vn/thumbnail/index.php?src=";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getImg"), "html", null, true);
            echo "&w=310&h=220&q=100\" width=\"100%\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "\"/>
                                            <h3 class=\"description_vung_du_lich\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "</h3>
                                        </a>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 54
        echo "                                </div>
                                <a class=\"left carousel-control\" href=\"#mien_trung\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                                <a class=\"right carousel-control\" href=\"#mien_trung\" role=\"button\" data-slide=\"next\">
                                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class=\"phanvung\"><p><a href=\"";
        // line 65
        if ((!$this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn"))) {
            echo twig_escape_filter($this->env, url_for("@tour_quoc_te"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@tour_quoc_te_en"), "html", null, true);
        }
        echo "\" class=\"white\" id=\"click_diem_den_quoc_te\">";
        echo twig_escape_filter($this->env, translate("Quốc tế"), "html", null, true);
        echo "</a></p></div>
                    </div> 
                    <div class=\"col-md-4\">
                        <div class=\"vung\">
                            <div id=\"mien_nam\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\">
                                <div class=\"carousel-inner\" role=\"listbox\">
                                    ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("HomeDiemDenItemPeer", "get_moi_noi"));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 72
            echo "                                    ";
            if (((isset($context["key"]) ? $context["key"] : null) == "0")) {
                // line 73
                echo "                                    <div class=\"item active\">
                                        ";
            } else {
                // line 75
                echo "                                        <div class=\"item \">
                                            ";
            }
            // line 77
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "get_url_find_tour"), "html", null, true);
            echo "?booking_form%5Bpick_address%5D=&booking_form%5Bto_address%5D=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "&booking_form%5Bstart_date%5D=&coo_start=&coo_end=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getGooglePosition"), "html", null, true);
            echo "\">
                                                <img src=\"http://gheptour.vn/thumbnail/index.php?src=";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getImg"), "html", null, true);
            echo "&w=310&h=220&q=100\" width=\"100%\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "\"/>
                                                <h3 class=\"description_vung_du_lich\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "</h3>
                                            </a>
                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 83
        echo "                                    </div>
                                    <a class=\"left carousel-control\" href=\"#mien_nam\" role=\"button\" data-slide=\"prev\">
                                        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                        <span class=\"sr-only\">Previous</span>
                                    </a>
                                    <a class=\"right carousel-control\" href=\"#mien_nam\" role=\"button\" data-slide=\"next\">
                                        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                        <span class=\"sr-only\">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"phanvung\"><p><a href=\"";
        // line 94
        if ((!$this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn"))) {
            echo twig_escape_filter($this->env, url_for("@tour_moi_noi"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@tour_moi_noi_en"), "html", null, true);
        }
        echo "\" class=\"white\" id=\"click_diem_den_moi_noi\">";
        echo twig_escape_filter($this->env, translate("Mới nổi"), "html", null, true);
        echo "</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_index_body_area.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 94,  216 => 83,  206 => 79,  200 => 78,  191 => 77,  187 => 75,  183 => 73,  180 => 72,  176 => 71,  161 => 65,  148 => 54,  138 => 50,  132 => 49,  123 => 48,  119 => 46,  115 => 44,  112 => 43,  108 => 42,  93 => 36,  80 => 25,  70 => 21,  64 => 20,  55 => 19,  51 => 17,  47 => 15,  44 => 14,  40 => 13,  23 => 5,  17 => 1,);
    }
}

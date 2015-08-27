<?php

/* _index_body_area_subsite.html */
class __TwigTemplate_5b2564036634289b3edc21ddc1517b14 extends Twig_Template
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
        if (twig_length_filter($this->env, StaticCall("HomeDiemDenItemPartnerPeer", "get_on_home_page"))) {
            // line 2
            echo "<div class=\"white_bg\">
    <div class=\"container box_3x\">
       <div class=\"row\">
          <div class=\"col-md-12\" style=\"padding-bottom:15px\">
             <a class=\"h3 t1\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, url_for("@findTour"), "html", null, true);
            echo "\" id=\"click_diem_den_pho_bien\">";
            echo twig_escape_filter($this->env, translate("Điểm đến phổ biến"), "html", null, true);
            echo " 
             <small><span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"> </span></small>
             </a>
          </div>
          <div  class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"false\" id=\"home_diem_den_item_partner\">
             <div class=\"carousel-inner\" role=\"listbox\">
                ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(StaticCall("HomeDiemDenItemPartnerPeer", "get_on_home_page"));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 13
                echo "                <div class=\"item ";
                if ((!(isset($context["key"]) ? $context["key"] : null))) {
                    echo "active";
                }
                echo "\">
                   <div class=\"col-lg-4 col-xs-12 col-md-4 col-sm-12\">
                      <div class=\"vung\">
                         <a href=\"/tim-kiem-tour/trang/1?booking_form%5Bpick_address%5D=&booking_form%5Bto_address%5D=";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
                echo "&booking_form%5Bstart_date%5D=&coo_start=&coo_end=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getGooglePosition"), "html", null, true);
                echo "\">
                            <img src=\"http://";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "host"), "html", null, true);
                echo "/thumbnail/index.php?src=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getImg"), "html", null, true);
                echo "&w=310&h=220&q=100\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
                echo "\" width=\"100%\" />
                            <h3 class=\"description_vung_du_lich\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
                echo "</h3>
                         </a>
                      </div>
                   </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 24
            echo "             </div>
             <a class=\"left carousel-control\" href=\"#home_diem_den_item_partner\" role=\"button\" data-slide=\"prev\">
             <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
             <span class=\"sr-only\">Previous</span>
             </a>
             <a class=\"right carousel-control\" href=\"#home_diem_den_item_partner\" role=\"button\" data-slide=\"next\">
             <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
             <span class=\"sr-only\">Next</span>
             </a>
          </div>
       </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_index_body_area_subsite.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  63 => 18,  55 => 17,  49 => 16,  40 => 13,  36 => 12,  25 => 6,  19 => 2,  17 => 1,);
    }
}

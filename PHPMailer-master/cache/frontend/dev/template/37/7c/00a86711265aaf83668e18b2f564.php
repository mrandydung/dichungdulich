<?php

/* _index_body_acquirements_partner.html */
class __TwigTemplate_377c00a86711265aaf83668e18b2f564 extends Twig_Template
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
        echo "<link href=\"/assets/dichungdulich/css/find.css?v=";
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
<div class=\" box_3x\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <a class=\"h3 t1\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, url_for("@acquirements"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, translate("Trải nghiệm nổi bật"), "html", null, true);
        echo "
          <small><span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"> </span></small>
        </a>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"carousel slide\" data-ride=\"carousel\" data-type=\"multi\" data-interval=\"false\" id=\"experience_carosel\">
        <div class=\"carousel-inner\">
          ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("TripAcquirementsPeer", "get_on_home_page"));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 15
            echo "          ";
            if (((isset($context["key"]) ? $context["key"] : null) == "0")) {
                // line 16
                echo "          <div class=\"item active\">
            ";
            } else {
                // line 18
                echo "            <div class=\"item\">
              ";
            }
            // line 20
            echo "              <div class=\"col-md-4 box_1x\">
                <div class=\"exp_infor_bg\">
                  <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "url", array(), "array"), "html", null, true);
            echo "\" target=\"_blank\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "images", array(), "array"), "html", null, true);
            echo "\" width=\"100%\"/></a>
                  <div class=\"exp_infor_ava\">
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "url_user", array(), "array"), "html", null, true);
            echo "\" target=\"_blank\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "avatar", array(), "array"), "html", null, true);
            echo "\" class=\"ava\" height=\"50px\"></a>
                  </div>
                  <div class=\"exp_infor_user\">          
                    <p><a class=\"text-uppercase trip\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "url", array(), "array"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "title", array(), "array"), 0, 40), "html", null, true);
            echo "</a></p>
                    <h5><small><span class=\"location\"></span>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "end", array(), "array"), "html", null, true);
            echo "</small></h5>
                    <p class=\"padding_top\"><a class=\"username\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "url_user", array(), "array"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "fullname", array(), "array"), "html", null, true);
            echo "</a></p> 
                  </div>
                  <div class=\"clear\"></div>
                  <div class=\"statistic\">
                    <div class=\"row text-center\">
                      <div class=\"col-md-12 col-sm-4 col-xs-4 text-center\">
                        <h5><img src=\"/img/view_sl.png\"><small> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "count_view", array(), "array"), "html", null, true);
            echo "</small></h5>
                      </div>
                      <div class=\"clear\"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "
          </div>
          <a class=\"left carousel-control\" href=\"#experience_carosel\" data-slide=\"prev\"><i class=\"glyphicon glyphicon-chevron-left\"></i></a>
          <a class=\"right carousel-control\" href=\"#experience_carosel\" data-slide=\"next\"><i class=\"glyphicon glyphicon-chevron-right\"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_index_body_acquirements_partner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  94 => 35,  83 => 29,  79 => 28,  73 => 27,  65 => 24,  58 => 22,  54 => 20,  50 => 18,  46 => 16,  43 => 15,  39 => 14,  26 => 6,  17 => 1,);
    }
}

<?php

/* _index_body_tour_list_tour.html */
class __TwigTemplate_0fa6c8346b2f5e8c4081948c3a305305 extends Twig_Template
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
        echo " <div class=\"col-md-4 padding_top\">
    <div class=\"carousel slide\" data-ride=\"carousel\" data-type=\"multi\" data-interval=\"false\" id=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["meta"]) ? $context["meta"] : null), "html", null, true);
        echo "\">
      <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tour"]) ? $context["tour"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 5
            echo "        ";
            if (((isset($context["key"]) ? $context["key"] : null) == "0")) {
                // line 6
                echo "        <div class=\"item active\">
        ";
            } else {
                // line 8
                echo "         <div class=\"item\">
        ";
            }
            // line 10
            echo "            <div class=\"col-md-12\" style=\"padding-left: 0px;padding-right: 0px\">
                 <div class=\"tour\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "url", array(), "array"), "html", null, true);
            echo "\">
                      <div class=\"tour_ava\">
                          <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "img_thumb", array(), "array"), "html", null, true);
            echo "\" width=\"100%\">
                          <div class=\"tour_name\">
                              <p class=\"name\" style=\"font-size: 13px;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "title", array(), "array"), 0, 38), "html", null, true);
            echo "</p>
                              <p class=\"time\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "time_category_day", array(), "array"), "html", null, true);
            echo "</p>
                              ";
            // line 18
            if (($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "number_seat", array(), "array") == "1 s000")) {
                // line 19
                echo "                              <p class=\"cho\">";
                echo twig_escape_filter($this->env, translate("Không giới hạn chỗ"), "html", null, true);
                echo "</p>
                              ";
            } else {
                // line 21
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
            // line 23
            echo "                          </div>
                      </div>
                    </a>
                    <div class=\"tour_user\">
                        <div class=\"user_ava\">
                            <img src=\"http://gheptour.vn/thumbnail/index.php?src=http://dichung.vn/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "avatar", array(), "array"), "html", null, true);
            echo "&w=58&h=60&q=100\"/>
                        </div>
                        <div class=\"user_name\">
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "url_user", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "fullname", array(), "array"), "html", null, true);
            echo "</a>
                            <p><div class=\"rating mg-b-10 fl-l\" data-value=\"5\"><span class=\"star-img stars-5\"></span></div></p>
                        </div>
                        <div class=\"tour_gia text-right\">
                            <a>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "price"), "html", null, true);
            echo " </a>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                      ";
            // line 39
            if ($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "discount")) {
                // line 40
                echo "                    <div class=\"sale\">
                        <p class=\"giamgia dai\">";
                // line 41
                echo twig_escape_filter($this->env, translate("Giảm giá"), "html", null, true);
                echo "</p>
                        <p class=\"gia\">";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "discount"), "html", null, true);
                echo "%</p>
                    </div>
                    ";
            }
            // line 45
            echo "                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 49
        echo "      </div>
      <a class=\"left carousel-control\" href=\"#";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["meta"]) ? $context["meta"] : null), "html", null, true);
        echo "\" data-slide=\"prev\"><i class=\"glyphicon glyphicon-chevron-left\"></i></a>
      <a class=\"right carousel-control\" href=\"#";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["meta"]) ? $context["meta"] : null), "html", null, true);
        echo "\" data-slide=\"next\"><i class=\"glyphicon glyphicon-chevron-right\"></i></a>
    </div>
    <div class=\"phanvung\" style=\"margin-top: 10px\"><p><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["url_forward"]) ? $context["url_forward"] : null), "html", null, true);
        echo "\" class=\"white\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["meta"]) ? $context["meta"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
        echo "</a></p></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "_index_body_tour_list_tour.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 53,  142 => 51,  138 => 50,  135 => 49,  126 => 45,  120 => 42,  116 => 41,  113 => 40,  111 => 39,  104 => 35,  95 => 31,  89 => 28,  82 => 23,  70 => 21,  64 => 19,  62 => 18,  58 => 17,  54 => 16,  49 => 14,  44 => 12,  40 => 10,  36 => 8,  32 => 6,  29 => 5,  25 => 4,  20 => 2,  17 => 1,);
    }
}

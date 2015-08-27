<?php

/* _user_service_tour.html */
class __TwigTemplate_dce93cf5fb0c32c6f0e843fd2756a822 extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"/assets/dichungdulich/js/user_service.js?v=";
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"/js/jquery-ui.js?v=";
        // line 2
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script src=\"/js/datepicker-vi.js?v=";
        // line 3
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<link href=\"/css/jqueryui/css/redmond/jquery-ui-1.8.16.custom.css?v=";
        // line 4
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tour"]) ? $context["tour"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 6
            echo "<div id=\"content_tour_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "tour_id", array(), "array"), "html", null, true);
            echo "\">
    <div class=\"col-md-12 padding_top\">
        <div class=\"tour\">
            <div class=\"col-md-3\">

                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "url", array(), "array"), "html", null, true);
            echo "\"><img src=\"/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "img", array(), "array"), "html", null, true);
            echo "\" width=\"100%\"></a>
            </div>
            <div class=\" col-md-9 infor\">
                 <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "url", array(), "array"), "html", null, true);
            echo "\"><h4 class=\"t1\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "title", array(), "array"), "html", null, true);
            echo "</h4></a>
                <h6>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "date_start", array(), "array"), "d/m/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "date_end", array(), "array"), "d/m/Y"), "html", null, true);
            echo "</h6>
                <p>";
            // line 16
            echo twig_slice($this->env, strip_tags($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "description", array(), "array"), ""), 0, 200);
            echo " ...</p>
            </div>
            <div class=\"clear\"></div>
            <div class=\"menu\">
                <div class=\"col-md-6 contact\">
                    <table>
                        <tr>
                            <td><p><a  href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "url_manager", array(), "array"), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"edit\"></span>";
            echo twig_escape_filter($this->env, translate("Sửa"), "html", null, true);
            echo "</a></p></td>
                            <td>&#9482</td>
                            <td><p><a id=\"delete_tour-";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "tour_id", array(), "array"), "html", null, true);
            echo "\" class=\"delete_tour\"><span class=\"del\"></span>";
            echo twig_escape_filter($this->env, translate("Xóa"), "html", null, true);
            echo "</a></p></td>
                            <td>&#9482</td>
                            <td><p><a class=\"dublicate_tour\" id=\"dublicate_tour-";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "tour_id", array(), "array"), "html", null, true);
            echo "\"><span class=\"dup\"></span>";
            echo twig_escape_filter($this->env, translate("Nhân đôi"), "html", null, true);
            echo "</a></p></td>
                        </tr>
                    </table>
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
    <div class=\"col-md-12 padding_top\" id=\"div_delete_tour_";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "tour_id", array(), "array"), "html", null, true);
            echo "\" style=\"display: none\">
        <div class=\"alert alert-warning del-alert\" role=\"alert\">
            <div class=\"row\">
                <div class=\"col-md-8 col-sm-8\">
                    <p><span>";
            // line 39
            echo twig_escape_filter($this->env, translate("Bạn muốn xóa chuyến đi"), "html", null, true);
            echo "</span> <span class=\"alert-link\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "title", array(), "array"), "html", null, true);
            echo "</span></p>
                </div>
                <div class=\"col-md-2 col-sm-2 col-xs-6\">
                    <p><a class=\"cancel_delete\" id=\"cancel_delete-";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "tour_id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate("Hủy xóa"), "html", null, true);
            echo "</a></p>
                </div>
                <div class=\"col-md-2 col-sm-2 col-xs-6\">
                    <p><a class=\"submit_delete\" id=\"submit_delete-";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "tour_id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate("Hoàn tất xóa"), "html", null, true);
            echo "</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-12 padding_top\" id=\"div_dublicate_tour_";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "tour_id", array(), "array"), "html", null, true);
            echo "\" style=\"display:none\">
        <div class=\"alert alert-info del-alert\" role=\"alert\">
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4\">
                    <input readonly  class=\"form-control time\" id=\"datepicker_start_dublicate_";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "tour_id", array(), "array"), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, translate("Ngày bắt đầu"), "html", null, true);
            echo "\">
                </div>
    \t\t\t<div class=\"col-md-4 col-sm-4\">
                    <input readonly class=\"form-control time\" id=\"datepicker_end_dublicate_";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "tour_id", array(), "array"), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, translate("Ngày kết thúc"), "html", null, true);
            echo "\">
                </div>
                <div class=\"col-md-2 col-sm-2 col-xs-6\">
                    <p><a class=\"cancel_dublicate\" id=\"cancel_dublicate-";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "tour_id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate("Hủy"), "html", null, true);
            echo "</a></p>
                </div>
                <div class=\"col-md-2 col-sm-2 col-xs-6\">
                    <p><a class=\"submit_dublicate\" id=\"submit_dublicate-";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "tour_id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, translate("Hoàn tất"), "html", null, true);
            echo "</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "_user_service_tour.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 63,  160 => 60,  152 => 57,  144 => 54,  137 => 50,  127 => 45,  119 => 42,  111 => 39,  104 => 35,  91 => 27,  84 => 25,  77 => 23,  67 => 16,  61 => 15,  55 => 14,  47 => 11,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  17 => 1,);
    }
}

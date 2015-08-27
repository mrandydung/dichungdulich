<?php

/* _index_body_tour_list.html */
class __TwigTemplate_2decde197afa24147047308562746d97 extends Twig_Template
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
<div class=\"white_bg\">
    <div class=\"container box_3x\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <a class=\"h3 t1\" href=\"";
        // line 6
        if ($this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn")) {
            echo twig_escape_filter($this->env, url_for("@findTour_en"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@findTour"), "html", null, true);
        }
        echo "\" id=\"click_tour_noi_bat\">";
        echo twig_escape_filter($this->env, translate("Tour nổi bật"), "html", null, true);
        echo "
                    <small><span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"> </span></small>
                </a>
            </div>
        ";
        // line 10
        echo get_partial("index_body_tour_list_tour", array("tour" => (isset($context["tour"]) ? $context["tour"] : null), "tag" => translate("Tìm bạn đi chung"), "meta" => "timbandichung", "url_forward" => (isset($context["url_forward_tour_ca_nhan"]) ? $context["url_forward_tour_ca_nhan"] : null)));
        echo "
        ";
        // line 11
        echo get_partial("index_body_tour_list_tour", array("tour" => (isset($context["tour_cuoi_tuan"]) ? $context["tour_cuoi_tuan"] : null), "tag" => translate("Cuối tuần đi đâu"), "meta" => "cuoituan", "url_forward" => (isset($context["url_forward_tour_cuoi_tuan"]) ? $context["url_forward_tour_cuoi_tuan"] : null)));
        echo "
        ";
        // line 12
        echo get_partial("index_body_tour_list_tour", array("tour" => (isset($context["tour_doc_dao"]) ? $context["tour_doc_dao"] : null), "tag" => translate("Tour độc "), "meta" => "docdao", "url_forward" => (isset($context["url_forward_tour_doc_dao"]) ? $context["url_forward_tour_doc_dao"] : null)));
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_index_body_tour_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  43 => 11,  39 => 10,  26 => 6,  17 => 1,);
    }
}

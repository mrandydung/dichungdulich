<?php

/* indexSuccess.html */
class __TwigTemplate_5b77ab299d74c90a3bb5dd1c83e2d5d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"banner\">
    <header id=\"myCarousel\" class=\"carousel slide\">
        ";
        // line 5
        echo get_partial("home/index_body_slide", array("host" => (isset($context["host"]) ? $context["host"] : null), "images_slide" => (isset($context["images_slide"]) ? $context["images_slide"] : null), "setting_site" => (isset($context["setting_site"]) ? $context["setting_site"] : null)));
        echo "
        <div class=\"timkiem\">  
            ";
        // line 7
        echo get_partial("home/index_body_booking_form_1");
        echo "
        </div>
    </header>
</div>
";
        // line 11
        echo get_partial("home/index_body_slogen", array("setting_site" => (isset($context["setting_site"]) ? $context["setting_site"] : null)));
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["setting_site"]) ? $context["setting_site"] : null), "Partner"), "getTypePartner") == "main")) {
            // line 13
            echo "    ";
            echo get_partial("home/index_body_area");
            echo "
    ";
            // line 14
            echo get_partial("home/index_body_tour_list", array("tour" => (isset($context["tour"]) ? $context["tour"] : null), "tour_cuoi_tuan" => (isset($context["tour_cuoi_tuan"]) ? $context["tour_cuoi_tuan"] : null), "tour_doc_dao" => (isset($context["tour_doc_dao"]) ? $context["tour_doc_dao"] : null), "url_forward_tour_ca_nhan" => (isset($context["url_forward_tour_ca_nhan"]) ? $context["url_forward_tour_ca_nhan"] : null), "url_forward_tour_cuoi_tuan" => (isset($context["url_forward_tour_cuoi_tuan"]) ? $context["url_forward_tour_cuoi_tuan"] : null), "url_forward_tour_doc_dao" => (isset($context["url_forward_tour_doc_dao"]) ? $context["url_forward_tour_doc_dao"] : null)));
            echo "
    ";
            // line 15
            echo get_partial("home/index_body_open", array("setting_site" => (isset($context["setting_site"]) ? $context["setting_site"] : null)));
            echo "
    ";
            // line 16
            echo get_partial("home/index_body_parter");
            echo "
 ";
        } else {
            // line 18
            echo "    ";
            echo get_partial("home/index_body_area_subsite", array("setting_site" => (isset($context["setting_site"]) ? $context["setting_site"] : null)));
            echo "
    ";
            // line 19
            echo get_partial("home/index_body_tour_list_subsite", array("tour_on_homepage" => (isset($context["tour_on_homepage"]) ? $context["tour_on_homepage"] : null)));
            echo "
    ";
            // line 20
            echo get_partial("home/index_body_acquirements_partner");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "indexSuccess.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  74 => 19,  69 => 18,  64 => 16,  60 => 15,  56 => 14,  51 => 13,  49 => 12,  45 => 11,  38 => 7,  33 => 5,  29 => 3,  26 => 2,);
    }
}

<?php

/* _modal_newsleter.html */
class __TwigTemplate_cdfad3f886349ef25e9d8f9c889d6f77 extends Twig_Template
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
        echo "<div class=\"modal fade bs-example-modal-md\" id=\"newsletter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-md\">
        <div class=\"modal-content\">
            <div class=\"modal-body question_modal\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <div class=\"row box_1x\">
                    <div class=\"col-md-12\">\t\t\t\t\t
                        <img src=\"#\" width=\"100%\"/>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <div class=\"row\">
                    <div class=\"col-md-4\"><p class=\"h4\">";
        // line 14
        echo twig_escape_filter($this->env, translate("Đăng kí nhận tin mới"), "html", null, true);
        echo "</p></div>
\t\t\t\t\t<div class=\"col-md-5\"><input class=\"form-control\" placeholder=\"email\"/></div>
                    <div class=\"col-md-3\"><button type=\"button\" class=\"btn btn_blue\">";
        // line 16
        echo twig_escape_filter($this->env, translate("Đăng kí"), "html", null, true);
        echo "</button></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"gray_bg box_1x foot_\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-md-7\">
                        <p class=\"padding_top\"><strong>";
        // line 29
        echo twig_escape_filter($this->env, translate("Nhận tin về các chuyến du lịch nổi bật miễn phí"), "html", null, true);
        echo "</strong></p>
                    </div>
                    <div class=\"col-md-3\">
                        <input class=\"form-control\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, translate("Nhập email"), "html", null, true);
        echo "\" id=\"email_register_accept_info\"/>
                    </div>
                    <div class=\"col-md-2\">
                        <a class=\"btn btn_blue\" id=\"button_click_email_register_accept_info\">";
        // line 35
        echo twig_escape_filter($this->env, translate("Đăng kí"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-1\">
                <p class=\"padding_top\"><strong>";
        // line 40
        echo twig_escape_filter($this->env, translate("Theo dõi"), "html", null, true);
        echo "</strong></p>
            </div>
            <div class=\"col-md-3\">
                <ul>
                    ";
        // line 44
        $context["social"] = StaticCall("ConfigSocialNetworkPeer", "get_social_network_by_partner", array("partner_id" => (isset($context["partner_id"]) ? $context["partner_id"] : null)));
        // line 45
        echo "                    <li><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "getLinkFacebook"), "html", null, true);
        echo "\" class=\"fb\" target=\"_blank\"></a></li>
                    <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "getLinkGoogle"), "html", null, true);
        echo "\" class=\"gg\" target=\"_blank\"></a></li>
                    <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "getLinkInstagram"), "html", null, true);
        echo "\" class=\"ins\" target=\"_blank\"></a></li>
                    <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "getLinkPinterest"), "html", null, true);
        echo "\" class=\"pri\" target=\"_blank\"></a></li>
                    <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "getLinkYoutube"), "html", null, true);
        echo "\" class=\"utb\" target=\"_blank\"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_modal_newsleter.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 49,  95 => 48,  91 => 47,  87 => 46,  82 => 45,  80 => 44,  73 => 40,  65 => 35,  59 => 32,  53 => 29,  37 => 16,  32 => 14,  17 => 1,);
    }
}

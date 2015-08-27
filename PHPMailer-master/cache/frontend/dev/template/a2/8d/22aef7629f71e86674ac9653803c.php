<?php

/* _modal_newsleter.html */
class __TwigTemplate_a28d22aef7629f71e86674ac9653803c extends Twig_Template
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
                    <div class=\"col-md-4\"><p class=\"h4\">Đăng kí nhận tin mới</p></div>
\t\t\t\t\t<div class=\"col-md-5\"><input class=\"form-control\" placeholder=\"email\"/></div>
                    <div class=\"col-md-3\"><button type=\"button\" class=\"btn btn_blue\">Đăng kí</button></div>
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
                        <p class=\"padding_top\"><strong>Nhận tin về các chuyến du lịch nổi bật miễn phí</strong></p>
                    </div>
                    <div class=\"col-md-3\">
                        <input class=\"form-control\" placeholder=\"Nhập email\" id=\"email_register_accept_info\"/>
                    </div>
                    <div class=\"col-md-2\">
                        <a class=\"btn btn_blue\" id=\"button_click_email_register_accept_info\">Đăng kí</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-1\">
                <p class=\"padding_top\"><strong>Theo dõi</strong></p>
            </div>
            <div class=\"col-md-3\">
                <ul>
                    ";
        // line 43
        $context["social"] = StaticCall("ConfigSocialNetworkPeer", "get_social_network_by_partner", array("partner_id" => (isset($context["partner_id"]) ? $context["partner_id"] : null)));
        // line 44
        echo "                    <li><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "getLinkFacebook"), "html", null, true);
        echo "\" class=\"fb\" target=\"_blank\"></a></li>
                    <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "getLinkGoogle"), "html", null, true);
        echo "\" class=\"gg\" target=\"_blank\"></a></li>
                    <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "getLinkInstagram"), "html", null, true);
        echo "\" class=\"ins\" target=\"_blank\"></a></li>
                    <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "getLinkPinterest"), "html", null, true);
        echo "\" class=\"pri\" target=\"_blank\"></a></li>
                    <li><a href=\"";
        // line 48
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
        return array (  80 => 48,  76 => 47,  72 => 46,  68 => 45,  63 => 44,  61 => 43,  17 => 1,);
    }
}

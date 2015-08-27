<?php

/* _footer.html */
class __TwigTemplate_f71d1b1b24bfeb196fd38d0943c67f22 extends Twig_Template
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
        echo "<!-- Footer -->
<!-- Social, newsletter -->
";
        // line 3
        $context["partner"] = $this->getAttribute($this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "getHost"), "Partner");
        // line 4
        echo "    ";
        echo get_partial("home/modal_newsleter", array("partner_id" => $this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "getId")));
        echo " 
";
        // line 5
        if (($this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "getTypePartner") == "main")) {
            // line 6
            echo "    ";
            echo get_partial("home/page_footer", array("partner_id" => $this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "getId")));
            echo "
";
        } else {
            // line 8
            echo "     ";
            echo get_partial("home/page_footer_partner", array("partner_id" => $this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "getId")));
            echo "
";
        }
        // line 10
        echo "
<!-- End Social, newsletter -->

<div class=\"white_bg box_1x foot_\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center margin_bottom_0x\">
              ";
        // line 17
        echo StaticCall("ContactFooterPeer", "get_address_by_partner", array("partner_id" => $this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "getId")));
        echo "
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  42 => 10,  36 => 8,  30 => 6,  28 => 5,  23 => 4,  21 => 3,  17 => 1,);
    }
}

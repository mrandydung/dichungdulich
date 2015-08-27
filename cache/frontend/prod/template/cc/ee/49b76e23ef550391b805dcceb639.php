<?php

/* _user_social_trusting.html */
class __TwigTemplate_ccee49b76e23ef550391b805dcceb639 extends Twig_Template
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
        echo " ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getOverallScore")) {
            // line 2
            echo "<div class=\"padding_top\">
    <div class=\"danhgia\">
        <div class=\"header\">
            <p>";
            // line 5
            echo twig_escape_filter($this->env, translate("Quan hệ xã hội"), "html", null, true);
            echo "</p>
        </div>
        <div class=\"score\">
            <div class=\"row\">
                <div class=\"col-md-10 col-sm-10 col-xs-10\"><p>";
            // line 9
            echo twig_escape_filter($this->env, translate("Điểm tổng quát"), "html", null, true);
            echo "</p></div>
                <div class=\"col-md-2 col-sm-2 col-xs-2\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getOverallScore"), "html", null, true);
            echo "</div>
            </div>
          <!--   <p>Điểm tổng quát: <span>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getOverallScore"), "html", null, true);
            echo "</span></p> -->
        </div>
        <div class=\"content row\">
            <div class=\"col-md-10 col-sm-10 col-xs-10\"><p>";
            // line 15
            echo twig_escape_filter($this->env, translate("Độ xác thực"), "html", null, true);
            echo ": </p></div>
            <div class=\"col-md-2 col-sm-2 col-xs-2\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAuthenticity"), "html", null, true);
            echo "</div>
        </div>
        <div class=\"content row\">
           
            <div class=\"col-md-10 col-sm-10 col-xs-10\"><p>";
            // line 20
            echo twig_escape_filter($this->env, translate("Chất lượng quan hệ xã hội"), "html", null, true);
            echo "</p></div>
             <div class=\"col-md-2 col-sm-2 col-xs-2\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getNetworkQuality"), "html", null, true);
            echo "</div>
        </div>
        <div class=\"content row\">
            <div class=\"col-md-10 col-sm-10 col-xs-10\"><p>";
            // line 24
            echo twig_escape_filter($this->env, translate("Mức tín nhiệm tài chính"), "html", null, true);
            echo "</p></div>
             <div class=\"col-md-2 col-sm-2 col-xs-2\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getFinancialCredibility"), "html", null, true);
            echo "</div>
        </div>
    </div>
    <p class=\"source\"><a href=\"https://trustingsocial.com\" target=\"_blank\">";
            // line 28
            echo twig_escape_filter($this->env, translate("Theo"), "html", null, true);
            echo " Trustingsocial.com</a></p>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_user_social_trusting.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  72 => 25,  68 => 24,  62 => 21,  58 => 20,  51 => 16,  47 => 15,  41 => 12,  36 => 10,  32 => 9,  25 => 5,  20 => 2,  17 => 1,);
    }
}

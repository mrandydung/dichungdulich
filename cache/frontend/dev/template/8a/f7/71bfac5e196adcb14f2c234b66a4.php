<?php

/* _check_radio_utilities.html */
class __TwigTemplate_8af771bfac5e196adcb14f2c234b66a4 extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"/assets/dichungdulich/js/check_radio_utilities.js?v=";
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<div class=\"col-md-12\">
\t<p class=\"hightlight\">";
        // line 3
        echo twig_escape_filter($this->env, translate("Tiện ích (bao gồm)"), "html", null, true);
        echo ": &nbsp;<input type=\"radio\"  name=\"check_radio_utilities\" id=\"check_tron_goi\"/> ";
        echo twig_escape_filter($this->env, translate("Trọn gói"), "html", null, true);
        echo " &nbsp;<input type=\"radio\"  name=\"check_radio_utilities\" id=\"check_free_and_easy\"/> Free and Easy &nbsp;<input type=\"radio\" name=\"check_radio_utilities\" id=\"check_land_tour\"/> Land tour</p>
</div>";
    }

    public function getTemplateName()
    {
        return "_check_radio_utilities.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  17 => 1,);
    }
}

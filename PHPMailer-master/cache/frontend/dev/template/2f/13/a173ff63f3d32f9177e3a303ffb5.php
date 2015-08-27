<?php

/* _header_menu.html */
class __TwigTemplate_2f13a173ff63f3d32f9177e3a303ffb5 extends Twig_Template
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
        echo "<script src=\"/assets/dichungdulich/js/load_login.js?v=";
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<nav class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand box_1x\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, url_for("@homepage"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["host"]) ? $context["host"] : null), "getLogo"), "html", null, true);
        echo "\" width=\"100%\"></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"div_content_user_login\"></div>    
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "_header_menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  17 => 1,);
    }
}

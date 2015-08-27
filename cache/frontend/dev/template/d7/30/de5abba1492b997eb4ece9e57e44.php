<?php

/* _header_menu.html */
class __TwigTemplate_d730de5abba1492b997eb4ece9e57e44 extends Twig_Template
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
        echo "\" async></script>
<!-- <div class=\"blue_bg box_1x\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <a href=\"https://instagram.com/gheptour.vn/\" target=\"_blank\" class=\"page_ins\"></a>
                    <a href=\"https://plus.google.com/109458226884966853840/posts\" target=\"_blank\" class=\"page_u2b\"></a>
                    <a href=\"https://www.facebook.com/gheptour.vn\" target=\"_blank\" class=\"page_fb\"></a>
            </div>
            <div class=\"col-md-offset-6 col-md-2 text-right\">
                <a href=\"\"> <span class=\"language_vn\"></span> </a>
                <a href=\"\"> <span class=\"language_en\"></span> </a>
                <div class=\"btn-group btn-group-xs\" role=\"group\" aria-label=\"language\">
                    <button type=\"button\" class=\"btn btn-default active language_vn\">Tiếng Việt</button>
                    <button type=\"button\" class=\"btn btn-default language_en\">English</button>
                </div>
            </div>          
        </div>
    </div>
</div>
 --><nav class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle nav-res\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand box_1x\" href=\"";
        // line 30
        if ((!$this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn"))) {
            echo twig_escape_filter($this->env, url_for("@homepage"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@homepage_en"), "html", null, true);
        }
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["host"]) ? $context["host"] : null), "getLogo"), "html", null, true);
        echo "\" width=\"100%\"></a>
        </div>
        <div class=\"collapse navbar-collapse div_content_user_login\" id=\"bs-example-navbar-collapse-1\"></div>    
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
        return array (  50 => 30,  17 => 1,);
    }
}

<?php

/* indexSuccess.html */
class __TwigTemplate_7bb4b002df5bbf5242829c53b80f8612 extends Twig_Template
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
        echo "<div class=\"gray_bg box_3x\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 profile\">
\t\t\t\t";
        // line 7
        echo get_partial("user/user_profile", array("user" => (isset($context["user"]) ? $context["user"] : null)));
        echo "
\t\t\t</div>
            <div class=\"col-md-9 service-manager\">
\t\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 11
        echo get_partial("user_service_tour", array("tour" => (isset($context["tour"]) ? $context["tour"] : null)));
        echo "
\t\t\t\t</div>
\t\t\t</div>
        </div>
    </div>
</div>
";
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
        return array (  42 => 11,  35 => 7,  29 => 3,  26 => 2,);
    }
}

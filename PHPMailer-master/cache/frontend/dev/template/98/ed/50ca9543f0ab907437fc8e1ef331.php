<?php

/* _js.html */
class __TwigTemplate_98ed50ca9543f0ab907437fc8e1ef331 extends Twig_Template
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
        echo "<script>
\$('.carousel').carousel({
    interval: 5000 //changes the speed
})

</script>";
    }

    public function getTemplateName()
    {
        return "_js.html";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}

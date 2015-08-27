<?php

/* _js.html */
class __TwigTemplate_d87e96c187c551e0368b49ab7617eb92 extends Twig_Template
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
});

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

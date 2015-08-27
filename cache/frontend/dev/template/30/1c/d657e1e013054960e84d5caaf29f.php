<?php

/* _index_body_slide.html */
class __TwigTemplate_301cd657e1e013054960e84d5caaf29f extends Twig_Template
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
        echo "<div id=\"myCarousel\"  class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images_slide"]) ? $context["images_slide"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 4
            echo "            <li data-target=\"#myCarousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\" ";
            if ((!(isset($context["key"]) ? $context["key"] : null))) {
                echo "class=\"active\"";
            }
            echo "></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 6
        echo "    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images_slide"]) ? $context["images_slide"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 9
            echo "        <div class=\"item ";
            if ((!(isset($context["key"]) ? $context["key"] : null))) {
                echo "active";
            }
            echo "\">
            <div class=\"fill\" style=\"background-image:url('";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getImages"), "html", null, true);
            echo "');-webkit-filter: brightness(0.9);filter: brightness(0.8);\"></div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "    </div>
    <div class=\"slogan\"><p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting_site"]) ? $context["setting_site"] : null), "getShowSlogenSlide"), "html", null, true);
        echo "</p></div>
    <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
        <span class=\"icon-prev\"></span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
        <span class=\"icon-next\"></span>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "_index_body_slide.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  62 => 13,  53 => 10,  46 => 9,  42 => 8,  38 => 6,  25 => 4,  21 => 3,  17 => 1,);
    }
}

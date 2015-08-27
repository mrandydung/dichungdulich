<?php

/* _page_footer_partner.html */
class __TwigTemplate_0381a14aa62e2b2719129c6517653035 extends Twig_Template
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
        echo "<div class=\"blue_bg box_3x\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("PageFooterPeer", "get_page_footer_by_partner", array("partner_id" => (isset($context["partner_id"]) ? $context["partner_id"] : null))));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 7
            echo "                    <div class=\"col-md-3 col-sm-3 col-xs-6\">
                        <h4>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["val"]) ? $context["val"] : null), "RowPageFooter"), "getName"), "html", null, true);
            echo "</h4>
                        <hr/>
                        ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(StaticCall("PageFooterPeer", "get_item_row_page_footer", array("page_footer_id" => $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getRowPageFooterId"), "partner_id" => (isset($context["partner_id"]) ? $context["partner_id"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 11
                echo "                        <p><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "get_url_page_footer"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "getName"), "html", null, true);
                echo "</a> </p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 13
            echo "                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_page_footer_partner.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  51 => 13,  40 => 11,  36 => 10,  31 => 8,  28 => 7,  24 => 6,  17 => 1,);
    }
}

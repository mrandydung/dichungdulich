<?php

/* _index_body_open.html */
class __TwigTemplate_ca0d4220c437910e7405280142c3a8e5 extends Twig_Template
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
        echo "<div class=\"white_bg \">
    <div class=\"container box_3x\">
        <div class=\"row \">
            <div class=\"col-md-12\" style=\"padding-bottom: 10px\">
                <a class=\"h3 t1\" id=\"click_cong_dong_du_lich\">";
        // line 5
        echo twig_escape_filter($this->env, translate("Cộng đồng du lịch"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"col-md-4\">
                <div class=\"experience\">
                    <a href=\"";
        // line 9
        if ((!$this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn"))) {
            echo twig_escape_filter($this->env, url_for("@acquirements"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@acquirements_en"), "html", null, true);
        }
        echo "\" id=\"click_home_chiase\"><img src=\"/img/trainghiem.png\" width=\"100%\"></a>
                    <div class=\"content\"  style=\"text-align: center\">
                        <a class=\"text-uppercase\" href=\"";
        // line 11
        if ((!$this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn"))) {
            echo twig_escape_filter($this->env, url_for("@acquirements"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@acquirements_en"), "html", null, true);
        }
        echo "\"  id=\"click_home_chiase\"><strong>";
        echo twig_escape_filter($this->env, translate("chia sẻ trải nghiệm/ kinh nghiệm"), "html", null, true);
        echo "</strong></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"experience\">
                    <a href=\"";
        // line 17
        if ((!$this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn"))) {
            echo twig_escape_filter($this->env, url_for("@group_question"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@group_question_en"), "html", null, true);
        }
        echo "\" id=\"click_home_hoi_dap\"><img src=\"/img/kinhnghiem.jpg\" width=\"100%\"></a>
                    <div class=\"content\" style=\"text-align: center\">
                        <a class=\"text-uppercase\" href=\"";
        // line 19
        if ((!$this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn"))) {
            echo twig_escape_filter($this->env, url_for("@group_question"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@group_question_en"), "html", null, true);
        }
        echo "\" id=\"click_home_hoi_dap\"><strong>";
        echo twig_escape_filter($this->env, translate("hỏi - đáp du lịch"), "html", null, true);
        echo "</strong></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"experience\">
                    <a href=\"";
        // line 25
        if ((!$this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn"))) {
            echo twig_escape_filter($this->env, url_for("@blog"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@blog_en"), "html", null, true);
        }
        echo "\" id=\"click_home_blog\" ><img src=\"/img/hoidap.jpg\" width=\"100%\"></a>
                    <div class=\"content\"  style=\"text-align: center\">
                        <a class=\"text-uppercase\" href=\"";
        // line 27
        if ((!$this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn"))) {
            echo twig_escape_filter($this->env, url_for("@blog"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, url_for("@blog_en"), "html", null, true);
        }
        echo "\" id=\"click_home_blog\"><strong>";
        echo twig_escape_filter($this->env, translate("Blog du lịch"), "html", null, true);
        echo "</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_index_body_open.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  78 => 25,  63 => 19,  54 => 17,  39 => 11,  30 => 9,  23 => 5,  17 => 1,);
    }
}

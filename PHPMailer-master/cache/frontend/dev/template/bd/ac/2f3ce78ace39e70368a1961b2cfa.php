<?php

/* _index_body_slogen.html */
class __TwigTemplate_bdac2f3ce78ace39e70368a1961b2cfa extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["setting_site"]) ? $context["setting_site"] : null), "Partner"), "getTypePartner") == "main")) {
            // line 2
            echo "<div class=\"white_bg\">
    <div class=\"container box_2x\">
        <div class=\"col-md-4 col-sm-4 benefit\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3 col-xs-3\">
                    <p class=\"box_2x tietkiem\"></p>
                </div>
                <div class=\"col-md-9 col-sm-9 col-xs-9\">
                    <h4>";
            // line 10
            echo twig_escape_filter($this->env, translate("Đơn giản"), "html", null, true);
            echo "</h4>
                    <p style=\"text-align:justify\">
                        Chỉ với một vài thao tác, bạn có thể dễ dàng tìm kiếm hoặc đăng một chuyến đi du lịch còn chỗ trống </p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-4 benefit\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3 col-xs-3\">
                    <p class=\"box_2x thanhtoan\"></p>
                </div>
                <div class=\"col-md-9 col-sm-9 col-xs-9\">
                    <h4>";
            // line 22
            echo twig_escape_filter($this->env, translate("Tiết kiệm"), "html", null, true);
            echo "</h4>
                    <p style=\"text-align:justify\">Du lịch chưa bao giờ rẻ đến như vậy. Trải nghiệm du lịch đích thực với mức tiết kiệm không ngờ.</p>

                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-sm-4 benefit\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3 col-xs-3\">
                    <p class=\"box_2x dichvu\"></p>
                </div>
                <div class=\"col-md-9 col-sm-9 col-xs-9\">
                    <h4>";
            // line 34
            echo twig_escape_filter($this->env, translate("Phong cách"), "html", null, true);
            echo "</h4>
                    <p style=\"text-align:justify\">Một cách đi du lịch mới thể hiện cá tính và phong cách sống năng động, thân thiện với môi trường.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"gray_bg box_3x\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
               <h4 class=\"intro_services\"><strong>Gheptour.vn</strong> là một thị trường trực tuyến để mọi người chia sẻ hoặc mua bán những chỗ còn trống khi đi du lịch. Đây là nơi kết nối những người có nhu cầu đi du lịch chung cá nhân đồng thời là một cổng tập hợp các tour du lịch ghép để mọi người lựa chọn một cách dễ dàng và thuận tiện.</h4>
            </div>
            <div class=\"col-md-offset-3 col-md-3 box_1x\">
                <a class=\"btn btn_orange\" href=\"/cach-thuc-hoat-dong.html\" id=\"click_cach_thuc_hoat_dong\">Cách thức hoạt động</a>
            </div>
            <div class=\"col-md-3 box_1x\">
                <a class=\"btn btn_blue\" href=\"/loi-ich-tham-gia.html\" id=\"click_loi_ich_tham_gia\">Lợi ích tham gia</a>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_index_body_slogen.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 34,  44 => 22,  29 => 10,  19 => 2,  17 => 1,);
    }
}

<?php

/* _register_modal.html */
class __TwigTemplate_b4eaacd3c15fdefde5f012b6c5653059 extends Twig_Template
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
        echo "<div class=\"modal fade bs-example-modal-sm\" id=\"dangki\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 6
        echo twig_escape_filter($this->env, translate("Đăng kí"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row tab_\">
                    <div class=\"box_1x text-center\">
                        <div class=\"col-md-10 col-md-offset-1\">
                            <a href=\"/user/loginFb\" id=\"click_dangky_facebook\"><button class=\"reg-fb\"><span class=\"reg-fb-icon\"></span>";
        // line 12
        echo twig_escape_filter($this->env, translate("Đăng kí bằng facebook"), "html", null, true);
        echo "</button></a>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                <div class=\"row box_1x\">
                    <div class=\"col-md-12\">
                        <form>
                            <div class=\"form-group\">
                                <label>Email:</label>
                                <input type=\"email\" class=\"form-control\" id=\"email\">
                            </div>
                            <div class=\"form-group\">
                                <label>";
        // line 25
        echo twig_escape_filter($this->env, translate("Mật khẩu"), "html", null, true);
        echo " :</label>
                                <input type=\"password\" class=\"form-control\" id=\"password\">
                            </div>
                            <div class=\"form-group\">
                                <label>";
        // line 29
        echo twig_escape_filter($this->env, translate("Gõ lại mật khẩu"), "html", null, true);
        echo " :</label>
                                <input type=\"password\" class=\"form-control\" id=\"password_rp\">
                            </div>
                            <div>
                                <h6>";
        // line 33
        echo twig_escape_filter($this->env, translate("Đã có tài khoản"), "html", null, true);
        echo ", <a id=\"click_dangnhap\">";
        echo twig_escape_filter($this->env, translate("đăng nhập"), "html", null, true);
        echo "</a> ?</h6>
                            </div>
                            <div>
                                <h6>";
        // line 36
        echo twig_escape_filter($this->env, translate("Quên mật khẩu"), "html", null, true);
        echo ", <a id=\"click_quenmatkhau\">";
        echo twig_escape_filter($this->env, translate("quên mật khẩu"), "html", null, true);
        echo "</a> ?</h6>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"checkbox_submit\"> ";
        // line 40
        echo twig_escape_filter($this->env, translate("Tôi đồng ý với"), "html", null, true);
        echo " <a href=\"/su-dung-dich-vu.html\">";
        echo twig_escape_filter($this->env, translate(" điều khoản dịch vụ"), "html", null, true);
        echo "</a> và <a href=\"/bao-ve-quyen-rieng-tu.html\">";
        echo twig_escape_filter($this->env, translate(" chính sách riêng tư"), "html", null, true);
        echo " </a>";
        echo twig_escape_filter($this->env, translate("của đi chung"), "html", null, true);
        echo "
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <div class=\"row\">
                    <div class=\"popup_error\" id=\"popup_error\"></div>
                    <div class=\"col-md-6\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 51
        echo twig_escape_filter($this->env, translate("Hủy"), "html", null, true);
        echo "</button>
                    </div>
                    <div class=\"col-md-6\">
                        <button type=\"button\" class=\"btn btn_blue\" id=\"submit_register\">";
        // line 54
        echo twig_escape_filter($this->env, translate("Đăng kí"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_register_modal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 54,  100 => 51,  80 => 40,  71 => 36,  63 => 33,  56 => 29,  49 => 25,  33 => 12,  24 => 6,  17 => 1,);
    }
}

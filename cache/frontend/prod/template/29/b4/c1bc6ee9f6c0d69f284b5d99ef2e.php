<?php

/* _login_modal.html */
class __TwigTemplate_29b4c1bc6ee9f6c0d69f284b5d99ef2e extends Twig_Template
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
        echo "<div class=\"modal fade bs-example-modal-sm\" id=\"dangnhap\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 6
        echo twig_escape_filter($this->env, translate("Đăng nhập"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row tab_\">
                    <div class=\"box_1x text-center\">
                        <div class=\"col-md-10 col-md-offset-1\">
                            <a href=\"/user/loginFb\" id=\"click_dangnhap_facebook\"><button class=\"reg-fb\"><span class=\"reg-fb-icon\"></span>";
        // line 12
        echo twig_escape_filter($this->env, translate("Đăng nhập bằng facebook"), "html", null, true);
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
                                <input type=\"email\" class=\"form-control\" id=\"username_li\">
                            </div>
                            <div class=\"form-group\">
                                <label>";
        // line 25
        echo twig_escape_filter($this->env, translate("Mật khẩu"), "html", null, true);
        echo " :</label>
                                <input type=\"password\" class=\"form-control\" id=\"password_li\">
                            </div>
                            <div>
                                <h6>";
        // line 29
        echo twig_escape_filter($this->env, translate("Chưa có tài khoản"), "html", null, true);
        echo ", <a id=\"click_dangky\">";
        echo twig_escape_filter($this->env, translate("đăng kí"), "html", null, true);
        echo "</a> ?</h6>
                            </div>
                            <div>
                                <h6>";
        // line 32
        echo twig_escape_filter($this->env, translate("Quên mật khẩu"), "html", null, true);
        echo ", <a id=\"click_quenmatkhau\">";
        echo twig_escape_filter($this->env, translate("quên mật khẩu"), "html", null, true);
        echo "</a> ?</h6>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <div class=\"row\">
                    <div class=\"popup_error\" id=\"popup_login_error\"></div>
                    <div class=\"col-md-6\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 42
        echo twig_escape_filter($this->env, translate("Hủy"), "html", null, true);
        echo "</button>
                    </div>
                    <div class=\"col-md-6\">
                        <button type=\"button\" class=\"btn btn_blue\" id=\"submit_login\">";
        // line 45
        echo twig_escape_filter($this->env, translate("Đăng nhập"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade bs-example-modal-sm\" id=\"laylaimatkhau\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 58
        echo twig_escape_filter($this->env, translate("Lấy lại mật khẩu"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row tab_\">
                    <div class=\"box_2x text-center\">
                        <div class=\"col-md-10 col-md-offset-1\">
                            <h5>";
        // line 64
        echo twig_escape_filter($this->env, translate("Để lấy lại mật khẩu soạn tin"), "html", null, true);
        echo ": <span style=\"font-weight: bold;color: red\">FOR</span> ";
        echo twig_escape_filter($this->env, translate("gửi"), "html", null, true);
        echo " <span style=\"font-weight: bold;color: red\">8077</span>";
        echo twig_escape_filter($this->env, translate(" phí tin nhắn "), "html", null, true);
        echo " <span style=\"color: red\">500đ</h5>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <div class=\"row\">

                    <div class=\"col-md-6\">
                        <button type=\"button\" class=\"btn btn_blue\" id=\"click_dangnhap\">";
        // line 74
        echo twig_escape_filter($this->env, translate("Đăng nhập"), "html", null, true);
        echo "</button>
                    </div>
                    <div class=\"col-md-6\">
                        <button type=\"button\" class=\"btn btn-default\" id=\"click_dangky\">";
        // line 77
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
        return "_login_modal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 77,  127 => 74,  110 => 64,  101 => 58,  85 => 45,  79 => 42,  64 => 32,  56 => 29,  49 => 25,  33 => 12,  24 => 6,  17 => 1,);
    }
}

<?php

/* _login_modal.html */
class __TwigTemplate_ed825576ee5f846f824c764416d06f38 extends Twig_Template
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
                <h4 class=\"modal-title\" id=\"myModalLabel\">Đăng nhập</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row tab_\">
                    <div class=\"box_1x text-center\">
                        <div class=\"col-md-10 col-md-offset-1\">
                            <a href=\"/user/loginFb\" id=\"click_dangnhap_facebook\"><button class=\"reg-fb\"><span class=\"reg-fb-icon\"></span> Đăng nhập bằng facebook</button></a>
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
                                <label>Mật khẩu:</label>
                                <input type=\"password\" class=\"form-control\" id=\"password_li\">
                            </div>
                            <div>
                                <h6>Chưa có tài khoản, <a id=\"click_dangky\">đăng ký</a> ?</h6>
                            </div>
                            <div>
                                <h6>Quên mật khẩu, <a id=\"click_quenmatkhau\">quên mật khẩu</a> ?</h6>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <div class=\"row\">
                    <div class=\"popup_error\" id=\"popup_login_error\"></div>
                    <div class=\"col-md-6\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Hủy</button>
                    </div>
                    <div class=\"col-md-6\">
                        <button type=\"button\" class=\"btn btn_blue\" id=\"submit_login\">Đăng nhập</button>
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
                <h4 class=\"modal-title\" id=\"myModalLabel\">Lấy lại mật khẩu</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row tab_\">
                    <div class=\"box_2x text-center\">
                        <div class=\"col-md-10 col-md-offset-1\">
                            <h5>Để lấy lại mật khẩu soạn tin: <span style=\"font-weight: bold;color: red\">FOR</span> gửi  <span style=\"font-weight: bold;color: red\">8077</span> phí tin nhắn  <span style=\"color: red\">500đ</h5>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <div class=\"row\">

                    <div class=\"col-md-6\">
                        <button type=\"button\" class=\"btn btn_blue\" id=\"click_dangnhap\">Đăng nhập</button>
                    </div>
                    <div class=\"col-md-6\">
                        <button type=\"button\" class=\"btn btn-default\" id=\"click_dangky\">Đăng ký</button>
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

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}

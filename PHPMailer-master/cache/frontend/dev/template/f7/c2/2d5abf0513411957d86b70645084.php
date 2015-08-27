<?php

/* _register_modal.html */
class __TwigTemplate_f7c22d5abf0513411957d86b70645084 extends Twig_Template
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
                <h4 class=\"modal-title\" id=\"myModalLabel\">Đăng kí</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row tab_\">
                    <div class=\"box_1x text-center\">
                        <div class=\"col-md-10 col-md-offset-1\">
                            <a href=\"/user/loginFb\" id=\"click_dangky_facebook\"><button class=\"reg-fb\"><span class=\"reg-fb-icon\"></span> Đăng kí bằng facebook</button></a>
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
                                <label>Mật khẩu:</label>
                                <input type=\"password\" class=\"form-control\" id=\"password\">
                            </div>
                            <div class=\"form-group\">
                                <label>Gõ lại mật khẩu:</label>
                                <input type=\"password\" class=\"form-control\" id=\"password_rp\">
                            </div>
                            <div>
                                <h6>Đã có tài khoản, <a id=\"click_dangnhap\">đăng nhập</a> ?</h6>
                            </div>
                            <div>
                                <h6>Quên mật khẩu, <a id=\"click_quenmatkhau\">quên mật khẩu</a> ?</h6>
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"checkbox_submit\"> Tôi đồng ý với <a href=\"/su-dung-dich-vu.html\"> điều khoản dịch vụ</a> và <a href=\"/bao-ve-quyen-rieng-tu.html\"> chính sách riêng tư </a>của đi chung
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
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Hủy</button>
                    </div>
                    <div class=\"col-md-6\">
                        <button type=\"button\" class=\"btn btn_blue\" id=\"submit_register\">Đăng kí</button>
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

    public function getDebugInfo()
    {
        return array (  17 => 1,);
    }
}

<?php

/* _user_profile.html */
class __TwigTemplate_59481728814d5d38bd36ab24b6f23ffb extends Twig_Template
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
        echo "<link href=\"/assets/dichungdulich/css/profile.css\" rel=\"stylesheet\">
<div class=\"ava\">
   ";
        // line 3
        if ((twig_slice($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatar"), 0, 8) == "/uploads")) {
            // line 4
            echo "   <img src=\"http://dichung.vn";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatar"), "html", null, true);
            echo "\" width=\"100%\">
   ";
        } else {
            // line 6
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAvatar"), "html", null, true);
            echo "\" width=\"100%\" style=\"height: 230px\">
   ";
        }
        // line 8
        echo "</div>
<div class=\"user_name\">
   <a  class=\"h4 name\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getFullname"), "html", null, true);
        echo "</a>
   <h5>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getCreatedAt"), "d-m-Y"), "html", null, true);
        echo "</h5>
</div>
<div class=\"white_bg\">
   <div class=\"box_1x col-md-12\">
   </div>
   <div class=\"cataloge padding_top\">
      <ul class=\"list-group\">
         <li class=\"list-group-item list-group-item2\">
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getDetailUrl"), "html", null, true);
        echo "\"><span class=\"thongtin\"></span> ";
        echo twig_escape_filter($this->env, translate("Sửa thông tin cá nhân"), "html", null, true);
        echo " </a>
         </li>
         <li class=\"list-group-item list-group-item2\">
            <span class=\"badge badge2\">";
        // line 22
        echo twig_escape_filter($this->env, StaticCall("NotificationPeer", "count_non_read", array("user_id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId"))), "html", null, true);
        echo "</span>
            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "get_url_user_notification"), "html", null, true);
        echo "\"><span class=\"thongbao\"></span> ";
        echo twig_escape_filter($this->env, translate("Thông báo"), "html", null, true);
        echo " </a>
         </li>
         <li class=\"list-group-item list-group-item2\">
            <span class=\"badge badge2\">";
        // line 26
        echo twig_escape_filter($this->env, StaticCall("MessagePeer", "count_non_read", array("user_id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getId"))), "html", null, true);
        echo "</span>
            <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "get_url_user_message"), "html", null, true);
        echo "\"><span class=\"tinnhan\"></span> ";
        echo twig_escape_filter($this->env, translate("Tin nhắn"), "html", null, true);
        echo " </a>
         </li>
         ";
        // line 29
        if (((!$this->getAttribute((isset($context["user"]) ? $context["user"] : null), "check_admin_partner_login")) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getPartnerId") != 1))) {
            // line 30
            echo "         <li class=\"list-group-item list-group-item2\">
            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "get_url_user_service"), "html", null, true);
            echo "\"><span class=\"dichvu\"></span> ";
            echo twig_escape_filter($this->env, translate("Quản lý Tour"), "html", null, true);
            echo "</a>
         </li>
         ";
        }
        // line 34
        echo "         <li class=\"list-group-item list-group-item2\">
            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "get_url_user_the_experience"), "html", null, true);
        echo "\"><span class=\"trainghiem\"></span> ";
        echo twig_escape_filter($this->env, translate("Kinh nghiệm chuyến đi"), "html", null, true);
        echo "</a>
         </li>
         <li class=\"list-group-item list-group-item2\">
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "get_url_user_transaction_management"), "html", null, true);
        echo "\"><span class=\"giaodich\"></span> ";
        echo twig_escape_filter($this->env, translate("Quản lý giao dịch"), "html", null, true);
        echo "</a>
         </li>
<!--          <li class=\"list-group-item list-group-item2\">
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, url_for("@user_settings"), "html", null, true);
        echo "\"><span class=\"caidat\"></span> ";
        echo twig_escape_filter($this->env, translate("Cài đặt"), "html", null, true);
        echo "</a>
         </li> -->
      </ul>
   </div>
</div>
<div class=\"modal fade\" id=\"send_message\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"send_message\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"send_message\">";
        // line 51
        echo twig_escape_filter($this->env, translate("Trả lời tin nhắn"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body padding_top\">
                <p>";
        // line 54
        echo twig_escape_filter($this->env, translate("Tôi thấy chuyến đi của bạn và chuyến đi của tôi có cung đường gần giống nhau. Chúng ta hãy cùng đi chung."), "html", null, true);
        echo "</p>
                <textarea class=\"form-control\"></textarea>
            </div>
            <div class=\"modal-footer\">
                <div class=\"row\">
                    <div class=\"col-md-offset-6 col-md-3\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 60
        echo twig_escape_filter($this->env, translate("Hủy"), "html", null, true);
        echo "</button>
                    </div>
                    <div class=\"col-md-3\">
                        <button type=\"button\" class=\"btn btn_blue\">";
        // line 63
        echo twig_escape_filter($this->env, translate("Gửi"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"danhgia\">
  <div class=\"header\">
    <p>";
        // line 72
        echo twig_escape_filter($this->env, translate("Xác thực thông tin"), "html", null, true);
        echo "</p>
  </div>
  <div class=\"user_info content\">
     <p>
    ";
        // line 76
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getVerifiedImage")) {
            // line 77
            echo "    <span class=\"giayto xacthuc\"></span> 
        ";
            // line 78
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUserTypeId") == "1")) {
                // line 79
                echo "            ";
                echo twig_escape_filter($this->env, translate("Đã x.thực giấy tờ tùy thân"), "html", null, true);
                echo "
        ";
            }
            // line 81
            echo "        ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUserTypeId") == "2")) {
                // line 82
                echo "            ";
                echo twig_escape_filter($this->env, translate("Đã xác thực ĐKKD"), "html", null, true);
                echo "
        ";
            }
            // line 84
            echo "    ";
        } else {
            // line 85
            echo "    <span class=\"giayto\"></span> 
            ";
            // line 86
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUserTypeId") == "1")) {
                // line 87
                echo "                ";
                echo twig_escape_filter($this->env, translate("Chưa x.thực giấy tờ tùy thân"), "html", null, true);
                echo "
           ";
            }
            // line 89
            echo "            ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getUserTypeId") == "2")) {
                // line 90
                echo "                ";
                echo twig_escape_filter($this->env, translate("Chưa xác thực ĐKKD"), "html", null, true);
                echo "
           ";
            }
            // line 92
            echo "    ";
        }
        // line 93
        echo "  </p>
    <p>
      ";
        // line 95
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getVerifiedPhone")) {
            // line 96
            echo "      <span class=\"dienthoai xacthuc\"></span> ";
            echo twig_escape_filter($this->env, translate("Đã xác thực số điện thoại"), "html", null, true);
            echo "
      ";
        } else {
            // line 98
            echo "      <span class=\"dienthoai\"></span> ";
            echo twig_escape_filter($this->env, translate("Chưa x.thực số điện thoại"), "html", null, true);
            echo "
      ";
        }
        // line 100
        echo "    </p>
    <p>
      ";
        // line 102
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getVerifiedEmail")) {
            // line 103
            echo "      <span class=\"email xacthuc\"></span> ";
            echo twig_escape_filter($this->env, translate("Đã xác thực email"), "html", null, true);
            echo "
      ";
        } else {
            // line 105
            echo "       <span class=\"email\"></span> ";
            echo twig_escape_filter($this->env, translate("Chưa xác thực email"), "html", null, true);
            echo "
      ";
        }
        // line 107
        echo "    </p>
  </div>
</div>
";
        // line 110
        echo get_partial("user/user_social_trusting", array("user" => (isset($context["user"]) ? $context["user"] : null)));
    }

    public function getTemplateName()
    {
        return "_user_profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 110,  256 => 107,  250 => 105,  244 => 103,  242 => 102,  238 => 100,  232 => 98,  226 => 96,  224 => 95,  220 => 93,  217 => 92,  211 => 90,  208 => 89,  202 => 87,  200 => 86,  197 => 85,  194 => 84,  188 => 82,  185 => 81,  179 => 79,  177 => 78,  174 => 77,  172 => 76,  165 => 72,  153 => 63,  147 => 60,  138 => 54,  132 => 51,  117 => 41,  109 => 38,  101 => 35,  98 => 34,  90 => 31,  87 => 30,  85 => 29,  78 => 27,  74 => 26,  66 => 23,  62 => 22,  54 => 19,  43 => 11,  39 => 10,  35 => 8,  29 => 6,  23 => 4,  21 => 3,  17 => 1,);
    }
}

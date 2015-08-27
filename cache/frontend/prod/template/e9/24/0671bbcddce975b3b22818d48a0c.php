<?php

/* _trip_set_note.html */
class __TwigTemplate_e9240671bbcddce975b3b22818d48a0c extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {
        tinymce.init({selector: '#tour_note, #policy_price, #policy_ticket',
            mode: \"textareas\",
            plugins: \"paste\",
            theme_advanced_buttons3_add: \"pastetext,pasteword,selectall\",
            paste_auto_cleanup_on_paste: true,
            paste_preprocess: function (pl, o) {
                // Content string containing the HTML from the clipboard

                o.content = o.content;
            },
            paste_postprocess: function (pl, o) {
                // Content DOM node containing the DOM structure of the clipboard

                o.node.innerHTML = o.node.innerHTML;
            }});
    });
</script>
<div class=\"error\" id=\"popup_error_note\" style=\"display:none\"></div>
<div class=\"success\" id=\"popup_success_note\" style=\"display: none\"></div>
<div role=\"tabpanel\">
    <ul class=\"nav nav-tabs term\" role=\"tablist\">
        <li role=\"presentation\" class=\"active\"><a href=\"#gia\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\" id=\"click_note_gia\">";
        // line 24
        echo twig_escape_filter($this->env, translate("Chính sách về giá"), "html", null, true);
        echo "</a></li>
        <li role=\"presentation\"><a href=\"#huyve\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\" id=\"click_chinh_sach_huy\">";
        // line 25
        echo twig_escape_filter($this->env, translate("Chính sách hủy Tour"), "html", null, true);
        echo "</a></li>
        <li role=\"presentation\"><a href=\"#khac\" aria-controls=\"profile\" role=\"tab\" data-toggle=\"tab\" id=\"click_ghi_chu_khac\">";
        // line 26
        echo twig_escape_filter($this->env, translate("Ghi chú khác"), "html", null, true);
        echo "</a></li>
    </ul>
    <div class=\"tab-content my_tab-content\">
        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"gia\">  
            <div class=\"col-md-12 box_1x\">
                <textarea class=\"form-control\" rows=\"10\" id=\"policy_price\">";
        // line 31
        echo $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getPolicyPrice");
        echo "</textarea>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div role=\"tabpanel\" class=\"tab-pane\" id=\"huyve\">
            <div class=\"col-md-12 box_1x\">
                <textarea class=\"form-control\" rows=\"10\" id=\"policy_ticket\">";
        // line 37
        echo $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getPolicyTicket");
        echo "</textarea>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div role=\"tabpanel\" class=\"tab-pane\" id=\"khac\">
            <div class=\"col-md-12 box_1x\">
                <textarea class=\"form-control\" rows=\"10\" id=\"tour_note\">";
        // line 43
        echo $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getNote");
        echo "</textarea>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
</div>      
<div class=\"col-md-offset-8 col-md-4 box_2x\">
    <a class=\"btn btn_orange\" id=\"update_note\" href=\"#\">";
        // line 50
        echo twig_escape_filter($this->env, translate("Cập nhật"), "html", null, true);
        echo "</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "_trip_set_note.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 50,  76 => 43,  67 => 37,  58 => 31,  50 => 26,  46 => 25,  42 => 24,  17 => 1,);
    }
}

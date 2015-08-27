<?php

/* _info_type_language_step_1.html */
class __TwigTemplate_8cebe78f43636fb74d93ddcb5962e9b1 extends Twig_Template
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
\$(document).ready(function(){
   \$('body').on('change','#type_language_step_1',function(){
    var type_language_step_1 = \$('#type_language_step_1').val();
    if(type_language_step_1 != 0){
        \$('#button_add_type_language_step_1').fadeIn();
    }else{
        \$('#button_add_type_language_step_1').fadeOut();
    }
});


   \$('body').on('click','#add_type_language_step_1',function(){
    var tour_id = \$('#tour_id').val();
    var type_language_step_1 = \$('#type_language_step_1').val();
    jQuery.ajax({ type: \"POST\",url: \"/info_multi_language_add/add_info_language\",dataType:\"json\", 
        data:{\"tour_id\":tour_id,\"type_language_step_1\":type_language_step_1},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == 'success'){

            }
        },
    });
});
});
</script>
<div class=\"row box_1x\">
    <div class=\"col-md-12\">
        <p class=\"hightlight\">";
        // line 31
        echo twig_escape_filter($this->env, translate("Thêm thông tin cơ bản ngôn ngữ khác"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"col-md-3\">
        <select class=\"form-control\" name=\"type_language_step_1\" id=\"type_language_step_1\">
            <option value=\"0\">";
        // line 35
        echo twig_escape_filter($this->env, translate("Chọn ngôn ngữ"), "html", null, true);
        echo "</option>
            ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("TypeLanguagePeer", "get_all"));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 37
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getName"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "        </select>
    </div>
    <div class=\"col-md-2 col-sm-3 col-xs-3\" style=\"display:none\" id=\"button_add_type_language_step_1\">
        <a class=\"btn btn_orange save\" id=\"add_type_language_step_1\">";
        // line 42
        echo twig_escape_filter($this->env, translate("Thêm"), "html", null, true);
        echo "</a>
    </div>
    <div id=\"div_content_multi_language\">
        ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(StaticCall("InfoTourDetailByLanguagePeer", "get_all", array("tour_id" => (isset($context["tour_id"]) ? $context["tour_id"] : null))));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 46
            echo "        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <p class=\"hightlight\">Title</p>
                <input type=\"text\" class=\"form-control\" name=\"tour_title\" id=\"tour_title\" value=\"Tour Côn Đảo huyền thoại\">
            </div>
        </div>
        <div class=\"row box_1x\">
            <div class=\"col-md-12\">
                <p class=\"hightlight\">Description</p>
                <textarea class=\"form-control\" rows=\"5\" id=\"tour_description\" name=\"tour_description\" aria-hidden=\"true\" style=\"\"></textarea>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 59
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_info_type_language_step_1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 59,  90 => 46,  86 => 45,  80 => 42,  75 => 39,  64 => 37,  60 => 36,  56 => 35,  49 => 31,  17 => 1,);
    }
}

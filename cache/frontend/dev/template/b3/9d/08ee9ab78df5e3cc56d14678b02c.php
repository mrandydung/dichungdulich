<?php

/* _trip_set_schedule_simple.html */
class __TwigTemplate_b39d08ee9ab78df5e3cc56d14678b02c extends Twig_Template
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
\$(document).ready(function() { 
     tinymce.init({selector:'#tour_detail',
             mode : \"textareas\",
        plugins : \"paste\",
        theme_advanced_buttons3_add : \"pastetext,pasteword,selectall\",
        paste_auto_cleanup_on_paste : true,
        paste_preprocess : function(pl, o) {
            // Content string containing the HTML from the clipboard

            o.content = o.content;
        },
        paste_postprocess : function(pl, o) {
            // Content DOM node containing the DOM structure of the clipboard

            o.node.innerHTML = o.node.innerHTML ;
    }});
    var options = { 
            target: '#renderImg',   // target element(s) to be updated with server response 
            beforeSubmit: beforeSubmit,  // pre-submit callback 
            success: afterSuccess,  // post-submit callback 
            resetForm: true        // reset the form after successful submit 
        }; 
        
     \$('#MyUploadForm').submit(function() { 
            \$(this).ajaxSubmit(options);            
            // always return false to prevent standard browser submit and page navigation 
            return false; 
        }); 
     \$('#imageInput').change(function(){
         \$('#submit-btn').submit();
     });
}); 

function afterSuccess()
{
    // \$('#submit-btn').show(); //hide submit button
    \$('#loading-img').hide(); //hide submit button
    var tour_id = ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["tour_id"]) ? $context["tour_id"] : null), "html", null, true);
        echo ";
    jQuery.ajax({ type: \"POST\",url: \"/tripManager/getImagesTour\",dataType:\"json\", 
          data:{\"tour_id\":tour_id}, 
          success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
               var html = response.html;
               \$('#content_img').html(html);
            }
          },
      });
}
//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
    {
        if( !\$('#imageInput').val()) //check empty input filed
        {
            \$(\"#renderImg\").html(\"Are you kidding me?\");
            return false
        }
        var fsize = \$('#imageInput')[0].files[0].size; //get file size
        var ftype = \$('#imageInput')[0].files[0].type; // get file type
        //allow only valid image file types 
        switch(ftype)
        {
            case 'image/png': case 'image/gif': case 'image/jpeg': case 'image/pjpeg':
                break;
            default:
                \$(\"#renderImg\").html(\"<b>\"+ftype+\"</b> Unsupported file type!\");
                return false
        }
        
        //Allowed file size is less than 1 MB (1048576)
        if(fsize>3048576) 
        {
            \$(\"#renderImg\").html(\"<b>\"+bytesToSize(fsize) +\"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.\");
            return false
        }
                
        \$('#submit-btn').hide(); //hide submit button
        \$('#loading-img').show(); //hide submit button
        \$(\"#renderImg\").html(\"\");  
    }
    else
    {
        //Output error to older browsers that do not support HTML5 File API
        \$(\"#renderImg\").html(\"Please upgrade your browser, because your current browser lacks some new features we need!\");
        return false;
    }
}
    //function to format bites bit.ly/19yoIPO
    function bytesToSize(bytes) {
       var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
       if (bytes == 0) return '0 Bytes';
       var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
       return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
    }

</script>
<link href=\"/ajax_upload/style/style.css?v=";
        // line 101
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<div class=\"well\">\t\t\t\t\t\t
    <p class=\"hightlight\">";
        // line 103
        echo twig_escape_filter($this->env, translate("Nội dung"), "html", null, true);
        echo "</p>
    <textarea class=\"form-control\" rows=\"10\" id=\"tour_detail\" name=\"tour_detail\" data-id=\"tour_detail\">";
        // line 104
        if ($this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getDetail")) {
            echo " ";
            echo $this->getAttribute((isset($context["tour_detail"]) ? $context["tour_detail"] : null), "getDetail");
        }
        echo "</textarea>
\t\t
</div>
<div align=\"center\">
     <div class=\"col-md-5\">
        <form action=\"/tour/upload?tour_id=";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["tour_id"]) ? $context["tour_id"] : null), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"MyUploadForm\">
            <div class=\"fileUpload btn btn-primary\">
                <span>";
        // line 111
        echo twig_escape_filter($this->env, translate("Upload ảnh cho lịch trình cơ bản"), "html", null, true);
        echo "</span>
                <input type=\"file\" class=\"upload\" name=\"image_file\" id=\"imageInput\" />
                <input type=\"submit\"  id=\"submit-btn\" value=\"Upload\" style=\"display:none\" />
                <img src=\"/ajax_upload/images/ajax-loader.gif\" id=\"loading-img\" style=\"display:none;\" alt=\"Please Wait\"/>
            </div>             
        </form>
    </div>
    <div id=\"content_img\" class=\"col-md-12\">
    ";
        // line 119
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 120
            echo "        <div class=\"col-md-2 padding_top anh\" id=\"div_img_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\">
            <img style=\"width:100px;height:100px\" src=\"/";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getImages"), "html", null, true);
            echo "\"/>
            <div class=\"xoa_po\">
                <a id=\"delete_image-";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["val"]) ? $context["val"] : null), "getId"), "html", null, true);
            echo "\" class=\"delete_image\"><span class=\"xoa\"></span></a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 127
        echo "    </div>
    <div id=\"renderImg\" style=\"display:none\"></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "_trip_set_schedule_simple.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 127,  172 => 123,  167 => 121,  162 => 120,  158 => 119,  147 => 111,  142 => 109,  131 => 104,  127 => 103,  122 => 101,  57 => 39,  17 => 1,);
    }
}

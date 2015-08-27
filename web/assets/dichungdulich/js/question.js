$(document).ready(function(){
  $('#checkboxchi_tiet_cau_hoi').on('click',function(){
    if($(this).attr('value') == 'chi_tiet_cau_hoi'){
      $('#div_chi_tiet_cau_hoi').toggle(400);
    }
  });

  tinymce.init({selector:'#detail',
   mode : "textareas",
  plugins : "paste",
  theme_advanced_buttons3_add : "pastetext,pasteword,selectall",
  paste_auto_cleanup_on_paste : true,
  paste_preprocess : function(pl, o) {
      o.content = o.content;
  },
  paste_postprocess : function(pl, o) {
      o.node.innerHTML = o.node.innerHTML ;
  }});
	$('#create_question').on('click',function(){
    tinyMCE.triggerSave();
		var title = $('#title').val();
		var detail = $('#detail').val();
		var arr_question_group_category = [];
         $('input.question_group_category').each(function(){
            arr_question_group_category.push({id: $(this).attr("data-id") , name :$(this).attr("name")}); 
        });
       	if(!title){
       		$('#popup_error').html('Bạn chưa nhập nội dung câu hỏi').hide().fadeIn();
       	}else{
	        jQuery.ajax({ type: "POST",url: "/group_question/create_question",dataType:"json", 
            data:{"title":title,"detail":detail,"arr_question_group_category":arr_question_group_category},
	            success:function(response){
	                var code = response.code;
	                if(code == 'success'){
	                	var url = response.url;
	                	window.location.href = url;
	                }
	                if(code == 'error'){
	                	var msg = response.msg;
	                	$('#popup_error').html(msg).hide().fadeIn();
	                }
	            },
        	});
       	}
	});
	
	$('#title').on('input',function(){
		var title = $('#title').val();
		jQuery.ajax({ type: "POST",url: "/group_question/title_change",dataType:"json", 
        data:{"title":title},
        success:function(response){
            var code = response.code;
            if(code == 'success'){
            	var html = response.html;
            	var title = $('#title').val();
            	if(html && title){
            		$('#content_text_search').html(html);
            		$('#div_content_text_search').fadeIn();
            	}else{
            		$('#div_content_text_search').hide();
            	}
            }
        },
    	});
	});
});
$(document).ready(function(){
     	tinymce.init({selector:'#content_answer',
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

	$('#answer_1').on('click',function(){
		$('#answer_1_show').toggle(400);
	});

	$('#send_answer_question').on('click',function(){
	 	tinyMCE.triggerSave();
		var question_id = $('#question_id').val();
		var content_answer = $('#content_answer').val();
	   	jQuery.ajax({ type: "POST",url: "/group_question/send_answer_question",dataType:"json", 
			data:{"question_id":question_id,"content_answer":content_answer},
			success:function(response){
			var code = response.code;
			var msg = response.msg;
			if(code == 'error_login'){
				$('#dangnhap').modal();
			}
			if(code == 'error'){
				alert(msg);
			}
			if( code == 'success' ){
				window.location.reload();
			}
		},
    	});
	});

	$('#like_question_main').on('click',function(){
		var question_id = $('#question_id').val();
	   	jQuery.ajax({ type: "POST",url: "/group_question/like_question_main",dataType:"json", 
			data:{"question_id":question_id},
			success:function(response){
			var code = response.code;
			var msg = response.msg;
			if(code == 'error_login'){
				$('#dangnhap').modal();
			}
			if(code == 'warning'){
				alert(msg);
			}
			if( code == 'success' ){
				var like = response.like;
				$('#lable_like_question_main').hide().html(like).fadeIn();
			}
		},
    	});
	});

	$('body').on('click','#like_question_answered',function(){
		var question_answer_id = $(this).attr('data-id');
		jQuery.ajax({ type: "POST",url: "/group_question/like_question_answered",dataType:"json", 
			data:{"question_answer_id":question_answer_id},
			success:function(response){
			var code = response.code;
			var msg = response.msg;
			if(code == 'error_login'){
				$('#dangnhap').modal();
			}
			if(code == 'warning'){
				alert(msg);
			}
			if( code == 'success' ){
				var like = response.like;
				var question_answer_id = response.question_answer_id;
				$('#lable_like_question_answered_'+question_answer_id).hide().html(like).fadeIn();
			}
		},
    	});
	});
});
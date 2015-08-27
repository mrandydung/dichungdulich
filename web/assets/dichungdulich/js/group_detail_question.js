$(document).ready(function(){
	$('body').on('click','#like_question_main',function(){
		var question_id = $(this).attr('data-id');
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
				var question_id = response.question_id;
				$('#lable_like_question_main_'+question_id).hide().html(like).fadeIn();
			}
		},
    	});
	});
});
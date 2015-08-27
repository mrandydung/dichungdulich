$(document).ready(function(){
	$("body").on("click","#delete_acquirement",function(){
		var id = $(this).data("id");
		$('#id_experience').val(id);
		$('#delete_experience_modal').modal();
	});
	$("body").on("click","#submit_delete_experience",function(){
		var id_experience = $('#id_experience').val();
        jQuery.ajax({ type: "POST",url: "/user_experience/delete_experience",dataType:"json", 
            data:{"id_experience":id_experience},
            success:function(response){
                var code = response.code;
                if(code == '1'){
                  window.location.reload();
                }
            },
        });
	});
});
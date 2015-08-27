$(document).ready(function(){
	$("body").on("click","#delete_acquirements",function(){
		var id = $(this).data("id");
		$('#id_acquirements').val(id);
		$('#delete_acquirements_modal').modal();
	});
	$("body").on("click","#submit_delete_acquirements",function(){
		var id_acquirements = $('#id_acquirements').val();
        jQuery.ajax({ type: "POST",url: "/user_acquirements/delete_acquirements",dataType:"json", 
            data:{"id_acquirements":id_acquirements},
            success:function(response){
                var code = response.code;
                if(code == '1'){
                  window.location.reload();
                }
            },
        });
	});
});
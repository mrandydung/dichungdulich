$(document).ready(function(){
	$("body").on("click",'.user_sell_deny',function(){
	 	var clickedID = this.id.split("-"); 
        var booking_id = clickedID[1];
        var user_sell_deny = 1;
     	jQuery.ajax({ type: "POST",url: "/booking_tour/booking_status",  dataType:"json",
            data: {"booking_id":booking_id,"user_sell_deny":user_sell_deny},
            success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == '1'){
                	window.location.reload();
                }else{
                	window.location.reload();
                }
            },
            error:function (xhr, ajaxOptions, thrownError){
            }
        });
	});

	$("body").on("click",'.user_buy_deny',function(){
	 	var clickedID = this.id.split("-"); 
        var booking_id = clickedID[1];
        var user_buy_deny = 1;
     	jQuery.ajax({ type: "POST",url: "/booking_tour/booking_status",  dataType:"json",
            data: {"booking_id":booking_id,"user_buy_deny":user_buy_deny},
            success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == '1'){
                	window.location.reload();
                }else{
                	window.location.reload();
                }
            },
            error:function (xhr, ajaxOptions, thrownError){
            }
        });
	});

	$("body").on("click",'.user_sell_accept',function(){
	 	var clickedID = this.id.split("-"); 
        var booking_id = clickedID[1];
        var user_sell_accept = 1;
     	jQuery.ajax({ type: "POST",url: "/booking_tour/booking_status",  dataType:"json",
            data: {"booking_id":booking_id,"user_sell_accept":user_sell_accept},
            success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == '1'){
                	window.location.reload();
                }else{
                	window.location.reload();
                }
            },
            error:function (xhr, ajaxOptions, thrownError){
            }
        });
	});

	$("body").on("click",'.user_sell_accept_finish',function(){
	 	var clickedID = this.id.split("-"); 
        var booking_id = clickedID[1];
        var user_sell_accept_finish = 1;
     	jQuery.ajax({ type: "POST",url: "/booking_tour/booking_status",  dataType:"json",
            data: {"booking_id":booking_id,"user_sell_accept_finish":user_sell_accept_finish},
            success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == '1'){
                	window.location.reload();
                }else{
                	window.location.reload();
                }
            },
            error:function (xhr, ajaxOptions, thrownError){
            }
        });
	});
});
$(document).ready(function(){
	function setDatepickerStart(tour_id)
	{
	    $( "#datepicker_start_dublicate_"+tour_id ).datepicker({
	        "dateFormat":"dd-mm-yy",
	        showButtonPanel: true,
	        showOtherMonths: true,
	        selectOtherMonths: true,
	        minDate:"+1",
	        onClose: function(date) {
	            var day = date.split("-");
	             var strdate = new Date(day[2],day[1],day[0]);
	             var time = strdate.getTime()/1000 + 86400;
	             var d = new Date(time*1000);
	             var dt = d.getDate() + '-' + (d.getMonth()) + '-' + d.getFullYear()
	            $( "#datepicker_end_dublicate_"+tour_id ).datepicker( "option", "minDate",dt);
	        }
	    });
	}
	function setDatepickerEnd(tour_id)
	{
	    $( "#datepicker_end_dublicate_"+tour_id).datepicker({
	        "dateFormat":"dd-mm-yy",
	        showButtonPanel: true,
	        showOtherMonths: true,
	        minDate:"+1",
	        onClose: function( date ) {
	            $( "#datepicker_start_dublicate_"+tour_id).datepicker( "option", "maxDate", date );
	          }
	    });
	}

	$("body").on("click",'.delete_tour',function(){
	 	var clickedID = this.id.split("-"); 
        var tour_id = clickedID[1];
        $('#div_dublicate_tour_'+tour_id).hide('slow');
        $('#div_delete_tour_'+tour_id).show('slow');
	});

	$("body").on("click",'.cancel_delete',function(){
	 	var clickedID = this.id.split("-"); 
        var tour_id = clickedID[1];
        $('#div_delete_tour_'+tour_id).hide('slow');
	});
	$("body").on("click",'.cancel_dublicate',function(){
	 	var clickedID = this.id.split("-"); 
        var tour_id = clickedID[1];
        $('#div_dublicate_tour_'+tour_id).hide('slow');
	});

	$("body").on("click",'.dublicate_tour',function(){
	 	var clickedID = this.id.split("-"); 
        var tour_id = clickedID[1];
         $('#div_delete_tour_'+tour_id).hide('slow');
     	setDatepickerStart(tour_id);
      	setDatepickerEnd(tour_id);
        $('#div_dublicate_tour_'+tour_id).show('slow');
	});

	$("body").on("click",'.submit_delete',function(){
	 	var clickedID = this.id.split("-"); 
        var submit_delete_tour_id = clickedID[1];
     	jQuery.ajax({ type: "POST",url: "/user_service/manager_service",  dataType:"json",
            data: {"submit_delete_tour_id":submit_delete_tour_id},
            success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == '1'){
                	var tour_id = response.tour_id;
                	$('#content_tour_'+tour_id).hide('slow');
                }else{
            	 	var tour_id = response.tour_id;
                	alert(msg);
        	 	 	$('#div_delete_tour_'+tour_id).hide('slow');
                }
            },
            error:function (xhr, ajaxOptions, thrownError){
            }
        });
	});

	$("body").on("click",'.submit_dublicate',function(){
	 	var clickedID = this.id.split("-"); 
        var submit_dublicate_tour_id = clickedID[1];
        var datepicker_start_dublicate = $('#datepicker_start_dublicate_'+submit_dublicate_tour_id).val();
        var datepicker_end_dublicate = $('#datepicker_end_dublicate_'+submit_dublicate_tour_id).val();
     	jQuery.ajax({ type: "POST",url: "/user_service/manager_service",  dataType:"json",
            data: {"submit_dublicate_tour_id":submit_dublicate_tour_id,"datepicker_start_dublicate":datepicker_start_dublicate,"datepicker_end_dublicate":datepicker_end_dublicate},
            success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == '1'){
                	window.location.reload();
                }else{
                	alert(msg);
                }
            },
            error:function (xhr, ajaxOptions, thrownError){
            }
        });
	});

	// $("body").on("click",'.edit_tour',function(){
	//  	var clickedID = this.id.split("-"); 
 //        var edit_tour_id = clickedID[1];
 //     	jQuery.ajax({ type: "POST",url: "/user_service/manager_service",  dataType:"json",
 //            data: {"edit_tour_id":edit_tour_id},
 //            success:function(response){
 //                var code = response.code;
 //                var msg = response.msg;
 //                if(code == '1'){
 //                	var url = response.url;
 //                	window.open(url);
 //                }
 //            },
 //            error:function (xhr, ajaxOptions, thrownError){
 //            }
 //        });
	// });

});
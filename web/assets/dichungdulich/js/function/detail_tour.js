$(document).ready(function(){
	$('#select_service_tour,#date_picker, #select_adult, #select_kid').change(function(){
		$('#submit_booking_tour').attr('disabled', 'disabled');
		var tour_detail_id = $('#tour_detail_id').val();
		var select_service_tour  = $('#select_service_tour').val();
		var date_picker = $('#date_picker').val();
		var select_adult = $('#select_adult').val();
	 	var arr_kid = [];
        $('select#select_kid').each(function(){
            arr_kid.push({id: $(this).attr("data-id"),number : $(this).val()}); 
        });
		jQuery.ajax({type: "POST", url: "/tour/cal_money_tour",dataType:"json",
		data:{"tour_detail_id":tour_detail_id,"select_service_tour":select_service_tour,"date_picker":date_picker,"select_adult":select_adult,"arr_kid":arr_kid}, 
			success:function(response){
			var code = response.code;
			var msg = response.msg;
			if(code == '1'){
				var price = response.price;
				var price_new = response.price_new;
			  	$('#total_price_tour').html('<img src="/images/ajax-loader.gif"/>').fadeIn();
			  	$('#price_tour').html('<img src="/images/ajax-loader.gif"/>').fadeIn();
                setTimeout(
                function() 
                {
					$('#total_price_tour').html(price);
					$('#price_tour').html(price_new);
					$('#submit_booking_tour').removeAttr('disabled');
			  	}, 1000);
			}
		},
		error:function (xhr, ajaxOptions, thrownError){}			
		});
	});

	$('#submit_booking_tour').click(function(){
		var tour_detail_id = $('#tour_detail_id').val();
		var select_service_tour  = $('#select_service_tour').val();
		var date_picker = $('#date_picker').val();
		var select_adult = $('#select_adult').val();
	 	var arr_kid = [];
        $('select#select_kid').each(function(){
            arr_kid.push({id: $(this).attr("data-id"),number : $(this).val()}); 
        });
		if(date_picker){
			var submit_booking_tour = 1;
			jQuery.ajax({type: "POST", url: "/tour/cal_money_tour",dataType:"json",
			data:{"tour_detail_id":tour_detail_id,"select_service_tour":select_service_tour,"date_picker":date_picker,"select_adult":select_adult,"arr_kid":arr_kid,"submit_booking_tour":submit_booking_tour}, 
				success:function(response){
				var code = response.code;
				var msg = response.msg;
				if(code == '2'){
					var url = response.url;
					window.location.href = url;
				}
			},
			error:function (xhr, ajaxOptions, thrownError){}			
			});
		}else{
			$('#popup_error_detail_tour').fadeIn();
		}
	});

	$('#login_booking_tour').click(function(){
		$('#dangnhap').modal();
	});
});
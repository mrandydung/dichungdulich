var textarray = [];
function changePrice(array)
{
	var sum = 0;
	$.each(array,function(){sum+=parseInt(this) || 0;});
	var sum_number_seat = parseInt($('#sum_number_seat').val());
	$('#sum_price').val(sum);
	var type_pricing = $('#type_pricing').val();
	if(type_pricing == '1'){
		$('#price_tour').val('');
		if(sum_number_seat > 0){
			$('#price_tour').val(parseInt(sum/sum_number_seat));
		}else{
			$('#price_tour').val('');
		}
	}
	if(type_pricing == '2'){
			$('#price_tour').val('Miễn phí').attr("disabled", "disabled");
	}
	if(type_pricing == '3'){
		$('#price_tour').val('Thỏa thuận').attr("disabled", "disabled");
	}
}
function change_price_sum(sum)
{
	var sum_number_seat = parseInt($('#sum_number_seat').val());
	var type_pricing = $('#type_pricing').val();
	if(type_pricing == '1'){
		$('#price_tour').val('');
		if(sum_number_seat > 0){
			$('#price_tour').val(parseInt(sum/sum_number_seat));
		}else{
			$('#price_tour').val('');
		}
	}
	if(type_pricing == '2'){
			$('#price_tour').val('Miễn phí').attr("disabled", "disabled");
	}
	if(type_pricing == '3'){
		$('#price_tour').val('Thỏa thuận').attr("disabled", "disabled");
	}
}

function change_price_price_new()
{
 	var new_array = []; 
	$('input#price_new').each(function(){
		  new_array.push($(this).val());
	});
	changePrice(new_array);
}
var creat_trip_price ; 
$('document').ready(function(){
	$('#sum_number_seat').keyup(function(){
		change_price_price_new()
	});
	$('#sum_price').keyup(function(){
		var sum = $('#sum_price').val();
		change_price_sum(sum);
	});
	$("body").on("keyup","#price_new",function(){
		change_price_price_new();
	});

	$("body").on("click","#addNewPrice",function(){
		var tour_id = $('#tour_id').val();
		var creat_trip_costs = $('#creat_trip_costs').val();
		creat_trip_price = $('#creat_trip_price').val();
		var creat_trip_price_decription = $('#creat_trip_price_decription').val();
		jQuery.ajax({ type: "POST",url: "/trip_manager_personal/add_new_price",dataType:"json", 
			data:{"tour_id":tour_id,"creat_trip_costs":creat_trip_costs,"creat_trip_price":creat_trip_price,"creat_trip_price_decription":creat_trip_price_decription}, 
              success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == '1'){
                 	$('#popup_error_price').html(msg);
                 	$('#popup_error_price').hide().fadeIn();
				}
				if(code == '2'){
					$('#popup_error_price').hide();
					var html = response.html;
					// textarray.push(creat_trip_price);
					$('#creat_trip_costs').val(0);
					$('creat_trip_price').val('');
					$('#creat_trip_price').val('');
					$('#creat_trip_price_decription').val('');
					$('#content_add_new_price').append(html).fadeIn();
					change_price_price_new();
				}
			},
  		});
	});

	$('#type_pricing').change(function(){
		var type_pricing = $('#type_pricing').val();
		if(type_pricing == '1'){
			$('#price_tour').removeAttr("disabled");
			var sum = $('#sum_price').val();
			change_price_sum(sum);
		}
		if(type_pricing == '2'){
			$('#price_tour').val('Miễn phí').attr("disabled", "disabled");
		}
		if(type_pricing == '3'){
			$('#price_tour').val('Thỏa thuận').attr("disabled", "disabled");
		}
	});

	$("body").on("click",".delete_price",function(){
   		var clickedID = this.id.split("-");
    	var scheduled_cost_tour_id = clickedID[1];
		jQuery.ajax({ type: "POST",url: "/trip_manager_personal/delete_new_price",dataType:"json", 
			data:{"scheduled_cost_tour_id":scheduled_cost_tour_id}, 
              success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == '1'){
                	var scheduled_cost_tour_id = response.scheduled_cost_tour_id;
                	$('#value_pricing-'+scheduled_cost_tour_id).fadeIn().remove();
                	change_price_price_new();
				}
			},
  		});
	});
});
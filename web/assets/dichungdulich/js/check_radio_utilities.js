$(document).ready(function(){
	$('#check_tron_goi').on('click',function(){
		for(var i = 1; i <=12;i++){
			$('#ad_Checkbox'+i).prop('checked', true);
		}
	});

	$('#check_free_and_easy').on('click',function(){
		for(var i = 1; i <=12;i++){
			$('#ad_Checkbox'+i).prop('checked', false);
		}
		$('#ad_Checkbox1').prop('checked', true);
		$('#ad_Checkbox3').prop('checked', true);
	});

	$('#check_land_tour').on('click',function(){
		for(var i = 1; i <=12;i++){
			$('#ad_Checkbox'+i).prop('checked', true);
		}
		$('#ad_Checkbox1').prop('checked', false);
	});
});
if(typeof google != 'undefined'){
	var geocoder = new google.maps.Geocoder();
	var directionsDisplay;
	var map; 
	var vietnam = new google.maps.LatLng(21.009887,105.873917); 
	var zoom = 11;
	  
	var center = vietnam;
	var draw_circle = null; 
	var itvCircle = null;
	var markerCircle = null;
	
	function DrawCircle(rad) {
	 
			rad *= 1000; 
	    if (draw_circle != null) {
					 
	        draw_circle.setMap(null);
					markerCircle.setMap(null);
				  clearInterval(itvCircle);
	    }
			draw_circle = new google.maps.Circle({
	        center: center,
	        radius: rad,
	        strokeColor: "green",
	        strokeOpacity: 1,
	        strokeWeight: 2,
	        fillColor: "green",
	        fillOpacity: 0.2,
	        map: map
	    });
		  
			//marker
			markerCircle = new google.maps.Marker({ 
																					map: map,
																					position: center,
																					draggable: false,
																					icon: 'http://www.airporttaxi.vn/images/marker.png'})
																					
			//resize radius
			var rTemp = rad;
			itvCircle = setInterval(function(){
										
										rTemp+=10;
                    draw_circle.setRadius(rTemp);
										if(rTemp > rad+200)
											clearInterval(itvCircle);
									},50);
	}
	
	function initMap(){
		directionsDisplay = new google.maps.DirectionsRenderer({draggable: false});
			 
			
			var myOptions = {
				zoom: zoom,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				center: vietnam,
				draggable: true
			};
			
			map = new google.maps.Map(document.getElementById('map'), myOptions);
			 
			directionsDisplay.setMap(map); 
	}
	google.maps.event.addDomListener(window, 'load', function(){

			initMap();
			
			if($('#map').attr('address')){
				
				geocoder.geocode( { 'address': $('#map').attr('address')}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						center = results[0].geometry.location
						zoom = 15;
						setCenterDrawCircle();
					}
				});
			}
	}); 
}
function calcLength(type){
	
	var vil = $('#home_ticket_form').find('#'+type+'_village').val();
	if(vil && vil != 0){ 
		
		var form = $('#home_ticket_form');
		var rideMethod = form.find('select[name="'+type+'_ride_method"]').val();
		params = {f: form.find('#'+type+'_village').val(),
							 
							chunk: form.find('#'+type+'_chunk').val(),
							vehicle: form.find('#vehicle_id').val(),
							dimension: form.find('#dimension_id').val(),
							ride_method: rideMethod,
							chair: form.find('select[name="'+type+'_chair"]').val()
							};
		form.find('#'+type+'_length, #'+type+'_price, #total_'+type+'_price').html('<img src="/images/loading.gif">');
		$.getJSON('/prepare/village_range', params, function(data){ 
			 
			if(data.msg){
				jAlert(data.msg);
				return;
			}
			 
			$('.transaction #'+type+'_length').html(data.length);
			
			form.find('select[name="'+type+'_chair"]').html(data.chairs);
			form.find('select[name="'+type+'_time"]').html(data.depart_times);
			
			
			cost = data.cost;
			chair = parseInt(form.find('select[name="'+type+'_chair"]').val());
			 
			tCost = cost;
			$('.transaction #'+type+'_price').html(number_format(parseInt(tCost/chair), 0,0, '.')+' VNĐ');
			 
			p = number_format(tCost, 0, 0, '.')+' VNĐ';
			$('.transaction #total_'+type+'_price').html(p);
		 
			
			if(data.depart_times.length == 0){
				jAlert("Chưa có thời gian đi cho chặng này");
			 }
			 
		});
	}
}
 

function number_format (number, decimals, dec_point, thousands_sep) {
   
  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function (n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}


var loadMapFirst = true;
function setCenterDrawCircle(){
	
	//calc km
	if($('#home_ticket_form').attr('cacl-length') == "1"){
		
		calcLength('depart');
		
		if(loadMapFirst){
			 
			calcLength('end');
			 
			loadMapFirst = false;
		}
	} 
	map.panTo(center);
	//map.setCenter(center);
	map.setZoom(zoom);
	
	rad = {11: 1.5, 13: 1.5, 15: 0.4};
	DrawCircle(rad[zoom]);
	
}

// update map when user change address
function updateMap(){

	txt = "";
	zoom = 11;
	if($('#depart_city').size() > 0){
		txt = $('#depart_city :selected').text();
		zoom = 11;
	}
	else
	{
		txt = $('#depart_district').attr('city');
	}
	
	if($('#depart_district').val() != 0){
		 
		txt += ", "+$('#depart_district :selected').text();
		zoom = 13;
	}
	
	if($('#depart_village').val() != 0){
		txt += ", "+$('#depart_village :selected').text();
		zoom = 15;
	}
	 
	geocoder.geocode( { 'address': txt}, function(results, status) {
			 
			//
      if (status == google.maps.GeocoderStatus.OK) { 
				center = results[0].geometry.location;
        setCenterDrawCircle();
      }
    });
		
	/*
	$.getJSON('/prepare/lat_lng?address='+txt,  function(data){ 
		
	 
		var ll = new google.maps.LatLng(data.lat, data.lng);
		map.setCenter(ll);
		map.setZoom(zoom);
	});
	*/
}
 
function getCDate(inc){
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!

	var yyyy = today.getFullYear();
	if(inc) dd+= inc;
	if(dd<10){dd='0'+dd} 
	
	if(mm<10){mm='0'+mm} 
	
	return {month: mm, day: dd, year: yyyy};
	 
}


$(document).ready(function(){
	
	$('.remind-customer').click(function(){
		if(!confirm('Are you sure?')) {
			return;
		}
		id = $(this).attr('data-id');
		self = this;
		$.ajax({
			type: "POST",
			url: '/backend.php/ticket/call_not_reponse',
			data: {id: id},
			success: function(data){
				alert(data);
				if(data.indexOf('Error') == -1) {
					$(self).parent().html('ĐÃ GỬI SMS');
				}
			}
		});
	});
  
  $('.is-merge').click(function(){
		if(!confirm('Are you sure?')) {
			return;
		}
		id = $(this).attr('data-id');
		self = this;
		$.ajax({
			type: "POST",
			url: '/backend.php/ticket/merge',
			data: {id: id},
			success: function(data){
				alert(data);
				if(data.indexOf('Error') == -1) {
					$(self).parent().html('Ghép thành công');
				}
			}
		});
	});
	
	
	$('a').each(function(){
		var id = $(this).attr('href');
		
		if(id && id.indexOf('#') == 0)
		{
			//if(id.indexOf('/') == -1 && $(id).size() > 0 && id != '#login' && id != '#bad_ride')
			{
//				$(this).facebox({width: '600px'});
			}
		}
	});
	
	// homepage tab 
	$('.heading_bar_tab').click(function(){
		
		$('.heading_bar_tab').removeClass('active_tab');
		$(this).addClass('active_tab');
		$('.radius.book, .radius.checking').hide();
		if($(this).hasClass('book')){
			$('#in_mainleft.book').show();
		}
		else{
			$('#in_mainleft.checking').show();
		}
	});
	
	//login, register form
	$('.a_register').click(function(){
		
		$('#register_form').attr('action', $('#register_form').attr('register_action'));
		jForm('register_form', 'Đăng ký tài khoản', function (data){ lrCallback(data, true);});
		$('#popup_message .register_policy').removeClass('hide');
		$('#popup_message .login_mk').addClass('hide');
		prepareCaptcha('#popup_message');
		
	});
	
	$('#userForm #username, #userForm #password').focus(function(){
		$(this).blur();
		$('#register_form').attr('action', $('#register_form').attr('login_action'));
		jForm('register_form', 'Đăng nhập', function (data){ lrCallback(data);});
		$('#popup_message .register_policy').addClass('hide');
			$('#popup_message .login_mk').removeClass('hide');
		
	});
	
	$('.a_login').click(function(){
		$('#register_form').attr('action', $('#register_form').attr('login_action'));
		jForm('register_form', 'Đăng nhập', function (data){ lrCallback(data);});
		$('#popup_message .register_policy').addClass('hide');
		$('#popup_message .login_mk').removeClass('hide');
		
	});
	
	function lrCallback(data, register){
		 
		try {
			var data = $.parseJSON(data);
			 
			$('#popup_container .loading').hide();
			error = '#popup_container .popup_error';
			if(data.code != 0){
				
				$(error).html(data.msg).show();
				$('#popup_message #captcha_img').click();
				$('#popup_message #captcha').val('');
			}
			else {
			
				$(error).hide();
				
				if (!register)  {
				
					location.href = location.href.replace('#', '/');
				}
				else {
					
					jAlert(data.msg);
				}
			}
			 
		}
		catch(e)
		{
		}
	}
	$('#ticket_info_button').click(function(){
		
		$.ajax({
						type: "POST",
						url: '/home/ticket_info',
						data: {ticket_code: $('#ticket_code').val(), phone_number: $('#phone_number').val()},
						success: function(data){
							if(data.code == 1){
								jAlert(data.msg);
							}
							else{
								location.href = data.href;
							}
						},
						dataType: 'json'
					});
	});
	//end homepage tab
	var refreshMap = false;
	$('#home_ticket_form[name="home_ticket_form"] select').change(function(){
			
			$('.camera_frame').hide();
			$('#map').show();
			
			if(!refreshMap){
			
				initMap();
				refreshMap = true;
			}
			
	});
	
	
	function isInfoModule(){
		return $('#home_ticket_form').attr('cacl-length') == "1";
	}
	
	
	$('.transaction select[name="depart_chair"], .transaction select[name="end_chair"]').change(function(){
		 
		if($(this).attr('name') == 'depart_chair'){
			calcLength('depart'); 
		} 
		else{
			calcLength('end');
		}
	});
	
	  
	
	// home
	$('#home_ticket_form').find('select[name="chunk"], select[name="vehicle"], #depart_district, #depart_village, #end_district, #end_village, select[name="depart_day"], select[name="depart_month"], select[name="end_day"], select[name="end_month"]').change(function(){
		
		$(this).removeClass('error_border');
	});
	
	$('#home_ticket_form #chunk').change(function(){
		
		// neu chunk la: NOI BAI - TINH LE
		
		if($(this).val() == 3){
			
			$('#home_ticket_form #depart_city, #home_ticket_form #end_city').show();
			 
		}
		else{
			$('#home_ticket_form #depart_city, #home_ticket_form #end_city').hide(); 
			$('#home_ticket_form #depart_city').val(24); // ha noi
			$('#home_ticket_form #depart_city').change(); 
			$('#home_ticket_form #end_city').val(24); // ha noi
		}
	});
	
	$('select[name="depart_day"], select[name="end_day"]').focus(function(){
		
		if($(this).val() == 0){
			var d =getCDate(1);
			$(this).val(d.day);
			$(this).removeClass('error_border');
		}
	}
	
	 );
	
	$('select[name="depart_month"], select[name="end_month"]').focus(function(){
		if($(this).val() == 0){
			var d = getCDate(1);
			$(this).val(d.month);
			$(this).removeClass('error_border');
		}
	} );
	 
	$('#home_ticket_form[name="home_ticket_form"] #vehicle').change(function(){
		
		if($(this).val() == 3){
			//default chon quan hoan kiem / Tran hung dao
				$('#depart_district').val(223);
				$('#depart_district').change();
				var thd = 3078;
				var itvSelectThd = setInterval(function(){
					
					if($('#depart_village option[value="'+thd+'"]').size() > 0){
						 
						$('#depart_village').val(thd);
						$('#depart_village').change();
						clearInterval(itvSelectThd);
					}
					
				}, 100);
			
			//chunk
			$('#chunk').val(1);
			
			//dimension
			$('input[name="dimension"][value="1"]').prop('checked', true);
			$('input[name="dimension"][value="1"]').change();
			 
			//alert
			jAlert('Hiện tại Minubus của Airporttaxi chỉ phục trên chặng Hà Nội đến Nội bài một chiều (không có chiều ngược lại)<br/>'+
							'Xuất phát tại số 1 Quang Trung, phường Trần Hưng Đạo, Hoàn Kiếm', 
							'Lưu ý');
		}
	});
	//submit home
	$('#home_ticket_form').submit(function(){
			 
			dimension = $(this).find('input[name="dimension"]:checked');
			
			//8. minibus chi chay 1 chiều hn - nb
			//10. Chiều hn - nb điểm đón khách là Quận hoàn kiếm/ Trần hưng đạo
			if($(this).find('#vehicle').val() == 3){
				
				// neu ko phai la mot chieu hoac ko phai la chang ha noi - noi bai
				if(dimension.val() != 1 || $(this).find('select[name="chunk"]').val() != 1){
					jAlert('Hiện tại Minubus của Airporttaxi chỉ phục trên chặng Hà Nội đến Nội bài một chiều (không có chiều ngược lại)<br/>'+
								 'Bạn vui lòng chọn lại');
					return false;
				} 
			}
			
			error = false;
			 
			$(this).find('select[name="chunk"], select[name="vehicle"], #depart_district, #depart_village, select[name="depart_day"], select[name="depart_month"]').each(function(){
				
				if($(this).val() == 0){
					error = true;
					$(this).addClass('error_border');
				}
			
			});
			  
			
			//KHU HOI
			
			if(dimension.val() == 3){
				$(this).find('#end_district, #end_village, select[name="end_day"], select[name="end_month"]').each(function(){
						
						if($(this).val() == 0){
							error = true;
							$(this).addClass('error_border');
						}
				});
			}
			
			
			if(!error) {
				
				formDat = $(this).serialize();
				 
				$.ajax({
								type: "POST",
								url: '/home/check_main_form',
								data: formDat,
								success: function(data){
									if(data.code == 1){
										jAlert(data.msg);
									}
									else{
										location.href = '/home/info?'+formDat;
									}
								},
								dataType: 'json'
							});

				
			}
			else{
				jAlert("Bạn hãy nhập tất cả các mục màu đỏ");
			}
			return false;
	});
	
	//info 
	$('.transaction select[name="depart_ride_method"], .transaction select[name="end_ride_method"]').change(function(){
	 
			rm = {1: 'auto', 2: 'chair'};
			var name = $(this).attr('name');
			
			if(name.indexOf('depart') > -1){
				type = 'depart';
			}
			else{
				type = 'end';
			} 
			
			i = $(this).val();
			for(var k in rm){
				
				obj = $('.transaction .unit.'+rm[k]+'.'+type);
				obj.addClass('hide');
				 
				if(i == k){
					
					obj.removeClass('hide');
				}
			}
			
			if(type == 'depart'){
				calcLength('depart'); 
			} 
			else{
				calcLength('end');
			}
			
	});
	
	//user select address
	$('#depart_city, #end_city').change(function(){
		
		ajaxGetCDV('city', $(this).val(), $(this).attr('renderTo'));
		
		$('#'+$('#'+$(this).attr('renderTo')).attr('renderTo')).html('');
		
		 if($(this).attr('id') == 'depart_city'){
				
				updateMap();
			}
		  else if(isInfoModule()){
		
				calcLength('end');
				 
			}
	});
	
	
	$('#depart_district, #end_district').change(function(){
		
		ajaxGetCDV('district', $(this).val(), $(this).attr('renderTo'));
		
			if($(this).attr('id') == 'depart_district'){
			
				updateMap();
			}
			else if(isInfoModule()){
		
				calcLength('end');
				 
			}
	}); 
	
	$('#depart_village, #end_village').change(function(){
		
		if($(this).attr('id') == 'depart_village'){
		
			updateMap();
		}
		else if(isInfoModule()){
	
			calcLength('end');
			 
		}
		 
		 
	}); 
	
	
	// home
	$('#in_mainleft input[name="dimension"]').change(function(){
		
		val = $('#in_mainleft input[name="dimension"]:checked').val();
	 
		if(val == 3) // khu hoi
		{
			$('#in_mainleft #end_frame').show();
		}
		else
		{
			$('#in_mainleft #end_frame').hide();
		}
	});
	
	//info
	$('#flightInfContainer0 select[name="depart_plane_type"], .transaction #depart_time').change(function(){
		 
		planeTime('depart');
	});
	
	$('#flightInfContainer0 select[name="end_plane_type"], .transaction #end_time').change(function(){
		 
		planeTime('end');
	});
	
	
	//backend 
	$('.btn_td_action').click(function(){
		 
		 var items = {};
		 $(this).parent().find('select, input').each(function(){
			
			items[$(this).attr('name')] = $(this).val();
		 });
		 
		if(confirm('Bạn chắc chắn nội dung cập nhật là Đúng ?')){
			$.ajax({
						type: "POST",
						url: '/backend_dev.php/ticket/update_ticket',
						data: items,
						success: function(data){
							if(data.code == 1){
								alert(data.msg);
							}
							else{
								alert('Cập nhật thành công');
								location.href = location.href;
							}
						},
						dataType: 'json'
					});
		}
	});
	
	//qtip
	$('.qt_info').each(function(){
										
		$(this).qtip({  
				content: {
						text: $($(this).attr('target_id')).html()
				}
		});
	});
	
  
 
	
}); 
  
	function planeTime(type){
		
		k = 'select[name="'+type+'_plane_type"]';
		v = $('select[name="'+type+'_time"]').val(); 
		
		var t = $('select[name="'+type+'_time"] option[value="'+v+'"]').attr('dtime');
		 
		var d = $('#'+type+'_date').val();
		 
    var ymd = d.split('-');
		  
		var time = t.split(':');
		 
		date = new Date(ymd[0], ymd[1], ymd[2], time[0], time[1]);
		
		if($('#'+type+'_chunk_hn_nb').val() == 1){
			if($(k).val() == 1) 
				date = addMinutes(date, 120);
			else
				date = addMinutes(date, 180);
		}
		else{
			date = addMinutes(date, -30);
		}
		day = date.getDate();
		day = day<10?'0'+day:day;
		
		month = date.getMonth();
		month = month<10?'0'+month:month;
		
		year = date.getFullYear(); 
		
		h = date.getHours();
		h = h<10?'0'+h:h;
		
		i = date.getMinutes();
		i = i<10?'0'+i:i;
		
		
		$('select[name="'+type+'_plane_time"] option').each(function(){
			
			if($(this).attr('dtime') == h+':'+i+':00'){
				 
				$('select[name="'+type+'_plane_time"]').val($(this).attr('value'));
			}
		});
		
		$('#'+type+'_plane_date').val(year+'-'+month+'-'+day); 
	}
	function addMinutes(date, minutes) {
    return new Date(date.getTime() + minutes*60000);
}

function ajaxGetCDV(type, idValue, renderToId){
	
	$.get('/prepare/cdv?type='+type+'&id='+idValue, function(data){
		
		txt = "";
		if(type == 'city'){
			txt = '<option value="0">Quận/Huyện</option>';
		} 
		$('#'+renderToId).html(data);
		
	});
}

var newwin;
function popup(url, event) {
	var w = 900;
	var h = 600;
	var left = (screen.width/2)-(w/2);
	var top = (screen.height/2)-(h/2);

	var windowName = "popUp";
	var params = "width="+w+",height="+h+",top="+top+",left="+left;
	
	newwin = window.open(url, windowName, params);
	if(event)
		event.preventDefault();
	
	if (window.focus) {newwin.focus()}
	return newwin;
}

function prepareCaptcha(frameId){
	
	obj = $('#captcha_reload, #captcha_img');
	if(frameId) { 
		obj = $(frameId).find('#captcha_reload, #captcha_img');
	}
	obj.click(function(){
		 
		reloadCaptcha(this);
	});
}

function reloadCaptcha(obj){
	$(obj).parent().find('#captcha_img').attr('src', '/captcha?t='+(new Date()).getTime());
}
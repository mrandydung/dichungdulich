
	$(document).ready(function(){
	
		//check for calcRoute
		if(marker[input_start_id] && marker[input_end_id])
		{
			calcRoute();
		}
		
		//blur
		$('#'+input_start_id+', #'+input_end_id).blur(function(){
			var id = $(this).attr('id');
			var suggest_id = suggest+'_'+id;
			var li = $('#'+suggest_id).find('.'+suggest_class_current);
			if(li.size() > 0)
			{
				var txt = li.html();
				$('#'+id).val(txt);
				setValue(id, li)
				clearListItems();
			}
			else if($('#'+id).val().length < 2)
			{
				$('#'+id).val('');
			}
			
		});
		
		// keyup
		$('#'+input_start_id+', #'+input_end_id).keyup(function(e){
			var id = $(this).attr('id');
			var suggest_id = suggest+'_'+id;
			
			var cli = $('#'+suggest_id).find('li.'+suggest_class_current);
			
			var list = $('#'+suggest_id+' li');
			var index = list.index(cli);
					
			switch (e.keyCode)
			{
				case 13: // enter
					setValue(id, cli);
					break;
					
				case 9: // tab
					
					break;
				case 27: // escape
					clearListItems();
					break;
				case 38: // up
					var prevItem = list.eq(index-1);
					if( prevItem.size() > 0)
					{
						list.removeClass(suggest_class_current);
						prevItem.addClass(suggest_class_current);
					}
					break;
				case 40: // down
					
					var nextItem = list.eq(index+1);
					if( nextItem.size() > 0)
					{
						list.removeClass(suggest_class_current);
						nextItem.addClass(suggest_class_current);
					}
					
					break;
				default:
					
					geocode(id);
					setTimeout(function(){
						hoverSuggest(id);
					}, 
					500);
					
					
			}
			return false;
		});
		
	});
	
	
	
	
	function setValue(id, li)
	{
		if(li.attr('latlng'))
		{
			var ln = li.attr('latlng').split(',');
			var txt = li.html();
			setMarker(id, txt, ln[0], ln[1]);
		}

	}
	
	function setMarker(id, address, lat, lng)
	{
		$('#'+id).val(address);
		
		clearMarker();
		clearListItems();
		addMarker(id, lat, lng);
		
		if(marker[input_start_id] && marker[input_end_id])
		{
			clearMarker();
			calcRoute();
		}
		updateBounds();
	}
	function addMarker(id, lat, lng, address)
	{
		$('#'+id+'_pos').val(lat+','+lng);
		var area = new google.maps.LatLng(lat, lng);
		if(typeof draggable == 'undefined')
		{
			draggable = true;
		}
		marker[id] = new google.maps.Marker({
				map:map,
				draggable: draggable,
				animation: google.maps.Animation.DROP,
				position: area,
				icon: 'http://maps.gstatic.com/mapfiles/markers2/icon_green'+icf[id]+'.png',
				
			});
			/*
			setTimeout(function(){
				var info_window = new google.maps.InfoWindow({content: ''});
				var v  = $('#'+id).val();
				info_window.content = v;
				info_window.open(map, marker[id]);
			}, 600);
			*/
			
				
			google.maps.event.addListener(marker[id], 'click', function() {
				var info_window = new google.maps.InfoWindow({content: ''});
				var v  = $('#'+id).val();
				info_window.content = v;
				info_window.open(map, marker[id]);
				
			});
			
			google.maps.event.addListener(marker[id], 'dragend',function() {
				
				var x = marker[id].position.lat();
				var y = marker[id].position.lng();
				$('#'+id+'_pos').val(x+','+y);
				getAddressByPos(id, x, y);
				
			});
	}
	function hoverSuggest(id)
	{
		var suggest_id = suggest+'_'+id;
		
		$('#'+suggest_id+' li').hover(function(){
			$('#'+suggest_id+' li').removeClass(suggest_class_current);
			$(this).addClass(suggest_class_current);
		});
	}
	
		function initialize() {
			
			if(typeof draggable == 'undefined')
			{
				draggable = true;
			}
			directionsDisplay = new google.maps.DirectionsRenderer({draggable: draggable});
			var zoom = 5;
			
			var myOptions = {
				zoom: zoom,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				center: vietnam
			};
			
			map = new google.maps.Map(document.getElementById('map'), myOptions);
			
			google.maps.event.addListener(directionsDisplay, 'directions_changed', function() {
			
				var leg = directionsDisplay.directions.routes[0].legs[0];
				
				$('#'+input_start_id).val(leg.start_address);
				$('#'+input_end_id).val(leg.end_address);
				
				$('#total_time').val(leg.duration.value);
				$('#total_length').val(leg.distance.value);
				$('#start_pos').val(leg.start_location.lat()+','+leg.start_location.lng());
				$('#end_pos').val(leg.end_location.lat()+','+leg.end_location.lng());
				
			});
			directionsDisplay.setMap(map);
			directionsDisplay.setPanel(document.getElementById('directions-panel'));
			
		}
		
		function getCurrentPosition(cid)
		{
			
			/////////////////get current location/////////////
			// Try W3C Geolocation (Preferred)
			if(navigator.geolocation) {
			
				browserSupportFlag = true;
				
				navigator.geolocation.getCurrentPosition(function(position) {
					var x = position.coords.latitude;
					var y = position.coords.longitude;
					
					initialLocation = new google.maps.LatLng(x, y);
					getAddressByPos(cid, x, y);
					addMarker(cid, x, y);
					
					map.setCenter(initialLocation);
					map.setZoom(14);
					
				}, function() {
					handleNoGeolocation(browserSupportFlag);
				});
			// Try Google Gears Geolocation
			} else if (google.gears) {
				browserSupportFlag = true;
				var geo = google.gears.factory.create('beta.geolocation');
				geo.getCurrentPosition(function(position) {
					
					var x = position.latitude;
					var y = position.longitude;
					getAddressByPos(cid, x, y);
					initialLocation = new google.maps.LatLng(x, y);
					map.setCenter(initialLocation);
					addMarker(cid, x, y);
					
					map.setZoom(14);
				}, function() {
					handleNoGeoLocation(browserSupportFlag);
				});
			// Browser doesn't support Geolocation
			} else {
				browserSupportFlag = false;
				handleNoGeolocation(browserSupportFlag);
			}
			
			function handleNoGeolocation(errorFlag) {
				
				if (errorFlag == true) {
					alert("dichung.vn không được phép lấy địa chỉ của bạn");
					initialLocation = vietnam;
				} else {
					alert("Trình duyệt của bạn không hỗ trợ lấy toạ độ hiện tại");
					initialLocation = vietnam;
				}
				map.setCenter(initialLocation);
			}
			
			/////////////////get end location/////////////
		}
		
		function clearMarker(id)
		{
			
			if(marker)
			{
				if(id)
				{
					marker[id].setMap(null);
				}
				else
				{
					for(var k in marker)
						marker[k].setMap(null);
				}
			}	
		}
		
		function calcRoute(view) 
		{
			
			if(view)
			{
				var start = new google.maps.LatLng(marker[input_start_id].getPosition().lat(), marker[input_start_id].getPosition().lng());
				var end = new google.maps.LatLng(marker[input_end_id].getPosition().lat(), marker[input_end_id].getPosition().lng());
			}
			else
			{
				var start = $('#start').val();
				var end =  $('#end').val();
			}
		/*
		//	var start = selectedObject.start?selectedObject.start.formatted_address:'';
		//	var end = selectedObject.end?selectedObject.end.formatted_address:'';
			
			var waypts = [];
			var checkboxArray = document.getElementById("waypoints");
			for (var i = 0; i < checkboxArray.length; i++) {
				if (checkboxArray.options[i].selected == true) {
					waypts.push({
							location:checkboxArray[i].value,
							stopover:true});
				}
			}*/

			var request = {
				origin: start,
				destination: end,
				
				//waypoints: waypts,
				//optimizeWaypoints: true,
				travelMode: google.maps.DirectionsTravelMode.DRIVING
			};
			
		
			
			directionsService.route(request, function(response, status) {
			directionsDisplay.setMap(map);
			if (status == google.maps.DirectionsStatus.OK) {
			
				directionsDisplay.setDirections(response);
				
			}
			else
			{
				directionsDisplay.setMap(null);
				var smarker = marker[input_start_id].getPosition();
				addMarker(input_start_id, smarker.lat(), smarker.lng());
				
				var emarker = marker[input_end_id].getPosition();
				addMarker(input_end_id, emarker.lat(), emarker.lng());
				
				updateBounds();
			}
			
		});
		}

		function updateBounds() {
				
				var bounds = new google.maps.LatLngBounds();
				
				if (marker[input_start_id] != null && marker[input_start_id].getVisible()) {
						bounds.extend(marker[input_start_id].getPosition());
				}
				
				if (marker[input_end_id] != null && marker[input_end_id].getVisible()) {
						bounds.extend(marker[input_end_id].getPosition());
				}
				
				if ((marker[input_end_id] == null || !marker[input_end_id].getVisible()) && (marker[input_start_id] == null || !marker[input_start_id].getVisible())) {
						// dont have either point now
						map.setCenter(new google.maps.LatLng(defaultLocation.lat, defaultLocation.lng));
						map.setZoom(13);
				} else if (marker[input_end_id] != null && marker[input_end_id].getVisible() && marker[input_start_id] != null && marker[input_start_id].getVisible()) {
						// have both points
						map.fitBounds(bounds);
				} else {
						// only have one
						map.setCenter(bounds.getCenter());
						if ( /*events.length > 0 &&  &&*/ (marker[input_start_id] == null || marker[input_end_id] == null) ) {
								map.setZoom(9);
						}
						else {
								map.setZoom(13);
						}
				}
		}

		function updateMap(respons){
			
			
			function doIt(respons){		
			if(!respons)return;
			respons.geometry && respons.geometry.viewport && map.fitBounds(respons.geometry.viewport);
				
				clearListItems();
			}
			doIt(respons);
			setTimeout(function(){doIt(respons)},100);

		}
		
		
		function getAddressByPos(cid, x, y)
		{
			
			$.ajax({url: '/ride/detect_address',
								type: 'post',
								data: {x: x,
											 y: y},
								success: function (data)
								{
									
									$('#'+cid).val(data);
									if(marker[input_start_id] && marker[input_end_id])
									{
										calcRoute();
									}
								}
							});
		}
		function toggleBounce() {
		
			if (marker[cid_search].getAnimation() != null) {
				marker[cid_search].setAnimation(null);
			} else {
				marker[cid_search].setAnimation(google.maps.Animation.BOUNCE);
			}
		}
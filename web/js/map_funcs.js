google.load("maps", "3", {other_params : "libraries=places,geometry&sensor=false", language : "vi"});
function GMapInit(id) {
	map = new google.maps.Map(document.getElementById(id), {
																	zoom: 5,
																	mapTypeId: google.maps.MapTypeId.ROADMAP
																});
		 
	directionsService = new google.maps.DirectionsService();
	
	
		
}
 
function GMapDrawRoute(route, callback, params, color, directDisplay, zIndex ){
		
		if(!color)
			color = "green";
		var request = {
				origin: route.origin,
				destination: route.destination,
				travelMode: google.maps.TravelMode.DRIVING
		};
		
		var directionsDisplay ;
		
		 
		if(directDisplay != null) {
			directionsDisplay = directDisplay;
		}
		else{
			directionsDisplay = new google.maps.DirectionsRenderer({	draggable: false, 
																																	suppressMarkers:true,
																																	 
																																	polylineOptions: {
																																		strokeColor: color,
																																		strokeWeight: zIndex?zIndex:3
																																	}});
		}
		directionsDisplay.setMap(map);
		
		directionsService.route(request, function(result, status) {
				
				if(!params)
					params = {};
			
				params.result = false;
				params.data = result;
				if (status == google.maps.DirectionsStatus.OK) {
					
					directionsDisplay.setDirections(result);
					params.result = true;
				}
				
				if(callback)
					callback(params);
		});
		return directionsDisplay;
}

/*
	GMapAddMarker( new google.maps.LatLng(lat, lng), http://google-maps-icons.googlecode.com/files/blue01.png);
	
*/
function GMapAddMarker(latLng, icon) {
	
	return new google.maps.Marker({ 
														map: map,
														position: latLng,
														draggable: true,
														icon: icon });
}
/*
	GmapGeocoder( "hanoi, vietnam", callback, params)
	
	GmapGeocoder( new google.maps.LatLng(lat, lng), callback, params)
*/
function GMapGeocoder( address, callback, params){
	var geocoder = new google.maps.Geocoder();
	options = {};
	if(address != null && typeof(address) == 'object')
		options['latLng'] = address;
	else
		options['address'] = address;
		
	geocoder.geocode(options, function(results, status) {
		
		if(!params)
			params = {};
		if (status == google.maps.GeocoderStatus.OK) {
			params['result'] = results[0];
			
			//results[0].geometry.location
			//results[0].geometry.location.lat()
			//results[0].geometry.location.lng()
			//results[0].formatted_address;
			
		} else {
			params['result'] = null;
		}
		
		if(callback){
			callback(params);
		}
	});
}


function GMapDrawCircle(latLng, radius) {
	    
	return new google.maps.Circle({
			center: latLng,
			radius: radius,
			strokeColor: "green",
			strokeOpacity: 1,
			strokeWeight: 2,
			fillColor: "green",
			fillOpacity: 0.2,
			map: map
	});  
	
}

function GMapDrawCircleBound(bound, radius) {
	  
	p1 = bound.getCenter();
	p2 = bound.getNorthEast();
	rad = calcLength(p1, p2)+50; 
	
	GMapDrawCircle(bound.getCenter(), rad);
	
}

/*
GmapGeocoder( new google.maps.LatLng(lat, lng), new google.maps.LatLng(lat1, lng1))
*/
function GMapCalcLength(p1, p2){
	var R = 6371; // Radius of the Earth in km
	var dLat = (p2.lat() - p1.lat()) * Math.PI / 180;
	var dLon = (p2.lng() - p1.lng()) * Math.PI / 180;
	var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
		Math.cos(p1.lat() * Math.PI / 180) * Math.cos(p2.lat() * Math.PI / 180) *
		Math.sin(dLon / 2) * Math.sin(dLon / 2);
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
	var d = R * c;
	rad = d*1000;
	return rad;
}
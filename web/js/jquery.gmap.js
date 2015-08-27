  google.load("maps", "3.6", {other_params : "libraries=places,geometry,geocode&sensor=false", language : "vi"});
     
  /*
  var gmap = $('#map').gmap();
    gmap.setCenter('Hanoi', 10);
     gmap.drawRoute('Hanoi', 'Haiphong', 'hnhp1', function (center, result) {
      //result.routes[0].legs[0].distance.value; //Met
      gmap.addMarker(center, null, 'ct', {title: 'test title'});
      gmap.moveMap('Hanoi', function () {
        gmap.map.setZoom(13)
      }); 
    }); 
    
    setTimeout(function () {
      gmap.drawRoute('Hanoi', 'San bay noi bai', 'hnhp1'); 
    }, 3000);
    
    gmap.addZoomListener(function (zoom) {
      for(var name in gmap.circles) {
        gmap.drawCircle(gmap.circles[name].getCenter(), name);
      }
    });
    
    
    gmap.geoComplete('#input_autocomplete', function (latlng) {
      gmap.setCenter(latlng, 15);
      gmap.drawCircle(latlng, 'center1')
      gmap.addMarker(latlng, 'http://www.airporttaxi.vn/images/marker.png', 'vietri', {title: 'test title'});
    });
  */
  (function($) {
    $.fn.gmap = function(params) {
        var
            map,
            geocoder = new google.maps.Geocoder(),
            markers = [],
            circles = [],
            directionsDisplay = [],
            directionsService = new google.maps.DirectionsService(),
            params = $.extend({}, params);

        params.id = $(this).attr('id');

        map = new google.maps.Map(
                document.getElementById(params.id),
                {
                    zoom: params.zoom ? params.zoom : 5,
                    mapTypeId: params.mapType ? params.mapType : google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    navigationControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    draggable: false,
                    disableDoubleClickZoom: false
                });
       
      
      function geocode(txt, callback) {
        geocoder.geocode( { 'address': txt}, function(results, status) { 
          if (status == google.maps.GeocoderStatus.OK) { 
            var center = results[0].geometry.location;
            if(callback) {
              callback(center);
            }
          }
        });
      }
      
      var addMarker = function (addr, icon, name, params) {
        
        var pr = {map: map };
        if(icon) {
          pr.icon = icon;
        }
        for(var k in params) {
          pr[k] = params[k];
        }
        
        if(markers[name]) {
          markers[name].setMap(null);
          delete markers[name];
        }
          
        if((typeof addr) == 'string') {
          
          geocode(addr, function(ret) {
            
            pr.position = ret;
               
            markers[name] = new google.maps.Marker(pr);
               
          });
           
        }
        else {
          //var addr = location.split(',');
          //new google.maps.LatLng(pos[0], pos[1]) 
          
          pr.position = addr;
         
          markers[name] = new google.maps.Marker(pr); 
        }
      }
      
      var addMarkers = function (params) {
        for(var i = 0; i < params.length; i ++) {
          addMarker(params[i].address, params[i].icon, params[i].name);
        } 
      }
      
      var removeMarker = function (name, del) {
        if(markers[name]) {
          markers[name].setMap(null);
          if(del)
            delete markers[name];
        } 
      }
      
      var removeMarkers = function (names, del) {
        for(var i = 0; i < names.length; i++ ) {
          removeMarker(names[i], del);
        } 
      }
      
      var clearMarkers = function (names, del) {
        for (var name in markers) {
          removeMarker(name, true);
        } 
      }
      
      
       
      var drawCenter = function (center, zoom) {
         
        zoom = zoom?zoom:(params.zoom?params.zoom:13);
        console.log(center);
        if(typeof center == 'string') { 
          
          geocode(center, function(ret) {
            console.log(ret);
            map.setCenter(ret);
            map.setZoom(zoom); 
          });
           
        } else {
          map.setCenter(center);
          map.setZoom(zoom); 
        }
      }
      
      var drawRoute = function (from, to, name, callback) {
      
        var request = {
            origin: from,
            destination: to,
            travelMode: google.maps.TravelMode.DRIVING
        };
        if(!directionsDisplay[name]) {
          directionsDisplay[name] = new google.maps.DirectionsRenderer({	draggable: false}); 
        }
        directionsDisplay[name].setMap(map); 
        
        directionsService.route(request, function(result, status) { 
          if (status == google.maps.DirectionsStatus.OK) {
            
            directionsDisplay[name].setDirections(result);
            
            if(callback) {
              callback(result.routes[0].bounds.getCenter(), result);
            } 
          } 
            
        });
      }
      
      var removeRoute = function (name) { 
        if(directionsDisplay[name]) {
          directionsDisplay[name].setMap(null);
          delete directionsDisplay[name];
        }
      }
      
      var clearRoutes = function () { 
        for(var name in directionsDisplay) {
          removeRoute(name);
        }
      }
      
      var geoComplete = function (id, callback){
        
        $(id)
          .geocomplete({autoselect: false})
          .bind("geocode:result", function(event, result) { 
            if(callback) {
              callback(result.geometry.location);
            } 
          })
          .bind("geocode:error", function(event, status) {
            $(this).val('');
          })
          .bind("geocode:multiple", function(event, results) {       
          });
      }
      
      
      var posToLatLng = function (strPos){
        
         strPoss = strPos.split(',');
         return new google.maps.LatLng(strPoss[0].replace(/ /g, ''), strPoss[1].replace(/ /g, ''));
      }
      
      var moveMap = function (center, callback) {
         
        if(typeof center == 'string') {
          geocode(center, function(ret) {
             map.panTo(ret); 
              if(callback)
                callback();
          });
        } else {
          map.panTo(center);
          if(callback)
                callback();
        }
      }
      
      function drawCircleAnimate(center, name) {
        console.log('draw circle animate: '+name);
        var div = '<div class="cd-single-point"></div>';
        if (circles[name]) {
          circles[name].setMap(null); 
          delete circles[name];
        }
        if(typeof center == 'string') {
          geocode(center, function(ret) {
          
            circles[name] = new RichMarker({
              position: ret,
              map: map,
              draggable: false,
              content: div});
          });
        } else {
          circles[name] = new RichMarker({
            position: center,
            map: map,
            draggable: false,
            content: div});
        }
        
        
      }
      
      function removeCircle(name) {
        if (circles[name]) {
          circles[name].setMap(null); 
          delete circles[name];
        }
      }
      
      var clearCircles = function (names) {
        for (var name in circles) {
          removeCircle(name, true);
        } 
      }
      
      
      function setCenter(center, zoom) {
        zoom = zoom?zoom:(params.zoom?params.zoom:15);
        if(typeof center == 'string') {
          geocode(center, function(ret) {
             
              map.setCenter(ret);
              map.setZoom(zoom);
          });
          
        } else {
          map.setCenter(center);
          map.setZoom(zoom); 
        }
      }
      
      
      
      return {  
        addMarker: addMarker,
        addMarkers: addMarkers, 
        drawCenter: drawCenter, 
        drawRoute: drawRoute, 
        removeRoute: removeRoute,
        clearRoutes: clearRoutes,
        removeMarker: removeMarker,
        removeMarkers: removeMarkers,
        clearMarkers: clearMarkers,
        geoComplete: geoComplete,
        geocode: geocode,
        posToLatLng: posToLatLng,
        moveMap: moveMap,  
        map: map, 
        drawCircleAnimate: drawCircleAnimate,
        removeCircle: removeCircle,
        clearCircles: clearCircles, 
        circles: circles,
        setCenter: setCenter};
    };
  })(jQuery);
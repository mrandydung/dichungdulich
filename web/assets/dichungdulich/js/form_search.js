$(document).ready(function(){
    $('#booking_form_start_date').datepicker({
    "dateFormat":"dd-mm-yy",
    showButtonPanel: true,
    showOtherMonths: true,
    selectOtherMonths: true,
    minDate:"+1",
    });
    var locat;
    var options;
    $("#booking_form_pick_address").geocomplete(options)
        .bind("geocode:result", function(event, result){
            locat = result.geometry.location;
            $('#coo_start').val(locat.lat()+','+locat.lng());
    });

  $('#booking_form_to_address').typeahead({
        name: 'search_end',
        hint: true,
        highlight: true,
        remote: {
          cache: true,
          url: '/home/search_end?search_end=%QUERY',
          filter: function (parsedResponse) {
          return parsedResponse;
          }
        }
    });
  });

$(function (){
    var locat,locat_2,locat_3,locat_4,locat_5;
    var options,options_2,options_3,options_4,options_5;
    $("#home_diem_den_item_address").geocomplete(options)
        .bind("geocode:result", function(event, result){
            locat = result.geometry.location;
            $('#home_diem_den_item_google_position').val(locat.lat()+','+locat.lng());
        });
   
     $("#transaction_service_address").geocomplete(options_2)
        .bind("geocode:result", function(event, result){
            locat_2 = result.geometry.location;
            $('#transaction_service_coo').val(locat_2.lat()+','+locat_2.lng());
            $('#transaction_service_lat').val(locat_2.lat());
            $('#transaction_service_lng').val(locat_2.lng());
        });
    $("#project_address_googlemap").geocomplete(options_3)
    .bind("geocode:result", function(event, result){
        locat_3 = result.geometry.location;
        $('#project_coo').val(locat_3.lat()+','+locat_3.lng());
        $('#project_lat').val(locat_3.lat());
        $('#project_lng').val(locat_3.lng());
    });
    $("#home_diem_den_quoc_te_address").geocomplete(options_4)
        .bind("geocode:result", function(event, result){
            locat_4= result.geometry.location;
            $('#home_diem_den_quoc_te_google_position').val(locat_4.lat()+','+locat_4.lng());
    });
    $("#home_diem_den_item_partner_address").geocomplete(options_5)
        .bind("geocode:result", function(event, result){
            locat_5= result.geometry.location;
            $('#home_diem_den_item_partner_google_position').val(locat_5.lat()+','+locat_5.lng());
    });
});
 
     
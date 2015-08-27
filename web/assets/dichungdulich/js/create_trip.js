function setDatepickerStart()
{
    $( "#creat_trip_form_fix_start_start_date" ).datepicker({
        "dateFormat":"dd-mm-yy",
        showButtonPanel: true,
        showOtherMonths: true,
        selectOtherMonths: true,
        minDate:"+1",
        onClose: function(date) {
            var day = date.split("-");
            var strdate = new Date(day[2],day[1],day[0]);
            var time = strdate.getTime()/1000 ;
            var d = new Date(time*1000);
            var dt = d.getDate() + '-' + (d.getMonth()) + '-' + d.getFullYear();
            $( "#creat_trip_form_fix_start_end_date" ).datepicker( "option", "minDate",dt);
        }
    });
}

function setDatePickerRequestDayStart(){
    $( "#request_day_start_date" ).datepicker({
        "dateFormat":"dd-mm-yy",
        showButtonPanel: true,
        showOtherMonths: true,
        selectOtherMonths: true,
        minDate:"+1",
    });
}

function setDatepickerEnd()
{
    $( "#creat_trip_form_fix_start_end_date" ).datepicker({
        "dateFormat":"dd-mm-yy",
        showButtonPanel: true,
        showOtherMonths: true,
        minDate:"+̣̣1",
        onClose: function( date ) {
            $( "#datepicker_start" ).datepicker( "option", "maxDate", date );
        }
    });
}
function setDatepickerStartDiscount(date_start,date_end)
{
    $(date_start).datepicker({
        "dateFormat":"dd-mm-yy",
        showButtonPanel: true,
        showOtherMonths: true,
        selectOtherMonths: true,
        minDate:"+1",
        onClose: function(date) {
            var day = date.split("-");
            var strdate = new Date(day[2],day[1],day[0]);
            var time = strdate.getTime()/1000;
            var d = new Date(time*1000);
            var dt = d.getDate() + '-' + (d.getMonth()) + '-' + d.getFullYear();
            $(date_end ).datepicker( "option", "minDate",dt);
        }
    });
}
function setDatepickerEndDiscount(date_end,date_start)
{
    $(date_end).datepicker({
        "dateFormat":"dd-mm-yy",
        showButtonPanel: true,
        showOtherMonths: true,
        minDate:"+1",
        onClose: function( date ) {
            $(date_start).datepicker( "option", "maxDate", date );
        }
    });
}

function check_enable_create(check_enable_step){
    if(check_enable_step == '5'){
        $('#preview_tour').removeAttr("disabled");
        $('#create_tour').removeAttr("disabled");
        $('#content_step_finish').html('Đã hoàn thành các bước').hide().fadeIn();
    }else{
        $('#still_step').html(5 - check_enable_step).hide().fadeIn();
    }
}
$(document).ready(function(){      
    setDatepickerStartDiscount('#creat_trip_day_discount_start_date','#creat_trip_day_discount_end_date');
    setDatepickerEndDiscount('#creat_trip_day_discount_end_date','#creat_trip_day_discount_start_date');
    var pathname = window.location.pathname;
    // if(pathname.search('dang-tour-du-lich') != -1){
        var locat;
        var options;
        $("#start").geocomplete(options)
        .bind("geocode:result", function(event, result){
            locat = result.geometry.location;
            $('#hidden_start').val(locat.lat()+','+locat.lng());
        });
    // }

    $('input[type="checkbox"]').click(function(){
        if($(this).attr("value")=="add_date"){
            $(".add_date").toggle();
        }
    });

   

    $('#type_pricing_service_id').change(function(){
        var type_pricing_service_id = $('#type_pricing_service_id').val();
        if(type_pricing_service_id == '1'){
            $('#price_tour').val('');
            $('#price_tour').attr('disabled',false);
            $('#content_change_select_type_pricing_service').fadeIn();
        }
        if(type_pricing_service_id == '2'){
            $('#price_tour').attr('disabled',true);
            $('#price_tour').val('Thỏa thuận');
            $('#content_change_select_type_pricing_service').fadeOut();
        }
    });

    $('#tour_time_type').change(function(){
        $('#popup_success_time').hide();
        $('#popup_error_time').hide();
        var tour_time_type = $('#tour_time_type').val();
        if(tour_time_type == '1'){
            $('#daily_start_time').hide();
            $('#weekly_start_time').hide();
            $('#request_start_time').hide();
            $('#fix_start_time').show();
            setDatepickerStart();
            setDatepickerEnd();
        }else if (tour_time_type == '2'){
            $('#fix_start_time').hide();
            $('#weekly_start_time').hide();
            $('#request_start_time').hide();
            $('#daily_start_time').show();
        }else if (tour_time_type == '3'){
            $('#fix_start_time').hide();
            $('#daily_start_time').hide();
            $('#request_start_time').hide();
            $('#weekly_start_time').show();
        }else if (tour_time_type == '4'){
            $('#fix_start_time').hide();
            $('#daily_start_time').hide();
            $('#weekly_start_time').hide();
            $('#request_start_time').show();
            setDatePickerRequestDayStart();
        }
        else{
            $('#fix_start_time').hide();
            $('#daily_start_time').hide();
            $('#weekly_start_time').hide();
        }
    });
$('#lich_trinh_co_ban').click(function(){
    $('#lich_trinh_chi_tiet').removeClass('active');
    $('#lich_trinh_co_ban').addClass('active');
    $('#complicate').hide();
    $('#simple').show();
});
$('#lich_trinh_chi_tiet').click(function(){
    $('#lich_trinh_co_ban').removeClass('active');
    $('#lich_trinh_chi_tiet').addClass('active');
    $('#simple').hide();
    $('#complicate').show();
});
$('body').on("click","#update_time",function(){
    tinyMCE.triggerSave();
    var tour_id = $('#tour_id').val();
    var tour_time_type = $('#tour_time_type').val();
    var tour_title = $('#tour_title').val();
    var tour_description = $('#tour_description').val();
    if(tour_time_type == 0){
        $('#popup_error_time').html('Bạn chưa chọn thời gian khởi hành').hide().fadeIn();
        $('#icon_success_time').hide();
        return false;
    }else if(!tour_title){
     $('#popup_error_time').html('Bạn chưa nhập tiêu đề tour').hide().fadeIn();
     $('#icon_success_time').hide();
    }else if(!tour_description){
     $('#popup_error_time').html('Bạn chưa nhập mô tả tour').hide().fadeIn();
     $('#icon_success_time').hide();
     return false;
     }else{
        var creat_trip_form_fix_start_start_date = $('#creat_trip_form_fix_start_start_date').val();
        var creat_trip_form_fix_start_end_date = $('#creat_trip_form_fix_start_end_date').val();
        var creat_trip_form_fix_start_start_hour = $('#creat_trip_form_fix_start_start_hour').val();
        var creat_trip_form_daily_start_hour = $('#creat_trip_form_daily_start_hour').val();
        var creat_trip_form_daily_start_day_long = $('#creat_trip_form_daily_start_day_long').val();
        var select_date_request_service_day_long = $('#select_date_request_service_day_long').val();
        var arr_checkbox = [];
        $('.checkbox_week:checked').each(function(i){
         arr_checkbox[i] = $(this).val();
     });
    if(tour_time_type == 3){
        if(arr_checkbox.length == 0){
            $('#popup_error_time').html('Bạn chưa chọn thứ trong tuần')
            $('#popup_error_time').fadeIn();
            $('#icon_success_time').hide();
            return false;
        }
    }
    var creat_trip_form_weekly_start_hour = $('#creat_trip_form_weekly_start_hour').val();
    var creat_trip_form_weekly_start_time_category_day = $('#creat_trip_form_weekly_start_time_category_day').val();
    $('#popup_error_time').hide();
    jQuery.ajax({ type: "POST",url: "/tripManager/update_time_tour",dataType:"json", 
      data:{"tour_id":tour_id,"tour_time_type":tour_time_type,"creat_trip_form_fix_start_start_date":creat_trip_form_fix_start_start_date,
      "creat_trip_form_fix_start_end_date":creat_trip_form_fix_start_end_date,"creat_trip_form_fix_start_start_hour":creat_trip_form_fix_start_start_hour,
      "creat_trip_form_daily_start_hour":creat_trip_form_daily_start_hour,"creat_trip_form_daily_start_day_long":creat_trip_form_daily_start_day_long,"select_date_request_service_day_long":select_date_request_service_day_long,
      "arr_checkbox":arr_checkbox,"creat_trip_form_weekly_start_hour":creat_trip_form_weekly_start_hour,"creat_trip_form_weekly_start_time_category_day":creat_trip_form_weekly_start_time_category_day,
      "tour_title":tour_title,"tour_description":tour_description}, 
      success:function(response){
        var code = response.code;
        var msg = response.msg;
        if(code == '1'){
            $('#popup_success_time').hide();
            $('#popup_error_time').html(msg)
            $('#popup_error_time').hide().fadeIn();
            $('#icon_success_time').hide();
        }
        if(code == '2'){
            $('#popup_error_time').hide();
            $('#popup_success_time').html(msg);
            $('#popup_success_time').hide().fadeIn();
            $('#icon_success_time').html('<span class="badge check glyphicon glyphicon-ok"> </span>').fadeIn();
            var check_enable_step = response.check_enable_step;
            check_enable_create(check_enable_step);
        }
    },
});
}
});

$('body').on("click","#update_price",function(){
    tinyMCE.triggerSave();
    $("html, body").animate({ scrollTop: 0 }, "slow");
    var tour_id = $('#tour_id').val();
    var number_seat_tour = $('#number_seat_tour').val();
    var price_tour = $('#price_tour').val();
    if(!price_tour || price_tour == '0'){
        $('#popup_success_price').hide();
        $('#popup_error_price').html('Bạn chưa nhập giá/ khách')
        $('#popup_error_price').fadeIn();
        $('#icon_success_cost').hide();
        return false;
    }
    var number_seat_min_tour = $('#number_seat_min_tour').val();
    if(parseInt(number_seat_min_tour) > parseInt(number_seat_tour)){
        $('#popup_success_price').hide();
        $('#popup_error_price').html('Số khách tối thiểu không lớn hơn số khách tối đa'+number_seat_min_tour+'-'+number_seat_tour);
        $('#popup_error_price').fadeIn();
        $('#icon_success_cost').hide();
        return false;
    }
    var creat_trip_add_child_price = 0;
    $('#checkbox_kid_price').is(":checked") ? creat_trip_add_child_price=1 : creat_trip_add_child_price=0;
    var checkbox_discount_tour_day = 0;
    $('#checkbox_discount_tour_day').is(":checked") ? (checkbox_discount_tour_day=1) : checkbox_discount_tour_day=0;
    var checkbox_discount_tour_number = 0;
    $('#checkbox_discount_tour_number').is(":checked") ? checkbox_discount_tour_number=1 : checkbox_discount_tour_number=0;
    var checkbox_price_tour_service = 0;
    $('#checkbox_price_tour_service').is(":checked") ? checkbox_price_tour_service=1 : checkbox_price_tour_service=0;
    var checkbox_booking_fast = 0;
    $('#allow_booking_fast').is(":checked") ? checkbox_booking_fast=1 : checkbox_booking_fast=0;
    var payment_type_id = $('#payment_type_id').val();
    var security_deposit = $('#security_deposit').val();
    var type_pricing_service_id = $('#type_pricing_service_id').val();
    var arr_discount_tour_day_add_new = [];
    var arr_discount_tour_number_add_new = [];
    var arr_discount_tour_number_discount_number_add_new = [];
    var arr_from_age_add_new= [];
    var arr_to_age_add_new = [];
    var arr_price_kid_add_new = [];

    $('select#price_kid_add_new').each(function(){
        arr_price_kid_add_new.push({id: $(this).attr("data-id"),discount : $(this).val()});
    });
    $('select#from_age_add_new').each(function(){
        arr_from_age_add_new.push({id: $(this).attr("data-id"),from : $(this).val()}); 
    });
    $('select#to_age_add_new').each(function(){
        arr_to_age_add_new.push({id: $(this).attr("data-id"),to : $(this).val()}); 
    });
    $('select#select_discount_tour_day_add_new').each(function(){
        arr_discount_tour_day_add_new.push({id: $(this).attr("data-id"),discount : $(this).val()}); 
    });

    $('select#select_discount_tour_number_add_new').each(function(){
        arr_discount_tour_number_add_new.push({id: $(this).attr("data-id"),discount : $(this).val()}); 
    });
    $('select#select_number_discount_number_add_new').each(function(){
        arr_discount_tour_number_discount_number_add_new.push({id: $(this).attr("data-id"),number : $(this).val()}); 
    });
    var arr_title_service_add_new = [];
    var arr_price_service_add_new = [];
    $('input#title_service_add_new').each(function(){
        arr_title_service_add_new.push({id: $(this).attr("data-id"),title : $(this).val()}); 
    });
    $('input#price_service_add_new').each(function(){
        arr_price_service_add_new.push({id: $(this).attr("data-id"),price : $(this).val()}); 
    });
    jQuery.ajax({ type: "POST",url: "/tripManager/update_price_tour",dataType:"json", 
        data:{"tour_id":tour_id,"payment_type_id":payment_type_id,"security_deposit":security_deposit,"type_pricing_service_id":type_pricing_service_id,"number_seat_min_tour":number_seat_min_tour,"number_seat_tour":number_seat_tour,"price_tour":price_tour,"creat_trip_add_child_price":creat_trip_add_child_price,
        "checkbox_discount_tour_day":checkbox_discount_tour_day,"checkbox_discount_tour_number":checkbox_discount_tour_number,"arr_price_kid_add_new":arr_price_kid_add_new,"arr_from_age_add_new":arr_from_age_add_new,
        "arr_to_age_add_new":arr_to_age_add_new,"arr_discount_tour_day_add_new":arr_discount_tour_day_add_new,"checkbox_booking_fast":checkbox_booking_fast,
        "arr_discount_tour_number_add_new":arr_discount_tour_number_add_new,"arr_discount_tour_number_discount_number_add_new":arr_discount_tour_number_discount_number_add_new,
        "checkbox_price_tour_service":checkbox_price_tour_service,"arr_title_service_add_new":arr_title_service_add_new,"arr_price_service_add_new":arr_price_service_add_new},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
                $('#popup_success_price').hide();
                $('#popup_error_price').html(msg)
                $('#popup_error_price').hide().fadeIn();
                $('#icon_success_cost').hide();
            }
            if(code == '2'){
                $('#popup_error_price').hide();
                $('#popup_success_price').html(msg)
                $('#popup_success_price').hide().fadeIn();
                $('#icon_success_cost').html('<span class="badge check glyphicon glyphicon-ok"> </span>').fadeIn();
                var check_enable_step = response.check_enable_step;
                check_enable_create(check_enable_step);
            }
        },
    });
});    

$('body').on("click","#update_note",function(){
    tinyMCE.triggerSave();
    var tour_id = $('#tour_id').val();
    var tour_note = $('#tour_note').val();
    var policy_price = $('#policy_price').val();
    var policy_ticket = $('#policy_ticket').val();
    jQuery.ajax({ type: "POST",url: "/tripManager/update_note_tour",dataType:"json", 
        data:{"tour_id":tour_id,"tour_note":tour_note,"policy_price":policy_price,"policy_ticket":policy_ticket},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
                $('#popup_success_note').hide();
                $('#popup_error_note').html(msg)
                $('#popup_error_note').hide().fadeIn();
                $('#icon_success_note').hide();
            }
            if(code == '2'){
                $('#popup_error_note').hide();
                $('#popup_success_note').html(msg)
                $('#popup_success_note').hide().fadeIn();
                $('#icon_success_note').html('<span class="badge check glyphicon glyphicon-ok"> </span>').fadeIn();
                var check_enable_step = response.check_enable_step;
                check_enable_create(check_enable_step);
            }
        },
    });
});


$('body').on("click","#update_schedule",function(){
 $("html, body").animate({ scrollTop: 0 }, "slow");
 var tour_id = $('#tour_id').val();
 tinyMCE.triggerSave();
 var start = $('#start').val();
 var end = $('#end').val();
 var tour_detail = $('#tour_detail').val();
 var arr_end_new = [];
 $('input#end_new_item').each(function(){
    arr_end_new.push({id: $(this).attr("data-id"),name_end : $(this).val()}); 
});
 jQuery.ajax({ type: "POST",url: "/trip_manager_personal/update_schedule_tour",dataType:"json", 
    data:{"tour_id":tour_id,"tour_detail":tour_detail,"arr_end_new":arr_end_new,"start":start,"end":end},
    success:function(response){
        var code = response.code;
        var msg = response.msg;
        if(code == '1'){
            $('#popup_success_schedule').hide();
            $('#popup_error_schedule').html(msg)
            $('#popup_error_schedule').hide().fadeIn();
            $('#icon_success_schedule').hide();
        }
        if(code == '2'){
            $('#popup_error_schedule').hide();
            $('#popup_success_schedule').hide();
            $('#div_loading').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>').fadeIn();
            setTimeout(
                function() 
                {
                    $('#popup_success_schedule').html(msg)
                    $('#popup_success_schedule').hide().fadeIn();
                    $('#icon_success_schedule').html('<span class="badge check glyphicon glyphicon-ok"> </span>').fadeIn();
                    var check_enable_step = response.check_enable_step;
                    $('#div_loading').hide();
                    check_enable_create(check_enable_step);
                }, 1500);

        }
    },
});
});

$("body").on("click",'#add_new_end',function(){
    var end = $('#end_new').val();
    var tour_id = $('#tour_id').val();
    jQuery.ajax({ type: "POST",url: "/trip_manager_personal/add_new_end",dataType:"json", 
        data:{"end":end,"tour_id":tour_id},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
                $('#end_new').val('');
                var html = response.html;
                $('#content_add_new_diem_den').append(html).hide().fadeIn('slow');

            }if(code == '2'){
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#popup_success_schedule').hide();
                $('#popup_error_schedule').html(msg).hide().fadeIn();
            }
        },
    });
});

$("body").on("click",'.delete_new_end',function(){
    var clickedID = this.id.split("-");
    var coo_item_id = clickedID[1];
    jQuery.ajax({ type: "POST",url: "/trip_manager_personal/delete_new_end",dataType:"json", 
        data:{"coo_item_id":coo_item_id},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
                var coo_item_id_rp = response.coo_item_id_rp;
                $('#item_coo_'+coo_item_id_rp).fadeOut('slow').remove();
            }
        },
    });
});


$('body').on("click",".delete_image",function(){
        var clickedID = this.id.split("-"); //Split string (Split works as PHP explode)
        var tour_item_img_id = clickedID[1];
        jQuery.ajax({ type: "POST",url: "/tripManager/delete_image_tour",dataType:"json", 
            data:{"tour_item_img_id":tour_item_img_id},
            success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == '1'){
                    var div_id = response.div_id;
                    $('#div_img_'+div_id).remove();
                }
            },
        });
    });

$('body').on("click","#update_utilities",function(){
    $("html, body").animate({ scrollTop: 0 }, "slow");
    var arr_utilities = [];
    var i = 0;
    $('.ads_Checkbox:checked').each(function(){
     arr_utilities[i++]= {id : $(this).val(),name : $(this).attr("name")}; 
 });
    var arr_sorting = [];
    $('.ads_Checkbox_sorting:checked').each(function(){
     arr_sorting[i++]= {id : $(this).val(),name : $(this).attr("name")}; 
 });

    var arr_activities = [];
    $('.ads_Checkbox_activities:checked').each(function(){
     arr_activities[i++]= {id : $(this).val(),name : $(this).attr("name")}; 
 });

    var arr_object_fit = [];
    $('.ads_Checkbox_object_fit:checked').each(function(){
     arr_object_fit[i++]= {id : $(this).val(),name : $(this).attr("name")}; 
 });

    var tour_id = $('#tour_id').val();
    jQuery.ajax({ type: "POST",url: "/tripManager/update_utilities_tour",dataType:"json", 
        data:{"arr_utilities":arr_utilities,"arr_sorting":arr_sorting,"arr_activities":arr_activities,"arr_object_fit":arr_object_fit,"tour_id":tour_id},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
                $('#popup_error_utilities').hide()
                $('#popup_success_utilities').html(msg);
                $('#popup_success_utilities').hide().fadeIn();
                $('#icon_success_utilities').html('<span class="badge check glyphicon glyphicon-ok"> </span>').fadeIn();
                var check_enable_step = response.check_enable_step;
                check_enable_create(check_enable_step);
            }
            if(code == '2'){
                $('#popup_success_utilities').hide();
                $('#popup_error_utilities').html(msg);
                $('#popup_error_utilities').hide().fadeIn();
                $('#icon_success_utilities').hide();
            }

        },
    });
});

$('body').on('click','#click_lay_ma_xac_thuc',function(){
    var phone_number = $('#phone_number').val();
    if(phone_number){
       jQuery.ajax({ type: "POST",url: "/tripManager/check_verified_phone",dataType:"json", 
        data:{"phone_number":phone_number},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
                $('#popup_error_ma_xac_thuc').html(msg);
                $('#popup_error_ma_xac_thuc').fadeIn();
            }if(code == '2'){
               $('#phone_number').attr('disabled', true); ;
               $('#div_verified_phone').fadeIn();
           }
       },
   });
   }else{   
    $('#popup_error_ma_xac_thuc').html('Bạn vui lòng nhập số điện thoại');
    $('#popup_error_ma_xac_thuc').fadeIn();
}
});

$('body').on('click','#submit_verified_phone',function(){
    var tour_id = $('#tour_id').val();
    var ma_xac_thuc = $('#ma_xac_thuc').val();
    if(ma_xac_thuc){
        jQuery.ajax({ type: "POST",url: "/tripManager/submit_verified_phone",dataType:"json", 
            data:{"ma_xac_thuc":ma_xac_thuc,"tour_id":tour_id},
            success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == '2'){
                    $('#popup_error_ma_xac_thuc').html(msg);
                    $('#popup_error_ma_xac_thuc').fadeIn();
                }if(code == '1'){
                    var url = response.url;
                    window.location.href = url;
                }
            },
        });
    }else{
        $('#popup_error_ma_xac_thuc').html('Bạn chưa nhập mã xác thực');
        $('#popup_error_ma_xac_thuc').fadeIn();
    }
});


$('#create_tour').click(function(){
    var tour_id = $('#tour_id').val();
    jQuery.ajax({ type: "POST",url: "/tripManager/success_created",dataType:"json", 
        data:{"tour_id":tour_id,"check_enable_step":check_enable_step},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
                var url = response.url;
                window.location.href = url;
            }
            if(code == '2'){
                $('#content_verified_phone').modal();
            }
        },
    });
});

$("body").on("click",'#add_new_price_kid',function(){
    var tour_id = $('#tour_id').val();
    var price_kid_add = $('#price_kid_add').val();
    var from_age = $('#from_age').val();
    var to_age = $('#to_age').val();
    jQuery.ajax({ type: "POST",url: "/tripManager/create_more_price_kid",dataType:"json", 
        data:{"tour_id":tour_id,"price_kid_add":price_kid_add,"from_age":from_age,"to_age":to_age},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
               var html = response.html;
               $('#div_checkbox_kid_price').append(html).hide().fadeIn('slow');
               $('#from_age').val(0);
               $('#to_age').val(0);
               $('#price_kid_add').val(0);


           }if(code == '2'){
            $("html, body").animate({ scrollTop: 0 }, "slow");
            $('#popup_success_price').hide();
            $('#popup_error_price').html(msg).hide().fadeIn();
        }
    },
});
});

$("body").on("click",'.delete_price_kid_add_new',function(){
        var clickedID = this.id.split("-"); //Split string (Split works as PHP explode)
        var price_kid_item_id = clickedID[1];
        jQuery.ajax({ type: "POST",url: "/tripManager/delete_price_kid_add_new",dataType:"json", 
            data:{"price_kid_item_id":price_kid_item_id},
            success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == '1'){
                    var price_kid_item_id_rp = response.price_kid_item_id_rp;
                    $('#item_coo_price_kid-'+price_kid_item_id_rp).fadeOut('slow').remove();
                }
            },
        });
    });

$("body").on("click",'#add_new_price_discount_tour_day',function(){
    var tour_id = $('#tour_id').val();
    var creat_trip_day_discount_start_date = $('#creat_trip_day_discount_start_date').val();
    var creat_trip_day_discount_end_date = $('#creat_trip_day_discount_end_date').val();
    var select_discount_tour_day = $('#select_discount_tour_day').val();
    var select_discount_event = $('#select_discount_event').val();
    var arr_day_discount_start_date_new_add = [];
    var arr_day_discount_end_date_new_add = []
    $('input#day_discount_start_date_new_add').each(function(){
        arr_day_discount_start_date_new_add.push({id: $(this).attr("data-id"),start_date : $(this).val()}); 
    });
    $('input#day_discount_end_date_new_add').each(function(){
        arr_day_discount_end_date_new_add.push({id: $(this).attr("data-id"),end_date : $(this).val()}); 
    });
    jQuery.ajax({ type: "POST",url: "/tripManager/create_new_price_discount_tour_day",dataType:"json", 
        data:{"tour_id":tour_id,"creat_trip_day_discount_start_date":creat_trip_day_discount_start_date,"select_discount_event":select_discount_event,
        "creat_trip_day_discount_end_date":creat_trip_day_discount_end_date,"select_discount_tour_day":select_discount_tour_day,
        "arr_day_discount_start_date_new_add":arr_day_discount_start_date_new_add,"arr_day_discount_end_date_new_add":arr_day_discount_end_date_new_add},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
               var html = response.html;
               $('#div_checkbox_discount_tour_day').append(html).hide().fadeIn('slow');
               $('#select_discount_tour_day').val(0);
               $('#select_discount_event').val(0);
               $('#creat_trip_day_discount_start_date').val('');
               $('#creat_trip_day_discount_end_date').val('');

           }if(code == '2'){
            $("html, body").animate({ scrollTop: 0 }, "slow");
            $('#popup_success_price').hide();
            $('#popup_error_price').html(msg).hide().fadeIn();
        }
    },
});
});

$("body").on("click",'.delete_new_price_discount_tour_day',function(){
    var clickedID = this.id.split("-");
    var item_tour_discount_day_id = clickedID[1];
    jQuery.ajax({ type: "POST",url: "/tripManager/delete_new_price_discount_tour_day",dataType:"json", 
        data:{"item_tour_discount_day_id":item_tour_discount_day_id},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
                var item_tour_discount_day_id_rp = response.item_tour_discount_day_id_rp;
                $('#item_tour_discount_day-'+item_tour_discount_day_id_rp).fadeOut('slow').remove();
            }
        },
    });
});

$("body").on("click",'#add_new_price_discount_tour_number',function(){
    var tour_id = $('#tour_id').val();
    var select_discount_tour_number = $('#select_discount_tour_number').val();
    var select_number_discount_number = $('#select_number_discount_number').val();
    jQuery.ajax({ type: "POST",url: "/tripManager/create_new_price_discount_tour_number",dataType:"json", 
        data:{"tour_id":tour_id,"select_discount_tour_number":select_discount_tour_number,"select_number_discount_number":select_number_discount_number},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
               var html = response.html;
               $('#div_checkbox_discount_tour_number').append(html).hide().fadeIn('slow');
               $('#select_discount_tour_number').val(0);
               $('#select_number_discount_number').val(0);

           }if(code == '2'){
            $("html, body").animate({ scrollTop: 0 }, "slow");
            $('#popup_success_price').hide();
            $('#popup_error_price').html(msg).hide().fadeIn();
        }
    },
});
});

$("body").on("click",'.delete_new_price_discount_tour_number',function(){
    var clickedID = this.id.split("-");
    var item_tour_discount_number_id = clickedID[1];
    jQuery.ajax({ type: "POST",url: "/tripManager/delete_new_price_discount_tour_number",dataType:"json", 
        data:{"item_tour_discount_number_id":item_tour_discount_number_id},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
                var item_tour_discount_number_id_rp = response.item_tour_discount_number_id_rp;
                $('#item_tour_discount_number-'+item_tour_discount_number_id_rp).fadeOut('slow').remove();
            }
        },
    });
});

$("body").on("click",'#add_new_price_tour_service',function(){
    var tour_id = $('#tour_id').val();
    var title_service = $('#title_service').val();
    var price_service = $('#price_service').val();
    var price_tour = $('#price_tour').val();
    var type_pricing_service_id = $('#type_pricing_service_id').val();
    jQuery.ajax({ type: "POST",url: "/tripManager/add_new_price_tour_service",dataType:"json", 
        data:{"tour_id":tour_id,"title_service":title_service,"price_service":price_service,"price_tour":price_tour,"type_pricing_service_id":type_pricing_service_id},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
               var html = response.html;
               $('#div_checkbox_price_tour_service').append(html).hide().fadeIn('slow');
               $('#title_service').val('');
               $('#price_service').val('');

           }if(code == '2'){
            $("html, body").animate({ scrollTop: 0 }, "slow");
            $('#popup_success_price').hide();
            $('#popup_error_price').html(msg).hide().fadeIn();
        }
    },
});
});

$("body").on("click",'.delete_new_price_service_tour',function(){
    var clickedID = this.id.split("-");
    var item_price_service_tour_id = clickedID[1];
    jQuery.ajax({ type: "POST",url: "/tripManager/delete_new_price_service_tour",dataType:"json", 
        data:{"item_price_service_tour_id":item_price_service_tour_id},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
                var item_price_service_tour_id_rp = response.item_price_service_tour_id_rp;
                $('#item_tour_price_service-'+item_price_service_tour_id_rp).fadeOut('slow').remove();
            }
        },
    });
});

$("body").on("change",'#payment_type_id',function(){
    var payment_type_id = $('#payment_type_id').val();
    if(payment_type_id == '1'){
        $('#div_security_deposit').hide();
    }
    if(payment_type_id == '2'){
        $('#div_security_deposit').show(350);
    }
});

$("#add_new_date_request_service").on("click",function(){
    var tour_id = $('#tour_id').val();
    var request_day_start_date = $('#request_day_start_date').val();
    if(!request_day_start_date){
        $("html, body").animate({ scrollTop: 0 }, "slow");
        $('#popup_success_time').hide();
        $('#popup_error_time').html('Bạn chưa chọn ngày khởi hành').hide().fadeIn();
    }else{
        jQuery.ajax({ type: "POST",url: "/ request_day_start_date/add_new_date_request_service",dataType:"json", 
            data:{"tour_id":tour_id,"request_day_start_date":request_day_start_date},
            success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == 'success'){
                   var html = response.html;
                   $('#div_new_date_request_service').append(html).hide().fadeIn('slow');
                   $('#request_day_start_date').val('');

               }if(code == 'error'){
                $("html, body").animate({ scrollTop: 0 }, "slow");
                $('#popup_success_time').hide();
                $('#popup_error_time').html(msg).hide().fadeIn();
            }
        },
    });
    }
});

$(".delete_request_day_start_date_add_new").on("click",function(){
    var tour_id = $('#tour_id').val();
    var clickedID = this.id.split("-");
    var item_new_date_request_service_id = clickedID[1];
    jQuery.ajax({ type: "POST",url: "/request_day_start_date/delete_new_date_request_service",dataType:"json", 
        data:{"item_new_date_request_service_id":item_new_date_request_service_id,"tour_id":tour_id},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == 'success'){
                var item_new_date_request_service_id_rp = response.item_new_date_request_service_id_rp;
                $('#item_new_date_request_service-'+item_new_date_request_service_id_rp).fadeOut('slow').remove();
            }
        },
    });
});
});
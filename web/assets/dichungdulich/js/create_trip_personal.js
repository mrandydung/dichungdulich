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
            var time = strdate.getTime()/1000;
            var d = new Date(time*1000);
            var dt = d.getDate() + '-' + (d.getMonth()) + '-' + d.getFullYear();
            $( "#creat_trip_form_fix_start_end_date" ).datepicker( "option", "minDate",dt);
        }
    });
}
function setDatepickerEnd()
{
    $( "#creat_trip_form_fix_start_end_date" ).datepicker({
        "dateFormat":"dd-mm-yy",
        showButtonPanel: true,
        showOtherMonths: true,
        minDate:"+1",
        onClose: function( date ) {
            $( "#datepicker_start" ).datepicker( "option", "maxDate", date );
        }
    });
}
function setDatepickerStartDiscount()
{
    $( "#creat_trip_day_discount_start_date" ).datepicker({
        "dateFormat":"dd-mm-yy",
        showButtonPanel: true,
        showOtherMonths: true,
        selectOtherMonths: true,
        minDate:"+1",
        onClose: function(date) {
            var day = date.split("-");
            var strdate = new Date(day[2],day[1],day[0]);
            var time = strdate.getTime()/1000 + 86400;
            var d = new Date(time*1000);
            var dt = d.getDate() + '-' + (d.getMonth()) + '-' + d.getFullYear();
            $( "#creat_trip_form_fix_start_end_date" ).datepicker( "option", "minDate",dt);
        }
    });
}
function setDatepickerEndDiscount()
{
    $( "#creat_trip_day_discount_end_date" ).datepicker({
        "dateFormat":"dd-mm-yy",
        showButtonPanel: true,
        showOtherMonths: true,
        minDate:"+1",
        onClose: function( date ) {
            $( "#datepicker_start" ).datepicker( "option", "maxDate", date );
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

    var pathname = window.location.pathname;
    if(pathname.search('dang-tour-du-lich') != -1){
        var locat;
        var options;
        $("#start").geocomplete(options)
        .bind("geocode:result", function(event, result){
            locat = result.geometry.location;
            $('#hidden_start').val(locat.lat()+','+locat.lng());
        })
    }

    $('input[type="checkbox"]').click(function(){
        if($(this).attr("value")=="add_date"){
            $(".add_date").toggle();
        }
    });
    $('input[type="checkbox"]').click(function(){
        if($(this).attr("value")=="child-price"){
            $("#child-price").toggle();
        }
    });
    $('input[type="checkbox"]').click(function(){
        setDatepickerStartDiscount();setDatepickerEndDiscount();
        if($(this).attr("value")=="day-discount"){
            $("#day-discount").toggle();
        }
    });
    $('input[type="checkbox"]').click(function(){
        if($(this).attr("value")=="number-discount"){
            $("#number-discount").toggle();
        }
    });
    $('#tour_time_type').change(function(){
        $('#popup_success_time').hide();
        $('#popup_error_time').hide();
        var tour_time_type = $('#tour_time_type').val();
        if(tour_time_type == '1'){
            $('#daily_start_time').hide();
            $('#weekly_start_time').hide();
            $('#fix_start_time').show();

            setDatepickerStart();
            setDatepickerEnd();
        }else if (tour_time_type == '2'){
            $('#fix_start_time').hide();
            $('#weekly_start_time').hide();
            $('#daily_start_time').show();
        }else if (tour_time_type == '3'){
            $('#fix_start_time').hide();
            $('#daily_start_time').hide();
            $('#weekly_start_time').show();
        }else{
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
      $("html, body").animate({ scrollTop: 0 }, "slow");
      tinyMCE.triggerSave();
      var tour_id = $('#tour_id').val();
      var tour_time_type = 1;
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
    $('#popup_error_time').hide();
    jQuery.ajax({ type: "POST",url: "/trip_manager_personal/update_time_tour",dataType:"json", 
      data:{"tour_id":tour_id,"tour_time_type":tour_time_type,"creat_trip_form_fix_start_start_date":creat_trip_form_fix_start_start_date,
      "creat_trip_form_fix_start_end_date":creat_trip_form_fix_start_end_date,"creat_trip_form_fix_start_start_hour":creat_trip_form_fix_start_start_hour,
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
  $("html, body").animate({ scrollTop: 0 }, "slow");
  var tour_id = $('#tour_id').val();
  var sum_number_seat = $('#sum_number_seat').val();
  var number_seat_tour = $('#number_seat').val();
  var price_tour = $('#price_tour').val();
  var type_pricing = $('#type_pricing').val();
  var payment_type_id = $('#payment_type_id').val();
  if(type_pricing == '1' && price_tour == '0'){
    $('#popup_success_price').hide();
    $('#popup_error_price').html('Bạn chưa có giá đề xuất')
    $('#popup_error_price').fadeIn();
    $('#icon_success_cost').hide();
    return false;
}
var arr_schedule = [];
$('input#price_new').each(function(){
    arr_schedule.push({id: $(this).attr("data-id"),price : $(this).val()}); 
});
var checkbox_booking_fast = 0;
$('#allow_booking_fast').is(":checked") ? checkbox_booking_fast=1 : checkbox_booking_fast=0;
jQuery.ajax({ type: "POST",url: "/trip_manager_personal/update_price_personal",dataType:"json", 
    data:{"tour_id":tour_id,"payment_type_id":payment_type_id,"checkbox_booking_fast":checkbox_booking_fast,"arr_schedule":arr_schedule,"sum_number_seat":sum_number_seat,"number_seat_tour":number_seat_tour,"price_tour":price_tour,"type_pricing":type_pricing},
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
    jQuery.ajax({ type: "POST",url: "/trip_manager_personal/update_note_tour",dataType:"json", 
        data:{"tour_id":tour_id,"tour_note":tour_note},
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
   $('input#select_kid').each(function(){
    arr_end_new.push({id: $(this).attr("data-id"),number : $(this).val()}); 
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
        var clickedID = this.id.split("-"); //Split string (Split works as PHP explode)
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
        jQuery.ajax({ type: "POST",url: "/trip_manager_personal/delete_image_tour",dataType:"json", 
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
    var arr_utilities = [];
    var i = 0;
    $('.ads_Checkbox:checked').each(function(){
       arr_utilities[i++]= {id : $(this).val(),name : $(this).attr("name")}; 
   });
    var arr_sorting = [];
    $('.ads_Checkbox_sorting:checked').each(function(){
       arr_sorting[i++]= {id : $(this).val(),name : $(this).attr("name")}; 
   });
    var arr_option_gender = [];
    $('.ad_Checkbox_optionGender:checked').each(function(){
       arr_option_gender[i++]= {id : $(this).val(),name : $(this).attr("name")}; 
   });
    var arr_activities = [];
    $('.ads_Checkbox_activities:checked').each(function(){
       arr_activities[i++]= {id : $(this).val(),name : $(this).attr("name")}; 
   });

    var tour_id = $('#tour_id').val();
    jQuery.ajax({ type: "POST",url: "/trip_manager_personal/update_utilities_tour",dataType:"json", 
        data:{"arr_utilities":arr_utilities,"arr_sorting":arr_sorting,"arr_option_gender":arr_option_gender,"arr_activities":arr_activities,"tour_id":tour_id},
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

$('#create_tour').click(function(){
    var tour_id = $('#tour_id').val();
    jQuery.ajax({ type: "POST",url: "/trip_manager_personal/success_created",dataType:"json", 
        data:{"tour_id":tour_id,"check_enable_step":check_enable_step},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == '1'){
                var url = response.url;
                window.location.href = url;
            }
            if(code == '2')
            {
                $('#content_verified_phone').modal();
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
             $('#phone_number').attr('disabled', true);
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
});
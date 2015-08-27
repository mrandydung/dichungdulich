
function afterSuccessDay()
{
    $('#loading-img-day').hide();
    var tour_id =  $('#tour_id').val();
    var day_item = $('#day_item').attr("data-id");
    jQuery.ajax({ type: "POST",url: "/trip_scheduled_day/get_img_tour_scheduled_day",dataType:"json",
      data:{"tour_id":tour_id,"day_item":day_item},
      success:function(response){
        var code = response.code;
        var msg = response.msg;
        if(code == '1'){
         var html = response.html;
         $('#content_img_day').html(html);
     }
 },
});
}

function beforeSubmitDay(){
    //check whether browser fully supports all File API
    if (window.File && window.FileReader && window.FileList && window.Blob)
    {
        if( !$('#imageInputDay').val()) //check empty input filed
        {
            $("#renderImgDay").html("Are you kidding me?");
            return false;
        }
        var fsize = $('#imageInputDay')[0].files[0].size; //get file size
        var ftype = $('#imageInputDay')[0].files[0].type; // get file type
        //allow only valid image file types 
        switch(ftype)
        {
            case 'image/png': case 'image/gif': case 'image/jpeg': case 'image/pjpeg':
            break;
            default:
            $("#renderImgDay").html("<b>"+ftype+"</b> Unsupported file type!");
            return false;
        }
        
        //Allowed file size is less than 1 MB (1048576)
        if(fsize>3048576)
        {
            $("#renderImgDay").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.");
            return false;
        }

        $('#submit-btn-day').hide(); //hide submit button
        $('#loading-img-day').show(); //hide submit button
        $("#renderImgDay").html("");
    }
    else
    {
        //Output error to older browsers that do not support HTML5 File API
        $("#renderImgDay").html("Please upgrade your browser, because your current browser lacks some new features we need!");
        return false;
    }
}

function init_tinymce(description_day){
    tinymce.init({selector: description_day,
        mode : "textareas",
        plugins : "paste",
        theme_advanced_buttons3_add : "pastetext,pasteword,selectall",
        paste_auto_cleanup_on_paste : true,
        paste_preprocess : function(pl, o) {
        // Content string containing the HTML from the clipboard

        o.content = o.content;
    },
    paste_postprocess : function(pl, o) {
        // Content DOM node containing the DOM structure of the clipboard

        o.node.innerHTML = o.node.innerHTML ;
    }});
}

function set_vehicle(){
    if(language == '_en'){
        $('#vehicle_day').multiselect({nonSelectedText: 'Select Vehicle', nSelectedText: 'vehicle', allSelectedText: 'All'});
    }else{
        $('#vehicle_day').multiselect({nonSelectedText: 'Chọn phương tiện', nSelectedText: 'phương tiện', allSelectedText: 'Tất cả'});
    }
}

$(document).ready(function() {
    set_vehicle();
    init_tinymce('#description_day_1');
    var options_day = {
            target: '#renderImgDay',   // target element(s) to be updated with server response 
            beforeSubmit: beforeSubmitDay,  // pre-submit callback 
            success: afterSuccessDay,  // post-submit callback 
            resetForm: true        // reset the form after successful submit 
        };
        $("body").on("submit","#form_upload_img_day",function(){
            $(this).ajaxSubmit(options_day);
            // always return false to prevent standard browser submit and page navigation 
            return false;
        });
        $("body").on("change","#imageInputDay",function(){
           $('#submit-btn-day').submit();
       });

        $("body").on("click","#submit_form_schedule_day",function(){
            tinyMCE.triggerSave();
            var tour_id = $('#tour_id').val();
            var title_day = $('#title_day').val();
            var day_item = $('#day_item').attr("data-id");
            var description_day = $('#description_day_'+day_item).val();
            var vehicle_day = $('#vehicle_day').val();
            jQuery.ajax({ type: "POST",url: "/trip_scheduled_day/add_schedule_day"+language,dataType:"json",
                data:{"title_day":title_day,"tour_id":tour_id,"description_day":description_day,"vehicle_day":vehicle_day,"day_item":day_item},
                success:function(response){
                    var code = response.code;
                    var msg = response.msg;
                    if(code == 'error'){
                        $("html, body").animate({ scrollTop: 300 }, "slow");
                        $('#popup_error_schedule_day').html(msg);
                        $('#popup_error_schedule_day').fadeIn();
                    }if(code == 'success'){
                       $("html, body").animate({ scrollTop: 300 }, "slow");
                       $('#popup_success_schedule_day').html(msg);
                       $('#popup_error_schedule_day').hide();
                       $('#popup_success_schedule_day').fadeIn();

                   }
               },
           });
        });

$("body").on("click",".delete_image_day",function(){
        var clickedID = this.id.split("-"); //Split string (Split works as PHP explode)
        var item_img_day_id = clickedID[1];
        jQuery.ajax({ type: "POST",url: "/trip_scheduled_day/delete_image_day",dataType:"json",
            data:{"item_img_day_id":item_img_day_id},
            success:function(response){
                var code = response.code;
                var msg = response.msg;
                if(code == 'success'){
                    var div_id = response.div_id;
                    $('#div_img_day_'+div_id).remove();
                }
            },
        });
    });

$("body").on("click","#button_next_day",function(){
    $('#popup_success_schedule_day').hide();
    $('#popup_error_schedule_day').hide();
    var tour_id = $('#tour_id').val();
    var day_item = $('#day_item').attr("data-id");
    jQuery.ajax({ type: "POST",url: "/trip_scheduled_day/get_day_scheduled_day"+language,dataType:"json",
        data:{"day_item":day_item,"tour_id":tour_id},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == 'success'){
                var day_item_next = response.day_item_next;
                var html = response.html;
                $('#select_item_schedule_day').val(day_item_next);
                $('.previous').attr('id','button_prev_day');
                $('#button_prev_day').removeClass('disabled');
                $('#div_content_schedule_day').html(html).hide().fadeIn();
                set_vehicle();
                tinymce.remove();
                init_tinymce('#description_day_'+day_item_next);
                var finish = response.finish;
                if(finish == '1'){
                    $('#button_next_day').addClass('disabled');
                    $('#button_next_day').removeAttr('id');
                }
            }
        },
    });
});

$("body").on("click","#button_prev_day",function(){
   $('#popup_success_schedule_day').hide();
   $('#popup_error_schedule_day').hide();
   var tour_id = $('#tour_id').val();
   var day_item = $('#day_item').attr("data-id");
   jQuery.ajax({ type: "POST",url: "/trip_scheduled_day/get_day_scheduled_day_prev"+language,dataType:"json",
    data:{"day_item":day_item,"tour_id":tour_id},
    success:function(response){
        var code = response.code;
        var msg = response.msg;
        if(code == 'success'){
            var day_item_prev = response.day_item_prev;
            var html = response.html;
            $('#select_item_schedule_day').val(day_item_prev);
            if(day_item_prev == '1'){
                $('#button_prev_day').addClass('disabled');
                $('#button_prev_day').removeAttr('id');
            }
            $('#div_content_schedule_day').html(html).hide().fadeIn();
            set_vehicle();
            tinymce.remove();
            init_tinymce('#description_day_'+day_item_prev);
            var finish = response.finish;
            if(finish == '1'){
                $('#complicate .next').attr('id','button_next_day');
                $('#button_next_day').removeClass('disabled');
            }
        }
    },
});
});

$("body").on("change","#select_item_schedule_day",function(){
    $('#popup_success_schedule_day').hide();
    $('#popup_error_schedule_day').hide();
    var tour_id = $('#tour_id').val();
    var day_item = $('#select_item_schedule_day').val();
    jQuery.ajax({ type: "POST",url: "/trip_scheduled_day/select_item_schedule_day_change"+language,dataType:"json",
        data:{"day_item":day_item,"tour_id":tour_id},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
            if(code == 'success'){
                var day_item = response.day_item;
                var html = response.html;
                var finish_end = response.finish_end;
                if(day_item == '1' && finish_end == '1'){
                    $('#button_prev_day').addClass('disabled');
                    $('#button_prev_day').removeAttr('id');
                    $('#complicate .next').addClass('disabled');
                    $('#button_next_day').removeAttr('id');
                }
                if(day_item == '1' && finish_end != '1'){
                    $('#button_prev_day').addClass('disabled');
                    $('#button_prev_day').removeAttr('id');
                    $('#complicate .next').attr('id','button_next_day');
                    $('#button_next_day').removeClass('disabled');
                }
                if(finish_end == '1' && day_item != '1' ){
                    $('#complicate .next').addClass('disabled');
                    $('#button_next_day').removeAttr('id');
                    $('#complicate .previous').attr('id','button_prev_day');
                    $('#button_prev_day').removeClass('disabled');
                }
                if(day_item != '1' && finish_end != '1'){
                    $('#complicate .next').attr('id','button_next_day');
                    $('#button_next_day').removeClass('disabled');
                    $('#complicate .previous').attr('id','button_prev_day');
                    $('#button_prev_day').removeClass('disabled');
                }
                $('#div_content_schedule_day').html(html).hide().fadeIn();
                set_vehicle();
                tinymce.remove();
                init_tinymce('#description_day_'+day_item);

            }
        },
    });
});

$('#lich_trinh_chi_tiet').on('click',function(){
   $('#popup_success_schedule_day').hide();
   $('#popup_error_schedule_day').hide();
   var tour_id = $('#tour_id').val();
   jQuery.ajax({ type: "POST",url: "/trip_scheduled_day/get_day_scheduled_day_first"+language,dataType:"json",
    data:{"tour_id":tour_id},
    success:function(response){
        var code = response.code;
        var msg = response.msg;
        if(code == 'success'){
            var html = response.html;
            var html_div_next_prev = response.html_div_next_prev;
            $('#div_next_prev_day').html(html_div_next_prev);
            $('#div_content_schedule_day').html(html).fadeIn();
            set_vehicle();
            tinymce.remove();
            init_tinymce('#description_day_1');

        }
    },
});
});

$("#button_click_tab_schedule").on('click',function(){
    $('#lich_trinh_co_ban').click();
});

$('#lich_trinh_co_ban').on('click',function(){
 init_tinymce('#tour_detail');
});

});



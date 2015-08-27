function changeCityGuide(home_item_id){
    $("html, body").animate({ scrollTop: 70 }, "slow");
    var booking_form_to_address = $('#booking_form_to_address').val();
    var coo_start = $('#coo_start').val();
    var select_filter_find_tour = $('#select_filter_find_tour').val();
    var booking_form_start_date = $('#booking_form_start_date').val();
    var time_tour_search = $('#time_tour_search').val();
    var price_tour_search = $('#price_tour_search').val();
    var page = 1;
    $('#hom_item_id_hiden').val(home_item_id);
    jQuery.ajax({ type: "POST",url: "/find_tour/find_tour"+language,dataType:"json",
    data:{"booking_form_to_address":booking_form_to_address,"coo_start":coo_start,
      "select_filter_find_tour":select_filter_find_tour,"home_item_id":home_item_id,"booking_form_start_date":booking_form_start_date,
      "time_tour_search":time_tour_search,"price_tour_search":price_tour_search,"page":page},
    success:function(response){
      var code = response.code;
      var msg = response.msg;
      if(code == '1'){
        var booking_form_to_address = response.booking_form_to_address;
        $('#booking_form_to_address').val(booking_form_to_address);
        var html_line_view = response.html_line_view;
        var html_grid_view = response.html_grid_view;
        var html_pager = response.html_pager;
        var html_sorting_hotro = response.html_sorting_hotro;
        var count_all_tour = response.count_all_tour;
        $('#content_view_1').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
        $('#content_view_2').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
        $('#paging').html('');
        setTimeout(
          function()
          {
             $('.t1').html(count_all_tour + ' Kết quả');
             $('#content_view_1').html(html_line_view);
             $('#content_view_2').html(html_grid_view);
             $('#div_sorting_hinh_thuc_du_lich').html(html_sorting_hotro);
             $('#paging').html(html_pager);
          }, 500);
      }
    },
  });
}

function getListPage(page){
    $("html, body").animate({ scrollTop: 70 }, "slow");
    var booking_form_to_address = $('#booking_form_to_address').val();
    var coo_start = $('#coo_start').val();
    var select_filter_find_tour = $('#select_filter_find_tour').val();
    var booking_form_start_date = $('#booking_form_start_date').val();
    var time_tour_search = $('#time_tour_search').val();
    var price_tour_search = $('#price_tour_search').val();
    var doi_tuong_tour_search = $('#doi_tuong_tour_search').val();
    var loai_tour_search = $('#loai_tour_search').val();
    var tour_noi_bat_search = $('#tour_noi_bat_search').val();
    var doi_tuong_phu_hop_search = $('#doi_tuong_phu_hop_search').val();
    var home_item_id = $('#home_item_id').val();
    jQuery.ajax({ type: "POST",
      url: "/find_tour/find_tour"+language,
      dataType:"json",
    data:{"booking_form_to_address":booking_form_to_address,"coo_start":coo_start,
      "select_filter_find_tour":select_filter_find_tour,"home_item_id":home_item_id,"booking_form_start_date":booking_form_start_date,
      "time_tour_search":time_tour_search,"price_tour_search":price_tour_search,"doi_tuong_tour_search":doi_tuong_tour_search,"loai_tour_search":loai_tour_search,
      "tour_noi_bat_search":tour_noi_bat_search,"doi_tuong_phu_hop_search":doi_tuong_phu_hop_search,"page":page},
    success: function(response) {
      var code = response.code;
      var msg = response.msg;
      if(code == '1') {
        var booking_form_to_address = response.booking_form_to_address;
        $('#booking_form_to_address').val(booking_form_to_address);
        var html_line_view = response.html_line_view;
        var html_grid_view = response.html_grid_view;
        var html_pager = response.html_pager;
        var html_sorting_hotro = response.html_sorting_hotro;
        var html_sorting_activities = response.html_sorting_activities;
        var count_all_tour = response.count_all_tour;
        $('#content_view_1').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
        $('#content_view_2').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
        $('#paging').html('');
        setTimeout(
          function(){
            $('.t1').html(count_all_tour+' Kết quả');
            $('#content_view_1').html(html_line_view);
            $('#content_view_2').html(html_grid_view);
            $('#paging').html(html_pager);
            $('#div_sorting_hinh_thuc_du_lich').html(html_sorting_hotro);
            $('#div_sorting_hoat_dong_du_lich').html(html_sorting_activities);
          }, 500);
      }
    },
  });
}

function change_tour_trong_nuoc(region_id){
    var page = 1;
    var area_id = 0;
    var select_filter_find_tour = $('#select_filter_find_tour').val();
    jQuery.ajax({ type: "POST",url: "/find_tour/change_tour_trong_nuoc"+language,dataType:"json", 
    data:{"region_id":region_id,"area_id":area_id,"page":page,"select_filter_find_tour":select_filter_find_tour},
    success:function(response){
      var code = response.code;
      var msg = response.msg;
      if(code == '1'){
        var html_line_view = response.html_line_view;
        var html_grid_view = response.html_grid_view;
        var html_pager = response.html_pager;
        var html_sorting_hotro = response.html_sorting_hotro;
        var html_sorting_activities = response.html_sorting_activities;
        var count_all_tour = response.count_all_tour;
        $('#content_view_1').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
        $('#content_view_2').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
        $('#paging').html('');
        setTimeout(
          function()
          {
            $('.t1').html(count_all_tour+' Kết quả');
            $('#content_view_1').html(html_line_view);
            $('#content_view_2').html(html_grid_view);
            $('#paging').html(html_pager);
            $('#div_sorting_hinh_thuc_du_lich').html(html_sorting_hotro);
            $('#div_sorting_hoat_dong_du_lich').html(html_sorting_activities);
          }, 500);
      }
    },
  });
}

function change_tour_quoc_te(area_id){
    var page = 1;
    var region_id = 0;
    var select_filter_find_tour = $('#select_filter_find_tour').val();
    jQuery.ajax({ type: "POST",url: "/find_tour/change_tour_trong_nuoc"+language,dataType:"json",
    data:{"region_id":region_id,"area_id":area_id,"page":page,"select_filter_find_tour":select_filter_find_tour},
    success:function(response){
      var code = response.code;
      var msg = response.msg;
      if(code == '1'){
        var html_line_view = response.html_line_view;
        var html_grid_view = response.html_grid_view;
        var html_pager = response.html_pager;
        var html_sorting_hotro = response.html_sorting_hotro;
        var html_sorting_activities = response.html_sorting_activities;
        var count_all_tour = response.count_all_tour;
        $('#content_view_1').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
        $('#content_view_2').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
        $('#paging').html('');
        setTimeout(
          function()
          {
            $('.t1').html(count_all_tour+' Kết quả');
            $('#content_view_1').html(html_line_view);
            $('#content_view_2').html(html_grid_view);
            $('#paging').html(html_pager);
            $('#div_sorting_hinh_thuc_du_lich').html(html_sorting_hotro);
            $('#div_sorting_hoat_dong_du_lich').html(html_sorting_activities);
          }, 500);
      }
    },
  });
}

function getListPageKhuvuc (page) {
  var region_id = $('input[id=radio_noi_dia]:radio:checked').val();
  var area_id = $('input[id=radio_quoc_te]:radio:checked').val();
  var select_filter_find_tour = $('#select_filter_find_tour').val();
  jQuery.ajax({
    type: "POST",
    url: "/find_tour/change_tour_trong_nuoc"+language,
    dataType:"json",
    data: {"region_id": region_id,"area_id":area_id,"page": page, "select_filter_find_tour": select_filter_find_tour},
    success: function (response) {
      var code = response.code;
      var msg = response.msg;
      if(code == '1') {
        var html_line_view = response.html_line_view;
        var html_grid_view = response.html_grid_view;
        var html_pager = response.html_pager;
        var html_sorting_hotro = response.html_sorting_hotro;
        var html_sorting_activities = response.html_sorting_activities;
        var count_all_tour = response.count_all_tour;
        $('#content_view_1').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
        $('#content_view_2').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
        $('#paging').html('');
        setTimeout ( function()  {
            $('.t1').html(count_all_tour+' Kết quả');
            $('#content_view_1').html(html_line_view);
            $('#content_view_2').html(html_grid_view);
            $('#paging').html(html_pager);
            $('#div_sorting_hinh_thuc_du_lich').html(html_sorting_hotro);
            $('#div_sorting_hoat_dong_du_lich').html(html_sorting_activities);
        }, 500);
      }
    },
  });
  }

$(document).ready(function() {
  $('#view_1_click').click(function() {
      $('#view_2_click').removeClass('active_2');
      $('#view_1_click').addClass('active_2');
      $('#content_view_2').hide();
      $('#content_view_1').fadeIn();
  });

   $('#view_2_click').click(function() {
      $('#view_1_click').removeClass('active_2');
      $('#view_2_click').addClass('active_2');
      $('#content_view_1').hide();
      $('#content_view_2').fadeIn();
  });

  $('#select_filter_find_tour').on("change",function(){
      getListPage(1);
  });

   $('#doi_tuong_tour_search').on("change",function(){
      getListPage(1);
  });
  $('#loai_tour_search').on("change",function(){
      getListPage(1);
  });
  $('#tour_noi_bat_search').on("change",function(){
      getListPage(1);
  });


$("body").on("click","#select_check_sorting, #select_check_activities",function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
      var arr_sorting = [];
      var arr_activities = [];
      $("#select_check_sorting:checked").each(function(){
          arr_sorting.push($(this).val());
      });
       $("#select_check_activities:checked").each(function(){
       arr_activities.push($(this).val());
      });
      jQuery.ajax({ type: "POST",url: "/find_tour/filter_sorting_tour"+language,dataType:"json",
      data:{"arr_sorting":arr_sorting,"arr_activities":arr_activities},
      success:function(response){
          var code = response.code;
          var msg = response.msg;
           if(code == '1'){
              $('#content_view_1').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
              $('#content_view_2').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
              setTimeout(function() {
                 var html_line_view = response.html_line_view;
                 var html_grid_view = response.html_grid_view;
                 $('#content_view_1').html(html_line_view);
                 $('#content_view_2').html(html_grid_view);
              }, 500);
          }
      },
    });
  });

  $("body").on("click","#button_search",function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
     var text_search = $('#text_search').val();
     if(text_search){
        jQuery.ajax({ type: "POST",url: "/tour/submit_search_key",dataType:"json",
        data:{"text_search":text_search},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
             if(code == '1'){
                 $('#content_view_1').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
                $('#content_view_2').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>');
                setTimeout(
                  function()
                  {
                     var html_line_view = response.html_line_view;
                     var html_grid_view = response.html_grid_view;
                     $('#content_view_1').html(html_line_view);
                     $('#content_view_2').html(html_grid_view);
                  }, 1500);
            }
            if(code == '2'){
              $('#content_view_1').html(msg);
              $('#content_view_2').html(msg);
            }
        },
      });
     }else{
        $('#content_view_1').html('Bạn chưa nhập nội dung tìm kiếm');
        $('#content_view_2').html('Bạn chưa nhập nội dung tìm kiếm');
     }
  });

  $("body").on("change","#time_tour_search",function() {
      getListPage(1);
  });

  $("body").on("change","#price_tour_search",function() {
      getListPage(1);
  });

  $('#doi_tuong_phu_hop_search').on('change',function(){
    getListPage(1);
  });
  
  $('#text_search').typeahead({
    name: 'text_search',
    hint: true,
    highlight: true,
    remote: {
      cache: true,
      url: '/tour/text_search?text_search=%QUERY',
      filter: function (parsedResponse) {
      return parsedResponse;
      }
    }
  });

  $('.click_tinh_thanh_pho').on('click',function(){
          $('.click_tinh_thanh_pho').each(function() {
              $(this).removeClass('activePaging');
          });
      $(this).addClass('activePaging');
  });
});
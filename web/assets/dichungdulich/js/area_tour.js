var page = 1;
$(document).ready(function(){
    $('#showmorethisresult').click(function(){
    $('#img_loading').show();
    var select_filter_tour_trong_nuoc = $('#select_filter_tour_trong_nuoc').val();
    page = page + 1;
    jQuery.ajax({ type: "POST",url: "/area_tour/read_more_content_tour_trong_nuoc",  dataType:"json",
        data: {"page":page,"select_filter_tour_trong_nuoc":select_filter_tour_trong_nuoc},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
          if(code == '1'){
            var html = response.html;
            var max_page = response.max_page;
            if(max_page == page || max_page < page){
              $('#showmorethisresult').hide();
            }else{
              $('#div_area_tour_loading').append(html).fadeIn();
              $('#img_loading').hide();
            }
          }
        },
    });
  });

  $('#showmoretour_quoc_te').click(function(){
    $('#img_loading').show();
    var select_filter_tour_quoc_te = $('#select_filter_tour_quoc_te').val();
    page = page + 1;
    jQuery.ajax({ type: "POST",url: "/area_tour/read_more_content_tour_quoc_te",  dataType:"json",
        data: {"page":page,"select_filter_tour_quoc_te":select_filter_tour_quoc_te},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
          if(code == '1'){
            var html = response.html;
            var max_page = response.max_page;
            if(max_page == page || max_page < page){
              $('#showmoretour_quoc_te').hide();
            }else{
              $('#div_area_tour_loading').append(html).fadeIn();
              $('#img_loading').hide();
            }
          }
        },
    });
  });

$('#showmoretour_moi_noi').click(function(){
    $('#img_loading').show();
    var select_filter_tour_moi_noi = $('#select_filter_tour_moi_noi').val();
    page = page + 1;
    jQuery.ajax({ type: "POST",url: "/area_tour/read_more_content_tour_moi_noi",  dataType:"json",
        data: {"page":page,"select_filter_tour_moi_noi":select_filter_tour_moi_noi},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
          if(code == '1'){
            var html = response.html;
            var max_page = response.max_page;
            if(max_page == page || max_page < page){
              $('#showmoretour_moi_noi').hide();
            }else{
              $('#div_area_tour_loading').append(html).fadeIn();
              $('#img_loading').hide();
            }
          }
        },
    });
  });

  $('#select_filter_tour_trong_nuoc').on('change',function(){
    var select_filter_tour_trong_nuoc = $('#select_filter_tour_trong_nuoc').val();
    page = 1;
    jQuery.ajax({ type: "POST",url: "/area_tour/select_filter_tour_trong_nuoc",  dataType:"json",
        data: {"page":page,"select_filter_tour_trong_nuoc":select_filter_tour_trong_nuoc},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
          if(code == '1'){
            var html = response.html;
            var max_page = response.max_page;
            $('#div_area_tour_loading').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>').fadeIn();
            setTimeout(
              function() 
              {
                $('#div_area_tour_loading').html(html).fadeIn();
               $('#showmorethisresult').show();
               $('#img_loading').hide();
               }, 1500);
          }
        },
    });
  });

  $('#select_filter_tour_quoc_te').on('change',function(){
    var select_filter_tour_quoc_te = $('#select_filter_tour_quoc_te').val();
    page = 1;
    jQuery.ajax({ type: "POST",url: "/area_tour/select_filter_tour_quoc_te",  dataType:"json",
        data: {"page":page,"select_filter_tour_quoc_te":select_filter_tour_quoc_te},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
          if(code == '1'){
            var html = response.html;
            var max_page = response.max_page;
            $('#div_area_tour_loading').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>').fadeIn();
            setTimeout(
              function() 
              {
                $('#div_area_tour_loading').html(html).fadeIn();
               $('#showmoretour_quoc_te').show();
               $('#img_loading').hide();
               }, 1500);
          }
        },
    });
  });

   $('#select_filter_tour_moi_noi').on('change',function(){
    var select_filter_tour_moi_noi = $('#select_filter_tour_moi_noi').val();
    page = 1;
    jQuery.ajax({ type: "POST",url: "/area_tour/select_filter_tour_moi_noi",  dataType:"json",
        data: {"page":page,"select_filter_tour_moi_noi":select_filter_tour_moi_noi},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
          if(code == '1'){
            var html = response.html;
            var max_page = response.max_page;
            $('#div_area_tour_loading').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>').fadeIn();
            setTimeout(
              function() 
              {
                $('#div_area_tour_loading').html(html).fadeIn();
               $('#showmoretour_moi_noi').show();
               $('#img_loading').hide();
               }, 1500);
          }
        },
    });
  });

  $('#button_search_end_trong_nuoc').on('click',function(){
    page = 1;
    var end_trong_nuoc = $('#end_trong_nuoc').val();
    var select_filter_tour_trong_nuoc = $('#select_filter_tour_trong_nuoc').val();
    jQuery.ajax({ type: "POST",url: "/area_tour/submit_search_text_end_trong_nuoc",  dataType:"json",
        data: {"end_trong_nuoc":end_trong_nuoc,"select_filter_tour_trong_nuoc":select_filter_tour_trong_nuoc,"page":page},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
          if(code == '1'){
            var html = response.html;
            var max_page = response.max_page;
              $('#div_area_tour_loading').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>').fadeIn();
              setTimeout(
              function() 
              {
                $('#div_area_tour_loading').html(html).fadeIn();
                $('#showmorethisresult').hide();
                $('#img_loading').hide();
              }, 1500);
          }
        },
    });
  });

  $('#button_search_end_quoc_te').on('click',function(){
    page = 1;
    var end_quoc_te = $('#end_quoc_te').val();
    var select_filter_tour_quoc_te = $('#select_filter_tour_quoc_te').val();
    jQuery.ajax({ type: "POST",url: "/area_tour/submit_search_text_end_quoc_te",  dataType:"json",
        data: {"end_quoc_te":end_quoc_te,"select_filter_tour_quoc_te":select_filter_tour_quoc_te,"page":page},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
          if(code == '1'){
            var html = response.html;
            var max_page = response.max_page;
              $('#div_area_tour_loading').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>').fadeIn();
              setTimeout(
              function() 
              {
                $('#div_area_tour_loading').html(html).fadeIn();
                $('#showmoretour_quoc_te').hide();
                $('#img_loading').hide();
              }, 1500);
          }
        },
    });
  });

$('#button_search_end_moi_noi').on('click',function(){
    page = 1;
    var end_moi_noi = $('#end_moi_noi').val();
    var select_filter_tour_moi_noi = $('#select_filter_tour_moi_noi').val();
    jQuery.ajax({ type: "POST",url: "/area_tour/submit_search_text_end_moi_noi",  dataType:"json",
        data: {"end_moi_noi":end_moi_noi,"select_filter_tour_moi_noi":select_filter_tour_moi_noi,"page":page},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
          if(code == '1'){
            var html = response.html;
            var max_page = response.max_page;
              $('#div_area_tour_loading').html('<div style="text-align:center;padding-bottom:20px"><img src="/images/loading51.gif"/></div>').fadeIn();
              setTimeout(
              function() 
              {
                $('#div_area_tour_loading').html(html).fadeIn();
                $('#showmoretour_moi_noi').hide();
                $('#img_loading').hide();
              }, 1500);
          }
        },
    });
  });

    $('#end_trong_nuoc').typeahead({
      name: 'search_end',
      hint: true,
      highlight: true,
      remote: {
        cache: true,
        url: '/area_tour/search_end_trong_nuoc?search_end=%QUERY',
        filter: function (parsedResponse) {
        return parsedResponse;
         }
      }
    });

    $('#end_quoc_te').typeahead({
      name: 'search_end_quoc_te',
      hint: true,
      highlight: true,
      remote: {
        cache: true,
        url: '/area_tour/search_end_quoc_te?search_end_quoc_te=%QUERY',
        filter: function (parsedResponse) {
        return parsedResponse;
         }
      }
    });
    $('#end_moi_noi').typeahead({
      name: 'search_end_moi_noi',
      hint: true,
      highlight: true,
      remote: {
        cache: true,
        url: '/area_tour/search_end_moi_noi?search_end_moi_noi=%QUERY',
        filter: function (parsedResponse) {
        return parsedResponse;
         }
      }
    });
});
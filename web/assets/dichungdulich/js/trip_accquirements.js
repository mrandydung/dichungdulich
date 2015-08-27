var page = 1;
  var search_end = $('#search_end').val();
$(document).ready(function(){
  $('#type_upload').change(function(){
    var type_upload = $('#type_upload').val();
    if(type_upload == '1'){
      $('#url_video').hide();
      $('#uploadBtn').fadeIn();
    }
    if(type_upload == '2'){
      $('#uploadBtn').hide();
      $('#url_video').fadeIn();
    }
  });

   $('input[type="checkbox"]').click(function(){
        if($(this).attr("value")=="acq-detail"){
            $("#acq-detail-show").toggle(400);
        }
    });
 
  $('#login_experience').click(function(){
          $('#dangnhap').modal();
    });

  $('#showmorethisresult').click(function(){
  	$('#img_loading').show();
  	var select_filter_experience = $('#select_filter_experience').val();
  	page = page + 1;
  	jQuery.ajax({ type: "POST",url: "/trip_acquirements/read_more_content",  dataType:"json",
        data: {"page":page,"select_filter_experience":select_filter_experience},
        success:function(response){
            var code = response.code;
            var msg = response.msg;
        	if(code == '1'){
        		var html = response.html;
        		var max_page = response.max_page;
            // alert(max_page + '-' + page);
        		if(max_page == page || max_page < page){
              $('#content_experience_loading').append(html).fadeIn();
        			$('#showmorethisresult').hide();
        		}else{
              $('#content_experience_loading').append(html).fadeIn();
              $('#img_loading').hide();
            }
        	}
        },
    });
  });

  $('#select_filter_experience').change(function(){
    var select_filter_experience = $('#select_filter_experience').val();
    if(select_filter_experience){
      page = 1;
      $('#showmorethisresult').show();
      jQuery.ajax({ type: "POST",url: "/trip_acquirements/select_filter_experience",  dataType:"json",
          data: {"select_filter_experience":select_filter_experience},
          success:function(response){
              var code = response.code;
              var msg = response.msg;
            if(code == '1'){
              var html = response.html;
              $('#content_experience_loading').html(html).hide().fadeIn();
            }
          },
      });
    }
  });

  $('#click_button_search_end').click(function(){
      var select_filter_experience = $('#select_filter_experience').val();
      var search_end = $('#search_end').val();
      jQuery.ajax({ type: "POST",url: "/trip_acquirements/button_search",  dataType:"json",
        data: {"select_filter_experience":select_filter_experience,"search_end":search_end},
        success:function(response){
            var code = response.code;
            var msg = response.msg; 
            if(code == '1'){
              $('#showmorethisresult').hide();
              var html = response.html;
              $('#content_experience_loading').html(html).hide().fadeIn();
            }
            if(code == '2'){
                $('#showmorethisresult').hide();
                $('#content_experience_loading').html('Không tìm thấy kết quả nào');
            }
        },
    });
  });

  $('#search_end').typeahead({
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
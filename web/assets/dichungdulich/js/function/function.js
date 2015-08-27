$(document).ready(function(){
	$('#submit_login').click(function(){
		var username_li = $('#username_li').val();
		var password_li = $('#password_li').val();
		if(username_li == false){
			$('#popup_login_error').html('Bạn chưa nhập tên đăng nhập !');
			$('#popup_login_error').show();
			return false;
		}
		if(password_li == false){
			$('#popup_login_error').html('Bạn chưa nhập mật khẩu !');
			$('#popup_login_error').show();
			return false;
		}
		jQuery.ajax({
			type: "POST", 
			url: "/dang-nhap", 
			dataType:"json", 
			data:{"username_li":username_li,'password_li':password_li}, 
			success:function(response){
				var code = response.code;
				var msg = response.msg;
				if(code == '1'){
					$('#popup_login_error').html(msg);
					$('#captcha_rf').attr('src','/captcha?'+new Date().getTime());
					$('#popup_login_error').show();
				}
				if(code == '2'){
					window.location.reload();
				}
			},
			error:function (xhr, ajaxOptions, thrownError){
				//alert(thrownError);
			}
		});
	});

	$('#submit_register').click(function(){
		// $('#captcha_rg').attr('src','/captcha?'+new Date().getTime());
		var password = $('#password').val();
		var password_rp = $('#password_rp').val();
		var email = $('#email').val();
		var checkbox_submit;
		if(email == false){
			$('#popup_error').html('Bạn chưa nhập email !');
			$('#popup_error').show();
			return false;
		}
		else if(password == false){
			$('#popup_error').html('Bạn chưa nhập mật khẩu !');
			$('#popup_error').show();
			return false;
		}		
		else if(password_rp == false){
			$('#popup_error').html('Bạn chưa nhập mật khẩu xác nhận!');
			$('#popup_error').show();
			return false;
		}		
		else if ($('#checkbox_submit').is(":checked")){
			checkbox_submit = 1;
		}else{
			checkbox_submit = 0;
		}
		jQuery.ajax({
			type: "POST", 
			url: "/dang-ky-tai-khoan", 
			dataType:"json", 
			data:{'password':password,"password_rp":password_rp,"email":email,"checkbox_submit":checkbox_submit}, 
			success:function(response){
				var code = response.code;
				var msg = response.msg;
				if(code == '1'){
					$('#popup_error').html(msg);
					// $('#captcha_rf').attr('src','/captcha?'+new Date().getTime());
					$('#popup_error').show();
				}
				if(code == '2'){
					window.location.reload();
				}
			},
			error:function (xhr, ajaxOptions, thrownError){
				//alert(thrownError);
			}
		});
	});

	$('#button_click_email_register_accept_info').on('click',function(){
		var email_register_accept_info = $('#email_register_accept_info').val();
		if(!email_register_accept_info){
			alert('Bạn chưa nhập địa chỉ email');
			return false;
		}else{
			jQuery.ajax({
				type: "POST", 
				url: "/home/email_register_accept_info", 
				dataType:"json", 
				data:{"email_register_accept_info":email_register_accept_info}, 
				success:function(response){
					var code = response.code;
					var msg = response.msg;
					if(code == 'error'){
						alert(msg);
					}
					if(code == 'success'){
						alert(msg);
						window.location.reload();
					}
				},
				error:function (xhr, ajaxOptions, thrownError){}
			});
		}
	});

	$(window).on('beforeunload', function(){
    	// return "Do you really want to close?";
    	// return $('#newsletter').modal();
		// jQuery.ajax({
		// 	type: "POST", 
		// 	url: "/home/onbeforeunload", 
		// 	dataType:"json", 
		// 	data:{"email_register_accept_info":email_register_accept_info}, 
		// 	success:function(response){
		// 		var code = response.code;
		// 		var msg = response.msg;
		// 		if(code == 'error'){
		// 			alert(msg);
		// 		}
		// 		if(code == 'success'){
		// 			alert(msg);
		// 			window.location.reload();
		// 		}
		// 	},
		// 	error:function (xhr, ajaxOptions, thrownError){}
		// });
	});
});
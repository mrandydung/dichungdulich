function setCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}
function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}

(function ( $ ) {
 
				$.fn.hideLike = function( options ) {
						
						 
						// This is the easiest way to have default options.
						var settings = $.extend({ 
								likes: {},
								linkTo: "",								
								likeContainer: 'like_container',
								itv: null,
								clickId: ""
						}, options );
						
						c_name = "hide_like1";
						if(getCookie(c_name).length == 0 && $( window ).width() > 600){
							//size
							settings.likeSize = 0;
							for (var k in settings.likes ) { settings.likeSize++;}
							 
							settings.itv = setInterval(function(){
								
								for (var k in settings.likes ) {
										
										var activeIframeId = $(document.activeElement).attr('id');
										if (activeIframeId == k && settings.clickId.indexOf(","+k+",") == -1 ) {
											
											settings.clickId += ","+k+",";
											
											setTimeout(function(){$('body #'+activeIframeId).hide(); setCookie(c_name, "1", 7);}, 300);
											if(settings.clickId.split(",,").length == settings.likeSize){
											 
												clearInterval(settings.itv);
												setTimeout(function(){ 
													$('#'+settings.likeContainer).remove(); 
													if(settings.linkTo.length > 0) 
														location.href = settings.linkTo;
													}, 
													300);
											} 
										} 
									}  
							}, 100);
					 
							$('body').append('<div id="'+settings.likeContainer+'" style="overflow: hidden; width: 45px; height: 21px; position: absolute; z-index:10000; opacity: 0; filter:alpha(opacity=0);"></div>');
							for (var k in settings.likes ) {
								$('#'+settings.likeContainer).append("<iframe "+
																						"scrolling='no' "+
																						"frameborder='0' "+
																						"id='"+k+"' "+
																						"allowtransparency='true' "+
																						"style='border: none; overflow: hidden; width: 45px; height: 21px;' "+
																						"src='http://www.facebook.com/plugins/like.php?href="+encodeURIComponent(settings.likes[k])+"&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;font=tahoma&amp;colorscheme=light&amp;action=like&amp;height=21'> </iframe>"+
																						"<div style=\"position: absolute;z-index: 10001;margin-top: -24px;float: left; width: 35px;height: 25px;\"></div>");
							}
							 
							 
							this.mousemove(function(e) {
									x = e.pageX;
									y = e.pageY;
									$('#'+settings.likeContainer).css({top: y-5, left: x-38});
							});
						}
		 
				};
		 
			}( jQuery ));
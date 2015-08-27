function getLoginUserHtml() {
   var select_language = $('#select_language').val();
   if(select_language == 'vn'){
        $.get('/home/get_html_login', function (dat) {
            $('.div_content_user_login').html(dat);
        });
    }
    if(select_language == 'en'){
        $.get('/en/home/get_html_login', function (dat) {
            $('.div_content_user_login').html(dat);
        });
    }
    
}
$(document).ready(function () {
    getLoginUserHtml();
    $("body").on("click", '#click_dangnhap', function () {
        $('#laylaimatkhau').modal('hide');
        $('#dangki').modal('hide');
        $('#dangnhap').modal();
    });
    $("body").on("click", '#click_dangky', function () {
        $('#laylaimatkhau').modal('hide');
        $('#dangnhap').modal('hide');
        $('#dangki').modal();
    });
    $("body").on("click", '#show_login', function () {
        $('#dangnhap').modal();
    });
    $("body").on("click", '#click_quenmatkhau', function () {
        $('#dangnhap').modal('hide');
        $('#dangki').modal('hide');
        $('#laylaimatkhau').modal();
    });

    $('body').on('change', '#select_language', function () {
        var select_language = $('#select_language').val();
        if(select_language == 'vn'){
            window.location.href = "/";
        }
        if(select_language == 'en'){
            window.location.href = "/en";
        }
    });
});




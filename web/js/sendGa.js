$(document).ready(function () {
    //checking Dang ky
    $('#click_dangky_home').on('click', function () {
        ga('send', 'event', 'quy trinh dang ky', 'click nut dang ky', 'nut dang ky header tren homepage', 1);
        ga('send', 'pageview','/virtualpage-dang-ky-click-dang-ky-trang-chu-tren-header');
    });
    $('#click_dangky_facebook').on('click', function () {
        ga('send', 'event', 'quy trinh dang ky -face', 'click dang ki face', 'nút dang ki face tren trang chu', 1);
        ga('send', 'pageview','/virtualpage-dang-ky-facebook');
    });
    $('#click_dangky_email').on('click', function () {
        ga('send', 'event', 'quy trinh dang ky -face', 'dang ki qua email', 'dang ki qua email', 1);
        ga('send', 'pageview','/virtualpage-dien-email');
    });
    $('#click_dangky_email_matkhau').on('click', function () {
        ga('send', 'event', 'quy trinh dang ky dien dia chi email', 'nhap mat khau dang ki email ', 'nhap mat khau dang ki email', 1);
        ga('send', 'pageview','/virtualpage-dien-mat-khau-emai');
    });
    $('#click_dangky_email_nhaplai_matkhau').on('click', function () {
        ga('send', 'event', 'quy trinh dang ky bang email nhap password', 'nhap lai mat khau dang ki email ', 'nhap lai mat khau dang ki email', 1);
        ga('send', 'pageview','/virtualpage-nhap-lai-matkhau-dangki');
    });
    $('#submit_register').on('click', function () {
        ga('send', 'event', 'hoan thanh dang ky bang email', 'Dang ki hoan thanh- Dang ki button', 'Dang ki hoan thanh- Dang ki button', 1);
        ga('send', 'pageview','/virtualpage-dang-ky-button');
    });
    $('#checkbox_submit').on('click', function () {
        ga('send', 'event', 'dong y dieu khoan dang ky', 'dong y dieu khoan dang ky', 'dong y dieu khoan dang ky', 1);
        ga('send', 'pageview','/virtualpage-dong-y-dieu-khoan-dang-ky-sau-khi-hoan-thanh-het-cac-buoc-dang-ki');
    });

    //Checking Dang nhap
    $('#click_dangnhap_home').on('click', function () {
        ga('send', 'event', 'quy trinh dang nhap', 'click nut dang nhap', 'click nut dang nhap tren homepage', 1);
        ga('send', 'pageview','/virtualpage-dang-nhap-click-dang-nhap-trang-chu-tren-header');
    });
    $('#click_dangnhap_facebook').on('click', function () {
        ga('send', 'event', 'quy trinh dang nhap bang face', 'dang nhap bang face', 'dang nhap bang face', 1);
        ga('send', 'pageview','/virtualpage-dang-nhap-click-dang-nhap-facebook');
    });
    $('#click_dangnhap_email').on('click', function () {
        ga('send', 'event', 'quy trinh dang nhap email -address', 'dien dia chi email', 'dang nhap email ', 1);
        ga('send', 'pageview','/virtualpage-dang-nhap-dien-email');
    });
    $('#click_dangnhap_email_password').on('click', function () {
        ga('send', 'event', 'Quy trinh dang nhap email -password', 'dien paswword', 'dien box email password', 1);
        ga('send', 'pageview','/virtualpage-dang-nhap-dien-email');
    });
    $('#submit_login').on('click', function () {
        ga('send', 'event', 'hoan tat dang nhap', 'click dang nhap button', 'dang nhap - dang nhap button', 1);
        ga('send', 'pageview','/virtualpage-hoan-thanh-dang-nhap-button');
    });
    $('#click_quenmatkhau').on('click', function () {
        ga('send', 'event', 'dang nhap- quen mat khau', 'dang nhap- quen mat khau', 'dang nhap- quen mat khau', 1);
        ga('send', 'pageview','/virtualpage-quenmatkhaudangnhap');
    });

    //checking khac
    $('#booking_form_pick_address').on('change', function () {
        ga('send', 'event', 'quy trinh tim kiem tour -homepage -chon diem khoi hanh', 'click vao o diem di tren homepage', 'box diem di tren homepage', 1);
        ga('send', 'pageview','/virtualpage-homepage-diem-di');
    });
    $('#booking_form_to_address').on('change', function () {
        ga('send', 'event', 'quy trinh tim kiem tour -homepage -chon diem khoi hanh', 'home - diem den', 'home - diem den', 1);
        ga('send', 'pageview','/virtualpage-homepage-diem-den');
    });
    $('#booking_form_start_date').on('change', function () {
        ga('send', 'event', 'quy trinh tim kiem tour tren hompage - ngay khoi hanh', 'home -chon box ngay khoi hanh', 'home - chon box ngay khoi hanh', 1);
        ga('send', 'pageview','/virtualpage-homepage-ngay-khoi-hanh');
    });
    $('.timkiem_btn').on('click', function () {
        ga('send', 'event', 'hoan thanh quy trinh tim kiem tour tren homepage', 'hoan thanh tim kiem -homepage', 'hoan thanh tim kiem -homepage', 1);
        ga('send', 'pageview','/virtualpage-homepage-timkiem-button');
    });
    $('#click_cach_thuc_hoat_dong').on('click', function () {
        ga('send', 'event', 'home - cach thuc hoat dong', 'home - cach thuc hoat dong', 'home - cach thuc hoat dong', 1);
        ga('send', 'pageview','/virtualpage-homepage-cach-thuc-hoat-dong-button');
    });
    $('#click_loi_ich_tham_gia').on('click', function () {
        ga('send', 'event', 'home - read loi tich tham gia', 'home - click box loi tich tham gia', 'home - click box loi tich tham gia', 1);
        ga('send', 'pageview','/virtualpage-homepage-loi-ich-tham-gia-button');
    });
    $('#click_diem_den_pho_bien').on('click', function () {
        ga('send', 'event', 'home -tim kiem diem den pho bien', 'home -tim kiem diem den pho bien', 'tim kiem diem den pho bien-home', 1);
        ga('send', 'pageview','/virtualpage-homepage-diem-den-pho-bien');
    });
    $('#click_diem_den_trong_nuoc').on('click', function () {
        ga('send', 'event', 'home-tim kiem diem den trong nuoc', 'home-click slide trong nuoc', 'home-click dong chu trong nuoc', 1);
        ga('send', 'pageview','/virtualpage-homepage-diem-den-trong-nuoc');
    });
    $('#click_diem_den_quoc_te').on('click', function () {
        ga('send', 'event', 'home-tim kiem diem den quoc te', 'home-click slide quoc te', 'home-click dong chu quoc te', 1);
        ga('send', 'pageview','/virtualpage-homepage-diem-den-quoc-te');
    });
    $('#click_diem_den_moi_noi').on('click', function () {
        ga('send', 'event', 'home- tim kiem diem den moi noi', 'home- click slide moi noi', 'home-click dong chu moi noi', 1);
        ga('send', 'pageview','/virtualpage-homepage-diem-den-moi-noi');
    });
    $('#click_tour_noi_bat').on('click', function () {
        ga('send', 'event', 'home- tim kiem tour noi bat', 'home-click dong chu tour noi bat', 'home-click dong chu tour noi bat', 1);
        ga('send', 'pageview','/virtualpage-homepage-tour-noi-bat');
    });

    $('#timbandichung').on('click', function () {
        ga('send', 'event', 'home-tim ban di chung', 'home- click slide tim ban di chung', 'home-click dong chu tim ban di chung', 1);
        ga('send', 'pageview','/virtualpage-homepage-tim-ban-di-chung');
    });
    $('#cuoituan').on('click', function () {
        ga('send', 'event', 'home- tim kiem tour cuoi tuan', 'home- click slide cuoi tuan di dau', 'home- click dong chu cuoi tuan di dau', 1);
        ga('send', 'pageview','/virtualpage-homepage-cuoi-tuan-di-dau');
    });
    $('#docdao').on('click', function () {
        ga('send', 'event', 'home - tim kiem tour doc dao', 'home - click slide tour doc dao', 'home - click dong chu tour doc dao', 1);
        ga('send', 'pageview','/virtualpage-homepage-tour-doc-dao');
    });

    $('#click_cong_dong_du_lich').on('click', function () {
        ga('send', 'event', 'home- tim hieu cong dong du lich', 'home-click link cong dong du lich', 'home-click link cong dong du lich', 1);
        ga('send', 'pageview','/virtualpage-homepage-tim-hieu-ve-cong-dong-du-lich');
    });
    $('body').on('click', '#click_home_chiase', function () {
        ga('send', 'event', 'home- tim kiem chia se trai nghiem', 'click home-chia se trai nghiem', 'home-click chia se trai nghiem', 1);
        ga('send', 'pageview','/virtualpage-homepage-tim-kiem-chia-se-trai-nghiem');
    });
    $('body').on('click', '#click_home_hoi_dap', function () {
        ga('send', 'event', 'home-tim kiem hoi dap du lich', 'home-tim kiem hoi dap du lich', 'home-tim kiem hoi dap du lich', 1);
        ga('send', 'pageview','/virtualpage-homepage-tim-kiem-hoi-dap-du-lich');
        
    });
    $('body').on('click', '#click_home_blog', function () {
        ga('send', 'event', 'home-xem blog', 'home-click blog', 'home-click blog', 1);
        ga('send', 'pageview','/virtualpage-homepage-xem-blog');
    });

    $('#button_click_email_register_accept_info').on('click', function () {
        ga('send', 'event', 'home-dang ki nhan thong tin qua email newsletter', 'home-click nut dang ki email newsletter', 'home-nut dang ki email newsletter o duoi homepage', 1);
        ga('send', 'pageview','/virtualpage-homepage-newsletter-dang-ki-nhan-thong-tin');
    });

    //TẠO CHUYẾN ĐI
    $('#start').on('change', function () {
        ga('send', 'event', 'create-tour-diem di', 'create-tour-diem di', 'create-tour-diem di', 1);
        ga('send', 'pageview','/virtualpage-create-tour-diem-di');
    });
    $('#end').on('change', function () {
        ga('send', 'event', 'create-tour-diem-den', 'create-tour-diem-den', 'create-tour-diem-den', 1);
        ga('send', 'pageview','/virtualpage-create-tour-diem-den');
    });

    //THONG TIN CO BAN CA NHAN
    $('#creat_trip_form_fix_start_start_date').on('change', function () {
        ga('send', 'event', 'create - ca nhân-start date', 'create - ca nhân-start date', 'create - ca nhân-start date', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-ngay-khoi-hanh');
    });
    $('#creat_trip_form_fix_start_end_date').on('change', function () {
        ga('send', 'event', 'create-ca nhân-end date', 'create-ca nhân-end date', 'create-ca nhân-end date', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-ngay-ket-thuc');
    });
    $('#creat_trip_form_fix_start_start_hour').on('change', function () {
        ga('send', 'event', 'create- ca nhan - time', 'create- ca nhan - time', 'create- ca nhan - time', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-select-gio-di');
    });
    $('#update_time').on('change', function () {
        ga('send', 'event', 'create-cá nhân -time-cập nhật', 'create-cá nhân -time-cập nhật', 'create-cá nhân -time-cập nhật', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-cap-nhat-thoi-gian');
    });

    //CHI PHI CA NHAN
    $('#checkbox_ngansach').on('click', function () {
        ga('send', 'event', 'create - ca nhan -box-ngan sach', 'create - ca nhan -box-ngan sach', 'create - ca nhan -box-ngan sach', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-chon-box-ngan-sach');
    });
    $('#addNewPrice').on('click', function () {
        ga('send', 'event', 'create-ca nhan- tick-ngansach-save-button', 'create-ca nhan- tick-ngansach-save-button', 'create-ca nhan- tick-ngansach-save-button', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-ngan-sach-save-button');
    });
    $('#type_pricing').on('change', function () {
        ga('send', 'event', 'create- ca nhan- cach tinh gia', 'create- ca nhan- cach tinh gia', 'create- ca nhan- cach tinh gia', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-ngan-sach-save-button');
    });
    $('#allow_booking_fast').on('change', function () {
        ga('send', 'event', 'create- ca nhan - price- box mac dinh', 'create- ca nhan - price- box mac dinh', 'create- ca nhan - price- box mac dinh', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-price-check-box-mac-dinh');
    });

    //LICH TRINH CA NHAN
    $('#checkbox_diemden').on('click', function () {
        ga('send', 'event', 'create-ca-nhan-them-diem-den', 'create-ca-nhan-them-diem-den', 'create-ca-nhan-them-diem-den', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-them-diem-den');
    });
    $('#lich_trinh_co_ban').on('click', function () {
        ga('send', 'event', 'lich trinh co ban content', 'dien lich trinh co ban', 'create- ca nhan - lich trinh co ban', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-dien-lich-trinh-co-ban-content-box');
    });
    $('#lich_trinh_chi_tiet').on('click', function () {
        ga('send', 'event', 'create - ca nhan - lich trình chi tiet', 'create - ca nhan - lich trình chi tiet', 'create - ca nhan - lich trình chi tiet', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-dien-lich-trinh-chi-tiet-content-box');
    });
    $('#imageInput').on('click', function () {
        ga('send', 'event', 'create-ca nhan - lich trinh  - up anh', 'create-ca nhan - lich trinh  - up anh', 'create-ca nhan - lich trinh  - up anh', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-dien-lich-trinh-chi-tiet-content-box');
    });
    $('#update_schedule').on('click', function () {
        ga('send', 'event', 'create-ca nhan - lich trinh - cap nhat', 'create-ca nhan - lich trinh - cap nhat', 'create-ca nhan - lich trinh - cap nhat', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-dien-lich-trinh-cap-nhat-button');
    });

    //THONG TIN BO SUNG CA NHAN
    $('#check_tron_goi').on('click', function () {
        ga('send', 'event', 'create- ca nhan -tron goi tick', 'create- ca nhan -tron goi tick', 'create- ca nhan -tron goi tick', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-box-tien-ich-tron-goi');
    });
    $('#check_free_and_easy').on('click', function () {
        ga('send', 'event', 'create - ca nhan - free & easy tick', 'create - ca nhan - free & easy tick', 'create - ca nhan - free & easy tick', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-box-tien-ich-free-easy');
    });
    $('#check_land_tour').on('click', function () {
        ga('send', 'event', 'create- ca nhan - landtour tick', 'create- ca nhan - landtour tick', 'create- ca nhan - landtour tick', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-box-tien-ich-land-tour');
    });
    $('#update_utilities').on('click', function () {
        ga('send', 'event', 'click nut cap nhat  tien ich tour ca nhan phan ', 'click nut cap nhat  tien ich tour ca nhan phan', 'click nut cap nhat  tien ich tour ca nhan phan', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-box-tien-ich-cap-nhat');
    });

    //GHI CHU CA NHAN
    $('#update_note').on('click', function () {
        ga('send', 'event', 'click nut cap nhat  ghi chu tour ca nhan phan', 'click nut cap nhat  ghi chu tour ca nhan phan', 'click nut cap nhat  ghi chu tour ca nhan phan', 1);
        ga('send', 'pageview','/virtualpage-create-tour-ca-nhan-box-ghi-chu-cap-nhat');
    });

    //DANG TOUR
    $('#preview_tour').on('click', function () {
        ga('send', 'event', 'button - preview-tour', 'button - preview-tour', 'button - preview-tour', 1);
        ga('send', 'pageview','/virtualpage-button-preview');
    });
    $('#create_tour').on('click', function () {
        ga('send', 'event', 'button - dang chuyen di', 'button - dang chuyen di', 'button - dang chuyen di', 1);
        ga('send', 'pageview','/virtualpage-button-preview');
    });

    //DANG DICH VU
    //THONG TIN CO BAN DICH VU
    $('#tour_time_type').on('change', function () {
        ga('send', 'event', 'dich vu-thoi gian-step 1', 'dich vu-thoi gian tour box-step 1', 'dich vu-thoi gian tour box - step 1', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-step1-chon-thoi-gian');
    });
    $('#creat_trip_form_daily_start_hour').on('change', function () {
        ga('send', 'event', 'dich vu_tour hang ngay_chon gio khoi hanh', 'create- tour dich vu- hang ngay- chon gio khoi hanh', 'creat -tour dich vu-chon gio khoi hanh', 1);
        ga('send', 'pageview','/virtualpage-dichvu-tour-hang-ngay-thoi-gian-khoi-hanh');
    });
    $('#creat_trip_form_daily_start_day_long').on('change', function () {
        ga('send', 'event', 'dich vu- tour hang ngay- tour keo dai trong bao lau', 'dich vu- tour hang ngay- tour keo dai trong bao leu', 'dich vu- tour hang ngay- tour keo dai trong bao lau', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-tour-hang-ngay-keo-dai-trong--bao-lau');
    });
    $('#creat_trip_form_weekly_start_hour').on('change', function () {
        ga('send', 'event', 'dich vu - tour hang tuan- chon gio khoi hanh', 'dich vu - tour hang tuan- chon gio khoi hanh', 'dich vu - tour hang tuan- chon gio khoi hanh', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-tour-hang-tuan-chon-gio-khoi-hanh');
    });
    $('#creat_trip_form_weekly_start_time_category_day').on('change', function () {
        ga('send', 'event', 'dich vu - tour hang tuan', 'dich vu- tour hang tuan- chon ngay di trong tuan -thu 2 den CN', 'dich vu - tour hang tuan - chon ngay di trong tuan- thu 2 den CN', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-tour-hang-tuan-thoi-gian-di-thu-2-den-CN');
    });
    $('#select_date_request_service_day_long').on('change', function () {
        ga('send', 'event', 'dich vu- tour hang tuan- con thoi gian tour keo dai trong bao lau', 'dich vu - tour hang tuan- keo dai trong bao lau', 'dich vu - tou hang tuan- keo dai trong ba', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-tour-hang-tuan-chon-tour-keo-dai-trong-bao-lau');
    });

    //CHI PHI DICH VU
    $('#type_pricing_service_id').on('change', function () {
        ga('send', 'event', 'dich vu-step 2- cach tinh gia', 'click vao box Cach tinh gia', 'box Cach tinh gia', 1);
        ga('send', 'pageview','/virtualpage-step2-chi-phi-cach-tinh-gia-box');
    });
    $('#price_tour').on('change', function () {
        ga('send', 'event', 'dich vu - dien gia cho mot khach', 'dich vu - dien gia cho mot khach', 'dich vu - dien gia cho mot khach', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-dien-gia-cho-1-khach');
    });
    $('#number_seat_min_tour').on('change', function () {
        ga('send', 'event', 'dich vu - tinh gia- dien so khach toi thieu', 'dich vu - tinh gia- dien so khach toi thieu', 'dich vu - tinh gia- dien so khach toi thieu', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-chi-phi-dien-so-khach-toi-thieu');
    });
    $('#number_seat_tour').on('change', function () {
        ga('send', 'event', 'dich vu - tinh gia- dien so khach toi da', 'dich vu - tinh gia- dien so khach toi da', 'dich vu - tinh gia - dien so khach toi da', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-chi-phi-dien-so-khach-toi-da');
    });
    $('#checkbox_price_tour_service').on('click', function () {
        ga('send', 'event', 'dich vu - tinh gia- tuy chon them dich vu', 'dich vu - tinh gia- tuy chon them dich vu', 'dich vu - tinh gia- tuy chon them dich vu', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-tinh-gia-tuy-chon-them-dich-vu');
    });
    $('#checkbox_kid_price').on('click', function () {
        ga('send', 'event', 'dich vu - tinh gia - gia trẻ em', 'dich vu - tinh gia - gia trẻ em', 'dich vu - tinh gia - gia trẻ em', 1);
        ga('send', 'pageview','/virtualpage-dic-vu-tinh-gia-them-gia-tre-em');
    });
    $('#checkbox_discount_tour_number').on('click', function () {
        ga('send', 'event', 'dich vu - gia so luong khach', 'dich vu - gia so luong khach', 'dich vu - gia so luong khach', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-tinh-gia-gia-theo-so-luong-khach');
    });
    $('#checkbox_discount_tour_day').on('click', function () {
        ga('send', 'event', 'dich vu - tinh gia- gia theo su kien', 'dich vu - tinh gia - gia theo su kien', 'dich vu - tinh gia - gia theo su kien', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-tinh-gia-gia-theo-su-kien');
    });
    $('#allow_booking_fast').on('click', function () {
        ga('send', 'event', 'dich vu - tinh gia - mac dinh dang ki', 'dich vu - tinh gia - mac dinh dang ki', 'dich vu - mac dinh dang ki', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-tinh-gia-mac-dinh-dang-ki-thanh-cong');
    });
    $('#payment_type_id').on('change', function () {
        ga('send', 'event', 'dich vu - tinh gia- chon hinh thuc thanh toan', 'dich vu - tinh gia- chon hinh thuc thanh toan', 'dich vu - tinh gia - chon hinh thuc thanh toan', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-tinh-gia-chon-hinh-thuc-thanh-toan');
    });
    $('#update_price').on('click', function () {
        ga('send', 'event', 'dich vu - chi phi - cap nhat', 'dich vu - chi phi - cap nhat', 'dich vu - chi phi - cap nhat', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-chi-phi-cap-nhat');
    });

    //DIEU KHOAN DICH VU
    $('#click_note_gia').on('click', function () {
        ga('send', 'event', 'dich vu - chinh sach gia', 'dich vu - chinh sach gia', 'dich vu - chinh sach gia', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-chinh-sach-gia-box');
    });
    $('#click_chinh_sach_huy').on('click', function () {
        ga('send', 'event', 'dich vu- chinh sach huy', 'dich vu- chinh sach huy', 'dich vu- chinh sach huy', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-chinh-sach-huy');
    });
    $('#click_ghi_chu_khac').on('click', function () {
        ga('send', 'event', 'dich vu - ghi chu', 'dich vu - ghi chu', 'dich vu - ghi chu', 1);
        ga('send', 'pageview','/virtualpage-dich-vu-ghi-chu');
    });
    
 

    $('.fb').on('click', function () {
        ga('send', 'event', 'Theo doi Face', 'Facebook icon tren homepage', 'click Facebook icon', 1);
        ga('send', 'pageview','/virtualpage-facebook-icon');
    });
    $('.gg').on('click', function () {
        ga('send', 'event', 'Google +', 'Google +', 'Google +', 1);
        ga('send', 'pageview','/virtualpage-google-icon');
    });
    $('.ins').on('click', function () {
        ga('send', 'event', 'Insta', 'Insta', 'Insta', 1);
        ga('send', 'pageview','/virtualpage-insta-icon');
    });
    $('.pri').on('click', function () {
        ga('send', 'event', 'Pinterest', 'Pinterest', 'Pinterest', 1);
        ga('send', 'pageview','/virtualpage-pinterest-icon');
    });
    $('.utb').on('click', function () {
        ga('send', 'event', 'Youtube', 'Youtube', 'Youtube', 1);
        ga('send', 'pageview','/virtualpage-youtube-icon');
    });
});
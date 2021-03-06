<?php
// auto-generated by sfRoutingConfigHandler
// date: 2015/08/19 09:47:59
$this->connect('homepage', '/', array (
  'module' => 'home',
  'action' => 'index',
), array());
$this->connect('fb', '/facebook_connect.html', array (
  'module' => 'home',
  'action' => 'facebook_connect',
), array());
$this->connect('tour_trong_nuoc', '/tour-trong-nuoc.html', array (
  'module' => 'area_tour',
  'action' => 'tour_trong_nuoc',
), array());
$this->connect('tour_quoc_te', '/tour-quoc-te.html', array (
  'module' => 'area_tour',
  'action' => 'tour_quoc_te',
), array());
$this->connect('tour_moi_noi', '/tour-moi-noi.html', array (
  'module' => 'area_tour',
  'action' => 'tour_moi_noi',
), array());
$this->connect('create_experience', '/dang-bai-trai-nghiem-chuyen-di.html', array (
  'module' => 'trip_experience',
  'action' => 'create_experience',
), array());
$this->connect('create_accquirements', '/dang-bai-chia-se-trai-nghiem-kinh-nghiem-chuyen-di.html', array (
  'module' => 'trip_acquirements',
  'action' => 'create_accquirements',
), array());
$this->connect('edit_experience', '/sua-bai-trai-nghiem-chuyen-di-:name-:id_experience.html', array (
  'module' => 'user_experience',
  'action' => 'edit_experience',
), array());
$this->connect('edit_acquirements', '/sua-bai-kinh-nghiem-chuyen-di-:name-:id_acquirements.html', array (
  'module' => 'user_acquirements',
  'action' => 'edit_acquirements',
), array());
$this->connect('experience', '/trai-nghiem-chuyen-di.html', array (
  'module' => 'trip_experience',
  'action' => 'index',
), array());
$this->connect('acquirements', '/kinh-nghiem-chuyen-di.html', array (
  'module' => 'trip_acquirements',
  'action' => 'index',
), array());
$this->connect('experience_detail', '/trai-nghiem-chuyen-di/:name-:id.html', array (
  'module' => 'trip_experience',
  'action' => 'experience_detail',
), array());
$this->connect('acquirements_detail', '/kinh-nghiem-chuyen-di/:name-:id.html', array (
  'module' => 'trip_acquirements',
  'action' => 'acquirements_detail',
), array());
$this->connect('createTour', '/dang-tour-du-lich.html', array (
  'module' => 'tour',
  'action' => 'create_trip',
), array());
$this->connect('thelecuocthi', '/the-le-cuoc-thi.html', array (
  'module' => 'home',
  'action' => 'the_le_cuoc_thi',
), array());
$this->connect('findTour', '/tim-kiem-tour/trang/1', array (
  'module' => 'tour',
  'action' => 'find',
), array());
$this->connect('pageFindTour', '/tim-kiem-tour/trang/:page', array (
  'module' => 'tour',
  'action' => 'find',
), array());
$this->connect('detailTour', '/tour/:name-:id.html', array (
  'module' => 'tour',
  'action' => 'detail_tour',
), array());
$this->connect('detail_tour_preview', '/tour-preview-:id.html', array (
  'module' => 'tour',
  'action' => 'detail_tour_preview',
), array());
$this->connect('bookingTour', '/booking-tour.html', array (
  'module' => 'booking_tour',
  'action' => 'index',
), array());
$this->connect('trip_manager', '/quan-ly-tour/:tour_id.html', array (
  'module' => 'tripManager',
  'action' => 'index',
), array());
$this->connect('trip_manager_personal', '/quan-ly-tour-ca-nhan/:tour_id.html', array (
  'module' => 'trip_manager_personal',
  'action' => 'index',
), array());
$this->connect('login', '/dang-nhap', array (
  'module' => 'user',
  'action' => 'login',
), array());
$this->connect('register', '/dang-ky-tai-khoan', array (
  'module' => 'user',
  'action' => 'register',
), array());
$this->connect('userAccount', '/thong-tin-tai-khoan.html', array (
  'module' => 'user',
  'action' => 'user',
), array());
$this->connect('user_profile_default', '/thong-tin-tai-khoan/:name-:user_id.html', array (
  'module' => 'user_default',
  'action' => 'index',
), array());
$this->connect('user_profile', '/sua-thong-tin-tai-khoan/:name-:id.html', array (
  'module' => 'user',
  'action' => 'user_profile',
), array());
$this->connect('user_notification', '/thong-bao.html', array (
  'module' => 'user',
  'action' => 'user_notification',
), array());
$this->connect('user_message', '/tin-nhan.html', array (
  'module' => 'user',
  'action' => 'user_message',
), array());
$this->connect('user_service', '/quan-ly-dich-vu.html', array (
  'module' => 'user_service',
  'action' => 'index',
), array());
$this->connect('user_transaction', '/quan-ly-giao-dich.html', array (
  'module' => 'user_transaction',
  'action' => 'index',
), array());
$this->connect('user_experience', '/trai-nghiem-chuyen-di-cua-ban.html', array (
  'module' => 'user_experience',
  'action' => 'index',
), array());
$this->connect('user_acquirements', '/kinh-nghiem-chuyen-di-cua-ban.html', array (
  'module' => 'user_acquirements',
  'action' => 'index',
), array());
$this->connect('user_settings', '/cai-dat.html', array (
  'module' => 'user',
  'action' => 'user_settings',
), array());
$this->connect('logout', '/log-out', array (
  'module' => 'user',
  'action' => 'logout',
), array());
$this->connect('ve_chung_toi', '/ve-chung-toi.html', array (
  'module' => 'page_footer',
  'action' => 've_chung_toi',
), array());
$this->connect('tuyen_dung', '/tuyen-dung.html', array (
  'module' => 'page_footer',
  'action' => 'tuyen_dung',
), array());
$this->connect('tinh_nang_noi_bat', '/tinh-nang-noi-bat.html', array (
  'module' => 'page_footer',
  'action' => 'tinh_nang_noi_bat',
), array());
$this->connect('chinh_sach_huy_dat_cho', '/chinh-sach-huy-dat-cho.html', array (
  'module' => 'page_footer',
  'action' => 'chinh_sach_huy_dat_cho',
), array());
$this->connect('doi_tac', '/doi-tac.html', array (
  'module' => 'page_footer',
  'action' => 'doi_tac',
), array());
$this->connect('doi_tac_tour', '/doi-tac-tour.html', array (
  'module' => 'page_footer',
  'action' => 'doi_tac_tour',
), array());
$this->connect('cach_thuc_hoat_dong', '/cach-thuc-hoat-dong.html', array (
  'module' => 'page_footer',
  'action' => 'cach_thuc_hoat_dong',
), array());
$this->connect('huong_dan_su_dung', '/huong-dan-su-dung.html', array (
  'module' => 'page_footer',
  'action' => 'huong_dan_su_dung',
), array());
$this->connect('thu_tuc_kiem_tra_thong_tin', '/thu-tuc-kiem-tra-thong-tin.html', array (
  'module' => 'page_footer',
  'action' => 'thu_tuc_kiem_tra_thong_tin',
), array());
$this->connect('van_chuyen_hanh_khach', '/van-chuyen-hanh-khach.html', array (
  'module' => 'page_footer',
  'action' => 'van_chuyen_hanh_khach',
), array());
$this->connect('bao_ve_quyen_rieng_tu', '/bao-ve-quyen-rieng-tu.html', array (
  'module' => 'page_footer',
  'action' => 'bao_ve_quyen_rieng_tu',
), array());
$this->connect('su_dung_dich_vu', '/su-dung-dich-vu.html', array (
  'module' => 'page_footer',
  'action' => 'su_dung_dich_vu',
), array());
$this->connect('cau_hoi_thuong_gap', '/cau-hoi-thuong-gap.html', array (
  'module' => 'page_footer',
  'action' => 'cau_hoi_thuong_gap',
), array());
$this->connect('giai_quyet_su_co_va_khieu_nai', '/giai-quyet-su-co-va-khieu-nai.html', array (
  'module' => 'page_footer',
  'action' => 'giai_quyet_su_co_va_khieu_nai',
), array());
$this->connect('co_hoi_tinh_nguyen', '/co-hoi-tinh-nguyen.html', array (
  'module' => 'page_footer',
  'action' => 'co_hoi_tinh_nguyen',
), array());
$this->connect('doi_tac_kinh_doanh', '/doi-tac-kinh-doanh.html', array (
  'module' => 'page_footer',
  'action' => 'doi_tac_kinh_doanh',
), array());
$this->connect('loi_ich_tham_gia', '/loi-ich-tham-gia.html', array (
  'module' => 'page_footer',
  'action' => 'loi_ich_tham_gia',
), array());
$this->connect('group_question', '/group-hoi-dap-du-lich.html', array (
  'module' => 'group_question',
  'action' => 'index',
), array());
$this->connect('create_question', '/dat-cau-hoi-du-lich.html', array (
  'module' => 'group_question',
  'action' => 'create_question',
), array());
$this->connect('group_detail', '/chi-tiet-nhom-du-lich-:name-:question_group_category_id.html', array (
  'module' => 'group_question',
  'action' => 'group_detail',
), array());
$this->connect('question_detail', '/chi-tiet-hoi-dap-:name-:question_id.html', array (
  'module' => 'group_question',
  'action' => 'question_detail',
), array());
$this->connect('find_question', '/tim-kiem-hoi-dap-du-lich.html', array (
  'module' => 'group_question',
  'action' => 'find_question',
), array());
$this->connect('find_question_group_category', '/tim-kiem-hoi-dap-du-lich-:name-:question_group_category_id.html', array (
  'module' => 'group_question',
  'action' => 'find_question_group_category',
), array());
$this->connect('blog', '/blog-du-lich.html', array (
  'module' => 'blog',
  'action' => 'index',
), array());
$this->connect('blog_page_index', '/blog-du-lich-trang-:page.html', array (
  'module' => 'blog',
  'action' => 'page_index',
), array());
$this->connect('blog_post', '/chi-tiet-blog-:name-:blog_id.html', array (
  'module' => 'blog',
  'action' => 'blog_post',
), array());
$this->connect('blog_post_category', '/blog-:name-:blog_menu_category_id.html', array (
  'module' => 'blog',
  'action' => 'blog_post_category',
), array());
$this->connect('blog_page_post_category', '/trang-blog-:name-:blog_menu_category_id-trang-:page.html', array (
  'module' => 'blog',
  'action' => 'blog_page_post_category',
), array());
$this->connect('search_address_blog', '/dia-diem.html', array (
  'module' => 'blog',
  'action' => 'search_address_blog',
), array());
$this->connect('search_address_page_blog', '/page-dia-diem-:address-:filter_blog-trang-:page.html', array (
  'module' => 'blog',
  'action' => 'search_address_page_blog',
), array());
$this->connect('page_footer', '/:page_footer_name-:page_footer_id.html', array (
  'module' => 'page_footer',
  'action' => 'index',
), array());
$this->connect('default_symfony', '/symfony/:action/*', array (
  'module' => 'default',
), array());
$this->connect('default_index', '/:module', array (
  'action' => 'index',
), array());
$this->connect('default', '/:module/:action/*', array(), array());

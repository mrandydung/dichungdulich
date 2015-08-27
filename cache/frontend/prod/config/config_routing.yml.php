<?php
// auto-generated by sfRoutingConfigHandler
// date: 2015/08/27 04:48:11
$this->connect('homepage', '/', array (
  'module' => 'home',
  'action' => 'index',
), array());
$this->connect('homepage_en', '/en', array (
  'module' => 'home',
  'action' => 'index',
  'lang' => 'en',
), array());
$this->connect('get_html_login', '/en/home/get_html_login', array (
  'module' => 'home',
  'action' => 'get_html_login',
  'lang' => 'en',
), array());
$this->connect('fb', '/facebook_connect.html', array (
  'module' => 'home',
  'action' => 'facebook_connect',
), array());
$this->connect('find_tour', '/find_tour/find_tour', array (
  'module' => 'find_tour',
  'action' => 'find_tour',
), array());
$this->connect('find_tour_en', '/find_tour/find_tour_en', array (
  'module' => 'find_tour',
  'action' => 'find_tour',
  'lang' => 'en',
), array());
$this->connect('change_tour_trong_nuoc', '/find_tour/change_tour_trong_nuoc', array (
  'module' => 'find_tour',
  'action' => 'change_tour_trong_nuoc',
), array());
$this->connect('change_tour_trong_nuoc_en', '/find_tour/change_tour_trong_nuoc_en', array (
  'module' => 'find_tour',
  'action' => 'change_tour_trong_nuoc',
  'lang' => 'en',
), array());
$this->connect('filter_sorting_tour', '/find_tour/filter_sorting_tour', array (
  'module' => 'find_tour',
  'action' => 'filter_sorting_tour',
), array());
$this->connect('filter_sorting_tour_en', '/find_tour/filter_sorting_tour_en', array (
  'module' => 'find_tour',
  'action' => 'filter_sorting_tour',
  'lang' => 'en',
), array());
$this->connect('tour_trong_nuoc', '/tour-trong-nuoc.html', array (
  'module' => 'area_tour',
  'action' => 'tour_trong_nuoc',
), array());
$this->connect('tour_trong_nuoc_en', '/en/domestic-tour.html', array (
  'module' => 'area_tour',
  'action' => 'tour_trong_nuoc',
  'lang' => 'en',
), array());
$this->connect('tour_quoc_te', '/tour-quoc-te.html', array (
  'module' => 'area_tour',
  'action' => 'tour_quoc_te',
), array());
$this->connect('tour_quoc_te_en', '/en/tour-international.html', array (
  'module' => 'area_tour',
  'action' => 'tour_quoc_te',
  'lang' => 'en',
), array());
$this->connect('tour_moi_noi', '/tour-moi-noi.html', array (
  'module' => 'area_tour',
  'action' => 'tour_moi_noi',
), array());
$this->connect('tour_moi_noi_en', '/en/tour-everywhere.html', array (
  'module' => 'area_tour',
  'action' => 'tour_moi_noi',
  'lang' => 'en',
), array());
$this->connect('create_experience', '/dang-bai-trai-nghiem-chuyen-di.html', array (
  'module' => 'trip_experience',
  'action' => 'create_experience',
), array());
$this->connect('create_accquirements', '/dang-bai-chia-se-trai-nghiem-kinh-nghiem-chuyen-di.html', array (
  'module' => 'trip_acquirements',
  'action' => 'create_accquirements',
), array());
$this->connect('create_accquirements_en', '/en/create-accquirement.html', array (
  'module' => 'trip_acquirements',
  'action' => 'create_accquirements',
  'lang' => 'en',
), array());
$this->connect('edit_experience', '/sua-bai-trai-nghiem-chuyen-di-:name-:id_experience.html', array (
  'module' => 'user_experience',
  'action' => 'edit_experience',
), array());
$this->connect('edit_acquirements', '/sua-bai-kinh-nghiem-chuyen-di-:name-:id_acquirements.html', array (
  'module' => 'user_acquirements',
  'action' => 'edit_acquirements',
), array());
$this->connect('edit_acquirements_en', '/en/edit-acquirements-:name-:id_acquirements.html', array (
  'module' => 'user_acquirements',
  'action' => 'edit_acquirements',
  'lang' => 'en',
), array());
$this->connect('experience', '/trai-nghiem-chuyen-di.html', array (
  'module' => 'trip_experience',
  'action' => 'index',
), array());
$this->connect('acquirements', '/kinh-nghiem-chuyen-di.html', array (
  'module' => 'trip_acquirements',
  'action' => 'index',
), array());
$this->connect('acquirements_en', '/en/experience-trip.html', array (
  'module' => 'trip_acquirements',
  'action' => 'index',
  'lang' => 'en',
), array());
$this->connect('experience_detail', '/trai-nghiem-chuyen-di/:name-:id.html', array (
  'module' => 'trip_experience',
  'action' => 'experience_detail',
), array());
$this->connect('acquirements_detail', '/kinh-nghiem-chuyen-di/:name-:id.html', array (
  'module' => 'trip_acquirements',
  'action' => 'acquirements_detail',
), array());
$this->connect('acquirements_detail_en', '/en/experience-tour/:name-:id.html', array (
  'module' => 'trip_acquirements',
  'action' => 'acquirements_detail',
  'lang' => 'en',
), array());
$this->connect('createTour', '/dang-tour-du-lich.html', array (
  'module' => 'tour',
  'action' => 'create_trip',
), array());
$this->connect('createTour_en', '/en/create-tour.html', array (
  'module' => 'tour',
  'action' => 'create_trip',
  'lang' => 'en',
), array());
$this->connect('thelecuocthi', '/the-le-cuoc-thi.html', array (
  'module' => 'home',
  'action' => 'the_le_cuoc_thi',
), array());
$this->connect('findTour', '/tim-kiem-tour/trang/1', array (
  'module' => 'tour',
  'action' => 'find',
), array());
$this->connect('findTour_en', '/en/find-tour/page/1', array (
  'module' => 'tour',
  'action' => 'find',
  'lang' => 'en',
), array());
$this->connect('pageFindTour', '/tim-kiem-tour/trang/:page', array (
  'module' => 'tour',
  'action' => 'find',
), array());
$this->connect('pageFindTour_en', '/en/find-tour/page/:page', array (
  'module' => 'tour',
  'action' => 'find',
  'lang' => 'en',
), array());
$this->connect('detailTour', '/tour/:name-:id.html', array (
  'module' => 'tour',
  'action' => 'detail_tour',
), array());
$this->connect('detailTour_en', '/en/tour/:name-:id.html', array (
  'module' => 'tour',
  'action' => 'detail_tour',
  'lang' => 'en',
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
$this->connect('trip_manager_en', '/en/trip-manager/:tour_id.html', array (
  'module' => 'tripManager',
  'action' => 'index',
  'lang' => 'en',
), array());
$this->connect('trip_manager_personal', '/quan-ly-tour-ca-nhan/:tour_id.html', array (
  'module' => 'trip_manager_personal',
  'action' => 'index',
), array());
$this->connect('trip_manager_personal_en', '/en/trip-manager-personal/:tour_id.html', array (
  'module' => 'trip_manager_personal',
  'action' => 'index',
  'lang' => 'en',
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
$this->connect('userAccount_en', '/en/my-profile.html', array (
  'module' => 'user',
  'action' => 'user',
  'lang' => 'en',
), array());
$this->connect('user_profile_default', '/thong-tin-tai-khoan/:name-:user_id.html', array (
  'module' => 'user_default',
  'action' => 'index',
), array());
$this->connect('user_profile_default_en', '/en/account-information/:name-:user_id.html', array (
  'module' => 'user_default',
  'action' => 'index',
  'lang' => 'en',
), array());
$this->connect('user_profile', '/sua-thong-tin-tai-khoan/:name-:id.html', array (
  'module' => 'user',
  'action' => 'user_profile',
), array());
$this->connect('user_profile_en', '/en/edit-account-information/:name-:id.html', array (
  'module' => 'user',
  'action' => 'user_profile',
  'lang' => 'en',
), array());
$this->connect('user_notification', '/thong-bao.html', array (
  'module' => 'user',
  'action' => 'user_notification',
), array());
$this->connect('user_notification_en', '/en/notification.html', array (
  'module' => 'user',
  'action' => 'user_notification',
  'lang' => 'en',
), array());
$this->connect('user_message', '/tin-nhan.html', array (
  'module' => 'user',
  'action' => 'user_message',
), array());
$this->connect('user_message_en', '/en/message.html', array (
  'module' => 'user',
  'action' => 'user_message',
  'lang' => 'en',
), array());
$this->connect('user_service', '/quan-ly-dich-vu.html', array (
  'module' => 'user_service',
  'action' => 'index',
), array());
$this->connect('user_service_en', '/en/management-tour.html', array (
  'module' => 'user_service',
  'action' => 'index',
  'lang' => 'en',
), array());
$this->connect('user_transaction', '/quan-ly-giao-dich.html', array (
  'module' => 'user_transaction',
  'action' => 'index',
), array());
$this->connect('user_transaction_en', '/en/transaction-management.html', array (
  'module' => 'user_transaction',
  'action' => 'index',
  'lang' => 'en',
), array());
$this->connect('user_experience', '/trai-nghiem-chuyen-di-cua-ban.html', array (
  'module' => 'user_experience',
  'action' => 'index',
), array());
$this->connect('user_acquirements', '/kinh-nghiem-chuyen-di-cua-ban.html', array (
  'module' => 'user_acquirements',
  'action' => 'index',
), array());
$this->connect('user_acquirements_en', '/en/the-experience.html', array (
  'module' => 'user_acquirements',
  'action' => 'index',
  'lang' => 'en',
), array());
$this->connect('user_settings', '/cai-dat.html', array (
  'module' => 'user',
  'action' => 'user_settings',
), array());
$this->connect('logout', '/log-out', array (
  'module' => 'user',
  'action' => 'logout',
), array());
$this->connect('group_question', '/group-hoi-dap-du-lich.html', array (
  'module' => 'group_question',
  'action' => 'index',
), array());
$this->connect('group_question_en', '/en/travel-FAQ.html', array (
  'module' => 'group_question',
  'action' => 'index',
  'lang' => 'en',
), array());
$this->connect('create_question', '/dat-cau-hoi-du-lich.html', array (
  'module' => 'group_question',
  'action' => 'create_question',
), array());
$this->connect('create_question_en', '/en/create-question.html', array (
  'module' => 'group_question',
  'action' => 'create_question',
  'lang' => 'en',
), array());
$this->connect('group_detail', '/chi-tiet-nhom-du-lich-:name-:question_group_category_id.html', array (
  'module' => 'group_question',
  'action' => 'group_detail',
), array());
$this->connect('group_detail_en', '/en/group-detail-question-:name-:question_group_category_id.html', array (
  'module' => 'group_question',
  'action' => 'group_detail',
  'lang' => 'en',
), array());
$this->connect('question_detail', '/chi-tiet-hoi-dap-:name-:question_id.html', array (
  'module' => 'group_question',
  'action' => 'question_detail',
), array());
$this->connect('question_detail_en', '/en/question-detail-:name-:question_id.html', array (
  'module' => 'group_question',
  'action' => 'question_detail',
  'lang' => 'en',
), array());
$this->connect('find_question', '/tim-kiem-hoi-dap-du-lich.html', array (
  'module' => 'group_question',
  'action' => 'find_question',
), array());
$this->connect('find_question_en', '/en/find-question.html', array (
  'module' => 'group_question',
  'action' => 'find_question',
  'lang' => 'en',
), array());
$this->connect('find_question_group_category', '/tim-kiem-hoi-dap-du-lich-:name-:question_group_category_id.html', array (
  'module' => 'group_question',
  'action' => 'find_question_group_category',
), array());
$this->connect('find_question_group_category_en', '/find-question-group-category-:name-:question_group_category_id.html', array (
  'module' => 'group_question',
  'action' => 'find_question_group_category',
  'lang' => 'en',
), array());
$this->connect('blog', '/blog-du-lich.html', array (
  'module' => 'blog',
  'action' => 'index',
), array());
$this->connect('blog_en', '/en/blog-tour.html', array (
  'module' => 'blog',
  'action' => 'index',
  'lang' => 'en',
), array());
$this->connect('blog_page_index', '/blog-du-lich-trang-:page.html', array (
  'module' => 'blog',
  'action' => 'page_index',
), array());
$this->connect('blog_post', '/chi-tiet-blog-:name-:blog_id.html', array (
  'module' => 'blog',
  'action' => 'blog_post',
), array());
$this->connect('blog_post_en', '/en/detail-blog-:name-:blog_id.html', array (
  'module' => 'blog',
  'action' => 'blog_post',
  'lang' => 'en',
), array());
$this->connect('blog_post_category', '/blog-:name-:blog_menu_category_id.html', array (
  'module' => 'blog',
  'action' => 'blog_post_category',
), array());
$this->connect('blog_post_category_en', '/en/blog-:name-:blog_menu_category_id.html', array (
  'module' => 'blog',
  'action' => 'blog_post_category',
  'lang' => 'en',
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
$this->connect('page_footer_en', '/en/:page_footer_name-:page_footer_id.html', array (
  'module' => 'page_footer',
  'action' => 'index',
  'lang' => 'en',
), array());
$this->connect('get_day_scheduled_day_first', '/trip_scheduled_day/get_day_scheduled_day_first', array (
  'module' => 'trip_scheduled_day',
  'action' => 'get_day_scheduled_day_first',
), array());
$this->connect('get_day_scheduled_day_first_en', '/trip_scheduled_day/get_day_scheduled_day_first_en', array (
  'module' => 'trip_scheduled_day',
  'action' => 'get_day_scheduled_day_first',
  'lang' => 'en',
), array());
$this->connect('select_item_schedule_day_change', '/trip_scheduled_day/select_item_schedule_day_change_en', array (
  'module' => 'trip_scheduled_day',
  'action' => 'select_item_schedule_day_change',
  'lang' => 'en',
), array());
$this->connect('get_day_scheduled_day_prev', '/trip_scheduled_day/get_day_scheduled_day_prev', array (
  'module' => 'trip_scheduled_day',
  'action' => 'get_day_scheduled_day_prev',
), array());
$this->connect('get_day_scheduled_day_prev_en', '/trip_scheduled_day/get_day_scheduled_day_prev_en', array (
  'module' => 'trip_scheduled_day',
  'action' => 'get_day_scheduled_day_prev',
  'lang' => 'en',
), array());
$this->connect('get_day_scheduled_day', '/trip_scheduled_day/get_day_scheduled_day', array (
  'module' => 'trip_scheduled_day',
  'action' => 'get_day_scheduled_day',
), array());
$this->connect('get_day_scheduled_day_en', '/trip_scheduled_day/get_day_scheduled_day_en', array (
  'module' => 'trip_scheduled_day',
  'action' => 'get_day_scheduled_day',
  'lang' => 'en',
), array());
$this->connect('add_schedule_day', '/trip_scheduled_day/add_schedule_day', array (
  'module' => 'trip_scheduled_day',
  'action' => 'add_schedule_day',
), array());
$this->connect('add_schedule_day_en', '/trip_scheduled_day/add_schedule_day_en', array (
  'module' => 'trip_scheduled_day',
  'action' => 'add_schedule_day',
  'lang' => 'en',
), array());
$this->connect('default_symfony', '/symfony/:action/*', array (
  'module' => 'default',
), array());
$this->connect('default_index', '/:module', array (
  'action' => 'index',
), array());
$this->connect('default', '/:module/:action/*', array(), array());

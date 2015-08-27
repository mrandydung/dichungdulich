<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?> 
<script src="/ckeditor/ckeditor.js"></script>
<link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="col-md-12"> 
<br/>
<?php if(!$sf_user->hasCredential('admin')):?>
<a href="/backend.php"><img alt="LOgO" class="logo" src="/images/gheptour.png"></a> 
<?php else:?>
<a href="/backend.php"><img alt="LOgO" class="logo" src="/images/gheptour.png"></a>
<?php endif?>
<a style="float: right;margin-right: 50px;" href="/backend.php/security/logout">LOGOUT</a>
<br/>
<br/>
</div>
<div class="col-md-2"> 
 <?php if($sf_user->hasCredential('admin')):?>
   <div class="list-group">
      <a href="#" class="list-group-item disabled" >QUẢN LÝ TÀI KHOẢN  </a>
      <a class="list-group-item" href="<?=url_for('apc/index')?>">APC</a>
      <a class="list-group-item" href="<?=url_for('huser/list')?>">Tài Khoản Quản Trị</a>
      <a class="list-group-item" href="<?=url_for('partner/list')?>">Partner</a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item disabled" >Quản lí Tour</a>
    <a class="list-group-item" href="<?=url_for('tourDetail/list')?>">Tour List</a>
    <a class="list-group-item" href="<?=url_for('bookingTour/list')?>">Booking Tour</a>
    <a class="list-group-item" href="<?=url_for('tourSorting/list')?>">Sorting</a>
    <a class="list-group-item" href="<?=url_for('tourUtilities/list')?>">Utilities</a>
   <a class="list-group-item" href="<?=url_for('tourActivities/list')?>">Activities</a>
   <a class="list-group-item" href="<?=url_for('tour_object_fit/list')?>">Object Fit</a>
  </div>
   <div class="list-group">
    <a href="#" class="list-group-item disabled" >Quản lí Trải nghiệm</a>
    <a class="list-group-item" href="<?=url_for('tripAcquirements/list')?>">Experience List</a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item disabled" >Question</a>
    <a class="list-group-item" href="<?=url_for('question/list')?>">Question List</a>
    <a class="list-group-item" href="<?=url_for('question_answer/list')?>">Answer List</a>
    <a class="list-group-item" href="<?=url_for('question_group_category/list')?>">Question Group Category</a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item disabled" >Blog</a>
    <a class="list-group-item" href="<?=url_for('blog/list')?>">Blog List</a>
    <a class="list-group-item" href="<?=url_for('blog_menu_category/list')?>">Menu Blog</a>
  </div>
  <div class="list-group">
    <a href="#" class="list-group-item disabled" >Quản lí Event</a>
    <a class="list-group-item" href="<?=url_for('event/list')?>">Event List</a>
  </div>
  <div class="list-group">
      <a href="#" class="list-group-item disabled" >CÁC TUỲ CHỈNH KHÁC</a>
      <a class="list-group-item" href="<?=url_for('images_slide/list')?>">Ảnh Slide trang chủ</a>
      <a class="list-group-item" href="<?=url_for('setting_site/list')?>">Setting Site</a>
      <a class="list-group-item" href="<?=url_for('lang/list')?>">Language</a>
      <a class="list-group-item" href="<?=url_for('row_page_footer/list')?>">Row page Footer</a>
      <a class="list-group-item" href="<?=url_for('pageFooter/list')?>">Page Footer</a>
      <a class="list-group-item" href="<?=url_for('contact_footer/list')?>">Contact Footer</a>
      <a class="list-group-item" href="<?=url_for('config_social_network/list')?>">Config Social Network</a>
      <a class="list-group-item" href="<?=url_for('diem_den_item/list')?>">Home Điểm Đến Item</a>

  </div>
  <div class="list-group">
      <a href="#" class="list-group-item disabled">SEO</a>
      <a class="list-group-item" href="<?=url_for('pageCategory/list')?>">Page chính</a>
  </div>
  <div class="list-group">
      <a href="#" class="list-group-item disabled">EMAIL MARKETTING</a>
      <a class="list-group-item" href="<?=url_for('mail_template/list')?>">Email Template</a>
      <a class="list-group-item" href="<?=url_for('url_tag_footer/list')?>">Tag Footer</a>
  </div>
<?php endif ?>
 <?php if($sf_user->hasCredential('moderater')):?>
  <div class="list-group">
    <a href="#" class="list-group-item disabled" >Quản lí Tour</a>
    <a class="list-group-item" href="<?=url_for('tour_detail_moderater/list')?>">Tour List</a>
    <a class="list-group-item" href="<?=url_for('booking_tour_moderater/list')?>">Booking Tour</a>
  </div>
<?php endif ?>
<?php if($sf_user->hasCredential('partner') && $sf_user->check_login_partner($sf_user->getAttribute('username', '', 'user'))):?>
<div class="list-group">
    <a href="#" class="list-group-item disabled" >Quản lí Tour</a>
    <a class="list-group-item" href="<?=url_for('tour_detail_partner/list')?> ">Tour List</a>
    <a class="list-group-item" href="<?=url_for('booking_tour_partner/list')?>">Booking Tour</a>
  </div>
  <div class="list-group">
      <a href="#" class="list-group-item disabled">Config</a>
      <a class="list-group-item" href="<?=url_for('images_slide_partner/list')?>">Ảnh Slide trang chủ</a>
      <a class="list-group-item" href="<?=url_for('home_diem_den_item_partner/list')?>">Điếm đến slide trang chủ</a>
      <a class="list-group-item" href="<?=url_for('setting_site_partner/list')?>">Setting Site</a>
      <a class="list-group-item" href="<?=url_for('row_page_footer_partner/list')?>">Row page Footer</a>
      <a class="list-group-item" href="<?=url_for('pageFooter_partner/list')?>">Page Footer</a>
      <a class="list-group-item" href="<?=url_for('contact_footer_partner/list')?>">Contact Footer</a>
      <a class="list-group-item" href="<?=url_for('config_social_network_partner/list')?>">Config Social Network</a>
  </div>
<?php endif ?>

</div>
<div class="col-md-10"><?php echo $sf_content ?></div>
</body>
</html>

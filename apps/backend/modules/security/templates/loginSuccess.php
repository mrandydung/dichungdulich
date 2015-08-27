<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="Shortcut Icon" href="/favicon.png" type="image/x-icon" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
<title>Administrator - Login</title>
</head>
<body topmargin="0">

<div id="sf_admin_container" style="text-align: center">
<div class="header">
	<h1 style="text-align: center"><?=strtoupper($_SERVER['HTTP_HOST'])?> - ADMIN</h1>
</div>
<div id="sf_admin_header">
</div>

<div id="sf_admin_bar" style="width: 100%">

<?php use_helper('Object', 'I18N') ?>

<div class="sf_admin_filters" style=" width: 368px; margin: 0 auto">
<form action="" method="post" id="login_frm">

  <fieldset>
    <h2><?php echo __('Đăng nhập hệ thống') ?></h2>
    
    <div class="form-row">
    <label for="filters_receive_date"><?php echo __('Tên đăng nhập:') ?></label>
    <div class="content">
			<input type="text" name="user[user_name]" style="width:230px;" />
    </div>
    </div>
<div class="form-row">
    <label for="filters_mobile_number"><?php echo __('Mật khẩu:') ?></label>
    <div class="content">
			<input type="password" name="user[password]" style="width:230px;" />
    </div>
    </div>
      </fieldset>

  <ul class="sf_admin_actions">
    <li><?php echo button_to(__('Nhập lại'), 'security/login', 'class=sf_admin_action_reset_filter') ?></li>
    <li><?php echo submit_tag(__('Đăng nhập'), 'name=filter class=sf_admin_action_filter') ?></li>
  </ul>
<div class="pass_" style="color:red"><?php if ($sf_request->hasError('failed')) echo $sf_request->getError('failed');?></div>
</form>
</div>

</div>

</body>
</html>

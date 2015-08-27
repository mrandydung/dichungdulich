<?php

/**
 * Subclass for performing query and update operations on the 'mail_template' table.
 *
 * 
 *
 * @package lib.model
 */ 
class MailTemplatePeer extends BaseMailTemplatePeer
{
	public static function mail_dang_ki($user_name,$email,$password){
		$html ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
				<meta name="viewport" content="width=device-width, initial-scale=1"/>
				<title></title>
				<style type="text/css">
				@media only screen and (max-width:480px){body,table,td,p,a,li,blockquote{-webkit-text-size-adjust:none !important}body{width:100% !important;min-width:100% !important}td[id=bodyCell]{padding:10px !important}table.kmMobileHide{display:none !important}table[class=kmTextContentContainer]{width:100% !important}table[class=kmBoxedTextContentContainer]{width:100% !important}td[class=kmImageContent]{padding-left:0 !important;padding-right:0 !important}img[class=kmImage]{width:100% !important}table[class=kmSplitContentLeftContentContainer],table[class=kmSplitContentRightContentContainer],table[class=kmColumnContainer],td[class=kmVerticalButtonBarContentOuter] table[class=kmButtonBarContent],td[class=kmVerticalButtonCollectionContentOuter] table[class=kmButtonCollectionContent],table[class=kmVerticalButton],table[class=kmVerticalButtonContent]{width:100% !important}td[class=kmButtonCollectionInner]{padding-left:9px !important;padding-right:9px !important;padding-top:9px !important;padding-bottom:0 !important;background-color:transparent !important}td[class=kmVerticalButtonIconContent],td[class=kmVerticalButtonTextContent],td[class=kmVerticalButtonContentOuter]{padding-left:0 !important;padding-right:0 !important;padding-bottom:9px !important}table[class=kmSplitContentLeftContentContainer] td[class=kmTextContent],table[class=kmSplitContentRightContentContainer] td[class=kmTextContent],table[class=kmColumnContainer] td[class=kmTextContent],table[class=kmSplitContentLeftContentContainer] td[class=kmImageContent],table[class=kmSplitContentRightContentContainer] td[class=kmImageContent]{padding-top:9px !important}td[class="rowContainer kmFloatLeft"],td[class="rowContainer kmFloatLeft firstColumn"],td[class="rowContainer kmFloatLeft lastColumn"]{float:left;clear:both;width:100% !important}table[id=templateContainer],table[class=templateRow]{max-width:600px !important;width:100% !important}h1{font-size:24px !important;line-height:130% !important}h2{font-size:20px !important;line-height:130% !important}h3{font-size:18px !important;line-height:130% !important}h4{font-size:16px !important;line-height:130% !important}td[class=kmTextContent]{font-size:14px !important;line-height:130% !important}td[class=kmTextBlockInner] td[class=kmTextContent]{padding-right:18px !important;padding-left:18px !important}table[class="kmTableBlock kmTableMobile"] td[class=kmTableBlockInner]{padding-left:9px !important;padding-right:9px !important}table[class="kmTableBlock kmTableMobile"] td[class=kmTableBlockInner] [class=kmTextContent]{font-size:14px !important;line-height:130% !important;padding-left:4px !important;padding-right:4px !important}}</style>
				</head>
				<body style="margin:0;padding:0;background-color:#c7c7c7;font-family: Arial, san-serif; ">
				<center>
				<table align="center" border="0" cellpadding="0" cellspacing="0" id="bodyTable" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding:0;background-color:#c7c7c7;height:100%;margin:0;width:100%">
				<tbody>
				<tr>
				<td align="center" id="bodyCell" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:50px;padding-left:20px;padding-bottom:20px;padding-right:20px;border-top:0;height:100%;margin:0;width:100%">
				<table border="0" cellpadding="0" cellspacing="0" id="templateContainer" width="720px" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;border:1px solid #aaa;background-color:#f4f4f4">
				<tbody>
				<tr>
				<td id="templateContainerInner" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding:0">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<tr>
				<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<tbody>
				<tr>
				<td class="rowContainer kmFloatLeft" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<table border="0" cellpadding="0" cellspacing="0" class="kmSplitBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<tbody class="kmSplitBlockOuter">
				<tr>
				<td class="kmSplitBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:10px;padding-bottom:9px;padding-left:20px;padding-right:20px;">
				<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentOuter" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<tbody>
				<tr>
				<td class="kmSplitContentInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentLeftContentContainer" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
					<tbody>
						<tr>
							<td class="kmImageContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding:0;padding:0;">
								<table style="float:left; width: 73%;">
									<tr>
										<td>
											<a href="http://gheptour.vn/" target="_self" style="word-wrap:break-word;color:#0000cd;font-weight:normal;text-decoration:underline">
											<img align="center" alt="Dichung.vn Logo" class="kmImage" src="http://gheptour.vn/images/gheptour_beta.png" style="border:0;height:auto;line-height:100%;outline:none;text-decoration:none;padding-bottom:0;display:inline;vertical-align:bottom;max-width:400px;" />
											</a>
										</td>
									</tr>
								</table>
								<table style="float:left; width: 175px;">
									<tr>									
										<td style="font-size: 13px;">
											<p style="margin: 5px 0">Điện thoại: (84-4) 3 2002566</p>
											<p style="margin: 5px 0">Hotline: 094 579 5534 </p>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				<tr>
				<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<tbody>
				<tr>
				<td class="rowContainer kmFloatLeft" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">

				<table border="0" cellpadding="0" cellspacing="0" class="kmTextBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<tbody class="kmTextBlockOuter">
				<tr>
				<td class="kmTextBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;">
								<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="width:100%;margin:10px auto;margin-bottom: 20px; max-width:600px; box-shadow: 0px 0px 5px #b1b1b1; border-radius: 5px">
									<tbody>
										<tr>
				                            <td style="text-align:center; border-radius: 5px 5px 0 0; background-color: #0288d1;color: #ffffff;font-size: 18px;font-family: Arial, serif;text-transform: uppercase;padding: 10px;">
				                                <p>Thông tin tài khoản của bạn trên gheptour.vn</p>
				                            </td>
				                        </tr>
				                        <tr>
				                            <td style="padding:20px 10px;">
												<table border="0" cellspacing="0" cellpadding="0" style="width:100%;padding-bottom:20px">
													<tbody>
														<tr>
															<td width="72%" style="padding-right:5%">
																	<h3 style="text-align:center; color:#404040;line-height:24px;margin:0 0 15px 0;font-weight: normal;">
																		Chào mừng <strong>'.$user_name.'</strong> đã tham gia Gheptour.vn
																	</h3>
																	<p style="line-height: 24px;font-weight: 700;font-size: 14px;margin: 0;">
																		Bạn đã đăng ký tài khoản thành công. Dưới đây là thông tin tài  khoản của bạn
																	</p>
																	<p style="font-size:15px;font-weight:normal;line-height:24px;margin:0">
																		Tên đăng nhập: <span style="font-weight:bold">'.$email.'</span>
																	</p>
																	<p style="font-size:15px;font-weight:normal;line-height:24px;margin:0">
																		Password: <span style="font-weight:bold">'.$password.'</span>
																	</p>
																	<p style="font-size:15px;font-weight:normal;line-height:24px;margin:0">
																		Nếu cần hỗ trợ, <span style="font-weight:bold">'.$user_name.'</span> có thể nhận hỗ trợ online trên trang <span style="font-weight:bold">Gheptour.vn</span> hoặc gọi vào số  <span style="font-weight:bold"> 094 579 5534 </span> nhé.
																	</p>
																	<p><strong>Xin cảm ơn.</strong></p>
															</td>
														</tr>
													</tbody>
												</table>
				                            </td>
				                        </tr>
				                    </tbody>
								</table>
				</td>
				</tr>
				</tbody>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" class="kmButtonCollectionBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;">
				<tbody class="kmButtonCollectionOuter">
				<tr>
					<td>
						<table style="width: 200px; margin: 0 auto; text-align:center">
							<tbody>
								<tr>
									<td><a style="cursor: pointer" href="https://www.facebook.com/gheptour.vn"><img src="http://gheptour.vn/images/Facebook.png"></a></td>
									<td><a style="cursor: pointer" href="https://plus.google.com/u/0/109458226884966853840/posts"><img src="http://gheptour.vn/images/Google+.png"></a></td>
									<td><a style="cursor: pointer" href="Skype:ha.phuong.207?chat"><img src="http://gheptour.vn/images/Skype.png"></a></td>
								</tr>
							</tbody>
						</table>
					<td>	
				</tr>
				<tr>
					<td style="padding: 0 20px;">
						<hr/>
					</td>
				</tr>
				<tr>
					<td style="text-align:center;font-size: 12px;line-height: 10px;">
						<p>© 2013 Dichung.vn</p>
						<p>Công ty Cổ phần Đi chung. </p>
						<p>P211, Tầng 2, Tháp B, Tòa nhà Sông hồng Parkview, 165 Thái Hà, Đống Đa, Hà nội. </p>
					</td>
				</tr>
				</tbody>
				</table>

				<table border="0" cellpadding="0" cellspacing="0" class="kmSplitBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<tbody class="kmSplitBlockOuter">
				<tr>
				<td class="kmSplitBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:0px;padding-bottom:0px;padding-left:18px;padding-right:18px;">
				<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentOuter" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<tbody>
				<tr>
				<td class="kmSplitContentInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentLeftContentContainer" width="66" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<tbody>
				<tr>
				<td class="kmTextContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left">
				</td>
				</tr>
				</tbody>
				</table>
				<table align="right" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentRightContentContainer" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<tbody>
				<tr>
				<td class="kmTextContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left">
				<p style="margin:0;padding-bottom:0;text-align: center;"><em><span style="font-size: 10px; text-align: center;">Xem trên trình duyệt      |     </span><span style="font-size:10px;">Từ chối nhận email</span></em></p>
				</td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				</center>
				</body>
				</html>';
		return $html;
	}

	public static function mail_tao_tour($user_name,$url_tour,$tour_name,$url_quanly){
		$html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1"/>
			<title></title>
			<style type="text/css">
			@media only screen and (max-width:480px){body,table,td,p,a,li,blockquote{-webkit-text-size-adjust:none !important}body{width:100% !important;min-width:100% !important}td[id=bodyCell]{padding:10px !important}table.kmMobileHide{display:none !important}table[class=kmTextContentContainer]{width:100% !important}table[class=kmBoxedTextContentContainer]{width:100% !important}td[class=kmImageContent]{padding-left:0 !important;padding-right:0 !important}img[class=kmImage]{width:100% !important}table[class=kmSplitContentLeftContentContainer],table[class=kmSplitContentRightContentContainer],table[class=kmColumnContainer],td[class=kmVerticalButtonBarContentOuter] table[class=kmButtonBarContent],td[class=kmVerticalButtonCollectionContentOuter] table[class=kmButtonCollectionContent],table[class=kmVerticalButton],table[class=kmVerticalButtonContent]{width:100% !important}td[class=kmButtonCollectionInner]{padding-left:9px !important;padding-right:9px !important;padding-top:9px !important;padding-bottom:0 !important;background-color:transparent !important}td[class=kmVerticalButtonIconContent],td[class=kmVerticalButtonTextContent],td[class=kmVerticalButtonContentOuter]{padding-left:0 !important;padding-right:0 !important;padding-bottom:9px !important}table[class=kmSplitContentLeftContentContainer] td[class=kmTextContent],table[class=kmSplitContentRightContentContainer] td[class=kmTextContent],table[class=kmColumnContainer] td[class=kmTextContent],table[class=kmSplitContentLeftContentContainer] td[class=kmImageContent],table[class=kmSplitContentRightContentContainer] td[class=kmImageContent]{padding-top:9px !important}td[class="rowContainer kmFloatLeft"],td[class="rowContainer kmFloatLeft firstColumn"],td[class="rowContainer kmFloatLeft lastColumn"]{float:left;clear:both;width:100% !important}table[id=templateContainer],table[class=templateRow]{max-width:600px !important;width:100% !important}h1{font-size:24px !important;line-height:130% !important}h2{font-size:20px !important;line-height:130% !important}h3{font-size:18px !important;line-height:130% !important}h4{font-size:16px !important;line-height:130% !important}td[class=kmTextContent]{font-size:14px !important;line-height:130% !important}td[class=kmTextBlockInner] td[class=kmTextContent]{padding-right:18px !important;padding-left:18px !important}table[class="kmTableBlock kmTableMobile"] td[class=kmTableBlockInner]{padding-left:9px !important;padding-right:9px !important}table[class="kmTableBlock kmTableMobile"] td[class=kmTableBlockInner] [class=kmTextContent]{font-size:14px !important;line-height:130% !important;padding-left:4px !important;padding-right:4px !important}}</style>
			</head>
			<body style="margin:0;padding:0;background-color:#c7c7c7;font-family: Arial, san-serif; ">
			<center>
			<table align="center" border="0" cellpadding="0" cellspacing="0" id="bodyTable" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding:0;background-color:#c7c7c7;height:100%;margin:0;width:100%">
			<tbody>
			<tr>
			<td align="center" id="bodyCell" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:50px;padding-left:20px;padding-bottom:20px;padding-right:20px;border-top:0;height:100%;margin:0;width:100%">
			<table border="0" cellpadding="0" cellspacing="0" id="templateContainer" width="720px" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;border:1px solid #aaa;background-color:#f4f4f4">
			<tbody>
			<tr>
			<td id="templateContainerInner" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding:0">
			<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tr>
			<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
			<tr>
			<td class="rowContainer kmFloatLeft" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<table border="0" cellpadding="0" cellspacing="0" class="kmSplitBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody class="kmSplitBlockOuter">
			<tr>
			<td class="kmSplitBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:10px;padding-bottom:9px;padding-left:20px;padding-right:20px;">
			<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentOuter" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
			<tr>
			<td class="kmSplitContentInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentLeftContentContainer" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
				<tbody>
					<tr>
						<td class="kmImageContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding:0;padding:0;">
							<table style="float:left; width: 73%;">
								<tr>
									<td>
										<a href="http://gheptour.vn/" target="_self" style="word-wrap:break-word;color:#0000cd;font-weight:normal;text-decoration:underline">
										<img align="center" alt="Dichung.vn Logo" class="kmImage" src="http://gheptour.vn/images/gheptour_beta.png" width="" style="border:0;height:auto;line-height:100%;outline:none;text-decoration:none;padding-bottom:0;display:inline;vertical-align:bottom;max-width:400px;" />
										</a>
									</td>
								</tr>
							</table>
							<table style="float:left; width: 175px;">
								<tr>									
									<td style="font-size: 13px;">
										<p style="margin: 5px 0">Điện thoại: (84-4) 3 2002566</p>
										<p style="margin: 5px 0">Hotline: 094 579 5534 </p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
			<tr>
			<td class="rowContainer kmFloatLeft" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">

			<table border="0" cellpadding="0" cellspacing="0" class="kmTextBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody class="kmTextBlockOuter">
			<tr>
			<td class="kmTextBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;">
			<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="width:100%;margin:10px auto;margin-bottom: 20px; max-width:600px; box-shadow: 0px 0px 5px #b1b1b1; border-radius: 5px">
				<tbody>
					<tr>
                        <td style="text-align:center; border-radius: 5px 5px 0 0; background-color: #0288d1;color: #ffffff;font-size: 18px;font-family: Arial, serif;text-transform: uppercase;padding: 10px;">
                            <p>'.$user_name.' đã thành công đăng tour du lịch </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:20px 10px;">
							<table border="0" cellspacing="0" cellpadding="0" style="width:100%;padding-bottom:20px">
								<tbody>
									<tr>
										<td width="72%" style="padding-right:5%">
											<h3 style="text-align:center; color:#404040;line-height:24px;margin:0 0 15px 0;font-weight: normal;">
												Hi <strong>'.$user_name.'</strong>
											</h3>
											<p style="line-height: 24px;font-weight: 700;font-size: 14px;margin: 0;">
												Chúc mừng bạn đã đăng thành công tour <a href="http://gheptour.vn/'.$url_tour.'">'.$tour_name.'</a> trên hệ thống gheptour.vn
											</p>
											<p style="font-size:15px;font-weight:normal;line-height:24px;margin:0">
												Để chỉnh sửa thông tin tour, mời bạn truy cập vào đường dẫn sau ( Vui lòng đăng nhập tài khoản trước ):<a href="'.$url_quanly.'">Quản lý tour</a>
											</p>
											<p style="font-size:15px;font-weight:normal;line-height:24px;margin:0">
												Thân gửi,
											</p>
											<p style="font-size:15px;font-weight:normal;line-height:24px;margin:0">
												Gheptour.vn
											</p>
											<p style="font-size:15px;font-weight:normal;line-height:24px;margin:0">
												Nếu cần hỗ trợ, <span style="font-weight:bold">'.$user_name.'</span> có thể nhận hỗ trợ online trên trang <span style="font-weight:bold">Gheptour.vn</span> hoặc gọi vào số  <span style="font-weight:bold"> 094 579 5534 </span> nhé.
											</p>
											<p><strong>Xin cảm ơn.</strong></p>
										</td>
									</tr>
								</tbody>
							</table>
                        </td>
                    </tr>
                </tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" class="kmButtonCollectionBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;">
			<tbody class="kmButtonCollectionOuter">
			<tr>
				<td>
					<table style="width: 200px; margin: 0 auto; text-align:center">
						<tbody>
							<tr>
								<td><a style="cursor: pointer" href="https://www.facebook.com/gheptour.vn"><img src="http://gheptour.vn/images/Facebook.png"></a></td>
								<td><a style="cursor: pointer" href="https://plus.google.com/u/0/109458226884966853840/posts"><img src="http://gheptour.vn/images/Google+.png"></a></td>
								<td><a style="cursor: pointer" href="Skype:ha.phuong.207?chat"><img src="http://gheptour.vn/images/Skype.png"></a></td>
							</tr>
						</tbody>
					</table>
				<td>	
			</tr>
			<tr>
				<td style="padding: 0 20px;">
					<hr/>
				</td>
			</tr>
			<tr>
				<td style="text-align:center;font-size: 12px;line-height: 10px;">
					<p>© 2013 Dichung.vn</p>
					<p>Công ty Cổ phần Đi chung. </p>
					<p>P211, Tầng 2, Tháp B, Tòa nhà Sông hồng Parkview, 165 Thái Hà, Đống Đa, Hà nội. </p>
				</td>
			</tr>
			</tbody>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" class="kmSplitBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody class="kmSplitBlockOuter">
			<tr>
			<td class="kmSplitBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:0px;padding-bottom:0px;padding-left:18px;padding-right:18px;">
			<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentOuter" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
			<tr>
			<td class="kmSplitContentInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentLeftContentContainer" width="66" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
			<tr>
			<td class="kmTextContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left">
			</td>
			</tr>
			</tbody>
			</table>
			<table align="right" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentRightContentContainer" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
			<tbody>
			<tr>
			<td class="kmTextContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left">
			<p style="margin:0;padding-bottom:0;text-align: center;"><em><span style="font-size: 10px; text-align: center;">Xem trên trình duyệt      |     </span><span style="font-size:10px;">Từ chối nhận email</span></em></p>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</center>
			</body>
			</html>';
		return $html;
	}
    
    public static function mail_book_tour($user_name,$user_name_sell,$url_tour,$tour_name,$url_quanly,$date_booking){
        $html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title></title>
<style type="text/css">
@media only screen and (max-width:480px){body,table,td,p,a,li,blockquote{-webkit-text-size-adjust:none !important}body{width:100% !important;min-width:100% !important}td[id=bodyCell]{padding:10px !important}table.kmMobileHide{display:none !important}table[class=kmTextContentContainer]{width:100% !important}table[class=kmBoxedTextContentContainer]{width:100% !important}td[class=kmImageContent]{padding-left:0 !important;padding-right:0 !important}img[class=kmImage]{width:100% !important}table[class=kmSplitContentLeftContentContainer],table[class=kmSplitContentRightContentContainer],table[class=kmColumnContainer],td[class=kmVerticalButtonBarContentOuter] table[class=kmButtonBarContent],td[class=kmVerticalButtonCollectionContentOuter] table[class=kmButtonCollectionContent],table[class=kmVerticalButton],table[class=kmVerticalButtonContent]{width:100% !important}td[class=kmButtonCollectionInner]{padding-left:9px !important;padding-right:9px !important;padding-top:9px !important;padding-bottom:0 !important;background-color:transparent !important}td[class=kmVerticalButtonIconContent],td[class=kmVerticalButtonTextContent],td[class=kmVerticalButtonContentOuter]{padding-left:0 !important;padding-right:0 !important;padding-bottom:9px !important}table[class=kmSplitContentLeftContentContainer] td[class=kmTextContent],table[class=kmSplitContentRightContentContainer] td[class=kmTextContent],table[class=kmColumnContainer] td[class=kmTextContent],table[class=kmSplitContentLeftContentContainer] td[class=kmImageContent],table[class=kmSplitContentRightContentContainer] td[class=kmImageContent]{padding-top:9px !important}td[class="rowContainer kmFloatLeft"],td[class="rowContainer kmFloatLeft firstColumn"],td[class="rowContainer kmFloatLeft lastColumn"]{float:left;clear:both;width:100% !important}table[id=templateContainer],table[class=templateRow]{max-width:600px !important;width:100% !important}h1{font-size:24px !important;line-height:130% !important}h2{font-size:20px !important;line-height:130% !important}h3{font-size:18px !important;line-height:130% !important}h4{font-size:16px !important;line-height:130% !important}td[class=kmTextContent]{font-size:14px !important;line-height:130% !important}td[class=kmTextBlockInner] td[class=kmTextContent]{padding-right:18px !important;padding-left:18px !important}table[class="kmTableBlock kmTableMobile"] td[class=kmTableBlockInner]{padding-left:9px !important;padding-right:9px !important}table[class="kmTableBlock kmTableMobile"] td[class=kmTableBlockInner] [class=kmTextContent]{font-size:14px !important;line-height:130% !important;padding-left:4px !important;padding-right:4px !important}}</style>
</head>
<body style="margin:0;padding:0;background-color:#c7c7c7;font-family: Arial, san-serif; ">
<center>
<table align="center" border="0" cellpadding="0" cellspacing="0" id="bodyTable" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding:0;background-color:#c7c7c7;height:100%;margin:0;width:100%">
<tbody>
<tr>
<td align="center" id="bodyCell" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:50px;padding-left:20px;padding-bottom:20px;padding-right:20px;border-top:0;height:100%;margin:0;width:100%">
<table border="0" cellpadding="0" cellspacing="0" id="templateContainer" width="720px" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;border:1px solid #aaa;background-color:#f4f4f4">
<tbody>
<tr>
<td id="templateContainerInner" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding:0">
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<tr>
<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<tbody>
<tr>
<td class="rowContainer kmFloatLeft" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<table border="0" cellpadding="0" cellspacing="0" class="kmSplitBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<tbody class="kmSplitBlockOuter">
<tr>
<td class="kmSplitBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:10px;padding-bottom:9px;padding-left:20px;padding-right:20px;">
<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentOuter" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<tbody>
<tr>
<td class="kmSplitContentInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentLeftContentContainer" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
	<tbody>
		<tr>
			<td class="kmImageContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding:0;padding:0;">
				<table style="float:left; width: 73%;">
					<tr>
						<td>
							<a href="http://gheptour.vn/" target="_self" style="word-wrap:break-word;color:#0000cd;font-weight:normal;text-decoration:underline">
							<img align="center" alt="Dichung.vn Logo" class="kmImage" src="http://gheptour.vn/images/gheptour_beta.png" width="" style="border:0;height:auto;line-height:100%;outline:none;text-decoration:none;padding-bottom:0;display:inline;vertical-align:bottom;max-width:400px;" />
							</a>
						</td>
					</tr>
				</table>
				<table style="float:left; width: 175px;">
					<tr>									
						<td style="font-size: 13px;">
							<p style="margin: 5px 0">Điện thoại: (84-4) 3 2002566</p>
							<p style="margin: 5px 0">Hotline: 094 579 5534 </p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td align="center" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<table border="0" cellpadding="0" cellspacing="0" class="templateRow" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<tbody>
<tr>
<td class="rowContainer kmFloatLeft" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">

<table border="0" cellpadding="0" cellspacing="0" class="kmTextBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<tbody class="kmTextBlockOuter">
<tr>
<td class="kmTextBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;">
				<table bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0" align="center" width="100%" style="width:100%;margin:10px auto;margin-bottom: 20px; max-width:600px; box-shadow: 0px 0px 5px #b1b1b1; border-radius: 5px">
					<tbody>
						<tr>
                            <td style="text-align:center; border-radius: 5px 5px 0 0; background-color: #0288d1;color: #ffffff;font-size: 15px;font-family: Arial, serif;text-transform: uppercase;padding: 10px;">
                                <p>Gheptour.vn – '.$user_name.' đã book tour của bạn trên  gheptour.vn </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:20px 10px;">
								<table border="0" cellspacing="0" cellpadding="0" style="width:100%;padding-bottom:20px">
									<tbody>
										<tr>
											<td width="72%" style="padding-right:5%">
												<h3 style="text-align:center; color:#404040;line-height:24px;margin:0 0 15px 0;font-weight: normal;">
													Hi <strong>'.$user_name_sell.'</strong>
												</h3>
												<p style="line-height: 24px;font-weight: 700;font-size: 14px;margin: 0;">
													'.$user_name.' đã book tour <a href="http://gheptour.vn/'.$url_tour.'">'.$tour_name.'</a> của bạn vào '.$date_booking.'.
												</p>
												<p style="font-size:15px;font-weight:normal;line-height:24px;margin:0">
													Click vào <a href="'.$url_quanly.'">Quản lí giao dịch</a> để xem thêm thông tin 
												</p>
												<p style="font-size:15px;font-weight:normal;line-height:24px;margin:0">
													Thân gửi,
												</p>
												<p style="font-size:15px;font-weight:normal;line-height:24px;margin:0">
													Gheptour.vn
												</p>
												<p style="font-size:15px;font-weight:normal;line-height:24px;margin:0">
													Nếu cần hỗ trợ, <span style="font-weight:bold">'.$user_name.'</span> có thể nhận hỗ trợ online trên trang <span style="font-weight:bold">Gheptour.vn</span> hoặc gọi vào số  <span style="font-weight:bold"> 094 579 5534 </span> nhé.
												</p>
												<p><strong>Xin cảm ơn.</strong></p>
											</td>
										</tr>
									</tbody>
								</table>
                            </td>
                        </tr>
                    </tbody>
				</table>
</td>
</tr>
</tbody>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="kmButtonCollectionBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;">
<tbody class="kmButtonCollectionOuter">
<tr>
	<td>
		<table style="width: 200px; margin: 0 auto; text-align:center">
			<tbody>
				<tr>
					<td><a style="cursor: pointer" href="https://www.facebook.com/gheptour.vn"><img src="http://gheptour.vn/images/Facebook.png"></a></td>
					<td><a style="cursor: pointer" href="https://plus.google.com/u/0/109458226884966853840/posts"><img src="http://gheptour.vn/images/Google+.png"></a></td>
					<td><a style="cursor: pointer" href="Skype:ha.phuong.207?chat"><img src="http://gheptour.vn/images/Skype.png"></a></td>
				</tr>
			</tbody>
		</table>
	<td>	
</tr>
<tr>
	<td style="padding: 0 20px;">
		<hr/>
	</td>
</tr>
<tr>
	<td style="text-align:center;font-size: 12px;line-height: 10px;">
		<p>© 2013 Dichung.vn</p>
		<p>Công ty Cổ phần Đi chung. </p>
		<p>P211, Tầng 2, Tháp B, Tòa nhà Sông hồng Parkview, 165 Thái Hà, Đống Đa, Hà nội. </p>
	</td>
</tr>
</tbody>
</table>

<table border="0" cellpadding="0" cellspacing="0" class="kmSplitBlock" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<tbody class="kmSplitBlockOuter">
<tr>
<td class="kmSplitBlockInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;padding-top:0px;padding-bottom:0px;padding-left:18px;padding-right:18px;">
<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentOuter" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<tbody>
<tr>
<td class="kmSplitContentInner" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<table align="left" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentLeftContentContainer" width="66" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<tbody>
<tr>
<td class="kmTextContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left">
</td>
</tr>
</tbody>
</table>
<table align="right" border="0" cellpadding="0" cellspacing="0" class="kmSplitContentRightContentContainer" width="100%" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0">
<tbody>
<tr>
<td class="kmTextContent" valign="top" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;color:#505050;font-family:Helvetica, Arial;font-size:14px;line-height:150%;text-align:left">
<p style="margin:0;padding-bottom:0;text-align: center;"><em><span style="font-size: 10px; text-align: center;">Xem trên trình duyệt      |     </span><span style="font-size:10px;">Từ chối nhận email</span></em></p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</center>
</body>
</html>';
        return $html;
    }
}

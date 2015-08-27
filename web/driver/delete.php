<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	
	include "conn.php";
	$columns = "phone_number, message, created_at";
	mysql_query("insert into driver_msg_log (".$columns.") SELECT ".$columns." FROM driver_msg WHERE id IN  (".$_POST['id'].")");
	mysql_query("DELETE FROM driver_msg WHERE id IN  (".$_POST['id'].")");
	echo "OK";
	mysql_close();
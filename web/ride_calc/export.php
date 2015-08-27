<?php 
	set_time_limit(0);
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	include("Excel_XML.class.php");
	$con = mysql_connect('localhost', 'dichung', 'dichung123@');
	mysql_select_db('dichung_taxi');
 
	$sql = "select ride_village.id, concat(ride_village.name,',',ride_district.name,',',ride_city.name) as name, quangtrung_length, taxi7_price, taxi4_price from ride_village,ride_district,ride_city where ride_district.id = ride_village.district_id and ride_district.city_id = ride_city.id order by ride_city.id";
	$rs = mysql_query($sql);
	$xml = array();
	$xml[] = array('ID', 'NAME', 'LENGTH', 'TAXI7', 'TAXI4');
		
	$i = 1;
	while($row = mysql_fetch_assoc($rs)){
		$xml [] = array($i, $row['name'], $row['quangtrung_length'], $row['taxi7_price'], $row['taxi4_price']);
		$i ++;
	}
	$excel = new Excel_XML;
	$excel->setWorksheetTitle('main');
	$excel->addArray($xml);
	$excel->generateXML('user_export');
	
	header('Content-Description: File Transfer');
	header('Content-type: application/vnd.ms-excel');
	header("Content-Disposition: attachment;filename=ride_export.xls");
	header("Content-Transfer-Encoding: binary ");
	mysql_free_result($rs);
	mysql_close(); 
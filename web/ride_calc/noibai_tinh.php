<?php 
set_time_limit(0);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include("../../lib/myGoogleApi.class.php");
$con = mysql_connect('localhost', 'dichung', 'dichung123@');
mysql_select_db('dichung_taxi');
$sql = "select ride_village.id, concat(ride_village.name,',', ride_district.name,',', ride_city.name) as name from ride_village, ride_district, ride_city where ride_city.id = ride_district.city_id and ride_district.id = ride_village.district_id and ride_village.processed = 0 limit 20";
$rs = mysql_query($sql);
while($row = mysql_fetch_array($rs)){
	$id = $row['id'];
	$name = $row['name'];
	$len = myGoogleApi::calcRange(myGoogleApi::$fixTo, $name);
	$sql = "UPDATE ride_village SET processed = 1, noibai_length = ".$len." WHERE id = ".$id;
	if(!mysql_query($sql)){
		echo $sql;
		break;
	}
	
}
mysql_close();
?>
<meta http-equiv="refresh" content="0">
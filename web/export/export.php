<?php
set_time_limit(0);
header('Content-type: text/html;charset=utf8');
error_reporting(E_ALL ^ E_NOTICE);
require_once '../../lib/Excel_XML.class.php'; 
 
mysql_connect('localhost', 'dichung', 'dichung123@');
mysql_select_db('dichung_taxi');
$sql = "select ride_method.name, dimension.name, vehicle.name, concat(ride_village.name, ',', ride_district.name, ',', ride_city.name), ride_cost.chair, ride_cost.cost from ride_city, ride_district, ride_village, ride_cost, chunk_dimension, dimension, chunk_dimension_vehicle, partner_mapping, vehicle, ride_method where partner_mapping.ride_method_id = ride_method.id and chunk_dimension_vehicle.vehicle_id = vehicle.id and chunk_dimension.dimension_id = dimension.id and ride_city.id = ride_cost.ride_city_id and ride_district.id = ride_cost.ride_district_id and ride_village.id = ride_cost.ride_village_id and ride_cost.partner_mapping_id = partner_mapping.id and partner_mapping.chunk_dimension_vehicle_id = chunk_dimension_vehicle.id and chunk_dimension.id = chunk_dimension_vehicle.chunk_dimension_id and chunk_dimension.chunk_id = 1 and vehicle.id in (1, 2) and dimension.id = 1 order by ride_method.id, dimension.id, vehicle.id, ride_cost.chair";
$rs = mysql_query($sql);
$data = array();
while($row = mysql_fetch_assoc($rs)) {
	$data [] = $row;
}
 
$excel = new Excel_XML();
$excel->addArray($data);
$excel->generateXML('airport-data.xls');
mysql_close();


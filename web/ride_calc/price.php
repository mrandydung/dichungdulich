<?php 
	set_time_limit(0);
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	 
	$con = mysql_connect('localhost', 'dichung', 'dichung123@');
	mysql_select_db('dichung_taxi');

	$pv = getPartnerVehicle(2);
	$pvc = getPartnerVehicleCost($pv['id']);
	$sql = "select * from ride_village where quangtrung_length > 0 and taxi7_price = 0 limit 500";
	$rs = mysql_query($sql);

	while($row = mysql_fetch_array($rs)){
		$id = $row['id']; 
		$len = $row['quangtrung_length'];
		
		$price = round(getLeftCost($pv, $pvc, $len), -3);
		
		$sql = "UPDATE ride_village SET taxi7_price = ".$price." WHERE id = ".$id;
		if(!mysql_query($sql)){
			echo $sql;
		}
	}
	mysql_close();
	echo '<meta http-equiv="refresh" content="0">';
	function getPartnerVehicle($vehicleId){
		
		$sql = "select * from partner_vehicle where partner_id = 1 and vehicle_id = ".$vehicleId;
		$rs = mysql_query($sql);
		if($row = mysql_fetch_array($rs)){
			return $row;
		}
		return null;
	}
	
	function getPartnerVehicleCost($pvId){
		
		$sql = "select * from partner_vehicle_cost where partner_vehicle_id = ".$pvId;
		$rs = mysql_query($sql);
		$rows = array();
		while($row = mysql_fetch_array($rs)){
			$rows [] = $row;
		}
		return $rows;
	}
	
	function getLeftCost($pv, $pvcs, $leftLength){
	 
		$leftCost = 0;
		
		if($pv){
		 
			if($pv['gia_mo_cua']){
				
				$leftCost = $pv['gia_mo_cua'];
				//trong khoang gia mo cua
				
				if($pv['gia_mo_cua_met'] < $leftLength){
				   
					foreach($pvcs as $pvc){
						// from ---- to--leftLength
						 
						if($leftLength >= $pvc['to_met']){
							
							$leftCost += ($pvc['to_met']-$pvc['from_met'])*$pvc['cost']/$pvc['met_step'];
						}
						// from -leftLength--- to
						elseif($leftLength - $pvc['from_met'] < $pvc['met_step']){
							
							$leftCost += $pvc['cost'];
						}
						// from ----leftLength---- to
						else{
							$leftCost += ($leftLength-$pvc['from_met'])*$pvc['cost']/$pvc['met_step'];
							
						}
					}
				}
			}
		}
		return $leftCost;
	}
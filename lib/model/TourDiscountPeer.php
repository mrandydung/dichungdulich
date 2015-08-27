<?php

/**
 * Subclass for performing query and update operations on the 'tour_discount' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourDiscountPeer extends BaseTourDiscountPeer
{
	public static function update_tour_discount_day($tour_detail_id,$creat_trip_day_discount_start_date,$creat_trip_day_discount_end_date,$select_discount_tour_day){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_detail_id);
		$c->add(self::TOUR_DISCOUNT_TYPE_ID,1);
		$count = self::doCount($c);
		if($count == '0'){
			$tour_discount = new TourDiscount();
			$tour_discount->setTourDetailId($tour_detail_id);
			$tour_discount->setTourDiscountTypeId(1);
			$tour_discount->setDateStart($creat_trip_day_discount_start_date);
			$tour_discount->setDateEnd($creat_trip_day_discount_end_date);
			$tour_discount->setDiscount($select_discount_tour_day);
			$tour_discount->save();
		}else{
			$c->addSelectColumn(self::ID);
			$rs = self::doSelectRs($c);
			while($rs->next()){
				$c = new Criteria();
				$c->add(self::ID,$rs->get(1));
				$c->add(self::TOUR_DETAIL_ID,$tour_detail_id);
				$c->add(self::TOUR_DISCOUNT_TYPE_ID,1);
				$c->add(self::DATE_START,date('Y-m-d',strtotime($creat_trip_day_discount_start_date)));
				$c->add(self::DATE_END,date('Y-m-d',strtotime($creat_trip_day_discount_end_date)));
				$c->add(self::DISCOUNT,$select_discount_tour_day);
				self::doUpdate($c);
			}
		}
	}

	public static function update_tour_discount_number($tour_detail_id,$select_discount_tour_number,$creat_trip_number_discount_number){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_detail_id);
		$c->add(self::TOUR_DISCOUNT_TYPE_ID,2);
		$count = self::doCount($c);
		if($count == '0'){
			$tour_discount = new TourDiscount();
			$tour_discount->setTourDetailId($tour_detail_id);
			$tour_discount->setTourDiscountTypeId(2);
			$tour_discount->setDiscount($select_discount_tour_number);
			$tour_discount->setNumberDiscount($creat_trip_number_discount_number);
			$tour_discount->save();
		}else{
			$c->addSelectColumn(self::ID);
			$rs = self::doSelectRs($c);
			while($rs->next()){
				$c = new Criteria();
				$c->add(self::ID,$rs->get(1));
				$c->add(self::TOUR_DETAIL_ID,$tour_detail_id);
				$c->add(self::TOUR_DISCOUNT_TYPE_ID,2);
				$c->add(self::DISCOUNT,$select_discount_tour_number);
				$c->add(self::NUMBER_DISCOUNT,$creat_trip_number_discount_number);
				self::doUpdate($c);
			}
		}
	}

	public static function getCal_discount($tour_detail_id,$date_picker,$number_booking,$total_price,$price_new){
		$discount_arr = array();
		$cal_total_price = 0;
		$discount_arr_event = array();
		$ticket = array();
		$date_picker_w = date('w',strtotime($date_picker));
		if($date_picker){
			$c = new Criteria();
			$c->add(TourDiscountEventPeer::TOUR_DETAIL_ID,$tour_detail_id);
			$rs_event = TourDiscountEventPeer::doSelect($c);
			if($rs_event){
				foreach ($rs_event as $key => $value) {
					$tour_discount_event_type_id = $value->getTourDiscountEventTypeId();
					$tour_discount_event_value = $value->getValue();
					$date_start  = $value->getDateStart();
					$date_end = $value->getDateEnd();
					if($tour_discount_event_type_id == '1' || $tour_discount_event_type_id > '8'){
						if(strtotime($date_picker) >= strtotime($date_start) && strtotime($date_picker) <= strtotime($date_end)){
							$discount_arr_event [] =  $value->getDiscount();
						}
					}
					if($date_picker_w == $tour_discount_event_value && strtotime($date_picker) >= strtotime($date_start) && strtotime($date_picker) <= strtotime($date_end)){
						$discount_arr_event [] =  $value->getDiscount();
					}
				}
			}
		}
		ksort($discount_arr_event);
		if(count($discount_arr_event)){
			$price_discount_event = $total_price*abs($discount_arr_event[0])/100;
			$price_new = $price_new - $price_new*abs($discount_arr_event[0])/100;
			if($discount_arr_event[0] > 0){
				$cal_total_price = $total_price + $price_discount_event; 
			}
			if($discount_arr_event[0] < 0){
				$cal_total_price = $total_price - $price_discount_event; 
			}
		}else{
			$cal_total_price = $total_price;
		}
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_detail_id);
		$rs = self::doSelect($c);
		if($rs){
			foreach ($rs as $key => $value) {
				$type_discount = $value->getTourDiscountTypeId();
				if($type_discount == '2'){
					$number_discount = $value->getNumberDiscount();
					if($number_booking >= $number_discount){
						$discount_arr [] = $value->getDiscount();
					}
				}
			}
		}
		ksort($discount_arr);
		if(count($discount_arr)){
			$price_new = $price_new - $price_new*abs($discount_arr[0])/100;
			$price_discount = $cal_total_price*$discount_arr[0]/100;
			$cal_total_price = $cal_total_price - $price_discount; 
		}else{
			$cal_total_price = $cal_total_price;
		}
		return array('price_new'=>$price_new,'cal_total_price'=>$cal_total_price);
	}

	public static function getDiscountItem($tour_id,$date)
	{
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		$rs = self::doSelect($c);
		if($rs)
		{
			if(!$date){
				$date = date('Y-m-d');
			}
			$discount = array();
			foreach ($rs as $key => $value) {
				$tour_discount_type_id = $value->getTourDiscountTypeId();

				if($tour_discount_type_id == '1'){
					$date_start = $value->getDateStart();
					$date_end = $value->getDateEnd();
					if(strtotime($date_start) <= strtotime($date) && strtotime($date) <= strtotime($date_end)){
						$discount [] = $value->getDiscount(); 
					}
				}
				if($tour_discount_type_id == '2'){
					$discount [] = $value->getDiscount(); 
				}
			}
		}
		else
		{
			$discount = '0';
		}
		return $discount;
	}

	public static function get_all_discount_day($tour_id){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		$c->add(self::TOUR_DISCOUNT_TYPE_ID,1);
		return self::doSelect($c);
	}

	public static function get_all_discount_number($tour_id){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		$c->add(self::TOUR_DISCOUNT_TYPE_ID,2);
		return self::doSelect($c);
	}
}

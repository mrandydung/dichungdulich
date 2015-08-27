<?php

/**
 * Subclass for performing query and update operations on the 'tour_time_type' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourTimeTypePeer extends BaseTourTimeTypePeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}

	public static function creat_trip_step1_fix_start(){
		$html = '<div class="row padding_top">
		    <div class="col-md-3">
		        <input class="form-control time_" placeholder="Ngày bắt đầu" name="creat_trip_form_fix_start[start_date]"  id="creat_trip_form_fix_start_start_date"/>
		    </div>
		    <div class="col-md-3">
		        <input class="form-control time_" placeholder="Ngày kết thúc" name="creat_trip_form_fix_start[end_date]"  id="creat_trip_form_fix_start_end_date">
		    </div>
		    <div class="col-md-3">
		        <select class="form-control hour_" name="creat_trip_form_fix_start[start_hour]"  id="creat_trip_form_fix_start_start_hour">
		        '.TourTimeTypePeer::getHour().'</select
		    </div>  ';
		 
		return $html;
	}

	public static function creat_trip_step1_weekly_start(){
		$html = '	<div class="row padding_top">
		            <div class="col-md-12">
		                <p>Khởi hành vào:</p>
		            </div>
		            <div class="col-md-1">
		                <div data-toggle="buttons">
		                    <label class="btn btn_blue_outline">
		                        <input type="checkbox" autocomplete="off"> CN
		                    </label>
		                </div>
		            </div>
		            <div class="col-md-1">
		                <div data-toggle="buttons">
		                    <label class="btn btn_blue_outline">
		                        <input type="checkbox" autocomplete="off"> T2
		                    </label>
		                </div>
		            </div>
		            <div class="col-md-1">
		                <div data-toggle="buttons">
		                    <label class="btn btn_blue_outline">
		                        <input type="checkbox" autocomplete="off"> T3
		                    </label>
		                </div>
		            </div>
		            <div class="col-md-1">
		                <div data-toggle="buttons">
		                    <label class="btn btn_blue_outline">
		                        <input type="checkbox" autocomplete="off"> T4
		                    </label>
		                </div>
		            </div>
		            <div class="col-md-1">
		                <div data-toggle="buttons">
		                    <label class="btn btn_blue_outline">
		                        <input type="checkbox" autocomplete="off"> T5
		                    </label>
		                </div>
		            </div>
		            <div class="col-md-1">
		                <div data-toggle="buttons">
		                    <label class="btn btn_blue_outline">
		                        <input type="checkbox" autocomplete="off"> T6
		                    </label>
		                </div>
		            </div>
		            <div class="col-md-1">
		                <div data-toggle="buttons">
		                    <label class="btn btn_blue_outline">
		                        <input type="checkbox" autocomplete="off"> T7
		                    </label>
		                </div>
		            </div>
				</div>
				<div class="row padding_top">
					<div class="col-md-3">
						<select class="form-control hour_" placeholder="Giờ đi">'.TourTimeTypePeer::getHour().'</select>
		            </div>
		            <div class="col-md-3">
		                <select class="form-control">
		                    <option>Thời gian</option>
		                    <option>1 ngày</option>
		                    <option>2 ngày - 1 đêm</option>
		                    <option>3 ngày - 2 đêm</option>
		                    <option>4 ngày - 3 đêm</option>
		                    <option>5 ngày - 4 đêm</option>
		                    <option>6 ngày - 5 đêm</option>
		                    <option>7 ngày - 6 đêm</option>
		                </select>
		            </div>
				</div>';
		return $html;
	}

	public static function creat_trip_step1_daily_start(){
		$html = '<div class="row padding_top">
			<div class="col-md-3">
				<select class="form-control hour_" placeholder="Giờ đi" name="creat_trip_form_daily_start[hour]"  id="creat_trip_form_daily_start_hour">
				'.TourTimeTypePeer::getHour().'</select>
		    </div>
		    <div class="col-md-3">
		        <select class="form-control" name="creat_trip_form_daily_start[day_long]"  id="creat_trip_form_daily_start_day_long">
		            <option>Thời gian</option>
		            <option>1 ngày</option>
		            <option>2 ngày - 1 đêm</option>
		            <option>3 ngày - 2 đêm</option>
		            <option>4 ngày - 3 đêm</option>
		            <option>5 ngày - 4 đêm</option>
		            <option>6 ngày - 5 đêm</option>
		            <option>7 ngày - 6 đêm</option>
		        </select>
		    </div>
			</div>	';
		return $html;
	}

	
}

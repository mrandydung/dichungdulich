<?php

/**
 * Subclass for performing query and update operations on the 'tour_item_schedule_day' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourItemScheduleDayPeer extends BaseTourItemScheduleDayPeer
{
	public static function count_schedule_day($tour_id,$day){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		$c->add(self::DAY,$day);
		return self::doCount($c);
	}

	public static function get_schedule_day($tour_id,$day){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		$c->add(self::DAY,$day);
		$c->setLimit(1);
		return self::doSelectOne($c);
	}
	public static function get_all_schedule_day($tour_id){
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::DAY);
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		return self::doSelect($c);
	}

	public static function count_scheduled($tour_id){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		return self::doCount($c);
	}


	public static function return_html_next_prev_day($day_item_next,$title_schedule_day,$description_schedule_day,$vehicle,$vehicle_arr,$tour_id,$all_img_schedule_day){
		$html = '<div class="row">
		<div class="col-md-12">
		<h4 class="title">'.LangPeer::getText('Ngày').' '.$day_item_next.'</h4>
		</div>
		</div>
		<div class="row">
		<div class="col-md-9">
		<p class="hightlight">'.LangPeer::getText('Tiêu đề').'</p>
		<input class="form-control" id="title_day" value="'.$title_schedule_day.'" />
		</div>
		<div class="col-md-3">
		<p class="hightlight">'.LangPeer::getText('Phương tiện').' :</p>
		<select class="form-control" id="vehicle_day" multiple="multiple">';
		foreach ($vehicle as $key => $value) {
			$html.='<option value="'.$value->getId().'" ';
			if(in_array($value->getId(),$vehicle_arr)){
				$html.=' selected="selected"';
			}
			$html.= '>'.$value->getShowName().'</option>';
		}
		$html.='</select>
		</div>
		</div>
		<div class="row padding_top">
		<div class="col-md-4">
		<form action="/trip_scheduled_day/upload_img_day?tour_id='.$tour_id.'&day='.$day_item_next.'" method="post" enctype="multipart/form-data" id="form_upload_img_day">
		<div class="fileUpload btn btn-primary">
		<span>'.LangPeer::getText('Upload ảnh cho lịch trình ngày').'</span>
		<input type="file" class="upload" id="imageInputDay" name="imageInputDay"/>
		</div>
		<input type="submit"  id="submit-btn-day" value="upload img day" style="display:none" />
		<img src="/ajax_upload/images/ajax-loader.gif" id="loading-img-day" style="display:none;" alt="Please Wait"/>
		</form>
		</div>
		<div class="col-md-12" id="content_img_day">';
		foreach ($all_img_schedule_day as $key => $value) {
			$html.='<div class="col-md-2 padding_top anh" id="div_img_day_'.$value->getId().'">
			<img style="width:100px;height:100px" src="/'.$value->getImages().'"/>
			<div class="xoa_po">
			<a id="delete_image_day-'.$value->getId().'" class="delete_image_day"><span class="xoa"></span></a>
			</div>
			</div>';
		}

		$html.='</div>
		<div id="renderImgDay" style="display:none" ></div>
		<input type="hidden" id="day_item" data-id="'.$day_item_next.'"/>
		</div>
		<div class="row padding_top">
		<div class="col-md-12">
		<p class="hightlight">'.LangPeer::getText('Nội dung').'</p>
		<textarea class="form-control" rows="5" id="description_day_'.$day_item_next.'">'.$description_schedule_day.'</textarea>
		</div>
		</div>
		<div class="row box_2x">
		<div class="col-md-offset-8 col-md-4">
		<a class="btn btn_orange" id="submit_form_schedule_day">'.LangPeer::getText('Lưu lịch trình ngày').'</a>
		</div>
		</div>';
		return $html;
	}
}

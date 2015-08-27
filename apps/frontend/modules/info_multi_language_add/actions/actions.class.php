<?php

class info_multi_language_addActions extends sfActions{

	public function executeAdd_info_language($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_id = $request->getParameter('tour_id');
			$type_language_step_1 = $request->getParameter('type_language_step_1');
			$count_type_language_step_1 = InfoTourDetailByLanguagePeer::count_all_info($tour_id,$type_language_step_1);
			if(!$count_type_language_step_1){
				$info_tour_detail_by_language = new InfoTourDetailByLanguage();
				$info_tour_detail_by_language->setTourDetailId($tour_id);
				$info_tour_detail_by_language->setTypeLanguageId($type_language_step_1);
				$info_tour_detail_by_language->save();
			}
		}
	}

}

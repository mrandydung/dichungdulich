<?php

/**
 * Subclass for representing a row from the 'question_group_category' table.
 *
 * 
 *
 * @package lib.model
 */ 
class QuestionGroupCategory extends BaseQuestionGroupCategory
{
	public function __toString(){
		return $this->getName();
	}

	public function getShowName(){
		return !myUtil::isEn() ? $this->getName(): $this->getNameEn();
	}

 	public function toSlug(){
        return myUtil::strToSlug($this->getName());
    }

	public function url_question_group_category(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@group_detail?name='.$this->toSlug().'&question_group_category_id='.$this->getId()) : url_for('@group_detail_en?name='.$this->toSlug().'&question_group_category_id='.$this->getId());
	}

	public function url_find_question_group_category(){
	 	sfLoader::loadHelpers('Url');
	 	return !myUtil::isEn() ? url_for('@find_question_group_category?name='.$this->toSlug().'&question_group_category_id='.$this->getId()) : url_for('@find_question_group_category_en?name='.$this->toSlug().'&question_group_category_id='.$this->getId());
 	}

	public function getImagesThumbNew(){
		return '<img src="'.$this->getImagesThumb().'" style="width:70px;height:70px">';
	}
}

<?php

/**
 * Subclass for representing a row from the 'question' table.
 *
 * 
 *
 * @package lib.model
 */
class Question extends BaseQuestion {

    public function toSlug() {
        return myUtil::strToSlug($this->getTitle());
    }

    public function getDetailUrl() {
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@question_detail?name=' . $this->toSlug() . '&question_id=' . $this->getId()) : url_for('@question_detail_en?name=' . $this->toSlug() . '&question_id=' . $this->getId());
    }

}

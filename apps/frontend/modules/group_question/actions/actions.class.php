<?php

class group_questionActions extends sfActions {

    public function executeIndex($request) {
        
    }

    public function executeFind_question($request) {
        $keyword = '';
        if ($request->isMethod('POST')) {
            $this->keyword = trim($request->getParameter('keyword'));
            $this->filter_question = $request->getParameter('filter_question');
            $this->question_group = QuestionPeer::find_question($this->keyword, $this->filter_question);
            if (!$this->question_group) {
                $this->notify = 'Không thấy nội dung bạn cần tìm.<br> Để được trả lời về nội dung bạn thắc mắc, vui lòng <a href="/dat-cau-hoi-du-lich.html" class="btn btn_blue" style="width:100px">Đặt câu hỏi</a>';
                $u = $this->getUser();
                $u->setAttribute('keyword', trim($this->keyword));
            }
        }
    }

    public function executeFind_question_group_category($request) {
        $question_group_category_id = $request->getParameter('question_group_category_id');
        $this->question_group_category = QuestionGroupCategoryPeer::retrieveByPK($question_group_category_id);
        $this->keyword = '';
        if ($request->isMethod('POST')) {
            $this->keyword = trim($request->getParameter('keyword'));
            $this->filter_question = $request->getParameter('filter_question');
            $this->question_group = QuestionPeer::find_question_group_category($this->keyword, $question_group_category_id, $this->filter_question);
            if (!$this->question_group) {
                $this->notify = 'Không thấy nội dung bạn cần tìm.<br> Để được trả lời về nội dung bạn thắc mắc, vui lòng <a href="/dat-cau-hoi-du-lich.html" class="btn btn_blue" style="width:100px">Đặt câu hỏi</a>';
                $u = $this->getUser();
                $u->setAttribute('keyword', trim($this->keyword));
            }
        }
    }

    public function executeCreate_question($request) {
        $u = $this->getUser();
        $this->user_id = $u->getId();
        $rsAjax = $request->isXmlHttpRequest();
        $this->keyword = $u->getAttribute('keyword');
        $u->getAttributeHolder()->remove('keyword');
        if ($rsAjax) {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date_now = date('Y-m-d H:i:s');
            $title = trim($request->getParameter('title'));
            $detail = trim($request->getParameter('detail'));
            $arr_question_group_category = $request->getParameter('arr_question_group_category');
            if (!$this->user_id) {
                return $this->renderText(json_encode(array('code' => 'error', 'msg' => 'Bạn cần đăng nhập hệ thống trước khi tạo hỏi đáp du lịch')));
            } else {
                $question = new Question();
                $question->setUserId($this->user_id);
                $question->setTitle($title);
                $question->setDetail(strip_tags($detail), '<p>');
                $question->setQuestionGroupCategory(json_encode($arr_question_group_category));
                $question->setDate($date_now);
                $question->setTitleSeo($title);
                $question->setDescriptionSeo(strip_tags($detail));
                $question->save();
                sfLoader::loadHelpers('Url');
                $url = url_for('@homepage');
                return $this->renderText(json_encode(array('code' => 'success', 'url' => $url)));
            }
        }
    }

    public function executeGroup_detail($request) {
        $question_group_category_id = $request->getParameter('question_group_category_id');
        $this->question_group_category = QuestionGroupCategoryPeer::retrieveByPK($question_group_category_id);
        if (!$this->question_group_category) {
            $this->redirect('@homepage');
        }
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->question_group_category->getTitleSeo());
        $seo->setDescription($this->question_group_category->getDescriptionSeo());
        $seo->setThumb('http://gheptour.vn' . $this->question_group_category->getImgSeo());
        $this->question_group = QuestionPeer::get_question_group($question_group_category_id);
    }

    public function executeQuestion_detail($request) {
        $question_id = $request->getParameter('question_id');
        $this->question = QuestionPeer::get_detail_question($question_id);
        $question_tmp = QuestionAnswerPeer::get_answer_question($question_id);
        $this->question_answer = $question_tmp['answer_question'];
        $this->count_question_answer = $question_tmp['count'];
        $u = $this->getUser();
        $this->user_id = $u->getId();
        $seo = $u->getSeo();
        $seo->setTitle($this->question['title']);
        $seo->setDescription(strip_tags($this->question['detail']));
        $count_view = $u->getAttribute('count_view_question_' . $question_id);
        if (!$count_view) {
            $question = QuestionPeer::retrieveByPK($question_id);
            $question->setView($question->getView() + 1);
            $question->save();
            $u->setAttribute('count_view_question_' . $question_id, '1');
        }
    }

    public function executeSend_answer_question($request) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $question_id = $request->getParameter('question_id');
            $content_answer = trim($request->getParameter('content_answer'));
            $u = $this->getUser();
            $user_id = $u->getId();
            if (!$user_id) {
                return $this->renderText(json_encode(array('code' => 'error_login')));
            } elseif (!$content_answer) {
                return $this->renderText(json_encode(array('code' => 'error', 'msg' => 'Bạn chưa nhập nội dung trả lời')));
            } else {
                $question_answer = new QuestionAnswer();
                $question_answer->setUserId($user_id);
                $question_answer->setQuestionId($question_id);
                $question_answer->setContent(strip_tags($content_answer, '<p>'));
                $question_answer->setDate(date('Y-m-d H:i:s'));
                $question_answer->save();
                $user_question = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
                $user_question_answer = $user_question->getAnswerQuestion();
                $user_question_answer = $user_question_answer + 1;
                $user_question->setAnswerQuestion($user_question_answer);
                $user_question->save(Propel::getConnection('dichung_new'));
                return $this->renderText(json_encode(array('code' => 'success')));
            }
        }
    }

    public function executeLike_question_main($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $question_id = $request->getParameter('question_id');
            $u = $this->getUser();
            $user_id = $u->getId();
            if (!$user_id) {
                return $this->renderText(json_encode(array('code' => 'error_login')));
            } else {
                $question = QuestionPeer::retrieveByPK($question_id);
                $id_like = $question->getIdLike();
                $id_like_arr = explode(",", $id_like);
                if (in_array($user_id, $id_like_arr)) {
                    return $this->renderText(json_encode(array('code' => 'warning', 'msg' => 'Bạn đã like chủ đề này rồi')));
                } else {
                    $id_like = $id_like . ',' . $user_id;
                    $like = (int) $question->getLikeQuestion() + 1;
                    $question->setLikeQuestion($like);
                    $question->setIdLike($id_like);
                    $question->save();
                    $user_id_question = $question->getUserId();
                    $user_question = DichungUserPeer::retrieveByPK($user_id_question, Propel::getConnection('dichung_new'));
                    $user_question_like = $user_question->getLikeQuestion();
                    $user_question_like = $user_question_like + 1;
                    $user_question->setLikeQuestion($user_question_like);
                    $user_question->save(Propel::getConnection('dichung_new'));
                    return $this->renderText(json_encode(array('code' => 'success', 'like' => $like, 'question_id' => $question_id)));
                }
            }
        }
    }

    public function executeLike_question_answered($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $question_answer_id = $request->getParameter('question_answer_id');
            $u = $this->getUser();
            $user_id = $u->getId();
            if (!$user_id) {
                return $this->renderText(json_encode(array('code' => 'error_login')));
            } else {
                $question_answer = QuestionAnswerPeer::retrieveByPK($question_answer_id);
                $id_like = $question_answer->getIdLike();
                $id_like_arr = explode(",", $id_like);
                if (in_array($user_id, $id_like_arr)) {
                    return $this->renderText(json_encode(array('code' => 'warning', 'msg' => 'Bạn đã like chủ đề này rồi')));
                } else {
                    $id_like = $id_like . ',' . $user_id;
                    $like = (int) $question_answer->getLikeQuestion() + 1;
                    $question_answer->setLikeQuestion($like);
                    $question_answer->setIdLike($id_like);
                    $question_answer->save();
                    $user_id_question = $question_answer->getUserId();
                    $user_question = DichungUserPeer::retrieveByPK($user_id_question, Propel::getConnection('dichung_new'));
                    $user_question_like = $user_question->getLikeQuestion();
                    $user_question_like = $user_question_like + 1;
                    $user_question->setLikeQuestion($user_question_like);
                    $user_question->save(Propel::getConnection('dichung_new'));
                    return $this->renderText(json_encode(array('code' => 'success', 'like' => $like, 'question_answer_id' => $question_answer_id)));
                }
            }
        }
    }

    public function executeTitle_change($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $title = $request->getParameter('title');
            $html = QuestionPeer::text_search($title);
            return $this->renderText(json_encode(array('code' => 'success', 'html' => $html, 'title' => $title)));
        }
    }

    public function executeSearch_keyword($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $search_keyword = trim($request->getParameter('search_keyword'));
            $terms = preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($search_keyword));
            $c = new Criteria();
            $c->add(QuestionPeer::TITLE, "%" . $terms . "%", Criteria::LIKE);
            $rs = QuestionPeer::doSelect($c);
            $arr = array();
            if ($rs) {
                foreach ($rs as $key => $value) {
                    $arr [] = $value->getTitle();
                }
            } else {
                $c = new Criteria();
                $c->add(QuestionPeer::DETAIL, "%" . $terms . "%", Criteria::LIKE);
                $rs_detail = QuestionPeer::doSelect($c);
                foreach ($rs_detail as $key => $value) {
                    $arr [] = $value->getTitle();
                }
            }
            return $this->renderText(json_encode($arr));
        }
    }

}

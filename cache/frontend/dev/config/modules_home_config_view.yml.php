<?php
// auto-generated by sfViewConfigHandler
// date: 2015/08/27 05:02:49
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (!is_null($layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout')))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (is_null($this->getDecoratorTemplate()) && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == '' ? false : ''.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Đi chung xe - Hệ thống mua bán chỗ trực tuyến lớn nhất Việt Nam', false, false);
  $response->addMeta('robots', 'index,follow', false, false);
  $response->addMeta('description', 'Dichung.vn là thị trường mua bán chỗ trống trực tuyến, nơi bạn có thể tìm người đi chung về quê, ra sân bay, đi du lịch, đi học, đi làm, đi chơi.', false, false);
  $response->addMeta('keywords', 'Đi chung xe về quê, đi học, đi làm, tiết kiệm, bảo vệ môi trường, tìm người đi chung xe, tim nguoi di chung xe, di chung xe ve que, di hoc, di lam, tiem kiem, tìm người đi du lịch chung, tim nguoi di du lich, du lich gia re, du lịch giá rẻ, cách tiết kiệm xăng xe, cach tiet kiem xang xe, di chung xe ra san bay, đi chung xe ra sân bay, tìm bạn cùng đường, tim ban cung duong', false, false);





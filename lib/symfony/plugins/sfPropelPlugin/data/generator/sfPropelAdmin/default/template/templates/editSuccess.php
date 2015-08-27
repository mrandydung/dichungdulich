[?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?]

[?php use_stylesheet('<?php echo $this->getParameterValue('css', sfConfig::get('sf_admin_web_dir').'/css/main') ?>') ?]


<div id="sf_admin_container"  class=" panel panel-default">

<div class="panel-heading">
[?php if ($<?php echo $this->getSingularName() ?>->isNew()): ?]
<?php echo $this->getI18NString('edit.title', 'Tạo mới '.$this->getModuleName()) ?> 
[?php else: ?]
<?php echo $this->getI18NString('edit.title', 'Chỉnh sửa '.$this->getModuleName()) ?>
[?php endif ?]
</div>
<div id="sf_admin_header">
[?php include_partial('<?php echo $this->getModuleName() ?>/edit_header', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>)) ?]
</div>

<div id="sf_admin_content">
[?php include_partial('<?php echo $this->getModuleName() ?>/edit_messages', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'labels' => $labels)) ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/edit_form', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'labels' => $labels)) ?]
</div>

<div id="sf_admin_footer">
[?php include_partial('<?php echo $this->getModuleName() ?>/edit_footer', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>)) ?]
</div>

</div>

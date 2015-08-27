[?php use_helper('I18N', 'Date') ?]

[?php use_stylesheet('<?php echo $this->getParameterValue('css', sfConfig::get('sf_admin_web_dir').'/css/main') ?>') ?]

<div id="sf_admin_container"  class=" panel panel-default">

<div class="panel-heading"><?php echo $this->getI18NString('list.title', $this->getModuleName().' list') ?></div>

<div id="sf_admin_header">
[?php include_partial('<?php echo $this->getModuleName() ?>/list_header', array('pager' => $pager)) ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/list_messages', array('pager' => $pager)) ?]
</div>


<?php if ($this->getParameterValue('list.filters')): ?>
<div id="sf_admin_bar">
[?php include_partial('filters', array('filters' => $filters)) ?]
</div>
<?php endif; ?>


<div id="sf_admin_content"  class="panel-body">
<div class="table-responsive">
[?php if (!$pager->getNbResults()): ?]
[?php echo __('no result') ?]
[?php else: ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager)) ?]
[?php endif; ?]
[?php include_partial('list_batch_actions') ?]
[?php include_partial('list_actions') ?]
</div>
</div>
<div id="sf_admin_footer">
[?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)) ?]
</div>

</div>

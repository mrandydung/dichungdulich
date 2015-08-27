<select name="page_footer[row_page_footer_id]" id="page_footer_row_page_footer_id" style="display: none;">
	<?php foreach($page_footer->get_row_page_footer_by_partner() as $value){ ?>
	<option value="<?php echo $value->getId()?>" <?php if($page_footer->getRowPageFooterId() == $value->getId()){?>selected<?php }?>><?php echo $value->getName()?></option>
	<?php }?>
</select>
/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		 { name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		 
		{ name: 'links' },
		{ name: 'insert' }, 
		{ name: 'tools' },
		
		{ name: 'others' }, 
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' } 
	];
        config.extraPlugins = 'justify,floatpanel,panelbutton,colorbutton';
	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
  
        config.filebrowserBrowseUrl = '/ckeditor/plugins/ckfinder/ckfinder.html';
        config.filebrowserImageBrowseUrl = '/ckeditor/plugins/ckfinder/ckfinder.html?type=Images&requestFrom=hungn';
        //config.filebrowserFlashBrowseUrl = '/ckeditor/plugins/ckfinder/ckfinder.html?type=Flash';
        //config.filebrowserUploadUrl = '/ckeditor/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
        config.filebrowserImageUploadUrl = '/ckeditor/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
        //config.filebrowserFlashUploadUrl = '/ckeditor/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
        
        config.width = "auto";
        config.height = "auto";
        config.allowedContent=true;
};
 
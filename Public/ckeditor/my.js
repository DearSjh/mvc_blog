/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.language = 'zh-cn'; //配置语言 
	//config.skin = 'office2013';
	config.skin = 'moonocolor';
	//config.skin = 'Moono_blue';
	//config.uiColor = '#AADC6E'; //界面颜色
	config.width = 800; //宽度
	config.height = 350; //高度

	config.toolbar = 'MyToolbar';
	config.toolbar_MyToolbar =
		[
			{ name: 'document', items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
			{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
			{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },


			{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
			'/',
			{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
				'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
			{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
			{ name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','CodeSnippet' ] },
			'/',
			{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
			{ name: 'colors', items : [ 'TextColor','BGColor' ] },
			{ name: 'tools', items : [ 'Maximize', 'ShowBlocks'] }
		];

	//如果添加配置，则从这里开始
	//config.xxx = xxxx;
	config.extraPlugins = 'codesnippet';//代码高亮插件名
	config.codeSnippet_theme = 'monokai_sublime';//代码高亮插件皮肤
	//配置上传的
	config.filebrowserBrowseUrl = './Public/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = './Public/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = './Public/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = './Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = './Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = './Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};









/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	config.toolbar = [
		{ name: 'document', items: [ 'Source'] },
		{ name: 'clipboard', items: [ 'Cut', 'Copy', '-', 'Undo', 'Redo' ] },
		{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat' ] },
		{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
		{ name: 'links', items: [ 'Link', 'Unlink' ] },
		{ name: 'insert', items: [ 'SpecialChar'] },
		{ name: 'styles', items: ['Format', 'Font', 'FontSize' ] },
		{ name: 'colors', items: [ 'TextColor'] },
		{ name: 'tools', items: [ 'ShowBlocks' ] },
	];
	config.extraPlugins = 'spacingsliders';
	config.removePlugins = 'exportpdf';
};

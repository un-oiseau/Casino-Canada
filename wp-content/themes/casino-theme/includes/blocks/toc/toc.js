( function( blocks, i18n, element ) {
	var el = element.createElement;
	var __ = i18n.__;

	blocks.registerBlockType( 'gutenberg-blocks/toc', {
		title: 'Table of Content',
		edit: function( props ) {
			return el(
				'div',
				{ className: props.className },
				'Table of Content'
			);
		},
		save: function( props ) {
			return el(
				'div',
				{ className: props.className }
			);
		},
	} );
} )( window.wp.blocks, window.wp.i18n, window.wp.element );

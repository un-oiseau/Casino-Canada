(function (blocks, element, blockEditor) {
	var el = element.createElement;
	var InnerBlocks = blockEditor.InnerBlocks;

	blocks.registerBlockType('blocks/sectionblock', {
		title: 'Section',
		attributes: {
			content: {
				type: 'array',
				source: 'children',
				selector: 'p',
			},
		},
		edit: function (props) {
			return el(
				'section',
				{ className: props.className },
				el(InnerBlocks)
			);
		},
		save: function (props) {
			return el(
				'section',
				{ className: props.className },
				el(InnerBlocks.Content)
			);
		},
	});
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);
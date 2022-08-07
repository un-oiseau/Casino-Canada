<?php
	function gutenberg_content() {
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}

		wp_register_script(
			'gutenberg-block-toc',
			get_template_directory_uri() . '/includes/blocks/toc/toc.js',
			array( 'wp-blocks', 'wp-i18n', 'wp-element' )
		);

		wp_register_style(
			'gutenberg-style-toc',
			get_template_directory_uri() . '/includes/blocks/toc/editor.css',
			array( 'wp-edit-blocks' )
		);

		register_block_type( 'gutenberg-blocks/toc', array(
			'editor_script' => 'gutenberg-block-toc',
			'editor_style' => 'gutenberg-style-toc',
		) );
	}
	add_action( 'init', 'gutenberg_content' );
?>

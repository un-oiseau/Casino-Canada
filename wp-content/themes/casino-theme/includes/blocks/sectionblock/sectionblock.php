<?php
	function gutenberg_sectionblock() {
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}

		wp_register_script(
			'gutenberg-sectionblock',
			get_template_directory_uri() . '/includes/blocks/sectionblock/sectionblock.js',
			array( 'wp-blocks', 'wp-element', 'wp-block-editor' )
		);

		wp_register_style(
			'gutenberg-sectionblock-editor',
			get_template_directory_uri() . '/includes/blocks/sectionblock/editor.css',
			array( 'wp-edit-blocks' )
		);

		register_block_type( 'blocks/sectionblock', array(
			'editor_script' => 'gutenberg-sectionblock',
			'editor_style' => 'gutenberg-sectionblock-editor',
		) );
	}
	add_action( 'init', 'gutenberg_sectionblock' );
?>
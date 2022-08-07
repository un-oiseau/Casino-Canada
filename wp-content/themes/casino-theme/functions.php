<?php

function load_stylesheets()
{
    wp_register_style('styles', get_template_directory_uri().'/style.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    wp_register_style('main', get_template_directory_uri().'/css/main.css', array(), 1, 'all');
    wp_enqueue_style('main');

    wp_register_style('responsive', get_template_directory_uri().'/css/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');
}

function load_js()
{
    wp_register_script('jquery', get_template_directory_uri().'/js/jquery-3.5.1.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('custom', get_template_directory_uri().'/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');

    // wp_register_script('toc', get_template_directory_uri() . '/js/toc.js', array('jquery'), 1, 1);
    // wp_enqueue_script('toc');
}


add_action('wp_enqueue_scripts','load_stylesheets');
add_action('wp_enqueue_scripts','load_js');

register_nav_menus(
    array(
        'primary' => esc_html__( 'Primary menu', 'top_casinos' ),
        'footer'  => __( 'Secondary menu', 'top_casinos' ),
        'footer_bottom'  => __( 'Privacy menu', 'top_casinos' ),
    )
);

/**
 * Register our sidebars and widgetized areas.
 *
 */
function footer_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Logos',
		'id'            => 'footer_logos',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

  register_sidebar( array(
		'name'          => 'Footer Logo',
		'id'            => 'footer_logo',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

    register_sidebar( array(
		'name'          => 'Footer Text',
		'id'            => 'footer_text',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'footer_widgets_init' );

add_theme_support( 'title-tag' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support(
    'html5',
    array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
    )
);


$logo_width  = 300;
$logo_height = 100;

add_theme_support(
    'custom-logo',
    array(
        'height'               => $logo_height,
        'width'                => $logo_width,
        'flex-width'           => true,
        'flex-height'          => true,
        'unlink-homepage-logo' => true,
    )
);

add_theme_support(
    'footer-logo',
    array(
        'height'               => $logo_height,
        'width'                => $logo_width,
        'flex-width'           => true,
        'flex-height'          => true,
        'unlink-homepage-logo' => true,
    )
);

function ocs_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'ocs_post_thumbnails' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/acf-blocks.php';
// require get_template_directory() . '/includes/blocks/toc/toc.php';
require get_template_directory() . '/includes/blocks/sectionblock/sectionblock.php';

function gb_gutenberg_admin_styles() {
  echo '
    <style>
        /* Main column width */
        .wp-block {
            max-width: 1200px;
        }
    </style>
  ';
}
add_action('admin_head', 'gb_gutenberg_admin_styles');

show_admin_bar(false);

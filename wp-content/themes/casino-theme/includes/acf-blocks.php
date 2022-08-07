<?php

add_action('acf/init', 'ocs_acf_init_block_types');
function ocs_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'fairness',
            'title'             => __('Fairness at online casinos'),
            'render_template'   => 'includes/acf-blocks/fairness.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Fairness at online casinos' ),
        ));

        acf_register_block_type(array(
            'name'              => 'recommended',
            'title'             => __('Recommended Casino'),
            'render_template'   => 'includes/acf-blocks/recommended.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Recommended Casino' ),
        ));

        acf_register_block_type(array(
            'name'              => 'check-list',
            'title'             => __('Check List'),
            'render_template'   => 'includes/acf-blocks/check-list.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Check List' ),
        ));

        acf_register_block_type(array(
            'name'              => 'top-tips',
            'title'             => __('Top Tips'),
            'render_template'   => 'includes/acf-blocks/top-tips.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Top Tips' ),
        ));

        acf_register_block_type(array(
            'name'              => 'expert-horizontal',
            'title'             => __('Expert Horizontal'),
            'render_template'   => 'includes/acf-blocks/expert-horizontal.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Expert Horizontal' ),
        ));

        acf_register_block_type(array(
            'name'              => 'expert-vertical',
            'title'             => __('Expert Vertical'),
            'render_template'   => 'includes/acf-blocks/expert-vertical.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Expert Vertical' ),
        ));

        acf_register_block_type(array(
            'name'              => 'best-casinos',
            'title'             => __('Best Casinos'),
            'render_template'   => 'includes/acf-blocks/best-casinos.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Best Casinos' ),
        ));

        acf_register_block_type(array(
            'name'              => 'top-casinos',
            'title'             => __('Top 5 Casinos'),
            'render_template'   => 'includes/acf-blocks/top-casinos.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Top 5 Casinos' ),
        ));

        acf_register_block_type(array(
            'name'              => 'best-casino',
            'title'             => __('Best Casino Bonus'),
            'render_template'   => 'includes/acf-blocks/best-casino.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Best Casino Bonus' ),
        ));

        acf_register_block_type(array(
            'name'              => 'peaky-blinders',
            'title'             => __('Peaky Blinders'),
            'render_template'   => 'includes/acf-blocks/peaky-blinders.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Peaky Blinders' ),
        ));

        acf_register_block_type(array(
            'name'              => 'steps',
            'title'             => __('Steps'),
            'render_template'   => 'includes/acf-blocks/steps.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Steps' ),
        ));

        acf_register_block_type(array(
            'name'              => 'fastest-pays-casino',
            'title'             => __('Fastest Pays Casino'),
            'render_template'   => 'includes/acf-blocks/fastest-pays-casino.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Fastest pays casino' ),
        ));

        acf_register_block_type(array(
            'name'              => 'articles',
            'title'             => __('Articles'),
            'render_template'   => 'includes/acf-blocks/articles.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Articles' ),
        ));

        acf_register_block_type(array(
            'name'              => 'bonus-boxes',
            'title'             => __('Bonus Boxes'),
            'render_template'   => 'includes/acf-blocks/bonus-boxes.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Bonus Boxes' ),
        ));

        acf_register_block_type(array(
            'name'              => 'faq',
            'title'             => __('FAQ'),
            'render_template'   => 'includes/acf-blocks/faq.php',
            'category'          => 'formatting',
            'keywords'          => array( 'FAQ' ),
        ));

        acf_register_block_type(array(
            'name'              => 'content-links',
            'title'             => __('Content Links'),
            'render_template'   => 'includes/acf-blocks/content-links.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Content Links' ),
        ));

        acf_register_block_type(array(
            'name'              => 'slot-review',
            'title'             => __('Slot Review'),
            'render_template'   => 'includes/acf-blocks/slot-review.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Slot Review' ),
        ));

        acf_register_block_type(array(
            'name'              => 'brand-review',
            'title'             => __('Brand Review'),
            'render_template'   => 'includes/acf-blocks/brand-review.php',
            'category'          => 'formatting',
            'keywords'          => array( 'Brand Review' ),
        ));
    }
}

?>

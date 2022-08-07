<?php
get_header(); ?>

    <div class="tce-container">

        <div class="page-content">

            <?php if (!is_front_page()): ?>
				<h1 class="mt-0"><?php single_post_title(); ?></h1>
			<?php endif; ?>

            <?php the_content(); ?>
        </div>

    </div>

<?php get_footer(); ?>

<?php

get_header();

if ( have_posts() ) {
	?>
	<div class="tce-container">
		<section class="page-header alignwide">
			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: search term. */
					esc_html__( 'Results for "%s"', 'locale' ),
					'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
				);
				?>
			</h1>
		</section><!-- .page-header -->

		<div class="search-result-count default-max-width">
			<p>
				<?php
				printf(
					esc_html(
						/* translators: %d: the number of search results. */
						_n(
							'We found %d result for your search.',
							'We found %d results for your search.',
							(int) $wp_query->found_posts,
							'locale'
						)
					),
					(int) $wp_query->found_posts
				);
				?>
			</p>
		</div><!-- .search-result-count -->

		<?php while ( have_posts() ) { the_post(); ?>

			<div class="cev-box">
				<h3><a href="<?php echo get_permalink(); ?>">
					<?php the_title();  ?>
				</a></h3>
				<?php  the_post_thumbnail('medium') ?>
				<?php echo substr(get_the_excerpt(), 0,200); ?>
				<div class="h-readmore"> <a href="<?php the_permalink(); ?>">Read More</a></div>
			</div>

		<?php } ?>

		<?php echo paginate_links(); ?>
	</div>

<?php
	// If no content, include the "No posts found" template.
} else { ?>

	<div class="tce-container">
		<section class="no-results not-found">
			<section class="page-header alignwide">
				<?php if ( is_search() ) : ?>

					<h1 class="page-title">
						<?php
						printf(
							/* translators: %s: search term. */
							esc_html__( 'Results for "%s"', 'locale' ),
							'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
						);
						?>
					</h1>

				<?php else : ?>

					<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'locale' ); ?></h1>

				<?php endif; ?>
			</section><!-- .page-header -->

			<div class="page-content default-max-width">

				<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<?php
					printf(
						'<p>' . wp_kses(
							/* translators: 1: link to WP admin new post page. */
							__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'locale' ),
							array(
								'a' => array(
									'href' => array(),
								),
							)
						) . '</p>',
						esc_url( admin_url( 'post-new.php' ) )
					);
					?>

				<?php elseif ( is_search() ) : ?>

					<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'locale' ); ?></p>
					<?php get_search_form(); ?>

				<?php else : ?>

					<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'locale' ); ?></p>
					<?php get_search_form(); ?>

				<?php endif; ?>
			</div><!-- .page-content -->
		</section><!-- .no-results -->
	</div>

<?php }

get_footer();

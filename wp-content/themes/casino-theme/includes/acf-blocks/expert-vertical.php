<?php
$classname = "expert-box exp-vertical";
if (!empty($block['className'])) {
	$classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">
	<div class="expert-card-top">
		<?php $photo = get_field('photo'); ?>
		<?php if ($photo) :  ?>
			<img class="expert-img" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" title="<?php echo $photo['title']; ?>">
		<?php endif; ?>

		<?php $full_name = get_field('personal_data'); ?>
		<div class='expert-info'>
			<h6 class='expert-name mt-0 mb-0'><?php echo $full_name['full_name']; ?></h6>
			<p class='text-middle expert-position'><?php echo $full_name['position']; ?></p>
		</div>
	</div>
	<hr>
	<div class="expert-card-bottom">
		<p><?php the_field('text'); ?></p>

		<div class="expert-card-socials text-center">
			<?php foreach (get_field('social_links') as $link): ?>
				<a href="<?php echo $link['link_group']['url']; ?>" target="_blank">
					<?php $icon = $link['link_group']['icon']; ?>
					<?php if ($icon) :  ?>
						<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>">
					<?php endif; ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</div>

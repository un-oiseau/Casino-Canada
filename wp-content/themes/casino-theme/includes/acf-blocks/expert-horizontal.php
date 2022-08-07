<?php
$classname = "expert-box exp-horizontal flex-box";
if (!empty($block['className'])) {
	$classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">
	<div class="flex-box">
		<div class="expert-img">
			<?php $logo = get_field('photo'); ?>
			<?php if ($logo) :  ?>
				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
			<?php endif; ?>
		</div>
		<div class="expert-info">
			<p class="h6 mt-0 mb-0"><?php the_field('full_name'); ?></p>
			<p class="text-middle">Experte</p>
		</div>
	</div>
	<div class="flex-box">
		<?php if (the_field('text')): ?>
			<p><?php the_field('text'); ?></p>
		<?php endif; ?>
	</div>
</div>

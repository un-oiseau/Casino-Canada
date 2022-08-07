<?php
$classname = "bottom-bordered-box tips-box";
if (!empty($block['className'])) {
	$classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
	<p class="h6 mt-0"><?php echo the_field('title') ?></p>
	<p class="text-medium"><?php echo the_field('text') ?></p>
</div>

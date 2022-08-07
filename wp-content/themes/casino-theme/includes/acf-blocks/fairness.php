<?php
$classname = "fairness";
if (!empty($block['className'])) {
	$classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
	<p class="h6 mb-0 mt-0"><?php echo the_field('text') ?></p>
</div>

<ol class="steps light-bg-list">
	<?php $data = get_field('steps'); ?>
	<?php foreach ($data as $i => $step) { ?>
		<li>
			<p class="h6 mt-0"><?php echo $step['step']['title']; ?></p>
			<p class="text-middle"><?php echo $step['step']['text']; ?></p>
		</li>
	<?php } ?>
</ol>

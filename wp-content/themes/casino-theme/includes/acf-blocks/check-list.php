<div class="tce-row">
	<div class="col-6">
		<div class="green-box">
			<?php $data = get_field('green_list_group'); ?>

			<?php if ($data['title']): ?>
				<h5 class="mt-0"><?php echo $data['title']; ?></h5>
			<?php endif; ?>

			<ul class="checked_list">
				<?php foreach ($data['green_list'] as $li) { ?>

					<li><?php echo $li['item']; ?></li>

				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="col-6">
		<div class="red-box">
			<?php $data2 = get_field('red_list_group'); ?>

			<?php if ($data2['title']): ?>
				<h5 class="mt-0"><?php echo $data2['title']; ?></h5>
			<?php endif; ?>

			<ul class="unchecked_list">
				<?php foreach ($data2['red_list'] as $li2) { ?>

					<li><?php echo $li2['item']; ?></li>

				<?php } ?>
			</ul>
		</div>
	</div>
</div>

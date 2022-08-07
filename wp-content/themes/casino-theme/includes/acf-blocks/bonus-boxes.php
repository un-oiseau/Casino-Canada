<?php $items = get_field('bonus_boxes'); ?>

<?php if ($items): ?>
	<div class="tce-row">

		<?php foreach ($items as $item): ?>

			<div class="col-3">
				<div class="bonus-box hoverable">
					<h6 class="mt-0"><?php echo $item['bonus_item']['title']; ?></h6>
					<p class="text-middle"><?php echo $item['bonus_item']['text']; ?></p>
				</div>
			</div>

		<?php endforeach; ?>

	</div>
<?php endif; ?>

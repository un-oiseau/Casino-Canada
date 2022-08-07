<div class="tce-row">
	<?php $data = get_field('casinos'); ?>

	<?php for ($i = 1; $i < 5; $i++) { $logo = $data['image_'.$i]; ?>
		<div class="col-3">
			<div class="fast-casino">
				<div class="game-logo text-center">
					<?php if ($logo) :  ?>
						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php } ?>
</div>

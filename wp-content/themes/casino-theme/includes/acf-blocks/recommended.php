<?php
$classname = "tce-row recommended-list";
if (!empty($block['className'])) {
	$classname .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($classname) ?>">
	<?php $games = get_field('casino');
	if($games): ?>
		<?php foreach ($games as $item): $game = $item['casino_item']; ?>
			<div class="col-3">
				<?php $logo = $game['image']; ?>
				<div class="game-logo">
					<?php if ($logo) :  ?>
						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
					<?php endif; ?>
				</div>
				<div class="game-desc">
					<div class="text-small">
						<div class="offer text-center">
							<p class="text-grey">welcome offer</p>
							<p class="h5"><?php echo $game['welcome_offer']; ?></p>
							<p class="text-semibold"><?php echo $game['description']; ?></p>
						</div>
						<table>
							<?php foreach ($game['list'] as $i): ?>
								<tr>
									<td><b><?php echo $i['key']; ?></b></td>
									<td class="text-right"><?php echo $i['value']; ?></td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
					<div class="game-rate">
						<?php $stars = $game['rating']; ?>
						<div class="rate-stars">
							<?php for ($i=0; $i<$stars; $i++) { ?>
								<span class="star"></span>
							<?php } ?>
							<?php for ($i=0; $i<5-$stars; $i++) { ?>
								<span class="star empty"></span>
							<?php } ?>
							<span><?php echo $stars; ?>/ 5</span>
						</div>
						<?php $link = $game['link']; ?>
						<?php if ($link) : ?>
							<a class="text-small text-semibold" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
						<?php endif; ?>
					</div>
					<div class="button-block">
						<?php $link = $game['button_link']; ?>
						<?php if ($link) : ?>
							<button type="button" class="btn-tc btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endforeach; ?>

	<?php endif; ?>
</div>

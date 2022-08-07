<div class="top-games">
	<?php $games = get_field('casino');
	if($games): ?>

		<?php foreach ($games as $item): $data = $item['casino_item']; ?>
			<div class="top-item">

				<div class="tce-row">
					<div class="col-3">
						<?php $logo = $data['image']; ?>
						<div class="game-logo ">
							<?php if ($logo) :  ?>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
							<?php endif; ?>
						</div>
					</div>
					<div class="col-3">
						<div class="text-small flex-box">
							<div class="offer">
								<p class="h4"><?php echo $data['title']; ?></p>
								<?php $link = $data['link']; ?>
								<?php if ($link) : ?>
									<a class="text-semibold" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
								<?php endif; ?>
								<p class="text-grey">welcome offer</p>
								<p class="h4"><?php echo $data['welcome_offer']; ?></p>
								<p class="text-semibold"><?php echo $data['description']; ?></p>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="flex-box">
							<table>
								<?php foreach ($data['list'] as $i): ?>
									<tr>
										<td><b><?php echo $i['key']; ?></b></td>
										<td class="text-right"><?php echo $i['value']; ?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
					<div class="col-3">
						<div class="flex-box">
							<?php $link = $data['button_link']; ?>
							<?php if ($link) : ?>
								<button type="button" class="btn-tc btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-3">
						<div class="game-rate">
							<?php $stars = $data['rating']; ?>
							<div class="rate-stars">
								<?php for ($i=0; $i<$stars; $i++) { ?>
									<span class="star"></span>
								<?php } ?>
								<?php for ($i=0; $i<5-$stars; $i++) { ?>
									<span class="star empty"></span>
								<?php } ?>
								<span><?php echo $stars; ?>/ 5</span>
							</div>
						</div>
					</div>
					<div class="col-9 flex-box">
						<p class="h6"><?php echo $data['sub_description']; ?></p>
					</div>
				</div>

			</div>
		<?php endforeach; ?>

	<?php endif; ?>

</div>

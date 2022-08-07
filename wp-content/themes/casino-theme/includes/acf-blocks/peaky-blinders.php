<?php $data = get_field('casino'); ?>

<?php if ($data): ?>

	<div class="peaky-box">
		<div class="top-item">

			<div class="tce-row">
				<div class="col-30">
					<?php $logo = $data['logo']; ?>
					<div class="game-logo-single">
						<?php if ($logo) :  ?>
							<img class="w-100" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
						<?php endif; ?>
					</div>
				</div>
				<div class="col-70">
					<div class="tce-row">
						<div class="col-5 card-text">
							<div class="text-small flex-box">
								<div class="offer-single">
									<p class="h4 mt-0 mb-0"><?php echo $data['title']; ?></p>
									<?php $link = $data['link']; ?>
									<?php if ($link) : ?>
										<a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
									<?php endif; ?>
								</div>
								<div class="flex-box">
									<ul>
										<?php foreach ($data['list'] as $i): ?>
											<li>
												<span><?php echo $i['item']['title']; ?></span>
												<span class='red-value'><?php echo $i['item']['value']; ?></span>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-7">
							<div class="tce-row">
								<?php for ($j=1; $j < 4; $j++) {
									$sm_data = $data['game_'.$j]; ?>
									<div class="col-4">
										<div class="grey-box text-center">
											<div class="game-logo-triple">
												<?php if ($sm_data) :  ?>
													<img class="w-100" src="<?php echo $sm_data['logo']['url']; ?>" alt="<?php echo $smdata['alt']; ?>" title="<?php echo $sm_data['title']; ?>">
												<?php endif; ?>
											</div>
											<?php $stars = $sm_data['stars']; ?>
											<div class="stars-small">
												<?php for ($i=0; $i<$stars; $i++) { ?>
													<span class="star"></span>
												<?php } ?>
												<?php for ($i=0; $i<5-$stars; $i++) { ?>
													<span class="star empty"></span>
												<?php } ?>
												<span><?php echo $stars; ?>/ 5</span>
											</div>
											<div class="button-block">
												<?php $link = $sm_data['button_link']; ?>
												<?php if ($link) : ?>
													<button type="button" class="btn-tc btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
												<?php endif; ?>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="tce-row">

				<div class="col-30">
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
				<div class="col-70">
					<?php $check_list = $data['checked_list']; ?>
					<ul class="checked_list">
						<?php foreach ($data['checked_list'] as $li) { ?>

							<li><?php echo $li['checked_item']; ?></li>

						<?php } ?>
					</ul>
				</div>
			</div>

		</div>
	</div>

<?php endif; ?>

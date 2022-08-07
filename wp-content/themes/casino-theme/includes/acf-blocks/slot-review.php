<?php
$classname = "";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">
    <?php $data = get_field('block_1'); ?>
    <?php $stars = $data['rating']; ?>

    <div class="tce-row">
        <div class="col-9">
            <h1 class="h2 mt-0"><?php echo $data['title']; ?>
                <span class="rate-stars f-right">
                    <?php for ($i=0; $i<$stars; $i++) { ?>
                        <span class="star"></span>
                    <?php } ?>
                    <?php for ($i=0; $i<5-$stars; $i++) { ?>
                        <span class="star empty"></span>
                    <?php } ?>
                    <span class="h4"><?php echo $stars; ?>/5</span>
                </span>
            </h1>
        </div>
    </div>

    <div class="tce-row">
        <div class="col-9">
            <div class="slot-img">
                <?php $image = $data['image']; ?>
                <?php if ($image) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                <?php endif; ?>

                <div class="btn-group">
                    <?php $link = $data['button_1']; ?>
                    <?php if ($link) : ?>
                        <button type="button" class="btn-tc" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                    <?php endif; ?>

                    <?php $link = $data['button_2']; ?>
                    <?php if ($link) : ?>
                        <button type="button" class="btn-tc btn-tce-outline" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-3">
            <?php $data = get_field('block_2'); ?>
            <?php foreach ($data as $item): $game = $item['casino_card']; ?>
                <div class="slot-game-item">
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
    							<div class="text-small text-semibold">
                                    <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                                </div>
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
        </div>
    </div>

    <?php $data = get_field('block_3'); ?>
    <h3 class="mt-0"><?php echo $data['title'] ?></h3>

    <div class="tce-row">
        <div class="col-9">
            <div class="slot-description">
                <?php echo $data['text'] ?>
            </div>
        </div>
        <div class="col-3">
            <?php $data = get_field('block_4'); ?>
            <?php foreach ($data as $item): $image = $item['image']; ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
            <?php endforeach; ?>
        </div>
    </div>

    <div class="tce-row">
        <div class="col-9">
            <div class="tce-row">
                <?php $data = get_field('block_5'); ?>
                <?php foreach ($data['double_cards'] as $item): ?>
                    <div class="col-4">
                        <div class="table-box">
                            <div class="box-h">
                                <span class="h5"><?php echo $item['title'] ?></span>
                            </div>
                            <div class="box-c">
                                <table>
        							<?php foreach ($item['card']['list'] as $i): ?>
        								<tr>
        									<td><?php echo $i['key']; ?></td>
        									<td class="red-value"><?php echo $i['value']; ?></td>
        								</tr>
        							<?php endforeach; ?>
        						</table>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>

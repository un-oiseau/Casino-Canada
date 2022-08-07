<?php
$classname = "";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">
    <?php $data = get_field('block_1'); ?>
    <?php $stars = $data['rating']; ?>

    <h1 class="h2 mt-0"><?php echo $data['title']; ?>
        <span class="rate-stars">
            <?php for ($i=0; $i<$stars; $i++) { ?>
                <span class="star"></span>
            <?php } ?>
            <?php for ($i=0; $i<5-$stars; $i++) { ?>
                <span class="star empty"></span>
            <?php } ?>
            <span class="h6"><?php echo $stars; ?>/5</span>
        </span>
    </h1>

    <div class="brand-main">
        <div class="tce-row">
            <div class="col-3">
                <div class="text-center">
                    <?php $image = $data['logo']; ?>
                    <?php if ($image) : ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                    <?php endif; ?>
                    <p class="h4"><?php echo $data['description'] ?></p>
                    <?php $link = $data['button_link']; ?>
                    <?php if ($link) : ?>
                        <button type="button" class="btn-tc btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-9">
                <div class="tce-row">
                    <div class="col-6">
                        <div class="check_list">
                            <ul>
                				<?php foreach ($data['green_list'] as $li) { ?>
                					<li><?php echo $li['item']; ?></li>
                				<?php } ?>
                			</ul>
                            <ul>
                                <?php foreach ($data['red_list'] as $li) { ?>
                                    <li><?php echo $li['item']; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="exp-box">
                            <div class="flex-box">
                        		<div class="expert-img">
                        			<?php $logo = $data['expert_photo']; ?>
                        			<?php if ($logo) :  ?>
                        				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
                        			<?php endif; ?>
                        		</div>
                        		<div class="expert-info">
                        			<p class="h7 mt-0 mb-0"><?php echo $data['personal_data']['full_name']; ?></p>
                        			<p class="text-small"><?php echo $data['personal_data']['position']; ?></p>
                        		</div>
                        	</div>
                        	<div class="text-small">
                        		<?php if ($data['review']): ?>
                        			<p><?php echo $data['review']; ?></p>
                        		<?php endif; ?>
                        	</div>
                        </div>
                    </div>
                </div>
                <div class="tce-row">
                    <div class="col-12">
                        <div class="flex-box">
                            <?php foreach ($data['inline_list'] as $i): ?>
                                <div class="text-center">
                                    <p class="text-middle"><?php echo $i['key']; ?></p>
                                    <p class="red-value h7"><?php echo $i['value']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tce-row">
        <?php $data = get_field('block_2'); ?>

        <?php for ($j = 1; $j < 5; $j ++): $d = $data['box_'.$j]; ?>
            <div class="col-3">
                <div class="brand-game">
                    <div class="brand-game-img">
                        <?php $image = $d['image']; ?>
                        <?php if ($image) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                        <?php endif; ?>
                        <?php $link = $d['button_link']; ?>
                        <?php if ($link) : ?>
                            <button type="button" class="btn-tc" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                        <?php endif; ?>
                    </div>
                    <div class="brand-game-desc">
                        <p class="h6 mb-0"><?php echo $d['title']; ?></p>
                        <?php $stars = $d['rating']; ?>
                        <span class="rate-stars">
                            <?php for ($i=0; $i<$stars; $i++) { ?>
                                <span class="star"></span>
                            <?php } ?>
                            <?php for ($i=0; $i<5-$stars; $i++) { ?>
                                <span class="star empty"></span>
                            <?php } ?>
                            <span><?php echo $stars; ?>/5</span>
                        </span>
                        <?php $link = $d['link']; ?>
                        <?php if ($link) : ?>
                            <div class="text-small text-semibold">
                                <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="tce-row">
        <?php $data = get_field('block_3'); ?>

        <?php foreach ($data as $item): ?>
            <div class="col-4 deposits">
                <p class="h6"><?php echo $item['title'] ?></p>
                <?php foreach ($item['deposits'] as $dep): $image = $dep['dep_card'] ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>

</div>

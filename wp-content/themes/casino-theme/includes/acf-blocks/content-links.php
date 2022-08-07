<div class="content-links summary-box collapse-box">
    <?php if (get_field('title')): ?>
        <p class="h4 mb-0" id="summary"><?php echo get_field('title'); ?></p>
    <?php endif; ?>
    <span class="toggller"></span>

    <ul class="collapsed">
        <?php foreach (get_field('headings') as $li) { ?>

            <li><a class="c-link" href="#"><?php echo $li['heading']; ?></a></li>

        <?php } ?>
    </ul>
</div>

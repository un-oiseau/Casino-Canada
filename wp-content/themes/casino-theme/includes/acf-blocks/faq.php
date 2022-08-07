<div class="fax-box">
	<?php $data = get_field('faq'); ?>
	<?php foreach ($data as $faq) { ?>
		<div class="faq-item collapse-box">
			<span class="toggller"></span>
			<p class="h5"><?php echo $faq['faq_item']['question']; ?></p>
			<div class="faq-answer collapsed mt-15">
				<?php echo $faq['faq_item']['answer']; ?>
			</div>
		</div>
	<?php } ?>
</div>

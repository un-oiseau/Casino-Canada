<?php $data = get_field('articles'); ?>
<?php foreach ($data as $item) { $article = $item['article'] ?>
	<div class="article-item">
		<?php $link = $article['link']; ?>
		<?php if ($link) : ?>
			<p class="h6"><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></p>
		<?php endif; ?>
		<p class="text-middle"><?php echo $article['text']; ?></p>
	</div>
<?php } ?>

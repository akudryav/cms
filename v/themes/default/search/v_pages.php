<div>
	<h2>Страницы</h2>
		<?php foreach ($records as $page): ?>
			<p>
				<a href="<?=$page['full_cache_url'] ?>" target="_blank">
					<?=$page['title'] ?>
				</a>
			</p>
		<?php endforeach; ?>
</div>
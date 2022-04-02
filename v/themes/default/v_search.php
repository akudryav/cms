<div>
	<h2>Результаты поиска</h2>
	<?php if(count($templates) > 0): ?>
		<?php foreach ($templates as $template): ?>
			<?=$template?>
		<?php endforeach; ?>
	<?php else: ?>
		Ничего не найдено
	<?php endif; ?>
</div>
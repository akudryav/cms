<?php extract($navparams); ?>
<div>
	<h2>Список удалённых записей </h2>
	<table class="table table-hover table-bordered">
	<thead>
	<tr>
		<th class="numberlist">№</th>
		<th> Заголовок</th>
		<th> Просмотреть</th>
		<th> Редактировать</th>
		<?php if(Helpers::can_look('ALL')): ?>
		<th> Удалить</th>
		<?php endif; ?>
	</tr>
	</thead>
	<tbody>
		<?php 	$i = ($page_num - 1) * $on_page + 1; ?>
		<?php foreach ($trash_pages as $page): ?>
			<tr>
			<?php $id=$page[$pk] ?>
				<td><?=$i?></td>
				<td><?=$page['title'] ?></td>
				<td><a href="/<?=$table?>/edit/<?=$id ?>"> Редактировать</a></td>
				<td><a href="/<?=$table?>/restore/<?=$id ?>"> Восстановить</a></td>
				<?php if(Helpers::can_look('ALL')): ?>
				<td><a href="/<?=$table?>/delete/<?=$id ?>"> Удалить совсем</a></td>
				<?php endif; ?>
			</tr>
		<?php $i++; endforeach ?>
	</tbody>
	</table>
	<?=$navbar ?>
	<br/>
	<a class="btn btn-primary" href="/<?=$table?>/"> Закрыть</a>
</div>
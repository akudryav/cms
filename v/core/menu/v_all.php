<?php extract($navparams); ?>
<h2>Список меню  (<?=$count?>)</h2>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th class="numberlist">№</th>
			<th>Название меню</th>
			<th>Удалить</th>
		</tr>
	</thead>
	<?php 	$i = ($page_num - 1) * $on_page + 1; ?>
	<?php if(count($menu) > 0): ?>
		<?php foreach($menu as $one): ?>
			<tr>
				<td><?php echo "$i"; ++$i;?></td>
				<td><a href="/menu/edit/<?=$one['id_menu']?>"><?=$one['title']?></a></td>
				<td><a href="/menu/delete/<?=$one['id_menu']?>" onClick="javascript: return confirm('Вы действительно хотите удалить?')">Удалить</a></td>
			</tr>
		<?php endforeach; ?>
</table>		
	<?php else:?>
<h2>Нет ни одного меню</h2>
<?php endif;?>
<?=$navbar ?>
<br/>
<p><a class="btn btn-primary btn" href="/menu/add/">Создать новое меню &raquo;</a></p>
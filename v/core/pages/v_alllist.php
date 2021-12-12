<?php extract($navparams); ?>
<div>
	<h2>Список страниц (<?=$count?>)</h2>
	<table class="table table-hover table-bordered">
	<thead>
	<tr>
		<th class="numberlist">№</th>
		<th> Заголовок</th>
		<th> Просмотреть</th>
		<th> Редактировать</th>
		<th> Переместить в корзину</th>
		<?php if(Helpers::can_look('ALL')): ?>
		<th> Удалить</th>
		<?php endif; ?>
		<th> Статус</th>
	</tr>
	</thead>
	<tbody>
		<?php 	$i = ($page_num - 1) * $on_page + 1; ?>
		<?php foreach ($pages as $page): ?>
			<tr <?php if($page['is_show'] == 0) echo 'class="no_public_tr"'; echo 'title="Не выводится на данной языковой версии"'; ?> >
			<?php $id=$page['id_page'] ?>
				<td><?=$i?></td>
				<td><?=$page['title'] ?></td>
				<td><a href="<?=$page['full_cache_url'] ?>" target="_blanc"> Просмотреть</a></td>
				<td><a href="/pages/edit/<?=$id; ?>"> Редактировать</a></td>
				<td><?php if($page['is_show']==0 || $page['is_show']==1): ;?>
                     <a href="/pages/remove/<?=$id; ?>"> Переместить в корзину</a>
                     <?php endif; ?>
                </td>
				<?php if(Helpers::can_look('ALL')): ?>
				<td><a href="/pages/delete/<?=$id; ?>" onClick="javascript: return confirm('Вы действительно хотите удалить? Данное действие удалит страницу со всех языковых версий!')"> Удалить</a></td>
				<?php endif; ?>
				<td> 
				<?php if ($page['is_show'] == 1) 
					echo "Опубликована"; 
				  else if($page['is_show'] == 0)
					echo "Не опубликована"; 
				  else if($page['is_show'] == 2) 
				    echo "Перемещена в корзину";
				?>
				</td>
			</tr>
		<?php $i++; endforeach ?>
	</tbody>
	</table>
	<?=$navbar ?>
	<br/>
	<p><a class="btn btn-primary btn" href="/pages/add/">Добавить новую страницу &raquo;</a></p>
	<a href="/pages/"> Перейти к дереву страниц</a>
</div>
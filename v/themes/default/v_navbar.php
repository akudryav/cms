<!--
	Шаблон вывода линейки для тыканья по страничкам
	
	$count - общее количество записей
	$on_page - количество записей на странице
	$page_num - номер текущей страницы
	$url_self - url адрес от корня без номера с страницы. Например, /pages/all или /articles/editor/
-->
<?php extract($navparams); ?>
<?php if($max_page > 1):?>
<div class="pagination">
  <ul>
	<?php if($page_num <= 1): ?>
    <li><span>Начало</span></li>
	<li><span>Пред.</span></li>
	<?php else: ?>
	<li><a href="<?=$url_self?>">Начало</a></li>
	<li><a href="<?=$url_self . ($page_num - 1)?>">Пред.</a></li>
	<?php endif; ?>
	<?php for($i = $left; $i <= $right; $i++):?>
			<?php if($i <1 || $i > $max_page) continue;?>
			<?php if($i == $page_num): ?>
    <li><span><strong><?=$i?></strong></span></li>
	<?php else: ?>
	<li><a href="<?=$url_self . $i?>"><?=$i?></a></li>
	<?php endif; ?>
	<?php endfor; ?>
	
	<?php if($page_num * $on_page >= $count): ?>
    <li><span>След.</span></li>
	<li><span>Конец</span></li>
	<?php else: ?>
	<li><a href="<?=$url_self . ($page_num + 1)?>">След.</a></li>
	<li><a href="<?=$url_self . $max_page?>">Конец</a></li>
	<?php endif; ?>
  </ul>
</div>
<?php endif; ?>
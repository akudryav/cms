<div <?=Helpers::front_widget('page', $page)?> class="other_tempate_lol">	<h2>		<span <?=Helpers::front_field('title', 'input')?>><?=$page['title']?></span>		<a href="javascript:window.print();" class="print" title="Print this page">Print</a>	</h2>	<div <?=Helpers::front_field('content', 'ck')?>>		<?=$page['content']?>	</div></div>
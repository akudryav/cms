<!--
	Шаблон вывода линейки для тыканья по страничкам
	
	navparams - array(
		count - общее количество записей
		on_page - количество записей на странице
		page_num - номер текущей страницы
		url_self - url адрес от корня без номера с страницы. Например, /pages/all или /articles/editor/
	)
-->
{% if navparams.max_page > 1 %}
<div class="pagination">
  <ul>
	{% if navparams.page_num <= 1 %}
		<li><span>Начало</span></li>
		<li><span>Пред.</span></li>
	{% else %}
		<li><a href="{{navparams.url_self}}">Начало</a></li>
		<li><a href="{{navparams.url_self}}{{navparams.page_num - 1}}">Пред.</a></li>
	{% endif %}
	{% for i in navparams.left..navparams.right %}
		{% if not(i < 1 or i > navparams.max_page) %}
			{% if i == navparams.page_num %}
				<li><span><strong>{{i}}</strong></span></li>
			{% else %}
				<li><a href="{{navparams.url_self}}{{i}}">{{i}}</a></li>
			{% endif %}
		{% endif %}
	{% endfor %}
	{% if (navparams.page_num * navparams.on_page >= navparams.count) %}
		<li><span>След.</span></li>
		<li><span>Конец</span></li>
	{% else %}
		<li><a href="{{navparams.url_self}}{{navparams.page_num + 1}}">След.</a></li>
		<li><a href="{{navparams.url_self}}{{navparams.max_page}}">Конец</a></li>
	{% endif %}
  </ul>
</div>
{% endif %}
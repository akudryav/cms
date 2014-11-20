<div>
	<h2>Результаты поиска</h2>
	{% for template in templates %}
		{{ template }}
	{% else %}
		Ничего не найдено
	{% endfor %}
</div>
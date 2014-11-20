<div>
	<h2>Юзеры</h2>
	{% for user in records %}
		<p>
			{{user.name}}
		</p>
	{% endfor %}
</div>
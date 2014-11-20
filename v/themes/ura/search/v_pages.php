<div>
	<h2>Страницы</h2>
	{% for page in records %}
		<p>
			<a href="{{page.full_cache_url}}" target="_blank">
				{{page.title}}
			</a>
		</p>
	{% endfor %}
</div>
<div {{S.Helpers.front_widget('page', page)}} class="{% block class %}some_class a b c{% endblock %}">	<h2>		<span {{S.Helpers.front_field('title', 'input')}}>{{page['title']}}</span>		<a href="javascript:window.print();" class="print" title="Print this page">Print</a>	</h2>	<div {{S.Helpers.front_field('content', 'ck')}}>		{{page['content']}}	</div></div>

<h1 class="title">{% block blog %}Блог{% endblock %} <a href="javascript:window.print();" class="print" title="Print this page">Print</a></h1>
{% for new in news %}
<article class="news__item">
  <div class="news__item-image">
    <a href="news/post/{{new.id_article}}"><img src="{{C.IMG_DIR}}{{new.path}}" width="116" height="77" alt="" /></a>
  </div>
  <div class="news__item-right">
    <div class="news__item-date">{{new.dt}}</div>
    <div class="news__item-title"><a href="news/post/{{new.id_article}}">{{new.title}}</a></div>
    <div class="news__item-summary"><p>{{new.intro}}</p></div>
    <div class="news__item-more"><a href="news/post/{{new.id_article}}">{% block read_more %}Читать далее{% endblock %}</a></div>
  </div>
</article>
{% endfor %}
{{ navbar }}
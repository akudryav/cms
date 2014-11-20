<?php

/* widgets/v_latest_news.php */
class __TwigTemplate_1c66cf5a9021fcdb6567090036f77962997f5eb50c756156ffab3d1d933b3e37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_news_);
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 3
            echo "
<article class=\"news__item\">
  <div class=\"news__item-image\">
    <a href=\"news/post/";
            // line 6
            if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
            echo $this->getAttribute($_new_, "id_article");
            echo "\"><img src=\"";
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($_C_, "IMG_DIR");
            if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
            echo $this->getAttribute($_new_, "path");
            echo "\" width=\"116\" height=\"77\" alt=\"\" /></a>
  </div>
  <div class=\"news__item-right\">
    <div class=\"news__item-date\">";
            // line 9
            if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
            echo $this->getAttribute($_new_, "dt");
            echo "</div>
    <div class=\"news__item-title\"><a href=\"news/post/";
            // line 10
            if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
            echo $this->getAttribute($_new_, "id_article");
            echo "\">";
            if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
            echo $this->getAttribute($_new_, "title");
            echo "</a></div>
    <div class=\"news__item-summary\"><p>";
            // line 11
            if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
            echo $this->getAttribute($_new_, "intro");
            echo "</p></div>
    <div class=\"news__item-more\"><a href=\"news/post/";
            // line 12
            if (isset($context["new"])) { $_new_ = $context["new"]; } else { $_new_ = null; }
            echo $this->getAttribute($_new_, "id_article");
            echo "\">Читать далее</a></div>
  </div>
</article>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "widgets/v_latest_news.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  57 => 11,  49 => 10,  44 => 9,  32 => 6,  27 => 3,  22 => 2,  19 => 1,);
    }
}

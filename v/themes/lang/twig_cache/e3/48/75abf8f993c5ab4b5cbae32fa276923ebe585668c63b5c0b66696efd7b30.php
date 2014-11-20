<?php

/* v_news.php */
class __TwigTemplate_e34875abf8f993c5ab4b5cbae32fa276923ebe585668c63b5c0b66696efd7b30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'blog' => array($this, 'block_blog'),
            'read_more' => array($this, 'block_read_more'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<h1 class=\"title\">";
        // line 2
        $this->displayBlock('blog', $context, $blocks);
        echo " <a href=\"javascript:window.print();\" class=\"print\" title=\"Print this page\">Print</a></h1>
";
        // line 3
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_news_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 4
            echo "<article class=\"news__item\">
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
            echo "\">";
            $this->displayBlock('read_more', $context, $blocks);
            echo "</a></div>
  </div>
</article>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        if (isset($context["navbar"])) { $_navbar_ = $context["navbar"]; } else { $_navbar_ = null; }
        echo $_navbar_;
    }

    // line 2
    public function block_blog($context, array $blocks = array())
    {
        echo "Блог";
    }

    // line 12
    public function block_read_more($context, array $blocks = array())
    {
        echo "Читать далее";
    }

    public function getTemplateName()
    {
        return "v_news.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 12,  106 => 2,  101 => 16,  80 => 12,  75 => 11,  67 => 10,  62 => 9,  50 => 6,  46 => 4,  28 => 3,  24 => 2,  21 => 1,);
    }
}

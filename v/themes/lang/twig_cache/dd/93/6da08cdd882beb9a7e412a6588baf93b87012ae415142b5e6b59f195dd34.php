<?php

/* articles/v_post.php */
class __TwigTemplate_dd936da08cdd882beb9a7e412a6588baf93b87012ae415142b5e6b59f195dd34 extends Twig_Template
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
        echo "<h1 class=\"title\"><a href=\"/news\">Новости</a> <a href=\"javascript:window.print();\" class=\"print\" title=\"Print this page\">Print</a></h1>

<article class=\"news__item full\" ";
        // line 3
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_widget", array(0 => "article", 1 => $_article_), "method");
        echo " >
  <div ";
        // line 4
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_field", array(0 => "all", 1 => "modal"), "method");
        echo ">
\t  <div class=\"news__item-image\">
\t\t<img src=\"";
        // line 6
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($_C_, "IMG_DIR");
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->getAttribute($_article_, "path");
        echo "\" width=\"290\" alt=\"\" />
\t  </div>
\t  <div class=\"news__item-right\">
\t\t<div class=\"news__item-date\">";
        // line 9
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->getAttribute($_article_, "dt");
        echo "</div>
\t\t<div class=\"news__item-title\"><a href=\"/news/post/";
        // line 10
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->getAttribute($_article_, "id_article");
        echo "\">";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->getAttribute($_article_, "title");
        echo "</a></div>
\t\t<div class=\"news__item-summary\"><p>";
        // line 11
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->getAttribute($_article_, "content");
        echo "</p></div>
\t  </div>
  </div>
</article>
";
        // line 15
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        echo $_news_;
    }

    public function getTemplateName()
    {
        return "articles/v_post.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  57 => 11,  49 => 10,  44 => 9,  35 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}

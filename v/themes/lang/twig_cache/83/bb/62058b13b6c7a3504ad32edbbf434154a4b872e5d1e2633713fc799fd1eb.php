<?php

/* v_navbar.php */
class __TwigTemplate_83bb62058b13b6c7a3504ad32edbbf434154a4b872e5d1e2633713fc799fd1eb extends Twig_Template
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
        echo "<!--
\tШаблон вывода линейки для тыканья по страничкам
\t
\tnavparams - array(
\t\tcount - общее количество записей
\t\ton_page - количество записей на странице
\t\tpage_num - номер текущей страницы
\t\turl_self - url адрес от корня без номера с страницы. Например, /pages/all или /articles/editor/
\t)
-->
";
        // line 11
        if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
        if (($this->getAttribute($_navparams_, "max_page") > 1)) {
            // line 12
            echo "<div class=\"pagination\">
  <ul>
\t";
            // line 14
            if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
            if (($this->getAttribute($_navparams_, "page_num") <= 1)) {
                // line 15
                echo "\t\t<li><span>Начало</span></li>
\t\t<li><span>Пред.</span></li>
\t";
            } else {
                // line 18
                echo "\t\t<li><a href=\"";
                if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
                echo $this->getAttribute($_navparams_, "url_self");
                echo "\">Начало</a></li>
\t\t<li><a href=\"";
                // line 19
                if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
                echo $this->getAttribute($_navparams_, "url_self");
                if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
                echo ($this->getAttribute($_navparams_, "page_num") - 1);
                echo "\">Пред.</a></li>
\t";
            }
            // line 21
            echo "\t";
            if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($_navparams_, "left"), $this->getAttribute($_navparams_, "right")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "\t\t";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
                if ((!(($_i_ < 1) || ($_i_ > $this->getAttribute($_navparams_, "max_page"))))) {
                    // line 23
                    echo "\t\t\t";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
                    if (($_i_ == $this->getAttribute($_navparams_, "page_num"))) {
                        // line 24
                        echo "\t\t\t\t<li><span><strong>";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo $_i_;
                        echo "</strong></span></li>
\t\t\t";
                    } else {
                        // line 26
                        echo "\t\t\t\t<li><a href=\"";
                        if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
                        echo $this->getAttribute($_navparams_, "url_self");
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo $_i_;
                        echo "\">";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo $_i_;
                        echo "</a></li>
\t\t\t";
                    }
                    // line 28
                    echo "\t\t";
                }
                // line 29
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t";
            if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
            if ((($this->getAttribute($_navparams_, "page_num") * $this->getAttribute($_navparams_, "on_page")) >= $this->getAttribute($_navparams_, "count"))) {
                // line 31
                echo "\t\t<li><span>След.</span></li>
\t\t<li><span>Конец</span></li>
\t";
            } else {
                // line 34
                echo "\t\t<li><a href=\"";
                if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
                echo $this->getAttribute($_navparams_, "url_self");
                if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
                echo ($this->getAttribute($_navparams_, "page_num") + 1);
                echo "\">След.</a></li>
\t\t<li><a href=\"";
                // line 35
                if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
                echo $this->getAttribute($_navparams_, "url_self");
                if (isset($context["navparams"])) { $_navparams_ = $context["navparams"]; } else { $_navparams_ = null; }
                echo $this->getAttribute($_navparams_, "max_page");
                echo "\">Конец</a></li>
\t";
            }
            // line 37
            echo "  </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "v_navbar.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 37,  121 => 35,  113 => 34,  108 => 31,  104 => 30,  98 => 29,  95 => 28,  83 => 26,  76 => 24,  71 => 23,  66 => 22,  60 => 21,  52 => 19,  46 => 18,  41 => 15,  38 => 14,  34 => 12,  31 => 11,  19 => 1,);
    }
}

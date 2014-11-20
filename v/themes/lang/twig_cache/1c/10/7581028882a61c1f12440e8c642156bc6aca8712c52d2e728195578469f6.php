<?php

/* search/v_pages.php */
class __TwigTemplate_1c107581028882a61c1f12440e8c642156bc6aca8712c52d2e728195578469f6 extends Twig_Template
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
        echo "<div>
\t<h2>Страницы</h2>
\t";
        // line 3
        if (isset($context["records"])) { $_records_ = $context["records"]; } else { $_records_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_records_);
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            echo "\t\t<p>
\t\t\t<a href=\"";
            // line 5
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "full_cache_url");
            echo "\" target=\"_blank\">
\t\t\t\t";
            // line 6
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "title");
            echo "
\t\t\t</a>
\t\t</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "search/v_pages.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  36 => 6,  31 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }
}

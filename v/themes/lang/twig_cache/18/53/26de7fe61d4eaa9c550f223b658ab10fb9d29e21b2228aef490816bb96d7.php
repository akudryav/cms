<?php

/* v_search.php */
class __TwigTemplate_185326de7fe61d4eaa9c550f223b658ab10fb9d29e21b2228aef490816bb96d7 extends Twig_Template
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
\t<h2>Результаты поиска</h2>
\t";
        // line 3
        if (isset($context["templates"])) { $_templates_ = $context["templates"]; } else { $_templates_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_templates_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 4
            echo "\t\t";
            if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
            echo $_template_;
            echo "
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 6
            echo "\t\tНичего не найдено
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "v_search.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  38 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}

<?php

/* search/v_users.php */
class __TwigTemplate_5b568a5e8629867b5259d4a48aa4853f68049d46c3d8648bac8f48bffabdca89 extends Twig_Template
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
\t<h2>Юзеры</h2>
\t";
        // line 3
        if (isset($context["records"])) { $_records_ = $context["records"]; } else { $_records_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_records_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 4
            echo "\t\t<p>
\t\t\t";
            // line 5
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo $this->getAttribute($_user_, "name");
            echo "
\t\t</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "search/v_users.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  47 => 10,  36 => 6,  31 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }
}

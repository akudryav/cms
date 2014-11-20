<?php

/* widgets/v_langs.php */
class __TwigTemplate_4bdcfa7123dbc487a95a22ed3bd33cf231605e514d969dbf1c0d89574a58d58b extends Twig_Template
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
        echo "<div id=\"langs\">
\t";
        // line 2
        if (isset($context["langs"])) { $_langs_ = $context["langs"]; } else { $_langs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langs_);
        foreach ($context['_seq'] as $context["lang"] => $context["key"]) {
            // line 3
            echo "\t\t<a href=\"/";
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            if (isset($context["return"])) { $_return_ = $context["return"]; } else { $_return_ = null; }
            echo ($_lang_ . $_return_);
            echo "\">
\t\t\t<img src=\"/v/themes/";
            // line 4
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($_C_, "CURENT_THEME");
            echo "/media/images/";
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo $_lang_;
            echo ".png\" ";
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
            if (($_key_ == $_current_)) {
                echo " class=\"lang_active\" ";
            }
            echo " >
\t\t</a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['lang'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "widgets/v_langs.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  34 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}

<?php

/* widgets/v_docs.php */
class __TwigTemplate_abf7e3770802d06f790e6aedae533984764460fa65773263f20a1c79c21af466 extends Twig_Template
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
        echo "<a href=\"";
        if (isset($context["Ñ"])) { $_Ñ_ = $context["Ñ"]; } else { $_Ñ_ = null; }
        echo $this->getAttribute($_Ñ_, "DOCS_DIR");
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo $this->getAttribute($_doc_, "path");
        echo "\" target=\"_blanc\">
\t<img src=\"/v/themes/";
        // line 2
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($_C_, "CURENT_THEME");
        echo "/media/images/icon-";
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo $this->getAttribute($_doc_, "type");
        echo ".png\"> ";
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo $this->getAttribute($_doc_, "title");
        echo "
</a>";
    }

    public function getTemplateName()
    {
        return "widgets/v_docs.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  19 => 1,);
    }
}

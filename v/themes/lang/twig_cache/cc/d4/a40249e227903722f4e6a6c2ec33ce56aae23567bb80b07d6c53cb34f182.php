<?php

/* widgets/v_docs.php */
class __TwigTemplate_ccd4a40249e227903722f4e6a6c2ec33ce56aae23567bb80b07d6c53cb34f182 extends Twig_Template
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
        echo $this->getAttribute((isset($context["C"]) ? $context["C"] : null), "DOCS_DIR");
        echo $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "path");
        echo "\" target=\"_blanc\">
\t<img src=\"/v/themes/";
        // line 2
        echo $this->getAttribute((isset($context["C"]) ? $context["C"] : null), "CURENT_THEME");
        echo "/media/images/icon-";
        echo $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "type");
        echo ".png\"> ";
        echo $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "title");
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
        return array (  25 => 2,  19 => 1,);
    }
}

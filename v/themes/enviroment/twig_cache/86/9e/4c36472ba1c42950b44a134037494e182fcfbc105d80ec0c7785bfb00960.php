<?php

/* base_templates/v_index.php */
class __TwigTemplate_869e4c36472ba1c42950b44a134037494e182fcfbc105d80ec0c7785bfb00960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base_templates/v_main.php");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_templates/v_main.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "base_templates/v_index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}

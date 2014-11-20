<?php

/* inner_templates/v_index.php */
class __TwigTemplate_f3032547622ebe04d21e39000b0bd0c69c6c975737e9e09074200830a9492da7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("inner_templates/v_main.php");

        $this->blocks = array(
            'head_trash' => array($this, 'block_head_trash'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "inner_templates/v_main.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head_trash($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "inner_templates/v_index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,);
    }
}

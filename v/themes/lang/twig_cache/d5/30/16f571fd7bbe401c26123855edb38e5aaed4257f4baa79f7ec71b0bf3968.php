<?php

/* inner_templates/v_index.php */
class __TwigTemplate_d53016f571fd7bbe401c26123855edb38e5aaed4257f4baa79f7ec71b0bf3968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("inner_templates/v_main.php");

        $this->blocks = array(
            'class' => array($this, 'block_class'),
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
    public function block_class($context, array $blocks = array())
    {
        echo " 
\t";
        // line 3
        $this->displayParentBlock("class", $context, $blocks);
        echo "
\tother_tempate_lol
";
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
        return array (  33 => 3,  28 => 2,);
    }
}

<?php

/* langs_templates/en/v_news.php */
class __TwigTemplate_16d248aeeada289d886d2442c210fe12d470df122e8c9d3cc557db5a9daad570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("v_news.php");

        $this->blocks = array(
            'blog' => array($this, 'block_blog'),
            'read_more' => array($this, 'block_read_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "v_news.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_blog($context, array $blocks = array())
    {
        echo "Blog";
    }

    // line 3
    public function block_read_more($context, array $blocks = array())
    {
        echo "Read more";
    }

    public function getTemplateName()
    {
        return "langs_templates/en/v_news.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  29 => 2,);
    }
}

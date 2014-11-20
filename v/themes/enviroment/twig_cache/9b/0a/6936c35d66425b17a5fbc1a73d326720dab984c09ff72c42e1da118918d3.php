<?php

/* v_404.php */
class __TwigTemplate_9b0a6936c35d66425b17a5fbc1a73d326720dab984c09ff72c42e1da118918d3 extends Twig_Template
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
        echo "<div class=\"well\" style=\"max-width: 480px; margin: auto;\">
<h1> Ошибка 404</h1>
<p> Страницы не существует, либо вы ввели неправильный адрес</p>
<p> <a href=\"/home\"> Вернуться на главную</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "v_404.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

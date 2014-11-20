<?php

/* v_login.php */
class __TwigTemplate_a7f086c3d9aa02adccf460c5841d06e4e9ee74df50ec23dc1bb5e2f043b4f23c extends Twig_Template
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
        echo "<?/*
Шаблон авторизации пользователя
===============================
\$login - логин пользователя

*/?>
<h1>Авторизация</h1>
<form method=\"post\">
\tЛогин:
\t<br/>
\t<input name=\"login\" type=\"text\" value=\"\"/>
\t<br/>
\tПароль:
\t<br/> 
\t<input name=\"password\" type=\"password\" value=\"\"/>
\t<br/>
\t<input type=\"checkbox\" name=\"remember\" /> запомнить меня
\t<br/>\t
\t<input type=\"submit\" value=\"Войти\"/>
\t<br/>
\t<br/>\t
\t<a href=\"/\">Главная страница</a>
</form>
";
    }

    public function getTemplateName()
    {
        return "v_login.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

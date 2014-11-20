<?php

/* base_templates/v_main.php */
class __TwigTemplate_0766f53311c34964be00e2ff0af865d44af21917a445fd7926182106423bdd2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'kill_html_maker' => array($this, 'block_kill_html_maker'),
            'head_trash' => array($this, 'block_head_trash'),
            'head_links' => array($this, 'block_head_links'),
            'slider' => array($this, 'block_slider'),
            'left_side' => array($this, 'block_left_side'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"ltr\" lang=\"ru-RU\">
<head>
<base href=\"";
        // line 4
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($_C_, "BASE_URL");
        echo "\" />
\t<title>";
        // line 5
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo $_title_;
        echo "</title>
\t<meta charset=\"utf-8\" />
\t";
        // line 7
        if (isset($context["core_styles"])) { $_core_styles_ = $context["core_styles"]; } else { $_core_styles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_core_styles_);
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 8
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"/";
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($_C_, "CSS_DIR");
            if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
            echo $_style_;
            echo ".css\" /> \t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t";
        if (isset($context["core_scripts"])) { $_core_scripts_ = $context["core_scripts"]; } else { $_core_scripts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_core_scripts_);
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 11
            echo "\t\t<script src=\"/";
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($_C_, "JS_DIR");
            if (isset($context["script"])) { $_script_ = $context["script"]; } else { $_script_ = null; }
            echo $_script_;
            echo ".js\"></script> \t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t";
        if (isset($context["styles"])) { $_styles_ = $context["styles"]; } else { $_styles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_styles_);
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 14
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"/v/themes/";
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($_C_, "CURENT_THEME");
            echo "/media/css/";
            if (isset($context["style"])) { $_style_ = $context["style"]; } else { $_style_ = null; }
            echo $_style_;
            echo ".css\" /> \t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t";
        if (isset($context["scripts"])) { $_scripts_ = $context["scripts"]; } else { $_scripts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_scripts_);
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 17
            echo "\t\t<script src=\"/v/themes/";
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($_C_, "CURENT_THEME");
            echo "/media/js/";
            if (isset($context["script"])) { $_script_ = $context["script"]; } else { $_script_ = null; }
            echo $_script_;
            echo ".js\"></script> \t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t
\t
\t<meta name=\"keywords\" content=\"";
        // line 20
        if (isset($context["keywords"])) { $_keywords_ = $context["keywords"]; } else { $_keywords_ = null; }
        echo $_keywords_;
        echo "\">
\t<meta name=\"description\" content=\"";
        // line 21
        if (isset($context["description"])) { $_description_ = $context["description"]; } else { $_description_ = null; }
        echo $_description_;
        echo "\">\t
</head>
<body ";
        // line 23
        $this->displayBlock('kill_html_maker', $context, $blocks);
        echo ">
";
        // line 24
        if (isset($context["admlink"])) { $_admlink_ = $context["admlink"]; } else { $_admlink_ = null; }
        if ($_admlink_) {
            // line 25
            echo "\tsdgfgfdgd
";
        } else {
            // line 27
            echo "\t
";
        }
        // line 29
        echo "<div id=\"header\">
  <div class=\"wrap\">
\t";
        // line 31
        $this->displayBlock('head_trash', $context, $blocks);
        // line 42
        echo "    <a href=\"index.htm\" class=\"logo\"></a>
    
    <div class=\"contact\">
      <p>г. Москва, ул. Покровка, д. 42 стр. 5</p>
      <p>тел: +7 495 955 92 52 </p>
      <p>e-mail: <a href=\"mailto:info@istoki-foundation.org\">info@istoki-foundation.org</a></p>
    </div>
    
    <div class=\"lang\">
      <a href=\"#\">Рус</a>
      <a href=\"#\">Eng</a>
    </div>
    
    <div class=\"social\">
      <a href=\"#\" class=\"print\"><span></span></a>
      
      <a href=\"#\"><span class=\"fb\"></span></a>
      <a href=\"#\"><span class=\"tw\"></span></a>
      <a href=\"#\"><span class=\"vk\"></span></a>
    </div>
    
    <div class=\"search-box\">
      <form action=\"#\" method=\"post\">
        <input type=\"text\" name=\"s\" id=\"s\" class=\"inp\" onblur=\"if(this.value==''){this.value='Поиск...'}\" onfocus=\"if(this.value=='Поиск...') this.value='';\" value=\"Поиск...\" />
        <input type=\"submit\" class=\"btn\" value=\"&nbsp;\" />    
      </form>
    </div>
    
    <div class=\"menutop\">
      <ul>
\t\t";
        // line 72
        if (isset($context["top_menu"])) { $_top_menu_ = $context["top_menu"]; } else { $_top_menu_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_top_menu_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 73
            echo "\t\t\t<li ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "is_active")) {
                echo " class=\"act\" ";
            }
            echo " >
\t\t\t\t<a href=\"/";
            // line 74
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "full_cache_url");
            echo "\">
\t\t\t\t\t<span>";
            // line 75
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "title_in_menu");
            echo " </span>
\t\t\t\t</a> 
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "      </ul>
      <div class=\"clr\"></div>
    </div>
  
  </div>
</div>
";
        // line 85
        $this->displayBlock('slider', $context, $blocks);
        // line 87
        echo "<div id=\"content\">
  <div class=\"wrap\">  
\t";
        // line 89
        $this->displayBlock('left_side', $context, $blocks);
        // line 154
        echo "    </div>
\t\t";
        // line 155
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
    <div class=\"clr\"></div>
  </div>
</div>

<div id=\"footer\">
  <div class=\"top\">
  
    <div class=\"side\">
      <h4>О фонде</h4>
      <ul>
        <li><a href=\"#\">Информация</a></li>
        <li><a href=\"#\">Миссия и цели</a></li>
        <li><a href=\"#\">Новости и события</a></li>
        <li><a href=\"#\">Медиа</a></li>
      </ul>
      <h4>Контакты и реквизиты</h4>    
    </div>
    
    <div class=\"side two\">
      <h4>Руководство фонда</h4>
      <ul>
        <li><a href=\"psovet.htm\">Попечительский совет</a></li>
        <li><a href=\"#\">Правление</a></li>
        <li><a href=\"#\">Дирекция</a></li>
      </ul>   
    </div>
    
    <div class=\"side three\">
      <h4>Программы</h4>
      <ul>
        <li><a href=\"#\">Фонд святого всехвального апостола Андрея Первозванного</a></li>
        <li><a href=\"#\">Центр национальной славы</a></li>
        <li><a href=\"#\">Всероссийская программа «Святость материнства»</a></li>
        <li><a href=\"#\">Мировой общественный форум «Диалог цивилизаций»</a></li>
      </ul>   
    </div>
    
    <div class=\"side four\">
      <h4>Документы фонда</h4>
      <ul>
        <li><a href=\"#\">Устав</a></li>
        <li><a href=\"#\">О фонде целевого капитала \"Истоки\"</a></li>
        <li><a href=\"#\">Преимущества целевого капитала</a></li>
      </ul>   
    </div>
    
    <div class=\"contact\">
      <a href=\"index.htm\" class=\"logo\"></a>      
      <div class=\"inner\">
        <p>г. Москва, ул. Покровка, д. 42 стр. 5</p>
        <p>тел: +7 495 955 92 52 </p>
        <p>e-mail: <a href=\"mailto:info@istoki-foundation.org\">info@istoki-foundation.org</a></p>
      </div>
    </div>
    
  </div>
  <div class=\"bottom\">
    <div class=\"wrap\">
      <p class=\"dev\">Сайт разработан ArtBase</p>
      <p class=\"copyright\">&copy; 2013. Все права защищены</p>
    </div>
  </div>
</div>

</body>
</html>";
    }

    // line 23
    public function block_kill_html_maker($context, array $blocks = array())
    {
    }

    // line 31
    public function block_head_trash($context, array $blocks = array())
    {
        // line 32
        echo "\t<div class=\"service\">
\t\t";
        // line 33
        $this->displayBlock('head_links', $context, $blocks);
        // line 39
        echo "\t  <div class=\"clr\"></div>
    </div>
\t";
    }

    // line 33
    public function block_head_links($context, array $blocks = array())
    {
        // line 34
        echo "      <div class=\"item\"><a href=\"01.0_Progr_FondAndrPervozv.htm\" class=\"icon1\">Фонд святого всехвального апостола Андрея Первозванного</a></div>
      <div class=\"item\"><a href=\"3.0_SvyatostMater.htm\" class=\"icon2\">Всероссийская программа «Святость материнства»</a></div>
      <div class=\"item\"><a href=\"02.0_TsentrNatsSlavy.htm\" class=\"icon3\">Центр <br>национальной славы</a></div>
      <div class=\"item last\"><a href=\"4.0_DiTsivilizats.htm\" class=\"icon4\">Мировой общественный форум «Диалог цивилизаций»</a></div>
\t\t";
    }

    // line 85
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 89
    public function block_left_side($context, array $blocks = array())
    {
        // line 90
        echo "\t<div id=\"left-side\">
    
      <div class=\"menu\">
        <ul>
          ";
        // line 94
        if (isset($context["left_menu"])) { $_left_menu_ = $context["left_menu"]; } else { $_left_menu_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_left_menu_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 95
            echo "\t\t\t  <li >
\t\t\t<a href=\"/";
            // line 96
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "full_cache_url");
            echo "\" ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "is_active")) {
                echo " class=\"act\" ";
            }
            echo " >
\t\t\t\t<span> ";
            // line 97
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "title_in_menu");
            echo " </span>
\t\t\t</a>  
\t\t\t ";
            // line 99
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_item_, "children")) > 0)) {
                // line 100
                echo "\t\t\t  <ul>
\t\t\t\t  ";
                // line 101
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item_, "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 102
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t<a href=\"/";
                    // line 103
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo $this->getAttribute($_i_, "full_cache_url");
                    echo "\"  ";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    if ($this->getAttribute($_i_, "is_active")) {
                        echo " class=\"act\" ";
                    }
                    echo ">
\t\t\t\t\t\t<span> ";
                    // line 104
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo $this->getAttribute($_i_, "title_in_menu");
                    echo " </span>
\t\t\t\t\t</a>
\t\t\t\t   </li>
\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "\t\t\t  </ul>
\t\t\t ";
            }
            // line 110
            echo "\t\t\t   </li>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "        </ul>
      </div>      
      
      <div class=\"headsmi\">ДЛЯ СМИ</div>
      <div id=\"mediabox\">
        <a href=\"mediya.htm\"><div class=\"title\"><span>Медиа</span></div></a>
        <div class=\"inner\">          
          <div class=\"img\"><img src=\"./img/media-img.jpg\" alt=\"\" /></div>
          <a href=\"#\" class=\"play\"></a> 
        </div>
      </div>
      
      <div id=\"eventbox\">
        <a href=\"Novosty.htm\">
          <div class=\"title\"><span>События</span></div>
        </a>
        <div class=\"inner\">
          <div class=\"date\">21 мая 2013</div>
          <div class=\"img\"><a href=\"#\"><img src=\"./img/events-img.png\" alt=\"\" /></a></div>
          <div class=\"desc\">
            <p>Фонд Андрея Превозванного организовал фотовыставку \"Благодатный огонь...</p>          
            <a href=\"Novosty_Podrobno.htm\" class=\"more\">Подробнее</a>         
          </div>
          <div class=\"clr\"></div>      
        </div>
      </div>
      
      <div id=\"eventbox\">
        <a href=\"Novosty.htm\">
          <div class=\"title\"><span>Новости</span></div>
        </a>
        <div class=\"inner\">
          <div class=\"date\">20 мая 2013</div>
          <div class=\"img\"><a href=\"#\"><img src=\"./img/news-img.png\" class=\"nimgp\" alt=\"\" /></a></div>
          <div class=\"desc\">
            <p>В «Президент-отеле» состоялся Пасхальный прием Фонда...</p>          
            <a href=\"Novosty_Podrobno.htm\" class=\"more\">Подробнее</a>         
          </div>
          <div class=\"clr\"></div>      
        </div>
      </div>
      ";
    }

    public function getTemplateName()
    {
        return "base_templates/v_main.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 112,  408 => 110,  404 => 108,  393 => 104,  383 => 103,  380 => 102,  375 => 101,  372 => 100,  369 => 99,  363 => 97,  353 => 96,  350 => 95,  345 => 94,  339 => 90,  336 => 89,  331 => 85,  323 => 34,  320 => 33,  314 => 39,  312 => 33,  309 => 32,  306 => 31,  301 => 23,  229 => 155,  226 => 154,  224 => 89,  220 => 87,  218 => 85,  210 => 79,  199 => 75,  194 => 74,  186 => 73,  181 => 72,  149 => 42,  147 => 31,  143 => 29,  139 => 27,  135 => 25,  132 => 24,  128 => 23,  122 => 21,  117 => 20,  113 => 18,  100 => 17,  94 => 16,  81 => 14,  75 => 13,  63 => 11,  57 => 10,  45 => 8,  40 => 7,  34 => 5,  29 => 4,  24 => 1,);
    }
}

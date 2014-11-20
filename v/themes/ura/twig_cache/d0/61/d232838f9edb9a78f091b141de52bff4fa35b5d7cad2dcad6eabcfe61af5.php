<?php

/* base_templates/v_main.php */
class __TwigTemplate_d061d232838f9edb9a78f091b141de52bff4fa35b5d7cad2dcad6eabcfe61af5 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"ru\">
  <head>
\t<base href=\"";
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
  <body>
    
    <section class=\"wrapper\">
    ";
        // line 26
        if (isset($context["adminlink"])) { $_adminlink_ = $context["adminlink"]; } else { $_adminlink_ = null; }
        if ($_adminlink_) {
            // line 27
            echo "\t\t<ul id=\"admin_left\">
\t\t\t<li><a href=\"/pages\">Админка</a></li>
\t\t\t<li><a href=\"/login\">Выйти</a></li>
\t\t</ul>
\t";
        }
        // line 32
        echo "      <header class=\"header\">
        
        <div class=\"header__logo\"><a href=\"/\">DofC</a></div>
        <div class=\"header__contacts\">
          ";
        // line 36
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "text", array(0 => "h_contacts"), "method");
        echo "
        </div>
        <div class=\"header__title\">
        \t <h2>";
        // line 39
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "text", array(0 => "h_title"), "method");
        echo "</h2><br>
        \t";
        // line 40
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "text", array(0 => "h_subtitle"), "method");
        echo "
        </div>
        <div class=\"header__line\">
\t\t\t<ul>
\t\t\t\t";
        // line 44
        if (isset($context["top_menu"])) { $_top_menu_ = $context["top_menu"]; } else { $_top_menu_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_top_menu_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "\t\t\t\t\t<li ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "is_active")) {
                echo " class=\"active expanded\" ";
            }
            echo " 
\t\t\t\t\t\t";
            // line 46
            if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_widget", array(0 => "page", 1 => $_item_), "method");
            echo "
\t\t\t\t\t>
\t\t\t\t\t\t<a href=\"/";
            // line 48
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "full_cache_url");
            echo "\">
\t\t\t\t\t\t\t<span ";
            // line 49
            if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
            echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_field", array(0 => "title_in_menu", 1 => "input"), "method");
            echo "> ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "title_in_menu");
            echo " </span>
\t\t\t\t\t\t</a> 
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t</ul>
          <form class=\"header__search\" action=\"search\" method=\"post\">
            <input type=\"text\" name=\"search\" placeholder=\"Поиск\" />
            <button type=\"submit\">Найти</button>
          </form>
        </div>
        
      </header>

      <section class=\"main\">
        <section class=\"content\">
       \t\t";
        // line 64
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
    \t\t</section>
\t\t<section class=\"sidebar\">
          
          <nav class=\"sidebar__menu\">
            <ul class=\"sidebar__menu-list\">
\t\t\t\t";
        // line 70
        if (isset($context["left_menu"])) { $_left_menu_ = $context["left_menu"]; } else { $_left_menu_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_left_menu_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 71
            echo "\t\t\t\t  <li ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "is_active")) {
                echo " class=\"active expanded\" ";
            }
            echo " 
\t\t\t\t\t\t";
            // line 72
            if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_widget", array(0 => "page", 1 => $_item_), "method");
            echo "
\t\t\t\t  >
\t\t\t\t<a href=\"/";
            // line 74
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "full_cache_url");
            echo "\">
\t\t\t\t\t<span ";
            // line 75
            if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
            echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_field", array(0 => "title_in_menu", 1 => "input"), "method");
            echo "> ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "title_in_menu");
            echo " </span>
\t\t\t\t</a>  
\t\t\t\t ";
            // line 77
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_item_, "children")) > 0)) {
                // line 78
                echo "\t\t\t\t  <ul>
\t\t\t\t\t  ";
                // line 79
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item_, "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 80
                    echo "\t\t\t\t\t\t<li ";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    if ($this->getAttribute($_i_, "is_active")) {
                        echo " class=\"active\" ";
                    }
                    echo " 
\t\t\t\t\t\t\t";
                    // line 81
                    if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_widget", array(0 => "page", 1 => $_i_), "method");
                    echo "
\t\t\t\t\t\t>
\t\t\t\t\t\t<a href=\"/";
                    // line 83
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo $this->getAttribute($_i_, "full_cache_url");
                    echo "\">
\t\t\t\t\t\t\t<span ";
                    // line 84
                    if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
                    echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_field", array(0 => "title_in_menu", 1 => "input"), "method");
                    echo "> ";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo $this->getAttribute($_i_, "title_in_menu");
                    echo " </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t   </li>
\t\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "\t\t\t\t  </ul>
\t\t\t\t ";
            }
            // line 90
            echo "\t\t\t\t   </li>
\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "            </ul>
          </nav>     
    \t</section>
        
      </section>

      <footer class=\"footer\">
\t\t<div class=\"footer__contacts\">
\t\t\t";
        // line 100
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "text", array(0 => "f_contacts"), "method");
        echo "
        </div>
        
        <div class=\"footer__copyright\">
        \t";
        // line 104
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "text", array(0 => "f_copyright"), "method");
        echo "
        </div>
        
        <div class=\"footer__developer\">
        \t";
        // line 108
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "text", array(0 => "f_developer"), "method");
        echo "
        </div>
      </footer>

</body>
</html>";
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
        return array (  340 => 108,  332 => 104,  324 => 100,  314 => 92,  307 => 90,  303 => 88,  289 => 84,  284 => 83,  277 => 81,  269 => 80,  264 => 79,  261 => 78,  258 => 77,  249 => 75,  244 => 74,  237 => 72,  229 => 71,  224 => 70,  214 => 64,  201 => 53,  187 => 49,  182 => 48,  175 => 46,  167 => 45,  162 => 44,  154 => 40,  149 => 39,  142 => 36,  136 => 32,  129 => 27,  126 => 26,  117 => 21,  112 => 20,  108 => 18,  95 => 17,  89 => 16,  76 => 14,  70 => 13,  58 => 11,  52 => 10,  40 => 8,  35 => 7,  29 => 5,  24 => 4,  19 => 1,);
    }
}

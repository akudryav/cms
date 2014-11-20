<?php

/* base_templates/v_main.php */
class __TwigTemplate_c54a765e6b5f8d952ecf7feac3b871a911db0f7e0a811b47af761ad6d4148504 extends Twig_Template
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
\t\t\t<li><a href=\"/";
            // line 28
            if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
            echo $this->getAttribute($this->getAttribute($_S_, "I18n"), "assoc", array(), "method");
            echo "/pages\">Админка</a></li>
\t\t\t<li><a href=\"/";
            // line 29
            if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
            echo $this->getAttribute($this->getAttribute($_S_, "I18n"), "assoc", array(), "method");
            echo "/login\">Выйти</a></li>
\t\t</ul>
\t";
        }
        // line 32
        echo "      <header class=\"header\">
        <div class=\"header__logo\"><a href=\"/";
        // line 33
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "I18n"), "assoc", array(), "method");
        echo "\">DofC</a></div>
        <div class=\"header__contacts\">
          ";
        // line 35
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "text", array(0 => "h_contacts"), "method");
        echo "
        </div>
        <div class=\"header__title\">
        \t <h2>";
        // line 38
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "text", array(0 => "h_title"), "method");
        echo "</h2><br>
        \t";
        // line 39
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "text", array(0 => "h_subtitle"), "method");
        echo "
\t\t\t<div id=\"langs\">
\t\t\t\t";
        // line 41
        if (isset($context["langs"])) { $_langs_ = $context["langs"]; } else { $_langs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_langs_);
        foreach ($context['_seq'] as $context["lang"] => $context["key"]) {
            // line 42
            echo "\t\t\t\t\t<a href=\"/";
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo $_lang_;
            echo "/";
            if (isset($context["return"])) { $_return_ = $context["return"]; } else { $_return_ = null; }
            echo $_return_;
            echo "\">
\t\t\t\t\t\t<img src=\"/v/themes/";
            // line 43
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($_C_, "CURENT_THEME");
            echo "/media/images/";
            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
            echo $_lang_;
            echo ".png\" 
\t\t\t\t\t\t\t";
            // line 44
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            if (isset($context["current"])) { $_current_ = $context["current"]; } else { $_current_ = null; }
            if (($_key_ == $_current_)) {
                echo " class=\"lang_active\" ";
            }
            echo " >
\t\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['lang'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t</div>
        </div>
        <div class=\"header__line\">
\t\t\t<ul>
\t\t\t\t";
        // line 51
        if (isset($context["top_menu"])) { $_top_menu_ = $context["top_menu"]; } else { $_top_menu_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_top_menu_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "\t\t\t\t\t";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "is_show") == 1)) {
                // line 53
                echo "\t\t\t\t\t\t<li ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ($this->getAttribute($_item_, "is_active")) {
                    echo " class=\"active expanded\" ";
                }
                echo " 
\t\t\t\t\t\t\t";
                // line 54
                if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_widget", array(0 => "page", 1 => $_item_), "method");
                echo "
\t\t\t\t\t\t>
\t\t\t\t\t\t\t<a href=\"/";
                // line 56
                if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
                echo $this->getAttribute($this->getAttribute($_S_, "I18n"), "assoc", array(), "method");
                echo "/";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "full_cache_url");
                echo "\">
\t\t\t\t\t\t\t\t<span ";
                // line 57
                if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
                echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_field", array(0 => "title_in_menu", 1 => "input"), "method");
                echo "> ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "title_in_menu");
                echo " </span>
\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        // line 73
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
    \t\t</section>
\t\t<section class=\"sidebar\">
          
          <nav class=\"sidebar__menu\">
            <ul class=\"sidebar__menu-list\">
\t\t\t\t";
        // line 79
        if (isset($context["left_menu"])) { $_left_menu_ = $context["left_menu"]; } else { $_left_menu_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_left_menu_);
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 80
            echo "\t\t\t\t  ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "is_show") == 1)) {
                // line 81
                echo "\t\t\t\t  <li ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ($this->getAttribute($_item_, "is_active")) {
                    echo " class=\"active expanded\" ";
                }
                echo " 
\t\t\t\t\t\t";
                // line 82
                if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_widget", array(0 => "page", 1 => $_item_), "method");
                echo "
\t\t\t\t  >
\t\t\t\t\t<a href=\"/";
                // line 84
                if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
                echo $this->getAttribute($this->getAttribute($_S_, "I18n"), "assoc", array(), "method");
                echo "/";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "full_cache_url");
                echo "\">
\t\t\t\t\t\t<span ";
                // line 85
                if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
                echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_field", array(0 => "title_in_menu", 1 => "input"), "method");
                echo "> ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "title_in_menu");
                echo " </span>
\t\t\t\t\t</a>  
\t\t\t\t\t ";
                // line 87
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_item_, "children")) > 0)) {
                    // line 88
                    echo "\t\t\t\t\t  <ul>
\t\t\t\t\t\t  ";
                    // line 89
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_item_, "children"));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 90
                        echo "\t\t\t\t\t\t\t";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        if (($this->getAttribute($_i_, "is_show") == 1)) {
                            // line 91
                            echo "\t\t\t\t\t\t\t\t<li ";
                            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                            if ($this->getAttribute($_i_, "is_active")) {
                                echo " class=\"active\" ";
                            }
                            echo " 
\t\t\t\t\t\t\t\t\t";
                            // line 92
                            if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
                            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                            echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_widget", array(0 => "page", 1 => $_i_), "method");
                            echo "
\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<a href=\"/";
                            // line 94
                            if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
                            echo $this->getAttribute($this->getAttribute($_S_, "I18n"), "assoc", array(), "method");
                            echo "/";
                            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                            echo $this->getAttribute($_i_, "full_cache_url");
                            echo "\">
\t\t\t\t\t\t\t\t\t<span ";
                            // line 95
                            if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
                            echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_field", array(0 => "title_in_menu", 1 => "input"), "method");
                            echo "> ";
                            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                            echo $this->getAttribute($_i_, "title_in_menu");
                            echo " </span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t   </li>
\t\t\t\t\t\t   ";
                        }
                        // line 99
                        echo "\t\t\t\t\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "\t\t\t\t\t  </ul>
\t\t\t\t\t ";
                }
                // line 102
                echo "\t\t\t\t </li>
\t\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </ul>
          </nav>     
    \t</section>
        
      </section>

      <footer class=\"footer\">
\t\t<div class=\"footer__contacts\">
\t\t\t";
        // line 113
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "text", array(0 => "f_contacts"), "method");
        echo "
        </div>
        
        <div class=\"footer__copyright\">
        \t";
        // line 117
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "text", array(0 => "f_copyright"), "method");
        echo "
        </div>
        
        <div class=\"footer__developer\">
        \t";
        // line 121
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
        return array (  420 => 121,  412 => 117,  404 => 113,  394 => 105,  388 => 104,  384 => 102,  380 => 100,  374 => 99,  363 => 95,  355 => 94,  348 => 92,  340 => 91,  336 => 90,  331 => 89,  328 => 88,  325 => 87,  316 => 85,  308 => 84,  301 => 82,  293 => 81,  289 => 80,  284 => 79,  274 => 73,  261 => 62,  255 => 61,  244 => 57,  236 => 56,  229 => 54,  221 => 53,  217 => 52,  212 => 51,  206 => 47,  193 => 44,  185 => 43,  176 => 42,  171 => 41,  165 => 39,  160 => 38,  153 => 35,  147 => 33,  144 => 32,  137 => 29,  132 => 28,  129 => 27,  126 => 26,  117 => 21,  112 => 20,  108 => 18,  95 => 17,  89 => 16,  76 => 14,  70 => 13,  58 => 11,  52 => 10,  40 => 8,  35 => 7,  29 => 5,  24 => 4,  19 => 1,);
    }
}

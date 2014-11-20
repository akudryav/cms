<?php

/* base_templates/v_index.php */
class __TwigTemplate_4f7b2f50aa9f6c1bba5a12430394cd6993ce5133073a159cb3217e7abf994258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base_templates/v_main.php");

        $this->blocks = array(
            'head_trash' => array($this, 'block_head_trash'),
            'kill_html_maker' => array($this, 'block_kill_html_maker'),
            'left_side' => array($this, 'block_left_side'),
            'slider' => array($this, 'block_slider'),
            'head_links' => array($this, 'block_head_links'),
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

    // line 2
    public function block_head_trash($context, array $blocks = array())
    {
    }

    // line 4
    public function block_kill_html_maker($context, array $blocks = array())
    {
        // line 5
        echo "\tstyle=\"top: -54px; background-image: url(http://istoki-foundation.org/images/bg.png) !important; background-color: rgb(255, 255, 255) !important; background-position: 0px 0px !important; background-repeat: repeat no-repeat !important;\"
";
    }

    // line 7
    public function block_left_side($context, array $blocks = array())
    {
    }

    // line 9
    public function block_slider($context, array $blocks = array())
    {
        // line 10
        echo "\t<div id=\"sliderblock\">
  <div class=\"wrap\">
    <div class=\"slider-side\">
\t\t<widget widget-type=\"slider\">[[--widget/slider/1--]]</widget>
    </div>
    <div class=\"right-side\">
    
      <div id=\"eventbox\">
        <a href=\"Novosty.htm\">
          <div class=\"title\"><span>События</span></div>
        </a>
          
            <div class=\"inner\">
              <div class=\"date\">21 мая 2013</div>
              <div class=\"img\"><a href=\"#\"><img src=\"./img/events-img.png\" alt=\"\" /></a></div>
              <div class=\"desc\">
                <p>Фонд Андрея Первозванного доставил в Россию Благодатный огонь...</p>          
                <a href=\"Novosty_Podrobno.htm\" class=\"more\">Подробнее</a>          
              </div>
              <div class=\"clr\"></div>      
            </div>

      </div>   
        
     
      <div id=\"mediabox\">
        <a href=\"mediya.htm\"><div class=\"title\"><span>Медиа</span></div></a>
        <div class=\"inner\">          
          <div class=\"img\"><img src=\"./img/media-img.jpg\" alt=\"\" /></div>
          <a href=\"#\" class=\"play\"></a> 
        </div>
      </div>
    ";
        // line 42
        $this->displayBlock('head_links', $context, $blocks);
        // line 47
        echo "    </div>
    <div class=\"clr\"></div>
  </div>
</div>
";
    }

    // line 42
    public function block_head_links($context, array $blocks = array())
    {
        // line 43
        echo "\t\t <div id=\"service-home\">
\t\t\t";
        // line 44
        $this->displayParentBlock("head_links", $context, $blocks);
        echo "
\t\t</div>
\t";
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
        return array (  103 => 44,  100 => 43,  97 => 42,  89 => 47,  87 => 42,  53 => 10,  50 => 9,  45 => 7,  40 => 5,  37 => 4,  32 => 2,);
    }
}

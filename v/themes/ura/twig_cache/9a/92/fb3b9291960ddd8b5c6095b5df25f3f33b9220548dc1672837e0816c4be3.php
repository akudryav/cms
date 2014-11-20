<?php

/* inner_templates/v_main.php */
class __TwigTemplate_9a92fb3b9291960ddd8b5c6095b5df25f3f33b9220548dc1672837e0816c4be3 extends Twig_Template
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
        echo "<div id=\"middle-side\">    
  <h1>";
        // line 2
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "</h1>
  
  <div class=\"page\">        
\t";
        // line 5
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content");
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "inner_templates/v_main.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  22 => 2,  19 => 1,);
    }
}

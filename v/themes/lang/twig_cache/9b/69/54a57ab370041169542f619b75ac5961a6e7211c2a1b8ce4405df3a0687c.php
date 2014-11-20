<?php

/* langs_templates/fr/inner_templates/v_main.php */
class __TwigTemplate_9b6954a57ab370041169542f619b75ac5961a6e7211c2a1b8ce4405df3a0687c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'class' => array($this, 'block_class'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div ";
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_widget", array(0 => "page", 1 => $_page_), "method");
        echo " class=\"";
        $this->displayBlock('class', $context, $blocks);
        echo "\">
\t<h2 style=\"transform: rotate(180deg);\">
\t\t<span ";
        // line 3
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_field", array(0 => "title", 1 => "input"), "method");
        echo ">";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title", array(), "array");
        echo "</span>
\t\t<a href=\"javascript:window.print();\" class=\"print\" title=\"Print this page\">Print</a>
\t</h2>
\t<div ";
        // line 6
        if (isset($context["S"])) { $_S_ = $context["S"]; } else { $_S_ = null; }
        echo $this->getAttribute($this->getAttribute($_S_, "Helpers"), "front_field", array(0 => "content", 1 => "ck"), "method");
        echo ">
\t\t";
        // line 7
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content", array(), "array");
        echo "
\t</div>
</div>
";
    }

    // line 1
    public function block_class($context, array $blocks = array())
    {
        echo "some_class a b c";
    }

    public function getTemplateName()
    {
        return "langs_templates/fr/inner_templates/v_main.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 1,  45 => 7,  40 => 6,  30 => 3,  20 => 1,);
    }
}

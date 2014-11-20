<?php

/* widgets/v_slider.php */
class __TwigTemplate_fadd27528d69e793a3ca37b9b2e8c9176e0b43cfa6fea2a358499ca5d2e33ecc extends Twig_Template
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
        echo "<div class=\"flexslider\">
\t<ul class=\"slides\">
\t\t";
        // line 3
        if (isset($context["images"])) { $_images_ = $context["images"]; } else { $_images_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_images_);
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 4
            echo "\t\t  <li>
\t\t\t<img src=\"/";
            // line 5
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($_C_, "IMG_DIR");
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo $this->getAttribute($_img_, "path");
            echo "\" alt=\"";
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo $this->getAttribute($_img_, "alt");
            echo "\" />
\t\t\t<div class=\"desc\">
\t\t\t  <h1>";
            // line 7
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo $this->getAttribute($_img_, "title_image");
            echo "</h1>
\t\t\t</div>
\t\t  </li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "widgets/v_slider.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  42 => 7,  31 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }
}

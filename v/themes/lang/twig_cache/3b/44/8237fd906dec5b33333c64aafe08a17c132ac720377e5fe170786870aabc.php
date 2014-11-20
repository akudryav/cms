<?php

/* widgets/v_gallery.php */
class __TwigTemplate_3b448237fd906dec5b33333c64aafe08a17c132ac720377e5fe170786870aabc extends Twig_Template
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
        echo "<div class=\"gallery\">
";
        // line 2
        if (isset($context["images"])) { $_images_ = $context["images"]; } else { $_images_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_images_);
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 3
            echo "<div class=\"gallery__item\">
  <a href=\"/";
            // line 4
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($_C_, "IMG_DIR");
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo $this->getAttribute($_img_, "path");
            echo "\" data-lightbox=\"roadtrip\" rel=\"gallery\">
  \t<img src=\"/";
            // line 5
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($_C_, "IMG_SMALL_DIR");
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo $this->getAttribute($_img_, "path");
            echo "\" width=\"220\" height=\"220\" alt=\"";
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo $this->getAttribute($_img_, "alt");
            echo "\" title=\"";
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo $this->getAttribute($_img_, "title_image");
            echo "\"/>
  </a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "widgets/v_gallery.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  37 => 5,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}

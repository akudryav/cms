<?php

/* widgets/v_slider.php */
class __TwigTemplate_a78787c33875e3a40c2a71782dce81610b360102feafb79e66f6df02b54d9b5b extends Twig_Template
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
        echo "<div class=\"slider\"><div class=\"slider__inner\">
    <div class=\"slider__crop cycle-slideshow\"
      data-cycle-slides=\"> div\"
      data-cycle-timeout=\"3000\"
      data-cycle-prev=\".slider__prev\"
      data-cycle-next=\".slider__next\"
      data-cycle-fx=\"fade\"
      data-cycle-carousel-fluid=\"true\"
      data-allow-wrap=\"true\"
      >
      ";
        // line 11
        if (isset($context["images"])) { $_images_ = $context["images"]; } else { $_images_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_images_);
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 12
            echo "      <div class=\"slider__item\">
        <div class=\"slider__item-image\"><a href=\"";
            // line 13
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo $this->getAttribute($_img_, "href");
            echo "\"><img src=\"/";
            if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
            echo $this->getAttribute($_C_, "IMG_DIR");
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo $this->getAttribute($_img_, "path");
            echo "\" width=\"464\" height=\"315\" alt=\"\" /></a></div>
        <div class=\"slider__item-right\">
          <div class=\"slider__item-title\"><a href=\"";
            // line 15
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo $this->getAttribute($_img_, "href");
            echo "\">";
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo $this->getAttribute($_img_, "title_image");
            echo "</a></div>
          <div class=\"slider__item-summary\">";
            // line 16
            if (isset($context["img"])) { $_img_ = $context["img"]; } else { $_img_ = null; }
            echo $this->getAttribute($_img_, "alt");
            echo "</div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
    <div class=\"slider__prev\"><span></span></div>
    <div class=\"slider__next\"><span></span></div>
  </div></div>
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
        return array (  69 => 20,  58 => 16,  50 => 15,  39 => 13,  36 => 12,  31 => 11,  19 => 1,);
    }
}

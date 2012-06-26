<?php

/* partials/assets/images.html */
class __TwigTemplate_e2740ec1351c7a8039f177b399426cc9 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"thumb-list\" class=\"tabs\">
\t<ul>
\t\t";
        // line 3
        $context["counter"] = 1;
        // line 4
        echo "\t\t";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->getAttribute($_page_, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 5
            echo "    \t\t";
            if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
            if ($this->getAttribute($_image_, "small", array(), "any", true, true)) {
                // line 6
                echo "\t    \t\t<li><a href=\"#";
                if (isset($context["counter"])) { $_counter_ = $context["counter"]; } else { $_counter_ = null; }
                echo $_counter_;
                echo "\">
\t    \t\t\t<img src=\"";
                // line 7
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo $this->getAttribute($_image_, "small");
                echo "\" alt=\"";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                echo $this->getAttribute($_image_, "name");
                echo "\" />
\t\t\t    </a></li>
\t\t\t    ";
                // line 9
                if (isset($context["counter"])) { $_counter_ = $context["counter"]; } else { $_counter_ = null; }
                $context["counter"] = ($_counter_ + 1);
                // line 10
                echo "    \t\t";
            }
            // line 11
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/assets/images.html";
    }

    public function isTraitable()
    {
        return false;
    }
}

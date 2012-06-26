<?php

/* page.html */
class __TwigTemplate_9cac001cb097f71f61611dfb8cccb374 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("partials/header.html")->display($context);
        // line 2
        echo "
\t<div id=\"";
        // line 3
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "hook");
        echo "\" class=\"full\">
\t\t<div class=\"center-txt left\">
\t\t\t";
        // line 5
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content_left");
        echo "
\t\t</div>

\t\t<div class=\"center-txt right\">
\t\t\t";
        // line 9
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "content_right");
        echo "
\t\t</div>
\t</div>
\t<div class=\"credit center-txt\">
\t\t";
        // line 13
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "credit");
        echo "
\t</div>


";
        // line 17
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }
}

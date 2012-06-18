<?php

/* category.html */
class __TwigTemplate_ef4f2103d7926bd7a58936d65f85777e extends Twig_Template
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
";
        // line 3
        $this->env->loadTemplate("partials/assets/images.html")->display($context);
        // line 4
        echo "
\t\t<!--Arrow Navigation-->
\t\t<a id=\"back-to-thumbs\" class=\"slide-nav\" href=\"";
        // line 6
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
        if (($this->getAttribute($_page_, "url") == $this->getAttribute($_child_, "url"))) {
            echo " ";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->getAttribute($_child_, "url");
            echo " ";
        }
        echo "\"></a>
\t\t<a id=\"prevslide\" class=\"load-item slide-nav\"></a>
\t\t<a id=\"nextslide\" class=\"load-item slide-nav\"></a>

";
        // line 10
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "category.html";
    }

    public function isTraitable()
    {
        return false;
    }
}

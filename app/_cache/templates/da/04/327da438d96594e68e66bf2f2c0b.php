<?php

/* partials/header.html */
class __TwigTemplate_da04327da438d96594e68e66bf2f2c0b extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>

\t\t<title>";
        // line 5
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo ", ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "title");
        echo "</title>

\t\t<!-- S T Y L E (default) -->
\t\t<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 8
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "public/css/style.css\" />
\t\t<link rel=\"icon\" href=\"";
        // line 9
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "favicon.png\" type=\"image/png\" />

\t</head>
\t<body>

\t\t<div class=\"wrap\">

\t\t<header>

\t\t\t<div class=\"full clearfix center-txt uppercase\">
\t\t\t\t<hgroup>
\t\t\t\t\t\t<h2><a href=\"";
        // line 20
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "\">";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "name");
        echo "</a></h2>
\t\t\t\t\t\t<p id=\"sub-header\">";
        // line 21
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "profession");
        echo "</p>
\t\t\t\t</hgroup>

\t\t\t\t<nav>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 26
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 27
            echo "
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 29
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->getAttribute($_child_, "url");
            echo "\" class=\"";
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if (($this->getAttribute($_page_, "url") == $this->getAttribute($_child_, "url"))) {
                echo " active-link ";
            }
            echo "\">";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            echo $this->getAttribute($_child_, "title");
            echo "</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "\t\t\t\t\t</ul>
\t\t\t\t</nav>

\t\t\t</div>

\t\t</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html";
    }

    public function isTraitable()
    {
        return false;
    }
}

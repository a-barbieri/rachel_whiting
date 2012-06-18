<?php

/* project.html */
class __TwigTemplate_b0fe4f750418e8a3963d8ff6d9822185 extends Twig_Template
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
    <div id=\"container\" class=\"";
        // line 3
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "id");
        echo "\">

      <div id=\"content\" class=\"col eight\">
        <p id=\"project-count\" class=\"col one\"><em>&#8470;</em> ";
        // line 6
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "index");
        echo "/";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "siblings_count");
        echo "</p>
        <p id=\"gallery-count\" class=\"col one\">
          <em>&#8470;</em> <span>1/1</span>
        </p>
        <div id=\"gallery-navigation\" class=\"col three\">
          <p><a href=\"#\" id=\"next-image\">Next image</a> <em>&rarr;</em></p>
          <p><a href=\"#\" id=\"previous-image\">Previous image</a> <em>&larr;</em></p>
        </div>
        <div class=\"col four\">
          ";
        // line 15
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "siblings")) {
            // line 16
            echo "            ";
            $this->env->loadTemplate("partials/next-page.html")->display($context);
            // line 17
            echo "            ";
            $this->env->loadTemplate("partials/previous-page.html")->display($context);
            // line 18
            echo "          ";
        }
        // line 19
        echo "        </div>
        ";
        // line 20
        $this->env->loadTemplate("partials/assets/media.html")->display($context);
        // line 21
        echo "      </div>

    </div>

";
        // line 25
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "project.html";
    }

    public function isTraitable()
    {
        return false;
    }
}

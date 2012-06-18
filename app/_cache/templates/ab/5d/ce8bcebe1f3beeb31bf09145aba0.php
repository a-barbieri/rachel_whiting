<?php

/* partials/navigation/category-lists.html */
class __TwigTemplate_ab5dce8bcebe1f3beeb31bf09145aba0 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "root"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 2
            echo "  ";
            if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
            if ($this->getAttribute($_child_, "children")) {
                // line 3
                echo "    <ul class=\"projects\">
    ";
                // line 4
                if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_child_, "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 5
                    echo "      <li class=\"col seven ";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "id");
                    echo "\">
        <p class=\"date col one\">";
                    // line 6
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo twig_date_format_filter($this->getAttribute($_child_, "date"), "Y, M-");
                    echo "</p>
        <h2 class=\"col five\">
          ";
                    // line 8
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    if ($this->getAttribute($_child_, "thumb")) {
                        // line 9
                        echo "            <img src=\"";
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        echo $this->getAttribute($this->getAttribute($_child_, "thumb"), "url");
                        echo "\" width=\"";
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        echo $this->getAttribute($this->getAttribute($_child_, "thumb"), "width");
                        echo "\" height=\"";
                        if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                        echo $this->getAttribute($this->getAttribute($_child_, "thumb"), "height");
                        echo "\" class=\"project-thumb\" alt=\"\">
          ";
                    }
                    // line 11
                    echo "          <a href=\"";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "url");
                    echo "\">";
                    if (isset($context["child"])) { $_child_ = $context["child"]; } else { $_child_ = null; }
                    echo $this->getAttribute($_child_, "title");
                    echo "</a>
        </h2>
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 15
                echo "    </ul>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "partials/navigation/category-lists.html";
    }

    public function isTraitable()
    {
        return false;
    }
}

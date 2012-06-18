<?php

/* partials/php/resize_image.php */
class __TwigTemplate_3819a1f4c79e95d209a9fe930932bead extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php
// *** Include the class
include(\"resize-class.php\");

// *** 1) Initialize / load image
\$resizeObj = new resize('/00/01.jpg');

// *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
\$resizeObj -> resizeImage( 155, '', 'landscape');

// *** 3) Save image
\$resizeObj -> saveImage('sample-resized.jpg', 80);

?>";
    }

    public function getTemplateName()
    {
        return "partials/php/resize_image.php";
    }

    public function isTraitable()
    {
        return true;
    }
}

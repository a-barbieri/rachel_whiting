<?php

/* partials/footer.html */
class __TwigTemplate_9e499df05b97476425c7758fe4973184 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
\t\t</div><!-- .wrap -->
\t\t
\t\t<!-- S C R I P T S (default) -->
\t\t<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 6
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "public/js/plugins.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 7
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "public/js/action.js\"></script>
\t\t\t
\t\t\t
\t\t";
        // line 10
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($this->getAttribute($_page_, "slug") == "")) {
            echo "\t\t
\t\t\t";
            // line 12
            echo "\t\t\t
\t\t\t<!-- S C R I P T (random image) -->
\t\t\t<script type=\"text/javascript\">
\t\t\t
\t\t\t\tjQuery(document).ready(function(\$){
\t\t\t\t
\t\t\t\t/*\tSLIDESHOW
\t\t\t\t *  ------------------------------------------
\t\t\t\t *\t
\t\t\t\t *  ------------------------------------------
\t\t\t\t */\t\t\t 
\t\t\t\t\t\$.supersized({
\t\t\t\t\t\tfit_portrait\t\t: 0,
\t\t\t\t\t\tfit_always\t\t\t: 1,
\t\t\t\t\t\tslide_interval      : 3000,\t\t\t// Length between transitions
\t\t\t\t\t\ttransition          : 1, \t\t\t// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t// 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
\t\t\t\t\t\ttransition_speed\t: 700,\t\t\t// Speed of transition\t\t\t   
\t\t\t\t\t\timage_protect\t\t: 0,
\t\t\t\t\t\trandom\t\t\t\t: 1,
\t\t\t\t\t\tslides \t\t\t\t:  \t[
\t\t\t\t\t\t\t";
            // line 33
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_page_, "images"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 34
                echo "\t\t\t\t\t\t\t\t";
                if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                if ($this->getAttribute($_image_, "is_last")) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t{image : '";
                    if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                    echo $this->getAttribute($_image_, "url");
                    echo "'}
\t\t\t\t\t\t\t\t";
                } else {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t{image : '";
                    if (isset($context["image"])) { $_image_ = $context["image"]; } else { $_image_ = null; }
                    echo $this->getAttribute($_image_, "url");
                    echo "'},
\t\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "\t\t\t\t\t\t\t\t\t\t\t\t]
\t\t\t\t\t});
\t\t\t    });\t    
\t\t\t</script>


\t\t";
        } elseif (($this->getAttribute($_page_, "slug") == "about-and-contact")) {
            // line 46
            echo "\t
\t\t\t";
            // line 48
            echo "
\t\t
\t\t";
        } else {
            // line 51
            echo "\t\t\t";
            // line 52
            echo "\t\t\t
\t\t\t<!-- S C R I P T (slideshow) -->
\t\t\t<script type=\"text/javascript\" language=\"javascript\">
\t
\t\t\t\tjQuery(document).ready(function() {
\t\t\t\t
\t\t\t\t\t\$('#supersized img').hide();
\t\t\t\t
\t\t\t\t/*\tSLIDESHOW
\t\t\t\t *  ------------------------------------------
\t\t\t\t *\t• call the slideshow based on hashchange
\t\t\t\t *  ------------------------------------------
\t\t\t\t */\t\t\t 
\t\t\t\t\tfunction slideshow( slide ) {\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t// Grab all of our image urls from the page
\t\t\t\t\t\t// rewriting them to the full sized images.
\t\t\t\t\t\t
\t\t\t\t\t\tvar images = [];
\t\t\t\t\t\tjQuery('#thumb-list img').each(function() {
\t\t\t\t\t\t\timages.push({'image' : \$(this).attr('src').replace('_sml','') });
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t// Run slideshow plugin
\t\t\t\t\t\treturn \$.supersized({
\t\t\t\t\t\t\tfit_portrait\t\t: 0,
\t\t\t\t\t\t\tfit_always\t\t\t: 1,
\t\t\t\t\t\t\t// Start from the slected slide
\t\t\t\t\t\t\tstart_slide\t\t : slide,
\t\t\t\t\t\t\tslide_interval   : 3000,
\t\t\t\t\t\t\ttransition       : 1,
\t\t\t\t\t\t\t// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right,
\t\t\t\t\t\t\t// 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
\t\t\t\t\t\t\ttransition_speed : 300,\t\t
\t\t\t\t\t\t\timage_protect\t : 0,
\t\t\t\t\t\t\tslides\t\t\t : images
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t/*\tURL FRAGMENT
\t\t\t\t *  -------------------------------------------
\t\t\t\t */
\t\t\t\t\t\$(window).bind( 'hashchange', function(e) {
\t\t\t\t\t
\t\t\t\t\t    // Get URL fragment that control the slideshow 
\t\t\t\t\t    var hash = \$.param.fragment();
\t\t\t\t\t    var slideshow_status = \$('#supersized li').length;
\t\t\t\t\t    
\t\t\t\t\t    // If you click a thumb
\t\t\t\t\t    if ( hash !== '' && slideshow_status == '0' ) {
\t\t\t\t\t    \t// Hide thumbs and show slideshow navigation
\t\t\t\t\t    \t\$('#thumb-list').fadeOut( 300, function() {
\t\t\t\t\t    \t\t\$('.slide-nav, #supersized, #supersized-loader').fadeIn( 300 ); // #supersized needs to be after \$.supersized()
\t\t\t\t\t    \t\t// Create the slideshow
\t\t\t\t\t\t    \tslideshow( hash );
\t\t\t\t\t    \t});
\t\t\t\t\t    } 
\t\t\t\t\t});
\t\t\t\t
\t\t\t\t\t// Trigger the hashchange event when the page loads
\t\t\t\t\t\$(window).trigger( 'hashchange' );
\t
\t\t\t\t});
\t\t\t</script>

\t\t";
        }
        // line 117
        echo "\t
\t\t\t\t
\t\t<!-- S C R I P T (font) -->
\t\t<script type=\"text/javascript\">
\t\t
\t\t\t// Webfont crossbrowser script
\t\t\tWebFontConfig = {custom: { families: ['sans-serif'],
\t\t\t\turls: [ '";
        // line 124
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $this->getAttribute($_page_, "root_path");
        echo "public/css/fontface.css' ] }
\t\t\t};
\t\t\t(function() {
\t\t\t\tvar wf = document.createElement('script');
\t\t\t\twf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
\t\t\t\twf.type = 'text/javascript';
\t\t\t\twf.async = 'true';
\t\t\t\tvar s = document.getElementsByTagName('script')[0];
\t\t\t\ts.parentNode.insertBefore(wf, s);
\t\t\t})();
\t\t\t
\t\t</script>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }
}

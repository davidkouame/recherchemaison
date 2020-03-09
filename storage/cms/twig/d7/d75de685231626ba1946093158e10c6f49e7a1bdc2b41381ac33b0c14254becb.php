<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/footer_general.htm */
class __TwigTemplate_8a4014da0cfd8c55084b761b4fca881d05380245dd054637218db2f43cfa467f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<script src=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js\"></script>
<script>
    // \$(\"#collapse-navbar\").css({'display' :'none !important'});
    // \$(\"#collapse-navbar .navbar-nav\").css('display', 'none');
    \$(document).ready(function() {
                \$('.select2').select2();
            });
    \$(\"#btnResponsive\").click(function (e) {
        if (\$(\"#layout-header\").hasClass(\"responsive\")) {
            \$(\"#layout-header\").removeClass(\"responsive\");
            // \$(\"#collapse-navbar\").removeClass(\"responsive-collapse\");
            \$(\"#collapse-navbar .navbar-nav\").css('display', 'none');
        } else {
            \$(\"#layout-header\").addClass(\"responsive\");
            // \$(\"#collapse-navbar\").addClass(\"responsive-collapse\");
            \$(\"#collapse-navbar .navbar-nav\").css('display', 'block');
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/footer_general.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js\"></script>
<script>
    // \$(\"#collapse-navbar\").css({'display' :'none !important'});
    // \$(\"#collapse-navbar .navbar-nav\").css('display', 'none');
    \$(document).ready(function() {
                \$('.select2').select2();
            });
    \$(\"#btnResponsive\").click(function (e) {
        if (\$(\"#layout-header\").hasClass(\"responsive\")) {
            \$(\"#layout-header\").removeClass(\"responsive\");
            // \$(\"#collapse-navbar\").removeClass(\"responsive-collapse\");
            \$(\"#collapse-navbar .navbar-nav\").css('display', 'none');
        } else {
            \$(\"#layout-header\").addClass(\"responsive\");
            // \$(\"#collapse-navbar\").addClass(\"responsive-collapse\");
            \$(\"#collapse-navbar .navbar-nav\").css('display', 'block');
        }
    });
</script>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/footer_general.htm", "");
    }
}

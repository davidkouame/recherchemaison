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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/footer_scriptjs.htm */
class __TwigTemplate_c89a819ef7723be5eda7676beaf2349f5a516ce845ab4e646a7185240a0b7d2a extends \Twig\Template
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
        echo "<script>
    // \$(\"#collapse-navbar\").css({'display' :'none !important'});
    \$(\"#collapse-navbar .navbar-nav\").css('display', 'none');
            
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
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/footer_scriptjs.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    // \$(\"#collapse-navbar\").css({'display' :'none !important'});
    \$(\"#collapse-navbar .navbar-nav\").css('display', 'none');
            
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
</script>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/footer_scriptjs.htm", "");
    }
}

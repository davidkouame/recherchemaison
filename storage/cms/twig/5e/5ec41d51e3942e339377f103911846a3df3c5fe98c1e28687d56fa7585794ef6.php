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

/* /home/digital/developpement/chapmaison/themes/demo/partials/site/footer_general.htm */
class __TwigTemplate_ef776c04e89c1ad9d09c3dc717ee87e0964fc4cda11641ed5cdab6249b5b7519 extends \Twig\Template
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
    // \$(\"#collapse-navbar .navbar-nav\").css('display', 'none');

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
        return "/home/digital/developpement/chapmaison/themes/demo/partials/site/footer_general.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    // \$(\"#collapse-navbar\").css({'display' :'none !important'});
    // \$(\"#collapse-navbar .navbar-nav\").css('display', 'none');

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
</script>", "/home/digital/developpement/chapmaison/themes/demo/partials/site/footer_general.htm", "");
    }
}

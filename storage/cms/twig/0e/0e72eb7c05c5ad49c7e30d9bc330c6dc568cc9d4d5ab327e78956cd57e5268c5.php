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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/header_general.htm */
class __TwigTemplate_586affd7e218726e41e7fc268c130910e49201815ff4cd4776c80fa7f4f359d4 extends \Twig\Template
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
        echo "<style>
    .responsive {
        height: 160px;
    }

    .responsive-collapse {
        display: block !important;
    }

    #layout-header {
        margin-top: 0px;
    }

    body {
        padding-top: 44px;
    }

    .navbar-brand,
    .navbar-nav>li>a {
        color: #000;
    }

    .navbar-nav li a {
        color: #000 !important;
    }

    .text-primary {
        color: #ff8b00 !important;
        font-family: \"Rubik\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    .site-logo {
        font-size: 2rem;
        text-transform: uppercase;
        font-weight: 900;
        line-height: 0;
    }

    .nav.navbar-nav {
        float: right;
    }

    @media screen and (max-width: 767px) {
        .navbar-nav>li {
            float: left;
        }

        .nav>li>a {
            display: unset;
        }
    }

    @media screen and (max-width: 991px) {
        .connection-xs {
            display: block;
        }
    }

    @media screen and (min-width: 992px) {
        .connection-xs {
            display: none;
        }
        #collapse-navbar .navbar-nav{
            display: block;
        }
    }

    @media screen and (max-width: 991px) {
        #collapse-navbar .navbar-nav{
            display: none;
        }
    }

    @media screen and (max-width: 991px) {
        ul.nav li {
            float: none;
            display: block;
            text-align: left;
        }

        .navbar-nav>li>a {
            padding-top: 0px;
            padding-bottom: 10px;
        }
    }

    ul.nav li {
        text-align: right;
    }

    ul.nav li a {
        padding-bottom: 5px;
    }

    #collapse-navbar {
        padding-right: 6%;
    }

    @media screen and (max-width: 766px) {
        .collapse.navbar-collapse.navbar-main-collapse {
            display: block !important;
        }
    }
</style>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/header_general.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .responsive {
        height: 160px;
    }

    .responsive-collapse {
        display: block !important;
    }

    #layout-header {
        margin-top: 0px;
    }

    body {
        padding-top: 44px;
    }

    .navbar-brand,
    .navbar-nav>li>a {
        color: #000;
    }

    .navbar-nav li a {
        color: #000 !important;
    }

    .text-primary {
        color: #ff8b00 !important;
        font-family: \"Rubik\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    .site-logo {
        font-size: 2rem;
        text-transform: uppercase;
        font-weight: 900;
        line-height: 0;
    }

    .nav.navbar-nav {
        float: right;
    }

    @media screen and (max-width: 767px) {
        .navbar-nav>li {
            float: left;
        }

        .nav>li>a {
            display: unset;
        }
    }

    @media screen and (max-width: 991px) {
        .connection-xs {
            display: block;
        }
    }

    @media screen and (min-width: 992px) {
        .connection-xs {
            display: none;
        }
        #collapse-navbar .navbar-nav{
            display: block;
        }
    }

    @media screen and (max-width: 991px) {
        #collapse-navbar .navbar-nav{
            display: none;
        }
    }

    @media screen and (max-width: 991px) {
        ul.nav li {
            float: none;
            display: block;
            text-align: left;
        }

        .navbar-nav>li>a {
            padding-top: 0px;
            padding-bottom: 10px;
        }
    }

    ul.nav li {
        text-align: right;
    }

    ul.nav li a {
        padding-bottom: 5px;
    }

    #collapse-navbar {
        padding-right: 6%;
    }

    @media screen and (max-width: 766px) {
        .collapse.navbar-collapse.navbar-main-collapse {
            display: block !important;
        }
    }
</style>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/header_general.htm", "");
    }
}

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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/header.htm */
class __TwigTemplate_43b3385e995a423d5a3920d3a576e4b585d1d2ed4a502135e4ebf6f7c9418cf0 extends \Twig\Template
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
    .navbar-brand, .navbar-nav > li > a{
        color: #000;
    }

    .navbar-nav li a{
        color: #000 !important;   
    }

    .text-primary {
        /*color: #ff8b00 !important;*/
        color: #fa2d37 !important;
        font-family: \"Rubik\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    .site-logo {
        font-size: 2rem;
        text-transform: uppercase;
        font-weight: 900;
        line-height: 0;
    }

    .nav.navbar-nav{
        float: right;
    }

    @media screen and (max-width: 767px) {
        .navbar-nav > li {
            float: left;
        }
        .connection-xs{
            display: block;
            position: relative;
            /*top: -59px;*/
        }
        .nav > li > a{
            display: unset;
        }
    }

    @media screen and (min-width: 768px) {
        .connection-xs{
            display: none;
        }
    }
    
    .connection-xs{
        position: relative;
        top: -59px;
    }

    @media screen and (max-width: 412px) {
        #layout-content{
            margin-top: 40px;
        }

        .nav.navbar-nav.connection-xs{
            top: -10%;
            left: -24%;
        }
        
        .navbar-header{
            left: 18%
        }
    }

    /*.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{
        background-color: #fa2d37;
        border-color: #fa2d37;
    }*/



    .pagination > li > a, .pagination > li > span{
        color: #fa2d37
    }

    .pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus{
        color: #fa2d37
    }
</style>

<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\" style=\"background-color: #fff;
border: 0px aliceblue;border: 0px aliceblue;height: 1px;\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand text-primary\" href=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" style=\"font-size: 2rem;
            font-weight: 900;
            line-height: 0;
            padding-top: 33px;\">
                </span>ChapMaison</span>
            </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 98
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98) == "demarcheur")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
        echo "\" style=\"color: #fa2d37 !important; font-weight: bold\">S'inscrire</a></li>
                <li class=\"";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99) == "agence")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\" style=\"color: #fa2d37 !important; font-weight: bold\">Se connecter</a></li>
            </ul>
        </div>
        <ul class=\"nav navbar-nav connection-xs\">
            <li class=\"separator hidden-xs\"></li>
            <li class=\"";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104) == "demarcheur")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
        echo "\" style=\"color: #fa2d37 !important; font-weight: bold\">S'inscrire</a></li>
            <li class=\"";
        // line 105
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105) == "agence")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\" style=\"color: #fa2d37 !important; font-weight: bold\">Se connecter</a></li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 105,  159 => 104,  147 => 99,  139 => 98,  126 => 88,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .navbar-brand, .navbar-nav > li > a{
        color: #000;
    }

    .navbar-nav li a{
        color: #000 !important;   
    }

    .text-primary {
        /*color: #ff8b00 !important;*/
        color: #fa2d37 !important;
        font-family: \"Rubik\", -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
    }

    .site-logo {
        font-size: 2rem;
        text-transform: uppercase;
        font-weight: 900;
        line-height: 0;
    }

    .nav.navbar-nav{
        float: right;
    }

    @media screen and (max-width: 767px) {
        .navbar-nav > li {
            float: left;
        }
        .connection-xs{
            display: block;
            position: relative;
            /*top: -59px;*/
        }
        .nav > li > a{
            display: unset;
        }
    }

    @media screen and (min-width: 768px) {
        .connection-xs{
            display: none;
        }
    }
    
    .connection-xs{
        position: relative;
        top: -59px;
    }

    @media screen and (max-width: 412px) {
        #layout-content{
            margin-top: 40px;
        }

        .nav.navbar-nav.connection-xs{
            top: -10%;
            left: -24%;
        }
        
        .navbar-header{
            left: 18%
        }
    }

    /*.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{
        background-color: #fa2d37;
        border-color: #fa2d37;
    }*/



    .pagination > li > a, .pagination > li > span{
        color: #fa2d37
    }

    .pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus{
        color: #fa2d37
    }
</style>

<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\" style=\"background-color: #fff;
border: 0px aliceblue;border: 0px aliceblue;height: 1px;\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand text-primary\" href=\"{{ 'home'|page }}\" style=\"font-size: 2rem;
            font-weight: 900;
            line-height: 0;
            padding-top: 33px;\">
                </span>ChapMaison</span>
            </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'demarcheur' %}active{% endif %}\"><a href=\"{{ 'register'|page }}\" style=\"color: #fa2d37 !important; font-weight: bold\">S'inscrire</a></li>
                <li class=\"{% if this.page.id == 'agence' %}active{% endif %}\"><a href=\"{{ 'login'|page }}\" style=\"color: #fa2d37 !important; font-weight: bold\">Se connecter</a></li>
            </ul>
        </div>
        <ul class=\"nav navbar-nav connection-xs\">
            <li class=\"separator hidden-xs\"></li>
            <li class=\"{% if this.page.id == 'demarcheur' %}active{% endif %}\"><a href=\"{{ 'register'|page }}\" style=\"color: #fa2d37 !important; font-weight: bold\">S'inscrire</a></li>
            <li class=\"{% if this.page.id == 'agence' %}active{% endif %}\"><a href=\"{{ 'login'|page }}\" style=\"color: #fa2d37 !important; font-weight: bold\">Se connecter</a></li>
        </ul>
    </div>
</nav>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/header.htm", "");
    }
}

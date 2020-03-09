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

/* /home/digital/developpement/chapmaison/themes/demo/partials/site/header.htm */
class __TwigTemplate_956658ec8d52529dc3c1973a7c2eb5aa7445922d2e93395615a64a41a84a6524 extends \Twig\Template
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
        color: #ff8b00 !important;
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
</style>

<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\" style=\"background-color: #fff;
border: 0px aliceblue;border: 0px aliceblue;height: 1px;\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand text-primary\" href=\"";
        // line 72
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
        // line 82
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82) == "demarcheur")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
        echo "\">S'inscrire</a></li>
                <li class=\"";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83) == "agence")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">Se connecter</a></li>
            </ul>
        </div>
        <ul class=\"nav navbar-nav connection-xs\">
            <li class=\"separator hidden-xs\"></li>
            <li class=\"";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88) == "demarcheur")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
        echo "\">S'inscrire</a></li>
            <li class=\"";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89) == "agence")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">Se connecter</a></li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/digital/developpement/chapmaison/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 89,  143 => 88,  131 => 83,  123 => 82,  110 => 72,  37 => 1,);
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
        color: #ff8b00 !important;
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
                <li class=\"{% if this.page.id == 'demarcheur' %}active{% endif %}\"><a href=\"{{ 'register'|page }}\">S'inscrire</a></li>
                <li class=\"{% if this.page.id == 'agence' %}active{% endif %}\"><a href=\"{{ 'login'|page }}\">Se connecter</a></li>
            </ul>
        </div>
        <ul class=\"nav navbar-nav connection-xs\">
            <li class=\"separator hidden-xs\"></li>
            <li class=\"{% if this.page.id == 'demarcheur' %}active{% endif %}\"><a href=\"{{ 'register'|page }}\">S'inscrire</a></li>
            <li class=\"{% if this.page.id == 'agence' %}active{% endif %}\"><a href=\"{{ 'login'|page }}\">Se connecter</a></li>
        </ul>
    </div>
</nav>", "/home/digital/developpement/chapmaison/themes/demo/partials/site/header.htm", "");
    }
}

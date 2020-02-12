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
</style>

<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\" style=\"background-color: #fff;border: 0px aliceblue;border: 0px aliceblue;\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand text-primary\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" style=\"font-size: 2rem;
            font-weight: 900;
            line-height: 0;\">
                </span>ChapMaison</span>
            </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40) == "demarcheur")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
        echo "\">S'inscrire</a></li>
                <li class=\"";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41) == "agence")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">Se connecter</a></li>
            </ul>
        </div>
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
        return array (  89 => 41,  81 => 40,  69 => 31,  37 => 1,);
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
</style>

<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\" style=\"background-color: #fff;border: 0px aliceblue;border: 0px aliceblue;\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand text-primary\" href=\"{{ 'home'|page }}\" style=\"font-size: 2rem;
            font-weight: 900;
            line-height: 0;\">
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
    </div>
</nav>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/header.htm", "");
    }
}

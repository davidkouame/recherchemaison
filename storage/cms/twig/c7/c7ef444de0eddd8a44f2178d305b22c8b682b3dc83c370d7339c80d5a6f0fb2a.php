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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/header_agence.htm */
class __TwigTemplate_a7ba465581fec9a5599d3d2c68e6eb0209f507983d6de0bfe0ba33cce4a980d8 extends \Twig\Template
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
            <a class=\"navbar-brand text-primary site-logo\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                </span>Coka</span>
            </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38) == "demarcheur")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo url("/");
        echo "\">Home</a></li>
                <li class=\"";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39) == "demarcheur")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo url("agence/create-publication");
        echo "\">Créez une publiation</a></li>
                <li class=\"";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40) == "demarcheur")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo url("agence/publications");
        echo "\">Mes publications</a></li>
                <li class=\"";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41) == "agence")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo url("agence/account");
        echo "\">Mon compte</a></li>
                <li class=\"";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42) == "agence")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo url("logout");
        echo "\">Se déconnectez</a></li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/header_agence.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  103 => 41,  95 => 40,  87 => 39,  79 => 38,  69 => 31,  37 => 1,);
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
            <a class=\"navbar-brand text-primary site-logo\" href=\"{{ 'home'|page }}\">
                </span>Coka</span>
            </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'demarcheur' %}active{% endif %}\"><a href=\"{{ url('/') }}\">Home</a></li>
                <li class=\"{% if this.page.id == 'demarcheur' %}active{% endif %}\"><a href=\"{{ url('agence/create-publication') }}\">Créez une publiation</a></li>
                <li class=\"{% if this.page.id == 'demarcheur' %}active{% endif %}\"><a href=\"{{ url('agence/publications') }}\">Mes publications</a></li>
                <li class=\"{% if this.page.id == 'agence' %}active{% endif %}\"><a href=\"{{ url('agence/account') }}\">Mon compte</a></li>
                <li class=\"{% if this.page.id == 'agence' %}active{% endif %}\"><a href=\"{{ url('logout') }}\">Se déconnectez</a></li>
            </ul>
        </div>
    </div>
</nav>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/header_agence.htm", "");
    }
}

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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header_general"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide responsive\" role=\"navigation\"
    style=\"background-color: #fff;border: 0px aliceblue;border: 0px aliceblue;height: 1px; min-height: 52px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-2 navbar-header pull-left\">
                <a class=\"navbar-brand text-primary\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" style=\"font-size: 2rem;
                        font-weight: 900;
                        line-height: 0;
                        height: 1px;\">
                    </span>ChapMaison</span>
                </a>
            </div>
            <div class=\"col-md-2 pull-right\" style=\"padding-top: 14px;\">
                <ul class=\"nav navbar-nav connection-xs\">
                    <li>
                        <a href=\"javascript:void(0);\" class=\"icon\" id=\"btnResponsive\">
                            <i class=\"fa fa-bars\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<div class=\"collapse navbar-collapse navbar-main-collapse\" id=\"collapse-navbar\">
    <ul class=\"nav navbar-nav\">
        <li class=\"separator hidden-xs\"></li>
        <li class=\"";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33) == "agence")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo url("/");
        echo "\">Home</a></li>
        <li class=\"";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34) == "agence")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo url("agence/create-publication");
        echo "\">Créez une publiation</a></li>
        <li class=\"";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35) == "agence")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo url("agence/publications");
        echo "\">Mes publications</a></li>
        <li class=\"";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36) == "agence")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo url("agence/account");
        echo "\">Mon compte</a></li>
        <li class=\"";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37) == "agence")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo url("logout");
        echo "\">Se déconnectez</a></li>
    </ul>
</div>";
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
        return array (  109 => 37,  101 => 36,  93 => 35,  85 => 34,  77 => 33,  50 => 9,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'site/header_general' %}

<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide responsive\" role=\"navigation\"
    style=\"background-color: #fff;border: 0px aliceblue;border: 0px aliceblue;height: 1px; min-height: 52px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-2 navbar-header pull-left\">
                <a class=\"navbar-brand text-primary\" href=\"{{ 'home'|page }}\" style=\"font-size: 2rem;
                        font-weight: 900;
                        line-height: 0;
                        height: 1px;\">
                    </span>ChapMaison</span>
                </a>
            </div>
            <div class=\"col-md-2 pull-right\" style=\"padding-top: 14px;\">
                <ul class=\"nav navbar-nav connection-xs\">
                    <li>
                        <a href=\"javascript:void(0);\" class=\"icon\" id=\"btnResponsive\">
                            <i class=\"fa fa-bars\"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<div class=\"collapse navbar-collapse navbar-main-collapse\" id=\"collapse-navbar\">
    <ul class=\"nav navbar-nav\">
        <li class=\"separator hidden-xs\"></li>
        <li class=\"{% if this.page.id == 'agence' %}active{% endif %}\"><a href=\"{{ url('/') }}\">Home</a></li>
        <li class=\"{% if this.page.id == 'agence' %}active{% endif %}\"><a href=\"{{ url('agence/create-publication') }}\">Créez une publiation</a></li>
        <li class=\"{% if this.page.id == 'agence' %}active{% endif %}\"><a href=\"{{ url('agence/publications') }}\">Mes publications</a></li>
        <li class=\"{% if this.page.id == 'agence' %}active{% endif %}\"><a href=\"{{ url('agence/account') }}\">Mon compte</a></li>
        <li class=\"{% if this.page.id == 'agence' %}active{% endif %}\"><a href=\"{{ url('logout') }}\">Se déconnectez</a></li>
    </ul>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/header_agence.htm", "");
    }
}

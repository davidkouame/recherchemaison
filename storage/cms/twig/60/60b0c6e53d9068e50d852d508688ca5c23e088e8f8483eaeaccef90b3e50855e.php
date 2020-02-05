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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/agence_navbar.htm */
class __TwigTemplate_bf61b7c41dc4f52164ffe10ca2ca3a1fdd662ca596733a91ae3d33408ed49ba3 extends \Twig\Template
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
        echo "<ul>
    <li><a href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("agence/create_publication");
        echo "\">creer une publication</a></li>
    <li><a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("agence/publications");
        echo "\">mes publications</a></li>
    <li><a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("agence/account");
        echo "\">Mon compte</a></li>
    <li><a href=\"";
        // line 5
        echo url("logout");
        echo "\">Déconnexion</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/agence_navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    <li><a href=\"{{ 'agence/create_publication'|page }}\">creer une publication</a></li>
    <li><a href=\"{{ 'agence/publications'|page }}\">mes publications</a></li>
    <li><a href=\"{{ 'agence/account'|page }}\">Mon compte</a></li>
    <li><a href=\"{{ url('logout') }}\">Déconnexion</a></li>
</ul>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/agence_navbar.htm", "");
    }
}

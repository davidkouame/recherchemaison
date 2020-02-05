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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/demarcheur_navbar.htm */
class __TwigTemplate_fe637c89baf1deb34c49d2aeb4814aa21e34b7354f2273e598f78230683421f4 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("demarcheur/create_publication");
        echo "\">creer une publication</a></li>
    <li><a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("demarcheur/publications");
        echo "\">mes publications</a></li>
    <li><a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("demarcheur/account");
        echo "\">Mon compte</a></li>
    <li><a href=\"";
        // line 5
        echo url("logout");
        echo "\">Déconnexion</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/demarcheur_navbar.htm";
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
    <li><a href=\"{{ 'demarcheur/create_publication'|page }}\">creer une publication</a></li>
    <li><a href=\"{{ 'demarcheur/publications'|page }}\">mes publications</a></li>
    <li><a href=\"{{ 'demarcheur/account'|page }}\">Mon compte</a></li>
    <li><a href=\"{{ url('logout') }}\">Déconnexion</a></li>
</ul>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/demarcheur_navbar.htm", "");
    }
}

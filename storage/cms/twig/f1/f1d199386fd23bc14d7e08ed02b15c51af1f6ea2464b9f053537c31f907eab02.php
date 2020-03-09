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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/welcome_after_register.htm */
class __TwigTemplate_9571eb046e6380d177bd93e56ca8339a2c1eb00d415dbc3c5f000ead51a26893 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12 alert alert-success\" style=\"text-align: center;\">
            Votre demande d'inscription a été prise en compte avec success . Merci de patienter pendant que nous analysons votre demande .
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/welcome_after_register.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12 alert alert-success\" style=\"text-align: center;\">
            Votre demande d'inscription a été prise en compte avec success . Merci de patienter pendant que nous analysons votre demande .
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/welcome_after_register.htm", "");
    }
}

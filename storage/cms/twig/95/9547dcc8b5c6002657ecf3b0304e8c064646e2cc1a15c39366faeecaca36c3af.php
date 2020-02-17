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

/* /Applications/MAMP/htdocs/recherchemaison/plugins/rainlab/user/components/resetpassword/complete.htm */
class __TwigTemplate_600c7ffb1461d6ee9fae6782836f2b6314ecf7e92b8fd30a480214da55f1fcaa extends \Twig\Template
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
        echo "<p class=\"lead\" style=\"text-align: center;\">
    Votre mot de passe a été réinitialisé . Vous pouvez vous connecter.
</p>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/plugins/rainlab/user/components/resetpassword/complete.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"lead\" style=\"text-align: center;\">
    Votre mot de passe a été réinitialisé . Vous pouvez vous connecter.
</p>", "/Applications/MAMP/htdocs/recherchemaison/plugins/rainlab/user/components/resetpassword/complete.htm", "");
    }
}

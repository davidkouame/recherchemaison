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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/logout.htm */
class __TwigTemplate_6e5c7e6ddbae531d92d80d6eafdd6af3dceb4582ef2558b345ccb98be565dd35 extends \Twig\Template
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
        echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam iusto nisi vitae dicta unde illo officiis sit, at quasi dolore, quaerat atque mollitia! Odio ullam officia velit, hic fugiat repellendus.";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/logout.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam iusto nisi vitae dicta unde illo officiis sit, at quasi dolore, quaerat atque mollitia! Odio ullam officia velit, hic fugiat repellendus.", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/logout.htm", "");
    }
}

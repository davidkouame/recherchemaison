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

/* /Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/register/default.htm */
class __TwigTemplate_b1a87537eedcd6bf09f649640a377ba4b14e6a543c49e6717b19838a7166b015 extends \Twig\Template
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
        echo "<div class=\"row\" style=\"margin-top: 40px;\">
    <form class=\"col-md-offset-2 col-md-8\" role=\"form\" data-request=\"onCreateUserFirstStep\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <input
                    type=\"text\"
                    class=\"form-control\"
                    name=\"nom\"
                    placeholder=\"Entrer un nom\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <input
                    type=\"text\"
                    class=\"form-control\"
                    name=\"prenom\"
                    placeholder=\"Entrer un prénom\"
                />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <input
                    type=\"email\"
                    class=\"form-control\"
                    name=\"email\"
                    placeholder=\"Entrer un email\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <input
                    type=\"number\"
                    class=\"form-control\"
                    name=\"tel1\"
                    placeholder=\"Entrer un tel \"
                />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <input
                    type=\"password\"
                    class=\"form-control\"
                    name=\"password\"
                    placeholder=\"Entrer un password\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <input
                    type=\"password\"
                    class=\"form-control\"
                    name=\"retype_password\"
                    placeholder=\"Retaper le password\"
                />
            </div>
        </div>
        <a href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">j'ai déja un compte </a> </br>
        <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Inscrivez vous</button>
      </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/register/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 57,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"margin-top: 40px;\">
    <form class=\"col-md-offset-2 col-md-8\" role=\"form\" data-request=\"onCreateUserFirstStep\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <input
                    type=\"text\"
                    class=\"form-control\"
                    name=\"nom\"
                    placeholder=\"Entrer un nom\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <input
                    type=\"text\"
                    class=\"form-control\"
                    name=\"prenom\"
                    placeholder=\"Entrer un prénom\"
                />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <input
                    type=\"email\"
                    class=\"form-control\"
                    name=\"email\"
                    placeholder=\"Entrer un email\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <input
                    type=\"number\"
                    class=\"form-control\"
                    name=\"tel1\"
                    placeholder=\"Entrer un tel \"
                />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <input
                    type=\"password\"
                    class=\"form-control\"
                    name=\"password\"
                    placeholder=\"Entrer un password\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <input
                    type=\"password\"
                    class=\"form-control\"
                    name=\"retype_password\"
                    placeholder=\"Retaper le password\"
                />
            </div>
        </div>
        <a href=\"{{ 'login'|page }}\">j'ai déja un compte </a> </br>
        <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Inscrivez vous</button>
      </form>
</div>", "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/register/default.htm", "");
    }
}

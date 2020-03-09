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

/* /Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/register/register.htm */
class __TwigTemplate_97c41de9b9dba8e5c143bec277516590ae31866821dcca08b23383115a4047c1 extends \Twig\Template
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
    a:hover{
        text-decoration: none;
    }
</style>

<div class=\"row\" style=\"margin-top: 40px;\">
    <div class=\"col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8\">
        <h3 style=\"margin: 0px;font-weight: bold;text-align: center;\">Inscription</h3>
        <hr style=\"margin-top: 10px;\">
    </div>
    <form class=\"col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8\" role=\"form\" data-request=\"onCreateUserFirstStep\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nom <span class=\"required\">*</span></label>
                <input
                    type=\"text\"
                    class=\"form-control\"
                    name=\"nom\"
                    placeholder=\"Entrer un nom\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Prénom <span class=\"required\">*</span></label>
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
                <label for=\"\">Email <span class=\"required\">*</span></label>
                <input
                    type=\"email\"
                    class=\"form-control\"
                    name=\"email\"
                    placeholder=\"Entrer un email\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Télephone <span class=\"required\">*</span></label>
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
                <label for=\"\">Password <span class=\"required\">*</span></label>
                <input
                    type=\"password\"
                    class=\"form-control\"
                    name=\"password\"
                    placeholder=\"Entrer un password\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Retaper le password <span class=\"required\">*</span></label>
                <input
                    type=\"password\"
                    class=\"form-control\"
                    name=\"password_confirmation\"
                    placeholder=\"Retaper le password\"
                />
            </div>
        </div>
        <div class=\"col-md-12\" style=\"text-align: center;\">
            <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Inscrivez vous</button>
            <br>
            <a href=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">j'ai déja un compte </a>
        </div>
      </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/register/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 76,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    a:hover{
        text-decoration: none;
    }
</style>

<div class=\"row\" style=\"margin-top: 40px;\">
    <div class=\"col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8\">
        <h3 style=\"margin: 0px;font-weight: bold;text-align: center;\">Inscription</h3>
        <hr style=\"margin-top: 10px;\">
    </div>
    <form class=\"col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8\" role=\"form\" data-request=\"onCreateUserFirstStep\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nom <span class=\"required\">*</span></label>
                <input
                    type=\"text\"
                    class=\"form-control\"
                    name=\"nom\"
                    placeholder=\"Entrer un nom\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Prénom <span class=\"required\">*</span></label>
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
                <label for=\"\">Email <span class=\"required\">*</span></label>
                <input
                    type=\"email\"
                    class=\"form-control\"
                    name=\"email\"
                    placeholder=\"Entrer un email\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Télephone <span class=\"required\">*</span></label>
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
                <label for=\"\">Password <span class=\"required\">*</span></label>
                <input
                    type=\"password\"
                    class=\"form-control\"
                    name=\"password\"
                    placeholder=\"Entrer un password\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Retaper le password <span class=\"required\">*</span></label>
                <input
                    type=\"password\"
                    class=\"form-control\"
                    name=\"password_confirmation\"
                    placeholder=\"Retaper le password\"
                />
            </div>
        </div>
        <div class=\"col-md-12\" style=\"text-align: center;\">
            <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Inscrivez vous</button>
            <br>
            <a href=\"{{ 'login'|page }}\">j'ai déja un compte </a>
        </div>
      </form>
</div>", "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/register/register.htm", "");
    }
}

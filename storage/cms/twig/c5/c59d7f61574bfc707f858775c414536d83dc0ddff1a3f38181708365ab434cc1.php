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

/* /Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/createdemarcheur/default.htm */
class __TwigTemplate_a2cf24d1e5efeb514c9bdc540e119b78dda462844f6bd7d588287aeb66686820 extends \Twig\Template
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
    <form class=\"col-md-offset-2 col-md-8\" role=\"form\" data-request=\"onCreateDemarcheur\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <input
                    type=\"number\"
                    class=\"form-control\"
                    name=\"tel1\"
                    placeholder=\"Entrer un tel 1\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <input
                    type=\"number\"
                    class=\"form-control\"
                    name=\"tel2\"
                    placeholder=\"Entrer un tel 2\"
                />
            </div>
        </div>
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
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("demarcheur/login_demarcheur");
        echo "\">j'ai déja un compte agence </a> </br>
        <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Inscrivez vous</button>
      </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/createdemarcheur/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 67,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"margin-top: 40px;\">
    <form class=\"col-md-offset-2 col-md-8\" role=\"form\" data-request=\"onCreateDemarcheur\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <input
                    type=\"number\"
                    class=\"form-control\"
                    name=\"tel1\"
                    placeholder=\"Entrer un tel 1\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <input
                    type=\"number\"
                    class=\"form-control\"
                    name=\"tel2\"
                    placeholder=\"Entrer un tel 2\"
                />
            </div>
        </div>
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
        <a href=\"{{ 'demarcheur/login_demarcheur'|page }}\">j'ai déja un compte agence </a> </br>
        <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Inscrivez vous</button>
      </form>
</div>", "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/createdemarcheur/default.htm", "");
    }
}

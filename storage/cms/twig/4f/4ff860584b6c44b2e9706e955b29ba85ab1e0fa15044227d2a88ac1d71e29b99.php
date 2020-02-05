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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/demarcheur/account.htm */
class __TwigTemplate_72064b448dcfe2e6d026d9872835ac61bdaeb06617f8bf1fc376ce6749b7b8b9 extends \Twig\Template
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
    <form class=\"col-md-12\" role=\"form\" data-request=\"onUpdateDemarcheur\">
        <label for=\"\">Information sur le demarcheur</label>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <input
                    type=\"number\"
                    class=\"form-control\"
                    name=\"tel1\"
                    placeholder=\"Entrer un tel 1\"
                    value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demarcheur"] ?? null), "tel", [], "any", false, false, false, 11), "html", null, true);
        echo "\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <input
                    type=\"number\"
                    class=\"form-control\"
                    name=\"tel2\"
                    placeholder=\"Entrer un tel 2\"
                    value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demarcheur"] ?? null), "tel2", [], "any", false, false, false, 20), "html", null, true);
        echo "\"
                />
            </div>
        </div>
        <label for=\"\">Information sur l'utilisateur du  compte</label>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <input
                    type=\"text\"
                    class=\"form-control\"
                    name=\"nom\"
                    placeholder=\"Entrer un nom\"
                    value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demarcheur"] ?? null), "nom", [], "any", false, false, false, 32), "html", null, true);
        echo "\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <input
                    type=\"text\"
                    class=\"form-control\"
                    name=\"prenom\"
                    placeholder=\"Entrer un prénom\"
                    value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["demarcheur"] ?? null), "prenom", [], "any", false, false, false, 41), "html", null, true);
        echo "\"
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
                    value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["demarcheur"] ?? null), "user", [], "any", false, false, false, 52), "email", [], "any", false, false, false, 52), "html", null, true);
        echo "\"
                    disabled
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
                    name=\"password_confirmation\"
                    placeholder=\"Retaper le password\"
                />
            </div>
        </div>
        <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Modifier</button>
      </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/demarcheur/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 52,  88 => 41,  76 => 32,  61 => 20,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"margin-top: 40px;\">
    <form class=\"col-md-12\" role=\"form\" data-request=\"onUpdateDemarcheur\">
        <label for=\"\">Information sur le demarcheur</label>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <input
                    type=\"number\"
                    class=\"form-control\"
                    name=\"tel1\"
                    placeholder=\"Entrer un tel 1\"
                    value=\"{{ demarcheur.tel }}\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <input
                    type=\"number\"
                    class=\"form-control\"
                    name=\"tel2\"
                    placeholder=\"Entrer un tel 2\"
                    value=\"{{ demarcheur.tel2 }}\"
                />
            </div>
        </div>
        <label for=\"\">Information sur l'utilisateur du  compte</label>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <input
                    type=\"text\"
                    class=\"form-control\"
                    name=\"nom\"
                    placeholder=\"Entrer un nom\"
                    value=\"{{ demarcheur.nom }}\"
                />
            </div>
            <div class=\"form-group col-md-6\">
                <input
                    type=\"text\"
                    class=\"form-control\"
                    name=\"prenom\"
                    placeholder=\"Entrer un prénom\"
                    value=\"{{ demarcheur.prenom }}\"
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
                    value=\"{{ demarcheur.user.email }}\"
                    disabled
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
                    name=\"password_confirmation\"
                    placeholder=\"Retaper le password\"
                />
            </div>
        </div>
        <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Modifier</button>
      </form>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/demarcheur/account.htm", "");
    }
}

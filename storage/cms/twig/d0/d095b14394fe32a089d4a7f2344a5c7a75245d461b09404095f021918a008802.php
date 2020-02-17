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

/* /Applications/MAMP/htdocs/recherchemaison/plugins/rainlab/user/components/resetpassword/reset.htm */
class __TwigTemplate_ea0ba51f4c305d1a3a472f0bad254dfbd239ac1ffcf8b02491fb42a5f159c676 extends \Twig\Template
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
    Veuillez vérifier votre adresse électronique, un code d'activation vous a été envoyé.
</p>

<form data-request=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onResetPassword\"
    data-request-update=\"'";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::complete': '#partialUserResetForm'\" class=\"row\">
    <div class=\"col-md-offset-2 col-md-8\">
        <div class=\"form-group col-md-4\">
            <label for=\"resetCode\">Code d'activation</label>
            <input name=\"code\" type=\"text\" class=\"form-control\" id=\"resetCode\" placeholder=\"Entrez le code d'activation\"
                value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "code", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group col-md-4\">
            <label for=\"resetPassword\">Nouveau mot de passe</label>
            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"resetPassword\"
                placeholder=\"Entrez un nouveau mot de passe\">
        </div>
        <button type=\"submit\" class=\"btn btn-default col-md-3\" style=\"margin-top: 31px;\">Réinitialisez le mot de passe</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/plugins/rainlab/user/components/resetpassword/reset.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"lead\" style=\"text-align: center;\">
    Veuillez vérifier votre adresse électronique, un code d'activation vous a été envoyé.
</p>

<form data-request=\"{{ __SELF__ }}::onResetPassword\"
    data-request-update=\"'{{ __SELF__ }}::complete': '#partialUserResetForm'\" class=\"row\">
    <div class=\"col-md-offset-2 col-md-8\">
        <div class=\"form-group col-md-4\">
            <label for=\"resetCode\">Code d'activation</label>
            <input name=\"code\" type=\"text\" class=\"form-control\" id=\"resetCode\" placeholder=\"Entrez le code d'activation\"
                value=\"{{ __SELF__.code }}\">
        </div>
        <div class=\"form-group col-md-4\">
            <label for=\"resetPassword\">Nouveau mot de passe</label>
            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"resetPassword\"
                placeholder=\"Entrez un nouveau mot de passe\">
        </div>
        <button type=\"submit\" class=\"btn btn-default col-md-3\" style=\"margin-top: 31px;\">Réinitialisez le mot de passe</button>
    </div>
</form>", "/Applications/MAMP/htdocs/recherchemaison/plugins/rainlab/user/components/resetpassword/reset.htm", "");
    }
}

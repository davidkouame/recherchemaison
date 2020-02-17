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

/* /Applications/MAMP/htdocs/recherchemaison/plugins/rainlab/user/components/resetpassword/restore.htm */
class __TwigTemplate_49ca1c9fa8efc0d31b2c2620d96a6d63d557cd3ee52aeb761ac738e02c5fa759 extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-offset-2 col-md-8\">
        <p class=\"lead\" style=\"text-align: center;\">
            <strong>Vous avez oublier votre mot de passe?</strong> 
            <br>
            Pas de problème! Entrez votre email  pour vérifier votre compte.
        </p>
        
        <div class=\"row\">
                <form
                    data-request=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRestorePassword\"
                    data-request-update=\"'";
        // line 12
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::reset': '#partialUserResetForm'\"
                    class=\"col-md-12\"
                    style=\"margin-left: 15%;\">
                    <div class=\"form-group col-md-4\">
                        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userRestoreEmail\" placeholder=\"Entrez votre email\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default col-md-4\">Restorer votre mot de passe</button>
                </form>
        </div>
        
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/plugins/rainlab/user/components/resetpassword/restore.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-md-offset-2 col-md-8\">
        <p class=\"lead\" style=\"text-align: center;\">
            <strong>Vous avez oublier votre mot de passe?</strong> 
            <br>
            Pas de problème! Entrez votre email  pour vérifier votre compte.
        </p>
        
        <div class=\"row\">
                <form
                    data-request=\"{{ __SELF__ }}::onRestorePassword\"
                    data-request-update=\"'{{ __SELF__ }}::reset': '#partialUserResetForm'\"
                    class=\"col-md-12\"
                    style=\"margin-left: 15%;\">
                    <div class=\"form-group col-md-4\">
                        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userRestoreEmail\" placeholder=\"Entrez votre email\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default col-md-4\">Restorer votre mot de passe</button>
                </form>
        </div>
        
    </div>
</div>", "/Applications/MAMP/htdocs/recherchemaison/plugins/rainlab/user/components/resetpassword/restore.htm", "");
    }
}

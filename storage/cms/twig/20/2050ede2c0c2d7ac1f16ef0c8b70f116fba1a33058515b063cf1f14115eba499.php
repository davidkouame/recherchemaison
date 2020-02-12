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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/login.htm */
class __TwigTemplate_d786c5abcb04283efd267229ed2a66921a2849a7d71326cd770cdb482e703b84 extends \Twig\Template
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

<div class=\"row\"  style=\"margin-top: 40px;\">
  <div class=\"col-xs-offset-2 col-xs-8 col-md-offset-4 col-sm-offset-3 col-sm-6 col-md-4\">
    <h3 style=\"margin: 0px;font-weight: bold;text-align: center;\">Connexion</h3>
    <hr style=\"margin-top: 10px;\">
</div>
  <form class=\"col-md-offset-4 col-sm-offset-3 col-xs-offset-2 col-xs-8 col-sm-6 col-md-4\" role=\"form\" data-request=\"onSignin\">
      <div class=\"form-group\">
        <input
          type=\"text\"
          class=\"form-control\"
          placeholder=\"Entrer un email\"
          name=\"email\"
        />
      </div>
      <div class=\"form-group\">
        <input
          type=\"password\"
          class=\"form-control\"
          placeholder=\"Password\"
          name=\"password\"
        />
      </div>
      <!--<a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
        echo "\">je n'ai pas de compte </a> </br>-->
      <div class=\"col-md-12\" style=\"text-align: center;\">
        <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Connectez vous</button>
        <br>
        <a href=\"";
        // line 33
        echo url("auth/forget-password");
        echo "\"> j'ai oublié mon mot de passe</a>
      </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  67 => 29,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
  a:hover{
      text-decoration: none;
  }
</style>

<div class=\"row\"  style=\"margin-top: 40px;\">
  <div class=\"col-xs-offset-2 col-xs-8 col-md-offset-4 col-sm-offset-3 col-sm-6 col-md-4\">
    <h3 style=\"margin: 0px;font-weight: bold;text-align: center;\">Connexion</h3>
    <hr style=\"margin-top: 10px;\">
</div>
  <form class=\"col-md-offset-4 col-sm-offset-3 col-xs-offset-2 col-xs-8 col-sm-6 col-md-4\" role=\"form\" data-request=\"onSignin\">
      <div class=\"form-group\">
        <input
          type=\"text\"
          class=\"form-control\"
          placeholder=\"Entrer un email\"
          name=\"email\"
        />
      </div>
      <div class=\"form-group\">
        <input
          type=\"password\"
          class=\"form-control\"
          placeholder=\"Password\"
          name=\"password\"
        />
      </div>
      <!--<a href=\"{{ 'register'|page }}\">je n'ai pas de compte </a> </br>-->
      <div class=\"col-md-12\" style=\"text-align: center;\">
        <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Connectez vous</button>
        <br>
        <a href=\"{{ url('auth/forget-password') }}\"> j'ai oublié mon mot de passe</a>
      </div>
    </form>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/login.htm", "");
    }
}

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
        echo "<div class=\"row\"  style=\"margin-top: 40px;\">
  <form class=\"col-md-offset-4 col-md-4\" role=\"form\" data-request=\"onSignin\">
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
      <a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
        echo "\">je n'ai pas de compte </a> </br>
      <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Connectez vous</button>
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
        return array (  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\"  style=\"margin-top: 40px;\">
  <form class=\"col-md-offset-4 col-md-4\" role=\"form\" data-request=\"onSignin\">
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
      <a href=\"{{ 'register'|page }}\">je n'ai pas de compte </a> </br>
      <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Connectez vous</button>
    </form>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/login.htm", "");
    }
}

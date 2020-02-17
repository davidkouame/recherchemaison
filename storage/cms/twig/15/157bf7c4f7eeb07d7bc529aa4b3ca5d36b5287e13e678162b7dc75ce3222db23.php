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

/* /Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/register/first_step.htm */
class __TwigTemplate_8593a7daba71251c4786ac1a60a218f7308df83c5df575b16b79b51030b6e696 extends \Twig\Template
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
    #layout-nav .container{
        height: 60px;
    }
</style>
<div class=\"container\" >
    <form class=\"row\" role=\"form\" data-request=\"onCreateUserTwoStep\">
        <div class=\"col-xs-offset-4 col-sm-6 col-xs-offset-4 col-sm-6 col-md-offset-4 col-md-6\">
            <div class=\"radio\"  style=\"display: inline-block;\">
            <label><input type=\"radio\" name=\"typeuser\" value=\"2\" checked>Je suis un démarcheur</label>
            </div>
            <div class=\"radio\" style=\"display: inline-block;\">
                <label><input type=\"radio\" name=\"typeuser\" value=\"1\">Je suis une agence</label>
            </div>
        </div>
        <!-- Agence -->
        <div class=\"col-md-offset-2 col-md-8\" id=\"agence_first_login\" style=\"display: none;\">
            <h3 style=\"text-align: center;\">Information de l'agence</h3>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"\">Libellé de l'agence <span class=\"required\">*</span></label>
                    <input
                        type=\"text\"
                        class=\"form-control\"
                        name=\"libelle\"
                        placeholder=\"Entrer un libellé\"
                    />
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"\">Email de l'agence <span class=\"required\">*</span></label>
                    <input
                        type=\"email\"
                        class=\"form-control\"
                        name=\"email_agence\"
                        placeholder=\"Entrer un email\"
                    />
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"\">Localisation de l'agence <span class=\"required\">*</span></label>
                    <select name=\"localisation_agence_id\" class=\"form-control\">
                        <option value=\"\">Choisir une localisation</option>
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 43
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 43), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </select>
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"\">Site internet de l'agence</label>
                    <input
                        type=\"text\"
                        class=\"form-control\"
                        name=\"sitenternet\"
                        placeholder=\"Entrer un site internet\"
                    />
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Terminez l'inscription</button>
        </div>
        <!-- Démarcheur -->
        <div class=\"col-md-offset-2 col-md-8\" id=\"demarcheur_first_login\">
            <h3 style=\"text-align: center;\">Information du démarcheur</h3>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"\">Localisation</label>
                    <select name=\"localisation_id\" id=\"\" class=\"form-control\">
                        <option value=\"\">Choisir une localisation</option>
                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 68
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 68), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </select>
                </div>
                <!--<div class=\"form-group col-md-6\">
                    <label for=\"\">Téléphone 1</label>
                    <input
                        type=\"text\"
                        class=\"form-control\"
                        name=\"tel1\"
                        placeholder=\"Entrer un tépléphone 1\"
                    />
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"\">Téléphone 2</label>
                    <input
                        type=\"text\"
                        class=\"form-control\"
                        name=\"tel2\"
                        placeholder=\"Entrer un téléphone 2\"
                    />
                </div>-->
            </div>
            <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Terminez l'inscription</button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/register/first_step.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 70,  123 => 68,  119 => 67,  95 => 45,  84 => 43,  80 => 42,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    #layout-nav .container{
        height: 60px;
    }
</style>
<div class=\"container\" >
    <form class=\"row\" role=\"form\" data-request=\"onCreateUserTwoStep\">
        <div class=\"col-xs-offset-4 col-sm-6 col-xs-offset-4 col-sm-6 col-md-offset-4 col-md-6\">
            <div class=\"radio\"  style=\"display: inline-block;\">
            <label><input type=\"radio\" name=\"typeuser\" value=\"2\" checked>Je suis un démarcheur</label>
            </div>
            <div class=\"radio\" style=\"display: inline-block;\">
                <label><input type=\"radio\" name=\"typeuser\" value=\"1\">Je suis une agence</label>
            </div>
        </div>
        <!-- Agence -->
        <div class=\"col-md-offset-2 col-md-8\" id=\"agence_first_login\" style=\"display: none;\">
            <h3 style=\"text-align: center;\">Information de l'agence</h3>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"\">Libellé de l'agence <span class=\"required\">*</span></label>
                    <input
                        type=\"text\"
                        class=\"form-control\"
                        name=\"libelle\"
                        placeholder=\"Entrer un libellé\"
                    />
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"\">Email de l'agence <span class=\"required\">*</span></label>
                    <input
                        type=\"email\"
                        class=\"form-control\"
                        name=\"email_agence\"
                        placeholder=\"Entrer un email\"
                    />
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"\">Localisation de l'agence <span class=\"required\">*</span></label>
                    <select name=\"localisation_agence_id\" class=\"form-control\">
                        <option value=\"\">Choisir une localisation</option>
                        {% for localisation in localisations %}
                            <option value=\"{{ localisation.id }}\">{{ localisation.libelle }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"\">Site internet de l'agence</label>
                    <input
                        type=\"text\"
                        class=\"form-control\"
                        name=\"sitenternet\"
                        placeholder=\"Entrer un site internet\"
                    />
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Terminez l'inscription</button>
        </div>
        <!-- Démarcheur -->
        <div class=\"col-md-offset-2 col-md-8\" id=\"demarcheur_first_login\">
            <h3 style=\"text-align: center;\">Information du démarcheur</h3>
            <div class=\"row\">
                <div class=\"form-group col-md-6\">
                    <label for=\"\">Localisation</label>
                    <select name=\"localisation_id\" id=\"\" class=\"form-control\">
                        <option value=\"\">Choisir une localisation</option>
                        {% for localisation in localisations %}
                            <option value=\"{{ localisation.id }}\">{{ localisation.libelle }}</option>
                        {% endfor %}
                    </select>
                </div>
                <!--<div class=\"form-group col-md-6\">
                    <label for=\"\">Téléphone 1</label>
                    <input
                        type=\"text\"
                        class=\"form-control\"
                        name=\"tel1\"
                        placeholder=\"Entrer un tépléphone 1\"
                    />
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"\">Téléphone 2</label>
                    <input
                        type=\"text\"
                        class=\"form-control\"
                        name=\"tel2\"
                        placeholder=\"Entrer un téléphone 2\"
                    />
                </div>-->
            </div>
            <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Terminez l'inscription</button>
        </div>
    </form>
</div>
", "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/register/first_step.htm", "");
    }
}

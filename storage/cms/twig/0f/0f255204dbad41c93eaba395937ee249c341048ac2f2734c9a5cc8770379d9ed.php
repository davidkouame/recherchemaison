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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/demarcheur/create_publication.htm */
class __TwigTemplate_73c5a94937ba5eebf0d48cc2539c939500b8d1475d9683a88e8a4b6a8a642cd0 extends \Twig\Template
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
    <h2>Publication d'une maison</h2>
    <br>
    <form class=\"col-md-12\" role=\"form\" data-request=\"onCreatePublicationMaison\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Commune</label>
                <select name=\"commune_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une commune</option>
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["communes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
            // line 11
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commune"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commune"], "libelle", [], "any", false, false, false, 11), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Ville</label>
                <select name=\"ville_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une ville</option>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 20
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "libelle", [], "any", false, false, false, 20), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Localisation</label>
                <select name=\"localisation_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une localisation</option>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 31
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 31), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nom de la publication</label>
                <input
                    type=\"text\"
                    class=\"form-control\"
                    name=\"libelle\"
                    placeholder=\"Libellé\"
                />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nombre de pièce</label>
                <input
                    type=\"number\"
                    class=\"form-control\"
                    name=\"nbre_piece\"
                    placeholder=\"Entrer le nombre de pièce\"
                />
            </div>
        </div>
        <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Publiez</button>
      </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/demarcheur/create_publication.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  100 => 31,  96 => 30,  86 => 22,  75 => 20,  71 => 19,  63 => 13,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" style=\"margin-top: 40px;\">
    <h2>Publication d'une maison</h2>
    <br>
    <form class=\"col-md-12\" role=\"form\" data-request=\"onCreatePublicationMaison\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Commune</label>
                <select name=\"commune_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une commune</option>
                    {% for commune in communes %}
                        <option value=\"{{ commune.id }}\">{{ commune.libelle }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Ville</label>
                <select name=\"ville_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une ville</option>
                    {% for ville in villes %}
                        <option value=\"{{ ville.id }}\">{{ ville.libelle }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Localisation</label>
                <select name=\"localisation_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une localisation</option>
                    {% for localisation in localisations %}
                        <option value=\"{{ localisation.id }}\">{{ localisation.libelle }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nom de la publication</label>
                <input
                    type=\"text\"
                    class=\"form-control\"
                    name=\"libelle\"
                    placeholder=\"Libellé\"
                />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nombre de pièce</label>
                <input
                    type=\"number\"
                    class=\"form-control\"
                    name=\"nbre_piece\"
                    placeholder=\"Entrer le nombre de pièce\"
                />
            </div>
        </div>
        <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Publiez</button>
      </form>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/demarcheur/create_publication.htm", "");
    }
}

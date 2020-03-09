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

/* /Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/createpublicationmaison/default.htm */
class __TwigTemplate_1d9b324f68375d96cba103bd892541dc0d841bf4de9ece94450516cfc702c055 extends \Twig\Template
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
    .img-responsive {
        width: 50%;
        height: 200px;
        border: 2px dashed #ddd;
        border-radius: 3px;
        cursor: pointer;
        text-align: center;
        overflow: hidden;
        padding: 5px;
        margin-top: 5px;
        margin-bottom: 5px;
        position: relative;
        display: flex;
        align-items: center;
        margin: auto;
        justify-content: center;
        flex-direction: column;

    }

    .select2-selection.select2-selection--single{
        height: 34px;
    }
</style>

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
    integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 30
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 31
                echo "<div class=\"alert alert-success\" style=\"text-align: center;\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</div>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 33
        echo "<div class=\"row\" style=\"margin-top: 40px;\">
    <h2>Publication d'une maison</h2>
    <br>
    <form class=\"col-md-12\" id=\"form-create-publication\" role=\"form\" data-request=\"onCreatePublicationMaison\"
        data-request-files>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nom de la publication <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"form-control\" name=\"libelle\" placeholder=\"Libellé\" />
            </div>

            <div class=\"form-group col-md-6\">
                <label for=\"\">Ville <span class=\"required\">*</span></label>
                <select name=\"ville_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une ville </option>
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 49
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "libelle", [], "any", false, false, false, 49), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Localisation <span class=\"required\">*</span></label>
                <select name=\"localisation_id\" id=\"\" class=\"form-control select2\">
                    <option value=\"\">Sélectionnez une localisation</option>
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 60
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 60), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Commune <span class=\"required\">*</span></label>
                <select name=\"commune_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une commune</option>
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["communes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
            // line 69
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commune"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commune"], "libelle", [], "any", false, false, false, 69), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group col-md-12\" style=\"padding: 0px;\">
                    <label for=\"\">Nombre de pièce <span class=\"required\">*</span></label>
                    <input type=\"number\" class=\"form-control\" name=\"nbre_piece\" placeholder=\"Entrer le nombre de pièce\" />
                </div>
                <div class=\"form-group col-md-12\" style=\"padding: 0px;\">
                    <label for=\"prix\">Prix <span class=\"required\">*</span></label>
                    <input type=\"number\" class=\"form-control\" name=\"prix\" placeholder=\"Entrez le prix\" />
                </div>
            </div>
            <div class=\"form-group col-md-6 required\" data-request-files data-request-flash>
                <div id=\"imageResult\">
                    <img src=\"\" class=\"img-responsive\" />
                </div>
                <br><br>
                <label class=\"control-label\" for=\"registerPhoto\" style=\"padding-left: 25%;\">Ajouter un cover </label>
                <input type=\"file\" name=\"cover\" id=\"registerPhoto\" accept=\"image/*\" data-request=\"onImageUpload\"
                    data-request-files style=\"padding-left: 25%;\" />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-12\">
                <label for=\"\">Description <span class=\"required\">*</span></label>
                <textarea name=\"description\" class=\"form-control\" cols=\"30\" rows=\"10\"></textarea>
            </div>
        </div>
        <div class=\"row\">
            <label class=\"control-label col-md-3\">
                <h3>Upload des images</h3>
            </label>
            <div class=\"form-horizontal\">
                <div class=\"form-group\">
                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div id=\"coba\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

    <button type=\"submit\" class=\"btn btn-primary active pull-right\" data-attach-loading style=\"margin-top: 20px;\">Publiez</button>
</form>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/createpublicationmaison/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 71,  147 => 69,  143 => 68,  135 => 62,  124 => 60,  120 => 59,  110 => 51,  99 => 49,  95 => 48,  78 => 33,  71 => 31,  68 => 30,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .img-responsive {
        width: 50%;
        height: 200px;
        border: 2px dashed #ddd;
        border-radius: 3px;
        cursor: pointer;
        text-align: center;
        overflow: hidden;
        padding: 5px;
        margin-top: 5px;
        margin-bottom: 5px;
        position: relative;
        display: flex;
        align-items: center;
        margin: auto;
        justify-content: center;
        flex-direction: column;

    }

    .select2-selection.select2-selection--single{
        height: 34px;
    }
</style>

<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
    integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

{% flash %}
<div class=\"alert alert-success\" style=\"text-align: center;\">{{ message }}</div>
{% endflash %}
<div class=\"row\" style=\"margin-top: 40px;\">
    <h2>Publication d'une maison</h2>
    <br>
    <form class=\"col-md-12\" id=\"form-create-publication\" role=\"form\" data-request=\"onCreatePublicationMaison\"
        data-request-files>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nom de la publication <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"form-control\" name=\"libelle\" placeholder=\"Libellé\" />
            </div>

            <div class=\"form-group col-md-6\">
                <label for=\"\">Ville <span class=\"required\">*</span></label>
                <select name=\"ville_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une ville </option>
                    {% for ville in villes %}
                    <option value=\"{{ ville.id }}\">{{ ville.libelle }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Localisation <span class=\"required\">*</span></label>
                <select name=\"localisation_id\" id=\"\" class=\"form-control select2\">
                    <option value=\"\">Sélectionnez une localisation</option>
                    {% for localisation in localisations %}
                    <option value=\"{{ localisation.id }}\">{{ localisation.libelle }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Commune <span class=\"required\">*</span></label>
                <select name=\"commune_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une commune</option>
                    {% for commune in communes %}
                    <option value=\"{{ commune.id }}\">{{ commune.libelle }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"form-group col-md-12\" style=\"padding: 0px;\">
                    <label for=\"\">Nombre de pièce <span class=\"required\">*</span></label>
                    <input type=\"number\" class=\"form-control\" name=\"nbre_piece\" placeholder=\"Entrer le nombre de pièce\" />
                </div>
                <div class=\"form-group col-md-12\" style=\"padding: 0px;\">
                    <label for=\"prix\">Prix <span class=\"required\">*</span></label>
                    <input type=\"number\" class=\"form-control\" name=\"prix\" placeholder=\"Entrez le prix\" />
                </div>
            </div>
            <div class=\"form-group col-md-6 required\" data-request-files data-request-flash>
                <div id=\"imageResult\">
                    <img src=\"\" class=\"img-responsive\" />
                </div>
                <br><br>
                <label class=\"control-label\" for=\"registerPhoto\" style=\"padding-left: 25%;\">Ajouter un cover </label>
                <input type=\"file\" name=\"cover\" id=\"registerPhoto\" accept=\"image/*\" data-request=\"onImageUpload\"
                    data-request-files style=\"padding-left: 25%;\" />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-12\">
                <label for=\"\">Description <span class=\"required\">*</span></label>
                <textarea name=\"description\" class=\"form-control\" cols=\"30\" rows=\"10\"></textarea>
            </div>
        </div>
        <div class=\"row\">
            <label class=\"control-label col-md-3\">
                <h3>Upload des images</h3>
            </label>
            <div class=\"form-horizontal\">
                <div class=\"form-group\">
                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div id=\"coba\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

    <button type=\"submit\" class=\"btn btn-primary active pull-right\" data-attach-loading style=\"margin-top: 20px;\">Publiez</button>
</form>
</div>", "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/createpublicationmaison/default.htm", "");
    }
}

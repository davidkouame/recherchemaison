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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/agence/create_publication.htm */
class __TwigTemplate_240ea05a848dc02e90c8547d2cc34930d02d7d0ab19224f63e06072dfb706be4 extends \Twig\Template
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
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
<div class=\"row\" style=\"margin-top: 40px;\">
    <h2>Publication d'une maison</h2>
    <br>
    <form class=\"col-md-12\" id=\"form-create-publication\" role=\"form\" data-request=\"onCreatePublicationMaison\" data-request-files>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Commune</label>
                <select name=\"commune_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une commune</option>
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["communes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commune"]) {
            // line 12
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commune"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commune"], "libelle", [], "any", false, false, false, 12), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commune'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </select>
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Ville</label>
                <select name=\"ville_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une ville</option>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 21
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ville"], "libelle", [], "any", false, false, false, 21), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Localisation</label>
                <select name=\"localisation_id\" id=\"\" class=\"form-control\">
                    <option value=\"\">Sélectionnez une localisation</option>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 32
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 32), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
            <div class=\"form-group col-md-6 required\" data-request-files data-request-flash>
                <div id=\"imageResult\">  
                    <img src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.jpg");
        echo "\"  class=\"img-responsive\" width=\"150px\"/>
                </div>
                <br><br>
                <label class=\"control-label\"for=\"registerPhoto\">Cover </label>
                <input type=\"file\" name=\"cover\" 
                    id=\"registerPhoto\"
                    accept=\"image/*\" data-request=\"onImageUpload\" 
                    data-request-files  />
            </div> 
        </div>
        <div class=\"row\">
            <div class=\"form-horizontal\">
                <div class=\"form-group\">
                    <label class=\"control-label col-md-3\">Upload Image</label>
                    <div class=\"col-md-8\">
                        <div class=\"row\">
                            <div id=\"coba\"></div>
                        </div>
                    </div>
                </div>
            </div>\t
        </div>
    </div>

        <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Publiez</button>
      </form>      
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/agence/create_publication.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 58,  112 => 34,  101 => 32,  97 => 31,  87 => 23,  76 => 21,  72 => 20,  64 => 14,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
<div class=\"row\" style=\"margin-top: 40px;\">
    <h2>Publication d'une maison</h2>
    <br>
    <form class=\"col-md-12\" id=\"form-create-publication\" role=\"form\" data-request=\"onCreatePublicationMaison\" data-request-files>
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
            <div class=\"form-group col-md-6 required\" data-request-files data-request-flash>
                <div id=\"imageResult\">  
                    <img src=\"{{'assets/images/avatar.jpg'|theme}}\"  class=\"img-responsive\" width=\"150px\"/>
                </div>
                <br><br>
                <label class=\"control-label\"for=\"registerPhoto\">Cover </label>
                <input type=\"file\" name=\"cover\" 
                    id=\"registerPhoto\"
                    accept=\"image/*\" data-request=\"onImageUpload\" 
                    data-request-files  />
            </div> 
        </div>
        <div class=\"row\">
            <div class=\"form-horizontal\">
                <div class=\"form-group\">
                    <label class=\"control-label col-md-3\">Upload Image</label>
                    <div class=\"col-md-8\">
                        <div class=\"row\">
                            <div id=\"coba\"></div>
                        </div>
                    </div>
                </div>
            </div>\t
        </div>
    </div>

        <button type=\"submit\" class=\"btn btn-primary active\" data-attach-loading>Publiez</button>
      </form>      
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/agence/create_publication.htm", "");
    }
}

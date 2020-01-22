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

/* /Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/publications/detail.htm */
class __TwigTemplate_ae66ce4715c4a6dc739dafcfaa0cb814271343af91d9298dd9075399196ca722 extends \Twig\Template
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
                <input
                    type=\"text\"
                    class=\"form-control\"
                    value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "communes", [], "any", false, false, false, 11), "libelle", [], "any", false, false, false, 11), "html", null, true);
        echo "\"
                    disabled
                />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Ville</label>
                <input
                    type=\"text\"
                    class=\"form-control\"
                    value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "villes", [], "any", false, false, false, 20), "libelle", [], "any", false, false, false, 20), "html", null, true);
        echo "\"
                    disabled
                />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Localisation</label>
                <input
                    type=\"text\"
                    class=\"form-control\"
                    value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "localisations", [], "any", false, false, false, 31), "libelle", [], "any", false, false, false, 31), "html", null, true);
        echo "\"
                    disabled
                />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nom de la publication</label>
                <input
                    type=\"text\"
                    class=\"form-control\"
                    value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 40), "html", null, true);
        echo "\"
                    disabled
                />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nombre de pièce</label>
                <input
                    type=\"number\"
                    class=\"form-control\"
                    value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "nbre_piece", [], "any", false, false, false, 51), "html", null, true);
        echo "\"
                    disabled
                />
            </div>
            <div class=\"form-group col-md-6 required\" data-request-files data-request-flash>
                <div id=\"imageResult\">  
                    ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "cover", [], "any", false, false, false, 57)) {
            // line 58
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "cover", [], "any", false, false, false, 58), "path", [], "any", false, false, false, 58), "html", null, true);
            echo "\" alt=\"image\" class=\"img-responsive\" width=\"150px\" /> 
                    ";
        } else {
            // line 60
            echo "                        <img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.jpg");
            echo "\"  class=\"img-responsive\" width=\"150px\"/>
                    ";
        }
        // line 62
        echo "                </div>
              </div> 
            </div> 
        </div>
        <div class=\"row\">
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 68
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "path", [], "any", false, false, false, 68), "html", null, true);
            echo "\" alt=\"image\" class=\"img-responsive\" width=\"150px\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </div>
        <a href=\"";
        // line 71
        echo url((($context["modelUser"] ?? null) . "/publications"));
        echo "\" class=\"btn btn-primary\" >retour</a>
      </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/publications/detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 71,  144 => 70,  135 => 68,  131 => 67,  124 => 62,  118 => 60,  112 => 58,  110 => 57,  101 => 51,  87 => 40,  75 => 31,  61 => 20,  49 => 11,  37 => 1,);
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
                <input
                    type=\"text\"
                    class=\"form-control\"
                    value=\"{{ publication.communes.libelle }}\"
                    disabled
                />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Ville</label>
                <input
                    type=\"text\"
                    class=\"form-control\"
                    value=\"{{ publication.villes.libelle }}\"
                    disabled
                />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Localisation</label>
                <input
                    type=\"text\"
                    class=\"form-control\"
                    value=\"{{ publication.localisations.libelle }}\"
                    disabled
                />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nom de la publication</label>
                <input
                    type=\"text\"
                    class=\"form-control\"
                    value=\"{{ publication.libelle }}\"
                    disabled
                />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nombre de pièce</label>
                <input
                    type=\"number\"
                    class=\"form-control\"
                    value=\"{{ publication.nbre_piece }}\"
                    disabled
                />
            </div>
            <div class=\"form-group col-md-6 required\" data-request-files data-request-flash>
                <div id=\"imageResult\">  
                    {% if publication.cover %}
                        <img src=\"{{ publication.cover.path }}\" alt=\"image\" class=\"img-responsive\" width=\"150px\" /> 
                    {% else %}
                        <img src=\"{{'assets/images/avatar.jpg'|theme}}\"  class=\"img-responsive\" width=\"150px\"/>
                    {% endif %}
                </div>
              </div> 
            </div> 
        </div>
        <div class=\"row\">
            {% for photo in publication.photos %}
                <img src=\"{{ photo.path }}\" alt=\"image\" class=\"img-responsive\" width=\"150px\" />
            {% endfor %}
        </div>
        <a href=\"{{ url(modelUser~'/publications') }}\" class=\"btn btn-primary\" >retour</a>
      </form>
</div>
", "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/publications/detail.htm", "");
    }
}

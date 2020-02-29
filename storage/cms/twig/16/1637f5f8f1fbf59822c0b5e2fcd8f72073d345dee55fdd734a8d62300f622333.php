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
        echo "<style>
    .container-p P {
        margin-bottom: 0px;
    }

    .price-date .price {
        margin-bottom: 0px;
    }

    a:hover {
        text-decoration: none;
    }
</style>

<div class=\"row\" style=\"margin-top: 40px;\">
    <h2>Publication d'une maison</h2>
    <br>
    <form class=\"col-md-12\" role=\"form\" data-request=\"onCreatePublicationMaison\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Commune</label>
                <input type=\"text\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "communes", [], "any", false, false, false, 22), "libelle", [], "any", false, false, false, 22), "html", null, true);
        echo "\" disabled />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Ville</label>
                <input type=\"text\" class=\"form-control\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "villes", [], "any", false, false, false, 26), "libelle", [], "any", false, false, false, 26), "html", null, true);
        echo "\" disabled />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Localisation</label>
                <input type=\"text\" class=\"form-control\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "localisations", [], "any", false, false, false, 32), "libelle", [], "any", false, false, false, 32), "html", null, true);
        echo "\" disabled />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nom de la publication</label>
                <input type=\"text\" class=\"form-control\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 36), "html", null, true);
        echo "\" disabled />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nombre de pièce</label>
                <input type=\"number\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "nbre_piece", [], "any", false, false, false, 42), "html", null, true);
        echo "\" disabled />
            </div>
            ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "cover", [], "any", false, false, false, 44)) {
            // line 45
            echo "            <div class=\"form-group col-md-6 required\" data-request-files data-request-flash style=\"padding-top: 10px\">
                <label class=\"control-label col-md-1\" for=\"registerPhoto\" style=\"color: black;\">Cover </label>
                <div id=\"imageResult\" class=\"col-md-8\">
                    ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "cover", [], "any", false, false, false, 48)) {
                // line 49
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "cover", [], "any", false, false, false, 49), "path", [], "any", false, false, false, 49), "html", null, true);
                echo "\" alt=\"image\" class=\"img-responsive\" width=\"150px\" />
                    ";
            } else {
                // line 51
                echo "                    <img src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/avatar.jpg");
                echo "\" class=\"img-responsive\" width=\"150px\" />
                    ";
            }
            // line 53
            echo "                </div>
            </div>
            ";
        }
        // line 56
        echo "        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-12\">
                <label for=\"\">Description</label>
                <textarea class=\"form-control\" cols=\"30\" rows=\"10\" disabled>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "description", [], "any", false, false, false, 60), "html", null, true);
        echo "</textarea>
            </div>
        </div>
</div>
";
        // line 64
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 64)) > 0)) {
            // line 65
            echo "    <div class=\"row\">
        <label class=\"control-label\">
            <h3>Upload des images</h3>
        </label>
        <section class=\"row\" style=\"margin-top: 20px\">
            ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 71
                echo "            <div class=\"col-lg-3 col-sm-4 col-xs-6 col-md-4\" id=\"first-publication-recommande\">
                <a href=\"javascript:void(0)\">
                    <div class=\"polaroid\">
                        <img src=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getpath", [], "any", false, false, false, 74), "html", null, true);
                echo "\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                    </div>
                </a>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "        </section>
    </div>
";
        }
        // line 82
        echo "<a href=\"";
        echo url((($context["modelUser"] ?? null) . "/publications"));
        echo "\" class=\"btn btn-primary pull-right\">retour</a>
</form>
</div>";
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
        return array (  170 => 82,  165 => 79,  154 => 74,  149 => 71,  145 => 70,  138 => 65,  136 => 64,  129 => 60,  123 => 56,  118 => 53,  112 => 51,  106 => 49,  104 => 48,  99 => 45,  97 => 44,  92 => 42,  83 => 36,  76 => 32,  67 => 26,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .container-p P {
        margin-bottom: 0px;
    }

    .price-date .price {
        margin-bottom: 0px;
    }

    a:hover {
        text-decoration: none;
    }
</style>

<div class=\"row\" style=\"margin-top: 40px;\">
    <h2>Publication d'une maison</h2>
    <br>
    <form class=\"col-md-12\" role=\"form\" data-request=\"onCreatePublicationMaison\">
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Commune</label>
                <input type=\"text\" class=\"form-control\" value=\"{{ publication.communes.libelle }}\" disabled />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Ville</label>
                <input type=\"text\" class=\"form-control\" value=\"{{ publication.villes.libelle }}\" disabled />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Localisation</label>
                <input type=\"text\" class=\"form-control\" value=\"{{ publication.localisations.libelle }}\" disabled />
            </div>
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nom de la publication</label>
                <input type=\"text\" class=\"form-control\" value=\"{{ publication.libelle }}\" disabled />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6\">
                <label for=\"\">Nombre de pièce</label>
                <input type=\"number\" class=\"form-control\" value=\"{{ publication.nbre_piece }}\" disabled />
            </div>
            {% if publication.cover %}
            <div class=\"form-group col-md-6 required\" data-request-files data-request-flash style=\"padding-top: 10px\">
                <label class=\"control-label col-md-1\" for=\"registerPhoto\" style=\"color: black;\">Cover </label>
                <div id=\"imageResult\" class=\"col-md-8\">
                    {% if publication.cover %}
                    <img src=\"{{ publication.cover.path }}\" alt=\"image\" class=\"img-responsive\" width=\"150px\" />
                    {% else %}
                    <img src=\"{{'assets/images/avatar.jpg'|theme}}\" class=\"img-responsive\" width=\"150px\" />
                    {% endif %}
                </div>
            </div>
            {% endif %}
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-12\">
                <label for=\"\">Description</label>
                <textarea class=\"form-control\" cols=\"30\" rows=\"10\" disabled>{{ publication.description }}</textarea>
            </div>
        </div>
</div>
{% if publication.photos | length > 0%}
    <div class=\"row\">
        <label class=\"control-label\">
            <h3>Upload des images</h3>
        </label>
        <section class=\"row\" style=\"margin-top: 20px\">
            {% for photo in publication.photos %}
            <div class=\"col-lg-3 col-sm-4 col-xs-6 col-md-4\" id=\"first-publication-recommande\">
                <a href=\"javascript:void(0)\">
                    <div class=\"polaroid\">
                        <img src=\"{{ photo.getpath }}\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                    </div>
                </a>
            </div>
            {% endfor %}
        </section>
    </div>
{% endif %}
<a href=\"{{ url(modelUser~'/publications') }}\" class=\"btn btn-primary pull-right\">retour</a>
</form>
</div>", "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/publications/detail.htm", "");
    }
}

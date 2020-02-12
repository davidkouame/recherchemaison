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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/home.htm */
class __TwigTemplate_c2624ae1e708c13c447fb2707a5cb8dcbf137e4b4392a3fc0345cea494834258 extends \Twig\Template
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
    @media screen and (max-width: 500px) {
        .publication{
            margin-left: 10%;
        }
        .col-xs-6 {
            width: 80%;
        }
        .search{
            margin-top: 10px;
        }
    }
</style>
<div class=\"ftco-cover-1 overlay\" style=\"background-image: url('http://localhost:8888/images/photo-1527908147823-1.jpg.jpg')\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-12\">
                <h1>Choose Your Quality Delivery of Your Cargo</h1>
                <p class=\"mb-5\"><h3 style=\"color: #fff\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est magni perferendis
                    fugit modi similique, suscipit, deserunt a iure.</h3></p>
                <form class=\"row\" action=\"";
        // line 21
        echo url("/");
        echo "\" method=\"GET\">
                    <div class=\"col-xs-5 col-md-7\">
                        <input name=\"keys\" placeholder=\"Que recherchez vous ?\" type=\"text\" class=\"form-control\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["keys"] ?? null), "html", null, true);
        echo "\" style=\"height: 58px;\">
                    </div>
                    <div class=\"col-xs-4 col-md-3\">
                        <select name=\"localisation_id\" id=\"\" class=\"form-control\" style=\"height: 58px;\">
                            <option value=\"\">Choisir une localisation </option>
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 29
            echo "                            ";
            if ((($context["localisation_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 29))) {
                // line 30
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 30), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 32
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 32), "html", null, true);
                echo "</option>
                            ";
            }
            // line 34
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                        </select>
                    </div>
                    <div class=\"col-xs-3 col-md-2 search\">
                        <button type=\"text\" class=\"btn btn-primary\" style=\"height: 58px;\">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class=\"container\" style=\"margin-top: 12px\">
    <div class=\"row\" >
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 50
            echo "            <a class=\"col-lg-4 col-sm-6 col-xs-6 col-md-4 publication\" href=\"";
            echo url("publications");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "slot", [], "any", false, false, false, 50), "html", null, true);
            echo "\">
                <div class=\"polaroid\">
                    <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "cover", [], "any", false, false, false, 52), "getpath", [], "any", false, false, false, 52), "html", null, true);
            echo "\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                    <div class=\"container-p\">
                        <p>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "libelle", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
                        <p><span class=\"address\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "typepublication", [], "any", false, false, false, 55), "libelle", [], "any", false, false, false, 55), "html", null, true);
            echo ",
                            ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "localisations", [], "any", false, false, false, 56), "libelle", [], "any", false, false, false, 56), "html", null, true);
            echo " </span></p>
                            <div class=\"price-date\">
                                <span class=\"price\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "prix", [], "any", false, false, false, 58), "html", null, true);
            echo "</span>
                            </div>
                    </div>
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-md-12 col-xs-12 col-sm-12\" style=\"text-align: center\">
            ";
        // line 67
        echo ($context["publications"] ?? null);
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 67,  159 => 64,  147 => 58,  142 => 56,  138 => 55,  134 => 54,  129 => 52,  121 => 50,  117 => 49,  101 => 35,  95 => 34,  87 => 32,  79 => 30,  76 => 29,  72 => 28,  64 => 23,  59 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    @media screen and (max-width: 500px) {
        .publication{
            margin-left: 10%;
        }
        .col-xs-6 {
            width: 80%;
        }
        .search{
            margin-top: 10px;
        }
    }
</style>
<div class=\"ftco-cover-1 overlay\" style=\"background-image: url('http://localhost:8888/images/photo-1527908147823-1.jpg.jpg')\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-12\">
                <h1>Choose Your Quality Delivery of Your Cargo</h1>
                <p class=\"mb-5\"><h3 style=\"color: #fff\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est magni perferendis
                    fugit modi similique, suscipit, deserunt a iure.</h3></p>
                <form class=\"row\" action=\"{{ url('/') }}\" method=\"GET\">
                    <div class=\"col-xs-5 col-md-7\">
                        <input name=\"keys\" placeholder=\"Que recherchez vous ?\" type=\"text\" class=\"form-control\" value=\"{{ keys }}\" style=\"height: 58px;\">
                    </div>
                    <div class=\"col-xs-4 col-md-3\">
                        <select name=\"localisation_id\" id=\"\" class=\"form-control\" style=\"height: 58px;\">
                            <option value=\"\">Choisir une localisation </option>
                            {% for localisation in localisations %}
                            {% if localisation_id == localisation.id %}
                            <option value=\"{{ localisation.id }}\" selected>{{ localisation.libelle }}</option>
                            {% else %}
                            <option value=\"{{ localisation.id }}\" selected>{{ localisation.libelle }}</option>
                            {% endif %}
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-xs-3 col-md-2 search\">
                        <button type=\"text\" class=\"btn btn-primary\" style=\"height: 58px;\">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class=\"container\" style=\"margin-top: 12px\">
    <div class=\"row\" >
        {% for publication in publications %}
            <a class=\"col-lg-4 col-sm-6 col-xs-6 col-md-4 publication\" href=\"{{ url('publications') }}/{{ publication.slot }}\">
                <div class=\"polaroid\">
                    <img src=\"{{ publication.cover.getpath }}\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                    <div class=\"container-p\">
                        <p>{{ publication.libelle }}</p>
                        <p><span class=\"address\">{{ publication.typepublication.libelle }},
                            {{ publication.localisations.libelle}} </span></p>
                            <div class=\"price-date\">
                                <span class=\"price\">{{ publication.prix }}</span>
                            </div>
                    </div>
                </div>
            </a>
        {% endfor %}
    </div>
    <div class=\"row\">
        <div class=\"col-md-12 col-xs-12 col-sm-12\" style=\"text-align: center\">
            {{ publications | raw }}
        </div>
    </div>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/home.htm", "");
    }
}

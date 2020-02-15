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
            margin-left: 6%;
        }
        .col-xs-6 {
            width: 88%;
        }
        .search{
            margin-top: 10px;
        }
    }

    @media screen and (max-width: 475px) {
        .col-xs-5{
            width: 100%;
        }

        .col-xs-4{
            width: 100%;
        }

        .search-top{
            margin-top: 10px;
        }

        .search button{
            height: 48px;
        }

        .col-xs-6{
            width: 88%;
        }
    }

    @media screen and (max-width: 580px) {
        .col-xs-5{
            width: 100%;
        }

        .col-xs-4{
            width: 100%;
        }

        .search{
            margin-left: 33%;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .search-top{
            margin-top: 10px;
        }

        .search button{
            height: 48px !important;
        }
    }

    @media screen and (min-width: 476px) {
        .search button{
            height: 58px;
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
        // line 75
        echo url("/");
        echo "\" method=\"GET\">
                    <div class=\"col-xs-5 col-md-7\">
                        <input name=\"keys\" placeholder=\"Que recherchez vous ?\" type=\"text\" class=\"form-control\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["keys"] ?? null), "html", null, true);
        echo "\" style=\"height: 58px;\">
                    </div>
                    <div class=\"col-xs-4 col-md-3 search-top\">
                        <select name=\"localisation_id\" id=\"\" class=\"form-control\" style=\"height: 58px;\">
                            <option value=\"\">Choisir une localisation </option>
                            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 83
            echo "                            ";
            if ((($context["localisation_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 83))) {
                // line 84
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 84), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 84), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 86
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 86), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 86), "html", null, true);
                echo "</option>
                            ";
            }
            // line 88
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                        </select>
                    </div>
                    <div class=\"col-xs-3 col-md-2 search\">
                        <button type=\"text\" class=\"btn btn-primary\">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class=\"container\" style=\"margin-top: 12px\">
    <div class=\"row\" >
        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 104
            echo "            <div class=\"col-lg-4 col-sm-6 col-xs-6 col-md-4 publication\">
                <a href=\"";
            // line 105
            echo url("publications");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "slot", [], "any", false, false, false, 105), "html", null, true);
            echo "\">
                    <div class=\"polaroid\">
                        <img src=\"";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "cover", [], "any", false, false, false, 107), "getpath", [], "any", false, false, false, 107), "html", null, true);
            echo "\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                        <div class=\"container-p\">
                            <p>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "libelle", [], "any", false, false, false, 109), "html", null, true);
            echo "</p>
                            <p><span class=\"address\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "typepublication", [], "any", false, false, false, 110), "libelle", [], "any", false, false, false, 110), "html", null, true);
            echo ",
                                ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "localisations", [], "any", false, false, false, 111), "libelle", [], "any", false, false, false, 111), "html", null, true);
            echo " </span></p>
                                <div class=\"price-date\">
                                    <span class=\"price\">";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "prix", [], "any", false, false, false, 113), "html", null, true);
            echo "</span>
                                </div>
                        </div>
                    </div>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-md-12 col-xs-12 col-sm-12\" style=\"text-align: center\">
            ";
        // line 123
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
        return array (  221 => 123,  216 => 120,  203 => 113,  198 => 111,  194 => 110,  190 => 109,  185 => 107,  178 => 105,  175 => 104,  171 => 103,  155 => 89,  149 => 88,  141 => 86,  133 => 84,  130 => 83,  126 => 82,  118 => 77,  113 => 75,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    @media screen and (max-width: 500px) {
        .publication{
            margin-left: 6%;
        }
        .col-xs-6 {
            width: 88%;
        }
        .search{
            margin-top: 10px;
        }
    }

    @media screen and (max-width: 475px) {
        .col-xs-5{
            width: 100%;
        }

        .col-xs-4{
            width: 100%;
        }

        .search-top{
            margin-top: 10px;
        }

        .search button{
            height: 48px;
        }

        .col-xs-6{
            width: 88%;
        }
    }

    @media screen and (max-width: 580px) {
        .col-xs-5{
            width: 100%;
        }

        .col-xs-4{
            width: 100%;
        }

        .search{
            margin-left: 33%;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .search-top{
            margin-top: 10px;
        }

        .search button{
            height: 48px !important;
        }
    }

    @media screen and (min-width: 476px) {
        .search button{
            height: 58px;
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
                    <div class=\"col-xs-4 col-md-3 search-top\">
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
                        <button type=\"text\" class=\"btn btn-primary\">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class=\"container\" style=\"margin-top: 12px\">
    <div class=\"row\" >
        {% for publication in publications %}
            <div class=\"col-lg-4 col-sm-6 col-xs-6 col-md-4 publication\">
                <a href=\"{{ url('publications') }}/{{ publication.slot }}\">
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
            </div>
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

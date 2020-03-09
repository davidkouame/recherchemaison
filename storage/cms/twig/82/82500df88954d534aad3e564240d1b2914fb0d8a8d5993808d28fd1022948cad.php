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

    .container-p P{
        margin-bottom: 0px;
    }

    .price-date .price{
        margin-bottom: 0px;
    }
    
    a:hover{
        text-decoration: none;
    }
</style>

";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 79
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 80
                echo "    <div class=\"alert alert-success\" style=\"text-align: center;\">
        ";
                // line 81
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
    </div>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 84
        echo "
<div class=\"ftco-cover-1 overlay\" style=\"background-image: url('http://localhost:8888/images/photo-1527908147823-1.jpg.jpg'); min-height: 350px; height: 260px;\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-12\" style=\"padding-top: 40px;\">
                <!--<h1>Choose Your Quality Delivery of Your Cargo</h1>-->
                <h1>Trouvez une maison en vente ou en location</h1>
                <br>
                <!--<p class=\"mb-5\"><h3 style=\"color: #fff\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est magni perferendis
                    fugit modi similique, suscipit, deserunt a iure.</h3></p>-->
                <form class=\"row\" action=\"";
        // line 94
        echo url("/");
        echo "\" method=\"GET\">
                    <div class=\"col-xs-5 col-md-4\">
                        <input name=\"keys\" placeholder=\"Que recherchez vous ?\" type=\"text\" class=\"form-control\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["keys"] ?? null), "html", null, true);
        echo "\" style=\"height: 58px;\">
                    </div>
                    <div class=\"col-xs-5 col-md-3\">
                        <select name=\"typepublication_id\" id=\"\" class=\"form-control\" style=\"height: 58px;\">
                            <option value=\"\">Choisir un type de maison </option>
                            ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typepublications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["typepublication"]) {
            // line 102
            echo "                            ";
            if ((($context["typepublication_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["typepublication"], "id", [], "any", false, false, false, 102))) {
                // line 103
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typepublication"], "id", [], "any", false, false, false, 103), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typepublication"], "libelle", [], "any", false, false, false, 103), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 105
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typepublication"], "id", [], "any", false, false, false, 105), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typepublication"], "libelle", [], "any", false, false, false, 105), "html", null, true);
                echo "</option>
                            ";
            }
            // line 107
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typepublication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                        </select>
                    </div>
                    <div class=\"col-xs-4 col-md-3 search-top\">
                        <select name=\"localisation_id\" id=\"\" class=\"form-control\" style=\"height: 58px;\">
                            <option value=\"\">Choisir une localisation </option>
                            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 114
            echo "                            ";
            if ((($context["localisation_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 114))) {
                // line 115
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 115), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 115), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 117
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 117), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 117), "html", null, true);
                echo "</option>
                            ";
            }
            // line 119
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
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
        // line 134
        if ((twig_length_filter($this->env, ($context["publications"] ?? null)) > 0)) {
            // line 135
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
                // line 136
                echo "                <div class=\"col-lg-4 col-sm-6 col-xs-6 col-md-4 publication\">
                    <a href=\"";
                // line 137
                echo url("publications");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "slot", [], "any", false, false, false, 137), "html", null, true);
                echo "\">
                        <div class=\"polaroid\">
                            ";
                // line 139
                if ((twig_get_attribute($this->env, $this->source, $context["publication"], "cover", [], "any", false, false, false, 139) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "cover", [], "any", false, false, false, 139), "getpath", [], "any", false, false, false, 139))) {
                    // line 140
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "cover", [], "any", false, false, false, 140), "getpath", [], "any", false, false, false, 140), "html", null, true);
                    echo "\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                            ";
                } else {
                    // line 142
                    echo "                            <img src=\"";
                    echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/withoutimage.jpg");
                    echo "\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                            ";
                }
                // line 144
                echo "                            <div class=\"container-p\" style=\"min-height: 100px;\">
                                <p>";
                // line 145
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "libelle", [], "any", false, false, false, 145), 0, 40);
                echo "</p>
                                <p>
                                    <span class=\"address\">";
                // line 147
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "typepublication", [], "any", false, false, false, 147), "libelle", [], "any", false, false, false, 147), 0, 20);
                echo ",
                                    ";
                // line 148
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "localisations", [], "any", false, false, false, 148), "libelle", [], "any", false, false, false, 148), 0, 20);
                echo " </span>
                                </p>
                                <p>
                                    ";
                // line 151
                if (twig_get_attribute($this->env, $this->source, $context["publication"], "prix", [], "any", false, false, false, 151)) {
                    // line 152
                    echo "                                        <div class=\"price-date\">
                                            <span class=\"price\">";
                    // line 153
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "prix", [], "any", false, false, false, 153), "html", null, true);
                    echo " FCFA</span>
                                        </div>
                                    ";
                }
                // line 156
                echo "                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "        ";
        } else {
            // line 163
            echo "            <div class=\"col-md-12\" style=\"text-align: center;\"><h3>Désolé, aucune maison trouvée !</h3> </div>
        ";
        }
        // line 165
        echo "    </div>
    ";
        // line 166
        if ((twig_length_filter($this->env, ($context["publications"] ?? null)) > 0)) {
            // line 167
            echo "        <div class=\"row\">
            <div class=\"col-md-12 col-xs-12 col-sm-12\" style=\"text-align: center\">
                ";
            // line 169
            echo ($context["publications"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 173
        echo "</div>";
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
        return array (  330 => 173,  323 => 169,  319 => 167,  317 => 166,  314 => 165,  310 => 163,  307 => 162,  296 => 156,  290 => 153,  287 => 152,  285 => 151,  279 => 148,  275 => 147,  270 => 145,  267 => 144,  261 => 142,  255 => 140,  253 => 139,  246 => 137,  243 => 136,  238 => 135,  236 => 134,  220 => 120,  214 => 119,  206 => 117,  198 => 115,  195 => 114,  191 => 113,  184 => 108,  178 => 107,  170 => 105,  162 => 103,  159 => 102,  155 => 101,  147 => 96,  142 => 94,  130 => 84,  123 => 81,  120 => 80,  117 => 79,  37 => 1,);
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

    .container-p P{
        margin-bottom: 0px;
    }

    .price-date .price{
        margin-bottom: 0px;
    }
    
    a:hover{
        text-decoration: none;
    }
</style>

{% flash %}
    <div class=\"alert alert-success\" style=\"text-align: center;\">
        {{ message }}
    </div>
{% endflash %}

<div class=\"ftco-cover-1 overlay\" style=\"background-image: url('http://localhost:8888/images/photo-1527908147823-1.jpg.jpg'); min-height: 350px; height: 260px;\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-12\" style=\"padding-top: 40px;\">
                <!--<h1>Choose Your Quality Delivery of Your Cargo</h1>-->
                <h1>Trouvez une maison en vente ou en location</h1>
                <br>
                <!--<p class=\"mb-5\"><h3 style=\"color: #fff\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est magni perferendis
                    fugit modi similique, suscipit, deserunt a iure.</h3></p>-->
                <form class=\"row\" action=\"{{ url('/') }}\" method=\"GET\">
                    <div class=\"col-xs-5 col-md-4\">
                        <input name=\"keys\" placeholder=\"Que recherchez vous ?\" type=\"text\" class=\"form-control\" value=\"{{ keys }}\" style=\"height: 58px;\">
                    </div>
                    <div class=\"col-xs-5 col-md-3\">
                        <select name=\"typepublication_id\" id=\"\" class=\"form-control\" style=\"height: 58px;\">
                            <option value=\"\">Choisir un type de maison </option>
                            {% for typepublication in typepublications %}
                            {% if typepublication_id == typepublication.id %}
                            <option value=\"{{ typepublication.id }}\" selected>{{ typepublication.libelle }}</option>
                            {% else %}
                            <option value=\"{{ typepublication.id }}\">{{ typepublication.libelle }}</option>
                            {% endif %}
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-xs-4 col-md-3 search-top\">
                        <select name=\"localisation_id\" id=\"\" class=\"form-control\" style=\"height: 58px;\">
                            <option value=\"\">Choisir une localisation </option>
                            {% for localisation in localisations %}
                            {% if localisation_id == localisation.id %}
                            <option value=\"{{ localisation.id }}\" selected>{{ localisation.libelle }}</option>
                            {% else %}
                            <option value=\"{{ localisation.id }}\">{{ localisation.libelle }}</option>
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
        {% if publications|length > 0 %}
            {% for publication in publications %}
                <div class=\"col-lg-4 col-sm-6 col-xs-6 col-md-4 publication\">
                    <a href=\"{{ url('publications') }}/{{ publication.slot }}\">
                        <div class=\"polaroid\">
                            {% if publication.cover and publication.cover.getpath%}
                            <img src=\"{{ publication.cover.getpath }}\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                            {% else %}
                            <img src=\"{{ 'assets/images/withoutimage.jpg'|theme }}\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                            {% endif %}
                            <div class=\"container-p\" style=\"min-height: 100px;\">
                                <p>{{ publication.libelle|slice(0,40)|raw }}</p>
                                <p>
                                    <span class=\"address\">{{ publication.typepublication.libelle|slice(0,20)|raw  }},
                                    {{ publication.localisations.libelle|slice(0,20)|raw }} </span>
                                </p>
                                <p>
                                    {% if publication.prix %}
                                        <div class=\"price-date\">
                                            <span class=\"price\">{{ publication.prix }} FCFA</span>
                                        </div>
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            {% endfor %}
        {% else %}
            <div class=\"col-md-12\" style=\"text-align: center;\"><h3>Désolé, aucune maison trouvée !</h3> </div>
        {% endif %}
    </div>
    {% if publications|length > 0 %}
        <div class=\"row\">
            <div class=\"col-md-12 col-xs-12 col-sm-12\" style=\"text-align: center\">
                {{ publications | raw }}
            </div>
        </div>
    {% endif %}
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/home.htm", "");
    }
}

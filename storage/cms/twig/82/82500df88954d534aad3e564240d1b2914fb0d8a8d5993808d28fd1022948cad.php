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

    .select2-selection.select2-selection--single{
        height: 58px;
        padding-top: 14px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow{
        top: 16px;
    }
</style>

";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 87
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 88
                echo "    <div class=\"alert alert-success\" style=\"text-align: center;\">
        ";
                // line 89
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
    </div>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 92
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
        // line 102
        echo url("/");
        echo "\" method=\"GET\">
                    <div class=\"col-xs-5 col-md-4\">
                        <input name=\"keys\" placeholder=\"Que recherchez vous ?\" type=\"text\" class=\"form-control\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["keys"] ?? null), "html", null, true);
        echo "\" style=\"height: 58px;\">
                    </div>
                    <div class=\"col-xs-5 col-md-3\">
                        <select name=\"typepublication_id\" id=\"\" class=\"form-control\" style=\"height: 58px;\">
                            <option value=\"\">Choisir un type de maison </option>
                            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typepublications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["typepublication"]) {
            // line 110
            echo "                            ";
            if ((($context["typepublication_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["typepublication"], "id", [], "any", false, false, false, 110))) {
                // line 111
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typepublication"], "id", [], "any", false, false, false, 111), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typepublication"], "libelle", [], "any", false, false, false, 111), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 113
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typepublication"], "id", [], "any", false, false, false, 113), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typepublication"], "libelle", [], "any", false, false, false, 113), "html", null, true);
                echo "</option>
                            ";
            }
            // line 115
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typepublication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                        </select>
                    </div>
                    <div class=\"col-xs-4 col-md-3 search-top\">
                        <select name=\"localisation_id\" id=\"\" class=\"form-control select2\" style=\"height: 58px;\">
                            <option value=\"\">Choisir une localisation </option>
                            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 122
            echo "                            ";
            if ((($context["localisation_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 122))) {
                // line 123
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 123), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 123), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 125
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 125), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 125), "html", null, true);
                echo "</option>
                            ";
            }
            // line 127
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
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
        // line 142
        if ((twig_length_filter($this->env, ($context["publications"] ?? null)) > 0)) {
            // line 143
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
                // line 144
                echo "                <div class=\"col-lg-4 col-sm-6 col-xs-6 col-md-4 publication\">
                    <a href=\"";
                // line 145
                echo url("publications");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "slot", [], "any", false, false, false, 145), "html", null, true);
                echo "\">
                        <div class=\"polaroid\">
                            ";
                // line 147
                if ((twig_get_attribute($this->env, $this->source, $context["publication"], "cover", [], "any", false, false, false, 147) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "cover", [], "any", false, false, false, 147), "getpath", [], "any", false, false, false, 147))) {
                    // line 148
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "cover", [], "any", false, false, false, 148), "getpath", [], "any", false, false, false, 148), "html", null, true);
                    echo "\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                            ";
                } else {
                    // line 150
                    echo "                            <img src=\"";
                    echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/withoutimage.jpg");
                    echo "\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                            ";
                }
                // line 152
                echo "                            <div class=\"container-p\" style=\"min-height: 100px;\">
                                <p>";
                // line 153
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "libelle", [], "any", false, false, false, 153), 0, 40);
                echo "</p>
                                <p>
                                    <span class=\"address\">";
                // line 155
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "typepublication", [], "any", false, false, false, 155), "libelle", [], "any", false, false, false, 155), 0, 20);
                echo ",
                                    ";
                // line 156
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "localisations", [], "any", false, false, false, 156), "libelle", [], "any", false, false, false, 156), 0, 20);
                echo " </span>
                                </p>
                                <p>
                                    ";
                // line 159
                if (twig_get_attribute($this->env, $this->source, $context["publication"], "prix", [], "any", false, false, false, 159)) {
                    // line 160
                    echo "                                        <div class=\"price-date\">
                                            <span class=\"price\">";
                    // line 161
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "prix", [], "any", false, false, false, 161), "html", null, true);
                    echo " FCFA</span>
                                        </div>
                                    ";
                }
                // line 164
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
            // line 170
            echo "        ";
        } else {
            // line 171
            echo "            <div class=\"col-md-12\" style=\"text-align: center;\"><h3>Désolé, aucune maison trouvée !</h3> </div>
        ";
        }
        // line 173
        echo "    </div>
    ";
        // line 174
        if ((twig_length_filter($this->env, ($context["publications"] ?? null)) > 0)) {
            // line 175
            echo "        <div class=\"row\">
            <div class=\"col-md-12 col-xs-12 col-sm-12\" style=\"text-align: center\">
                ";
            // line 177
            echo ($context["publications"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 181
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
        return array (  338 => 181,  331 => 177,  327 => 175,  325 => 174,  322 => 173,  318 => 171,  315 => 170,  304 => 164,  298 => 161,  295 => 160,  293 => 159,  287 => 156,  283 => 155,  278 => 153,  275 => 152,  269 => 150,  263 => 148,  261 => 147,  254 => 145,  251 => 144,  246 => 143,  244 => 142,  228 => 128,  222 => 127,  214 => 125,  206 => 123,  203 => 122,  199 => 121,  192 => 116,  186 => 115,  178 => 113,  170 => 111,  167 => 110,  163 => 109,  155 => 104,  150 => 102,  138 => 92,  131 => 89,  128 => 88,  125 => 87,  37 => 1,);
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

    .select2-selection.select2-selection--single{
        height: 58px;
        padding-top: 14px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow{
        top: 16px;
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
                        <select name=\"localisation_id\" id=\"\" class=\"form-control select2\" style=\"height: 58px;\">
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

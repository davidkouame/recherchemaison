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

.ftco-cover-1.overlay {
    position: relative;
}
.ftco-cover-1, .ftco-cover-1 .container > .row {
    min-height: 400px;
}

.ftco-cover-1 {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

.align-items-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
}

.ftco-cover-1.overlay h1 {
    color: 
    #fff;
}

.ftco-cover-1.overlay p {
    color: 
    #fff;
}

.mb-5, .my-5 {
    margin-bottom: 3rem !important;
}

.ftco-cover-1.overlay::before {
    content: \"\";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: .95;
    background: #377aff;
    background: -moz-linear-gradient(45deg,#377aff 0%,#00d9ff 100%);
    background: -webkit-gradient(left bottom,right top,color-stop(0%,#377aff),color-stop(100%,#00d9ff));
    background: -webkit-linear-gradient(45deg,#377aff 0%,#00d9ff 100%);
    background: -o-linear-gradient(45deg,#377aff 0%,#00d9ff 100%);
    background: -ms-linear-gradient(45deg,#377aff 0%,#00d9ff 100%);
    background: linear-gradient(45deg,
#377aff 0%,
    #00d9ff 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#377aff',endColorstr='#00d9ff',GradientType=1);
}

div.polaroid {
  width: 100%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container-p {
  text-align: center;
  padding: 10px 20px;
}

.flex-container {
  display: flex;
  flex-wrap: nowrap;
  background-color: DodgerBlue;
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
        // line 82
        echo url("/");
        echo "\" method=\"GET\">
                    <div class=\"col-md-7\">
                        <input name=\"keys\" placeholder=\"Que recherchez vous ?\" type=\"text\" class=\"form-control\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, ($context["keys"] ?? null), "html", null, true);
        echo "\" style=\"height: 58px;\">
                    </div>
                    <div class=\"col-md-3\">
                        <select name=\"localisation_id\" id=\"\" class=\"form-control\" style=\"height: 58px;\">
                            <option value=\"\">Choisir une localisation </option>
                            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 90
            echo "                            ";
            if ((($context["localisation_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 90))) {
                // line 91
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 91), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 91), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 93
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 93), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 93), "html", null, true);
                echo "</option>
                            ";
            }
            // line 95
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                        </select>
                    </div>
                    <div class=\"col-md-2\">
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
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 111
            echo "            <a class=\"col-md-4\" href=\"";
            echo url("publications");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "slot", [], "any", false, false, false, 111), "html", null, true);
            echo "\">
                <div class=\"polaroid\">
                    <img src=\"https://www.w3schools.com/css/img_5terre.jpg\" alt=\"5 Terre\" style=\"width:100%\">
                    <div class=\"container-p\">
                        <p>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "libelle", [], "any", false, false, false, 115), "html", null, true);
            echo "</p>
                        <p><span class=\"address\">";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "typepublication", [], "any", false, false, false, 116), "libelle", [], "any", false, false, false, 116), "html", null, true);
            echo ",
                            ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "localisations", [], "any", false, false, false, 117), "libelle", [], "any", false, false, false, 117), "html", null, true);
            echo " </span></p>
                            <div class=\"price-date\">
                                <span class=\"price\">";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "prix", [], "any", false, false, false, 119), "html", null, true);
            echo "</span>
                                <time datetime=\"31.1.2020 8:32\">";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "published_at", [], "any", false, false, false, 120), "html", null, true);
            echo "</time>
                            </div>
                    </div>
                </div>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "        <div class=\"col-md-12\" style=\"text-align: center\">
            ";
        // line 127
        echo ($context["publications"] ?? null);
        echo "
        </div>

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
        return array (  224 => 127,  221 => 126,  209 => 120,  205 => 119,  200 => 117,  196 => 116,  192 => 115,  182 => 111,  178 => 110,  162 => 96,  156 => 95,  148 => 93,  140 => 91,  137 => 90,  133 => 89,  125 => 84,  120 => 82,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>

.ftco-cover-1.overlay {
    position: relative;
}
.ftco-cover-1, .ftco-cover-1 .container > .row {
    min-height: 400px;
}

.ftco-cover-1 {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

.align-items-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
}

.ftco-cover-1.overlay h1 {
    color: 
    #fff;
}

.ftco-cover-1.overlay p {
    color: 
    #fff;
}

.mb-5, .my-5 {
    margin-bottom: 3rem !important;
}

.ftco-cover-1.overlay::before {
    content: \"\";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: .95;
    background: #377aff;
    background: -moz-linear-gradient(45deg,#377aff 0%,#00d9ff 100%);
    background: -webkit-gradient(left bottom,right top,color-stop(0%,#377aff),color-stop(100%,#00d9ff));
    background: -webkit-linear-gradient(45deg,#377aff 0%,#00d9ff 100%);
    background: -o-linear-gradient(45deg,#377aff 0%,#00d9ff 100%);
    background: -ms-linear-gradient(45deg,#377aff 0%,#00d9ff 100%);
    background: linear-gradient(45deg,
#377aff 0%,
    #00d9ff 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#377aff',endColorstr='#00d9ff',GradientType=1);
}

div.polaroid {
  width: 100%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container-p {
  text-align: center;
  padding: 10px 20px;
}

.flex-container {
  display: flex;
  flex-wrap: nowrap;
  background-color: DodgerBlue;
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
                    <div class=\"col-md-7\">
                        <input name=\"keys\" placeholder=\"Que recherchez vous ?\" type=\"text\" class=\"form-control\" value=\"{{ keys }}\" style=\"height: 58px;\">
                    </div>
                    <div class=\"col-md-3\">
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
                    <div class=\"col-md-2\">
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
            <a class=\"col-md-4\" href=\"{{ url('publications') }}/{{ publication.slot }}\">
                <div class=\"polaroid\">
                    <img src=\"https://www.w3schools.com/css/img_5terre.jpg\" alt=\"5 Terre\" style=\"width:100%\">
                    <div class=\"container-p\">
                        <p>{{ publication.libelle }}</p>
                        <p><span class=\"address\">{{ publication.typepublication.libelle }},
                            {{ publication.localisations.libelle}} </span></p>
                            <div class=\"price-date\">
                                <span class=\"price\">{{ publication.prix }}</span>
                                <time datetime=\"31.1.2020 8:32\">{{ publication.published_at }}</time>
                            </div>
                    </div>
                </div>
            </a>
        {% endfor %}
        <div class=\"col-md-12\" style=\"text-align: center\">
            {{ publications | raw }}
        </div>

    </div>
    </div>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/home.htm", "");
    }
}

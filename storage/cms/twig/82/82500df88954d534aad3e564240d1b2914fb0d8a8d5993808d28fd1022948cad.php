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

    @media screen and (max-width: 360px){
        .publication{
            margin-left: 6%;
        }
        .col-xs-6 {
            width: 100% !important;
        }
        .search{
            margin-top: 10px;
        }
        #search{
            width: 201%;
        }
        #header-title{
            text-align: center;
        }
        .padding-container{
            margin-top: 12px !important;
            padding-left: 1% !important;
            padding-right: 12% !important;
        }
    }

    @media screen and (min-width: 361px) and (max-width: 500px) {
        .publication{
            margin-left: 6%;
        }
        .col-xs-6 {
            width: 100%;
        }
        .search{
            margin-top: 10px;
        }
        #search{
            width: 150%;
        }
        #header-title{
            text-align: center;
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

    @media screen and (min-width: 500px) and (max-width: 580px){
        .col-xs-6{
            width: 80% !important;
        }

        .padding-container{
            margin-top: 12px !important;
            padding-left: 19% !important;
            padding-right: 0% !important;
        }
    }


    @media screen and (max-width: 580px) {
        .col-xs-5{
            width: 100%;
        }

        .col-xs-4{
            width: 100%;
        }
        
        .col-xs-6{
            width: 100%;
        }

        .search{
            margin-left: 33%;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        #search{
            width: 201%;
        }

        .search-top{
            margin-top: 10px;
        }

        .search button{
            height: 48px !important;
        }
    }

    @media screen and (min-width: 581px) and (max-width: 767px){
        .padding-container{
            margin-top: 12px !important;
            padding-left: 3% !important;
            padding-right: 3% !important;
        }
    }

    @media screen and (min-width: 476px) {
        .search button{
            height: 58px;
        }
        
    }
    
    

    .select2.select2-container.select2-container--default{
            width: 100% !important;
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

    .select2-container--default .select2-selection--single{
        border: 0px solid #fa2d37 !important;
        border-radius: 8px;
    }

    input[type=\"text\"], input[type=\"tel\"], input[type=\"email\"], input[type=\"url\"], input[type=\"password\"], input[type=\"search\"], input[type=\"number\"], textarea{
        border: 0px solid #ddd;
    }

    .form-control{
        border: 0px solid #ccc;
        border-radius: 8px;
    }

    #search{
        border-radius: 8px;
        background-color: rgb(224, 0, 52);
        border-color: rgb(224, 0, 52);
    }

    #search:hover{
        background-color: rgb(255, 60, 84);
        border-color: rgb(255, 60, 84);
    }

    .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{
        background-color: #fa2d37;
        border-color: #fa2d37;
    }

    .padding-container{
        margin-top: 12px; 
        padding-left: 68px; 
        padding-right: 68px;
    }

    .expire{
        position: absolute;
        background-color: red;
        margin-left: 14px;
        margin-top: 10px;
        color: #fff;
        width: 60px;
        text-align: center;
        right: 8%;
    }
</style>

";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 200
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 201
                echo "    <div class=\"alert alert-success\" style=\"text-align: center;\">
        ";
                // line 202
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
    </div>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 205
        echo "
<div class=\"ftco-cover-1 overlay\" style=\"background-image: url(";
        // line 206
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/1568858897-8005-full_size_3x2-t1571293366.jpg");
        echo "); min-height: 350px; height: 260px;\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-12\" style=\"padding-top: 40px;\">
                <!--<h1>Choose Your Quality Delivery of Your Cargo</h1>-->
                <h1 id=\"header-title\">Trouvez une maison en vente ou en location</h1>
                <br>
                <!--<p class=\"mb-5\"><h3 style=\"color: #fff\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est magni perferendis
                    fugit modi similique, suscipit, deserunt a iure.</h3></p>-->
                <form class=\"row\" action=\"";
        // line 215
        echo url("/");
        echo "\" method=\"GET\">
                    <div class=\"col-md-offset-2 col-xs-5 col-md-4\">
                        <input name=\"keys\" placeholder=\"Que recherchez vous ?\" type=\"text\" class=\"form-control\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, ($context["keys"] ?? null), "html", null, true);
        echo "\" style=\"height: 58px;\">
                    </div>
                    <!--<div class=\"col-xs-5 col-md-3\">
                        <select name=\"typepublication_id\" id=\"\" class=\"form-control\" style=\"height: 58px;\">
                            <option value=\"\">Choisir un type de maison </option>
                            ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typepublications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["typepublication"]) {
            // line 223
            echo "                            ";
            if ((($context["typepublication_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["typepublication"], "id", [], "any", false, false, false, 223))) {
                // line 224
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typepublication"], "id", [], "any", false, false, false, 224), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typepublication"], "libelle", [], "any", false, false, false, 224), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 226
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typepublication"], "id", [], "any", false, false, false, 226), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typepublication"], "libelle", [], "any", false, false, false, 226), "html", null, true);
                echo "</option>
                            ";
            }
            // line 228
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typepublication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "                        </select>
                    </div>-->
                    <div class=\"col-xs-4 col-md-3 search-top\">
                        <select name=\"localisation_id\" id=\"\" class=\"form-control select2\" style=\"height: 58px;\">
                            <option value=\"\">Choisir une localisation </option>
                            ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localisations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["localisation"]) {
            // line 235
            echo "                            ";
            if ((($context["localisation_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 235))) {
                // line 236
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 236), "html", null, true);
                echo "\" selected> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localisation"], "commune", [], "any", false, false, false, 236), "libelle", [], "any", false, false, false, 236), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 236), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 238
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "id", [], "any", false, false, false, 238), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localisation"], "commune", [], "any", false, false, false, 238), "libelle", [], "any", false, false, false, 238), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localisation"], "libelle", [], "any", false, false, false, 238), "html", null, true);
                echo "</option>
                            ";
            }
            // line 240
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "                        </select>
                    </div>
                    <div class=\"col-xs-3 col-md-2 search\">
                        <button type=\"text\" class=\"btn btn-primary\" id=\"search\">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class=\"container padding-container\">
    <div class=\"row\" style=\"margin-top: 65px;\">
        ";
        // line 255
        if ((twig_length_filter($this->env, ($context["publications"] ?? null)) > 0)) {
            // line 256
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
                // line 257
                echo "                <div class=\"col-lg-4 col-sm-6 col-xs-6 col-md-4 publication\">
                    <a href=\"";
                // line 258
                echo url("publications");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "slot", [], "any", false, false, false, 258), "html", null, true);
                echo "\">
                        <div class=\"polaroid\">
                            ";
                // line 260
                if (twig_get_attribute($this->env, $this->source, $context["publication"], "expired_at", [], "any", false, false, false, 260)) {
                    echo " <span class=\"expire\">Expiré</span> ";
                }
                // line 261
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["publication"], "cover", [], "any", false, false, false, 261) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "cover", [], "any", false, false, false, 261), "getpath", [], "any", false, false, false, 261))) {
                    // line 262
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "cover", [], "any", false, false, false, 262), "getpath", [], "any", false, false, false, 262), "html", null, true);
                    echo "\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                            ";
                } else {
                    // line 264
                    echo "                            <img src=\"";
                    echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/withoutimage.jpg");
                    echo "\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                            ";
                }
                // line 266
                echo "                            <div class=\"container-p\" style=\"min-height: 100px;\">
                                <p style=\"text-overflow: ellipsis;
                                white-space: nowrap;
                                overflow: hidden;\">";
                // line 269
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "libelle", [], "any", false, false, false, 269), "html", null, true);
                echo "</p>
                                <p style=\"text-overflow: ellipsis;
                                white-space: nowrap;
                                overflow: hidden;\">
                                    <span class=\"address\">";
                // line 273
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "typepublication", [], "any", false, false, false, 273), "libelle", [], "any", false, false, false, 273), 0, 20);
                echo ",
                                    ";
                // line 274
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "localisations", [], "any", false, false, false, 274), "libelle", [], "any", false, false, false, 274), 0, 20);
                echo " </span>
                                </p>
                                <p>
                                    ";
                // line 277
                if (twig_get_attribute($this->env, $this->source, $context["publication"], "prix", [], "any", false, false, false, 277)) {
                    // line 278
                    echo "                                        <div class=\"price-date\">
                                            <span class=\"price\">";
                    // line 279
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "prix", [], "any", false, false, false, 279), "html", null, true);
                    echo " FCFA</span>
                                        </div>
                                    ";
                }
                // line 282
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
            // line 288
            echo "        ";
        } else {
            // line 289
            echo "            <div class=\"col-md-12\" style=\"text-align: center;\"><h3>Désolé, aucune maison trouvée !</h3> </div>
        ";
        }
        // line 291
        echo "    </div>
    ";
        // line 292
        if ((twig_length_filter($this->env, ($context["publications"] ?? null)) > 0)) {
            // line 293
            echo "        <div class=\"row\">
            <div class=\"col-md-12 col-xs-12 col-sm-12\" style=\"text-align: center\">
                ";
            // line 295
            echo ($context["publications"] ?? null);
            echo "
            </div>
        </div>
    ";
        }
        // line 299
        echo "</div>

<script>
    // alert(\"la largeur de l'ecran est \"+ window.screen.width);
    window.screen.height;
    window.screen.width;
</script>";
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
        return array (  467 => 299,  460 => 295,  456 => 293,  454 => 292,  451 => 291,  447 => 289,  444 => 288,  433 => 282,  427 => 279,  424 => 278,  422 => 277,  416 => 274,  412 => 273,  405 => 269,  400 => 266,  394 => 264,  388 => 262,  385 => 261,  381 => 260,  374 => 258,  371 => 257,  366 => 256,  364 => 255,  348 => 241,  342 => 240,  332 => 238,  322 => 236,  319 => 235,  315 => 234,  308 => 229,  302 => 228,  294 => 226,  286 => 224,  283 => 223,  279 => 222,  271 => 217,  266 => 215,  254 => 206,  251 => 205,  244 => 202,  241 => 201,  238 => 200,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>

    @media screen and (max-width: 360px){
        .publication{
            margin-left: 6%;
        }
        .col-xs-6 {
            width: 100% !important;
        }
        .search{
            margin-top: 10px;
        }
        #search{
            width: 201%;
        }
        #header-title{
            text-align: center;
        }
        .padding-container{
            margin-top: 12px !important;
            padding-left: 1% !important;
            padding-right: 12% !important;
        }
    }

    @media screen and (min-width: 361px) and (max-width: 500px) {
        .publication{
            margin-left: 6%;
        }
        .col-xs-6 {
            width: 100%;
        }
        .search{
            margin-top: 10px;
        }
        #search{
            width: 150%;
        }
        #header-title{
            text-align: center;
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

    @media screen and (min-width: 500px) and (max-width: 580px){
        .col-xs-6{
            width: 80% !important;
        }

        .padding-container{
            margin-top: 12px !important;
            padding-left: 19% !important;
            padding-right: 0% !important;
        }
    }


    @media screen and (max-width: 580px) {
        .col-xs-5{
            width: 100%;
        }

        .col-xs-4{
            width: 100%;
        }
        
        .col-xs-6{
            width: 100%;
        }

        .search{
            margin-left: 33%;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        #search{
            width: 201%;
        }

        .search-top{
            margin-top: 10px;
        }

        .search button{
            height: 48px !important;
        }
    }

    @media screen and (min-width: 581px) and (max-width: 767px){
        .padding-container{
            margin-top: 12px !important;
            padding-left: 3% !important;
            padding-right: 3% !important;
        }
    }

    @media screen and (min-width: 476px) {
        .search button{
            height: 58px;
        }
        
    }
    
    

    .select2.select2-container.select2-container--default{
            width: 100% !important;
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

    .select2-container--default .select2-selection--single{
        border: 0px solid #fa2d37 !important;
        border-radius: 8px;
    }

    input[type=\"text\"], input[type=\"tel\"], input[type=\"email\"], input[type=\"url\"], input[type=\"password\"], input[type=\"search\"], input[type=\"number\"], textarea{
        border: 0px solid #ddd;
    }

    .form-control{
        border: 0px solid #ccc;
        border-radius: 8px;
    }

    #search{
        border-radius: 8px;
        background-color: rgb(224, 0, 52);
        border-color: rgb(224, 0, 52);
    }

    #search:hover{
        background-color: rgb(255, 60, 84);
        border-color: rgb(255, 60, 84);
    }

    .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus{
        background-color: #fa2d37;
        border-color: #fa2d37;
    }

    .padding-container{
        margin-top: 12px; 
        padding-left: 68px; 
        padding-right: 68px;
    }

    .expire{
        position: absolute;
        background-color: red;
        margin-left: 14px;
        margin-top: 10px;
        color: #fff;
        width: 60px;
        text-align: center;
        right: 8%;
    }
</style>

{% flash %}
    <div class=\"alert alert-success\" style=\"text-align: center;\">
        {{ message }}
    </div>
{% endflash %}

<div class=\"ftco-cover-1 overlay\" style=\"background-image: url({{ 'assets/images/1568858897-8005-full_size_3x2-t1571293366.jpg'|theme }}); min-height: 350px; height: 260px;\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-12\" style=\"padding-top: 40px;\">
                <!--<h1>Choose Your Quality Delivery of Your Cargo</h1>-->
                <h1 id=\"header-title\">Trouvez une maison en vente ou en location</h1>
                <br>
                <!--<p class=\"mb-5\"><h3 style=\"color: #fff\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est magni perferendis
                    fugit modi similique, suscipit, deserunt a iure.</h3></p>-->
                <form class=\"row\" action=\"{{ url('/') }}\" method=\"GET\">
                    <div class=\"col-md-offset-2 col-xs-5 col-md-4\">
                        <input name=\"keys\" placeholder=\"Que recherchez vous ?\" type=\"text\" class=\"form-control\" value=\"{{ keys }}\" style=\"height: 58px;\">
                    </div>
                    <!--<div class=\"col-xs-5 col-md-3\">
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
                    </div>-->
                    <div class=\"col-xs-4 col-md-3 search-top\">
                        <select name=\"localisation_id\" id=\"\" class=\"form-control select2\" style=\"height: 58px;\">
                            <option value=\"\">Choisir une localisation </option>
                            {% for localisation in localisations %}
                            {% if localisation_id == localisation.id %}
                            <option value=\"{{ localisation.id }}\" selected> {{ localisation.commune.libelle }} - {{ localisation.libelle }}</option>
                            {% else %}
                            <option value=\"{{ localisation.id }}\">{{ localisation.commune.libelle }} - {{ localisation.libelle }}</option>
                            {% endif %}
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-xs-3 col-md-2 search\">
                        <button type=\"text\" class=\"btn btn-primary\" id=\"search\">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class=\"container padding-container\">
    <div class=\"row\" style=\"margin-top: 65px;\">
        {% if publications|length > 0 %}
            {% for publication in publications %}
                <div class=\"col-lg-4 col-sm-6 col-xs-6 col-md-4 publication\">
                    <a href=\"{{ url('publications') }}/{{ publication.slot }}\">
                        <div class=\"polaroid\">
                            {% if publication.expired_at %} <span class=\"expire\">Expiré</span> {% endif %}
                            {% if publication.cover and publication.cover.getpath%}
                            <img src=\"{{ publication.cover.getpath }}\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                            {% else %}
                            <img src=\"{{ 'assets/images/withoutimage.jpg'|theme }}\" alt=\"5 Terre\" style=\"width:100%;height: 240px;\">
                            {% endif %}
                            <div class=\"container-p\" style=\"min-height: 100px;\">
                                <p style=\"text-overflow: ellipsis;
                                white-space: nowrap;
                                overflow: hidden;\">{{ publication.libelle }}</p>
                                <p style=\"text-overflow: ellipsis;
                                white-space: nowrap;
                                overflow: hidden;\">
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
</div>

<script>
    // alert(\"la largeur de l'ecran est \"+ window.screen.width);
    window.screen.height;
    window.screen.width;
</script>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/home.htm", "");
    }
}

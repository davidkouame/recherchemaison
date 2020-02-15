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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/layouts/default.htm */
class __TwigTemplate_99b258e8ca14ebe712f8334b02289582cba5dadb054f59820b77c062f01c39b4 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>ChapMaison - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"ChapMaison\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"ChapMaison\">

    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-57x57.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-60x60.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-72x72.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-76x76.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-114x114.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-120x120.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-144x144.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-152x152.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-180x180.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/android-icon-192x192.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon-32x32.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon-96x96.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon-16x16.png");
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/manifest.json");
        echo "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ms-icon-144x144.png");
        echo "\">
    <meta name=\"theme-color\" content=\"#ffffff\">


    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/chapmaison.png");
        echo "\">
    <link href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/home.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
    
    ";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 38
        echo "
    <style>
        .responsive {
            height: 160px;
        }

        .responsive-collapse {
            display: block !important;
        }

        #layout-header {
            margin-top: 0px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    ";
        // line 57
        if (($context["user"] ?? null)) {
            // line 58
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "demarcheur_id", [], "any", false, false, false, 58)) {
                // line 59
                echo "        <header id=\"layout-header\">
            ";
                // line 60
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header_demarcheur"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 61
                echo "        </header>
        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 62
($context["user"] ?? null), "agence_id", [], "any", false, false, false, 62)) {
                // line 63
                echo "            <header id=\"layout-header\">
                ";
                // line 64
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header_agence"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 65
                echo "            </header>
        ";
            } else {
                // line 67
                echo "        <header id=\"layout-header\">
            ";
                // line 68
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 69
                echo "        </header>
        ";
            }
            // line 71
            echo "    ";
        } else {
            // line 72
            echo "        <header id=\"layout-header\">
            ";
            // line 73
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 74
            echo "        </header>
    ";
        }
        // line 76
        echo "
    <!-- Content -->
    <section id=\"layout-content\">
        ";
        // line 79
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 80
        echo "    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        ";
        // line 84
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 85
        echo "    </footer>

    <!-- Scripts -->
    <script src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
    ";
        // line 91
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 92
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 93
        echo "
    <script>
        \$(document).ready(function (e) {
            \$(\"input[name='typeuser']\").click(function (e) {
                if (e.target.value == 1) {
                    \$(\"#agence_first_login\").css('display', 'block');
                    \$(\"#demarcheur_first_login\").css('display', 'none');
                } else {
                    \$(\"#agence_first_login\").css('display', 'none');
                    \$(\"#demarcheur_first_login\").css('display', 'block');
                }
            });

            // afficher les informations (mail, tel) du demarcheur ou de l'agence
            let contact = 0;
            \$(\"a[href='#contactPhone'\").click(function () {
                \$(\".text-area\").css('display', 'block');
                \$(\"#contactPhone\").css('display', 'flex');
                contact += 1;
                displayTextArea(2);
            });
            \$(\".contactForm\").click(function () {
                \$(\".text-area\").css('display', 'block');
                \$(\"#contactForm\").css('display', 'flex');
                contact += 1;
                displayTextArea(1);
            });

            let displayTextArea = function (form) {
                if (contact > 1) {
                    \$(\".text-area\").removeClass('warning-small').addClass('warning-large');
                } else {
                    if (form == 2) {
                        \$(\"#contactPhone\").css('float', 'left');
                    }
                    \$(\".text-area\").addClass('warning-small');
                }
            }

            // chargement des images
            \$(\".imageminia\").click(function (e) {
                e.preventDefault();
                // alert(\"chargement d'image\");
                // console.log(e.target.attr('imgptf'));
                let indeximg = \$(this).data('imgptf');
                // console.log(\$(this).data('imgptf'));
                // console.log(\$(\".imggf-\"+indeximg).attr('src'));
                // \$(\".slide.active img\").attr('src', 'https://media.jumiadeals.com/ci_live/66531c68775e35c47f5a69a.desktop-small.jpg')
                // \$(\".slide.active img\").attr('src', \$(\".imggf-\"+indeximg).attr('src'));
                // console.log();
                \$(\".slide.active\").removeClass(\"active\").css(\"opacity\", 0);
                \$(\".imggf-\" + indeximg).parent().addClass(\"active\").css(\"opacity\", '');
                \$(\".img-miniature li.active\").removeClass(\"active\");
                \$(this).parent().addClass('active');
            })

            
        });
    </script>

    ";
        // line 153
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer_general"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 154
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 154,  329 => 153,  267 => 93,  263 => 92,  252 => 91,  248 => 90,  244 => 89,  240 => 88,  235 => 85,  231 => 84,  225 => 80,  223 => 79,  218 => 76,  214 => 74,  210 => 73,  207 => 72,  204 => 71,  200 => 69,  196 => 68,  193 => 67,  189 => 65,  185 => 64,  182 => 63,  180 => 62,  177 => 61,  173 => 60,  170 => 59,  167 => 58,  165 => 57,  144 => 38,  141 => 37,  136 => 35,  132 => 34,  128 => 33,  124 => 32,  117 => 28,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>ChapMaison - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"ChapMaison\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"ChapMaison\">

    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ 'assets/images/apple-icon-57x57.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ 'assets/images/apple-icon-60x60.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ 'assets/images/apple-icon-72x72.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ 'assets/images/apple-icon-76x76.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ 'assets/images/apple-icon-114x114.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ 'assets/images/apple-icon-120x120.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ 'assets/images/apple-icon-144x144.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ 'assets/images/apple-icon-152x152.png'|theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ 'assets/images/apple-icon-180x180.png'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"{{ 'assets/images/android-icon-192x192.png'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ 'assets/images/favicon-32x32.png'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{ 'assets/images/favicon-96x96.png'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ 'assets/images/favicon-16x16.png'|theme }}\">
    <link rel=\"manifest\" href=\"{{ 'assets/images/manifest.json'|theme }}\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"{{ 'assets/images/ms-icon-144x144.png'|theme }}\">
    <meta name=\"theme-color\" content=\"#ffffff\">


    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/chapmaison.png'|theme }}\">
    <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/home.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
    
    {% styles %}

    <style>
        .responsive {
            height: 160px;
        }

        .responsive-collapse {
            display: block !important;
        }

        #layout-header {
            margin-top: 0px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    {% if user %}
        {% if user.demarcheur_id %}
        <header id=\"layout-header\">
            {% partial 'site/header_demarcheur' %}
        </header>
        {% elseif user.agence_id %}
            <header id=\"layout-header\">
                {% partial 'site/header_agence' %}
            </header>
        {% else %}
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>
        {% endif %}
    {% else %}
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>
    {% endif %}

    <!-- Content -->
    <section id=\"layout-content\">
        {% page %}
    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        {% partial 'site/footer' %}
    </footer>

    <!-- Scripts -->
    <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
    <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
    {% framework extras %}
    {% scripts %}

    <script>
        \$(document).ready(function (e) {
            \$(\"input[name='typeuser']\").click(function (e) {
                if (e.target.value == 1) {
                    \$(\"#agence_first_login\").css('display', 'block');
                    \$(\"#demarcheur_first_login\").css('display', 'none');
                } else {
                    \$(\"#agence_first_login\").css('display', 'none');
                    \$(\"#demarcheur_first_login\").css('display', 'block');
                }
            });

            // afficher les informations (mail, tel) du demarcheur ou de l'agence
            let contact = 0;
            \$(\"a[href='#contactPhone'\").click(function () {
                \$(\".text-area\").css('display', 'block');
                \$(\"#contactPhone\").css('display', 'flex');
                contact += 1;
                displayTextArea(2);
            });
            \$(\".contactForm\").click(function () {
                \$(\".text-area\").css('display', 'block');
                \$(\"#contactForm\").css('display', 'flex');
                contact += 1;
                displayTextArea(1);
            });

            let displayTextArea = function (form) {
                if (contact > 1) {
                    \$(\".text-area\").removeClass('warning-small').addClass('warning-large');
                } else {
                    if (form == 2) {
                        \$(\"#contactPhone\").css('float', 'left');
                    }
                    \$(\".text-area\").addClass('warning-small');
                }
            }

            // chargement des images
            \$(\".imageminia\").click(function (e) {
                e.preventDefault();
                // alert(\"chargement d'image\");
                // console.log(e.target.attr('imgptf'));
                let indeximg = \$(this).data('imgptf');
                // console.log(\$(this).data('imgptf'));
                // console.log(\$(\".imggf-\"+indeximg).attr('src'));
                // \$(\".slide.active img\").attr('src', 'https://media.jumiadeals.com/ci_live/66531c68775e35c47f5a69a.desktop-small.jpg')
                // \$(\".slide.active img\").attr('src', \$(\".imggf-\"+indeximg).attr('src'));
                // console.log();
                \$(\".slide.active\").removeClass(\"active\").css(\"opacity\", 0);
                \$(\".imggf-\" + indeximg).parent().addClass(\"active\").css(\"opacity\", '');
                \$(\".img-miniature li.active\").removeClass(\"active\");
                \$(this).parent().addClass('active');
            })

            
        });
    </script>

    {% partial 'site/footer_general' %}
</body>

</html>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/layouts/default.htm", "");
    }
}

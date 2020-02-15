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
    <title>October CMS - ";
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
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
    <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/home.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
    ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 17
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

        #layout-content {
            margin-top: 20px;
        }

        body {
            padding-top: 44px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    ";
        // line 44
        if (($context["user"] ?? null)) {
            // line 45
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "demarcheur_id", [], "any", false, false, false, 45)) {
                // line 46
                echo "    <header id=\"layout-header\">
        ";
                // line 47
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header_demarcheur"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 48
                echo "    </header>
    ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 49
($context["user"] ?? null), "agence_id", [], "any", false, false, false, 49)) {
                // line 50
                echo "    <header id=\"layout-header\">
        ";
                // line 51
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header_agence"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 52
                echo "    </header>
    ";
            } else {
                // line 54
                echo "    <header id=\"layout-header\">
        ";
                // line 55
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 56
                echo "    </header>
    ";
            }
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "    <header id=\"layout-header\">
        ";
            // line 60
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 61
            echo "    </header>
    ";
        }
        // line 63
        echo "
    <!-- Content -->
    <section id=\"layout-content\">
        ";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 67
        echo "    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        ";
        // line 71
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 72
        echo "    </footer>

    <!-- Scripts -->
    <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
    <script src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
    ";
        // line 78
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
        // line 79
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 80
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
        // line 140
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer_general"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 141
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
        return array (  275 => 141,  271 => 140,  209 => 80,  205 => 79,  194 => 78,  190 => 77,  186 => 76,  182 => 75,  177 => 72,  173 => 71,  167 => 67,  165 => 66,  160 => 63,  156 => 61,  152 => 60,  149 => 59,  146 => 58,  142 => 56,  138 => 55,  135 => 54,  131 => 52,  127 => 51,  124 => 50,  122 => 49,  119 => 48,  115 => 47,  112 => 46,  109 => 45,  107 => 44,  78 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>October CMS - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"OctoberCMS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"OctoberCMS\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
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

        #layout-content {
            margin-top: 20px;
        }

        body {
            padding-top: 44px;
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

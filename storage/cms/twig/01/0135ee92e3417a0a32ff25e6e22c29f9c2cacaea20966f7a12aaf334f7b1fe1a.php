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
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/home.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "    </head>
    <body>

        <!-- Header -->
        ";
        // line 20
        if (($context["user"] ?? null)) {
            // line 21
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "demarcheur_id", [], "any", false, false, false, 21)) {
                // line 22
                echo "                <header id=\"layout-header\">
                    ";
                // line 23
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header_demarcheur"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 24
                echo "                </header>
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 25
($context["user"] ?? null), "agence_id", [], "any", false, false, false, 25)) {
                // line 26
                echo "                <header id=\"layout-header\">
                    ";
                // line 27
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header_agence"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 28
                echo "                </header>
            ";
            } else {
                // line 30
                echo "                <header id=\"layout-header\">
                    ";
                // line 31
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 32
                echo "                </header>
            ";
            }
            // line 34
            echo "        ";
        } else {
            // line 35
            echo "            <header id=\"layout-header\">
                ";
            // line 36
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 37
            echo "            </header>
        ";
        }
        // line 39
        echo "
        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 43
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 54
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
        // line 55
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 56
        echo "
        <script>
            \$(document).ready(function(e){
                \$(\"input[name='typeuser']\").click(function(e){
                    if(e.target.value == 1){
                        \$(\"#agence_first_login\").css('display', 'block');
                        \$(\"#demarcheur_first_login\").css('display', 'none');
                    }else{
                        \$(\"#agence_first_login\").css('display', 'none');
                        \$(\"#demarcheur_first_login\").css('display', 'block');
                    }
                });

                // afficher les informations (mail, tel) du demarcheur ou de l'agence
                \$(\"a[href='#contactPhone'\").click(function(){
                    \$(\"#super-form-container\").css('display', 'block');
                    \$(\"#contactPhone\").css('display', 'flex');
                });
                \$(\".contactForm\").click(function(){
                    \$(\"#super-form-container\").css('display', 'block');
                    \$(\"#contactForm\").css('display', 'flex');
                });

                // chargement des images
                \$(\".imageminia\").click(function(e){
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
                    \$(\".imggf-\"+indeximg).parent().addClass(\"active\").css(\"opacity\", '');
                    \$(\".img-miniature li.active\").removeClass(\"active\");
                    \$(this).parent().addClass('active');
                })
            });
        </script>

    </body>
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
        return array (  185 => 56,  181 => 55,  170 => 54,  166 => 53,  162 => 52,  158 => 51,  153 => 48,  149 => 47,  143 => 43,  141 => 42,  136 => 39,  132 => 37,  128 => 36,  125 => 35,  122 => 34,  118 => 32,  114 => 31,  111 => 30,  107 => 28,  103 => 27,  100 => 26,  98 => 25,  95 => 24,  91 => 23,  88 => 22,  85 => 21,  83 => 20,  77 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
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
            \$(document).ready(function(e){
                \$(\"input[name='typeuser']\").click(function(e){
                    if(e.target.value == 1){
                        \$(\"#agence_first_login\").css('display', 'block');
                        \$(\"#demarcheur_first_login\").css('display', 'none');
                    }else{
                        \$(\"#agence_first_login\").css('display', 'none');
                        \$(\"#demarcheur_first_login\").css('display', 'block');
                    }
                });

                // afficher les informations (mail, tel) du demarcheur ou de l'agence
                \$(\"a[href='#contactPhone'\").click(function(){
                    \$(\"#super-form-container\").css('display', 'block');
                    \$(\"#contactPhone\").css('display', 'flex');
                });
                \$(\".contactForm\").click(function(){
                    \$(\"#super-form-container\").css('display', 'block');
                    \$(\"#contactForm\").css('display', 'flex');
                });

                // chargement des images
                \$(\".imageminia\").click(function(e){
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
                    \$(\".imggf-\"+indeximg).parent().addClass(\"active\").css(\"opacity\", '');
                    \$(\".img-miniature li.active\").removeClass(\"active\");
                    \$(this).parent().addClass('active');
                })
            });
        </script>

    </body>
</html>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/layouts/default.htm", "");
    }
}

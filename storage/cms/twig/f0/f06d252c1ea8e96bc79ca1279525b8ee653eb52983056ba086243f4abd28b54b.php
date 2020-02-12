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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/layouts/layout_demarcheur.htm */
class __TwigTemplate_d05f8953f919dc3fe8c38085874967546bdfbf49c4334300d9c1954a058210a4 extends \Twig\Template
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
        <header id=\"layout-header\">
            ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header_demarcheur"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\" class=\"container\">
            ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 38
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
        // line 39
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 40
        echo "
        <script>
            \$(document).ready(function(e){
                \$(\".delete-publication\").click(function(e){
                    \$(\"#deletePublication\").modal('show');
                    var link = \$(\"#link-modal-to-delete-publication\").attr('href') + \"/\" + \$(this).data('id');
                    \$(\"#link-modal-to-delete-publication\").attr(\"href\", link);
                });

                \$(\".unpublisher-publication\").click(function(e){
                    \$(\"#UnPublisherPublication\").modal('show');
                    var link = \$(\"#link-modal-to-unpublisher-publication\").attr('href') + \"/\" + \$(this).data('id');
                    \$(\"#link-modal-to-unpublisher-publication\").attr(\"href\", link);
                });

                \$(\".publisher-publication\").click(function(e){
                    \$(\"#PublisherPublication\").modal('show');
                    console.log(\$(this).data('id'));
                    var link = \$(\"#link-modal-to-publisher-publication\").attr('href') + \"/\" + \$(this).data('id');
                    \$(\"#link-modal-to-publisher-publication\").attr(\"href\", link);
                });
              
            })
        </script>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/layouts/layout_demarcheur.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 40,  134 => 39,  123 => 38,  119 => 37,  115 => 36,  111 => 35,  106 => 32,  102 => 31,  96 => 27,  94 => 26,  88 => 22,  84 => 21,  77 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
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
        <header id=\"layout-header\">
            {% partial 'site/header_demarcheur' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\" class=\"container\">
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
                \$(\".delete-publication\").click(function(e){
                    \$(\"#deletePublication\").modal('show');
                    var link = \$(\"#link-modal-to-delete-publication\").attr('href') + \"/\" + \$(this).data('id');
                    \$(\"#link-modal-to-delete-publication\").attr(\"href\", link);
                });

                \$(\".unpublisher-publication\").click(function(e){
                    \$(\"#UnPublisherPublication\").modal('show');
                    var link = \$(\"#link-modal-to-unpublisher-publication\").attr('href') + \"/\" + \$(this).data('id');
                    \$(\"#link-modal-to-unpublisher-publication\").attr(\"href\", link);
                });

                \$(\".publisher-publication\").click(function(e){
                    \$(\"#PublisherPublication\").modal('show');
                    console.log(\$(this).data('id'));
                    var link = \$(\"#link-modal-to-publisher-publication\").attr('href') + \"/\" + \$(this).data('id');
                    \$(\"#link-modal-to-publisher-publication\").attr(\"href\", link);
                });
              
            })
        </script>

    </body>
</html>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/layouts/layout_demarcheur.htm", "");
    }
}

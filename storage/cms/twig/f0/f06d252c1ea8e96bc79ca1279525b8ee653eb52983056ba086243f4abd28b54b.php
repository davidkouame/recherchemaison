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
        <title>ChapMaison - ";
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
        <meta name=\"author\" content=\"ChapMaison\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"ChapMaison\">
        
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-57x57.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-60x60.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-72x72.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-76x76.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-114x114.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-120x120.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-144x144.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-152x152.png");
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-icon-180x180.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/android-icon-192x192.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon-32x32.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon-96x96.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon-16x16.png");
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/manifest.json");
        echo "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ms-icon-144x144.png");
        echo "\">
    <meta name=\"theme-color\" content=\"#ffffff\">


    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/chapmaison.png");
        echo "\">
    <link href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/home.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/home.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        <!--<script src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/dropzone.js");
        echo "\"></script>-->
        <link rel=\"stylesheet\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/dropzone.css");
        echo "\">   

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
        <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\" />
        ";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 46
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
    
            body {
                padding-top: 44px;
            }
        </style>
    </head>
    <body>
        

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 70
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header_demarcheur"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 71
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\" class=\"container\">
            ";
        // line 75
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 76
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js\"></script>
        ";
        // line 88
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
        // line 89
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 90
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/spartan-multi-image-picker/dist/js/spartan-multi-image-picker.js");
        echo "\"></script>

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
<script type=\"text/javascript\">
    \$(function(){

        \$(\"#coba\").spartanMultiImagePicker({
            fieldName:        'fileUpload[]',
            maxCount:         5,
            rowHeight:        '200px',
            groupClassName:   'col-md-4 col-sm-4 col-xs-6',
            maxFileSize:      '',
            placeholderImage: {
                image: 'placeholder.png',
                width: '100%'
            },
            dropFileLabel : \"Drop Here\",
            onAddRow:       function(){
                console.log('add new row');
            },
            onRenderedPreview : function(){
                console.log('preview rendered');
            },
            onRemoveRow : function(){
                console.log('remove row');
            },
            onExtensionErr : function(){
                console.log('extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr : function(){
                console.log('file size too big');
                alert('File size too big');
            }
        });

    });
</script>
        ";
        // line 151
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer_general"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 152
        echo "
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
        return array (  318 => 152,  314 => 151,  251 => 91,  248 => 90,  244 => 89,  233 => 88,  228 => 86,  224 => 85,  220 => 84,  215 => 81,  211 => 80,  205 => 76,  203 => 75,  197 => 71,  193 => 70,  167 => 46,  164 => 45,  156 => 40,  152 => 39,  148 => 38,  144 => 37,  140 => 36,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  116 => 27,  111 => 25,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
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

        <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/home.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        <!--<script src=\"{{ 'assets/javascript/dropzone.js'|theme }}\"></script>-->
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/dropzone.css'|theme }}\">   

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
        <link href=\"https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css\" rel=\"stylesheet\" />
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
    
            body {
                padding-top: 44px;
            }
        </style>
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
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js\"></script>
        {% framework extras %}
        {% scripts %}

        <script type=\"text/javascript\" src=\"{{ 'assets/bower_components/spartan-multi-image-picker/dist/js/spartan-multi-image-picker.js'|theme }}\"></script>

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
<script type=\"text/javascript\">
    \$(function(){

        \$(\"#coba\").spartanMultiImagePicker({
            fieldName:        'fileUpload[]',
            maxCount:         5,
            rowHeight:        '200px',
            groupClassName:   'col-md-4 col-sm-4 col-xs-6',
            maxFileSize:      '',
            placeholderImage: {
                image: 'placeholder.png',
                width: '100%'
            },
            dropFileLabel : \"Drop Here\",
            onAddRow:       function(){
                console.log('add new row');
            },
            onRenderedPreview : function(){
                console.log('preview rendered');
            },
            onRemoveRow : function(){
                console.log('remove row');
            },
            onExtensionErr : function(){
                console.log('extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr : function(){
                console.log('file size too big');
                alert('File size too big');
            }
        });

    });
</script>
        {% partial 'site/footer_general' %}

    </body>
</html>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/layouts/layout_demarcheur.htm", "");
    }
}

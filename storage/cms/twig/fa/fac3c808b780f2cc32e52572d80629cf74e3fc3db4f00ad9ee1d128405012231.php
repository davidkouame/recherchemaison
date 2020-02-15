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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/layouts/layout_agence.htm */
class __TwigTemplate_23f576f598410bcd1310c7b8a3f803b9a12382bd1cbbc7ad6c0559aaaa49e305 extends \Twig\Template
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
        <!--<script src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/dropzone.js");
        echo "\"></script>-->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/dropzone.css");
        echo "\">   

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">

        ";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 22
        echo "    </head>
    <body>

        ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header_general"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "
        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header_agence"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\" class=\"container\">
            ";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 35
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        <!--<script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.dropzone-master/src/index.js");
        echo "\"></script>-->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js\"></script>

        
        ";
        // line 50
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
        // line 51
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 52
        echo "
        <script type=\"text/javascript\" src=\"";
        // line 53
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
        // line 116
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer_general"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 117
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/layouts/layout_agence.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 117,  233 => 116,  167 => 53,  164 => 52,  160 => 51,  149 => 50,  142 => 46,  138 => 45,  134 => 44,  130 => 43,  125 => 40,  121 => 39,  115 => 35,  113 => 34,  107 => 30,  103 => 29,  98 => 26,  94 => 25,  89 => 22,  86 => 21,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
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
        <!--<script src=\"{{ 'assets/javascript/dropzone.js'|theme }}\"></script>-->
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/dropzone.css'|theme }}\">   

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">

        {% styles %}
    </head>
    <body>

        {% partial 'site/header_general' %}

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header_agence' %}
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
        <!--<script src=\"{{ 'assets/vendor/jquery.dropzone-master/src/index.js'|theme }}\"></script>-->
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
</html>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/layouts/layout_agence.htm", "");
    }
}

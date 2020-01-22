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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        <!--<script src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/dropzone.js");
        echo "\"></script>-->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/dropzone.css");
        echo "\">   

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">

        ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 21
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/agence_navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "                </div>
                <div class=\"col-md-9\">
                    ";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 37
        echo "                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        <!--<script src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.dropzone-master/src/index.js");
        echo "\"></script>-->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js\"></script>

        
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
        <script type=\"text/javascript\" src=\"";
        // line 57
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
        return array (  168 => 57,  165 => 56,  161 => 55,  150 => 54,  143 => 50,  139 => 49,  135 => 48,  131 => 47,  126 => 44,  122 => 43,  114 => 37,  112 => 36,  108 => 34,  104 => 33,  96 => 27,  92 => 26,  85 => 21,  82 => 20,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
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
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        <!--<script src=\"{{ 'assets/javascript/dropzone.js'|theme }}\"></script>-->
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/dropzone.css'|theme }}\">   

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">

        {% styles %}
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    {% partial 'site/agence_navbar' %}
                </div>
                <div class=\"col-md-9\">
                    {% page %}
                </div>
            </div>
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

    </body>
</html>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/layouts/layout_agence.htm", "");
    }
}

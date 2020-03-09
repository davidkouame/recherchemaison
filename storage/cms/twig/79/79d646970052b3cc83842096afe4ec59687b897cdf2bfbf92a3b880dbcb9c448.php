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

/* /Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/register/default.htm */
class __TwigTemplate_b1a87537eedcd6bf09f649640a377ba4b14e6a543c49e6717b19838a7166b015 extends \Twig\Template
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
        if ((($context["view"] ?? null) == "first_step")) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::first_step")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 4
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/register/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if view == 'first_step' %}
    {% partial __SELF__ ~ '::first_step' %}
{% else %}
    {% partial __SELF__ ~ '::register' %}
{% endif %}", "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/register/default.htm", "");
    }
}

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

/* /Applications/MAMP/htdocs/recherchemaison/plugins/indikator/news/components/subscribe/default.htm */
class __TwigTemplate_d620a36ffad649ccc198fac9b18fc961b77556296964fa5a4e7a54d0f58b647a extends \Twig\Template
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
    input[name=\"email\"]:focus {
        box-shadow: unset;
    }
</style>
<form class=\"row\" data-request=\"onSubscription\"
    data-request-success=\"alert('";
        // line 7
        echo twig_escape_filter($this->env, ($context["text_messages"] ?? null), "html", null, true);
        echo "');\$('#subscriptionForm').trigger('reset');\" id=\"subscriptionForm\">
    <div class=\"row\">
        <div class=\"col-md-offset-4 col-md-4\">
            <p class=\"text-4 text-center mb-5\" style=\"margin-bottom: 0px !important;\">
                Abonnez-vous à notre newsletter pour obtenir des nouvelles importantes
            </p>
        </div>
    </div>
    ";
        // line 15
        if ((($context["category_count"] ?? null) == 0)) {
            // line 16
            echo "    <input type=\"hidden\" name=\"category\" value=\"0\">
    ";
        } else {
            // line 18
            echo "    <div class=\"form-group\">
        <label>";
            // line 19
            echo twig_escape_filter($this->env, ($context["text_category"] ?? null), "html", null, true);
            echo "</label>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 21
                echo "        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" name=\"category[]\" value=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23), "html", null, true);
                echo "
            </label>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </div>
    ";
        }
        // line 29
        echo "
    <div class=\"row\">
        <div class=\"col-md-offset-4 col-md-4 input-group mb-3\" style=\"display: flex\">
            <!--<div class=\"input-group-prepend\" style=\"height: 51px; margin-top: 24px;display: flex\">
                <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fas fa-envelope\"></i></span>
            </div>-->
            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" aria-label=\"Username\"
                aria-describedby=\"basic-addon1\" id=\"subscribersEmail\"
                style=\"height: 48px;border: 1px solid #dae1e3;display: flex\">
            <div class=\"input-group-append\" style=\"display: inline-block;\">
                <button class=\"btn btn-primary btn-block my-4\"
                    style=\"border-top-left-radius: 0px;border-bottom-left-radius: 0px;display: flex;height: 48px;padding-top: 10px;\"
                    type=\"submit\">S'abonner</button>
            </div>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/plugins/indikator/news/components/subscribe/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  89 => 27,  77 => 23,  73 => 21,  69 => 20,  65 => 19,  62 => 18,  58 => 16,  56 => 15,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    input[name=\"email\"]:focus {
        box-shadow: unset;
    }
</style>
<form class=\"row\" data-request=\"onSubscription\"
    data-request-success=\"alert('{{ text_messages }}');\$('#subscriptionForm').trigger('reset');\" id=\"subscriptionForm\">
    <div class=\"row\">
        <div class=\"col-md-offset-4 col-md-4\">
            <p class=\"text-4 text-center mb-5\" style=\"margin-bottom: 0px !important;\">
                Abonnez-vous à notre newsletter pour obtenir des nouvelles importantes
            </p>
        </div>
    </div>
    {% if category_count == 0 %}
    <input type=\"hidden\" name=\"category\" value=\"0\">
    {% else %}
    <div class=\"form-group\">
        <label>{{ text_category }}</label>
        {% for category in category_list %}
        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" name=\"category[]\" value=\"{{ category.id }}\"> {{ category.name }}
            </label>
        </div>
        {% endfor %}
    </div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-md-offset-4 col-md-4 input-group mb-3\" style=\"display: flex\">
            <!--<div class=\"input-group-prepend\" style=\"height: 51px; margin-top: 24px;display: flex\">
                <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fas fa-envelope\"></i></span>
            </div>-->
            <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" aria-label=\"Username\"
                aria-describedby=\"basic-addon1\" id=\"subscribersEmail\"
                style=\"height: 48px;border: 1px solid #dae1e3;display: flex\">
            <div class=\"input-group-append\" style=\"display: inline-block;\">
                <button class=\"btn btn-primary btn-block my-4\"
                    style=\"border-top-left-radius: 0px;border-bottom-left-radius: 0px;display: flex;height: 48px;padding-top: 10px;\"
                    type=\"submit\">S'abonner</button>
            </div>
        </div>
    </div>
</form>", "/Applications/MAMP/htdocs/recherchemaison/plugins/indikator/news/components/subscribe/default.htm", "");
    }
}

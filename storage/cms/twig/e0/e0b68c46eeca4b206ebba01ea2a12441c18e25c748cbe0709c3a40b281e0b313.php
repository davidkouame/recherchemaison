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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/footer.htm */
class __TwigTemplate_b0224cbbac62caa0e3130265148070a68e21a6ef4866949f48beb54290545d37 extends \Twig\Template
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
    @media screen and (max-width: 548px){
        .footer-two, .footer-four{
            text-align: left !important;
        }
    }

    @media screen and (min-width: 992px) and (max-width: 2000px){
        .footer-one, .footer-two, .footer-three, .footer-four{
            height: 60px !important;
            text-align: center !important;
        }
    }

    .footer-two, .footer-four{
        text-align: right;
    }
</style>

<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <div class=\"row\">
            <!--<div class=\"col-md-6\" style=\"padding-top: 15px;\">
                <span style=\"font-weight: bold;\">ChapMaison</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quas corporis harum enim iure pariatur aperiam obcaecati sequi beatae molestiae, voluptates porro quae accusantium repellat nulla perspiciatis, dolor, eveniet ullam.
            </div>-->
            <div class=\"col-md-12\">
                <ul class=\"list-unstyled support-list\">
                    <li class=\"col-sm-6 col-md-4 col-xs-6 mb-2 d-flex align-items-center footer-one\">
                        <span style=\"font-weight: bold;\">Localisation :</span> Abidjan,Côte d'Ivoire
                    </li>
                    <li class=\"col-sm-6 col-md-4 col-xs-6 mb-2 d-flex align-items-center footer-two\">
                        <span style=\"font-weight: bold;\">Téléphone : </span> <a href=\"tel:+61283766284\"> <span>+225 47 88 69 05</span> <br>  <span style=\"padding-left: 88px;\">+225 08 73 13 00</span> </a></li>
                    <li class=\"col-sm-6 col-md-4 col-xs-6 mb-2 d-flex align-items-center footer-three\">
                        <span style=\"font-weight: bold;\">Email : </span> <a href=\"mailto:support@chapmaison.com\"> support@chapmaison.com</a>
                    </li>
                    <li class=\"col-sm-6 col-md-4 col-xs-6 mb-2 d-flex align-items-center footer-four\">
                        <span style=\"font-weight: bold;\">Site web : </span><a href=\"#\"> www.chapmaison.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <br><br>
        <p class=\"muted credit\" style=\"text-align: center;\">&copy; ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " all rights reserved &copy; by ChapMaison.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 44,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    @media screen and (max-width: 548px){
        .footer-two, .footer-four{
            text-align: left !important;
        }
    }

    @media screen and (min-width: 992px) and (max-width: 2000px){
        .footer-one, .footer-two, .footer-three, .footer-four{
            height: 60px !important;
            text-align: center !important;
        }
    }

    .footer-two, .footer-four{
        text-align: right;
    }
</style>

<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <div class=\"row\">
            <!--<div class=\"col-md-6\" style=\"padding-top: 15px;\">
                <span style=\"font-weight: bold;\">ChapMaison</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quas corporis harum enim iure pariatur aperiam obcaecati sequi beatae molestiae, voluptates porro quae accusantium repellat nulla perspiciatis, dolor, eveniet ullam.
            </div>-->
            <div class=\"col-md-12\">
                <ul class=\"list-unstyled support-list\">
                    <li class=\"col-sm-6 col-md-4 col-xs-6 mb-2 d-flex align-items-center footer-one\">
                        <span style=\"font-weight: bold;\">Localisation :</span> Abidjan,Côte d'Ivoire
                    </li>
                    <li class=\"col-sm-6 col-md-4 col-xs-6 mb-2 d-flex align-items-center footer-two\">
                        <span style=\"font-weight: bold;\">Téléphone : </span> <a href=\"tel:+61283766284\"> <span>+225 47 88 69 05</span> <br>  <span style=\"padding-left: 88px;\">+225 08 73 13 00</span> </a></li>
                    <li class=\"col-sm-6 col-md-4 col-xs-6 mb-2 d-flex align-items-center footer-three\">
                        <span style=\"font-weight: bold;\">Email : </span> <a href=\"mailto:support@chapmaison.com\"> support@chapmaison.com</a>
                    </li>
                    <li class=\"col-sm-6 col-md-4 col-xs-6 mb-2 d-flex align-items-center footer-four\">
                        <span style=\"font-weight: bold;\">Site web : </span><a href=\"#\"> www.chapmaison.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <br><br>
        <p class=\"muted credit\" style=\"text-align: center;\">&copy; {{ \"now\"|date(\"Y\") }} all rights reserved &copy; by ChapMaison.</p>
    </div>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/partials/site/footer.htm", "");
    }
}

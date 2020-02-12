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

/* /Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/detail_publication.htm */
class __TwigTemplate_3c799046bec2bfa8f40e80197c874958dd12557858180047153ebba2e8a9b54c extends \Twig\Template
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
    @media screen and (max-width: 990px) {
        .singlepost .post-content {
            width: 100%;
        }
        .singlepost .aside-without-description{
            display: none;
        }
    }

    @media screen and (max-width: 950px) {
        .singlepost .super-form-container .form-area{
            width: 100%
        }
    }

    @media screen and (max-width: 600px) {
        .singlepost .super-form-container .form-area .contact-form .column.wide{
            width: 100%
        }

        .phoneNumberWide{
            margin-top: 10px;
            width: 100%
        }
    }

    @media screen and (min-width: 990px) {
        .singlepost .aside-description{
            display: none;
        }
    }

    @media screen and (min-width: 950px) {
        .warning{
        margin-bottom: 20px;
        width: 100% !important;
        }

        form.contact-form, .contact-form form, .contact-form fieldset {
            float: left;
            width: 100%;
        }

        .contactPhone{
            width: 100%;
        }

       
    }

    @media screen and (min-width: 600px) {
        .phoneNumberWide{
            width: 47.864% !important;
        }
    }

    
    
</style>
<div class=\"container-fluid detail-publication\" style=\"margin-top: 20px; padding-left: 80px;padding-right: 80px;\">
    <div class=\"col-md-12\">

    
    <div class=\"card\">
        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 66
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 67
                echo "            <div class=\"alert alert-success\" style=\"text-align: center;\">
                ";
                // line 68
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
            </div>
        ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 71
        echo "        <article class=\"singlepost \">
            <header class=\"heading-area\">
                <h1 class=\"\"><span itemprop=\"name\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 73), "html", null, true);
        echo "</span></h1>
            </header>
            <div class=\"row\">
                <div class=\"col-md-12 twocolumn\">
                    <div class=\"post-content\">
                        <!-- slideshow -->
                        <div class=\"slideshow gallery-js-ready autorotation-disabled\">
                            <div class=\"mask\">
                                <div class=\"slideset\" style=\"height: 420px;\">
                                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 83
            echo "                                    ";
            if (($context["key"] == 0)) {
                // line 84
                echo "                                    <div class=\"slide active\" style=\"display: block;\"><img itemprop=\"image\" class=\"imggf-1\"
                                            src=\"";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 85)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getPath", [], "any", false, false, false, 85), "html", null, true);
                echo "\"
                                            alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                    ";
            } else {
                // line 88
                echo "                                    <div class=\"slide\" style=\"display: block; opacity: 0;\">
                                        <img itemprop=\"image\" class=\"imggf-";
                // line 89
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 89), "html", null, true);
                echo "\"
                                            data-src=\"https://media.jumiadeals.com/ci_live/66531c68775e35c47f5a69a.desktop-gallery-large.jpg\"
                                            alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                    ";
            }
            // line 93
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                                </div>
                                <span class=\"loader\" style=\"display: none;\"></span>
                            </div>
                            <ul class=\"pagination img-miniature\">
                                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 98));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 99
            echo "                                ";
            if (($context["key"] == 0)) {
                // line 100
                echo "                                <li class=\"active\">
                                    <a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"1\"><img
                                            style=\"width: 100px;height: 66px;\"
                                            src=\"";
                // line 103
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 103), 100, 100]);
                echo "\"
                                            alt=\"";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 104), "html", null, true);
                echo "\">
                                    </a>
                                </li>
                                ";
            } else {
                // line 108
                echo "                                <li><a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\"><img
                                            style=\"width: 100px;height: 66px;\"
                                            src=\"";
                // line 110
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 110), 100, 100]);
                echo "\"
                                            alt=\"";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 111), "html", null, true);
                echo "\"></a></li>
                                ";
            }
            // line 113
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "    
    
                            </ul>
                        </div>
    
                        <div class=\"post-attributes\">
                            <div class=\"new-attr-style\">
                                ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "nbre_piece", [], "any", false, false, false, 121)) {
            echo " <h3>Nombre de
                                    pièces<span>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "nbre_piece", [], "any", false, false, false, 122), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 123
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "commune", [], "any", false, false, false, 123)) {
            echo " <h3>
                                    Commune<span>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "commune", [], "any", false, false, false, 124), "libelle", [], "any", false, false, false, 124), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 125
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "ville", [], "any", false, false, false, 125)) {
            echo " <h3>
                                    Ville<span>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "ville", [], "any", false, false, false, 126), "libelle", [], "any", false, false, false, 126), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 127
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "Localisation", [], "any", false, false, false, 127)) {
            echo " <h3>
                                    Localisation<span>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "Localisation", [], "any", false, false, false, 128), "libelle", [], "any", false, false, false, 128), "html", null, true);
            echo "<span></span></span></h3>
                                ";
        }
        // line 130
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "typepublication", [], "any", false, false, false, 130)) {
            echo " <h3>Type de
                                    publication<span>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "typepublication", [], "any", false, false, false, 131), "libelle", [], "any", false, false, false, 131), "html", null, true);
            echo "<span></span></span></h3>
                                ";
        }
        // line 133
        echo "                            </div>
                        </div>
                        <div class=\"post-text-content\" style=\"margin-top: 12px;\">
                            <div class=\"title\">Description :</div>
                            <p>
                                ";
        // line 138
        echo twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "description", [], "any", false, false, false, 138);
        echo "
                            </p>
                            <p>
                                <b>Date de publication: ";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 141), "html", null, true);
        echo "</b>
                            </p>
                        </div>

                        <div class=\"aside aside-description\" style=\"width: 100%;\">
                            <div class=\"aside-infos\" style=\"min-height: unset;\">
                                <section id=\"priceSection\" itemprop=\"offers\" itemscope=\"\" itemtype=\"http://schema.org/Offer\">
                                    <meta itemprop=\"url\" content=\"https://deals.jumia.ci/belle-apparemment-vendre--pid5443116\">
                                    <meta itemprop=\"availability\" content=\"http://schema.org/InStock\">
                                    <span class=\"price\">
                                        <span itemprop=\"price\" content=\"95000000.00\">";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "prix", [], "any", false, false, false, 151), "html", null, true);
        echo "</span>
                                        <span itemprop=\"priceCurrency\" content=\"FCFA\">FCFA</span>
                                    </span>
        
                                    <div itemprop=\"seller\" itemscope=\"\" itemtype=\"http://schema.org/Person\"
                                        class=\"seller-details\">
                                        <dl>
                                            ";
        // line 158
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 158)) {
            // line 159
            echo "                                            <dt>Agence</dt>
                                            <dd><span itemprop=\"name\">";
            // line 160
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 160), "libelle", [], "any", false, false, false, 160), 0, 20);
            echo "</span>
                                            </dd>
                                            <dt>Lieu</dt>
                                            <dd itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\"><span
                                                    itemprop=\"addressLocality\">";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 164), "localisation", [], "any", false, false, false, 164), "libelle", [], "any", false, false, false, 164), "html", null, true);
            echo "</span>
                                            </dd>
                                            <dt>Publiée</dt>
                                            <dd><time datetime=\"1.2.2020 19:02\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 167), "html", null, true);
            echo "</time></dd>
                                            ";
        } else {
            // line 169
            echo "                                            <dt>Démarcheur</dt>
                                            <dd><span
                                                    itemprop=\"name\">";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 171), "nom", [], "any", false, false, false, 171), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 171), "prenom", [], "any", false, false, false, 171), "html", null, true);
            echo "</span>
                                            </dd>
                                            <dt>Publiée</dt>
                                            <dd><time datetime=\"1.2.2020 19:02\">";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 174), "html", null, true);
            echo "</time></dd>
                                            ";
        }
        // line 176
        echo "                                        </dl>
                                    </div>
                                </section>
                            </div>
                        </div>
    
    
    
                        <div class=\"btn-holder\"  style=\"margin-bottom: 12px;\">
                            <a href=\"#contactPhone\" data-scroll-to=\"#contactPhone\" data-transaction-id=\"Phone_5443116_guest\"
                                data-lead-type=\"Phone\" class=\"button button-phone2 transaction-click\"
                                title=\"Afficher le téléphone\">
                                <span class=\"icon-phone\"></span> Afficher le téléphone </a>
                            <a href=\"#contactForm>\" data-scroll-to=\"#contactForm\"
                                class=\"button button-email2 reply-by-email-click contactForm\" title=\"Contacter par email\">
                                <span class=\"icon-mail\"></span> Contacter par email </a>
                        </div>
                    </div>
                    <div class=\"aside aside-without-description\">
                        <div class=\"aside-infos\">
                            <section id=\"priceSection\" itemprop=\"offers\" itemscope=\"\" itemtype=\"http://schema.org/Offer\">
                                <meta itemprop=\"url\" content=\"https://deals.jumia.ci/belle-apparemment-vendre--pid5443116\">
                                <meta itemprop=\"availability\" content=\"http://schema.org/InStock\">
                                <span class=\"price\">
                                    <span itemprop=\"price\" content=\"95000000.00\">";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "prix", [], "any", false, false, false, 200), "html", null, true);
        echo "</span>
                                    <span itemprop=\"priceCurrency\" content=\"FCFA\">FCFA</span>
                                </span>
    
                                <div itemprop=\"seller\" itemscope=\"\" itemtype=\"http://schema.org/Person\"
                                    class=\"seller-details\">
                                    <dl>
                                        ";
        // line 207
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 207)) {
            // line 208
            echo "                                        <dt>Agence</dt>
                                        <dd><span itemprop=\"name\">";
            // line 209
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 209), "libelle", [], "any", false, false, false, 209), 0, 20);
            echo "</span>
                                        </dd>
                                        <dt>Lieu</dt>
                                        <dd itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\"><span
                                                itemprop=\"addressLocality\">";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 213), "localisation", [], "any", false, false, false, 213), "libelle", [], "any", false, false, false, 213), "html", null, true);
            echo "</span>
                                        </dd>
                                        <dt>Publiée</dt>
                                        <dd><time datetime=\"1.2.2020 19:02\">";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 216), "html", null, true);
            echo "</time></dd>
                                        ";
        } else {
            // line 218
            echo "                                        <dt>Démarcheur</dt>
                                        <dd><span
                                                itemprop=\"name\">";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 220), "nom", [], "any", false, false, false, 220), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 220), "prenom", [], "any", false, false, false, 220), "html", null, true);
            echo "</span>
                                        </dd>
                                        <dt>Publiée</dt>
                                        <dd><time datetime=\"1.2.2020 19:02\">";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 223), "html", null, true);
            echo "</time></dd>
                                        ";
        }
        // line 225
        echo "                                    </dl>
                                </div>
    
    
                            </section>
                            <div class=\"btn-holder\">
                                <a href=\"#contactPhone\" data-scroll-to=\"#contactPhone\"
                                    data-event=\"{&quot;id&quot;:&quot;5443116&quot;,&quot;title&quot;:&quot;Belle Apparemment \\u00c0 Vendre &quot;,&quot;price&quot;:&quot;95000000.00&quot;,&quot;category&quot;:&quot;Immobilier\\/Appartements \\u00e0 vendre&quot;}\"
                                    data-transaction-id=\"Phone_5443116_guest\" data-lead-type=\"Phone\"
                                    class=\"button transaction-click clicked\" title=\"Afficher le téléphone\">
                                    <span class=\"icon-phone\"></span> Afficher le téléphone </a>
    
                                <a href=\"#contactForm\" data-scroll-to=\"#contactForm\"
                                    class=\"button button-email2 reply-by-email-click contactForm\"
                                    title=\"Contacter par email\">
                                    <span class=\"icon-mail\"></span> Contacter par email </a>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class=\"super-form-container\" id=\"super-form-container\" style=\"display: none;width: 100%\">


                <!-- Mail Contact Form  -->
                <div class=\"form-area\" id=\"contactForm\" style=\"display: none\">
                    <form class=\"contact-form\" method=\"post\" role=\"form\" data-request=\"onSendMessage\">
                        <input type=\"text\" name=\"publication_id\" value=\"";
        // line 254
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "id", [], "any", false, false, false, 254), "html", null, true);
        echo "\" hidden>
                        <fieldset>
                            ";
        // line 256
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 256)) {
            // line 257
            echo "                            <h2>Envoyer un message à ";
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 257), "libelle", [], "any", false, false, false, 257), 0, 20);
            echo "</h2>
                            ";
        } else {
            // line 259
            echo "                            <h2>Envoyer un message à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 259), "nom", [], "any", false, false, false, 259), "html", null, true);
            echo "
                                ";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 260), "prenom", [], "any", false, false, false, 260), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 262
        echo "                            <div class=\"row\">
                                <div class=\"column wide\">
                                    <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Votre nom\" required=\"required\"
                                        data-parsley-required-message=\"Veuillez entrer votre nom.\"
                                        data-parsley-id=\"6654\">
                                    <ul class=\"parsley-errors-list\" id=\"parsley-id-6654\"></ul>
                                </div>
                                <div class=\"column wide phoneNumberWide\">
                                    <input type=\"text\" id=\"phoneNumber\" name=\"phoneNumber\" class=\"authentic_phone\"
                                        placeholder=\"Votre numéro de téléphone\"
                                        data-js-attr=\"{&quot;type&quot;:&quot;tel&quot;}\" data-parsley-id=\"2097\">
                                    <ul class=\"parsley-errors-list\" id=\"parsley-id-2097\"></ul>
                                </div>
                            </div>


                            <div class=\"row\">
                                <div class=\"column wide\" style=\"width: 100%;\">
                                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Votre email\"
                                        required=\"required\" data-js-attr=\"{&quot;type&quot;:&quot;email&quot;}\"
                                        data-parsley-required-message=\"Veuillez entrer votre adresse mail.\"
                                        data-parsley-id=\"1753\">
                                    <ul class=\"parsley-errors-list\" id=\"parsley-id-1753\"></ul>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"column wide\" style=\"width: 100%;\">
                                    <textarea id=\"message\" name=\"message\" placeholder=\"Message\" required=\"required\"
                                        data-parsley-required-message=\"Message requis\" data-parsley-id=\"7776\"
                                        rows=\"4\"></textarea>
                                    <ul class=\"parsley-errors-list\" id=\"parsley-id-7776\"></ul>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"column wide\" style=\"float: right;margin-right: 0px;\">
                                    <button class=\"yellow-button submit_message\" type=\"submit\">Envoyer un
                                        message</button>
                                </div>
                            </div>


                        </fieldset>
                    </form>
                </div>

                <div id=\"contactPhone\" class=\"form-area\" style=\"display: none;\">
                    <div class=\"contactPhone\">
                        ";
        // line 310
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 310)) {
            // line 311
            echo "                        <h2>Envoyer un message à ";
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 311), "libelle", [], "any", false, false, false, 311), 0, 20);
            echo "</h2>
                        ";
        } else {
            // line 313
            echo "                        <h2>Envoyer un message à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 313), "nom", [], "any", false, false, false, 313), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 313), "prenom", [], "any", false, false, false, 313), "html", null, true);
            echo "
                        </h2>
                        ";
        }
        // line 316
        echo "                        <div class=\"phone-box show\" style=\"margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;\">
                            <div class=\"icon-holder\">
                                <span class=\"icon-phone\"></span>
                            </div>
                            ";
        // line 320
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 320)) {
            // line 321
            echo "                            <a href=\"tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 321), "tel", [], "any", false, false, false, 321), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 321), "tel", [], "any", false, false, false, 321), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 323
            echo "                            <a href=\"tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 323), "tel", [], "any", false, false, false, 323), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 323), "tel", [], "any", false, false, false, 323), "html", null, true);
            echo "</a>
                            ";
        }
        // line 325
        echo "                            <i class=\"icon-whatsapp active \"> <span class=\"popover above\">Ce numéro de téléphone
                                    fonctionne avec WhatsApp</span></i>
                        </div>
                        <div class=\"phone-mention\">
                            Veuillez s'il vous plait mentionner au vendeur que vous avez vu son annonce sur Jumia Deals.
                        </div>
                    </div>

                </div>

                <!--Warning Message-->
                <!--<div class=\"text-area warning\">
                    <h2><span class=\"icons-intlist-warning\"></span>Nos Conseils de Sécurité</h2>
                    <ul>
                        <li>Vérifiez si l'agent a une Boutique officielle sur Jumia Deals. Si c'est le cas, nous avons
                            déjà échangé avec ce professionnel.</li>
                        <li>Toutes les annonces avec la mention \"Jumia House\" proviennent de partenaires spécialisés
                            dans l'immobilier.</li>
                        <li>N'envoyez jamais d'argent pour \"réserver\" un logement, demandez combien payer pour une
                            visite</li>
                        <li>Evitez de transférer de l’argent via des services comme Mobile Money, Western Union …</li>
                        <li>Vérifiez la qualité du logement: attention aux traces d'humidité, électricité, etc. Faites
                            vous accompagner par un expert si besoin.</li>
                        <li>Assurez -vous que votre interlocuteur est un représentant officiel du propriétaire &amp;
                            qu'il dispose des documents nécessaires.</li>
                        <li>Méfiez vous des pseudo-propriétaires qui sont absents ou trop occupés pour vous rencontrer:
                            si vous avez affaire à un professionnel, il se déplacera.</li>
                        <li>Vérifiez que tous les papiers du bien immobilier sont légitimes. De même pour le contrat de
                            bail. Faites vous accompagner par un expert si besoin.</li>
                        <li>Ne donnez pas d’informations personnelles avant la visite.</li>
                        <li>Méfiez-vous des offres trop interessantes.</li>
                    </ul>
                </div>-->

            </section>

            <!--<section class=\"row\">
                ";
        // line 362
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 363
            echo "                <a class=\"col-md-4\" href=\"";
            echo url("publications");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "slot", [], "any", false, false, false, 363), "html", null, true);
            echo "\">
                    <div class=\"polaroid\">
                        <img src=\"";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["publication"], "photos", [], "any", false, false, false, 365)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "getpath", [], "any", false, false, false, 365), "html", null, true);
            echo "\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                        <div class=\"container-p\">
                            <p>";
            // line 367
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "libelle", [], "any", false, false, false, 367), "html", null, true);
            echo "</p>
                            <p><span class=\"address\">";
            // line 368
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "typepublication", [], "any", false, false, false, 368), "libelle", [], "any", false, false, false, 368), "html", null, true);
            echo ",
                                    ";
            // line 369
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "localisations", [], "any", false, false, false, 369), "libelle", [], "any", false, false, false, 369), "html", null, true);
            echo " </span></p>
                            <div class=\"price-date\">
                                <span class=\"price\">";
            // line 371
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "prix", [], "any", false, false, false, 371), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                    </div>
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "            </section>-->

        </article>

    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/detail_publication.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 377,  638 => 371,  633 => 369,  629 => 368,  625 => 367,  620 => 365,  612 => 363,  608 => 362,  569 => 325,  561 => 323,  553 => 321,  551 => 320,  545 => 316,  536 => 313,  530 => 311,  528 => 310,  478 => 262,  473 => 260,  468 => 259,  462 => 257,  460 => 256,  455 => 254,  424 => 225,  419 => 223,  411 => 220,  407 => 218,  402 => 216,  396 => 213,  389 => 209,  386 => 208,  384 => 207,  374 => 200,  348 => 176,  343 => 174,  335 => 171,  331 => 169,  326 => 167,  320 => 164,  313 => 160,  310 => 159,  308 => 158,  298 => 151,  285 => 141,  279 => 138,  272 => 133,  267 => 131,  262 => 130,  257 => 128,  252 => 127,  248 => 126,  243 => 125,  239 => 124,  234 => 123,  230 => 122,  226 => 121,  217 => 114,  211 => 113,  206 => 111,  202 => 110,  196 => 108,  189 => 104,  185 => 103,  180 => 100,  177 => 99,  173 => 98,  167 => 94,  161 => 93,  152 => 89,  149 => 88,  143 => 85,  140 => 84,  137 => 83,  133 => 82,  121 => 73,  117 => 71,  110 => 68,  107 => 67,  104 => 66,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    @media screen and (max-width: 990px) {
        .singlepost .post-content {
            width: 100%;
        }
        .singlepost .aside-without-description{
            display: none;
        }
    }

    @media screen and (max-width: 950px) {
        .singlepost .super-form-container .form-area{
            width: 100%
        }
    }

    @media screen and (max-width: 600px) {
        .singlepost .super-form-container .form-area .contact-form .column.wide{
            width: 100%
        }

        .phoneNumberWide{
            margin-top: 10px;
            width: 100%
        }
    }

    @media screen and (min-width: 990px) {
        .singlepost .aside-description{
            display: none;
        }
    }

    @media screen and (min-width: 950px) {
        .warning{
        margin-bottom: 20px;
        width: 100% !important;
        }

        form.contact-form, .contact-form form, .contact-form fieldset {
            float: left;
            width: 100%;
        }

        .contactPhone{
            width: 100%;
        }

       
    }

    @media screen and (min-width: 600px) {
        .phoneNumberWide{
            width: 47.864% !important;
        }
    }

    
    
</style>
<div class=\"container-fluid detail-publication\" style=\"margin-top: 20px; padding-left: 80px;padding-right: 80px;\">
    <div class=\"col-md-12\">

    
    <div class=\"card\">
        {% flash %}
            <div class=\"alert alert-success\" style=\"text-align: center;\">
                {{ message }}
            </div>
        {% endflash %}
        <article class=\"singlepost \">
            <header class=\"heading-area\">
                <h1 class=\"\"><span itemprop=\"name\">{{ publication.libelle }}</span></h1>
            </header>
            <div class=\"row\">
                <div class=\"col-md-12 twocolumn\">
                    <div class=\"post-content\">
                        <!-- slideshow -->
                        <div class=\"slideshow gallery-js-ready autorotation-disabled\">
                            <div class=\"mask\">
                                <div class=\"slideset\" style=\"height: 420px;\">
                                    {% for key,photo in publication.photos %}
                                    {% if key == 0 %}
                                    <div class=\"slide active\" style=\"display: block;\"><img itemprop=\"image\" class=\"imggf-1\"
                                            src=\"{{ publication.photos[0].getPath }}\"
                                            alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                    {% else %}
                                    <div class=\"slide\" style=\"display: block; opacity: 0;\">
                                        <img itemprop=\"image\" class=\"imggf-{{ key+1 }}\" src=\"{{ photo.getPath }}\"
                                            data-src=\"https://media.jumiadeals.com/ci_live/66531c68775e35c47f5a69a.desktop-gallery-large.jpg\"
                                            alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                    {% endif %}
                                    {% endfor %}
                                </div>
                                <span class=\"loader\" style=\"display: none;\"></span>
                            </div>
                            <ul class=\"pagination img-miniature\">
                                {% for key,photo in publication.photos %}
                                {% if key == 0 %}
                                <li class=\"active\">
                                    <a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"1\"><img
                                            style=\"width: 100px;height: 66px;\"
                                            src=\"{{ photo.getPath | resize(100,100)}}\"
                                            alt=\"{{ publication.libelle }}\">
                                    </a>
                                </li>
                                {% else %}
                                <li><a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"{{ key +1}}\"><img
                                            style=\"width: 100px;height: 66px;\"
                                            src=\"{{ photo.getPath| resize(100,100) }}\"
                                            alt=\"{{ publication.libelle }}\"></a></li>
                                {% endif %}
                                {% endfor %}
    
    
                            </ul>
                        </div>
    
                        <div class=\"post-attributes\">
                            <div class=\"new-attr-style\">
                                {% if publication.nbre_piece %} <h3>Nombre de
                                    pièces<span>{{ publication.nbre_piece }}<span></span></span></h3> {% endif %}
                                {% if publication.commune %} <h3>
                                    Commune<span>{{ publication.commune.libelle }}<span></span></span></h3> {% endif %}
                                {% if publication.ville %} <h3>
                                    Ville<span>{{ publication.ville.libelle }}<span></span></span></h3> {% endif %}
                                {% if publication.Localisation %} <h3>
                                    Localisation<span>{{ publication.Localisation.libelle }}<span></span></span></h3>
                                {% endif %}
                                {% if publication.typepublication %} <h3>Type de
                                    publication<span>{{ publication.typepublication.libelle }}<span></span></span></h3>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"post-text-content\" style=\"margin-top: 12px;\">
                            <div class=\"title\">Description :</div>
                            <p>
                                {{ publication.description | raw}}
                            </p>
                            <p>
                                <b>Date de publication: {{ publication.created_at }}</b>
                            </p>
                        </div>

                        <div class=\"aside aside-description\" style=\"width: 100%;\">
                            <div class=\"aside-infos\" style=\"min-height: unset;\">
                                <section id=\"priceSection\" itemprop=\"offers\" itemscope=\"\" itemtype=\"http://schema.org/Offer\">
                                    <meta itemprop=\"url\" content=\"https://deals.jumia.ci/belle-apparemment-vendre--pid5443116\">
                                    <meta itemprop=\"availability\" content=\"http://schema.org/InStock\">
                                    <span class=\"price\">
                                        <span itemprop=\"price\" content=\"95000000.00\">{{ publication.prix }}</span>
                                        <span itemprop=\"priceCurrency\" content=\"FCFA\">FCFA</span>
                                    </span>
        
                                    <div itemprop=\"seller\" itemscope=\"\" itemtype=\"http://schema.org/Person\"
                                        class=\"seller-details\">
                                        <dl>
                                            {% if publication.agence %}
                                            <dt>Agence</dt>
                                            <dd><span itemprop=\"name\">{{ publication.agence.libelle|slice(0, 20)|raw }}</span>
                                            </dd>
                                            <dt>Lieu</dt>
                                            <dd itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\"><span
                                                    itemprop=\"addressLocality\">{{ publication.agence.localisation.libelle }}</span>
                                            </dd>
                                            <dt>Publiée</dt>
                                            <dd><time datetime=\"1.2.2020 19:02\">{{ publication.created_at }}</time></dd>
                                            {% else %}
                                            <dt>Démarcheur</dt>
                                            <dd><span
                                                    itemprop=\"name\">{{ publication.demarcheur.nom }}&nbsp;{{ publication.demarcheur.prenom }}</span>
                                            </dd>
                                            <dt>Publiée</dt>
                                            <dd><time datetime=\"1.2.2020 19:02\">{{ publication.created_at }}</time></dd>
                                            {% endif %}
                                        </dl>
                                    </div>
                                </section>
                            </div>
                        </div>
    
    
    
                        <div class=\"btn-holder\"  style=\"margin-bottom: 12px;\">
                            <a href=\"#contactPhone\" data-scroll-to=\"#contactPhone\" data-transaction-id=\"Phone_5443116_guest\"
                                data-lead-type=\"Phone\" class=\"button button-phone2 transaction-click\"
                                title=\"Afficher le téléphone\">
                                <span class=\"icon-phone\"></span> Afficher le téléphone </a>
                            <a href=\"#contactForm>\" data-scroll-to=\"#contactForm\"
                                class=\"button button-email2 reply-by-email-click contactForm\" title=\"Contacter par email\">
                                <span class=\"icon-mail\"></span> Contacter par email </a>
                        </div>
                    </div>
                    <div class=\"aside aside-without-description\">
                        <div class=\"aside-infos\">
                            <section id=\"priceSection\" itemprop=\"offers\" itemscope=\"\" itemtype=\"http://schema.org/Offer\">
                                <meta itemprop=\"url\" content=\"https://deals.jumia.ci/belle-apparemment-vendre--pid5443116\">
                                <meta itemprop=\"availability\" content=\"http://schema.org/InStock\">
                                <span class=\"price\">
                                    <span itemprop=\"price\" content=\"95000000.00\">{{ publication.prix }}</span>
                                    <span itemprop=\"priceCurrency\" content=\"FCFA\">FCFA</span>
                                </span>
    
                                <div itemprop=\"seller\" itemscope=\"\" itemtype=\"http://schema.org/Person\"
                                    class=\"seller-details\">
                                    <dl>
                                        {% if publication.agence %}
                                        <dt>Agence</dt>
                                        <dd><span itemprop=\"name\">{{ publication.agence.libelle|slice(0, 20)|raw }}</span>
                                        </dd>
                                        <dt>Lieu</dt>
                                        <dd itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\"><span
                                                itemprop=\"addressLocality\">{{ publication.agence.localisation.libelle }}</span>
                                        </dd>
                                        <dt>Publiée</dt>
                                        <dd><time datetime=\"1.2.2020 19:02\">{{ publication.created_at }}</time></dd>
                                        {% else %}
                                        <dt>Démarcheur</dt>
                                        <dd><span
                                                itemprop=\"name\">{{ publication.demarcheur.nom }}&nbsp;{{ publication.demarcheur.prenom }}</span>
                                        </dd>
                                        <dt>Publiée</dt>
                                        <dd><time datetime=\"1.2.2020 19:02\">{{ publication.created_at }}</time></dd>
                                        {% endif %}
                                    </dl>
                                </div>
    
    
                            </section>
                            <div class=\"btn-holder\">
                                <a href=\"#contactPhone\" data-scroll-to=\"#contactPhone\"
                                    data-event=\"{&quot;id&quot;:&quot;5443116&quot;,&quot;title&quot;:&quot;Belle Apparemment \\u00c0 Vendre &quot;,&quot;price&quot;:&quot;95000000.00&quot;,&quot;category&quot;:&quot;Immobilier\\/Appartements \\u00e0 vendre&quot;}\"
                                    data-transaction-id=\"Phone_5443116_guest\" data-lead-type=\"Phone\"
                                    class=\"button transaction-click clicked\" title=\"Afficher le téléphone\">
                                    <span class=\"icon-phone\"></span> Afficher le téléphone </a>
    
                                <a href=\"#contactForm\" data-scroll-to=\"#contactForm\"
                                    class=\"button button-email2 reply-by-email-click contactForm\"
                                    title=\"Contacter par email\">
                                    <span class=\"icon-mail\"></span> Contacter par email </a>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class=\"super-form-container\" id=\"super-form-container\" style=\"display: none;width: 100%\">


                <!-- Mail Contact Form  -->
                <div class=\"form-area\" id=\"contactForm\" style=\"display: none\">
                    <form class=\"contact-form\" method=\"post\" role=\"form\" data-request=\"onSendMessage\">
                        <input type=\"text\" name=\"publication_id\" value=\"{{ publication.id }}\" hidden>
                        <fieldset>
                            {% if publication.agence %}
                            <h2>Envoyer un message à {{ publication.agence.libelle|slice(0, 20)|raw}}</h2>
                            {% else %}
                            <h2>Envoyer un message à {{ publication.demarcheur.nom }}
                                {{ publication.demarcheur.prenom }}</h2>
                            {% endif %}
                            <div class=\"row\">
                                <div class=\"column wide\">
                                    <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Votre nom\" required=\"required\"
                                        data-parsley-required-message=\"Veuillez entrer votre nom.\"
                                        data-parsley-id=\"6654\">
                                    <ul class=\"parsley-errors-list\" id=\"parsley-id-6654\"></ul>
                                </div>
                                <div class=\"column wide phoneNumberWide\">
                                    <input type=\"text\" id=\"phoneNumber\" name=\"phoneNumber\" class=\"authentic_phone\"
                                        placeholder=\"Votre numéro de téléphone\"
                                        data-js-attr=\"{&quot;type&quot;:&quot;tel&quot;}\" data-parsley-id=\"2097\">
                                    <ul class=\"parsley-errors-list\" id=\"parsley-id-2097\"></ul>
                                </div>
                            </div>


                            <div class=\"row\">
                                <div class=\"column wide\" style=\"width: 100%;\">
                                    <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"Votre email\"
                                        required=\"required\" data-js-attr=\"{&quot;type&quot;:&quot;email&quot;}\"
                                        data-parsley-required-message=\"Veuillez entrer votre adresse mail.\"
                                        data-parsley-id=\"1753\">
                                    <ul class=\"parsley-errors-list\" id=\"parsley-id-1753\"></ul>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"column wide\" style=\"width: 100%;\">
                                    <textarea id=\"message\" name=\"message\" placeholder=\"Message\" required=\"required\"
                                        data-parsley-required-message=\"Message requis\" data-parsley-id=\"7776\"
                                        rows=\"4\"></textarea>
                                    <ul class=\"parsley-errors-list\" id=\"parsley-id-7776\"></ul>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"column wide\" style=\"float: right;margin-right: 0px;\">
                                    <button class=\"yellow-button submit_message\" type=\"submit\">Envoyer un
                                        message</button>
                                </div>
                            </div>


                        </fieldset>
                    </form>
                </div>

                <div id=\"contactPhone\" class=\"form-area\" style=\"display: none;\">
                    <div class=\"contactPhone\">
                        {% if publication.agence %}
                        <h2>Envoyer un message à {{ publication.agence.libelle|slice(0, 20)|raw }}</h2>
                        {% else %}
                        <h2>Envoyer un message à {{ publication.demarcheur.nom }} {{ publication.demarcheur.prenom }}
                        </h2>
                        {% endif %}
                        <div class=\"phone-box show\" style=\"margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;\">
                            <div class=\"icon-holder\">
                                <span class=\"icon-phone\"></span>
                            </div>
                            {% if publication.agence %}
                            <a href=\"tel:{{ publication.agence.tel }}\">{{ publication.agence.tel }}</a>
                            {% else %}
                            <a href=\"tel:{{ publication.demarcheur.tel }}\">{{ publication.demarcheur.tel }}</a>
                            {% endif %}
                            <i class=\"icon-whatsapp active \"> <span class=\"popover above\">Ce numéro de téléphone
                                    fonctionne avec WhatsApp</span></i>
                        </div>
                        <div class=\"phone-mention\">
                            Veuillez s'il vous plait mentionner au vendeur que vous avez vu son annonce sur Jumia Deals.
                        </div>
                    </div>

                </div>

                <!--Warning Message-->
                <!--<div class=\"text-area warning\">
                    <h2><span class=\"icons-intlist-warning\"></span>Nos Conseils de Sécurité</h2>
                    <ul>
                        <li>Vérifiez si l'agent a une Boutique officielle sur Jumia Deals. Si c'est le cas, nous avons
                            déjà échangé avec ce professionnel.</li>
                        <li>Toutes les annonces avec la mention \"Jumia House\" proviennent de partenaires spécialisés
                            dans l'immobilier.</li>
                        <li>N'envoyez jamais d'argent pour \"réserver\" un logement, demandez combien payer pour une
                            visite</li>
                        <li>Evitez de transférer de l’argent via des services comme Mobile Money, Western Union …</li>
                        <li>Vérifiez la qualité du logement: attention aux traces d'humidité, électricité, etc. Faites
                            vous accompagner par un expert si besoin.</li>
                        <li>Assurez -vous que votre interlocuteur est un représentant officiel du propriétaire &amp;
                            qu'il dispose des documents nécessaires.</li>
                        <li>Méfiez vous des pseudo-propriétaires qui sont absents ou trop occupés pour vous rencontrer:
                            si vous avez affaire à un professionnel, il se déplacera.</li>
                        <li>Vérifiez que tous les papiers du bien immobilier sont légitimes. De même pour le contrat de
                            bail. Faites vous accompagner par un expert si besoin.</li>
                        <li>Ne donnez pas d’informations personnelles avant la visite.</li>
                        <li>Méfiez-vous des offres trop interessantes.</li>
                    </ul>
                </div>-->

            </section>

            <!--<section class=\"row\">
                {% for publication in publications %}
                <a class=\"col-md-4\" href=\"{{ url('publications') }}/{{ publication.slot }}\">
                    <div class=\"polaroid\">
                        <img src=\"{{ publication.photos[0].getpath }}\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                        <div class=\"container-p\">
                            <p>{{ publication.libelle }}</p>
                            <p><span class=\"address\">{{ publication.typepublication.libelle }},
                                    {{ publication.localisations.libelle}} </span></p>
                            <div class=\"price-date\">
                                <span class=\"price\">{{ publication.prix }}</span>
                            </div>
                        </div>
                    </div>
                </a>
                {% endfor %}
            </section>-->

        </article>

    </div>
</div>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/detail_publication.htm", "");
    }
}

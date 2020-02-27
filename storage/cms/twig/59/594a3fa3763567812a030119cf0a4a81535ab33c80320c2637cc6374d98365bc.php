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
        .warning-large{
            margin-bottom: 20px;
            width: 100% !important;
        }

        .warning-small{
            margin-bottom: 20px;
            width: 48% !important;
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

    @media screen and (max-width: 1000px) {
        .detail-publication{
            padding-left: 15px !important;
            padding-right: 15px;
        }
    }

    @media screen and (min-width: 1000px) {
        .detail-publication{
            padding-left: 80px !important;
            padding-right: 80px !important;
        }
    }

    @media screen and (max-width: 453px) {
        /*.button.button-phone2{
            margin-bottom: 10px;
        }
        .singlepost .btn-holder .button{
            width: 100%;
        }*/
        .button.button-phone2{
            width: 40% !important;
            float: left !important;
        }

        .button.button-email2{
            width: 40% !important;
            float: right !important;
        }
    }

    @media screen and (max-width: 375px) {
        .button.button-phone2{
            margin-bottom: 10px !important;
        }
        .singlepost .btn-holder .button{
            width: 100% !important;
        }

        .button.button-email2{
            float: unset !important;
        }
    }

    @media screen and (max-width: 767px) {
        #three-publication-recommande{
            display: none;
        }
    }

    @media screen and (max-width: 500px) {
        .col-xs-6{
            width: 100%
        }
    }

    .container-p P{
        margin-bottom: 0px;
    }

    .price-date .price{
        margin-bottom: 0px;
    }
    
    a:hover{
        text-decoration: none;
    }
</style>
<div class=\"container-fluid detail-publication\" style=\"margin-top: 20px;\">
    <div class=\"col-md-12\">
        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 132
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 133
                echo "            <div class=\"alert alert-success\" style=\"text-align: center;\">
                ";
                // line 134
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
            </div>
        ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 137
        echo "    <div class=\"card\">
        <article class=\"singlepost \">
            <header class=\"heading-area\">
                <h1 class=\"\"><span itemprop=\"name\">";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 140), "html", null, true);
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
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 149));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 150
            echo "                                    ";
            if (($context["key"] == 0)) {
                // line 151
                echo "                                    <div class=\"slide active\" style=\"display: block;\"><img itemprop=\"image\" class=\"imggf-1\"
                                            src=\"";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 152)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getPath", [], "any", false, false, false, 152), "html", null, true);
                echo "\"
                                            alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                    ";
            } else {
                // line 155
                echo "                                    <div class=\"slide\" style=\"display: block; opacity: 0;\">
                                        <img itemprop=\"image\" class=\"imggf-";
                // line 156
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 156), "html", null, true);
                echo "\"
                                            data-src=\"https://media.jumiadeals.com/ci_live/66531c68775e35c47f5a69a.desktop-gallery-large.jpg\"
                                            alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                    ";
            }
            // line 160
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                                </div>
                                <span class=\"loader\" style=\"display: none;\"></span>
                            </div>
                            <ul class=\"pagination img-miniature\">
                                ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 165));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 166
            echo "                                ";
            if (($context["key"] == 0)) {
                // line 167
                echo "                                <li class=\"active\">
                                    <a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"1\"><img
                                            style=\"width: 100px;height: 66px;\"
                                            src=\"";
                // line 170
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 170), 100, 100]);
                echo "\"
                                            alt=\"";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 171), "html", null, true);
                echo "\">
                                    </a>
                                </li>
                                ";
            } else {
                // line 175
                echo "                                <li><a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\"><img
                                            style=\"width: 100px;height: 66px;\"
                                            src=\"";
                // line 177
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 177), 100, 100]);
                echo "\"
                                            alt=\"";
                // line 178
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 178), "html", null, true);
                echo "\"></a></li>
                                ";
            }
            // line 180
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "    
    
                            </ul>
                        </div>
    
                        <div class=\"post-attributes\">
                            <div class=\"new-attr-style\">
                                ";
        // line 188
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "nbre_piece", [], "any", false, false, false, 188)) {
            echo " <h3>Nombre de
                                    pièces<span>";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "nbre_piece", [], "any", false, false, false, 189), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 190
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "commune", [], "any", false, false, false, 190)) {
            echo " <h3>
                                    Commune<span>";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "commune", [], "any", false, false, false, 191), "libelle", [], "any", false, false, false, 191), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 192
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "ville", [], "any", false, false, false, 192)) {
            echo " <h3>
                                    Ville<span>";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "ville", [], "any", false, false, false, 193), "libelle", [], "any", false, false, false, 193), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 194
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "Localisation", [], "any", false, false, false, 194)) {
            echo " <h3>
                                    Localisation<span>";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "Localisation", [], "any", false, false, false, 195), "libelle", [], "any", false, false, false, 195), "html", null, true);
            echo "<span></span></span></h3>
                                ";
        }
        // line 197
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "typepublication", [], "any", false, false, false, 197)) {
            echo " <h3>Type de
                                    publication<span>";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "typepublication", [], "any", false, false, false, 198), "libelle", [], "any", false, false, false, 198), "html", null, true);
            echo "<span></span></span></h3>
                                ";
        }
        // line 200
        echo "                            </div>
                        </div>
                        <div class=\"post-text-content\" style=\"margin-top: 12px;\">
                            <div class=\"title\">Description :</div>
                            <p>
                                ";
        // line 205
        echo twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "description", [], "any", false, false, false, 205);
        echo "
                            </p>
                            <p>
                                <b>Date de publication: ";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 208), "html", null, true);
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
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "prix", [], "any", false, false, false, 218), "html", null, true);
        echo "</span>
                                        <span itemprop=\"priceCurrency\" content=\"FCFA\">FCFA</span>
                                    </span>
        
                                    <div itemprop=\"seller\" itemscope=\"\" itemtype=\"http://schema.org/Person\"
                                        class=\"seller-details\">
                                        <dl>
                                            ";
        // line 225
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 225)) {
            // line 226
            echo "                                            <dt>Agence</dt>
                                            <dd><span itemprop=\"name\">";
            // line 227
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 227), "libelle", [], "any", false, false, false, 227), 0, 20);
            echo "</span>
                                            </dd>
                                            <dt>Lieu</dt>
                                            <dd itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\"><span
                                                    itemprop=\"addressLocality\">";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 231), "localisation", [], "any", false, false, false, 231), "libelle", [], "any", false, false, false, 231), "html", null, true);
            echo "</span>
                                            </dd>
                                            <dt>Publiée</dt>
                                            <dd><time datetime=\"1.2.2020 19:02\">";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 234), "html", null, true);
            echo "</time></dd>
                                            ";
        } else {
            // line 236
            echo "                                            <dt>Démarcheur</dt>
                                            <dd><span
                                                    itemprop=\"name\">";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 238), "nom", [], "any", false, false, false, 238), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 238), "prenom", [], "any", false, false, false, 238), "html", null, true);
            echo "</span>
                                            </dd>
                                            <dt>Publiée</dt>
                                            <dd><time datetime=\"1.2.2020 19:02\">";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 241), "html", null, true);
            echo "</time></dd>
                                            ";
        }
        // line 243
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
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "prix", [], "any", false, false, false, 267), "html", null, true);
        echo "</span>
                                    <span itemprop=\"priceCurrency\" content=\"FCFA\">FCFA</span>
                                </span>
    
                                <div itemprop=\"seller\" itemscope=\"\" itemtype=\"http://schema.org/Person\"
                                    class=\"seller-details\">
                                    <dl>
                                        ";
        // line 274
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 274)) {
            // line 275
            echo "                                        <dt>Agence</dt>
                                        <dd><span itemprop=\"name\">";
            // line 276
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 276), "libelle", [], "any", false, false, false, 276), 0, 20);
            echo "</span>
                                        </dd>
                                        <dt>Lieu</dt>
                                        <dd itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\"><span
                                                itemprop=\"addressLocality\">";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 280), "localisation", [], "any", false, false, false, 280), "libelle", [], "any", false, false, false, 280), "html", null, true);
            echo "</span>
                                        </dd>
                                        <dt>Publiée</dt>
                                        <dd><time datetime=\"1.2.2020 19:02\">";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 283), "html", null, true);
            echo "</time></dd>
                                        ";
        } else {
            // line 285
            echo "                                        <dt>Démarcheur</dt>
                                        <dd><span
                                                itemprop=\"name\">";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 287), "nom", [], "any", false, false, false, 287), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 287), "prenom", [], "any", false, false, false, 287), "html", null, true);
            echo "</span>
                                        </dd>
                                        <dt>Publiée</dt>
                                        <dd><time datetime=\"1.2.2020 19:02\">";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 290), "html", null, true);
            echo "</time></dd>
                                        ";
        }
        // line 292
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

            <section class=\"super-form-container row\" id=\"super-form-container\">


                <!-- Mail Contact Form  -->
                <div class=\"form-area\" id=\"contactForm\" style=\"display: none\">
                    <form class=\"contact-form\" method=\"post\" role=\"form\" data-request=\"onSendMessage\">
                        <input type=\"text\" name=\"publication_id\" value=\"";
        // line 321
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "id", [], "any", false, false, false, 321), "html", null, true);
        echo "\" hidden>
                        <fieldset>
                            ";
        // line 323
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 323)) {
            // line 324
            echo "                            <h2>Envoyer un message à ";
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 324), "libelle", [], "any", false, false, false, 324), 0, 20);
            echo "</h2>
                            ";
        } else {
            // line 326
            echo "                            <h2>Envoyer un message à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 326), "nom", [], "any", false, false, false, 326), "html", null, true);
            echo "
                                ";
            // line 327
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 327), "prenom", [], "any", false, false, false, 327), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 329
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
        // line 377
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 377)) {
            // line 378
            echo "                        <h2>Envoyer un message à ";
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 378), "libelle", [], "any", false, false, false, 378), 0, 20);
            echo "</h2>
                        ";
        } else {
            // line 380
            echo "                        <h2>Envoyer un message à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 380), "nom", [], "any", false, false, false, 380), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 380), "prenom", [], "any", false, false, false, 380), "html", null, true);
            echo "
                        </h2>
                        ";
        }
        // line 383
        echo "                        <div class=\"phone-box show\" style=\"margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;\">
                            <div class=\"icon-holder\">
                                <span class=\"icon-phone\"></span>
                            </div>
                            ";
        // line 387
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 387)) {
            // line 388
            echo "                            <a href=\"tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 388), "tel", [], "any", false, false, false, 388), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 388), "tel", [], "any", false, false, false, 388), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 390
            echo "                            <a href=\"tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 390), "tel", [], "any", false, false, false, 390), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 390), "tel", [], "any", false, false, false, 390), "html", null, true);
            echo "</a>
                            ";
        }
        // line 392
        echo "                            <i class=\"icon-whatsapp active \"> <span class=\"popover above\">Ce numéro de téléphone
                                    fonctionne avec WhatsApp</span></i>
                        </div>
                        <div class=\"phone-mention\">
                            Veuillez s'il vous plait mentionner au vendeur que vous avez vu son annonce sur Jumia Deals.
                        </div>
                    </div>
                </div>

                <!--Warning Message-->
                <div class=\"text-area\" style=\"display: none;\">
                    <h2><span class=\"icons-intlist-warning\"></span>Nos Conseils de Sécurité</h2>
                    <ul>
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
                </div>
            </section>

            <section class=\"row\" style=\"margin-top: 20px\">
                <div class=\"col-lg-4 col-sm-4 col-xs-6 col-md-4\" id=\"first-publication-recommande\">
                    <a href=\"";
        // line 424
        echo url("publications");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["publications"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "slot", [], "any", false, false, false, 424), "html", null, true);
        echo "\">
                        <div class=\"polaroid\">
                            <img src=\"";
        // line 426
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["publications"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "photos", [], "any", false, false, false, 426)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "getpath", [], "any", false, false, false, 426), "html", null, true);
        echo "\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                            <div class=\"container-p\">
                                <p>";
        // line 428
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["publications"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "libelle", [], "any", false, false, false, 428), "html", null, true);
        echo "</p>
                                <p><span class=\"address\">";
        // line 429
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["publications"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "typepublication", [], "any", false, false, false, 429), "libelle", [], "any", false, false, false, 429), "html", null, true);
        echo ",
                                        ";
        // line 430
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["publications"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "localisations", [], "any", false, false, false, 430), "libelle", [], "any", false, false, false, 430), "html", null, true);
        echo " </span></p>
                                <div class=\"price-date\">
                                    <span class=\"price\">";
        // line 432
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["publications"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "prix", [], "any", false, false, false, 432), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-sm-4 col-xs-6 col-md-4\" id=\"two-publication-recommande\">
                    <a href=\"";
        // line 439
        echo url("publications");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["publications"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[1] ?? null) : null), "slot", [], "any", false, false, false, 439), "html", null, true);
        echo "\">
                        <div class=\"polaroid\">
                            <img src=\"";
        // line 441
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["publications"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[1] ?? null) : null), "photos", [], "any", false, false, false, 441)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[0] ?? null) : null), "getpath", [], "any", false, false, false, 441), "html", null, true);
        echo "\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                            <div class=\"container-p\">
                                <p>";
        // line 443
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["publications"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[1] ?? null) : null), "libelle", [], "any", false, false, false, 443), "html", null, true);
        echo "</p>
                                <p><span class=\"address\">";
        // line 444
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["publications"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[1] ?? null) : null), "typepublication", [], "any", false, false, false, 444), "libelle", [], "any", false, false, false, 444), "html", null, true);
        echo ",
                                        ";
        // line 445
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["publications"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[1] ?? null) : null), "localisations", [], "any", false, false, false, 445), "libelle", [], "any", false, false, false, 445), "html", null, true);
        echo " </span></p>
                                <div class=\"price-date\">
                                    <span class=\"price\">";
        // line 447
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["publications"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[1] ?? null) : null), "prix", [], "any", false, false, false, 447), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-sm-4 col-xs-6 col-md-4\" id=\"three-publication-recommande\">
                    <a href=\"";
        // line 454
        echo url("publications");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["publications"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[2] ?? null) : null), "slot", [], "any", false, false, false, 454), "html", null, true);
        echo "\">
                        <div class=\"polaroid\">
                            <img src=\"";
        // line 456
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["publications"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[2] ?? null) : null), "photos", [], "any", false, false, false, 456)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[0] ?? null) : null), "getpath", [], "any", false, false, false, 456), "html", null, true);
        echo "\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                            <div class=\"container-p\">
                                <p>";
        // line 458
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["publications"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[2] ?? null) : null), "libelle", [], "any", false, false, false, 458), "html", null, true);
        echo "</p>
                                <p><span class=\"address\">";
        // line 459
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["publications"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[2] ?? null) : null), "typepublication", [], "any", false, false, false, 459), "libelle", [], "any", false, false, false, 459), "html", null, true);
        echo ",
                                        ";
        // line 460
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["publications"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[2] ?? null) : null), "localisations", [], "any", false, false, false, 460), "libelle", [], "any", false, false, false, 460), "html", null, true);
        echo " </span></p>
                                <div class=\"price-date\">
                                    <span class=\"price\">";
        // line 462
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["publications"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[2] ?? null) : null), "prix", [], "any", false, false, false, 462), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </section>

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
        return array (  765 => 462,  760 => 460,  756 => 459,  752 => 458,  747 => 456,  740 => 454,  730 => 447,  725 => 445,  721 => 444,  717 => 443,  712 => 441,  705 => 439,  695 => 432,  690 => 430,  686 => 429,  682 => 428,  677 => 426,  670 => 424,  636 => 392,  628 => 390,  620 => 388,  618 => 387,  612 => 383,  603 => 380,  597 => 378,  595 => 377,  545 => 329,  540 => 327,  535 => 326,  529 => 324,  527 => 323,  522 => 321,  491 => 292,  486 => 290,  478 => 287,  474 => 285,  469 => 283,  463 => 280,  456 => 276,  453 => 275,  451 => 274,  441 => 267,  415 => 243,  410 => 241,  402 => 238,  398 => 236,  393 => 234,  387 => 231,  380 => 227,  377 => 226,  375 => 225,  365 => 218,  352 => 208,  346 => 205,  339 => 200,  334 => 198,  329 => 197,  324 => 195,  319 => 194,  315 => 193,  310 => 192,  306 => 191,  301 => 190,  297 => 189,  293 => 188,  284 => 181,  278 => 180,  273 => 178,  269 => 177,  263 => 175,  256 => 171,  252 => 170,  247 => 167,  244 => 166,  240 => 165,  234 => 161,  228 => 160,  219 => 156,  216 => 155,  210 => 152,  207 => 151,  204 => 150,  200 => 149,  188 => 140,  183 => 137,  176 => 134,  173 => 133,  170 => 132,  37 => 1,);
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
        .warning-large{
            margin-bottom: 20px;
            width: 100% !important;
        }

        .warning-small{
            margin-bottom: 20px;
            width: 48% !important;
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

    @media screen and (max-width: 1000px) {
        .detail-publication{
            padding-left: 15px !important;
            padding-right: 15px;
        }
    }

    @media screen and (min-width: 1000px) {
        .detail-publication{
            padding-left: 80px !important;
            padding-right: 80px !important;
        }
    }

    @media screen and (max-width: 453px) {
        /*.button.button-phone2{
            margin-bottom: 10px;
        }
        .singlepost .btn-holder .button{
            width: 100%;
        }*/
        .button.button-phone2{
            width: 40% !important;
            float: left !important;
        }

        .button.button-email2{
            width: 40% !important;
            float: right !important;
        }
    }

    @media screen and (max-width: 375px) {
        .button.button-phone2{
            margin-bottom: 10px !important;
        }
        .singlepost .btn-holder .button{
            width: 100% !important;
        }

        .button.button-email2{
            float: unset !important;
        }
    }

    @media screen and (max-width: 767px) {
        #three-publication-recommande{
            display: none;
        }
    }

    @media screen and (max-width: 500px) {
        .col-xs-6{
            width: 100%
        }
    }

    .container-p P{
        margin-bottom: 0px;
    }

    .price-date .price{
        margin-bottom: 0px;
    }
    
    a:hover{
        text-decoration: none;
    }
</style>
<div class=\"container-fluid detail-publication\" style=\"margin-top: 20px;\">
    <div class=\"col-md-12\">
        {% flash %}
            <div class=\"alert alert-success\" style=\"text-align: center;\">
                {{ message }}
            </div>
        {% endflash %}
    <div class=\"card\">
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

            <section class=\"super-form-container row\" id=\"super-form-container\">


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
                <div class=\"text-area\" style=\"display: none;\">
                    <h2><span class=\"icons-intlist-warning\"></span>Nos Conseils de Sécurité</h2>
                    <ul>
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
                </div>
            </section>

            <section class=\"row\" style=\"margin-top: 20px\">
                <div class=\"col-lg-4 col-sm-4 col-xs-6 col-md-4\" id=\"first-publication-recommande\">
                    <a href=\"{{ url('publications') }}/{{ publications[0].slot }}\">
                        <div class=\"polaroid\">
                            <img src=\"{{ publications[0].photos[0].getpath }}\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                            <div class=\"container-p\">
                                <p>{{ publications[0].libelle }}</p>
                                <p><span class=\"address\">{{ publications[0].typepublication.libelle }},
                                        {{ publications[0].localisations.libelle}} </span></p>
                                <div class=\"price-date\">
                                    <span class=\"price\">{{ publications[0].prix }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-sm-4 col-xs-6 col-md-4\" id=\"two-publication-recommande\">
                    <a href=\"{{ url('publications') }}/{{ publications[1].slot }}\">
                        <div class=\"polaroid\">
                            <img src=\"{{ publications[1].photos[0].getpath }}\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                            <div class=\"container-p\">
                                <p>{{ publications[1].libelle }}</p>
                                <p><span class=\"address\">{{ publications[1].typepublication.libelle }},
                                        {{ publications[1].localisations.libelle}} </span></p>
                                <div class=\"price-date\">
                                    <span class=\"price\">{{ publications[1].prix }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-sm-4 col-xs-6 col-md-4\" id=\"three-publication-recommande\">
                    <a href=\"{{ url('publications') }}/{{ publications[2].slot }}\">
                        <div class=\"polaroid\">
                            <img src=\"{{ publications[2].photos[0].getpath }}\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                            <div class=\"container-p\">
                                <p>{{ publications[2].libelle }}</p>
                                <p><span class=\"address\">{{ publications[2].typepublication.libelle }},
                                        {{ publications[2].localisations.libelle}} </span></p>
                                <div class=\"price-date\">
                                    <span class=\"price\">{{ publications[2].prix }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </section>

        </article>

    </div>
</div>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/detail_publication.htm", "");
    }
}

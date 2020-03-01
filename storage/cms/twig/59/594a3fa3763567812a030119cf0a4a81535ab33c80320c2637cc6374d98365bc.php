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
                                            alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                    ";
            }
            // line 159
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                                </div>
                                <span class=\"loader\" style=\"display: none;\"></span>
                            </div>
                            <ul class=\"pagination img-miniature\">
                                ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 164));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 165
            echo "                                ";
            if (($context["key"] == 0)) {
                // line 166
                echo "                                <li class=\"active\">
                                    <a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"1\"><img
                                            style=\"width: 100px;height: 66px;\"
                                            src=\"";
                // line 169
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 169), 100, 100]);
                echo "\"
                                            alt=\"";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 170), "html", null, true);
                echo "\">
                                    </a>
                                </li>
                                ";
            } else {
                // line 174
                echo "                                <li><a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\"><img
                                            style=\"width: 100px;height: 66px;\"
                                            src=\"";
                // line 176
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 176), 100, 100]);
                echo "\"
                                            alt=\"";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 177), "html", null, true);
                echo "\"></a></li>
                                ";
            }
            // line 179
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "    
    
                            </ul>
                        </div>
    
                        <div class=\"post-attributes\">
                            <div class=\"new-attr-style\">
                                ";
        // line 187
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "nbre_piece", [], "any", false, false, false, 187)) {
            echo " <h3>Nombre de
                                    pièces<span>";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "nbre_piece", [], "any", false, false, false, 188), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 189
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "commune", [], "any", false, false, false, 189)) {
            echo " <h3>
                                    Commune<span>";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "commune", [], "any", false, false, false, 190), "libelle", [], "any", false, false, false, 190), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 191
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "ville", [], "any", false, false, false, 191)) {
            echo " <h3>
                                    Ville<span>";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "ville", [], "any", false, false, false, 192), "libelle", [], "any", false, false, false, 192), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 193
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "Localisation", [], "any", false, false, false, 193)) {
            echo " <h3>
                                    Localisation<span>";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "Localisation", [], "any", false, false, false, 194), "libelle", [], "any", false, false, false, 194), "html", null, true);
            echo "<span></span></span></h3>
                                ";
        }
        // line 196
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "typepublication", [], "any", false, false, false, 196)) {
            echo " <h3>Type de
                                    publication<span>";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "typepublication", [], "any", false, false, false, 197), "libelle", [], "any", false, false, false, 197), "html", null, true);
            echo "<span></span></span></h3>
                                ";
        }
        // line 199
        echo "                            </div>
                        </div>
                        <div class=\"post-text-content\" style=\"margin-top: 12px;\">
                            <div class=\"title\">Description :</div>
                            <p>
                                ";
        // line 204
        echo twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "description", [], "any", false, false, false, 204);
        echo "
                            </p>
                            <p>
                                <b>Date de publication: ";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 207), "html", null, true);
        echo "</b>
                            </p>
                        </div>

                        <div class=\"aside aside-description\" style=\"width: 100%;\">
                            <div class=\"aside-infos\" style=\"min-height: unset;\">
                                <section id=\"priceSection\" itemprop=\"offers\" itemscope=\"\" itemtype=\"http://schema.org/Offer\">
                                    <meta itemprop=\"url\" >
                                    <meta itemprop=\"availability\" content=\"http://schema.org/InStock\">
                                    <span class=\"price\">
                                        <span itemprop=\"price\" content=\"95000000.00\">";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "prix", [], "any", false, false, false, 217), "html", null, true);
        echo "</span>
                                        <span itemprop=\"priceCurrency\" content=\"FCFA\">FCFA</span>
                                    </span>
        
                                    <div itemprop=\"seller\" itemscope=\"\" itemtype=\"http://schema.org/Person\"
                                        class=\"seller-details\">
                                        <dl>
                                            ";
        // line 224
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 224)) {
            // line 225
            echo "                                            <dt>Agence</dt>
                                            <dd><span itemprop=\"name\">";
            // line 226
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 226), "libelle", [], "any", false, false, false, 226), 0, 20);
            echo "</span>
                                            </dd>
                                            <dt>Lieu</dt>
                                            <dd itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\"><span
                                                    itemprop=\"addressLocality\">";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 230), "localisation", [], "any", false, false, false, 230), "libelle", [], "any", false, false, false, 230), "html", null, true);
            echo "</span>
                                            </dd>
                                            <dt>Publiée</dt>
                                            <dd><time datetime=\"1.2.2020 19:02\">";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 233), "html", null, true);
            echo "</time></dd>
                                            ";
        } else {
            // line 235
            echo "                                            <dt>Démarcheur</dt>
                                            <dd><span
                                                    itemprop=\"name\">";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 237), "nom", [], "any", false, false, false, 237), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 237), "prenom", [], "any", false, false, false, 237), "html", null, true);
            echo "</span>
                                            </dd>
                                            <dt>Publiée</dt>
                                            <dd><time datetime=\"1.2.2020 19:02\">";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 240), "html", null, true);
            echo "</time></dd>
                                            ";
        }
        // line 242
        echo "                                        </dl>
                                    </div>
                                </section>
                            </div>
                        </div>
    
    
    
                        <div class=\"btn-holder\"  style=\"margin-bottom: 12px;\">
                            <a href=\"#contactPhone\" data-scroll-to=\"#contactPhone\" data-transaction-id=\"Phone_5443116_guest\"
                                data-lead-type=\"Phone\" class=\"button button-phone2 transaction-click\"
                                title=\"Afficher le téléphone\">Afficher le téléphone </a>
                            <a href=\"#contactForm>\" data-scroll-to=\"#contactForm\"
                                class=\"button button-email2 reply-by-email-click contactForm\" title=\"Contacter par email\">
                                <span class=\"icon-mail\"></span> Contacter par email </a>
                        </div>
                    </div>
                    <div class=\"aside aside-without-description\">
                        <div class=\"aside-infos\">
                            <section id=\"priceSection\" itemprop=\"offers\" itemscope=\"\" itemtype=\"http://schema.org/Offer\">
                                <meta itemprop=\"url\">
                                <meta itemprop=\"availability\" content=\"http://schema.org/InStock\">
                                <span class=\"price\">
                                    <span itemprop=\"price\" content=\"95000000.00\">";
        // line 265
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "prix", [], "any", false, false, false, 265), "html", null, true);
        echo "</span>
                                    <span itemprop=\"priceCurrency\" content=\"FCFA\">FCFA</span>
                                </span>
    
                                <div itemprop=\"seller\" itemscope=\"\" itemtype=\"http://schema.org/Person\"
                                    class=\"seller-details\">
                                    <dl>
                                        ";
        // line 272
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 272)) {
            // line 273
            echo "                                        <dt>Agence</dt>
                                        <dd><span itemprop=\"name\">";
            // line 274
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 274), "libelle", [], "any", false, false, false, 274), 0, 20);
            echo "</span>
                                        </dd>
                                        <dt>Lieu</dt>
                                        <dd itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\"><span
                                                itemprop=\"addressLocality\">";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 278), "localisation", [], "any", false, false, false, 278), "libelle", [], "any", false, false, false, 278), "html", null, true);
            echo "</span>
                                        </dd>
                                        <dt>Publiée</dt>
                                        <dd><time datetime=\"1.2.2020 19:02\">";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 281), "html", null, true);
            echo "</time></dd>
                                        ";
        } else {
            // line 283
            echo "                                        <dt>Démarcheur</dt>
                                        <dd><span
                                                itemprop=\"name\">";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 285), "nom", [], "any", false, false, false, 285), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 285), "prenom", [], "any", false, false, false, 285), "html", null, true);
            echo "</span>
                                        </dd>
                                        <dt>Publiée</dt>
                                        <dd><time datetime=\"1.2.2020 19:02\">";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 288), "html", null, true);
            echo "</time></dd>
                                        ";
        }
        // line 290
        echo "                                    </dl>
                                </div>
    
    
                            </section>
                            <div class=\"btn-holder\">
                                <a href=\"#contactPhone\" data-scroll-to=\"#contactPhone\"
                                    data-event=\"{&quot;id&quot;:&quot;5443116&quot;,&quot;title&quot;:&quot;Belle Apparemment \\u00c0 Vendre &quot;,&quot;price&quot;:&quot;95000000.00&quot;,&quot;category&quot;:&quot;Immobilier\\/Appartements \\u00e0 vendre&quot;}\"
                                    data-transaction-id=\"Phone_5443116_guest\" data-lead-type=\"Phone\"
                                    class=\"button transaction-click clicked\" title=\"Afficher le téléphone\">Afficher le téléphone </a>
    
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
        // line 318
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "id", [], "any", false, false, false, 318), "html", null, true);
        echo "\" hidden>
                        <fieldset>
                            ";
        // line 320
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 320)) {
            // line 321
            echo "                            <h2>Envoyer un message à ";
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 321), "libelle", [], "any", false, false, false, 321), 0, 20);
            echo "</h2>
                            ";
        } else {
            // line 323
            echo "                            <h2>Envoyer un message à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 323), "nom", [], "any", false, false, false, 323), "html", null, true);
            echo "
                                ";
            // line 324
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 324), "prenom", [], "any", false, false, false, 324), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 326
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
        // line 374
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 374)) {
            // line 375
            echo "                        <h2>Envoyer un message à ";
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 375), "libelle", [], "any", false, false, false, 375), 0, 20);
            echo "</h2>
                        ";
        } else {
            // line 377
            echo "                        <h2>Envoyer un message à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 377), "nom", [], "any", false, false, false, 377), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 377), "prenom", [], "any", false, false, false, 377), "html", null, true);
            echo "
                        </h2>
                        ";
        }
        // line 380
        echo "                        <div class=\"phone-box show\" style=\"margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;\">
                            <div class=\"icon-holder\">
                                <span class=\"icon-phone\"></span>
                            </div>
                            ";
        // line 384
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 384)) {
            // line 385
            echo "                            <a href=\"tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 385), "tel", [], "any", false, false, false, 385), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 385), "tel", [], "any", false, false, false, 385), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 387
            echo "                            <a href=\"tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 387), "tel", [], "any", false, false, false, 387), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 387), "tel", [], "any", false, false, false, 387), "html", null, true);
            echo "</a>
                            ";
        }
        // line 389
        echo "                            <i class=\"icon-whatsapp active \"> <span class=\"popover above\">Ce numéro de téléphone
                                    fonctionne avec WhatsApp</span></i>
                        </div>
                        <div class=\"phone-mention\">
                            Veuillez s'il vous plait mentionner au vendeur que vous avez vu son annonce sur ChapMaison.
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
        // line 420
        echo url("publications");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["publications"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "slot", [], "any", false, false, false, 420), "html", null, true);
        echo "\">
                        <div class=\"polaroid\">
                            <img src=\"";
        // line 422
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["publications"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null), "photos", [], "any", false, false, false, 422)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "getpath", [], "any", false, false, false, 422), "html", null, true);
        echo "\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                            <div class=\"container-p\" style=\"min-height: 100px;\">
                                <p>";
        // line 424
        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["publications"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "libelle", [], "any", false, false, false, 424), 0, 40);
        echo "</p>
                                <p>
                                    <span class=\"address\">";
        // line 426
        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["publications"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "typepublication", [], "any", false, false, false, 426), "libelle", [], "any", false, false, false, 426), 0, 20);
        echo ",
                                        ";
        // line 427
        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["publications"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "localisations", [], "any", false, false, false, 427), "libelle", [], "any", false, false, false, 427), 0, 20);
        echo " </span>
                                </p>
                                <p>
                                    ";
        // line 430
        if (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["publications"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "prix", [], "any", false, false, false, 430)) {
            // line 431
            echo "                                        <div class=\"price-date\">
                                            <span class=\"price\">";
            // line 432
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["publications"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null), "prix", [], "any", false, false, false, 432), "html", null, true);
            echo " FCFA</span>
                                        </div>
                                    ";
        }
        // line 435
        echo "                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-sm-4 col-xs-6 col-md-4\" id=\"two-publication-recommande\">
                    <a href=\"";
        // line 441
        echo url("publications");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["publications"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[1] ?? null) : null), "slot", [], "any", false, false, false, 441), "html", null, true);
        echo "\">
                        <div class=\"polaroid\">
                            <img src=\"";
        // line 443
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["publications"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[1] ?? null) : null), "photos", [], "any", false, false, false, 443)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[0] ?? null) : null), "getpath", [], "any", false, false, false, 443), "html", null, true);
        echo "\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                            <div class=\"container-p\" style=\"min-height: 100px;\">
                                <p>";
        // line 445
        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["publications"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[1] ?? null) : null), "libelle", [], "any", false, false, false, 445), 0, 40);
        echo "</p>
                                <p><span class=\"address\">";
        // line 446
        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["publications"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[1] ?? null) : null), "typepublication", [], "any", false, false, false, 446), "libelle", [], "any", false, false, false, 446), 0, 20);
        echo ",
                                        ";
        // line 447
        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["publications"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[1] ?? null) : null), "localisations", [], "any", false, false, false, 447), "libelle", [], "any", false, false, false, 447), 0, 20);
        echo " </span>
                                    </p>
                                        <p>
                                            ";
        // line 450
        if (twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["publications"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[1] ?? null) : null), "prix", [], "any", false, false, false, 450)) {
            // line 451
            echo "                                                <div class=\"price-date\">
                                                    <span class=\"price\">";
            // line 452
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["publications"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[1] ?? null) : null), "prix", [], "any", false, false, false, 452), "html", null, true);
            echo " FCFA</span>
                                                </div>
                                            ";
        }
        // line 455
        echo "                                        </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-sm-4 col-xs-6 col-md-4\" id=\"three-publication-recommande\">
                    <a href=\"";
        // line 461
        echo url("publications");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["publications"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[2] ?? null) : null), "slot", [], "any", false, false, false, 461), "html", null, true);
        echo "\">
                        <div class=\"polaroid\">
                            <img src=\"";
        // line 463
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["publications"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[2] ?? null) : null), "photos", [], "any", false, false, false, 463)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[0] ?? null) : null), "getpath", [], "any", false, false, false, 463), "html", null, true);
        echo "\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                            <div class=\"container-p\" style=\"min-height: 100px;\">
                                <p>";
        // line 465
        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["publications"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[2] ?? null) : null), "libelle", [], "any", false, false, false, 465), 0, 40);
        echo "</p>
                                <p><span class=\"address\">";
        // line 466
        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["publications"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[2] ?? null) : null), "typepublication", [], "any", false, false, false, 466), "libelle", [], "any", false, false, false, 466), 0, 20);
        echo ",
                                        ";
        // line 467
        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["publications"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[2] ?? null) : null), "localisations", [], "any", false, false, false, 467), "libelle", [], "any", false, false, false, 467), 0, 20);
        echo " </span>
                                </p>
                                <p>
                                    ";
        // line 470
        if (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["publications"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[2] ?? null) : null), "prix", [], "any", false, false, false, 470)) {
            // line 471
            echo "                                        <div class=\"price-date\">
                                            <span class=\"price\">";
            // line 472
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["publications"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[2] ?? null) : null), "prix", [], "any", false, false, false, 472), "html", null, true);
            echo " FCFA</span>
                                        </div>
                                    ";
        }
        // line 475
        echo "                                </p>
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
        return array (  794 => 475,  788 => 472,  785 => 471,  783 => 470,  777 => 467,  773 => 466,  769 => 465,  764 => 463,  757 => 461,  749 => 455,  743 => 452,  740 => 451,  738 => 450,  732 => 447,  728 => 446,  724 => 445,  719 => 443,  712 => 441,  704 => 435,  698 => 432,  695 => 431,  693 => 430,  687 => 427,  683 => 426,  678 => 424,  673 => 422,  666 => 420,  633 => 389,  625 => 387,  617 => 385,  615 => 384,  609 => 380,  600 => 377,  594 => 375,  592 => 374,  542 => 326,  537 => 324,  532 => 323,  526 => 321,  524 => 320,  519 => 318,  489 => 290,  484 => 288,  476 => 285,  472 => 283,  467 => 281,  461 => 278,  454 => 274,  451 => 273,  449 => 272,  439 => 265,  414 => 242,  409 => 240,  401 => 237,  397 => 235,  392 => 233,  386 => 230,  379 => 226,  376 => 225,  374 => 224,  364 => 217,  351 => 207,  345 => 204,  338 => 199,  333 => 197,  328 => 196,  323 => 194,  318 => 193,  314 => 192,  309 => 191,  305 => 190,  300 => 189,  296 => 188,  292 => 187,  283 => 180,  277 => 179,  272 => 177,  268 => 176,  262 => 174,  255 => 170,  251 => 169,  246 => 166,  243 => 165,  239 => 164,  233 => 160,  227 => 159,  219 => 156,  216 => 155,  210 => 152,  207 => 151,  204 => 150,  200 => 149,  188 => 140,  183 => 137,  176 => 134,  173 => 133,  170 => 132,  37 => 1,);
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
                                    <meta itemprop=\"url\" >
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
                                title=\"Afficher le téléphone\">Afficher le téléphone </a>
                            <a href=\"#contactForm>\" data-scroll-to=\"#contactForm\"
                                class=\"button button-email2 reply-by-email-click contactForm\" title=\"Contacter par email\">
                                <span class=\"icon-mail\"></span> Contacter par email </a>
                        </div>
                    </div>
                    <div class=\"aside aside-without-description\">
                        <div class=\"aside-infos\">
                            <section id=\"priceSection\" itemprop=\"offers\" itemscope=\"\" itemtype=\"http://schema.org/Offer\">
                                <meta itemprop=\"url\">
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
                                    class=\"button transaction-click clicked\" title=\"Afficher le téléphone\">Afficher le téléphone </a>
    
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
                            Veuillez s'il vous plait mentionner au vendeur que vous avez vu son annonce sur ChapMaison.
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
                            <div class=\"container-p\" style=\"min-height: 100px;\">
                                <p>{{ publications[0].libelle|slice(0,40)|raw }}</p>
                                <p>
                                    <span class=\"address\">{{ publications[0].typepublication.libelle|slice(0,20)|raw }},
                                        {{ publications[0].localisations.libelle|slice(0,20)|raw}} </span>
                                </p>
                                <p>
                                    {% if publications[0].prix %}
                                        <div class=\"price-date\">
                                            <span class=\"price\">{{ publications[0].prix }} FCFA</span>
                                        </div>
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-sm-4 col-xs-6 col-md-4\" id=\"two-publication-recommande\">
                    <a href=\"{{ url('publications') }}/{{ publications[1].slot }}\">
                        <div class=\"polaroid\">
                            <img src=\"{{ publications[1].photos[0].getpath }}\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                            <div class=\"container-p\" style=\"min-height: 100px;\">
                                <p>{{ publications[1].libelle|slice(0,40)|raw }}</p>
                                <p><span class=\"address\">{{ publications[1].typepublication.libelle|slice(0,20)|raw }},
                                        {{ publications[1].localisations.libelle|slice(0,20)|raw}} </span>
                                    </p>
                                        <p>
                                            {% if publications[1].prix %}
                                                <div class=\"price-date\">
                                                    <span class=\"price\">{{ publications[1].prix }} FCFA</span>
                                                </div>
                                            {% endif %}
                                        </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-sm-4 col-xs-6 col-md-4\" id=\"three-publication-recommande\">
                    <a href=\"{{ url('publications') }}/{{ publications[2].slot }}\">
                        <div class=\"polaroid\">
                            <img src=\"{{ publications[2].photos[0].getpath }}\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                            <div class=\"container-p\" style=\"min-height: 100px;\">
                                <p>{{ publications[2].libelle|slice(0,40)|raw  }}</p>
                                <p><span class=\"address\">{{ publications[2].typepublication.libelle|slice(0,20)|raw }},
                                        {{ publications[2].localisations.libelle|slice(0,20)|raw}} </span>
                                </p>
                                <p>
                                    {% if publications[2].prix %}
                                        <div class=\"price-date\">
                                            <span class=\"price\">{{ publications[2].prix }} FCFA</span>
                                        </div>
                                    {% endif %}
                                </p>
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

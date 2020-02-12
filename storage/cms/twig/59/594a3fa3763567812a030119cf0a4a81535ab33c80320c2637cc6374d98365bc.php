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
        echo "<div class=\"container detail-publication\" style=\"margin-top: 20px;\">
    <div class=\"card\" style=\"margin-left: 8%;margin-right: 8%;\">
        <article class=\"singlepost \">
            <header class=\"heading-area\">
                <h1 class=\"\"><span itemprop=\"name\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 5), "html", null, true);
        echo "</span></h1>
            </header>
            <div class=\"twocolumn\">
                <div class=\"post-content\">
                    <!-- slideshow -->
                    <div class=\"slideshow gallery-js-ready autorotation-disabled\">
                        <div class=\"mask\">
                            <div class=\"slideset\" style=\"height: 420px;\">
                                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 14
            echo "                                ";
            if (($context["key"] == 0)) {
                // line 15
                echo "                                <div class=\"slide active\" style=\"display: block;\"><img itemprop=\"image\" class=\"imggf-1\"
                                        src=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 16)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getPath", [], "any", false, false, false, 16), "html", null, true);
                echo "\"
                                        alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                ";
            } else {
                // line 19
                echo "                                <div class=\"slide\" style=\"display: block; opacity: 0;\">
                                    <img itemprop=\"image\" class=\"imggf-";
                // line 20
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 20), "html", null, true);
                echo "\"
                                        data-src=\"https://media.jumiadeals.com/ci_live/66531c68775e35c47f5a69a.desktop-gallery-large.jpg\"
                                        alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                ";
            }
            // line 24
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                            </div>
                            <span class=\"loader\" style=\"display: none;\"></span>
                        </div>
                        <ul class=\"pagination img-miniature\">
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["key"] => $context["photo"]) {
            // line 30
            echo "                            ";
            if (($context["key"] == 0)) {
                // line 31
                echo "                            <li class=\"active\">
                                <a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"1\"><img
                                        style=\"width: 100px;height: 66px;\"
                                        src=\"";
                // line 34
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 34), 100, 100]);
                echo "\"
                                        alt=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 35), "html", null, true);
                echo "\">
                                </a>
                            </li>
                            ";
            } else {
                // line 39
                echo "                            <li><a href=\"javascript:void(0)\" class=\"imageminia\" data-imgptf=\"";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\"><img
                                        style=\"width: 100px;height: 66px;\"
                                        src=\"";
                // line 41
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 41), 100, 100]);
                echo "\"
                                        alt=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "libelle", [], "any", false, false, false, 42), "html", null, true);
                echo "\"></a></li>
                            ";
            }
            // line 44
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "

                        </ul>
                    </div>

                    <div class=\"post-attributes\">
                        <div class=\"new-attr-style\">
                            ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "nbre_piece", [], "any", false, false, false, 52)) {
            echo " <h3>Nombre de
                                pièces<span>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "nbre_piece", [], "any", false, false, false, 53), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 54
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "commune", [], "any", false, false, false, 54)) {
            echo " <h3>
                                Commune<span>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "commune", [], "any", false, false, false, 55), "libelle", [], "any", false, false, false, 55), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 56
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "ville", [], "any", false, false, false, 56)) {
            echo " <h3>
                                Ville<span>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "ville", [], "any", false, false, false, 57), "libelle", [], "any", false, false, false, 57), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 58
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "Localisation", [], "any", false, false, false, 58)) {
            echo " <h3>
                                Localisation<span>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "Localisation", [], "any", false, false, false, 59), "libelle", [], "any", false, false, false, 59), "html", null, true);
            echo "<span></span></span></h3>
                            ";
        }
        // line 61
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "typepublication", [], "any", false, false, false, 61)) {
            echo " <h3>Type de
                                publication<span>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "typepublication", [], "any", false, false, false, 62), "libelle", [], "any", false, false, false, 62), "html", null, true);
            echo "<span></span></span></h3>
                            ";
        }
        // line 64
        echo "                        </div>
                    </div>
                    <div class=\"post-text-content\" style=\"margin-top: 12px;\">
                        <div class=\"title\">Description :</div>
                        <p>
                            ";
        // line 69
        echo twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "description", [], "any", false, false, false, 69);
        echo "
                        </p>
                        <p>
                            <b>Date de publication: ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 72), "html", null, true);
        echo "</b>
                        </p>
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
                <div class=\"aside\">
                    <div class=\"aside-infos\">
                        <section id=\"priceSection\" itemprop=\"offers\" itemscope=\"\" itemtype=\"http://schema.org/Offer\">
                            <meta itemprop=\"url\" content=\"https://deals.jumia.ci/belle-apparemment-vendre--pid5443116\">
                            <meta itemprop=\"availability\" content=\"http://schema.org/InStock\">
                            <span class=\"price\">
                                <span itemprop=\"price\" content=\"95000000.00\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "prix", [], "any", false, false, false, 94), "html", null, true);
        echo "</span>
                                <span itemprop=\"priceCurrency\" content=\"FCFA\">FCFA</span>
                            </span>

                            <div itemprop=\"seller\" itemscope=\"\" itemtype=\"http://schema.org/Person\"
                                class=\"seller-details\">
                                <dl>
                                    ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 101)) {
            // line 102
            echo "                                    <dt>Agence</dt>
                                    <dd><span itemprop=\"name\">";
            // line 103
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 103), "libelle", [], "any", false, false, false, 103), 0, 20);
            echo "</span>
                                    </dd>
                                    <dt>Lieu</dt>
                                    <dd itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\"><span
                                            itemprop=\"addressLocality\">";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 107), "localisation", [], "any", false, false, false, 107), "libelle", [], "any", false, false, false, 107), "html", null, true);
            echo "</span>
                                    </dd>
                                    <dt>Publiée</dt>
                                    <dd><time datetime=\"1.2.2020 19:02\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 110), "html", null, true);
            echo "</time></dd>
                                    ";
        } else {
            // line 112
            echo "                                    <dt>Démarcheur</dt>
                                    <dd><span
                                            itemprop=\"name\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 114), "nom", [], "any", false, false, false, 114), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 114), "prenom", [], "any", false, false, false, 114), "html", null, true);
            echo "</span>
                                    </dd>
                                    <dt>Publiée</dt>
                                    <dd><time datetime=\"1.2.2020 19:02\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 117), "html", null, true);
            echo "</time></dd>
                                    ";
        }
        // line 119
        echo "                                </dl>
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

                    <div class=\"pdv cool-banner-right\">
                        <div id=\"div-gpt-ad-CI_PDV_Right_RE\" style=\"height: 250px; width: 300px;\">
                            <!-- \"div-gpt-ad-[AD UNITS NAME]\" for div ID  -->
                            <div id=\"google_ads_iframe_/137010309/CI_PDV_Right_RE_0__container__\"
                                style=\"border: 0pt none; width: 300px; height: 250px;\"></div>
                        </div>
                    </div>

                </div>
            </div>

            <section class=\"super-form-container\" id=\"super-form-container\" style=\"display: none;\">


                <!-- Mail Contact Form  -->
                <div class=\"form-area\" id=\"contactForm\" style=\"display: none\">
                    <form class=\"contact-form\" method=\"post\" role=\"form\" data-request=\"onSendMessage\">
                        <input type=\"text\" name=\"publication_id\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "id", [], "any", false, false, false, 156), "html", null, true);
        echo "\" hidden>
                        <fieldset>
                            ";
        // line 158
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 158)) {
            // line 159
            echo "                            <h2>Envoyer un message à ";
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 159), "libelle", [], "any", false, false, false, 159), 0, 20);
            echo "</h2>
                            ";
        } else {
            // line 161
            echo "                            <h2>Envoyer un message à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 161), "nom", [], "any", false, false, false, 161), "html", null, true);
            echo "
                                ";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 162), "prenom", [], "any", false, false, false, 162), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 164
        echo "                            <div class=\"row\">
                                <div class=\"column wide\">
                                    <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Votre nom\" required=\"required\"
                                        data-parsley-required-message=\"Veuillez entrer votre nom.\"
                                        data-parsley-id=\"6654\">
                                    <ul class=\"parsley-errors-list\" id=\"parsley-id-6654\"></ul>
                                </div>
                                <div class=\"column wide\" style=\"width: 47.864%;\">
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
        // line 212
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 212)) {
            // line 213
            echo "                        <h2>Envoyer un message à ";
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 213), "libelle", [], "any", false, false, false, 213), 0, 20);
            echo "</h2>
                        ";
        } else {
            // line 215
            echo "                        <h2>Envoyer un message à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 215), "nom", [], "any", false, false, false, 215), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 215), "prenom", [], "any", false, false, false, 215), "html", null, true);
            echo "
                        </h2>
                        ";
        }
        // line 218
        echo "                        <div class=\"phone-box show\" style=\"margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;\">
                            <div class=\"icon-holder\">
                                <span class=\"icon-phone\"></span>
                            </div>
                            ";
        // line 222
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 222)) {
            // line 223
            echo "                            <a href=\"tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 223), "tel", [], "any", false, false, false, 223), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 223), "tel", [], "any", false, false, false, 223), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 225
            echo "                            <a href=\"tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 225), "tel", [], "any", false, false, false, 225), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 225), "tel", [], "any", false, false, false, 225), "html", null, true);
            echo "</a>
                            ";
        }
        // line 227
        echo "                            <i class=\"icon-whatsapp active \"> <span class=\"popover above\">Ce numéro de téléphone
                                    fonctionne avec WhatsApp</span></i>
                        </div>
                        <div class=\"phone-mention\">
                            Veuillez s'il vous plait mentionner au vendeur que vous avez vu son annonce sur Jumia Deals.
                        </div>
                        <div class=\"pdv cool-banner-middle\">
                            <div id=\"div-gpt-ad-CI_PDV_Middle_RE\" style=\"height: 100px; width: 320px;\">
                                <!-- \"div-gpt-ad-[AD UNITS NAME]\" for div ID  -->
                                <div id=\"google_ads_iframe_/137010309/CI_PDV_Middle_RE_0__container__\"
                                    style=\"border: 0pt none; width: 320px; height: 100px;\"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--Warning Message-->
                <div class=\"text-area\" style=\"margin-bottom: 20px;\">
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
                </div>

            </section>

            <section class=\"row\">
                ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 272
            echo "                <a class=\"col-md-4\" href=\"";
            echo url("publications");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "slot", [], "any", false, false, false, 272), "html", null, true);
            echo "\">
                    <div class=\"polaroid\">
                        <img src=\"";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["publication"], "photos", [], "any", false, false, false, 274)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "getpath", [], "any", false, false, false, 274), "html", null, true);
            echo "\" alt=\"5 Terre\" style=\"width:100%;height: 200px;\">
                        <div class=\"container-p\">
                            <p>";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "libelle", [], "any", false, false, false, 276), "html", null, true);
            echo "</p>
                            <p><span class=\"address\">";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "typepublication", [], "any", false, false, false, 277), "libelle", [], "any", false, false, false, 277), "html", null, true);
            echo ",
                                    ";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["publication"], "localisations", [], "any", false, false, false, 278), "libelle", [], "any", false, false, false, 278), "html", null, true);
            echo " </span></p>
                            <div class=\"price-date\">
                                <span class=\"price\">";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "prix", [], "any", false, false, false, 280), "html", null, true);
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
        // line 286
        echo "            </section>

        </article>

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
        return array (  522 => 286,  510 => 280,  505 => 278,  501 => 277,  497 => 276,  492 => 274,  484 => 272,  480 => 271,  434 => 227,  426 => 225,  418 => 223,  416 => 222,  410 => 218,  401 => 215,  395 => 213,  393 => 212,  343 => 164,  338 => 162,  333 => 161,  327 => 159,  325 => 158,  320 => 156,  281 => 119,  276 => 117,  268 => 114,  264 => 112,  259 => 110,  253 => 107,  246 => 103,  243 => 102,  241 => 101,  231 => 94,  206 => 72,  200 => 69,  193 => 64,  188 => 62,  183 => 61,  178 => 59,  173 => 58,  169 => 57,  164 => 56,  160 => 55,  155 => 54,  151 => 53,  147 => 52,  138 => 45,  132 => 44,  127 => 42,  123 => 41,  117 => 39,  110 => 35,  106 => 34,  101 => 31,  98 => 30,  94 => 29,  88 => 25,  82 => 24,  73 => 20,  70 => 19,  64 => 16,  61 => 15,  58 => 14,  54 => 13,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container detail-publication\" style=\"margin-top: 20px;\">
    <div class=\"card\" style=\"margin-left: 8%;margin-right: 8%;\">
        <article class=\"singlepost \">
            <header class=\"heading-area\">
                <h1 class=\"\"><span itemprop=\"name\">{{ publication.libelle }}</span></h1>
            </header>
            <div class=\"twocolumn\">
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
                <div class=\"aside\">
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

                    <div class=\"pdv cool-banner-right\">
                        <div id=\"div-gpt-ad-CI_PDV_Right_RE\" style=\"height: 250px; width: 300px;\">
                            <!-- \"div-gpt-ad-[AD UNITS NAME]\" for div ID  -->
                            <div id=\"google_ads_iframe_/137010309/CI_PDV_Right_RE_0__container__\"
                                style=\"border: 0pt none; width: 300px; height: 250px;\"></div>
                        </div>
                    </div>

                </div>
            </div>

            <section class=\"super-form-container\" id=\"super-form-container\" style=\"display: none;\">


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
                                <div class=\"column wide\" style=\"width: 47.864%;\">
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
                        <div class=\"pdv cool-banner-middle\">
                            <div id=\"div-gpt-ad-CI_PDV_Middle_RE\" style=\"height: 100px; width: 320px;\">
                                <!-- \"div-gpt-ad-[AD UNITS NAME]\" for div ID  -->
                                <div id=\"google_ads_iframe_/137010309/CI_PDV_Middle_RE_0__container__\"
                                    style=\"border: 0pt none; width: 320px; height: 100px;\"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--Warning Message-->
                <div class=\"text-area\" style=\"margin-bottom: 20px;\">
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
                </div>

            </section>

            <section class=\"row\">
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
            </section>

        </article>

    </div>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/detail_publication.htm", "");
    }
}

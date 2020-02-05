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
                                <div class=\"slide active\" style=\"display: block;\"><img itemprop=\"image\"
                                        src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "cover", [], "any", false, false, false, 14), "getPath", [], "any", false, false, false, 14), "html", null, true);
        echo "\"
                                        alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "photos", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 17
            echo "                                    <div class=\"slide\" style=\"display: block; opacity: 0;\"><img itemprop=\"image\"
                                            src=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "getPath", [], "any", false, false, false, 18), "html", null, true);
            echo "\"
                                            data-src=\"https://media.jumiadeals.com/ci_live/66531c68775e35c47f5a69a.desktop-gallery-large.jpg\"
                                            alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                            </div>
                            <span class=\"loader\" style=\"display: none;\"></span>
                        </div>
                        <ul class=\"pagination\">
                            <li class=\"active\"><a href=\"#\"><img
                                        src=\"https://media.jumiadeals.com/ci_live/6fbdedddd65e35c47e98504.desktop-small.jpg\"
                                        alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></a></li>
                            <li><a href=\"#\"><img
                                        src=\"https://media.jumiadeals.com/ci_live/66531c68775e35c47f5a69a.desktop-small.jpg\"
                                        alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></a></li>
                        </ul>
                    </div>

                    <div class=\"post-attributes\">
                        <div class=\"new-attr-style\">
                            ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "nbre_piece", [], "any", false, false, false, 37)) {
            echo " <h3>Nombre de pièces<span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "nbre_piece", [], "any", false, false, false, 37), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 38
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "commune", [], "any", false, false, false, 38)) {
            echo " <h3>Commune<span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "commune", [], "any", false, false, false, 38), "libelle", [], "any", false, false, false, 38), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 39
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "ville", [], "any", false, false, false, 39)) {
            echo " <h3>Ville<span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "ville", [], "any", false, false, false, 39), "libelle", [], "any", false, false, false, 39), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 40
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "Localisation", [], "any", false, false, false, 40)) {
            echo " <h3>Localisation<span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "Localisation", [], "any", false, false, false, 40), "libelle", [], "any", false, false, false, 40), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 41
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "typepublication", [], "any", false, false, false, 41)) {
            echo " <h3>Type de publication<span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "typepublication", [], "any", false, false, false, 41), "libelle", [], "any", false, false, false, 41), "html", null, true);
            echo "<span></span></span></h3> ";
        }
        // line 42
        echo "                        </div>
                    </div>
                    <div class=\"post-text-content\" style=\"margin-top: 12px;\">
                        <div class=\"title\">Description :</div>
                        <p>
                            ";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "description", [], "any", false, false, false, 47);
        echo "
                        </p>
                    </div>



                    <div class=\"btn-holder\">
                        <a href=\"#contactPhone\" data-scroll-to=\"#contactPhone\"
                            data-event=\"{&quot;id&quot;:&quot;5443116&quot;,&quot;title&quot;:&quot;Belle Apparemment \\u00c0 Vendre &quot;,&quot;price&quot;:&quot;95000000.00&quot;,&quot;category&quot;:&quot;Immobilier\\/Appartements \\u00e0 vendre&quot;}\"
                            data-transaction-id=\"Phone_5443116_guest\" data-lead-type=\"Phone\"
                            class=\"button button-phone2 transaction-click\" title=\"Afficher le téléphone\">
                            <span class=\"icon-phone\"></span> Afficher le téléphone </a>
                        <a href=\"#contactForm>\" data-scroll-to=\"#contactForm\"
                            class=\"button button-email2 reply-by-email-click\"
                            data-event=\"{&quot;id&quot;:&quot;5443116&quot;,&quot;title&quot;:&quot;Belle Apparemment \\u00c0 Vendre &quot;,&quot;price&quot;:&quot;95000000.00&quot;,&quot;category&quot;:&quot;Immobilier\\/Appartements \\u00e0 vendre&quot;}\"
                            title=\"Contacter par email\">
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
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "prix", [], "any", false, false, false, 72), "html", null, true);
        echo "</span>
                                <span itemprop=\"priceCurrency\" content=\"FCFA\">FCFA</span>
                            </span>

                            <div itemprop=\"seller\" itemscope=\"\" itemtype=\"http://schema.org/Person\"
                                class=\"seller-details\">
                                <dl>
                                    ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 79)) {
            // line 80
            echo "                                        <dt>Agence</dt>
                                        <dd><span itemprop=\"name\">";
            // line 81
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 81), "libelle", [], "any", false, false, false, 81), 0, 20);
            echo "</span></dd>
                                        <dt>Lieu</dt>
                                        <dd itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\"><span
                                                itemprop=\"addressLocality\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 84), "localisation", [], "any", false, false, false, 84), "libelle", [], "any", false, false, false, 84), "html", null, true);
            echo "</span></dd>
                                        <dt>Publiée</dt>
                                        <dd><time datetime=\"1.2.2020 19:02\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 86), "html", null, true);
            echo "</time></dd>
                                    ";
        } else {
            // line 88
            echo "                                        <dt>Démarcheur</dt>
                                        <dd><span itemprop=\"name\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 89), "nom", [], "any", false, false, false, 89), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 89), "prenom", [], "any", false, false, false, 89), "html", null, true);
            echo "</span></dd>
                                        <dt>Publiée</dt>
                                        <dd><time datetime=\"1.2.2020 19:02\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "created_at", [], "any", false, false, false, 91), "html", null, true);
            echo "</time></dd>
                                    ";
        }
        // line 93
        echo "                                </dl>
                            </div>


                        </section>
                        <div class=\"btn-holder\">
                            <a href=\"#contactPhone\" data-scroll-to=\"#contactPhone\"
                                data-event=\"{&quot;id&quot;:&quot;5443116&quot;,&quot;title&quot;:&quot;Belle Apparemment \\u00c0 Vendre &quot;,&quot;price&quot;:&quot;95000000.00&quot;,&quot;category&quot;:&quot;Immobilier\\/Appartements \\u00e0 vendre&quot;}\"
                                data-transaction-id=\"Phone_5443116_guest\" data-lead-type=\"Phone\"
                                class=\"button transaction-click clicked\" title=\"Afficher le téléphone\">
                                <span class=\"icon-phone\"></span> Afficher le téléphone </a>

                            <a href=\"#contactForm>\" data-scroll-to=\"#contactForm\"
                                class=\"button button-email2 reply-by-email-click\"
                                data-event=\"{&quot;id&quot;:&quot;5443116&quot;,&quot;title&quot;:&quot;Belle Apparemment \\u00c0 Vendre &quot;,&quot;price&quot;:&quot;95000000.00&quot;,&quot;category&quot;:&quot;Immobilier\\/Appartements \\u00e0 vendre&quot;}\"
                                title=\"Contacter par email\">
                                <span class=\"icon-mail\"></span> Contacter par email </a>

                        </div>
                    </div>

                    <div class=\"pdv cool-banner-right\">
                        <div id=\"div-gpt-ad-CI_PDV_Right_RE\" style=\"height: 250px; width: 300px;\">
                            <!-- \"div-gpt-ad-[AD UNITS NAME]\" for div ID  -->
                            <script type=\"text/javascript\">
                                pushAd({ id: \"CI_PDV_Right_RE\", height: 250, width: 300, subcategory: \"0\", language: \"fr\" });
                            </script>
                            <div id=\"google_ads_iframe_/137010309/CI_PDV_Right_RE_0__container__\"
                                style=\"border: 0pt none; width: 300px; height: 250px;\"></div>
                        </div>
                    </div>

                </div>
            </div>
            <section class=\"super-form-container\">


                <!-- Mail Contact Form  -->
                <div class=\"form-area\" id=\"contactForm\" style=\"display: inline-block;\">
                    <form class=\"contact-form\" method=\"post\" role=\"form\"
                        action=\"/posts/create-user-message/5443116/post\" data-parsley-validate=\"\" novalidate=\"\">
                        <fieldset>
                            ";
        // line 135
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 135)) {
            // line 136
            echo "                                <h2>Envoyer un message à ";
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 136), "libelle", [], "any", false, false, false, 136), 0, 20);
            echo "</h2>
                            ";
        } else {
            // line 138
            echo "                                <h2>Envoyer un message à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 138), "nom", [], "any", false, false, false, 138), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 138), "prenom", [], "any", false, false, false, 138), "html", null, true);
            echo "</h2>
                            ";
        }
        // line 140
        echo "                            <div class=\"row\">
                                <div class=\"column wide\">
                                    <input type=\"text\" id=\"name\" name=\"name\" placeholder=\"Votre nom\" required=\"required\"
                                        data-parsley-required-message=\"Veuillez entrer votre nom.\"
                                        data-parsley-id=\"6654\">
                                    <ul class=\"parsley-errors-list\" id=\"parsley-id-6654\"></ul>
                                </div>
                                <div class=\"column wide\" style=\"width: 47.864%;\">
                                    <input type=\"text\" id=\"phoneNumber\" name=\"phoneNumber\" class=\"authentic_phone\"
                                        placeholder=\"Votre numéro de téléphone\" pattern=\"/^[+\\d\\s]+\$/\"
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
                                        data-parsley-required-message=\"Message requis\"
                                        data-parsley-id=\"7776\" rows=\"4\"></textarea>
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
                <!--
    
                Telephone
    
            -->
                <div id=\"contactPhone\" class=\"form-area\" style=\"display: inline-block;\">
                    <div class=\"contactPhone\">
                        ";
        // line 192
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 192)) {
            // line 193
            echo "                            <h2>Envoyer un message à ";
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 193), "libelle", [], "any", false, false, false, 193), 0, 20);
            echo "</h2>
                        ";
        } else {
            // line 195
            echo "                            <h2>Envoyer un message à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 195), "nom", [], "any", false, false, false, 195), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 195), "prenom", [], "any", false, false, false, 195), "html", null, true);
            echo "</h2>
                        ";
        }
        // line 197
        echo "                        <div class=\"phone-box show\" style=\"margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;\">
                            <div class=\"icon-holder\">
                                <span class=\"icon-phone\"></span>
                            </div>
                            ";
        // line 201
        if (twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 201)) {
            // line 202
            echo "                                <a href=\"tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 202), "tel", [], "any", false, false, false, 202), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "agence", [], "any", false, false, false, 202), "tel", [], "any", false, false, false, 202), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 204
            echo "                                <a href=\"tel:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 204), "tel", [], "any", false, false, false, 204), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["publication"] ?? null), "demarcheur", [], "any", false, false, false, 204), "tel", [], "any", false, false, false, 204), "html", null, true);
            echo "</a>
                            ";
        }
        // line 206
        echo "                            <i class=\"icon-whatsapp active \"> <span class=\"popover above\">Ce numéro de téléphone
                                    fonctionne avec WhatsApp</span></i>
                        </div>
                        <div class=\"phone-mention\">
                            Veuillez s'il vous plait mentionner au vendeur que vous avez vu son annonce sur Jumia Deals.
                        </div>
                        <div class=\"pdv cool-banner-middle\">
                            <div id=\"div-gpt-ad-CI_PDV_Middle_RE\" style=\"height: 100px; width: 320px;\">
                                <!-- \"div-gpt-ad-[AD UNITS NAME]\" for div ID  -->
                                <script type=\"text/javascript\">
                                    pushAd({ id: \"CI_PDV_Middle_RE\", height: 100, width: 320, subcategory: \"0\", language: \"fr\" });
                                </script>
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
        return array (  363 => 206,  355 => 204,  347 => 202,  345 => 201,  339 => 197,  331 => 195,  325 => 193,  323 => 192,  269 => 140,  261 => 138,  255 => 136,  253 => 135,  209 => 93,  204 => 91,  197 => 89,  194 => 88,  189 => 86,  184 => 84,  178 => 81,  175 => 80,  173 => 79,  163 => 72,  135 => 47,  128 => 42,  121 => 41,  114 => 40,  107 => 39,  100 => 38,  94 => 37,  77 => 22,  67 => 18,  64 => 17,  60 => 16,  55 => 14,  43 => 5,  37 => 1,);
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
                                <div class=\"slide active\" style=\"display: block;\"><img itemprop=\"image\"
                                        src=\"{{ publication.cover.getPath }}\"
                                        alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                {% for photo in publication.photos %}
                                    <div class=\"slide\" style=\"display: block; opacity: 0;\"><img itemprop=\"image\"
                                            src=\"{{ photo.getPath }}\"
                                            data-src=\"https://media.jumiadeals.com/ci_live/66531c68775e35c47f5a69a.desktop-gallery-large.jpg\"
                                            alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></div>
                                {% endfor %}
                            </div>
                            <span class=\"loader\" style=\"display: none;\"></span>
                        </div>
                        <ul class=\"pagination\">
                            <li class=\"active\"><a href=\"#\"><img
                                        src=\"https://media.jumiadeals.com/ci_live/6fbdedddd65e35c47e98504.desktop-small.jpg\"
                                        alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></a></li>
                            <li><a href=\"#\"><img
                                        src=\"https://media.jumiadeals.com/ci_live/66531c68775e35c47f5a69a.desktop-small.jpg\"
                                        alt=\"Belle Apparemment À Vendre  - Côte d’Ivoire\"></a></li>
                        </ul>
                    </div>

                    <div class=\"post-attributes\">
                        <div class=\"new-attr-style\">
                            {% if publication.nbre_piece %} <h3>Nombre de pièces<span>{{ publication.nbre_piece }}<span></span></span></h3> {% endif %}
                            {% if publication.commune %} <h3>Commune<span>{{ publication.commune.libelle }}<span></span></span></h3> {% endif %}
                            {% if publication.ville %} <h3>Ville<span>{{ publication.ville.libelle }}<span></span></span></h3> {% endif %}
                            {% if publication.Localisation %} <h3>Localisation<span>{{ publication.Localisation.libelle }}<span></span></span></h3> {% endif %}
                            {% if publication.typepublication %} <h3>Type de publication<span>{{ publication.typepublication.libelle }}<span></span></span></h3> {% endif %}
                        </div>
                    </div>
                    <div class=\"post-text-content\" style=\"margin-top: 12px;\">
                        <div class=\"title\">Description :</div>
                        <p>
                            {{ publication.description | raw}}
                        </p>
                    </div>



                    <div class=\"btn-holder\">
                        <a href=\"#contactPhone\" data-scroll-to=\"#contactPhone\"
                            data-event=\"{&quot;id&quot;:&quot;5443116&quot;,&quot;title&quot;:&quot;Belle Apparemment \\u00c0 Vendre &quot;,&quot;price&quot;:&quot;95000000.00&quot;,&quot;category&quot;:&quot;Immobilier\\/Appartements \\u00e0 vendre&quot;}\"
                            data-transaction-id=\"Phone_5443116_guest\" data-lead-type=\"Phone\"
                            class=\"button button-phone2 transaction-click\" title=\"Afficher le téléphone\">
                            <span class=\"icon-phone\"></span> Afficher le téléphone </a>
                        <a href=\"#contactForm>\" data-scroll-to=\"#contactForm\"
                            class=\"button button-email2 reply-by-email-click\"
                            data-event=\"{&quot;id&quot;:&quot;5443116&quot;,&quot;title&quot;:&quot;Belle Apparemment \\u00c0 Vendre &quot;,&quot;price&quot;:&quot;95000000.00&quot;,&quot;category&quot;:&quot;Immobilier\\/Appartements \\u00e0 vendre&quot;}\"
                            title=\"Contacter par email\">
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
                                        <dd><span itemprop=\"name\">{{ publication.agence.libelle|slice(0, 20)|raw }}</span></dd>
                                        <dt>Lieu</dt>
                                        <dd itemprop=\"address\" itemscope=\"\" itemtype=\"http://schema.org/PostalAddress\"><span
                                                itemprop=\"addressLocality\">{{ publication.agence.localisation.libelle }}</span></dd>
                                        <dt>Publiée</dt>
                                        <dd><time datetime=\"1.2.2020 19:02\">{{ publication.created_at }}</time></dd>
                                    {% else %}
                                        <dt>Démarcheur</dt>
                                        <dd><span itemprop=\"name\">{{ publication.demarcheur.nom }}&nbsp;{{ publication.demarcheur.prenom }}</span></dd>
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

                            <a href=\"#contactForm>\" data-scroll-to=\"#contactForm\"
                                class=\"button button-email2 reply-by-email-click\"
                                data-event=\"{&quot;id&quot;:&quot;5443116&quot;,&quot;title&quot;:&quot;Belle Apparemment \\u00c0 Vendre &quot;,&quot;price&quot;:&quot;95000000.00&quot;,&quot;category&quot;:&quot;Immobilier\\/Appartements \\u00e0 vendre&quot;}\"
                                title=\"Contacter par email\">
                                <span class=\"icon-mail\"></span> Contacter par email </a>

                        </div>
                    </div>

                    <div class=\"pdv cool-banner-right\">
                        <div id=\"div-gpt-ad-CI_PDV_Right_RE\" style=\"height: 250px; width: 300px;\">
                            <!-- \"div-gpt-ad-[AD UNITS NAME]\" for div ID  -->
                            <script type=\"text/javascript\">
                                pushAd({ id: \"CI_PDV_Right_RE\", height: 250, width: 300, subcategory: \"0\", language: \"fr\" });
                            </script>
                            <div id=\"google_ads_iframe_/137010309/CI_PDV_Right_RE_0__container__\"
                                style=\"border: 0pt none; width: 300px; height: 250px;\"></div>
                        </div>
                    </div>

                </div>
            </div>
            <section class=\"super-form-container\">


                <!-- Mail Contact Form  -->
                <div class=\"form-area\" id=\"contactForm\" style=\"display: inline-block;\">
                    <form class=\"contact-form\" method=\"post\" role=\"form\"
                        action=\"/posts/create-user-message/5443116/post\" data-parsley-validate=\"\" novalidate=\"\">
                        <fieldset>
                            {% if publication.agence %}
                                <h2>Envoyer un message à {{ publication.agence.libelle|slice(0, 20)|raw}}</h2>
                            {% else %}
                                <h2>Envoyer un message à {{ publication.demarcheur.nom }} {{ publication.demarcheur.prenom }}</h2>
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
                                        placeholder=\"Votre numéro de téléphone\" pattern=\"/^[+\\d\\s]+\$/\"
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
                                        data-parsley-required-message=\"Message requis\"
                                        data-parsley-id=\"7776\" rows=\"4\"></textarea>
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
                <!--
    
                Telephone
    
            -->
                <div id=\"contactPhone\" class=\"form-area\" style=\"display: inline-block;\">
                    <div class=\"contactPhone\">
                        {% if publication.agence %}
                            <h2>Envoyer un message à {{ publication.agence.libelle|slice(0, 20)|raw }}</h2>
                        {% else %}
                            <h2>Envoyer un message à {{ publication.demarcheur.nom }} {{ publication.demarcheur.prenom }}</h2>
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
                                <script type=\"text/javascript\">
                                    pushAd({ id: \"CI_PDV_Middle_RE\", height: 100, width: 320, subcategory: \"0\", language: \"fr\" });
                                </script>
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
        </article>
    </div>
</div>", "/Applications/MAMP/htdocs/recherchemaison/themes/demo/pages/detail_publication.htm", "");
    }
}

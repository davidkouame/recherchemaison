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

/* /Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/publications/list.htm */
class __TwigTemplate_53a58986ca0c4b27fffb69e8679b3961c644b03ee260d27b84ecd15ec2f5dc1f extends \Twig\Template
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
        echo "
<h2>Liste des publications</h2>
<table class=\"table\">
    <thead>
      <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Libellé</th>
        <th scope=\"col\">Date de publication</th>
        <th scope=\"col\">Actions</th>
      </tr>
    </thead>
    <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 14
            echo "            <tr>
                <th scope=\"row\">1</th>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "libelle", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "published_at", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"javascript:void(0)\" class=\"btn btn-danger delete-publication\" data-id=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">suppression</a>
                    ";
            // line 20
            if ((null === twig_get_attribute($this->env, $this->source, $context["publication"], "published_at", [], "any", false, false, false, 20))) {
                // line 21
                echo "                        <a href=\"javascript:void(0)\" class=\"btn btn-warning publisher-publication\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "\">publiez</a>
                    ";
            } else {
                // line 23
                echo "                      <a href=\"javascript:void(0)\" class=\"btn btn-warning unpublisher-publication\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\">dépubliez</a>
                    ";
            }
            // line 25
            echo "                    <a href=\"";
            echo url(((($context["modelUser"] ?? null) . "/publications/") . twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 25)));
            echo "\" class=\"btn btn-primary\">détail</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tbody>
  </table>

<!-- Modal suppression d'une publication-->
<div class=\"modal fade\" id=\"deletePublication\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <form class=\"modal-dialog\" role=\"document\" role=\"form\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Suppression d'une publication</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          Voulez vous supprimer cette publication ?
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
          <a href=\"";
        // line 47
        echo url("delete-publication/");
        echo "\" class=\"btn btn-danger\" id=\"link-modal-to-delete-publication\">Supprimer</a>
        </div>
      </div>
    </form>
  </div>

  <!-- Modal dépublication publication-->
<div class=\"modal fade\" id=\"UnPublisherPublication\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <form class=\"modal-dialog\" role=\"document\" role=\"form\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Publication d'une publication</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          Voulez vous dépublier cette publication ?
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
          <a href=\"";
        // line 68
        echo url("unpublisher-publication/");
        echo "\" class=\"btn btn-danger\" id=\"link-modal-to-unpublisher-publication\">Dépubliez</a>
        </div>
      </div>
    </form>
  </div>

  <!-- Modal Publication-->
<div class=\"modal fade\" id=\"PublisherPublication\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <form class=\"modal-dialog\" role=\"document\" role=\"form\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Publication d'une publication</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        Voulez vous publier cette publication ?
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
        <a href=\"";
        // line 89
        echo url("publisher-publication/");
        echo "\" class=\"btn btn-danger\" id=\"link-modal-to-publisher-publication\">Publiez</a>
      </div>
    </div>
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/publications/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 89,  141 => 68,  117 => 47,  97 => 29,  86 => 25,  80 => 23,  74 => 21,  72 => 20,  68 => 19,  63 => 17,  59 => 16,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<h2>Liste des publications</h2>
<table class=\"table\">
    <thead>
      <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Libellé</th>
        <th scope=\"col\">Date de publication</th>
        <th scope=\"col\">Actions</th>
      </tr>
    </thead>
    <tbody>
        {% for publication in publications %}
            <tr>
                <th scope=\"row\">1</th>
                <td>{{ publication.libelle }}</td>
                <td>{{ publication.published_at }}</td>
                <td>
                    <a href=\"javascript:void(0)\" class=\"btn btn-danger delete-publication\" data-id=\"{{ publication.id }}\">suppression</a>
                    {% if publication.published_at is null %}
                        <a href=\"javascript:void(0)\" class=\"btn btn-warning publisher-publication\" data-id=\"{{ publication.id }}\">publiez</a>
                    {% else %}
                      <a href=\"javascript:void(0)\" class=\"btn btn-warning unpublisher-publication\" data-id=\"{{ publication.id }}\">dépubliez</a>
                    {% endif %}
                    <a href=\"{{ url(modelUser~'/publications/'~publication.id) }}\" class=\"btn btn-primary\">détail</a>
                </td>
            </tr>
        {% endfor %}
    </tbody>
  </table>

<!-- Modal suppression d'une publication-->
<div class=\"modal fade\" id=\"deletePublication\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <form class=\"modal-dialog\" role=\"document\" role=\"form\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Suppression d'une publication</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          Voulez vous supprimer cette publication ?
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
          <a href=\"{{ url('delete-publication/') }}\" class=\"btn btn-danger\" id=\"link-modal-to-delete-publication\">Supprimer</a>
        </div>
      </div>
    </form>
  </div>

  <!-- Modal dépublication publication-->
<div class=\"modal fade\" id=\"UnPublisherPublication\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <form class=\"modal-dialog\" role=\"document\" role=\"form\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLabel\">Publication d'une publication</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          Voulez vous dépublier cette publication ?
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
          <a href=\"{{ url('unpublisher-publication/') }}\" class=\"btn btn-danger\" id=\"link-modal-to-unpublisher-publication\">Dépubliez</a>
        </div>
      </div>
    </form>
  </div>

  <!-- Modal Publication-->
<div class=\"modal fade\" id=\"PublisherPublication\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <form class=\"modal-dialog\" role=\"document\" role=\"form\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Publication d'une publication</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        Voulez vous publier cette publication ?
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
        <a href=\"{{ url('publisher-publication/') }}\" class=\"btn btn-danger\" id=\"link-modal-to-publisher-publication\">Publiez</a>
      </div>
    </div>
  </form>
</div>", "/Applications/MAMP/htdocs/recherchemaison/plugins/bootnetcrasher/house/components/publications/list.htm", "");
    }
}

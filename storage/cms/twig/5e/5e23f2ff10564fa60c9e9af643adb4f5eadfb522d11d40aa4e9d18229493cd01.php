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
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 1
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 2
                echo "<div class=\"alert alert-success\" style=\"text-align: center;\">
    ";
                // line 3
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "
</div>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 6
        echo "<h2>Liste des publications</h2>
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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["publications"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["publication"]) {
            // line 18
            echo "            <tr>
                <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "</th>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "libelle", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "published_at", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"javascript:void(0)\" class=\"btn btn-danger delete-publication\" data-id=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">suppression</a>
                    ";
            // line 24
            if ((null === twig_get_attribute($this->env, $this->source, $context["publication"], "published_at", [], "any", false, false, false, 24))) {
                // line 25
                echo "                        <a href=\"javascript:void(0)\" class=\"btn btn-warning publisher-publication\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\">publiez</a>
                    ";
            } else {
                // line 27
                echo "                      <a href=\"javascript:void(0)\" class=\"btn btn-warning unpublisher-publication\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "\">dépubliez</a>
                    ";
            }
            // line 29
            echo "                    <a href=\"";
            echo url(((($context["modelUser"] ?? null) . "/publications/") . twig_get_attribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 29)));
            echo "\" class=\"btn btn-primary\">détail</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
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
        // line 51
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
        // line 72
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
        // line 93
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
        return array (  180 => 93,  156 => 72,  132 => 51,  112 => 33,  101 => 29,  95 => 27,  89 => 25,  87 => 24,  83 => 23,  78 => 21,  74 => 20,  70 => 19,  67 => 18,  63 => 17,  50 => 6,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% flash %}
<div class=\"alert alert-success\" style=\"text-align: center;\">
    {{ message }}
</div>
{% endflash %}
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
        {% for key, publication in publications %}
            <tr>
                <th scope=\"row\">{{ key+1 }}</th>
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

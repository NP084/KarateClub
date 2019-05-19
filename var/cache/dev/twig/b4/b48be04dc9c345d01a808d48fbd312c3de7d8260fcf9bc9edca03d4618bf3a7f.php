<?php

/* vika_event/index.html.twig */
class __TwigTemplate_23ef1aed507d10d443959a96e9568d18761d317954604a226debe29d0a4ac7d5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vika_event/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'Body' => [$this, 'block_Body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika_event/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika_event/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "VikaEvent index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 6
        echo "
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <h1>Administration des événements</h1>
                <div class=\"row\">
                    <div class=\"col-5\">
                        <div class=\"form-group\">
                            <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_index", ["orderby" => "search"]);
        echo "\"
                                  method=\"GET\">
                                <div class=\"input-group input-group-search\">
                                    <button type=\"submit\">
                                        <span class=\"oi oi-magnifying-glass\"></span>
                                    </button>
                                    <input id=\"searchName\" name=\"searchName\"
                                           type=\"text\" class=\"form-control\" aria-label=\"Search\"
                                           placeholder=\"Recherche par id, titre, titulaire ou catégorie\">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Public</th>
                                            <th>Titre</th>
                                            <th>Titulaire</th>
                                            <th>Catégorie</th>
                                            <th>Capacité</th>
                                            <th>Date de début</th>
                                            <th>Date de fin</th>
                                            <th class=\"align-middle text-right\">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vikaEvents"]) || array_key_exists("vikaEvents", $context) ? $context["vikaEvents"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvents" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vika_event"]) {
            // line 49
            echo "                                            <tr>
                                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vika_event"], "id", []), "html", null, true);
            echo "</td>
                                                ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, $context["vika_event"], "published", [])) {
                // line 52
                echo "                                                    <td>Oui</td>
                                                ";
            } else {
                // line 54
                echo "                                                    <td>Non</td>
                                                ";
            }
            // line 56
            echo "                                                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vika_event"], "title", []), "html", null, true);
            echo "</td>
                                                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vika_event"], "owner", []), "html", null, true);
            echo "</td>
                                                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["vika_event"], "category", []), "title", []), "html", null, true);
            echo "</td>
                                                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vika_event"], "capacity", []), "html", null, true);
            echo "</td>
                                                ";
            // line 61
            echo "                                                ";
            // line 62
            echo "                                                <td>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["vika_event"], "startDate", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vika_event"], "startDate", []), "Y-m-d H:i:s")) : ("")), "html", null, true);
            echo "</td>
                                                <td>";
            // line 63
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["vika_event"], "endDate", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vika_event"], "endDate", []), "Y-m-d H:i:s")) : ("")), "html", null, true);
            echo "</td>
                                                <td class=\"align-middle text-right\">
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_show", ["id" => twig_get_attribute($this->env, $this->source,             // line 67
$context["vika_event"], "id", [])]), "html", null, true);
            echo "\"><i
                                                                class=\"oi oi-info\"></i></a>
                                                    <span class=\"sr-only\">Voir</span>
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_edit", ["id" => twig_get_attribute($this->env, $this->source,             // line 72
$context["vika_event"], "id", [])]), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-pencil\">
                                                        </i>
                                                        <span class=\"sr-only\">Editer</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            echo "                                            <tr>
                                                <td colspan=\"10\">no records found</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vika_event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type=\"button\" class=\"btn btn-outline-primary\">
                    <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_new");
        echo "\">Nouvel événement</a>
                </button>
                <button type=\"button\" class=\"btn btn-link\">
                        <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_conditions");
        echo "\">Modifier les Conditions Générales</a>
                    </button>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vika_event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 95,  212 => 92,  202 => 84,  193 => 80,  180 => 72,  179 => 71,  172 => 67,  171 => 66,  165 => 63,  160 => 62,  158 => 61,  154 => 59,  150 => 58,  146 => 57,  141 => 56,  137 => 54,  133 => 52,  131 => 51,  127 => 50,  124 => 49,  119 => 48,  82 => 14,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}VikaEvent index{% endblock %}

{% block Body %}

    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <h1>Administration des événements</h1>
                <div class=\"row\">
                    <div class=\"col-5\">
                        <div class=\"form-group\">
                            <form action=\"{{ path('vika_event_index', {orderby:'search'}) }}\"
                                  method=\"GET\">
                                <div class=\"input-group input-group-search\">
                                    <button type=\"submit\">
                                        <span class=\"oi oi-magnifying-glass\"></span>
                                    </button>
                                    <input id=\"searchName\" name=\"searchName\"
                                           type=\"text\" class=\"form-control\" aria-label=\"Search\"
                                           placeholder=\"Recherche par id, titre, titulaire ou catégorie\">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Public</th>
                                            <th>Titre</th>
                                            <th>Titulaire</th>
                                            <th>Catégorie</th>
                                            <th>Capacité</th>
                                            <th>Date de début</th>
                                            <th>Date de fin</th>
                                            <th class=\"align-middle text-right\">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for vika_event in vikaEvents %}
                                            <tr>
                                                <td>{{ vika_event.id }}</td>
                                                {% if (vika_event.published) %}
                                                    <td>Oui</td>
                                                {% else %}
                                                    <td>Non</td>
                                                {% endif %}
                                                <td>{{ vika_event.title }}</td>
                                                <td>{{ vika_event.owner }}</td>
                                                <td>{{ vika_event.category.title }}</td>
                                                <td>{{ vika_event.capacity }}</td>
                                                {#                <td>{{ vika_event.createdEv ? vika_event.createdEv|date('Y-m-d H:i:s') : '' }}</td>#}
                                                {#           <td>{{ vika_event.updatedImage ? vika_event.updatedImage|date('Y-m-d H:i:s') : '' }}</td>#}
                                                <td>{{ vika_event.startDate ? vika_event.startDate|date('Y-m-d H:i:s') : '' }}</td>
                                                <td>{{ vika_event.endDate ? vika_event.endDate|date('Y-m-d H:i:s') : '' }}</td>
                                                <td class=\"align-middle text-right\">
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       href=\"{{ path('vika_event_show',
                                                           {'id': vika_event.id}) }}\"><i
                                                                class=\"oi oi-info\"></i></a>
                                                    <span class=\"sr-only\">Voir</span>
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       href=\"{{ path('vika_event_edit',
                                                           {'id': vika_event.id}) }}\">
                                                        <i class=\"fa fa-pencil\">
                                                        </i>
                                                        <span class=\"sr-only\">Editer</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        {% else %}
                                            <tr>
                                                <td colspan=\"10\">no records found</td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type=\"button\" class=\"btn btn-outline-primary\">
                    <a href=\"{{ path('vika_event_new') }}\">Nouvel événement</a>
                </button>
                <button type=\"button\" class=\"btn btn-link\">
                        <a href=\"{{ path('general_conditions') }}\">Modifier les Conditions Générales</a>
                    </button>
            </div>
        </div>
    </div>

{% endblock %}
", "vika_event/index.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\vika_event\\index.html.twig");
    }
}

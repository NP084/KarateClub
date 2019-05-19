<?php

/* price_grid/index.html.twig */
class __TwigTemplate_ca2a752c6a0fec291a25d0fceb277293fb65c555739ee42d215af521a066769f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "price_grid/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "price_grid/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "price_grid/index.html.twig"));

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

        echo "PriceGrid index";
        
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
        echo "    <h1>PriceGrid index</h1>
    <div class=\"col-12\">
        <div class=\"form-group\">
            <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("priceGrid_index", ["orderby" => "search"]);
        echo "\"
                  method=\"GET\">
                <div class=\"input-group input-group-search\">
                    <div class=\"input-group-prepend\">
                        <button type=\"submit\">
                            <span class=\"oi oi-magnifying-glass\"></span></span>
                        </button>
                    </div>
                    <div class=\"input-group-prepend\">
                        <input id=\"searchName\" name=\"searchName\"
                               type=\"text\" class=\"form-control\" aria-label=\"Search\"
                               placeholder=\"Recherche par catégorie\">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Evénement lié</th>
            <th>Label</th>
            <th>Price</th>
            <th>Public</th>
            <th>Catégorie</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["price_grids"]) || array_key_exists("price_grids", $context) ? $context["price_grids"] : (function () { throw new Twig_Error_Runtime('Variable "price_grids" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["price_grid"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price_grid"], "id", []), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price_grid"], "vikaEvent", []), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price_grid"], "vikaEvent", []), "title", []), "html", null, true);
            echo "</a>
                </td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price_grid"], "label", []), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price_grid"], "price", []), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price_grid"], "public", []), "html", null, true);
            echo "</td>
                ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["price_grid"], "vikaEvent", []) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price_grid"], "vikaEvent", []), "category", []))) {
                // line 50
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price_grid"], "vikaEvent", []), "category", []), "title", []), "html", null, true);
                echo "</td>
                ";
            } else {
                // line 52
                echo "                    <td></td>
                ";
            }
            // line 54
            echo "                <td>
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("price_grid_show", ["id" => twig_get_attribute($this->env, $this->source, $context["price_grid"], "id", [])]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("price_grid_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["price_grid"], "id", []), "route" => (isset($context["indexMode"]) || array_key_exists("indexMode", $context) ? $context["indexMode"] : (function () { throw new Twig_Error_Runtime('Variable "indexMode" does not exist.', 56, $this->source); })())]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price_grid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "price_grid/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 64,  171 => 60,  162 => 56,  158 => 55,  155 => 54,  151 => 52,  145 => 50,  143 => 49,  139 => 48,  135 => 47,  131 => 46,  124 => 44,  119 => 42,  116 => 41,  111 => 40,  77 => 9,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}PriceGrid index{% endblock %}

{% block Body %}
    <h1>PriceGrid index</h1>
    <div class=\"col-12\">
        <div class=\"form-group\">
            <form action=\"{{ path('priceGrid_index', {orderby:'search'}) }}\"
                  method=\"GET\">
                <div class=\"input-group input-group-search\">
                    <div class=\"input-group-prepend\">
                        <button type=\"submit\">
                            <span class=\"oi oi-magnifying-glass\"></span></span>
                        </button>
                    </div>
                    <div class=\"input-group-prepend\">
                        <input id=\"searchName\" name=\"searchName\"
                               type=\"text\" class=\"form-control\" aria-label=\"Search\"
                               placeholder=\"Recherche par catégorie\">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Evénement lié</th>
            <th>Label</th>
            <th>Price</th>
            <th>Public</th>
            <th>Catégorie</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {% for price_grid in price_grids %}
            <tr>
                <td>{{ price_grid.id }}</td>
                <td>
                    <a href=\"{{ path('vika_event_edit',{'id':price_grid.vikaEvent.id}) }}\">{{price_grid.vikaEvent.title }}</a>
                </td>
                <td>{{ price_grid.label }}</td>
                <td>{{ price_grid.price }}</td>
                <td>{{ price_grid.public }}</td>
                {% if (price_grid.vikaEvent and price_grid.vikaEvent.category) %}
                    <td>{{ price_grid.vikaEvent.category.title }}</td>
                {% else %}
                    <td></td>
                {% endif %}
                <td>
                    <a href=\"{{ path('price_grid_show', {'id': price_grid.id}) }}\">show</a>
                    <a href=\"{{ path('price_grid_edit', {'id': price_grid.id, 'route':indexMode}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{#    <a href=\"{{ path('price_grid_new') }}\">Create new</a>#}
{% endblock %}
", "price_grid/index.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\price_grid\\index.html.twig");
    }
}

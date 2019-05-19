<?php

/* member/showHistory.html.twig */
class __TwigTemplate_b3274fbaddd68fbbfda6fd9b66480055221c336b7ad5191c9605454633aa7046 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/showHistory.html.twig", 1);
        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/showHistory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/showHistory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->source); })()), "userConnected", []), "id", [])))) {
            // line 6
            echo "        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">
                    ";
            // line 10
            echo "                    ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "user", []), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "request", []), "get", [0 => "id"], "method")))) {
                // line 11
                echo "                        <h2>Parcours personnel </h2>
                    ";
            } else {
                // line 13
                echo "                        <h2>Parcours de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->source); })()), "firstName", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->source); })()), "name", []), "html", null, true);
                echo "</h2>
                    ";
            }
            // line 15
            echo "
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Categorie</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 30, $this->source); })()), "Histories", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 31
                echo "                                                <tr>
                                                    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["history"], "description", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["history"], "refDate", []), "d/m/Y"), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["history"], "category", []), "title", []), "html", null, true);
                echo "</td>
                                                    ";
                // line 35
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 36
                    echo "                                                        <td class=\"align-middle text-right\">
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_history_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 38, $this->source); })()), "id", []), "idHist" => twig_get_attribute($this->env, $this->source, $context["history"], "id", [])]), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-pencil\">
                                                                </i>
                                                                <span class=\"sr-only\">Modifier</span>
                                                            </a>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               onclick=\"return confirm('Veuillez confirmer la suppression de cette ligne d\\'historique svp?');\"
                                                               href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_history_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["history"], "id", []), "idUser" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 45, $this->source); })()), "id", [])]), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-trash-o\">
                                                                </i>
                                                                <span class=\"sr-only\">Supprimer</span>
                                                            </a>
                                                        </td>
                                                    ";
                }
                // line 52
                echo "                                                </tr>
                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 54
                echo "                                                <tr>
                                                    <td colspan=\"10\">Aucun historique</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            // line 65
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 66
                echo "                        <a class=\"btn btn-primary\"
                           href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_history_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 67, $this->source); })()), "id", [])]), "html", null, true);
                echo "\">
                            <b>Nouvel élément dans le parcours</b>
                        </a>
                        ";
                // line 71
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 71, $this->source); })()), "user", []), "id", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 71, $this->source); })()), "userConnected", []), "id", []))) {
                    // line 72
                    echo "                            <a class=\"btn btn-warning\"
                               href=\"";
                    // line 73
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderBy" => "ASC"]);
                    echo "\">
                                <b>Retour</b>
                            </a>
                        ";
                }
                // line 77
                echo "                        ";
                // line 79
                echo "                    ";
            } elseif (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 79, $this->source); })()), "ownerUser", []) == false) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 79, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 79, $this->source); })()), "userConnected", []), "id", [])))) {
                // line 80
                echo "                        <a class=\"btn btn-warning\"
                           href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_family", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 81, $this->source); })()), "userConnected", []), "id", [])]), "html", null, true);
                echo "\">
                            <b>Retour</b>
                        </a>
                    ";
            }
            // line 85
            echo "                </div>
            </div>
        </div>


    ";
        } else {
            // line 91
            echo "        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    ";
        }
        // line 93
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/showHistory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 93,  212 => 91,  204 => 85,  197 => 81,  194 => 80,  191 => 79,  189 => 77,  182 => 73,  179 => 72,  176 => 71,  170 => 67,  167 => 66,  165 => 65,  156 => 58,  147 => 54,  141 => 52,  131 => 45,  121 => 38,  117 => 36,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  100 => 31,  95 => 30,  78 => 15,  70 => 13,  66 => 11,  63 => 10,  58 => 6,  55 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block Body %}
    {# Admin ou si la personne connectée est le parent du profil consulté #}
    {% if (is_granted('ROLE_ADMIN') or app.user.id == user.userConnected.id) %}
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">
                    {#Si admin ou parent qui consulte son propre profil#}
                    {% if (is_granted('ROLE_ADMIN') or app.user.user.id == app.request.get(\"id\")) %}
                        <h2>Parcours personnel </h2>
                    {% else %}
                        <h2>Parcours de {{ user.firstName }} {{ user.name }}</h2>
                    {% endif %}

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Categorie</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for history in user.Histories %}
                                                <tr>
                                                    <td>{{ history.description }}</td>
                                                    <td>{{ history.refDate |date('d/m/Y') }}</td>
                                                    <td>{{ history.category.title }}</td>
                                                    {% if (is_granted('ROLE_ADMIN')) %}
                                                        <td class=\"align-middle text-right\">
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('admin_history_edit',{'id': user.id, 'idHist':history.id}) }}\">
                                                                <i class=\"fa fa-pencil\">
                                                                </i>
                                                                <span class=\"sr-only\">Modifier</span>
                                                            </a>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               onclick=\"return confirm('Veuillez confirmer la suppression de cette ligne d\\'historique svp?');\"
                                                               href=\"{{ path('remove_history_admin',{'id':history.id, 'idUser':user.id}) }}\">
                                                                <i class=\"fa fa-trash-o\">
                                                                </i>
                                                                <span class=\"sr-only\">Supprimer</span>
                                                            </a>
                                                        </td>
                                                    {% endif %}
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"10\">Aucun historique</td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% if (is_granted('ROLE_ADMIN')) %}
                        <a class=\"btn btn-primary\"
                           href=\"{{ path('admin_history_new',{'id': user.id }) }}\">
                            <b>Nouvel élément dans le parcours</b>
                        </a>
                        {#admin consulte un autre profil que le sien => retour vers la liste de users#}
                        {% if (app.user.id != user.userConnected.id) %}
                            <a class=\"btn btn-warning\"
                               href=\"{{ path('admin_users', {orderBy: 'ASC'}) }}\">
                                <b>Retour</b>
                            </a>
                        {% endif %}
                        {# le profil consulté est un enfant et la personne connectée est son parent:
                        le retour se fait vers \"Ma famille\", sinon pas de btn retour#}
                    {% elseif(user.ownerUser == false and app.user.id == user.userConnected.id) %}
                        <a class=\"btn btn-warning\"
                           href=\"{{ path('view_family',{'id':user.userConnected.id}) }}\">
                            <b>Retour</b>
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>


    {% else %}
        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    {% endif %}

{% endblock %}


", "member/showHistory.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\member\\showHistory.html.twig");
    }
}

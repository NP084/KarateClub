<?php

/* member/showRegistrations.html.twig */
class __TwigTemplate_f81a8cd78e8f74b959a07f709ea189f59b945e1bd46723430f2c4efdbdaca96b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/showRegistrations.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/showRegistrations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/showRegistrations.html.twig"));

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
            echo "
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">
                    ";
            // line 11
            echo "                    ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "user", []), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "request", []), "get", [0 => "id"], "method")))) {
                // line 12
                echo "                        <h2>Mes inscriptions </h2>
                    ";
            } else {
                // line 14
                echo "                        <h2>Inscription de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->source); })()), "firstName", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->source); })()), "name", []), "html", null, true);
                echo "</h2>
                    ";
            }
            // line 16
            echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Date d'inscription</th>
                                                <th>Activités</th>
                                                <th>Date de début</th>
                                                <th>Date de fin</th>
                                                <th>Remarque</th>
                                                ";
            // line 29
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 30
                echo "
                                                <th class=\"align-middle text-right\">
                                                    Actions
                                                </th>
                                                ";
            }
            // line 35
            echo "                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 38, $this->source); })()), "registration", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["registration"]) {
                // line 39
                echo "                                                <tr>
                                                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registration"], "registrationDate", []), "d-m-Y"), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registration"], "vikaEvent", []), "title", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registration"], "vikaEvent", []), "startDate", []), "d-m-Y"), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registration"], "vikaEvent", []), "endDate", []), "d-m-Y"), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registration"], "remark", []), "html", null, true);
                echo "</td>
                                                    <td class=\"align-middle text-right\">
                                                        ";
                // line 46
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 47
                    echo "                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier_inscription", ["id" => twig_get_attribute($this->env, $this->source, $context["registration"], "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 48, $this->source); })())]), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-pencil\">
                                                            </i>
                                                            <span class=\"sr-only\">Modifier</span>
                                                        </a>

                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           onclick=\"return confirm('Veuillez confirmer la suppression de cette inscription svp?');\"

                                                           href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_registration_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["registration"], "id", []), "idUser" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 57, $this->source); })()), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 57, $this->source); })())]), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-trash-o\">
                                                            </i>
                                                            <span class=\"sr-only\">Supprimer</span>
                                                        </a>
                                                    </td>
                                                    ";
                }
                // line 64
                echo "                                                </tr>
                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 66
                echo "                                                <tr>
                                                    <td colspan=\"10\">Aucune activité</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            // line 77
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 77, $this->source); })()), "user", []), "id", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 77, $this->source); })()), "userConnected", []), "id", [])))) {
                // line 78
                echo "                        ";
                // line 79
                echo "                        <a class=\"btn btn-warning\"
                           href=\"";
                // line 80
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderBy" => "ASC"]);
                echo "\">
                            <b>Retour</b>
                        </a>
                        ";
                // line 85
                echo "                    ";
            } elseif (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 85, $this->source); })()), "ownerUser", []) == false) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 85, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 85, $this->source); })()), "userConnected", []), "id", [])))) {
                // line 86
                echo "                        <a class=\"btn btn-warning\"
                           href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_family", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 87, $this->source); })()), "userConnected", []), "id", [])]), "html", null, true);
                echo "\">
                            <b>Retour</b>
                        </a>
                    ";
            }
            // line 91
            echo "                </div>
            </div>
        </div>

    ";
        } else {
            // line 96
            echo "        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    ";
        }
        // line 98
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/showRegistrations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 98,  221 => 96,  214 => 91,  207 => 87,  204 => 86,  201 => 85,  195 => 80,  192 => 79,  190 => 78,  188 => 77,  179 => 70,  170 => 66,  164 => 64,  154 => 57,  142 => 48,  139 => 47,  137 => 46,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  116 => 40,  113 => 39,  108 => 38,  103 => 35,  96 => 30,  94 => 29,  79 => 16,  71 => 14,  67 => 12,  64 => 11,  58 => 6,  55 => 5,  53 => 4,  44 => 3,  15 => 1,);
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
                        <h2>Mes inscriptions </h2>
                    {% else %}
                        <h2>Inscription de {{ user.firstName }} {{ user.name }}</h2>
                    {% endif %}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Date d'inscription</th>
                                                <th>Activités</th>
                                                <th>Date de début</th>
                                                <th>Date de fin</th>
                                                <th>Remarque</th>
                                                {% if (is_granted('ROLE_ADMIN')) %}

                                                <th class=\"align-middle text-right\">
                                                    Actions
                                                </th>
                                                {% endif %}
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for registration in user.registration %}
                                                <tr>
                                                    <td>{{ registration.registrationDate | date ('d-m-Y') }}</td>
                                                    <td>{{ registration.vikaEvent.title }}</td>
                                                    <td>{{ registration.vikaEvent.startDate |date('d-m-Y') }}</td>
                                                    <td>{{ registration.vikaEvent.endDate |date('d-m-Y') }}</td>
                                                    <td>{{ registration.remark }}</td>
                                                    <td class=\"align-middle text-right\">
                                                        {% if (is_granted('ROLE_ADMIN')) %}
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"{{ path('dossier_inscription',{'id': registration.id, 'idevent':idevent}) }}\">
                                                            <i class=\"fa fa-pencil\">
                                                            </i>
                                                            <span class=\"sr-only\">Modifier</span>
                                                        </a>

                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           onclick=\"return confirm('Veuillez confirmer la suppression de cette inscription svp?');\"

                                                           href=\"{{ path('remove_registration_admin',{'id':registration.id, 'idUser':user.id, 'idevent':idevent}) }}\">
                                                            <i class=\"fa fa-trash-o\">
                                                            </i>
                                                            <span class=\"sr-only\">Supprimer</span>
                                                        </a>
                                                    </td>
                                                    {% endif %}
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"10\">Aucune activité</td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% if (is_granted('ROLE_ADMIN') and (app.user.id != user.userConnected.id)) %}
                        {#admin consulte un autre profil que le sien => retour vers la liste de users#}
                        <a class=\"btn btn-warning\"
                           href=\"{{ path('admin_users', {orderBy: 'ASC'}) }}\">
                            <b>Retour</b>
                        </a>
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

{% endblock %}", "member/showRegistrations.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\member\\showRegistrations.html.twig");
    }
}

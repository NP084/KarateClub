<?php

/* member/showDocument.html.twig */
class __TwigTemplate_c5167f3c17cb78993afc707918b9d50ae0cd1d74991b025f38ef86665ed1b5e2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/showDocument.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/showDocument.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/showDocument.html.twig"));

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
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->source); })()), "userConnected", []), "id", []))) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "request", []), "get", [0 => "id"], "method")))) {
            // line 6
            echo "        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    ";
            // line 10
            echo "                    ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "user", []), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "request", []), "get", [0 => "id"], "method")))) {
                // line 11
                echo "                        <h2>Documents personnels </h2>
                        <div>
                            <a class=\"btn btn-primary\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("envoyer_fiche", ["idUser" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->source); })()), "id", [])]), "html", null, true);
                echo "\"
                               class=\"btn-btn-primary\">
                                <b>Fiche de renseignements</b>
                            </a>
                            </br>
                            </br>
                        </div>
                    ";
            } else {
                // line 21
                echo "                        <h2>Document du membre ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->source); })()), "firstName", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->source); })()), "name", []), "html", null, true);
                echo "</h2>
                    ";
            }
            // line 23
            echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Description</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 36, $this->source); })()), "attachedFiles", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["attachedFile"]) {
                // line 37
                echo "                                                <tr>
                                                    <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachedFile"], "title", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachedFile"], "description", []), "html", null, true);
                echo "</td>
                                                    ";
                // line 40
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 41
                    echo "
                                                        <td class=\"align-middle text-right\">

                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_admin_document", ["idUser" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 45, $this->source); })()), "id", []), "id" => twig_get_attribute($this->env, $this->source, $context["attachedFile"], "id", [])]), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-pencil\">
                                                                </i>
                                                                <span class=\"sr-only\">Modifier</span>
                                                            </a>

                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_document_admin", ["idUser" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 52, $this->source); })()), "id", []), "id" => twig_get_attribute($this->env, $this->source, $context["attachedFile"], "id", [])]), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-trash-o\">
                                                                </i>
                                                                <span class=\"sr-only\">Supprimer</span>
                                                            </a>
                                                            <!--
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_document_admin", ["idUser" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 59, $this->source); })()), "id", []), "id" => twig_get_attribute($this->env, $this->source, $context["attachedFile"], "id", [])]), "html", null, true);
                    echo "\">
                                                                <i class=\"far fa-eye\">
                                                                </i>
                                                                <span class=\"sr-only\">Afficher</span>
                                                            </a>
                                                            -->
                                                        </td>

                                                    ";
                }
                // line 68
                echo "                                                </tr>
                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 70
                echo "                                                <tr>
                                                    <td colspan=\"10\">Aucun document</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachedFile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            // line 81
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 82
                echo "                        <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("load_admin_document", ["idUser" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 82, $this->source); })()), "id", [])]), "html", null, true);
                echo "\"
                           class=\"btn-btn-primary\">
                            <b>Nouveau document</b>
                        </a>
                        ";
                // line 87
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 87, $this->source); })()), "user", []), "id", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 87, $this->source); })()), "userConnected", []), "id", []))) {
                    // line 88
                    echo "                            <a class=\"btn btn-warning\"
                               href=\"";
                    // line 89
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderBy" => "ASC"]);
                    echo "\">
                                <b>Retour</b>
                            </a>
                        ";
                }
                // line 93
                echo "                    ";
            } else {
                // line 94
                echo "                        <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("load_member_document", ["idUser" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 94, $this->source); })()), "id", [])]), "html", null, true);
                echo "\"
                           class=\"btn-btn-primary\">
                            <b>Nouveau document</b>
                        </a>
                        <a class=\"btn btn-warning\"
                           href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_family", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 99, $this->source); })()), "userConnected", []), "id", [])]), "html", null, true);
                echo "\">
                            <b>Retour</b>
                        </a>
                    ";
            }
            // line 103
            echo "                </div>
            </div>
        </div>
    ";
        } else {
            // line 107
            echo "        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/showDocument.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 107,  226 => 103,  219 => 99,  210 => 94,  207 => 93,  200 => 89,  197 => 88,  194 => 87,  186 => 82,  184 => 81,  175 => 74,  166 => 70,  160 => 68,  148 => 59,  138 => 52,  128 => 45,  122 => 41,  120 => 40,  116 => 39,  112 => 38,  109 => 37,  104 => 36,  89 => 23,  81 => 21,  70 => 13,  66 => 11,  63 => 10,  58 => 6,  55 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block Body %}
    {#    {% if (is_granted('ROLE_ADMIN') or app.user.id == app.request.get(\"id\")) %}#}
    {% if (is_granted('ROLE_ADMIN') or app.user.id == user.userConnected.id or app.user.id == app.request.get(\"id\")) %}
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    {#Si admin ou parent qui consulte son propre profil#}
                    {% if (is_granted('ROLE_ADMIN') or app.user.user.id == app.request.get(\"id\")) %}
                        <h2>Documents personnels </h2>
                        <div>
                            <a class=\"btn btn-primary\" href=\"{{ path('envoyer_fiche', {'idUser':user.id}) }}\"
                               class=\"btn-btn-primary\">
                                <b>Fiche de renseignements</b>
                            </a>
                            </br>
                            </br>
                        </div>
                    {% else %}
                        <h2>Document du membre {{ user.firstName }} {{ user.name }}</h2>
                    {% endif %}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Description</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for attachedFile in user.attachedFiles %}
                                                <tr>
                                                    <td>{{ attachedFile.title }}</td>
                                                    <td>{{ attachedFile.description }}</td>
                                                    {% if (is_granted('ROLE_ADMIN')) %}

                                                        <td class=\"align-middle text-right\">

                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('edit_admin_document',{'idUser': user.id, 'id':attachedFile.id}) }}\">
                                                                <i class=\"fa fa-pencil\">
                                                                </i>
                                                                <span class=\"sr-only\">Modifier</span>
                                                            </a>

                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('remove_document_admin',{'idUser': user.id, 'id':attachedFile.id}) }}\">
                                                                <i class=\"fa fa-trash-o\">
                                                                </i>
                                                                <span class=\"sr-only\">Supprimer</span>
                                                            </a>
                                                            <!--
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('afficher_document_admin',{'idUser': user.id, 'id':attachedFile.id}) }}\">
                                                                <i class=\"far fa-eye\">
                                                                </i>
                                                                <span class=\"sr-only\">Afficher</span>
                                                            </a>
                                                            -->
                                                        </td>

                                                    {% endif %}
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"10\">Aucun document</td>
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
                        <a class=\"btn btn-primary\" href=\"{{ path('load_admin_document', {'idUser':user.id}) }}\"
                           class=\"btn-btn-primary\">
                            <b>Nouveau document</b>
                        </a>
                        {#admin consulte un autre profil que le sien => retour vers la liste de users#}
                        {% if (app.user.id != user.userConnected.id) %}
                            <a class=\"btn btn-warning\"
                               href=\"{{ path('admin_users', {orderBy: 'ASC'}) }}\">
                                <b>Retour</b>
                            </a>
                        {% endif %}
                    {% else %}
                        <a class=\"btn btn-primary\" href=\"{{  path('load_member_document', {'idUser':user.id})}}\"
                           class=\"btn-btn-primary\">
                            <b>Nouveau document</b>
                        </a>
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
", "member/showDocument.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\member\\showDocument.html.twig");
    }
}

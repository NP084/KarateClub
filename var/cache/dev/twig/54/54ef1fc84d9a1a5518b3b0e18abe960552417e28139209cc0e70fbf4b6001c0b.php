<?php

/* admin_vika/showContent.html.twig */
class __TwigTemplate_2e3f2f291d3a75bd1c46cfc4936776540b06b0fe7201529fa4298a341cd757d4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin_vika/showContent.html.twig", 1);
        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_vika/showContent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_vika/showContent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src=\"assets/vendor/datatables/jquery.dataTables.min.js\"></script>
    ";
        // line 13
        echo "    <script>
        \$(document).ready(function () {
            \$('#usertabel').DataTable();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Utilisateurs de VIKA";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 23
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <div class=\"row\">
                        ";
            // line 29
            if (((isset($context["resetIsActiveMode"]) || array_key_exists("resetIsActiveMode", $context) ? $context["resetIsActiveMode"] : (function () { throw new Twig_Error_Runtime('Variable "resetIsActiveMode" does not exist.', 29, $this->source); })()) == true)) {
                // line 30
                echo "                            <div class=\"col-2\">
                                <div class=\"form-group\">
                                    <a id=\"isActive\" name=\"isActive\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                       href=\"";
                // line 33
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "ASC"]);
                echo "\"><label>Voir tous les
                                            membres</label>
                                    </a>
                                </div>
                            </div>
                            <div class=\"col-3\"></div>
                        ";
            } else {
                // line 40
                echo "                            <div class=\"col-5\">
                                <div class=\"form-group\">
                                    <form action=\"";
                // line 42
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "search"]);
                echo "\"
                                          method=\"GET\">
                                        <div class=\"input-group input-group-search\">
                                                <button type=\"submit\">
                                                    <span class=\"oi oi-magnifying-glass\"></span>
                                                </button>
                                                <input id=\"searchName\" name=\"searchName\"
                                                       type=\"text\" class=\"form-control\" aria-label=\"Search\"
                                                       placeholder=\"Recherche par id, nom, prénom ou email\">
                                            </div>
                                    </form>
                                </div>
                            </div>
                        ";
            }
            // line 56
            echo "                        ";
            if (((isset($context["isActiveMode"]) || array_key_exists("isActiveMode", $context) ? $context["isActiveMode"] : (function () { throw new Twig_Error_Runtime('Variable "isActiveMode" does not exist.', 56, $this->source); })()) == true)) {
                // line 57
                echo "                            <div class=\"col-2\">
                                <a id=\"isActive\" name=\"isActive\" class=\"btn btn-primary\" methods=\"GET\"
                                   href=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "ASC"]);
                echo "\"><label>Actifs</label>
                                </a>
                            </div>
                            <div class=\"col-md col-lg\">
                                <a id=\"isTrial\" name=\"isActive\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                   href=\"";
                // line 64
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "isTrial"]);
                echo "\"><label>Cours d'essai</label>
                                </a>
                            </div>

                        ";
            } elseif ((            // line 68
(isset($context["isTrialMode"]) || array_key_exists("isTrialMode", $context) ? $context["isTrialMode"] : (function () { throw new Twig_Error_Runtime('Variable "isTrialMode" does not exist.', 68, $this->source); })()) == true)) {
                // line 69
                echo "                            <div class=\"col-2\">
                                <a id=\"isActive\" name=\"isActive\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                   href=\"";
                // line 71
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "isActive"]);
                echo "\"><label>Actifs</label>
                                </a>
                            </div>
                            <div class=\"col-md col-lg\">
                                <a id=\"isTrial\" name=\"isTrial\" class=\"btn btn-primary\" methods=\"GET\"
                                   href=\"";
                // line 76
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "ASC"]);
                echo "\"><label>Cours d'essai</label>
                                </a>
                            </div>
                        ";
            } elseif ((            // line 79
(isset($context["resetIsActiveMode"]) || array_key_exists("resetIsActiveMode", $context) ? $context["resetIsActiveMode"] : (function () { throw new Twig_Error_Runtime('Variable "resetIsActiveMode" does not exist.', 79, $this->source); })()) == true)) {
                // line 80
                echo "                            <div class=\"col-5\">
                                <h5>Liste des utilisateurs dont le statut \"Membre actif\" a été remis à zéro</h5>
                            </div>
                        ";
            } else {
                // line 84
                echo "                            <div class=\"col-2\">
                                <a id=\"isActive\" name=\"isActive\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                   href=\"";
                // line 86
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "isActive"]);
                echo "\"><label>Actifs</label>
                                </a>
                            </div>
                            <div class=\"col-md col-lg\">
                                <a id=\"isTrial\" name=\"isActive\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                   href=\"";
                // line 91
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "isTrial"]);
                echo "\"><label>Cours d'essai</label>
                                </a>
                            </div>

                        ";
            }
            // line 96
            echo "                    </div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table id=\"usertabel\" class=\"table dataTable no-footer\">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                ";
            // line 109
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->source); })()), "request", []), "get", [0 => "orderby"], "method") == "ASC")) {
                // line 110
                echo "                                                    <th>
                                                        <a href=\"";
                // line 111
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "DESC"]);
                echo "\">
                                                            Nom</a></th>
                                                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 113
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 113, $this->source); })()), "request", []), "get", [0 => "orderby"], "method") == "DESC")) {
                // line 114
                echo "                                                    <th>
                                                        <a href=\"";
                // line 115
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "ASC"]);
                echo "\">
                                                            Nom</a></th>
                                                ";
            } else {
                // line 118
                echo "                                                    <th>
                                                        <a href=\"";
                // line 119
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "ASC"]);
                echo "\">
                                                            Nom</a></th>
                                                ";
            }
            // line 122
            echo "                                                <th>Prénom</th>
                                                <th>Email</th>
                                                <th class=\"align-middle text-right\">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 129
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 129, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 130
                echo "                                                <tr>
                                                    <td>";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "userConnected", []), "email", []), "html", null, true);
                echo "</td>
                                                    <td class=\"align-middle text-right\">
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                echo "\"><i
                                                                    class=\"oi oi-person\"></i></a>
                                                        <span class=\"sr-only\">Voir profil</span>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-pencil\">
                                                            </i>
                                                            <span class=\"sr-only\">Modifier</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_history", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                echo "\"><i
                                                                    class=\"oi oi-badge\"></i></a>
                                                        <span class=\"sr-only\">Parcours</span>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                echo "\"><i
                                                                    class=\"oi oi-cart\"></i>
                                                            <span class=\"sr-only\">Activités</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_family", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "userConnected", []), "id", [])]), "html", null, true);
                echo "\">
                                                            <i class=\"oi oi-people\"></i>
                                                            <span class=\"sr-only\">Famille</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_document", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                echo "\"><i
                                                                    class=\"oi oi-document\"></i>
                                                            <span class=\"sr-only\">Documents</span>
                                                        </a>
                                                        ";
                // line 165
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", []) == true)) {
                    // line 166
                    echo "                                                            <a class=\"btn btn-outline-dark\"
                                                               href=\"";
                    // line 167
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_changeIsActive", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                    echo "\">
                                                                Actif
                                                            </a>
                                                        ";
                } else {
                    // line 171
                    echo "                                                            <a class=\"btn btn-outline-light\"
                                                               href=\"";
                    // line 172
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_changeIsActive", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                    echo "\">
                                                                Actif
                                                            </a>
                                                        ";
                }
                // line 176
                echo "                                                    </td>
                                                </tr>
                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 179
                echo "                                                <tr>
                                                    <td colspan=\"10\">Aucun utilisateur</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
            // line 192
            if (((isset($context["resetIsActiveMode"]) || array_key_exists("resetIsActiveMode", $context) ? $context["resetIsActiveMode"] : (function () { throw new Twig_Error_Runtime('Variable "resetIsActiveMode" does not exist.', 192, $this->source); })()) == false)) {
                // line 193
                echo "                        <div class=\"col-md col-lg\">
                            <form action=\"";
                // line 194
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "resetIsActive"]);
                echo "\"
                                  method=\"GET\">
                                <button type=\"submit\" id=\"resetIsActive\" name=\"resetIsActive\"
                                        class=\"btn btn-danger\">Reset des membres actifs
                                </button>
                            </form>
                        </div>
                    ";
            }
            // line 202
            echo "                </div>
            </div>
        </div>
    ";
        }
        // line 206
        echo "
    <script type=\"text/javascript\">
        document.querySelector(\"#resetIsActive\").addEventListener(\"click\", function(event){
            if (!confirm('Confirmation du reset du statut?')) event.preventDefault();
        }, false);
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_vika/showContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 206,  430 => 202,  419 => 194,  416 => 193,  414 => 192,  403 => 183,  394 => 179,  387 => 176,  380 => 172,  377 => 171,  370 => 167,  367 => 166,  365 => 165,  358 => 161,  350 => 156,  342 => 151,  335 => 147,  326 => 141,  319 => 137,  313 => 134,  309 => 133,  305 => 132,  301 => 131,  298 => 130,  292 => 129,  284 => 122,  278 => 119,  275 => 118,  269 => 115,  266 => 114,  264 => 113,  259 => 111,  256 => 110,  253 => 109,  241 => 96,  233 => 91,  225 => 86,  221 => 84,  215 => 80,  213 => 79,  207 => 76,  199 => 71,  195 => 69,  193 => 68,  186 => 64,  178 => 59,  174 => 57,  171 => 56,  154 => 42,  150 => 40,  140 => 33,  135 => 30,  133 => 29,  126 => 24,  123 => 23,  114 => 22,  96 => 20,  81 => 13,  78 => 9,  69 => 8,  56 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}

    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">

{% endblock %}

{% block javascripts %}
    <script src=\"assets/vendor/datatables/jquery.dataTables.min.js\"></script>
    {#
    <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
    #}
    <script>
        \$(document).ready(function () {
            \$('#usertabel').DataTable();
        });
    </script>
{% endblock %}

{% block title %}Utilisateurs de VIKA{% endblock %}

{% block Body %}
    {% if (is_granted('ROLE_ADMIN')) %}

        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <div class=\"row\">
                        {% if (resetIsActiveMode==true) %}
                            <div class=\"col-2\">
                                <div class=\"form-group\">
                                    <a id=\"isActive\" name=\"isActive\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                       href=\"{{ path('admin_users', {orderby:'ASC'}) }}\"><label>Voir tous les
                                            membres</label>
                                    </a>
                                </div>
                            </div>
                            <div class=\"col-3\"></div>
                        {% else %}
                            <div class=\"col-5\">
                                <div class=\"form-group\">
                                    <form action=\"{{ path('admin_users', {orderby:'search'}) }}\"
                                          method=\"GET\">
                                        <div class=\"input-group input-group-search\">
                                                <button type=\"submit\">
                                                    <span class=\"oi oi-magnifying-glass\"></span>
                                                </button>
                                                <input id=\"searchName\" name=\"searchName\"
                                                       type=\"text\" class=\"form-control\" aria-label=\"Search\"
                                                       placeholder=\"Recherche par id, nom, prénom ou email\">
                                            </div>
                                    </form>
                                </div>
                            </div>
                        {% endif %}
                        {% if (isActiveMode==true) %}
                            <div class=\"col-2\">
                                <a id=\"isActive\" name=\"isActive\" class=\"btn btn-primary\" methods=\"GET\"
                                   href=\"{{ path('admin_users', {orderby:'ASC'}) }}\"><label>Actifs</label>
                                </a>
                            </div>
                            <div class=\"col-md col-lg\">
                                <a id=\"isTrial\" name=\"isActive\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                   href=\"{{ path('admin_users', {orderby:'isTrial'}) }}\"><label>Cours d'essai</label>
                                </a>
                            </div>

                        {% elseif (isTrialMode==true) %}
                            <div class=\"col-2\">
                                <a id=\"isActive\" name=\"isActive\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                   href=\"{{ path('admin_users', {orderby:'isActive'}) }}\"><label>Actifs</label>
                                </a>
                            </div>
                            <div class=\"col-md col-lg\">
                                <a id=\"isTrial\" name=\"isTrial\" class=\"btn btn-primary\" methods=\"GET\"
                                   href=\"{{ path('admin_users', {orderby:'ASC'}) }}\"><label>Cours d'essai</label>
                                </a>
                            </div>
                        {% elseif (resetIsActiveMode==true) %}
                            <div class=\"col-5\">
                                <h5>Liste des utilisateurs dont le statut \"Membre actif\" a été remis à zéro</h5>
                            </div>
                        {% else %}
                            <div class=\"col-2\">
                                <a id=\"isActive\" name=\"isActive\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                   href=\"{{ path('admin_users', {orderby:'isActive'}) }}\"><label>Actifs</label>
                                </a>
                            </div>
                            <div class=\"col-md col-lg\">
                                <a id=\"isTrial\" name=\"isActive\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                   href=\"{{ path('admin_users', {orderby:'isTrial'}) }}\"><label>Cours d'essai</label>
                                </a>
                            </div>

                        {% endif %}
                    </div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table id=\"usertabel\" class=\"table dataTable no-footer\">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                {#          <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"dt-responsive\" rowspan=\"1\" colspan=\"1\"
                                                              style=\"width: 144px;\" aria-label=\" Name : activate to sort column descending\" aria-sort=\"ascending\">Nom
                                                          </th>#}
                                                {% if (app.request.get(\"orderby\")=='ASC') %}
                                                    <th>
                                                        <a href=\"{{ path('admin_users', {orderby:'DESC'}) }}\">
                                                            Nom</a></th>
                                                {% elseif (app.request.get(\"orderby\")=='DESC') %}
                                                    <th>
                                                        <a href=\"{{ path('admin_users', {orderby:'ASC'}) }}\">
                                                            Nom</a></th>
                                                {% else %}
                                                    <th>
                                                        <a href=\"{{ path('admin_users', {orderby:'ASC'}) }}\">
                                                            Nom</a></th>
                                                {% endif %}
                                                <th>Prénom</th>
                                                <th>Email</th>
                                                <th class=\"align-middle text-right\">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {# user = user #}
                                            {% for user in users %}
                                                <tr>
                                                    <td>{{ user.id }}</td>
                                                    <td>{{ user.name }}</td>
                                                    <td>{{ user.firstName }}</td>
                                                    <td>{{ user.userConnected.email }}</td>
                                                    <td class=\"align-middle text-right\">
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"{{ path('admin_show', {'id': user.id}) }}\"><i
                                                                    class=\"oi oi-person\"></i></a>
                                                        <span class=\"sr-only\">Voir profil</span>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"{{ path('admin_edit', {'id': user.id}) }}\">
                                                            <i class=\"fa fa-pencil\">
                                                            </i>
                                                            <span class=\"sr-only\">Modifier</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"{{ path('admin_history', {'id': user.id}) }}\"><i
                                                                    class=\"oi oi-badge\"></i></a>
                                                        <span class=\"sr-only\">Parcours</span>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"{{ path('admin_registration', {'id': user.id}) }}\"><i
                                                                    class=\"oi oi-cart\"></i>
                                                            <span class=\"sr-only\">Activités</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"{{ path('admin_family',{'id': user.userConnected.id}) }}\">
                                                            <i class=\"oi oi-people\"></i>
                                                            <span class=\"sr-only\">Famille</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"{{ path('admin_document', {'id': user.id}) }}\"><i
                                                                    class=\"oi oi-document\"></i>
                                                            <span class=\"sr-only\">Documents</span>
                                                        </a>
                                                        {% if (user.isActive == true) %}
                                                            <a class=\"btn btn-outline-dark\"
                                                               href=\"{{ path('admin_changeIsActive', {'id': user.id}) }}\">
                                                                Actif
                                                            </a>
                                                        {% else %}
                                                            <a class=\"btn btn-outline-light\"
                                                               href=\"{{ path('admin_changeIsActive', {'id': user.id}) }}\">
                                                                Actif
                                                            </a>
                                                        {% endif %}
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"10\">Aucun utilisateur</td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {% if (resetIsActiveMode==false) %}
                        <div class=\"col-md col-lg\">
                            <form action=\"{{ path('admin_users', {orderby:'resetIsActive'}) }}\"
                                  method=\"GET\">
                                <button type=\"submit\" id=\"resetIsActive\" name=\"resetIsActive\"
                                        class=\"btn btn-danger\">Reset des membres actifs
                                </button>
                            </form>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}

    <script type=\"text/javascript\">
        document.querySelector(\"#resetIsActive\").addEventListener(\"click\", function(event){
            if (!confirm('Confirmation du reset du statut?')) event.preventDefault();
        }, false);
    </script>
{% endblock %}


                                    {#
                                    <input id=\"searchName\" name=\"searchName\"/>
#}
                                    {#
                                                                        <input type=\"submit\" value=\"Rechercher\"/>
                                    #}
                                    {#   <input id=\"searchName\" name=\"searchName\"/>
                                       <i class=\"oi oi-magnifying-glass\">
                                           <input class=\"btn btn-sm btn-icon btn-secondary\" type=\"submit\"/>
                                       </i>
                                       <span class=\"sr-only\">Rechercher par nom</span>
   #}
                                    {#  <input id=\"searchName\" name=\"searchName\"/>
                                      <input type=\"submit\" value=\"Rechercher\"/>
                                     <a class=\"btn btn-sm btn-icon btn-secondary\"><i
                                                  class=\"oi oi-magnifying-glass\"></i></a>
                                      <span class=\"sr-only\">Voir profil</span>#}
", "admin_vika/showContent.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\admin_vika\\showContent.html.twig");
    }
}

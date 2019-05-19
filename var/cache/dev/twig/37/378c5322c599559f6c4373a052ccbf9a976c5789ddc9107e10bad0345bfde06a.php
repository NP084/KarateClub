<?php

/* member/showProfile.html.twig */
class __TwigTemplate_bcb3261a75dd1e9d166c30b6db4047dbdaa165306ba3c11a015929af42f77112 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/showProfile.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/showProfile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/showProfile.html.twig"));

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
                <div class=\"col-md-10\">
                    <h1>Profil utilisateur
                        ";
            // line 10
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 11
                echo "                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                               href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->source); })()), "id", [])]), "html", null, true);
                echo "\">
                                <i class=\"fa fa-pencil\">
                                </i>
                                <span class=\"sr-only\">Modifier son profil</span>
                            </a>
                        ";
            } else {
                // line 18
                echo "                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                               href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->source); })()), "id", [])]), "html", null, true);
                echo "\">
                                <i class=\"fa fa-pencil\">
                                </i>
                                <span class=\"sr-only\">Modifier le profil</span>
                            </a>
                        ";
            }
            // line 25
            echo "                    </h1>
                    <div class=\"row\">
                        ";
            // line 27
            if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "ownerUser", []) == false) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "userConnected", []), "id", [])))) {
                // line 28
                echo "                            <a class=\"btn-btn-primary\"
                               href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_family", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 29, $this->source); })()), "userConnected", []), "id", [])]), "html", null, true);
                echo "\">
                                <span class=\"badge badge-pill badge-warning\">Retour</span>
                            </a>
                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 33
                echo "                            <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "ASC"]);
                echo "\" class=\"btn-btn-primary\">
                                <span class=\"badge badge-pill badge-warning\">Retour à la liste des utilisateurs</span>
                            </a>
                        ";
            }
            // line 37
            echo "                    </div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"user-avatar user-avatar-xl fileinput-button\">
                                        <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 43, $this->source); })()), "imageFile"), "html", null, true);
            echo "\"
                                             alt=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 44, $this->source); })()), "imageFile", []), "html", null, true);
            echo "\" name=\"avatar\" width=\"150\"/>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 50
            echo "                            ";
            // line 52
            echo "                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <h3>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 55, $this->source); })()), "name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 55, $this->source); })()), "firstname", []), "html", null, true);
            echo " </h3>
                                        <div class=\"metadata\">Inscrit sur le site depuis
                                            : ";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 57, $this->source); })()), "createdUs", []), "d-m-Y"), "html", null, true);
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <h3> Informations générales :</h3>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <p> Email : ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 72, $this->source); })()), "userConnected", []), "email", []), "html", null, true);
            echo " </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <p> Date de naissance
                                            : ";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 80, $this->source); })()), "birthdate", []), "d/m/Y"), "html", null, true);
            echo " </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <p>Numéro de fédération : ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 87, $this->source); })()), "fedNum", []), "html", null, true);
            echo " </p>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 91
            $context["diff"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, "now"), "diff", [0 => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 91, $this->source); })()), "birthdate", [])], "method");
            // line 92
            echo "                            ";
            $context["age"] = (twig_get_attribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new Twig_Error_Runtime('Variable "diff" does not exist.', 92, $this->source); })()), "days", []) / 365);
            // line 93
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 93, $this->source); })()), "belt", [])) {
                // line 94
                echo "                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <div class=\"form-group\">
                                            <h4> Grade</h4>
                                            <p>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 98, $this->source); })()), "belt", []), "html", null, true);
                echo "
                                                ";
                // line 99
                if (((isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 99, $this->source); })()) < 13)) {
                    // line 100
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 100, $this->source); })()), "bars", []), "html", null, true);
                    echo " barrete(s)
                                                ";
                }
                // line 102
                echo "                                                reçu
                                                le ";
                // line 103
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 103, $this->source); })()), "receiptDate", []), "d/m/Y"), "html", null, true);
                echo "</p>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 108
            echo "                            ";
            // line 109
            echo "                            ";
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 109, $this->source); })()), "ownerUser", []) == false))) {
                // line 110
                echo "                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            <h3> Informations sur le titulaire du compte</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            ";
                // line 120
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 121
                    echo "                                                <a class=\"btn btn-link\"
                                                   href=\"";
                    // line 122
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 122, $this->source); })()), "userConnected", []), "user", []), "id", [])]), "html", null, true);
                    echo "\">
                                                    <h4>";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 123, $this->source); })()), "userConnected", []), "user", []), "name", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 123, $this->source); })()), "userConnected", []), "user", []), "firstname", []), "html", null, true);
                    echo " </h4>
                                                    <span class=\"sr-only\">Voir le profil</span>
                                                </a>
                                            ";
                } else {
                    // line 127
                    echo "                                                <a class=\"btn btn-link\"
                                                   href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 128, $this->source); })()), "userConnected", []), "user", []), "id", [])]), "html", null, true);
                    echo "\">
                                                    <h4>";
                    // line 129
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 129, $this->source); })()), "userConnected", []), "user", []), "name", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 129, $this->source); })()), "userConnected", []), "user", []), "firstname", []), "html", null, true);
                    echo " </h4>
                                                    <span class=\"sr-only\">Voir le profil</span>
                                                </a>
                                            ";
                }
                // line 133
                echo "                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            <p>Numéro de fédération : ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 139, $this->source); })()), "userConnected", []), "user", []), "fedNum", []), "html", null, true);
                echo " </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            <p> Email : ";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 146, $this->source); })()), "userConnected", []), "email", []), "html", null, true);
                echo " </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        <div class=\"form-group\">
                                            <h3> Numéro(s) de téléphone </h3>
                                            <table class=\"table\">
                                                <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>Numéro</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
                // line 162
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 162, $this->source); })()), "userConnected", []), "user", []), "phones", []));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                    // line 163
                    echo "                                                <tr>
                                                    <td>";
                    // line 164
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "type", []), "html", null, true);
                    echo "</td>
                                                    <td>";
                    // line 165
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "num", []), "html", null, true);
                    echo "</td>
                                                </tr>
                                                ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 168
                    echo "                                                <tr>
                                                    <td colspan=\"10\">Aucun numéro de téléphone</td>
                                                </tr>
                                                </tbody>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                                            </table>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 178
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <h2>Coordonnées </h2>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <div class=\"form-group\">
                                            <h3> Numéro(s) de téléphone </h3>
                                            <table class=\"table\">
                                                <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>Numéro</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 203, $this->source); })()), "phones", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 204
                echo "                                                <tr>
                                                    <td>";
                // line 205
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "type", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "num", []), "html", null, true);
                echo "</td>
                                                </tr>
                                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 209
                echo "                                                <tr>
                                                    <td colspan=\"10\">Aucun numéro de téléphone</td>
                                                </tr>
                                                </tbody>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <h3> Adresses </h3>
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Numéro</th>
                                                <th>Rue</th>
                                                <th>Ville</th>
                                                <th>Pays</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 234
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 234, $this->source); })()), "adress", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["adress"]) {
                // line 235
                echo "                                            <tr>
                                                <td>";
                // line 236
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "type", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 237
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "num", []), "html", null, true);
                echo "
                                                    ";
                // line 238
                if (twig_get_attribute($this->env, $this->source, $context["adress"], "postBox", [])) {
                    // line 239
                    echo "                                                        (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "postBox", []), "html", null, true);
                    echo ")
                                                    ";
                }
                // line 241
                echo "                                                </td>
                                                <td>";
                // line 242
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "streetName", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 243
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "cityName", []), "html", null, true);
                echo "
                                                    ";
                // line 244
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "zip", [])) {
                    // line 245
                    echo "                                                        (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "zip", []), "html", null, true);
                    echo ")
                                                    ";
                }
                // line 247
                echo "                                                </td>
                                            <td>";
                // line 248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "country", []), "countryName", []), "html", null, true);
                echo "</td>
                                            </tr>
                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 251
                echo "                                            <tr>
                                                <td colspan=\"10\">Aucune adresse</td>
                                            </tr>
                                            </tbody>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <h2>Personne de contact </h2>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Numéro</th>
                                                <th>Relation</th>
                                                <th>Informations</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 286, $this->source); })()), "contactLists", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["contactList"]) {
                // line 287
                echo "                                            <tr>
                                                <td>";
                // line 288
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "name", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 289
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "firstName", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 290
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "num1", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 291
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactList"], "relation", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 292
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactList"], "info", []), "html", null, true);
                echo "</td>
                                            </tr>
                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 295
                echo "                                            <tr>
                                                <td colspan=\"10\">Aucune personne de contact</td>
                                            </tr>
                                            </tbody>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 310
            echo "        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    ";
        }
        // line 312
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/showProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 312,  584 => 310,  572 => 300,  562 => 295,  554 => 292,  550 => 291,  546 => 290,  542 => 289,  538 => 288,  535 => 287,  530 => 286,  498 => 256,  488 => 251,  480 => 248,  477 => 247,  471 => 245,  469 => 244,  465 => 243,  461 => 242,  458 => 241,  452 => 239,  450 => 238,  446 => 237,  442 => 236,  439 => 235,  434 => 234,  412 => 214,  402 => 209,  394 => 206,  390 => 205,  387 => 204,  382 => 203,  355 => 178,  348 => 173,  338 => 168,  330 => 165,  326 => 164,  323 => 163,  318 => 162,  299 => 146,  289 => 139,  281 => 133,  272 => 129,  268 => 128,  265 => 127,  256 => 123,  252 => 122,  249 => 121,  247 => 120,  235 => 110,  232 => 109,  230 => 108,  222 => 103,  219 => 102,  213 => 100,  211 => 99,  207 => 98,  201 => 94,  198 => 93,  195 => 92,  193 => 91,  186 => 87,  176 => 80,  165 => 72,  147 => 57,  140 => 55,  135 => 52,  133 => 50,  126 => 44,  122 => 43,  114 => 37,  106 => 33,  99 => 29,  96 => 28,  94 => 27,  90 => 25,  81 => 19,  78 => 18,  69 => 12,  66 => 11,  64 => 10,  58 => 6,  55 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block Body %}
    {# Admin ou si la personne connectée est le parent du profil consulté #}
    {% if (is_granted('ROLE_ADMIN') or app.user.id == user.userConnected.id) %}
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <h1>Profil utilisateur
                        {% if (is_granted('ROLE_ADMIN')) %}
                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                               href=\"{{ path('admin_edit',{'id':user.id}) }}\">
                                <i class=\"fa fa-pencil\">
                                </i>
                                <span class=\"sr-only\">Modifier son profil</span>
                            </a>
                        {% else %}
                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                               href=\"{{ path('profile_edit',{'id':user.id}) }}\">
                                <i class=\"fa fa-pencil\">
                                </i>
                                <span class=\"sr-only\">Modifier le profil</span>
                            </a>
                        {% endif %}
                    </h1>
                    <div class=\"row\">
                        {% if(user.ownerUser == false and app.user.id == user.userConnected.id) %}
                            <a class=\"btn-btn-primary\"
                               href=\"{{ path('view_family',{'id':user.userConnected.id}) }}\">
                                <span class=\"badge badge-pill badge-warning\">Retour</span>
                            </a>
                        {% elseif (is_granted('ROLE_ADMIN')) %}
                            <a href=\"{{ path('admin_users', {'orderby':'ASC'}) }}\" class=\"btn-btn-primary\">
                                <span class=\"badge badge-pill badge-warning\">Retour à la liste des utilisateurs</span>
                            </a>
                        {% endif %}
                    </div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"user-avatar user-avatar-xl fileinput-button\">
                                        <img src=\"{{ vich_uploader_asset(user, 'imageFile') }}\"
                                             alt=\"{{ user.imageFile }}\" name=\"avatar\" width=\"150\"/>
                                    </div>
                                </div>
                            </div>
                            {#Parent (qui peut être admin admin) qui visite son propre profil
                             ou un admin qui consulte un parent#}
                            {#  {% if ((user.ownerUser and (user.ownerUser.id == app.user.id))
                                  or (is_granted('ROLE_ADMIN') and (user.ownerUser and user.userConnected.id == user.ownerUser.id)) ) %}#}
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <h3>{{ user.name }} {{ user.firstname }} </h3>
                                        <div class=\"metadata\">Inscrit sur le site depuis
                                            : {{ user.createdUs |date('d-m-Y') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <h3> Informations générales :</h3>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <p> Email : {{ user.userConnected.email }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <p> Date de naissance
                                            : {{ user.birthdate |date('d/m/Y') }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <p>Numéro de fédération : {{ user.fedNum }} </p>
                                    </div>
                                </div>
                            </div>
                            {% set diff = date(\"now\").diff(user.birthdate) %}
                            {% set age = diff.days/365 %}
                            {% if (user.belt) %}
                                <div class=\"row\">
                                    <div class=\"col-5\">
                                        <div class=\"form-group\">
                                            <h4> Grade</h4>
                                            <p>{{ user.belt }}
                                                {% if (age<13) %}
                                                    {{ user.bars }} barrete(s)
                                                {% endif %}
                                                reçu
                                                le {{ user.receiptDate |date('d/m/Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                            {# parent ou admin qui consulte un User \"enfant\"     #}
                            {% if( (is_granted('ROLE_USER') or is_granted('ROLE_ADMIN')) and (user.ownerUser == false)) %}
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            <h3> Informations sur le titulaire du compte</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            {% if (is_granted('ROLE_ADMIN')) %}
                                                <a class=\"btn btn-link\"
                                                   href=\"{{ path('admin_show',{'id':user.userConnected.user.id}) }}\">
                                                    <h4>{{ user.userConnected.user.name }} {{ user.userConnected.user.firstname }} </h4>
                                                    <span class=\"sr-only\">Voir le profil</span>
                                                </a>
                                            {% else %}
                                                <a class=\"btn btn-link\"
                                                   href=\"{{ path('profile_show',{'id':user.userConnected.user.id}) }}\">
                                                    <h4>{{ user.userConnected.user.name }} {{ user.userConnected.user.firstname }} </h4>
                                                    <span class=\"sr-only\">Voir le profil</span>
                                                </a>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            <p>Numéro de fédération : {{ user.userConnected.user.fedNum }} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            <p> Email : {{ user.userConnected.email }} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        <div class=\"form-group\">
                                            <h3> Numéro(s) de téléphone </h3>
                                            <table class=\"table\">
                                                <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>Numéro</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for phone in user.userConnected.user.phones %}
                                                <tr>
                                                    <td>{{ phone.type }}</td>
                                                    <td>{{ phone.num }}</td>
                                                </tr>
                                                {% else %}
                                                <tr>
                                                    <td colspan=\"10\">Aucun numéro de téléphone</td>
                                                </tr>
                                                </tbody>
                                                {% endfor %}
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <h2>Coordonnées </h2>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <div class=\"form-group\">
                                            <h3> Numéro(s) de téléphone </h3>
                                            <table class=\"table\">
                                                <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>Numéro</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for phone in user.phones %}
                                                <tr>
                                                    <td>{{ phone.type }}</td>
                                                    <td>{{ phone.num }}</td>
                                                </tr>
                                                {% else %}
                                                <tr>
                                                    <td colspan=\"10\">Aucun numéro de téléphone</td>
                                                </tr>
                                                </tbody>
                                                {% endfor %}
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <h3> Adresses </h3>
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Numéro</th>
                                                <th>Rue</th>
                                                <th>Ville</th>
                                                <th>Pays</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for adress in user.adress %}
                                            <tr>
                                                <td>{{ adress.type }}</td>
                                                <td>{{ adress.num }}
                                                    {% if adress.postBox %}
                                                        ({{ adress.postBox }})
                                                    {% endif %}
                                                </td>
                                                <td>{{ adress.streetName }}</td>
                                                <td>{{ adress.city.cityName }}
                                                    {% if adress.city.zip %}
                                                        ({{ adress.city.zip }})
                                                    {% endif %}
                                                </td>
                                            <td>{{ adress.city.country.countryName }}</td>
                                            </tr>
                                            {% else %}
                                            <tr>
                                                <td colspan=\"10\">Aucune adresse</td>
                                            </tr>
                                            </tbody>
                                            {% endfor %}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <h2>Personne de contact </h2>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Numéro</th>
                                                <th>Relation</th>
                                                <th>Informations</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for contactList in user.contactLists %}
                                            <tr>
                                                <td>{{ contactList.personOfContact.name }}</td>
                                                <td>{{ contactList.personOfContact.firstName }}</td>
                                                <td>{{ contactList.personOfContact.num1 }}</td>
                                                <td>{{ contactList.relation }}</td>
                                                <td>{{ contactList.info }}</td>
                                            </tr>
                                            {% else %}
                                            <tr>
                                                <td colspan=\"10\">Aucune personne de contact</td>
                                            </tr>
                                            </tbody>
                                            {% endfor %}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    {% endif %}

{% endblock %}


", "member/showProfile.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\member\\showProfile.html.twig");
    }
}

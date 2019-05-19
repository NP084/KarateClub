<?php

/* registration/showContent.html.twig */
class __TwigTemplate_19bfc5dfa8cf064f2b5877e4516ec22e95d39a3c11983a52086c3f8983d9c9a5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/showContent.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/showContent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/showContent.html.twig"));

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

        echo "Dossier inscription de VIKA";
        
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
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "
        <div class=\"container-fluid\">
            ";
            // line 10
            echo "            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <h2>Liste des dossiers de pré-inscription</h2>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Numéro de dossier</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Nom de l'évènement</th>
                                                <th>Soumis le</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["registrations"]) || array_key_exists("registrations", $context) ? $context["registrations"] : (function () { throw new Twig_Error_Runtime('Variable "registrations" does not exist.', 30, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["registration"]) {
                // line 31
                echo "                                                <tr>
                                                    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registration"], "id", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registration"], "user", []), "name", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registration"], "user", []), "firstname", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registration"], "vikaEvent", []), "title", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registration"], "registrationDate", []), "d/m/Y"), "html", null, true);
                echo "</td>
                                                    <td class=\"align-middle text-right\">
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier_inscription", ["id" => twig_get_attribute($this->env, $this->source, $context["registration"], "id", [])]), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-pencil\">
                                                            </i>
                                                            <span class=\"sr-only\">Voir dossier</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           onclick=\"return confirm('Veuillez confirmer la suppression de cette inscription svp?');\"
                                                           href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_registration_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["registration"], "id", []), "idUser" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registration"], "user", []), "id", [])]), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-trash-o\">
                                                            </i>
                                                            <span class=\"sr-only\">Supprimer</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_membre", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registration"], "user", []), "id", []), "idReg" => twig_get_attribute($this->env, $this->source, $context["registration"], "id", [])]), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-file\">
                                                            </i>
                                                            <span class=\"sr-only\">Imprimer fiche</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 60
                echo "                                                <tr>
                                                    <td colspan=\"10\">Aucun dossier de pré-inscription</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
            // line 74
            echo "            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <h2>Liste des dossiers d'inscription </h2>

                            ";
            // line 80
            if ((isset($context["allReg"]) || array_key_exists("allReg", $context) ? $context["allReg"] : (function () { throw new Twig_Error_Runtime('Variable "allReg" does not exist.', 80, $this->source); })())) {
                // line 81
                echo "                                <a id=\"allReg\" name=\"allReg\" class=\"btn btn-primary\" methods=\"GET\"
                                   href=\"";
                // line 82
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_view");
                echo "\"><label>Inscriptions en cours
                                    </label>
                                </a>
                            ";
            } else {
                // line 86
                echo "                                <a id=\"allReg\" name=\"allReg\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                   href=\"";
                // line 87
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_view", ["orderby" => "allReg"]);
                echo "\"><label>Inscriptions
                                        terminées
                                    </label>
                                </a>
                            ";
            }
            // line 92
            echo "                        </div>
                    </div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Numéro de dossier</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Nom de l'évènement</th>
                                                <th>Date de validation</th>
                                                <th>Date de clôture</th>
                                                <th>Nombre de payement</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["registrationsValidate"]) || array_key_exists("registrationsValidate", $context) ? $context["registrationsValidate"] : (function () { throw new Twig_Error_Runtime('Variable "registrationsValidate" does not exist.', 113, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["registrationValidate"]) {
                // line 114
                echo "                                                ";
                if (((isset($context["allReg"]) || array_key_exists("allReg", $context) ? $context["allReg"] : (function () { throw new Twig_Error_Runtime('Variable "allReg" does not exist.', 114, $this->source); })()) == false)) {
                    // line 115
                    echo "                                                    ";
                    if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "vikaEvent", []), "endDate", []), "Y-m-d") > twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                        // line 116
                        echo "                                                        <tr>
                                                            <td>";
                        // line 117
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "id", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 118
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "user", []), "name", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 119
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "user", []), "firstname", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 120
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "vikaEvent", []), "title", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 121
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "ValidateRegistrationDate", []), "d-m-Y"), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 122
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "vikaEvent", []), "endDate", []), "d-m-Y"), "html", null, true);
                        echo "</td>
                                                            ";
                        // line 123
                        $context["nbr"] = 0;
                        // line 124
                        echo "                                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "Paiement", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                            // line 125
                            echo "                                                                ";
                            $context["nbr"] = ((isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new Twig_Error_Runtime('Variable "nbr" does not exist.', 125, $this->source); })()) + 1);
                            // line 126
                            echo "                                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 127
                        echo "                                                            <td>";
                        echo twig_escape_filter($this->env, (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new Twig_Error_Runtime('Variable "nbr" does not exist.', 127, $this->source); })()), "html", null, true);
                        echo "</td>
                                                            <td class=\"align-middle text-right\">
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"";
                        // line 130
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier_inscription", ["id" => twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "id", [])]), "html", null, true);
                        echo "\">
                                                                    <i class=\"fa fa-pencil\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Voir dossier</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   onclick=\"return confirm('Veuillez confirmer la suppression de cette inscription svp?');\"
                                                                   href=\"";
                        // line 137
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_registration_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "id", []), "idUser" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "user", []), "id", [])]), "html", null, true);
                        echo "\">
                                                                    <i class=\"fa fa-trash-o\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Supprimer</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                    }
                    // line 145
                    echo "                                                ";
                } else {
                    // line 146
                    echo "                                                    ";
                    if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "vikaEvent", []), "endDate", []), "Y-m-d") < twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                        // line 147
                        echo "                                                        <tr>
                                                            <td>";
                        // line 148
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "id", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 149
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "user", []), "name", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 150
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "user", []), "firstname", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 151
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "vikaEvent", []), "title", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 152
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "ValidateRegistrationDate", []), "d-m-Y"), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 153
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "vikaEvent", []), "endDate", []), "d-m-Y"), "html", null, true);
                        echo "</td>
                                                            ";
                        // line 154
                        $context["nbr"] = 0;
                        // line 155
                        echo "                                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "Paiement", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                            // line 156
                            echo "                                                                ";
                            $context["nbr"] = ((isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new Twig_Error_Runtime('Variable "nbr" does not exist.', 156, $this->source); })()) + 1);
                            // line 157
                            echo "                                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 158
                        echo "                                                            <td>";
                        echo twig_escape_filter($this->env, (isset($context["nbr"]) || array_key_exists("nbr", $context) ? $context["nbr"] : (function () { throw new Twig_Error_Runtime('Variable "nbr" does not exist.', 158, $this->source); })()), "html", null, true);
                        echo "</td>
                                                            <td class=\"align-middle text-right\">
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"";
                        // line 161
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier_inscription", ["id" => twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "id", [])]), "html", null, true);
                        echo "\">
                                                                    <i class=\"fa fa-pencil\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Voir dossier</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   onclick=\"return confirm('Veuillez confirmer la suppression de cette inscription svp?');\"
                                                                   href=\"";
                        // line 168
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_registration_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "id", []), "idUser" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["registrationValidate"], "user", []), "id", [])]), "html", null, true);
                        echo "\">
                                                                    <i class=\"fa fa-trash-o\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Supprimer</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                    }
                    // line 176
                    echo "                                                ";
                }
                // line 177
                echo "                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 178
                echo "                                                <tr>
                                                    <td colspan=\"10\">Aucun dossier d'inscription</td>
                                                </tr>
                                                ";
                // line 187
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registrationValidate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                                            ";
            // line 193
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 204
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/showContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 204,  417 => 193,  415 => 188,  409 => 187,  404 => 178,  399 => 177,  396 => 176,  385 => 168,  375 => 161,  368 => 158,  362 => 157,  359 => 156,  354 => 155,  352 => 154,  348 => 153,  344 => 152,  340 => 151,  336 => 150,  332 => 149,  328 => 148,  325 => 147,  322 => 146,  319 => 145,  308 => 137,  298 => 130,  291 => 127,  285 => 126,  282 => 125,  277 => 124,  275 => 123,  271 => 122,  267 => 121,  263 => 120,  259 => 119,  255 => 118,  251 => 117,  248 => 116,  245 => 115,  242 => 114,  237 => 113,  214 => 92,  206 => 87,  203 => 86,  196 => 82,  193 => 81,  191 => 80,  183 => 74,  172 => 64,  163 => 60,  150 => 52,  141 => 46,  131 => 39,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  109 => 32,  106 => 31,  101 => 30,  79 => 10,  75 => 7,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Dossier inscription de VIKA{% endblock %}

{% block Body %}
    {% if (is_granted('ROLE_ADMIN')) %}

        <div class=\"container-fluid\">
            {#LISTE DES PRE-INSCRIPTIONS#}
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <h2>Liste des dossiers de pré-inscription</h2>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Numéro de dossier</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Nom de l'évènement</th>
                                                <th>Soumis le</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for registration in registrations %}
                                                <tr>
                                                    <td>{{ registration.id }}</td>
                                                    <td>{{ registration.user.name }}</td>
                                                    <td>{{ registration.user.firstname }}</td>
                                                    <td>{{ registration.vikaEvent.title }}</td>
                                                    <td>{{ (registration.registrationDate |date('d/m/Y')) }}</td>
                                                    <td class=\"align-middle text-right\">
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"{{ path('dossier_inscription', {'id': registration.id}) }}\">
                                                            <i class=\"fa fa-pencil\">
                                                            </i>
                                                            <span class=\"sr-only\">Voir dossier</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           onclick=\"return confirm('Veuillez confirmer la suppression de cette inscription svp?');\"
                                                           href=\"{{ path('remove_registration_admin', {'id':registration.id, 'idUser':registration.user.id}) }}\">
                                                            <i class=\"fa fa-trash-o\">
                                                            </i>
                                                            <span class=\"sr-only\">Supprimer</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"{{ path('fiche_membre', {'id':registration.user.id, 'idReg':registration.id}) }}\">
                                                            <i class=\"fa fa-file\">
                                                            </i>
                                                            <span class=\"sr-only\">Imprimer fiche</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"10\">Aucun dossier de pré-inscription</td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {#LISTE DES INSCRIPTIONS#}
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <h2>Liste des dossiers d'inscription </h2>

                            {% if allReg %}
                                <a id=\"allReg\" name=\"allReg\" class=\"btn btn-primary\" methods=\"GET\"
                                   href=\"{{ path('registration_view') }}\"><label>Inscriptions en cours
                                    </label>
                                </a>
                            {% else %}
                                <a id=\"allReg\" name=\"allReg\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                   href=\"{{ path('registration_view', {orderby:'allReg'}) }}\"><label>Inscriptions
                                        terminées
                                    </label>
                                </a>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Numéro de dossier</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Nom de l'évènement</th>
                                                <th>Date de validation</th>
                                                <th>Date de clôture</th>
                                                <th>Nombre de payement</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for registrationValidate in registrationsValidate %}
                                                {% if allReg == false %}
                                                    {% if  ((registrationValidate.vikaEvent.endDate |date('Y-m-d')) > (\"now\"|date(\"Y-m-d\"))) %}
                                                        <tr>
                                                            <td>{{ registrationValidate.id }}</td>
                                                            <td>{{ registrationValidate.user.name }}</td>
                                                            <td>{{ registrationValidate.user.firstname }}</td>
                                                            <td>{{ registrationValidate.vikaEvent.title }}</td>
                                                            <td>{{ (registrationValidate.ValidateRegistrationDate |date('d-m-Y')) }}</td>
                                                            <td>{{ (registrationValidate.vikaEvent.endDate |date('d-m-Y')) }}</td>
                                                            {% set nbr = 0 %}
                                                            {% for id in registrationValidate.Paiement %}
                                                                {% set nbr = nbr + 1 %}
                                                            {% endfor %}
                                                            <td>{{ nbr }}</td>
                                                            <td class=\"align-middle text-right\">
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"{{ path('dossier_inscription', {'id': registrationValidate.id}) }}\">
                                                                    <i class=\"fa fa-pencil\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Voir dossier</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   onclick=\"return confirm('Veuillez confirmer la suppression de cette inscription svp?');\"
                                                                   href=\"{{ path('remove_registration_admin', {'id':registrationValidate.id, 'idUser':registrationValidate.user.id}) }}\">
                                                                    <i class=\"fa fa-trash-o\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Supprimer</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    {% endif %}
                                                {% else %}
                                                    {% if  ((registrationValidate.vikaEvent.endDate |date('Y-m-d')) < (\"now\"|date(\"Y-m-d\"))) %}
                                                        <tr>
                                                            <td>{{ registrationValidate.id }}</td>
                                                            <td>{{ registrationValidate.user.name }}</td>
                                                            <td>{{ registrationValidate.user.firstname }}</td>
                                                            <td>{{ registrationValidate.vikaEvent.title }}</td>
                                                            <td>{{ (registrationValidate.ValidateRegistrationDate |date('d-m-Y')) }}</td>
                                                            <td>{{ (registrationValidate.vikaEvent.endDate |date('d-m-Y')) }}</td>
                                                            {% set nbr = 0 %}
                                                            {% for id in registrationValidate.Paiement %}
                                                                {% set nbr = nbr + 1 %}
                                                            {% endfor %}
                                                            <td>{{ nbr }}</td>
                                                            <td class=\"align-middle text-right\">
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"{{ path('dossier_inscription', {'id': registrationValidate.id}) }}\">
                                                                    <i class=\"fa fa-pencil\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Voir dossier</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   onclick=\"return confirm('Veuillez confirmer la suppression de cette inscription svp?');\"
                                                                   href=\"{{ path('remove_registration_admin', {'id':registrationValidate.id, 'idUser':registrationValidate.user.id}) }}\">
                                                                    <i class=\"fa fa-trash-o\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Supprimer</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    {% endif %}
                                                {% endif %}
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"10\">Aucun dossier d'inscription</td>
                                                </tr>
                                                {#   {% if registrationValidate |length > 1 %}
                                                   {% else %}
                                                   <tr>
                                                       <td colspan=\"10\">Aucun dossier d'inscription</td>
                                                   </tr>
                                                   {% endif %}#}
                                            {% endfor %}
                                            {#{% else %}
                                                <tr>
                                                    <td colspan=\"10\">Aucun dossier d'inscription</td>
                                                </tr>
                                            {% endfor %}#}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}

{% endblock %}
", "registration/showContent.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\registration\\showContent.html.twig");
    }
}

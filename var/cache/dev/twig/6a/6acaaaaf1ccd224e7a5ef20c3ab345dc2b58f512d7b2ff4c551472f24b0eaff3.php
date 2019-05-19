<?php

/* registration/fileRegistration.html.twig */
class __TwigTemplate_35b610c81731acdd62e6b057ce7798aaca86275c6b4480d71c3f3d99855021f3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/fileRegistration.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/fileRegistration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/fileRegistration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dossier de pré-inscription";
        
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
            <div class=\"row justify-content-between\">
                <div class=\"col-auto\">
                    <h2>Dossier de pré-inscription</h2>
                </div>
                ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 14, $this->source); })()), "user", []), "userConnected", []), "id", []))) {
            // line 15
            echo "                <div class=\"col-auto\">
                    <a class=\"btn btn-warning\"
                        href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 17, $this->source); })()), "user", []), "id", [])]), "html", null, true);
            echo "\" role=\"button\">
                        Retour
                    </a>
                </div>
                ";
        } else {
            // line 22
            echo "                <div class=\"col-auto\">
                    <a class=\"btn btn-warning\"
                        href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_view");
            echo "\" role=\"button\">
                        Retour
                    </a>
                </div>
                ";
        }
        // line 29
        echo "            </div>
            <div class=\"card\">
                <div class=\"container-fluid\">
                    ";
        // line 33
        echo "                    <div class=\"row justify-content-center\">
                        <div class=\"col-11\">
                            <br>
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <h3>N°dossier: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 40, $this->source); })()), "id", []), "html", null, true);
        echo "</h3>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <br>
                                            <h6>Date de la pré-inscription: ";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 46, $this->source); })()), "registrationDate", []), "d/m/Y"), "html", null, true);
        echo "</h6>
                                            <h6>Date de l'inscription: </h6>
                                            <h6>Evènement: ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 48, $this->source); })()), "vikaEvent", []), "title", []), "html", null, true);
        echo "</h6>
                                            <h6>Inscrit par : ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 49, $this->source); })()), "user", []), "userConnected", []), "user", []), "name", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 49, $this->source); })()), "user", []), "userConnected", []), "user", []), "name", []), "html", null, true);
        echo "</h6>
                                            <h6>Email: ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 50, $this->source); })()), "user", []), "userConnected", []), "email", []), "html", null, true);
        echo "</h6>
                                            <br>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <p><em>Remarque du membre:</em></p>
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    <p>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 59, $this->source); })()), "remark", []), "html", null, true);
        echo "</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"container-fluid\">
                    ";
        // line 71
        echo "                    <div class=\"row justify-content-center\">
                        <div class=\"col-11\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"form-group\">
                                                <h3>Informations générales</h3>
                                                <p>Nom: ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 79, $this->source); })()), "user", []), "name", []), "html", null, true);
        echo "</p>
                                                <p>Prénom: ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 80, $this->source); })()), "user", []), "firstname", []), "html", null, true);
        echo "</p>
                                                <p>Sexe: ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 81, $this->source); })()), "user", []), "sex", []), "html", null, true);
        echo "</p>
                                                <p>Date de naissance: ";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 82, $this->source); })()), "user", []), "birthdate", []), "d/m/Y"), "html", null, true);
        echo "</p>
                                                <p>Numéro de la fédération: ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 83, $this->source); })()), "user", []), "fedNum", []), "html", null, true);
        echo "</p>
                                                <p>Grade: ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 84, $this->source); })()), "user", []), "belt", []), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <div class=\"form-group\">
                                                    ";
        // line 94
        echo "                                                    <h6>Numéro(s) de téléphone</h6>
                                                    <table class=\"table\">
                                                        <thead>
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>Numéro</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 104, $this->source); })()), "user", []), "phones", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 105
            echo "                                                        <tr>
                                                            <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "type", []), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "num", []), "html", null, true);
            echo "</td>
                                                        </tr>
                                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 110
            echo "                                                        <tr>
                                                            <td colspan=\"10\">Aucune numéro de téléphone
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                ";
        // line 125
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 125, $this->source); })()), "vikaEvent", []), "easyInscription", []) == true)) {
            // line 126
            echo "                ";
        } else {
            // line 127
            echo "                    ";
            // line 128
            echo "                    <div class=\"row justify-content-center\">
                        <div class=\"col-11\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                            <div class=\"col\">
                                                <div class=\"form-group\">
                                                    <h3>Adresses</h3>
                                                    <table class=\"table\">
                                                        <thead>
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>Numéro</th>
                                                            <th>Rue</th>
                                                            <th>Ville</th>
                                                            <th>Pays</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 148, $this->source); })()), "user", []), "adress", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["adress"]) {
                // line 149
                echo "                                                        <tr>
                                                            <td>";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "type", []), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "num", []), "html", null, true);
                echo "
                                                                ";
                // line 152
                if (twig_get_attribute($this->env, $this->source, $context["adress"], "postBox", [])) {
                    // line 153
                    echo "                                                                    (BP:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "postBox", []), "html", null, true);
                    echo ")
                                                                ";
                }
                // line 155
                echo "                                                            </td>
                                                            <td>";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "streetName", []), "html", null, true);
                echo "</td>
                                                            <td>";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "cityName", []), "html", null, true);
                echo "
                                                                ";
                // line 158
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "zip", [])) {
                    // line 159
                    echo "                                                                    (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "zip", []), "html", null, true);
                    echo ")
                                                                ";
                }
                // line 161
                echo "                                                            </td>
                                                            <td>";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "country", []), "countryName", []), "html", null, true);
                echo "</td>
                                                        </tr>
                                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 165
                echo "                                                        <tr>
                                                            <td colspan=\"10\">Aucune adresse</td>
                                                        </tr>
                                                        </tbody>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                                                    </table>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            // line 179
            echo "                    <div class=\"row justify-content-center\">
                            <div class=\"col-11\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                                                    <div class=\"col\">
                                                                        <div class=\"form-group\">
                                                                            <h3>Point de contact</h3>
                                                                            <table class=\"table\">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>Nom</th>
                                                                                    <th>Prénom</th>
                                                                                    <th>Numéro</th>
                                                                                    <th>Relation</th>
                                                                                    <th>Informations</th>
                                                                                    <th></th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 199, $this->source); })()), "user", []), "contactLists", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["contactList"]) {
                // line 200
                echo "                                                                                <tr>
                                                                                    <td>";
                // line 201
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "name", []), "html", null, true);
                echo "</td>
                                                                                    <td>";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "firstName", []), "html", null, true);
                echo "</td>
                                                                                    <td>";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "num1", []), "html", null, true);
                echo "</td>
                                                                                    <td>";
                // line 204
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactList"], "relation", []), "html", null, true);
                echo "</td>
                                                                                    <td>";
                // line 205
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactList"], "info", []), "html", null, true);
                echo "</td>

                                                                                    <td class=\"align-middle text-right\">
                                                                                        ";
                // line 208
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 209
                    echo "                                                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                                            href=\"";
                    // line 210
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_PoC_admin", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 210, $this->source); })()), "user", []), "id", []), "idCL" => twig_get_attribute($this->env, $this->source, $context["contactList"], "id", []), "idPoC" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "id", [])]), "html", null, true);
                    echo "\">
                                                                                                <i class=\"fa fa-pencil\">
                                                                                                </i>
                                                                                                <span class=\"sr-only\">Modifier</span>
                                                                                            </a>
                                                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                                            href=\"";
                    // line 216
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_PoC_admin", ["idCL" => twig_get_attribute($this->env, $this->source, $context["contactList"], "id", []), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 216, $this->source); })()), "user", []), "id", [])]), "html", null, true);
                    echo "\">
                                                                                                <i class=\"fa fa-trash-o\">
                                                                                                </i>
                                                                                                <span class=\"sr-only\">Supprimer</span>
                                                                                            </a>
                                                                                        ";
                } else {
                    // line 222
                    echo "                                                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                                            href=\"";
                    // line 223
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_PoC", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 223, $this->source); })()), "user", []), "id", []), "idCL" => twig_get_attribute($this->env, $this->source, $context["contactList"], "id", []), "idPoC" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "id", [])]), "html", null, true);
                    echo "\">
                                                                                                <i class=\"fa fa-pencil\">
                                                                                                </i>
                                                                                                <span class=\"sr-only\">Modifier</span>
                                                                                            </a>
                                                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                                            href=\"";
                    // line 229
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_PoC", ["idCL" => twig_get_attribute($this->env, $this->source, $context["contactList"], "id", []), "id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 229, $this->source); })()), "user", []), "id", [])]), "html", null, true);
                    echo "\">
                                                                                                <i class=\"fa fa-trash-o\">
                                                                                                </i>
                                                                                                <span class=\"sr-only\">Supprimer</span>
                                                                                            </a>
                                                                                        ";
                }
                // line 235
                echo "                                                                                    </td>
                                                                                </tr>
                                                                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 238
                echo "                                                                                <tr>
                                                                                    <td colspan=\"10\">Aucune personne de contact</td>
                                                                                </tr>
                                                                                </tbody>
                                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "                                                                            </table>
                                                                        </div>
                                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    ";
            // line 252
            echo "                    <div class=\"row justify-content-center\">
                        <div class=\"col-11\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <div class=\"form-group\">
                                                    <h3>Conditions générales</h3>
                                                    <br>
                                                    <p>Prise en charge médicale:
                                                    ";
            // line 262
            if ((twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 262, $this->source); })()), "MedicalCare", []) == true)) {
                // line 263
                echo "                                                            <b>OUI</b>
                                                        ";
            } else {
                // line 265
                echo "                                                            <b>NON</b>
                                                    ";
            }
            // line 267
            echo "                                                    </p>
                                                    <p>Accepte le droit à l'image:
                                                        ";
            // line 269
            if ((twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 269, $this->source); })()), "ImageDiffusion", []) == true)) {
                // line 270
                echo "                                                            <b>OUI</b>
                                                        ";
            } else {
                // line 272
                echo "                                                            <b>NON</b>
                                                    ";
            }
            // line 274
            echo "                                                    </p>
                                                    <p>Accepte les conditions générales du club:
                                                        ";
            // line 276
            if ((twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 276, $this->source); })()), "ConditionRegistration", []) == true)) {
                // line 277
                echo "                                                            <b>OUI</b>
                                                        ";
            } else {
                // line 279
                echo "                                                            <b>NON</b>
                                                        ";
            }
            // line 281
            echo "                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 290
        echo "                    ";
        // line 291
        echo "                    <div class=\"row justify-content-center\">
                            <div class=\"col-11\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"form-group\">
                                            <h3>Finaliser l'inscription</h3>
                                            <br>

                ";
        // line 300
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 300, $this->source); })()), "vikaEvent", []), "easyInscription", []) == true)) {
            // line 301
            echo "                ";
        } else {
            // line 302
            echo "                                            <h6>Ajouter la photo du membre</h6>
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    ";
            // line 305
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new Twig_Error_Runtime('Variable "formPicture" does not exist.', 305, $this->source); })()), 'form_start');
            echo "
                                                    <div class=\"form-group\">
                                                        <label for=\"\">Nom de la photo:</label>
                                                        ";
            // line 308
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new Twig_Error_Runtime('Variable "formPicture" does not exist.', 308, $this->source); })()), "imageFile", []), 'widget');
            echo "
                                                        <img class=\"embed-responsive-rounded\"
                                                             src=\"";
            // line 310
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/user/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 310, $this->source); })()), "user", []), "imageName", []))), "html", null, true);
            echo "\"
                                                             alt=\"Card image\" width=\"15%\">

                                                    </div>
                                                    <button type=\"submit\" class=\"btn btn-outline-info\">
                                                        Ajouter la photo
                                                    </button>
                                                    ";
            // line 317
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new Twig_Error_Runtime('Variable "formPicture" does not exist.', 317, $this->source); })()), 'form_end');
            echo "
                                                </div>
                                            </div>
                                            <h6>Ajouter le certificat médical</h6>
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    ";
            // line 323
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAttachedFile_1"]) || array_key_exists("formAttachedFile_1", $context) ? $context["formAttachedFile_1"] : (function () { throw new Twig_Error_Runtime('Variable "formAttachedFile_1" does not exist.', 323, $this->source); })()), 'form_start');
            echo "
                                           ";
            // line 328
            echo "                                                    <div class=\"form-group\">
                                                        <label for=\"\">Description:</label>
                                                        ";
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAttachedFile_1"]) || array_key_exists("formAttachedFile_1", $context) ? $context["formAttachedFile_1"] : (function () { throw new Twig_Error_Runtime('Variable "formAttachedFile_1" does not exist.', 330, $this->source); })()), "description", []), 'widget');
            echo "
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <label for=\"\">Sélectionner la pièce-jointe:</label>
                                                        ";
            // line 334
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAttachedFile_1"]) || array_key_exists("formAttachedFile_1", $context) ? $context["formAttachedFile_1"] : (function () { throw new Twig_Error_Runtime('Variable "formAttachedFile_1" does not exist.', 334, $this->source); })()), "docFile", []), 'widget');
            echo "
                                                    </div>
                                                    <button type=\"submit\" class=\"btn btn-outline-info\">
                                                        Ajouter le document
                                                        ";
            // line 338
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAttachedFile_1"]) || array_key_exists("formAttachedFile_1", $context) ? $context["formAttachedFile_1"] : (function () { throw new Twig_Error_Runtime('Variable "formAttachedFile_1" does not exist.', 338, $this->source); })()), 'form_end');
            echo "
                                                    </button>
                                                </div>
                                            </div>
                                            <h6>Ajouter le document d'inscription</h6>
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    ";
            // line 345
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAttachedFile_2"]) || array_key_exists("formAttachedFile_2", $context) ? $context["formAttachedFile_2"] : (function () { throw new Twig_Error_Runtime('Variable "formAttachedFile_2" does not exist.', 345, $this->source); })()), 'form_start');
            echo "
                                            ";
            // line 350
            echo "                                                    <div class=\"form-group\">
                                                        <label for=\"\">Description:</label>
                                                        ";
            // line 352
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAttachedFile_2"]) || array_key_exists("formAttachedFile_2", $context) ? $context["formAttachedFile_2"] : (function () { throw new Twig_Error_Runtime('Variable "formAttachedFile_2" does not exist.', 352, $this->source); })()), "description", []), 'widget');
            echo "
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <label for=\"\">Sélectionner la pièce-jointe:</label>
                                                        ";
            // line 356
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAttachedFile_2"]) || array_key_exists("formAttachedFile_2", $context) ? $context["formAttachedFile_2"] : (function () { throw new Twig_Error_Runtime('Variable "formAttachedFile_2" does not exist.', 356, $this->source); })()), "docFile", []), 'widget');
            echo "
                                                    </div>
                                                    <button type=\"submit\" class=\"btn btn-outline-info\">
                                                        Ajouter le document
                                                        ";
            // line 360
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAttachedFile_2"]) || array_key_exists("formAttachedFile_2", $context) ? $context["formAttachedFile_2"] : (function () { throw new Twig_Error_Runtime('Variable "formAttachedFile_2" does not exist.', 360, $this->source); })()), 'form_end');
            echo "
                                                    </button>
                                                </div>
                                            </div>
                ";
        }
        // line 365
        echo "                                            <h6>Liste des modalités de payement</h6>
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    <div class=\"row\">
                                                        <div class=\"col-10\">
                                                            <div class=\"form-group\">
                                                                <table class=\"table\">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>N° de payement</th>
                                                                            <th>Modalité</th>
                                                                            <th>Montant</th>
                                                                            <th>Statut</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
        // line 381
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paiements"]) || array_key_exists("paiements", $context) ? $context["paiements"] : (function () { throw new Twig_Error_Runtime('Variable "paiements" does not exist.', 381, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
            // line 382
            echo "                                                                    <tr>
                                                                        <td>";
            // line 383
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paiement"], "id", []), "html", null, true);
            echo "</td>
                                                                        <td>";
            // line 384
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiement"], "category", []), "title", []), "html", null, true);
            echo "</td>
                                                                        <td>";
            // line 385
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paiement"], "amount", []), "html", null, true);
            echo "</td>
                                                                        ";
            // line 386
            if ((twig_get_attribute($this->env, $this->source, $context["paiement"], "isPaid", []) == true)) {
                // line 387
                echo "                                                                        <td>En ordre</td>
                                                                        ";
            } else {
                // line 389
                echo "                                                                        <td>En attente</td>
                                                                        ";
            }
            // line 391
            echo "
                                                                        <td class=\"align-middle text-right\">
                                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                                href=\"";
            // line 394
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["paiement"], "id", [])]), "html", null, true);
            echo "\">
                                                                                    <i class=\"fa fa-pencil\">
                                                                                    </i>
                                                                                    <span class=\"sr-only\">Modifier</span>
                                                                                </a>
                                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                                    href=\"";
            // line 400
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["paiement"], "id", [])]), "html", null, true);
            echo "\">
                                                                                    <i class=\"fa fa-trash-o\">
                                                                                    </i>
                                                                                    <span class=\"sr-only\">Supprimer</span>
                                                                                </a>

                                                                        </td>
                                                                    </tr>
                                                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 409
            echo "                                                                    <tr>
                                                                        <td colspan=\"10\">Aucune modalité de payement encodée</td>
                                                                    </tr>
                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 413
        echo "                                                                </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class=\"card\">
                                                        <div class=\"card-header\">
                                                                <p><b>Ajouter des payements</b></p>
                                                        </div>
                                                        <div class=\"card-body\">
                                                                    ";
        // line 425
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPaiement"]) || array_key_exists("formPaiement", $context) ? $context["formPaiement"] : (function () { throw new Twig_Error_Runtime('Variable "formPaiement" does not exist.', 425, $this->source); })()), 'form_start');
        echo "
                                                                        <div class=\"row align-items-end\">
                                                                            <div class=\"col-3\">
                                                                                <div class=\"form-group\">
                                                                                    <label for=\"\">Modalité</label>
                                                                                    ";
        // line 430
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPaiement"]) || array_key_exists("formPaiement", $context) ? $context["formPaiement"] : (function () { throw new Twig_Error_Runtime('Variable "formPaiement" does not exist.', 430, $this->source); })()), "category", []), 'widget');
        echo "
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-3\">
                                                                                <div class=\"form-group\">
                                                                                    <label for=\"\">Montant</label>
                                                                                    ";
        // line 436
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPaiement"]) || array_key_exists("formPaiement", $context) ? $context["formPaiement"] : (function () { throw new Twig_Error_Runtime('Variable "formPaiement" does not exist.', 436, $this->source); })()), "amount", []), 'widget');
        echo "
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-3\">
                                                                                <div class=\"form-group\">
                                                                                    <label for=\"\">Statut</label>
                                                                                    ";
        // line 442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPaiement"]) || array_key_exists("formPaiement", $context) ? $context["formPaiement"] : (function () { throw new Twig_Error_Runtime('Variable "formPaiement" does not exist.', 442, $this->source); })()), "isPaid", []), 'widget');
        echo "
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"row\">
                                                                            <div class=\"col-auto\">
                                                                                <button type=\"submit\" class=\"btn btn-outline-info\">
                                                                                    Ajouter un nouveau payement
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    ";
        // line 453
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPaiement"]) || array_key_exists("formPaiement", $context) ? $context["formPaiement"] : (function () { throw new Twig_Error_Runtime('Variable "formPaiement" does not exist.', 453, $this->source); })()), 'form_end');
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                ";
        // line 466
        echo "                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-11\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row justify-content-between\">
                                        <div class=\"col-auto\">
                                            <a class=\"btn btn-primary\"
                                                href=\"#\" role=\"button\">
                                                Supprimer l'inscription
                                            </a>
                                        </div>
                                        <div class=\"col-auto\">
                                            ";
        // line 479
        if (((isset($context["validateRegistration"]) || array_key_exists("validateRegistration", $context) ? $context["validateRegistration"] : (function () { throw new Twig_Error_Runtime('Variable "validateRegistration" does not exist.', 479, $this->source); })()) == true)) {
            // line 480
            echo "                                             <a class=\"btn btn-primary\"
                                                href=\"";
            // line 481
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_validate", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 481, $this->source); })()), "id", [])]), "html", null, true);
            echo "\" role=\"button\">
                                                ";
            // line 482
            if (((isset($context["editRegistration"]) || array_key_exists("editRegistration", $context) ? $context["editRegistration"] : (function () { throw new Twig_Error_Runtime('Variable "editRegistration" does not exist.', 482, $this->source); })()) == true)) {
                // line 483
                echo "                                                Modifier l'inscription
                                                ";
            } else {
                // line 485
                echo "                                                Valider l'inscription
                                                ";
            }
            // line 487
            echo "                                            </a>
                                            ";
        } else {
            // line 489
            echo "                                            ";
        }
        // line 490
        echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/fileRegistration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  865 => 490,  862 => 489,  858 => 487,  854 => 485,  850 => 483,  848 => 482,  844 => 481,  841 => 480,  839 => 479,  824 => 466,  809 => 453,  795 => 442,  786 => 436,  777 => 430,  769 => 425,  755 => 413,  746 => 409,  732 => 400,  723 => 394,  718 => 391,  714 => 389,  710 => 387,  708 => 386,  704 => 385,  700 => 384,  696 => 383,  693 => 382,  688 => 381,  670 => 365,  662 => 360,  655 => 356,  648 => 352,  644 => 350,  640 => 345,  630 => 338,  623 => 334,  616 => 330,  612 => 328,  608 => 323,  599 => 317,  589 => 310,  584 => 308,  578 => 305,  573 => 302,  570 => 301,  567 => 300,  557 => 291,  555 => 290,  544 => 281,  540 => 279,  536 => 277,  534 => 276,  530 => 274,  526 => 272,  522 => 270,  520 => 269,  516 => 267,  512 => 265,  508 => 263,  506 => 262,  494 => 252,  484 => 243,  474 => 238,  467 => 235,  458 => 229,  449 => 223,  446 => 222,  437 => 216,  428 => 210,  425 => 209,  423 => 208,  417 => 205,  413 => 204,  409 => 203,  405 => 202,  401 => 201,  398 => 200,  393 => 199,  371 => 179,  361 => 170,  351 => 165,  343 => 162,  340 => 161,  334 => 159,  332 => 158,  328 => 157,  324 => 156,  321 => 155,  315 => 153,  313 => 152,  309 => 151,  305 => 150,  302 => 149,  297 => 148,  275 => 128,  273 => 127,  270 => 126,  267 => 125,  257 => 116,  246 => 110,  238 => 107,  234 => 106,  231 => 105,  226 => 104,  214 => 94,  202 => 84,  198 => 83,  194 => 82,  190 => 81,  186 => 80,  182 => 79,  172 => 71,  158 => 59,  146 => 50,  140 => 49,  136 => 48,  131 => 46,  122 => 40,  113 => 33,  108 => 29,  100 => 24,  96 => 22,  88 => 17,  84 => 15,  82 => 14,  72 => 6,  63 => 5,  45 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}


{% block title %}Dossier de pré-inscription{% endblock %}
{% block Body %}

<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10\">
            <div class=\"row justify-content-between\">
                <div class=\"col-auto\">
                    <h2>Dossier de pré-inscription</h2>
                </div>
                {% if (app.user.id == registration.user.userConnected.id) %}
                <div class=\"col-auto\">
                    <a class=\"btn btn-warning\"
                        href=\"{{ path('admin_registration', {'id':registration.user.id}) }}\" role=\"button\">
                        Retour
                    </a>
                </div>
                {% else %}
                <div class=\"col-auto\">
                    <a class=\"btn btn-warning\"
                        href=\"{{ path('registration_view') }}\" role=\"button\">
                        Retour
                    </a>
                </div>
                {% endif %}
            </div>
            <div class=\"card\">
                <div class=\"container-fluid\">
                    {# INFORMATIONS GENERALES #}
                    <div class=\"row justify-content-center\">
                        <div class=\"col-11\">
                            <br>
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <h3>N°dossier: {{ registration.id }}</h3>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <br>
                                            <h6>Date de la pré-inscription: {{ registration.registrationDate |date('d/m/Y') }}</h6>
                                            <h6>Date de l'inscription: </h6>
                                            <h6>Evènement: {{ registration.vikaEvent.title }}</h6>
                                            <h6>Inscrit par : {{ registration.user.userConnected.user.name }} {{ registration.user.userConnected.user.name }}</h6>
                                            <h6>Email: {{ registration.user.userConnected.email }}</h6>
                                            <br>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <p><em>Remarque du membre:</em></p>
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    <p>{{ registration.remark }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"container-fluid\">
                    {# INFORMATIONS GENERALES #}
                    <div class=\"row justify-content-center\">
                        <div class=\"col-11\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"form-group\">
                                                <h3>Informations générales</h3>
                                                <p>Nom: {{ registration.user.name }}</p>
                                                <p>Prénom: {{ registration.user.firstname }}</p>
                                                <p>Sexe: {{ registration.user.sex }}</p>
                                                <p>Date de naissance: {{ registration.user.birthdate |date('d/m/Y') }}</p>
                                                <p>Numéro de la fédération: {{ registration.user.fedNum }}</p>
                                                <p>Grade: {{ registration.user.belt }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <div class=\"form-group\">
                                                    {# TELEPHONES #}
                                                    <h6>Numéro(s) de téléphone</h6>
                                                    <table class=\"table\">
                                                        <thead>
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>Numéro</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% for phone in registration.user.phones %}
                                                        <tr>
                                                            <td>{{ phone.type }}</td>
                                                            <td>{{ phone.num }}</td>
                                                        </tr>
                                                        {% else %}
                                                        <tr>
                                                            <td colspan=\"10\">Aucune numéro de téléphone
                                                            </td>
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
                {#INSCRIPTION SIMPLIFIEE#}
                {% if registration.vikaEvent.easyInscription == true %}
                {% else %}
                    {# ADRESSES #}
                    <div class=\"row justify-content-center\">
                        <div class=\"col-11\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                            <div class=\"col\">
                                                <div class=\"form-group\">
                                                    <h3>Adresses</h3>
                                                    <table class=\"table\">
                                                        <thead>
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>Numéro</th>
                                                            <th>Rue</th>
                                                            <th>Ville</th>
                                                            <th>Pays</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% for adress in registration.user.adress %}
                                                        <tr>
                                                            <td>{{ adress.type }}</td>
                                                            <td>{{ adress.num }}
                                                                {% if adress.postBox %}
                                                                    (BP:{{ adress.postBox }})
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
                    {#PERSONNES DE CONTACT #}
                    <div class=\"row justify-content-center\">
                            <div class=\"col-11\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                                                    <div class=\"col\">
                                                                        <div class=\"form-group\">
                                                                            <h3>Point de contact</h3>
                                                                            <table class=\"table\">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>Nom</th>
                                                                                    <th>Prénom</th>
                                                                                    <th>Numéro</th>
                                                                                    <th>Relation</th>
                                                                                    <th>Informations</th>
                                                                                    <th></th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                {% for contactList in registration.user.contactLists %}
                                                                                <tr>
                                                                                    <td>{{ contactList.personOfContact.name }}</td>
                                                                                    <td>{{ contactList.personOfContact.firstName }}</td>
                                                                                    <td>{{ contactList.personOfContact.num1 }}</td>
                                                                                    <td>{{ contactList.relation }}</td>
                                                                                    <td>{{ contactList.info }}</td>

                                                                                    <td class=\"align-middle text-right\">
                                                                                        {% if (is_granted('ROLE_ADMIN')) %}
                                                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                                            href=\"{{ path('edit_PoC_admin',{'id':registration.user.id, 'idCL':contactList.id, 'idPoC':contactList.personOfContact.id}) }}\">
                                                                                                <i class=\"fa fa-pencil\">
                                                                                                </i>
                                                                                                <span class=\"sr-only\">Modifier</span>
                                                                                            </a>
                                                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                                            href=\"{{ path('remove_PoC_admin',{'idCL':contactList.id, 'id':registration.user.id}) }}\">
                                                                                                <i class=\"fa fa-trash-o\">
                                                                                                </i>
                                                                                                <span class=\"sr-only\">Supprimer</span>
                                                                                            </a>
                                                                                        {% else %}
                                                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                                            href=\"{{ path('edit_PoC',{'id':registration.user.id, 'idCL':contactList.id, 'idPoC':contactList.personOfContact.id}) }}\">
                                                                                                <i class=\"fa fa-pencil\">
                                                                                                </i>
                                                                                                <span class=\"sr-only\">Modifier</span>
                                                                                            </a>
                                                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                                            href=\"{{ path('remove_PoC',{'idCL':contactList.id, 'id':registration.user.id}) }}\">
                                                                                                <i class=\"fa fa-trash-o\">
                                                                                                </i>
                                                                                                <span class=\"sr-only\">Supprimer</span>
                                                                                            </a>
                                                                                        {% endif %}
                                                                                    </td>
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
                    {#CONDITIONS GENERALES#}
                    <div class=\"row justify-content-center\">
                        <div class=\"col-11\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <div class=\"form-group\">
                                                    <h3>Conditions générales</h3>
                                                    <br>
                                                    <p>Prise en charge médicale:
                                                    {% if (registration.MedicalCare == true) %}
                                                            <b>OUI</b>
                                                        {% else %}
                                                            <b>NON</b>
                                                    {% endif %}
                                                    </p>
                                                    <p>Accepte le droit à l'image:
                                                        {% if (registration.ImageDiffusion == true) %}
                                                            <b>OUI</b>
                                                        {% else %}
                                                            <b>NON</b>
                                                    {% endif %}
                                                    </p>
                                                    <p>Accepte les conditions générales du club:
                                                        {% if (registration.ConditionRegistration == true) %}
                                                            <b>OUI</b>
                                                        {% else %}
                                                            <b>NON</b>
                                                        {% endif %}
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}
                    {#FINALISER INSCRIPTION#}
                    <div class=\"row justify-content-center\">
                            <div class=\"col-11\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"form-group\">
                                            <h3>Finaliser l'inscription</h3>
                                            <br>

                {#INSCRIPTION SIMPLIFIEE#}
                {% if registration.vikaEvent.easyInscription == true %}
                {% else %}
                                            <h6>Ajouter la photo du membre</h6>
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    {{ form_start(formPicture) }}
                                                    <div class=\"form-group\">
                                                        <label for=\"\">Nom de la photo:</label>
                                                        {{ form_widget(formPicture.imageFile) }}
                                                        <img class=\"embed-responsive-rounded\"
                                                             src=\"{{ asset('/upload/user/' ~ registration.user.imageName) }}\"
                                                             alt=\"Card image\" width=\"15%\">

                                                    </div>
                                                    <button type=\"submit\" class=\"btn btn-outline-info\">
                                                        Ajouter la photo
                                                    </button>
                                                    {{ form_end(formPicture) }}
                                                </div>
                                            </div>
                                            <h6>Ajouter le certificat médical</h6>
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    {{ form_start(formAttachedFile_1) }}
                                           {#         <div class=\"form-group\">
                                                        <label for=\"\">Nom du document:</label>
                                                        {{ form_widget(formAttachedFile_1.title) }}
                                                    </div>#}
                                                    <div class=\"form-group\">
                                                        <label for=\"\">Description:</label>
                                                        {{ form_widget(formAttachedFile_1.description) }}
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <label for=\"\">Sélectionner la pièce-jointe:</label>
                                                        {{ form_widget(formAttachedFile_1.docFile) }}
                                                    </div>
                                                    <button type=\"submit\" class=\"btn btn-outline-info\">
                                                        Ajouter le document
                                                        {{ form_end(formAttachedFile_1) }}
                                                    </button>
                                                </div>
                                            </div>
                                            <h6>Ajouter le document d'inscription</h6>
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    {{ form_start(formAttachedFile_2) }}
                                            {#        <div class=\"form-group\">
                                                        <label for=\"\">Nom du document:</label>
                                                        {{ form_widget(formAttachedFile_2.title) }}
                                                    </div>#}
                                                    <div class=\"form-group\">
                                                        <label for=\"\">Description:</label>
                                                        {{ form_widget(formAttachedFile_2.description) }}
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <label for=\"\">Sélectionner la pièce-jointe:</label>
                                                        {{ form_widget(formAttachedFile_2.docFile) }}
                                                    </div>
                                                    <button type=\"submit\" class=\"btn btn-outline-info\">
                                                        Ajouter le document
                                                        {{ form_end(formAttachedFile_2) }}
                                                    </button>
                                                </div>
                                            </div>
                {% endif %}
                                            <h6>Liste des modalités de payement</h6>
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    <div class=\"row\">
                                                        <div class=\"col-10\">
                                                            <div class=\"form-group\">
                                                                <table class=\"table\">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>N° de payement</th>
                                                                            <th>Modalité</th>
                                                                            <th>Montant</th>
                                                                            <th>Statut</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% for paiement in paiements %}
                                                                    <tr>
                                                                        <td>{{ paiement.id }}</td>
                                                                        <td>{{ paiement.category.title }}</td>
                                                                        <td>{{ paiement.amount }}</td>
                                                                        {% if paiement.isPaid == true %}
                                                                        <td>En ordre</td>
                                                                        {% else %}
                                                                        <td>En attente</td>
                                                                        {% endif %}

                                                                        <td class=\"align-middle text-right\">
                                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                                href=\"{{ path('paiement_edit', {'id': paiement.id}) }}\">
                                                                                    <i class=\"fa fa-pencil\">
                                                                                    </i>
                                                                                    <span class=\"sr-only\">Modifier</span>
                                                                                </a>
                                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                                    href=\"{{ path('paiement_remove', {'id': paiement.id}) }}\">
                                                                                    <i class=\"fa fa-trash-o\">
                                                                                    </i>
                                                                                    <span class=\"sr-only\">Supprimer</span>
                                                                                </a>

                                                                        </td>
                                                                    </tr>
                                                                    {% else %}
                                                                    <tr>
                                                                        <td colspan=\"10\">Aucune modalité de payement encodée</td>
                                                                    </tr>
                                                                    {% endfor %}
                                                                </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class=\"card\">
                                                        <div class=\"card-header\">
                                                                <p><b>Ajouter des payements</b></p>
                                                        </div>
                                                        <div class=\"card-body\">
                                                                    {{ form_start(formPaiement) }}
                                                                        <div class=\"row align-items-end\">
                                                                            <div class=\"col-3\">
                                                                                <div class=\"form-group\">
                                                                                    <label for=\"\">Modalité</label>
                                                                                    {{ form_widget(formPaiement.category) }}
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-3\">
                                                                                <div class=\"form-group\">
                                                                                    <label for=\"\">Montant</label>
                                                                                    {{ form_widget(formPaiement.amount) }}
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-3\">
                                                                                <div class=\"form-group\">
                                                                                    <label for=\"\">Statut</label>
                                                                                    {{ form_widget(formPaiement.isPaid) }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class=\"row\">
                                                                            <div class=\"col-auto\">
                                                                                <button type=\"submit\" class=\"btn btn-outline-info\">
                                                                                    Ajouter un nouveau payement
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    {{ form_end(formPaiement) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                {#VALIDER L'INSCRIPTION#}
                <div class=\"container-fluid\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-11\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row justify-content-between\">
                                        <div class=\"col-auto\">
                                            <a class=\"btn btn-primary\"
                                                href=\"#\" role=\"button\">
                                                Supprimer l'inscription
                                            </a>
                                        </div>
                                        <div class=\"col-auto\">
                                            {% if (validateRegistration == true) %}
                                             <a class=\"btn btn-primary\"
                                                href=\"{{ path('registration_validate', {'id':registration.id}) }}\" role=\"button\">
                                                {% if editRegistration == true %}
                                                Modifier l'inscription
                                                {% else %}
                                                Valider l'inscription
                                                {% endif %}
                                            </a>
                                            {% else %}
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "registration/fileRegistration.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\registration\\fileRegistration.html.twig");
    }
}

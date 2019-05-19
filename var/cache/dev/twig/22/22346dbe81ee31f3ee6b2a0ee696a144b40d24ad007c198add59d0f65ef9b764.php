<?php

/* registration/confirmation.html.twig */
class __TwigTemplate_9aa4512d37ee5db4c90eecb7871452e52adb5ccf9c99b07ef4455e7e3994ff63 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/confirmation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/confirmation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/confirmation.html.twig"));

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

        echo "Résumé de votre pré-inscription";
        
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
        echo "    <div class=\"card-header\">
        <!-- .steps -->
        <div class=\"steps\" role=\"tablist\">
            <ul>
                <li class=\"step\" data-target=\"#test-l-1\">
                    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_member_lesson", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->source); })()), "userconnected", []), "id", []), "idevent" => twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 11, $this->source); })()), "id", [])]), "html", null, true);
        echo "\" class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-people\"></i></span>
                        <span class=\"d-none d-sm-inline\">Ma famille</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-2\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-person \"></i></span>
                        <span class=\"d-none d-sm-inline\">Informations du participant</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-3\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-script\"></i></span>
                        <span class=\"d-none d-sm-inline\">Conditions Générales</span>
                    </a>
                </li>
                <li class=\"active\" data-target=\"#test-l-4\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-check\"></i></span>
                        <span class=\"d-none d-sm-inline\">Résumé</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.steps -->
    </div>
    <div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
    <div class=\"col-md-10\">
        <div class=\"row justify-content-between\">
            <div class=\"col-auto\">
                <h2>Résumé de votre pré-inscription</h2>
            </div>

        </div>
        <div class=\"card\">
            <div class=\"container-fluid\">
                ";
        // line 50
        echo "                <div class=\"row justify-content-center\">
                    <div class=\"col-11\">
                        <br>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h3>N°dossier: ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 57, $this->source); })()), "id", []), "html", null, true);
        echo "</h3>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <br>
                                        <h6>Statut:
                                            En cours
                                        </h6>
                                        <h6>Date de la pré-inscription: ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "</h6>
                                        <h6>Date de l'inscription: </h6>
                                        <h6>Evènement: ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 68, $this->source); })()), "vikaEvent", []), "title", []), "html", null, true);
        echo "</h6>
                                        <h6>Inscrit par : ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 69, $this->source); })()), "user", []), "userConnected", []), "user", []), "name", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 69, $this->source); })()), "user", []), "userConnected", []), "user", []), "firstname", []), "html", null, true);
        echo "</h6>
                                        <h6>Email: ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 70, $this->source); })()), "user", []), "userConnected", []), "email", []), "html", null, true);
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
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 79, $this->source); })()), "remark", []), "html", null, true);
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
        // line 91
        echo "                <div class=\"row justify-content-center\">
                    <div class=\"col-11\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            <h3>Informations générales</h3>
                                            <p>Nom: ";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 99, $this->source); })()), "user", []), "name", []), "html", null, true);
        echo "</p>
                                            <p>Prénom: ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 100, $this->source); })()), "user", []), "firstname", []), "html", null, true);
        echo "</p>
                                            <p>Sexe: ";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 101, $this->source); })()), "user", []), "sex", []), "html", null, true);
        echo "</p>
                                            <p>Date de naissance: ";
        // line 102
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 102, $this->source); })()), "user", []), "birthdate", []), "d/m/Y"), "html", null, true);
        echo "</p>
                                            <p>Numéro de la fédération: ";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 103, $this->source); })()), "user", []), "fedNum", []), "html", null, true);
        echo "</p>
                                            <p>Grade: ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 104, $this->source); })()), "user", []), "belt", []), "html", null, true);
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
        // line 114
        echo "                                            <h6>Numéro(s) de téléphone</h6>
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
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 124, $this->source); })()), "user", []), "phones", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 125
            echo "                                                <tr>
                                                    <td>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "type", []), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "num", []), "html", null, true);
            echo "</td>
                                                </tr>
                                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 130
            echo "                                                <tr>
                                                    <td colspan=\"10\">Aucune numéro de téléphone
                                                    </td>
                                                </tr>
                                                </tbody>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 145
        echo "                <div class=\"row justify-content-center\">
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
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 165, $this->source); })()), "user", []), "adress", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["adress"]) {
            // line 166
            echo "                                                <tr>
                                                    <td>";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "type", []), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "num", []), "html", null, true);
            echo "
                                                        ";
            // line 169
            if (twig_get_attribute($this->env, $this->source, $context["adress"], "postBox", [])) {
                // line 170
                echo "                                                            (BP:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "postBox", []), "html", null, true);
                echo ")
                                                        ";
            }
            // line 172
            echo "                                                    </td>
                                                    <td>";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "streetName", []), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "cityName", []), "html", null, true);
            echo "
                                                        ";
            // line 175
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "zip", [])) {
                // line 176
                echo "                                                            (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "zip", []), "html", null, true);
                echo ")
                                                        ";
            }
            // line 178
            echo "                                                    </td>
                                                    <td>";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "country", []), "countryName", []), "html", null, true);
            echo "</td>
                                                </tr>
                                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 182
            echo "                                                <tr>
                                                    <td colspan=\"10\">Aucune adresse</td>
                                                </tr>
                                                </tbody>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adress'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 196
        echo "                <div class=\"row justify-content-center\">
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
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 216, $this->source); })()), "user", []), "contactLists", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contactList"]) {
            // line 217
            echo "                                                <tr>
                                                    <td>";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "name", []), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "firstName", []), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "num1", []), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactList"], "relation", []), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactList"], "info", []), "html", null, true);
            echo "</td>

                                                </tr>
                                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 226
            echo "                                                <tr>
                                                    <td colspan=\"10\">Aucune personne de contact</td>
                                                </tr>
                                                </tbody>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 240
        echo "                <div class=\"row justify-content-center\">
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
        // line 250
        if (("medicalCare" == true)) {
            // line 251
            echo "                                                    <b>OUI</b>
                                                ";
        } else {
            // line 253
            echo "                                                    <b>NON</b>
                                                ";
        }
        // line 255
        echo "                                            </p>
                                            <p>Accepte le droit à l'image:
                                                ";
        // line 257
        if (("ImageDiffusion" == true)) {
            // line 258
            echo "                                                    <b>OUI</b>
                                                ";
        } else {
            // line 260
            echo "                                                    <b>NON</b>
                                                ";
        }
        // line 262
        echo "                                            </p>
                                            <p>Accepte les conditions générales du club:
                                                ";
        // line 264
        if (("ConditionRegistration" == true)) {
            // line 265
            echo "                                                    <b>OUI</b>
                                                ";
        } else {
            // line 267
            echo "                                                    <b>NON</b>
                                                ";
        }
        // line 269
        echo "                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 279
        echo "                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"form-group\">
                            <a class=\"btn btn-outline-info\" href=\"";
        // line 282
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page", ["path" => "accueil"]);
        echo "\"> Retour à
                                l'accueil</a>
                            <a class=\"btn btn-outline-info\"
                               href=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_member_lesson", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registration"]) || array_key_exists("registration", $context) ? $context["registration"] : (function () { throw new Twig_Error_Runtime('Variable "registration" does not exist.', 285, $this->source); })()), "user", []), "userconnected", []), "id", []), "idevent" => twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 285, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">Inscrire
                                une nouvelle personne à cet événement</a>
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
        return "registration/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 285,  514 => 282,  509 => 279,  498 => 269,  494 => 267,  490 => 265,  488 => 264,  484 => 262,  480 => 260,  476 => 258,  474 => 257,  470 => 255,  466 => 253,  462 => 251,  460 => 250,  448 => 240,  438 => 231,  428 => 226,  419 => 222,  415 => 221,  411 => 220,  407 => 219,  403 => 218,  400 => 217,  395 => 216,  373 => 196,  363 => 187,  353 => 182,  345 => 179,  342 => 178,  336 => 176,  334 => 175,  330 => 174,  326 => 173,  323 => 172,  317 => 170,  315 => 169,  311 => 168,  307 => 167,  304 => 166,  299 => 165,  277 => 145,  267 => 136,  256 => 130,  248 => 127,  244 => 126,  241 => 125,  236 => 124,  224 => 114,  212 => 104,  208 => 103,  204 => 102,  200 => 101,  196 => 100,  192 => 99,  182 => 91,  168 => 79,  156 => 70,  150 => 69,  146 => 68,  141 => 66,  129 => 57,  120 => 50,  79 => 11,  72 => 6,  63 => 5,  45 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}


{% block title %}Résumé de votre pré-inscription{% endblock %}
{% block Body %}
    <div class=\"card-header\">
        <!-- .steps -->
        <div class=\"steps\" role=\"tablist\">
            <ul>
                <li class=\"step\" data-target=\"#test-l-1\">
                    <a href=\"{{ path('registration_member_lesson', {'id':user.userconnected.id, 'idevent':  idevent.id}) }}\" class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-people\"></i></span>
                        <span class=\"d-none d-sm-inline\">Ma famille</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-2\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-person \"></i></span>
                        <span class=\"d-none d-sm-inline\">Informations du participant</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-3\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-script\"></i></span>
                        <span class=\"d-none d-sm-inline\">Conditions Générales</span>
                    </a>
                </li>
                <li class=\"active\" data-target=\"#test-l-4\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-check\"></i></span>
                        <span class=\"d-none d-sm-inline\">Résumé</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.steps -->
    </div>
    <div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
    <div class=\"col-md-10\">
        <div class=\"row justify-content-between\">
            <div class=\"col-auto\">
                <h2>Résumé de votre pré-inscription</h2>
            </div>

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
                                        <h6>Statut:
                                            En cours
                                        </h6>
                                        <h6>Date de la pré-inscription: {{ \"now\"|date(\"m/d/Y\") }}</h6>
                                        <h6>Date de l'inscription: </h6>
                                        <h6>Evènement: {{ registration.vikaEvent.title }}</h6>
                                        <h6>Inscrit par : {{ registration.user.userConnected.user.name }} {{ registration.user.userConnected.user.firstname }}</h6>
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
                                                {% if 'medicalCare' == true %}
                                                    <b>OUI</b>
                                                {% else %}
                                                    <b>NON</b>
                                                {% endif %}
                                            </p>
                                            <p>Accepte le droit à l'image:
                                                {% if 'ImageDiffusion' == true %}
                                                    <b>OUI</b>
                                                {% else %}
                                                    <b>NON</b>
                                                {% endif %}
                                            </p>
                                            <p>Accepte les conditions générales du club:
                                                {% if 'ConditionRegistration' == true %}
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

                {#VALIDER L'INSCRIPTION#}
                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"form-group\">
                            <a class=\"btn btn-outline-info\" href=\"{{ path('home_page', {'path':'accueil'}) }}\"> Retour à
                                l'accueil</a>
                            <a class=\"btn btn-outline-info\"
                               href=\"{{ path('registration_member_lesson', {'id':registration.user.userconnected.id, 'idevent':  idevent.id}) }}\">Inscrire
                                une nouvelle personne à cet événement</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

{% endblock %}", "registration/confirmation.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\registration\\confirmation.html.twig");
    }
}

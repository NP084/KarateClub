<?php

/* registration/preregistrationSummary.html.twig */
class __TwigTemplate_4c29b18de5b279eac450ffdf6eb0a6ad214f25def234d0b096dc531f5d85b06c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/preregistrationSummary.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/preregistrationSummary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/preregistrationSummary.html.twig"));

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
        echo "
    <!-- .card-header -->
    <div class=\"card-header\">
        <!-- .steps -->
        <div class=\"steps\" role=\"tablist\">
            <ul>
                <li class=\"step\" data-target=\"#test-l-1\">
                    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_member_lesson", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->source); })()), "userConnected", []), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 11, $this->source); })())]), "html", null, true);
        echo "\"
                       class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-people\"></i></span>
                        <span class=\"d-none d-sm-inline\">Ma famille</span>
                    </a>
                </li>
                <li class=\"active\" data-target=\"#test-l-2\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-person \"></i></span>
                        <span class=\"d-none d-sm-inline\">Informations du participant</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-3\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#error1\" class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-script\"></i></span>
                        <span class=\"d-none d-sm-inline\">Conditions Générales</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-4\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#error1\" class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-check\"></i></span>
                        <span class=\"d-none d-sm-inline\">Résumé</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.steps -->
    </div>
    ";
        // line 42
        echo "    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <h3>Résumé des informations de l'utilisateur</h3>
                <h7>
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"text-perso\">Veuillez svp vérifier l'exactitude de vos données personnelles, et dans le cas contraire,  les mettre à jour dans le formulaire ci-dessous.
                            </div>
                        </div>
                        <div class=\"col-md-1\">
                            <div class=\"form-group\">
                                <a class=\"btn btn-outline-info\"
                                   href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("condition_view_family", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 55, $this->source); })()), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 55, $this->source); })())]), "html", null, true);
        echo "\">Continuer</a>
                            </div>
                        </div>
                    </div>
                </h7>
                <h4> Informations générales : </h4>
                <div class=\"card\">
                    <div class=\"card-body\">


                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">

                                    <h6>Nom:</h6> ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 69, $this->source); })()), "name", []), "html", null, true);
        echo "
                                </div>
                                <div class=\"form-group\"><h6>Prénom:</h6> ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 71, $this->source); })()), "firstname", []), "html", null, true);
        echo "
                                </div>
                                <div class=\"form-group\">
                                    <p>  <h6>Date de naissance:</h6>
                                    ";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 75, $this->source); })()), "birthdate", []), "d/m/Y"), "html", null, true);
        echo " </p>
                                </div>
                                <div class=\"form-group\">
                                    <p> <h6>Numéro de fédération :</h6> ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 78, $this->source); })()), "fedNum", []), "html", null, true);
        echo " </p>
                                </div>
                                ";
        // line 80
        $context["diff"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, "now"), "diff", [0 => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 80, $this->source); })()), "birthdate", [])], "method");
        // line 81
        echo "                                ";
        $context["age"] = (twig_get_attribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new Twig_Error_Runtime('Variable "diff" does not exist.', 81, $this->source); })()), "days", []) / 365);
        // line 82
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 82, $this->source); })()), "belt", [])) {
            // line 83
            echo "                                    <div class=\"row\">
                                        <div class=\"col-5\">
                                            <div class=\"form-group\">
                                                <h6> Grade:</h6>
                                                <p>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 87, $this->source); })()), "belt", []), "html", null, true);
            echo "
                                                    ";
            // line 88
            if (((isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 88, $this->source); })()) < 13)) {
                // line 89
                echo "                                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 89, $this->source); })()), "bars", []), "html", null, true);
                echo " barrete(s)
                                                    ";
            }
            // line 91
            echo "                                                    reçu
                                                    le ";
            // line 92
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 92, $this->source); })()), "receiptDate", []), "d/m/Y"), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 97
        echo "                            </div>


                            <div class=\"col\">

                                <div class=\"user-avatar user-avatar-xxl fileinput-button\">
                                    <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 103, $this->source); })()), "imageFile"), "html", null, true);
        echo "\"
                                         alt=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 104, $this->source); })()), "imageFile", []), "html", null, true);
        echo "\" name=\"avatar\" width=\"150\"/>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <h4> Numéro(s) de téléphone </h4>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-5\">
                                <div class=\"form-group\">
                                    ";
        // line 121
        echo "                                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 121, $this->source); })()), "phones", [])) > 0)) {
            // line 122
            echo "                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Numéro</th>
                                                <th class=\"align-middle text-right\">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 131, $this->source); })()), "phones", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 132
                echo "                                            <tr>
                                                <td>";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "type", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "num", []), "html", null, true);
                echo "</td>
                                                <td class=\"align-middle text-right\">
                                                    ";
                // line 136
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 137
                    echo "                                                        <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                           href=\"";
                    // line 138
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_phone_admin", ["idPhone" => twig_get_attribute($this->env, $this->source, $context["phone"], "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 138, $this->source); })()), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 138, $this->source); })())]), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-trash-o\">
                                                            </i>
                                                            <span class=\"sr-only\">Supprimer</span>
                                                        </a>
                                                    ";
                } else {
                    // line 144
                    echo "                                                        <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                           href=\"";
                    // line 145
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_phone", ["idPhone" => twig_get_attribute($this->env, $this->source, $context["phone"], "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 145, $this->source); })()), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 145, $this->source); })())]), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-trash-o\">
                                                            </i>
                                                            <span class=\"sr-only\">Supprimer</span>
                                                        </a>
                                                    ";
                }
                // line 151
                echo "                                                </td>
                                            </tr>
                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 154
                echo "                                            <tr>
                                                <td colspan=\"10\">Aucun numéro de téléphone</td>
                                            </tr>
                                            </tbody>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                                        </table>
                                    ";
        } else {
            // line 161
            echo "                                        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 161, $this->source); })()), 'form_start');
            echo "
                                        ";
            // line 162
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 162, $this->source); })()), 'widget');
            echo "
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-outline-info\">
                                                Ajouter un numéro
                                            </button>
                                            ";
            // line 167
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 167, $this->source); })()), 'form_end');
            echo "
                                        </div>
                                    ";
        }
        // line 170
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4>Adresse(s)</h4>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    ";
        // line 184
        echo "                                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 184, $this->source); })()), "adress", [])) > 0)) {
            // line 185
            echo "                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Numéro</th>
                                                <th>Rue</th>
                                                <th>Ville</th>
                                                <th>Pays</th>
                                                <th class=\"align-middle text-right\">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 197, $this->source); })()), "adress", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["adress"]) {
                // line 198
                echo "                                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "type", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 199
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "num", []), "html", null, true);
                echo "
                                                ";
                // line 200
                if (twig_get_attribute($this->env, $this->source, $context["adress"], "postBox", [])) {
                    // line 201
                    echo "                                                    (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "postBox", []), "html", null, true);
                    echo ")
                                                ";
                }
                // line 203
                echo "                                            </td>
                                            <td>";
                // line 204
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "streetName", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 205
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "cityName", []), "html", null, true);
                echo "
                                                ";
                // line 206
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "zip", [])) {
                    // line 207
                    echo "                                                    (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "zip", []), "html", null, true);
                    echo ")
                                                ";
                }
                // line 209
                echo "                                            </td>
                                            <td>";
                // line 210
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "country", []), "countryName", []), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-right\">
                                                ";
                // line 212
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 213
                    echo "                                                    <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                       href=\"";
                    // line 214
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_adress_admin", ["idAdress" => twig_get_attribute($this->env, $this->source, $context["adress"], "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 214, $this->source); })()), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 214, $this->source); })())]), "html", null, true);
                    echo "\">
                                                        <i class=\"fa fa-trash-o\">
                                                        </i>
                                                        <span class=\"sr-only\">Supprimer</span>
                                                    </a>
                                                ";
                } else {
                    // line 220
                    echo "                                                    <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                       href=\"";
                    // line 221
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_adress", ["idAdress" => twig_get_attribute($this->env, $this->source, $context["adress"], "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 221, $this->source); })()), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 221, $this->source); })())]), "html", null, true);
                    echo "\">
                                                        <i class=\"fa fa-trash-o\">
                                                        </i>
                                                        <span class=\"sr-only\">Supprimer</span>
                                                    </a>
                                                ";
                }
                // line 227
                echo "                                            </td>
                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 229
                echo "                                            <tr>
                                                <td colspan=\"10\">Aucune adresse</td>
                                            </tr>
                                            </tbody>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "                                        </table>
                                    ";
        } else {
            // line 236
            echo "                                        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 236, $this->source); })()), 'form_start');
            echo "
                                        ";
            // line 237
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 237, $this->source); })()), 'widget');
            echo "
                                        ";
            // line 238
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 238, $this->source); })()), 'form_start');
            echo "
                                        ";
            // line 239
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 239, $this->source); })()), 'widget');
            echo "
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-outline-info\">
                                                Ajouter une adresse
                                            </button>
                                            ";
            // line 244
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 244, $this->source); })()), 'form_end');
            echo "
                                            ";
            // line 245
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 245, $this->source); })()), 'form_end');
            echo "
                                        </div>
                                    ";
        }
        // line 248
        echo "                                </div>
                            </div>
                            <div class=\"col-6\">

                            </div>
                        </div>
                    </div>
                </div>


                <h4>Personne(s) de contact</h4>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    ";
        // line 266
        echo "                                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 266, $this->source); })()), "contactLists", [])) > 0)) {
            // line 267
            echo "                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Numéro</th>
                                                <th>Relation</th>
                                                <th class=\"align-middle text-right\">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 278
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 278, $this->source); })()), "contactLists", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["contactList"]) {
                // line 279
                echo "                                            <tr>
                                                <td>";
                // line 280
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "name", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 281
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "firstName", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 282
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "num1", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 283
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactList"], "relation", []), "html", null, true);
                echo "</td>
                                                <td class=\"align-middle text-right\">
                                                    ";
                // line 285
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 286
                    echo "                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"";
                    // line 287
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_PoC_admin", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 287, $this->source); })()), "id", []), "idCL" => twig_get_attribute($this->env, $this->source, $context["contactList"], "id", []), "idPoC" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 287, $this->source); })())]), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-pencil\">
                                                            </i>
                                                            <span class=\"sr-only\">Modifier</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                           href=\"";
                    // line 293
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_PoC_admin", ["idCL" => twig_get_attribute($this->env, $this->source, $context["contactList"], "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 293, $this->source); })()), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 293, $this->source); })())]), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-trash-o\">
                                                            </i>
                                                            <span class=\"sr-only\">Supprimer</span>
                                                        </a>
                                                    ";
                } else {
                    // line 299
                    echo "                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"";
                    // line 300
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_PoC", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 300, $this->source); })()), "id", []), "idCL" => twig_get_attribute($this->env, $this->source, $context["contactList"], "id", []), "idPoC" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 300, $this->source); })())]), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-pencil\">
                                                            </i>
                                                            <span class=\"sr-only\">Modifier</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                           href=\"";
                    // line 306
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_PoC", ["idCL" => twig_get_attribute($this->env, $this->source, $context["contactList"], "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 306, $this->source); })()), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 306, $this->source); })())]), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-trash-o\">
                                                            </i>
                                                            <span class=\"sr-only\">Supprimer</span>
                                                        </a>
                                                    ";
                }
                // line 312
                echo "                                                </td>
                                            </tr>

                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 316
                echo "                                            <tr>
                                                <td colspan=\"10\">Aucune personne de contact</td>
                                            </tr>
                                            </tbody>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 321
            echo "                                        </table>
                                    ";
        } else {
            // line 323
            echo "                                        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 323, $this->source); })()), 'form_start');
            echo "
                                        ";
            // line 324
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 324, $this->source); })()), 'widget');
            echo "
                                        ";
            // line 325
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 325, $this->source); })()), 'form_start');
            echo "
                                        ";
            // line 326
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 326, $this->source); })()), 'widget');
            echo "
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-outline-info\">
                                                Ajouter une personne de contact
                                            </button>
                                            ";
            // line 331
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 331, $this->source); })()), 'form_end');
            echo "
                                            ";
            // line 332
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 332, $this->source); })()), 'form_end');
            echo "
                                        </div>
                                    ";
        }
        // line 335
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-outline-info\"
                   href=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("condition_view_family", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 341, $this->source); })()), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 341, $this->source); })())]), "html", null, true);
        echo "\">Continuer</a>
            </div>

        </div>
    </div>
    ";
        // line 350
        echo "
    <script type=\"text/javascript\">
        document.querySelector(\"#deleteRel\").addEventListener(\"click\", function (event) {
            if (!confirm('Veuillez confirmer la suppression svp?')) event.preventDefault();
        }, false);
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/preregistrationSummary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  641 => 350,  633 => 341,  625 => 335,  619 => 332,  615 => 331,  607 => 326,  603 => 325,  599 => 324,  594 => 323,  590 => 321,  580 => 316,  572 => 312,  563 => 306,  554 => 300,  551 => 299,  542 => 293,  533 => 287,  530 => 286,  528 => 285,  523 => 283,  519 => 282,  515 => 281,  511 => 280,  508 => 279,  503 => 278,  490 => 267,  487 => 266,  469 => 248,  463 => 245,  459 => 244,  451 => 239,  447 => 238,  443 => 237,  438 => 236,  434 => 234,  424 => 229,  418 => 227,  409 => 221,  406 => 220,  397 => 214,  394 => 213,  392 => 212,  387 => 210,  384 => 209,  378 => 207,  376 => 206,  372 => 205,  368 => 204,  365 => 203,  359 => 201,  357 => 200,  353 => 199,  348 => 198,  343 => 197,  329 => 185,  326 => 184,  312 => 170,  306 => 167,  298 => 162,  293 => 161,  289 => 159,  279 => 154,  272 => 151,  263 => 145,  260 => 144,  251 => 138,  248 => 137,  246 => 136,  241 => 134,  237 => 133,  234 => 132,  229 => 131,  218 => 122,  215 => 121,  197 => 104,  193 => 103,  185 => 97,  177 => 92,  174 => 91,  168 => 89,  166 => 88,  162 => 87,  156 => 83,  153 => 82,  150 => 81,  148 => 80,  143 => 78,  137 => 75,  130 => 71,  125 => 69,  108 => 55,  93 => 42,  62 => 11,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block Body %}

    <!-- .card-header -->
    <div class=\"card-header\">
        <!-- .steps -->
        <div class=\"steps\" role=\"tablist\">
            <ul>
                <li class=\"step\" data-target=\"#test-l-1\">
                    <a href=\"{{ path('registration_member_lesson', {'id':user.userConnected.id, 'idevent':  idevent}) }}\"
                       class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-people\"></i></span>
                        <span class=\"d-none d-sm-inline\">Ma famille</span>
                    </a>
                </li>
                <li class=\"active\" data-target=\"#test-l-2\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-person \"></i></span>
                        <span class=\"d-none d-sm-inline\">Informations du participant</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-3\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#error1\" class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-script\"></i></span>
                        <span class=\"d-none d-sm-inline\">Conditions Générales</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-4\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#error1\" class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-check\"></i></span>
                        <span class=\"d-none d-sm-inline\">Résumé</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.steps -->
    </div>
    {#
        #}{# Admin ou si la personne connectée est le parent du profil consulté #}{#
        {% if (is_granted('ROLE_ADMIN') or app.user.id == user.userConnected.id) %}#}
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <h3>Résumé des informations de l'utilisateur</h3>
                <h7>
                    <div class=\"row\">
                        <div class=\"col-md-11\">
                            <div class=\"text-perso\">Veuillez svp vérifier l'exactitude de vos données personnelles, et dans le cas contraire,  les mettre à jour dans le formulaire ci-dessous.
                            </div>
                        </div>
                        <div class=\"col-md-1\">
                            <div class=\"form-group\">
                                <a class=\"btn btn-outline-info\"
                                   href=\"{{ path('condition_view_family', {'id':user.id, 'idevent':  idevent}) }}\">Continuer</a>
                            </div>
                        </div>
                    </div>
                </h7>
                <h4> Informations générales : </h4>
                <div class=\"card\">
                    <div class=\"card-body\">


                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">

                                    <h6>Nom:</h6> {{ user.name }}
                                </div>
                                <div class=\"form-group\"><h6>Prénom:</h6> {{ user.firstname }}
                                </div>
                                <div class=\"form-group\">
                                    <p>  <h6>Date de naissance:</h6>
                                    {{ user.birthdate |date('d/m/Y') }} </p>
                                </div>
                                <div class=\"form-group\">
                                    <p> <h6>Numéro de fédération :</h6> {{ user.fedNum }} </p>
                                </div>
                                {% set diff = date(\"now\").diff(user.birthdate) %}
                                {% set age = diff.days/365 %}
                                {% if (user.belt) %}
                                    <div class=\"row\">
                                        <div class=\"col-5\">
                                            <div class=\"form-group\">
                                                <h6> Grade:</h6>
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
                            </div>


                            <div class=\"col\">

                                <div class=\"user-avatar user-avatar-xxl fileinput-button\">
                                    <img src=\"{{ vich_uploader_asset(user, 'imageFile') }}\"
                                         alt=\"{{ user.imageFile }}\" name=\"avatar\" width=\"150\"/>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <h4> Numéro(s) de téléphone </h4>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-5\">
                                <div class=\"form-group\">
                                    {#  Si au moins un numéro chez le User ou son parent, alors on l'affiche.
                                     Sinon on met le form et on associe le numéro au user (pas au parent) #}
                                    {% if ((user.phones|length > 0 )) %}
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Numéro</th>
                                                <th class=\"align-middle text-right\">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for phone in user.phones %}
                                            <tr>
                                                <td>{{ phone.type }}</td>
                                                <td>{{ phone.num }}</td>
                                                <td class=\"align-middle text-right\">
                                                    {% if (is_granted('ROLE_ADMIN')) %}
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                           href=\"{{ path('remove_phone_admin',{'idPhone':phone.id, 'id':user.id, 'idevent':idevent}) }}\">
                                                            <i class=\"fa fa-trash-o\">
                                                            </i>
                                                            <span class=\"sr-only\">Supprimer</span>
                                                        </a>
                                                    {% else %}
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                           href=\"{{ path('remove_phone',{'idPhone':phone.id, 'id':user.id, 'idevent':idevent}) }}\">
                                                            <i class=\"fa fa-trash-o\">
                                                            </i>
                                                            <span class=\"sr-only\">Supprimer</span>
                                                        </a>
                                                    {% endif %}
                                                </td>
                                            </tr>
                                            {% else %}
                                            <tr>
                                                <td colspan=\"10\">Aucun numéro de téléphone</td>
                                            </tr>
                                            </tbody>
                                            {% endfor %}
                                        </table>
                                    {% else %}
                                        {{ form_start(phoneForm) }}
                                        {{ form_widget(phoneForm) }}
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-outline-info\">
                                                Ajouter un numéro
                                            </button>
                                            {{ form_end(phoneForm) }}
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4>Adresse(s)</h4>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    {#  Si au moins une adresse chez le User ou son parent, alors on l'affiche.
                                     Sinon on met le form et on associe le numéro au user (pas au parent) #}
                                    {% if ((user.adress|length > 0 )) %}
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Numéro</th>
                                                <th>Rue</th>
                                                <th>Ville</th>
                                                <th>Pays</th>
                                                <th class=\"align-middle text-right\">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for adress in user.adress %}
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
                                            <td class=\"align-middle text-right\">
                                                {% if (is_granted('ROLE_ADMIN')) %}
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                       href=\"{{ path('remove_adress_admin',{'idAdress':adress.id, 'id':user.id, 'idevent':idevent}) }}\">
                                                        <i class=\"fa fa-trash-o\">
                                                        </i>
                                                        <span class=\"sr-only\">Supprimer</span>
                                                    </a>
                                                {% else %}
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                       href=\"{{ path('remove_adress',{'idAdress':adress.id, 'id':user.id, 'idevent':idevent}) }}\">
                                                        <i class=\"fa fa-trash-o\">
                                                        </i>
                                                        <span class=\"sr-only\">Supprimer</span>
                                                    </a>
                                                {% endif %}
                                            </td>
                                            {% else %}
                                            <tr>
                                                <td colspan=\"10\">Aucune adresse</td>
                                            </tr>
                                            </tbody>
                                            {% endfor %}
                                        </table>
                                    {% else %}
                                        {{ form_start(adressForm) }}
                                        {{ form_widget(adressForm) }}
                                        {{ form_start(cityForm) }}
                                        {{ form_widget(cityForm) }}
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-outline-info\">
                                                Ajouter une adresse
                                            </button>
                                            {{ form_end(adressForm) }}
                                            {{ form_end(cityForm) }}
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"col-6\">

                            </div>
                        </div>
                    </div>
                </div>


                <h4>Personne(s) de contact</h4>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    {#  Si au moins une PoC chez le User, alors on l'affiche.
                                     Sinon on met le form et on associe la PoC au user #}
                                    {% if (user.contactLists|length > 0) %}
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Numéro</th>
                                                <th>Relation</th>
                                                <th class=\"align-middle text-right\">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for contactList in user.contactLists %}
                                            <tr>
                                                <td>{{ contactList.personOfContact.name }}</td>
                                                <td>{{ contactList.personOfContact.firstName }}</td>
                                                <td>{{ contactList.personOfContact.num1 }}</td>
                                                <td>{{ contactList.relation }}</td>
                                                <td class=\"align-middle text-right\">
                                                    {% if (is_granted('ROLE_ADMIN')) %}
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"{{ path('edit_PoC_admin',{'id':user.id, 'idCL':contactList.id, 'idPoC':contactList.personOfContact.id, 'idevent':idevent}) }}\">
                                                            <i class=\"fa fa-pencil\">
                                                            </i>
                                                            <span class=\"sr-only\">Modifier</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                           href=\"{{ path('remove_PoC_admin',{'idCL':contactList.id, 'id':user.id, 'idevent':idevent}) }}\">
                                                            <i class=\"fa fa-trash-o\">
                                                            </i>
                                                            <span class=\"sr-only\">Supprimer</span>
                                                        </a>
                                                    {% else %}
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                           href=\"{{ path('edit_PoC',{'id':user.id, 'idCL':contactList.id, 'idPoC':contactList.personOfContact.id, 'idevent':idevent}) }}\">
                                                            <i class=\"fa fa-pencil\">
                                                            </i>
                                                            <span class=\"sr-only\">Modifier</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                           href=\"{{ path('remove_PoC',{'idCL':contactList.id, 'id':user.id, 'idevent':idevent}) }}\">
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
                                    {% else %}
                                        {{ form_start(PoCForm) }}
                                        {{ form_widget(PoCForm) }}
                                        {{ form_start(ContactListForm) }}
                                        {{ form_widget(ContactListForm) }}
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-outline-info\">
                                                Ajouter une personne de contact
                                            </button>
                                            {{ form_end(ContactListForm) }}
                                            {{ form_end(PoCForm) }}
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"btn btn-outline-info\"
                   href=\"{{ path('condition_view_family', {'id':user.id, 'idevent':  idevent}) }}\">Continuer</a>
            </div>

        </div>
    </div>
    {#
        {% else %}
            <h4> Vous n'êtes pas autorisé à accéder à cette page </h4>
        {% endif %}#}

    <script type=\"text/javascript\">
        document.querySelector(\"#deleteRel\").addEventListener(\"click\", function (event) {
            if (!confirm('Veuillez confirmer la suppression svp?')) event.preventDefault();
        }, false);
    </script>

{% endblock %}


", "registration/preregistrationSummary.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\registration\\preregistrationSummary.html.twig");
    }
}

<?php

/* registration/showPaiement.html.twig */
class __TwigTemplate_dff4c5eff1c114e725389f5ac513bcddfee46569f64fa75ae0def8620f62500d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/showPaiement.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/showPaiement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/showPaiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des payements";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 5
        echo "
    ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "
        <div class=\"container-fluid\">
            ";
            // line 10
            echo "            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <h2>Liste des payements en attente</h2>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Numéro de payement</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Nom de l'évènement</th>
                                                <th>Date de fin de l'évènement</th>
                                                <th>Modalité</th>
                                                <th>Montant</th>
                                                <th>Contrôle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 33
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paiements"]) || array_key_exists("paiements", $context) ? $context["paiements"] : (function () { throw new Twig_Error_Runtime('Variable "paiements" does not exist.', 33, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
                // line 34
                echo "                                                <tr>
                                                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiement"], "registration", []), "id", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiement"], "registration", []), "user", []), "name", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiement"], "registration", []), "user", []), "firstname", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiement"], "registration", []), "vikaEvent", []), "title", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiement"], "registration", []), "vikaEvent", []), "endDate", []), "d/m/Y"), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiement"], "category", []), "title", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paiement"], "Amount", []), "html", null, true);
                echo "</td>
                                                    
                                                    <td>
                                                        <a class=\"btn btn-outline-warning\" 
                                                            href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_validate", ["id" => twig_get_attribute($this->env, $this->source, $context["paiement"], "id", [])]), "html", null, true);
                echo "\">
                                                            <label>Payé
                                                            </label>
                                                        </a>
                                                    </td>
                                
                                                    <td class=\"align-middle text-right\">
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                        href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier_inscription", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiement"], "registration", []), "id", [])]), "html", null, true);
                echo "\">
                                                            <i class=\"oi oi-document\"></i>
                                                             <span class=\"sr-only\">Dossier d'inscription</span>
                                                         </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                        href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["paiement"], "id", [])]), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-pencil\">
                                                            </i>
                                                            <span class=\"sr-only\">Modifier</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                        href=\"";
                // line 64
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
                // line 72
                echo "                                                <tr>
                                                    <td colspan=\"10\">Aucun payement en attente</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                                            ";
            // line 77
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
            // line 87
            echo "            
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <div class=\"col-6\">
                        <div class=\"form-group\">
                            <h2>Liste des payements clôturés </h2>

                            ";
            // line 94
            if ((isset($context["allReg"]) || array_key_exists("allReg", $context) ? $context["allReg"] : (function () { throw new Twig_Error_Runtime('Variable "allReg" does not exist.', 94, $this->source); })())) {
                // line 95
                echo "                                <a id=\"allReg\" name=\"allReg\" class=\"btn btn-primary\" methods=\"GET\"
                                href=\"";
                // line 96
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_view");
                echo "\"><label>Payements clôturés liés à un évènement en cours
                                    </label>
                                </a>
                            ";
            } else {
                // line 100
                echo "                                <a id=\"allReg\" name=\"allReg\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                href=\"";
                // line 101
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_view", ["orderby" => "allReg"]);
                echo "\"><label>Historique des payements clôturés
                                    </label>
                                </a>
                            ";
            }
            // line 105
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
                                                <th>Numéro de payement</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Nom de l'évènement</th>
                                                <th>Date de fin de l'évènement</th>
                                                <th>Modalité</th>
                                                <th>Montant</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["paiementValidate"]);
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["paiementValidate"]) {
                // line 126
                echo "                                                ";
                if (((isset($context["allReg"]) || array_key_exists("allReg", $context) ? $context["allReg"] : (function () { throw new Twig_Error_Runtime('Variable "allReg" does not exist.', 126, $this->source); })()) == false)) {
                    // line 127
                    echo "                                                    ";
                    if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "registration", []), "vikaEvent", []), "endDate", []), "Y-m-d") > twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                        // line 128
                        echo "                                                        <tr>
                                                            <td>";
                        // line 129
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "id", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 130
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "registration", []), "user", []), "name", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 131
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "registration", []), "user", []), "firstname", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 132
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "registration", []), "vikaEvent", []), "title", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 133
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "registration", []), "vikaEvent", []), "endDate", []), "d/m/Y"), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 134
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "category", []), "title", []), "html", null, true);
                        echo "</td>
                                                            <td>";
                        // line 135
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "Amount", []), "html", null, true);
                        echo "</td>
                                                                
                                                            <td class=\"align-middle text-right\">
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                href=\"";
                        // line 139
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier_inscription", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "registration", []), "id", [])]), "html", null, true);
                        echo "\">
                                                                    <i class=\"oi oi-document\"></i>
                                                                    <span class=\"sr-only\">Dossier d'inscription</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                href=\"";
                        // line 144
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "id", [])]), "html", null, true);
                        echo "\">
                                                                    <i class=\"fa fa-pencil\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Modifier</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                id=\"deleteReg\"
                                                                href=\"";
                        // line 151
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "id", [])]), "html", null, true);
                        echo "\">
                                                                    <i class=\"fa fa-trash-o\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Supprimer</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    ";
                    }
                    // line 159
                    echo "                                                ";
                } else {
                    // line 160
                    echo "                                                    ";
                    if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "registration", []), "vikaEvent", []), "endDate", []), "Y-m-d") < twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                        // line 161
                        echo "                                                        <tr>
                                                                <td>";
                        // line 162
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "id", []), "html", null, true);
                        echo "</td>
                                                                <td>";
                        // line 163
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "registration", []), "user", []), "name", []), "html", null, true);
                        echo "</td>
                                                                <td>";
                        // line 164
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "registration", []), "user", []), "firstname", []), "html", null, true);
                        echo "</td>
                                                                <td>";
                        // line 165
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "registration", []), "vikaEvent", []), "title", []), "html", null, true);
                        echo "</td>
                                                                <td>";
                        // line 166
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "registration", []), "vikaEvent", []), "endDate", []), "d/m/Y"), "html", null, true);
                        echo "</td>
                                                                <td>";
                        // line 167
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "category", []), "title", []), "html", null, true);
                        echo "</td>
                                                                <td>";
                        // line 168
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "Amount", []), "html", null, true);
                        echo "</td>

                                                                <td class=\"align-middle text-right\">
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                href=\"";
                        // line 172
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier_inscription", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "registration", []), "id", [])]), "html", null, true);
                        echo "\">
                                                                    <i class=\"oi oi-document\"></i>
                                                                    <span class=\"sr-only\">Dossier d'inscription</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                href=\"";
                        // line 177
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "id", [])]), "html", null, true);
                        echo "\">
                                                                    <i class=\"fa fa-pencil\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Modifier</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                id=\"deleteReg\"
                                                                href=\"";
                        // line 184
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["paiementValidate"], "id", [])]), "html", null, true);
                        echo "\">
                                                                    <i class=\"fa fa-trash-o\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Supprimer</span>
                                                                </a>
                                                                </td>
                                                        </tr>
                                                    ";
                    }
                    // line 192
                    echo "                                                ";
                }
                // line 193
                echo "                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 194
                echo "                                                <tr>
                                                    <td colspan=\"10\">Aucun dossier d'inscription</td>
                                                </tr>
                                                ";
                // line 203
                echo "                                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiementValidate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "                                            ";
            // line 209
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
        // line 221
        echo "
    <script type=\"text/javascript\">
        document.querySelector(\"#deleteReg\").addEventListener(\"click\", function (event) {
            if (!confirm('Veuillez confirmer la suppression cette inscription svp?')) event.preventDefault();
        }, false);
    </script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/showPaiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 221,  425 => 209,  423 => 204,  417 => 203,  412 => 194,  407 => 193,  404 => 192,  393 => 184,  383 => 177,  375 => 172,  368 => 168,  364 => 167,  360 => 166,  356 => 165,  352 => 164,  348 => 163,  344 => 162,  341 => 161,  338 => 160,  335 => 159,  324 => 151,  314 => 144,  306 => 139,  299 => 135,  295 => 134,  291 => 133,  287 => 132,  283 => 131,  279 => 130,  275 => 129,  272 => 128,  269 => 127,  266 => 126,  261 => 125,  239 => 105,  232 => 101,  229 => 100,  222 => 96,  219 => 95,  217 => 94,  208 => 87,  197 => 77,  195 => 76,  186 => 72,  173 => 64,  164 => 58,  156 => 53,  145 => 45,  138 => 41,  134 => 40,  130 => 39,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  111 => 34,  105 => 33,  81 => 10,  77 => 7,  75 => 6,  72 => 5,  63 => 4,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block title %}Liste des payements{% endblock %}

{% block Body %}

    {% if (is_granted('ROLE_ADMIN')) %}

        <div class=\"container-fluid\">
            {#LISTE DES PRE-INSCRIPTIONS#}
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <h2>Liste des payements en attente</h2>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Numéro de payement</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Nom de l'évènement</th>
                                                <th>Date de fin de l'évènement</th>
                                                <th>Modalité</th>
                                                <th>Montant</th>
                                                <th>Contrôle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {#{{ form_start(formPaiementManagement) }}#}
                                            {% for paiement in paiements %}
                                                <tr>
                                                    <td>{{ paiement.registration.id }}</td>
                                                    <td>{{ paiement.registration.user.name }}</td>
                                                    <td>{{ paiement.registration.user.firstname }}</td>
                                                    <td>{{ paiement.registration.vikaEvent.title }}</td>
                                                    <td>{{ (paiement.registration.vikaEvent.endDate |date('d/m/Y')) }}</td>
                                                    <td>{{ paiement.category.title }}</td>
                                                    <td>{{ paiement.Amount }}</td>
                                                    
                                                    <td>
                                                        <a class=\"btn btn-outline-warning\" 
                                                            href=\"{{ path('paiement_validate', {'id': paiement.id}) }}\">
                                                            <label>Payé
                                                            </label>
                                                        </a>
                                                    </td>
                                
                                                    <td class=\"align-middle text-right\">
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                        href=\"{{ path('dossier_inscription', {'id': paiement.registration.id}) }}\">
                                                            <i class=\"oi oi-document\"></i>
                                                             <span class=\"sr-only\">Dossier d'inscription</span>
                                                         </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                        href=\"{{ path('paiement_edit', {'id': paiement.id}) }}\">
                                                            <i class=\"fa fa-pencil\">
                                                            </i>
                                                            <span class=\"sr-only\">Modifier</span>
                                                        </a>
                                                        <a class=\"btn btn-sm btn-icon btn-secondary\" id=\"deleteRel\"
                                                        href=\"{{ path('paiement_remove', {'id':paiement.id}) }}\">
                                                            <i class=\"fa fa-trash-o\">
                                                            </i>
                                                            <span class=\"sr-only\">Supprimer</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"10\">Aucun payement en attente</td>
                                                </tr>
                                            {% endfor %}
                                            {#{{ form_end(formPaiementManagement) }}#}
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
                            <h2>Liste des payements clôturés </h2>

                            {% if allReg %}
                                <a id=\"allReg\" name=\"allReg\" class=\"btn btn-primary\" methods=\"GET\"
                                href=\"{{ path('paiement_view') }}\"><label>Payements clôturés liés à un évènement en cours
                                    </label>
                                </a>
                            {% else %}
                                <a id=\"allReg\" name=\"allReg\" class=\"btn btn-outline-primary\" methods=\"GET\"
                                href=\"{{ path('paiement_view', {orderby:'allReg'}) }}\"><label>Historique des payements clôturés
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
                                                <th>Numéro de payement</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Nom de l'évènement</th>
                                                <th>Date de fin de l'évènement</th>
                                                <th>Modalité</th>
                                                <th>Montant</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for paiementValidate in paiementValidate %}
                                                {% if allReg == false %}
                                                    {% if  ((paiementValidate.registration.vikaEvent.endDate |date('Y-m-d')) > (\"now\"|date(\"Y-m-d\"))) %}
                                                        <tr>
                                                            <td>{{ paiementValidate.id }}</td>
                                                            <td>{{ paiementValidate.registration.user.name }}</td>
                                                            <td>{{ paiementValidate.registration.user.firstname }}</td>
                                                            <td>{{ paiementValidate.registration.vikaEvent.title }}</td>
                                                            <td>{{ (paiementValidate.registration.vikaEvent.endDate |date('d/m/Y')) }}</td>
                                                            <td>{{ paiementValidate.category.title }}</td>
                                                            <td>{{ paiementValidate.Amount }}</td>
                                                                
                                                            <td class=\"align-middle text-right\">
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                href=\"{{ path('dossier_inscription', {'id': paiementValidate.registration.id}) }}\">
                                                                    <i class=\"oi oi-document\"></i>
                                                                    <span class=\"sr-only\">Dossier d'inscription</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                href=\"{{ path('paiement_edit', {'id': paiementValidate.id}) }}\">
                                                                    <i class=\"fa fa-pencil\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Modifier</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                id=\"deleteReg\"
                                                                href=\"{{ path('paiement_remove', {'id':paiementValidate.id}) }}\">
                                                                    <i class=\"fa fa-trash-o\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Supprimer</span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    {% endif %}
                                                {% else %}
                                                    {% if  ((paiementValidate.registration.vikaEvent.endDate |date('Y-m-d')) < (\"now\"|date(\"Y-m-d\"))) %}
                                                        <tr>
                                                                <td>{{ paiementValidate.id }}</td>
                                                                <td>{{ paiementValidate.registration.user.name }}</td>
                                                                <td>{{ paiementValidate.registration.user.firstname }}</td>
                                                                <td>{{ paiementValidate.registration.vikaEvent.title }}</td>
                                                                <td>{{ (paiementValidate.registration.vikaEvent.endDate |date('d/m/Y')) }}</td>
                                                                <td>{{ paiementValidate.category.title }}</td>
                                                                <td>{{ paiementValidate.Amount }}</td>

                                                                <td class=\"align-middle text-right\">
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                href=\"{{ path('dossier_inscription', {'id': paiementValidate.registration.id}) }}\">
                                                                    <i class=\"oi oi-document\"></i>
                                                                    <span class=\"sr-only\">Dossier d'inscription</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                href=\"{{ path('paiement_edit', {'id': paiementValidate.id}) }}\">
                                                                    <i class=\"fa fa-pencil\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Modifier</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                id=\"deleteReg\"
                                                                href=\"{{ path('paiement_remove', {'id':paiementValidate.id}) }}\">
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

    <script type=\"text/javascript\">
        document.querySelector(\"#deleteReg\").addEventListener(\"click\", function (event) {
            if (!confirm('Veuillez confirmer la suppression cette inscription svp?')) event.preventDefault();
        }, false);
    </script>



{% endblock %}", "registration/showPaiement.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\registration\\showPaiement.html.twig");
    }
}

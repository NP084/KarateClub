<?php

/* vika_event/show.html.twig */
class __TwigTemplate_4d5320c30dd557a6cee8702131b4bd45cf5dbecce0bf08ac2880d9f244cc1a93 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vika_event/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika_event/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika_event/show.html.twig"));

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

        echo "Administration des activités VIKA";
        
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
                <h1> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 10, $this->source); })()), "title", []), "html", null, true);
        echo "
                    ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                           href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 13, $this->source); })()), "id", [])]), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\">
                            </i>
                            <span class=\"sr-only\">Modifier</span>
                        </a>
                    ";
        }
        // line 19
        echo "                </h1>
                <div class=\"row\">
                    ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_index");
            echo "\"
                           class=\"btn-btn-primary\">
                            <span class=\"badge badge-pill badge-warning\">Liste des activités</span>
                        </a>
                    ";
        }
        // line 27
        echo "                </div>
                <div class=\"card\">
                    <div class=\"card-body\">
                    </div>
                    ";
        // line 31
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 31, $this->source); })()), "published", []))) {
            // line 32
            echo "                        <div class=\"card-body\">
                            <h6>Evénement publique</h6>
                        </div>
                    ";
        }
        // line 36
        echo "                    ";
        // line 37
        echo "                    <div class=\"col-10 offset-2\">
                        <img class=\"embed-responsive-rounded\"
                             src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/vikaEvent/" . twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 39, $this->source); })()), "imageName", []))), "html", null, true);
        echo "\"
                             alt=\"Card image\" width=\"80%\">
                    </div>
                    ";
        // line 43
        echo "
                    <div class=\"card-body\">
                        <h6>Description</h6>
                    </div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">
                                ";
        // line 50
        echo twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 50, $this->source); })()), "info", []);
        echo "
                            </p>
                        </div>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\">
                                <h6>Titulaire de l'événement :</h6>
                            </div>
                            <div class=\"col-3\">
                                <p class=\"card-text\">
                                    ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 62, $this->source); })()), "owner", []), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\">
                                <h6>Date de début:</h6>
                            </div>
                            <div class=\"col-2\">
                                <p class=\"card-text\">
                                    ";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 73, $this->source); })()), "startDate", []), "d/m/Y H:i"), "html", null, true);
        echo "
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\">
                                <h6>Date de fin:</h6>
                            </div>
                            <div class=\"col-2\">
                                <p class=\"card-text\">
                                    ";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 85, $this->source); })()), "endDate", []), "d/m/Y H:i"), "html", null, true);
        echo "
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\">
                                <h6>Capacité :</h6>
                            </div>
                            <div class=\"col-2\">
                                <p class=\"card-text\">
                                <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 97, $this->source); })()), "capacity", []), "html", null, true);
        echo " personnes</td>
                                </p>
                            </div>
                        </div>
                    </div>


                    ";
        // line 105
        echo "                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h5>Tarif</h5>
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Public</th>
                                            <th>Prix</th>
                                            <th>Info</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 119, $this->source); })()), "priceGrid", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["priceGrid"]) {
            // line 120
            echo "                                        <tr>
                                            <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priceGrid"], "public", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priceGrid"], "price", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priceGrid"], "info", []), "html", null, true);
            echo "</td>
                                        </tr>
                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 126
            echo "                                        <tr>
                                            <td colspan=\"10\">Aucune tarification disponible</td>
                                        </tr>
                                        </tbody>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceGrid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class=\"card-footer\">
                        <div class=\"card-footer-content text-muted\">
                            <div class=\"metadata\">Diffusé le ";
        // line 141
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 141, $this->source); })()), "createdEv", []), "d/m/Y"), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>
                ";
        // line 145
        if ( !(null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 145, $this->source); })()))) {
            // line 146
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 146, $this->source); })()), "easyinscription", [])) {
                // line 147
                echo "                        <a class=\"btn btn-primary btn-md\"
                           href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_member_lesson", ["idevent" => twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 148, $this->source); })()), "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 148, $this->source); })()), "id", [])]), "html", null, true);
                echo "\"
                           role=\"button\">S'inscrire</a>
                    ";
            } else {
                // line 151
                echo "                        <div class='row'>
                        <div class=\"col-1\">
                            <a class=\"btn btn-primary btn-md\"
                               href=\"";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_member_lesson", ["idevent" => twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 154, $this->source); })()), "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 154, $this->source); })()), "id", [])]), "html", null, true);
                echo "\"
                               role=\"button\">S'inscrire</a>
                        </div>
                    ";
            }
            // line 158
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 159
                echo "                        ";
                echo twig_include($this->env, $context, "vika_event/_delete_form.html.twig");
                echo "
                    ";
            }
            // line 161
            echo "
                    </div>
                    ";
        } else {
            // line 164
            echo "                        <button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#seConnecter\">S'inscrire</button>
                ";
        }
        // line 166
        echo "
            </div>
        </div>
    </div>

    ";
        // line 197
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vika_event/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 197,  328 => 166,  324 => 164,  319 => 161,  313 => 159,  310 => 158,  303 => 154,  298 => 151,  292 => 148,  289 => 147,  286 => 146,  284 => 145,  277 => 141,  265 => 131,  255 => 126,  247 => 123,  243 => 122,  239 => 121,  236 => 120,  231 => 119,  215 => 105,  205 => 97,  190 => 85,  175 => 73,  161 => 62,  146 => 50,  137 => 43,  131 => 39,  127 => 37,  125 => 36,  119 => 32,  117 => 31,  111 => 27,  102 => 22,  100 => 21,  96 => 19,  87 => 13,  84 => 12,  82 => 11,  78 => 10,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Administration des activités VIKA{% endblock %}

{% block Body %}

    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <h1> {{ vikaEvent.title }}
                    {% if (is_granted('ROLE_ADMIN')) %}
                        <a class=\"btn btn-sm btn-icon btn-secondary\"
                           href=\"{{ path('vika_event_edit', {'id': vikaEvent.id}) }}\">
                            <i class=\"fa fa-pencil\">
                            </i>
                            <span class=\"sr-only\">Modifier</span>
                        </a>
                    {% endif %}
                </h1>
                <div class=\"row\">
                    {% if (is_granted('ROLE_ADMIN')) %}
                        <a href=\"{{ path('vika_event_index') }}\"
                           class=\"btn-btn-primary\">
                            <span class=\"badge badge-pill badge-warning\">Liste des activités</span>
                        </a>
                    {% endif %}
                </div>
                <div class=\"card\">
                    <div class=\"card-body\">
                    </div>
                    {% if (is_granted('ROLE_ADMIN') and vikaEvent.published) %}
                        <div class=\"card-body\">
                            <h6>Evénement publique</h6>
                        </div>
                    {% endif %}
                    {#                    <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">#}
                    <div class=\"col-10 offset-2\">
                        <img class=\"embed-responsive-rounded\"
                             src=\"{{ asset('/upload/vikaEvent/' ~ vikaEvent.imageName) }}\"
                             alt=\"Card image\" width=\"80%\">
                    </div>
                    {#                    </figure>#}

                    <div class=\"card-body\">
                        <h6>Description</h6>
                    </div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <p class=\"card-text\">
                                {{ vikaEvent.info|raw }}
                            </p>
                        </div>
                    </div>

                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\">
                                <h6>Titulaire de l'événement :</h6>
                            </div>
                            <div class=\"col-3\">
                                <p class=\"card-text\">
                                    {{ vikaEvent.owner }}</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\">
                                <h6>Date de début:</h6>
                            </div>
                            <div class=\"col-2\">
                                <p class=\"card-text\">
                                    {{ vikaEvent.startDate |date('d/m/Y H:i') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\">
                                <h6>Date de fin:</h6>
                            </div>
                            <div class=\"col-2\">
                                <p class=\"card-text\">
                                    {{ vikaEvent.endDate |date('d/m/Y H:i') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\">
                                <h6>Capacité :</h6>
                            </div>
                            <div class=\"col-2\">
                                <p class=\"card-text\">
                                <td>{{ vikaEvent.capacity }} personnes</td>
                                </p>
                            </div>
                        </div>
                    </div>


                    {#                   liste des prix#}
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h5>Tarif</h5>
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Public</th>
                                            <th>Prix</th>
                                            <th>Info</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for priceGrid in vikaEvent.priceGrid %}
                                        <tr>
                                            <td>{{ priceGrid.public }}</td>
                                            <td>{{ priceGrid.price }}</td>
                                            <td>{{ priceGrid.info }}</td>
                                        </tr>
                                        {% else %}
                                        <tr>
                                            <td colspan=\"10\">Aucune tarification disponible</td>
                                        </tr>
                                        </tbody>
                                        {% endfor %}
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class=\"card-footer\">
                        <div class=\"card-footer-content text-muted\">
                            <div class=\"metadata\">Diffusé le {{ vikaEvent.createdEv |date('d/m/Y') }}</div>
                        </div>
                    </div>
                </div>
                {% if user is not null %}
                    {% if vikaEvent.easyinscription %}
                        <a class=\"btn btn-primary btn-md\"
                           href=\"{{ path('registration_member_lesson', {'idevent':vikaEvent.id, 'id':user.id}) }}\"
                           role=\"button\">S'inscrire</a>
                    {% else %}
                        <div class='row'>
                        <div class=\"col-1\">
                            <a class=\"btn btn-primary btn-md\"
                               href=\"{{ path('registration_member_lesson', {'idevent':vikaEvent.id, 'id':user.id}) }}\"
                               role=\"button\">S'inscrire</a>
                        </div>
                    {% endif %}
                    {% if (is_granted('ROLE_ADMIN')) %}
                        {{ include('vika_event/_delete_form.html.twig') }}
                    {% endif %}

                    </div>
                    {% else %}
                        <button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#seConnecter\">S'inscrire</button>
                {% endif %}

            </div>
        </div>
    </div>

    {#<table class=\"table\">
        <tbody>
            <tr>
                {% if (is_granted('ROLE_ADMIN')) %}
                <th>Id</th>
                <td>{{ vika_event.id }}</td>
                {% endif %}
            </tr>
            <tr>
                <th>Titulaire de l'événement</th>
                <td>{{ vika_event.owner }}</td>
            </tr>



            <tr>
                <th>StartDate</th>
                <td>{{ vika_event.startDate ? vika_event.startDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>EndDate</th>
                <td>{{ vika_event.endDate ? vika_event.endDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>
#}




{% endblock %}
", "vika_event/show.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\vika_event\\show.html.twig");
    }
}

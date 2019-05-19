<?php

/* OutilsTemplates/ContactClub.html.twig */
class __TwigTemplate_9c1d7711255546ee700c2288cadf381d6a7f92cdbb46ab69bb65b71c0e8f5379 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OutilsTemplates/ContactClub.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/ContactClub.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/ContactClub.html.twig"));

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
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->source); })()), "userConnected", []), "id", []))) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "request", []), "get", [0 => "id"], "method")))) {
            // line 5
            echo "        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    ";
            // line 8
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "user", []), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "request", []), "get", [0 => "id"], "method")))) {
                // line 9
                echo "                        <h2>Editer les contacts</h2>
                    ";
            }
            // line 11
            echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Téléphone</th>
                                                <th>Email</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new Twig_Error_Runtime('Variable "contacts" does not exist.', 26, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 27
                echo "                                                <tr>
                                                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "name", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "firstName", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "num", []), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", []), "html", null, true);
                echo "</td>
                                                    ";
                // line 32
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 33
                    echo "                                                        <td class=\"align-middle text-right\">
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_admin_contact", ["idContact" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [])]), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-pencil\">
                                                                </i>
                                                                <span class=\"sr-only\">Modifier</span>
                                                            </a>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_admin_contact", ["idContact" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [])]), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-trash-o\">
                                                                </i>
                                                                <span class=\"sr-only\">Supprimer</span>
                                                            </a>
                                                        </td>
                                                    ";
                }
                // line 48
                echo "                                                </tr>
                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 50
                echo "                                                <tr>
                                                    <td colspan=\"10\">Aucun document</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            // line 61
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 62
                echo "                        <a class=\"btn btn-primary\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_admin_contact");
                echo "\"
                           class=\"btn-btn-primary\">
                            <b>Nouveau contact</b>
                        </a>
                    ";
            }
            // line 67
            echo "                </div>
            </div>
        </div>
    ";
        } else {
            // line 71
            echo "        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "OutilsTemplates/ContactClub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 71,  168 => 67,  159 => 62,  157 => 61,  148 => 54,  139 => 50,  133 => 48,  123 => 41,  114 => 35,  110 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  89 => 27,  84 => 26,  67 => 11,  63 => 9,  61 => 8,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block Body %}
    {% if (is_granted('ROLE_ADMIN') or app.user.id == user.userConnected.id or app.user.id == app.request.get(\"id\")) %}
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">
                    {% if (is_granted('ROLE_ADMIN') or app.user.user.id == app.request.get(\"id\")) %}
                        <h2>Editer les contacts</h2>
                    {% endif %}
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
                                                <th>Téléphone</th>
                                                <th>Email</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for contact in contacts %}
                                                <tr>
                                                    <td>{{ contact.name }}</td>
                                                    <td>{{ contact.firstName }}</td>
                                                    <td>{{ contact.num }}</td>
                                                    <td>{{ contact.email }}</td>
                                                    {% if (is_granted('ROLE_ADMIN')) %}
                                                        <td class=\"align-middle text-right\">
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('edit_admin_contact', {'idContact': contact.id}) }}\">
                                                                <i class=\"fa fa-pencil\">
                                                                </i>
                                                                <span class=\"sr-only\">Modifier</span>
                                                            </a>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('remove_admin_contact', {'idContact': contact.id}) }}\">
                                                                <i class=\"fa fa-trash-o\">
                                                                </i>
                                                                <span class=\"sr-only\">Supprimer</span>
                                                            </a>
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
                        <a class=\"btn btn-primary\" href=\"{{ path('new_admin_contact') }}\"
                           class=\"btn-btn-primary\">
                            <b>Nouveau contact</b>
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>
    {% else %}
        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    {% endif %}
{% endblock %}
", "OutilsTemplates/ContactClub.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\OutilsTemplates\\ContactClub.html.twig");
    }
}

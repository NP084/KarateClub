<?php

/* member/editPersonOfContact.html.twig */
class __TwigTemplate_be2929caf611f2af7a26060a3cd53e3c1188016c301d85440318b92bf3cb7951 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/editPersonOfContact.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/editPersonOfContact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/editPersonOfContact.html.twig"));

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
            echo "
        ";
            // line 8
            echo "        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <h2> Modification d'une personne de contact </h2>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        Nom: ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contactList"]) || array_key_exists("contactList", $context) ? $context["contactList"] : (function () { throw new Twig_Error_Runtime('Variable "contactList" does not exist.', 17, $this->source); })()), "personOfContact", []), "name", []), "html", null, true);
            echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        Prénom : ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contactList"]) || array_key_exists("contactList", $context) ? $context["contactList"] : (function () { throw new Twig_Error_Runtime('Variable "contactList" does not exist.', 24, $this->source); })()), "personOfContact", []), "firstName", []), "html", null, true);
            echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        Numéro : ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contactList"]) || array_key_exists("contactList", $context) ? $context["contactList"] : (function () { throw new Twig_Error_Runtime('Variable "contactList" does not exist.', 31, $this->source); })()), "personOfContact", []), "num1", []), "html", null, true);
            echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 38, $this->source); })()), 'form_start');
            echo "
                                        ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 39, $this->source); })()), "relation", []), 'label', ["label" => "Relation (parent, amis,...)"]);
            // line 40
            echo "
                                        ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 41, $this->source); })()), "relation", []), 'widget');
            echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 48, $this->source); })()), "info", []), 'label', ["label" => "Information complémentaire"]);
            // line 49
            echo "
                                        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 50, $this->source); })()), "info", []), 'widget', ["attr" => ["rows" => "4"]]);
            // line 51
            echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-outline-info\">
                                            Enregistrer modification(s)
                                        </button>
                                        ";
            // line 61
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 61, $this->source); })()), 'form_end');
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            // line 68
            echo "                    ";
            if ((isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 68, $this->source); })())) {
                // line 69
                echo "                        <a class=\"btn btn-warning\"
                           href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preregistration_summary", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contactList"]) || array_key_exists("contactList", $context) ? $context["contactList"] : (function () { throw new Twig_Error_Runtime('Variable "contactList" does not exist.', 70, $this->source); })()), "user", []), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 70, $this->source); })())]), "html", null, true);
                echo "\">
                            <b>Retour</b>
                        </a>
                    ";
            } else {
                // line 74
                echo "
                        ";
                // line 75
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 76
                    echo "                            <a class=\"btn btn-warning\"
                               href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contactList"]) || array_key_exists("contactList", $context) ? $context["contactList"] : (function () { throw new Twig_Error_Runtime('Variable "contactList" does not exist.', 77, $this->source); })()), "user", []), "id", [])]), "html", null, true);
                    echo "\">
                                <b>Retour</b>
                            </a>
                        ";
                } else {
                    // line 81
                    echo "                            <a class=\"btn btn-warning\"
                               href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contactList"]) || array_key_exists("contactList", $context) ? $context["contactList"] : (function () { throw new Twig_Error_Runtime('Variable "contactList" does not exist.', 82, $this->source); })()), "user", []), "id", [])]), "html", null, true);
                    echo "\">
                                <b>Retour</b>
                            </a>
                        ";
                }
                // line 86
                echo "                    ";
            }
            // line 87
            echo "                </div>
            </div>
        </div>

    ";
        } else {
            // line 92
            echo "        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    ";
        }
        // line 94
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/editPersonOfContact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 94,  197 => 92,  190 => 87,  187 => 86,  180 => 82,  177 => 81,  170 => 77,  167 => 76,  165 => 75,  162 => 74,  155 => 70,  152 => 69,  149 => 68,  140 => 61,  128 => 51,  126 => 50,  123 => 49,  121 => 48,  111 => 41,  108 => 40,  106 => 39,  102 => 38,  92 => 31,  82 => 24,  72 => 17,  61 => 8,  58 => 6,  55 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block Body %}
    {# Admin ou si la personne connectée est le parent du profil consulté #}
    {% if (is_granted('ROLE_ADMIN') or app.user.id == user.userConnected.id) %}

        {#Affiche personnes de contact#}
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-10\">
                    <h2> Modification d'une personne de contact </h2>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        Nom: {{ contactList.personOfContact.name }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        Prénom : {{ contactList.personOfContact.firstName }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        Numéro : {{ contactList.personOfContact.num1 }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        {{ form_start(ContactListForm) }}
                                        {{ (form_label(ContactListForm.relation,
                                            'Relation (parent, amis,...)') ) }}
                                        {{ (form_widget(ContactListForm.relation) ) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        {{ (form_label(ContactListForm.info,
                                            'Information complémentaire') ) }}
                                        {{ (form_widget(ContactListForm.info,
                                            { 'attr': {'rows' : '4' }} ) ) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <button type=\"submit\" class=\"btn btn-outline-info\">
                                            Enregistrer modification(s)
                                        </button>
                                        {{ form_end(ContactListForm) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {# Gestion du btn retour : si idevent => retour à la preview avant confirmation d'une inscription à un événement#}
                    {% if (idevent) %}
                        <a class=\"btn btn-warning\"
                           href=\"{{ path('preregistration_summary',{'id':contactList.user.id, 'idevent':idevent}) }}\">
                            <b>Retour</b>
                        </a>
                    {% else %}

                        {% if (is_granted('ROLE_ADMIN')) %}
                            <a class=\"btn btn-warning\"
                               href=\"{{ path('admin_edit',{'id':contactList.user.id}) }}\">
                                <b>Retour</b>
                            </a>
                        {% else %}
                            <a class=\"btn btn-warning\"
                               href=\"{{ path('profile_edit',{'id':contactList.user.id}) }}\">
                                <b>Retour</b>
                            </a>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
        </div>

    {% else %}
        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    {% endif %}

{% endblock %}", "member/editPersonOfContact.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\member\\editPersonOfContact.html.twig");
    }
}

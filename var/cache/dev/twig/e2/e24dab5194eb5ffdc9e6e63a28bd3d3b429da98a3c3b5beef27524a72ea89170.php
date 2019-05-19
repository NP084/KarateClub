<?php

/* member/documentEdit.html.twig */
class __TwigTemplate_41690bbe9f30d0e1e88a98a787d50c65035d6f62c0fd57a9882715e3a9be2c69 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/documentEdit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/documentEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/documentEdit.html.twig"));

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
            echo "
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h2>
                    ";
            // line 10
            if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 10, $this->source); })())) {
                // line 11
                echo "                        Modification d'un document
                    ";
            } else {
                // line 13
                echo "                        Ajouter un nouveau document
                    ";
            }
            // line 15
            echo "                </h2>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    ";
            // line 21
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new Twig_Error_Runtime('Variable "formPicture" does not exist.', 21, $this->source); })()), 'form_start');
            echo "
                                    <div class=\"form-group\">
                                        ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new Twig_Error_Runtime('Variable "formPicture" does not exist.', 23, $this->source); })()), "docFile", []), 'widget');
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new Twig_Error_Runtime('Variable "formPicture" does not exist.', 31, $this->source); })()), "title", []), 'label', ["label" => "Titre"]);
            echo "
                                    ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new Twig_Error_Runtime('Variable "formPicture" does not exist.', 32, $this->source); })()), "title", []), 'widget');
            echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new Twig_Error_Runtime('Variable "formPicture" does not exist.', 39, $this->source); })()), "description", []), 'label', ["label" => "Description"]);
            echo "
                                    ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new Twig_Error_Runtime('Variable "formPicture" does not exist.', 40, $this->source); })()), "description", []), 'widget', ["attr" => ["rows" => "4"]]);
            // line 41
            echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-outline-info\">
                                        ";
            // line 49
            if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 49, $this->source); })())) {
                // line 50
                echo "                                            Enregistrer modification
                                        ";
            } else {
                // line 52
                echo "                                            Ajouter le document
                                        ";
            }
            // line 54
            echo "                                    </button>
                                    ";
            // line 55
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new Twig_Error_Runtime('Variable "formPicture" does not exist.', 55, $this->source); })()), 'form_end');
            echo "
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
            // line 66
            echo "    <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    ";
        }
        // line 68
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/documentEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 68,  154 => 66,  140 => 55,  137 => 54,  133 => 52,  129 => 50,  127 => 49,  117 => 41,  115 => 40,  111 => 39,  101 => 32,  97 => 31,  86 => 23,  81 => 21,  73 => 15,  69 => 13,  65 => 11,  63 => 10,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%}

{% block Body %}
    {% if (is_granted('ROLE_ADMIN') or app.user.id == user.userConnected.id or app.user.id == app.request.get(\"id\")) %}

    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h2>
                    {%if editMode %}
                        Modification d'un document
                    {% else %}
                        Ajouter un nouveau document
                    {% endif %}
                </h2>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    {{ form_start(formPicture) }}
                                    <div class=\"form-group\">
                                        {{ form_widget(formPicture.docFile) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    {{ form_label(formPicture.title, 'Titre') }}
                                    {{ form_widget(formPicture.title) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    {{ form_label(formPicture.description, 'Description') }}
                                    {{ form_widget(formPicture.description,  { 'attr': {
                                        'rows' : '4' }} ) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-outline-info\">
                                        {%if editMode %}
                                            Enregistrer modification
                                        {% else %}
                                            Ajouter le document
                                        {% endif %}
                                    </button>
                                    {{ form_end(formPicture) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% else %}
    <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    {% endif %}

{% endblock %}
", "member/documentEdit.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\member\\documentEdit.html.twig");
    }
}

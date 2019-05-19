<?php

/* admin_vika/pictureEdit.html.twig */
class __TwigTemplate_e8df330e336f53206db53f187084fe04d0db037b0608c1fe5c549b7945c1a298 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin_vika/pictureEdit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_vika/pictureEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_vika/pictureEdit.html.twig"));

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
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
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
                echo "                        Modification de la photo de profil
                    ";
            } else {
                // line 13
                echo "                        Ajouter une photo de profil
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
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new Twig_Error_Runtime('Variable "formPicture" does not exist.', 24, $this->source); })()), "imageFile", []), 'widget');
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-outline-info\">
                                        ";
            // line 33
            if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 33, $this->source); })())) {
                // line 34
                echo "                                            Enregister modification
                                        ";
            } else {
                // line 36
                echo "                                            Ajouter la photo
                                        ";
            }
            // line 38
            echo "                                    </button>
                                    ";
            // line 39
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPicture"]) || array_key_exists("formPicture", $context) ? $context["formPicture"] : (function () { throw new Twig_Error_Runtime('Variable "formPicture" does not exist.', 39, $this->source); })()), 'form_end');
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
            // line 50
            echo "    <p>Vous n'êtes pas autorisé à accéder à cette page</p>
    ";
        }
        // line 52
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_vika/pictureEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 52,  126 => 50,  112 => 39,  109 => 38,  105 => 36,  101 => 34,  99 => 33,  87 => 24,  81 => 21,  73 => 15,  69 => 13,  65 => 11,  63 => 10,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%}

{% block Body %}
    {% if (is_granted('ROLE_ADMIN')) %}

    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h2>
                    {%if editMode %}
                        Modification de la photo de profil
                    {% else %}
                        Ajouter une photo de profil
                    {% endif %}
                </h2>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    {{ form_start(formPicture) }}

                                    <div class=\"form-group\">
                                        {{ form_widget(formPicture.imageFile) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-outline-info\">
                                        {%if editMode %}
                                            Enregister modification
                                        {% else %}
                                            Ajouter la photo
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
", "admin_vika/pictureEdit.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\admin_vika\\pictureEdit.html.twig");
    }
}

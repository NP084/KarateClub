<?php

/* security/registration.html.twig */
class __TwigTemplate_764e892d33feaef09e5c364f8d9995fca8958069ee32bb78f4cf3585e85371bf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "user", [])) {
            // line 5
            echo "
    <p>Vous êtes déjà inscrit</p>
    <a href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\" class=\"btn btn-secondary btn-md active\" role=\"button\" aria-pressed=\"true\">Déconnexion?</a>
    ";
        } else {
            // line 9
            echo "    <h1>Inscription sur le site</h1>

    ";
            // line 11
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formReg"]) || array_key_exists("formReg", $context) ? $context["formReg"] : (function () { throw new Twig_Error_Runtime('Variable "formReg" does not exist.', 11, $this->source); })()), 'form_start');
            echo "
    ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 12, $this->source); })()), 'form_start');
            echo "
    ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 13, $this->source); })()), "name", []), 'row', ["label" => "Nom", "attr" => ["placeholder" => "Nom..."]]);
            echo "
    ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 14, $this->source); })()), "firstname", []), 'row', ["label" => "Prénom", "attr" => ["placeholder" => "Prénom..."]]);
            echo "
    ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReg"]) || array_key_exists("formReg", $context) ? $context["formReg"] : (function () { throw new Twig_Error_Runtime('Variable "formReg" does not exist.', 15, $this->source); })()), "email", []), 'row', ["label" => "Adresse email", "attr" => ["placeholder" => "Adresse email..."]]);
            echo "
    ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 16, $this->source); })()), "birthdate", []), 'row', ["label" => "Date de naissance", "attr" => ["placeholder" => "Date de naissance..."]]);
            echo "
    ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReg"]) || array_key_exists("formReg", $context) ? $context["formReg"] : (function () { throw new Twig_Error_Runtime('Variable "formReg" does not exist.', 17, $this->source); })()), "password", []), 'row', ["label" => "Mot de passe", "attr" => ["placeholder" => "Mot de passe..."]]);
            echo "
    ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReg"]) || array_key_exists("formReg", $context) ? $context["formReg"] : (function () { throw new Twig_Error_Runtime('Variable "formReg" does not exist.', 18, $this->source); })()), "confirm_password", []), 'row', ["label" => "Confirmez le mot de passe", "attr" => ["placeholder" => "Confirmez svp..."]]);
            echo "
    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formReg"]) || array_key_exists("formReg", $context) ? $context["formReg"] : (function () { throw new Twig_Error_Runtime('Variable "formReg" does not exist.', 19, $this->source); })()), "gdpr", []), 'row', ["label" => "En cochant, je confirme accepter les conditions GPDR !ENCORE METTRE LE LIEN", "attr" => ["placeholder" => "Confirmez svp..."]]);
            echo "


    <div id=\"aff\">
        <button type=\"submit\" id=\"affiche\" class=\"btn btn-success\">
            ";
            // line 25
            echo "            <span class=\"text-base\">Inscription!</span>
        </button>
        </br>
        </br>
        ";
            // line 30
            echo "    </div>

    ";
            // line 62
            echo "
    ";
            // line 63
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formReg"]) || array_key_exists("formReg", $context) ? $context["formReg"] : (function () { throw new Twig_Error_Runtime('Variable "formReg" does not exist.', 63, $this->source); })()), 'form_end');
            echo "
    ";
            // line 64
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 64, $this->source); })()), 'form_end');
            echo "

    ";
        }
        // line 67
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 67,  126 => 64,  122 => 63,  119 => 62,  115 => 30,  109 => 25,  101 => 19,  97 => 18,  93 => 17,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 9,  60 => 7,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%}

{% block Body %}
    {% if app.user %}

    <p>Vous êtes déjà inscrit</p>
    <a href=\"{{ path('security_logout') }}\" class=\"btn btn-secondary btn-md active\" role=\"button\" aria-pressed=\"true\">Déconnexion?</a>
    {% else %}
    <h1>Inscription sur le site</h1>

    {{form_start(formReg)}}
    {{form_start(formUser)}}
    {{ form_row(formUser.name, {'label': 'Nom', 'attr': {'placeholder':'Nom...'}}) }}
    {{ form_row(formUser.firstname, {'label': 'Prénom', 'attr': {'placeholder':'Prénom...'}}) }}
    {{ form_row(formReg.email, {'label': 'Adresse email', 'attr': {'placeholder':'Adresse email...'}}) }}
    {{ form_row(formUser.birthdate, {'label': 'Date de naissance', 'attr': {'placeholder':'Date de naissance...'}}) }}
    {{ form_row(formReg.password, {'label': 'Mot de passe', 'attr': {'placeholder':'Mot de passe...'}}) }}
    {{ form_row(formReg.confirm_password, {'label': 'Confirmez le mot de passe', 'attr': {'placeholder':'Confirmez svp...'}}) }}
    {{ form_row(formReg.gdpr, {'label': 'En cochant, je confirme accepter les conditions GPDR !ENCORE METTRE LE LIEN', 'attr': {'placeholder':'Confirmez svp...'}}) }}


    <div id=\"aff\">
        <button type=\"submit\" id=\"affiche\" class=\"btn btn-success\">
            {# <span class=\"text-hover\">Inscription!</span> #}
            <span class=\"text-base\">Inscription!</span>
        </button>
        </br>
        </br>
        {# <h5 class=\"text-hover2\">!Vérifiez vos données avant de confirmer votre inscription!</h5> #}
    </div>

    {#
    <style>
        .text-base{
            opacity: 1;
            }
        .text-hover{
            display: none;
            }
        .text-hover2{
            opacity: 0;
            }
        #aff:hover span.text-base{
            opacity: 0;
            }
        #affiche:hover{
            background-color: red;
            }
        #aff:hover span.text-base{
            opacity: 0;
            }
        #aff:hover span.text-hover{
            display: inherit;
            position: absolute;
            }
        #aff:hover .text-hover2{
            color: red;
            opacity: 0;
            }
       </style>
       #}

    {{ form_end(formReg) }}
    {{ form_end(formUser) }}

    {% endif %}

{% endblock %}
", "security/registration.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\security\\registration.html.twig");
    }
}

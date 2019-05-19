<?php

/* security/registered.html.twig */
class __TwigTemplate_3ba1d79152caceb1d2bea0eeac39b3840d92834fb0a3588f822f3bc2200667d4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/registered.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/registered.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/registered.html.twig"));

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
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->source); })()), "user", [])) {
            // line 5
            echo "
           <h1>Se connecter</h1>


                    <form action=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" method=\"post\">

                        <div class=\"form-group\">

                                <input type=\"email\" class=\"form-control\" id=\"fl1\" required name=\"_username\"  placeholder=\"Adresse E-mail\">

                        </div>


";
            // line 21
            echo "                        <div class=\"form-group\">

                            <input type=\"password\" class=\"form-control\"  id=\"lbl5\" required name=\"_password\"  placeholder=\"Mot de Passe\">
                            <label class=\"d-flex justify-content-between\" for=\"lbl5\">
                                <div class=\"custom-control custom-checkbox\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"ckb7\" name=\"_remember_me\">
                                    <label class=\"custom-control-label\" for=\"ckb7\" >Rester connecté</label>
                                </div>

                                <a href=\"#lbl5\" data-toggle=\"password\"><i class=\"fa fa-eye fa-fw\"></i> <span>Afficher</span></a>
                            </label>
                        </div>
";
            // line 36
            echo "
                        <div class=\"form_group\">
                            <button type=\"submit\" class=\"btn btn-secondary\">Connexion</button>

                            <a href=\"/inscription\" target=\"_self\"><input type=\"button\" class=\"btn btn-light\" value=\"Créer un compte\"></a>


                            <p class=\"text-right\">
                                <a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgotten_password");
            echo "\" target=\"_self\" class=\"btn btn-link\" >Mot de passe oublié</a></p>
                        </div>
                        <div class=\"modal-footer\">

                        </div>
                    </form>
    ";
        } else {
            // line 51
            echo "        <div align=\"center\">
            <div class=\"col-lg-4\" >
                <div class=\"alert alert-success alert-dismissible fade show\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
";
            // line 56
            echo "                    Vous êtes déjà connecté.   <a class=\"alert-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page", ["path" => "accueil"]);
            echo "\" > Revenir sur la page d'accueil</a>.
                </div>
            </div>
        </div>

    ";
        }
        // line 62
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 62,  114 => 56,  108 => 51,  98 => 44,  88 => 36,  74 => 21,  62 => 9,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%}

{% block Body %}
    {% if not app.user%}

           <h1>Se connecter</h1>


                    <form action=\"{{ path('security_login') }}\" method=\"post\">

                        <div class=\"form-group\">

                                <input type=\"email\" class=\"form-control\" id=\"fl1\" required name=\"_username\"  placeholder=\"Adresse E-mail\">

                        </div>


{#                        <div class=\"form_group\">#}
{#                            <input placeholder=\"Adresse email...\" required name=\"_username\" type=\"text\" class=\"form-control\">#}
{#                        </div>#}
                        <div class=\"form-group\">

                            <input type=\"password\" class=\"form-control\"  id=\"lbl5\" required name=\"_password\"  placeholder=\"Mot de Passe\">
                            <label class=\"d-flex justify-content-between\" for=\"lbl5\">
                                <div class=\"custom-control custom-checkbox\">
                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"ckb7\" name=\"_remember_me\">
                                    <label class=\"custom-control-label\" for=\"ckb7\" >Rester connecté</label>
                                </div>

                                <a href=\"#lbl5\" data-toggle=\"password\"><i class=\"fa fa-eye fa-fw\"></i> <span>Afficher</span></a>
                            </label>
                        </div>
{#                        <div class=\"form_group\">#}
{#                            <input placeholder=\"Mot de passe\" required name=\"_password\" type=\"password\" class=\"form-control\">#}
{#                        </div>#}

                        <div class=\"form_group\">
                            <button type=\"submit\" class=\"btn btn-secondary\">Connexion</button>

                            <a href=\"/inscription\" target=\"_self\"><input type=\"button\" class=\"btn btn-light\" value=\"Créer un compte\"></a>


                            <p class=\"text-right\">
                                <a href=\"{{ path('app_forgotten_password') }}\" target=\"_self\" class=\"btn btn-link\" >Mot de passe oublié</a></p>
                        </div>
                        <div class=\"modal-footer\">

                        </div>
                    </form>
    {% else %}
        <div align=\"center\">
            <div class=\"col-lg-4\" >
                <div class=\"alert alert-success alert-dismissible fade show\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
{#                    Vous êtes déjà connecté.  <a href=\"{{ path('home_page'), {'path':'accueil'} }}\" class=\"alert-link\">Revenir sur la page d'accueil</a>.#}
                    Vous êtes déjà connecté.   <a class=\"alert-link\" href=\"{{ path('home_page', {'path':'accueil'}) }}\" > Revenir sur la page d'accueil</a>.
                </div>
            </div>
        </div>

    {% endif %}


{% endblock Body %}
", "security/registered.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\security\\registered.html.twig");
    }
}

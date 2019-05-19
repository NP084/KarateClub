<?php

/* security/login.html.twig */
class __TwigTemplate_d6b4c972cebf5e6a4875c935a7f99d2e8cdae287f9139a5b864425ec28e6fc8d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'Body' => [$this, 'block_Body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('Body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 4
        echo "    <div class=\"modal fade\" id=\"seConnecter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\" xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-center\">
                    <h1 class=\"modal-header\"></h1>
                        <h1 class=modal-title\">Se connecter</h1>
                </div>
                <div class=\"modal-body\">
                    <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">

                        <div class=\"form-group\">

                                <input type=\"email\" class=\"form-control\" id=\"fl1\" required name=\"_username\"  placeholder=\"Adresse E-mail\">

                        </div>


";
        // line 25
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
        // line 40
        echo "
                        <div class=\"form_group\">
                            <button type=\"submit\" class=\"btn btn-secondary\">Connexion</button>
                            <a href=\"/inscription\" target=\"_self\"><input type=\"button\" class=\"btn btn-light\" value=\"Créer un compte\"></a>


                            <p class=\"text-right\">
                                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgotten_password");
        echo "\" target=\"_self\" class=\"btn btn-link\" >Mot de passe oublié</a></p>
                        </div>
                        <div class=\"modal-footer\">

                        </div>
                    </form>
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
        return "security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 47,  89 => 40,  75 => 25,  63 => 13,  52 => 4,  34 => 3,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block Body %}
    <div class=\"modal fade\" id=\"seConnecter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\" xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header text-center\">
                    <h1 class=\"modal-header\"></h1>
                        <h1 class=modal-title\">Se connecter</h1>
                </div>
                <div class=\"modal-body\">
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
                </div>
            </div>
        </div>
    </div>
{% endblock Body %}
", "security/login.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\security\\login.html.twig");
    }
}

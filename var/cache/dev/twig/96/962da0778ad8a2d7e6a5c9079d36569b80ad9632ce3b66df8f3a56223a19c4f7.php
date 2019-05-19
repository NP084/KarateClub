<?php

/* OutilsTemplates/Header.html.twig */
class __TwigTemplate_54a48cdf85d9ff42617c46a4e5b1122ff285eac189bfd98d9b4c69a0548ba4f3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/Header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/Header.html.twig"));

        // line 1
        echo "<html>
    <header class=\"app-header app-header-dark\">
        <!-- .top-bar -->
        <div class=\"top-bar-list\">
            <!-- .top-bar-brand -->
            <div class=\"top-bar-brand bg-transparent\">
                <!-- toggle menu -->
                <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page", ["path" => "accueil"]);
        echo "\"><img src=\"Logo_Vika.png\" alt=\"\" style=\"height: 52px;width: auto;\"></a>
            </div><!-- /.top-bar-list -->

            <!-- .navbar -->
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
                <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page", ["path" => "accueil"]);
        echo "\">Accueil</a> <!-- toggle menu -->
                <button class=\"hamburger hamburger hamburger-squeeze hamburger-toggle d-lg-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor2\" aria-controls=\"navbarColor2\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"hamburger-box\"><span class=\"hamburger-inner\"></span></span></button>
                <!-- .navbar-collapse -->
                <div class=\"collapse navbar-collapse\" id=\"navbarColor2\">
                    <!-- .navbar-nav -->
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Vika<span class=\"caret\"></span></a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("VikaContent", ["path" => "Philosophie"]);
        echo "\">La philosophie</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("VikaContent", ["path" => "Bureau"]);
        echo "\">Membres du bureau</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("encadrement_index", ["path" => "Encadrement"]);
        echo "\">Encadrement</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_index", ["path" => "Sponsor"]);
        echo "\">Sponsors</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Activités<span class=\"caret\"></span></a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_showList", ["cat" => "all"]);
        // line 32
        echo "\">Tous les événements</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_showList", ["cat" => "Cours"]);
        echo "\">Cours</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_showList", ["cat" => "Stage"]);
        echo "\">Stages</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_showList", ["cat" => "Compétition"]);
        // line 36
        echo "\">Compétitions</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_showList", ["cat" => "Interclub"]);
        // line 38
        echo "\">Interclub</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_showList", ["cat" => "Autre"]);
        // line 40
        echo "\">Autres</a>
";
        // line 42
        echo "                                </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Actualités<span class=\"caret\"></span></a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Publications</a>
                                    <a class=\"dropdown-item\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galeriephoto");
        echo "\">Galerie photo</a>
                                </div>
                        </li>
                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("VikaContent", ["path" => "suivi"]);
        echo "\">Suivi pédagogique</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("VikaContent", ["path" => "contact"]);
        echo "\">Contact</a>
                        </li>
                        ";
        // line 57
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "                        <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Administration<span class=\"caret\"></span></a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "ASC"]);
            echo "\">
                                        Gérer les membres</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_view");
            echo "\">Gérer les préinscriptions</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_index");
            echo "\">Gérer les événements</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_view");
            echo "\">Gérer les payements</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("priceGrid_index", ["orderby" => "ASC"]);
            // line 67
            echo "\">Grille tarifaire</a>
";
            // line 69
            echo "                                </div>
                        </li>
                        ";
        }
        // line 72
        echo "
                    </ul><!-- /.navbar-nav -->
                </div><!-- /.navbar-collapse -->
            </nav><!-- /.navbar -->

            <div class=\"top-bar-item top-bar-item-right px-0 d-none d-sm-flex\">
            <!-- Ajouter condition sinon bouton connexion -->
                ";
        // line 79
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 79, $this->source); })()), "user", [])) {
            // line 80
            echo "                ";
        } else {
            // line 81
            echo "                <!-- .btn-account -->
                <div class=\"dropdown\">
                    <button class=\"btn-account d-none d-md-flex\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"user-avatar user-avatar-md\"><img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 83, $this->source); })()), "user", []), "getUser", [], "method"), "imageFile"), "html", null, true);
            echo "\" alt=\" \" width=\"42\" /></span> <span class=\"account-summary pr-lg-4 d-none d-lg-block\"><span class=\"account-name\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 83, $this->source); })()), "user", []), "user", []), "firstname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 83, $this->source); })()), "user", []), "user", []), "name", []), "html", null, true);
            echo " </font></font></span>
                          ";
            // line 84
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 85
                echo "                        <span class=\"account-description\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Administrateur</font></font></span></span>
                        ";
            }
            // line 87
            echo "                    </button>
                    <div class=\"dropdown-arrow dropdown-arrow-left\">
                    </div><!-- .dropdown-menu -->
                    <div class=\"dropdown-menu\">
                        <h6 class=\"dropdown-header d-none d-md-block d-lg-none\"> ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 91, $this->source); })()), "user", []), "user", []), "firstname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 91, $this->source); })()), "user", []), "user", []), "name", []), "html", null, true);
            echo " </h6>
                        ";
            // line 92
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 93
                echo "                            <a class=\"dropdown-item\"
                               href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 94, $this->source); })()), "user", []), "getUser", [], "method"), "id", [])]), "html", null, true);
                echo "\">
                                <span class=\"dropdown-icon oi oi-person\"></span> Mon profil</a>
                        ";
            } else {
                // line 97
                echo "                            <a class=\"dropdown-item\"
                               href=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 98, $this->source); })()), "user", []), "getUser", [], "method"), "id", [])]), "html", null, true);
                echo "\">
                                <span class=\"dropdown-icon oi oi-person\"></span> Mon profil</a>
                        ";
            }
            // line 101
            echo "
                        <a class=\"dropdown-item\" href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\"><span class=\"dropdown-icon oi oi-account-logout\"></span> Logout</a>
                        <div class=\"dropdown-divider\"></div><a class=\"dropdown-item\" href=\"#\">Help Center</a> <a class=\"dropdown-item\" href=\"#\">Ask Forum</a> <a class=\"dropdown-item\" href=\"#\">Keyboard Shortcuts</a>
                    </div><!-- /.dropdown-menu -->
                </div><!-- /.btn-account -->
                ";
        }
        // line 107
        echo "
                <!-- Bouton Se connecter -->
                ";
        // line 109
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 109, $this->source); })()), "user", [])) {
            // line 110
            echo "                    <button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#seConnecter\">Connexion</button>
                    ";
            // line 112
            echo "                ";
            // line 114
            echo "                ";
        }
        // line 115
        echo "

                <!-- Logo Social -->
                <div class=\"social\">
                        <ul>
                            <li><a href=\"https://www.facebook.com\"><i class=\"fa fa-lg fa-facebook\"></i></a></li>
                        </ul>
                </div>
            </div>
        </div><!-- /.top-bar -->
    </header><!-- /.app-header -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OutilsTemplates/Header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 115,  256 => 114,  254 => 112,  251 => 110,  249 => 109,  245 => 107,  237 => 102,  234 => 101,  228 => 98,  225 => 97,  219 => 94,  216 => 93,  214 => 92,  208 => 91,  202 => 87,  198 => 85,  196 => 84,  188 => 83,  184 => 81,  181 => 80,  179 => 79,  170 => 72,  165 => 69,  162 => 67,  160 => 66,  156 => 65,  152 => 64,  148 => 63,  143 => 61,  138 => 58,  136 => 57,  131 => 55,  125 => 52,  118 => 48,  114 => 47,  107 => 42,  104 => 40,  102 => 39,  99 => 38,  97 => 37,  94 => 36,  92 => 35,  88 => 34,  84 => 33,  81 => 32,  79 => 31,  70 => 25,  66 => 24,  62 => 23,  58 => 22,  46 => 13,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <header class=\"app-header app-header-dark\">
        <!-- .top-bar -->
        <div class=\"top-bar-list\">
            <!-- .top-bar-brand -->
            <div class=\"top-bar-brand bg-transparent\">
                <!-- toggle menu -->
                <a href=\"{{ path('home_page', {'path':'accueil'}) }}\"><img src=\"Logo_Vika.png\" alt=\"\" style=\"height: 52px;width: auto;\"></a>
            </div><!-- /.top-bar-list -->

            <!-- .navbar -->
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
                <a class=\"navbar-brand\" href=\"{{ path('home_page', {'path':'accueil'}) }}\">Accueil</a> <!-- toggle menu -->
                <button class=\"hamburger hamburger hamburger-squeeze hamburger-toggle d-lg-none\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor2\" aria-controls=\"navbarColor2\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"hamburger-box\"><span class=\"hamburger-inner\"></span></span></button>
                <!-- .navbar-collapse -->
                <div class=\"collapse navbar-collapse\" id=\"navbarColor2\">
                    <!-- .navbar-nav -->
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Vika<span class=\"caret\"></span></a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"{{ path('VikaContent',{'path':'Philosophie'}) }}\">La philosophie</a>
                                <a class=\"dropdown-item\" href=\"{{ path('VikaContent',{'path':'Bureau'}) }}\">Membres du bureau</a>
                                <a class=\"dropdown-item\" href=\"{{ path('encadrement_index',{'path':'Encadrement'}) }}\">Encadrement</a>
                                <a class=\"dropdown-item\" href=\"{{ path('sponsor_index',{'path':'Sponsor'}) }}\">Sponsors</a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Activités<span class=\"caret\"></span></a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"{{ path('vika_event_showList',{'cat':'all'})
                                    }}\">Tous les événements</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('vika_event_showList',{'cat':'Cours'}) }}\">Cours</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('vika_event_showList',{'cat':'Stage'}) }}\">Stages</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('vika_event_showList',{'cat':'Compétition'})
                                    }}\">Compétitions</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('vika_event_showList',{'cat':'Interclub'})
                                    }}\">Interclub</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('vika_event_showList',{'cat':'Autre'})
                                    }}\">Autres</a>
{#                                    <a class=\"dropdown-item\" href=\"#\">Matériels</a>#}
                                </div>
                        </li>
                        <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Actualités<span class=\"caret\"></span></a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"{{ path('blog')}}\">Publications</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('galeriephoto')}}\">Galerie photo</a>
                                </div>
                        </li>
                        <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('VikaContent',{'path':'suivi'})}}\">Suivi pédagogique</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('VikaContent',{'path':'contact'}) }}\">Contact</a>
                        </li>
                        {% if (is_granted('ROLE_ADMIN')) %}
                        <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Administration<span class=\"caret\"></span></a>
                                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                    <a class=\"dropdown-item\" href=\"{{ path('admin_users', {orderby:'ASC'}) }}\">
                                        Gérer les membres</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('registration_view')}}\">Gérer les préinscriptions</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('vika_event_index')}}\">Gérer les événements</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('paiement_view')}}\">Gérer les payements</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('priceGrid_index',
                                        {orderby:'ASC'}) }}\">Grille tarifaire</a>
{#                                    <a class=\"dropdown-item\" href=\"#\">Matériels</a> #}
                                </div>
                        </li>
                        {% endif %}

                    </ul><!-- /.navbar-nav -->
                </div><!-- /.navbar-collapse -->
            </nav><!-- /.navbar -->

            <div class=\"top-bar-item top-bar-item-right px-0 d-none d-sm-flex\">
            <!-- Ajouter condition sinon bouton connexion -->
                {% if not app.user%}
                {% else %}
                <!-- .btn-account -->
                <div class=\"dropdown\">
                    <button class=\"btn-account d-none d-md-flex\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"user-avatar user-avatar-md\"><img src=\"{{ vich_uploader_asset(app.user.getUser(), 'imageFile') }}\" alt=\" \" width=\"42\" /></span> <span class=\"account-summary pr-lg-4 d-none d-lg-block\"><span class=\"account-name\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">{{ app.user.user.firstname }} {{ app.user.user.name }} </font></font></span>
                          {% if is_granted('ROLE_ADMIN') %}
                        <span class=\"account-description\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Administrateur</font></font></span></span>
                        {% endif %}
                    </button>
                    <div class=\"dropdown-arrow dropdown-arrow-left\">
                    </div><!-- .dropdown-menu -->
                    <div class=\"dropdown-menu\">
                        <h6 class=\"dropdown-header d-none d-md-block d-lg-none\"> {{ app.user.user.firstname }} {{ app.user.user.name }} </h6>
                        {% if (is_granted('ROLE_ADMIN')) %}
                            <a class=\"dropdown-item\"
                               href=\"{{ path('admin_show',{'id':app.user.getUser().id}) }}\">
                                <span class=\"dropdown-icon oi oi-person\"></span> Mon profil</a>
                        {% else %}
                            <a class=\"dropdown-item\"
                               href=\"{{ path('profile_show',{'id':app.user.getUser().id}) }}\">
                                <span class=\"dropdown-icon oi oi-person\"></span> Mon profil</a>
                        {% endif %}

                        <a class=\"dropdown-item\" href=\"{{ path('security_logout') }}\"><span class=\"dropdown-icon oi oi-account-logout\"></span> Logout</a>
                        <div class=\"dropdown-divider\"></div><a class=\"dropdown-item\" href=\"#\">Help Center</a> <a class=\"dropdown-item\" href=\"#\">Ask Forum</a> <a class=\"dropdown-item\" href=\"#\">Keyboard Shortcuts</a>
                    </div><!-- /.dropdown-menu -->
                </div><!-- /.btn-account -->
                {% endif %}

                <!-- Bouton Se connecter -->
                {% if not app.user%}
                    <button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" data-target=\"#seConnecter\">Connexion</button>
                    {#<a href=\"{{ path('security_login') }}\" class=\"btn btn-secondary btn-md active\" role=\"button\" aria-pressed=\"true\">Connexion</a>#}
                {#{% else %}
                    <a href=\"{{ path('security_logout') }}\" class=\"btn btn-secondary btn-md active\" role=\"button\" aria-pressed=\"true\">Déconnexion</a>#}
                {% endif %}


                <!-- Logo Social -->
                <div class=\"social\">
                        <ul>
                            <li><a href=\"https://www.facebook.com\"><i class=\"fa fa-lg fa-facebook\"></i></a></li>
                        </ul>
                </div>
            </div>
        </div><!-- /.top-bar -->
    </header><!-- /.app-header -->
</html>
", "OutilsTemplates/Header.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\OutilsTemplates\\Header.html.twig");
    }
}

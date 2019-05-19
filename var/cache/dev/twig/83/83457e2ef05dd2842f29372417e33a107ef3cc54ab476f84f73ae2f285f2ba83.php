<?php

/* OutilsTemplates/BarreDeNavigation.html.twig */
class __TwigTemplate_dde72f9459e233ff7dc879ebfdd503c074749266fabe6a297e423c74c72a1dff extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/BarreDeNavigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/BarreDeNavigation.html.twig"));

        // line 1
        echo "<html>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Just an image -->
        <div class=\"navbar navbar-light bg-dark\">
            <a class=\"navbar-brand\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <img src=\"Logo_Vika.png\" width=\"60\" height=\"40\" alt=\"\">
            </a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav\">
                <!-- Menu VIKA -->
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    VIKA
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">La philisophie</a>
                        <a class=\"dropdown-item\" href=\"#\">Membres du bureau</a>
                        <a class=\"dropdown-item\" href=\"#\">Encadrement</a>
                    </div>
                </li>

             ";
        // line 34
        echo "                <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Sponsors</a>
                </li>
            </ul>
        </div>

        <!-- Bouton Se connecter -->
        ";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->source); })()), "user", [])) {
            // line 42
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-secondary btn-sm active\" role=\"button\" aria-pressed=\"true\">Connexion</a>
        ";
        } else {
            // line 44
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\" class=\"btn btn-secondary btn-sm active\" role=\"button\" aria-pressed=\"true\">Déconnexion</a>
        ";
        }
        // line 46
        echo "
        <!-- Logo Social -->
        <div class=\"social\">
            <ul>
                <li><a href=\"https://www.facebook.com\"><i class=\"fa fa-lg fa-facebook\"></i></a></li>
            </ul>
        </div>

    </nav>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OutilsTemplates/BarreDeNavigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 46,  78 => 44,  72 => 42,  70 => 41,  61 => 34,  39 => 9,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Just an image -->
        <div class=\"navbar navbar-light bg-dark\">
            <a class=\"navbar-brand\" href=\"{{ path('home') }}\">
            <img src=\"Logo_Vika.png\" width=\"60\" height=\"40\" alt=\"\">
            </a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav\">
                <!-- Menu VIKA -->
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    VIKA
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">La philisophie</a>
                        <a class=\"dropdown-item\" href=\"#\">Membres du bureau</a>
                        <a class=\"dropdown-item\" href=\"#\">Encadrement</a>
                    </div>
                </li>

             {#   <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"{{ path('blog')}}\">Blog<span class=\"sr-only\">(current)</span> </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('blog_create') }}\">Créer un article</a>
                </li>#}
                <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Sponsors</a>
                </li>
            </ul>
        </div>

        <!-- Bouton Se connecter -->
        {% if not app.user%}
            <a href=\"{{ path('security_login') }}\" class=\"btn btn-secondary btn-sm active\" role=\"button\" aria-pressed=\"true\">Connexion</a>
        {% else %}
            <a href=\"{{ path('security_logout') }}\" class=\"btn btn-secondary btn-sm active\" role=\"button\" aria-pressed=\"true\">Déconnexion</a>
        {% endif %}

        <!-- Logo Social -->
        <div class=\"social\">
            <ul>
                <li><a href=\"https://www.facebook.com\"><i class=\"fa fa-lg fa-facebook\"></i></a></li>
            </ul>
        </div>

    </nav>
</html>", "OutilsTemplates/BarreDeNavigation.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\OutilsTemplates\\BarreDeNavigation.html.twig");
    }
}

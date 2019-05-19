<?php

/* OutilsTemplates/NavBarre.html.twig */
class __TwigTemplate_b8eb8450b8cb25044f3bf8c022aa50afbb61a3c59a7d3ac34c3f9551d919dcbd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/NavBarre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/NavBarre.html.twig"));

        // line 1
        echo "<html>
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "user", [])) {
            // line 3
            echo "    <nav class=\"page-navs\">
        <!-- .nav-scroller -->
        <div class=\"nav-scroller\">
            <!-- .nav -->
            <div class=\"nav nav-tabs\">
                ";
            // line 8
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 9
                echo "                  ";
                // line 12
                echo "                    <a class=\"nav-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "user", []), "getUser", [], "method"), "id", [])]), "html", null, true);
                echo "\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Mes activités</font></font></a>
                    <a class=\"nav-link\" href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_history", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "user", []), "getUser", [], "method"), "id", [])]), "html", null, true);
                echo "\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Mon parcours</font></font></a>
                    <a class=\"nav-link\" href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_document", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "user", []), "getUser", [], "method"), "id", [])]), "html", null, true);
                echo "\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Mes documents</font></font></a>
                    <a class=\"nav-link\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_family", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->source); })()), "user", []), "id", [])]), "html", null, true);
                echo "\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Ma famille</font></font></a>
                ";
            } else {
                // line 21
                echo "         ";
                // line 24
                echo "                    <a class=\"nav-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_registration", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "user", []), "getUser", [], "method"), "getId", [], "method")]), "html", null, true);
                echo "\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Mes activités</font></font></a>
                    <a class=\"nav-link\" href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_history", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "user", []), "getUser", [], "method"), "getId", [], "method")]), "html", null, true);
                echo "\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Mon parcours</font></font></a>
                    <a class=\"nav-link\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_document", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "user", []), "getUser", [], "method"), "id", [])]), "html", null, true);
                echo "\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Mes documents</font></font></a>
                    <a class=\"nav-link\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_family", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "user", []), "id", [])]), "html", null, true);
                echo "\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Ma famille</font></font></a>
                ";
            }
            // line 33
            echo "            </div><!-- /.nav -->
        </div><!-- /.nav-scroller -->
    </nav><!-- /.page-navs -->
";
        }
        // line 37
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OutilsTemplates/NavBarre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 37,  91 => 33,  85 => 30,  80 => 28,  75 => 26,  69 => 24,  67 => 21,  61 => 18,  56 => 16,  51 => 14,  45 => 12,  43 => 9,  41 => 8,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
{% if app.user %}
    <nav class=\"page-navs\">
        <!-- .nav-scroller -->
        <div class=\"nav-scroller\">
            <!-- .nav -->
            <div class=\"nav nav-tabs\">
                {% if (is_granted('ROLE_ADMIN')) %}
                  {#  <a class=\"nav-link\" href=\"{{ path('admin_show',{'id':app.user.getUser().id}) }}\"><font
                                style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Mon
                                profil </font></font></a>#}
                    <a class=\"nav-link\" href=\"{{ path('admin_registration',{'id':app.user.getUser().id}) }}\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Mes activités</font></font></a>
                    <a class=\"nav-link\" href=\"{{ path('admin_history',{'id':app.user.getUser().id}) }}\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Mon parcours</font></font></a>
                    <a class=\"nav-link\" href=\"{{ path('admin_document',{'id':app.user.getUser().id}) }}\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Mes documents</font></font></a>
                    <a class=\"nav-link\" href=\"{{ path('admin_family',{'id':app.user.id}) }}\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Ma famille</font></font></a>
                {% else %}
         {#           <a class=\"nav-link\" href=\"{{ path('profile_show',{'id':app.user.getUser().getId()}) }}\"><font
                                style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Mon
                                profil </font></font></a>#}
                    <a class=\"nav-link\" href=\"{{ path('member_registration',{'id':app.user.getUser().getId()})  }}\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Mes activités</font></font></a>
                    <a class=\"nav-link\" href=\"{{ path('profile_history',{'id':app.user.getUser().getId()}) }}\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Mon parcours</font></font></a>
                    <a class=\"nav-link\" href=\"{{ path('member_document',{'id':app.user.getUser().id}) }}\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Mes documents</font></font></a>
                    <a class=\"nav-link\" href=\"{{ path('view_family',{'id':app.user.id}) }}\"><font style=\"vertical-align: inherit;\"><font
                                    style=\"vertical-align: inherit;\">Ma famille</font></font></a>
                {% endif %}
            </div><!-- /.nav -->
        </div><!-- /.nav-scroller -->
    </nav><!-- /.page-navs -->
{% endif %}
</html>
", "OutilsTemplates/NavBarre.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\OutilsTemplates\\NavBarre.html.twig");
    }
}

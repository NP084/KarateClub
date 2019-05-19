<?php

/* member/showFamily.html.twig */
class __TwigTemplate_4e12d6508ca92cbc605290bd1e9f2a7f60eb4d4ecbd7ff31fdd8dbdb59e1bf30 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/showFamily.html.twig", 1);
        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/showFamily.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/showFamily.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src=\"assets/vendor/datatables/jquery.dataTables.min.js\"></script>
    ";
        // line 13
        echo "    <script>
        \$(document).ready(function () {
            \$('#usertabel').DataTable();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Utilisateurs de VIKA";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 24
        echo "    ";
        // line 27
        echo "    ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->source); })()), "request", []), "get", [0 => "id"], "method")))) {
            // line 28
            echo "
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">

                    ";
            // line 33
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->source); })()), "user", []), "id", []) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->source); })()), "request", []), "get", [0 => "id"], "method")))) {
                // line 34
                echo "                        <h2>Famille du membre : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userConnected"]) || array_key_exists("userConnected", $context) ? $context["userConnected"] : (function () { throw new Twig_Error_Runtime('Variable "userConnected" does not exist.', 34, $this->source); })()), "user", []), "firstName", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userConnected"]) || array_key_exists("userConnected", $context) ? $context["userConnected"] : (function () { throw new Twig_Error_Runtime('Variable "userConnected" does not exist.', 34, $this->source); })()), "user", []), "name", []), "html", null, true);
                echo "</h2>
                    ";
            } else {
                // line 36
                echo "                        <h2>Ma famille</h2>
                    ";
            }
            // line 38
            echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table id=\"usertabel\" class=\"table dataTable no-footer\">
                                            <thead>
                                            <tr>
                                                ";
            // line 46
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 47
                echo "                                                    <th>Id</th>
                                                ";
            }
            // line 49
            echo "                                                <th>Noms</th>
                                                <th>Prénom</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 55, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 56
                echo "                                                ";
                // line 58
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "ownerUser", []) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "ownerUser", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "userConnected", []), "id", [])))) {
                    // line 59
                    echo "                                                    ";
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 60
                        echo "                                                        <tr>
                                                        <td><b>";
                        // line 61
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "html", null, true);
                        echo "</b></td>
                                                        <td><b>";
                        // line 62
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", []), "html", null, true);
                        echo "</b></td>
                                                        <td><b>";
                        // line 63
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", []), "html", null, true);
                        echo "</b></td>
                                                        <td class=\"align-middle text-right\">
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                        class=\"oi oi-person\"></i></a>
                                                            <span class=\"sr-only\">Voir profil</span>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\">
                                                                <i class=\"fa fa-pencil\">
                                                                </i>
                                                                <span class=\"sr-only\">Modifier</span>
                                                            </a>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                        // line 76
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_history", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                        class=\"oi oi-badge\"></i></a>
                                                            <span class=\"sr-only\">Parcours</span>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                        // line 80
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                        class=\"oi oi-cart\"></i>
                                                                <span class=\"sr-only\">Activités</span>
                                                            </a>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                        // line 85
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_document", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                        class=\"oi oi-document\"></i>
                                                                <span class=\"sr-only\">Documents</span>
                                                            </a>
                                                        </td>
                                                    ";
                    } else {
                        // line 91
                        echo "                                                        <td><b>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", []), "html", null, true);
                        echo "</b></td>
                                                        <td><b>";
                        // line 92
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", []), "html", null, true);
                        echo "</b></td>
                                                        <td class=\"align-middle text-right\">
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                        // line 95
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                        class=\"oi oi-person\"></i></a>
                                                            <span class=\"sr-only\">Voir profil</span>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                        // line 99
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\">
                                                                <i class=\"fa fa-pencil\">
                                                                </i>
                                                                <span class=\"sr-only\">Modifier</span>
                                                            </a>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                        // line 105
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_history", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                        class=\"oi oi-badge\"></i></a>
                                                            <span class=\"sr-only\">Parcours</span>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                        // line 109
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_registration", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                        class=\"oi oi-cart\"></i>
                                                                <span class=\"sr-only\">Activités</span>
                                                            </a>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"";
                        // line 114
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_document", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                        class=\"oi oi-document\"></i>
                                                                <span class=\"sr-only\">Documents</span>
                                                            </a>
                                                        </td>
                                                    ";
                    }
                    // line 120
                    echo "                                                    </tr>
                                                ";
                } else {
                    // line 122
                    echo "                                                    <tr>
                                                        ";
                    // line 123
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 124
                        echo "                                                            <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "html", null, true);
                        echo "</td>
                                                        ";
                    }
                    // line 126
                    echo "                                                        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", []), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 127
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", []), "html", null, true);
                    echo "</td>
                                                        ";
                    // line 128
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 129
                        echo "                                                            <td class=\"align-middle text-right\">
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"";
                        // line 131
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                            class=\"oi oi-person\"></i></a>
                                                                <span class=\"sr-only\">Voir profil</span>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"";
                        // line 135
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\">
                                                                    <i class=\"fa fa-pencil\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Modifier</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"";
                        // line 141
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_history", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                            class=\"oi oi-badge\"></i></a>
                                                                <span class=\"sr-only\">Parcours</span>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"";
                        // line 145
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_registration", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                            class=\"oi oi-cart\"></i>
                                                                    <span class=\"sr-only\">Activités</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"";
                        // line 150
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_document", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                            class=\"oi oi-document\"></i>
                                                                    <span class=\"sr-only\">Documents</span>
                                                                </a>
                                                            </td>
                                                        ";
                    } else {
                        // line 156
                        echo "                                                            <td class=\"align-middle text-right\">
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"";
                        // line 158
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                            class=\"oi oi-person\"></i></a>
                                                                <span class=\"sr-only\">Voir profil</span>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"";
                        // line 162
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\">
                                                                    <i class=\"fa fa-pencil\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Modifier</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"";
                        // line 168
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_history", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                            class=\"oi oi-badge\"></i></a>
                                                                <span class=\"sr-only\">Parcours</span>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"";
                        // line 172
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_registration", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                            class=\"oi oi-cart\"></i>
                                                                    <span class=\"sr-only\">Activités</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"";
                        // line 177
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_document", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [])]), "html", null, true);
                        echo "\"><i
                                                                            class=\"oi oi-document\"></i>
                                                                    <span class=\"sr-only\">Documents</span>
                                                                </a>
                                                            </td>
                                                        ";
                    }
                    // line 183
                    echo "                                                    </tr>
                                                ";
                }
                // line 185
                echo "                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 186
                echo "                                                <tr>
                                                    <td colspan=\"10\">Aucun membre de famille enregistré</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                    ";
            // line 193
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 194
                echo "                                        <a class=\"btn btn-success\"
                                           href=\"";
                // line 195
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_admin", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["userConnected"]) || array_key_exists("userConnected", $context) ? $context["userConnected"] : (function () { throw new Twig_Error_Runtime('Variable "userConnected" does not exist.', 195, $this->source); })()), "id", [])]), "html", null, true);
                echo "\">Ajouter
                                            un nouveau membre</a>
                                    ";
            } else {
                // line 198
                echo "                                        <a class=\"btn btn-success\"
                                           href=\"";
                // line 199
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_profil", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["userConnected"]) || array_key_exists("userConnected", $context) ? $context["userConnected"] : (function () { throw new Twig_Error_Runtime('Variable "userConnected" does not exist.', 199, $this->source); })()), "id", [])]), "html", null, true);
                echo "\">Ajouter
                                            un nouveau membre</a>
                                    ";
            }
            // line 202
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 210
            echo "        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/showFamily.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 210,  451 => 202,  445 => 199,  442 => 198,  436 => 195,  433 => 194,  431 => 193,  426 => 190,  417 => 186,  412 => 185,  408 => 183,  399 => 177,  391 => 172,  384 => 168,  375 => 162,  368 => 158,  364 => 156,  355 => 150,  347 => 145,  340 => 141,  331 => 135,  324 => 131,  320 => 129,  318 => 128,  314 => 127,  309 => 126,  303 => 124,  301 => 123,  298 => 122,  294 => 120,  285 => 114,  277 => 109,  270 => 105,  261 => 99,  254 => 95,  248 => 92,  243 => 91,  234 => 85,  226 => 80,  219 => 76,  210 => 70,  203 => 66,  197 => 63,  193 => 62,  189 => 61,  186 => 60,  183 => 59,  180 => 58,  178 => 56,  173 => 55,  165 => 49,  161 => 47,  159 => 46,  149 => 38,  145 => 36,  137 => 34,  135 => 33,  128 => 28,  125 => 27,  123 => 24,  114 => 23,  96 => 20,  81 => 13,  78 => 9,  69 => 8,  56 => 3,  47 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}

    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css\">

{% endblock %}

{% block javascripts %}
    <script src=\"assets/vendor/datatables/jquery.dataTables.min.js\"></script>
    {#
    <script type=\"text/javascript\" charset=\"utf8\" src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
    #}
    <script>
        \$(document).ready(function () {
            \$('#usertabel').DataTable();
        });
    </script>
{% endblock %}

{% block title %}Utilisateurs de VIKA{% endblock %}


{% block Body %}
    {# Admin ou si la personne connectée possède l'id du UserConnected pr lequel on affiche la famille.
     Attention ici, l'id affiché dans l'URL est celui de la table userConnected,
     et non pas de la table user  comme c'est le cas pour toutes les autres pages de members#}
    {% if (is_granted('ROLE_ADMIN') or app.user.id == app.request.get(\"id\")) %}

        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-6\">

                    {% if (is_granted('ROLE_ADMIN') and app.user.id != app.request.get(\"id\")) %}
                        <h2>Famille du membre : {{ userConnected.user.firstName }} {{ userConnected.user.name }}</h2>
                    {% else %}
                        <h2>Ma famille</h2>
                    {% endif %}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table id=\"usertabel\" class=\"table dataTable no-footer\">
                                            <thead>
                                            <tr>
                                                {% if (is_granted('ROLE_ADMIN')) %}
                                                    <th>Id</th>
                                                {% endif %}
                                                <th>Noms</th>
                                                <th>Prénom</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for user in users %}
                                                {# Si l'id dans l'URL != de l'id du user qui s'affiche
                                                {#                {% if (user.ownerUser and app.request.get('id') != user.ownerUser.id) %}#}
                                                {% if (user.ownerUser and user.ownerUser.id == user.userConnected.id) %}
                                                    {% if (is_granted('ROLE_ADMIN')) %}
                                                        <tr>
                                                        <td><b>{{ user.id }}</b></td>
                                                        <td><b>{{ user.name }}</b></td>
                                                        <td><b>{{ user.firstName }}</b></td>
                                                        <td class=\"align-middle text-right\">
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('admin_show', {'id': user.id}) }}\"><i
                                                                        class=\"oi oi-person\"></i></a>
                                                            <span class=\"sr-only\">Voir profil</span>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('admin_edit', {'id': user.id}) }}\">
                                                                <i class=\"fa fa-pencil\">
                                                                </i>
                                                                <span class=\"sr-only\">Modifier</span>
                                                            </a>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('admin_history', {'id': user.id}) }}\"><i
                                                                        class=\"oi oi-badge\"></i></a>
                                                            <span class=\"sr-only\">Parcours</span>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('admin_registration', {'id': user.id}) }}\"><i
                                                                        class=\"oi oi-cart\"></i>
                                                                <span class=\"sr-only\">Activités</span>
                                                            </a>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('admin_document', {'id': user.id}) }}\"><i
                                                                        class=\"oi oi-document\"></i>
                                                                <span class=\"sr-only\">Documents</span>
                                                            </a>
                                                        </td>
                                                    {% else %}
                                                        <td><b>{{ user.name }}</b></td>
                                                        <td><b>{{ user.firstName }}</b></td>
                                                        <td class=\"align-middle text-right\">
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('profile_show', {'id': user.id}) }}\"><i
                                                                        class=\"oi oi-person\"></i></a>
                                                            <span class=\"sr-only\">Voir profil</span>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('profile_edit', {'id': user.id}) }}\">
                                                                <i class=\"fa fa-pencil\">
                                                                </i>
                                                                <span class=\"sr-only\">Modifier</span>
                                                            </a>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('profile_history', {'id': user.id}) }}\"><i
                                                                        class=\"oi oi-badge\"></i></a>
                                                            <span class=\"sr-only\">Parcours</span>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('member_registration', {'id': user.id}) }}\"><i
                                                                        class=\"oi oi-cart\"></i>
                                                                <span class=\"sr-only\">Activités</span>
                                                            </a>
                                                            <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                               href=\"{{ path('member_document', {'id': user.id}) }}\"><i
                                                                        class=\"oi oi-document\"></i>
                                                                <span class=\"sr-only\">Documents</span>
                                                            </a>
                                                        </td>
                                                    {% endif %}
                                                    </tr>
                                                {% else %}
                                                    <tr>
                                                        {% if (is_granted('ROLE_ADMIN')) %}
                                                            <td>{{ user.id }}</td>
                                                        {% endif %}
                                                        <td>{{ user.name }}</td>
                                                        <td>{{ user.firstName }}</td>
                                                        {% if (is_granted('ROLE_ADMIN')) %}
                                                            <td class=\"align-middle text-right\">
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"{{ path('admin_show', {'id': user.id}) }}\"><i
                                                                            class=\"oi oi-person\"></i></a>
                                                                <span class=\"sr-only\">Voir profil</span>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"{{ path('admin_edit', {'id': user.id}) }}\">
                                                                    <i class=\"fa fa-pencil\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Modifier</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"{{ path('admin_history', {'id': user.id}) }}\"><i
                                                                            class=\"oi oi-badge\"></i></a>
                                                                <span class=\"sr-only\">Parcours</span>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"{{ path('admin_registration', {'id': user.id}) }}\"><i
                                                                            class=\"oi oi-cart\"></i>
                                                                    <span class=\"sr-only\">Activités</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"{{ path('admin_document', {'id': user.id}) }}\"><i
                                                                            class=\"oi oi-document\"></i>
                                                                    <span class=\"sr-only\">Documents</span>
                                                                </a>
                                                            </td>
                                                        {% else %}
                                                            <td class=\"align-middle text-right\">
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"{{ path('profile_show', {'id': user.id}) }}\"><i
                                                                            class=\"oi oi-person\"></i></a>
                                                                <span class=\"sr-only\">Voir profil</span>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"{{ path('profile_edit', {'id': user.id}) }}\">
                                                                    <i class=\"fa fa-pencil\">
                                                                    </i>
                                                                    <span class=\"sr-only\">Modifier</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"{{ path('profile_history', {'id': user.id}) }}\"><i
                                                                            class=\"oi oi-badge\"></i></a>
                                                                <span class=\"sr-only\">Parcours</span>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"{{ path('member_registration', {'id': user.id}) }}\"><i
                                                                            class=\"oi oi-cart\"></i>
                                                                    <span class=\"sr-only\">Activités</span>
                                                                </a>
                                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                                   href=\"{{ path('member_document', {'id': user.id}) }}\"><i
                                                                            class=\"oi oi-document\"></i>
                                                                    <span class=\"sr-only\">Documents</span>
                                                                </a>
                                                            </td>
                                                        {% endif %}
                                                    </tr>
                                                {% endif %}
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"10\">Aucun membre de famille enregistré</td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                    {% if (is_granted('ROLE_ADMIN')) %}
                                        <a class=\"btn btn-success\"
                                           href=\"{{ path('add_admin',{'id':userConnected.id}) }}\">Ajouter
                                            un nouveau membre</a>
                                    {% else %}
                                        <a class=\"btn btn-success\"
                                           href=\"{{ path('add_profil',{'id':userConnected.id}) }}\">Ajouter
                                            un nouveau membre</a>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    {% endif %}
{% endblock %}
", "member/showFamily.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\member\\showFamily.html.twig");
    }
}

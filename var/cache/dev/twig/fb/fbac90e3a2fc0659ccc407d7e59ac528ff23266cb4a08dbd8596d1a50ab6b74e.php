<?php

/* registration/showFamily.html.twig */
class __TwigTemplate_f9ecc1dd98f5bdd7c91e0f7160ae942b28d5b4e8df66b5eb4a304a87666a05db extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/showFamily.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/showFamily.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/showFamily.html.twig"));

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

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Composition de la famille";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 26
        echo "    ";
        if (((isset($context["idevent"]) || array_key_exists("idevent", $context)) && twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 26, $this->source); })()), "easyinscription", []))) {
            // line 27
            echo "<div class=\"card\">
    <!-- .card-header -->
    <div class=\"card-header\">
        <!-- .steps -->
        <div class=\"steps\" role=\"tablist\">
            <ul>
                <li class=\"active\" data-target=\"#test-l-1\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-people\"></i></span>
                        <span class=\"d-none d-sm-inline\">Inscription Rapide</span>
                    </a>
                </li>

            </ul>
        </div>
    ";
        } else {
            // line 43
            echo "<div class=\"card\">
    <!-- .card-header -->
    <div class=\"card-header\">
        <!-- .steps -->
        <div class=\"steps\" role=\"tablist\">
            <ul>
                <li class=\"active\" data-target=\"#test-l-1\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-people\"></i></span>
                        <span class=\"d-none d-sm-inline\">Participant</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-2\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#error1\" class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-person \"></i></span>
                        <span class=\"d-none d-sm-inline\">Informations du participant</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-3\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#error1\" class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-script \"></i></span>
                        <span class=\"d-none d-sm-inline\">Conditions Générales</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-4\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#error1\" class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-check\"></i></span>
                        <span class=\"d-none d-sm-inline\">Résumé</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- /.steps -->
        <!--Error1-->
";
        }
        // line 79
        echo "        <div class=\"modal fade\" id=\"error1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
             xmlns=\"http://www.w3.org/1999/html\">
            <div class=\"modal-dialog\" role=\"document\">

                <div class=\"modal-body \">

                    <div class=\"row\">
                        <!-- grid column -->


                        <div class=\"alert alert-danger alert-dismissible fade show\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            <a href=\"#\" class=\"alert-link\">Veuillez d'abord choisir un <strong>participant</strong>.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 98
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 98, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 98, $this->source); })()), "request", []), "get", [0 => "id"], "method")))) {
            // line 99
            echo "
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">
                    ";
            // line 103
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 103, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 103, $this->source); })()), "request", []), "get", [0 => "id"], "method")))) {
                // line 104
                echo "                        <h2>Choix du membre à inscrire</h2>
                    ";
            } else {
                // line 106
                echo "                        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 107
                    echo "                            ";
                    // line 108
                    echo "                                <h2>Famille du membre
                                     ";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userConnected"]) || array_key_exists("userConnected", $context) ? $context["userConnected"] : (function () { throw new Twig_Error_Runtime('Variable "userConnected" does not exist.', 109, $this->source); })()), "user", []), "firstName", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userConnected"]) || array_key_exists("userConnected", $context) ? $context["userConnected"] : (function () { throw new Twig_Error_Runtime('Variable "userConnected" does not exist.', 109, $this->source); })()), "user", []), "name", []), "html", null, true);
                    echo "</h2>
                        ";
                } else {
                    // line 111
                    echo "                            ";
                    // line 112
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 112, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 112, $this->source); })()), "request", []), "get", [0 => "id"], "method"))) {
                        // line 113
                        echo "                                <h2>Ma famille</h2>
                            ";
                    } else {
                        // line 115
                        echo "                                <h2>Famille du membre
                                    : ";
                        // line 116
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userConnected"]) || array_key_exists("userConnected", $context) ? $context["userConnected"] : (function () { throw new Twig_Error_Runtime('Variable "userConnected" does not exist.', 116, $this->source); })()), "user", []), "firstName", []), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userConnected"]) || array_key_exists("userConnected", $context) ? $context["userConnected"] : (function () { throw new Twig_Error_Runtime('Variable "userConnected" does not exist.', 116, $this->source); })()), "user", []), "name", []), "html", null, true);
                        echo "</h2>
                            ";
                    }
                    // line 118
                    echo "                        ";
                }
                // line 119
                echo "                    ";
            }
            // line 120
            echo "                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table id=\"usertabel\" class=\"table dataTable no-footer\">
                                            <thead>
                                            <tr>
                                                ";
            // line 128
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 129
                echo "                                                    <th>Id</th>
                                                ";
            }
            // line 131
            echo "                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 137, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 138
                echo "                                                ";
                // line 140
                echo "                                                ";
                // line 141
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "ownerUser", []) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "ownerUser", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "userConnected", []), "id", [])))) {
                    // line 142
                    echo "                                                    ";
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 143
                        echo "
                                                        <tr>

                                                        <td><b>";
                        // line 146
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "html", null, true);
                        echo "</b></td>
                                                        <td><b>";
                        // line 147
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", []), "html", null, true);
                        echo "</b></td>
                                                        <td><b>";
                        // line 148
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", []), "html", null, true);
                        echo "</b></td>
                                                        <td class=\"align-middle text-right\">
                                                            ";
                        // line 150
                        if ((isset($context["idevent"]) || array_key_exists("idevent", $context))) {
                            // line 151
                            echo "                                                                ";
                            $context["foo"] = "1";
                            // line 152
                            echo "                                                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["preregs"]) || array_key_exists("preregs", $context) ? $context["preregs"] : (function () { throw new Twig_Error_Runtime('Variable "preregs" does not exist.', 152, $this->source); })()));
                            foreach ($context['_seq'] as $context["_key"] => $context["prereg"]) {
                                // line 153
                                echo "                                                                    ";
                                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prereg"], "user", []), "id", []) == twig_get_attribute($this->env, $this->source, $context["user"], "id", []))) {
                                    // line 154
                                    echo "                                                                        <a class=\"btn btn-secondary disabled disabled\">
                                                                            Inscrit <i class=\"oi oi-check\"></i>
                                                                        </a>
                                                                        ";
                                    // line 157
                                    $context["foo"] = "0";
                                    // line 158
                                    echo "                                                                    ";
                                }
                                // line 159
                                echo "                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prereg'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 160
                            echo "                                                                ";
                            if (((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 160, $this->source); })()) == 1)) {
                                // line 161
                                echo "                                                                   ";
                                if (twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 161, $this->source); })()), "easyinscription", [])) {
                                    // line 162
                                    echo "                                                                       <a class=\"btn btn-outline-info\"
                                                                          href=\"";
                                    // line 163
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prereg_simple", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "idevent" => twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 163, $this->source); })()), "id", [])]), "html", null, true);
                                    echo "\">
                                                                           InscrireSimplifiée
                                                                       </a>
                                                                       ";
                                } else {
                                    // line 167
                                    echo "
                                                                    <a class=\"btn btn-outline-info\"
                                                                       href=\"";
                                    // line 169
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verify_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "idevent" => twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 169, $this->source); })()), "id", [])]), "html", null, true);
                                    echo "\">
                                                                        Inscrire
                                                                    </a>
                                                                       ";
                                }
                                // line 173
                                echo "                                                                ";
                            }
                            // line 174
                            echo "                                                            ";
                        } else {
                            // line 175
                            echo "                                                                <a class=\"btn btn-outline-info\"
                                                                   href=\"";
                            // line 176
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_showList", ["cat" => "all"]);
                            echo "\">
                                                                    Inscrire à un cours
                                                                </a>
                                                            ";
                        }
                        // line 180
                        echo "                                                        </td>

                                                    ";
                    } else {
                        // line 183
                        echo "                                                        <td><b>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", []), "html", null, true);
                        echo "</b></td>
                                                        <td><b>";
                        // line 184
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", []), "html", null, true);
                        echo "</b></td>
                                                        <td class=\"align-middle text-right\">
                                                            ";
                        // line 186
                        if ((isset($context["idevent"]) || array_key_exists("idevent", $context))) {
                            // line 187
                            echo "                                                                ";
                            $context["foo"] = "1";
                            // line 188
                            echo "                                                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["preregs"]) || array_key_exists("preregs", $context) ? $context["preregs"] : (function () { throw new Twig_Error_Runtime('Variable "preregs" does not exist.', 188, $this->source); })()));
                            foreach ($context['_seq'] as $context["_key"] => $context["prereg"]) {
                                // line 189
                                echo "                                                                    ";
                                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prereg"], "user", []), "id", []) == twig_get_attribute($this->env, $this->source, $context["user"], "id", []))) {
                                    // line 190
                                    echo "                                                                        <a class=\"btn btn-secondary disabled disabled\">
                                                                            Inscrit <i class=\"oi oi-check\"></i>
                                                                        </a>
                                                                        ";
                                    // line 193
                                    $context["foo"] = "0";
                                    // line 194
                                    echo "                                                                    ";
                                }
                                // line 195
                                echo "                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prereg'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 196
                            echo "                                                                ";
                            if (((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 196, $this->source); })()) == 1)) {
                                // line 197
                                echo "                                                                    ";
                                if (twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 197, $this->source); })()), "easyinscription", [])) {
                                    // line 198
                                    echo "                                                                        <a class=\"btn btn-outline-info\"
                                                                           href=\"";
                                    // line 199
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prereg_simple", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "idevent" => twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 199, $this->source); })()), "id", [])]), "html", null, true);
                                    echo "\">
                                                                            InscrireSimplifiée
                                                                        </a>
                                                                    ";
                                } else {
                                    // line 203
                                    echo "
                                                                        <a class=\"btn btn-outline-info\"
                                                                           href=\"";
                                    // line 205
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verify_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "idevent" => twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 205, $this->source); })()), "id", [])]), "html", null, true);
                                    echo "\">
                                                                            Inscrire
                                                                        </a>
                                                                    ";
                                }
                                // line 209
                                echo "                                                                ";
                            }
                            // line 210
                            echo "

                                                            ";
                        } else {
                            // line 213
                            echo "                                                                <a class=\"btn btn-outline-info\"
                                                                   href=\"";
                            // line 214
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_showList", ["cat" => "all"]);
                            echo "\">
                                                                    Inscrire à un cours
                                                                </a>
                                                            ";
                        }
                        // line 218
                        echo "                                                        </td>
                                                    ";
                    }
                    // line 220
                    echo "                                                    </tr>
                                                ";
                } else {
                    // line 222
                    echo "                                                    <tr>
                                                        ";
                    // line 223
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 224
                        echo "                                                            <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "html", null, true);
                        echo "</td>
                                                        ";
                    }
                    // line 226
                    echo "                                                        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", []), "html", null, true);
                    echo "</td>
                                                        <td>";
                    // line 227
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", []), "html", null, true);
                    echo "</td>
                                                        <td class=\"align-middle text-right\">
                                                            ";
                    // line 229
                    if ((isset($context["idevent"]) || array_key_exists("idevent", $context))) {
                        // line 230
                        echo "                                                                ";
                        $context["foo"] = "1";
                        // line 231
                        echo "                                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["preregs"]) || array_key_exists("preregs", $context) ? $context["preregs"] : (function () { throw new Twig_Error_Runtime('Variable "preregs" does not exist.', 231, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["prereg"]) {
                            // line 232
                            echo "                                                                    ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prereg"], "user", []), "id", []) == twig_get_attribute($this->env, $this->source, $context["user"], "id", []))) {
                                // line 233
                                echo "                                                                        <a class=\"btn btn-secondary disabled disabled\">
                                                                            Inscrit <i class=\"oi oi-check\"></i>
                                                                        </a>
                                                                        ";
                                // line 236
                                $context["foo"] = "0";
                                // line 237
                                echo "                                                                    ";
                            }
                            // line 238
                            echo "                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prereg'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 239
                        echo "                                                                ";
                        if (((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 239, $this->source); })()) == 1)) {
                            // line 240
                            echo "                                                                    ";
                            if (twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 240, $this->source); })()), "easyinscription", [])) {
                                // line 241
                                echo "                                                                        <a class=\"btn btn-outline-info\"
                                                                           href=\"";
                                // line 242
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prereg_simple", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "idevent" => twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 242, $this->source); })()), "id", [])]), "html", null, true);
                                echo "\">
                                                                            InscrireSimplifiée
                                                                        </a>
                                                                    ";
                            } else {
                                // line 246
                                echo "
                                                                        <a class=\"btn btn-outline-info\"
                                                                           href=\"";
                                // line 248
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verify_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", []), "idevent" => twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 248, $this->source); })()), "id", [])]), "html", null, true);
                                echo "\">
                                                                            Inscrire
                                                                        </a>
                                                                    ";
                            }
                            // line 252
                            echo "                                                                ";
                        }
                        // line 253
                        echo "                                                            ";
                    } else {
                        // line 254
                        echo "                                                                <a class=\"btn btn-outline-info\"
                                                                   href=\"";
                        // line 255
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_showList", ["cat" => "all"]);
                        echo "\">
                                                                    Inscrire à un cours
                                                                </a>
                                                            ";
                    }
                    // line 259
                    echo "                                                        </td>
                                                    </tr>
                                                ";
                }
                // line 262
                echo "                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 263
                echo "                                                <tr>
                                                    <td colspan=\"10\">Aucun membre de famille enregistré</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row justify-content-end\">
                        <div class=\"col-auto\">
                            ";
            // line 276
            if ((isset($context["idevent"]) || array_key_exists("idevent", $context))) {
                // line 277
                echo "                            ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 278
                    echo "                                <a class=\"btn btn-success\"
                                   href=\"";
                    // line 279
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_admin_event", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["userConnected"]) || array_key_exists("userConnected", $context) ? $context["userConnected"] : (function () { throw new Twig_Error_Runtime('Variable "userConnected" does not exist.', 279, $this->source); })()), "id", []), "idevent" => twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 279, $this->source); })()), "id", [])]), "html", null, true);
                    echo "\">Ajouter
                                    un nouveau membre</a>
                            ";
                } else {
                    // line 282
                    echo "                                <a class=\"btn btn-success\"
                                   href=\"";
                    // line 283
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_profil_event", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["userConnected"]) || array_key_exists("userConnected", $context) ? $context["userConnected"] : (function () { throw new Twig_Error_Runtime('Variable "userConnected" does not exist.', 283, $this->source); })()), "id", []), "idevent" => twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 283, $this->source); })()), "id", [])]), "html", null, true);
                    echo "\">Ajouter
                                    un nouveau membre</a>
                            ";
                }
                // line 286
                echo "                            ";
            } else {
                // line 287
                echo "                                ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 288
                    echo "                                    <a class=\"btn btn-success\"
                                       href=\"";
                    // line 289
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_admin", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["userConnected"]) || array_key_exists("userConnected", $context) ? $context["userConnected"] : (function () { throw new Twig_Error_Runtime('Variable "userConnected" does not exist.', 289, $this->source); })()), "id", [])]), "html", null, true);
                    echo "\">Ajouter
                                        un nouveau membre</a>
                                ";
                } else {
                    // line 292
                    echo "                                    <a class=\"btn btn-success\"
                                       href=\"";
                    // line 293
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_profil", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["userConnected"]) || array_key_exists("userConnected", $context) ? $context["userConnected"] : (function () { throw new Twig_Error_Runtime('Variable "userConnected" does not exist.', 293, $this->source); })()), "id", [])]), "html", null, true);
                    echo "\">Ajouter
                                        un nouveau membre</a>
                                ";
                }
                // line 296
                echo "                            ";
            }
            // line 297
            echo "                        </div>

                    </div>

                </div>
            </div>
        </div>
    ";
        } else {
            // line 305
            echo "        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    ";
        }
        // line 307
        echo "</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/showFamily.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  670 => 307,  666 => 305,  656 => 297,  653 => 296,  647 => 293,  644 => 292,  638 => 289,  635 => 288,  632 => 287,  629 => 286,  623 => 283,  620 => 282,  614 => 279,  611 => 278,  608 => 277,  606 => 276,  595 => 267,  586 => 263,  581 => 262,  576 => 259,  569 => 255,  566 => 254,  563 => 253,  560 => 252,  553 => 248,  549 => 246,  542 => 242,  539 => 241,  536 => 240,  533 => 239,  527 => 238,  524 => 237,  522 => 236,  517 => 233,  514 => 232,  509 => 231,  506 => 230,  504 => 229,  499 => 227,  494 => 226,  488 => 224,  486 => 223,  483 => 222,  479 => 220,  475 => 218,  468 => 214,  465 => 213,  460 => 210,  457 => 209,  450 => 205,  446 => 203,  439 => 199,  436 => 198,  433 => 197,  430 => 196,  424 => 195,  421 => 194,  419 => 193,  414 => 190,  411 => 189,  406 => 188,  403 => 187,  401 => 186,  396 => 184,  391 => 183,  386 => 180,  379 => 176,  376 => 175,  373 => 174,  370 => 173,  363 => 169,  359 => 167,  352 => 163,  349 => 162,  346 => 161,  343 => 160,  337 => 159,  334 => 158,  332 => 157,  327 => 154,  324 => 153,  319 => 152,  316 => 151,  314 => 150,  309 => 148,  305 => 147,  301 => 146,  296 => 143,  293 => 142,  290 => 141,  288 => 140,  286 => 138,  281 => 137,  273 => 131,  269 => 129,  267 => 128,  257 => 120,  254 => 119,  251 => 118,  244 => 116,  241 => 115,  237 => 113,  234 => 112,  232 => 111,  225 => 109,  222 => 108,  220 => 107,  217 => 106,  213 => 104,  211 => 103,  205 => 99,  203 => 98,  182 => 79,  144 => 43,  126 => 27,  123 => 26,  114 => 25,  96 => 22,  81 => 13,  78 => 9,  69 => 8,  56 => 3,  47 => 2,  15 => 1,);
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



{% block title %}Composition de la famille{% endblock %}


{% block Body %}
    {% if  idevent is defined and idevent.easyinscription %}
<div class=\"card\">
    <!-- .card-header -->
    <div class=\"card-header\">
        <!-- .steps -->
        <div class=\"steps\" role=\"tablist\">
            <ul>
                <li class=\"active\" data-target=\"#test-l-1\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-people\"></i></span>
                        <span class=\"d-none d-sm-inline\">Inscription Rapide</span>
                    </a>
                </li>

            </ul>
        </div>
    {% else %}
<div class=\"card\">
    <!-- .card-header -->
    <div class=\"card-header\">
        <!-- .steps -->
        <div class=\"steps\" role=\"tablist\">
            <ul>
                <li class=\"active\" data-target=\"#test-l-1\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-people\"></i></span>
                        <span class=\"d-none d-sm-inline\">Participant</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-2\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#error1\" class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-person \"></i></span>
                        <span class=\"d-none d-sm-inline\">Informations du participant</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-3\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#error1\" class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-script \"></i></span>
                        <span class=\"d-none d-sm-inline\">Conditions Générales</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-4\">
                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#error1\" class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-check\"></i></span>
                        <span class=\"d-none d-sm-inline\">Résumé</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- /.steps -->
        <!--Error1-->
{% endif %}
        <div class=\"modal fade\" id=\"error1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
             xmlns=\"http://www.w3.org/1999/html\">
            <div class=\"modal-dialog\" role=\"document\">

                <div class=\"modal-body \">

                    <div class=\"row\">
                        <!-- grid column -->


                        <div class=\"alert alert-danger alert-dismissible fade show\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            <a href=\"#\" class=\"alert-link\">Veuillez d'abord choisir un <strong>participant</strong>.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% if (is_granted('ROLE_ADMIN') or app.user.id == app.request.get(\"id\")) %}

        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8\">
                    {% if (is_granted('ROLE_ADMIN') and app.user.id == app.request.get(\"id\")) %}
                        <h2>Choix du membre à inscrire</h2>
                    {% else %}
                        {% if (is_granted('ROLE_ADMIN')) %}
                            {# User est un parent  #}
                                <h2>Famille du membre
                                     {{ userConnected.user.firstName }} {{ userConnected.user.name }}</h2>
                        {% else %}
                            {# le userConnected consulte son propre profil #}
                            {% if (app.user.id == app.request.get(\"id\")) %}
                                <h2>Ma famille</h2>
                            {% else %}
                                <h2>Famille du membre
                                    : {{ userConnected.user.firstName }} {{ userConnected.user.name }}</h2>
                            {% endif %}
                        {% endif %}
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
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for user in users %}
                                                {# Si l'id dans l'URL != de l'id du user qui s'affiche
                                                (pr ne pas afficher son propre profil dans le liste) #}
                                                {#                {% if (user.ownerUser and app.request.get('id') != user.ownerUser.id) %}#}
                                                {% if (user.ownerUser and user.ownerUser.id == user.userConnected.id) %}
                                                    {% if (is_granted('ROLE_ADMIN')) %}

                                                        <tr>

                                                        <td><b>{{ user.id }}</b></td>
                                                        <td><b>{{ user.name }}</b></td>
                                                        <td><b>{{ user.firstName }}</b></td>
                                                        <td class=\"align-middle text-right\">
                                                            {% if idevent is defined %}
                                                                {% set foo = '1' %}
                                                                {% for prereg in preregs %}
                                                                    {% if prereg.user.id == user.id %}
                                                                        <a class=\"btn btn-secondary disabled disabled\">
                                                                            Inscrit <i class=\"oi oi-check\"></i>
                                                                        </a>
                                                                        {% set foo = '0' %}
                                                                    {% endif %}
                                                                {% endfor %}
                                                                {% if foo == 1 %}
                                                                   {% if  idevent.easyinscription %}
                                                                       <a class=\"btn btn-outline-info\"
                                                                          href=\"{{ path('prereg_simple', {'id':user.id, 'idevent':  idevent.id}) }}\">
                                                                           InscrireSimplifiée
                                                                       </a>
                                                                       {% else %}

                                                                    <a class=\"btn btn-outline-info\"
                                                                       href=\"{{ path('verify_profile', {'id':user.id, 'idevent':  idevent.id}) }}\">
                                                                        Inscrire
                                                                    </a>
                                                                       {% endif %}
                                                                {% endif %}
                                                            {% else %}
                                                                <a class=\"btn btn-outline-info\"
                                                                   href=\"{{ path('vika_event_showList', {'cat': 'all'}) }}\">
                                                                    Inscrire à un cours
                                                                </a>
                                                            {% endif %}
                                                        </td>

                                                    {% else %}
                                                        <td><b>{{ user.name }}</b></td>
                                                        <td><b>{{ user.firstName }}</b></td>
                                                        <td class=\"align-middle text-right\">
                                                            {% if idevent is defined %}
                                                                {% set foo = '1' %}
                                                                {% for prereg in preregs %}
                                                                    {% if prereg.user.id == user.id %}
                                                                        <a class=\"btn btn-secondary disabled disabled\">
                                                                            Inscrit <i class=\"oi oi-check\"></i>
                                                                        </a>
                                                                        {% set foo = '0' %}
                                                                    {% endif %}
                                                                {% endfor %}
                                                                {% if foo == 1 %}
                                                                    {% if  idevent.easyinscription %}
                                                                        <a class=\"btn btn-outline-info\"
                                                                           href=\"{{ path('prereg_simple', {'id':user.id, 'idevent':  idevent.id}) }}\">
                                                                            InscrireSimplifiée
                                                                        </a>
                                                                    {% else %}

                                                                        <a class=\"btn btn-outline-info\"
                                                                           href=\"{{ path('verify_profile', {'id':user.id, 'idevent':  idevent.id}) }}\">
                                                                            Inscrire
                                                                        </a>
                                                                    {% endif %}
                                                                {% endif %}


                                                            {% else %}
                                                                <a class=\"btn btn-outline-info\"
                                                                   href=\"{{ path('vika_event_showList', {'cat': 'all'}) }}\">
                                                                    Inscrire à un cours
                                                                </a>
                                                            {% endif %}
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
                                                        <td class=\"align-middle text-right\">
                                                            {% if idevent is defined %}
                                                                {% set foo = '1' %}
                                                                {% for prereg in preregs %}
                                                                    {% if prereg.user.id == user.id %}
                                                                        <a class=\"btn btn-secondary disabled disabled\">
                                                                            Inscrit <i class=\"oi oi-check\"></i>
                                                                        </a>
                                                                        {% set foo = '0' %}
                                                                    {% endif %}
                                                                {% endfor %}
                                                                {% if foo == 1 %}
                                                                    {% if  idevent.easyinscription %}
                                                                        <a class=\"btn btn-outline-info\"
                                                                           href=\"{{ path('prereg_simple', {'id':user.id, 'idevent':  idevent.id}) }}\">
                                                                            InscrireSimplifiée
                                                                        </a>
                                                                    {% else %}

                                                                        <a class=\"btn btn-outline-info\"
                                                                           href=\"{{ path('verify_profile', {'id':user.id, 'idevent':  idevent.id}) }}\">
                                                                            Inscrire
                                                                        </a>
                                                                    {% endif %}
                                                                {% endif %}
                                                            {% else %}
                                                                <a class=\"btn btn-outline-info\"
                                                                   href=\"{{ path('vika_event_showList', {'cat':'all'}) }}\">
                                                                    Inscrire à un cours
                                                                </a>
                                                            {% endif %}
                                                        </td>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row justify-content-end\">
                        <div class=\"col-auto\">
                            {% if idevent is defined %}
                            {% if (is_granted('ROLE_ADMIN')) %}
                                <a class=\"btn btn-success\"
                                   href=\"{{ path('add_admin_event',{'id':userConnected.id,'idevent':idevent.id}) }}\">Ajouter
                                    un nouveau membre</a>
                            {% else %}
                                <a class=\"btn btn-success\"
                                   href=\"{{ path('add_profil_event',{'id':userConnected.id,'idevent':idevent.id}) }}\">Ajouter
                                    un nouveau membre</a>
                            {% endif %}
                            {% else %}
                                {% if (is_granted('ROLE_ADMIN')) %}
                                    <a class=\"btn btn-success\"
                                       href=\"{{ path('add_admin',{'id':userConnected.id}) }}\">Ajouter
                                        un nouveau membre</a>
                                {% else %}
                                    <a class=\"btn btn-success\"
                                       href=\"{{ path('add_profil',{'id':userConnected.id}) }}\">Ajouter
                                        un nouveau membre</a>
                                {% endif %}
                            {% endif %}
                        </div>

                    </div>

                </div>
            </div>
        </div>
    {% else %}
        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    {% endif %}
</div>
    {% endblock %}

", "registration/showFamily.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\registration\\showFamily.html.twig");
    }
}

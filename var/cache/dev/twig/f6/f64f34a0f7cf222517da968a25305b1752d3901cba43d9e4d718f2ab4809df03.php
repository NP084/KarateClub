<?php

/* member/editProfile.html.twig */
class __TwigTemplate_01839f1ab3a4b70601056139164ea5b99347c4c779833d917b1853c284cb3470 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/editProfile.html.twig", 1);
        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/editProfile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/editProfile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/js/datetimepicker/jquery.datetimepicker.css\"/ >
    <script src=\"/js/datetimepicker/jquery.js\"></script>
    <script src=\"/js/datetimepicker/build/jquery.datetimepicker.full.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"js/datetimepicker/jquery.datetimepicker.js\"></script>
    <script>
        jQuery.datetimepicker.setLocale('fr');
        jQuery('.datetimepicker').datetimepicker({
            timepicker: false,
            format: 'd-m-Y',
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 23
        echo "
    <div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10\">
            ";
        // line 28
        echo "            ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 28, $this->source); })()), "userConnected", []), "id", [])))) {
            // line 29
            echo "            <div class=\"form-check-label\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <h2>Edition du profil </h2>
                    </div>
                </div>
                <div class=\"row\">
                    ";
            // line 36
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 37
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->source); })()), "id", [])]), "html", null, true);
                echo "\"
                           class=\"btn-btn-primary\">
                            <span class=\"badge badge-pill badge-warning\">Retour</span>
                        </a>
                        <a href=\"";
                // line 41
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users", ["orderby" => "ASC"]);
                echo "\" class=\"btn-btn-primary\">
                            <span class=\"badge badge-pill badge-warning\">Retour à la liste des utilisateurs</span>
                        </a>
                        ";
                // line 46
                echo "                    ";
            } elseif (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 46, $this->source); })()), "ownerUser", []) == false) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->source); })()), "user", []), "id", []) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 46, $this->source); })()), "userConnected", []), "id", [])))) {
                // line 47
                echo "                        <a class=\"btn-btn-primary\"
                           href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_family", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 48, $this->source); })()), "userConnected", []), "id", [])]), "html", null, true);
                echo "\">
                            <span class=\"badge badge-pill badge-warning\">Retour</span>
                        </a>
                    ";
            } else {
                // line 52
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 52, $this->source); })()), "id", [])]), "html", null, true);
                echo "\"
                           class=\"btn-btn-primary\">
                            <span class=\"badge badge-pill badge-warning\">Retour</span>
                        </a>
                    ";
            }
            // line 57
            echo "
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"user-avatar user-avatar-xl fileinput-button\">
                                ";
            // line 66
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 67
                echo "                                    <div class=\"fileinput-button-label\">
                                        <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_picture_user", ["id" => twig_get_attribute($this->env, $this->source,                 // line 69
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 69, $this->source); })()), "id", [])]), "html", null, true);
                echo "\">Modifier la photo</a>
                                    </div>
                                    <img src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 71, $this->source); })()), "imageFile"), "html", null, true);
                echo "\"
                                         alt=\"";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 72, $this->source); })()), "imageFile", []), "html", null, true);
                echo "\"
                                         name=\"avatar\" width=\"150\"/>
                                ";
            } else {
                // line 75
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 75, $this->source); })()), "imageFile"), "html", null, true);
                echo "\"
                                         alt=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 76, $this->source); })()), "imageFile", []), "html", null, true);
                echo "\"
                                         name=\"avatar\" width=\"150\"/>
                                ";
            }
            // line 79
            echo "
                            </div>
                        </div>
                    </div>
                    ";
            // line 85
            echo "                    ";
            // line 88
            echo "                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <h3> Informations générales :</h3>
                            </div>
                        </div>
                    </div>
                    ";
            // line 95
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 96
                echo "                        ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 96, $this->source); })()), 'form_start');
                echo "
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    ";
                // line 100
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 100, $this->source); })()), "name", []), 'label', ["label" => "Nom"]);
                echo "
                                    ";
                // line 101
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 101, $this->source); })()), "name", []), 'widget');
                echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <div class=\"form-group\">
                                        ";
                // line 109
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 109, $this->source); })()), "firstName", []), 'label', ["label" => "Prénom"]);
                echo "
                                        ";
                // line 110
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 110, $this->source); })()), "firstName", []), 'widget');
                echo "
                                    </div>
                                    <div class=\"metadata\">Inscrit sur le site depuis
                                        : ";
                // line 113
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 113, $this->source); })()), "createdUs", []), "d/m/Y"), "html", null, true);
                echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p> Email : ";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 121, $this->source); })()), "userConnected", []), "email", []), "html", null, true);
                echo " </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <div class=\"form-group\">
                                        ";
                // line 129
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 129, $this->source); })()), "birthdate", []), 'label', ["label" => "Date de naisssance"]);
                echo "
                                        ";
                // line 130
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 130, $this->source); })()), "birthdate", []), 'widget', ["attr" => ["class" => "datetimepicker"]]);
                echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <div class=\"form-group\">
                                        ";
                // line 139
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 139, $this->source); })()), "sex", []), 'label', ["label" => "Sexe"]);
                echo "
                                        ";
                // line 140
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 140, $this->source); })()), "sex", []), 'widget');
                echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    ";
                // line 148
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 148, $this->source); })()), "fedNum", []), 'label', ["label" => "Numéro de fédération"]);
                echo "
                                    ";
                // line 149
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 149, $this->source); })()), "fedNum", []), 'widget');
                echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    ";
                // line 156
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 156, $this->source); })()), "belt", []), 'label', ["label" => "Grade"]);
                echo "
                                    ";
                // line 157
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 157, $this->source); })()), "belt", []), 'widget');
                echo "
                                </div>
                            </div>
                            ";
                // line 161
                echo "                            ";
                $context["diff"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, "now"), "diff", [0 => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 161, $this->source); })()), "birthdate", [])], "method");
                // line 162
                echo "                            ";
                $context["age"] = (twig_get_attribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new Twig_Error_Runtime('Variable "diff" does not exist.', 162, $this->source); })()), "days", []) / 365);
                // line 163
                echo "                            ";
                if (((isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 163, $this->source); })()) < 13)) {
                    // line 164
                    echo "                                <div class=\"col-2\">
                                    <div class=\"form-group\">
                                        ";
                    // line 166
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 166, $this->source); })()), "bars", []), 'label', ["label" => "Barrettes"]);
                    echo "
                                        ";
                    // line 167
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 167, $this->source); })()), "bars", []), 'widget');
                    echo "
                                    </div>
                                </div>
                            ";
                } else {
                    // line 171
                    echo "                                ";
                    // line 172
                    echo "                                <div class=\"col-2\" style=\"visibility:hidden\">
                                    <div class=\"form-group\">
                                        ";
                    // line 174
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 174, $this->source); })()), "bars", []), 'label', ["label" => "Barrettes"]);
                    echo "
                                        ";
                    // line 175
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 175, $this->source); })()), "bars", []), 'widget');
                    echo "
                                    </div>
                                </div>
                            ";
                }
                // line 179
                echo "                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    ";
                // line 183
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 183, $this->source); })()), "receiptDate", []), 'label', ["label" => "Date de réception"]);
                echo "
                                    ";
                // line 184
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 184, $this->source); })()), "receiptDate", []), 'widget', ["attr" => ["class" => "datetimepicker"]]);
                echo "
                                </div>
                            </div>
                        </div>
                    ";
            } else {
                // line 189
                echo "                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h3>";
                // line 192
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 192, $this->source); })()), "name", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 192, $this->source); })()), "firstname", []), "html", null, true);
                echo " </h3>
                                    <div class=\"metadata\">Inscrit sur le site depuis
                                        : ";
                // line 194
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 194, $this->source); })()), "createdUs", []), "d/m/Y"), "html", null, true);
                echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p> Email : ";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 202, $this->source); })()), "userConnected", []), "email", []), "html", null, true);
                echo " </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p> Date de naissance
                                        : ";
                // line 210
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 210, $this->source); })()), "birthdate", []), "d/m/Y"), "html", null, true);
                echo " </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p> Numéro de fédération
                                        : ";
                // line 218
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 218, $this->source); })()), "fedNum", []), "html", null, true);
                echo " </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            ";
                // line 223
                $context["diff"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, "now"), "diff", [0 => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 223, $this->source); })()), "birthdate", [])], "method");
                // line 224
                echo "                            ";
                $context["age"] = (twig_get_attribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new Twig_Error_Runtime('Variable "diff" does not exist.', 224, $this->source); })()), "days", []) / 365);
                // line 225
                echo "                            ";
                if (((isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 225, $this->source); })()) < 13)) {
                    // line 226
                    echo "                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        ";
                    // line 228
                    if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 228, $this->source); })()), "belt", [])) {
                        // line 229
                        echo "                                            <h4> Grade</h4>
                                            <p>";
                        // line 230
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 230, $this->source); })()), "belt", []), "html", null, true);
                        echo "
                                                ";
                        // line 231
                        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 231, $this->source); })()), "bars", [])) {
                            // line 232
                            echo "                                                avec ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 232, $this->source); })()), "bars", []), "html", null, true);
                            echo " barette(s)
                                                ";
                        }
                        // line 233
                        echo ", reçu
                                                le ";
                        // line 234
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 234, $this->source); })()), "receiptDate", []), "d/m/Y"), "html", null, true);
                        echo "</p>
                                        ";
                    }
                    // line 236
                    echo "                                    </div>
                                </div>
                            ";
                } else {
                    // line 239
                    echo "                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        ";
                    // line 241
                    if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 241, $this->source); })()), "belt", [])) {
                        // line 242
                        echo "                                            <h4> Grade</h4>
                                            <p>";
                        // line 243
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 243, $this->source); })()), "belt", []), "html", null, true);
                        echo ", reçu
                                                le ";
                        // line 244
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 244, $this->source); })()), "receiptDate", []), "d/m/Y"), "html", null, true);
                        echo "</p>
                                        ";
                    }
                    // line 246
                    echo "                                    </div>
                                </div>
                            ";
                }
                // line 249
                echo "                        </div>
                    ";
            }
            // line 251
            echo "
                    ";
            // line 253
            echo "                    ";
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 253, $this->source); })()), "ownerUser", []) == false))) {
                // line 254
                echo "                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h3> Informations sur le titulaire du compte</h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    ";
                // line 264
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 265
                    echo "                                        <a class=\"btn btn-link\"
                                           href=\"";
                    // line 266
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 266, $this->source); })()), "userConnected", []), "user", []), "id", [])]), "html", null, true);
                    echo "\">
                                            <h4>";
                    // line 267
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 267, $this->source); })()), "userConnected", []), "user", []), "name", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 267, $this->source); })()), "userConnected", []), "user", []), "firstname", []), "html", null, true);
                    echo " </h4>
                                            <span class=\"sr-only\">Voir le profil</span>
                                        </a>
                                    ";
                } else {
                    // line 271
                    echo "                                        <a class=\"btn btn-link\"
                                           href=\"";
                    // line 272
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 272, $this->source); })()), "userConnected", []), "user", []), "id", [])]), "html", null, true);
                    echo "\">
                                            <h4>";
                    // line 273
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 273, $this->source); })()), "userConnected", []), "user", []), "name", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 273, $this->source); })()), "userConnected", []), "user", []), "firstname", []), "html", null, true);
                    echo " </h4>
                                            <span class=\"sr-only\">Voir le profil</span>
                                        </a>
                                    ";
                }
                // line 277
                echo "                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p> Numéro de fédération : ";
                // line 283
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 283, $this->source); })()), "userConnected", []), "user", []), "fedNum", []), "html", null, true);
                echo " </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p> Email : ";
                // line 290
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 290, $this->source); })()), "userConnected", []), "email", []), "html", null, true);
                echo " </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <h3> Numéro(s) de téléphone </h3>
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Numéro</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
                // line 306
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 306, $this->source); })()), "userConnected", []), "user", []), "phones", []));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                    // line 307
                    echo "                                        <tr>
                                            <td>";
                    // line 308
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "type", []), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 309
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "num", []), "html", null, true);
                    echo "</td>
                                        </tr>
                                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 312
                    echo "                                        <tr>
                                            <td colspan=\"10\">Aucun numéro de téléphone</td>
                                        </tr>
                                        </tbody>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 317
                echo "                                    </table>
                                </div>

                            </div>
                        </div>
                    ";
            }
            // line 323
            echo "                </div>
            </div>
            ";
            // line 325
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 326
                echo "                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-outline-info\">
                                Enregistrer modification(s)
                            </button>
                            ";
                // line 332
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 332, $this->source); })()), 'form_end');
                echo "
                        </div>
                    </div>
                </div>
            ";
            }
            // line 337
            echo "        </div>
    </div>

    ";
            // line 341
            echo "    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <h2>Coordonnées</h2>
                <div class=\"card\">
                    <div class=\"card-body\">
                        ";
            // line 348
            echo "                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <h3>Téléphones</h3>
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Numéro</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 361
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 361, $this->source); })()), "phones", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 362
                echo "                                        <tr>
                                            <td>";
                // line 363
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "type", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 364
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["phone"], "num", []), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-right\">
                                                ";
                // line 366
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 367
                    echo "                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                   onclick=\"return confirm('Veuillez confirmer la suppression du numéro de téléphone svp?');\"
                                                   href=\"";
                    // line 369
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_phone_admin", ["idPhone" => twig_get_attribute($this->env, $this->source, $context["phone"], "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 369, $this->source); })()), "id", [])]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-trash-o\">
                                                    </i>
                                                    <span class=\"sr-only\">Supprimer</span>
                                                </a>
                                                ";
                } else {
                    // line 375
                    echo "                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                   onclick=\"return confirm('Veuillez confirmer la suppression du numéro de téléphone svp?');\"
                                                   href=\"";
                    // line 377
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_phone", ["idPhone" => twig_get_attribute($this->env, $this->source, $context["phone"], "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 377, $this->source); })()), "id", [])]), "html", null, true);
                    echo "\">
                                                    <i class=\"fa fa-trash-o\">
                                                    </i>
                                                    <span class=\"sr-only\">Supprimer</span>
                                                </a>
                                            </td>
                                        </tr>
                                        ";
                }
                // line 385
                echo "                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 386
                echo "                                        <tr>
                                            <td colspan=\"10\">Aucune numéro de téléphone
                                            </td>
                                        </tr>
                                        </tbody>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            echo "                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h4>Nouveau numéro</h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    ";
            // line 406
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 406, $this->source); })()), 'form_start');
            echo "
                                    ";
            // line 407
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 407, $this->source); })()), "type", []), 'label', ["label" => "Type"]);
            echo "
                                    ";
            // line 408
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 408, $this->source); })()), "type", []), 'widget', ["attr" => ["placeholder" => "Domicile, travail..."]]);
            // line 410
            echo "
                                </div>
                            </div>
                            <div class=\"col-5\">
                                <div class=\"form-group\">
                                    ";
            // line 415
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 415, $this->source); })()), "num", []), 'label', ["label" => "Numéro"]);
            echo "
                                    ";
            // line 416
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 416, $this->source); })()), "num", []), 'widget', ["attr" => ["placeholder" => "Votre nouveau numéro..."]]);
            // line 418
            echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-outline-info\">Ajouter numéro
                                    </button>
                                    ";
            // line 427
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 427, $this->source); })()), 'form_end');
            echo "
                                </div>
                            </div>
                        </div>
                        ";
            // line 432
            echo "                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h3>Adresses</h3>
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Numéro</th>
                                            <th>Rue</th>
                                            <th>Ville</th>
                                            <th>Pays</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 448
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 448, $this->source); })()), "adress", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["adress"]) {
                // line 449
                echo "                                        <tr>
                                            <td>";
                // line 450
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "type", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 451
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "num", []), "html", null, true);
                echo "
                                                ";
                // line 452
                if (twig_get_attribute($this->env, $this->source, $context["adress"], "postBox", [])) {
                    // line 453
                    echo "                                                    (BP:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "postBox", []), "html", null, true);
                    echo ")
                                                ";
                }
                // line 455
                echo "                                            </td>
                                            <td>";
                // line 456
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "streetName", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 457
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "cityName", []), "html", null, true);
                echo "
                                                ";
                // line 458
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "zip", [])) {
                    // line 459
                    echo "                                                    (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "zip", []), "html", null, true);
                    echo ")
                                                ";
                }
                // line 461
                echo "                                            </td>
                                            <td>";
                // line 462
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adress"], "city", []), "country", []), "countryName", []), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle text-right\">
                                                ";
                // line 464
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 465
                    echo "                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       onclick=\"return confirm('Veuillez confirmer la suppression de l\\'adresse svp?');\"
                                                       href=\"";
                    // line 467
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_adress_admin", ["idAdress" => twig_get_attribute($this->env, $this->source, $context["adress"], "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 467, $this->source); })()), "id", [])]), "html", null, true);
                    echo "\">
                                                        <i class=\"fa fa-trash-o\">
                                                        </i>
                                                        <span class=\"sr-only\">Supprimer</span>
                                                    </a>
                                                ";
                } else {
                    // line 473
                    echo "                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       onclick=\"return confirm('Veuillez confirmer la suppression de l\\'adresse svp?');\"
                                                       href=\"";
                    // line 475
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_adress", ["idAdress" => twig_get_attribute($this->env, $this->source, $context["adress"], "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 475, $this->source); })()), "id", [])]), "html", null, true);
                    echo "\">
                                                        <i class=\"fa fa-trash-o\">
                                                        </i>
                                                        <span class=\"sr-only\">Supprimer</span>
                                                    </a>
                                                ";
                }
                // line 481
                echo "                                            </td>
                                        </tr>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 484
                echo "                                        <tr>
                                            <td colspan=\"10\">Aucune adresse</td>
                                        </tr>
                                        </tbody>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 489
            echo "                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h4>Nouvelle adresse</h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    ";
            // line 503
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 503, $this->source); })()), 'form_start');
            echo "
                                    ";
            // line 504
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 504, $this->source); })()), "type", []), 'label', ["label" => "Type"]);
            echo "
                                    ";
            // line 505
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 505, $this->source); })()), "type", []), 'widget', ["attr" => ["placeholder" => "Domicile, travail..."]]);
            // line 507
            echo "
                                </div>
                            </div>
                            <div class=\"col-2\">
                                <div class=\"form-group\">
                                    ";
            // line 512
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 512, $this->source); })()), "num", []), 'label', ["label" => "Numéro"]);
            echo "
                                    ";
            // line 513
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 513, $this->source); })()), "num", []), 'widget');
            echo "
                                </div>
                            </div>
                            <div class=\"col-2\">
                                <div class=\"form-group\">
                                    ";
            // line 518
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 518, $this->source); })()), "postBox", []), 'label', ["label" => "BP"]);
            echo "
                                    ";
            // line 519
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 519, $this->source); })()), "postBox", []), 'widget');
            echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    ";
            // line 526
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 526, $this->source); })()), "streetName", []), 'label', ["label" => "Rue"]);
            echo "
                                    ";
            // line 527
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 527, $this->source); })()), "streetName", []), 'widget');
            echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\">
                                <div class=\"form-group\">
                                    ";
            // line 534
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 534, $this->source); })()), "cityName", []), 'label', ["label" => "Ville"]);
            echo "
                                    ";
            // line 535
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 535, $this->source); })()), "cityName", []), 'widget');
            echo "
                                </div>
                            </div>
                            <div class=\"col-3\">
                                <div class=\"form-group\">
                                    ";
            // line 540
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 540, $this->source); })()), "zip", []), 'label', ["label" => "Code postal"]);
            echo "
                                    ";
            // line 541
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 541, $this->source); })()), "zip", []), 'widget');
            echo "
                                </div>
                            </div>
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    ";
            // line 546
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 546, $this->source); })()), "country", []), 'label', ["label" => "Pays"]);
            echo "
                                    ";
            // line 547
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 547, $this->source); })()), "country", []), 'widget');
            echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-outline-info\">Ajouter adresse
                                    </button>
                                    ";
            // line 556
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 556, $this->source); })()), 'form_end');
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
            // line 566
            echo "    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <h2>Personnes de contact</h2>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Numéro</th>
                                            <th>Relation</th>
                                            <th>Informations</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 587
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 587, $this->source); })()), "contactLists", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["contactList"]) {
                // line 588
                echo "                                        <tr>
                                            <td>";
                // line 589
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "name", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 590
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "firstName", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 591
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "num1", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 592
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactList"], "relation", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 593
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contactList"], "info", []), "html", null, true);
                echo "</td>

                                            <td class=\"align-middle text-right\">
                                                ";
                // line 596
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 597
                    echo "                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       href=\"";
                    // line 598
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_PoC_admin", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 598, $this->source); })()), "id", []), "idCL" => twig_get_attribute($this->env, $this->source, $context["contactList"], "id", []), "idPoC" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "id", [])]), "html", null, true);
                    echo "\">
                                                        <i class=\"fa fa-pencil\">
                                                        </i>
                                                        <span class=\"sr-only\">Modifier</span>
                                                    </a>
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       onclick=\"return confirm('Veuillez confirmer la suppression de la personne de contact svp?');\"
                                                       href=\"";
                    // line 605
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_PoC_admin", ["idCL" => twig_get_attribute($this->env, $this->source, $context["contactList"], "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 605, $this->source); })()), "id", [])]), "html", null, true);
                    echo "\">
                                                        <i class=\"fa fa-trash-o\">
                                                        </i>
                                                        <span class=\"sr-only\">Supprimer</span>
                                                    </a>
                                                ";
                } else {
                    // line 611
                    echo "                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       href=\"";
                    // line 612
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_PoC", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 612, $this->source); })()), "id", []), "idCL" => twig_get_attribute($this->env, $this->source, $context["contactList"], "id", []), "idPoC" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactList"], "personOfContact", []), "id", [])]), "html", null, true);
                    echo "\">
                                                        <i class=\"fa fa-pencil\">
                                                        </i>
                                                        <span class=\"sr-only\">Modifier</span>
                                                    </a>
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       onclick=\"return confirm('Veuillez confirmer la suppression de la personne de contact svp?');\"
                                                       href=\"";
                    // line 619
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_PoC", ["idCL" => twig_get_attribute($this->env, $this->source, $context["contactList"], "id", []), "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 619, $this->source); })()), "id", [])]), "html", null, true);
                    echo "\">
                                                        <i class=\"fa fa-trash-o\">
                                                        </i>
                                                        <span class=\"sr-only\">Supprimer</span>
                                                    </a>
                                                ";
                }
                // line 625
                echo "                                            </td>
                                        </tr>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 628
                echo "                                        <tr>
                                            <td colspan=\"10\">Aucune personne de contact</td>
                                        </tr>
                                        </tbody>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 633
            echo "                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h4>Nouvelle personne de contact</h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"form-group\">
                                    ";
            // line 647
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 647, $this->source); })()), 'form_start');
            echo "
                                    ";
            // line 648
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 648, $this->source); })()), "name", []), 'label', ["label" => "Nom"]);
            echo "
                                    ";
            // line 649
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 649, $this->source); })()), "name", []), 'widget');
            echo "
                                </div>
                            </div>
                            <div class=\"col-3\">
                                <div class=\"form-group\">
                                    ";
            // line 654
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 654, $this->source); })()), "firstName", []), 'label', ["label" => "Prénom"]);
            echo "
                                    ";
            // line 655
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 655, $this->source); })()), "firstName", []), 'widget');
            echo "
                                </div>
                            </div>
                            <div class=\"col-3\">
                                <div class=\"form-group\">
                                    ";
            // line 660
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 660, $this->source); })()), "num1", []), 'label', ["label" => "Numéro de téléphone"]);
            echo "
                                    ";
            // line 661
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 661, $this->source); })()), "num1", []), 'widget');
            echo "
                                </div>
                            </div>
                            <div class=\"col-3\">
                                <div class=\"form-group\">
                                    ";
            // line 666
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 666, $this->source); })()), "relation", []), 'label', ["label" => "Relation (parent, amis...)"]);
            echo "
                                    ";
            // line 667
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 667, $this->source); })()), "relation", []), 'widget');
            echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    ";
            // line 674
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 674, $this->source); })()), "info", []), 'label', ["label" => "Information complémentaire"]);
            // line 675
            echo "
                                    ";
            // line 676
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 676, $this->source); })()), "info", []), 'widget', ["attr" => ["rows" => "4"]]);
            // line 677
            echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-outline-info\">Ajouter une nouvelle
                                        personne
                                        de contact
                                    </button>
                                    ";
            // line 688
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 688, $this->source); })()), 'form_end');
            echo "
                                    ";
            // line 689
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 689, $this->source); })()), 'form_end');
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
            // line 699
            echo "        <h2> Vous n'êtes pas autorisé à accéder à cette page </h2>
    ";
        }
        // line 701
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/editProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1282 => 701,  1278 => 699,  1265 => 689,  1261 => 688,  1248 => 677,  1246 => 676,  1243 => 675,  1241 => 674,  1231 => 667,  1227 => 666,  1219 => 661,  1215 => 660,  1207 => 655,  1203 => 654,  1195 => 649,  1191 => 648,  1187 => 647,  1171 => 633,  1161 => 628,  1154 => 625,  1145 => 619,  1135 => 612,  1132 => 611,  1123 => 605,  1113 => 598,  1110 => 597,  1108 => 596,  1102 => 593,  1098 => 592,  1094 => 591,  1090 => 590,  1086 => 589,  1083 => 588,  1078 => 587,  1055 => 566,  1043 => 556,  1031 => 547,  1027 => 546,  1019 => 541,  1015 => 540,  1007 => 535,  1003 => 534,  993 => 527,  989 => 526,  979 => 519,  975 => 518,  967 => 513,  963 => 512,  956 => 507,  954 => 505,  950 => 504,  946 => 503,  930 => 489,  920 => 484,  913 => 481,  904 => 475,  900 => 473,  891 => 467,  887 => 465,  885 => 464,  880 => 462,  877 => 461,  871 => 459,  869 => 458,  865 => 457,  861 => 456,  858 => 455,  852 => 453,  850 => 452,  846 => 451,  842 => 450,  839 => 449,  834 => 448,  816 => 432,  809 => 427,  798 => 418,  796 => 416,  792 => 415,  785 => 410,  783 => 408,  779 => 407,  775 => 406,  759 => 392,  748 => 386,  743 => 385,  732 => 377,  728 => 375,  719 => 369,  715 => 367,  713 => 366,  708 => 364,  704 => 363,  701 => 362,  696 => 361,  681 => 348,  673 => 341,  668 => 337,  660 => 332,  652 => 326,  650 => 325,  646 => 323,  638 => 317,  628 => 312,  620 => 309,  616 => 308,  613 => 307,  608 => 306,  589 => 290,  579 => 283,  571 => 277,  562 => 273,  558 => 272,  555 => 271,  546 => 267,  542 => 266,  539 => 265,  537 => 264,  525 => 254,  522 => 253,  519 => 251,  515 => 249,  510 => 246,  505 => 244,  501 => 243,  498 => 242,  496 => 241,  492 => 239,  487 => 236,  482 => 234,  479 => 233,  473 => 232,  471 => 231,  467 => 230,  464 => 229,  462 => 228,  458 => 226,  455 => 225,  452 => 224,  450 => 223,  442 => 218,  431 => 210,  420 => 202,  409 => 194,  402 => 192,  397 => 189,  389 => 184,  385 => 183,  379 => 179,  372 => 175,  368 => 174,  364 => 172,  362 => 171,  355 => 167,  351 => 166,  347 => 164,  344 => 163,  341 => 162,  338 => 161,  332 => 157,  328 => 156,  318 => 149,  314 => 148,  303 => 140,  299 => 139,  287 => 130,  283 => 129,  272 => 121,  261 => 113,  255 => 110,  251 => 109,  240 => 101,  236 => 100,  228 => 96,  226 => 95,  217 => 88,  215 => 85,  209 => 79,  203 => 76,  198 => 75,  192 => 72,  188 => 71,  183 => 69,  182 => 68,  179 => 67,  177 => 66,  166 => 57,  157 => 52,  150 => 48,  147 => 47,  144 => 46,  138 => 41,  130 => 37,  128 => 36,  119 => 29,  116 => 28,  110 => 23,  101 => 22,  80 => 11,  71 => 10,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/js/datetimepicker/jquery.datetimepicker.css\"/ >
    <script src=\"/js/datetimepicker/jquery.js\"></script>
    <script src=\"/js/datetimepicker/build/jquery.datetimepicker.full.min.js\"></script>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"js/datetimepicker/jquery.datetimepicker.js\"></script>
    <script>
        jQuery.datetimepicker.setLocale('fr');
        jQuery('.datetimepicker').datetimepicker({
            timepicker: false,
            format: 'd-m-Y',
        });
    </script>
{% endblock %}

{% block Body %}

    <div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10\">
            {# Admin ou si la personne connectée est le parent du profil consulté #}
            {% if (is_granted('ROLE_ADMIN') or app.user.id == user.userConnected.id) %}
            <div class=\"form-check-label\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <h2>Edition du profil </h2>
                    </div>
                </div>
                <div class=\"row\">
                    {% if (is_granted('ROLE_ADMIN')) %}
                        <a href=\"{{ path('admin_show',{'id':user.id}) }}\"
                           class=\"btn-btn-primary\">
                            <span class=\"badge badge-pill badge-warning\">Retour</span>
                        </a>
                        <a href=\"{{ path('admin_users', {'orderby':'ASC'}) }}\" class=\"btn-btn-primary\">
                            <span class=\"badge badge-pill badge-warning\">Retour à la liste des utilisateurs</span>
                        </a>
                        {# le profil consulté est un enfant et la personne connectée est son parent:
             le retour se fait vers \"Ma famille\", sinon pas de btn retour#}
                    {% elseif(user.ownerUser == false and app.user.id == user.userConnected.id) %}
                        <a class=\"btn-btn-primary\"
                           href=\"{{ path('view_family',{'id':user.userConnected.id}) }}\">
                            <span class=\"badge badge-pill badge-warning\">Retour</span>
                        </a>
                    {% else %}
                        <a href=\"{{ path('profile_show',{'id':user.id}) }}\"
                           class=\"btn-btn-primary\">
                            <span class=\"badge badge-pill badge-warning\">Retour</span>
                        </a>
                    {% endif %}

                </div>
            </div>

            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"user-avatar user-avatar-xl fileinput-button\">
                                {% if (is_granted('ROLE_ADMIN')) %}
                                    <div class=\"fileinput-button-label\">
                                        <a href=\"{{ path('admin_picture_user',
                                            {'id':user.id}) }}\">Modifier la photo</a>
                                    </div>
                                    <img src=\"{{ vich_uploader_asset(user, 'imageFile') }}\"
                                         alt=\"{{ user.imageFile }}\"
                                         name=\"avatar\" width=\"150\"/>
                                {% else %}
                                    <img src=\"{{ vich_uploader_asset(user, 'imageFile') }}\"
                                         alt=\"{{ user.imageFile }}\"
                                         name=\"avatar\" width=\"150\"/>
                                {% endif %}

                            </div>
                        </div>
                    </div>
                    {#Parent (qui peut être admin admin) qui visite son propre profil
                     ou un admin qui consulte un parent#}
                    {#    {% if ((user.ownerUser and (user.ownerUser.id == app.user.id))
                            or (is_granted('ROLE_ADMIN') and (user.ownerUser and user.userConnected.id == user.ownerUser.id)) ) %}
    #}
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <h3> Informations générales :</h3>
                            </div>
                        </div>
                    </div>
                    {% if is_granted('ROLE_ADMIN') %}
                        {{ form_start(formUser) }}
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    {{ form_label(formUser.name, 'Nom') }}
                                    {{ form_widget(formUser.name) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <div class=\"form-group\">
                                        {{ form_label(formUser.firstName, 'Prénom') }}
                                        {{ form_widget(formUser.firstName) }}
                                    </div>
                                    <div class=\"metadata\">Inscrit sur le site depuis
                                        : {{ user.createdUs |date('d/m/Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p> Email : {{ user.userConnected.email }} </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <div class=\"form-group\">
                                        {{ form_label(formUser.birthdate, 'Date de naisssance') }}
                                        {{ form_widget(formUser.birthdate, { attr:{ class:'datetimepicker'}}) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <div class=\"form-group\">
                                        {{ form_label(formUser.sex, 'Sexe') }}
                                        {{ form_widget(formUser.sex) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    {{ form_label(formUser.fedNum, 'Numéro de fédération') }}
                                    {{ form_widget(formUser.fedNum) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    {{ form_label(formUser.belt, 'Grade') }}
                                    {{ form_widget(formUser.belt) }}
                                </div>
                            </div>
                            {#les barrettes ne s'affichent que pour les membres de moins de 12 ans (12 ans compris)#}
                            {% set diff = date(\"now\").diff(user.birthdate) %}
                            {% set age = diff.days/365 %}
                            {% if (age<13) %}
                                <div class=\"col-2\">
                                    <div class=\"form-group\">
                                        {{ form_label(formUser.bars, 'Barrettes') }}
                                        {{ form_widget(formUser.bars) }}
                                    </div>
                                </div>
                            {% else %}
                                {# si plus de 12 ans, les barrettes sont cachées grâce à style#}
                                <div class=\"col-2\" style=\"visibility:hidden\">
                                    <div class=\"form-group\">
                                        {{ form_label(formUser.bars, 'Barrettes') }}
                                        {{ form_widget(formUser.bars) }}
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    {{ form_label(formUser.receiptDate, 'Date de réception') }}
                                    {{ form_widget(formUser.receiptDate, { attr:{ class:'datetimepicker' } }) }}
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h3>{{ user.name }} {{ user.firstname }} </h3>
                                    <div class=\"metadata\">Inscrit sur le site depuis
                                        : {{ user.createdUs |date('d/m/Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p> Email : {{ user.userConnected.email }} </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p> Date de naissance
                                        : {{ user.birthdate |date('d/m/Y') }} </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p> Numéro de fédération
                                        : {{ user.fedNum }} </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            {% set diff = date(\"now\").diff(user.birthdate) %}
                            {% set age = diff.days/365 %}
                            {% if (age<13) %}
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        {% if (user.belt) %}
                                            <h4> Grade</h4>
                                            <p>{{ user.belt }}
                                                {% if (user.bars) %}
                                                avec {{ user.bars }} barette(s)
                                                {% endif %}, reçu
                                                le {{ user.receiptDate |date('d/m/Y') }}</p>
                                        {% endif %}
                                    </div>
                                </div>
                            {% else %}
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        {% if (user.belt) %}
                                            <h4> Grade</h4>
                                            <p>{{ user.belt }}, reçu
                                                le {{ user.receiptDate |date('d/m/Y') }}</p>
                                        {% endif %}
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    {% endif %}

                    {# parent ou admin qui consulte un User \"enfant\" #}
                    {% if( (is_granted('ROLE_USER') or is_granted('ROLE_ADMIN')) and (user.ownerUser == false)) %}
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h3> Informations sur le titulaire du compte</h3>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    {% if (is_granted('ROLE_ADMIN')) %}
                                        <a class=\"btn btn-link\"
                                           href=\"{{ path('admin_show', {'id':user.userConnected.user.id}) }}\">
                                            <h4>{{ user.userConnected.user.name }} {{ user.userConnected.user.firstname }} </h4>
                                            <span class=\"sr-only\">Voir le profil</span>
                                        </a>
                                    {% else %}
                                        <a class=\"btn btn-link\"
                                           href=\"{{ path('profile_show',{'id':user.userConnected.user.id}) }}\">
                                            <h4>{{ user.userConnected.user.name }} {{ user.userConnected.user.firstname }} </h4>
                                            <span class=\"sr-only\">Voir le profil</span>
                                        </a>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p> Numéro de fédération : {{ user.userConnected.user.fedNum }} </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p> Email : {{ user.userConnected.email }} </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <h3> Numéro(s) de téléphone </h3>
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Numéro</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for phone in user.userConnected.user.phones %}
                                        <tr>
                                            <td>{{ phone.type }}</td>
                                            <td>{{ phone.num }}</td>
                                        </tr>
                                        {% else %}
                                        <tr>
                                            <td colspan=\"10\">Aucun numéro de téléphone</td>
                                        </tr>
                                        </tbody>
                                        {% endfor %}
                                    </table>
                                </div>

                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-outline-info\">
                                Enregistrer modification(s)
                            </button>
                            {{ form_end(formUser) }}
                        </div>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>

    {#COORDONNEES #}
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <h2>Coordonnées</h2>
                <div class=\"card\">
                    <div class=\"card-body\">
                        {# TELEPHONES #}
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <h3>Téléphones</h3>
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Numéro</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for phone in user.phones %}
                                        <tr>
                                            <td>{{ phone.type }}</td>
                                            <td>{{ phone.num }}</td>
                                            <td class=\"align-middle text-right\">
                                                {% if (is_granted('ROLE_ADMIN')) %}
                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                   onclick=\"return confirm('Veuillez confirmer la suppression du numéro de téléphone svp?');\"
                                                   href=\"{{ path('remove_phone_admin',{'idPhone':phone.id, 'id':user.id}) }}\">
                                                    <i class=\"fa fa-trash-o\">
                                                    </i>
                                                    <span class=\"sr-only\">Supprimer</span>
                                                </a>
                                                {% else %}
                                                <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                   onclick=\"return confirm('Veuillez confirmer la suppression du numéro de téléphone svp?');\"
                                                   href=\"{{ path('remove_phone',{'idPhone':phone.id, 'id':user.id}) }}\">
                                                    <i class=\"fa fa-trash-o\">
                                                    </i>
                                                    <span class=\"sr-only\">Supprimer</span>
                                                </a>
                                            </td>
                                        </tr>
                                        {% endif %}
                                        {% else %}
                                        <tr>
                                            <td colspan=\"10\">Aucune numéro de téléphone
                                            </td>
                                        </tr>
                                        </tbody>
                                        {% endfor %}
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h4>Nouveau numéro</h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    {{ form_start(phoneForm) }}
                                    {{ form_label(phoneForm.type, 'Type') }}
                                    {{ form_widget(phoneForm.type,  {'attr':{
                                        'placeholder':\"Domicile, travail...\"
                                    }}) }}
                                </div>
                            </div>
                            <div class=\"col-5\">
                                <div class=\"form-group\">
                                    {{ form_label(phoneForm.num, 'Numéro') }}
                                    {{ form_widget(phoneForm.num,  {'attr':{
                                        'placeholder':\"Votre nouveau numéro...\"
                                    }}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-outline-info\">Ajouter numéro
                                    </button>
                                    {{ form_end(phoneForm) }}
                                </div>
                            </div>
                        </div>
                        {# ADRESSES #}
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h3>Adresses</h3>
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Numéro</th>
                                            <th>Rue</th>
                                            <th>Ville</th>
                                            <th>Pays</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for adress in user.adress %}
                                        <tr>
                                            <td>{{ adress.type }}</td>
                                            <td>{{ adress.num }}
                                                {% if adress.postBox %}
                                                    (BP:{{ adress.postBox }})
                                                {% endif %}
                                            </td>
                                            <td>{{ adress.streetName }}</td>
                                            <td>{{ adress.city.cityName }}
                                                {% if adress.city.zip %}
                                                    ({{ adress.city.zip }})
                                                {% endif %}
                                            </td>
                                            <td>{{ adress.city.country.countryName }}</td>
                                            <td class=\"align-middle text-right\">
                                                {% if (is_granted('ROLE_ADMIN')) %}
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       onclick=\"return confirm('Veuillez confirmer la suppression de l\\'adresse svp?');\"
                                                       href=\"{{ path('remove_adress_admin',{'idAdress':adress.id, 'id':user.id}) }}\">
                                                        <i class=\"fa fa-trash-o\">
                                                        </i>
                                                        <span class=\"sr-only\">Supprimer</span>
                                                    </a>
                                                {% else %}
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       onclick=\"return confirm('Veuillez confirmer la suppression de l\\'adresse svp?');\"
                                                       href=\"{{ path('remove_adress',{'idAdress':adress.id, 'id':user.id}) }}\">
                                                        <i class=\"fa fa-trash-o\">
                                                        </i>
                                                        <span class=\"sr-only\">Supprimer</span>
                                                    </a>
                                                {% endif %}
                                            </td>
                                        </tr>
                                        {% else %}
                                        <tr>
                                            <td colspan=\"10\">Aucune adresse</td>
                                        </tr>
                                        </tbody>
                                        {% endfor %}
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h4>Nouvelle adresse</h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    {{ form_start(adressForm) }}
                                    {{ form_label(adressForm.type, 'Type') }}
                                    {{ form_widget(adressForm.type,  {'attr':{
                                        'placeholder':\"Domicile, travail...\"
                                    }}) }}
                                </div>
                            </div>
                            <div class=\"col-2\">
                                <div class=\"form-group\">
                                    {{ form_label(adressForm.num, 'Numéro') }}
                                    {{ form_widget(adressForm.num) }}
                                </div>
                            </div>
                            <div class=\"col-2\">
                                <div class=\"form-group\">
                                    {{ form_label(adressForm.postBox, 'BP') }}
                                    {{ form_widget(adressForm.postBox) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    {{ form_label(adressForm.streetName, 'Rue') }}
                                    {{ form_widget(adressForm.streetName) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\">
                                <div class=\"form-group\">
                                    {{ form_label(cityForm.cityName, 'Ville') }}
                                    {{ form_widget(cityForm.cityName) }}
                                </div>
                            </div>
                            <div class=\"col-3\">
                                <div class=\"form-group\">
                                    {{ form_label(cityForm.zip, 'Code postal') }}
                                    {{ form_widget(cityForm.zip) }}
                                </div>
                            </div>
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    {{ form_label(cityForm.country, 'Pays') }}
                                    {{ form_widget(cityForm.country) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-outline-info\">Ajouter adresse
                                    </button>
                                    {{ form_end(adressForm) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {#PERSONNES DE CONTACT #}
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <h2>Personnes de contact</h2>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <table class=\"table\">
                                        <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Numéro</th>
                                            <th>Relation</th>
                                            <th>Informations</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for contactList in user.contactLists %}
                                        <tr>
                                            <td>{{ contactList.personOfContact.name }}</td>
                                            <td>{{ contactList.personOfContact.firstName }}</td>
                                            <td>{{ contactList.personOfContact.num1 }}</td>
                                            <td>{{ contactList.relation }}</td>
                                            <td>{{ contactList.info }}</td>

                                            <td class=\"align-middle text-right\">
                                                {% if (is_granted('ROLE_ADMIN')) %}
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       href=\"{{ path('edit_PoC_admin',{'id':user.id, 'idCL':contactList.id, 'idPoC':contactList.personOfContact.id}) }}\">
                                                        <i class=\"fa fa-pencil\">
                                                        </i>
                                                        <span class=\"sr-only\">Modifier</span>
                                                    </a>
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       onclick=\"return confirm('Veuillez confirmer la suppression de la personne de contact svp?');\"
                                                       href=\"{{ path('remove_PoC_admin',{'idCL':contactList.id, 'id':user.id}) }}\">
                                                        <i class=\"fa fa-trash-o\">
                                                        </i>
                                                        <span class=\"sr-only\">Supprimer</span>
                                                    </a>
                                                {% else %}
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       href=\"{{ path('edit_PoC',{'id':user.id, 'idCL':contactList.id, 'idPoC':contactList.personOfContact.id}) }}\">
                                                        <i class=\"fa fa-pencil\">
                                                        </i>
                                                        <span class=\"sr-only\">Modifier</span>
                                                    </a>
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       onclick=\"return confirm('Veuillez confirmer la suppression de la personne de contact svp?');\"
                                                       href=\"{{ path('remove_PoC',{'idCL':contactList.id, 'id':user.id}) }}\">
                                                        <i class=\"fa fa-trash-o\">
                                                        </i>
                                                        <span class=\"sr-only\">Supprimer</span>
                                                    </a>
                                                {% endif %}
                                            </td>
                                        </tr>
                                        {% else %}
                                        <tr>
                                            <td colspan=\"10\">Aucune personne de contact</td>
                                        </tr>
                                        </tbody>
                                        {% endfor %}
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h4>Nouvelle personne de contact</h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-3\">
                                <div class=\"form-group\">
                                    {{ form_start(PoCForm) }}
                                    {{ form_label(PoCForm.name, 'Nom') }}
                                    {{ form_widget(PoCForm.name) }}
                                </div>
                            </div>
                            <div class=\"col-3\">
                                <div class=\"form-group\">
                                    {{ form_label(PoCForm.firstName, 'Prénom') }}
                                    {{ form_widget(PoCForm.firstName) }}
                                </div>
                            </div>
                            <div class=\"col-3\">
                                <div class=\"form-group\">
                                    {{ form_label(PoCForm.num1, 'Numéro de téléphone') }}
                                    {{ form_widget(PoCForm.num1) }}
                                </div>
                            </div>
                            <div class=\"col-3\">
                                <div class=\"form-group\">
                                    {{ form_label(ContactListForm.relation, 'Relation (parent, amis...)') }}
                                    {{ form_widget(ContactListForm.relation)  }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    {{ form_label(ContactListForm.info,
                                        'Information complémentaire')  }}
                                    {{ form_widget(ContactListForm.info,
                                        { 'attr': {'rows' : '4' }} ) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-outline-info\">Ajouter une nouvelle
                                        personne
                                        de contact
                                    </button>
                                    {{ form_end(PoCForm) }}
                                    {{ form_end(ContactListForm) }}
                                </div>
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

{% endblock %}", "member/editProfile.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\member\\editProfile.html.twig");
    }
}

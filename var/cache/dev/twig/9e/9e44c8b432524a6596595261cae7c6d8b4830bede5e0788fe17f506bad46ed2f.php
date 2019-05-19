<?php

/* vika_event/edit.html.twig */
class __TwigTemplate_aa7a54e2ad3d488c9adb10ceb8f35d17553379a5b8dded50399909ad8bd038af extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vika_event/edit.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika_event/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika_event/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit VikaEvent";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
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

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"js/datetimepicker/jquery.datetimepicker.js\"></script>
    <script>
        jQuery.datetimepicker.setLocale('fr');
        jQuery('.datetimepicker').datetimepicker({
            format: 'd-m-Y H:i',
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
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "

    ";
        // line 27
        echo "
    ";
        // line 29
        echo "
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                ";
        // line 33
        if (((isset($context["newMode"]) || array_key_exists("newMode", $context) ? $context["newMode"] : (function () { throw new Twig_Error_Runtime('Variable "newMode" does not exist.', 33, $this->source); })()) == true)) {
            // line 34
            echo "                    <h1>Nouvel événement</h1>
                ";
        } else {
            // line 36
            echo "                    <h1>Modification d'un événement</h1>
                ";
        }
        // line 38
        echo "                <div class=\"row\">
                    <div class=\"col-3\">
                        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_index");
        echo "\">
                            <span class=\"badge badge-pill badge-warning\">Liste des activités (admin)</span></a>
                    </div>
                    <div class=\"col-5\"></div>
                    <div class=\"col-3\">
                        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_showList", ["cat" => "all"]);
        echo "\">
                            <span class=\"badge badge-pill badge-warning\">
                                Liste des activités (vue web)</span></a>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <div class=\"form-group\">
                                    <h4>";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "title", []), 'label', ["label" => "Titre de l'événement"]);
        echo "</h4>
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "title", []), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-1\"></div>
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <h6>";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "category", []), 'label', ["label" => "Catégorie"]);
        echo "</h6>
                                    <p class=\"card-text\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "category", []), 'widget');
        echo "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <h6>";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), "imageFile", []), 'label', ["label" => "Photo d'illustration"]);
        echo "</h6>
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "imageFile", []), 'widget');
        echo "
                                    <img class=\"embed-responsive-rounded\"
                                         src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/vikaEvent/" . twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 74, $this->source); })()), "imageName", []))), "html", null, true);
        echo "\"
                                         alt=\"Card image\" width=\"100%\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <h6>";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "owner", []), 'label', ["label" => "Titulaire de l'événement"]);
        echo "</h6>
                                    <p class=\"card-text\">
                                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "owner", []), 'widget');
        echo "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\">
                                <div class=\"form-group\">
                                    <h6>";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), "startDate", []), 'label', ["label" => "Date de début"]);
        echo "</h6>
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->source); })()), "startDate", []), 'widget', ["attr" => ["class" => "datetimepicker"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"col-5\">
                                <div class=\"form-group\">
                                    <h6>";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->source); })()), "endDate", []), 'label', ["label" => "Date de fin"]);
        echo "</h6>
                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->source); })()), "endDate", []), 'widget', ["attr" => ["class" => "datetimepicker"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"col-2\">
                                <div class=\"form-group\">
                                    <h6>";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->source); })()), "capacity", []), 'label', ["label" => "Capacité"]);
        echo "</h6>
                                    <p class=\"card-text\">";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 104, $this->source); })()), "capacity", []), 'widget');
        echo "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h6>";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->source); })()), "info", []), 'label', ["label" => "Description"]);
        echo "</h6>
                                    <p class=\"card-text\">";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 112, $this->source); })()), "info", []), 'widget');
        echo "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p class=\"card-text\">";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 119, $this->source); })()), "published", []), 'widget');
        echo "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p class=\"card-text\">";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->source); })()), "inscription", []), 'widget');
        echo "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p class=\"card-text\">";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 133, $this->source); })()), "easyInscription", []), 'widget');
        echo "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-outline-info\">
                                ";
        // line 144
        if (((isset($context["newMode"]) || array_key_exists("newMode", $context) ? $context["newMode"] : (function () { throw new Twig_Error_Runtime('Variable "newMode" does not exist.', 144, $this->source); })()) == true)) {
            // line 145
            echo "                                    Enregistrer événément
                                ";
        } else {
            // line 147
            echo "                                    Enregistrer modifications
                                ";
        }
        // line 149
        echo "                            </button>
                            ";
        // line 150
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 150, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>

                ";
        // line 155
        if (((isset($context["newMode"]) || array_key_exists("newMode", $context) ? $context["newMode"] : (function () { throw new Twig_Error_Runtime('Variable "newMode" does not exist.', 155, $this->source); })()) == false)) {
            // line 156
            echo "                    <h5>Tarif</h5>
                    ";
            // line 157
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPrice"]) || array_key_exists("formPrice", $context) ? $context["formPrice"] : (function () { throw new Twig_Error_Runtime('Variable "formPrice" does not exist.', 157, $this->source); })()), 'form_start');
            echo "
                    <div class=\"card\">
                        ";
            // line 160
            echo "                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Public</th>
                                                <th>Prix</th>
                                                <th>Info</th>
                                                <th class=\"align-middle text-right\">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 174, $this->source); })()), "priceGrid", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["priceGrid"]) {
                // line 175
                echo "                                            <tr>
                                                <td>";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priceGrid"], "public", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priceGrid"], "price", []), "html", null, true);
                echo "</td>
                                                <td>";
                // line 178
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["priceGrid"], "info", []), "html", null, true);
                echo "</td>
                                                <td class=\"align-middle text-right\">
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       href=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("price_grid_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["priceGrid"], "id", [])]), "html", null, true);
                echo "\">
                                                        <i class=\"fa fa-pencil\">
                                                        </i>
                                                        <span class=\"sr-only\">Editer</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 189
                echo "                                            <tr>
                                                <td colspan=\"10\">Aucune tarification disponible</td>
                                            </tr>
                                            </tbody>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceGrid'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card-body\">
                            <h5>Nouveau tarif</h5>
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <h6>";
            // line 205
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrice"]) || array_key_exists("formPrice", $context) ? $context["formPrice"] : (function () { throw new Twig_Error_Runtime('Variable "formPrice" does not exist.', 205, $this->source); })()), "public", []), 'label', ["label" => "Public"]);
            echo "</h6>
                                        <p class=\"card-text\">";
            // line 206
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrice"]) || array_key_exists("formPrice", $context) ? $context["formPrice"] : (function () { throw new Twig_Error_Runtime('Variable "formPrice" does not exist.', 206, $this->source); })()), "public", []), 'widget');
            echo "</p>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <h6>";
            // line 211
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrice"]) || array_key_exists("formPrice", $context) ? $context["formPrice"] : (function () { throw new Twig_Error_Runtime('Variable "formPrice" does not exist.', 211, $this->source); })()), "price", []), 'label', ["label" => "Prix"]);
            echo "</h6>
                                        <p class=\"card-text\">";
            // line 212
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrice"]) || array_key_exists("formPrice", $context) ? $context["formPrice"] : (function () { throw new Twig_Error_Runtime('Variable "formPrice" does not exist.', 212, $this->source); })()), "price", []), 'widget');
            echo "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <h6>";
            // line 219
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrice"]) || array_key_exists("formPrice", $context) ? $context["formPrice"] : (function () { throw new Twig_Error_Runtime('Variable "formPrice" does not exist.', 219, $this->source); })()), "info", []), 'label', ["label" => "Information complémentaire"]);
            echo "</h6>
                                        <p class=\"card-text\">";
            // line 220
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrice"]) || array_key_exists("formPrice", $context) ? $context["formPrice"] : (function () { throw new Twig_Error_Runtime('Variable "formPrice" does not exist.', 220, $this->source); })()), "info", []), 'widget', ["attr" => ["rows" => "4"]]);
            // line 221
            echo "</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <h6>";
            // line 228
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrice"]) || array_key_exists("formPrice", $context) ? $context["formPrice"] : (function () { throw new Twig_Error_Runtime('Variable "formPrice" does not exist.', 228, $this->source); })()), "label", []), 'label', ["label" => "Label"]);
            echo "</h6>
                                        <p class=\"card-text\">";
            // line 229
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrice"]) || array_key_exists("formPrice", $context) ? $context["formPrice"] : (function () { throw new Twig_Error_Runtime('Variable "formPrice" does not exist.', 229, $this->source); })()), "label", []), 'widget');
            echo "</p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card-footer\">
                                <div class=\"card-footer-content text-muted\">
                                    <div class=\"metadata\">Diffusé le ";
            // line 236
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 236, $this->source); })()), "createdEv", []), "d/m/Y"), "html", null, true);
            echo "</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-11\">
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-outline-info\">
                                    Enregistrer tarif
                                </button>
                                ";
            // line 248
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPrice"]) || array_key_exists("formPrice", $context) ? $context["formPrice"] : (function () { throw new Twig_Error_Runtime('Variable "formPrice" does not exist.', 248, $this->source); })()), 'form_end');
            echo "
                            </div>
                        </div>
                        <div class=\"col-1\">
                            ";
            // line 252
            if (((isset($context["newMode"]) || array_key_exists("newMode", $context) ? $context["newMode"] : (function () { throw new Twig_Error_Runtime('Variable "newMode" does not exist.', 252, $this->source); })()) == false)) {
                // line 253
                echo "                                ";
                // line 254
                echo "                                ";
                echo twig_include($this->env, $context, "vika_event/_delete_form.html.twig");
                echo "
                            ";
            }
            // line 256
            echo "                        </div>
                    </div>
                ";
        }
        // line 259
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vika_event/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 259,  521 => 256,  515 => 254,  513 => 253,  511 => 252,  504 => 248,  489 => 236,  479 => 229,  475 => 228,  466 => 221,  464 => 220,  460 => 219,  450 => 212,  446 => 211,  438 => 206,  434 => 205,  421 => 194,  411 => 189,  398 => 181,  392 => 178,  388 => 177,  384 => 176,  381 => 175,  376 => 174,  360 => 160,  355 => 157,  352 => 156,  350 => 155,  342 => 150,  339 => 149,  335 => 147,  331 => 145,  329 => 144,  315 => 133,  305 => 126,  295 => 119,  285 => 112,  281 => 111,  271 => 104,  267 => 103,  259 => 98,  255 => 97,  247 => 92,  243 => 91,  233 => 84,  228 => 82,  217 => 74,  212 => 72,  208 => 71,  198 => 64,  194 => 63,  185 => 57,  181 => 56,  167 => 45,  159 => 40,  155 => 38,  151 => 36,  147 => 34,  145 => 33,  139 => 29,  136 => 27,  131 => 24,  128 => 23,  119 => 22,  99 => 12,  90 => 11,  74 => 5,  65 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Edit VikaEvent{% endblock %}
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
            format: 'd-m-Y H:i',
        });
    </script>
{% endblock %}

{% block Body %}

    {{ form_start(form) }}

    {#    {{ form_start(formPrice) }}#}

    {#    {{ form_widget(formPrice) }}#}

    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                {% if (newMode == true) %}
                    <h1>Nouvel événement</h1>
                {% else %}
                    <h1>Modification d'un événement</h1>
                {% endif %}
                <div class=\"row\">
                    <div class=\"col-3\">
                        <a href=\"{{ path('vika_event_index') }}\">
                            <span class=\"badge badge-pill badge-warning\">Liste des activités (admin)</span></a>
                    </div>
                    <div class=\"col-5\"></div>
                    <div class=\"col-3\">
                        <a href=\"{{ path('vika_event_showList',{'cat':'all'}) }}\">
                            <span class=\"badge badge-pill badge-warning\">
                                Liste des activités (vue web)</span></a>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <div class=\"form-group\">
                                    <h4>{{ form_label(form.title, 'Titre de l\\'événement') }}</h4>
                                    {{ form_widget(form.title) }}
                                </div>
                            </div>
                            <div class=\"col-1\"></div>
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <h6>{{ form_label(form.category, 'Catégorie') }}</h6>
                                    <p class=\"card-text\">{{ form_widget(form.category) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <h6>{{ form_label(form.imageFile, 'Photo d\\'illustration') }}</h6>
                                    {{ form_widget(form.imageFile) }}
                                    <img class=\"embed-responsive-rounded\"
                                         src=\"{{ asset('/upload/vikaEvent/' ~ vikaEvent.imageName) }}\"
                                         alt=\"Card image\" width=\"100%\">
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"form-group\">
                                    <h6>{{ form_label(form.owner, 'Titulaire de l\\'événement') }}</h6>
                                    <p class=\"card-text\">
                                        {{ form_widget(form.owner) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-5\">
                                <div class=\"form-group\">
                                    <h6>{{ form_label(form.startDate, 'Date de début') }}</h6>
                                    {{ form_widget(form.startDate, { attr:{ class:'datetimepicker' } }) }}
                                </div>
                            </div>
                            <div class=\"col-5\">
                                <div class=\"form-group\">
                                    <h6>{{ form_label(form.endDate, 'Date de fin') }}</h6>
                                    {{ form_widget(form.endDate, { attr:{ class:'datetimepicker' } }) }}
                                </div>
                            </div>
                            <div class=\"col-2\">
                                <div class=\"form-group\">
                                    <h6>{{ form_label(form.capacity, 'Capacité') }}</h6>
                                    <p class=\"card-text\">{{ form_widget(form.capacity) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <h6>{{ form_label(form.info, 'Description') }}</h6>
                                    <p class=\"card-text\">{{ form_widget(form.info) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p class=\"card-text\">{{ form_widget(form.published) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p class=\"card-text\">{{ form_widget(form.inscription) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"form-group\">
                                    <p class=\"card-text\">{{ form_widget(form.easyInscription) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-outline-info\">
                                {% if (newMode == true) %}
                                    Enregistrer événément
                                {% else %}
                                    Enregistrer modifications
                                {% endif %}
                            </button>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>

                {% if (newMode==false) %}
                    <h5>Tarif</h5>
                    {{ form_start(formPrice) }}
                    <div class=\"card\">
                        {#                   liste des prix#}
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Public</th>
                                                <th>Prix</th>
                                                <th>Info</th>
                                                <th class=\"align-middle text-right\">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for priceGrid in vikaEvent.priceGrid %}
                                            <tr>
                                                <td>{{ priceGrid.public }}</td>
                                                <td>{{ priceGrid.price }}</td>
                                                <td>{{ priceGrid.info }}</td>
                                                <td class=\"align-middle text-right\">
                                                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                                                       href=\"{{ path('price_grid_edit',{'id':priceGrid.id}) }}\">
                                                        <i class=\"fa fa-pencil\">
                                                        </i>
                                                        <span class=\"sr-only\">Editer</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            {% else %}
                                            <tr>
                                                <td colspan=\"10\">Aucune tarification disponible</td>
                                            </tr>
                                            </tbody>
                                            {% endfor %}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card-body\">
                            <h5>Nouveau tarif</h5>
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <h6>{{ form_label(formPrice.public, 'Public') }}</h6>
                                        <p class=\"card-text\">{{ form_widget(formPrice.public) }}</p>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <h6>{{ form_label(formPrice.price, 'Prix') }}</h6>
                                        <p class=\"card-text\">{{ form_widget(formPrice.price) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"form-group\">
                                        <h6>{{ form_label(formPrice.info, 'Information complémentaire') }}</h6>
                                        <p class=\"card-text\">{{ form_widget(formPrice.info,
                                                { 'attr': {'rows' : '4' }} ) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <h6>{{ form_label(formPrice.label, 'Label') }}</h6>
                                        <p class=\"card-text\">{{ form_widget(formPrice.label) }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card-footer\">
                                <div class=\"card-footer-content text-muted\">
                                    <div class=\"metadata\">Diffusé le {{ vikaEvent.createdEv |date('d/m/Y') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-11\">
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-outline-info\">
                                    Enregistrer tarif
                                </button>
                                {{ form_end(formPrice) }}
                            </div>
                        </div>
                        <div class=\"col-1\">
                            {% if (newMode==false) %}
                                {#    Delete ne doit apparaitre que qd on édite un événement déjà existant, pas qd on crée un nouveau#}
                                {{ include('vika_event/_delete_form.html.twig') }}
                            {% endif %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>

{% endblock %}
", "vika_event/edit.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\vika_event\\edit.html.twig");
    }
}

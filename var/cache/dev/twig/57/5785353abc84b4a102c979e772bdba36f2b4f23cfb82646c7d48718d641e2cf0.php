<?php

/* member/completeUser.html.twig */
class __TwigTemplate_2eda96b73b3e204c5353277149de48659ec4274980edcd23034ca9207a884300 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/completeUser.html.twig", 1);
        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/completeUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/completeUser.html.twig"));

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

        echo "Nouveau membre";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 6
        echo "

    ";
        // line 8
        if ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->source); })()), "phones", [])) < 1) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->source); })()), "Adress", [])) < 1)) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->source); })()), "contactLists", [])) < 1))) {
            // line 9
            echo "        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-8\">
                    <h2>Il semble manquer quelques informations à votre profil</h2>
                    <div class=\"card\">
                        <div class=\"card-body\">

                            ";
            // line 17
            echo "
                            ";
            // line 18
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->source); })()), "phones", [])) < 1)) {
                // line 19
                echo "                                ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 19, $this->source); })()), 'form_start');
                echo "
                                <h4>Numéro de téléphone</h4>
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-2\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Type</label>
                                                    ";
                // line 27
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 27, $this->source); })()), "type", []), 'widget');
                echo "
                                                </div>
                                            </div>
                                            <div class=\"col-4\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Numéro de téléphone</label>
                                                    ";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 33, $this->source); })()), "num", []), 'widget');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 40
            echo "                            ";
            // line 41
            echo "                            ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 41, $this->source); })()), "Adress", [])) < 1)) {
                // line 42
                echo "                                ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 42, $this->source); })()), 'form_start');
                echo "
                                <h4>Adresse</h4>
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-2\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Type</label>
                                                    ";
                // line 50
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 50, $this->source); })()), "type", []), 'widget');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Rue</label>
                                                    ";
                // line 58
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 58, $this->source); })()), "streetName", []), 'widget');
                echo "
                                                </div>
                                            </div>
                                            <div class=\"col-3\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Numéro d'habitation</label>
                                                    ";
                // line 64
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 64, $this->source); })()), "num", []), 'widget');
                echo "
                                                </div>
                                            </div>
                                            <div class=\"col-2\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Boite</label>
                                                    ";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 70, $this->source); })()), "postBox", []), 'widget');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-2\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Code postale</label>
                                                    ";
                // line 78
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 78, $this->source); })()), "zip", []), 'widget');
                echo "
                                                </div>
                                            </div>
                                            <div class=\"col-5\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Ville</label>
                                                    ";
                // line 84
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 84, $this->source); })()), "cityName", []), 'widget');
                echo "
                                                </div>
                                            </div>
                                            <div class=\"col-3\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Pays</label>
                                                    ";
                // line 90
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 90, $this->source); })()), "country", []), 'widget');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 97
            echo "                            ";
            // line 98
            echo "                            ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 98, $this->source); })()), "contactLists", [])) < 1)) {
                // line 99
                echo "                            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 99, $this->source); })()), 'form_start');
                echo "
                            <h4>Point de contact</h4>
                            <h6>(Obligatoire - En cas d'accident)</h6>
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-2\">
                                            <div class=\"form-group\">
                                                <label for=\"\">Relation</label>
                                                ";
                // line 108
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 108, $this->source); })()), "relation", []), 'widget');
                echo "
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"form-group\">
                                                <label for=\"\">Information</label>
                                                ";
                // line 114
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 114, $this->source); })()), "info", []), 'widget');
                echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"form-group\">
                                                <label for=\"\">Nom</label>
                                                ";
                // line 122
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 122, $this->source); })()), "name", []), 'widget');
                echo "
                                            </div>
                                        </div>
                                        <div class=\"col-3\">
                                            <div class=\"form-group\">
                                                <label for=\"\">Prénom</label>
                                                ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 128, $this->source); })()), "firstName", []), 'widget');
                echo "
                                            </div>
                                        </div>
                                        <div class=\"col-3\">
                                            <div class=\"form-group\">
                                                <label for=\"\">Numéro de téléphone</label>
                                                ";
                // line 134
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 134, $this->source); })()), "num1", []), 'widget');
                echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 142
            echo "                    </div>
                    <div class=\"container\">
                        <div class=\"row justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-success\">Valider mes informations</button>
                                ";
            // line 147
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 147, $this->source); })()), "phones", [])) < 1)) {
                // line 148
                echo "                                    ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 148, $this->source); })()), 'form_end');
                echo "
                                ";
            }
            // line 150
            echo "                                ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 150, $this->source); })()), "adress", [])) < 1)) {
                // line 151
                echo "                                    ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 151, $this->source); })()), 'form_end');
                echo "
                                ";
            }
            // line 153
            echo "                                ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 153, $this->source); })()), "contactLists", [])) < 1)) {
                // line 154
                echo "
                                    ";
                // line 155
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 155, $this->source); })()), 'form_end');
                echo "
                                ";
            }
            // line 157
            echo "                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 165
            echo "

                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"container-fluid\">
                                            <div class=\"row justify-content-center\">
                                                <div class=\"col-md-10\">
                                                    <div class=\"row justify-content-between\">
                                                        <div class=\"col-auto\">
                                                            <h6>Nous avons vérifié s'il manquait des informations à votre profil et il semble être complet</h6>
                                                            <h6>Merci de cliquer ci-dessous pour continuer</h6>

                                                        </br>
                                        <div class=\"col-4\">
                                            <div class=\"form-group\">

                                                <a class=\"btn btn-outline-info\"
                                                   href=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preregistration_summary", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 183, $this->source); })()), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 183, $this->source); })())]), "html", null, true);
            echo "\">Continuer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 195
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/completeUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 195,  340 => 183,  320 => 165,  310 => 157,  305 => 155,  302 => 154,  299 => 153,  293 => 151,  290 => 150,  284 => 148,  282 => 147,  275 => 142,  264 => 134,  255 => 128,  246 => 122,  235 => 114,  226 => 108,  213 => 99,  210 => 98,  208 => 97,  198 => 90,  189 => 84,  180 => 78,  169 => 70,  160 => 64,  151 => 58,  140 => 50,  128 => 42,  125 => 41,  123 => 40,  113 => 33,  104 => 27,  92 => 19,  90 => 18,  87 => 17,  78 => 9,  76 => 8,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Nouveau membre{% endblock %}

{% block Body %}


    {% if (user.phones|length < 1 or user.Adress|length < 1 or user.contactLists|length < 1 ) %}
        <div class=\"container-fluid\">
            <div class=\"row justify-content-center\">
                <div class=\"col-8\">
                    <h2>Il semble manquer quelques informations à votre profil</h2>
                    <div class=\"card\">
                        <div class=\"card-body\">

                            {# Numéro de téléphone #}

                            {% if user.phones|length < 1 %}
                                {{ form_start(phoneForm) }}
                                <h4>Numéro de téléphone</h4>
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-2\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Type</label>
                                                    {{ form_widget(phoneForm.type) }}
                                                </div>
                                            </div>
                                            <div class=\"col-4\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Numéro de téléphone</label>
                                                    {{ form_widget(phoneForm.num) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                            {# Adresse #}
                            {% if user.Adress|length < 1 %}
                                {{ form_start(adressForm) }}
                                <h4>Adresse</h4>
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col-2\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Type</label>
                                                    {{ form_widget(adressForm.type) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Rue</label>
                                                    {{ form_widget(adressForm.streetName) }}
                                                </div>
                                            </div>
                                            <div class=\"col-3\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Numéro d'habitation</label>
                                                    {{ form_widget(adressForm.num) }}
                                                </div>
                                            </div>
                                            <div class=\"col-2\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Boite</label>
                                                    {{ form_widget(adressForm.postBox) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-2\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Code postale</label>
                                                    {{ form_widget(cityForm.zip) }}
                                                </div>
                                            </div>
                                            <div class=\"col-5\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Ville</label>
                                                    {{ form_widget(cityForm.cityName) }}
                                                </div>
                                            </div>
                                            <div class=\"col-3\">
                                                <div class=\"form-group\">
                                                    <label for=\"\">Pays</label>
                                                    {{ form_widget(cityForm.country) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                            {# Point de contact #}
                            {% if user.contactLists|length < 1 %}
                            {{ form_start(PoCForm) }}
                            <h4>Point de contact</h4>
                            <h6>(Obligatoire - En cas d'accident)</h6>
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-2\">
                                            <div class=\"form-group\">
                                                <label for=\"\">Relation</label>
                                                {{ form_widget(ContactListForm.relation) }}
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"form-group\">
                                                <label for=\"\">Information</label>
                                                {{ form_widget(ContactListForm.info) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"form-group\">
                                                <label for=\"\">Nom</label>
                                                {{ form_widget(PoCForm.name) }}
                                            </div>
                                        </div>
                                        <div class=\"col-3\">
                                            <div class=\"form-group\">
                                                <label for=\"\">Prénom</label>
                                                {{ form_widget(PoCForm.firstName) }}
                                            </div>
                                        </div>
                                        <div class=\"col-3\">
                                            <div class=\"form-group\">
                                                <label for=\"\">Numéro de téléphone</label>
                                                {{ form_widget(PoCForm.num1) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                    <div class=\"container\">
                        <div class=\"row justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-success\">Valider mes informations</button>
                                {% if user.phones|length < 1 %}
                                    {{ form_end(phoneForm) }}
                                {% endif %}
                                {% if user.adress|length < 1 %}
                                    {{ form_end(adressForm) }}
                                {% endif %}
                                {% if user.contactLists|length < 1 %}

                                    {{ form_end(PoCForm) }}
                                {% endif %}
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    {% else %}


                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"container-fluid\">
                                            <div class=\"row justify-content-center\">
                                                <div class=\"col-md-10\">
                                                    <div class=\"row justify-content-between\">
                                                        <div class=\"col-auto\">
                                                            <h6>Nous avons vérifié s'il manquait des informations à votre profil et il semble être complet</h6>
                                                            <h6>Merci de cliquer ci-dessous pour continuer</h6>

                                                        </br>
                                        <div class=\"col-4\">
                                            <div class=\"form-group\">

                                                <a class=\"btn btn-outline-info\"
                                                   href=\"{{ path('preregistration_summary', {'id':user.id, 'idevent':  idevent}) }}\">Continuer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}

{% endblock %}", "member/completeUser.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\member\\completeUser.html.twig");
    }
}

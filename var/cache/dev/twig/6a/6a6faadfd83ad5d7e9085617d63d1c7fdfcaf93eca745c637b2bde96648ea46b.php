<?php

/* member/addUser.html.twig */
class __TwigTemplate_080a847b679749c0a1fbfa256b43f17be3ccacb68eb06f1489ebb573c532a28d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/addUser.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/addUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/addUser.html.twig"));

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
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-8\">
            <h2>Ajouter un nouveau membre de sa famille</h2>
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 13
        echo " 
                    <h4>Informations générales</h4>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 17, $this->source); })()), 'form_start');
        echo "  
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Nom</label>
                                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 22, $this->source); })()), "name", []), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Prénom</label>
                                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 28, $this->source); })()), "firstName", []), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-2\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Sexe</label>
                                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 34, $this->source); })()), "sex", []), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"\">Date de naissance</label>
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 40, $this->source); })()), "birthdate", []), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 44
        echo " 
                    <h4>Numéro de téléphone</h4>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Type</label>
                                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 52, $this->source); })()), "type", []), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Numéro de téléphone</label>
                                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["phoneForm"]) || array_key_exists("phoneForm", $context) ? $context["phoneForm"] : (function () { throw new Twig_Error_Runtime('Variable "phoneForm" does not exist.', 58, $this->source); })()), "num", []), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 64
        echo " 
                    <h4>Adresse</h4>
                    <div class=\"card\">
                        <div class=\"card-body\"> 
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Type</label>
                                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 72, $this->source); })()), "type", []), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Rue</label>
                                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 80, $this->source); })()), "streetName", []), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Numéro d'habitation</label>
                                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 86, $this->source); })()), "num", []), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-2\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Boite</label>
                                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["adressForm"]) || array_key_exists("adressForm", $context) ? $context["adressForm"] : (function () { throw new Twig_Error_Runtime('Variable "adressForm" does not exist.', 92, $this->source); })()), "postBox", []), 'widget');
        echo "
                                    </div>    
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Code postale</label>
                                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 100, $this->source); })()), "zip", []), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-5\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Ville</label>
                                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 106, $this->source); })()), "cityName", []), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Pays</label>
                                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cityForm"]) || array_key_exists("cityForm", $context) ? $context["cityForm"] : (function () { throw new Twig_Error_Runtime('Variable "cityForm" does not exist.', 112, $this->source); })()), "country", []), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    ";
        // line 118
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
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 127, $this->source); })()), "relation", []), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Information</label>
                                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ContactListForm"]) || array_key_exists("ContactListForm", $context) ? $context["ContactListForm"] : (function () { throw new Twig_Error_Runtime('Variable "ContactListForm" does not exist.', 133, $this->source); })()), "info", []), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Nom</label>
                                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 141, $this->source); })()), "name", []), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Prénom</label>
                                        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 147, $this->source); })()), "firstName", []), 'widget');
        echo "
                                    </div>    
                                </div>
                                <div class=\"col-3\">
                                        <div class=\"form-group\">
                                            <label for=\"\">Numéro de téléphone</label>
                                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PoCForm"]) || array_key_exists("PoCForm", $context) ? $context["PoCForm"] : (function () { throw new Twig_Error_Runtime('Variable "PoCForm" does not exist.', 153, $this->source); })()), "num1", []), 'widget');
        echo "
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                </div>
                <div class=\"container\">
                <div class=\"row justify-content-end\">
                    <div class=\"col-auto\">
                        ";
        // line 165
        if (twig_get_attribute($this->env, $this->source, ($context["idevent"] ?? null), "id", [], "any", true, true)) {
            // line 166
            echo "                        <a class=\"btn btn-outline-info\"
                           href=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preregistration_summary", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 167, $this->source); })()), "userConnected", []), "id", []), "idevent" => (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 167, $this->source); })())]), "html", null, true);
            echo "\">Créer event un nouveau membre</a>
                        ";
        } else {
            // line 169
            echo "                        <button type=\"submit\" class=\"btn btn-success\">Créer un nouveau membre</button>
                        ";
        }
        // line 171
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 171, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
                <br>
            </div>
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
        return "member/addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 171,  308 => 169,  303 => 167,  300 => 166,  298 => 165,  283 => 153,  274 => 147,  265 => 141,  254 => 133,  245 => 127,  234 => 118,  225 => 112,  216 => 106,  207 => 100,  196 => 92,  187 => 86,  178 => 80,  167 => 72,  157 => 64,  148 => 58,  139 => 52,  129 => 44,  122 => 40,  113 => 34,  104 => 28,  95 => 22,  87 => 17,  81 => 13,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Nouveau membre{% endblock %}

{% block Body %}

<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-8\">
            <h2>Ajouter un nouveau membre de sa famille</h2>
            <div class=\"card\">
                <div class=\"card-body\">
                    {# Informations générales #} 
                    <h4>Informations générales</h4>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            {{ form_start(formUser) }}  
                            <div class=\"row\">
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Nom</label>
                                        {{ form_widget(formUser.name) }}
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Prénom</label>
                                        {{ form_widget(formUser.firstName) }}
                                    </div>
                                </div>
                                <div class=\"col-2\">
                                    <div class=\"form-group\">
                                        <label for=\"\">Sexe</label>
                                        {{ form_widget(formUser.sex) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"\">Date de naissance</label>
                                {{ form_widget(formUser.birthdate) }}
                            </div>
                        </div>
                    </div>
                    {# Numéro de téléphone #} 
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
                    {# Adresse #} 
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
                    {# Point de contact #} 
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
                    
                </div>
                <div class=\"container\">
                <div class=\"row justify-content-end\">
                    <div class=\"col-auto\">
                        {% if idevent.id is defined %}
                        <a class=\"btn btn-outline-info\"
                           href=\"{{ path('preregistration_summary', {'id':user.userConnected.id, 'idevent':  idevent}) }}\">Créer event un nouveau membre</a>
                        {% else %}
                        <button type=\"submit\" class=\"btn btn-success\">Créer un nouveau membre</button>
                        {% endif %}
                        {{ form_end(formUser) }}
                    </div>
                </div>
                <br>
            </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "member/addUser.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\member\\addUser.html.twig");
    }
}

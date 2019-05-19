<?php

/* galeriephoto/create.html.twig */
class __TwigTemplate_cd886185d246ae6bdff4cf956bfe96fd28bbfe1329ce8707ad0879cb8e74b384 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "galeriephoto/create.html.twig", 1);
        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "galeriephoto/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "galeriephoto/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 9
        echo "
    ";
        // line 13
        echo "
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGaleriephoto"]) || array_key_exists("formGaleriephoto", $context) ? $context["formGaleriephoto"] : (function () { throw new Twig_Error_Runtime('Variable "formGaleriephoto" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, (isset($context["galerie"]) || array_key_exists("galerie", $context) ? $context["galerie"] : (function () { throw new Twig_Error_Runtime('Variable "galerie" does not exist.', 22, $this->source); })()), "name", []) != "Carrousel")) {
            // line 23
            echo "                                ";
            if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 23, $this->source); })())) {
                // line 24
                echo "                                    <h1> Modification de la galerie photo : </h1>
                                    <h2>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["galerie"]) || array_key_exists("galerie", $context) ? $context["galerie"] : (function () { throw new Twig_Error_Runtime('Variable "galerie" does not exist.', 25, $this->source); })()), "name", []), "html", null, true);
                echo " </h2>
                                ";
            } else {
                // line 27
                echo "                                    <h1> Nouvelle galerie photo </h1>
                                ";
            }
            // line 29
            echo "
                                <div class=\"form-group\">
                                    <label for=\"\">Titre de la galerie</label>
                                    ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGaleriephoto"]) || array_key_exists("formGaleriephoto", $context) ? $context["formGaleriephoto"] : (function () { throw new Twig_Error_Runtime('Variable "formGaleriephoto" does not exist.', 32, $this->source); })()), "name", []), 'widget');
            echo "
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"\">Description</label>
                                    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGaleriephoto"]) || array_key_exists("formGaleriephoto", $context) ? $context["formGaleriephoto"] : (function () { throw new Twig_Error_Runtime('Variable "formGaleriephoto" does not exist.', 37, $this->source); })()), "description", []), 'widget', ["attr" => ["rows" => "4"]]);
            // line 38
            echo "
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"\">Photo d'avatar</label>
                                    ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGaleriephoto"]) || array_key_exists("formGaleriephoto", $context) ? $context["formGaleriephoto"] : (function () { throw new Twig_Error_Runtime('Variable "formGaleriephoto" does not exist.', 43, $this->source); })()), "imageFile", []), 'widget');
            echo "
                                    <img class=\"embed-responsive-rounded\"
                                         src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/galerie/" . twig_get_attribute($this->env, $this->source, (isset($context["galerie"]) || array_key_exists("galerie", $context) ? $context["galerie"] : (function () { throw new Twig_Error_Runtime('Variable "galerie" does not exist.', 45, $this->source); })()), "avatarName", []))), "html", null, true);
            echo "\"
                                         alt=\"Card image\" width=\"40%\">
                                </div>

                            ";
        } else {
            // line 50
            echo "                                ";
            if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 50, $this->source); })())) {
                // line 51
                echo "                                    <h1> Modification du carrousel de la page d'accueil </h1>
                                ";
            } else {
                // line 53
                echo "                                    <h1> Création du carrousel de la page d'accueil </h1>
                                ";
            }
            // line 55
            echo "                            ";
        }
        // line 56
        echo "
                            <div class=\"form-group\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formGaleriephoto"]) || array_key_exists("formGaleriephoto", $context) ? $context["formGaleriephoto"] : (function () { throw new Twig_Error_Runtime('Variable "formGaleriephoto" does not exist.', 58, $this->source); })()), "media", []), 'label', ["label" => "Ajouter des photos"]);
        echo "
                            </div>

                            <ul class=\"medias\" data-prototype=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formGaleriephoto"]) || array_key_exists("formGaleriephoto", $context) ? $context["formGaleriephoto"] : (function () { throw new Twig_Error_Runtime('Variable "formGaleriephoto" does not exist.', 61, $this->source); })()), "media", []), "vars", []), "prototype", []), 'widget'), "html_attr");
        echo "\">
                                <div class=\"row\">
                                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formGaleriephoto"]) || array_key_exists("formGaleriephoto", $context) ? $context["formGaleriephoto"] : (function () { throw new Twig_Error_Runtime('Variable "formGaleriephoto" does not exist.', 63, $this->source); })()), "media", []));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 64
            echo "                                        <li> ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["media"], "imageFile", []), 'widget');
            echo " </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                                </div>

                            </ul>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
        // line 70
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "                                    Enregister modification(s)
                                ";
        } else {
            // line 73
            echo "                                    Ajouter la galerie photo
                                ";
        }
        // line 75
        echo "                            </button>

                            ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formGaleriephoto"]) || array_key_exists("formGaleriephoto", $context) ? $context["formGaleriephoto"] : (function () { throw new Twig_Error_Runtime('Variable "formGaleriephoto" does not exist.', 77, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
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
        return "galeriephoto/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 77,  203 => 75,  199 => 73,  195 => 71,  193 => 70,  187 => 66,  178 => 64,  174 => 63,  169 => 61,  163 => 58,  159 => 56,  156 => 55,  152 => 53,  148 => 51,  145 => 50,  137 => 45,  132 => 43,  125 => 38,  123 => 37,  115 => 32,  110 => 29,  106 => 27,  101 => 25,  98 => 24,  95 => 23,  93 => 22,  89 => 21,  79 => 13,  76 => 9,  67 => 8,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery.collection.js') }}\"></script>
{% endblock %}


{% block Body %}

    {#
        {% form_theme formGaleriephoto 'jquery.collection.html.twig' %}
    #}

<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-10\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            {{ form_start(formGaleriephoto) }}
                            {% if (galerie.name != \"Carrousel\") %}
                                {% if editMode %}
                                    <h1> Modification de la galerie photo : </h1>
                                    <h2>{{ galerie.name }} </h2>
                                {% else %}
                                    <h1> Nouvelle galerie photo </h1>
                                {% endif %}

                                <div class=\"form-group\">
                                    <label for=\"\">Titre de la galerie</label>
                                    {{ form_widget(formGaleriephoto.name) }}
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"\">Description</label>
                                    {{ form_widget(formGaleriephoto.description,
                                        { 'attr': {'rows' : '4' }} ) }}
                                </div>

                                <div class=\"form-group\">
                                    <label for=\"\">Photo d'avatar</label>
                                    {{ form_widget(formGaleriephoto.imageFile) }}
                                    <img class=\"embed-responsive-rounded\"
                                         src=\"{{ asset('/upload/galerie/' ~ galerie.avatarName) }}\"
                                         alt=\"Card image\" width=\"40%\">
                                </div>

                            {% else %}
                                {% if editMode %}
                                    <h1> Modification du carrousel de la page d'accueil </h1>
                                {% else %}
                                    <h1> Création du carrousel de la page d'accueil </h1>
                                {% endif %}
                            {% endif %}

                            <div class=\"form-group\">
                                {{ form_label(formGaleriephoto.media, 'Ajouter des photos') }}
                            </div>

                            <ul class=\"medias\" data-prototype=\"{{ form_widget(formGaleriephoto.media.vars.prototype)|e('html_attr') }}\">
                                <div class=\"row\">
                                    {% for media in formGaleriephoto.media %}
                                        <li> {{ form_widget(media.imageFile) }} </li>
                                    {% endfor %}
                                </div>

                            </ul>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                {% if editMode %}
                                    Enregister modification(s)
                                {% else %}
                                    Ajouter la galerie photo
                                {% endif %}
                            </button>

                            {{ form_end(formGaleriephoto) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





{% endblock %}
", "galeriephoto/create.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\galeriephoto\\create.html.twig");
    }
}

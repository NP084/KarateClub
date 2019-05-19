<?php

/* blog/create.html.twig */
class __TwigTemplate_fa3824043647b69ed1827f734e62223249232a8f68106a287a2dc738772eaed4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/create.html.twig", 1);
        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 4
        echo "
    <h1>
        ";
        // line 6
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 7, $this->source); })()), "category", [])) {
                // line 8
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 8, $this->source); })()), "category", []), "title", []) == "Publication")) {
                    // line 9
                    echo "                    Modification de la ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 9, $this->source); })()), "category", []), "title", []), "html", null, true);
                    echo "
                ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 10
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 10, $this->source); })()), "category", []), "title", []) != "Autre")) {
                    // line 11
                    echo "                    Modification de l'";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 11, $this->source); })()), "category", []), "title", []), "html", null, true);
                    echo "
                ";
                } else {
                    // line 13
                    echo "                    Modification de l'article
                ";
                }
                // line 15
                echo "            ";
            }
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            Création d'un article
        ";
        }
        // line 19
        echo "    </h1>

    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 21, $this->source); })()), 'form_start');
        echo "

    <div class=\"form-group\">
        <label for=\"\">Titre</label>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 25, $this->source); })()), "title", []), 'widget');
        echo "
    </div>

    <div class=\"form-group\">
        <label for=\"\">Catégorie</label>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 30, $this->source); })()), "category", []), 'widget');
        echo "
    </div>

    <div class=\"form-group\">
        <label for=\"\">Contenu</label>
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 35, $this->source); })()), "content", []), 'widget');
        echo "
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"\">Sélectionnez une image</label>
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 41, $this->source); })()), "imageFile", []), 'widget');
        echo "
            </div>
        </div>
    </div>

    <button type=\"submit\" class=\"btn btn-success\">
        ";
        // line 47
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "            Enregister modification(s)
        ";
        } else {
            // line 50
            echo "            Ajouter l'article
        ";
        }
        // line 52
        echo "    </button>


    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 55, $this->source); })()), 'form_end');
        echo "

    <!--
    ancienne version avant sécurité dans le BlogController
    <form action=\"\" method=\"post\">
        <input type=\"text\" name=\"title\" placeholder=\"Titre de l'article\">
        <textarea name=\"content\" placeholder=\"Contenu de l'article\"></textarea>
        <input type=\"text\" name=\"image\" placeholder=\"Image de l'article\">
        <button type=\"submit\">Enregistrer</button>
    </form>
    -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 55,  147 => 52,  143 => 50,  139 => 48,  137 => 47,  128 => 41,  119 => 35,  111 => 30,  103 => 25,  96 => 21,  92 => 19,  88 => 17,  85 => 16,  82 => 15,  78 => 13,  72 => 11,  70 => 10,  65 => 9,  62 => 8,  59 => 7,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block Body %}

    <h1>
        {% if editMode %}
            {% if (article.category) %}
                {% if (article.category.title == 'Publication') %}
                    Modification de la {{ article.category.title }}
                {% elseif (article.category.title != 'Autre') %}
                    Modification de l'{{ article.category.title }}
                {% else %}
                    Modification de l'article
                {% endif %}
            {% endif %}
        {% else %}
            Création d'un article
        {% endif %}
    </h1>

    {{ form_start(formArticle) }}

    <div class=\"form-group\">
        <label for=\"\">Titre</label>
        {{ form_widget(formArticle.title) }}
    </div>

    <div class=\"form-group\">
        <label for=\"\">Catégorie</label>
        {{ form_widget(formArticle.category) }}
    </div>

    <div class=\"form-group\">
        <label for=\"\">Contenu</label>
        {{ form_widget(formArticle.content) }}
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"\">Sélectionnez une image</label>
                {{ form_widget(formArticle.imageFile) }}
            </div>
        </div>
    </div>

    <button type=\"submit\" class=\"btn btn-success\">
        {% if editMode %}
            Enregister modification(s)
        {% else %}
            Ajouter l'article
        {% endif %}
    </button>


    {{ form_end(formArticle) }}

    <!--
    ancienne version avant sécurité dans le BlogController
    <form action=\"\" method=\"post\">
        <input type=\"text\" name=\"title\" placeholder=\"Titre de l'article\">
        <textarea name=\"content\" placeholder=\"Contenu de l'article\"></textarea>
        <input type=\"text\" name=\"image\" placeholder=\"Image de l'article\">
        <button type=\"submit\">Enregistrer</button>
    </form>
    -->

{% endblock %}
", "blog/create.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\blog\\create.html.twig");
    }
}

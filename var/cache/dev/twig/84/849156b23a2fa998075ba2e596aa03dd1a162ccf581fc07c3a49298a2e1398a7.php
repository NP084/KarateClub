<?php

/* home_page/homecreate.html.twig */
class __TwigTemplate_fbe64dff7f43e64fbf99670f8d403ebf23fac7dc5786fd4b5cb7861f2aa89cd7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home_page/homecreate.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home_page/homecreate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home_page/homecreate.html.twig"));

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
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "    <h1> Modification du texte! </h1>

    ";
            // line 7
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContent"]) || array_key_exists("formContent", $context) ? $context["formContent"] : (function () { throw new Twig_Error_Runtime('Variable "formContent" does not exist.', 7, $this->source); })()), 'form_start');
            echo "

    <div class=\"form-group\">
        <label for=\"\">Titre</label>
        ";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContent"]) || array_key_exists("formContent", $context) ? $context["formContent"] : (function () { throw new Twig_Error_Runtime('Variable "formContent" does not exist.', 11, $this->source); })()), "title", []), 'widget');
            echo "
    </div>
        <div class=\"form-group\">
            <label for=\"\">Sous-titre</label>
            ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContent"]) || array_key_exists("formContent", $context) ? $context["formContent"] : (function () { throw new Twig_Error_Runtime('Variable "formContent" does not exist.', 15, $this->source); })()), "subtitle", []), 'widget');
            echo "
        </div>

    <div class=\"form-group\">
        ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContent"]) || array_key_exists("formContent", $context) ? $context["formContent"] : (function () { throw new Twig_Error_Runtime('Variable "formContent" does not exist.', 19, $this->source); })()), "content", []), 'label', ["label" => "Contenu de la page"]);
            echo "

        ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContent"]) || array_key_exists("formContent", $context) ? $context["formContent"] : (function () { throw new Twig_Error_Runtime('Variable "formContent" does not exist.', 21, $this->source); })()), "content", []), 'widget');
            echo "
    </div>


    ";
            // line 31
            echo "    <button type=\"submit\" class=\"btn btn-success\">

            Enregister modification(s)

    </button>

    ";
            // line 37
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContent"]) || array_key_exists("formContent", $context) ? $context["formContent"] : (function () { throw new Twig_Error_Runtime('Variable "formContent" does not exist.', 37, $this->source); })()), 'form_end');
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
        } else {
            // line 49
            echo "<div align=\"center\">
     <div class=\"col-lg-4\">
         <div class=\"alert alert-danger alert-dismissible fade show\">
             <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
             <strong>Désolé </strong>, vous n'avez pas accès à cette page. <a class=\"alert-link\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page", ["path" => "accueil"]);
            echo "\"Revenir sur la page d'accueil</a>.
         </div>
     </div>
</div>
 ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home_page/homecreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 53,  116 => 49,  101 => 37,  93 => 31,  86 => 21,  81 => 19,  74 => 15,  67 => 11,  60 => 7,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%}

{% block Body %}
    {% if (is_granted('ROLE_ADMIN')) %}
    <h1> Modification du texte! </h1>

    {{ form_start(formContent) }}

    <div class=\"form-group\">
        <label for=\"\">Titre</label>
        {{ form_widget(formContent.title) }}
    </div>
        <div class=\"form-group\">
            <label for=\"\">Sous-titre</label>
            {{ form_widget(formContent.subtitle) }}
        </div>

    <div class=\"form-group\">
        {{ form_label(formContent.content,'Contenu de la page') }}

        {{ form_widget(formContent.content) }}
    </div>


    {#
        <div class=\"form-group\">
            <label for=\"\">Titre</label>
            {{ form_widget(formArticle.imageFile) }}
        </div>
    #}
    <button type=\"submit\" class=\"btn btn-success\">

            Enregister modification(s)

    </button>

    {{ form_end(formContent)}}

    <!--
    ancienne version avant sécurité dans le BlogController
    <form action=\"\" method=\"post\">
        <input type=\"text\" name=\"title\" placeholder=\"Titre de l'article\">
        <textarea name=\"content\" placeholder=\"Contenu de l'article\"></textarea>
        <input type=\"text\" name=\"image\" placeholder=\"Image de l'article\">
        <button type=\"submit\">Enregistrer</button>
    </form>
    -->
 {% else %}
<div align=\"center\">
     <div class=\"col-lg-4\">
         <div class=\"alert alert-danger alert-dismissible fade show\">
             <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
             <strong>Désolé </strong>, vous n'avez pas accès à cette page. <a class=\"alert-link\" href=\"{{ path('home_page', {'path':'accueil'}) }}\"Revenir sur la page d'accueil</a>.
         </div>
     </div>
</div>
 {% endif %}
{% endblock %}
", "home_page/homecreate.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\home_page\\homecreate.html.twig");
    }
}

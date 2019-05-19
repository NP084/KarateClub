<?php

/* registration/conditionsGenerales.html.twig */
class __TwigTemplate_497cf75380229d149c3cae5d3a06fc7dd55df3c7601850ebffc398633d94e885 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/conditionsGenerales.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/conditionsGenerales.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/conditionsGenerales.html.twig"));

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

        echo "Conditions Générales";
        
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
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "    <h6>Ajouter les conditions générales</h6>
    <div class=\"card\">
    <div class=\"card-body\">
        ";
            // line 10
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAttachedFile_1"]) || array_key_exists("formAttachedFile_1", $context) ? $context["formAttachedFile_1"] : (function () { throw new Twig_Error_Runtime('Variable "formAttachedFile_1" does not exist.', 10, $this->source); })()), 'form_start');
            echo "
        ";
            // line 15
            echo "        <div class=\"form-group\">
            <label for=\"\">Description:</label>
            ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAttachedFile_1"]) || array_key_exists("formAttachedFile_1", $context) ? $context["formAttachedFile_1"] : (function () { throw new Twig_Error_Runtime('Variable "formAttachedFile_1" does not exist.', 17, $this->source); })()), "description", []), 'widget');
            echo "
        </div>
        <div class=\"form-group\">
            <label for=\"\">Sélectionner la pièce-jointe:</label>
            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formAttachedFile_1"]) || array_key_exists("formAttachedFile_1", $context) ? $context["formAttachedFile_1"] : (function () { throw new Twig_Error_Runtime('Variable "formAttachedFile_1" does not exist.', 21, $this->source); })()), "docFile", []), 'widget');
            echo "
        </div>
        <button type=\"submit\" class=\"btn btn-outline-info\">
            Ajouter le document
            ";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAttachedFile_1"]) || array_key_exists("formAttachedFile_1", $context) ? $context["formAttachedFile_1"] : (function () { throw new Twig_Error_Runtime('Variable "formAttachedFile_1" does not exist.', 25, $this->source); })()), 'form_end');
            echo "
        </button>
    </div>
        <div class=\"card\">
        <div class=\"card-body\">



";
            // line 36
            echo "

";
        } else {
            // line 39
            echo "
    ";
        }
        // line 41
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/conditionsGenerales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 41,  118 => 39,  113 => 36,  102 => 25,  95 => 21,  88 => 17,  84 => 15,  80 => 10,  75 => 7,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Conditions Générales{% endblock %}

{% block Body %}
    {% if (is_granted('ROLE_ADMIN')) %}
    <h6>Ajouter les conditions générales</h6>
    <div class=\"card\">
    <div class=\"card-body\">
        {{ form_start(formAttachedFile_1) }}
        {#         <div class=\"form-group\">
                     <label for=\"\">Nom du document:</label>
                     {{ form_widget(formAttachedFile_1.title) }}
                 </div>#}
        <div class=\"form-group\">
            <label for=\"\">Description:</label>
            {{ form_widget(formAttachedFile_1.description) }}
        </div>
        <div class=\"form-group\">
            <label for=\"\">Sélectionner la pièce-jointe:</label>
            {{ form_widget(formAttachedFile_1.docFile) }}
        </div>
        <button type=\"submit\" class=\"btn btn-outline-info\">
            Ajouter le document
            {{ form_end(formAttachedFile_1) }}
        </button>
    </div>
        <div class=\"card\">
        <div class=\"card-body\">



{#            <img class=\"embed-responsive-rounded\"#}
{#                 src=\"{{ asset('/upload/document/' ~ AttachedFile.docname) }}\"#}
{#                 alt=\"Card image\" width=\"100%\">#}


{% else %}

    {% endif %}

{% endblock %}", "registration/conditionsGenerales.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\registration\\conditionsGenerales.html.twig");
    }
}

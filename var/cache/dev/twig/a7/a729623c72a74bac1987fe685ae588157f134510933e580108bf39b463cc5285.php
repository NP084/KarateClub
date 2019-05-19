<?php

/* vika/Sponsorcreate.html.twig */
class __TwigTemplate_6c309bdc5dc464f268102ff615734eef3d89722472961dc41d4bc2236e35ac82 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vika/Sponsorcreate.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika/Sponsorcreate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika/Sponsorcreate.html.twig"));

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

        echo "VIKA Sponsors";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 5
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "    <h1>Modifier le sponsor</h1>
";
        } else {
            // line 8
            echo "    <h1>Ajouter un nouveau sponsor</h1>
";
        }
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSponsor"]) || array_key_exists("formSponsor", $context) ? $context["formSponsor"] : (function () { throw new Twig_Error_Runtime('Variable "formSponsor" does not exist.', 10, $this->source); })()), 'form_start');
        echo "

<div class=\"col-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <label for=\"\">Nom du sponsor</label>
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSponsor"]) || array_key_exists("formSponsor", $context) ? $context["formSponsor"] : (function () { throw new Twig_Error_Runtime('Variable "formSponsor" does not exist.', 19, $this->source); })()), "name", []), 'widget');
        echo "                     
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <label for=\"\">Description</label>
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSponsor"]) || array_key_exists("formSponsor", $context) ? $context["formSponsor"] : (function () { throw new Twig_Error_Runtime('Variable "formSponsor" does not exist.', 27, $this->source); })()), "description", []), 'widget');
        echo "                     
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <label for=\"\">Nom de l'image</label>
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSponsor"]) || array_key_exists("formSponsor", $context) ? $context["formSponsor"] : (function () { throw new Twig_Error_Runtime('Variable "formSponsor" does not exist.', 35, $this->source); })()), "imageFile", []), 'widget');
        echo "                     
                    </div>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary btn-md\">
                    ";
        // line 40
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "                        Enregister modification(s)
                    ";
        } else {
            // line 43
            echo "                        Ajouter
                    ";
        }
        // line 45
        echo "            </button>
        </div>
        
    </div>
</div>
";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSponsor"]) || array_key_exists("formSponsor", $context) ? $context["formSponsor"] : (function () { throw new Twig_Error_Runtime('Variable "formSponsor" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vika/Sponsorcreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 50,  134 => 45,  130 => 43,  126 => 41,  124 => 40,  116 => 35,  105 => 27,  94 => 19,  82 => 10,  78 => 8,  74 => 6,  72 => 5,  63 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}VIKA Sponsors{% endblock %}
{% block Body %}
{% if editMode %}
    <h1>Modifier le sponsor</h1>
{% else %}
    <h1>Ajouter un nouveau sponsor</h1>
{% endif %}
{{ form_start(formSponsor) }}

<div class=\"col-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <label for=\"\">Nom du sponsor</label>
                        {{ form_widget(formSponsor.name) }}                     
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <label for=\"\">Description</label>
                        {{ form_widget(formSponsor.description) }}                     
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <label for=\"\">Nom de l'image</label>
                        {{ form_widget(formSponsor.imageFile) }}                     
                    </div>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary btn-md\">
                    {% if editMode %}
                        Enregister modification(s)
                    {% else %}
                        Ajouter
                    {% endif %}
            </button>
        </div>
        
    </div>
</div>
{{ form_end(formSponsor) }}
{% endblock %}", "vika/Sponsorcreate.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\vika\\Sponsorcreate.html.twig");
    }
}

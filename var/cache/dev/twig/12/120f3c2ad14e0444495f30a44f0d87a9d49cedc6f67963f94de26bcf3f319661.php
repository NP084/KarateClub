<?php

/* vika/Encadrementcreate.html.twig */
class __TwigTemplate_db02d3d23955911617e99389eeb9b380529ea1a40ef994bed618f542ca27fd37 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vika/Encadrementcreate.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika/Encadrementcreate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika/Encadrementcreate.html.twig"));

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

        echo "VIKA Encadrement";
        
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
        echo "<h1>Ajouter un nouveau entraineur!</h1>
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEncadrement"]) || array_key_exists("formEncadrement", $context) ? $context["formEncadrement"] : (function () { throw new Twig_Error_Runtime('Variable "formEncadrement" does not exist.', 6, $this->source); })()), 'form_start');
        echo "

<div class=\"col-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <label for=\"\">Nom de l'entraineur</label>
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEncadrement"]) || array_key_exists("formEncadrement", $context) ? $context["formEncadrement"] : (function () { throw new Twig_Error_Runtime('Variable "formEncadrement" does not exist.', 15, $this->source); })()), "name", []), 'widget');
        echo "                     
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <label for=\"\">Description</label>
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEncadrement"]) || array_key_exists("formEncadrement", $context) ? $context["formEncadrement"] : (function () { throw new Twig_Error_Runtime('Variable "formEncadrement" does not exist.', 23, $this->source); })()), "description", []), 'widget');
        echo "                     
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <label for=\"\">Nom de l'image</label>
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEncadrement"]) || array_key_exists("formEncadrement", $context) ? $context["formEncadrement"] : (function () { throw new Twig_Error_Runtime('Variable "formEncadrement" does not exist.', 31, $this->source); })()), "imageFile", []), 'widget');
        echo "                     
                    </div>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary btn-md\">
                    ";
        // line 36
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "                        Enregister modification(s)
                    ";
        } else {
            // line 39
            echo "                        Ajouter
                    ";
        }
        // line 41
        echo "            </button>
        </div>
        
    </div>
</div>
";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEncadrement"]) || array_key_exists("formEncadrement", $context) ? $context["formEncadrement"] : (function () { throw new Twig_Error_Runtime('Variable "formEncadrement" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vika/Encadrementcreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  127 => 41,  123 => 39,  119 => 37,  117 => 36,  109 => 31,  98 => 23,  87 => 15,  75 => 6,  72 => 5,  63 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}VIKA Encadrement{% endblock %}
{% block Body %}
<h1>Ajouter un nouveau entraineur!</h1>
{{ form_start(formEncadrement) }}

<div class=\"col-6\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <label for=\"\">Nom de l'entraineur</label>
                        {{ form_widget(formEncadrement.name) }}                     
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <label for=\"\">Description</label>
                        {{ form_widget(formEncadrement.description) }}                     
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"form-group\">
                        <label for=\"\">Nom de l'image</label>
                        {{ form_widget(formEncadrement.imageFile) }}                     
                    </div>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary btn-md\">
                    {%if editMode %}
                        Enregister modification(s)
                    {% else %}
                        Ajouter
                    {% endif %}
            </button>
        </div>
        
    </div>
</div>
{{ form_end(formEncadrement) }}
{% endblock %}", "vika/Encadrementcreate.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\vika\\Encadrementcreate.html.twig");
    }
}

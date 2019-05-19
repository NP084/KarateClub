<?php

/* vika/showContent.html.twig */
class __TwigTemplate_6de1ce4f32cec61e564784b4390c5c6abfa8a01f5533a0bcb9b2d109556b582a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vika/showContent.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika/showContent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika/showContent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 5
        echo "<div class=\"container-fluid\">
    <h2>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentPage"]) || array_key_exists("contentPage", $context) ? $context["contentPage"] : (function () { throw new Twig_Error_Runtime('Variable "contentPage" does not exist.', 6, $this->source); })()), "title", []), "html", null, true);
        echo "</h2>
    <h4>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentPage"]) || array_key_exists("contentPage", $context) ? $context["contentPage"] : (function () { throw new Twig_Error_Runtime('Variable "contentPage" does not exist.', 7, $this->source); })()), "subtitle", []), "html", null, true);
        echo "</h4>

    <div class=\"card\">

        <!-- .card-body -->


        <div class=\"card-body\">

            <div class=\"content\">
                ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, (isset($context["contentPage"]) || array_key_exists("contentPage", $context) ? $context["contentPage"] : (function () { throw new Twig_Error_Runtime('Variable "contentPage" does not exist.', 17, $this->source); })()), "content", []);
        echo "
            </div>
            ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "            <div align=\"right\"><a class=\"btn btn-primary btn-md\"
                                  href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("VikaContentEdit", ["path" => twig_get_attribute($this->env, $this->source, (isset($context["contentPage"]) || array_key_exists("contentPage", $context) ? $context["contentPage"] : (function () { throw new Twig_Error_Runtime('Variable "contentPage" does not exist.', 21, $this->source); })()), "path", [])]), "html", null, true);
            echo "\" role=\"button\">Editer</a>
            </div>
            ";
        }
        // line 24
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vika/showContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  83 => 21,  80 => 20,  78 => 19,  73 => 17,  60 => 7,  56 => 6,  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block Body %}
<div class=\"container-fluid\">
    <h2>{{ contentPage.title }}</h2>
    <h4>{{ contentPage.subtitle }}</h4>

    <div class=\"card\">

        <!-- .card-body -->


        <div class=\"card-body\">

            <div class=\"content\">
                {{ contentPage.content | raw }}
            </div>
            {% if (is_granted('ROLE_ADMIN')) %}
            <div align=\"right\"><a class=\"btn btn-primary btn-md\"
                                  href=\"{{ path('VikaContentEdit', {'path':contentPage.path}) }}\" role=\"button\">Editer</a>
            </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "vika/showContent.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\vika\\showContent.html.twig");
    }
}

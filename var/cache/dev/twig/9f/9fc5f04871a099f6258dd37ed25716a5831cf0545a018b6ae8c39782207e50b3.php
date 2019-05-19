<?php

/* vika_event/_delete_form.html.twig */
class __TwigTemplate_9c18824aef481efe71abde4fcbf0a7e4ab50a336c8574fe4693b85b1f36279a9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika_event/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika_event/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 1, $this->source); })()), "id", [])]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Etes vous certain de vouloir supprimer cet événement?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["vikaEvent"]) || array_key_exists("vikaEvent", $context) ? $context["vikaEvent"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvent" does not exist.', 3, $this->source); })()), "id", []))), "html", null, true);
        echo "\">
    <button class=\"btn btn-danger\">Effacer</button>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vika_event/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"post\" action=\"{{ path('vika_event_delete', {'id': vikaEvent.id}) }}\" onsubmit=\"return confirm('Etes vous certain de vouloir supprimer cet événement?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ vikaEvent.id) }}\">
    <button class=\"btn btn-danger\">Effacer</button>
</form>
", "vika_event/_delete_form.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\vika_event\\_delete_form.html.twig");
    }
}

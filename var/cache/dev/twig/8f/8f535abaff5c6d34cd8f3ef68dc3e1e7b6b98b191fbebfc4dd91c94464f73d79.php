<?php

/* price_grid/_delete_form.html.twig */
class __TwigTemplate_a998b87597b618db099db043c7d51193b21ee85d450081132b268f3b8b0d63f3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "price_grid/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "price_grid/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("price_grid_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["price_grid"]) || array_key_exists("price_grid", $context) ? $context["price_grid"] : (function () { throw new Twig_Error_Runtime('Variable "price_grid" does not exist.', 1, $this->source); })()), "id", []), "route" => (isset($context["indexMode"]) || array_key_exists("indexMode", $context) ? $context["indexMode"] : (function () { throw new Twig_Error_Runtime('Variable "indexMode" does not exist.', 1, $this->source); })())]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Etes vous certain de vouloir supprimer cette ligne?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["price_grid"]) || array_key_exists("price_grid", $context) ? $context["price_grid"] : (function () { throw new Twig_Error_Runtime('Variable "price_grid" does not exist.', 3, $this->source); })()), "id", []))), "html", null, true);
        echo "\">
    <button class=\"btn\">Effacer</button>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "price_grid/_delete_form.html.twig";
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
        return new Twig_Source("<form method=\"post\" action=\"{{ path('price_grid_delete', {'id': price_grid.id, 'route': indexMode}) }}\" onsubmit=\"return confirm('Etes vous certain de vouloir supprimer cette ligne?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ price_grid.id) }}\">
    <button class=\"btn\">Effacer</button>
</form>
", "price_grid/_delete_form.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\price_grid\\_delete_form.html.twig");
    }
}

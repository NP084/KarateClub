<?php

/* registration/editPaiement.html.twig */
class __TwigTemplate_01ec70d69fe2a169f24d2a91dd15e029e22b693248205a6a71f27cc20b917f17 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/editPaiement.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/editPaiement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/editPaiement.html.twig"));

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

        echo "Modifier la modalité de payement";
        
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
<h4>Modifier la modalité de payement</h4>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-8\">
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPaiement"]) || array_key_exists("formPaiement", $context) ? $context["formPaiement"] : (function () { throw new Twig_Error_Runtime('Variable "formPaiement" does not exist.', 13, $this->source); })()), 'form_start');
        echo "  
                    <div class=\"row\">
                        <div class=\"col-3\">
                            <div class=\"form-group\">
                                <label for=\"\">Modalité</label>
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPaiement"]) || array_key_exists("formPaiement", $context) ? $context["formPaiement"] : (function () { throw new Twig_Error_Runtime('Variable "formPaiement" does not exist.', 18, $this->source); })()), "category", []), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-3\">
                            <div class=\"form-group\">
                                <label for=\"\">Montant</label>
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPaiement"]) || array_key_exists("formPaiement", $context) ? $context["formPaiement"] : (function () { throw new Twig_Error_Runtime('Variable "formPaiement" does not exist.', 24, $this->source); })()), "amount", []), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-3\">
                            <div class=\"form-group\">
                                <label for=\"\">Statut</label>
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPaiement"]) || array_key_exists("formPaiement", $context) ? $context["formPaiement"] : (function () { throw new Twig_Error_Runtime('Variable "formPaiement" does not exist.', 30, $this->source); })()), "isPaid", []), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-auto\">
                            <button type=\"submit\" class=\"btn btn-outline-info\">
                                Modifier
                            </button>
                        </div>
                    </div>
                    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPaiement"]) || array_key_exists("formPaiement", $context) ? $context["formPaiement"] : (function () { throw new Twig_Error_Runtime('Variable "formPaiement" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
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
        return "registration/editPaiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  107 => 30,  98 => 24,  89 => 18,  81 => 13,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Modifier la modalité de payement{% endblock %}

{% block Body %}

<h4>Modifier la modalité de payement</h4>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-8\">
            <div class=\"card\">
                <div class=\"card-body\">
                    {{ form_start(formPaiement) }}  
                    <div class=\"row\">
                        <div class=\"col-3\">
                            <div class=\"form-group\">
                                <label for=\"\">Modalité</label>
                                {{ form_widget(formPaiement.category) }}
                            </div>
                        </div>
                        <div class=\"col-3\">
                            <div class=\"form-group\">
                                <label for=\"\">Montant</label>
                                {{ form_widget(formPaiement.amount) }}
                            </div>
                        </div>
                        <div class=\"col-3\">
                            <div class=\"form-group\">
                                <label for=\"\">Statut</label>
                                {{ form_widget(formPaiement.isPaid) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-auto\">
                            <button type=\"submit\" class=\"btn btn-outline-info\">
                                Modifier
                            </button>
                        </div>
                    </div>
                    {{ form_end(formPaiement) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "registration/editPaiement.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\registration\\editPaiement.html.twig");
    }
}

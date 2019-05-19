<?php

/* member/editHistory.html.twig */
class __TwigTemplate_f1416dda48eec7a5e89f0420e91b2c564b27ac22d32fd728ba8d15547c9c8652 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "member/editHistory.html.twig", 1);
        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/editHistory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "member/editHistory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/js/datetimepicker/jquery.datetimepicker.css\"/>
    <script src=\"/js/datetimepicker/jquery.js\"></script>
    <script src=\"/js/datetimepicker/build/jquery.datetimepicker.full.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"js/datetimepicker/jquery.datetimepicker.js\"></script>
    <script>
        jQuery.datetimepicker.setLocale('fr');
        jQuery('.datetimepicker').datetimepicker({
            timepicker:false,
            format: 'd-m-Y',
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 42
        echo "
    ";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "            <div class=\"container-fluid\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-6\">
                        <h4>Ajouter une nouvelle ligne dans le parcours</h4>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            ";
            // line 53
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["historyForm"]) || array_key_exists("historyForm", $context) ? $context["historyForm"] : (function () { throw new Twig_Error_Runtime('Variable "historyForm" does not exist.', 53, $this->source); })()), 'form_start');
            echo "
                                            ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["historyForm"]) || array_key_exists("historyForm", $context) ? $context["historyForm"] : (function () { throw new Twig_Error_Runtime('Variable "historyForm" does not exist.', 54, $this->source); })()), "description", []), 'label', ["label" => "Description"]);
            echo "
                                            ";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["historyForm"]) || array_key_exists("historyForm", $context) ? $context["historyForm"] : (function () { throw new Twig_Error_Runtime('Variable "historyForm" does not exist.', 55, $this->source); })()), "description", []), 'widget', ["attr" => ["rows" => "4"]]);
            // line 56
            echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["historyForm"]) || array_key_exists("historyForm", $context) ? $context["historyForm"] : (function () { throw new Twig_Error_Runtime('Variable "historyForm" does not exist.', 63, $this->source); })()), "category", []), 'label', ["label" => "Catégorie"]);
            echo "
                                            ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["historyForm"]) || array_key_exists("historyForm", $context) ? $context["historyForm"] : (function () { throw new Twig_Error_Runtime('Variable "historyForm" does not exist.', 64, $this->source); })()), "category", []), 'widget');
            echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["historyForm"]) || array_key_exists("historyForm", $context) ? $context["historyForm"] : (function () { throw new Twig_Error_Runtime('Variable "historyForm" does not exist.', 71, $this->source); })()), "refDate", []), 'label', ["label" => "Date"]);
            echo "
                                            ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["historyForm"]) || array_key_exists("historyForm", $context) ? $context["historyForm"] : (function () { throw new Twig_Error_Runtime('Variable "historyForm" does not exist.', 72, $this->source); })()), "refDate", []), 'widget', ["attr" => ["class" => "datetimepicker"]]);
            echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            ";
            // line 79
            if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 79, $this->source); })())) {
                // line 80
                echo "                                                <button type=\"submit\" class=\"btn btn-outline-success\">
                                                    Modifier l'historique</button>
                                            ";
            } else {
                // line 83
                echo "                                                <button type=\"submit\" class=\"btn btn-outline-success\">
                                                    Ajouter un nouvel historique</button>
                                            ";
            }
            // line 86
            echo "                                            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["historyForm"]) || array_key_exists("historyForm", $context) ? $context["historyForm"] : (function () { throw new Twig_Error_Runtime('Variable "historyForm" does not exist.', 86, $this->source); })()), 'form_end');
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    ";
        } else {
            // line 96
            echo "        <h2>Vous n'êtes pas autorisé à accéder à cette page</h2>
    ";
        }
        // line 98
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/editHistory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 98,  199 => 96,  185 => 86,  180 => 83,  175 => 80,  173 => 79,  163 => 72,  159 => 71,  149 => 64,  145 => 63,  136 => 56,  134 => 55,  130 => 54,  126 => 53,  115 => 44,  113 => 43,  110 => 42,  101 => 41,  80 => 30,  71 => 29,  55 => 23,  46 => 22,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{#{% block stylesheets %}
    {{ parent() }}
    <link href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css\"
          rel=\"stylesheet\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js\"></script>
    <script>
        jQuery(document).ready(function () {
            \$('.js-datepicker').datepicker({
                language: 'fr_FR',
                format: 'dd/mm/yyyy'
            });
        });
    </script>
{% endblock %}#}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/js/datetimepicker/jquery.datetimepicker.css\"/>
    <script src=\"/js/datetimepicker/jquery.js\"></script>
    <script src=\"/js/datetimepicker/build/jquery.datetimepicker.full.min.js\"></script>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"js/datetimepicker/jquery.datetimepicker.js\"></script>
    <script>
        jQuery.datetimepicker.setLocale('fr');
        jQuery('.datetimepicker').datetimepicker({
            timepicker:false,
            format: 'd-m-Y',
        });
    </script>
{% endblock %}

{% block Body %}

    {% if (is_granted('ROLE_ADMIN')) %}
            <div class=\"container-fluid\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-6\">
                        <h4>Ajouter une nouvelle ligne dans le parcours</h4>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            {{ form_start(historyForm) }}
                                            {{ form_label(historyForm.description, 'Description') }}
                                            {{ form_widget(historyForm.description,  { 'attr': {
                                                'rows' : '4' }} ) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            {{ form_label(historyForm.category, 'Catégorie') }}
                                            {{ form_widget(historyForm.category) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            {{ form_label(historyForm.refDate, 'Date') }}
                                            {{ form_widget(historyForm.refDate, { attr:{ class:'datetimepicker' } }) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"form-group\">
                                            {% if(editMode) %}
                                                <button type=\"submit\" class=\"btn btn-outline-success\">
                                                    Modifier l'historique</button>
                                            {% else %}
                                                <button type=\"submit\" class=\"btn btn-outline-success\">
                                                    Ajouter un nouvel historique</button>
                                            {% endif %}
                                            {{ form_end(historyForm) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    {% else %}
        <h2>Vous n'êtes pas autorisé à accéder à cette page</h2>
    {% endif %}

{% endblock %}", "member/editHistory.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\member\\editHistory.html.twig");
    }
}

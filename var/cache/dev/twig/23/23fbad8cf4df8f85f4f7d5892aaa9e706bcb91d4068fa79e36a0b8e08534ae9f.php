<?php

/* registration/conditions.html.twig */
class __TwigTemplate_3be071eeea9b891463dbf0b0515f89eb209b4d506c3a96ac749f647cb5cd13e0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "registration/conditions.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/conditions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/conditions.html.twig"));

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
    <!-- .card-header -->
    <div class=\"card-header\">
        <!-- .steps -->
        <div class=\"steps\" role=\"tablist\">
            <ul>
                <li class=\"step\" data-target=\"#test-l-1\">
                    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_member_lesson", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 11, $this->source); })()), "userConnected", []), "id", []), "idevent" => twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 11, $this->source); })()), "id", [])]), "html", null, true);
        echo "\"
                       class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-people\"></i></span>
                        <span class=\"d-none d-sm-inline\">Ma famille</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-2\">
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("preregistration_summary", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->source); })()), "id", []), "idevent" => twig_get_attribute($this->env, $this->source, (isset($context["idevent"]) || array_key_exists("idevent", $context) ? $context["idevent"] : (function () { throw new Twig_Error_Runtime('Variable "idevent" does not exist.', 18, $this->source); })()), "id", [])]), "html", null, true);
        echo "\"
                       class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-person \"></i></span>
                        <span class=\"d-none d-sm-inline\">Informations du participant</span>
                    </a>
                </li>
                <li class=\"active\" data-target=\"#test-l-3\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-script\"></i></span>
                        <span class=\"d-none d-sm-inline\">Conditions Générales</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-4\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-check\"></i></span>
                        <span class=\"d-none d-sm-inline\">Résumé</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.steps -->
    </div>
    <div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
    <div class=\"col-md-10\">
    ";
        // line 43
        $context["foo"] = "1";
        // line 44
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preregs"]) || array_key_exists("preregs", $context) ? $context["preregs"] : (function () { throw new Twig_Error_Runtime('Variable "preregs" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prereg"]) {
            // line 45
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["prereg"], "user", []), "id", []) == twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 45, $this->source); })()), "id", []))) {
                // line 47
                echo "    <div class=\"card\">
    <div class=\"card-body\">
    <div class=\"row\">
    <div class=\"col-12\">
        <div align=\"center\">
              ";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 52, $this->source); })()), "firstName", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 52, $this->source); })()), "name", []), "html", null, true);
                echo " est déjà inscrit à cet événement <i class=\"oi oi-check\"></i>
        </div></div></div></div></div>
";
                // line 55
                echo "            ";
                $context["foo"] = "0";
                // line 56
                echo "        ";
            }
            // line 57
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prereg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    ";
        if (((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 58, $this->source); })()) == 1)) {
            // line 59
            echo "    <h2> Conditions générales </h2>
    <div class=\"card\">
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-4\">
                <div class=\"form-group\">
                </br>
                    <h6>En cochant ci-dessous, j'accepte le/la :</h6>
                    ";
            // line 67
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), 'form_start');
            echo "
                    </br>
                    ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->source); })()), "medical_care", []), 'widget');
            echo "

                    </br>
                    ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "image_diffusion", []), 'widget');
            echo "

                    </br>
                    ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "condition_registration", []), 'widget');
            echo "

                    </br>
                </div>
            <h6>";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "remark", []), 'label', ["label" => "Remarque éventuelle"]);
            echo "</h6>
            </div>


        </div>

            </br>

            ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "remark", []), 'widget');
            echo "
            </br>


                <button type=\"submit\" class=\"btn btn-secondary btn-lg btn-block\">Confirmer mon inscription au
                    cours
                </button>

        </div>
        <a class=\"btn btn-link\"
           href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/document/" . twig_get_attribute($this->env, $this->source, (isset($context["AttachedFile"]) || array_key_exists("AttachedFile", $context) ? $context["AttachedFile"] : (function () { throw new Twig_Error_Runtime('Variable "AttachedFile" does not exist.', 97, $this->source); })()), "docname", []))), "html", null, true);
            echo "\">Voir nos conditions générales</a>
    </div>
    ";
            // line 99
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
            echo "


";
        }
        // line 103
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/conditions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 103,  202 => 99,  197 => 97,  184 => 87,  173 => 79,  166 => 75,  160 => 72,  154 => 69,  149 => 67,  139 => 59,  136 => 58,  130 => 57,  127 => 56,  124 => 55,  117 => 52,  110 => 47,  107 => 45,  102 => 44,  100 => 43,  72 => 18,  62 => 11,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block Body %}

    <!-- .card-header -->
    <div class=\"card-header\">
        <!-- .steps -->
        <div class=\"steps\" role=\"tablist\">
            <ul>
                <li class=\"step\" data-target=\"#test-l-1\">
                    <a href=\"{{ path('registration_member_lesson', {'id':user.userConnected.id, 'idevent':  idevent.id}) }}\"
                       class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-people\"></i></span>
                        <span class=\"d-none d-sm-inline\">Ma famille</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-2\">
                    <a href=\"{{ path('preregistration_summary', {'id':user.id, 'idevent':  idevent.id}) }}\"
                       class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-person \"></i></span>
                        <span class=\"d-none d-sm-inline\">Informations du participant</span>
                    </a>
                </li>
                <li class=\"active\" data-target=\"#test-l-3\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-script\"></i></span>
                        <span class=\"d-none d-sm-inline\">Conditions Générales</span>
                    </a>
                </li>
                <li class=\"step\" data-target=\"#test-l-4\">
                    <a class=\"step-trigger\" tabindex=\"-1\">
                        <span class=\"step-indicator step-indicator-icon\"><i class=\"oi oi-check\"></i></span>
                        <span class=\"d-none d-sm-inline\">Résumé</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.steps -->
    </div>
    <div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
    <div class=\"col-md-10\">
    {% set foo = '1' %}
    {% for prereg in preregs %}
        {% if prereg.user.id == user.id %}
{#            <a class=\"btn btn-secondary disabled disabled\">#}
    <div class=\"card\">
    <div class=\"card-body\">
    <div class=\"row\">
    <div class=\"col-12\">
        <div align=\"center\">
              {{ user.firstName}} {{user.name}} est déjà inscrit à cet événement <i class=\"oi oi-check\"></i>
        </div></div></div></div></div>
{#            </a>#}
            {% set foo = '0' %}
        {% endif %}
    {% endfor %}
    {% if foo == 1 %}
    <h2> Conditions générales </h2>
    <div class=\"card\">
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-4\">
                <div class=\"form-group\">
                </br>
                    <h6>En cochant ci-dessous, j'accepte le/la :</h6>
                    {{ form_start(form) }}
                    </br>
                    {{ form_widget(form.medical_care) }}

                    </br>
                    {{ form_widget(form.image_diffusion) }}

                    </br>
                    {{ form_widget(form.condition_registration) }}

                    </br>
                </div>
            <h6>{{ form_label(form.remark, 'Remarque éventuelle') }}</h6>
            </div>


        </div>

            </br>

            {{ form_widget(form.remark) }}
            </br>


                <button type=\"submit\" class=\"btn btn-secondary btn-lg btn-block\">Confirmer mon inscription au
                    cours
                </button>

        </div>
        <a class=\"btn btn-link\"
           href=\"{{ asset('/upload/document/' ~ AttachedFile.docname) }}\">Voir nos conditions générales</a>
    </div>
    {{ form_end(form) }}


{% endif %}


{% endblock %}", "registration/conditions.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\registration\\conditions.html.twig");
    }
}

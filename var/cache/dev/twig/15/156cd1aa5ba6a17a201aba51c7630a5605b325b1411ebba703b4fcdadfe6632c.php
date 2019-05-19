<?php

/* vika_event/indexShow.html.twig */
class __TwigTemplate_53072af411f061848539e823603b73e09b7f1c7c134b9048019897d2697a8644 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("blog/Template.html.twig", "vika_event/indexShow.html.twig", 1);
        $this->blocks = [
            'Content' => [$this, 'block_Content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "blog/Template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika_event/indexShow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika_event/indexShow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_Content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vikaEvents"]) || array_key_exists("vikaEvents", $context) ? $context["vikaEvents"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvents" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vikaEvent"]) {
            // line 8
            echo "                <div class=\"col-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vikaEvent"], "title", []), "html", null, true);
            echo "</h5>
                        </div>
                        <div class=\"card-body\">
                            <img class=\"embed-responsive-rounded\"
                                 src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/vikaEvent/" . twig_get_attribute($this->env, $this->source, $context["vikaEvent"], "imageName", []))), "html", null, true);
            echo "\"
                                 alt=\"Card image\" width=\"100%\">
                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-text\">
                                ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vikaEvent"], "owner", []), "html", null, true);
            echo "
                            </p>
                        </div>

                        <div class=\"card-footer\">
                            <div class=\"card-footer-content text-muted\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"metadata\">Diffusé le ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vikaEvent"], "createdEv", []), "d/m/Y"), "html", null, true);
            echo "</div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        <div class=\"card-footer-content text-muted\">
                                            <a class=\"btn btn-primary btn-md\"
                                               href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["vikaEvent"], "id", [])]), "html", null, true);
            echo "\" role=\"button\">Lire
                                                la suite</a>

                                        </div>
                                    </div>

";
            // line 43
            echo "
";
            // line 50
            echo "
";
            // line 53
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vikaEvent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
            ";
        // line 64
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "vika_event/indexShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 64,  130 => 60,  118 => 53,  115 => 50,  112 => 43,  103 => 36,  92 => 28,  81 => 20,  73 => 15,  66 => 11,  61 => 8,  57 => 7,  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'blog/Template.html.twig' %}


{% block Content %}
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            {% for vikaEvent in vikaEvents %}
                <div class=\"col-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ vikaEvent.title }}</h5>
                        </div>
                        <div class=\"card-body\">
                            <img class=\"embed-responsive-rounded\"
                                 src=\"{{ asset('/upload/vikaEvent/' ~ vikaEvent.imageName) }}\"
                                 alt=\"Card image\" width=\"100%\">
                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-text\">
                                {{ vikaEvent.owner }}
                            </p>
                        </div>

                        <div class=\"card-footer\">
                            <div class=\"card-footer-content text-muted\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"metadata\">Diffusé le {{ vikaEvent.createdEv |date('d/m/Y') }}</div>
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-4\">
                                        <div class=\"card-footer-content text-muted\">
                                            <a class=\"btn btn-primary btn-md\"
                                               href=\"{{ path('vika_event_show', {'id':vikaEvent.id}) }}\" role=\"button\">Lire
                                                la suite</a>

                                        </div>
                                    </div>

{#                                    {% if (app.user and vikaEvent.inscription == true) %}#}

{#                                        <div class=\"col-4\">#}
{#                                            <div class=\"card-footer-content text-muted\">#}
{#                                                <a class=\"btn btn-primary btn-md\"#}
{#                                                   href=\"{{ path('registration_member_lesson', {'idevent':vikaEvent.id, 'id':user.id}) }}\"#}
{#                                                   role=\"button\">S'inscrire</a>#}
{#                                            </div>#}

{#                                        </div>#}
{#                                    {% endif %}#}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            {% endfor %}

            {#            <div class=\"navigation\">
                            {{ knp_pagination_render(articles) }}
                        </div>#}
        </div>
    </div>
{% endblock %}
", "vika_event/indexShow.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\vika_event\\indexShow.html.twig");
    }
}

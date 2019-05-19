<?php

/* galeriephoto/galerieshow.html.twig */
class __TwigTemplate_494760e9d7cfe78fea92dedd9ba8405acf6f038d9238cd3b3bd80446a493b3bf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "galeriephoto/galerieshow.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "galeriephoto/galerieshow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "galeriephoto/galerieshow.html.twig"));

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
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\"><h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["galerie"]) || array_key_exists("galerie", $context) ? $context["galerie"] : (function () { throw new Twig_Error_Runtime('Variable "galerie" does not exist.', 9, $this->source); })()), "name", []), "html", null, true);
        echo "</h2></div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["galerie"]) || array_key_exists("galerie", $context) ? $context["galerie"] : (function () { throw new Twig_Error_Runtime('Variable "galerie" does not exist.', 13, $this->source); })()), "description", []), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["galerie"]) || array_key_exists("galerie", $context) ? $context["galerie"] : (function () { throw new Twig_Error_Runtime('Variable "galerie" does not exist.', 19, $this->source); })()), "media", []));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 20
            echo "                                <div class=\"col-3\">
                                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/galerie/" . twig_get_attribute($this->env, $this->source, $context["photo"], "imageName", []))), "html", null, true);
            echo "\" target=\"_blank\">
                                        <img class=\"embed-responsive-item rounded\"
                                             src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/galerie/" . twig_get_attribute($this->env, $this->source, $context["photo"], "imageName", []))), "html", null, true);
            echo "\" alt=\"Card image\"
                                             width=\"100%\">
                                    </a>
                                    ";
            // line 27
            echo "                                    <p><br></p>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </div>

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
        return "galeriephoto/galerieshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 30,  94 => 27,  88 => 23,  83 => 21,  80 => 20,  76 => 19,  67 => 13,  60 => 9,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block Body %}

    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-header\"><h2>{{ galerie.name }}</h2></div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                {{ galerie.description }}
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            {% for photo in galerie.media %}
                                <div class=\"col-3\">
                                    <a href=\"{{ asset('/upload/galerie/' ~ photo.imageName) }}\" target=\"_blank\">
                                        <img class=\"embed-responsive-item rounded\"
                                             src=\"{{ asset('/upload/galerie/' ~ photo.imageName) }}\" alt=\"Card image\"
                                             width=\"100%\">
                                    </a>
                                    {#retour à la ligne#}
                                    <p><br></p>
                                </div>
                            {% endfor %}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "galeriephoto/galerieshow.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\galeriephoto\\galerieshow.html.twig");
    }
}

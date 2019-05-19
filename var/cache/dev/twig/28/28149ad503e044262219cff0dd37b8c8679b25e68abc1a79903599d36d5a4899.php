<?php

/* galeriephoto/index.html.twig */
class __TwigTemplate_b9895d8eba90880559a41eb892703de9661c80471f117d48321aab8c91105733 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "galeriephoto/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "galeriephoto/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "galeriephoto/index.html.twig"));

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
        echo "    <div class=\"container\">
        ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "            <div class=\"row\">
                <div class=\"col-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <div class=\"tile tile-img tile-lg\">
                                <img src=\"Logo_Vika.png\" alt=\"\" style=\"height: 35px;width: auto;\">
                            </div>
                            Nouvelle galerie photo
                        </div>
                        <div class=\"card-body\">
                            <a class=\"btn btn-primary btn-block btn-xl\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galeriephoto_create");
            echo "\"
                               role=\"button\">Ajouter</a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 24
        echo "
        <div class=\"row justify-content-md-center\">

        </div>
    </div>

    <br><br>
    <div class=\"container\">
        <h2>Bienvenue dans la galerie photo</h2>
        <div class=\"row justify-content-md-center\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleries"]) || array_key_exists("galleries", $context) ? $context["galleries"] : (function () { throw new Twig_Error_Runtime('Variable "galleries" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 35
            echo "                ";
            if (((twig_get_attribute($this->env, $this->source, $context["gallery"], "name", []) == "Carrousel") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 36
                echo "                    <div class=\"col-6\">
                        <div class=\"card\">
                            <!-- .card-header -->
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "name", []), "html", null, true);
                echo "</h5>
                            </div>
                            <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">
                                <img class=\"embed-responsive-item\"
                                     src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/galerie/" . twig_get_attribute($this->env, $this->source, $context["gallery"], "avatarName", []))), "html", null, true);
                echo "\" alt=\"Card image\">
                            </figure>
                            <div class=\"card-body\">
                                <p class=\"card-text\">
                                    ";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["gallery"], "description", []);
                echo "
                                </p>
                            </div>
                            <div class=\"card-footer\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"card-footer-content text-muted\">
                                            <a class=\"btn btn-primary btn-md\"
                                               href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_show", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [])]), "html", null, true);
                echo "\" role=\"button\">Consulter</a>
                                        </div>
                                    </div>
                                    ";
                // line 59
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 60
                    echo "                                        <div class=\"col-2\">
                                            <div class=\"card-footer-content text-muted\">
                                                <a class=\"btn btn-primary btn-md\"
                                                   href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [])]), "html", null, true);
                    echo "\" role=\"button\">Editer</a>
                                            </div>
                                        </div>
                                        <div class=\"col-2\">
                                            <div class=\"card-footer-content text-muted\">
                                                <a class=\"btn btn-primary btn-md\"
                                                   onclick=\"return confirm('Veuillez confirmer la suppression de cette galerie photo svp?');\"
                                                   href=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [])]), "html", null, true);
                    echo "\" role=\"button\">Supprimer</a>
                                            </div>
                                        </div>
                                    ";
                }
                // line 74
                echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 78
$context["gallery"], "name", []) != "Carrousel")) {
                // line 79
                echo "                    <div class=\"col-6\">
                        <div class=\"card\">
                            <!-- .card-header -->
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "name", []), "html", null, true);
                echo "</h5>
                            </div>
                            <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">
                                <img class=\"embed-responsive-item\"
                                     src=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/galerie/" . twig_get_attribute($this->env, $this->source, $context["gallery"], "avatarName", []))), "html", null, true);
                echo "\" alt=\"Card image\">
                            </figure>
                            <div class=\"card-body\">
                                <p class=\"card-text\">
                                    ";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["gallery"], "description", []);
                echo "
                                </p>
                            </div>
                            <div class=\"card-footer\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"card-footer-content text-muted\">
                                            <a class=\"btn btn-primary btn-md\"
                                               href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_show", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [])]), "html", null, true);
                echo "\" role=\"button\">Consulter</a>
                                        </div>
                                    </div>
                                    ";
                // line 102
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 103
                    echo "                                        <div class=\"col-2\">
                                            <div class=\"card-footer-content text-muted\">
                                                <a class=\"btn btn-primary btn-md\"
                                                   href=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [])]), "html", null, true);
                    echo "\" role=\"button\">Editer</a>
                                            </div>
                                        </div>
                                        <div class=\"col-2\">
                                            <div class=\"card-footer-content text-muted\">
                                                <a class=\"btn btn-primary btn-md\"
                                                   onclick=\"return confirm('Veuillez confirmer la suppression de cette galerie photo svp?');\"
                                                   href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", [])]), "html", null, true);
                    echo "\" role=\"button\">Supprimer</a>
                                            </div>
                                        </div>
                                    ";
                }
                // line 117
                echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 122
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "galeriephoto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 123,  236 => 122,  229 => 117,  222 => 113,  212 => 106,  207 => 103,  205 => 102,  199 => 99,  188 => 91,  181 => 87,  174 => 83,  168 => 79,  166 => 78,  160 => 74,  153 => 70,  143 => 63,  138 => 60,  136 => 59,  130 => 56,  119 => 48,  112 => 44,  105 => 40,  99 => 36,  96 => 35,  92 => 34,  80 => 24,  70 => 17,  58 => 7,  56 => 6,  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block Body %}
    <div class=\"container\">
        {% if (is_granted('ROLE_ADMIN')) %}
            <div class=\"row\">
                <div class=\"col-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <div class=\"tile tile-img tile-lg\">
                                <img src=\"Logo_Vika.png\" alt=\"\" style=\"height: 35px;width: auto;\">
                            </div>
                            Nouvelle galerie photo
                        </div>
                        <div class=\"card-body\">
                            <a class=\"btn btn-primary btn-block btn-xl\" href=\"{{ path('galeriephoto_create') }}\"
                               role=\"button\">Ajouter</a>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}

        <div class=\"row justify-content-md-center\">

        </div>
    </div>

    <br><br>
    <div class=\"container\">
        <h2>Bienvenue dans la galerie photo</h2>
        <div class=\"row justify-content-md-center\">
            {% for gallery in galleries %}
                {% if gallery.name == 'Carrousel' and is_granted('ROLE_ADMIN') %}
                    <div class=\"col-6\">
                        <div class=\"card\">
                            <!-- .card-header -->
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ gallery.name }}</h5>
                            </div>
                            <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">
                                <img class=\"embed-responsive-item\"
                                     src=\"{{ asset('/upload/galerie/' ~ gallery.avatarName) }}\" alt=\"Card image\">
                            </figure>
                            <div class=\"card-body\">
                                <p class=\"card-text\">
                                    {{ gallery.description|raw }}
                                </p>
                            </div>
                            <div class=\"card-footer\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"card-footer-content text-muted\">
                                            <a class=\"btn btn-primary btn-md\"
                                               href=\"{{ path('gallery_show',{'id':gallery.id}) }}\" role=\"button\">Consulter</a>
                                        </div>
                                    </div>
                                    {% if (is_granted('ROLE_ADMIN')) %}
                                        <div class=\"col-2\">
                                            <div class=\"card-footer-content text-muted\">
                                                <a class=\"btn btn-primary btn-md\"
                                                   href=\"{{ path('gallery_edit',{'id':gallery.id}) }}\" role=\"button\">Editer</a>
                                            </div>
                                        </div>
                                        <div class=\"col-2\">
                                            <div class=\"card-footer-content text-muted\">
                                                <a class=\"btn btn-primary btn-md\"
                                                   onclick=\"return confirm('Veuillez confirmer la suppression de cette galerie photo svp?');\"
                                                   href=\"{{ path('gallery_delete',{'id':gallery.id}) }}\" role=\"button\">Supprimer</a>
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                {% elseif (gallery.name != 'Carrousel') %}
                    <div class=\"col-6\">
                        <div class=\"card\">
                            <!-- .card-header -->
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ gallery.name }}</h5>
                            </div>
                            <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">
                                <img class=\"embed-responsive-item\"
                                     src=\"{{ asset('/upload/galerie/' ~ gallery.avatarName) }}\" alt=\"Card image\">
                            </figure>
                            <div class=\"card-body\">
                                <p class=\"card-text\">
                                    {{ gallery.description|raw }}
                                </p>
                            </div>
                            <div class=\"card-footer\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"card-footer-content text-muted\">
                                            <a class=\"btn btn-primary btn-md\"
                                               href=\"{{ path('gallery_show',{'id':gallery.id}) }}\" role=\"button\">Consulter</a>
                                        </div>
                                    </div>
                                    {% if (is_granted('ROLE_ADMIN')) %}
                                        <div class=\"col-2\">
                                            <div class=\"card-footer-content text-muted\">
                                                <a class=\"btn btn-primary btn-md\"
                                                   href=\"{{ path('gallery_edit',{'id':gallery.id}) }}\" role=\"button\">Editer</a>
                                            </div>
                                        </div>
                                        <div class=\"col-2\">
                                            <div class=\"card-footer-content text-muted\">
                                                <a class=\"btn btn-primary btn-md\"
                                                   onclick=\"return confirm('Veuillez confirmer la suppression de cette galerie photo svp?');\"
                                                   href=\"{{ path('gallery_delete',{'id':gallery.id}) }}\" role=\"button\">Supprimer</a>
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>

{% endblock %}
", "galeriephoto/index.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\galeriephoto\\index.html.twig");
    }
}

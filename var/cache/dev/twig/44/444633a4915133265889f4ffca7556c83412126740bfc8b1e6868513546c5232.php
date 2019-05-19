<?php

/* blog/index.html.twig */
class __TwigTemplate_c0145ebcb6dbd9acc5276b82ab5116c99a423a9a645282fd5402e8bf43188516 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("blog/Template.html.twig", "blog/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

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
        echo "<div class=\"container\">
    ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "    <div class=\"row\">
        <div class=\"col-6\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <div class=\"tile tile-img tile-lg\">
                        <img src=\"Logo_Vika.png\" alt=\"\" style=\"height: 35px;width: auto;\">
                    </div>
                    Nouveau article
                </div>
                <div class=\"card-body\">
                    <a class=\"btn btn-primary btn-block btn-xl\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_create");
            echo "\" role=\"button\">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"row justify-content-md-center\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 25
            echo "        <div class=\"col-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", []), "html", null, true);
            echo "</h5>
                </div>
                <!-- 16:9 aspect ratio -->
                <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">
                    <img class=\"embed-responsive-item\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/media/" . twig_get_attribute($this->env, $this->source, $context["article"], "imageName", []))), "html", null, true);
            echo "\" alt=\"Card image\">
                </figure>

                <div class=\"card-body\">
                <p class=\"card-text\">
                    ";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["article"], "content", []);
            echo "
                </p>
                </div>

                <div class=\"card-footer\">
                    <div class=\"card-footer-content text-muted\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"metadata\">Ecrit le ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", []), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", []), "H:i"), "html", null, true);
            echo " dans la catégorie ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", []), "title", []), "html", null, true);
            echo "</div>
                            </div>
                        </div>
    
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"card-footer-content text-muted\">
                                    <a class=\"btn btn-primary btn-md\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [])]), "html", null, true);
            echo "\" role=\"button\">Lire la suite</a>
                                </div>
                            </div>
                            ";
            // line 55
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 56
                echo "                                <div class=\"col-3\"></div>
                                <div class=\"col-2\">
                                    <div class=\"card-footer-content text-muted\">
                                        <a class=\"btn btn-primary btn-md\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [])]), "html", null, true);
                echo "\" role=\"button\">Editer</a>
                                    </div>
                                </div>
                                <div class=\"col-2\">
                                    <div class=\"card-footer-content text-muted\">
                                        <a class=\"btn btn-primary btn-md\"
                                           onclick=\"return confirm('Veuillez confirmer la suppression de cet article svp?');\"
                                           href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [])]), "html", null, true);
                echo "\" role=\"button\">Supprimer</a>
                                    </div>
                                </div>
                            ";
            } else {
                // line 70
                echo "                            ";
            }
            // line 71
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        
        <div class=\"navigation\">
            ";
        // line 80
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 80, $this->source); })()));
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 80,  176 => 78,  164 => 71,  161 => 70,  154 => 66,  144 => 59,  139 => 56,  137 => 55,  131 => 52,  117 => 45,  106 => 37,  98 => 32,  91 => 28,  86 => 25,  82 => 24,  79 => 23,  70 => 17,  58 => 7,  56 => 6,  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'blog/Template.html.twig' %}


{% block Content %}
<div class=\"container\">
    {% if (is_granted('ROLE_ADMIN'))%}
    <div class=\"row\">
        <div class=\"col-6\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <div class=\"tile tile-img tile-lg\">
                        <img src=\"Logo_Vika.png\" alt=\"\" style=\"height: 35px;width: auto;\">
                    </div>
                    Nouveau article
                </div>
                <div class=\"card-body\">
                    <a class=\"btn btn-primary btn-block btn-xl\" href=\"{{ path('blog_create')}}\" role=\"button\">Ajouter</a>
                </div>
            </div>
        </div>
    </div>
    {% endif %}
    <div class=\"row justify-content-md-center\">
        {% for article in articles %}
        <div class=\"col-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                <h5 class=\"card-title\">{{ article.title }}</h5>
                </div>
                <!-- 16:9 aspect ratio -->
                <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">
                    <img class=\"embed-responsive-item\" src=\"{{ asset('/upload/media/' ~ article.imageName)}}\" alt=\"Card image\">
                </figure>

                <div class=\"card-body\">
                <p class=\"card-text\">
                    {{ article.content|raw }}
                </p>
                </div>

                <div class=\"card-footer\">
                    <div class=\"card-footer-content text-muted\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"metadata\">Ecrit le {{ article.createdAt |date('d/m/Y')}} à {{article.createdAt |date('H:i')}} dans la catégorie {{article.category.title}}</div>
                            </div>
                        </div>
    
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <div class=\"card-footer-content text-muted\">
                                    <a class=\"btn btn-primary btn-md\" href=\"{{ path('blog_show', {'id':article.id}) }}\" role=\"button\">Lire la suite</a>
                                </div>
                            </div>
                            {% if (is_granted('ROLE_ADMIN'))%}
                                <div class=\"col-3\"></div>
                                <div class=\"col-2\">
                                    <div class=\"card-footer-content text-muted\">
                                        <a class=\"btn btn-primary btn-md\" href=\"{{ path('blog_edit', {'id':article.id}) }}\" role=\"button\">Editer</a>
                                    </div>
                                </div>
                                <div class=\"col-2\">
                                    <div class=\"card-footer-content text-muted\">
                                        <a class=\"btn btn-primary btn-md\"
                                           onclick=\"return confirm('Veuillez confirmer la suppression de cet article svp?');\"
                                           href=\"{{ path('blog_delete', {'id':article.id}) }}\" role=\"button\">Supprimer</a>
                                    </div>
                                </div>
                            {% else %}
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {% endfor %}
        
        <div class=\"navigation\">
            {{ knp_pagination_render(articles) }}
        </div>
    </div>
</div>
{% endblock %}
", "blog/index.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\blog\\index.html.twig");
    }
}

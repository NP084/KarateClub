<?php

/* blog/show.html.twig */
class __TwigTemplate_b54a3a0db0cc98922a99852ba98f870e4897355224143eb42dfd00e21d7833da extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("blog/Template.html.twig", "blog/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_Content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 4
        echo "
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <h5 class=\"card-title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 8, $this->source); })()), "title", []), "html", null, true);
        echo "
                ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                       href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 11, $this->source); })()), "id", [])]), "html", null, true);
            echo "\">
                        <i class=\"fa fa-pencil\">
                        </i>
                        <span class=\"sr-only\">Modifier son profil</span>
                    </a>
                ";
        }
        // line 17
        echo "            </h5>
            <div class=\"card\">
                <div class=\"card-body\">
                    <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">
                        <img class=\"embed-responsive-item\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/media/" . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 21, $this->source); })()), "imageName", []))), "html", null, true);
        echo "\" alt=\"Card image\">
                    </figure>
                </div>

                <div class=\"card-body\">
                    <p class=\"card-text\">
                        ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 27, $this->source); })()), "content", []);
        echo "
                    </p>
                </div>
                <div class=\"card-footer\">
                        <div class=\"card-footer-content text-muted\">
                            <div class=\"metadata\">Ecrit le ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 32, $this->source); })()), "createdAt", []), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 32, $this->source); })()), "createdAt", []), "H:i"), "html", null, true);
        echo " dans la catégorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 32, $this->source); })()), "category", []), "title", []), "html", null, true);
        echo "</div>
                        </div>
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
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  92 => 27,  83 => 21,  77 => 17,  68 => 11,  65 => 10,  63 => 9,  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'blog/Template.html.twig' %}

{% block Content %}

<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <h5 class=\"card-title\">{{ article.title }}
                {% if (is_granted('ROLE_ADMIN')) %}
                    <a class=\"btn btn-sm btn-icon btn-secondary\"
                       href=\"{{ path('blog_edit',{'id':article.id}) }}\">
                        <i class=\"fa fa-pencil\">
                        </i>
                        <span class=\"sr-only\">Modifier son profil</span>
                    </a>
                {% endif %}
            </h5>
            <div class=\"card\">
                <div class=\"card-body\">
                    <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">
                        <img class=\"embed-responsive-item\" src=\"{{ asset('/upload/media/' ~ article.imageName) }}\" alt=\"Card image\">
                    </figure>
                </div>

                <div class=\"card-body\">
                    <p class=\"card-text\">
                        {{ article.content|raw }}
                    </p>
                </div>
                <div class=\"card-footer\">
                        <div class=\"card-footer-content text-muted\">
                            <div class=\"metadata\">Ecrit le {{ article.createdAt |date('d/m/Y')}} à {{article.createdAt |date('H:i')}} dans la catégorie {{article.category.title}}</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "blog/show.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\blog\\show.html.twig");
    }
}

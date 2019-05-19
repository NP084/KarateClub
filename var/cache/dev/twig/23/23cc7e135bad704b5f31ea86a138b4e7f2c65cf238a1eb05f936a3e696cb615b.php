<?php

/* OutilsTemplates/CarrouselArticles.html.twig */
class __TwigTemplate_c23da86b0caa4e91f742a13c5ea8625e4c133a5a6ccb480a321d3bb9fd39cb4c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/CarrouselArticles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/CarrouselArticles.html.twig"));

        // line 1
        echo "<html>
<div class=\"bd-example\">
    <div id=\"carouselExampleCaptions2\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleCaptions2\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleCaptions2\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleCaptions2\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            ";
        // line 10
        $context["foo"] = 1;
        // line 11
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "            ";
            if (((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 12, $this->source); })()) == 1)) {
                // line 13
                echo "            <div class=\"carousel-item active\">
                ";
            } else {
                // line 15
                echo "                <div class=\"carousel-item\">
                    ";
            }
            // line 17
            echo "                    <div class=\"card-body\">
                        <div class=\"row justify-content-md-center\">
                            <!-- Inserer boucle ici-->
                            ";
            // line 21
            echo "
                            ";
            // line 24
            echo "
                            <div class=\"col-lg-5\">
                                <div class=\"card\">
                                    <!-- .card-header -->
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\"> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", []), "html", null, true);
            echo " </h5>
                                    </div><!-- /.card-body -->
                                    <!-- 16:9 aspect ratio -->
                                    <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">
                                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [])]), "html", null, true);
            echo "\" role=\"button\">
                                            <img class=\"embed-responsive-item\"
                                                 src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/media/" . twig_get_attribute($this->env, $this->source, $context["article"], "imageName", []))), "html", null, true);
            echo "\"
                                                 alt=\"Card image\">
                                        </a>
                                    </figure>
                                    <!-- .card-body -->
                                    <div class=\"card-body\">
                                        <p class=\"card-text\">
                                            ";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["article"], "content", []);
            echo "
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                ";
            // line 51
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 51, $this->source); })()) + 1);
            // line 52
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
            </div>

            <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions2\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions2\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OutilsTemplates/CarrouselArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 53,  109 => 52,  107 => 51,  95 => 42,  85 => 35,  80 => 33,  73 => 29,  66 => 24,  63 => 21,  58 => 17,  54 => 15,  50 => 13,  47 => 12,  42 => 11,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<div class=\"bd-example\">
    <div id=\"carouselExampleCaptions2\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleCaptions2\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleCaptions2\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleCaptions2\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            {% set foo = 1 %}
            {% for article in articles %}
            {% if foo == 1 %}
            <div class=\"carousel-item active\">
                {% else %}
                <div class=\"carousel-item\">
                    {% endif %}
                    <div class=\"card-body\">
                        <div class=\"row justify-content-md-center\">
                            <!-- Inserer boucle ici-->
                            {#                                {% set nbr = 0 %}#}

                            {#       {% set nbr = nbr + 1 %}
                                   {% if nbr < 3 %}#}

                            <div class=\"col-lg-5\">
                                <div class=\"card\">
                                    <!-- .card-header -->
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\"> {{ article.title }} </h5>
                                    </div><!-- /.card-body -->
                                    <!-- 16:9 aspect ratio -->
                                    <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">
                                        <a href=\"{{ path('blog_show', {'id':article.id}) }}\" role=\"button\">
                                            <img class=\"embed-responsive-item\"
                                                 src=\"{{ asset('/upload/media/' ~ article.imageName) }}\"
                                                 alt=\"Card image\">
                                        </a>
                                    </figure>
                                    <!-- .card-body -->
                                    <div class=\"card-body\">
                                        <p class=\"card-text\">
                                            {{ article.content|raw }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {% set foo = foo + 1 %}
                {% endfor %}

            </div>

            <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions2\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions2\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
</html>


{#

<div class=\"carousel-item active\">
    <img src=\"https://media.gettyimages.com/photos/midsection-of-women-practicing-karate-picture-id922866872\" class=\"d-block w-100\" style=\"width:640px;height:360px\" alt=\"\">
    <div class=\"carousel-caption d-none d-md-block\">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
    </div>
</div>
<div class=\"carousel-item\">
    <img src=\"https://media.gettyimages.com/photos/blocking-picture-id820930290\" class=\"d-block w-100\" style=\"width:640px;height:360px\" alt=\"\">
    <div class=\"carousel-caption d-none d-md-block\">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</div>
<div class=\"carousel-item\">
    <img src=\"https://media.gettyimages.com/photos/midsection-of-woman-practicing-karate-picture-id922181264\" class=\"d-block w-100\" style=\"width:640px;height:360px\" alt=\"\">
    <div class=\"carousel-caption d-none d-md-block\">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
    </div>
</div>#}
", "OutilsTemplates/CarrouselArticles.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\OutilsTemplates\\CarrouselArticles.html.twig");
    }
}

<?php

/* OutilsTemplates/CarrouselEvent.html.twig */
class __TwigTemplate_187ff8cb9566fd8b4df4642e2c52cbe5f9fa106db8d8c06a2a36b232dd3ce6ff extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/CarrouselEvent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/CarrouselEvent.html.twig"));

        // line 1
        echo "<html>
<div class=\"bd-example\">
    <div id=\"carouselVikaEvent\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselVikaEvent\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselVikaEvent\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselVikaEvent\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            ";
        // line 10
        $context["foo"] = 1;
        // line 11
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vikaEvents"]) || array_key_exists("vikaEvents", $context) ? $context["vikaEvents"] : (function () { throw new Twig_Error_Runtime('Variable "vikaEvents" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vikaEvent"]) {
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

                            <div class=\"col-lg-5\">
                                <div class=\"card\">
                                    <!-- .card-header -->
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vikaEvent"], "title", []), "html", null, true);
            echo "</h5>
                                    </div>
                                    <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">
                                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vika_event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["vikaEvent"], "id", [])]), "html", null, true);
            echo "\" role=\"button\">
                                            <img class=\"embed-responsive-item\"
                                                 src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/vikaEvent/" . twig_get_attribute($this->env, $this->source, $context["vikaEvent"], "imageName", []))), "html", null, true);
            echo "\"
                                                 alt=\"Card image\" width=\"100%\">
                                        </a>
                                    </figure>
                                </div>
                                ";
            // line 35
            echo "                                ";
            // line 36
            echo "                                ";
            // line 37
            echo "                                ";
            // line 38
            echo "                                ";
            // line 39
            echo "
                                ";
            // line 41
            echo "                                ";
            // line 42
            echo "                                ";
            // line 43
            echo "                            </div>
                        </div>


                    </div>
                </div>

                ";
            // line 50
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 50, $this->source); })()) + 1);
            // line 51
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vikaEvent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselVikaEvent\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselVikaEvent\" role=\"button\" data-slide=\"next\">
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
        return "OutilsTemplates/CarrouselEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 52,  112 => 51,  110 => 50,  101 => 43,  99 => 42,  97 => 41,  94 => 39,  92 => 38,  90 => 37,  88 => 36,  86 => 35,  78 => 29,  73 => 27,  67 => 24,  58 => 17,  54 => 15,  50 => 13,  47 => 12,  42 => 11,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<div class=\"bd-example\">
    <div id=\"carouselVikaEvent\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselVikaEvent\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselVikaEvent\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselVikaEvent\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            {% set foo = 1 %}
            {% for vikaEvent in vikaEvents %}
            {% if foo == 1 %}
            <div class=\"carousel-item active\">
                {% else %}
                <div class=\"carousel-item\">
                    {% endif %}
                    <div class=\"card-body\">
                        <div class=\"row justify-content-md-center\">

                            <div class=\"col-lg-5\">
                                <div class=\"card\">
                                    <!-- .card-header -->
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">{{ vikaEvent.title }}</h5>
                                    </div>
                                    <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">
                                        <a href=\"{{ path('vika_event_show', {'id':vikaEvent.id}) }}\" role=\"button\">
                                            <img class=\"embed-responsive-item\"
                                                 src=\"{{ asset('/upload/vikaEvent/' ~ vikaEvent.imageName) }}\"
                                                 alt=\"Card image\" width=\"100%\">
                                        </a>
                                    </figure>
                                </div>
                                {#                                <div class=\"card-body\">#}
                                {#                                    <p class=\"card-text\">#}
                                {#                                        {{ vikaEvent.owner }}#}
                                {#                                    </p>#}
                                {#                                </div>#}

                                {#                                <div class=\"card-body\">#}
                                {#                                <p class=\"card-text\">#}
                                {#                                    le {{ vikaEvent.createdEv |date('d/m/Y') }}</div>#}
                            </div>
                        </div>


                    </div>
                </div>

                {% set foo = foo + 1 %}
                {% endfor %}

            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselVikaEvent\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselVikaEvent\" role=\"button\" data-slide=\"next\">
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
", "OutilsTemplates/CarrouselEvent.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\OutilsTemplates\\CarrouselEvent.html.twig");
    }
}

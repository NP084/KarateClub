<?php

/* OutilsTemplates/Carrousel.html.twig */
class __TwigTemplate_a2f9c33838e4aa923ba426c9642ba40f464c132c5782bc9fe839d7079981f58c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/Carrousel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/Carrousel.html.twig"));

        // line 1
        echo "<html>
<div class=\"bd-example\">
    <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            ";
        // line 10
        $context["foo"] = 1;
        // line 11
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["galerie"]) || array_key_exists("galerie", $context) ? $context["galerie"] : (function () { throw new Twig_Error_Runtime('Variable "galerie" does not exist.', 11, $this->source); })()), "media", []));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
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
            echo "                    <div class=\"row justify-content-md-center\">
                        <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/galerie/" . twig_get_attribute($this->env, $this->source, $context["media"], "imageName", []))), "html", null, true);
            echo "\"
                             class=\"embed-responsive-rounded\" style=\"width:640px;height:360px\" alt=\"\" width=\"100%\">
                    </div>
                </div>
                ";
            // line 22
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 22, $this->source); })()) + 1);
            // line 23
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
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
        return "OutilsTemplates/Carrousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  70 => 23,  68 => 22,  61 => 18,  58 => 17,  54 => 15,  50 => 13,  47 => 12,  42 => 11,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<div class=\"bd-example\">
    <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleCaptions\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            {% set foo = 1 %}
            {% for media in galerie.media %}
            {% if foo == 1 %}
            <div class=\"carousel-item active\">
                {% else %}
                <div class=\"carousel-item\">
                    {% endif %}
                    <div class=\"row justify-content-md-center\">
                        <img src=\"{{ asset('/upload/galerie/' ~ media.imageName) }}\"
                             class=\"embed-responsive-rounded\" style=\"width:640px;height:360px\" alt=\"\" width=\"100%\">
                    </div>
                </div>
                {% set foo = foo + 1 %}
                {% endfor %}
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\" data-slide=\"next\">
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
</div>#}", "OutilsTemplates/Carrousel.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\OutilsTemplates\\Carrousel.html.twig");
    }
}

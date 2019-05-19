<?php

/* OutilsTemplates/CarrouselSponsors.html.twig */
class __TwigTemplate_5a63da7d6e7a3d77f3c2d5319682ea08f0e7d45796b877917fd81c0fc5843364 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/CarrouselSponsors.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/CarrouselSponsors.html.twig"));

        // line 1
        echo "<html>

<div id=\"carouselExampleCaptions3\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
        ";
        // line 5
        $context["foo"] = 1;
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new Twig_Error_Runtime('Variable "sponsors" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 7
            echo "            ";
            if (((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 7, $this->source); })()) == 1)) {
                // line 8
                echo "            <div class=\"carousel-item active\">
            ";
            } else {
                // line 10
                echo "            <div class=\"carousel-item\">
            ";
            }
            // line 12
            echo "                <div class=\"card-body\">
                    <div class=\"row justify-content-md-center\">
                        <div class=\"col-lg-5\">
                            <div class=\"card\">
                                <div class=\"text-center\">
                                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/upload/media/" . twig_get_attribute($this->env, $this->source, $context["sponsor"], "logo", []))), "html", null, true);
            echo "\" alt=\"Bootstrap\" class=\"img-rounded\" height=\"50 px\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
            // line 24
            $context["foo"] = ((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new Twig_Error_Runtime('Variable "foo" does not exist.', 24, $this->source); })()) + 1);
            // line 25
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    
    </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions3\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions3\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    
</div>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OutilsTemplates/CarrouselSponsors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  72 => 25,  70 => 24,  60 => 17,  53 => 12,  49 => 10,  45 => 8,  42 => 7,  37 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>

<div id=\"carouselExampleCaptions3\" class=\"carousel slide\" data-ride=\"carousel\">
    <div class=\"carousel-inner\">
        {% set foo = 1 %}
        {% for sponsor in sponsors %}
            {% if foo == 1 %}
            <div class=\"carousel-item active\">
            {% else %}
            <div class=\"carousel-item\">
            {% endif %}
                <div class=\"card-body\">
                    <div class=\"row justify-content-md-center\">
                        <div class=\"col-lg-5\">
                            <div class=\"card\">
                                <div class=\"text-center\">
                                    <img src=\"{{ asset('/upload/media/' ~ sponsor.logo) }}\" alt=\"Bootstrap\" class=\"img-rounded\" height=\"50 px\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% set foo = foo + 1 %}
        {% endfor %}

    
    </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleCaptions3\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleCaptions3\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    
</div>
</html>
", "OutilsTemplates/CarrouselSponsors.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\OutilsTemplates\\CarrouselSponsors.html.twig");
    }
}

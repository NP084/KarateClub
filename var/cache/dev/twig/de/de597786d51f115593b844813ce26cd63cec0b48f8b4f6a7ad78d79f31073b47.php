<?php

/* OutilsTemplates/Footer.html.twig */
class __TwigTemplate_6eb866e249593844bdc88ae654b7fa71d200b48d4b384f0e0bcb2a1ce94503d8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/Footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/Footer.html.twig"));

        // line 1
        echo "<html>
    <footer class=\"app-footer\">
        <div class=\"row\">
            <div class=\"col-4\">
                <h5><a class=\"text-muted\">Liens</a></h5>
                <div class=\"container\">
                    <!-- Ajouter une boucle à partir d'ici-->
                    <li>
                        <font style=\"vertical-align: inherit;\">
                            <font style=\"vertical-align: inherit;\"><a class=\"text\" href=\"#\">Nom du site internet</a></font>
                        </font>
                    </li>
                    <!-- Ajouter une boucle jusque là-->
                </div>
            </div>
            <div class=\"col-4\">
                ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "                    <a class=\"btn btn-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_club");
            echo "\">
                        <b>Modifier le(s) contact(s)</b>
                    </a>
                ";
        }
        // line 22
        echo "                <h5>Contact</h5>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new Twig_Error_Runtime('Variable "contacts" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 24
            echo "                    <ul class=\"list-unstyled\">
                        <li><strong>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "name", []), "html", null, true);
            echo "</strong></li>
                        <font style=\"vertical-align: inherit;\">
                            <font style=\"vertical-align: inherit;\"> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "num", []), "html", null, true);
            echo "</font>
                        </font>
                        <br>
                        <font style=\"vertical-align: inherit;\">
                            <font style=\"vertical-align: inherit;\"> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", []), "html", null, true);
            echo "</font>
                        </font>
                    </ul>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                ";
        // line 48
        echo "            </div>
            <div class=\"col-4\">
                <h5><a class=\"text-muted\">Maps</a></h5>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.4109706176264!2d4.448761215459205!3d50.414814197813456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2260e396b00e3%3A0xd4150cb9db7807f1!2sUMons+Campus+Charleroi!5e0!3m2!1sfr!2sbe!4v1553626305658\" width=\"200\" height=\"150\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
        </div>

        <div class=\"copyright\"> © 2019-2024 Vika - Site réalisé par les étudiants de <a class=\"text\" href=\"https://web.umons.ac.be/fpms/fr/\">l'UMons</a></div>
    </footer>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OutilsTemplates/Footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 48,  91 => 35,  81 => 31,  74 => 27,  67 => 25,  64 => 24,  60 => 23,  57 => 22,  49 => 18,  47 => 17,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <footer class=\"app-footer\">
        <div class=\"row\">
            <div class=\"col-4\">
                <h5><a class=\"text-muted\">Liens</a></h5>
                <div class=\"container\">
                    <!-- Ajouter une boucle à partir d'ici-->
                    <li>
                        <font style=\"vertical-align: inherit;\">
                            <font style=\"vertical-align: inherit;\"><a class=\"text\" href=\"#\">Nom du site internet</a></font>
                        </font>
                    </li>
                    <!-- Ajouter une boucle jusque là-->
                </div>
            </div>
            <div class=\"col-4\">
                {% if (is_granted('ROLE_ADMIN')) %}
                    <a class=\"btn btn-primary\" href=\"{{ path('contact_club') }}\">
                        <b>Modifier le(s) contact(s)</b>
                    </a>
                {% endif %}
                <h5>Contact</h5>
                {% for contact in contacts %}
                    <ul class=\"list-unstyled\">
                        <li><strong>{{ contact.firstName }} {{ contact.name }}</strong></li>
                        <font style=\"vertical-align: inherit;\">
                            <font style=\"vertical-align: inherit;\"> {{ contact.num }}</font>
                        </font>
                        <br>
                        <font style=\"vertical-align: inherit;\">
                            <font style=\"vertical-align: inherit;\"> {{ contact.email }}</font>
                        </font>
                    </ul>
                {% endfor %}
                {#
                <h5>Contact</h5>
                <ul class=\"list-unstyled\">
                    <li><strong>{{ contact.firstName }} {{ contact.name }}</strong></li>
                    <font style=\"vertical-align: inherit;\">
                        <font style=\"vertical-align: inherit;\"> {{ contact.num }}</font>
                    </font>
                    <br>
                    <font style=\"vertical-align: inherit;\">
                        <font style=\"vertical-align: inherit;\"> {{ contact.email }}</font>
                    </font>
                </ul>
                #}
            </div>
            <div class=\"col-4\">
                <h5><a class=\"text-muted\">Maps</a></h5>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.4109706176264!2d4.448761215459205!3d50.414814197813456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2260e396b00e3%3A0xd4150cb9db7807f1!2sUMons+Campus+Charleroi!5e0!3m2!1sfr!2sbe!4v1553626305658\" width=\"200\" height=\"150\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
        </div>

        <div class=\"copyright\"> © 2019-2024 Vika - Site réalisé par les étudiants de <a class=\"text\" href=\"https://web.umons.ac.be/fpms/fr/\">l'UMons</a></div>
    </footer>
</html>
", "OutilsTemplates/Footer.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\OutilsTemplates\\Footer.html.twig");
    }
}

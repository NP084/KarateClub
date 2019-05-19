<?php

/* OutilsTemplates/PopUpConnexion.html.twig */
class __TwigTemplate_5832949461334baa4e8f9e032d6060ffdf475247b99071c72ec93c156ac45e73 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/PopUpConnexion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OutilsTemplates/PopUpConnexion.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"seConnecter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header text-center\">
                <h4 class=\"modal-title w-100 font-weight-bold\">Sign in</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body mx-3\">
                <div class=\"md-form mb-5\">
                    <i class=\"fas fa-envelope prefix grey-text\"></i>
                    <input type=\"email\" id=\"defaultForm-email\" class=\"form-control validate\">
                    <label data-error=\"wrong\" data-success=\"right\" for=\"defaultForm-email\">Your email</label>
                </div>

                <div class=\"md-form mb-4\">
                    <i class=\"fas fa-lock prefix grey-text\"></i>
                    <input type=\"password\" id=\"defaultForm-pass\" class=\"form-control validate\">
                    <label data-error=\"wrong\" data-success=\"right\" for=\"defaultForm-pass\">Your password</label>
                </div>

            </div>
            <div class=\"modal-footer d-flex justify-content-center\">
                <button class=\"btn btn-default\">Login</button>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OutilsTemplates/PopUpConnexion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"seConnecter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header text-center\">
                <h4 class=\"modal-title w-100 font-weight-bold\">Sign in</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body mx-3\">
                <div class=\"md-form mb-5\">
                    <i class=\"fas fa-envelope prefix grey-text\"></i>
                    <input type=\"email\" id=\"defaultForm-email\" class=\"form-control validate\">
                    <label data-error=\"wrong\" data-success=\"right\" for=\"defaultForm-email\">Your email</label>
                </div>

                <div class=\"md-form mb-4\">
                    <i class=\"fas fa-lock prefix grey-text\"></i>
                    <input type=\"password\" id=\"defaultForm-pass\" class=\"form-control validate\">
                    <label data-error=\"wrong\" data-success=\"right\" for=\"defaultForm-pass\">Your password</label>
                </div>

            </div>
            <div class=\"modal-footer d-flex justify-content-center\">
                <button class=\"btn btn-default\">Login</button>
            </div>
        </div>
    </div>
</div>", "OutilsTemplates/PopUpConnexion.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\OutilsTemplates\\PopUpConnexion.html.twig");
    }
}

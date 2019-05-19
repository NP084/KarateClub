<?php

/* vika/philosophy.html.twig */
class __TwigTemplate_7e4566f654516476f9b2aa65a3f201389388e3d1a327b6811c66eb1d23d3932f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika/philosophy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vika/philosophy.html.twig"));

        // line 1
        echo "<div class=\"page\">
    <!-- .page-inner -->
    <div class=\"page-inner\">
        <!-- .page-title-bar -->
        <header class=\"page-title-bar\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\">
                        <a href=\"#\">
                            <i class=\"breadcrumb-icon fa fa-angle-left mr-2\"></i>Forms
                        </a>
                    </li>
                </ol>
            </nav>
            <h1 class=\"page-title\">Editors</h1>
            <p class=\"text-muted\">Summernote, Quilljs, Simplemde and Ace Editor.</p>
        </header>
        <!-- /.page-title-bar -->

        <!-- .page-section -->
        <div class=\"page-section\">

            ";
        // line 23
        $this->loadTemplate((((isset($context["snippets"]) || array_key_exists("snippets", $context) ? $context["snippets"] : (function () { throw new Twig_Error_Runtime('Variable "snippets" does not exist.', 23, $this->source); })()) / (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 23, $this->source); })())) / twig_get_attribute($this->env, $this->source, (isset($context["summernote"]) || array_key_exists("summernote", $context) ? $context["summernote"] : (function () { throw new Twig_Error_Runtime('Variable "summernote" does not exist.', 23, $this->source); })()), "html", [])), "vika/philosophy.html.twig", 23)->display($context);
        // line 24
        echo "
            <hr class=\"my-5\">

            ";
        // line 27
        $this->loadTemplate((((isset($context["snippets"]) || array_key_exists("snippets", $context) ? $context["snippets"] : (function () { throw new Twig_Error_Runtime('Variable "snippets" does not exist.', 27, $this->source); })()) / (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 27, $this->source); })())) / twig_get_attribute($this->env, $this->source, (isset($context["quill"]) || array_key_exists("quill", $context) ? $context["quill"] : (function () { throw new Twig_Error_Runtime('Variable "quill" does not exist.', 27, $this->source); })()), "html", [])), "vika/philosophy.html.twig", 27)->display($context);
        // line 28
        echo "
            <hr class=\"my-5\">

            ";
        // line 31
        $this->loadTemplate((((isset($context["snippets"]) || array_key_exists("snippets", $context) ? $context["snippets"] : (function () { throw new Twig_Error_Runtime('Variable "snippets" does not exist.', 31, $this->source); })()) / (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 31, $this->source); })())) / twig_get_attribute($this->env, $this->source, (isset($context["simplemde"]) || array_key_exists("simplemde", $context) ? $context["simplemde"] : (function () { throw new Twig_Error_Runtime('Variable "simplemde" does not exist.', 31, $this->source); })()), "html", [])), "vika/philosophy.html.twig", 31)->display($context);
        // line 32
        echo "
            <hr class=\"my-5\">

            ";
        // line 35
        $this->loadTemplate((((isset($context["snippets"]) || array_key_exists("snippets", $context) ? $context["snippets"] : (function () { throw new Twig_Error_Runtime('Variable "snippets" does not exist.', 35, $this->source); })()) / (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new Twig_Error_Runtime('Variable "forms" does not exist.', 35, $this->source); })())) / twig_get_attribute($this->env, $this->source, (isset($context["ace"]) || array_key_exists("ace", $context) ? $context["ace"] : (function () { throw new Twig_Error_Runtime('Variable "ace" does not exist.', 35, $this->source); })()), "html", [])), "vika/philosophy.html.twig", 35)->display($context);
        // line 36
        echo "        </div>
        <!-- /.page-section -->
    </div>
    <!-- /.page-inner -->
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vika/philosophy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 36,  74 => 35,  69 => 32,  67 => 31,  62 => 28,  60 => 27,  55 => 24,  53 => 23,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page\">
    <!-- .page-inner -->
    <div class=\"page-inner\">
        <!-- .page-title-bar -->
        <header class=\"page-title-bar\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item active\">
                        <a href=\"#\">
                            <i class=\"breadcrumb-icon fa fa-angle-left mr-2\"></i>Forms
                        </a>
                    </li>
                </ol>
            </nav>
            <h1 class=\"page-title\">Editors</h1>
            <p class=\"text-muted\">Summernote, Quilljs, Simplemde and Ace Editor.</p>
        </header>
        <!-- /.page-title-bar -->

        <!-- .page-section -->
        <div class=\"page-section\">

            {% include snippets/forms/summernote.html %}

            <hr class=\"my-5\">

            {% include snippets/forms/quill.html %}

            <hr class=\"my-5\">

            {% include snippets/forms/simplemde.html %}

            <hr class=\"my-5\">

            {% include snippets/forms/ace.html %}
        </div>
        <!-- /.page-section -->
    </div>
    <!-- /.page-inner -->
</div>", "vika/philosophy.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\vika\\philosophy.html.twig");
    }
}

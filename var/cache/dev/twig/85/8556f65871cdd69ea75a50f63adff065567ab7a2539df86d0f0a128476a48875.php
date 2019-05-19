<?php

/* base.html.twig */
class __TwigTemplate_546cee223d7cb1ee94b3db3e05b63fc3dc4ce4db202215f318f52535893e0295 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'Template' => [$this, 'block_Template'],
            'Body' => [$this, 'block_Body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Begin SEO tag -->
    <title> Page With Navs | Looper - Bootstrap 4 Admin Theme </title>
    <meta property=\"og:title\" content=\"Page With Navs\">
    <meta name=\"author\" content=\"Beni Arisandi\">
    <meta property=\"og:locale\" content=\"en_US\">
    <meta name=\"description\" content=\"Responsive admin theme build on top of Bootstrap 4\">
    <meta property=\"og:description\" content=\"Responsive admin theme build on top of Bootstrap 4\">
    <link rel=\"canonical\" href=\"http://uselooper.com\">
    <meta property=\"og:url\" content=\"http://uselooper.com\">
    <meta property=\"og:site_name\" content=\"Looper - Bootstrap 4 Admin Theme\">
    <script type=\"application/ld+json\">
        {
            \"name\": \"Looper - Bootstrap 4 Admin Theme\",
            \"description\": \"Responsive admin theme build on top of Bootstrap 4\",
            \"author\":
            {
                \"@type\": \"Person\",
                \"name\": \"Beni Arisandi\"
            },
            \"@type\": \"WebSite\",
            \"url\": \"\",
            \"headline\": \"Page With Navs\",
            \"@context\": \"http://schema.org\"
        }
    </script><!-- End SEO tag -->

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

    <!-- GOOGLE FONT -->
    <link href=\"https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600\" rel=\"stylesheet\">
    <!-- End GOOGLE FONT -->

    <!-- BEGIN PLUGINS STYLES -->
    <link rel=\"stylesheet\" href=\"looper/dist/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"looper/dist/assets/vendor/fontawesome/css/all.css\">
    <link rel=\"stylesheet\" href=\"looper/dist/assets/vendor/flatpickr/flatpickr.min.css\">
    <link rel=\"stylesheet\" href=\"assets/vendor/fullcalendar/fullcalendar.min.css\">
    <!-- END PLUGINS STYLES -->
    <!-- END PLUGINS STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link rel=\"stylesheet\" href=\"looper/dist/assets/stylesheets/theme.min.css\" data-skin=\"default\">
    <link rel=\"stylesheet\" href=\"looper/dist/assets/stylesheets/theme-dark.min.css\" data-skin=\"dark\">
    <link rel=\"stylesheet\" href=\"looper/dist/assets/stylesheets/custom.css\">
    <!-- Disable unused skin immediately -->

    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var unusedLink = document.querySelector('link[data-skin]:not([data-skin=\"'+ skin +'\"])');

        unusedLink.setAttribute('rel', '');
        unusedLink.setAttribute('disabled', true);
    </script>
    <!-- END THEME STYLES -->

    <!-- Lien LogoSocial Barre de navigation -->
    <link href=\"LogoSocial.css\" rel=\"stylesheet\" type=\"text/css\">
    ";
        // line 65
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 66
        echo "</head>
<body>
";
        // line 68
        $this->loadTemplate("OutilsTemplates/Header.html.twig", "base.html.twig", 68)->display($context);
        // line 69
        $this->loadTemplate("security/login.html.twig", "base.html.twig", 69)->display($context);
        // line 70
        echo "<div class=\"app\">
    <main class=\"app-main\">
        <!-- .wrapper -->
        <div class=\"wrapper\">
            <!-- .page -->
            <div class=\"page\">

                ";
        // line 77
        $this->displayBlock('Template', $context, $blocks);
        // line 78
        echo "                ";
        // line 79
        echo "                ";
        // line 80
        echo "                ";
        $this->loadTemplate("OutilsTemplates/NavBarre.html.twig", "base.html.twig", 80)->display($context);
        // line 81
        echo "                ";
        // line 82
        echo "
                <!-- .page-inner -->
                <div class=\"page-inner\">
                    ";
        // line 85
        $this->displayBlock('Body', $context, $blocks);
        // line 86
        echo "                </div>
            </div><!-- /.page -->
        </div><!-- /.wrapper -->
        ";
        // line 92
        echo "
        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\LayoutController::footerAction"));
        echo "

    </main>
</div>

<!-- BEGIN BASE JS -->
<script src=\"looper/dist/assets/vendor/jquery/jquery.min.js\"></script>
<script src=\"looper/dist/assets/vendor/bootstrap/js/popper.min.js\"></script>
<script src=\"looper/dist/assets/vendor/bootstrap/js/bootstrap.min.js\"></script>
<!-- END BASE JS -->

<!-- BEGIN PLUGINS JS -->
<script src=\"looper/dist/assets/vendor/pace/pace.min.js\"></script>
<script src=\"looper/dist/assets/vendor/stacked-menu/stacked-menu.min.js\"></script>
<script src=\"looper/dist/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
<script src=\"looper/dist/assets/vendor/flatpickr/flatpickr.min.js\"></script>
<script src=\"looper/dist/assets/vendor/easy-pie-chart/jquery.easypiechart.min.js\"></script>
<script src=\"looper/dist/assets/vendor/chart.js/Chart.min.js\"></script>
<script src=\"assets/vendor/moment/moment.min.js\"></script>
<script src=\"assets/vendor/fullcalendar/fullcalendar.min.js\"></script>
<!-- END PLUGINS JS -->
<!-- BEGIN THEME JS -->
<script src=\"looper/dist/assets/javascript/theme.min.js\"></script> <!-- END THEME JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src=\"looper/dist/assets/javascript/pages/dashboard-demo.js\"></script>
<script src=\"assets/javascript/pages/fullcalendar-demo.js\"></script>
<script src=\"assets/javascript/pages/table-demo.js\"></script>
<!-- END PAGE LEVEL JS -->

";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "VIKA";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_Template($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Template"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Template"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 122,  247 => 85,  230 => 77,  213 => 65,  195 => 7,  182 => 123,  180 => 122,  148 => 93,  145 => 92,  140 => 86,  138 => 85,  133 => 82,  131 => 81,  128 => 80,  126 => 79,  124 => 78,  122 => 77,  113 => 70,  111 => 69,  109 => 68,  105 => 66,  103 => 65,  42 => 7,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <title>{% block title %}VIKA{% endblock %}</title>
    <!-- Begin SEO tag -->
    <title> Page With Navs | Looper - Bootstrap 4 Admin Theme </title>
    <meta property=\"og:title\" content=\"Page With Navs\">
    <meta name=\"author\" content=\"Beni Arisandi\">
    <meta property=\"og:locale\" content=\"en_US\">
    <meta name=\"description\" content=\"Responsive admin theme build on top of Bootstrap 4\">
    <meta property=\"og:description\" content=\"Responsive admin theme build on top of Bootstrap 4\">
    <link rel=\"canonical\" href=\"http://uselooper.com\">
    <meta property=\"og:url\" content=\"http://uselooper.com\">
    <meta property=\"og:site_name\" content=\"Looper - Bootstrap 4 Admin Theme\">
    <script type=\"application/ld+json\">
        {
            \"name\": \"Looper - Bootstrap 4 Admin Theme\",
            \"description\": \"Responsive admin theme build on top of Bootstrap 4\",
            \"author\":
            {
                \"@type\": \"Person\",
                \"name\": \"Beni Arisandi\"
            },
            \"@type\": \"WebSite\",
            \"url\": \"\",
            \"headline\": \"Page With Navs\",
            \"@context\": \"http://schema.org\"
        }
    </script><!-- End SEO tag -->

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

    <!-- GOOGLE FONT -->
    <link href=\"https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600\" rel=\"stylesheet\">
    <!-- End GOOGLE FONT -->

    <!-- BEGIN PLUGINS STYLES -->
    <link rel=\"stylesheet\" href=\"looper/dist/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"looper/dist/assets/vendor/fontawesome/css/all.css\">
    <link rel=\"stylesheet\" href=\"looper/dist/assets/vendor/flatpickr/flatpickr.min.css\">
    <link rel=\"stylesheet\" href=\"assets/vendor/fullcalendar/fullcalendar.min.css\">
    <!-- END PLUGINS STYLES -->
    <!-- END PLUGINS STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link rel=\"stylesheet\" href=\"looper/dist/assets/stylesheets/theme.min.css\" data-skin=\"default\">
    <link rel=\"stylesheet\" href=\"looper/dist/assets/stylesheets/theme-dark.min.css\" data-skin=\"dark\">
    <link rel=\"stylesheet\" href=\"looper/dist/assets/stylesheets/custom.css\">
    <!-- Disable unused skin immediately -->

    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var unusedLink = document.querySelector('link[data-skin]:not([data-skin=\"'+ skin +'\"])');

        unusedLink.setAttribute('rel', '');
        unusedLink.setAttribute('disabled', true);
    </script>
    <!-- END THEME STYLES -->

    <!-- Lien LogoSocial Barre de navigation -->
    <link href=\"LogoSocial.css\" rel=\"stylesheet\" type=\"text/css\">
    {% block stylesheets %}{% endblock %}
</head>
<body>
{% include \"OutilsTemplates/Header.html.twig\" %}
{% include \"security/login.html.twig\" %}
<div class=\"app\">
    <main class=\"app-main\">
        <!-- .wrapper -->
        <div class=\"wrapper\">
            <!-- .page -->
            <div class=\"page\">

                {% block Template %}{% endblock %}
                {#   {% if not app.user%}#}
                {# {% else %} #}
                {% include \"OutilsTemplates/NavBarre.html.twig\" %}
                {# {% endif %} #}

                <!-- .page-inner -->
                <div class=\"page-inner\">
                    {% block Body %}{% endblock %}
                </div>
            </div><!-- /.page -->
        </div><!-- /.wrapper -->
        {#
        {% include \"OutilsTemplates/Footer.html.twig\" %}
        #}

        {{ render(controller('App\\\\Controller\\\\LayoutController::footerAction')) }}

    </main>
</div>

<!-- BEGIN BASE JS -->
<script src=\"looper/dist/assets/vendor/jquery/jquery.min.js\"></script>
<script src=\"looper/dist/assets/vendor/bootstrap/js/popper.min.js\"></script>
<script src=\"looper/dist/assets/vendor/bootstrap/js/bootstrap.min.js\"></script>
<!-- END BASE JS -->

<!-- BEGIN PLUGINS JS -->
<script src=\"looper/dist/assets/vendor/pace/pace.min.js\"></script>
<script src=\"looper/dist/assets/vendor/stacked-menu/stacked-menu.min.js\"></script>
<script src=\"looper/dist/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
<script src=\"looper/dist/assets/vendor/flatpickr/flatpickr.min.js\"></script>
<script src=\"looper/dist/assets/vendor/easy-pie-chart/jquery.easypiechart.min.js\"></script>
<script src=\"looper/dist/assets/vendor/chart.js/Chart.min.js\"></script>
<script src=\"assets/vendor/moment/moment.min.js\"></script>
<script src=\"assets/vendor/fullcalendar/fullcalendar.min.js\"></script>
<!-- END PLUGINS JS -->
<!-- BEGIN THEME JS -->
<script src=\"looper/dist/assets/javascript/theme.min.js\"></script> <!-- END THEME JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src=\"looper/dist/assets/javascript/pages/dashboard-demo.js\"></script>
<script src=\"assets/javascript/pages/fullcalendar-demo.js\"></script>
<script src=\"assets/javascript/pages/table-demo.js\"></script>
<!-- END PAGE LEVEL JS -->

{% block javascripts %}{% endblock %}

</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\base.html.twig");
    }
}

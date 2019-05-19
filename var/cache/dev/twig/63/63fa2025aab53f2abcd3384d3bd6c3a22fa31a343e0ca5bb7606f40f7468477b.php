<?php

/* home_page/index.html.twig */
class __TwigTemplate_bf506509375f952e305d7c473c1a4785a52df56d205e468cab5b83cb291e4d42 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
        $this->blocks = [
            'Template' => [$this, 'block_Template'],
            'Body' => [$this, 'block_Body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_Template($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Template"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Template"));

        // line 4
        echo "    ";
        $this->loadTemplate("OutilsTemplates/Carrousel.html.twig", "home_page/index.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_Body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        // line 8
        echo "    <h1>Bienvenue sur le site du Club de karaté VIKA</h1>
    <h2>Villeneuve-ascq</h2>


    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md\">
                <div class=\"card\">
                    <div class=\"card-header\"><h4>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentPage"]) || array_key_exists("contentPage", $context) ? $context["contentPage"] : (function () { throw new Twig_Error_Runtime('Variable "contentPage" does not exist.', 16, $this->source); })()), "title", []), "html", null, true);
        echo "</h4></div>
                    <!-- .card-body -->
                    <div class=\"card-body\">


                        <h6 class=\"card-subtitle mb-2 text-muted\"> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentPage"]) || array_key_exists("contentPage", $context) ? $context["contentPage"] : (function () { throw new Twig_Error_Runtime('Variable "contentPage" does not exist.', 21, $this->source); })()), "subtitle", []), "html", null, true);
        echo " </h6>
                        <div class=\"content\">
                            <p class=\"card-text\">
                                ";
        // line 24
        echo twig_get_attribute($this->env, $this->source, (isset($context["contentPage"]) || array_key_exists("contentPage", $context) ? $context["contentPage"] : (function () { throw new Twig_Error_Runtime('Variable "contentPage" does not exist.', 24, $this->source); })()), "content", []);
        echo "
                            </p>
                            ";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "                                <div align=\"right\"><a class=\"btn btn-primary btn-md\"
                                                      href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_pageedit", ["path" => twig_get_attribute($this->env, $this->source, (isset($context["contentPage"]) || array_key_exists("contentPage", $context) ? $context["contentPage"] : (function () { throw new Twig_Error_Runtime('Variable "contentPage" does not exist.', 28, $this->source); })()), "path", [])]), "html", null, true);
            echo "\"
                                                      role=\"button\">Editer</a></div>
                            ";
        }
        // line 31
        echo "                        </div>
                    </div><!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- Actualités-->
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md\">
                <div class=\"card\">
                    <div class=\"card-header\"><h4>Actualités</h4></div><!-- .card-body -->
                    ";
        // line 43
        $this->loadTemplate("OutilsTemplates/CarrouselArticles.html.twig", "home_page/index.html.twig", 43)->display($context);
        // line 44
        echo "
                    ";
        // line 46
        echo "                    ";
        // line 47
        echo "                    ";
        // line 48
        echo "                    ";
        // line 49
        echo "                    ";
        // line 50
        echo "
                    ";
        // line 52
        echo "                    ";
        // line 53
        echo "                    ";
        // line 54
        echo "                    ";
        // line 55
        echo "                    ";
        // line 56
        echo "                    ";
        // line 57
        echo "                    ";
        // line 58
        echo "                    ";
        // line 59
        echo "                    ";
        // line 60
        echo "                    ";
        // line 61
        echo "                    ";
        // line 62
        echo "                    ";
        // line 63
        echo "                    ";
        // line 64
        echo "                    ";
        // line 65
        echo "                    ";
        // line 66
        echo "                    ";
        // line 67
        echo "                    ";
        // line 68
        echo "                    ";
        // line 69
        echo "                    ";
        // line 70
        echo "                    ";
        // line 71
        echo "                    ";
        // line 72
        echo "                    ";
        // line 73
        echo "                    ";
        // line 74
        echo "                    ";
        // line 75
        echo "                    ";
        // line 76
        echo "                    ";
        // line 77
        echo "                    ";
        // line 78
        echo "                    ";
        // line 79
        echo "                    ";
        // line 80
        echo "                    ";
        // line 81
        echo "                    ";
        // line 82
        echo "                    ";
        // line 83
        echo "                    ";
        // line 84
        echo "                    ";
        // line 85
        echo "                    ";
        // line 86
        echo "                    ";
        // line 87
        echo "                    ";
        // line 88
        echo "                    ";
        // line 89
        echo "                    ";
        // line 90
        echo "                    ";
        // line 91
        echo "                    ";
        // line 92
        echo "                    ";
        // line 93
        echo "                    ";
        // line 94
        echo "                    ";
        // line 95
        echo "                </div>
            </div>
        </div>
    </div>
    <!-- Evènements -->
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md\">
                <div class=\"card\">
                    <div class=\"card-header\"><h4>Evènements</h4></div><!-- .card-body -->
                    ";
        // line 106
        echo "                    ";
        // line 107
        echo "                    ";
        // line 108
        echo "                    ";
        // line 109
        echo "                    ";
        // line 110
        echo "                    ";
        // line 111
        echo "                    ";
        // line 112
        echo "                    ";
        // line 113
        echo "                    ";
        // line 114
        echo "                    ";
        // line 115
        echo "                    ";
        // line 116
        echo "                    ";
        // line 117
        echo "                    ";
        // line 118
        echo "                    ";
        // line 119
        echo "                    ";
        // line 120
        echo "                    ";
        // line 121
        echo "                    ";
        // line 122
        echo "                    ";
        // line 123
        echo "                    <!-- .board -->
                    ";
        // line 124
        $this->loadTemplate("OutilsTemplates/CarrouselEvent.html.twig", "home_page/index.html.twig", 124)->display($context);
        // line 128
        echo "
";
        // line 130
        echo "                    </div><!-- /.board -->
                </div><!-- /.page-inner -->
                <!-- .page-sidebar -->
                ";
        // line 134
        echo "                ";
        // line 135
        echo "                ";
        // line 136
        echo "                ";
        // line 137
        echo "                ";
        // line 138
        echo "                ";
        // line 139
        echo "                ";
        // line 140
        echo "                ";
        // line 141
        echo "                ";
        // line 142
        echo "                ";
        // line 143
        echo "                ";
        // line 144
        echo "                ";
        // line 145
        echo "                ";
        // line 146
        echo "                ";
        // line 147
        echo "                ";
        // line 148
        echo "                ";
        // line 149
        echo "                ";
        // line 150
        echo "            </div><!-- /.page -->
        </div>

    <!-- Sponsors -->
    <div class=\"container-fluid\">
        <div class=\"card\">
            <div class=\"card-header\"><h4>Sponsors</h4></div><!-- .card-body -->
            ";
        // line 157
        $this->loadTemplate("OutilsTemplates/CarrouselSponsors.html.twig", "home_page/index.html.twig", 157)->display($context);
        // line 158
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home_page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 158,  330 => 157,  321 => 150,  319 => 149,  317 => 148,  315 => 147,  313 => 146,  311 => 145,  309 => 144,  307 => 143,  305 => 142,  303 => 141,  301 => 140,  299 => 139,  297 => 138,  295 => 137,  293 => 136,  291 => 135,  289 => 134,  284 => 130,  281 => 128,  279 => 124,  276 => 123,  274 => 122,  272 => 121,  270 => 120,  268 => 119,  266 => 118,  264 => 117,  262 => 116,  260 => 115,  258 => 114,  256 => 113,  254 => 112,  252 => 111,  250 => 110,  248 => 109,  246 => 108,  244 => 107,  242 => 106,  230 => 95,  228 => 94,  226 => 93,  224 => 92,  222 => 91,  220 => 90,  218 => 89,  216 => 88,  214 => 87,  212 => 86,  210 => 85,  208 => 84,  206 => 83,  204 => 82,  202 => 81,  200 => 80,  198 => 79,  196 => 78,  194 => 77,  192 => 76,  190 => 75,  188 => 74,  186 => 73,  184 => 72,  182 => 71,  180 => 70,  178 => 69,  176 => 68,  174 => 67,  172 => 66,  170 => 65,  168 => 64,  166 => 63,  164 => 62,  162 => 61,  160 => 60,  158 => 59,  156 => 58,  154 => 57,  152 => 56,  150 => 55,  148 => 54,  146 => 53,  144 => 52,  141 => 50,  139 => 49,  137 => 48,  135 => 47,  133 => 46,  130 => 44,  128 => 43,  114 => 31,  108 => 28,  105 => 27,  103 => 26,  98 => 24,  92 => 21,  84 => 16,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block Template %}
    {% include \"OutilsTemplates/Carrousel.html.twig\" %}
{% endblock %}

{% block Body %}
    <h1>Bienvenue sur le site du Club de karaté VIKA</h1>
    <h2>Villeneuve-ascq</h2>


    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md\">
                <div class=\"card\">
                    <div class=\"card-header\"><h4>{{ contentPage.title }}</h4></div>
                    <!-- .card-body -->
                    <div class=\"card-body\">


                        <h6 class=\"card-subtitle mb-2 text-muted\"> {{ contentPage.subtitle }} </h6>
                        <div class=\"content\">
                            <p class=\"card-text\">
                                {{ contentPage.content| raw }}
                            </p>
                            {% if (is_granted('ROLE_ADMIN')) %}
                                <div align=\"right\"><a class=\"btn btn-primary btn-md\"
                                                      href=\"{{ path('home_pageedit', {'path':contentPage.path}) }}\"
                                                      role=\"button\">Editer</a></div>
                            {% endif %}
                        </div>
                    </div><!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- Actualités-->
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md\">
                <div class=\"card\">
                    <div class=\"card-header\"><h4>Actualités</h4></div><!-- .card-body -->
                    {% include \"OutilsTemplates/CarrouselArticles.html.twig\" %}

                    {#                        <div class=\"card-body\">#}
                    {#                            <div class=\"row justify-content-md-center\">#}
                    {#                                <!-- Inserer boucle ici-->#}
                    {#                                {% set nbr = 0 %}#}
                    {#                                {% for article in articles %}#}

                    {#                                {% set nbr = nbr + 1 %}#}
                    {#                                    {% if nbr < 3 %}#}
                    {#                                    #}
                    {#                                    <div class=\"col-lg-5\">#}
                    {#                                        <div class=\"card\">#}
                    {#                                            <!-- .card-header -->#}
                    {#                                            <div class=\"card-body\">#}
                    {#                                                <h5 class=\"card-title\"> {{ article.title }} </h5>#}
                    {#                                            </div><!-- /.card-body -->#}
                    {#                                            <!-- 16:9 aspect ratio -->#}
                    {#                                            <figure class=\"embed-responsive embed-responsive-16by9 mb-0\">#}
                    {#                                                <img class=\"embed-responsive-item\" src=\"{{ asset('/upload/media/' ~ article.imageName)}}\" alt=\"Card image\">#}
                    {#                                            </figure>#}
                    {#                                            <!-- .card-body -->#}
                    {#                                            <div class=\"card-body\">#}
                    {#                                                <p class=\"card-text\">#}
                    {#                                                    {{ article.content|raw }}#}
                    {#                                                </p>#}
                    {#                                            </div>#}
                    {#                                            <div class=\"card-footer\">#}
                    {#                                                    <div class=\"card-footer-content text-muted\">#}
                    {#                                                        <div class=\"row\">#}
                    {#                                                            <div class=\"col\">#}
                    {#                                                                <div class=\"metadata\">Ecrit le {{ article.createdAt |date('d/m/Y')}} à {{article.createdAt |date('H:i')}} dans la catégorie {{article.category.title}}</div>#}
                    {#                                                            </div>#}
                    {#                                                        </div>#}
                    {#                                    #}
                    {#                                                        <div class=\"row\">#}
                    {#                                                            <div class=\"col-4\">#}
                    {#                                                                <div class=\"card-footer-content text-muted\">#}
                    {#                                                                    <a class=\"btn btn-primary btn-md\" href=\"{{ path('blog_show', {'id':article.id}) }}\" role=\"button\">Lire la suite</a>#}
                    {#                                                                </div>#}
                    {#                                                            </div>#}
                    {#                                                        </div>#}
                    {#                                                    </div>#}
                    {#                                            </div>                                #}
                    {#                                        </div>#}
                    {#                                    </div>#}
                    {#                                    {% else %}#}
                    {#                                        #}
                    {#                                    {% endif %}#}
                    {#                                {% endfor %}#}
                    {#                            </div>#}
                    {#                        </div>#}
                </div>
            </div>
        </div>
    </div>
    <!-- Evènements -->
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md\">
                <div class=\"card\">
                    <div class=\"card-header\"><h4>Evènements</h4></div><!-- .card-body -->
                    {#                    <div class=\"page has-sidebar has-sidebar-fixed has-sidebar-expand-xl\">#}
                    {#                        <!-- .page-inner -->#}
                    {#                        <div class=\"page-inner page-inner-fill\">#}
                    {#                            <!-- .page-navs -->#}
                    {#                            <nav class=\"page-navs pr-3\">#}
                    {#                                <div class=\"btn-group\">#}
                    {#                                    <button id=\"calendar-prev\" class=\"btn btn-secondary\"><i#}
                    {#                                                class=\"fa fa-chevron-left\"></i></button>#}
                    {#                                    <button id=\"calendar-today\" class=\"btn btn-secondary\">Today</button>#}
                    {#                                    <button id=\"calendar-next\" class=\"btn btn-secondary\"><i#}
                    {#                                                class=\"fa fa-chevron-right\"></i></button>#}
                    {#                                </div>#}
                    {#                                <div class=\"ml-auto\">#}
                    {#                                    <button type=\"button\" class=\"btn btn-success\">Add event</button>#}
                    {#                                    <button type=\"button\" class=\"btn btn-secondary d-xl-none\" data-toggle=\"sidebar\"><i#}
                    {#                                                class=\"fas fa-tasks\"></i></button>#}
                    {#                                </div>#}
                    {#                            </nav><!-- /.page-navs -->#}
                    <!-- .board -->
                    {% include \"OutilsTemplates/CarrouselEvent.html.twig\" %}
{#                    <div class=\"board\">#}
{#                        <div class=\"card\">#}
{#                            <div id=\"calendar\"></div>#}

{#                        </div>#}
                    </div><!-- /.board -->
                </div><!-- /.page-inner -->
                <!-- .page-sidebar -->
                {#                        <div class=\"page-sidebar page-sidebar-fixed\">#}
                {#                        <!-- .sidebar-header -->#}
                {#                        <header class=\"sidebar-header d-sm-none\">#}
                {#                            <nav aria-label=\"breadcrumb\">#}
                {#                            <ol class=\"breadcrumb\">#}
                {#                                <li class=\"breadcrumb-item active\">#}
                {#                                <a href=\"#\" onclick=\"Looper.toggleSidebar()\"><i class=\"breadcrumb-icon fa fa-angle-left mr-2\"></i>Back</a>#}
                {#                                </li>#}
                {#                            </ol>#}
                {#                            </nav>#}
                {#                        </header><!-- /.sidebar-header -->#}
                {#                        <!-- .sidebar-section-fill -->#}
                {#                        <div class=\"sidebar-section-fill\">#}
                {#                            <!-- .calendar-list -->#}
                {#                            <div id=\"calendar-list\"></div><!-- /.calendar-list -->#}
                {#                        </div><!-- /.sidebar-section-fill -->#}
                {#                        </div><!-- /.page-sidebar -->#}
            </div><!-- /.page -->
        </div>

    <!-- Sponsors -->
    <div class=\"container-fluid\">
        <div class=\"card\">
            <div class=\"card-header\"><h4>Sponsors</h4></div><!-- .card-body -->
            {% include \"OutilsTemplates/CarrouselSponsors.html.twig\" %}
        </div>
    </div>

{% endblock %}
", "home_page/index.html.twig", "C:\\wamp64\\www\\KarateClub\\templates\\home_page\\index.html.twig");
    }
}

<?php

/* @Diagram/Default/index.html.twig */
class __TwigTemplate_339e734754289248920238c745a143499ac99e48ca9fd9862cfba19a0903ac18 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Diagram/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Diagram/Default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"A tool for drawing sassy UML diagrams based on JDL syntax. Provides instant feedback and has a customizable styling.\">
    <meta name=\"authors\" content=\"Deepu KS\">
    <meta name=\"theme-color\" content=\"#282C34\">
    <meta name=\"msapplication-navbutton-color\" content=\"#282C34\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#282C34\">
    <title>BenMacha Diagram</title>

    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/magnific-popup/dist/magnific-popup.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/icon-font.min/index.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/codemirror/lib/codemirror.css"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/css/codemirror/show-hint-jdl.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/css/codemirror/solarized.jdl.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/css/app.css"), "html", null, true);
        echo "\" />

</head>
<body ng-app=\"jdlStudio\" ng-controller=\"workspaceController as app\">
<div class=\"wrap\">
    <header>
        <div class=\"tools left\">
            <a class=\"logo\"><h1>DiagramBundle</h1> &nbsp;</a>
        </div>
        <div class=\"tools\">
            <a id=\"savebutton\" href=\"javascript:void(0)\" download=\"jdl.png\" title=\"Download snapshot of this diagram\">
                <i class=\"lnr lnr-camera\"></i>
            </a>
            <a id=\"saveTextbutton\" href=\"javascript:void(0)\" download=\"jdl.jh\" title=\"Download text file of this JDL\">
                <i class=\"lnr lnr-download\"></i>
            </a>
            <a id=\"uploadbutton\" class=\"upload-dialog\" href=\"#upload-dialog\" title=\"Import text file of a JDL\">
                <i class=\"lnr lnr-upload\"></i>
            </a>
";
        // line 45
        echo "            <span id=\"tooltip\"></span>
            <span id=\"storage-status\" ng-show=\"app.showStorageStatus\" ng-cloak>
\t\t\t\t\tView mode, changes are not saved.
\t\t\t\t\t<a href=\"javascript:void(0)\" ng-click=\"app.saveViewModeToStorage()\"
                       title=\"Save this diagram to localStorage\">save</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" ng-click=\"app.exitViewMode()\"
                       title=\"Discard this diagram\">close</a>
\t\t\t\t</span>

            <div class=\"canvas-tools\" id=\"canvas-tools\">
                <a href=\"javascript:void(0)\" ng-click=\"app.magnifyViewport(2)\" title=\"Zoom in\">
                    <i class=\"lnr lnr-plus-circle\"></i>
                </a>
                <a href=\"javascript:void(0)\" ng-click=\"app.resetViewport()\" title=\"Reset zoom and panning\">
                    <i class=\"lnr lnr-frame-contract\"></i>
                </a>
                <a href=\"javascript:void(0)\" ng-click=\"app.magnifyViewport(-2)\" title=\"Zoom out\">
                    <i class=\"lnr lnr-circle-minus\"></i>
                </a>
            </div>
        </div>
    </header>
    <canvas id=\"canvas\"></canvas>
    <textarea id=\"textarea\" jdl-editor=\"{ onLoad : app.editorLoaded }\" ng-model=\"app.jdlText\" spellcheck=\"false\"></textarea>
    <div id=\"linenumbers\" ng-class=\"{error: app.hasError}\"></div>
    <div id=\"linemarker\" ng-style=\"{'top': app.lineMarkerTop}\"></div>
    <span id=\"error-tooltip\" ng-cloak>";
        // line 71
        echo "{{ app.errorTooltip }}";
        echo "</span>
    <div id=\"canvas-panner\"></div>
    <div ng-include=\"app.sidebar\" id=\"sidebar\" class=\"sidebar ";
        // line 73
        echo "{{app.sidebarVisible}}";
        echo "\"></div>

</div>
<div id=\"discard-dialog\" class=\"mag-dialog zoom-anim-dialog mfp-hide\">
    <h1>Discard</h1>
    <p>Do you want to discard current diagram and load the default example?</p>
    <button class=\"btn\" ng-click=\"app.discardCurrentGraph()\">Yes</button>
    <button class=\"btn\" ng-click=\"app.dismissDialog()\">No</button>
</div>
<div id=\"upload-dialog\" class=\"mag-dialog zoom-anim-dialog mfp-hide\">
    <h1>Import JDL</h1>
    <p>Select a <code>.jh</code> or <code>.txt</code> file</p>
    <input class=\"upload\" accept=\".jh,.txt\" type=\"file\" id=\"jdlFileInput\" /><br>
    <button class=\"btn\" ng-click=\"app.importJDL()\">Import</button>
    <button class=\"btn\" ng-click=\"app.dismissDialog()\">Dismiss</button>
</div>
<script>
    var module = module || {};
    var filepathTwig = \"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("diagramme_sample");
        echo "\"
</script>

<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/lodash/lodash.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/jquery/dist/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/magnific-popup/dist/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/pegjs_parser/index.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/angular/angular.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/codemirror/lib/codemirror.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/codemirror/keymap/sublime.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/codemirror/addon/edit/matchbrackets.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/codemirror/addon/edit/closebrackets.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/codemirror/addon/dialog/dialog.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/codemirror/addon/search/searchcursor.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/bower_components/codemirror/addon/hint/show-hint.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/js/lib/dagre.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/js/codemirror/jdl-hint.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/js/codemirror/codemirror.jdl-mode.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/js/nomnoml/skanaar.canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/js/nomnoml/skanaar.util.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/js/nomnoml/skanaar.vector.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/js/nomnoml/nomnoml.parser.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/js/nomnoml/nomnoml.layouter.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/js/nomnoml/nomnoml.renderer.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/js/nomnoml/nomnoml.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/js/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/diagram/js/jdl-editor.directive.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Diagram/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 118,  236 => 117,  232 => 116,  228 => 115,  224 => 114,  220 => 113,  216 => 112,  212 => 111,  208 => 110,  204 => 109,  200 => 108,  196 => 107,  191 => 105,  187 => 104,  183 => 103,  179 => 102,  175 => 101,  171 => 100,  167 => 99,  163 => 98,  159 => 97,  155 => 96,  151 => 95,  147 => 94,  141 => 91,  120 => 73,  115 => 71,  87 => 45,  65 => 20,  61 => 19,  57 => 18,  52 => 16,  48 => 15,  44 => 14,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"A tool for drawing sassy UML diagrams based on JDL syntax. Provides instant feedback and has a customizable styling.\">
    <meta name=\"authors\" content=\"Deepu KS\">
    <meta name=\"theme-color\" content=\"#282C34\">
    <meta name=\"msapplication-navbutton-color\" content=\"#282C34\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"#282C34\">
    <title>BenMacha Diagram</title>

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/diagram/bower_components/magnific-popup/dist/magnific-popup.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/diagram/bower_components/icon-font.min/index.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/diagram/bower_components/codemirror/lib/codemirror.css') }}\" />

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/diagram/css/codemirror/show-hint-jdl.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/diagram/css/codemirror/solarized.jdl.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/diagram/css/app.css') }}\" />

</head>
<body ng-app=\"jdlStudio\" ng-controller=\"workspaceController as app\">
<div class=\"wrap\">
    <header>
        <div class=\"tools left\">
            <a class=\"logo\"><h1>DiagramBundle</h1> &nbsp;</a>
        </div>
        <div class=\"tools\">
            <a id=\"savebutton\" href=\"javascript:void(0)\" download=\"jdl.png\" title=\"Download snapshot of this diagram\">
                <i class=\"lnr lnr-camera\"></i>
            </a>
            <a id=\"saveTextbutton\" href=\"javascript:void(0)\" download=\"jdl.jh\" title=\"Download text file of this JDL\">
                <i class=\"lnr lnr-download\"></i>
            </a>
            <a id=\"uploadbutton\" class=\"upload-dialog\" href=\"#upload-dialog\" title=\"Import text file of a JDL\">
                <i class=\"lnr lnr-upload\"></i>
            </a>
{#            <a id=\"linkbutton\" href=\"javascript:void(0)\" target=\"_blank\" title=\"Shareable link to this diagram\">
                <i class=\"lnr lnr-link\"></i>
            </a>
            <a href=\"javascript:void(0)\" ng-click=\"app.confirmDiscardCurrentGraph()\" title=\"Discard this diagram\">
                <i class=\"lnr lnr-trash\"></i>
            </a>#}
            <span id=\"tooltip\"></span>
            <span id=\"storage-status\" ng-show=\"app.showStorageStatus\" ng-cloak>
\t\t\t\t\tView mode, changes are not saved.
\t\t\t\t\t<a href=\"javascript:void(0)\" ng-click=\"app.saveViewModeToStorage()\"
                       title=\"Save this diagram to localStorage\">save</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" ng-click=\"app.exitViewMode()\"
                       title=\"Discard this diagram\">close</a>
\t\t\t\t</span>

            <div class=\"canvas-tools\" id=\"canvas-tools\">
                <a href=\"javascript:void(0)\" ng-click=\"app.magnifyViewport(2)\" title=\"Zoom in\">
                    <i class=\"lnr lnr-plus-circle\"></i>
                </a>
                <a href=\"javascript:void(0)\" ng-click=\"app.resetViewport()\" title=\"Reset zoom and panning\">
                    <i class=\"lnr lnr-frame-contract\"></i>
                </a>
                <a href=\"javascript:void(0)\" ng-click=\"app.magnifyViewport(-2)\" title=\"Zoom out\">
                    <i class=\"lnr lnr-circle-minus\"></i>
                </a>
            </div>
        </div>
    </header>
    <canvas id=\"canvas\"></canvas>
    <textarea id=\"textarea\" jdl-editor=\"{ onLoad : app.editorLoaded }\" ng-model=\"app.jdlText\" spellcheck=\"false\"></textarea>
    <div id=\"linenumbers\" ng-class=\"{error: app.hasError}\"></div>
    <div id=\"linemarker\" ng-style=\"{'top': app.lineMarkerTop}\"></div>
    <span id=\"error-tooltip\" ng-cloak>{{ \"{{ app.errorTooltip }}\" }}</span>
    <div id=\"canvas-panner\"></div>
    <div ng-include=\"app.sidebar\" id=\"sidebar\" class=\"sidebar {{ \"{{app.sidebarVisible}}\" }}\"></div>

</div>
<div id=\"discard-dialog\" class=\"mag-dialog zoom-anim-dialog mfp-hide\">
    <h1>Discard</h1>
    <p>Do you want to discard current diagram and load the default example?</p>
    <button class=\"btn\" ng-click=\"app.discardCurrentGraph()\">Yes</button>
    <button class=\"btn\" ng-click=\"app.dismissDialog()\">No</button>
</div>
<div id=\"upload-dialog\" class=\"mag-dialog zoom-anim-dialog mfp-hide\">
    <h1>Import JDL</h1>
    <p>Select a <code>.jh</code> or <code>.txt</code> file</p>
    <input class=\"upload\" accept=\".jh,.txt\" type=\"file\" id=\"jdlFileInput\" /><br>
    <button class=\"btn\" ng-click=\"app.importJDL()\">Import</button>
    <button class=\"btn\" ng-click=\"app.dismissDialog()\">Dismiss</button>
</div>
<script>
    var module = module || {};
    var filepathTwig = \"{{ path('diagramme_sample') }}\"
</script>

<script src=\"{{ asset('bundles/diagram/bower_components/lodash/lodash.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/bower_components/jquery/dist/jquery.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/bower_components/magnific-popup/dist/jquery.magnific-popup.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/bower_components/pegjs_parser/index.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/bower_components/angular/angular.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/bower_components/codemirror/lib/codemirror.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/bower_components/codemirror/keymap/sublime.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/bower_components/codemirror/addon/edit/matchbrackets.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/bower_components/codemirror/addon/edit/closebrackets.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/bower_components/codemirror/addon/dialog/dialog.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/bower_components/codemirror/addon/search/searchcursor.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/bower_components/codemirror/addon/hint/show-hint.js'  ) }}\"></script>

<script src=\"{{ asset('bundles/diagram/js/lib/dagre.min.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/js/codemirror/jdl-hint.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/js/codemirror/codemirror.jdl-mode.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/js/nomnoml/skanaar.canvas.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/js/nomnoml/skanaar.util.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/js/nomnoml/skanaar.vector.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/js/nomnoml/nomnoml.parser.custom.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/js/nomnoml/nomnoml.layouter.custom.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/js/nomnoml/nomnoml.renderer.custom.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/js/nomnoml/nomnoml.custom.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/js/app.js') }}\"></script>
<script src=\"{{ asset('bundles/diagram/js/jdl-editor.directive.js' ) }}\"></script>
</body>
</html>
", "@Diagram/Default/index.html.twig", "C:\\wamp64\\www\\KarateClub\\vendor\\benmacha\\diagram-bundle\\Resources\\views\\Default\\index.html.twig");
    }
}

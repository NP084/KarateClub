<?php

/* @Diagram/Default/sample.html.twig */
class __TwigTemplate_2729a9b3c2f8c56e9c7eece0501981bc9a885d00cedbf5c3a82ab228d16d24a0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Diagram/Default/sample.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Diagram/Default/sample.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["entitieKey"] => $context["entitieValue"]) {
            // line 2
            echo "/**
 * The ";
            // line 3
            echo twig_escape_filter($this->env, $context["entitieKey"], "html", null, true);
            echo " entity.
 */
entity ";
            // line 5
            echo twig_escape_filter($this->env, $context["entitieKey"], "html", null, true);
            echo " {
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["entitieValue"]);
            foreach ($context['_seq'] as $context["columnKey"] => $context["columnValue"]) {
                // line 7
                echo "    ";
                echo twig_escape_filter($this->env, $context["columnKey"], "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["columnValue"]), "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['columnKey'], $context['columnValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "}

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['entitieKey'], $context['entitieValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["relations"]) || array_key_exists("relations", $context) ? $context["relations"] : (function () { throw new Twig_Error_Runtime('Variable "relations" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["relationKey"] => $context["relationValue"]) {
            // line 14
            echo "/**
 * The ";
            // line 15
            echo twig_escape_filter($this->env, $context["relationKey"], "html", null, true);
            echo " relation.
 */
relationship ";
            // line 17
            echo twig_escape_filter($this->env, $context["relationKey"], "html", null, true);
            echo " {
";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["relationValue"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["relation"]) {
                // line 19
                if (twig_in_filter($context["relationKey"], "OneToOne")) {
                    // line 20
                    echo "    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relation"], "sourceEntity", []), "html", null, true);
                    echo twig_escape_filter($this->env, (("{" . twig_get_attribute($this->env, $this->source, $context["relation"], "fieldName", [])) . "}"), "html", null, true);
                    echo " to ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relation"], "targetEntity", []), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                        echo ",";
                    }
                } elseif (twig_in_filter(                // line 21
$context["relationKey"], "ManyToOne")) {
                    // line 22
                    echo "    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relation"], "sourceEntity", []), "html", null, true);
                    echo twig_escape_filter($this->env, (("{" . twig_get_attribute($this->env, $this->source, $context["relation"], "fieldName", [])) . "}"), "html", null, true);
                    echo " to ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relation"], "targetEntity", []), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                        echo ",";
                    }
                } elseif (twig_in_filter(                // line 23
$context["relationKey"], "OneToMany")) {
                    // line 24
                    echo "    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relation"], "sourceEntity", []), "html", null, true);
                    echo " to ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relation"], "targetEntity", []), "html", null, true);
                    echo twig_escape_filter($this->env, (("{" . twig_get_attribute($this->env, $this->source, $context["relation"], "fieldName", [])) . "}"), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                        echo ",";
                    }
                } elseif (twig_in_filter(                // line 25
$context["relationKey"], "ManyToMany")) {
                    // line 26
                    echo "    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relation"], "sourceEntity", []), "html", null, true);
                    echo twig_escape_filter($this->env, (("{" . twig_get_attribute($this->env, $this->source, $context["relation"], "fieldName", [])) . "}"), "html", null, true);
                    echo " to ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relation"], "targetEntity", []), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [])) {
                        echo ",";
                    }
                }
                // line 28
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "}
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['relationKey'], $context['relationValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Diagram/Default/sample.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 30,  149 => 28,  139 => 26,  137 => 25,  128 => 24,  126 => 23,  117 => 22,  115 => 21,  106 => 20,  104 => 19,  87 => 18,  83 => 17,  78 => 15,  75 => 14,  71 => 13,  68 => 12,  60 => 9,  49 => 7,  45 => 6,  41 => 5,  36 => 3,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for entitieKey, entitieValue in entities %}
/**
 * The {{ entitieKey }} entity.
 */
entity {{ entitieKey }} {
{% for columnKey, columnValue in entitieValue %}
    {{ columnKey }} {{ columnValue|capitalize }}
{% endfor %}
}

{% endfor %}

{% for relationKey, relationValue in relations %}
/**
 * The {{ relationKey }} relation.
 */
relationship {{ relationKey }} {
{% for relation in relationValue %}
{% if relationKey in 'OneToOne' %}
    {{ relation.sourceEntity }}{{ \"{\"~relation.fieldName~\"}\" }} to {{ relation.targetEntity }}{% if not loop.last %},{% endif %}
{% elseif relationKey in 'ManyToOne' %}
    {{ relation.sourceEntity }}{{ \"{\"~relation.fieldName~\"}\" }} to {{ relation.targetEntity }}{% if not loop.last %},{% endif %}
{% elseif relationKey in 'OneToMany' %}
    {{ relation.sourceEntity }} to {{ relation.targetEntity }}{{ \"{\"~relation.fieldName~\"}\" }}{% if not loop.last %},{% endif %}
{% elseif relationKey in 'ManyToMany' %}
    {{ relation.sourceEntity }}{{ \"{\"~relation.fieldName~\"}\" }} to {{ relation.targetEntity }}{% if not loop.last %},{% endif %}
{% endif %}

{% endfor %}
}
{% endfor %}
", "@Diagram/Default/sample.html.twig", "C:\\wamp64\\www\\KarateClub\\vendor\\benmacha\\diagram-bundle\\Resources\\views\\Default\\sample.html.twig");
    }
}

<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_2d9cdc9b0f1d6b71e834c6c6200e93c66d90a2199b4ad722bc83c6e5c7a8cc55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da03333ca553ff7a46763a84767114ff6ff144cabd9e588ff171599a41314c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da03333ca553ff7a46763a84767114ff6ff144cabd9e588ff171599a41314c83->enter($__internal_da03333ca553ff7a46763a84767114ff6ff144cabd9e588ff171599a41314c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_8302b3dc6a32497b1737a6f1b728bbaf610eae8b1475148e3e5596f777726b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8302b3dc6a32497b1737a6f1b728bbaf610eae8b1475148e3e5596f777726b33->enter($__internal_8302b3dc6a32497b1737a6f1b728bbaf610eae8b1475148e3e5596f777726b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_da03333ca553ff7a46763a84767114ff6ff144cabd9e588ff171599a41314c83->leave($__internal_da03333ca553ff7a46763a84767114ff6ff144cabd9e588ff171599a41314c83_prof);

        
        $__internal_8302b3dc6a32497b1737a6f1b728bbaf610eae8b1475148e3e5596f777726b33->leave($__internal_8302b3dc6a32497b1737a6f1b728bbaf610eae8b1475148e3e5596f777726b33_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}

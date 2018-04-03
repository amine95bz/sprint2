<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_92d0b80704d686ff7c36828bfbceb4a850494093112c6bfcfddc7dd237c05445 extends Twig_Template
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
        $__internal_b13ede0e9fbb188e321c45cec8b270df85aa981ff60a2b6634ab57d83f6eb0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13ede0e9fbb188e321c45cec8b270df85aa981ff60a2b6634ab57d83f6eb0cf->enter($__internal_b13ede0e9fbb188e321c45cec8b270df85aa981ff60a2b6634ab57d83f6eb0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_3bdd769931c86a48804918e19a8d53784255c475a15c1910459e9b2ecb56d883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bdd769931c86a48804918e19a8d53784255c475a15c1910459e9b2ecb56d883->enter($__internal_3bdd769931c86a48804918e19a8d53784255c475a15c1910459e9b2ecb56d883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_b13ede0e9fbb188e321c45cec8b270df85aa981ff60a2b6634ab57d83f6eb0cf->leave($__internal_b13ede0e9fbb188e321c45cec8b270df85aa981ff60a2b6634ab57d83f6eb0cf_prof);

        
        $__internal_3bdd769931c86a48804918e19a8d53784255c475a15c1910459e9b2ecb56d883->leave($__internal_3bdd769931c86a48804918e19a8d53784255c475a15c1910459e9b2ecb56d883_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
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
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}

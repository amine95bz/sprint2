<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d3afc29d157b6d6dbdafe5bee47b4fc34fd39e214e43486a07b61d94362a0e09 extends Twig_Template
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
        $__internal_53ff363441ec0f30cbd2b29253e9c4458ef78f864e43968af21db93d4d4bd50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ff363441ec0f30cbd2b29253e9c4458ef78f864e43968af21db93d4d4bd50c->enter($__internal_53ff363441ec0f30cbd2b29253e9c4458ef78f864e43968af21db93d4d4bd50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_7592c72e0ccf81512e7bbfba7aabe086cdd4822c0c0ed6ddd198e032f853c975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7592c72e0ccf81512e7bbfba7aabe086cdd4822c0c0ed6ddd198e032f853c975->enter($__internal_7592c72e0ccf81512e7bbfba7aabe086cdd4822c0c0ed6ddd198e032f853c975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_53ff363441ec0f30cbd2b29253e9c4458ef78f864e43968af21db93d4d4bd50c->leave($__internal_53ff363441ec0f30cbd2b29253e9c4458ef78f864e43968af21db93d4d4bd50c_prof);

        
        $__internal_7592c72e0ccf81512e7bbfba7aabe086cdd4822c0c0ed6ddd198e032f853c975->leave($__internal_7592c72e0ccf81512e7bbfba7aabe086cdd4822c0c0ed6ddd198e032f853c975_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}

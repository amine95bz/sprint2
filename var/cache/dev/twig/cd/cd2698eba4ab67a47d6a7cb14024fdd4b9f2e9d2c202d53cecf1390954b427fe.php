<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8b42721c6d63495c3ed30c44c0ebfeb47d1976a128a198b05586dfed7d3f3f4d extends Twig_Template
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
        $__internal_325306b354c11db2bdfb432f44f6b7da30b737a2bb4fca98044e687022bac924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325306b354c11db2bdfb432f44f6b7da30b737a2bb4fca98044e687022bac924->enter($__internal_325306b354c11db2bdfb432f44f6b7da30b737a2bb4fca98044e687022bac924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_4823c683b4fc37307c8cb9df5caa86af8ff3e6c5cfc2499bc26af914908cdcc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4823c683b4fc37307c8cb9df5caa86af8ff3e6c5cfc2499bc26af914908cdcc3->enter($__internal_4823c683b4fc37307c8cb9df5caa86af8ff3e6c5cfc2499bc26af914908cdcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_325306b354c11db2bdfb432f44f6b7da30b737a2bb4fca98044e687022bac924->leave($__internal_325306b354c11db2bdfb432f44f6b7da30b737a2bb4fca98044e687022bac924_prof);

        
        $__internal_4823c683b4fc37307c8cb9df5caa86af8ff3e6c5cfc2499bc26af914908cdcc3->leave($__internal_4823c683b4fc37307c8cb9df5caa86af8ff3e6c5cfc2499bc26af914908cdcc3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
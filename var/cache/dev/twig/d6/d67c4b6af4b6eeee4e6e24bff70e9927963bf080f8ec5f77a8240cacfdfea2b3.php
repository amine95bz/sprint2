<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_c00d31d1deae9319bcc36b9aed717f814b25e360889bca79261d7d4ea8f639ca extends Twig_Template
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
        $__internal_b473877850ac93732488ac51c93387196492e9365caa4a44fc8d22f075ba3222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b473877850ac93732488ac51c93387196492e9365caa4a44fc8d22f075ba3222->enter($__internal_b473877850ac93732488ac51c93387196492e9365caa4a44fc8d22f075ba3222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_89a865d7e7143b83039d50e3bd868fea0634232de458e1b84c59f864b71cdf14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a865d7e7143b83039d50e3bd868fea0634232de458e1b84c59f864b71cdf14->enter($__internal_89a865d7e7143b83039d50e3bd868fea0634232de458e1b84c59f864b71cdf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b473877850ac93732488ac51c93387196492e9365caa4a44fc8d22f075ba3222->leave($__internal_b473877850ac93732488ac51c93387196492e9365caa4a44fc8d22f075ba3222_prof);

        
        $__internal_89a865d7e7143b83039d50e3bd868fea0634232de458e1b84c59f864b71cdf14->leave($__internal_89a865d7e7143b83039d50e3bd868fea0634232de458e1b84c59f864b71cdf14_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}

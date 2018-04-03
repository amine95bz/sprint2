<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b791489f7246a91c5f3a98e978aafcea03a375a68e0334a67d88d6f0ee5e8936 extends Twig_Template
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
        $__internal_eb0c5ca8b2fca95d3764b4fc9d1298f7c7ec2a947ba40e9e48bab54935ae1b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0c5ca8b2fca95d3764b4fc9d1298f7c7ec2a947ba40e9e48bab54935ae1b7c->enter($__internal_eb0c5ca8b2fca95d3764b4fc9d1298f7c7ec2a947ba40e9e48bab54935ae1b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_0ce601041884503565ba5fda59d29570456c0ab6bb3eb2bf9c1fc22b175e15ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce601041884503565ba5fda59d29570456c0ab6bb3eb2bf9c1fc22b175e15ce->enter($__internal_0ce601041884503565ba5fda59d29570456c0ab6bb3eb2bf9c1fc22b175e15ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_eb0c5ca8b2fca95d3764b4fc9d1298f7c7ec2a947ba40e9e48bab54935ae1b7c->leave($__internal_eb0c5ca8b2fca95d3764b4fc9d1298f7c7ec2a947ba40e9e48bab54935ae1b7c_prof);

        
        $__internal_0ce601041884503565ba5fda59d29570456c0ab6bb3eb2bf9c1fc22b175e15ce->leave($__internal_0ce601041884503565ba5fda59d29570456c0ab6bb3eb2bf9c1fc22b175e15ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}

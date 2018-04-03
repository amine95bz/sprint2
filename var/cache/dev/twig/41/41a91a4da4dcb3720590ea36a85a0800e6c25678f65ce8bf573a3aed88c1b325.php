<?php

/* BaseBundle:Default:dash.html.twig */
class __TwigTemplate_fed21fc35a312affe2b087f7896eebec384874bea9a9e8867ea29dcb2b219e3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Back.html.twig", "BaseBundle:Default:dash.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "Back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f78b0f07ab3115a8a11ecfe5c2797c44c8e9ed0efa686be8ab43bec3b32a5c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f78b0f07ab3115a8a11ecfe5c2797c44c8e9ed0efa686be8ab43bec3b32a5c9->enter($__internal_4f78b0f07ab3115a8a11ecfe5c2797c44c8e9ed0efa686be8ab43bec3b32a5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseBundle:Default:dash.html.twig"));

        $__internal_b1796da72d0a7a4d41b05b99ee6745dc591332519898ed656db1f2ede2b47d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1796da72d0a7a4d41b05b99ee6745dc591332519898ed656db1f2ede2b47d10->enter($__internal_b1796da72d0a7a4d41b05b99ee6745dc591332519898ed656db1f2ede2b47d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseBundle:Default:dash.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f78b0f07ab3115a8a11ecfe5c2797c44c8e9ed0efa686be8ab43bec3b32a5c9->leave($__internal_4f78b0f07ab3115a8a11ecfe5c2797c44c8e9ed0efa686be8ab43bec3b32a5c9_prof);

        
        $__internal_b1796da72d0a7a4d41b05b99ee6745dc591332519898ed656db1f2ede2b47d10->leave($__internal_b1796da72d0a7a4d41b05b99ee6745dc591332519898ed656db1f2ede2b47d10_prof);

    }

    public function getTemplateName()
    {
        return "BaseBundle:Default:dash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Back.html.twig' %}", "BaseBundle:Default:dash.html.twig", "C:\\wamp64\\www\\medina1\\src\\BaseBundle/Resources/views/Default/dash.html.twig");
    }
}

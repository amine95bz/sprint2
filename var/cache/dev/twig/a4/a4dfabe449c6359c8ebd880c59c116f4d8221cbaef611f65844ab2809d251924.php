<?php

/* BaseBundle:Default:index.html.twig */
class __TwigTemplate_b236ca7529d43ec9cb01b026af564a5e3a4d04f98fe0603980fe4683a4dedb2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Front.html.twig", "BaseBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19a3a295294288e2741012625821bcdf964f56c849bc1843029646b2aa71774f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a3a295294288e2741012625821bcdf964f56c849bc1843029646b2aa71774f->enter($__internal_19a3a295294288e2741012625821bcdf964f56c849bc1843029646b2aa71774f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseBundle:Default:index.html.twig"));

        $__internal_d2effa7cc75c0d78bff84c1ee816b03abfbaefc52d8795ad9c4f982980b48cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2effa7cc75c0d78bff84c1ee816b03abfbaefc52d8795ad9c4f982980b48cb3->enter($__internal_d2effa7cc75c0d78bff84c1ee816b03abfbaefc52d8795ad9c4f982980b48cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19a3a295294288e2741012625821bcdf964f56c849bc1843029646b2aa71774f->leave($__internal_19a3a295294288e2741012625821bcdf964f56c849bc1843029646b2aa71774f_prof);

        
        $__internal_d2effa7cc75c0d78bff84c1ee816b03abfbaefc52d8795ad9c4f982980b48cb3->leave($__internal_d2effa7cc75c0d78bff84c1ee816b03abfbaefc52d8795ad9c4f982980b48cb3_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_3b3abf169e23e29bc7cd302f624ae2ccc9b5cf4d229f1bc3f797c8df909c04e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3abf169e23e29bc7cd302f624ae2ccc9b5cf4d229f1bc3f797c8df909c04e6->enter($__internal_3b3abf169e23e29bc7cd302f624ae2ccc9b5cf4d229f1bc3f797c8df909c04e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_123bfec07d53d3206f8fb9211a306f589c36ba2a78f0e4a12d066e9dddf38f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123bfec07d53d3206f8fb9211a306f589c36ba2a78f0e4a12d066e9dddf38f60->enter($__internal_123bfec07d53d3206f8fb9211a306f589c36ba2a78f0e4a12d066e9dddf38f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <h1>  Hello </h1>
";
        
        $__internal_123bfec07d53d3206f8fb9211a306f589c36ba2a78f0e4a12d066e9dddf38f60->leave($__internal_123bfec07d53d3206f8fb9211a306f589c36ba2a78f0e4a12d066e9dddf38f60_prof);

        
        $__internal_3b3abf169e23e29bc7cd302f624ae2ccc9b5cf4d229f1bc3f797c8df909c04e6->leave($__internal_3b3abf169e23e29bc7cd302f624ae2ccc9b5cf4d229f1bc3f797c8df909c04e6_prof);

    }

    public function getTemplateName()
    {
        return "BaseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Front.html.twig' %}
{% block container %}
    <h1>  Hello </h1>
{% endblock %}
", "BaseBundle:Default:index.html.twig", "C:\\wamp64\\www\\medina1\\src\\BaseBundle/Resources/views/Default/index.html.twig");
    }
}

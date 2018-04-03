<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_9c89f10cb6bf51da95570ca3bd60a41f7ad1521ff9b1c997966bb939d5b6447e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6dec864ddccb800563c47d84cd2ef1c01ea8cdbb2e1c745fa296dc48d021365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6dec864ddccb800563c47d84cd2ef1c01ea8cdbb2e1c745fa296dc48d021365->enter($__internal_e6dec864ddccb800563c47d84cd2ef1c01ea8cdbb2e1c745fa296dc48d021365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_0b4fd49f2d38a2c0de249cc9554c84007c2cce864a43f193f148b1dc6a26d514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4fd49f2d38a2c0de249cc9554c84007c2cce864a43f193f148b1dc6a26d514->enter($__internal_0b4fd49f2d38a2c0de249cc9554c84007c2cce864a43f193f148b1dc6a26d514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e6dec864ddccb800563c47d84cd2ef1c01ea8cdbb2e1c745fa296dc48d021365->leave($__internal_e6dec864ddccb800563c47d84cd2ef1c01ea8cdbb2e1c745fa296dc48d021365_prof);

        
        $__internal_0b4fd49f2d38a2c0de249cc9554c84007c2cce864a43f193f148b1dc6a26d514->leave($__internal_0b4fd49f2d38a2c0de249cc9554c84007c2cce864a43f193f148b1dc6a26d514_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c2d39caf4bf3559eaa6ef74433162c96149eb63eef5feddaad947f17b32aec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2d39caf4bf3559eaa6ef74433162c96149eb63eef5feddaad947f17b32aec0->enter($__internal_7c2d39caf4bf3559eaa6ef74433162c96149eb63eef5feddaad947f17b32aec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_603e4ed785fd4271f9b420ffe73f75eefa3694c7fe813657ddd563bda2597396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603e4ed785fd4271f9b420ffe73f75eefa3694c7fe813657ddd563bda2597396->enter($__internal_603e4ed785fd4271f9b420ffe73f75eefa3694c7fe813657ddd563bda2597396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_603e4ed785fd4271f9b420ffe73f75eefa3694c7fe813657ddd563bda2597396->leave($__internal_603e4ed785fd4271f9b420ffe73f75eefa3694c7fe813657ddd563bda2597396_prof);

        
        $__internal_7c2d39caf4bf3559eaa6ef74433162c96149eb63eef5feddaad947f17b32aec0->leave($__internal_7c2d39caf4bf3559eaa6ef74433162c96149eb63eef5feddaad947f17b32aec0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

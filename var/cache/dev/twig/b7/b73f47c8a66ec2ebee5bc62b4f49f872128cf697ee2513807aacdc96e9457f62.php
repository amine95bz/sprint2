<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c7fbb7ca051ab6365115737c0483a2247b6f198ebfb1bf05ed7c1cc7385d2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7fbb7ca051ab6365115737c0483a2247b6f198ebfb1bf05ed7c1cc7385d2d7->enter($__internal_6c7fbb7ca051ab6365115737c0483a2247b6f198ebfb1bf05ed7c1cc7385d2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_944641db2a064b2ae5454b25c8f10f225bd4dde2d2120a704e7ba53cd646f5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944641db2a064b2ae5454b25c8f10f225bd4dde2d2120a704e7ba53cd646f5ea->enter($__internal_944641db2a064b2ae5454b25c8f10f225bd4dde2d2120a704e7ba53cd646f5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c7fbb7ca051ab6365115737c0483a2247b6f198ebfb1bf05ed7c1cc7385d2d7->leave($__internal_6c7fbb7ca051ab6365115737c0483a2247b6f198ebfb1bf05ed7c1cc7385d2d7_prof);

        
        $__internal_944641db2a064b2ae5454b25c8f10f225bd4dde2d2120a704e7ba53cd646f5ea->leave($__internal_944641db2a064b2ae5454b25c8f10f225bd4dde2d2120a704e7ba53cd646f5ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c977358c32da42d24cb070e034b56988ec1d57ce032b83e8037ee6c5618227e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c977358c32da42d24cb070e034b56988ec1d57ce032b83e8037ee6c5618227e9->enter($__internal_c977358c32da42d24cb070e034b56988ec1d57ce032b83e8037ee6c5618227e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4ce2d490a6d74d0f93536aa506e1cf6a1c0595a64010d7c0f5fafa7ef109985b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce2d490a6d74d0f93536aa506e1cf6a1c0595a64010d7c0f5fafa7ef109985b->enter($__internal_4ce2d490a6d74d0f93536aa506e1cf6a1c0595a64010d7c0f5fafa7ef109985b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ce2d490a6d74d0f93536aa506e1cf6a1c0595a64010d7c0f5fafa7ef109985b->leave($__internal_4ce2d490a6d74d0f93536aa506e1cf6a1c0595a64010d7c0f5fafa7ef109985b_prof);

        
        $__internal_c977358c32da42d24cb070e034b56988ec1d57ce032b83e8037ee6c5618227e9->leave($__internal_c977358c32da42d24cb070e034b56988ec1d57ce032b83e8037ee6c5618227e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d2b45bf5acc90889a4ed7dc2ae078e90f7d51a5ed7eca1969ad1272c71772d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2b45bf5acc90889a4ed7dc2ae078e90f7d51a5ed7eca1969ad1272c71772d5->enter($__internal_1d2b45bf5acc90889a4ed7dc2ae078e90f7d51a5ed7eca1969ad1272c71772d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_642d058a954b41ab50c349bb4771cd4bf0a578691bd662a5e8fa087c7fab924a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642d058a954b41ab50c349bb4771cd4bf0a578691bd662a5e8fa087c7fab924a->enter($__internal_642d058a954b41ab50c349bb4771cd4bf0a578691bd662a5e8fa087c7fab924a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_642d058a954b41ab50c349bb4771cd4bf0a578691bd662a5e8fa087c7fab924a->leave($__internal_642d058a954b41ab50c349bb4771cd4bf0a578691bd662a5e8fa087c7fab924a_prof);

        
        $__internal_1d2b45bf5acc90889a4ed7dc2ae078e90f7d51a5ed7eca1969ad1272c71772d5->leave($__internal_1d2b45bf5acc90889a4ed7dc2ae078e90f7d51a5ed7eca1969ad1272c71772d5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22e61cf13f7aad9c2ddfdcabcaf380893128dd5527bdff0a3c48976ba9fc1fd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e61cf13f7aad9c2ddfdcabcaf380893128dd5527bdff0a3c48976ba9fc1fd9->enter($__internal_22e61cf13f7aad9c2ddfdcabcaf380893128dd5527bdff0a3c48976ba9fc1fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1a678ffec35aa4a339b9a97b6ce1503033f00561e9f74d9145594b1d7791cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a678ffec35aa4a339b9a97b6ce1503033f00561e9f74d9145594b1d7791cac->enter($__internal_a1a678ffec35aa4a339b9a97b6ce1503033f00561e9f74d9145594b1d7791cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1a678ffec35aa4a339b9a97b6ce1503033f00561e9f74d9145594b1d7791cac->leave($__internal_a1a678ffec35aa4a339b9a97b6ce1503033f00561e9f74d9145594b1d7791cac_prof);

        
        $__internal_22e61cf13f7aad9c2ddfdcabcaf380893128dd5527bdff0a3c48976ba9fc1fd9->leave($__internal_22e61cf13f7aad9c2ddfdcabcaf380893128dd5527bdff0a3c48976ba9fc1fd9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

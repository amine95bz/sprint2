<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6bdf9b39a6b88486f44de228d2c1505520296a8297e7b1f4bd9d5136c9b3fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1e45a5c83b3a564bafbd96eb8a43ee63b7a2b6dd5fd8a551faa9d40d75193145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e45a5c83b3a564bafbd96eb8a43ee63b7a2b6dd5fd8a551faa9d40d75193145->enter($__internal_1e45a5c83b3a564bafbd96eb8a43ee63b7a2b6dd5fd8a551faa9d40d75193145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_1f4c24fdbfa2a2a9c7c38ad8dfd4d59a2310f81e3a0b3e264d8012d342e8d242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4c24fdbfa2a2a9c7c38ad8dfd4d59a2310f81e3a0b3e264d8012d342e8d242->enter($__internal_1f4c24fdbfa2a2a9c7c38ad8dfd4d59a2310f81e3a0b3e264d8012d342e8d242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e45a5c83b3a564bafbd96eb8a43ee63b7a2b6dd5fd8a551faa9d40d75193145->leave($__internal_1e45a5c83b3a564bafbd96eb8a43ee63b7a2b6dd5fd8a551faa9d40d75193145_prof);

        
        $__internal_1f4c24fdbfa2a2a9c7c38ad8dfd4d59a2310f81e3a0b3e264d8012d342e8d242->leave($__internal_1f4c24fdbfa2a2a9c7c38ad8dfd4d59a2310f81e3a0b3e264d8012d342e8d242_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_968cbe30c61dc5935607868124d45751b8aa7c838d72fd6bbf1ef6ccc53385a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968cbe30c61dc5935607868124d45751b8aa7c838d72fd6bbf1ef6ccc53385a7->enter($__internal_968cbe30c61dc5935607868124d45751b8aa7c838d72fd6bbf1ef6ccc53385a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_54c9f53234c5973083c5a6f75a5b366c41c8ed91bd4d5a9647733ba1497c47f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c9f53234c5973083c5a6f75a5b366c41c8ed91bd4d5a9647733ba1497c47f6->enter($__internal_54c9f53234c5973083c5a6f75a5b366c41c8ed91bd4d5a9647733ba1497c47f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_54c9f53234c5973083c5a6f75a5b366c41c8ed91bd4d5a9647733ba1497c47f6->leave($__internal_54c9f53234c5973083c5a6f75a5b366c41c8ed91bd4d5a9647733ba1497c47f6_prof);

        
        $__internal_968cbe30c61dc5935607868124d45751b8aa7c838d72fd6bbf1ef6ccc53385a7->leave($__internal_968cbe30c61dc5935607868124d45751b8aa7c838d72fd6bbf1ef6ccc53385a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e9e322f2dd058ded27277027a45230f91771b9bc3ed0755e63ba1f1ae7e135f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e9e322f2dd058ded27277027a45230f91771b9bc3ed0755e63ba1f1ae7e135f->enter($__internal_2e9e322f2dd058ded27277027a45230f91771b9bc3ed0755e63ba1f1ae7e135f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2359f14c911e0020adba87ffca431ea6fd2509daa31570111dd3e92a25503697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2359f14c911e0020adba87ffca431ea6fd2509daa31570111dd3e92a25503697->enter($__internal_2359f14c911e0020adba87ffca431ea6fd2509daa31570111dd3e92a25503697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2359f14c911e0020adba87ffca431ea6fd2509daa31570111dd3e92a25503697->leave($__internal_2359f14c911e0020adba87ffca431ea6fd2509daa31570111dd3e92a25503697_prof);

        
        $__internal_2e9e322f2dd058ded27277027a45230f91771b9bc3ed0755e63ba1f1ae7e135f->leave($__internal_2e9e322f2dd058ded27277027a45230f91771b9bc3ed0755e63ba1f1ae7e135f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b00e483217e44d8ab2c00b827228526bcae9a341483279b4b67ef7de58910964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00e483217e44d8ab2c00b827228526bcae9a341483279b4b67ef7de58910964->enter($__internal_b00e483217e44d8ab2c00b827228526bcae9a341483279b4b67ef7de58910964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82138640ab146568e62cc6b1b927a33236908d4769a2a5ecb271c30bd619edb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82138640ab146568e62cc6b1b927a33236908d4769a2a5ecb271c30bd619edb0->enter($__internal_82138640ab146568e62cc6b1b927a33236908d4769a2a5ecb271c30bd619edb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_82138640ab146568e62cc6b1b927a33236908d4769a2a5ecb271c30bd619edb0->leave($__internal_82138640ab146568e62cc6b1b927a33236908d4769a2a5ecb271c30bd619edb0_prof);

        
        $__internal_b00e483217e44d8ab2c00b827228526bcae9a341483279b4b67ef7de58910964->leave($__internal_b00e483217e44d8ab2c00b827228526bcae9a341483279b4b67ef7de58910964_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

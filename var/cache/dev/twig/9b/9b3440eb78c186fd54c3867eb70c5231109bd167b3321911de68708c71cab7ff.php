<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_39522ff2f11238a43a458b542059abf4b1c583f17a738cff1783dad86ba997a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdee60eb7b9c7e3ea6ef3c2e4126c73b2ba116669fa16a627578b188500cfb2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdee60eb7b9c7e3ea6ef3c2e4126c73b2ba116669fa16a627578b188500cfb2a->enter($__internal_bdee60eb7b9c7e3ea6ef3c2e4126c73b2ba116669fa16a627578b188500cfb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_558841a263321a36d0d3837871727e3d204297249a6e1a6cdcce631d5c2ed441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558841a263321a36d0d3837871727e3d204297249a6e1a6cdcce631d5c2ed441->enter($__internal_558841a263321a36d0d3837871727e3d204297249a6e1a6cdcce631d5c2ed441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdee60eb7b9c7e3ea6ef3c2e4126c73b2ba116669fa16a627578b188500cfb2a->leave($__internal_bdee60eb7b9c7e3ea6ef3c2e4126c73b2ba116669fa16a627578b188500cfb2a_prof);

        
        $__internal_558841a263321a36d0d3837871727e3d204297249a6e1a6cdcce631d5c2ed441->leave($__internal_558841a263321a36d0d3837871727e3d204297249a6e1a6cdcce631d5c2ed441_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48fd8d5fde9a3fc4025cece36947df677ca0bf2b8d32976a1b7e5381cd8e626f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48fd8d5fde9a3fc4025cece36947df677ca0bf2b8d32976a1b7e5381cd8e626f->enter($__internal_48fd8d5fde9a3fc4025cece36947df677ca0bf2b8d32976a1b7e5381cd8e626f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0349bddb624bbc66a3ca974257e62c20417f31a54c7ecc563ee777235683dbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0349bddb624bbc66a3ca974257e62c20417f31a54c7ecc563ee777235683dbf2->enter($__internal_0349bddb624bbc66a3ca974257e62c20417f31a54c7ecc563ee777235683dbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0349bddb624bbc66a3ca974257e62c20417f31a54c7ecc563ee777235683dbf2->leave($__internal_0349bddb624bbc66a3ca974257e62c20417f31a54c7ecc563ee777235683dbf2_prof);

        
        $__internal_48fd8d5fde9a3fc4025cece36947df677ca0bf2b8d32976a1b7e5381cd8e626f->leave($__internal_48fd8d5fde9a3fc4025cece36947df677ca0bf2b8d32976a1b7e5381cd8e626f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed08f5c011851f562277f415291ea349fcbb5f26d1b5ebd5897ea28d2620f5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed08f5c011851f562277f415291ea349fcbb5f26d1b5ebd5897ea28d2620f5c1->enter($__internal_ed08f5c011851f562277f415291ea349fcbb5f26d1b5ebd5897ea28d2620f5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c9309aa2f0f4f98425781ca7f053aa332916ee881c43c597338b1c27b4e6d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9309aa2f0f4f98425781ca7f053aa332916ee881c43c597338b1c27b4e6d81->enter($__internal_2c9309aa2f0f4f98425781ca7f053aa332916ee881c43c597338b1c27b4e6d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_2c9309aa2f0f4f98425781ca7f053aa332916ee881c43c597338b1c27b4e6d81->leave($__internal_2c9309aa2f0f4f98425781ca7f053aa332916ee881c43c597338b1c27b4e6d81_prof);

        
        $__internal_ed08f5c011851f562277f415291ea349fcbb5f26d1b5ebd5897ea28d2620f5c1->leave($__internal_ed08f5c011851f562277f415291ea349fcbb5f26d1b5ebd5897ea28d2620f5c1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

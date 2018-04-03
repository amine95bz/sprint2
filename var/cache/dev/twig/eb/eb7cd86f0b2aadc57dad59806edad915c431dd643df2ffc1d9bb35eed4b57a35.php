<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_1fe37e7333fa2302574a681f9e5e027d2256d8d096a297ce8f660b3bf5fbc0d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_9634c038a375bd61247f69eb2777f248c0eb170ab63b7f9c133130ab0fb4ab8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9634c038a375bd61247f69eb2777f248c0eb170ab63b7f9c133130ab0fb4ab8c->enter($__internal_9634c038a375bd61247f69eb2777f248c0eb170ab63b7f9c133130ab0fb4ab8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_4dc37d33cb6cddfebb8c46bb2479e425abbff0d7c2df230bfa6328dcdca143d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc37d33cb6cddfebb8c46bb2479e425abbff0d7c2df230bfa6328dcdca143d6->enter($__internal_4dc37d33cb6cddfebb8c46bb2479e425abbff0d7c2df230bfa6328dcdca143d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9634c038a375bd61247f69eb2777f248c0eb170ab63b7f9c133130ab0fb4ab8c->leave($__internal_9634c038a375bd61247f69eb2777f248c0eb170ab63b7f9c133130ab0fb4ab8c_prof);

        
        $__internal_4dc37d33cb6cddfebb8c46bb2479e425abbff0d7c2df230bfa6328dcdca143d6->leave($__internal_4dc37d33cb6cddfebb8c46bb2479e425abbff0d7c2df230bfa6328dcdca143d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f03b7ebbdad3c2d1cb0a16d577f4d18b56ac5a2d2896db3fc5c339c8c84e979b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03b7ebbdad3c2d1cb0a16d577f4d18b56ac5a2d2896db3fc5c339c8c84e979b->enter($__internal_f03b7ebbdad3c2d1cb0a16d577f4d18b56ac5a2d2896db3fc5c339c8c84e979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f313ae9010022c03e35d151d0b6e535dbc9f3f5105be418ab8644745ebec2135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f313ae9010022c03e35d151d0b6e535dbc9f3f5105be418ab8644745ebec2135->enter($__internal_f313ae9010022c03e35d151d0b6e535dbc9f3f5105be418ab8644745ebec2135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f313ae9010022c03e35d151d0b6e535dbc9f3f5105be418ab8644745ebec2135->leave($__internal_f313ae9010022c03e35d151d0b6e535dbc9f3f5105be418ab8644745ebec2135_prof);

        
        $__internal_f03b7ebbdad3c2d1cb0a16d577f4d18b56ac5a2d2896db3fc5c339c8c84e979b->leave($__internal_f03b7ebbdad3c2d1cb0a16d577f4d18b56ac5a2d2896db3fc5c339c8c84e979b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf2e70bcc44b46a5b8ca6d9a26836648ea9979156575dc346ebcbbe7f34d58e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2e70bcc44b46a5b8ca6d9a26836648ea9979156575dc346ebcbbe7f34d58e3->enter($__internal_cf2e70bcc44b46a5b8ca6d9a26836648ea9979156575dc346ebcbbe7f34d58e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00315b80f06b37ba63ae1ad76f4c33d0be9ab9148089beb6e720845cb5d3a3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00315b80f06b37ba63ae1ad76f4c33d0be9ab9148089beb6e720845cb5d3a3ee->enter($__internal_00315b80f06b37ba63ae1ad76f4c33d0be9ab9148089beb6e720845cb5d3a3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_00315b80f06b37ba63ae1ad76f4c33d0be9ab9148089beb6e720845cb5d3a3ee->leave($__internal_00315b80f06b37ba63ae1ad76f4c33d0be9ab9148089beb6e720845cb5d3a3ee_prof);

        
        $__internal_cf2e70bcc44b46a5b8ca6d9a26836648ea9979156575dc346ebcbbe7f34d58e3->leave($__internal_cf2e70bcc44b46a5b8ca6d9a26836648ea9979156575dc346ebcbbe7f34d58e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

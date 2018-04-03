<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e22e3af53fc7c2d9c5ca576798121fd8b33fefbfe2a169b716247adddb525434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8876b4a9b0f3f8e70329201992a9b965dddfdc03424a53c45a533d58801b7c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8876b4a9b0f3f8e70329201992a9b965dddfdc03424a53c45a533d58801b7c3d->enter($__internal_8876b4a9b0f3f8e70329201992a9b965dddfdc03424a53c45a533d58801b7c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c2a8cd93e114dfa5d98839d5e451e11a636fa1d54c65f7b46fd9261a37b6e8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a8cd93e114dfa5d98839d5e451e11a636fa1d54c65f7b46fd9261a37b6e8fe->enter($__internal_c2a8cd93e114dfa5d98839d5e451e11a636fa1d54c65f7b46fd9261a37b6e8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8876b4a9b0f3f8e70329201992a9b965dddfdc03424a53c45a533d58801b7c3d->leave($__internal_8876b4a9b0f3f8e70329201992a9b965dddfdc03424a53c45a533d58801b7c3d_prof);

        
        $__internal_c2a8cd93e114dfa5d98839d5e451e11a636fa1d54c65f7b46fd9261a37b6e8fe->leave($__internal_c2a8cd93e114dfa5d98839d5e451e11a636fa1d54c65f7b46fd9261a37b6e8fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e599bf0f8f042ce889c13837a1220d5042e61f7f0d8ba775ea63207656dfb348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e599bf0f8f042ce889c13837a1220d5042e61f7f0d8ba775ea63207656dfb348->enter($__internal_e599bf0f8f042ce889c13837a1220d5042e61f7f0d8ba775ea63207656dfb348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2707978faa01c7af0fe7a8e2b46b97f42c8dc344e989a4ddd44a5b9189ee5e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2707978faa01c7af0fe7a8e2b46b97f42c8dc344e989a4ddd44a5b9189ee5e57->enter($__internal_2707978faa01c7af0fe7a8e2b46b97f42c8dc344e989a4ddd44a5b9189ee5e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2707978faa01c7af0fe7a8e2b46b97f42c8dc344e989a4ddd44a5b9189ee5e57->leave($__internal_2707978faa01c7af0fe7a8e2b46b97f42c8dc344e989a4ddd44a5b9189ee5e57_prof);

        
        $__internal_e599bf0f8f042ce889c13837a1220d5042e61f7f0d8ba775ea63207656dfb348->leave($__internal_e599bf0f8f042ce889c13837a1220d5042e61f7f0d8ba775ea63207656dfb348_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b6a2d8a6690de1cdc22a7ff96c2d650b75a9c0d15fdf3ed24d42cacdf5686b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b6a2d8a6690de1cdc22a7ff96c2d650b75a9c0d15fdf3ed24d42cacdf5686b3->enter($__internal_9b6a2d8a6690de1cdc22a7ff96c2d650b75a9c0d15fdf3ed24d42cacdf5686b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_de97dd5d2c1a2fccca30ee487f590dd063862609a6743c9253760bb7125196a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de97dd5d2c1a2fccca30ee487f590dd063862609a6743c9253760bb7125196a0->enter($__internal_de97dd5d2c1a2fccca30ee487f590dd063862609a6743c9253760bb7125196a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_de97dd5d2c1a2fccca30ee487f590dd063862609a6743c9253760bb7125196a0->leave($__internal_de97dd5d2c1a2fccca30ee487f590dd063862609a6743c9253760bb7125196a0_prof);

        
        $__internal_9b6a2d8a6690de1cdc22a7ff96c2d650b75a9c0d15fdf3ed24d42cacdf5686b3->leave($__internal_9b6a2d8a6690de1cdc22a7ff96c2d650b75a9c0d15fdf3ed24d42cacdf5686b3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_150612aae9dd8320e6b59f19bc437b7dfa0d727801298f598170f5da3530fe11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150612aae9dd8320e6b59f19bc437b7dfa0d727801298f598170f5da3530fe11->enter($__internal_150612aae9dd8320e6b59f19bc437b7dfa0d727801298f598170f5da3530fe11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_918424b19494e03b0926b23b70df093bcb1ff6da4677317b2dd993e644b2f934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918424b19494e03b0926b23b70df093bcb1ff6da4677317b2dd993e644b2f934->enter($__internal_918424b19494e03b0926b23b70df093bcb1ff6da4677317b2dd993e644b2f934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_918424b19494e03b0926b23b70df093bcb1ff6da4677317b2dd993e644b2f934->leave($__internal_918424b19494e03b0926b23b70df093bcb1ff6da4677317b2dd993e644b2f934_prof);

        
        $__internal_150612aae9dd8320e6b59f19bc437b7dfa0d727801298f598170f5da3530fe11->leave($__internal_150612aae9dd8320e6b59f19bc437b7dfa0d727801298f598170f5da3530fe11_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

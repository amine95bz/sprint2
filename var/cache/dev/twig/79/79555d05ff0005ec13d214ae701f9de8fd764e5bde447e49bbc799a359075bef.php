<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce5e298ea7c566ba912d0cb4d5695f690b63e95c6189996a45de6c3ac1516709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_07e48a4f8c306ea8b090f7473535795a1791e6f298afebca07fe6867f3c9f0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e48a4f8c306ea8b090f7473535795a1791e6f298afebca07fe6867f3c9f0d2->enter($__internal_07e48a4f8c306ea8b090f7473535795a1791e6f298afebca07fe6867f3c9f0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1f2293194b18a8439a652215efcd0946fea5a4d0bf9b64c92119e08eaf201920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2293194b18a8439a652215efcd0946fea5a4d0bf9b64c92119e08eaf201920->enter($__internal_1f2293194b18a8439a652215efcd0946fea5a4d0bf9b64c92119e08eaf201920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07e48a4f8c306ea8b090f7473535795a1791e6f298afebca07fe6867f3c9f0d2->leave($__internal_07e48a4f8c306ea8b090f7473535795a1791e6f298afebca07fe6867f3c9f0d2_prof);

        
        $__internal_1f2293194b18a8439a652215efcd0946fea5a4d0bf9b64c92119e08eaf201920->leave($__internal_1f2293194b18a8439a652215efcd0946fea5a4d0bf9b64c92119e08eaf201920_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a8fbb711a176340b30af05ff37adeb350095f68fa29260ee8ce396cade7f796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8fbb711a176340b30af05ff37adeb350095f68fa29260ee8ce396cade7f796->enter($__internal_7a8fbb711a176340b30af05ff37adeb350095f68fa29260ee8ce396cade7f796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_68e22e5d4a4a129000f7f8653923e59ec6c48670e51f8f268bbf99e8a7f42c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e22e5d4a4a129000f7f8653923e59ec6c48670e51f8f268bbf99e8a7f42c4e->enter($__internal_68e22e5d4a4a129000f7f8653923e59ec6c48670e51f8f268bbf99e8a7f42c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_68e22e5d4a4a129000f7f8653923e59ec6c48670e51f8f268bbf99e8a7f42c4e->leave($__internal_68e22e5d4a4a129000f7f8653923e59ec6c48670e51f8f268bbf99e8a7f42c4e_prof);

        
        $__internal_7a8fbb711a176340b30af05ff37adeb350095f68fa29260ee8ce396cade7f796->leave($__internal_7a8fbb711a176340b30af05ff37adeb350095f68fa29260ee8ce396cade7f796_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3acf0e27117033e1eb8c7c440ca62468601ad71ad8617c3539819870f068fa61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acf0e27117033e1eb8c7c440ca62468601ad71ad8617c3539819870f068fa61->enter($__internal_3acf0e27117033e1eb8c7c440ca62468601ad71ad8617c3539819870f068fa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6dec8b8c68fdeedbffb012cf7b421bb083076625d5f17b9b9fb8ba0fb7c510ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dec8b8c68fdeedbffb012cf7b421bb083076625d5f17b9b9fb8ba0fb7c510ce->enter($__internal_6dec8b8c68fdeedbffb012cf7b421bb083076625d5f17b9b9fb8ba0fb7c510ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6dec8b8c68fdeedbffb012cf7b421bb083076625d5f17b9b9fb8ba0fb7c510ce->leave($__internal_6dec8b8c68fdeedbffb012cf7b421bb083076625d5f17b9b9fb8ba0fb7c510ce_prof);

        
        $__internal_3acf0e27117033e1eb8c7c440ca62468601ad71ad8617c3539819870f068fa61->leave($__internal_3acf0e27117033e1eb8c7c440ca62468601ad71ad8617c3539819870f068fa61_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_176d9ef9d0f002d82fdb7fe1e13e3a406b97e3aba241afe7924c4573f3587f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176d9ef9d0f002d82fdb7fe1e13e3a406b97e3aba241afe7924c4573f3587f67->enter($__internal_176d9ef9d0f002d82fdb7fe1e13e3a406b97e3aba241afe7924c4573f3587f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_00461e0d537c52a4d00edc0159c0f869e4b0888a89baab1e0bbe52ee2f8e0ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00461e0d537c52a4d00edc0159c0f869e4b0888a89baab1e0bbe52ee2f8e0ae3->enter($__internal_00461e0d537c52a4d00edc0159c0f869e4b0888a89baab1e0bbe52ee2f8e0ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_00461e0d537c52a4d00edc0159c0f869e4b0888a89baab1e0bbe52ee2f8e0ae3->leave($__internal_00461e0d537c52a4d00edc0159c0f869e4b0888a89baab1e0bbe52ee2f8e0ae3_prof);

        
        $__internal_176d9ef9d0f002d82fdb7fe1e13e3a406b97e3aba241afe7924c4573f3587f67->leave($__internal_176d9ef9d0f002d82fdb7fe1e13e3a406b97e3aba241afe7924c4573f3587f67_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

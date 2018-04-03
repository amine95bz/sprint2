<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_e305e74764a95fdebe096370f0e8a09be754001336d9654205d14fc3c8cf81af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6f2ac32ae0702c257c31cd5d245f99c0c0b10ff305b18cdf2e4d4f55cd39bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f2ac32ae0702c257c31cd5d245f99c0c0b10ff305b18cdf2e4d4f55cd39bdd->enter($__internal_f6f2ac32ae0702c257c31cd5d245f99c0c0b10ff305b18cdf2e4d4f55cd39bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_f73e1ee42d21bb1008877f0060162fda144cc1c94ae68ea26878e983630216f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73e1ee42d21bb1008877f0060162fda144cc1c94ae68ea26878e983630216f8->enter($__internal_f73e1ee42d21bb1008877f0060162fda144cc1c94ae68ea26878e983630216f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6f2ac32ae0702c257c31cd5d245f99c0c0b10ff305b18cdf2e4d4f55cd39bdd->leave($__internal_f6f2ac32ae0702c257c31cd5d245f99c0c0b10ff305b18cdf2e4d4f55cd39bdd_prof);

        
        $__internal_f73e1ee42d21bb1008877f0060162fda144cc1c94ae68ea26878e983630216f8->leave($__internal_f73e1ee42d21bb1008877f0060162fda144cc1c94ae68ea26878e983630216f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_545d9c3eea53835723e35c360779f7c3e7b521c353a253284d17383f3bbf5859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_545d9c3eea53835723e35c360779f7c3e7b521c353a253284d17383f3bbf5859->enter($__internal_545d9c3eea53835723e35c360779f7c3e7b521c353a253284d17383f3bbf5859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f4e5373498c7ded4269813f239d8536b85dd8c7fd2cffc9a670d40dc438272fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e5373498c7ded4269813f239d8536b85dd8c7fd2cffc9a670d40dc438272fd->enter($__internal_f4e5373498c7ded4269813f239d8536b85dd8c7fd2cffc9a670d40dc438272fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f4e5373498c7ded4269813f239d8536b85dd8c7fd2cffc9a670d40dc438272fd->leave($__internal_f4e5373498c7ded4269813f239d8536b85dd8c7fd2cffc9a670d40dc438272fd_prof);

        
        $__internal_545d9c3eea53835723e35c360779f7c3e7b521c353a253284d17383f3bbf5859->leave($__internal_545d9c3eea53835723e35c360779f7c3e7b521c353a253284d17383f3bbf5859_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

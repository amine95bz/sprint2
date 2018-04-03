<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_03f16f7935efc3b1571bcde34bde9ba802edc11a2c7439350b6aca1ef39ef8a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4ca6bee68d5deb43565bb4e89435abbff060612f410af2e697079e2079d32a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ca6bee68d5deb43565bb4e89435abbff060612f410af2e697079e2079d32a0->enter($__internal_d4ca6bee68d5deb43565bb4e89435abbff060612f410af2e697079e2079d32a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_61960d9024edbab85f9b15721db8bafa510fdb106fd555449aaed6370efaff1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61960d9024edbab85f9b15721db8bafa510fdb106fd555449aaed6370efaff1b->enter($__internal_61960d9024edbab85f9b15721db8bafa510fdb106fd555449aaed6370efaff1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4ca6bee68d5deb43565bb4e89435abbff060612f410af2e697079e2079d32a0->leave($__internal_d4ca6bee68d5deb43565bb4e89435abbff060612f410af2e697079e2079d32a0_prof);

        
        $__internal_61960d9024edbab85f9b15721db8bafa510fdb106fd555449aaed6370efaff1b->leave($__internal_61960d9024edbab85f9b15721db8bafa510fdb106fd555449aaed6370efaff1b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_daed22482a67ae30856f1c90f1caabd70630dc564d83fabdc7f854179e29d0d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daed22482a67ae30856f1c90f1caabd70630dc564d83fabdc7f854179e29d0d8->enter($__internal_daed22482a67ae30856f1c90f1caabd70630dc564d83fabdc7f854179e29d0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61cccc4a30070f7ec2c25cfe084d343a1f03c847116709ea77a852135f63611b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cccc4a30070f7ec2c25cfe084d343a1f03c847116709ea77a852135f63611b->enter($__internal_61cccc4a30070f7ec2c25cfe084d343a1f03c847116709ea77a852135f63611b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_61cccc4a30070f7ec2c25cfe084d343a1f03c847116709ea77a852135f63611b->leave($__internal_61cccc4a30070f7ec2c25cfe084d343a1f03c847116709ea77a852135f63611b_prof);

        
        $__internal_daed22482a67ae30856f1c90f1caabd70630dc564d83fabdc7f854179e29d0d8->leave($__internal_daed22482a67ae30856f1c90f1caabd70630dc564d83fabdc7f854179e29d0d8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c36eeef0a9f29a462d5ae7d1656657a70f5ad30cfe548af6b59d296491deaffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36eeef0a9f29a462d5ae7d1656657a70f5ad30cfe548af6b59d296491deaffa->enter($__internal_c36eeef0a9f29a462d5ae7d1656657a70f5ad30cfe548af6b59d296491deaffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbdb8a1b4f23b53c614cf69d6d2b975030ac5a0dc31ac4989c409d6b5939cc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdb8a1b4f23b53c614cf69d6d2b975030ac5a0dc31ac4989c409d6b5939cc79->enter($__internal_bbdb8a1b4f23b53c614cf69d6d2b975030ac5a0dc31ac4989c409d6b5939cc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_bbdb8a1b4f23b53c614cf69d6d2b975030ac5a0dc31ac4989c409d6b5939cc79->leave($__internal_bbdb8a1b4f23b53c614cf69d6d2b975030ac5a0dc31ac4989c409d6b5939cc79_prof);

        
        $__internal_c36eeef0a9f29a462d5ae7d1656657a70f5ad30cfe548af6b59d296491deaffa->leave($__internal_c36eeef0a9f29a462d5ae7d1656657a70f5ad30cfe548af6b59d296491deaffa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

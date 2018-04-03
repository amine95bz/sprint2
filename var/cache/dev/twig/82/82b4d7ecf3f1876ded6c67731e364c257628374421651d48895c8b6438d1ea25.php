<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6dd5fde8c04f95064acde6414427ce19f673a4f093528a1d70952c8ae57addfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdd4a9f0eb9bd3f247b5ac27fcdee77c608bfb90800f77ac8b68e306e4551ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd4a9f0eb9bd3f247b5ac27fcdee77c608bfb90800f77ac8b68e306e4551ba5->enter($__internal_bdd4a9f0eb9bd3f247b5ac27fcdee77c608bfb90800f77ac8b68e306e4551ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_06fa303174217b51639854a115d27c6d4194ccbad2c8c130a8bf7bcab805ff15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06fa303174217b51639854a115d27c6d4194ccbad2c8c130a8bf7bcab805ff15->enter($__internal_06fa303174217b51639854a115d27c6d4194ccbad2c8c130a8bf7bcab805ff15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdd4a9f0eb9bd3f247b5ac27fcdee77c608bfb90800f77ac8b68e306e4551ba5->leave($__internal_bdd4a9f0eb9bd3f247b5ac27fcdee77c608bfb90800f77ac8b68e306e4551ba5_prof);

        
        $__internal_06fa303174217b51639854a115d27c6d4194ccbad2c8c130a8bf7bcab805ff15->leave($__internal_06fa303174217b51639854a115d27c6d4194ccbad2c8c130a8bf7bcab805ff15_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7073d72f0e006726482983a9b95099be5a78f811060514d4fe9e6c84997bd10f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7073d72f0e006726482983a9b95099be5a78f811060514d4fe9e6c84997bd10f->enter($__internal_7073d72f0e006726482983a9b95099be5a78f811060514d4fe9e6c84997bd10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3baf0067caacf003781f4b6e40a8ffdc30bd68bbb3a66de774bfc26c6a4292be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baf0067caacf003781f4b6e40a8ffdc30bd68bbb3a66de774bfc26c6a4292be->enter($__internal_3baf0067caacf003781f4b6e40a8ffdc30bd68bbb3a66de774bfc26c6a4292be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_3baf0067caacf003781f4b6e40a8ffdc30bd68bbb3a66de774bfc26c6a4292be->leave($__internal_3baf0067caacf003781f4b6e40a8ffdc30bd68bbb3a66de774bfc26c6a4292be_prof);

        
        $__internal_7073d72f0e006726482983a9b95099be5a78f811060514d4fe9e6c84997bd10f->leave($__internal_7073d72f0e006726482983a9b95099be5a78f811060514d4fe9e6c84997bd10f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66cb923513b428acad3001eb9568dc2cbbb77720858ad47e4b9f6ca71236405e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66cb923513b428acad3001eb9568dc2cbbb77720858ad47e4b9f6ca71236405e->enter($__internal_66cb923513b428acad3001eb9568dc2cbbb77720858ad47e4b9f6ca71236405e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_53b9f1aaa978da9b818a4bb388bce096230025bd80a5786c3482556f94a48c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b9f1aaa978da9b818a4bb388bce096230025bd80a5786c3482556f94a48c0e->enter($__internal_53b9f1aaa978da9b818a4bb388bce096230025bd80a5786c3482556f94a48c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_53b9f1aaa978da9b818a4bb388bce096230025bd80a5786c3482556f94a48c0e->leave($__internal_53b9f1aaa978da9b818a4bb388bce096230025bd80a5786c3482556f94a48c0e_prof);

        
        $__internal_66cb923513b428acad3001eb9568dc2cbbb77720858ad47e4b9f6ca71236405e->leave($__internal_66cb923513b428acad3001eb9568dc2cbbb77720858ad47e4b9f6ca71236405e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}

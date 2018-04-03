<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_bcc2518aea8cb9ab80d94fdf8c1fb361d7b01c3da59b314863ad98fc79d6f4b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_790f050caa7e9f192f87d707985ae054e66a8110ca3caa574b5de804ef5cd0f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790f050caa7e9f192f87d707985ae054e66a8110ca3caa574b5de804ef5cd0f5->enter($__internal_790f050caa7e9f192f87d707985ae054e66a8110ca3caa574b5de804ef5cd0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_92841c3f154e2d7a4b7f7a36f3c1b2153d6a5612fe274aed65d0dd54d4aaf50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92841c3f154e2d7a4b7f7a36f3c1b2153d6a5612fe274aed65d0dd54d4aaf50f->enter($__internal_92841c3f154e2d7a4b7f7a36f3c1b2153d6a5612fe274aed65d0dd54d4aaf50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_790f050caa7e9f192f87d707985ae054e66a8110ca3caa574b5de804ef5cd0f5->leave($__internal_790f050caa7e9f192f87d707985ae054e66a8110ca3caa574b5de804ef5cd0f5_prof);

        
        $__internal_92841c3f154e2d7a4b7f7a36f3c1b2153d6a5612fe274aed65d0dd54d4aaf50f->leave($__internal_92841c3f154e2d7a4b7f7a36f3c1b2153d6a5612fe274aed65d0dd54d4aaf50f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_abc48f7cb4a15b0d6c88513ccf132ca532d2a8a550b409528324259413f70116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc48f7cb4a15b0d6c88513ccf132ca532d2a8a550b409528324259413f70116->enter($__internal_abc48f7cb4a15b0d6c88513ccf132ca532d2a8a550b409528324259413f70116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6c6ccf3aa173074ce21df6b08e49bb9c6085cc3f808e051021b8bce1ce779dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6ccf3aa173074ce21df6b08e49bb9c6085cc3f808e051021b8bce1ce779dbd->enter($__internal_6c6ccf3aa173074ce21df6b08e49bb9c6085cc3f808e051021b8bce1ce779dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_6c6ccf3aa173074ce21df6b08e49bb9c6085cc3f808e051021b8bce1ce779dbd->leave($__internal_6c6ccf3aa173074ce21df6b08e49bb9c6085cc3f808e051021b8bce1ce779dbd_prof);

        
        $__internal_abc48f7cb4a15b0d6c88513ccf132ca532d2a8a550b409528324259413f70116->leave($__internal_abc48f7cb4a15b0d6c88513ccf132ca532d2a8a550b409528324259413f70116_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_768550e1f85e967d400737af7a399a08c4cd436d5e9c803e509bae3659131d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768550e1f85e967d400737af7a399a08c4cd436d5e9c803e509bae3659131d40->enter($__internal_768550e1f85e967d400737af7a399a08c4cd436d5e9c803e509bae3659131d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43cb621ee4b8d9345d078f284dc07acd5e05fb58388a6536c5799763d3c53597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cb621ee4b8d9345d078f284dc07acd5e05fb58388a6536c5799763d3c53597->enter($__internal_43cb621ee4b8d9345d078f284dc07acd5e05fb58388a6536c5799763d3c53597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_43cb621ee4b8d9345d078f284dc07acd5e05fb58388a6536c5799763d3c53597->leave($__internal_43cb621ee4b8d9345d078f284dc07acd5e05fb58388a6536c5799763d3c53597_prof);

        
        $__internal_768550e1f85e967d400737af7a399a08c4cd436d5e9c803e509bae3659131d40->leave($__internal_768550e1f85e967d400737af7a399a08c4cd436d5e9c803e509bae3659131d40_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

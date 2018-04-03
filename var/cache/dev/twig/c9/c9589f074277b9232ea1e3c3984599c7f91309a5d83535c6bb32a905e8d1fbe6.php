<?php

/* @Local/Default/ajout_local.html.twig */
class __TwigTemplate_17f38036a5ddcfc11d3f6be15f424db7446a4dd882f67a203779a687a6166caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Front.html.twig", "@Local/Default/ajout_local.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21df0d345d7cdacd3bda667368c485ef24e19088cca5c81eafa1746505d7dc28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21df0d345d7cdacd3bda667368c485ef24e19088cca5c81eafa1746505d7dc28->enter($__internal_21df0d345d7cdacd3bda667368c485ef24e19088cca5c81eafa1746505d7dc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Local/Default/ajout_local.html.twig"));

        $__internal_e52e77f9d888200c615b7463f56d10595fd747625ba66aeafebf2cd9b9e18e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52e77f9d888200c615b7463f56d10595fd747625ba66aeafebf2cd9b9e18e3c->enter($__internal_e52e77f9d888200c615b7463f56d10595fd747625ba66aeafebf2cd9b9e18e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Local/Default/ajout_local.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21df0d345d7cdacd3bda667368c485ef24e19088cca5c81eafa1746505d7dc28->leave($__internal_21df0d345d7cdacd3bda667368c485ef24e19088cca5c81eafa1746505d7dc28_prof);

        
        $__internal_e52e77f9d888200c615b7463f56d10595fd747625ba66aeafebf2cd9b9e18e3c->leave($__internal_e52e77f9d888200c615b7463f56d10595fd747625ba66aeafebf2cd9b9e18e3c_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_11849022fde8269903c8b72fc92a712cecb99f796596bbef6e28def2b808d9d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11849022fde8269903c8b72fc92a712cecb99f796596bbef6e28def2b808d9d6->enter($__internal_11849022fde8269903c8b72fc92a712cecb99f796596bbef6e28def2b808d9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_0496b53c3ebf57d476911911347fd9a121c07cf7b303a14dde819e0dca51a270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0496b53c3ebf57d476911911347fd9a121c07cf7b303a14dde819e0dca51a270->enter($__internal_0496b53c3ebf57d476911911347fd9a121c07cf7b303a14dde819e0dca51a270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <h3>Ajouter un local</h3>

    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "

";
        
        $__internal_0496b53c3ebf57d476911911347fd9a121c07cf7b303a14dde819e0dca51a270->leave($__internal_0496b53c3ebf57d476911911347fd9a121c07cf7b303a14dde819e0dca51a270_prof);

        
        $__internal_11849022fde8269903c8b72fc92a712cecb99f796596bbef6e28def2b808d9d6->leave($__internal_11849022fde8269903c8b72fc92a712cecb99f796596bbef6e28def2b808d9d6_prof);

    }

    public function getTemplateName()
    {
        return "@Local/Default/ajout_local.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Front.html.twig' %}
{% block container %}
    <h3>Ajouter un local</h3>

    {{ form(Form) }}

{% endblock %}", "@Local/Default/ajout_local.html.twig", "C:\\wamp64\\www\\medina1\\src\\LocalBundle\\Resources\\views\\Default\\ajout_local.html.twig");
    }
}

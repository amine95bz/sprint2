<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_a9dfd92a24db13471c2a0bf1a801ec8c321a5758b281f21ab6f56ee9645453cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48291da47709275d490a327243fa0e5e436339623c2eaa3c05d36414dcfde8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48291da47709275d490a327243fa0e5e436339623c2eaa3c05d36414dcfde8ba->enter($__internal_48291da47709275d490a327243fa0e5e436339623c2eaa3c05d36414dcfde8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_9ebb30a3077bbaf244950bf927b9f26ee4c9f30a0d36765a964fc97a480e9959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebb30a3077bbaf244950bf927b9f26ee4c9f30a0d36765a964fc97a480e9959->enter($__internal_9ebb30a3077bbaf244950bf927b9f26ee4c9f30a0d36765a964fc97a480e9959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48291da47709275d490a327243fa0e5e436339623c2eaa3c05d36414dcfde8ba->leave($__internal_48291da47709275d490a327243fa0e5e436339623c2eaa3c05d36414dcfde8ba_prof);

        
        $__internal_9ebb30a3077bbaf244950bf927b9f26ee4c9f30a0d36765a964fc97a480e9959->leave($__internal_9ebb30a3077bbaf244950bf927b9f26ee4c9f30a0d36765a964fc97a480e9959_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8bc0520d44634b56c5bac3c56f94e482ef87c2863b8f93ef4e56973e13ba57ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bc0520d44634b56c5bac3c56f94e482ef87c2863b8f93ef4e56973e13ba57ab->enter($__internal_8bc0520d44634b56c5bac3c56f94e482ef87c2863b8f93ef4e56973e13ba57ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35f3bdce522294687c681bbce96dbf86e8d254138cec1d7def3108d38c5ebb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f3bdce522294687c681bbce96dbf86e8d254138cec1d7def3108d38c5ebb15->enter($__internal_35f3bdce522294687c681bbce96dbf86e8d254138cec1d7def3108d38c5ebb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_35f3bdce522294687c681bbce96dbf86e8d254138cec1d7def3108d38c5ebb15->leave($__internal_35f3bdce522294687c681bbce96dbf86e8d254138cec1d7def3108d38c5ebb15_prof);

        
        $__internal_8bc0520d44634b56c5bac3c56f94e482ef87c2863b8f93ef4e56973e13ba57ab->leave($__internal_8bc0520d44634b56c5bac3c56f94e482ef87c2863b8f93ef4e56973e13ba57ab_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}

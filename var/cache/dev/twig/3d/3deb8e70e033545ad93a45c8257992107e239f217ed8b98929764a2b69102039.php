<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_2852fcf81bace44c957ad3e7aadf5128cfc009fe63a668e56219d62ef8a58a7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcb528bdc4f4feb753b1b508684b51f31309e7fd9c118ed5ca0af5f1ce753c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb528bdc4f4feb753b1b508684b51f31309e7fd9c118ed5ca0af5f1ce753c5d->enter($__internal_dcb528bdc4f4feb753b1b508684b51f31309e7fd9c118ed5ca0af5f1ce753c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_acc248b7a9da8b669782b3a9693c15f234e171a47d8d8bdf649c011836a58ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc248b7a9da8b669782b3a9693c15f234e171a47d8d8bdf649c011836a58ab6->enter($__internal_acc248b7a9da8b669782b3a9693c15f234e171a47d8d8bdf649c011836a58ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dcb528bdc4f4feb753b1b508684b51f31309e7fd9c118ed5ca0af5f1ce753c5d->leave($__internal_dcb528bdc4f4feb753b1b508684b51f31309e7fd9c118ed5ca0af5f1ce753c5d_prof);

        
        $__internal_acc248b7a9da8b669782b3a9693c15f234e171a47d8d8bdf649c011836a58ab6->leave($__internal_acc248b7a9da8b669782b3a9693c15f234e171a47d8d8bdf649c011836a58ab6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_22e708a7ad1ae19c1544eeebaa37ff74a794ae77a0044beefdc4af01b0bb1d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e708a7ad1ae19c1544eeebaa37ff74a794ae77a0044beefdc4af01b0bb1d5d->enter($__internal_22e708a7ad1ae19c1544eeebaa37ff74a794ae77a0044beefdc4af01b0bb1d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_690e3feba8b243dd8ac10087f689d537dd7a73cdaf74ef7b192af8ed9b556d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690e3feba8b243dd8ac10087f689d537dd7a73cdaf74ef7b192af8ed9b556d87->enter($__internal_690e3feba8b243dd8ac10087f689d537dd7a73cdaf74ef7b192af8ed9b556d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_690e3feba8b243dd8ac10087f689d537dd7a73cdaf74ef7b192af8ed9b556d87->leave($__internal_690e3feba8b243dd8ac10087f689d537dd7a73cdaf74ef7b192af8ed9b556d87_prof);

        
        $__internal_22e708a7ad1ae19c1544eeebaa37ff74a794ae77a0044beefdc4af01b0bb1d5d->leave($__internal_22e708a7ad1ae19c1544eeebaa37ff74a794ae77a0044beefdc4af01b0bb1d5d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9e6be1c511b586861db61402ada4d35f6685a08cc0e00255a957fe7a82e6e170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6be1c511b586861db61402ada4d35f6685a08cc0e00255a957fe7a82e6e170->enter($__internal_9e6be1c511b586861db61402ada4d35f6685a08cc0e00255a957fe7a82e6e170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7a29a9e8d7c198fbeb1c9751a649befc32c89e1936090bfa43ca532a466a62e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a29a9e8d7c198fbeb1c9751a649befc32c89e1936090bfa43ca532a466a62e7->enter($__internal_7a29a9e8d7c198fbeb1c9751a649befc32c89e1936090bfa43ca532a466a62e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7a29a9e8d7c198fbeb1c9751a649befc32c89e1936090bfa43ca532a466a62e7->leave($__internal_7a29a9e8d7c198fbeb1c9751a649befc32c89e1936090bfa43ca532a466a62e7_prof);

        
        $__internal_9e6be1c511b586861db61402ada4d35f6685a08cc0e00255a957fe7a82e6e170->leave($__internal_9e6be1c511b586861db61402ada4d35f6685a08cc0e00255a957fe7a82e6e170_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4f544ea1be32c6eac9fa4e55d27b423937157d94c84a51d63b41acd84fd74943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f544ea1be32c6eac9fa4e55d27b423937157d94c84a51d63b41acd84fd74943->enter($__internal_4f544ea1be32c6eac9fa4e55d27b423937157d94c84a51d63b41acd84fd74943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_149dba83fabe7d4272cec5b55f875ae5590cd5eb2295b48735a9ca9db62912d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149dba83fabe7d4272cec5b55f875ae5590cd5eb2295b48735a9ca9db62912d9->enter($__internal_149dba83fabe7d4272cec5b55f875ae5590cd5eb2295b48735a9ca9db62912d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_149dba83fabe7d4272cec5b55f875ae5590cd5eb2295b48735a9ca9db62912d9->leave($__internal_149dba83fabe7d4272cec5b55f875ae5590cd5eb2295b48735a9ca9db62912d9_prof);

        
        $__internal_4f544ea1be32c6eac9fa4e55d27b423937157d94c84a51d63b41acd84fd74943->leave($__internal_4f544ea1be32c6eac9fa4e55d27b423937157d94c84a51d63b41acd84fd74943_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}

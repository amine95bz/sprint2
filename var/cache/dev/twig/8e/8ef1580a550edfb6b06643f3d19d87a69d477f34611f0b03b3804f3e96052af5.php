<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_73131677b958473c4a9a1fc4dba1d761a759e1098b7b9d9c5cef22c4bf8fd032 extends Twig_Template
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
        $__internal_cd04edc2d2e5f4190e126e69b075fdcb2fd8be305448f8fc70bb314935eb4be8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd04edc2d2e5f4190e126e69b075fdcb2fd8be305448f8fc70bb314935eb4be8->enter($__internal_cd04edc2d2e5f4190e126e69b075fdcb2fd8be305448f8fc70bb314935eb4be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_ff63a56315f09c5f78354f776dc613cc5ebe268609f56a84b2ffdaf39037ce0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff63a56315f09c5f78354f776dc613cc5ebe268609f56a84b2ffdaf39037ce0f->enter($__internal_ff63a56315f09c5f78354f776dc613cc5ebe268609f56a84b2ffdaf39037ce0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cd04edc2d2e5f4190e126e69b075fdcb2fd8be305448f8fc70bb314935eb4be8->leave($__internal_cd04edc2d2e5f4190e126e69b075fdcb2fd8be305448f8fc70bb314935eb4be8_prof);

        
        $__internal_ff63a56315f09c5f78354f776dc613cc5ebe268609f56a84b2ffdaf39037ce0f->leave($__internal_ff63a56315f09c5f78354f776dc613cc5ebe268609f56a84b2ffdaf39037ce0f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_feef59da9ae857a141d89fb89022d5080e0ff3d3eb98ae3d4ac0eaf46f7f6d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feef59da9ae857a141d89fb89022d5080e0ff3d3eb98ae3d4ac0eaf46f7f6d0f->enter($__internal_feef59da9ae857a141d89fb89022d5080e0ff3d3eb98ae3d4ac0eaf46f7f6d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4afa37060cf4080bbc25a42d240af62039474f6604da2613ad56f17826098044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afa37060cf4080bbc25a42d240af62039474f6604da2613ad56f17826098044->enter($__internal_4afa37060cf4080bbc25a42d240af62039474f6604da2613ad56f17826098044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_4afa37060cf4080bbc25a42d240af62039474f6604da2613ad56f17826098044->leave($__internal_4afa37060cf4080bbc25a42d240af62039474f6604da2613ad56f17826098044_prof);

        
        $__internal_feef59da9ae857a141d89fb89022d5080e0ff3d3eb98ae3d4ac0eaf46f7f6d0f->leave($__internal_feef59da9ae857a141d89fb89022d5080e0ff3d3eb98ae3d4ac0eaf46f7f6d0f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6b916b857a541c6d84c093074d9db2c6d7af1f0085ffa63caf6806a8f9153b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b916b857a541c6d84c093074d9db2c6d7af1f0085ffa63caf6806a8f9153b22->enter($__internal_6b916b857a541c6d84c093074d9db2c6d7af1f0085ffa63caf6806a8f9153b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_eb082b8aa982dbec20a6032d16fe21cdc4800cf5413d7946f36a2cc08031a993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb082b8aa982dbec20a6032d16fe21cdc4800cf5413d7946f36a2cc08031a993->enter($__internal_eb082b8aa982dbec20a6032d16fe21cdc4800cf5413d7946f36a2cc08031a993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_eb082b8aa982dbec20a6032d16fe21cdc4800cf5413d7946f36a2cc08031a993->leave($__internal_eb082b8aa982dbec20a6032d16fe21cdc4800cf5413d7946f36a2cc08031a993_prof);

        
        $__internal_6b916b857a541c6d84c093074d9db2c6d7af1f0085ffa63caf6806a8f9153b22->leave($__internal_6b916b857a541c6d84c093074d9db2c6d7af1f0085ffa63caf6806a8f9153b22_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5caca29476036f2d28ac287a8e1130a8f14e20c3120c779efd3ef7562174eed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5caca29476036f2d28ac287a8e1130a8f14e20c3120c779efd3ef7562174eed9->enter($__internal_5caca29476036f2d28ac287a8e1130a8f14e20c3120c779efd3ef7562174eed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f198d2e004e31406cec2047ad81526c7c4d9a532f71b5a3b881b6483863e7741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f198d2e004e31406cec2047ad81526c7c4d9a532f71b5a3b881b6483863e7741->enter($__internal_f198d2e004e31406cec2047ad81526c7c4d9a532f71b5a3b881b6483863e7741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f198d2e004e31406cec2047ad81526c7c4d9a532f71b5a3b881b6483863e7741->leave($__internal_f198d2e004e31406cec2047ad81526c7c4d9a532f71b5a3b881b6483863e7741_prof);

        
        $__internal_5caca29476036f2d28ac287a8e1130a8f14e20c3120c779efd3ef7562174eed9->leave($__internal_5caca29476036f2d28ac287a8e1130a8f14e20c3120c779efd3ef7562174eed9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}

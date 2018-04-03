<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_5df10bae75a4d8f5b8e4cfdc98a4139ecc84ccd24eba53f497d7d3b3a6e97b0e extends Twig_Template
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
        $__internal_fdee4b89aca49c03b8b237ba1ae2377f13d03291c29112fe38666b56d24dd6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdee4b89aca49c03b8b237ba1ae2377f13d03291c29112fe38666b56d24dd6bb->enter($__internal_fdee4b89aca49c03b8b237ba1ae2377f13d03291c29112fe38666b56d24dd6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_62817622ea7e4d197e58aeda71af86a7386314a7274674f3b93d408d76562dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62817622ea7e4d197e58aeda71af86a7386314a7274674f3b93d408d76562dac->enter($__internal_62817622ea7e4d197e58aeda71af86a7386314a7274674f3b93d408d76562dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fdee4b89aca49c03b8b237ba1ae2377f13d03291c29112fe38666b56d24dd6bb->leave($__internal_fdee4b89aca49c03b8b237ba1ae2377f13d03291c29112fe38666b56d24dd6bb_prof);

        
        $__internal_62817622ea7e4d197e58aeda71af86a7386314a7274674f3b93d408d76562dac->leave($__internal_62817622ea7e4d197e58aeda71af86a7386314a7274674f3b93d408d76562dac_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d6dbc793fa77641ed62802968418b5aabac87e792a613de4887b6a420bee2c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6dbc793fa77641ed62802968418b5aabac87e792a613de4887b6a420bee2c60->enter($__internal_d6dbc793fa77641ed62802968418b5aabac87e792a613de4887b6a420bee2c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_85cd013a7ef9830b043c6a814b155e7b91fcdc0a2b0459a0ad16f1e030909643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cd013a7ef9830b043c6a814b155e7b91fcdc0a2b0459a0ad16f1e030909643->enter($__internal_85cd013a7ef9830b043c6a814b155e7b91fcdc0a2b0459a0ad16f1e030909643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_85cd013a7ef9830b043c6a814b155e7b91fcdc0a2b0459a0ad16f1e030909643->leave($__internal_85cd013a7ef9830b043c6a814b155e7b91fcdc0a2b0459a0ad16f1e030909643_prof);

        
        $__internal_d6dbc793fa77641ed62802968418b5aabac87e792a613de4887b6a420bee2c60->leave($__internal_d6dbc793fa77641ed62802968418b5aabac87e792a613de4887b6a420bee2c60_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_90fb833a585c99174630aeb4eed5ca39ef5bb4b28fafcc1f5a474da98ac13e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90fb833a585c99174630aeb4eed5ca39ef5bb4b28fafcc1f5a474da98ac13e47->enter($__internal_90fb833a585c99174630aeb4eed5ca39ef5bb4b28fafcc1f5a474da98ac13e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b5dc35ae3bb9b0bde1244fa19c0f580ad4aac7014477191348f6e7d1775fd117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dc35ae3bb9b0bde1244fa19c0f580ad4aac7014477191348f6e7d1775fd117->enter($__internal_b5dc35ae3bb9b0bde1244fa19c0f580ad4aac7014477191348f6e7d1775fd117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b5dc35ae3bb9b0bde1244fa19c0f580ad4aac7014477191348f6e7d1775fd117->leave($__internal_b5dc35ae3bb9b0bde1244fa19c0f580ad4aac7014477191348f6e7d1775fd117_prof);

        
        $__internal_90fb833a585c99174630aeb4eed5ca39ef5bb4b28fafcc1f5a474da98ac13e47->leave($__internal_90fb833a585c99174630aeb4eed5ca39ef5bb4b28fafcc1f5a474da98ac13e47_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0d2f3a6b70f2692d07661de66deba8d44eebc18520d7747483e22b2e3563da38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2f3a6b70f2692d07661de66deba8d44eebc18520d7747483e22b2e3563da38->enter($__internal_0d2f3a6b70f2692d07661de66deba8d44eebc18520d7747483e22b2e3563da38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e9144c41c6552d85dc786d882d370b2280c6e27d7f8a3536d38db0c520857d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9144c41c6552d85dc786d882d370b2280c6e27d7f8a3536d38db0c520857d9c->enter($__internal_e9144c41c6552d85dc786d882d370b2280c6e27d7f8a3536d38db0c520857d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e9144c41c6552d85dc786d882d370b2280c6e27d7f8a3536d38db0c520857d9c->leave($__internal_e9144c41c6552d85dc786d882d370b2280c6e27d7f8a3536d38db0c520857d9c_prof);

        
        $__internal_0d2f3a6b70f2692d07661de66deba8d44eebc18520d7747483e22b2e3563da38->leave($__internal_0d2f3a6b70f2692d07661de66deba8d44eebc18520d7747483e22b2e3563da38_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}

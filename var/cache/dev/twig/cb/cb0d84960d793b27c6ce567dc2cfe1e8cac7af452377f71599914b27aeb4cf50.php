<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_aa4138cc0284e49baf2724a009ba8610ae6b75591093ba70d7adee077df64ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_0017ff21dbdb53d0d55ce23495a5b65609ab77d52a22ffdc9ed7f54c417849d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0017ff21dbdb53d0d55ce23495a5b65609ab77d52a22ffdc9ed7f54c417849d7->enter($__internal_0017ff21dbdb53d0d55ce23495a5b65609ab77d52a22ffdc9ed7f54c417849d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_5bed7dc1bc3574ff566dd5c0d41bc804982b99935efd27aaeb7121b857baaf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bed7dc1bc3574ff566dd5c0d41bc804982b99935efd27aaeb7121b857baaf2a->enter($__internal_5bed7dc1bc3574ff566dd5c0d41bc804982b99935efd27aaeb7121b857baaf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0017ff21dbdb53d0d55ce23495a5b65609ab77d52a22ffdc9ed7f54c417849d7->leave($__internal_0017ff21dbdb53d0d55ce23495a5b65609ab77d52a22ffdc9ed7f54c417849d7_prof);

        
        $__internal_5bed7dc1bc3574ff566dd5c0d41bc804982b99935efd27aaeb7121b857baaf2a->leave($__internal_5bed7dc1bc3574ff566dd5c0d41bc804982b99935efd27aaeb7121b857baaf2a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0b071b77651d9d898944252b775013ab2fc362b991669c702b8984642a98044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b071b77651d9d898944252b775013ab2fc362b991669c702b8984642a98044->enter($__internal_d0b071b77651d9d898944252b775013ab2fc362b991669c702b8984642a98044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_11e4e3923bb3a6060de6debaf6aa3b52abafa4164b52acb9e94dfe962429b092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e4e3923bb3a6060de6debaf6aa3b52abafa4164b52acb9e94dfe962429b092->enter($__internal_11e4e3923bb3a6060de6debaf6aa3b52abafa4164b52acb9e94dfe962429b092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_11e4e3923bb3a6060de6debaf6aa3b52abafa4164b52acb9e94dfe962429b092->leave($__internal_11e4e3923bb3a6060de6debaf6aa3b52abafa4164b52acb9e94dfe962429b092_prof);

        
        $__internal_d0b071b77651d9d898944252b775013ab2fc362b991669c702b8984642a98044->leave($__internal_d0b071b77651d9d898944252b775013ab2fc362b991669c702b8984642a98044_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}

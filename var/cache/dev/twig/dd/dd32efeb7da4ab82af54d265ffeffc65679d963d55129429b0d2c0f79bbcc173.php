<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_4c0ea9e65a545ba4ec24350eec1dc9d0dff6ad6f65c75d061de07391cb72e82a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_e6d9982ce2a23458fad81ff27e939be1258f97dc83ba048823facb9c6bf85b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d9982ce2a23458fad81ff27e939be1258f97dc83ba048823facb9c6bf85b42->enter($__internal_e6d9982ce2a23458fad81ff27e939be1258f97dc83ba048823facb9c6bf85b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_535ddd9e0583fbd11a8adffdb3e1cea1b4c2de52f3007a76a5e9ef990e297885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535ddd9e0583fbd11a8adffdb3e1cea1b4c2de52f3007a76a5e9ef990e297885->enter($__internal_535ddd9e0583fbd11a8adffdb3e1cea1b4c2de52f3007a76a5e9ef990e297885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6d9982ce2a23458fad81ff27e939be1258f97dc83ba048823facb9c6bf85b42->leave($__internal_e6d9982ce2a23458fad81ff27e939be1258f97dc83ba048823facb9c6bf85b42_prof);

        
        $__internal_535ddd9e0583fbd11a8adffdb3e1cea1b4c2de52f3007a76a5e9ef990e297885->leave($__internal_535ddd9e0583fbd11a8adffdb3e1cea1b4c2de52f3007a76a5e9ef990e297885_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f9d5441347d1c018f7f5936b3c93daf90a973d8dcbe3fea5a82d69ba2913c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9d5441347d1c018f7f5936b3c93daf90a973d8dcbe3fea5a82d69ba2913c96->enter($__internal_3f9d5441347d1c018f7f5936b3c93daf90a973d8dcbe3fea5a82d69ba2913c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bff42b57663734d44ad11cc28540799148ac32aa901a0edb021503a500fa4ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff42b57663734d44ad11cc28540799148ac32aa901a0edb021503a500fa4ffb->enter($__internal_bff42b57663734d44ad11cc28540799148ac32aa901a0edb021503a500fa4ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_bff42b57663734d44ad11cc28540799148ac32aa901a0edb021503a500fa4ffb->leave($__internal_bff42b57663734d44ad11cc28540799148ac32aa901a0edb021503a500fa4ffb_prof);

        
        $__internal_3f9d5441347d1c018f7f5936b3c93daf90a973d8dcbe3fea5a82d69ba2913c96->leave($__internal_3f9d5441347d1c018f7f5936b3c93daf90a973d8dcbe3fea5a82d69ba2913c96_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}

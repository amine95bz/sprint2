<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5dfd07003a92fcb91b688cdae849a9d47ab6c6db3ae6e063f0549dd64b38e3a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_d41cdf2eea3043f8b0354ba07c301e08e7c6e07f8760ce9761f6cb7c5c16b784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41cdf2eea3043f8b0354ba07c301e08e7c6e07f8760ce9761f6cb7c5c16b784->enter($__internal_d41cdf2eea3043f8b0354ba07c301e08e7c6e07f8760ce9761f6cb7c5c16b784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_d7d2aa5d5a2429adb32eef783708a7ceca18941504ca698745b142c86aa4796b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d2aa5d5a2429adb32eef783708a7ceca18941504ca698745b142c86aa4796b->enter($__internal_d7d2aa5d5a2429adb32eef783708a7ceca18941504ca698745b142c86aa4796b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41cdf2eea3043f8b0354ba07c301e08e7c6e07f8760ce9761f6cb7c5c16b784->leave($__internal_d41cdf2eea3043f8b0354ba07c301e08e7c6e07f8760ce9761f6cb7c5c16b784_prof);

        
        $__internal_d7d2aa5d5a2429adb32eef783708a7ceca18941504ca698745b142c86aa4796b->leave($__internal_d7d2aa5d5a2429adb32eef783708a7ceca18941504ca698745b142c86aa4796b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1426245918c80dde759b3be939da92e36cf4127e03aa7938efd1e0155b8748d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1426245918c80dde759b3be939da92e36cf4127e03aa7938efd1e0155b8748d5->enter($__internal_1426245918c80dde759b3be939da92e36cf4127e03aa7938efd1e0155b8748d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ee8a4f21184bc5007db64edd3c85111be8a920ad863248caff78c2be0d7ca42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8a4f21184bc5007db64edd3c85111be8a920ad863248caff78c2be0d7ca42c->enter($__internal_ee8a4f21184bc5007db64edd3c85111be8a920ad863248caff78c2be0d7ca42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_ee8a4f21184bc5007db64edd3c85111be8a920ad863248caff78c2be0d7ca42c->leave($__internal_ee8a4f21184bc5007db64edd3c85111be8a920ad863248caff78c2be0d7ca42c_prof);

        
        $__internal_1426245918c80dde759b3be939da92e36cf4127e03aa7938efd1e0155b8748d5->leave($__internal_1426245918c80dde759b3be939da92e36cf4127e03aa7938efd1e0155b8748d5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}

<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_949c6db43035da21050db8890a5a242787e70444486f04b42c60c2417402f879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_3777a8423951ca28171e5d80c4cd8b6d245c91e598d71e5588f17efb095dcbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3777a8423951ca28171e5d80c4cd8b6d245c91e598d71e5588f17efb095dcbc5->enter($__internal_3777a8423951ca28171e5d80c4cd8b6d245c91e598d71e5588f17efb095dcbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_a8335343b3582edea0a57c73973608f6e8bc0f323e95bb4cc45baa5c7f09209c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8335343b3582edea0a57c73973608f6e8bc0f323e95bb4cc45baa5c7f09209c->enter($__internal_a8335343b3582edea0a57c73973608f6e8bc0f323e95bb4cc45baa5c7f09209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3777a8423951ca28171e5d80c4cd8b6d245c91e598d71e5588f17efb095dcbc5->leave($__internal_3777a8423951ca28171e5d80c4cd8b6d245c91e598d71e5588f17efb095dcbc5_prof);

        
        $__internal_a8335343b3582edea0a57c73973608f6e8bc0f323e95bb4cc45baa5c7f09209c->leave($__internal_a8335343b3582edea0a57c73973608f6e8bc0f323e95bb4cc45baa5c7f09209c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_125108a90521b498c4ecf4506121c9fff2aa899602e1a9455b6cf6aa4162410d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125108a90521b498c4ecf4506121c9fff2aa899602e1a9455b6cf6aa4162410d->enter($__internal_125108a90521b498c4ecf4506121c9fff2aa899602e1a9455b6cf6aa4162410d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_016f5aee6b1d16a981bada93b282197e344db34efe05ae1d43df54f9a14b888d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016f5aee6b1d16a981bada93b282197e344db34efe05ae1d43df54f9a14b888d->enter($__internal_016f5aee6b1d16a981bada93b282197e344db34efe05ae1d43df54f9a14b888d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_016f5aee6b1d16a981bada93b282197e344db34efe05ae1d43df54f9a14b888d->leave($__internal_016f5aee6b1d16a981bada93b282197e344db34efe05ae1d43df54f9a14b888d_prof);

        
        $__internal_125108a90521b498c4ecf4506121c9fff2aa899602e1a9455b6cf6aa4162410d->leave($__internal_125108a90521b498c4ecf4506121c9fff2aa899602e1a9455b6cf6aa4162410d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}

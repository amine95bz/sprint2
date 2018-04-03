<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5c359386d10922da4b1c698a5e0415b34d7fa3942220f59727cc760fac09a9cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_7dede9089fdab68b3f8cb56f689229b6a71329747e50dc013396cb8d74e16b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dede9089fdab68b3f8cb56f689229b6a71329747e50dc013396cb8d74e16b15->enter($__internal_7dede9089fdab68b3f8cb56f689229b6a71329747e50dc013396cb8d74e16b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_e16e7b9b5202be1eba69e8059170f4188d03f0060fbe75eece3a51537fdad31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16e7b9b5202be1eba69e8059170f4188d03f0060fbe75eece3a51537fdad31d->enter($__internal_e16e7b9b5202be1eba69e8059170f4188d03f0060fbe75eece3a51537fdad31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dede9089fdab68b3f8cb56f689229b6a71329747e50dc013396cb8d74e16b15->leave($__internal_7dede9089fdab68b3f8cb56f689229b6a71329747e50dc013396cb8d74e16b15_prof);

        
        $__internal_e16e7b9b5202be1eba69e8059170f4188d03f0060fbe75eece3a51537fdad31d->leave($__internal_e16e7b9b5202be1eba69e8059170f4188d03f0060fbe75eece3a51537fdad31d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40e07c6a33a3550ba398c9c39395ea970ef2f070a2de133670c3183546a1d44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e07c6a33a3550ba398c9c39395ea970ef2f070a2de133670c3183546a1d44b->enter($__internal_40e07c6a33a3550ba398c9c39395ea970ef2f070a2de133670c3183546a1d44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_960e4810f49281594e8ff8de8e9390a6716a8a43b2648f8933529418cefb5041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960e4810f49281594e8ff8de8e9390a6716a8a43b2648f8933529418cefb5041->enter($__internal_960e4810f49281594e8ff8de8e9390a6716a8a43b2648f8933529418cefb5041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_960e4810f49281594e8ff8de8e9390a6716a8a43b2648f8933529418cefb5041->leave($__internal_960e4810f49281594e8ff8de8e9390a6716a8a43b2648f8933529418cefb5041_prof);

        
        $__internal_40e07c6a33a3550ba398c9c39395ea970ef2f070a2de133670c3183546a1d44b->leave($__internal_40e07c6a33a3550ba398c9c39395ea970ef2f070a2de133670c3183546a1d44b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}

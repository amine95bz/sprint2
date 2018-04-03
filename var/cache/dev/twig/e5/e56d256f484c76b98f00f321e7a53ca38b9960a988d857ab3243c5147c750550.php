<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_4ee01a4f25b96ff2ee39239a675c216b5167a8c4c594031827a66f98b0e20f1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_21ec37129bd4d5999ad8becf3704f19e5f12a631d7020b141153acec590600f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ec37129bd4d5999ad8becf3704f19e5f12a631d7020b141153acec590600f5->enter($__internal_21ec37129bd4d5999ad8becf3704f19e5f12a631d7020b141153acec590600f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_c7c9a7f77ce652a60dd4af14bbb2f313caa9d76330e35a4be5eb21f4a26c1cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c9a7f77ce652a60dd4af14bbb2f313caa9d76330e35a4be5eb21f4a26c1cac->enter($__internal_c7c9a7f77ce652a60dd4af14bbb2f313caa9d76330e35a4be5eb21f4a26c1cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21ec37129bd4d5999ad8becf3704f19e5f12a631d7020b141153acec590600f5->leave($__internal_21ec37129bd4d5999ad8becf3704f19e5f12a631d7020b141153acec590600f5_prof);

        
        $__internal_c7c9a7f77ce652a60dd4af14bbb2f313caa9d76330e35a4be5eb21f4a26c1cac->leave($__internal_c7c9a7f77ce652a60dd4af14bbb2f313caa9d76330e35a4be5eb21f4a26c1cac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8d87781b6107bd55b369a1e00da05aff0fc159cc019390768fe6a4b7efa0a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d87781b6107bd55b369a1e00da05aff0fc159cc019390768fe6a4b7efa0a9a->enter($__internal_f8d87781b6107bd55b369a1e00da05aff0fc159cc019390768fe6a4b7efa0a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7500be84b67f1340cc165c695b27b9893bc13ab2ae6fe0c8978c776d5c4625c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7500be84b67f1340cc165c695b27b9893bc13ab2ae6fe0c8978c776d5c4625c9->enter($__internal_7500be84b67f1340cc165c695b27b9893bc13ab2ae6fe0c8978c776d5c4625c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_7500be84b67f1340cc165c695b27b9893bc13ab2ae6fe0c8978c776d5c4625c9->leave($__internal_7500be84b67f1340cc165c695b27b9893bc13ab2ae6fe0c8978c776d5c4625c9_prof);

        
        $__internal_f8d87781b6107bd55b369a1e00da05aff0fc159cc019390768fe6a4b7efa0a9a->leave($__internal_f8d87781b6107bd55b369a1e00da05aff0fc159cc019390768fe6a4b7efa0a9a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}

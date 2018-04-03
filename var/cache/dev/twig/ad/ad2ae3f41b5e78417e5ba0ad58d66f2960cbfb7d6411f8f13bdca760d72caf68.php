<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_7002e88c4e7dc8cc55a7e16d91f7b9e1a0a4c0b6ee167aa868a2e747f08d59e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_53f9f5260295bad218e42821f922d9e9c2f69569fd285c74b005f7a70ced63f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f9f5260295bad218e42821f922d9e9c2f69569fd285c74b005f7a70ced63f5->enter($__internal_53f9f5260295bad218e42821f922d9e9c2f69569fd285c74b005f7a70ced63f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_abfa11f0afbf547e0c1eaa0590b2686f5bb022a12089eda63eb300ab3020569f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfa11f0afbf547e0c1eaa0590b2686f5bb022a12089eda63eb300ab3020569f->enter($__internal_abfa11f0afbf547e0c1eaa0590b2686f5bb022a12089eda63eb300ab3020569f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f9f5260295bad218e42821f922d9e9c2f69569fd285c74b005f7a70ced63f5->leave($__internal_53f9f5260295bad218e42821f922d9e9c2f69569fd285c74b005f7a70ced63f5_prof);

        
        $__internal_abfa11f0afbf547e0c1eaa0590b2686f5bb022a12089eda63eb300ab3020569f->leave($__internal_abfa11f0afbf547e0c1eaa0590b2686f5bb022a12089eda63eb300ab3020569f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_216d4bad0f53e21a1e1d70007685b94aa784907f70c5399dfd5b93188852b6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216d4bad0f53e21a1e1d70007685b94aa784907f70c5399dfd5b93188852b6ba->enter($__internal_216d4bad0f53e21a1e1d70007685b94aa784907f70c5399dfd5b93188852b6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1c2a9c0f5514e07ebd29bb41b6ddd5c638219c50b303cc15165a7e8269aa935e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2a9c0f5514e07ebd29bb41b6ddd5c638219c50b303cc15165a7e8269aa935e->enter($__internal_1c2a9c0f5514e07ebd29bb41b6ddd5c638219c50b303cc15165a7e8269aa935e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1c2a9c0f5514e07ebd29bb41b6ddd5c638219c50b303cc15165a7e8269aa935e->leave($__internal_1c2a9c0f5514e07ebd29bb41b6ddd5c638219c50b303cc15165a7e8269aa935e_prof);

        
        $__internal_216d4bad0f53e21a1e1d70007685b94aa784907f70c5399dfd5b93188852b6ba->leave($__internal_216d4bad0f53e21a1e1d70007685b94aa784907f70c5399dfd5b93188852b6ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}

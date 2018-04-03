<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_0e81b7a2cf66589b48fd353cafcc1d2be6aa545eb6538750df660f9b4f961d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_71e469c183963c81291f2244ed65168263405dc189a640a7bc94f96d53478a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e469c183963c81291f2244ed65168263405dc189a640a7bc94f96d53478a0f->enter($__internal_71e469c183963c81291f2244ed65168263405dc189a640a7bc94f96d53478a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_fb9568fc4c12c8a1f3c020c876fddd57710f7f85e92d9a8689c2a97400a2bb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9568fc4c12c8a1f3c020c876fddd57710f7f85e92d9a8689c2a97400a2bb34->enter($__internal_fb9568fc4c12c8a1f3c020c876fddd57710f7f85e92d9a8689c2a97400a2bb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e469c183963c81291f2244ed65168263405dc189a640a7bc94f96d53478a0f->leave($__internal_71e469c183963c81291f2244ed65168263405dc189a640a7bc94f96d53478a0f_prof);

        
        $__internal_fb9568fc4c12c8a1f3c020c876fddd57710f7f85e92d9a8689c2a97400a2bb34->leave($__internal_fb9568fc4c12c8a1f3c020c876fddd57710f7f85e92d9a8689c2a97400a2bb34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c553947f2d23f556dba80af5fe88710458a3b9fc702470fb169c84fd9094e978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c553947f2d23f556dba80af5fe88710458a3b9fc702470fb169c84fd9094e978->enter($__internal_c553947f2d23f556dba80af5fe88710458a3b9fc702470fb169c84fd9094e978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c562201e768cbcf2b02f4ac20f5508746b9cf63c8666ffcc542c89e12352037b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c562201e768cbcf2b02f4ac20f5508746b9cf63c8666ffcc542c89e12352037b->enter($__internal_c562201e768cbcf2b02f4ac20f5508746b9cf63c8666ffcc542c89e12352037b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_c562201e768cbcf2b02f4ac20f5508746b9cf63c8666ffcc542c89e12352037b->leave($__internal_c562201e768cbcf2b02f4ac20f5508746b9cf63c8666ffcc542c89e12352037b_prof);

        
        $__internal_c553947f2d23f556dba80af5fe88710458a3b9fc702470fb169c84fd9094e978->leave($__internal_c553947f2d23f556dba80af5fe88710458a3b9fc702470fb169c84fd9094e978_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}

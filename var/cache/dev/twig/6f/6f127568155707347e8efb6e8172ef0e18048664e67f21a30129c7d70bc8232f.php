<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_9d1c9610f663e05de541bd3b1f06a9292f387c21ca5fe209f9f7594874c32715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_e8ff4f6420dd9ef492fcc33f61c03111e5b6a1af3c5c54ca0f8b4277b166c0d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ff4f6420dd9ef492fcc33f61c03111e5b6a1af3c5c54ca0f8b4277b166c0d6->enter($__internal_e8ff4f6420dd9ef492fcc33f61c03111e5b6a1af3c5c54ca0f8b4277b166c0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_d4218d4dd992cbb4793bf5afcba51ac790d4b8336709916ea45f35ea80b7b8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4218d4dd992cbb4793bf5afcba51ac790d4b8336709916ea45f35ea80b7b8f3->enter($__internal_d4218d4dd992cbb4793bf5afcba51ac790d4b8336709916ea45f35ea80b7b8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8ff4f6420dd9ef492fcc33f61c03111e5b6a1af3c5c54ca0f8b4277b166c0d6->leave($__internal_e8ff4f6420dd9ef492fcc33f61c03111e5b6a1af3c5c54ca0f8b4277b166c0d6_prof);

        
        $__internal_d4218d4dd992cbb4793bf5afcba51ac790d4b8336709916ea45f35ea80b7b8f3->leave($__internal_d4218d4dd992cbb4793bf5afcba51ac790d4b8336709916ea45f35ea80b7b8f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1127c8b6167519226c6daed4546d20ad2adae6f0de42262b1484cde707315756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1127c8b6167519226c6daed4546d20ad2adae6f0de42262b1484cde707315756->enter($__internal_1127c8b6167519226c6daed4546d20ad2adae6f0de42262b1484cde707315756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e77653c24867d2f2ea781939bdfccad95650e6cb84b80354cc7a1bae4017d318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77653c24867d2f2ea781939bdfccad95650e6cb84b80354cc7a1bae4017d318->enter($__internal_e77653c24867d2f2ea781939bdfccad95650e6cb84b80354cc7a1bae4017d318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e77653c24867d2f2ea781939bdfccad95650e6cb84b80354cc7a1bae4017d318->leave($__internal_e77653c24867d2f2ea781939bdfccad95650e6cb84b80354cc7a1bae4017d318_prof);

        
        $__internal_1127c8b6167519226c6daed4546d20ad2adae6f0de42262b1484cde707315756->leave($__internal_1127c8b6167519226c6daed4546d20ad2adae6f0de42262b1484cde707315756_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}

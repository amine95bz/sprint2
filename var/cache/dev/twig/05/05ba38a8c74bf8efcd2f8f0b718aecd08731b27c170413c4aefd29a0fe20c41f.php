<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f1d6269abd2ce297877521bbbaac1e0e569422c7077c75c1e4e5392401ca9974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_7df7aabe770ad5658bd1df8ec571e0febadecd6eb0b5887f1e78c4c73af11cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df7aabe770ad5658bd1df8ec571e0febadecd6eb0b5887f1e78c4c73af11cdb->enter($__internal_7df7aabe770ad5658bd1df8ec571e0febadecd6eb0b5887f1e78c4c73af11cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_67538b08f8a8966197aed7fe271ca00b576685c5e142e58f3a5c197aa3fdb02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67538b08f8a8966197aed7fe271ca00b576685c5e142e58f3a5c197aa3fdb02f->enter($__internal_67538b08f8a8966197aed7fe271ca00b576685c5e142e58f3a5c197aa3fdb02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df7aabe770ad5658bd1df8ec571e0febadecd6eb0b5887f1e78c4c73af11cdb->leave($__internal_7df7aabe770ad5658bd1df8ec571e0febadecd6eb0b5887f1e78c4c73af11cdb_prof);

        
        $__internal_67538b08f8a8966197aed7fe271ca00b576685c5e142e58f3a5c197aa3fdb02f->leave($__internal_67538b08f8a8966197aed7fe271ca00b576685c5e142e58f3a5c197aa3fdb02f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b32d8e3f5150f8b60fcdb157185842bb21134b91bc6ee21a0ad8a4dd45a3d913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32d8e3f5150f8b60fcdb157185842bb21134b91bc6ee21a0ad8a4dd45a3d913->enter($__internal_b32d8e3f5150f8b60fcdb157185842bb21134b91bc6ee21a0ad8a4dd45a3d913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9341462132ca8038c1e6f1a09b67104f7543ce1520cf66fd6beed99cecaf83cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9341462132ca8038c1e6f1a09b67104f7543ce1520cf66fd6beed99cecaf83cc->enter($__internal_9341462132ca8038c1e6f1a09b67104f7543ce1520cf66fd6beed99cecaf83cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9341462132ca8038c1e6f1a09b67104f7543ce1520cf66fd6beed99cecaf83cc->leave($__internal_9341462132ca8038c1e6f1a09b67104f7543ce1520cf66fd6beed99cecaf83cc_prof);

        
        $__internal_b32d8e3f5150f8b60fcdb157185842bb21134b91bc6ee21a0ad8a4dd45a3d913->leave($__internal_b32d8e3f5150f8b60fcdb157185842bb21134b91bc6ee21a0ad8a4dd45a3d913_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}

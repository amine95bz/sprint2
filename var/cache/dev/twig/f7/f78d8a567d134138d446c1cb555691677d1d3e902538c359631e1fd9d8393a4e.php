<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ec8e3b4337260dd07fba98884e41cbda3df81b9db5dd5d42afe5a6548a9f2a25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6d654390eb5c9939b36ead9bf4a472b61c1b2b551cd86948c60109c0446d54a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d654390eb5c9939b36ead9bf4a472b61c1b2b551cd86948c60109c0446d54a4->enter($__internal_6d654390eb5c9939b36ead9bf4a472b61c1b2b551cd86948c60109c0446d54a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_b297b49b8ded317d66daed11104ac40e0e5c297a645cd99492ffec8cc0e8091c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b297b49b8ded317d66daed11104ac40e0e5c297a645cd99492ffec8cc0e8091c->enter($__internal_b297b49b8ded317d66daed11104ac40e0e5c297a645cd99492ffec8cc0e8091c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d654390eb5c9939b36ead9bf4a472b61c1b2b551cd86948c60109c0446d54a4->leave($__internal_6d654390eb5c9939b36ead9bf4a472b61c1b2b551cd86948c60109c0446d54a4_prof);

        
        $__internal_b297b49b8ded317d66daed11104ac40e0e5c297a645cd99492ffec8cc0e8091c->leave($__internal_b297b49b8ded317d66daed11104ac40e0e5c297a645cd99492ffec8cc0e8091c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef1a374d18cdbe0d2fbcf7d3bdacf29774f5bc3021c49893acdbf34c2b32b063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef1a374d18cdbe0d2fbcf7d3bdacf29774f5bc3021c49893acdbf34c2b32b063->enter($__internal_ef1a374d18cdbe0d2fbcf7d3bdacf29774f5bc3021c49893acdbf34c2b32b063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1a6d485101ebcd4979aac503bebbfa71762759e51db96b058139166143b2d2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6d485101ebcd4979aac503bebbfa71762759e51db96b058139166143b2d2e0->enter($__internal_1a6d485101ebcd4979aac503bebbfa71762759e51db96b058139166143b2d2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1a6d485101ebcd4979aac503bebbfa71762759e51db96b058139166143b2d2e0->leave($__internal_1a6d485101ebcd4979aac503bebbfa71762759e51db96b058139166143b2d2e0_prof);

        
        $__internal_ef1a374d18cdbe0d2fbcf7d3bdacf29774f5bc3021c49893acdbf34c2b32b063->leave($__internal_ef1a374d18cdbe0d2fbcf7d3bdacf29774f5bc3021c49893acdbf34c2b32b063_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}

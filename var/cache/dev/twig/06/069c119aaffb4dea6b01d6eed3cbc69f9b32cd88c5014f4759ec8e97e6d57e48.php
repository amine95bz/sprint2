<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_48eb526192d59b3112913dd3a48b80a620500a786d4b6fdca59793cff2de7449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_eab849f2bf5cb0f5028f10a488515ecb3bcf8c30ee693fde4f3853c992057627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab849f2bf5cb0f5028f10a488515ecb3bcf8c30ee693fde4f3853c992057627->enter($__internal_eab849f2bf5cb0f5028f10a488515ecb3bcf8c30ee693fde4f3853c992057627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_8bafe1b0e313fe629e7345c3e6bf5b0a92ad58ff8e4403eab2ea743634381e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bafe1b0e313fe629e7345c3e6bf5b0a92ad58ff8e4403eab2ea743634381e5c->enter($__internal_8bafe1b0e313fe629e7345c3e6bf5b0a92ad58ff8e4403eab2ea743634381e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eab849f2bf5cb0f5028f10a488515ecb3bcf8c30ee693fde4f3853c992057627->leave($__internal_eab849f2bf5cb0f5028f10a488515ecb3bcf8c30ee693fde4f3853c992057627_prof);

        
        $__internal_8bafe1b0e313fe629e7345c3e6bf5b0a92ad58ff8e4403eab2ea743634381e5c->leave($__internal_8bafe1b0e313fe629e7345c3e6bf5b0a92ad58ff8e4403eab2ea743634381e5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_996ee95a04963105974f4f73cdbc33c7bcf4a37de107e6f2c345f24b97d614ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996ee95a04963105974f4f73cdbc33c7bcf4a37de107e6f2c345f24b97d614ae->enter($__internal_996ee95a04963105974f4f73cdbc33c7bcf4a37de107e6f2c345f24b97d614ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_480d77e32d1f8d842d42fa0e1ddc7ff40d2f1fe7d8677d110dafec8af4c8d101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480d77e32d1f8d842d42fa0e1ddc7ff40d2f1fe7d8677d110dafec8af4c8d101->enter($__internal_480d77e32d1f8d842d42fa0e1ddc7ff40d2f1fe7d8677d110dafec8af4c8d101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_480d77e32d1f8d842d42fa0e1ddc7ff40d2f1fe7d8677d110dafec8af4c8d101->leave($__internal_480d77e32d1f8d842d42fa0e1ddc7ff40d2f1fe7d8677d110dafec8af4c8d101_prof);

        
        $__internal_996ee95a04963105974f4f73cdbc33c7bcf4a37de107e6f2c345f24b97d614ae->leave($__internal_996ee95a04963105974f4f73cdbc33c7bcf4a37de107e6f2c345f24b97d614ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}

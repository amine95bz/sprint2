<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e6107c594a189d6b8ada6562ec3c829755c8935da09fd9105103934cacac9bca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_d5a288bda94d7ba2c58d449d497ccc0e1cd3494cb37ea5a334fb73510fcafe27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a288bda94d7ba2c58d449d497ccc0e1cd3494cb37ea5a334fb73510fcafe27->enter($__internal_d5a288bda94d7ba2c58d449d497ccc0e1cd3494cb37ea5a334fb73510fcafe27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_7bba5f2c8af50f2e24a12f675c87a15c7244b4a8db73b86b3a1e07b7c99e34f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bba5f2c8af50f2e24a12f675c87a15c7244b4a8db73b86b3a1e07b7c99e34f4->enter($__internal_7bba5f2c8af50f2e24a12f675c87a15c7244b4a8db73b86b3a1e07b7c99e34f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5a288bda94d7ba2c58d449d497ccc0e1cd3494cb37ea5a334fb73510fcafe27->leave($__internal_d5a288bda94d7ba2c58d449d497ccc0e1cd3494cb37ea5a334fb73510fcafe27_prof);

        
        $__internal_7bba5f2c8af50f2e24a12f675c87a15c7244b4a8db73b86b3a1e07b7c99e34f4->leave($__internal_7bba5f2c8af50f2e24a12f675c87a15c7244b4a8db73b86b3a1e07b7c99e34f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bfe661cacd6048ded903cd1772de0c1e90ec3b09fd0845b0a81eb809a86f7c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfe661cacd6048ded903cd1772de0c1e90ec3b09fd0845b0a81eb809a86f7c3->enter($__internal_1bfe661cacd6048ded903cd1772de0c1e90ec3b09fd0845b0a81eb809a86f7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7c28272950bf0d39740faa7d7096a70991fcca750a42c42233249e3b0fb9ff79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c28272950bf0d39740faa7d7096a70991fcca750a42c42233249e3b0fb9ff79->enter($__internal_7c28272950bf0d39740faa7d7096a70991fcca750a42c42233249e3b0fb9ff79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_7c28272950bf0d39740faa7d7096a70991fcca750a42c42233249e3b0fb9ff79->leave($__internal_7c28272950bf0d39740faa7d7096a70991fcca750a42c42233249e3b0fb9ff79_prof);

        
        $__internal_1bfe661cacd6048ded903cd1772de0c1e90ec3b09fd0845b0a81eb809a86f7c3->leave($__internal_1bfe661cacd6048ded903cd1772de0c1e90ec3b09fd0845b0a81eb809a86f7c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}

<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b7660546042f0cf4ad17d0ed89214b815241677f2cba00df07db5b26e3dd4441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_fca56725b7fb06b77812059393af14506edd69025d0d9a5c2372e6e8ec8572c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fca56725b7fb06b77812059393af14506edd69025d0d9a5c2372e6e8ec8572c3->enter($__internal_fca56725b7fb06b77812059393af14506edd69025d0d9a5c2372e6e8ec8572c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_e36a98fb83c1a886387b4195f5923ea7cfb9bec5a216c903a890b53f30d7201b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36a98fb83c1a886387b4195f5923ea7cfb9bec5a216c903a890b53f30d7201b->enter($__internal_e36a98fb83c1a886387b4195f5923ea7cfb9bec5a216c903a890b53f30d7201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fca56725b7fb06b77812059393af14506edd69025d0d9a5c2372e6e8ec8572c3->leave($__internal_fca56725b7fb06b77812059393af14506edd69025d0d9a5c2372e6e8ec8572c3_prof);

        
        $__internal_e36a98fb83c1a886387b4195f5923ea7cfb9bec5a216c903a890b53f30d7201b->leave($__internal_e36a98fb83c1a886387b4195f5923ea7cfb9bec5a216c903a890b53f30d7201b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fc971479393c2b9895a330eb3baae80b090ce2d99ab4405b3836e65eac86af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc971479393c2b9895a330eb3baae80b090ce2d99ab4405b3836e65eac86af9->enter($__internal_5fc971479393c2b9895a330eb3baae80b090ce2d99ab4405b3836e65eac86af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f7df706e4816b25867c4f5688eae8d53ae2bf6ef4ef1e48a6aad1d1dd1299714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7df706e4816b25867c4f5688eae8d53ae2bf6ef4ef1e48a6aad1d1dd1299714->enter($__internal_f7df706e4816b25867c4f5688eae8d53ae2bf6ef4ef1e48a6aad1d1dd1299714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f7df706e4816b25867c4f5688eae8d53ae2bf6ef4ef1e48a6aad1d1dd1299714->leave($__internal_f7df706e4816b25867c4f5688eae8d53ae2bf6ef4ef1e48a6aad1d1dd1299714_prof);

        
        $__internal_5fc971479393c2b9895a330eb3baae80b090ce2d99ab4405b3836e65eac86af9->leave($__internal_5fc971479393c2b9895a330eb3baae80b090ce2d99ab4405b3836e65eac86af9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}

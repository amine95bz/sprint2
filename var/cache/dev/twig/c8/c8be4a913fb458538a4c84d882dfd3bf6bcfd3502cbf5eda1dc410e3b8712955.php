<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1acfebf008b50ad1a751666aa2c5603606cb87db7727ff09bdb44dbd99dbed80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_95501a0d71c483a10461826fd644202534485ef9af2bd61c2c209df65652c6df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95501a0d71c483a10461826fd644202534485ef9af2bd61c2c209df65652c6df->enter($__internal_95501a0d71c483a10461826fd644202534485ef9af2bd61c2c209df65652c6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_b5540fe5693a27d82ae26b193aa5e2221f8e3533a2f6033e12cc6c4a5096c057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5540fe5693a27d82ae26b193aa5e2221f8e3533a2f6033e12cc6c4a5096c057->enter($__internal_b5540fe5693a27d82ae26b193aa5e2221f8e3533a2f6033e12cc6c4a5096c057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95501a0d71c483a10461826fd644202534485ef9af2bd61c2c209df65652c6df->leave($__internal_95501a0d71c483a10461826fd644202534485ef9af2bd61c2c209df65652c6df_prof);

        
        $__internal_b5540fe5693a27d82ae26b193aa5e2221f8e3533a2f6033e12cc6c4a5096c057->leave($__internal_b5540fe5693a27d82ae26b193aa5e2221f8e3533a2f6033e12cc6c4a5096c057_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d9022fa490d31476772c91bab77a848b9e2e42218bfbdeafaef6992cc383807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9022fa490d31476772c91bab77a848b9e2e42218bfbdeafaef6992cc383807->enter($__internal_5d9022fa490d31476772c91bab77a848b9e2e42218bfbdeafaef6992cc383807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_83dd70d954015052d3386ef7d5c251e5fa7d55a96fc72d7da4aee8f0a0723253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83dd70d954015052d3386ef7d5c251e5fa7d55a96fc72d7da4aee8f0a0723253->enter($__internal_83dd70d954015052d3386ef7d5c251e5fa7d55a96fc72d7da4aee8f0a0723253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_83dd70d954015052d3386ef7d5c251e5fa7d55a96fc72d7da4aee8f0a0723253->leave($__internal_83dd70d954015052d3386ef7d5c251e5fa7d55a96fc72d7da4aee8f0a0723253_prof);

        
        $__internal_5d9022fa490d31476772c91bab77a848b9e2e42218bfbdeafaef6992cc383807->leave($__internal_5d9022fa490d31476772c91bab77a848b9e2e42218bfbdeafaef6992cc383807_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}

<?php

/* ProduitBundle:Default:index.html.twig */
class __TwigTemplate_e6de65f06023ce93409ed7fd90c0894e1d1a885c480de21795bacd41271f047c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Front.html.twig", "ProduitBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78614889d51d688f666a8e2c8fafa75dd5f01ea3c07f4e24a3b57bbe04baae2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78614889d51d688f666a8e2c8fafa75dd5f01ea3c07f4e24a3b57bbe04baae2f->enter($__internal_78614889d51d688f666a8e2c8fafa75dd5f01ea3c07f4e24a3b57bbe04baae2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProduitBundle:Default:index.html.twig"));

        $__internal_b891d2b3ee49c6b074eda52c58551beb9e14ff9e98bb2960e4f4213a35c2dccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b891d2b3ee49c6b074eda52c58551beb9e14ff9e98bb2960e4f4213a35c2dccd->enter($__internal_b891d2b3ee49c6b074eda52c58551beb9e14ff9e98bb2960e4f4213a35c2dccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProduitBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78614889d51d688f666a8e2c8fafa75dd5f01ea3c07f4e24a3b57bbe04baae2f->leave($__internal_78614889d51d688f666a8e2c8fafa75dd5f01ea3c07f4e24a3b57bbe04baae2f_prof);

        
        $__internal_b891d2b3ee49c6b074eda52c58551beb9e14ff9e98bb2960e4f4213a35c2dccd->leave($__internal_b891d2b3ee49c6b074eda52c58551beb9e14ff9e98bb2960e4f4213a35c2dccd_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_671b6d121c88302a012f146283dacc952677da98e4277aec3e9890d354d804cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671b6d121c88302a012f146283dacc952677da98e4277aec3e9890d354d804cc->enter($__internal_671b6d121c88302a012f146283dacc952677da98e4277aec3e9890d354d804cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_1978cddeb6131b0a5daa77d2c4854efe7c6763fa1b1c89cfcf8752007d1cd563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1978cddeb6131b0a5daa77d2c4854efe7c6763fa1b1c89cfcf8752007d1cd563->enter($__internal_1978cddeb6131b0a5daa77d2c4854efe7c6763fa1b1c89cfcf8752007d1cd563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    ko
";
        
        $__internal_1978cddeb6131b0a5daa77d2c4854efe7c6763fa1b1c89cfcf8752007d1cd563->leave($__internal_1978cddeb6131b0a5daa77d2c4854efe7c6763fa1b1c89cfcf8752007d1cd563_prof);

        
        $__internal_671b6d121c88302a012f146283dacc952677da98e4277aec3e9890d354d804cc->leave($__internal_671b6d121c88302a012f146283dacc952677da98e4277aec3e9890d354d804cc_prof);

    }

    public function getTemplateName()
    {
        return "ProduitBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Front.html.twig' %}
{% block container %}
    ko
{% endblock %}
", "ProduitBundle:Default:index.html.twig", "C:\\wamp64\\www\\medina1\\src\\ProduitBundle/Resources/views/Default/index.html.twig");
    }
}

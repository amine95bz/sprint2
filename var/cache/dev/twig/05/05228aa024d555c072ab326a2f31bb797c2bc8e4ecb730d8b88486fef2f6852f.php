<?php

/* ProduitBundle:Default:index.html.twig */
class __TwigTemplate_e6de65f06023ce93409ed7fd90c0894e1d1a885c480de21795bacd41271f047c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b78a201af49a6916b2deb943799c79abf41bf30cc47d193f80656371d50bc8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78a201af49a6916b2deb943799c79abf41bf30cc47d193f80656371d50bc8fb->enter($__internal_b78a201af49a6916b2deb943799c79abf41bf30cc47d193f80656371d50bc8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProduitBundle:Default:index.html.twig"));

        $__internal_bf70755d4fe3805202048fd72e76704bc8498d5346ae87985f24ce66a963506e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf70755d4fe3805202048fd72e76704bc8498d5346ae87985f24ce66a963506e->enter($__internal_bf70755d4fe3805202048fd72e76704bc8498d5346ae87985f24ce66a963506e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProduitBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_b78a201af49a6916b2deb943799c79abf41bf30cc47d193f80656371d50bc8fb->leave($__internal_b78a201af49a6916b2deb943799c79abf41bf30cc47d193f80656371d50bc8fb_prof);

        
        $__internal_bf70755d4fe3805202048fd72e76704bc8498d5346ae87985f24ce66a963506e->leave($__internal_bf70755d4fe3805202048fd72e76704bc8498d5346ae87985f24ce66a963506e_prof);

    }

    public function getTemplateName()
    {
        return "ProduitBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "ProduitBundle:Default:index.html.twig", "C:\\wamp64\\www\\medina1\\src\\ProduitBundle/Resources/views/Default/index.html.twig");
    }
}

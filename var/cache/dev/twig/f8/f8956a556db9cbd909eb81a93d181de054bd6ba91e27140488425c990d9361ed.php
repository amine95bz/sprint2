<?php

/* @Base/Default/dash.html.twig */
class __TwigTemplate_c415089fd3199110c4729f66c82abb8dcec61d50adb9371e59edfc3b16d58549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Back.html.twig", "@Base/Default/dash.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "Back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5a7994d40119dbbfce53ff5d45127d180b1d4c57e6bd54e9340a87c55481c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a7994d40119dbbfce53ff5d45127d180b1d4c57e6bd54e9340a87c55481c00->enter($__internal_f5a7994d40119dbbfce53ff5d45127d180b1d4c57e6bd54e9340a87c55481c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Base/Default/dash.html.twig"));

        $__internal_0342108543b862c211d0c8ff344c16c8a15f89ca1458f42eb130ac5a0546d994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0342108543b862c211d0c8ff344c16c8a15f89ca1458f42eb130ac5a0546d994->enter($__internal_0342108543b862c211d0c8ff344c16c8a15f89ca1458f42eb130ac5a0546d994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Base/Default/dash.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5a7994d40119dbbfce53ff5d45127d180b1d4c57e6bd54e9340a87c55481c00->leave($__internal_f5a7994d40119dbbfce53ff5d45127d180b1d4c57e6bd54e9340a87c55481c00_prof);

        
        $__internal_0342108543b862c211d0c8ff344c16c8a15f89ca1458f42eb130ac5a0546d994->leave($__internal_0342108543b862c211d0c8ff344c16c8a15f89ca1458f42eb130ac5a0546d994_prof);

    }

    public function getTemplateName()
    {
        return "@Base/Default/dash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Back.html.twig' %}", "@Base/Default/dash.html.twig", "C:\\wamp64\\www\\medina1\\src\\BaseBundle\\Resources\\views\\Default\\dash.html.twig");
    }
}

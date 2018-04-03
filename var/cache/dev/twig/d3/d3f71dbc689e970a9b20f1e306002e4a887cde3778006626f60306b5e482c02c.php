<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_14bae57fee0168dc272b2f329aa2f8e855fe6bf589515a40894d1d5500cea9df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_00556fc5c178d9210bedde191435244053268582bbc85c88b4e8543c88a09874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00556fc5c178d9210bedde191435244053268582bbc85c88b4e8543c88a09874->enter($__internal_00556fc5c178d9210bedde191435244053268582bbc85c88b4e8543c88a09874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_c4508d17cda7360f61aff32972bde22b1d9a34739215465639bf3e70870e0e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4508d17cda7360f61aff32972bde22b1d9a34739215465639bf3e70870e0e6d->enter($__internal_c4508d17cda7360f61aff32972bde22b1d9a34739215465639bf3e70870e0e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00556fc5c178d9210bedde191435244053268582bbc85c88b4e8543c88a09874->leave($__internal_00556fc5c178d9210bedde191435244053268582bbc85c88b4e8543c88a09874_prof);

        
        $__internal_c4508d17cda7360f61aff32972bde22b1d9a34739215465639bf3e70870e0e6d->leave($__internal_c4508d17cda7360f61aff32972bde22b1d9a34739215465639bf3e70870e0e6d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1dda73a852e7ea775be23253a8ebf16594cf5b3f4260ec04481a672ec190528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1dda73a852e7ea775be23253a8ebf16594cf5b3f4260ec04481a672ec190528->enter($__internal_d1dda73a852e7ea775be23253a8ebf16594cf5b3f4260ec04481a672ec190528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b2967e22f938a35ff64bc91125321cfb27978fa6a7963febd4bb3eebaae6ff57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2967e22f938a35ff64bc91125321cfb27978fa6a7963febd4bb3eebaae6ff57->enter($__internal_b2967e22f938a35ff64bc91125321cfb27978fa6a7963febd4bb3eebaae6ff57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b2967e22f938a35ff64bc91125321cfb27978fa6a7963febd4bb3eebaae6ff57->leave($__internal_b2967e22f938a35ff64bc91125321cfb27978fa6a7963febd4bb3eebaae6ff57_prof);

        
        $__internal_d1dda73a852e7ea775be23253a8ebf16594cf5b3f4260ec04481a672ec190528->leave($__internal_d1dda73a852e7ea775be23253a8ebf16594cf5b3f4260ec04481a672ec190528_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}

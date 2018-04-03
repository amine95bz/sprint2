<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_8554355dbdae929f0d9f172549ecb0d0c7b201a18aef2232468c4c1160817f38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_660a0f8d211af0ca8128eb2300b14f4d16ad22de136453babcbe6ee9cec936fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660a0f8d211af0ca8128eb2300b14f4d16ad22de136453babcbe6ee9cec936fb->enter($__internal_660a0f8d211af0ca8128eb2300b14f4d16ad22de136453babcbe6ee9cec936fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_9638b8d41815ccec572deecb063324437f114b895ef74db335ba9a48715bf83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9638b8d41815ccec572deecb063324437f114b895ef74db335ba9a48715bf83c->enter($__internal_9638b8d41815ccec572deecb063324437f114b895ef74db335ba9a48715bf83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_660a0f8d211af0ca8128eb2300b14f4d16ad22de136453babcbe6ee9cec936fb->leave($__internal_660a0f8d211af0ca8128eb2300b14f4d16ad22de136453babcbe6ee9cec936fb_prof);

        
        $__internal_9638b8d41815ccec572deecb063324437f114b895ef74db335ba9a48715bf83c->leave($__internal_9638b8d41815ccec572deecb063324437f114b895ef74db335ba9a48715bf83c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd6b6e17b51a9de396af14b7add12f85742bcc36fd6887bc58ff6ef5d3568b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6b6e17b51a9de396af14b7add12f85742bcc36fd6887bc58ff6ef5d3568b8e->enter($__internal_dd6b6e17b51a9de396af14b7add12f85742bcc36fd6887bc58ff6ef5d3568b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_518ca6b357ec2abf186aecbaf1745da6062980adf1939652d17461fe18d6bc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518ca6b357ec2abf186aecbaf1745da6062980adf1939652d17461fe18d6bc54->enter($__internal_518ca6b357ec2abf186aecbaf1745da6062980adf1939652d17461fe18d6bc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_518ca6b357ec2abf186aecbaf1745da6062980adf1939652d17461fe18d6bc54->leave($__internal_518ca6b357ec2abf186aecbaf1745da6062980adf1939652d17461fe18d6bc54_prof);

        
        $__internal_dd6b6e17b51a9de396af14b7add12f85742bcc36fd6887bc58ff6ef5d3568b8e->leave($__internal_dd6b6e17b51a9de396af14b7add12f85742bcc36fd6887bc58ff6ef5d3568b8e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}

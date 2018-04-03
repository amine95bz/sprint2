<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_b4bceacedbcf26b6dc9cd0fce0bd73bec031cb447fe513f9d85ea717d9b41030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_367801bf502c18d8650bf480be7780daebd6062947214d6b6af1911309484a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367801bf502c18d8650bf480be7780daebd6062947214d6b6af1911309484a9f->enter($__internal_367801bf502c18d8650bf480be7780daebd6062947214d6b6af1911309484a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_bda1111169aecca1ddd38a9fba560f93d495286f1493a67fffa7ac3ade43aa25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda1111169aecca1ddd38a9fba560f93d495286f1493a67fffa7ac3ade43aa25->enter($__internal_bda1111169aecca1ddd38a9fba560f93d495286f1493a67fffa7ac3ade43aa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_367801bf502c18d8650bf480be7780daebd6062947214d6b6af1911309484a9f->leave($__internal_367801bf502c18d8650bf480be7780daebd6062947214d6b6af1911309484a9f_prof);

        
        $__internal_bda1111169aecca1ddd38a9fba560f93d495286f1493a67fffa7ac3ade43aa25->leave($__internal_bda1111169aecca1ddd38a9fba560f93d495286f1493a67fffa7ac3ade43aa25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_134bd2138d190f055e2172562854aa744c69d6c63f4014e20de9e1c5e5fcd50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134bd2138d190f055e2172562854aa744c69d6c63f4014e20de9e1c5e5fcd50c->enter($__internal_134bd2138d190f055e2172562854aa744c69d6c63f4014e20de9e1c5e5fcd50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b534c933830b638461a2b63f291af526b08d674eab36b583671878a27fef1bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b534c933830b638461a2b63f291af526b08d674eab36b583671878a27fef1bd3->enter($__internal_b534c933830b638461a2b63f291af526b08d674eab36b583671878a27fef1bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_b534c933830b638461a2b63f291af526b08d674eab36b583671878a27fef1bd3->leave($__internal_b534c933830b638461a2b63f291af526b08d674eab36b583671878a27fef1bd3_prof);

        
        $__internal_134bd2138d190f055e2172562854aa744c69d6c63f4014e20de9e1c5e5fcd50c->leave($__internal_134bd2138d190f055e2172562854aa744c69d6c63f4014e20de9e1c5e5fcd50c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}

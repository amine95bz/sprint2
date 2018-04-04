<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_949c6db43035da21050db8890a5a242787e70444486f04b42c60c2417402f879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_26d802310146cc8fc44ab6c6ce4d117b2ed5af266e9b890f5088bb6855925530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d802310146cc8fc44ab6c6ce4d117b2ed5af266e9b890f5088bb6855925530->enter($__internal_26d802310146cc8fc44ab6c6ce4d117b2ed5af266e9b890f5088bb6855925530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_d3b82087d30153d83b3052bc460f12d6e097d9268d2ae721a86b615901a84687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b82087d30153d83b3052bc460f12d6e097d9268d2ae721a86b615901a84687->enter($__internal_d3b82087d30153d83b3052bc460f12d6e097d9268d2ae721a86b615901a84687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26d802310146cc8fc44ab6c6ce4d117b2ed5af266e9b890f5088bb6855925530->leave($__internal_26d802310146cc8fc44ab6c6ce4d117b2ed5af266e9b890f5088bb6855925530_prof);

        
        $__internal_d3b82087d30153d83b3052bc460f12d6e097d9268d2ae721a86b615901a84687->leave($__internal_d3b82087d30153d83b3052bc460f12d6e097d9268d2ae721a86b615901a84687_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b27ae9f8cf082de8646b07dc7e77a23825958f81328fd9f7ecb9614c12f85ede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27ae9f8cf082de8646b07dc7e77a23825958f81328fd9f7ecb9614c12f85ede->enter($__internal_b27ae9f8cf082de8646b07dc7e77a23825958f81328fd9f7ecb9614c12f85ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b6cadb88ed657209bfe98c1181c6e1324db5942efd09efb42c824512bd8c66ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cadb88ed657209bfe98c1181c6e1324db5942efd09efb42c824512bd8c66ec->enter($__internal_b6cadb88ed657209bfe98c1181c6e1324db5942efd09efb42c824512bd8c66ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_b6cadb88ed657209bfe98c1181c6e1324db5942efd09efb42c824512bd8c66ec->leave($__internal_b6cadb88ed657209bfe98c1181c6e1324db5942efd09efb42c824512bd8c66ec_prof);

        
        $__internal_b27ae9f8cf082de8646b07dc7e77a23825958f81328fd9f7ecb9614c12f85ede->leave($__internal_b27ae9f8cf082de8646b07dc7e77a23825958f81328fd9f7ecb9614c12f85ede_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}

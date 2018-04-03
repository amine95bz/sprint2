<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3cf07b3540b740ac919bd8306c042c1230d6ddf535736c922c5d6b397fa57510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_71e8da57d070c5a22af57833a6e6449cfe4d8ce2dd8f72cec2ab3f9c75b18683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e8da57d070c5a22af57833a6e6449cfe4d8ce2dd8f72cec2ab3f9c75b18683->enter($__internal_71e8da57d070c5a22af57833a6e6449cfe4d8ce2dd8f72cec2ab3f9c75b18683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_07393f8cafa51f2d772a7e30a302b4fbb1d60f23ae037759eabc2f892c9b30fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07393f8cafa51f2d772a7e30a302b4fbb1d60f23ae037759eabc2f892c9b30fe->enter($__internal_07393f8cafa51f2d772a7e30a302b4fbb1d60f23ae037759eabc2f892c9b30fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e8da57d070c5a22af57833a6e6449cfe4d8ce2dd8f72cec2ab3f9c75b18683->leave($__internal_71e8da57d070c5a22af57833a6e6449cfe4d8ce2dd8f72cec2ab3f9c75b18683_prof);

        
        $__internal_07393f8cafa51f2d772a7e30a302b4fbb1d60f23ae037759eabc2f892c9b30fe->leave($__internal_07393f8cafa51f2d772a7e30a302b4fbb1d60f23ae037759eabc2f892c9b30fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9dc1910697ee9406444f470d0936c693699406618b587d2786cae2bce4c5f7ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc1910697ee9406444f470d0936c693699406618b587d2786cae2bce4c5f7ba->enter($__internal_9dc1910697ee9406444f470d0936c693699406618b587d2786cae2bce4c5f7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_774a54576b450096e6adaf5861ce577bd2fd04d7c9b79793f942639ae757e7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774a54576b450096e6adaf5861ce577bd2fd04d7c9b79793f942639ae757e7af->enter($__internal_774a54576b450096e6adaf5861ce577bd2fd04d7c9b79793f942639ae757e7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_774a54576b450096e6adaf5861ce577bd2fd04d7c9b79793f942639ae757e7af->leave($__internal_774a54576b450096e6adaf5861ce577bd2fd04d7c9b79793f942639ae757e7af_prof);

        
        $__internal_9dc1910697ee9406444f470d0936c693699406618b587d2786cae2bce4c5f7ba->leave($__internal_9dc1910697ee9406444f470d0936c693699406618b587d2786cae2bce4c5f7ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}

<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_4fb23e4842cc64723ac50eeee191fd155986ba0250898ac28031fe2be44628c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_e9e64a1e35bfafdf4388f156be366d6b4db29df7efc2036fc0532ca95b3d8001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e64a1e35bfafdf4388f156be366d6b4db29df7efc2036fc0532ca95b3d8001->enter($__internal_e9e64a1e35bfafdf4388f156be366d6b4db29df7efc2036fc0532ca95b3d8001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_be39d5bf5f1e6da8e05fb4ea5072188c305de04c9083d275f3cab031def352a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be39d5bf5f1e6da8e05fb4ea5072188c305de04c9083d275f3cab031def352a4->enter($__internal_be39d5bf5f1e6da8e05fb4ea5072188c305de04c9083d275f3cab031def352a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9e64a1e35bfafdf4388f156be366d6b4db29df7efc2036fc0532ca95b3d8001->leave($__internal_e9e64a1e35bfafdf4388f156be366d6b4db29df7efc2036fc0532ca95b3d8001_prof);

        
        $__internal_be39d5bf5f1e6da8e05fb4ea5072188c305de04c9083d275f3cab031def352a4->leave($__internal_be39d5bf5f1e6da8e05fb4ea5072188c305de04c9083d275f3cab031def352a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac66bdfacb178ca4ef987e55d9ce89e3abe5109e2d7ff5ee324075e8d39640bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac66bdfacb178ca4ef987e55d9ce89e3abe5109e2d7ff5ee324075e8d39640bd->enter($__internal_ac66bdfacb178ca4ef987e55d9ce89e3abe5109e2d7ff5ee324075e8d39640bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dfc0e84071b37211fb948a1933b5d7e1bc150ed2b367a0d35373b21b404dc6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc0e84071b37211fb948a1933b5d7e1bc150ed2b367a0d35373b21b404dc6d4->enter($__internal_dfc0e84071b37211fb948a1933b5d7e1bc150ed2b367a0d35373b21b404dc6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_dfc0e84071b37211fb948a1933b5d7e1bc150ed2b367a0d35373b21b404dc6d4->leave($__internal_dfc0e84071b37211fb948a1933b5d7e1bc150ed2b367a0d35373b21b404dc6d4_prof);

        
        $__internal_ac66bdfacb178ca4ef987e55d9ce89e3abe5109e2d7ff5ee324075e8d39640bd->leave($__internal_ac66bdfacb178ca4ef987e55d9ce89e3abe5109e2d7ff5ee324075e8d39640bd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}

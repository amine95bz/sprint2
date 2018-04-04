<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7ea2ea09919afd63688539de627ca22ef1c2e92c2c61ee1f9f9610ba67154631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_d7361234e12fdab59105ac2d6bb88db981328fea566a806b9d3747494d8f1b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7361234e12fdab59105ac2d6bb88db981328fea566a806b9d3747494d8f1b3f->enter($__internal_d7361234e12fdab59105ac2d6bb88db981328fea566a806b9d3747494d8f1b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_4debc62af90016fc151a31c41372055567a29d2e88d9b32265085a5e6a1d02d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4debc62af90016fc151a31c41372055567a29d2e88d9b32265085a5e6a1d02d5->enter($__internal_4debc62af90016fc151a31c41372055567a29d2e88d9b32265085a5e6a1d02d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7361234e12fdab59105ac2d6bb88db981328fea566a806b9d3747494d8f1b3f->leave($__internal_d7361234e12fdab59105ac2d6bb88db981328fea566a806b9d3747494d8f1b3f_prof);

        
        $__internal_4debc62af90016fc151a31c41372055567a29d2e88d9b32265085a5e6a1d02d5->leave($__internal_4debc62af90016fc151a31c41372055567a29d2e88d9b32265085a5e6a1d02d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_639bf9b228315e4fff18bcd5e885a7bac591ef9bb46c2433ef3709f4b140261f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639bf9b228315e4fff18bcd5e885a7bac591ef9bb46c2433ef3709f4b140261f->enter($__internal_639bf9b228315e4fff18bcd5e885a7bac591ef9bb46c2433ef3709f4b140261f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bc61e429bc7b674ea910142a0bd4d4b51a0533d96ea15e6a9981478fd7660ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc61e429bc7b674ea910142a0bd4d4b51a0533d96ea15e6a9981478fd7660ddd->enter($__internal_bc61e429bc7b674ea910142a0bd4d4b51a0533d96ea15e6a9981478fd7660ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_bc61e429bc7b674ea910142a0bd4d4b51a0533d96ea15e6a9981478fd7660ddd->leave($__internal_bc61e429bc7b674ea910142a0bd4d4b51a0533d96ea15e6a9981478fd7660ddd_prof);

        
        $__internal_639bf9b228315e4fff18bcd5e885a7bac591ef9bb46c2433ef3709f4b140261f->leave($__internal_639bf9b228315e4fff18bcd5e885a7bac591ef9bb46c2433ef3709f4b140261f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}

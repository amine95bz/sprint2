<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_cfae3f4bc99048f3bd3d7920417b5fa9a9d34283b47bd6c11907e737f5bc99a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_4651cff068f0c1fb40ef24e3086322d7f65b4536e0030bad20c44e447258fe02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4651cff068f0c1fb40ef24e3086322d7f65b4536e0030bad20c44e447258fe02->enter($__internal_4651cff068f0c1fb40ef24e3086322d7f65b4536e0030bad20c44e447258fe02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_d9b3914df867bd2d6ed927116f95935613b8162acd548a3d755bb9a81ab5ad7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b3914df867bd2d6ed927116f95935613b8162acd548a3d755bb9a81ab5ad7f->enter($__internal_d9b3914df867bd2d6ed927116f95935613b8162acd548a3d755bb9a81ab5ad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4651cff068f0c1fb40ef24e3086322d7f65b4536e0030bad20c44e447258fe02->leave($__internal_4651cff068f0c1fb40ef24e3086322d7f65b4536e0030bad20c44e447258fe02_prof);

        
        $__internal_d9b3914df867bd2d6ed927116f95935613b8162acd548a3d755bb9a81ab5ad7f->leave($__internal_d9b3914df867bd2d6ed927116f95935613b8162acd548a3d755bb9a81ab5ad7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6144f5cb408a3f6ff99a7df344939aa13c95f7cea360b44837fd5b6c0d617530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6144f5cb408a3f6ff99a7df344939aa13c95f7cea360b44837fd5b6c0d617530->enter($__internal_6144f5cb408a3f6ff99a7df344939aa13c95f7cea360b44837fd5b6c0d617530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0248f04da0fc207ce0244f17da053e1c5c5f56527cdb64121e3258ed031acbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0248f04da0fc207ce0244f17da053e1c5c5f56527cdb64121e3258ed031acbbc->enter($__internal_0248f04da0fc207ce0244f17da053e1c5c5f56527cdb64121e3258ed031acbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_0248f04da0fc207ce0244f17da053e1c5c5f56527cdb64121e3258ed031acbbc->leave($__internal_0248f04da0fc207ce0244f17da053e1c5c5f56527cdb64121e3258ed031acbbc_prof);

        
        $__internal_6144f5cb408a3f6ff99a7df344939aa13c95f7cea360b44837fd5b6c0d617530->leave($__internal_6144f5cb408a3f6ff99a7df344939aa13c95f7cea360b44837fd5b6c0d617530_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}

<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_e50d063786b996eeb5e3a81fdd191126e20e3a1f4d4369c34d85c139fb13982e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_586ffac47ce34458bbada0d81f9ebdaa5b59ce78439dd6a0ffa432b765511597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586ffac47ce34458bbada0d81f9ebdaa5b59ce78439dd6a0ffa432b765511597->enter($__internal_586ffac47ce34458bbada0d81f9ebdaa5b59ce78439dd6a0ffa432b765511597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_4877b7a010fe0bdf8b78c61d83b65c02b0d4a1d1921329e308b80f1bae4b484b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4877b7a010fe0bdf8b78c61d83b65c02b0d4a1d1921329e308b80f1bae4b484b->enter($__internal_4877b7a010fe0bdf8b78c61d83b65c02b0d4a1d1921329e308b80f1bae4b484b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_586ffac47ce34458bbada0d81f9ebdaa5b59ce78439dd6a0ffa432b765511597->leave($__internal_586ffac47ce34458bbada0d81f9ebdaa5b59ce78439dd6a0ffa432b765511597_prof);

        
        $__internal_4877b7a010fe0bdf8b78c61d83b65c02b0d4a1d1921329e308b80f1bae4b484b->leave($__internal_4877b7a010fe0bdf8b78c61d83b65c02b0d4a1d1921329e308b80f1bae4b484b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a3e925255bae7c71e5e7972f5bab74fe7a535db0219ca23497b624e784808a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3e925255bae7c71e5e7972f5bab74fe7a535db0219ca23497b624e784808a1->enter($__internal_6a3e925255bae7c71e5e7972f5bab74fe7a535db0219ca23497b624e784808a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_065adf8a8fa1027f7845574b25378a6137db51ab299e3de1c65cb80653b5b886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065adf8a8fa1027f7845574b25378a6137db51ab299e3de1c65cb80653b5b886->enter($__internal_065adf8a8fa1027f7845574b25378a6137db51ab299e3de1c65cb80653b5b886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_065adf8a8fa1027f7845574b25378a6137db51ab299e3de1c65cb80653b5b886->leave($__internal_065adf8a8fa1027f7845574b25378a6137db51ab299e3de1c65cb80653b5b886_prof);

        
        $__internal_6a3e925255bae7c71e5e7972f5bab74fe7a535db0219ca23497b624e784808a1->leave($__internal_6a3e925255bae7c71e5e7972f5bab74fe7a535db0219ca23497b624e784808a1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}

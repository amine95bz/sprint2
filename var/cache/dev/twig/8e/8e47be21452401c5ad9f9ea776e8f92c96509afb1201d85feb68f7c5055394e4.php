<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_dd6ebd89034d1c3f86f53ca3e7659773a9bfc1a75b1f34a8cd1ce4ab9635447f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_e201eea7222665b8dad47ac6c0b05666381e1cd32df742921099a1fe3ea3e2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e201eea7222665b8dad47ac6c0b05666381e1cd32df742921099a1fe3ea3e2a5->enter($__internal_e201eea7222665b8dad47ac6c0b05666381e1cd32df742921099a1fe3ea3e2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_b89dc90e5aef55b9109f7ee4615eb59fde84958ebfb4d999a6f007864745a4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89dc90e5aef55b9109f7ee4615eb59fde84958ebfb4d999a6f007864745a4a1->enter($__internal_b89dc90e5aef55b9109f7ee4615eb59fde84958ebfb4d999a6f007864745a4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e201eea7222665b8dad47ac6c0b05666381e1cd32df742921099a1fe3ea3e2a5->leave($__internal_e201eea7222665b8dad47ac6c0b05666381e1cd32df742921099a1fe3ea3e2a5_prof);

        
        $__internal_b89dc90e5aef55b9109f7ee4615eb59fde84958ebfb4d999a6f007864745a4a1->leave($__internal_b89dc90e5aef55b9109f7ee4615eb59fde84958ebfb4d999a6f007864745a4a1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a308533a3dbcaa655aac10756709eb811e3ae31a19ff541ee3bf6a025ec3d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a308533a3dbcaa655aac10756709eb811e3ae31a19ff541ee3bf6a025ec3d7b->enter($__internal_1a308533a3dbcaa655aac10756709eb811e3ae31a19ff541ee3bf6a025ec3d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_282c46b41f959a1ce8f102c8dc7400aec8fff9032e999953781b0b87e7b1752a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282c46b41f959a1ce8f102c8dc7400aec8fff9032e999953781b0b87e7b1752a->enter($__internal_282c46b41f959a1ce8f102c8dc7400aec8fff9032e999953781b0b87e7b1752a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_282c46b41f959a1ce8f102c8dc7400aec8fff9032e999953781b0b87e7b1752a->leave($__internal_282c46b41f959a1ce8f102c8dc7400aec8fff9032e999953781b0b87e7b1752a_prof);

        
        $__internal_1a308533a3dbcaa655aac10756709eb811e3ae31a19ff541ee3bf6a025ec3d7b->leave($__internal_1a308533a3dbcaa655aac10756709eb811e3ae31a19ff541ee3bf6a025ec3d7b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}

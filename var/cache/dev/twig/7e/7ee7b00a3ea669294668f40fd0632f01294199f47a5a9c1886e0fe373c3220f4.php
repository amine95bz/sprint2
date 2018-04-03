<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2e96a93e991558dc3fcbf556d9edfa5a693f0cc9ba3527f85daaaf2f90661ba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee64ae9005af51609cedb6387f4c66d5b2fa559cfa836a406630af1c5a2fcf7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee64ae9005af51609cedb6387f4c66d5b2fa559cfa836a406630af1c5a2fcf7c->enter($__internal_ee64ae9005af51609cedb6387f4c66d5b2fa559cfa836a406630af1c5a2fcf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_478badc24f85a551e6ec7073a0a0aa93caec9da15f3d840b79ac60f42152eabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478badc24f85a551e6ec7073a0a0aa93caec9da15f3d840b79ac60f42152eabc->enter($__internal_478badc24f85a551e6ec7073a0a0aa93caec9da15f3d840b79ac60f42152eabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ee64ae9005af51609cedb6387f4c66d5b2fa559cfa836a406630af1c5a2fcf7c->leave($__internal_ee64ae9005af51609cedb6387f4c66d5b2fa559cfa836a406630af1c5a2fcf7c_prof);

        
        $__internal_478badc24f85a551e6ec7073a0a0aa93caec9da15f3d840b79ac60f42152eabc->leave($__internal_478badc24f85a551e6ec7073a0a0aa93caec9da15f3d840b79ac60f42152eabc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_de3245c98b4cd6e233f046c304a75c79d8a0d42394de8953d452327e7c53826c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3245c98b4cd6e233f046c304a75c79d8a0d42394de8953d452327e7c53826c->enter($__internal_de3245c98b4cd6e233f046c304a75c79d8a0d42394de8953d452327e7c53826c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_383a7a82a4ae473b198faffd416a0d3991baa9a21bac6bd4d9b415e3b5b49804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383a7a82a4ae473b198faffd416a0d3991baa9a21bac6bd4d9b415e3b5b49804->enter($__internal_383a7a82a4ae473b198faffd416a0d3991baa9a21bac6bd4d9b415e3b5b49804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_383a7a82a4ae473b198faffd416a0d3991baa9a21bac6bd4d9b415e3b5b49804->leave($__internal_383a7a82a4ae473b198faffd416a0d3991baa9a21bac6bd4d9b415e3b5b49804_prof);

        
        $__internal_de3245c98b4cd6e233f046c304a75c79d8a0d42394de8953d452327e7c53826c->leave($__internal_de3245c98b4cd6e233f046c304a75c79d8a0d42394de8953d452327e7c53826c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5b3472bc8089a7f772cf8f50000a62a906824563ca6baed8b035bbdaedfc3337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3472bc8089a7f772cf8f50000a62a906824563ca6baed8b035bbdaedfc3337->enter($__internal_5b3472bc8089a7f772cf8f50000a62a906824563ca6baed8b035bbdaedfc3337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f11661793b21785ce2e2e0a7e839fc09594205c0678e609ec3a53d8843295b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11661793b21785ce2e2e0a7e839fc09594205c0678e609ec3a53d8843295b48->enter($__internal_f11661793b21785ce2e2e0a7e839fc09594205c0678e609ec3a53d8843295b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f11661793b21785ce2e2e0a7e839fc09594205c0678e609ec3a53d8843295b48->leave($__internal_f11661793b21785ce2e2e0a7e839fc09594205c0678e609ec3a53d8843295b48_prof);

        
        $__internal_5b3472bc8089a7f772cf8f50000a62a906824563ca6baed8b035bbdaedfc3337->leave($__internal_5b3472bc8089a7f772cf8f50000a62a906824563ca6baed8b035bbdaedfc3337_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_323c75893189035dd9aac200ad5209352a976bd710e227c93e1c17c6de952e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323c75893189035dd9aac200ad5209352a976bd710e227c93e1c17c6de952e22->enter($__internal_323c75893189035dd9aac200ad5209352a976bd710e227c93e1c17c6de952e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_55625dd7bc653a55a95805e1fc6a4335a1e737bdcfd419086e8c3a4f9053335e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55625dd7bc653a55a95805e1fc6a4335a1e737bdcfd419086e8c3a4f9053335e->enter($__internal_55625dd7bc653a55a95805e1fc6a4335a1e737bdcfd419086e8c3a4f9053335e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_55625dd7bc653a55a95805e1fc6a4335a1e737bdcfd419086e8c3a4f9053335e->leave($__internal_55625dd7bc653a55a95805e1fc6a4335a1e737bdcfd419086e8c3a4f9053335e_prof);

        
        $__internal_323c75893189035dd9aac200ad5209352a976bd710e227c93e1c17c6de952e22->leave($__internal_323c75893189035dd9aac200ad5209352a976bd710e227c93e1c17c6de952e22_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}

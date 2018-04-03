<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_4c0ea9e65a545ba4ec24350eec1dc9d0dff6ad6f65c75d061de07391cb72e82a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_c6c442d9dff91ed3f3f75bf1c17a55c4c4fc3a2a5af94a317d71c7b6df710e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c442d9dff91ed3f3f75bf1c17a55c4c4fc3a2a5af94a317d71c7b6df710e7b->enter($__internal_c6c442d9dff91ed3f3f75bf1c17a55c4c4fc3a2a5af94a317d71c7b6df710e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_aa9b109b7af3a2b6ded2272ea8b61452533b9ed11234bbe4bd1d98bea7fe64df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9b109b7af3a2b6ded2272ea8b61452533b9ed11234bbe4bd1d98bea7fe64df->enter($__internal_aa9b109b7af3a2b6ded2272ea8b61452533b9ed11234bbe4bd1d98bea7fe64df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6c442d9dff91ed3f3f75bf1c17a55c4c4fc3a2a5af94a317d71c7b6df710e7b->leave($__internal_c6c442d9dff91ed3f3f75bf1c17a55c4c4fc3a2a5af94a317d71c7b6df710e7b_prof);

        
        $__internal_aa9b109b7af3a2b6ded2272ea8b61452533b9ed11234bbe4bd1d98bea7fe64df->leave($__internal_aa9b109b7af3a2b6ded2272ea8b61452533b9ed11234bbe4bd1d98bea7fe64df_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd99f628c7bd91b54ba91c7b9099a32b2817424af6d304d924b9215efc6879ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd99f628c7bd91b54ba91c7b9099a32b2817424af6d304d924b9215efc6879ab->enter($__internal_cd99f628c7bd91b54ba91c7b9099a32b2817424af6d304d924b9215efc6879ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a3974895474bf72764a644db310b4b1ac63725abbdf3e12e25fd31d154673d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3974895474bf72764a644db310b4b1ac63725abbdf3e12e25fd31d154673d33->enter($__internal_a3974895474bf72764a644db310b4b1ac63725abbdf3e12e25fd31d154673d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_a3974895474bf72764a644db310b4b1ac63725abbdf3e12e25fd31d154673d33->leave($__internal_a3974895474bf72764a644db310b4b1ac63725abbdf3e12e25fd31d154673d33_prof);

        
        $__internal_cd99f628c7bd91b54ba91c7b9099a32b2817424af6d304d924b9215efc6879ab->leave($__internal_cd99f628c7bd91b54ba91c7b9099a32b2817424af6d304d924b9215efc6879ab_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}

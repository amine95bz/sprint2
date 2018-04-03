<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_6c85260311f6a67fc32b01528d0c38318b1a38015ce96a8e47499cf140ef1cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_084829b4d34b6cc3263e89b8611f2eca07f1eae783fb4f09cde43aa70ffe8a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084829b4d34b6cc3263e89b8611f2eca07f1eae783fb4f09cde43aa70ffe8a16->enter($__internal_084829b4d34b6cc3263e89b8611f2eca07f1eae783fb4f09cde43aa70ffe8a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_e44b9a9e7dbb6db4e554d96491a00266272c4c5cf501af2e979728913072da18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44b9a9e7dbb6db4e554d96491a00266272c4c5cf501af2e979728913072da18->enter($__internal_e44b9a9e7dbb6db4e554d96491a00266272c4c5cf501af2e979728913072da18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_084829b4d34b6cc3263e89b8611f2eca07f1eae783fb4f09cde43aa70ffe8a16->leave($__internal_084829b4d34b6cc3263e89b8611f2eca07f1eae783fb4f09cde43aa70ffe8a16_prof);

        
        $__internal_e44b9a9e7dbb6db4e554d96491a00266272c4c5cf501af2e979728913072da18->leave($__internal_e44b9a9e7dbb6db4e554d96491a00266272c4c5cf501af2e979728913072da18_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}

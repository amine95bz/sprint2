<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_73291bcae944ac67d22c6a2acfa91d465663bc34485bb7456728039ca12bdf64 extends Twig_Template
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
        $__internal_88585ee7ca0c4eef4d68a43cae9baf06f020c68331528a42e319e08a868e37e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88585ee7ca0c4eef4d68a43cae9baf06f020c68331528a42e319e08a868e37e6->enter($__internal_88585ee7ca0c4eef4d68a43cae9baf06f020c68331528a42e319e08a868e37e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_e1fb5b9242d4de7336cd533b0aa010ad7829a1af09a6e5394f7c61af448db29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fb5b9242d4de7336cd533b0aa010ad7829a1af09a6e5394f7c61af448db29b->enter($__internal_e1fb5b9242d4de7336cd533b0aa010ad7829a1af09a6e5394f7c61af448db29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_88585ee7ca0c4eef4d68a43cae9baf06f020c68331528a42e319e08a868e37e6->leave($__internal_88585ee7ca0c4eef4d68a43cae9baf06f020c68331528a42e319e08a868e37e6_prof);

        
        $__internal_e1fb5b9242d4de7336cd533b0aa010ad7829a1af09a6e5394f7c61af448db29b->leave($__internal_e1fb5b9242d4de7336cd533b0aa010ad7829a1af09a6e5394f7c61af448db29b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}

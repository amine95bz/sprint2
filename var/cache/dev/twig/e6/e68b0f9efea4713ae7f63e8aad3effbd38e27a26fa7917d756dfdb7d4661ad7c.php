<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_49701956f0067b8ec57770c721ae7c3f315c555f0f6ad625027390dd08a7e4be extends Twig_Template
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
        $__internal_f0d3a730aab41896772206f3ae360a5c60e5daf6401c96b11005e9a2c5b2f35e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d3a730aab41896772206f3ae360a5c60e5daf6401c96b11005e9a2c5b2f35e->enter($__internal_f0d3a730aab41896772206f3ae360a5c60e5daf6401c96b11005e9a2c5b2f35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_39eaa61b1ced4ed470e97c66343f893d09b694aa95a0f03fcb05e11a9176ff19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39eaa61b1ced4ed470e97c66343f893d09b694aa95a0f03fcb05e11a9176ff19->enter($__internal_39eaa61b1ced4ed470e97c66343f893d09b694aa95a0f03fcb05e11a9176ff19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_f0d3a730aab41896772206f3ae360a5c60e5daf6401c96b11005e9a2c5b2f35e->leave($__internal_f0d3a730aab41896772206f3ae360a5c60e5daf6401c96b11005e9a2c5b2f35e_prof);

        
        $__internal_39eaa61b1ced4ed470e97c66343f893d09b694aa95a0f03fcb05e11a9176ff19->leave($__internal_39eaa61b1ced4ed470e97c66343f893d09b694aa95a0f03fcb05e11a9176ff19_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request_content.html.twig");
    }
}

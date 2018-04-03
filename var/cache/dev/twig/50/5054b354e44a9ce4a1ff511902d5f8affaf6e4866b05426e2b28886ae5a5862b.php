<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_3cd333979adf9cf1afd21902537fbc4b23e2572646a22f9eab62fbada9ea05cb extends Twig_Template
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
        $__internal_3149a3c4e53f309b6f3ff91a27004fde587f557ca2c0180636e645b2bfb2e874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3149a3c4e53f309b6f3ff91a27004fde587f557ca2c0180636e645b2bfb2e874->enter($__internal_3149a3c4e53f309b6f3ff91a27004fde587f557ca2c0180636e645b2bfb2e874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_a4e55c1053c55d27eae2da6906c8b17baebeb713a9e2510fd93a68a156875e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e55c1053c55d27eae2da6906c8b17baebeb713a9e2510fd93a68a156875e96->enter($__internal_a4e55c1053c55d27eae2da6906c8b17baebeb713a9e2510fd93a68a156875e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "

<div class=\"login\">
    <div class=\"main-agileits\">
        <div class=\"form-w3agile\">
            <h3>Login</h3>
<form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 13
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 14
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 16
        echo "

    <div class=\"key\">
        <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
    <label for=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\"  />
        <div class=\"clearfix\"></div>
    </div>

    <div class=\"key\">
        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
    <label for=\"password\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\"   onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Password';}\"  />
        <div class=\"clearfix\"></div>
    </div>

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\"> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />


</form>
        </div>
        <div class=\"forg\">
            <a href=\"#\" class=\"forg-left\">Forgot Password</a>
            <a href=\"registered.html\" class=\"forg-right\">Register</a>
            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>
";
        
        $__internal_3149a3c4e53f309b6f3ff91a27004fde587f557ca2c0180636e645b2bfb2e874->leave($__internal_3149a3c4e53f309b6f3ff91a27004fde587f557ca2c0180636e645b2bfb2e874_prof);

        
        $__internal_a4e55c1053c55d27eae2da6906c8b17baebeb713a9e2510fd93a68a156875e96->leave($__internal_a4e55c1053c55d27eae2da6906c8b17baebeb713a9e2510fd93a68a156875e96_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  84 => 33,  75 => 27,  66 => 21,  62 => 20,  56 => 16,  50 => 14,  48 => 13,  44 => 12,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
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

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}


<div class=\"login\">
    <div class=\"main-agileits\">
        <div class=\"form-w3agile\">
            <h3>Login</h3>
<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}


    <div class=\"key\">
        <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\"  />
        <div class=\"clearfix\"></div>
    </div>

    <div class=\"key\">
        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\"   onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Password';}\"  />
        <div class=\"clearfix\"></div>
    </div>

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\"> {{ 'security.login.remember_me'|trans }}</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />


</form>
        </div>
        <div class=\"forg\">
            <a href=\"#\" class=\"forg-left\">Forgot Password</a>
            <a href=\"registered.html\" class=\"forg-right\">Register</a>
            <div class=\"clearfix\"></div>
        </div>
    </div>
</div>
", "FOSUserBundle:Security:login_content.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}

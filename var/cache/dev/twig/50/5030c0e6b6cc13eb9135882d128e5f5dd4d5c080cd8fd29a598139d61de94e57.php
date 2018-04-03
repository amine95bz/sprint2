<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_182aa7846139bc73fdbc600175f625ff2424b83970898f794688d9be8b44d6cc extends Twig_Template
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
        $__internal_5013979abe0d4948536cf1496dbc3de13932092008ebbf79551661632e449b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5013979abe0d4948536cf1496dbc3de13932092008ebbf79551661632e449b4b->enter($__internal_5013979abe0d4948536cf1496dbc3de13932092008ebbf79551661632e449b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_cf9450c227424086bd33786332c9d4aad26cf9e532a2f27c3287c16eac00717d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9450c227424086bd33786332c9d4aad26cf9e532a2f27c3287c16eac00717d->enter($__internal_cf9450c227424086bd33786332c9d4aad26cf9e532a2f27c3287c16eac00717d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
  ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<div class=\"content\">
    <!--login-->
    <div class=\"login\">
        <div class=\"main-agileits\">
            <div class=\"form-w3agile form1\">
                <h3>Register</h3>

                    <div class=\"key\">
                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeholder" => "Nom utilisateur", "class" => "form-control placeholder-no-fix", "required" => "true")));
        echo "
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"key\">
                        <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email", "class" => "form-control placeholder-no-fix", "required" => "true")));
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"key\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("placeholder" => "Votre mot de passe", "class" => "form-control placeholder-no-fix", "required" => "true")));
        echo "</p>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"key\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("placeholder" => "Répéter mot de passe", "class" => "form-control placeholder-no-fix", "required" => "true")));
        echo "</p>
                        <div class=\"clearfix\"></div>
                    </div>
                    <input type=\"submit\"   value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">

            </div>

        </div>
    </div>
    <!--login-->
</div>

";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_5013979abe0d4948536cf1496dbc3de13932092008ebbf79551661632e449b4b->leave($__internal_5013979abe0d4948536cf1496dbc3de13932092008ebbf79551661632e449b4b_prof);

        
        $__internal_cf9450c227424086bd33786332c9d4aad26cf9e532a2f27c3287c16eac00717d->leave($__internal_cf9450c227424086bd33786332c9d4aad26cf9e532a2f27c3287c16eac00717d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 44,  84 => 35,  78 => 32,  70 => 27,  62 => 22,  58 => 21,  50 => 16,  46 => 15,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
  {{ form_errors(form) }}

<div class=\"content\">
    <!--login-->
    <div class=\"login\">
        <div class=\"main-agileits\">
            <div class=\"form-w3agile form1\">
                <h3>Register</h3>

                    <div class=\"key\">
                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                        {{ form_widget(form.username, {'attr': {'placeholder': 'Nom utilisateur','class':'form-control placeholder-no-fix','required' : 'true'}}) }}
                        {{ form_errors(form.username) }}
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"key\">
                        <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        {{ form_widget(form.email, {'attr': {'placeholder': 'Email','class':'form-control placeholder-no-fix','required' : 'true'}}) }}
                        {{ form_errors(form.email) }}
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"key\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        {{ form_widget(form.plainPassword.first, {'attr': {'placeholder': 'Votre mot de passe','class':'form-control placeholder-no-fix','required' : 'true'}}) }}</p>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"key\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        {{ form_widget(form.plainPassword.second, {'attr': {'placeholder': 'Répéter mot de passe','class':'form-control placeholder-no-fix','required' : 'true'}}) }}</p>
                        <div class=\"clearfix\"></div>
                    </div>
                    <input type=\"submit\"   value=\"{{ 'registration.submit'|trans }}\">

            </div>

        </div>
    </div>
    <!--login-->
</div>

{{ form_end(form) }}
", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}

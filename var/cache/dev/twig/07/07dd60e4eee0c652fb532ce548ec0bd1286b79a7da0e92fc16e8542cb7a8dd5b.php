<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_5079ce74593c5b0279b3b5f461cc420181d0419358c523c28c4460b69b1962e4 extends Twig_Template
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
        $__internal_d6ff128623b7e0a8e0f025ffb2c29c8d429479995a2711c8acb417f60d1c7d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ff128623b7e0a8e0f025ffb2c29c8d429479995a2711c8acb417f60d1c7d8d->enter($__internal_d6ff128623b7e0a8e0f025ffb2c29c8d429479995a2711c8acb417f60d1c7d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_151526c262bcb394ad34ccaeb24bc996376aa1d7cd0bd174887b71cc065acb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151526c262bcb394ad34ccaeb24bc996376aa1d7cd0bd174887b71cc065acb0e->enter($__internal_151526c262bcb394ad34ccaeb24bc996376aa1d7cd0bd174887b71cc065acb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

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
        
        $__internal_d6ff128623b7e0a8e0f025ffb2c29c8d429479995a2711c8acb417f60d1c7d8d->leave($__internal_d6ff128623b7e0a8e0f025ffb2c29c8d429479995a2711c8acb417f60d1c7d8d_prof);

        
        $__internal_151526c262bcb394ad34ccaeb24bc996376aa1d7cd0bd174887b71cc065acb0e->leave($__internal_151526c262bcb394ad34ccaeb24bc996376aa1d7cd0bd174887b71cc065acb0e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
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
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
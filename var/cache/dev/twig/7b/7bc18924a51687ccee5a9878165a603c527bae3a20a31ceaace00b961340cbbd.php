<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_f412f9d2fcb1135a33e51b81851d87a470f4d9fbd042fff39a0e4c73a7eddbea extends Twig_Template
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
        $__internal_5c4f9aaa311b1b869eb9781956e983fff3e9ac75be0dcbdb3b0d4ec45b4cd8e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4f9aaa311b1b869eb9781956e983fff3e9ac75be0dcbdb3b0d4ec45b4cd8e7->enter($__internal_5c4f9aaa311b1b869eb9781956e983fff3e9ac75be0dcbdb3b0d4ec45b4cd8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        $__internal_37088f167e0f1f8ab5f75ebd45b68d0beffd5de2b7b6c95fcb4770858d68ac49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37088f167e0f1f8ab5f75ebd45b68d0beffd5de2b7b6c95fcb4770858d68ac49->enter($__internal_37088f167e0f1f8ab5f75ebd45b68d0beffd5de2b7b6c95fcb4770858d68ac49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_5c4f9aaa311b1b869eb9781956e983fff3e9ac75be0dcbdb3b0d4ec45b4cd8e7->leave($__internal_5c4f9aaa311b1b869eb9781956e983fff3e9ac75be0dcbdb3b0d4ec45b4cd8e7_prof);

        
        $__internal_37088f167e0f1f8ab5f75ebd45b68d0beffd5de2b7b6c95fcb4770858d68ac49->leave($__internal_37088f167e0f1f8ab5f75ebd45b68d0beffd5de2b7b6c95fcb4770858d68ac49_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:edit_content.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Group/edit_content.html.twig");
    }
}

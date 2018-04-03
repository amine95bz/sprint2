<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_3e9e60fb754f7b5f25fa38a0e960bfe28f66b249100da22b5d85d6117b494337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_76315d392bdef46c8133dae492b1ec0277fff71831d4cce32ade8487fca5a046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76315d392bdef46c8133dae492b1ec0277fff71831d4cce32ade8487fca5a046->enter($__internal_76315d392bdef46c8133dae492b1ec0277fff71831d4cce32ade8487fca5a046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_47c983dd5a46fc226abb3ba665e0de16e90f30403c4cb4d02aadb0080ba7a0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c983dd5a46fc226abb3ba665e0de16e90f30403c4cb4d02aadb0080ba7a0f9->enter($__internal_47c983dd5a46fc226abb3ba665e0de16e90f30403c4cb4d02aadb0080ba7a0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76315d392bdef46c8133dae492b1ec0277fff71831d4cce32ade8487fca5a046->leave($__internal_76315d392bdef46c8133dae492b1ec0277fff71831d4cce32ade8487fca5a046_prof);

        
        $__internal_47c983dd5a46fc226abb3ba665e0de16e90f30403c4cb4d02aadb0080ba7a0f9->leave($__internal_47c983dd5a46fc226abb3ba665e0de16e90f30403c4cb4d02aadb0080ba7a0f9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f0adf0a00bf9fb5ef16982bb4b57195e00a9c36a5597da2bb91c5929f8dab2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0adf0a00bf9fb5ef16982bb4b57195e00a9c36a5597da2bb91c5929f8dab2b->enter($__internal_7f0adf0a00bf9fb5ef16982bb4b57195e00a9c36a5597da2bb91c5929f8dab2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f72d7b9557ab99dbe6cb27ec438ad08561db686ad34194c06edbed8fd116acc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72d7b9557ab99dbe6cb27ec438ad08561db686ad34194c06edbed8fd116acc2->enter($__internal_f72d7b9557ab99dbe6cb27ec438ad08561db686ad34194c06edbed8fd116acc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f72d7b9557ab99dbe6cb27ec438ad08561db686ad34194c06edbed8fd116acc2->leave($__internal_f72d7b9557ab99dbe6cb27ec438ad08561db686ad34194c06edbed8fd116acc2_prof);

        
        $__internal_7f0adf0a00bf9fb5ef16982bb4b57195e00a9c36a5597da2bb91c5929f8dab2b->leave($__internal_7f0adf0a00bf9fb5ef16982bb4b57195e00a9c36a5597da2bb91c5929f8dab2b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}

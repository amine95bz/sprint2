<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_9e2549fa6f761d5d6fb1b80ac056fe2fd256c1ccdaac9a0d24bccb13080fefac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_0b22711dabb619195f2d78f5d374f91b28e69bb9814750317c50f2f9783f6556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b22711dabb619195f2d78f5d374f91b28e69bb9814750317c50f2f9783f6556->enter($__internal_0b22711dabb619195f2d78f5d374f91b28e69bb9814750317c50f2f9783f6556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_235658575340834bd32e71faaf2161861e611606c3ef81ef1b1e15d7d654aeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235658575340834bd32e71faaf2161861e611606c3ef81ef1b1e15d7d654aeba->enter($__internal_235658575340834bd32e71faaf2161861e611606c3ef81ef1b1e15d7d654aeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b22711dabb619195f2d78f5d374f91b28e69bb9814750317c50f2f9783f6556->leave($__internal_0b22711dabb619195f2d78f5d374f91b28e69bb9814750317c50f2f9783f6556_prof);

        
        $__internal_235658575340834bd32e71faaf2161861e611606c3ef81ef1b1e15d7d654aeba->leave($__internal_235658575340834bd32e71faaf2161861e611606c3ef81ef1b1e15d7d654aeba_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25a6a3fac1f1fd4816665fd0f391493a74d2a542dbccbe8bf9702aa2bedf7ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a6a3fac1f1fd4816665fd0f391493a74d2a542dbccbe8bf9702aa2bedf7ccc->enter($__internal_25a6a3fac1f1fd4816665fd0f391493a74d2a542dbccbe8bf9702aa2bedf7ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1c250198d888f18bbb36a54a1438f42bcab036303fd10fc39f1a6f1269638202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c250198d888f18bbb36a54a1438f42bcab036303fd10fc39f1a6f1269638202->enter($__internal_1c250198d888f18bbb36a54a1438f42bcab036303fd10fc39f1a6f1269638202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1c250198d888f18bbb36a54a1438f42bcab036303fd10fc39f1a6f1269638202->leave($__internal_1c250198d888f18bbb36a54a1438f42bcab036303fd10fc39f1a6f1269638202_prof);

        
        $__internal_25a6a3fac1f1fd4816665fd0f391493a74d2a542dbccbe8bf9702aa2bedf7ccc->leave($__internal_25a6a3fac1f1fd4816665fd0f391493a74d2a542dbccbe8bf9702aa2bedf7ccc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}

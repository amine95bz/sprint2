<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3a14654ba20886865bfb4fc268dccda008689c6f7cc12fd9bb3482afc47e917d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69cca4b422e4050c6281b9dfbcae4f4bf65e152cef06a29988004b77c78e2a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cca4b422e4050c6281b9dfbcae4f4bf65e152cef06a29988004b77c78e2a4a->enter($__internal_69cca4b422e4050c6281b9dfbcae4f4bf65e152cef06a29988004b77c78e2a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_eea91e283cfcc35d6d4beecb77a4967240cd2a228b2f71bb2bf2db725ada8346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea91e283cfcc35d6d4beecb77a4967240cd2a228b2f71bb2bf2db725ada8346->enter($__internal_eea91e283cfcc35d6d4beecb77a4967240cd2a228b2f71bb2bf2db725ada8346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69cca4b422e4050c6281b9dfbcae4f4bf65e152cef06a29988004b77c78e2a4a->leave($__internal_69cca4b422e4050c6281b9dfbcae4f4bf65e152cef06a29988004b77c78e2a4a_prof);

        
        $__internal_eea91e283cfcc35d6d4beecb77a4967240cd2a228b2f71bb2bf2db725ada8346->leave($__internal_eea91e283cfcc35d6d4beecb77a4967240cd2a228b2f71bb2bf2db725ada8346_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09d489f27b7c3f01cc875599bb24191b99e80b7d2b22b02f42bf77ffdacd52ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d489f27b7c3f01cc875599bb24191b99e80b7d2b22b02f42bf77ffdacd52ae->enter($__internal_09d489f27b7c3f01cc875599bb24191b99e80b7d2b22b02f42bf77ffdacd52ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd7b46e612b1548f642811a96ac40964eaf2ebb136ec2cc5197bc76fc7081812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7b46e612b1548f642811a96ac40964eaf2ebb136ec2cc5197bc76fc7081812->enter($__internal_bd7b46e612b1548f642811a96ac40964eaf2ebb136ec2cc5197bc76fc7081812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bd7b46e612b1548f642811a96ac40964eaf2ebb136ec2cc5197bc76fc7081812->leave($__internal_bd7b46e612b1548f642811a96ac40964eaf2ebb136ec2cc5197bc76fc7081812_prof);

        
        $__internal_09d489f27b7c3f01cc875599bb24191b99e80b7d2b22b02f42bf77ffdacd52ae->leave($__internal_09d489f27b7c3f01cc875599bb24191b99e80b7d2b22b02f42bf77ffdacd52ae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_26f4957cba92697b55a5ee09af88ce302d363fac234cc0ab6cd0a239265553db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f4957cba92697b55a5ee09af88ce302d363fac234cc0ab6cd0a239265553db->enter($__internal_26f4957cba92697b55a5ee09af88ce302d363fac234cc0ab6cd0a239265553db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b050c6687ca095153d05e2d2814c683f30173589af3929a2d1c1cabf9326c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b050c6687ca095153d05e2d2814c683f30173589af3929a2d1c1cabf9326c2c->enter($__internal_3b050c6687ca095153d05e2d2814c683f30173589af3929a2d1c1cabf9326c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3b050c6687ca095153d05e2d2814c683f30173589af3929a2d1c1cabf9326c2c->leave($__internal_3b050c6687ca095153d05e2d2814c683f30173589af3929a2d1c1cabf9326c2c_prof);

        
        $__internal_26f4957cba92697b55a5ee09af88ce302d363fac234cc0ab6cd0a239265553db->leave($__internal_26f4957cba92697b55a5ee09af88ce302d363fac234cc0ab6cd0a239265553db_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

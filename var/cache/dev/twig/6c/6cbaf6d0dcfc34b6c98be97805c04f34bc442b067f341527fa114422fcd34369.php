<?php

/* @Base/Default/index.html.twig */
class __TwigTemplate_11b9ef3fafbcb10b272479f5d436f1d110184a6badd90bf2fa2d7529e82967f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Front.html.twig", "@Base/Default/index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98df3eef026c3427c0b0c48cecd395d273931ba50c6eb770eb79a864e5888b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98df3eef026c3427c0b0c48cecd395d273931ba50c6eb770eb79a864e5888b6e->enter($__internal_98df3eef026c3427c0b0c48cecd395d273931ba50c6eb770eb79a864e5888b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Base/Default/index.html.twig"));

        $__internal_99aa9ed251a0792ecbeb80e49080003aeb0f1ad902e885f8b64f27440cee74b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99aa9ed251a0792ecbeb80e49080003aeb0f1ad902e885f8b64f27440cee74b6->enter($__internal_99aa9ed251a0792ecbeb80e49080003aeb0f1ad902e885f8b64f27440cee74b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Base/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98df3eef026c3427c0b0c48cecd395d273931ba50c6eb770eb79a864e5888b6e->leave($__internal_98df3eef026c3427c0b0c48cecd395d273931ba50c6eb770eb79a864e5888b6e_prof);

        
        $__internal_99aa9ed251a0792ecbeb80e49080003aeb0f1ad902e885f8b64f27440cee74b6->leave($__internal_99aa9ed251a0792ecbeb80e49080003aeb0f1ad902e885f8b64f27440cee74b6_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_1bf5f0b4e8f0edad6a7e02cd48013d287698f1fe797475fe62d9e96d009f96b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf5f0b4e8f0edad6a7e02cd48013d287698f1fe797475fe62d9e96d009f96b2->enter($__internal_1bf5f0b4e8f0edad6a7e02cd48013d287698f1fe797475fe62d9e96d009f96b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_450a32c54fc059a490dad5fdc8f6010aabbdf71a1c92483bede4cc8f01e0b2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450a32c54fc059a490dad5fdc8f6010aabbdf71a1c92483bede4cc8f01e0b2f0->enter($__internal_450a32c54fc059a490dad5fdc8f6010aabbdf71a1c92483bede4cc8f01e0b2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <h1>  Hello </h1>
";
        
        $__internal_450a32c54fc059a490dad5fdc8f6010aabbdf71a1c92483bede4cc8f01e0b2f0->leave($__internal_450a32c54fc059a490dad5fdc8f6010aabbdf71a1c92483bede4cc8f01e0b2f0_prof);

        
        $__internal_1bf5f0b4e8f0edad6a7e02cd48013d287698f1fe797475fe62d9e96d009f96b2->leave($__internal_1bf5f0b4e8f0edad6a7e02cd48013d287698f1fe797475fe62d9e96d009f96b2_prof);

    }

    public function getTemplateName()
    {
        return "@Base/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Front.html.twig' %}
{% block container %}
    <h1>  Hello </h1>
{% endblock %}
", "@Base/Default/index.html.twig", "C:\\wamp64\\www\\medina1\\src\\BaseBundle\\Resources\\views\\Default\\index.html.twig");
    }
}

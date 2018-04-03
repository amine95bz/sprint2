<?php

/* BaseBundle:Default:index.html.twig */
class __TwigTemplate_b236ca7529d43ec9cb01b026af564a5e3a4d04f98fe0603980fe4683a4dedb2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Front.html.twig", "BaseBundle:Default:index.html.twig", 1);
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
        $__internal_63f55daf05f9c3ddb4a9a12c86dcf42d159035b189292921dfe34cfad0feea41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f55daf05f9c3ddb4a9a12c86dcf42d159035b189292921dfe34cfad0feea41->enter($__internal_63f55daf05f9c3ddb4a9a12c86dcf42d159035b189292921dfe34cfad0feea41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseBundle:Default:index.html.twig"));

        $__internal_b4b9249b183a7d4fdc46e2e2f3b310e79ec21b725b34594549d24f07f6f2e5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b9249b183a7d4fdc46e2e2f3b310e79ec21b725b34594549d24f07f6f2e5b4->enter($__internal_b4b9249b183a7d4fdc46e2e2f3b310e79ec21b725b34594549d24f07f6f2e5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BaseBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63f55daf05f9c3ddb4a9a12c86dcf42d159035b189292921dfe34cfad0feea41->leave($__internal_63f55daf05f9c3ddb4a9a12c86dcf42d159035b189292921dfe34cfad0feea41_prof);

        
        $__internal_b4b9249b183a7d4fdc46e2e2f3b310e79ec21b725b34594549d24f07f6f2e5b4->leave($__internal_b4b9249b183a7d4fdc46e2e2f3b310e79ec21b725b34594549d24f07f6f2e5b4_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_09cac8a2ce1d071375e42c913af44ed313cd88f8d72bdbb96ee7c0a5dfbc076b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09cac8a2ce1d071375e42c913af44ed313cd88f8d72bdbb96ee7c0a5dfbc076b->enter($__internal_09cac8a2ce1d071375e42c913af44ed313cd88f8d72bdbb96ee7c0a5dfbc076b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_4db3e88fdfefc41d03e42eaa893ab7c13c08a09c8773914bee3ae7639ce7669d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db3e88fdfefc41d03e42eaa893ab7c13c08a09c8773914bee3ae7639ce7669d->enter($__internal_4db3e88fdfefc41d03e42eaa893ab7c13c08a09c8773914bee3ae7639ce7669d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <h1>  Hello </h1>
";
        
        $__internal_4db3e88fdfefc41d03e42eaa893ab7c13c08a09c8773914bee3ae7639ce7669d->leave($__internal_4db3e88fdfefc41d03e42eaa893ab7c13c08a09c8773914bee3ae7639ce7669d_prof);

        
        $__internal_09cac8a2ce1d071375e42c913af44ed313cd88f8d72bdbb96ee7c0a5dfbc076b->leave($__internal_09cac8a2ce1d071375e42c913af44ed313cd88f8d72bdbb96ee7c0a5dfbc076b_prof);

    }

    public function getTemplateName()
    {
        return "BaseBundle:Default:index.html.twig";
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
", "BaseBundle:Default:index.html.twig", "C:\\wamp64\\www\\medina1\\src\\BaseBundle/Resources/views/Default/index.html.twig");
    }
}

<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_25fdea414395d2f66414e9eb9c7570c0b6a6346ae7092652aab5cac6bd9048a0 extends Twig_Template
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
        $__internal_b8c7ecf29d21effd16ff3e553504ec433b34c09689cdeb38711ceb458074a92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c7ecf29d21effd16ff3e553504ec433b34c09689cdeb38711ceb458074a92b->enter($__internal_b8c7ecf29d21effd16ff3e553504ec433b34c09689cdeb38711ceb458074a92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_cab06ffb26d264f4c593349277955d023bf50c1eca94d0dc1e9c1fa5459a8674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab06ffb26d264f4c593349277955d023bf50c1eca94d0dc1e9c1fa5459a8674->enter($__internal_cab06ffb26d264f4c593349277955d023bf50c1eca94d0dc1e9c1fa5459a8674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_b8c7ecf29d21effd16ff3e553504ec433b34c09689cdeb38711ceb458074a92b->leave($__internal_b8c7ecf29d21effd16ff3e553504ec433b34c09689cdeb38711ceb458074a92b_prof);

        
        $__internal_cab06ffb26d264f4c593349277955d023bf50c1eca94d0dc1e9c1fa5459a8674->leave($__internal_cab06ffb26d264f4c593349277955d023bf50c1eca94d0dc1e9c1fa5459a8674_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}

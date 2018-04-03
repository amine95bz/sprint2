<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_95d2666dfcf4911c73788ab6d3ea37c50361150e4bed5e5495c50692d4ea08aa extends Twig_Template
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
        $__internal_150dc33051332a15575125c8d578736a2bc74ed17b626bbbf8840532b356b7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150dc33051332a15575125c8d578736a2bc74ed17b626bbbf8840532b356b7db->enter($__internal_150dc33051332a15575125c8d578736a2bc74ed17b626bbbf8840532b356b7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_e21b11bf400e98b9859b73fc5991c6b997d1b12a690bae676dd90b22f09f3bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21b11bf400e98b9859b73fc5991c6b997d1b12a690bae676dd90b22f09f3bdc->enter($__internal_e21b11bf400e98b9859b73fc5991c6b997d1b12a690bae676dd90b22f09f3bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_150dc33051332a15575125c8d578736a2bc74ed17b626bbbf8840532b356b7db->leave($__internal_150dc33051332a15575125c8d578736a2bc74ed17b626bbbf8840532b356b7db_prof);

        
        $__internal_e21b11bf400e98b9859b73fc5991c6b997d1b12a690bae676dd90b22f09f3bdc->leave($__internal_e21b11bf400e98b9859b73fc5991c6b997d1b12a690bae676dd90b22f09f3bdc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}

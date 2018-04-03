<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e3ed5c2c098b8ccca625018a53a10d9f2c1936203c88ea0aa75a8bde50dbc910 extends Twig_Template
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
        $__internal_a624bfc5d82ccede651731dfd3a2177eb4df3a35da358b292d3225acfff2ebd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a624bfc5d82ccede651731dfd3a2177eb4df3a35da358b292d3225acfff2ebd5->enter($__internal_a624bfc5d82ccede651731dfd3a2177eb4df3a35da358b292d3225acfff2ebd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_a61a1210aba738be715f8a80f6412f0566c8a25505a0f099d2d05dd1192dee74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61a1210aba738be715f8a80f6412f0566c8a25505a0f099d2d05dd1192dee74->enter($__internal_a61a1210aba738be715f8a80f6412f0566c8a25505a0f099d2d05dd1192dee74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a624bfc5d82ccede651731dfd3a2177eb4df3a35da358b292d3225acfff2ebd5->leave($__internal_a624bfc5d82ccede651731dfd3a2177eb4df3a35da358b292d3225acfff2ebd5_prof);

        
        $__internal_a61a1210aba738be715f8a80f6412f0566c8a25505a0f099d2d05dd1192dee74->leave($__internal_a61a1210aba738be715f8a80f6412f0566c8a25505a0f099d2d05dd1192dee74_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

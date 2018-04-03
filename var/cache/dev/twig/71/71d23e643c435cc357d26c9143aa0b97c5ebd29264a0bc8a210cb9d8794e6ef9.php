<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c23d4a10810d59c1f16e479ef1b902c85cffa1db01754808ccda920bea227764 extends Twig_Template
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
        $__internal_1a8728ada955e4f03a34fbf4b05304c42ecc03989ae2b9721c4e3bf7194a8f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8728ada955e4f03a34fbf4b05304c42ecc03989ae2b9721c4e3bf7194a8f1f->enter($__internal_1a8728ada955e4f03a34fbf4b05304c42ecc03989ae2b9721c4e3bf7194a8f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_5face5bfe124152c2d1ac5231ad1ee5a5faae10e2441adb06e243ea7398e11d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5face5bfe124152c2d1ac5231ad1ee5a5faae10e2441adb06e243ea7398e11d6->enter($__internal_5face5bfe124152c2d1ac5231ad1ee5a5faae10e2441adb06e243ea7398e11d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1a8728ada955e4f03a34fbf4b05304c42ecc03989ae2b9721c4e3bf7194a8f1f->leave($__internal_1a8728ada955e4f03a34fbf4b05304c42ecc03989ae2b9721c4e3bf7194a8f1f_prof);

        
        $__internal_5face5bfe124152c2d1ac5231ad1ee5a5faae10e2441adb06e243ea7398e11d6->leave($__internal_5face5bfe124152c2d1ac5231ad1ee5a5faae10e2441adb06e243ea7398e11d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}

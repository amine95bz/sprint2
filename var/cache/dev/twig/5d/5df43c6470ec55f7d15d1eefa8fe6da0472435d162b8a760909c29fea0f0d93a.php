<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7777822de53ec48cde1e6b1498729b3ec5f3b2a103f56987a7f61b6302817298 extends Twig_Template
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
        $__internal_0098b013d6779c1477429ef5ba9d0c26a6ac51d2e440ae1adb02195799086ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0098b013d6779c1477429ef5ba9d0c26a6ac51d2e440ae1adb02195799086ea7->enter($__internal_0098b013d6779c1477429ef5ba9d0c26a6ac51d2e440ae1adb02195799086ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_9f1d45314c86d0b657001dc19e1fb5f9a2dba69348577a5411636757c8e9af6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1d45314c86d0b657001dc19e1fb5f9a2dba69348577a5411636757c8e9af6a->enter($__internal_9f1d45314c86d0b657001dc19e1fb5f9a2dba69348577a5411636757c8e9af6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0098b013d6779c1477429ef5ba9d0c26a6ac51d2e440ae1adb02195799086ea7->leave($__internal_0098b013d6779c1477429ef5ba9d0c26a6ac51d2e440ae1adb02195799086ea7_prof);

        
        $__internal_9f1d45314c86d0b657001dc19e1fb5f9a2dba69348577a5411636757c8e9af6a->leave($__internal_9f1d45314c86d0b657001dc19e1fb5f9a2dba69348577a5411636757c8e9af6a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

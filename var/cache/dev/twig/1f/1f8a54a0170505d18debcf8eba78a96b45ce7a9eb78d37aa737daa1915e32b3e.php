<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_cc4095145c17cefdbfa52adfa8f0a5e641f10e77153f7da8843a16b2a07ab251 extends Twig_Template
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
        $__internal_c4b960d1095cee4ee9ca3866176bac14d29c60915aadb6225b4f986280d9a94c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b960d1095cee4ee9ca3866176bac14d29c60915aadb6225b4f986280d9a94c->enter($__internal_c4b960d1095cee4ee9ca3866176bac14d29c60915aadb6225b4f986280d9a94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_993ac4ef8b7e48ea5f1219b4c6b56b9f9c7c296459776b71d0f3faaae1e8f925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993ac4ef8b7e48ea5f1219b4c6b56b9f9c7c296459776b71d0f3faaae1e8f925->enter($__internal_993ac4ef8b7e48ea5f1219b4c6b56b9f9c7c296459776b71d0f3faaae1e8f925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c4b960d1095cee4ee9ca3866176bac14d29c60915aadb6225b4f986280d9a94c->leave($__internal_c4b960d1095cee4ee9ca3866176bac14d29c60915aadb6225b4f986280d9a94c_prof);

        
        $__internal_993ac4ef8b7e48ea5f1219b4c6b56b9f9c7c296459776b71d0f3faaae1e8f925->leave($__internal_993ac4ef8b7e48ea5f1219b4c6b56b9f9c7c296459776b71d0f3faaae1e8f925_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}

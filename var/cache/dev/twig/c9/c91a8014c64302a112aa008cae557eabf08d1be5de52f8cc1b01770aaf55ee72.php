<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0ec15115cbc7bccd896f1b1f70dd7ad14850ab40a967e402d122caa980a41ea8 extends Twig_Template
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
        $__internal_21c4887dfda140fecea4e8222c50766eb88920c67622d38d2ed24ce8db5f49fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c4887dfda140fecea4e8222c50766eb88920c67622d38d2ed24ce8db5f49fa->enter($__internal_21c4887dfda140fecea4e8222c50766eb88920c67622d38d2ed24ce8db5f49fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f588953e6fd17e62a717b7806d9e80c0e5252bd32879498adb8a5ef9c037381b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f588953e6fd17e62a717b7806d9e80c0e5252bd32879498adb8a5ef9c037381b->enter($__internal_f588953e6fd17e62a717b7806d9e80c0e5252bd32879498adb8a5ef9c037381b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_21c4887dfda140fecea4e8222c50766eb88920c67622d38d2ed24ce8db5f49fa->leave($__internal_21c4887dfda140fecea4e8222c50766eb88920c67622d38d2ed24ce8db5f49fa_prof);

        
        $__internal_f588953e6fd17e62a717b7806d9e80c0e5252bd32879498adb8a5ef9c037381b->leave($__internal_f588953e6fd17e62a717b7806d9e80c0e5252bd32879498adb8a5ef9c037381b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e8f8063ac6bd260ef6c0a28aa3322274ca59c2982db7b9d4765d55e558ca1d60 extends Twig_Template
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
        $__internal_2b300b71ca551bcbda0535f276a4b6a20d7e64d730c80eef445e05bacce5736a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b300b71ca551bcbda0535f276a4b6a20d7e64d730c80eef445e05bacce5736a->enter($__internal_2b300b71ca551bcbda0535f276a4b6a20d7e64d730c80eef445e05bacce5736a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_ad3a78805ebc777d99bbf9b217bde465b0374abeacd517986ff92c1164761f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3a78805ebc777d99bbf9b217bde465b0374abeacd517986ff92c1164761f32->enter($__internal_ad3a78805ebc777d99bbf9b217bde465b0374abeacd517986ff92c1164761f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2b300b71ca551bcbda0535f276a4b6a20d7e64d730c80eef445e05bacce5736a->leave($__internal_2b300b71ca551bcbda0535f276a4b6a20d7e64d730c80eef445e05bacce5736a_prof);

        
        $__internal_ad3a78805ebc777d99bbf9b217bde465b0374abeacd517986ff92c1164761f32->leave($__internal_ad3a78805ebc777d99bbf9b217bde465b0374abeacd517986ff92c1164761f32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

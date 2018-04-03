<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_68f76abea6118cea5736d0f52a0fd202a265b257092251a30bf572abe1978c33 extends Twig_Template
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
        $__internal_028b691a6c67bfd7695f5f81f16b2bcb805627f4173f7fe563978da90ea9dff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028b691a6c67bfd7695f5f81f16b2bcb805627f4173f7fe563978da90ea9dff5->enter($__internal_028b691a6c67bfd7695f5f81f16b2bcb805627f4173f7fe563978da90ea9dff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7cb3bbd0ff7f0e8bc19b159d0fd43cb9fe91fe34db74f619aa662fcd756c8657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb3bbd0ff7f0e8bc19b159d0fd43cb9fe91fe34db74f619aa662fcd756c8657->enter($__internal_7cb3bbd0ff7f0e8bc19b159d0fd43cb9fe91fe34db74f619aa662fcd756c8657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_028b691a6c67bfd7695f5f81f16b2bcb805627f4173f7fe563978da90ea9dff5->leave($__internal_028b691a6c67bfd7695f5f81f16b2bcb805627f4173f7fe563978da90ea9dff5_prof);

        
        $__internal_7cb3bbd0ff7f0e8bc19b159d0fd43cb9fe91fe34db74f619aa662fcd756c8657->leave($__internal_7cb3bbd0ff7f0e8bc19b159d0fd43cb9fe91fe34db74f619aa662fcd756c8657_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

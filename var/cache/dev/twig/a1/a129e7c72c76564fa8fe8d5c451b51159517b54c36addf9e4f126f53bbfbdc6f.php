<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3a9b015d9bac6065cec79bd972bc36a29f8140d77aa36df53fb75a32c7bc6ac8 extends Twig_Template
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
        $__internal_5b5d6c81c5f3e959b2b9c27f64def9351c4e507bb5a8c9c9a1b915e822d51ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5d6c81c5f3e959b2b9c27f64def9351c4e507bb5a8c9c9a1b915e822d51ca2->enter($__internal_5b5d6c81c5f3e959b2b9c27f64def9351c4e507bb5a8c9c9a1b915e822d51ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f46484c8def99790b7c3c76925aff4506a4737754c38e5a11ed7fb49029bc119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46484c8def99790b7c3c76925aff4506a4737754c38e5a11ed7fb49029bc119->enter($__internal_f46484c8def99790b7c3c76925aff4506a4737754c38e5a11ed7fb49029bc119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5b5d6c81c5f3e959b2b9c27f64def9351c4e507bb5a8c9c9a1b915e822d51ca2->leave($__internal_5b5d6c81c5f3e959b2b9c27f64def9351c4e507bb5a8c9c9a1b915e822d51ca2_prof);

        
        $__internal_f46484c8def99790b7c3c76925aff4506a4737754c38e5a11ed7fb49029bc119->leave($__internal_f46484c8def99790b7c3c76925aff4506a4737754c38e5a11ed7fb49029bc119_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

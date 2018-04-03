<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5bbf62872a324e4d3c772b5a37634c0fdd3a83d3f812c3f5a6845483d8c23e6d extends Twig_Template
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
        $__internal_20bc0719664a0c01bc9201dc4a92db8bd72d25c329bb7a4c413b9bac903da518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bc0719664a0c01bc9201dc4a92db8bd72d25c329bb7a4c413b9bac903da518->enter($__internal_20bc0719664a0c01bc9201dc4a92db8bd72d25c329bb7a4c413b9bac903da518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_2222849fa2a4b4d4f8a898ee3a719f936341e107b83ff6810607e1096d93d1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2222849fa2a4b4d4f8a898ee3a719f936341e107b83ff6810607e1096d93d1ad->enter($__internal_2222849fa2a4b4d4f8a898ee3a719f936341e107b83ff6810607e1096d93d1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_20bc0719664a0c01bc9201dc4a92db8bd72d25c329bb7a4c413b9bac903da518->leave($__internal_20bc0719664a0c01bc9201dc4a92db8bd72d25c329bb7a4c413b9bac903da518_prof);

        
        $__internal_2222849fa2a4b4d4f8a898ee3a719f936341e107b83ff6810607e1096d93d1ad->leave($__internal_2222849fa2a4b4d4f8a898ee3a719f936341e107b83ff6810607e1096d93d1ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

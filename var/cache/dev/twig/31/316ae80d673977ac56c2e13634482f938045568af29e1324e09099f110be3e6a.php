<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_351bf3cd346d5b4ab11ba2c773d123344dec44f40a7794368f4f3e092c73b167 extends Twig_Template
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
        $__internal_329f547d93e67029f057104b5f0d55db71457e2d86b12604a265d4dfac66aa4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_329f547d93e67029f057104b5f0d55db71457e2d86b12604a265d4dfac66aa4c->enter($__internal_329f547d93e67029f057104b5f0d55db71457e2d86b12604a265d4dfac66aa4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9f6d069c0877ecb6446d7619445a79852094c39b6a5bb87930ffe54f61a5ecc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6d069c0877ecb6446d7619445a79852094c39b6a5bb87930ffe54f61a5ecc7->enter($__internal_9f6d069c0877ecb6446d7619445a79852094c39b6a5bb87930ffe54f61a5ecc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_329f547d93e67029f057104b5f0d55db71457e2d86b12604a265d4dfac66aa4c->leave($__internal_329f547d93e67029f057104b5f0d55db71457e2d86b12604a265d4dfac66aa4c_prof);

        
        $__internal_9f6d069c0877ecb6446d7619445a79852094c39b6a5bb87930ffe54f61a5ecc7->leave($__internal_9f6d069c0877ecb6446d7619445a79852094c39b6a5bb87930ffe54f61a5ecc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

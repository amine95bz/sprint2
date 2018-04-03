<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b9fb65bc72493479c7f51c7aad99331a6c6d374b8dd94b349df4986ec64e83dd extends Twig_Template
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
        $__internal_f4c2e1037f36d73e298657a6f2b08e4b1fd6435e3529f2d5080797c38fc42569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c2e1037f36d73e298657a6f2b08e4b1fd6435e3529f2d5080797c38fc42569->enter($__internal_f4c2e1037f36d73e298657a6f2b08e4b1fd6435e3529f2d5080797c38fc42569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_db9e860f512bc0fb0116e0ea67059605843ee11a850c3486da7a9cba3c3afd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9e860f512bc0fb0116e0ea67059605843ee11a850c3486da7a9cba3c3afd74->enter($__internal_db9e860f512bc0fb0116e0ea67059605843ee11a850c3486da7a9cba3c3afd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f4c2e1037f36d73e298657a6f2b08e4b1fd6435e3529f2d5080797c38fc42569->leave($__internal_f4c2e1037f36d73e298657a6f2b08e4b1fd6435e3529f2d5080797c38fc42569_prof);

        
        $__internal_db9e860f512bc0fb0116e0ea67059605843ee11a850c3486da7a9cba3c3afd74->leave($__internal_db9e860f512bc0fb0116e0ea67059605843ee11a850c3486da7a9cba3c3afd74_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

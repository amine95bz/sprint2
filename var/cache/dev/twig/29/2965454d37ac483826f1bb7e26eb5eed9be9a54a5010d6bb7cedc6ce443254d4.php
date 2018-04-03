<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_091f12fae68396494ab15e639d7bc3c31d66940779c9232e08298119a8694d9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57ea3b85e9240b14efe5bc66eb2c5cc02a21705b8d4f06a4b90bf16f9f9e5ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ea3b85e9240b14efe5bc66eb2c5cc02a21705b8d4f06a4b90bf16f9f9e5ce3->enter($__internal_57ea3b85e9240b14efe5bc66eb2c5cc02a21705b8d4f06a4b90bf16f9f9e5ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e7a256c8ba6e64cfa7646dbe65796fd12a36fd60f7aeb8a76918ca83599338ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a256c8ba6e64cfa7646dbe65796fd12a36fd60f7aeb8a76918ca83599338ce->enter($__internal_e7a256c8ba6e64cfa7646dbe65796fd12a36fd60f7aeb8a76918ca83599338ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_57ea3b85e9240b14efe5bc66eb2c5cc02a21705b8d4f06a4b90bf16f9f9e5ce3->leave($__internal_57ea3b85e9240b14efe5bc66eb2c5cc02a21705b8d4f06a4b90bf16f9f9e5ce3_prof);

        
        $__internal_e7a256c8ba6e64cfa7646dbe65796fd12a36fd60f7aeb8a76918ca83599338ce->leave($__internal_e7a256c8ba6e64cfa7646dbe65796fd12a36fd60f7aeb8a76918ca83599338ce_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_22068933aa4efd5e1acb4e64e9e8f1e28f5332c5f5cfadb5be5a59a0b1f838ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22068933aa4efd5e1acb4e64e9e8f1e28f5332c5f5cfadb5be5a59a0b1f838ef->enter($__internal_22068933aa4efd5e1acb4e64e9e8f1e28f5332c5f5cfadb5be5a59a0b1f838ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3217ece984b579dc47d04f48ce3e64c7517a1bcf327b5d55cf4b16e7302d951d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3217ece984b579dc47d04f48ce3e64c7517a1bcf327b5d55cf4b16e7302d951d->enter($__internal_3217ece984b579dc47d04f48ce3e64c7517a1bcf327b5d55cf4b16e7302d951d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3217ece984b579dc47d04f48ce3e64c7517a1bcf327b5d55cf4b16e7302d951d->leave($__internal_3217ece984b579dc47d04f48ce3e64c7517a1bcf327b5d55cf4b16e7302d951d_prof);

        
        $__internal_22068933aa4efd5e1acb4e64e9e8f1e28f5332c5f5cfadb5be5a59a0b1f838ef->leave($__internal_22068933aa4efd5e1acb4e64e9e8f1e28f5332c5f5cfadb5be5a59a0b1f838ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

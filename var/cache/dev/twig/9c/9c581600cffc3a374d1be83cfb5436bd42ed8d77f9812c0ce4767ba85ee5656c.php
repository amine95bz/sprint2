<?php

/* LocalBundle:Default:ajout_local.html.twig */
class __TwigTemplate_fa7470f7ad9f234216355d623a401dfbef70c0ec58ca84f154f87d63012474aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Front.html.twig", "LocalBundle:Default:ajout_local.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c48d15a609fd2613ef48174ccc05f6590616b2bbf2dd237e59ff710b80e8d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c48d15a609fd2613ef48174ccc05f6590616b2bbf2dd237e59ff710b80e8d15->enter($__internal_8c48d15a609fd2613ef48174ccc05f6590616b2bbf2dd237e59ff710b80e8d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Default:ajout_local.html.twig"));

        $__internal_332619a4d35db28a04b5808d1d1ce1888e96dde06c75820040960b7ec92e5c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332619a4d35db28a04b5808d1d1ce1888e96dde06c75820040960b7ec92e5c52->enter($__internal_332619a4d35db28a04b5808d1d1ce1888e96dde06c75820040960b7ec92e5c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Default:ajout_local.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c48d15a609fd2613ef48174ccc05f6590616b2bbf2dd237e59ff710b80e8d15->leave($__internal_8c48d15a609fd2613ef48174ccc05f6590616b2bbf2dd237e59ff710b80e8d15_prof);

        
        $__internal_332619a4d35db28a04b5808d1d1ce1888e96dde06c75820040960b7ec92e5c52->leave($__internal_332619a4d35db28a04b5808d1d1ce1888e96dde06c75820040960b7ec92e5c52_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_6b6914ed03f23b3dfcee8342d354c61eab2b01596fe6137f089f5ba24be756cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b6914ed03f23b3dfcee8342d354c61eab2b01596fe6137f089f5ba24be756cb->enter($__internal_6b6914ed03f23b3dfcee8342d354c61eab2b01596fe6137f089f5ba24be756cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_046daf422c5fa6c62b1a9d683ac83b7429194b8668d81d0a8c972592160fb49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046daf422c5fa6c62b1a9d683ac83b7429194b8668d81d0a8c972592160fb49c->enter($__internal_046daf422c5fa6c62b1a9d683ac83b7429194b8668d81d0a8c972592160fb49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <h3>Ajouter un local</h3>

    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "

";
        
        $__internal_046daf422c5fa6c62b1a9d683ac83b7429194b8668d81d0a8c972592160fb49c->leave($__internal_046daf422c5fa6c62b1a9d683ac83b7429194b8668d81d0a8c972592160fb49c_prof);

        
        $__internal_6b6914ed03f23b3dfcee8342d354c61eab2b01596fe6137f089f5ba24be756cb->leave($__internal_6b6914ed03f23b3dfcee8342d354c61eab2b01596fe6137f089f5ba24be756cb_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Default:ajout_local.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Front.html.twig' %}
{% block container %}
    <h3>Ajouter un local</h3>

    {{ form(Form) }}

{% endblock %}", "LocalBundle:Default:ajout_local.html.twig", "C:\\wamp64\\www\\medina1\\src\\LocalBundle/Resources/views/Default/ajout_local.html.twig");
    }
}

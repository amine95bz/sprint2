<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce5e298ea7c566ba912d0cb4d5695f690b63e95c6189996a45de6c3ac1516709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6501004952c8c34867b91c712bc6d1a455fb132b5e672f03f4f8b84a2947f194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6501004952c8c34867b91c712bc6d1a455fb132b5e672f03f4f8b84a2947f194->enter($__internal_6501004952c8c34867b91c712bc6d1a455fb132b5e672f03f4f8b84a2947f194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4ac9958d17473edd8e61e8ea9d01c7056b8082f389f43fc47ab455014e7b5e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac9958d17473edd8e61e8ea9d01c7056b8082f389f43fc47ab455014e7b5e82->enter($__internal_4ac9958d17473edd8e61e8ea9d01c7056b8082f389f43fc47ab455014e7b5e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6501004952c8c34867b91c712bc6d1a455fb132b5e672f03f4f8b84a2947f194->leave($__internal_6501004952c8c34867b91c712bc6d1a455fb132b5e672f03f4f8b84a2947f194_prof);

        
        $__internal_4ac9958d17473edd8e61e8ea9d01c7056b8082f389f43fc47ab455014e7b5e82->leave($__internal_4ac9958d17473edd8e61e8ea9d01c7056b8082f389f43fc47ab455014e7b5e82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68f02fa7104176347659212262a9de5bdf6e6a7861d62794e1d9dd87b0b534d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f02fa7104176347659212262a9de5bdf6e6a7861d62794e1d9dd87b0b534d4->enter($__internal_68f02fa7104176347659212262a9de5bdf6e6a7861d62794e1d9dd87b0b534d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4f9033c63db70df5fb11904661263be965ddc5af86c8e8cf58cad45f803ec46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f9033c63db70df5fb11904661263be965ddc5af86c8e8cf58cad45f803ec46->enter($__internal_a4f9033c63db70df5fb11904661263be965ddc5af86c8e8cf58cad45f803ec46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a4f9033c63db70df5fb11904661263be965ddc5af86c8e8cf58cad45f803ec46->leave($__internal_a4f9033c63db70df5fb11904661263be965ddc5af86c8e8cf58cad45f803ec46_prof);

        
        $__internal_68f02fa7104176347659212262a9de5bdf6e6a7861d62794e1d9dd87b0b534d4->leave($__internal_68f02fa7104176347659212262a9de5bdf6e6a7861d62794e1d9dd87b0b534d4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3edfffdb37a32e05bdd75ee56d28084aab0f6ab4251ffddefa236c9056db606c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edfffdb37a32e05bdd75ee56d28084aab0f6ab4251ffddefa236c9056db606c->enter($__internal_3edfffdb37a32e05bdd75ee56d28084aab0f6ab4251ffddefa236c9056db606c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ccce79946531b2ac63df26ccaed90c6b009caf88e9a932383fe5e77a444269d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccce79946531b2ac63df26ccaed90c6b009caf88e9a932383fe5e77a444269d6->enter($__internal_ccce79946531b2ac63df26ccaed90c6b009caf88e9a932383fe5e77a444269d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ccce79946531b2ac63df26ccaed90c6b009caf88e9a932383fe5e77a444269d6->leave($__internal_ccce79946531b2ac63df26ccaed90c6b009caf88e9a932383fe5e77a444269d6_prof);

        
        $__internal_3edfffdb37a32e05bdd75ee56d28084aab0f6ab4251ffddefa236c9056db606c->leave($__internal_3edfffdb37a32e05bdd75ee56d28084aab0f6ab4251ffddefa236c9056db606c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58a19ee57a5eb80084016ceaa6de03c07f813db7e0249972258b0e0cb7015618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a19ee57a5eb80084016ceaa6de03c07f813db7e0249972258b0e0cb7015618->enter($__internal_58a19ee57a5eb80084016ceaa6de03c07f813db7e0249972258b0e0cb7015618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63b857dbd4ff727ba43aea65f6fc94298d91414dcb73111fa9148aa72f7831d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b857dbd4ff727ba43aea65f6fc94298d91414dcb73111fa9148aa72f7831d4->enter($__internal_63b857dbd4ff727ba43aea65f6fc94298d91414dcb73111fa9148aa72f7831d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_63b857dbd4ff727ba43aea65f6fc94298d91414dcb73111fa9148aa72f7831d4->leave($__internal_63b857dbd4ff727ba43aea65f6fc94298d91414dcb73111fa9148aa72f7831d4_prof);

        
        $__internal_58a19ee57a5eb80084016ceaa6de03c07f813db7e0249972258b0e0cb7015618->leave($__internal_58a19ee57a5eb80084016ceaa6de03c07f813db7e0249972258b0e0cb7015618_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b96c11e3fa952fbed6e8ea1dc22d6540700f12d69310ce14f81a786ce38e44d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96c11e3fa952fbed6e8ea1dc22d6540700f12d69310ce14f81a786ce38e44d0->enter($__internal_b96c11e3fa952fbed6e8ea1dc22d6540700f12d69310ce14f81a786ce38e44d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b4e91e45d127b82b5bb55fd24cbf2706fceaa7096d60b9c14665373a3c5c062d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e91e45d127b82b5bb55fd24cbf2706fceaa7096d60b9c14665373a3c5c062d->enter($__internal_b4e91e45d127b82b5bb55fd24cbf2706fceaa7096d60b9c14665373a3c5c062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b96c11e3fa952fbed6e8ea1dc22d6540700f12d69310ce14f81a786ce38e44d0->leave($__internal_b96c11e3fa952fbed6e8ea1dc22d6540700f12d69310ce14f81a786ce38e44d0_prof);

        
        $__internal_b4e91e45d127b82b5bb55fd24cbf2706fceaa7096d60b9c14665373a3c5c062d->leave($__internal_b4e91e45d127b82b5bb55fd24cbf2706fceaa7096d60b9c14665373a3c5c062d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4667977009520f8a26db43a9597f5eba4cc8abfa2fc3e243bddcdc91898c2157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4667977009520f8a26db43a9597f5eba4cc8abfa2fc3e243bddcdc91898c2157->enter($__internal_4667977009520f8a26db43a9597f5eba4cc8abfa2fc3e243bddcdc91898c2157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_743620dfcc336653d121a63d0110bfbe59006294e4f8cb4a8515e807919e9520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743620dfcc336653d121a63d0110bfbe59006294e4f8cb4a8515e807919e9520->enter($__internal_743620dfcc336653d121a63d0110bfbe59006294e4f8cb4a8515e807919e9520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_743620dfcc336653d121a63d0110bfbe59006294e4f8cb4a8515e807919e9520->leave($__internal_743620dfcc336653d121a63d0110bfbe59006294e4f8cb4a8515e807919e9520_prof);

        
        $__internal_4667977009520f8a26db43a9597f5eba4cc8abfa2fc3e243bddcdc91898c2157->leave($__internal_4667977009520f8a26db43a9597f5eba4cc8abfa2fc3e243bddcdc91898c2157_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dde132b16454e3f85a2654aa70118a3bc23e4215e1c32f4e2a28238fa03749dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde132b16454e3f85a2654aa70118a3bc23e4215e1c32f4e2a28238fa03749dd->enter($__internal_dde132b16454e3f85a2654aa70118a3bc23e4215e1c32f4e2a28238fa03749dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7f63349e5c6150139e1bbaba18d757983eb5440a975be417bda8c64ee3a4a66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f63349e5c6150139e1bbaba18d757983eb5440a975be417bda8c64ee3a4a66a->enter($__internal_7f63349e5c6150139e1bbaba18d757983eb5440a975be417bda8c64ee3a4a66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f63349e5c6150139e1bbaba18d757983eb5440a975be417bda8c64ee3a4a66a->leave($__internal_7f63349e5c6150139e1bbaba18d757983eb5440a975be417bda8c64ee3a4a66a_prof);

        
        $__internal_dde132b16454e3f85a2654aa70118a3bc23e4215e1c32f4e2a28238fa03749dd->leave($__internal_dde132b16454e3f85a2654aa70118a3bc23e4215e1c32f4e2a28238fa03749dd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9eef80ee73689349a339fb16c051e59b326cff9ea709ed6eedf7724b97cbe6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9eef80ee73689349a339fb16c051e59b326cff9ea709ed6eedf7724b97cbe6a->enter($__internal_c9eef80ee73689349a339fb16c051e59b326cff9ea709ed6eedf7724b97cbe6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b67a69c8d0bf3fcc6b50ed450e51264cfef13b11a4f4cf7bc5e22c63a2b5866e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67a69c8d0bf3fcc6b50ed450e51264cfef13b11a4f4cf7bc5e22c63a2b5866e->enter($__internal_b67a69c8d0bf3fcc6b50ed450e51264cfef13b11a4f4cf7bc5e22c63a2b5866e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b67a69c8d0bf3fcc6b50ed450e51264cfef13b11a4f4cf7bc5e22c63a2b5866e->leave($__internal_b67a69c8d0bf3fcc6b50ed450e51264cfef13b11a4f4cf7bc5e22c63a2b5866e_prof);

        
        $__internal_c9eef80ee73689349a339fb16c051e59b326cff9ea709ed6eedf7724b97cbe6a->leave($__internal_c9eef80ee73689349a339fb16c051e59b326cff9ea709ed6eedf7724b97cbe6a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

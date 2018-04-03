<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_83dde948bc44ddd84f9a8315a82dc1d0c2ae935fc5a0a052da887ea098dc05ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5d18c72109ea13a972c44a0edad60d1a5fb47a69cb6aed697567634dca57f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d18c72109ea13a972c44a0edad60d1a5fb47a69cb6aed697567634dca57f6a->enter($__internal_f5d18c72109ea13a972c44a0edad60d1a5fb47a69cb6aed697567634dca57f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_7f25deee44b842fe2e3429846726c7f51d8631c81f4204d729ed426df9b65c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f25deee44b842fe2e3429846726c7f51d8631c81f4204d729ed426df9b65c4f->enter($__internal_7f25deee44b842fe2e3429846726c7f51d8631c81f4204d729ed426df9b65c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5d18c72109ea13a972c44a0edad60d1a5fb47a69cb6aed697567634dca57f6a->leave($__internal_f5d18c72109ea13a972c44a0edad60d1a5fb47a69cb6aed697567634dca57f6a_prof);

        
        $__internal_7f25deee44b842fe2e3429846726c7f51d8631c81f4204d729ed426df9b65c4f->leave($__internal_7f25deee44b842fe2e3429846726c7f51d8631c81f4204d729ed426df9b65c4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a8c2cc709079f1597d6cc1b32e45b914316aab5315f16fcfadfb229a7e1bfb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a8c2cc709079f1597d6cc1b32e45b914316aab5315f16fcfadfb229a7e1bfb0->enter($__internal_2a8c2cc709079f1597d6cc1b32e45b914316aab5315f16fcfadfb229a7e1bfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_170d4030f2af3f8a48dd02ff9ac671cf689c412f29660db4e8165beaebf43236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170d4030f2af3f8a48dd02ff9ac671cf689c412f29660db4e8165beaebf43236->enter($__internal_170d4030f2af3f8a48dd02ff9ac671cf689c412f29660db4e8165beaebf43236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_170d4030f2af3f8a48dd02ff9ac671cf689c412f29660db4e8165beaebf43236->leave($__internal_170d4030f2af3f8a48dd02ff9ac671cf689c412f29660db4e8165beaebf43236_prof);

        
        $__internal_2a8c2cc709079f1597d6cc1b32e45b914316aab5315f16fcfadfb229a7e1bfb0->leave($__internal_2a8c2cc709079f1597d6cc1b32e45b914316aab5315f16fcfadfb229a7e1bfb0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}

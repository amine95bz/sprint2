<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_7ea2ea09919afd63688539de627ca22ef1c2e92c2c61ee1f9f9610ba67154631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_bc60322170e8ae44330649ef4d928d2e9da87138d74cd70943c35e288dd0c369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc60322170e8ae44330649ef4d928d2e9da87138d74cd70943c35e288dd0c369->enter($__internal_bc60322170e8ae44330649ef4d928d2e9da87138d74cd70943c35e288dd0c369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_eb6b9ca59a516b2af1be0ad4730cc191a04f92c7726155739f560f7bfa656bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6b9ca59a516b2af1be0ad4730cc191a04f92c7726155739f560f7bfa656bd5->enter($__internal_eb6b9ca59a516b2af1be0ad4730cc191a04f92c7726155739f560f7bfa656bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc60322170e8ae44330649ef4d928d2e9da87138d74cd70943c35e288dd0c369->leave($__internal_bc60322170e8ae44330649ef4d928d2e9da87138d74cd70943c35e288dd0c369_prof);

        
        $__internal_eb6b9ca59a516b2af1be0ad4730cc191a04f92c7726155739f560f7bfa656bd5->leave($__internal_eb6b9ca59a516b2af1be0ad4730cc191a04f92c7726155739f560f7bfa656bd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4eed7998d369bbf0853b87cadd189fa873c2cb654f2e4b22ba75b143c2ae28b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eed7998d369bbf0853b87cadd189fa873c2cb654f2e4b22ba75b143c2ae28b5->enter($__internal_4eed7998d369bbf0853b87cadd189fa873c2cb654f2e4b22ba75b143c2ae28b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_83a94082fdfdeafa7577395334c110f469a97dc6924e3a464f5d10035fd193cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a94082fdfdeafa7577395334c110f469a97dc6924e3a464f5d10035fd193cd->enter($__internal_83a94082fdfdeafa7577395334c110f469a97dc6924e3a464f5d10035fd193cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_83a94082fdfdeafa7577395334c110f469a97dc6924e3a464f5d10035fd193cd->leave($__internal_83a94082fdfdeafa7577395334c110f469a97dc6924e3a464f5d10035fd193cd_prof);

        
        $__internal_4eed7998d369bbf0853b87cadd189fa873c2cb654f2e4b22ba75b143c2ae28b5->leave($__internal_4eed7998d369bbf0853b87cadd189fa873c2cb654f2e4b22ba75b143c2ae28b5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}

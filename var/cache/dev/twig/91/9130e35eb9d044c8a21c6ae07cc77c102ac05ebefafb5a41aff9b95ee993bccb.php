<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_62a88edad2b9ca563171ceb02450a79987ac17fc128042c14ac96b71d83318a1 extends Twig_Template
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
        $__internal_8a631e944e5e99472e749d3f816d93c84db5568b424f0b679fa738ec7a626992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a631e944e5e99472e749d3f816d93c84db5568b424f0b679fa738ec7a626992->enter($__internal_8a631e944e5e99472e749d3f816d93c84db5568b424f0b679fa738ec7a626992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_31499947ec05fb10f2cb1d230c28d9c85fdb11c830b9e9c7d17d285a38ca2ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31499947ec05fb10f2cb1d230c28d9c85fdb11c830b9e9c7d17d285a38ca2ad0->enter($__internal_31499947ec05fb10f2cb1d230c28d9c85fdb11c830b9e9c7d17d285a38ca2ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_8a631e944e5e99472e749d3f816d93c84db5568b424f0b679fa738ec7a626992->leave($__internal_8a631e944e5e99472e749d3f816d93c84db5568b424f0b679fa738ec7a626992_prof);

        
        $__internal_31499947ec05fb10f2cb1d230c28d9c85fdb11c830b9e9c7d17d285a38ca2ad0->leave($__internal_31499947ec05fb10f2cb1d230c28d9c85fdb11c830b9e9c7d17d285a38ca2ad0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}

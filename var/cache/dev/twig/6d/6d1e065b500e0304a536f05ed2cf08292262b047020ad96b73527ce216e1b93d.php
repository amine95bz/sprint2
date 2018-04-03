<?php

/* ::base.html.twig */
class __TwigTemplate_f26296c38a436925b47db7e16faab5d777f1d4b8d38a5c7c756130acd737287c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1785bd1ab7e068ba3a9bca38cc7413c10f763f7dbc10126a0b0a1ee75a367467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1785bd1ab7e068ba3a9bca38cc7413c10f763f7dbc10126a0b0a1ee75a367467->enter($__internal_1785bd1ab7e068ba3a9bca38cc7413c10f763f7dbc10126a0b0a1ee75a367467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_ea7610f4622cbe5b1b3e439ff260d036195aa7606db69fc4512fd1cd42d9efe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7610f4622cbe5b1b3e439ff260d036195aa7606db69fc4512fd1cd42d9efe1->enter($__internal_ea7610f4622cbe5b1b3e439ff260d036195aa7606db69fc4512fd1cd42d9efe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1785bd1ab7e068ba3a9bca38cc7413c10f763f7dbc10126a0b0a1ee75a367467->leave($__internal_1785bd1ab7e068ba3a9bca38cc7413c10f763f7dbc10126a0b0a1ee75a367467_prof);

        
        $__internal_ea7610f4622cbe5b1b3e439ff260d036195aa7606db69fc4512fd1cd42d9efe1->leave($__internal_ea7610f4622cbe5b1b3e439ff260d036195aa7606db69fc4512fd1cd42d9efe1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_738bdd927933033ed43aee9276676c28034e28c2b4101addf968900addcd40e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738bdd927933033ed43aee9276676c28034e28c2b4101addf968900addcd40e5->enter($__internal_738bdd927933033ed43aee9276676c28034e28c2b4101addf968900addcd40e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d6cc55cd5648ada591084744f87f53a6456335e38e6f7994a02f7f854c44f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6cc55cd5648ada591084744f87f53a6456335e38e6f7994a02f7f854c44f6a->enter($__internal_7d6cc55cd5648ada591084744f87f53a6456335e38e6f7994a02f7f854c44f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7d6cc55cd5648ada591084744f87f53a6456335e38e6f7994a02f7f854c44f6a->leave($__internal_7d6cc55cd5648ada591084744f87f53a6456335e38e6f7994a02f7f854c44f6a_prof);

        
        $__internal_738bdd927933033ed43aee9276676c28034e28c2b4101addf968900addcd40e5->leave($__internal_738bdd927933033ed43aee9276676c28034e28c2b4101addf968900addcd40e5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_243ea8e94a62b3cc7740fad6715384a2a923e707bbb166efe99d6fa890c5297c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243ea8e94a62b3cc7740fad6715384a2a923e707bbb166efe99d6fa890c5297c->enter($__internal_243ea8e94a62b3cc7740fad6715384a2a923e707bbb166efe99d6fa890c5297c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6633395ba67f87b65d44c84bcb51b3d4e71620d4466a6f4a12665ace110f41cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6633395ba67f87b65d44c84bcb51b3d4e71620d4466a6f4a12665ace110f41cb->enter($__internal_6633395ba67f87b65d44c84bcb51b3d4e71620d4466a6f4a12665ace110f41cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6633395ba67f87b65d44c84bcb51b3d4e71620d4466a6f4a12665ace110f41cb->leave($__internal_6633395ba67f87b65d44c84bcb51b3d4e71620d4466a6f4a12665ace110f41cb_prof);

        
        $__internal_243ea8e94a62b3cc7740fad6715384a2a923e707bbb166efe99d6fa890c5297c->leave($__internal_243ea8e94a62b3cc7740fad6715384a2a923e707bbb166efe99d6fa890c5297c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0657a111c5efc454104e7e356efae5e605d3773b8bf79b8047140502648ff021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0657a111c5efc454104e7e356efae5e605d3773b8bf79b8047140502648ff021->enter($__internal_0657a111c5efc454104e7e356efae5e605d3773b8bf79b8047140502648ff021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa43bf0a0a0e3966c296b26d4056f8e9aab5f49fe8b5e635486bc7f9cf64b5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa43bf0a0a0e3966c296b26d4056f8e9aab5f49fe8b5e635486bc7f9cf64b5ec->enter($__internal_fa43bf0a0a0e3966c296b26d4056f8e9aab5f49fe8b5e635486bc7f9cf64b5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa43bf0a0a0e3966c296b26d4056f8e9aab5f49fe8b5e635486bc7f9cf64b5ec->leave($__internal_fa43bf0a0a0e3966c296b26d4056f8e9aab5f49fe8b5e635486bc7f9cf64b5ec_prof);

        
        $__internal_0657a111c5efc454104e7e356efae5e605d3773b8bf79b8047140502648ff021->leave($__internal_0657a111c5efc454104e7e356efae5e605d3773b8bf79b8047140502648ff021_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ae292b60f8665024099b9837459d56fff058ff3dbf9c02736a1e5b1c90ba603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae292b60f8665024099b9837459d56fff058ff3dbf9c02736a1e5b1c90ba603->enter($__internal_9ae292b60f8665024099b9837459d56fff058ff3dbf9c02736a1e5b1c90ba603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b2a15f0b68ae797144df82ddde58b28d8cee2236ed851b41c8efb5543d863250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a15f0b68ae797144df82ddde58b28d8cee2236ed851b41c8efb5543d863250->enter($__internal_b2a15f0b68ae797144df82ddde58b28d8cee2236ed851b41c8efb5543d863250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b2a15f0b68ae797144df82ddde58b28d8cee2236ed851b41c8efb5543d863250->leave($__internal_b2a15f0b68ae797144df82ddde58b28d8cee2236ed851b41c8efb5543d863250_prof);

        
        $__internal_9ae292b60f8665024099b9837459d56fff058ff3dbf9c02736a1e5b1c90ba603->leave($__internal_9ae292b60f8665024099b9837459d56fff058ff3dbf9c02736a1e5b1c90ba603_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources\\views/base.html.twig");
    }
}

<?php

/* LocalBundle:Default:index.html.twig */
class __TwigTemplate_3faea3dda3b512ada2adda47fdc1eab66e12bcf79920396ee51900c64b93a77e extends Twig_Template
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
        $__internal_0ef7ad852a3ef3f23a1f48d54dcdd1498bf106aad713923443338a268151aab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef7ad852a3ef3f23a1f48d54dcdd1498bf106aad713923443338a268151aab4->enter($__internal_0ef7ad852a3ef3f23a1f48d54dcdd1498bf106aad713923443338a268151aab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Default:index.html.twig"));

        $__internal_f60c36aeb1ae6deac7300d1bf23a2f6833deb1ca849570f515c77674c5cc2521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60c36aeb1ae6deac7300d1bf23a2f6833deb1ca849570f515c77674c5cc2521->enter($__internal_f60c36aeb1ae6deac7300d1bf23a2f6833deb1ca849570f515c77674c5cc2521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_0ef7ad852a3ef3f23a1f48d54dcdd1498bf106aad713923443338a268151aab4->leave($__internal_0ef7ad852a3ef3f23a1f48d54dcdd1498bf106aad713923443338a268151aab4_prof);

        
        $__internal_f60c36aeb1ae6deac7300d1bf23a2f6833deb1ca849570f515c77674c5cc2521->leave($__internal_f60c36aeb1ae6deac7300d1bf23a2f6833deb1ca849570f515c77674c5cc2521_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "LocalBundle:Default:index.html.twig", "C:\\wamp64\\www\\medina1\\src\\LocalBundle/Resources/views/Default/index.html.twig");
    }
}

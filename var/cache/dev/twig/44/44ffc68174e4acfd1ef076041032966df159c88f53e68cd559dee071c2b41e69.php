<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_cbf07d95accc74b1960671a7eaa16acea95e237e24ab76a5840895f4b974ff32 extends Twig_Template
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
        $__internal_44a17dc4f6bca93e046c88f7ee1c5d4b573425d5b1c025a75bdfaca501801675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a17dc4f6bca93e046c88f7ee1c5d4b573425d5b1c025a75bdfaca501801675->enter($__internal_44a17dc4f6bca93e046c88f7ee1c5d4b573425d5b1c025a75bdfaca501801675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_cd17bd1cd7d4ef02c721412b6f1f07bd6a4709ecac05fb26b5eeb801df35e9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd17bd1cd7d4ef02c721412b6f1f07bd6a4709ecac05fb26b5eeb801df35e9ec->enter($__internal_cd17bd1cd7d4ef02c721412b6f1f07bd6a4709ecac05fb26b5eeb801df35e9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_44a17dc4f6bca93e046c88f7ee1c5d4b573425d5b1c025a75bdfaca501801675->leave($__internal_44a17dc4f6bca93e046c88f7ee1c5d4b573425d5b1c025a75bdfaca501801675_prof);

        
        $__internal_cd17bd1cd7d4ef02c721412b6f1f07bd6a4709ecac05fb26b5eeb801df35e9ec->leave($__internal_cd17bd1cd7d4ef02c721412b6f1f07bd6a4709ecac05fb26b5eeb801df35e9ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}

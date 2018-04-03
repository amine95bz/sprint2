<?php

/* @Local/Default/index.html.twig */
class __TwigTemplate_df400e988ddc9d23b283886b50c48f1ac351a450b24f00837d6bc5888f58fdc8 extends Twig_Template
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
        $__internal_027c32dcc52bb22293c37dfc1bc8bd33f961befb3208e2997881bf51155bcde0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027c32dcc52bb22293c37dfc1bc8bd33f961befb3208e2997881bf51155bcde0->enter($__internal_027c32dcc52bb22293c37dfc1bc8bd33f961befb3208e2997881bf51155bcde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Local/Default/index.html.twig"));

        $__internal_7ccf8da19de3f7c50aa89d1faf96a11cd651ef06238d4fc4eff3071ad4296647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ccf8da19de3f7c50aa89d1faf96a11cd651ef06238d4fc4eff3071ad4296647->enter($__internal_7ccf8da19de3f7c50aa89d1faf96a11cd651ef06238d4fc4eff3071ad4296647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Local/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_027c32dcc52bb22293c37dfc1bc8bd33f961befb3208e2997881bf51155bcde0->leave($__internal_027c32dcc52bb22293c37dfc1bc8bd33f961befb3208e2997881bf51155bcde0_prof);

        
        $__internal_7ccf8da19de3f7c50aa89d1faf96a11cd651ef06238d4fc4eff3071ad4296647->leave($__internal_7ccf8da19de3f7c50aa89d1faf96a11cd651ef06238d4fc4eff3071ad4296647_prof);

    }

    public function getTemplateName()
    {
        return "@Local/Default/index.html.twig";
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
", "@Local/Default/index.html.twig", "C:\\wamp64\\www\\medina1\\src\\LocalBundle\\Resources\\views\\Default\\index.html.twig");
    }
}

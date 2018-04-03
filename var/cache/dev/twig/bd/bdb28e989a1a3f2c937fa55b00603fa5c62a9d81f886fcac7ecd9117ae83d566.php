<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_dec466c5d18acebf247e34e08811746c77e4e5360f4531985058bfeaa2425141 extends Twig_Template
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
        $__internal_90d2c724e5f92bf498d8a9e5d3f225b1e52bfd57ab16ee4371d4cb96c8c5f1c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d2c724e5f92bf498d8a9e5d3f225b1e52bfd57ab16ee4371d4cb96c8c5f1c2->enter($__internal_90d2c724e5f92bf498d8a9e5d3f225b1e52bfd57ab16ee4371d4cb96c8c5f1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_fc7701285f099d0f4117edcd392f03859c804c200f56cd1c78bb2ca80a57e698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7701285f099d0f4117edcd392f03859c804c200f56cd1c78bb2ca80a57e698->enter($__internal_fc7701285f099d0f4117edcd392f03859c804c200f56cd1c78bb2ca80a57e698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_90d2c724e5f92bf498d8a9e5d3f225b1e52bfd57ab16ee4371d4cb96c8c5f1c2->leave($__internal_90d2c724e5f92bf498d8a9e5d3f225b1e52bfd57ab16ee4371d4cb96c8c5f1c2_prof);

        
        $__internal_fc7701285f099d0f4117edcd392f03859c804c200f56cd1c78bb2ca80a57e698->leave($__internal_fc7701285f099d0f4117edcd392f03859c804c200f56cd1c78bb2ca80a57e698_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}

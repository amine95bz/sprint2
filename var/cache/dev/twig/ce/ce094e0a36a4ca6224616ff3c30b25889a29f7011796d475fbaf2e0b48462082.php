<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ad3fa144b1bf2eb634e7bba0fe3de7bc5b7f81b32c15336c2bd01fda66383bff extends Twig_Template
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
        $__internal_2d18d8285e618cd5264256402a41e6c46adf7f5ff81fe7d37e9904d412186ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d18d8285e618cd5264256402a41e6c46adf7f5ff81fe7d37e9904d412186ba7->enter($__internal_2d18d8285e618cd5264256402a41e6c46adf7f5ff81fe7d37e9904d412186ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7369a068437420a4fe7848781acd77ac6a96ec72c9003c0ac5058efcc1cec0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7369a068437420a4fe7848781acd77ac6a96ec72c9003c0ac5058efcc1cec0b6->enter($__internal_7369a068437420a4fe7848781acd77ac6a96ec72c9003c0ac5058efcc1cec0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2d18d8285e618cd5264256402a41e6c46adf7f5ff81fe7d37e9904d412186ba7->leave($__internal_2d18d8285e618cd5264256402a41e6c46adf7f5ff81fe7d37e9904d412186ba7_prof);

        
        $__internal_7369a068437420a4fe7848781acd77ac6a96ec72c9003c0ac5058efcc1cec0b6->leave($__internal_7369a068437420a4fe7848781acd77ac6a96ec72c9003c0ac5058efcc1cec0b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}

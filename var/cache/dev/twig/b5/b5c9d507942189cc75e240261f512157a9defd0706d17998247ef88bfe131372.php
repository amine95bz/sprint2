<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a9176dd160aec8e1de333faee3904b041a2b8330e7a830cb611afa27ae1af28b extends Twig_Template
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
        $__internal_f268e55ca36478d4ed043d0923031c39ec7f213afc2365977be1ad42c8ac2915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f268e55ca36478d4ed043d0923031c39ec7f213afc2365977be1ad42c8ac2915->enter($__internal_f268e55ca36478d4ed043d0923031c39ec7f213afc2365977be1ad42c8ac2915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0f7d00f607b41f1d29eb730f578a6accc5c5c46111195165ebfc21847cebee75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7d00f607b41f1d29eb730f578a6accc5c5c46111195165ebfc21847cebee75->enter($__internal_0f7d00f607b41f1d29eb730f578a6accc5c5c46111195165ebfc21847cebee75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f268e55ca36478d4ed043d0923031c39ec7f213afc2365977be1ad42c8ac2915->leave($__internal_f268e55ca36478d4ed043d0923031c39ec7f213afc2365977be1ad42c8ac2915_prof);

        
        $__internal_0f7d00f607b41f1d29eb730f578a6accc5c5c46111195165ebfc21847cebee75->leave($__internal_0f7d00f607b41f1d29eb730f578a6accc5c5c46111195165ebfc21847cebee75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

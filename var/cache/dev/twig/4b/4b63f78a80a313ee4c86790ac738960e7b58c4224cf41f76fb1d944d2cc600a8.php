<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_228e8ac46aaaa0126db04bb93c2a70e5dc7b0abefc42b49737269282dc917e0d extends Twig_Template
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
        $__internal_6070f15f90c362d7be760ef9f775f8fce16bef7cc792671ab7929de22dc77a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6070f15f90c362d7be760ef9f775f8fce16bef7cc792671ab7929de22dc77a22->enter($__internal_6070f15f90c362d7be760ef9f775f8fce16bef7cc792671ab7929de22dc77a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_df50e5efc6329953d61d75e722ea1e46cac26fbd6e237150393623fe5f6f4387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df50e5efc6329953d61d75e722ea1e46cac26fbd6e237150393623fe5f6f4387->enter($__internal_df50e5efc6329953d61d75e722ea1e46cac26fbd6e237150393623fe5f6f4387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6070f15f90c362d7be760ef9f775f8fce16bef7cc792671ab7929de22dc77a22->leave($__internal_6070f15f90c362d7be760ef9f775f8fce16bef7cc792671ab7929de22dc77a22_prof);

        
        $__internal_df50e5efc6329953d61d75e722ea1e46cac26fbd6e237150393623fe5f6f4387->leave($__internal_df50e5efc6329953d61d75e722ea1e46cac26fbd6e237150393623fe5f6f4387_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ded63a06244dac38f4caf2e3298ac4a45c5293af9901d6cd75d5abceec7ce429 extends Twig_Template
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
        $__internal_69807951cc42aae8c4fac70ed9839ffc2d69025085df793aed8a9f71a914d9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69807951cc42aae8c4fac70ed9839ffc2d69025085df793aed8a9f71a914d9a7->enter($__internal_69807951cc42aae8c4fac70ed9839ffc2d69025085df793aed8a9f71a914d9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c3b8501d9f788773f8ce333a2f11a74cec0543509371ee349a153de0040d7d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b8501d9f788773f8ce333a2f11a74cec0543509371ee349a153de0040d7d52->enter($__internal_c3b8501d9f788773f8ce333a2f11a74cec0543509371ee349a153de0040d7d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_69807951cc42aae8c4fac70ed9839ffc2d69025085df793aed8a9f71a914d9a7->leave($__internal_69807951cc42aae8c4fac70ed9839ffc2d69025085df793aed8a9f71a914d9a7_prof);

        
        $__internal_c3b8501d9f788773f8ce333a2f11a74cec0543509371ee349a153de0040d7d52->leave($__internal_c3b8501d9f788773f8ce333a2f11a74cec0543509371ee349a153de0040d7d52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}

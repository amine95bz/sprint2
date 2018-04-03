<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7321a682799f4fdc22a8777b35422ff73062c4d4b308bc852c1ce434b6475982 extends Twig_Template
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
        $__internal_c9a79dea0ade80a2a46fc48d80415708140dd72357897da96ace34963b122b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a79dea0ade80a2a46fc48d80415708140dd72357897da96ace34963b122b12->enter($__internal_c9a79dea0ade80a2a46fc48d80415708140dd72357897da96ace34963b122b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_23e92f957271b5ec20cdc1d5d0c756140f64810a0eeb813272d6e6f5f9d4e108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e92f957271b5ec20cdc1d5d0c756140f64810a0eeb813272d6e6f5f9d4e108->enter($__internal_23e92f957271b5ec20cdc1d5d0c756140f64810a0eeb813272d6e6f5f9d4e108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_c9a79dea0ade80a2a46fc48d80415708140dd72357897da96ace34963b122b12->leave($__internal_c9a79dea0ade80a2a46fc48d80415708140dd72357897da96ace34963b122b12_prof);

        
        $__internal_23e92f957271b5ec20cdc1d5d0c756140f64810a0eeb813272d6e6f5f9d4e108->leave($__internal_23e92f957271b5ec20cdc1d5d0c756140f64810a0eeb813272d6e6f5f9d4e108_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}

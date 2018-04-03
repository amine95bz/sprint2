<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e7e3f000a6803b2d77d7a424f64c56f1a881cb209eb003adabfb1c11146895a5 extends Twig_Template
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
        $__internal_f0b4ce30c11ae1ecab98e546bdd02d38824fffa0004ee066d9bcdeb34306fc02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b4ce30c11ae1ecab98e546bdd02d38824fffa0004ee066d9bcdeb34306fc02->enter($__internal_f0b4ce30c11ae1ecab98e546bdd02d38824fffa0004ee066d9bcdeb34306fc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7bb6876f7b14676f57de04ba144791ab3c81e3eac651c2ec8b020127f1b38a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb6876f7b14676f57de04ba144791ab3c81e3eac651c2ec8b020127f1b38a24->enter($__internal_7bb6876f7b14676f57de04ba144791ab3c81e3eac651c2ec8b020127f1b38a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f0b4ce30c11ae1ecab98e546bdd02d38824fffa0004ee066d9bcdeb34306fc02->leave($__internal_f0b4ce30c11ae1ecab98e546bdd02d38824fffa0004ee066d9bcdeb34306fc02_prof);

        
        $__internal_7bb6876f7b14676f57de04ba144791ab3c81e3eac651c2ec8b020127f1b38a24->leave($__internal_7bb6876f7b14676f57de04ba144791ab3c81e3eac651c2ec8b020127f1b38a24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}

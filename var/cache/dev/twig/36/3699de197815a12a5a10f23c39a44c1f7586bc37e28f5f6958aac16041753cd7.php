<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e1b6afef83fa9763faaaa12bd86ec5fdfa5ff8b717c96aeee3481f050b428c22 extends Twig_Template
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
        $__internal_36e8f2fe77bc936e7ace8dd89e9a444edc5d7d96d09f2565a8206dbe45255d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e8f2fe77bc936e7ace8dd89e9a444edc5d7d96d09f2565a8206dbe45255d67->enter($__internal_36e8f2fe77bc936e7ace8dd89e9a444edc5d7d96d09f2565a8206dbe45255d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_2c2d242262bf6dfa56ff98e765b66720dab0515af17c693303f75a6fc8419045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2d242262bf6dfa56ff98e765b66720dab0515af17c693303f75a6fc8419045->enter($__internal_2c2d242262bf6dfa56ff98e765b66720dab0515af17c693303f75a6fc8419045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_36e8f2fe77bc936e7ace8dd89e9a444edc5d7d96d09f2565a8206dbe45255d67->leave($__internal_36e8f2fe77bc936e7ace8dd89e9a444edc5d7d96d09f2565a8206dbe45255d67_prof);

        
        $__internal_2c2d242262bf6dfa56ff98e765b66720dab0515af17c693303f75a6fc8419045->leave($__internal_2c2d242262bf6dfa56ff98e765b66720dab0515af17c693303f75a6fc8419045_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}

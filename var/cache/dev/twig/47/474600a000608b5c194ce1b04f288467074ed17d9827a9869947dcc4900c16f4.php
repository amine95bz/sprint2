<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3b718acfa007d3872018d56cf8d1f76f57f875fc8625743800a82002c105f80a extends Twig_Template
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
        $__internal_080f82615903ed952f7d2bcb23a927800f85046ad8b912fab9dbc4e504a66dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080f82615903ed952f7d2bcb23a927800f85046ad8b912fab9dbc4e504a66dae->enter($__internal_080f82615903ed952f7d2bcb23a927800f85046ad8b912fab9dbc4e504a66dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_582d3e7fd1cf265fb7baa922bb17a781ae1ee614a45a94904f1a5fdb5b6ff516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582d3e7fd1cf265fb7baa922bb17a781ae1ee614a45a94904f1a5fdb5b6ff516->enter($__internal_582d3e7fd1cf265fb7baa922bb17a781ae1ee614a45a94904f1a5fdb5b6ff516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_080f82615903ed952f7d2bcb23a927800f85046ad8b912fab9dbc4e504a66dae->leave($__internal_080f82615903ed952f7d2bcb23a927800f85046ad8b912fab9dbc4e504a66dae_prof);

        
        $__internal_582d3e7fd1cf265fb7baa922bb17a781ae1ee614a45a94904f1a5fdb5b6ff516->leave($__internal_582d3e7fd1cf265fb7baa922bb17a781ae1ee614a45a94904f1a5fdb5b6ff516_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}

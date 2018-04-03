<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a45ee52b07c68062bb7c1d25b901ce3826b0aedfe8d86f29e84a4567016cd32e extends Twig_Template
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
        $__internal_bdf64cd5fcc153089bbd4763b1624b0b7ecdcf794f4e499f2c70f48889f8546c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf64cd5fcc153089bbd4763b1624b0b7ecdcf794f4e499f2c70f48889f8546c->enter($__internal_bdf64cd5fcc153089bbd4763b1624b0b7ecdcf794f4e499f2c70f48889f8546c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b09f3aed1c2af8c4190b3d8f5962fdeac24f7c1c7e14f6a751d1ed473a145a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09f3aed1c2af8c4190b3d8f5962fdeac24f7c1c7e14f6a751d1ed473a145a44->enter($__internal_b09f3aed1c2af8c4190b3d8f5962fdeac24f7c1c7e14f6a751d1ed473a145a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bdf64cd5fcc153089bbd4763b1624b0b7ecdcf794f4e499f2c70f48889f8546c->leave($__internal_bdf64cd5fcc153089bbd4763b1624b0b7ecdcf794f4e499f2c70f48889f8546c_prof);

        
        $__internal_b09f3aed1c2af8c4190b3d8f5962fdeac24f7c1c7e14f6a751d1ed473a145a44->leave($__internal_b09f3aed1c2af8c4190b3d8f5962fdeac24f7c1c7e14f6a751d1ed473a145a44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}

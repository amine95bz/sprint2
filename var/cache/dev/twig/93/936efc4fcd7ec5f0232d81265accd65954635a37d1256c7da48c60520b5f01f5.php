<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3892d89617b06f9b0dbf43ae52f066ff9d0dcd458dc93d966d62c3793086e0b3 extends Twig_Template
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
        $__internal_a2f15dcb8315b4a829273d71fc10c5f9d03180674e4cb0df3ca04e046597e33d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f15dcb8315b4a829273d71fc10c5f9d03180674e4cb0df3ca04e046597e33d->enter($__internal_a2f15dcb8315b4a829273d71fc10c5f9d03180674e4cb0df3ca04e046597e33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_0df9f5adf6bdc1dd049ed200e119c3ff87c505f64df3da56c68551492c4f9811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df9f5adf6bdc1dd049ed200e119c3ff87c505f64df3da56c68551492c4f9811->enter($__internal_0df9f5adf6bdc1dd049ed200e119c3ff87c505f64df3da56c68551492c4f9811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a2f15dcb8315b4a829273d71fc10c5f9d03180674e4cb0df3ca04e046597e33d->leave($__internal_a2f15dcb8315b4a829273d71fc10c5f9d03180674e4cb0df3ca04e046597e33d_prof);

        
        $__internal_0df9f5adf6bdc1dd049ed200e119c3ff87c505f64df3da56c68551492c4f9811->leave($__internal_0df9f5adf6bdc1dd049ed200e119c3ff87c505f64df3da56c68551492c4f9811_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}

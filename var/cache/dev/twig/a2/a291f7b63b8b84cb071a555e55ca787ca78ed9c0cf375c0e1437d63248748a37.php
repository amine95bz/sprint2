<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e6289e41785ac8db89ea2a6f75286fe9c2b1fe6d7f478261187483f5f2932dcc extends Twig_Template
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
        $__internal_9654da4c443f160dfde71d5b784d4cd8fc69aa469884e2becf57ac1b79cd4a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9654da4c443f160dfde71d5b784d4cd8fc69aa469884e2becf57ac1b79cd4a1d->enter($__internal_9654da4c443f160dfde71d5b784d4cd8fc69aa469884e2becf57ac1b79cd4a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a21e8eac24bcfb1d3b881b8899e1cd5478d2c5551468cf12c2c403e195a3d8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21e8eac24bcfb1d3b881b8899e1cd5478d2c5551468cf12c2c403e195a3d8fa->enter($__internal_a21e8eac24bcfb1d3b881b8899e1cd5478d2c5551468cf12c2c403e195a3d8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9654da4c443f160dfde71d5b784d4cd8fc69aa469884e2becf57ac1b79cd4a1d->leave($__internal_9654da4c443f160dfde71d5b784d4cd8fc69aa469884e2becf57ac1b79cd4a1d_prof);

        
        $__internal_a21e8eac24bcfb1d3b881b8899e1cd5478d2c5551468cf12c2c403e195a3d8fa->leave($__internal_a21e8eac24bcfb1d3b881b8899e1cd5478d2c5551468cf12c2c403e195a3d8fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}

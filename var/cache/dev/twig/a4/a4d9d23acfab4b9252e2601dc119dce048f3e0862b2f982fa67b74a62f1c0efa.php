<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_084eef3f8f05e7c24a5a60e1a27c4cae4649e19fc4080a7d9876262a196b613b extends Twig_Template
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
        $__internal_e6c4363a1023dcd44c8795f20f8d9f1577b7f9ea7f15f191dc429bddb6475acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c4363a1023dcd44c8795f20f8d9f1577b7f9ea7f15f191dc429bddb6475acf->enter($__internal_e6c4363a1023dcd44c8795f20f8d9f1577b7f9ea7f15f191dc429bddb6475acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b536347e177207b672fe0b2975b2d94a9a56182362f3ea25f75c0a43110fe42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b536347e177207b672fe0b2975b2d94a9a56182362f3ea25f75c0a43110fe42b->enter($__internal_b536347e177207b672fe0b2975b2d94a9a56182362f3ea25f75c0a43110fe42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e6c4363a1023dcd44c8795f20f8d9f1577b7f9ea7f15f191dc429bddb6475acf->leave($__internal_e6c4363a1023dcd44c8795f20f8d9f1577b7f9ea7f15f191dc429bddb6475acf_prof);

        
        $__internal_b536347e177207b672fe0b2975b2d94a9a56182362f3ea25f75c0a43110fe42b->leave($__internal_b536347e177207b672fe0b2975b2d94a9a56182362f3ea25f75c0a43110fe42b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}

<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ec3ac6b739e785c8aef676a8943024fd86c75767a041f0f1b05816b8d359aa2f extends Twig_Template
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
        $__internal_39e81a4b6879d5c714b022c624da26c0d69cce2aac6f3aef90bf2e04803a7706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e81a4b6879d5c714b022c624da26c0d69cce2aac6f3aef90bf2e04803a7706->enter($__internal_39e81a4b6879d5c714b022c624da26c0d69cce2aac6f3aef90bf2e04803a7706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d922ef11a674a616b6c77f25c02f108dae4cbc6f314debf154f884a0228db4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d922ef11a674a616b6c77f25c02f108dae4cbc6f314debf154f884a0228db4ee->enter($__internal_d922ef11a674a616b6c77f25c02f108dae4cbc6f314debf154f884a0228db4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_39e81a4b6879d5c714b022c624da26c0d69cce2aac6f3aef90bf2e04803a7706->leave($__internal_39e81a4b6879d5c714b022c624da26c0d69cce2aac6f3aef90bf2e04803a7706_prof);

        
        $__internal_d922ef11a674a616b6c77f25c02f108dae4cbc6f314debf154f884a0228db4ee->leave($__internal_d922ef11a674a616b6c77f25c02f108dae4cbc6f314debf154f884a0228db4ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}

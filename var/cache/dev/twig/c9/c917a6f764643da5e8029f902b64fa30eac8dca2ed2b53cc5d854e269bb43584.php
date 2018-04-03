<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_30fbfa0eebcbaf63faaaf4393d0733c5e8182cd913dc2b5df4e7ff06d45c3529 extends Twig_Template
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
        $__internal_37d6bf99041a93801d6aab89ea1ed0d09789701d459273b1ea7b0b13daae4de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d6bf99041a93801d6aab89ea1ed0d09789701d459273b1ea7b0b13daae4de3->enter($__internal_37d6bf99041a93801d6aab89ea1ed0d09789701d459273b1ea7b0b13daae4de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_2f93e535f8894032317dc97dfa453fd8f93bb5c4a68de2215c18f7bb4652e084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f93e535f8894032317dc97dfa453fd8f93bb5c4a68de2215c18f7bb4652e084->enter($__internal_2f93e535f8894032317dc97dfa453fd8f93bb5c4a68de2215c18f7bb4652e084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_37d6bf99041a93801d6aab89ea1ed0d09789701d459273b1ea7b0b13daae4de3->leave($__internal_37d6bf99041a93801d6aab89ea1ed0d09789701d459273b1ea7b0b13daae4de3_prof);

        
        $__internal_2f93e535f8894032317dc97dfa453fd8f93bb5c4a68de2215c18f7bb4652e084->leave($__internal_2f93e535f8894032317dc97dfa453fd8f93bb5c4a68de2215c18f7bb4652e084_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}

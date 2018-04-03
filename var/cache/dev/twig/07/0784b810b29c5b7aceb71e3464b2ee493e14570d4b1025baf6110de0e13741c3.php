<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b92b510ad15e43217efec13c3d5adc9a9cb2aaddff263dde4ff37c7cf648f6aa extends Twig_Template
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
        $__internal_d2ebe0b9f53b118993769f9b1fc55390bcbdc48e483bef177c754736aba6a217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ebe0b9f53b118993769f9b1fc55390bcbdc48e483bef177c754736aba6a217->enter($__internal_d2ebe0b9f53b118993769f9b1fc55390bcbdc48e483bef177c754736aba6a217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b871eae078c13ca4ae349308c79004323916a144bc526e3dc4b1ee26ac261756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b871eae078c13ca4ae349308c79004323916a144bc526e3dc4b1ee26ac261756->enter($__internal_b871eae078c13ca4ae349308c79004323916a144bc526e3dc4b1ee26ac261756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d2ebe0b9f53b118993769f9b1fc55390bcbdc48e483bef177c754736aba6a217->leave($__internal_d2ebe0b9f53b118993769f9b1fc55390bcbdc48e483bef177c754736aba6a217_prof);

        
        $__internal_b871eae078c13ca4ae349308c79004323916a144bc526e3dc4b1ee26ac261756->leave($__internal_b871eae078c13ca4ae349308c79004323916a144bc526e3dc4b1ee26ac261756_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}

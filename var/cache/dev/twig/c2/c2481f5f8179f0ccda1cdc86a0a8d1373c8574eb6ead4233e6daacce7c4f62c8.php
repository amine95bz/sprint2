<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9c4df629ea4f9bdf1e345c8ffa02c50f97fb79a4acba0778cabf2c9e6ae68a1a extends Twig_Template
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
        $__internal_a4da854129a481ef55c79483dcba75a95e4f1b60ae2e71175c51136f45f66aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4da854129a481ef55c79483dcba75a95e4f1b60ae2e71175c51136f45f66aa3->enter($__internal_a4da854129a481ef55c79483dcba75a95e4f1b60ae2e71175c51136f45f66aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_cbea1c97f9e2e0ba5d08e573a60a7b98c5bd431ec20cca58f28dc30ae3d76b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbea1c97f9e2e0ba5d08e573a60a7b98c5bd431ec20cca58f28dc30ae3d76b13->enter($__internal_cbea1c97f9e2e0ba5d08e573a60a7b98c5bd431ec20cca58f28dc30ae3d76b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a4da854129a481ef55c79483dcba75a95e4f1b60ae2e71175c51136f45f66aa3->leave($__internal_a4da854129a481ef55c79483dcba75a95e4f1b60ae2e71175c51136f45f66aa3_prof);

        
        $__internal_cbea1c97f9e2e0ba5d08e573a60a7b98c5bd431ec20cca58f28dc30ae3d76b13->leave($__internal_cbea1c97f9e2e0ba5d08e573a60a7b98c5bd431ec20cca58f28dc30ae3d76b13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}

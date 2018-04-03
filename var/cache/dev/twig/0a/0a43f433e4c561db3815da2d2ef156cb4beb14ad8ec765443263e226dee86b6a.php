<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1150906dbea88cad3c73edad53f454f977691b3cf296008d3800b990fb93a975 extends Twig_Template
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
        $__internal_846028fc67c3f5a2d8adba44e25a95d4b941fce365cdad57199474d0af7d22a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846028fc67c3f5a2d8adba44e25a95d4b941fce365cdad57199474d0af7d22a2->enter($__internal_846028fc67c3f5a2d8adba44e25a95d4b941fce365cdad57199474d0af7d22a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_eaadc0c51718a371c7d23bdd1aa9b6b560679313957e6e49cc359dee9acab843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaadc0c51718a371c7d23bdd1aa9b6b560679313957e6e49cc359dee9acab843->enter($__internal_eaadc0c51718a371c7d23bdd1aa9b6b560679313957e6e49cc359dee9acab843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_846028fc67c3f5a2d8adba44e25a95d4b941fce365cdad57199474d0af7d22a2->leave($__internal_846028fc67c3f5a2d8adba44e25a95d4b941fce365cdad57199474d0af7d22a2_prof);

        
        $__internal_eaadc0c51718a371c7d23bdd1aa9b6b560679313957e6e49cc359dee9acab843->leave($__internal_eaadc0c51718a371c7d23bdd1aa9b6b560679313957e6e49cc359dee9acab843_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

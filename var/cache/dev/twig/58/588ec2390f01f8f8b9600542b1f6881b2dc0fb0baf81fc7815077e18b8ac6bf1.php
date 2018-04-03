<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2867206b76ebf5b7bfb8b1a11c64c11726dde62a2420441a86e55cdda0040bc7 extends Twig_Template
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
        $__internal_b18a929e7fbe2bebc1b5ee76101e789933bedceebe0d3682f53ead37f1c90640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18a929e7fbe2bebc1b5ee76101e789933bedceebe0d3682f53ead37f1c90640->enter($__internal_b18a929e7fbe2bebc1b5ee76101e789933bedceebe0d3682f53ead37f1c90640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_2510e6675ea1c7de427ab67a6ddac6c00614c97c35f12372f5e4eab3e07bfee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2510e6675ea1c7de427ab67a6ddac6c00614c97c35f12372f5e4eab3e07bfee7->enter($__internal_2510e6675ea1c7de427ab67a6ddac6c00614c97c35f12372f5e4eab3e07bfee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b18a929e7fbe2bebc1b5ee76101e789933bedceebe0d3682f53ead37f1c90640->leave($__internal_b18a929e7fbe2bebc1b5ee76101e789933bedceebe0d3682f53ead37f1c90640_prof);

        
        $__internal_2510e6675ea1c7de427ab67a6ddac6c00614c97c35f12372f5e4eab3e07bfee7->leave($__internal_2510e6675ea1c7de427ab67a6ddac6c00614c97c35f12372f5e4eab3e07bfee7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}

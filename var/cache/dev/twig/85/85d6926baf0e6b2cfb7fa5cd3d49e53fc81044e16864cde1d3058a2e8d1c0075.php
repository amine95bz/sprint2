<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c40a4471ffb33781106e144e5f763040aae3214c8a5fe29f57e27b719ba8467d extends Twig_Template
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
        $__internal_7667ebed986f89f8ee3dac1a1208365716438edd9df01c5486581f9ec566bbfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7667ebed986f89f8ee3dac1a1208365716438edd9df01c5486581f9ec566bbfe->enter($__internal_7667ebed986f89f8ee3dac1a1208365716438edd9df01c5486581f9ec566bbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ad16e380f80a0849f964e3a55d985ca3f380e4a4a8c4fb31da983a3350d8f5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad16e380f80a0849f964e3a55d985ca3f380e4a4a8c4fb31da983a3350d8f5e0->enter($__internal_ad16e380f80a0849f964e3a55d985ca3f380e4a4a8c4fb31da983a3350d8f5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7667ebed986f89f8ee3dac1a1208365716438edd9df01c5486581f9ec566bbfe->leave($__internal_7667ebed986f89f8ee3dac1a1208365716438edd9df01c5486581f9ec566bbfe_prof);

        
        $__internal_ad16e380f80a0849f964e3a55d985ca3f380e4a4a8c4fb31da983a3350d8f5e0->leave($__internal_ad16e380f80a0849f964e3a55d985ca3f380e4a4a8c4fb31da983a3350d8f5e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}

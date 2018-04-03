<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_80ad8cc3115ab5e6b37bdf968cca3160b83fb067ebb30427bb22387485243f49 extends Twig_Template
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
        $__internal_0930eff95cbb5dd7c2a055176a633ad6dcfb63a760034514c68054f9f5684255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0930eff95cbb5dd7c2a055176a633ad6dcfb63a760034514c68054f9f5684255->enter($__internal_0930eff95cbb5dd7c2a055176a633ad6dcfb63a760034514c68054f9f5684255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e8e77301697fa72c96914f50d84fe586e62880f6ea91ad820c19bddb77cbb1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e77301697fa72c96914f50d84fe586e62880f6ea91ad820c19bddb77cbb1e8->enter($__internal_e8e77301697fa72c96914f50d84fe586e62880f6ea91ad820c19bddb77cbb1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0930eff95cbb5dd7c2a055176a633ad6dcfb63a760034514c68054f9f5684255->leave($__internal_0930eff95cbb5dd7c2a055176a633ad6dcfb63a760034514c68054f9f5684255_prof);

        
        $__internal_e8e77301697fa72c96914f50d84fe586e62880f6ea91ad820c19bddb77cbb1e8->leave($__internal_e8e77301697fa72c96914f50d84fe586e62880f6ea91ad820c19bddb77cbb1e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

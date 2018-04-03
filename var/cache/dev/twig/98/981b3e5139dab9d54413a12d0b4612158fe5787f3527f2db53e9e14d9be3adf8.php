<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f1436766ee8e4529b0d11de669c5abc28238e99cf16e3a19291d8ccc3863b601 extends Twig_Template
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
        $__internal_3c1ec51e45cb2c72cda75f34d41e14ee188fccbc34e4936b1e0cbc5fa297154a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1ec51e45cb2c72cda75f34d41e14ee188fccbc34e4936b1e0cbc5fa297154a->enter($__internal_3c1ec51e45cb2c72cda75f34d41e14ee188fccbc34e4936b1e0cbc5fa297154a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c6be3d7c8965c3b6a3643836d4764496183fb4c5ccc448adf4cabba77480f640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6be3d7c8965c3b6a3643836d4764496183fb4c5ccc448adf4cabba77480f640->enter($__internal_c6be3d7c8965c3b6a3643836d4764496183fb4c5ccc448adf4cabba77480f640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3c1ec51e45cb2c72cda75f34d41e14ee188fccbc34e4936b1e0cbc5fa297154a->leave($__internal_3c1ec51e45cb2c72cda75f34d41e14ee188fccbc34e4936b1e0cbc5fa297154a_prof);

        
        $__internal_c6be3d7c8965c3b6a3643836d4764496183fb4c5ccc448adf4cabba77480f640->leave($__internal_c6be3d7c8965c3b6a3643836d4764496183fb4c5ccc448adf4cabba77480f640_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}

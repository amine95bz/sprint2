<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8dec9c0b97fb699b82dce6b9533d4a69599b781c87f13690cfdb39277b72e8ab extends Twig_Template
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
        $__internal_e4efad33c1e22b960303997fcb6a3ab2b53e1dd6a23235dbe8975f5411ff0719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4efad33c1e22b960303997fcb6a3ab2b53e1dd6a23235dbe8975f5411ff0719->enter($__internal_e4efad33c1e22b960303997fcb6a3ab2b53e1dd6a23235dbe8975f5411ff0719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c9299515e9749edb479d95a2ba59ca7a9e2591cbd77697f78046545354444f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9299515e9749edb479d95a2ba59ca7a9e2591cbd77697f78046545354444f1a->enter($__internal_c9299515e9749edb479d95a2ba59ca7a9e2591cbd77697f78046545354444f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e4efad33c1e22b960303997fcb6a3ab2b53e1dd6a23235dbe8975f5411ff0719->leave($__internal_e4efad33c1e22b960303997fcb6a3ab2b53e1dd6a23235dbe8975f5411ff0719_prof);

        
        $__internal_c9299515e9749edb479d95a2ba59ca7a9e2591cbd77697f78046545354444f1a->leave($__internal_c9299515e9749edb479d95a2ba59ca7a9e2591cbd77697f78046545354444f1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}

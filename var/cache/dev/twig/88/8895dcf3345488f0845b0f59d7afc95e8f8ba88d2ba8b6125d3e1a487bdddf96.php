<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2ce888abc8756bc87448f14ec3223a891a7272800ed0cdaaf8468d599b636a4c extends Twig_Template
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
        $__internal_75a0bbda9ccb1e906879a1a0e2c73aff72678b9477e776d8f6de85e504e9b700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a0bbda9ccb1e906879a1a0e2c73aff72678b9477e776d8f6de85e504e9b700->enter($__internal_75a0bbda9ccb1e906879a1a0e2c73aff72678b9477e776d8f6de85e504e9b700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_32b0143d5bc02226f2f2ede900485ed7bc25de26867115c99f1994df931a8634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b0143d5bc02226f2f2ede900485ed7bc25de26867115c99f1994df931a8634->enter($__internal_32b0143d5bc02226f2f2ede900485ed7bc25de26867115c99f1994df931a8634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_75a0bbda9ccb1e906879a1a0e2c73aff72678b9477e776d8f6de85e504e9b700->leave($__internal_75a0bbda9ccb1e906879a1a0e2c73aff72678b9477e776d8f6de85e504e9b700_prof);

        
        $__internal_32b0143d5bc02226f2f2ede900485ed7bc25de26867115c99f1994df931a8634->leave($__internal_32b0143d5bc02226f2f2ede900485ed7bc25de26867115c99f1994df931a8634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}

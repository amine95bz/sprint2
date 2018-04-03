<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5f766dc1ba623aa00771436ea30ac7826055479f6629570edd362d5ce775847d extends Twig_Template
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
        $__internal_d993bc4ab173b357a925884c1891139761cfeb0d68e27419ff1733e80530cb2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d993bc4ab173b357a925884c1891139761cfeb0d68e27419ff1733e80530cb2c->enter($__internal_d993bc4ab173b357a925884c1891139761cfeb0d68e27419ff1733e80530cb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_1255cd128b8b9c8c8f8a9ec0f648db61bc1b023f1bce2cbf3bf8e14f2ffb6cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1255cd128b8b9c8c8f8a9ec0f648db61bc1b023f1bce2cbf3bf8e14f2ffb6cc5->enter($__internal_1255cd128b8b9c8c8f8a9ec0f648db61bc1b023f1bce2cbf3bf8e14f2ffb6cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d993bc4ab173b357a925884c1891139761cfeb0d68e27419ff1733e80530cb2c->leave($__internal_d993bc4ab173b357a925884c1891139761cfeb0d68e27419ff1733e80530cb2c_prof);

        
        $__internal_1255cd128b8b9c8c8f8a9ec0f648db61bc1b023f1bce2cbf3bf8e14f2ffb6cc5->leave($__internal_1255cd128b8b9c8c8f8a9ec0f648db61bc1b023f1bce2cbf3bf8e14f2ffb6cc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9c839e6962e475e969c71bbadc33b9411369e900382837047407bdd785cd15cb extends Twig_Template
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
        $__internal_f59d6a87a20681d227d111bbed089ac5cc7c91c9d21c1833b2efdfc87e86d6b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59d6a87a20681d227d111bbed089ac5cc7c91c9d21c1833b2efdfc87e86d6b0->enter($__internal_f59d6a87a20681d227d111bbed089ac5cc7c91c9d21c1833b2efdfc87e86d6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_10f99a8342ad5c13a2a1ec3fbd503696252907584e56b5285854951d8607cb84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f99a8342ad5c13a2a1ec3fbd503696252907584e56b5285854951d8607cb84->enter($__internal_10f99a8342ad5c13a2a1ec3fbd503696252907584e56b5285854951d8607cb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f59d6a87a20681d227d111bbed089ac5cc7c91c9d21c1833b2efdfc87e86d6b0->leave($__internal_f59d6a87a20681d227d111bbed089ac5cc7c91c9d21c1833b2efdfc87e86d6b0_prof);

        
        $__internal_10f99a8342ad5c13a2a1ec3fbd503696252907584e56b5285854951d8607cb84->leave($__internal_10f99a8342ad5c13a2a1ec3fbd503696252907584e56b5285854951d8607cb84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}

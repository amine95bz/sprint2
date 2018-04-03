<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a46878681bbf088ea526b8ae59cab7c8dcd48daad4236878bdc82d6d9f1dbd8c extends Twig_Template
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
        $__internal_a79c9097bde8559d225f7765094d477f0becf8f0e2a081cd90c470cc258b2b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79c9097bde8559d225f7765094d477f0becf8f0e2a081cd90c470cc258b2b60->enter($__internal_a79c9097bde8559d225f7765094d477f0becf8f0e2a081cd90c470cc258b2b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_9a6b7d8ca89a38fa6241a81493c401700ce1691d35874194ec24b4d27a5ea423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6b7d8ca89a38fa6241a81493c401700ce1691d35874194ec24b4d27a5ea423->enter($__internal_9a6b7d8ca89a38fa6241a81493c401700ce1691d35874194ec24b4d27a5ea423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a79c9097bde8559d225f7765094d477f0becf8f0e2a081cd90c470cc258b2b60->leave($__internal_a79c9097bde8559d225f7765094d477f0becf8f0e2a081cd90c470cc258b2b60_prof);

        
        $__internal_9a6b7d8ca89a38fa6241a81493c401700ce1691d35874194ec24b4d27a5ea423->leave($__internal_9a6b7d8ca89a38fa6241a81493c401700ce1691d35874194ec24b4d27a5ea423_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}

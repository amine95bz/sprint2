<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a32a2300229e65097bb9c052c2988d133c1507631ac9bb906f431e2ec968fcfa extends Twig_Template
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
        $__internal_337be0f619900d44c59edd60672a8421bc04c876f647aa4addb94b65d364d1fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337be0f619900d44c59edd60672a8421bc04c876f647aa4addb94b65d364d1fe->enter($__internal_337be0f619900d44c59edd60672a8421bc04c876f647aa4addb94b65d364d1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9192fd4f0d42d2ca9b279c920b125ad1f21a4fb6b08498196b5440bff84f80de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9192fd4f0d42d2ca9b279c920b125ad1f21a4fb6b08498196b5440bff84f80de->enter($__internal_9192fd4f0d42d2ca9b279c920b125ad1f21a4fb6b08498196b5440bff84f80de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_337be0f619900d44c59edd60672a8421bc04c876f647aa4addb94b65d364d1fe->leave($__internal_337be0f619900d44c59edd60672a8421bc04c876f647aa4addb94b65d364d1fe_prof);

        
        $__internal_9192fd4f0d42d2ca9b279c920b125ad1f21a4fb6b08498196b5440bff84f80de->leave($__internal_9192fd4f0d42d2ca9b279c920b125ad1f21a4fb6b08498196b5440bff84f80de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}

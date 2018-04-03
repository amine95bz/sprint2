<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_d8bbf82a64c75f31028b970d0e833c49f0bb3447e90cbbdf8e7b2f9ce14e40e4 extends Twig_Template
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
        $__internal_b13826d9bfe2a7b6891cd6bc923bf061b2335bb336d30c4278841b378bc6683e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13826d9bfe2a7b6891cd6bc923bf061b2335bb336d30c4278841b378bc6683e->enter($__internal_b13826d9bfe2a7b6891cd6bc923bf061b2335bb336d30c4278841b378bc6683e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_206ce061294d676f7f1527dc977250350336c0d7503f38185ef97286ca992ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206ce061294d676f7f1527dc977250350336c0d7503f38185ef97286ca992ef5->enter($__internal_206ce061294d676f7f1527dc977250350336c0d7503f38185ef97286ca992ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b13826d9bfe2a7b6891cd6bc923bf061b2335bb336d30c4278841b378bc6683e->leave($__internal_b13826d9bfe2a7b6891cd6bc923bf061b2335bb336d30c4278841b378bc6683e_prof);

        
        $__internal_206ce061294d676f7f1527dc977250350336c0d7503f38185ef97286ca992ef5->leave($__internal_206ce061294d676f7f1527dc977250350336c0d7503f38185ef97286ca992ef5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

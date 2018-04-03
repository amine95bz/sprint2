<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7fed83a189ac8ecc4f59499ae3beae955cad5fc3b079652135b129017bf4c7d1 extends Twig_Template
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
        $__internal_cda7fd478b186a8831612900479a3edd251795c76d4f20d0004567648f99dbe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda7fd478b186a8831612900479a3edd251795c76d4f20d0004567648f99dbe6->enter($__internal_cda7fd478b186a8831612900479a3edd251795c76d4f20d0004567648f99dbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_4d5d5965bd48085848cff24a86c8300788f3f598b4c24cacd6442ea2a83fd301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5d5965bd48085848cff24a86c8300788f3f598b4c24cacd6442ea2a83fd301->enter($__internal_4d5d5965bd48085848cff24a86c8300788f3f598b4c24cacd6442ea2a83fd301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cda7fd478b186a8831612900479a3edd251795c76d4f20d0004567648f99dbe6->leave($__internal_cda7fd478b186a8831612900479a3edd251795c76d4f20d0004567648f99dbe6_prof);

        
        $__internal_4d5d5965bd48085848cff24a86c8300788f3f598b4c24cacd6442ea2a83fd301->leave($__internal_4d5d5965bd48085848cff24a86c8300788f3f598b4c24cacd6442ea2a83fd301_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}

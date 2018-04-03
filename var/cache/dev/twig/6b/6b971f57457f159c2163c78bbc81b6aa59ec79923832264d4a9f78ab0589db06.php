<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d547fad0deeda39c521fdfaa7901bbb200b18e123bf57b0818ce44cec12bb378 extends Twig_Template
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
        $__internal_ffe797956762b7eeb4cb1cf1220220abab5634de0b6740db3e2ab2dfc12b74b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe797956762b7eeb4cb1cf1220220abab5634de0b6740db3e2ab2dfc12b74b0->enter($__internal_ffe797956762b7eeb4cb1cf1220220abab5634de0b6740db3e2ab2dfc12b74b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_7e27d0d8895049348a6e18bc9a08a7343feb430470b9820453065c18e624e649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e27d0d8895049348a6e18bc9a08a7343feb430470b9820453065c18e624e649->enter($__internal_7e27d0d8895049348a6e18bc9a08a7343feb430470b9820453065c18e624e649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ffe797956762b7eeb4cb1cf1220220abab5634de0b6740db3e2ab2dfc12b74b0->leave($__internal_ffe797956762b7eeb4cb1cf1220220abab5634de0b6740db3e2ab2dfc12b74b0_prof);

        
        $__internal_7e27d0d8895049348a6e18bc9a08a7343feb430470b9820453065c18e624e649->leave($__internal_7e27d0d8895049348a6e18bc9a08a7343feb430470b9820453065c18e624e649_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}

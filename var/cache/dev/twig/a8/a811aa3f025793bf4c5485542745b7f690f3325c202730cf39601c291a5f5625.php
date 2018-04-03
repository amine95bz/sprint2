<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a0654b23622c230108bc66893b5ef160399ded2c68b732315054e9936a0f07fe extends Twig_Template
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
        $__internal_547c3f5df3bdd6ceef767acd94e4f6ad910340783c2933c751f94ebd7c18c85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547c3f5df3bdd6ceef767acd94e4f6ad910340783c2933c751f94ebd7c18c85f->enter($__internal_547c3f5df3bdd6ceef767acd94e4f6ad910340783c2933c751f94ebd7c18c85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d0ae7a2cf549f0852c0c8d306712dbeaf0e23e4c31a35322df22e2e300cd4423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ae7a2cf549f0852c0c8d306712dbeaf0e23e4c31a35322df22e2e300cd4423->enter($__internal_d0ae7a2cf549f0852c0c8d306712dbeaf0e23e4c31a35322df22e2e300cd4423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_547c3f5df3bdd6ceef767acd94e4f6ad910340783c2933c751f94ebd7c18c85f->leave($__internal_547c3f5df3bdd6ceef767acd94e4f6ad910340783c2933c751f94ebd7c18c85f_prof);

        
        $__internal_d0ae7a2cf549f0852c0c8d306712dbeaf0e23e4c31a35322df22e2e300cd4423->leave($__internal_d0ae7a2cf549f0852c0c8d306712dbeaf0e23e4c31a35322df22e2e300cd4423_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}

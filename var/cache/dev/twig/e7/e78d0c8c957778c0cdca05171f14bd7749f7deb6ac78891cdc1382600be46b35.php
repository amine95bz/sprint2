<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_64ec3235d7327506c7c731123281383cb42a5dbbc7befb315cdfedd61a52079f extends Twig_Template
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
        $__internal_2a71fe52faaf6024e2141ea3a30b67d183172682c3af3909d8e0e02049815bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a71fe52faaf6024e2141ea3a30b67d183172682c3af3909d8e0e02049815bd0->enter($__internal_2a71fe52faaf6024e2141ea3a30b67d183172682c3af3909d8e0e02049815bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_98c9d2575eacaadef0677484ad5d427ea2417e82e958ad225ae20f4f7a69127c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c9d2575eacaadef0677484ad5d427ea2417e82e958ad225ae20f4f7a69127c->enter($__internal_98c9d2575eacaadef0677484ad5d427ea2417e82e958ad225ae20f4f7a69127c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2a71fe52faaf6024e2141ea3a30b67d183172682c3af3909d8e0e02049815bd0->leave($__internal_2a71fe52faaf6024e2141ea3a30b67d183172682c3af3909d8e0e02049815bd0_prof);

        
        $__internal_98c9d2575eacaadef0677484ad5d427ea2417e82e958ad225ae20f4f7a69127c->leave($__internal_98c9d2575eacaadef0677484ad5d427ea2417e82e958ad225ae20f4f7a69127c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}

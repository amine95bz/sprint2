<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5b38ae81796688ef03d9ccccf2cf7ca0c794007ccdc62429a738ff5e7e75a7a9 extends Twig_Template
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
        $__internal_2b0e8ebd062372a3d0bc6e72ec80e6f60b35ad8bfc70aa789623a34888aef190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0e8ebd062372a3d0bc6e72ec80e6f60b35ad8bfc70aa789623a34888aef190->enter($__internal_2b0e8ebd062372a3d0bc6e72ec80e6f60b35ad8bfc70aa789623a34888aef190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e813a31a66505b8921b4ecea34eef4746051952fb3dbe9f8d171a1f6a8ac6e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e813a31a66505b8921b4ecea34eef4746051952fb3dbe9f8d171a1f6a8ac6e46->enter($__internal_e813a31a66505b8921b4ecea34eef4746051952fb3dbe9f8d171a1f6a8ac6e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2b0e8ebd062372a3d0bc6e72ec80e6f60b35ad8bfc70aa789623a34888aef190->leave($__internal_2b0e8ebd062372a3d0bc6e72ec80e6f60b35ad8bfc70aa789623a34888aef190_prof);

        
        $__internal_e813a31a66505b8921b4ecea34eef4746051952fb3dbe9f8d171a1f6a8ac6e46->leave($__internal_e813a31a66505b8921b4ecea34eef4746051952fb3dbe9f8d171a1f6a8ac6e46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}

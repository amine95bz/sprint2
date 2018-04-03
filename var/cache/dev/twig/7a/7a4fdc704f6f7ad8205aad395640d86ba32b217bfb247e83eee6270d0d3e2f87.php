<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d3e7f3e20c37d8e0875f013100a41064bd469efd8b232cfd89924093d3d65924 extends Twig_Template
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
        $__internal_c5c69acced07fb5a66c5e8f51165f79dce900402da1121aab5cf40c93c218ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c69acced07fb5a66c5e8f51165f79dce900402da1121aab5cf40c93c218ece->enter($__internal_c5c69acced07fb5a66c5e8f51165f79dce900402da1121aab5cf40c93c218ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a2fc48a0699d300df3167ed631f3b8989374f5580952b90f6e981df59c5f1995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2fc48a0699d300df3167ed631f3b8989374f5580952b90f6e981df59c5f1995->enter($__internal_a2fc48a0699d300df3167ed631f3b8989374f5580952b90f6e981df59c5f1995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c5c69acced07fb5a66c5e8f51165f79dce900402da1121aab5cf40c93c218ece->leave($__internal_c5c69acced07fb5a66c5e8f51165f79dce900402da1121aab5cf40c93c218ece_prof);

        
        $__internal_a2fc48a0699d300df3167ed631f3b8989374f5580952b90f6e981df59c5f1995->leave($__internal_a2fc48a0699d300df3167ed631f3b8989374f5580952b90f6e981df59c5f1995_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}

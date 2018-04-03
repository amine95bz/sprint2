<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_0714226eb598172c6df150972fc839567e21a75121d37690b60d95aa14468277 extends Twig_Template
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
        $__internal_0231b89ae78491be9e2a45c60811d8c94e10300604930b2af82fd99560ac91e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0231b89ae78491be9e2a45c60811d8c94e10300604930b2af82fd99560ac91e1->enter($__internal_0231b89ae78491be9e2a45c60811d8c94e10300604930b2af82fd99560ac91e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4d21031e18d7ddf56196e1873281476db7f8e3fe45eab4a3f8a9219e2abb3863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d21031e18d7ddf56196e1873281476db7f8e3fe45eab4a3f8a9219e2abb3863->enter($__internal_4d21031e18d7ddf56196e1873281476db7f8e3fe45eab4a3f8a9219e2abb3863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0231b89ae78491be9e2a45c60811d8c94e10300604930b2af82fd99560ac91e1->leave($__internal_0231b89ae78491be9e2a45c60811d8c94e10300604930b2af82fd99560ac91e1_prof);

        
        $__internal_4d21031e18d7ddf56196e1873281476db7f8e3fe45eab4a3f8a9219e2abb3863->leave($__internal_4d21031e18d7ddf56196e1873281476db7f8e3fe45eab4a3f8a9219e2abb3863_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}

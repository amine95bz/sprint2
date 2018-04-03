<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e0c88d4428ab739f7ec0c5603ec56b6e4eaa3fb48d920f3ee2d646dde94faf3c extends Twig_Template
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
        $__internal_03d0b71fa992d800f78259241fea107b91fe5ca2cbb22b0464d5100386600d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d0b71fa992d800f78259241fea107b91fe5ca2cbb22b0464d5100386600d7d->enter($__internal_03d0b71fa992d800f78259241fea107b91fe5ca2cbb22b0464d5100386600d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_667a46227f68b80052f75e9ce9e4d9e6e7aeadbfb7e79e394b862a3bb7da6542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667a46227f68b80052f75e9ce9e4d9e6e7aeadbfb7e79e394b862a3bb7da6542->enter($__internal_667a46227f68b80052f75e9ce9e4d9e6e7aeadbfb7e79e394b862a3bb7da6542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_03d0b71fa992d800f78259241fea107b91fe5ca2cbb22b0464d5100386600d7d->leave($__internal_03d0b71fa992d800f78259241fea107b91fe5ca2cbb22b0464d5100386600d7d_prof);

        
        $__internal_667a46227f68b80052f75e9ce9e4d9e6e7aeadbfb7e79e394b862a3bb7da6542->leave($__internal_667a46227f68b80052f75e9ce9e4d9e6e7aeadbfb7e79e394b862a3bb7da6542_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}

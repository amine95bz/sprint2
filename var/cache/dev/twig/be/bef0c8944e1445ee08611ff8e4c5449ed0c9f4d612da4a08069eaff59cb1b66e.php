<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ce92e9ff632d23a8124d6f3c9913552e588320e10026530b34f962ac1d8df186 extends Twig_Template
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
        $__internal_0bd1236bb5b4965f3ec3e358580fc991ffb0d257ca81e3aadfe66eeee93a3cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd1236bb5b4965f3ec3e358580fc991ffb0d257ca81e3aadfe66eeee93a3cb1->enter($__internal_0bd1236bb5b4965f3ec3e358580fc991ffb0d257ca81e3aadfe66eeee93a3cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f00b6411c79b8143e545cf1c1be3d57d2ba21abdcfa3918330a1fa9ab2df41a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00b6411c79b8143e545cf1c1be3d57d2ba21abdcfa3918330a1fa9ab2df41a9->enter($__internal_f00b6411c79b8143e545cf1c1be3d57d2ba21abdcfa3918330a1fa9ab2df41a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0bd1236bb5b4965f3ec3e358580fc991ffb0d257ca81e3aadfe66eeee93a3cb1->leave($__internal_0bd1236bb5b4965f3ec3e358580fc991ffb0d257ca81e3aadfe66eeee93a3cb1_prof);

        
        $__internal_f00b6411c79b8143e545cf1c1be3d57d2ba21abdcfa3918330a1fa9ab2df41a9->leave($__internal_f00b6411c79b8143e545cf1c1be3d57d2ba21abdcfa3918330a1fa9ab2df41a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}

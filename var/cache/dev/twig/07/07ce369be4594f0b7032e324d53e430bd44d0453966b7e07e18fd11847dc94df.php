<?php

/* form_table_layout.html.twig */
class __TwigTemplate_4c7c579ffaf263d349b109fe83f2224a9e01ec67b0e37386703b3cceac8c8b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc5d03a0bedc1d5f2a48a76fa75745be92a944c2f729ae57abd30dc3b447ddea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5d03a0bedc1d5f2a48a76fa75745be92a944c2f729ae57abd30dc3b447ddea->enter($__internal_fc5d03a0bedc1d5f2a48a76fa75745be92a944c2f729ae57abd30dc3b447ddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_a64c247afd98ce4bbc27a8f04383c03da934b3c0564c2827db16bcd20223b1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64c247afd98ce4bbc27a8f04383c03da934b3c0564c2827db16bcd20223b1b3->enter($__internal_a64c247afd98ce4bbc27a8f04383c03da934b3c0564c2827db16bcd20223b1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_fc5d03a0bedc1d5f2a48a76fa75745be92a944c2f729ae57abd30dc3b447ddea->leave($__internal_fc5d03a0bedc1d5f2a48a76fa75745be92a944c2f729ae57abd30dc3b447ddea_prof);

        
        $__internal_a64c247afd98ce4bbc27a8f04383c03da934b3c0564c2827db16bcd20223b1b3->leave($__internal_a64c247afd98ce4bbc27a8f04383c03da934b3c0564c2827db16bcd20223b1b3_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_516792b8e63b212c5779a7604373cbdf88605d128c27b84859c67570fc83d01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516792b8e63b212c5779a7604373cbdf88605d128c27b84859c67570fc83d01c->enter($__internal_516792b8e63b212c5779a7604373cbdf88605d128c27b84859c67570fc83d01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_921bc442c4bd6b6a32adab93ffe2629c5dfdfa0cae62b6e64ccbb2b0c21edcac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921bc442c4bd6b6a32adab93ffe2629c5dfdfa0cae62b6e64ccbb2b0c21edcac->enter($__internal_921bc442c4bd6b6a32adab93ffe2629c5dfdfa0cae62b6e64ccbb2b0c21edcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_921bc442c4bd6b6a32adab93ffe2629c5dfdfa0cae62b6e64ccbb2b0c21edcac->leave($__internal_921bc442c4bd6b6a32adab93ffe2629c5dfdfa0cae62b6e64ccbb2b0c21edcac_prof);

        
        $__internal_516792b8e63b212c5779a7604373cbdf88605d128c27b84859c67570fc83d01c->leave($__internal_516792b8e63b212c5779a7604373cbdf88605d128c27b84859c67570fc83d01c_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3496a11813638a74e0f0e342121b7f28bb5e376d000c4ee2888d85edcb035dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3496a11813638a74e0f0e342121b7f28bb5e376d000c4ee2888d85edcb035dd4->enter($__internal_3496a11813638a74e0f0e342121b7f28bb5e376d000c4ee2888d85edcb035dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_9ded7714aa4de91b775835ed86c35766b450c37961cc87b5b445963703bdc1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ded7714aa4de91b775835ed86c35766b450c37961cc87b5b445963703bdc1f6->enter($__internal_9ded7714aa4de91b775835ed86c35766b450c37961cc87b5b445963703bdc1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_9ded7714aa4de91b775835ed86c35766b450c37961cc87b5b445963703bdc1f6->leave($__internal_9ded7714aa4de91b775835ed86c35766b450c37961cc87b5b445963703bdc1f6_prof);

        
        $__internal_3496a11813638a74e0f0e342121b7f28bb5e376d000c4ee2888d85edcb035dd4->leave($__internal_3496a11813638a74e0f0e342121b7f28bb5e376d000c4ee2888d85edcb035dd4_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_8181a50fbe76d6d1b45fbd05da54249e69b8cdafcb0f931e74ef4347cd495b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8181a50fbe76d6d1b45fbd05da54249e69b8cdafcb0f931e74ef4347cd495b44->enter($__internal_8181a50fbe76d6d1b45fbd05da54249e69b8cdafcb0f931e74ef4347cd495b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_17e423ffee5c40be665de13628b5afe2eeb2679b99fa01a68179a0d54d35e130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e423ffee5c40be665de13628b5afe2eeb2679b99fa01a68179a0d54d35e130->enter($__internal_17e423ffee5c40be665de13628b5afe2eeb2679b99fa01a68179a0d54d35e130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_17e423ffee5c40be665de13628b5afe2eeb2679b99fa01a68179a0d54d35e130->leave($__internal_17e423ffee5c40be665de13628b5afe2eeb2679b99fa01a68179a0d54d35e130_prof);

        
        $__internal_8181a50fbe76d6d1b45fbd05da54249e69b8cdafcb0f931e74ef4347cd495b44->leave($__internal_8181a50fbe76d6d1b45fbd05da54249e69b8cdafcb0f931e74ef4347cd495b44_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_07f862244140ddafc036a85849d04a850d5be958ae72d6474a4acd63fd30486c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f862244140ddafc036a85849d04a850d5be958ae72d6474a4acd63fd30486c->enter($__internal_07f862244140ddafc036a85849d04a850d5be958ae72d6474a4acd63fd30486c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d03d651016aad13682b5d3bee9f13b8a49c07c7b8ac6b3fd75976e50c29a9c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03d651016aad13682b5d3bee9f13b8a49c07c7b8ac6b3fd75976e50c29a9c1e->enter($__internal_d03d651016aad13682b5d3bee9f13b8a49c07c7b8ac6b3fd75976e50c29a9c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_d03d651016aad13682b5d3bee9f13b8a49c07c7b8ac6b3fd75976e50c29a9c1e->leave($__internal_d03d651016aad13682b5d3bee9f13b8a49c07c7b8ac6b3fd75976e50c29a9c1e_prof);

        
        $__internal_07f862244140ddafc036a85849d04a850d5be958ae72d6474a4acd63fd30486c->leave($__internal_07f862244140ddafc036a85849d04a850d5be958ae72d6474a4acd63fd30486c_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}

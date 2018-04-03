<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_92a00974b3509222fbbc239ac2dc005f33fba28fe3fd1c77ce052ddcf9e4370f extends Twig_Template
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
        $__internal_0169c8df6b240c29176282e3f612c5c1ce687c0dfdc64102ed0afa606ca05569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0169c8df6b240c29176282e3f612c5c1ce687c0dfdc64102ed0afa606ca05569->enter($__internal_0169c8df6b240c29176282e3f612c5c1ce687c0dfdc64102ed0afa606ca05569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_b129b9e6d1b69ea0bc0c621f20759216131316bcdfa48a82c03406cbc916f4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b129b9e6d1b69ea0bc0c621f20759216131316bcdfa48a82c03406cbc916f4c6->enter($__internal_b129b9e6d1b69ea0bc0c621f20759216131316bcdfa48a82c03406cbc916f4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_0169c8df6b240c29176282e3f612c5c1ce687c0dfdc64102ed0afa606ca05569->leave($__internal_0169c8df6b240c29176282e3f612c5c1ce687c0dfdc64102ed0afa606ca05569_prof);

        
        $__internal_b129b9e6d1b69ea0bc0c621f20759216131316bcdfa48a82c03406cbc916f4c6->leave($__internal_b129b9e6d1b69ea0bc0c621f20759216131316bcdfa48a82c03406cbc916f4c6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\Group\\list_content.html.twig");
    }
}

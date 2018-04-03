<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_ad4ce385a8390ee0a1be7b2a5a0b324e5220a25e1f9884110e716005d48dd42c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("Front.html.twig", "@FOSUser/layout.html.twig", 2);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_812456a2b6012ebc2d3ce891163b749cc58abccee01ead8e5587be7699a7c510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812456a2b6012ebc2d3ce891163b749cc58abccee01ead8e5587be7699a7c510->enter($__internal_812456a2b6012ebc2d3ce891163b749cc58abccee01ead8e5587be7699a7c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_d4fa014829d9934c3d07662bb4938dfac227d92b00321f2c09d5392c7719cec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fa014829d9934c3d07662bb4938dfac227d92b00321f2c09d5392c7719cec4->enter($__internal_d4fa014829d9934c3d07662bb4938dfac227d92b00321f2c09d5392c7719cec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_812456a2b6012ebc2d3ce891163b749cc58abccee01ead8e5587be7699a7c510->leave($__internal_812456a2b6012ebc2d3ce891163b749cc58abccee01ead8e5587be7699a7c510_prof);

        
        $__internal_d4fa014829d9934c3d07662bb4938dfac227d92b00321f2c09d5392c7719cec4->leave($__internal_d4fa014829d9934c3d07662bb4938dfac227d92b00321f2c09d5392c7719cec4_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_2e40b63a865f8edc3c920bf6de9565a129bb96e9086e05692633d8226bea9730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e40b63a865f8edc3c920bf6de9565a129bb96e9086e05692633d8226bea9730->enter($__internal_2e40b63a865f8edc3c920bf6de9565a129bb96e9086e05692633d8226bea9730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_d734713920daf20ecbeda75a1cb2349e1eb88801ec89385ef87cdc1b374d7654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d734713920daf20ecbeda75a1cb2349e1eb88801ec89385ef87cdc1b374d7654->enter($__internal_d734713920daf20ecbeda75a1cb2349e1eb88801ec89385ef87cdc1b374d7654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
";
        // line 18
        echo "

 ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 21
            echo "     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 22
                echo "         ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 23
                    echo "             <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                 ";
                    // line 24
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
             </div>
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo " ";
        }
        // line 29
        echo "
 <div>
     ";
        // line 31
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo " </div>
</body>
";
        
        $__internal_d734713920daf20ecbeda75a1cb2349e1eb88801ec89385ef87cdc1b374d7654->leave($__internal_d734713920daf20ecbeda75a1cb2349e1eb88801ec89385ef87cdc1b374d7654_prof);

        
        $__internal_2e40b63a865f8edc3c920bf6de9565a129bb96e9086e05692633d8226bea9730->leave($__internal_2e40b63a865f8edc3c920bf6de9565a129bb96e9086e05692633d8226bea9730_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe5de698766f2c2f2b2264bbb7840ddc0b1770fc2244a803672096d6d7d6e2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5de698766f2c2f2b2264bbb7840ddc0b1770fc2244a803672096d6d7d6e2f6->enter($__internal_fe5de698766f2c2f2b2264bbb7840ddc0b1770fc2244a803672096d6d7d6e2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_51fa9c743f1f8d9b5dce61dcadf4f483a48007bde2c2873366dd3d8c6c2f0589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fa9c743f1f8d9b5dce61dcadf4f483a48007bde2c2873366dd3d8c6c2f0589->enter($__internal_51fa9c743f1f8d9b5dce61dcadf4f483a48007bde2c2873366dd3d8c6c2f0589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "     ";
        
        $__internal_51fa9c743f1f8d9b5dce61dcadf4f483a48007bde2c2873366dd3d8c6c2f0589->leave($__internal_51fa9c743f1f8d9b5dce61dcadf4f483a48007bde2c2873366dd3d8c6c2f0589_prof);

        
        $__internal_fe5de698766f2c2f2b2264bbb7840ddc0b1770fc2244a803672096d6d7d6e2f6->leave($__internal_fe5de698766f2c2f2b2264bbb7840ddc0b1770fc2244a803672096d6d7d6e2f6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  113 => 31,  101 => 33,  99 => 31,  95 => 29,  92 => 28,  86 => 27,  77 => 24,  72 => 23,  67 => 22,  62 => 21,  60 => 20,  56 => 18,  50 => 4,  41 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# !DOCTYPE html> #}
{% extends 'Front.html.twig' %}
{% block container %}
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
{#    <div>
     {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
         {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
         <a href=\"{{ path('fos_user_security_logout') }}\">
             {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
         </a>
     {% else %}
         <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
     {% endif %}
 </div> #}


 {% if app.request.hasPreviousSession %}
     {% for type, messages in app.session.flashbag.all() %}
         {% for message in messages %}
             <div class=\"flash-{{ type }}\">
                 {{ message }}
             </div>
         {% endfor %}
     {% endfor %}
 {% endif %}

 <div>
     {% block fos_user_content %}
     {% endblock fos_user_content %}
 </div>
</body>
{% endblock %}
", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}

<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_415d0e69a5c17c2590416579385026468ded59e577b60150c0223daee531a047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("Front.html.twig", "FOSUserBundle::layout.html.twig", 2);
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
        $__internal_c42e868a7b1d4df4d2312e349da04a22e46d833568f66f10f32e8d2e1904f779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42e868a7b1d4df4d2312e349da04a22e46d833568f66f10f32e8d2e1904f779->enter($__internal_c42e868a7b1d4df4d2312e349da04a22e46d833568f66f10f32e8d2e1904f779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_3d96dc960b7bb2eacc0d9ff7e1400c248b856f4e6f31a9271c31a1c705570773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d96dc960b7bb2eacc0d9ff7e1400c248b856f4e6f31a9271c31a1c705570773->enter($__internal_3d96dc960b7bb2eacc0d9ff7e1400c248b856f4e6f31a9271c31a1c705570773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c42e868a7b1d4df4d2312e349da04a22e46d833568f66f10f32e8d2e1904f779->leave($__internal_c42e868a7b1d4df4d2312e349da04a22e46d833568f66f10f32e8d2e1904f779_prof);

        
        $__internal_3d96dc960b7bb2eacc0d9ff7e1400c248b856f4e6f31a9271c31a1c705570773->leave($__internal_3d96dc960b7bb2eacc0d9ff7e1400c248b856f4e6f31a9271c31a1c705570773_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_28b6f0f09f919f24ca4036c62b8a473db89eeb4c8983ee4b4f4a612842ce5992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b6f0f09f919f24ca4036c62b8a473db89eeb4c8983ee4b4f4a612842ce5992->enter($__internal_28b6f0f09f919f24ca4036c62b8a473db89eeb4c8983ee4b4f4a612842ce5992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_0af0fbd605a81393d5f94c79995982fcf970a6ff64bce9b53935fbd6d68041f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af0fbd605a81393d5f94c79995982fcf970a6ff64bce9b53935fbd6d68041f2->enter($__internal_0af0fbd605a81393d5f94c79995982fcf970a6ff64bce9b53935fbd6d68041f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_0af0fbd605a81393d5f94c79995982fcf970a6ff64bce9b53935fbd6d68041f2->leave($__internal_0af0fbd605a81393d5f94c79995982fcf970a6ff64bce9b53935fbd6d68041f2_prof);

        
        $__internal_28b6f0f09f919f24ca4036c62b8a473db89eeb4c8983ee4b4f4a612842ce5992->leave($__internal_28b6f0f09f919f24ca4036c62b8a473db89eeb4c8983ee4b4f4a612842ce5992_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d09bb0828e1ce4efb5b3e57fb67977c537dabdf661e781f0bb1314edb1d4d8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09bb0828e1ce4efb5b3e57fb67977c537dabdf661e781f0bb1314edb1d4d8f3->enter($__internal_d09bb0828e1ce4efb5b3e57fb67977c537dabdf661e781f0bb1314edb1d4d8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e50f662ba9d9441017dd0686d8b7f85753d513f7cb51d597453d7fbbe56beca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50f662ba9d9441017dd0686d8b7f85753d513f7cb51d597453d7fbbe56beca0->enter($__internal_e50f662ba9d9441017dd0686d8b7f85753d513f7cb51d597453d7fbbe56beca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "     ";
        
        $__internal_e50f662ba9d9441017dd0686d8b7f85753d513f7cb51d597453d7fbbe56beca0->leave($__internal_e50f662ba9d9441017dd0686d8b7f85753d513f7cb51d597453d7fbbe56beca0_prof);

        
        $__internal_d09bb0828e1ce4efb5b3e57fb67977c537dabdf661e781f0bb1314edb1d4d8f3->leave($__internal_d09bb0828e1ce4efb5b3e57fb67977c537dabdf661e781f0bb1314edb1d4d8f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}

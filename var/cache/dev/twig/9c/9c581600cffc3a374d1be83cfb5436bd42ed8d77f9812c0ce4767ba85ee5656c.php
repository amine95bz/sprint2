<?php

/* LocalBundle:Default:ajout_local.html.twig */
class __TwigTemplate_fa7470f7ad9f234216355d623a401dfbef70c0ec58ca84f154f87d63012474aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Front.html.twig", "LocalBundle:Default:ajout_local.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b870322ae8c2ec8023a11f42c0247d8bacafbcf5b360e45ec41ef79669ebd3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b870322ae8c2ec8023a11f42c0247d8bacafbcf5b360e45ec41ef79669ebd3c->enter($__internal_3b870322ae8c2ec8023a11f42c0247d8bacafbcf5b360e45ec41ef79669ebd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Default:ajout_local.html.twig"));

        $__internal_132ceb3d46716204abaad9eddc4c40b7bc3b893dc41a67d92061a4b262496cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132ceb3d46716204abaad9eddc4c40b7bc3b893dc41a67d92061a4b262496cbb->enter($__internal_132ceb3d46716204abaad9eddc4c40b7bc3b893dc41a67d92061a4b262496cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Default:ajout_local.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b870322ae8c2ec8023a11f42c0247d8bacafbcf5b360e45ec41ef79669ebd3c->leave($__internal_3b870322ae8c2ec8023a11f42c0247d8bacafbcf5b360e45ec41ef79669ebd3c_prof);

        
        $__internal_132ceb3d46716204abaad9eddc4c40b7bc3b893dc41a67d92061a4b262496cbb->leave($__internal_132ceb3d46716204abaad9eddc4c40b7bc3b893dc41a67d92061a4b262496cbb_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_1558b4f4bdce01c0625ac36aecc47f7a444c9bec12071ad27d156f5b424dea59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1558b4f4bdce01c0625ac36aecc47f7a444c9bec12071ad27d156f5b424dea59->enter($__internal_1558b4f4bdce01c0625ac36aecc47f7a444c9bec12071ad27d156f5b424dea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_c55e2fbc7deaa1b1b333a23ac98b6cd996db7907bd2c88b5c82bcd77652dba92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55e2fbc7deaa1b1b333a23ac98b6cd996db7907bd2c88b5c82bcd77652dba92->enter($__internal_c55e2fbc7deaa1b1b333a23ac98b6cd996db7907bd2c88b5c82bcd77652dba92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <script>
        function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDsAe9v3h1PZXsrWgn6TjJw_-tbV-f-tOU&callback=initMap\">
    </script>
    <h3>Ajouter un local</h3>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("local_homepage");
        echo "\">Home</a></li>
        <li class=\"active\" >Ajouter un local</li>

    </ol>

    <div class=\"col-md-12\">
        <div class=\"col-md-6\">

    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form_start');
        echo "

                <div class=\"key\" >
                    <i class=\"fa fa-keyboard-o\" aria-hidden=\"true\"></i>
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomLocal", array()), 'widget', array("attr" => array("placeholder" => "Nom local", "class" => "form-control placeholder-no-fix", "required" => "true")));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"key\">
                    <i class=\"fa fa-clipboard\" aria-hidden=\"true\"></i>
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget', array("attr" => array("placeholder" => "Nom local", "class" => "form-control placeholder-no-fix", "required" => "true")));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"key\">
                    <i class=\"fa fa-sort-numeric-asc\" aria-hidden=\"true\"></i>
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "superficie", array()), 'widget');
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"key\">
                    <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "localisation", array()), 'widget');
        echo "

                    <div class=\"clearfix\"></div>
                </div>

        </div>
        <div class=\"col-md-6\">
            zebieofezkfmezkdmeazdaz
        </div>
    </div>


    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form_end');
        echo "



";
        
        $__internal_c55e2fbc7deaa1b1b333a23ac98b6cd996db7907bd2c88b5c82bcd77652dba92->leave($__internal_c55e2fbc7deaa1b1b333a23ac98b6cd996db7907bd2c88b5c82bcd77652dba92_prof);

        
        $__internal_1558b4f4bdce01c0625ac36aecc47f7a444c9bec12071ad27d156f5b424dea59->leave($__internal_1558b4f4bdce01c0625ac36aecc47f7a444c9bec12071ad27d156f5b424dea59_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Default:ajout_local.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 60,  111 => 48,  103 => 43,  95 => 38,  87 => 33,  80 => 29,  69 => 21,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Front.html.twig' %}
{% block container %}
    <script>
        function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDsAe9v3h1PZXsrWgn6TjJw_-tbV-f-tOU&callback=initMap\">
    </script>
    <h3>Ajouter un local</h3>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('local_homepage') }}\">Home</a></li>
        <li class=\"active\" >Ajouter un local</li>

    </ol>

    <div class=\"col-md-12\">
        <div class=\"col-md-6\">

    {{ form_start(Form) }}

                <div class=\"key\" >
                    <i class=\"fa fa-keyboard-o\" aria-hidden=\"true\"></i>
                    {{ form_widget(Form.nomLocal, {'attr': {'placeholder': 'Nom local','class':'form-control placeholder-no-fix','required' : 'true'}}) }}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"key\">
                    <i class=\"fa fa-clipboard\" aria-hidden=\"true\"></i>
                    {{ form_widget(Form.description, {'attr': {'placeholder': 'Nom local','class':'form-control placeholder-no-fix','required' : 'true'}}) }}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"key\">
                    <i class=\"fa fa-sort-numeric-asc\" aria-hidden=\"true\"></i>
                    {{ form_widget(Form.superficie) }}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"key\">
                    <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
                    {{ form_widget(Form.localisation) }}

                    <div class=\"clearfix\"></div>
                </div>

        </div>
        <div class=\"col-md-6\">
            zebieofezkfmezkdmeazdaz
        </div>
    </div>


    {{ form_end(Form) }}



{% endblock %}", "LocalBundle:Default:ajout_local.html.twig", "C:\\wamp64\\www\\medina1\\src\\LocalBundle/Resources/views/Default/ajout_local.html.twig");
    }
}

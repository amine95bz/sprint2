<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e2d81854e0f2b4224b6fa5b73e4718848477fea0e157b9426de63eb5e51e4dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85de88661d4aca5a313d5788b8954ed3bac6d9e12bc29527e05b61feed889907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85de88661d4aca5a313d5788b8954ed3bac6d9e12bc29527e05b61feed889907->enter($__internal_85de88661d4aca5a313d5788b8954ed3bac6d9e12bc29527e05b61feed889907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bacf213cdb155844a929183312c76985eede4b7c20e3919f2f9f4576e941b8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacf213cdb155844a929183312c76985eede4b7c20e3919f2f9f4576e941b8ac->enter($__internal_bacf213cdb155844a929183312c76985eede4b7c20e3919f2f9f4576e941b8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85de88661d4aca5a313d5788b8954ed3bac6d9e12bc29527e05b61feed889907->leave($__internal_85de88661d4aca5a313d5788b8954ed3bac6d9e12bc29527e05b61feed889907_prof);

        
        $__internal_bacf213cdb155844a929183312c76985eede4b7c20e3919f2f9f4576e941b8ac->leave($__internal_bacf213cdb155844a929183312c76985eede4b7c20e3919f2f9f4576e941b8ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dbe68f38c1486f1d751f7058cdc94ffecf08a3a2285d8f06842339ae1b620b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe68f38c1486f1d751f7058cdc94ffecf08a3a2285d8f06842339ae1b620b69->enter($__internal_dbe68f38c1486f1d751f7058cdc94ffecf08a3a2285d8f06842339ae1b620b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ebbd154a87b8a4f3d2fb0620f89b560e4e88ef5eac84db0fe72013b276852489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbd154a87b8a4f3d2fb0620f89b560e4e88ef5eac84db0fe72013b276852489->enter($__internal_ebbd154a87b8a4f3d2fb0620f89b560e4e88ef5eac84db0fe72013b276852489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ebbd154a87b8a4f3d2fb0620f89b560e4e88ef5eac84db0fe72013b276852489->leave($__internal_ebbd154a87b8a4f3d2fb0620f89b560e4e88ef5eac84db0fe72013b276852489_prof);

        
        $__internal_dbe68f38c1486f1d751f7058cdc94ffecf08a3a2285d8f06842339ae1b620b69->leave($__internal_dbe68f38c1486f1d751f7058cdc94ffecf08a3a2285d8f06842339ae1b620b69_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_374f8eae8d5a72047f43d5e687094346289432c2ef86a4ef4292e88a0b4b6636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374f8eae8d5a72047f43d5e687094346289432c2ef86a4ef4292e88a0b4b6636->enter($__internal_374f8eae8d5a72047f43d5e687094346289432c2ef86a4ef4292e88a0b4b6636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66334c6ba16d6582912c566d35e02d3695c633790924548ac58af9fa197b645f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66334c6ba16d6582912c566d35e02d3695c633790924548ac58af9fa197b645f->enter($__internal_66334c6ba16d6582912c566d35e02d3695c633790924548ac58af9fa197b645f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_66334c6ba16d6582912c566d35e02d3695c633790924548ac58af9fa197b645f->leave($__internal_66334c6ba16d6582912c566d35e02d3695c633790924548ac58af9fa197b645f_prof);

        
        $__internal_374f8eae8d5a72047f43d5e687094346289432c2ef86a4ef4292e88a0b4b6636->leave($__internal_374f8eae8d5a72047f43d5e687094346289432c2ef86a4ef4292e88a0b4b6636_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_51d5ae76ad9750c8f8c1a270c1fb237d9eaaaedc8b346853ff5209c273c44022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d5ae76ad9750c8f8c1a270c1fb237d9eaaaedc8b346853ff5209c273c44022->enter($__internal_51d5ae76ad9750c8f8c1a270c1fb237d9eaaaedc8b346853ff5209c273c44022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd02d9cb1b5a9a684650ec356ffacefef1d6d7d743bd7400c8db1d3db06799d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd02d9cb1b5a9a684650ec356ffacefef1d6d7d743bd7400c8db1d3db06799d7->enter($__internal_cd02d9cb1b5a9a684650ec356ffacefef1d6d7d743bd7400c8db1d3db06799d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cd02d9cb1b5a9a684650ec356ffacefef1d6d7d743bd7400c8db1d3db06799d7->leave($__internal_cd02d9cb1b5a9a684650ec356ffacefef1d6d7d743bd7400c8db1d3db06799d7_prof);

        
        $__internal_51d5ae76ad9750c8f8c1a270c1fb237d9eaaaedc8b346853ff5209c273c44022->leave($__internal_51d5ae76ad9750c8f8c1a270c1fb237d9eaaaedc8b346853ff5209c273c44022_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

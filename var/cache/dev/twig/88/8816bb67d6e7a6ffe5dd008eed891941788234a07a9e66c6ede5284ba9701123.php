<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_412930169cab5812e4c6f9ba98c814a7b0977534048d3ddfcdd45ed6e523db62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8403a979560bf5ef4e5dc486bdb08c5b3b585ac044820e934953b0a14bd01d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8403a979560bf5ef4e5dc486bdb08c5b3b585ac044820e934953b0a14bd01d46->enter($__internal_8403a979560bf5ef4e5dc486bdb08c5b3b585ac044820e934953b0a14bd01d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f0e57bdd7603a737d7046da3bd1b78f0f2a156a60be7a9a2cbbddbf81f54d9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e57bdd7603a737d7046da3bd1b78f0f2a156a60be7a9a2cbbddbf81f54d9d7->enter($__internal_f0e57bdd7603a737d7046da3bd1b78f0f2a156a60be7a9a2cbbddbf81f54d9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8403a979560bf5ef4e5dc486bdb08c5b3b585ac044820e934953b0a14bd01d46->leave($__internal_8403a979560bf5ef4e5dc486bdb08c5b3b585ac044820e934953b0a14bd01d46_prof);

        
        $__internal_f0e57bdd7603a737d7046da3bd1b78f0f2a156a60be7a9a2cbbddbf81f54d9d7->leave($__internal_f0e57bdd7603a737d7046da3bd1b78f0f2a156a60be7a9a2cbbddbf81f54d9d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_402f6e8e81d27c5ead8b2ed67982fb7e879ba3612fbe50fbd01e3aa9ef9e107e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402f6e8e81d27c5ead8b2ed67982fb7e879ba3612fbe50fbd01e3aa9ef9e107e->enter($__internal_402f6e8e81d27c5ead8b2ed67982fb7e879ba3612fbe50fbd01e3aa9ef9e107e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_606d15ca0d1e09b9de44bd6c0f05bc02bf44cc565972fe13d94a5ce2eb1d6870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606d15ca0d1e09b9de44bd6c0f05bc02bf44cc565972fe13d94a5ce2eb1d6870->enter($__internal_606d15ca0d1e09b9de44bd6c0f05bc02bf44cc565972fe13d94a5ce2eb1d6870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_606d15ca0d1e09b9de44bd6c0f05bc02bf44cc565972fe13d94a5ce2eb1d6870->leave($__internal_606d15ca0d1e09b9de44bd6c0f05bc02bf44cc565972fe13d94a5ce2eb1d6870_prof);

        
        $__internal_402f6e8e81d27c5ead8b2ed67982fb7e879ba3612fbe50fbd01e3aa9ef9e107e->leave($__internal_402f6e8e81d27c5ead8b2ed67982fb7e879ba3612fbe50fbd01e3aa9ef9e107e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e50235883adcfa86284889c0a17ac851905a41f961e808780937d572d42207c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50235883adcfa86284889c0a17ac851905a41f961e808780937d572d42207c8->enter($__internal_e50235883adcfa86284889c0a17ac851905a41f961e808780937d572d42207c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2dd3adae6df4b974df9c92138cce590462afec6ca3f923fa2049cebc97f5b41f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd3adae6df4b974df9c92138cce590462afec6ca3f923fa2049cebc97f5b41f->enter($__internal_2dd3adae6df4b974df9c92138cce590462afec6ca3f923fa2049cebc97f5b41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2dd3adae6df4b974df9c92138cce590462afec6ca3f923fa2049cebc97f5b41f->leave($__internal_2dd3adae6df4b974df9c92138cce590462afec6ca3f923fa2049cebc97f5b41f_prof);

        
        $__internal_e50235883adcfa86284889c0a17ac851905a41f961e808780937d572d42207c8->leave($__internal_e50235883adcfa86284889c0a17ac851905a41f961e808780937d572d42207c8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f48f03fc10810943d1ebe681dfb593d1061f8e5127c30595b4242c43307535d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48f03fc10810943d1ebe681dfb593d1061f8e5127c30595b4242c43307535d2->enter($__internal_f48f03fc10810943d1ebe681dfb593d1061f8e5127c30595b4242c43307535d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1bc058606cf72e148a0a52312f6c2eaabad75148d4066aece3f709cc3e1ffd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bc058606cf72e148a0a52312f6c2eaabad75148d4066aece3f709cc3e1ffd8->enter($__internal_b1bc058606cf72e148a0a52312f6c2eaabad75148d4066aece3f709cc3e1ffd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b1bc058606cf72e148a0a52312f6c2eaabad75148d4066aece3f709cc3e1ffd8->leave($__internal_b1bc058606cf72e148a0a52312f6c2eaabad75148d4066aece3f709cc3e1ffd8_prof);

        
        $__internal_f48f03fc10810943d1ebe681dfb593d1061f8e5127c30595b4242c43307535d2->leave($__internal_f48f03fc10810943d1ebe681dfb593d1061f8e5127c30595b4242c43307535d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}

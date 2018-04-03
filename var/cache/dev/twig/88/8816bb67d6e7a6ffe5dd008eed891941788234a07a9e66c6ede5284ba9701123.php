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
        $__internal_84dc075ff7d87a9d5c62296ca7b2d9141ed46d738bca4b69cc5b2816e40a47e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84dc075ff7d87a9d5c62296ca7b2d9141ed46d738bca4b69cc5b2816e40a47e6->enter($__internal_84dc075ff7d87a9d5c62296ca7b2d9141ed46d738bca4b69cc5b2816e40a47e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3d0c37e36b8e0ffa166ed9d76caf77589b41c1d549f5ae5dba9f02b852616b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0c37e36b8e0ffa166ed9d76caf77589b41c1d549f5ae5dba9f02b852616b44->enter($__internal_3d0c37e36b8e0ffa166ed9d76caf77589b41c1d549f5ae5dba9f02b852616b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_84dc075ff7d87a9d5c62296ca7b2d9141ed46d738bca4b69cc5b2816e40a47e6->leave($__internal_84dc075ff7d87a9d5c62296ca7b2d9141ed46d738bca4b69cc5b2816e40a47e6_prof);

        
        $__internal_3d0c37e36b8e0ffa166ed9d76caf77589b41c1d549f5ae5dba9f02b852616b44->leave($__internal_3d0c37e36b8e0ffa166ed9d76caf77589b41c1d549f5ae5dba9f02b852616b44_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0d4203f095c536971658d6e721402e25a27527ebed17a5833ac711cbfca5ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d4203f095c536971658d6e721402e25a27527ebed17a5833ac711cbfca5ab6->enter($__internal_d0d4203f095c536971658d6e721402e25a27527ebed17a5833ac711cbfca5ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d19622f6ea2ba5759ac4244fa1df984912631bf68f397626eb2b4c3ca743bf9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19622f6ea2ba5759ac4244fa1df984912631bf68f397626eb2b4c3ca743bf9d->enter($__internal_d19622f6ea2ba5759ac4244fa1df984912631bf68f397626eb2b4c3ca743bf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d19622f6ea2ba5759ac4244fa1df984912631bf68f397626eb2b4c3ca743bf9d->leave($__internal_d19622f6ea2ba5759ac4244fa1df984912631bf68f397626eb2b4c3ca743bf9d_prof);

        
        $__internal_d0d4203f095c536971658d6e721402e25a27527ebed17a5833ac711cbfca5ab6->leave($__internal_d0d4203f095c536971658d6e721402e25a27527ebed17a5833ac711cbfca5ab6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1deb808a65260d6304dbecd3b745bbee974fb5158d582fa1f5152d0b581cbccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1deb808a65260d6304dbecd3b745bbee974fb5158d582fa1f5152d0b581cbccf->enter($__internal_1deb808a65260d6304dbecd3b745bbee974fb5158d582fa1f5152d0b581cbccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7275db27555c4e8b279abb99041659a0042e9c31439d67cb3c701178f72db6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7275db27555c4e8b279abb99041659a0042e9c31439d67cb3c701178f72db6fb->enter($__internal_7275db27555c4e8b279abb99041659a0042e9c31439d67cb3c701178f72db6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7275db27555c4e8b279abb99041659a0042e9c31439d67cb3c701178f72db6fb->leave($__internal_7275db27555c4e8b279abb99041659a0042e9c31439d67cb3c701178f72db6fb_prof);

        
        $__internal_1deb808a65260d6304dbecd3b745bbee974fb5158d582fa1f5152d0b581cbccf->leave($__internal_1deb808a65260d6304dbecd3b745bbee974fb5158d582fa1f5152d0b581cbccf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a662b6c85dbd85009ff61dee2161ea42d0bd89288fe240f788b1ac0f13aa5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a662b6c85dbd85009ff61dee2161ea42d0bd89288fe240f788b1ac0f13aa5e9->enter($__internal_8a662b6c85dbd85009ff61dee2161ea42d0bd89288fe240f788b1ac0f13aa5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_215718c6508208e7622fc4eedbc32c5ad6584cccb1cc7004dfd16bddbe516a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215718c6508208e7622fc4eedbc32c5ad6584cccb1cc7004dfd16bddbe516a03->enter($__internal_215718c6508208e7622fc4eedbc32c5ad6584cccb1cc7004dfd16bddbe516a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_215718c6508208e7622fc4eedbc32c5ad6584cccb1cc7004dfd16bddbe516a03->leave($__internal_215718c6508208e7622fc4eedbc32c5ad6584cccb1cc7004dfd16bddbe516a03_prof);

        
        $__internal_8a662b6c85dbd85009ff61dee2161ea42d0bd89288fe240f788b1ac0f13aa5e9->leave($__internal_8a662b6c85dbd85009ff61dee2161ea42d0bd89288fe240f788b1ac0f13aa5e9_prof);

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

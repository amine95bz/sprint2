<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_47fe85e48b7877cae90b7bc41541ebe4fc5c0d766d0bf2abc739005784095bb7 extends Twig_Template
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
        $__internal_616b2c29d2a2383b02542aadb234c59ac77cc54805b96714a658148a9a6b08da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616b2c29d2a2383b02542aadb234c59ac77cc54805b96714a658148a9a6b08da->enter($__internal_616b2c29d2a2383b02542aadb234c59ac77cc54805b96714a658148a9a6b08da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_c3c09708f8af61ec246275e313f519cc282d86f172cf41dd49db99c8ef646eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c09708f8af61ec246275e313f519cc282d86f172cf41dd49db99c8ef646eb0->enter($__internal_c3c09708f8af61ec246275e313f519cc282d86f172cf41dd49db99c8ef646eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_616b2c29d2a2383b02542aadb234c59ac77cc54805b96714a658148a9a6b08da->leave($__internal_616b2c29d2a2383b02542aadb234c59ac77cc54805b96714a658148a9a6b08da_prof);

        
        $__internal_c3c09708f8af61ec246275e313f519cc282d86f172cf41dd49db99c8ef646eb0->leave($__internal_c3c09708f8af61ec246275e313f519cc282d86f172cf41dd49db99c8ef646eb0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6161fcb21dfedd3d608eda7d6b95060e48efd7812b4da61b0a91111d97984887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6161fcb21dfedd3d608eda7d6b95060e48efd7812b4da61b0a91111d97984887->enter($__internal_6161fcb21dfedd3d608eda7d6b95060e48efd7812b4da61b0a91111d97984887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ac77164201c6b279de19df9298f6313f93946c68e9cca1850ffd65a0aeaee9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac77164201c6b279de19df9298f6313f93946c68e9cca1850ffd65a0aeaee9b->enter($__internal_7ac77164201c6b279de19df9298f6313f93946c68e9cca1850ffd65a0aeaee9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7ac77164201c6b279de19df9298f6313f93946c68e9cca1850ffd65a0aeaee9b->leave($__internal_7ac77164201c6b279de19df9298f6313f93946c68e9cca1850ffd65a0aeaee9b_prof);

        
        $__internal_6161fcb21dfedd3d608eda7d6b95060e48efd7812b4da61b0a91111d97984887->leave($__internal_6161fcb21dfedd3d608eda7d6b95060e48efd7812b4da61b0a91111d97984887_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_edfb75e121c992ae40989e2c0150ae00163c1c63c8043c5ded550c96b0cfc6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfb75e121c992ae40989e2c0150ae00163c1c63c8043c5ded550c96b0cfc6c2->enter($__internal_edfb75e121c992ae40989e2c0150ae00163c1c63c8043c5ded550c96b0cfc6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe2c58a64b332560c52a3f2885e777d2351a8368529c6408222d142444d167da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2c58a64b332560c52a3f2885e777d2351a8368529c6408222d142444d167da->enter($__internal_fe2c58a64b332560c52a3f2885e777d2351a8368529c6408222d142444d167da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fe2c58a64b332560c52a3f2885e777d2351a8368529c6408222d142444d167da->leave($__internal_fe2c58a64b332560c52a3f2885e777d2351a8368529c6408222d142444d167da_prof);

        
        $__internal_edfb75e121c992ae40989e2c0150ae00163c1c63c8043c5ded550c96b0cfc6c2->leave($__internal_edfb75e121c992ae40989e2c0150ae00163c1c63c8043c5ded550c96b0cfc6c2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_08735c8a4a5dab6001a3ef99a8259c1ca21c9d9029a05e582a806dce750b3660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08735c8a4a5dab6001a3ef99a8259c1ca21c9d9029a05e582a806dce750b3660->enter($__internal_08735c8a4a5dab6001a3ef99a8259c1ca21c9d9029a05e582a806dce750b3660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75b38e4cd3cce3ac291296d2a4c63aad552fff0e5806b9899e607259705ac6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b38e4cd3cce3ac291296d2a4c63aad552fff0e5806b9899e607259705ac6ed->enter($__internal_75b38e4cd3cce3ac291296d2a4c63aad552fff0e5806b9899e607259705ac6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_75b38e4cd3cce3ac291296d2a4c63aad552fff0e5806b9899e607259705ac6ed->leave($__internal_75b38e4cd3cce3ac291296d2a4c63aad552fff0e5806b9899e607259705ac6ed_prof);

        
        $__internal_08735c8a4a5dab6001a3ef99a8259c1ca21c9d9029a05e582a806dce750b3660->leave($__internal_08735c8a4a5dab6001a3ef99a8259c1ca21c9d9029a05e582a806dce750b3660_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\medina1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}

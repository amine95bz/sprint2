<?php

/* base.html.twig */
class __TwigTemplate_86772047284e53516357911e5f667eafa7a7a01ef5aee93d237fd57d276efa77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dea7015a2b667ca66fbb15143ee22a59d86a92c9066b2cfecffff4891a1cc9bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea7015a2b667ca66fbb15143ee22a59d86a92c9066b2cfecffff4891a1cc9bc->enter($__internal_dea7015a2b667ca66fbb15143ee22a59d86a92c9066b2cfecffff4891a1cc9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4a9337ff2a06bb1eacc80dc82c9a1bc61fbf892548def3326c5d76daa61d2f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9337ff2a06bb1eacc80dc82c9a1bc61fbf892548def3326c5d76daa61d2f51->enter($__internal_4a9337ff2a06bb1eacc80dc82c9a1bc61fbf892548def3326c5d76daa61d2f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_dea7015a2b667ca66fbb15143ee22a59d86a92c9066b2cfecffff4891a1cc9bc->leave($__internal_dea7015a2b667ca66fbb15143ee22a59d86a92c9066b2cfecffff4891a1cc9bc_prof);

        
        $__internal_4a9337ff2a06bb1eacc80dc82c9a1bc61fbf892548def3326c5d76daa61d2f51->leave($__internal_4a9337ff2a06bb1eacc80dc82c9a1bc61fbf892548def3326c5d76daa61d2f51_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b125cd702065fd80b4edb8817201520a9cb453826adbeacc432f0bf56b0b69d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b125cd702065fd80b4edb8817201520a9cb453826adbeacc432f0bf56b0b69d->enter($__internal_2b125cd702065fd80b4edb8817201520a9cb453826adbeacc432f0bf56b0b69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef186faea0a0f36b663ed6fe0d6c49be6c1e6bbbe4467d7da847cc6a7feb9f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef186faea0a0f36b663ed6fe0d6c49be6c1e6bbbe4467d7da847cc6a7feb9f45->enter($__internal_ef186faea0a0f36b663ed6fe0d6c49be6c1e6bbbe4467d7da847cc6a7feb9f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ef186faea0a0f36b663ed6fe0d6c49be6c1e6bbbe4467d7da847cc6a7feb9f45->leave($__internal_ef186faea0a0f36b663ed6fe0d6c49be6c1e6bbbe4467d7da847cc6a7feb9f45_prof);

        
        $__internal_2b125cd702065fd80b4edb8817201520a9cb453826adbeacc432f0bf56b0b69d->leave($__internal_2b125cd702065fd80b4edb8817201520a9cb453826adbeacc432f0bf56b0b69d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8acdc65931f43fcdd946e777ed7ee0884ad50aafc4335dd5ed45a8cbe8fde5c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8acdc65931f43fcdd946e777ed7ee0884ad50aafc4335dd5ed45a8cbe8fde5c2->enter($__internal_8acdc65931f43fcdd946e777ed7ee0884ad50aafc4335dd5ed45a8cbe8fde5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1ec0a035c2bf024b0427961787d5d7b43d699b8bba5be1788e07ffc2eff254e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec0a035c2bf024b0427961787d5d7b43d699b8bba5be1788e07ffc2eff254e7->enter($__internal_1ec0a035c2bf024b0427961787d5d7b43d699b8bba5be1788e07ffc2eff254e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1ec0a035c2bf024b0427961787d5d7b43d699b8bba5be1788e07ffc2eff254e7->leave($__internal_1ec0a035c2bf024b0427961787d5d7b43d699b8bba5be1788e07ffc2eff254e7_prof);

        
        $__internal_8acdc65931f43fcdd946e777ed7ee0884ad50aafc4335dd5ed45a8cbe8fde5c2->leave($__internal_8acdc65931f43fcdd946e777ed7ee0884ad50aafc4335dd5ed45a8cbe8fde5c2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_792d5e8fc163163efa98c8e0e40afbbc4ac37b6f13f265b09cab561f252b5c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792d5e8fc163163efa98c8e0e40afbbc4ac37b6f13f265b09cab561f252b5c27->enter($__internal_792d5e8fc163163efa98c8e0e40afbbc4ac37b6f13f265b09cab561f252b5c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93f88aca261679db03743d35c7d2e31b422a7cec51767a1cce9d44182bdd5bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f88aca261679db03743d35c7d2e31b422a7cec51767a1cce9d44182bdd5bf5->enter($__internal_93f88aca261679db03743d35c7d2e31b422a7cec51767a1cce9d44182bdd5bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93f88aca261679db03743d35c7d2e31b422a7cec51767a1cce9d44182bdd5bf5->leave($__internal_93f88aca261679db03743d35c7d2e31b422a7cec51767a1cce9d44182bdd5bf5_prof);

        
        $__internal_792d5e8fc163163efa98c8e0e40afbbc4ac37b6f13f265b09cab561f252b5c27->leave($__internal_792d5e8fc163163efa98c8e0e40afbbc4ac37b6f13f265b09cab561f252b5c27_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d4b442bc06fcfe418139964c2b811870475a7e6361178bbc30558c61bc2672d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4b442bc06fcfe418139964c2b811870475a7e6361178bbc30558c61bc2672d->enter($__internal_0d4b442bc06fcfe418139964c2b811870475a7e6361178bbc30558c61bc2672d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8917d49c06e0528baae1de32e077f1ec29bb618bdd671375ef48f7d603a2ab39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8917d49c06e0528baae1de32e077f1ec29bb618bdd671375ef48f7d603a2ab39->enter($__internal_8917d49c06e0528baae1de32e077f1ec29bb618bdd671375ef48f7d603a2ab39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8917d49c06e0528baae1de32e077f1ec29bb618bdd671375ef48f7d603a2ab39->leave($__internal_8917d49c06e0528baae1de32e077f1ec29bb618bdd671375ef48f7d603a2ab39_prof);

        
        $__internal_0d4b442bc06fcfe418139964c2b811870475a7e6361178bbc30558c61bc2672d->leave($__internal_0d4b442bc06fcfe418139964c2b811870475a7e6361178bbc30558c61bc2672d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\views\\base.html.twig");
    }
}

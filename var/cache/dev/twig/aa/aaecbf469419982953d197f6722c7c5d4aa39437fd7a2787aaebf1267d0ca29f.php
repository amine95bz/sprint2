<?php

/* @Produit/Default/Produit/Vetement.twig */
class __TwigTemplate_0a43d2ad409acbb02212720b5d50ee37120ae5724ed08ac1ebe683ab05341ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::Front.html.twig", "@Produit/Default/Produit/Vetement.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProduitBundle::Front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ae7b87391aff540f212f7db095257fa01cc1dc19500afa0cb350b46fbe54d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae7b87391aff540f212f7db095257fa01cc1dc19500afa0cb350b46fbe54d63->enter($__internal_8ae7b87391aff540f212f7db095257fa01cc1dc19500afa0cb350b46fbe54d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Produit/Default/Produit/Vetement.twig"));

        $__internal_89282f6806631174930bed86d126fe9e5c4dbaa90cb538ea64d6aaaff3bc2c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89282f6806631174930bed86d126fe9e5c4dbaa90cb538ea64d6aaaff3bc2c81->enter($__internal_89282f6806631174930bed86d126fe9e5c4dbaa90cb538ea64d6aaaff3bc2c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Produit/Default/Produit/Vetement.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae7b87391aff540f212f7db095257fa01cc1dc19500afa0cb350b46fbe54d63->leave($__internal_8ae7b87391aff540f212f7db095257fa01cc1dc19500afa0cb350b46fbe54d63_prof);

        
        $__internal_89282f6806631174930bed86d126fe9e5c4dbaa90cb538ea64d6aaaff3bc2c81->leave($__internal_89282f6806631174930bed86d126fe9e5c4dbaa90cb538ea64d6aaaff3bc2c81_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_785d427ec8b3bae8bfaa130e593c33c41774d69d93fd07c65aed9204b70648b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785d427ec8b3bae8bfaa130e593c33c41774d69d93fd07c65aed9204b70648b9->enter($__internal_785d427ec8b3bae8bfaa130e593c33c41774d69d93fd07c65aed9204b70648b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_630dfa445f46981913b099d77658f882101674f78b210be4f0db104bb65495cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630dfa445f46981913b099d77658f882101674f78b210be4f0db104bb65495cb->enter($__internal_630dfa445f46981913b099d77658f882101674f78b210be4f0db104bb65495cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


    <div class=\"product-easy\">
        <div class=\"container\">

            <div class=\"sap_tabs\">
                <div id=\"horizontalTab\" style=\"display: block; width: 10%; margin: 0px;\">
                    <ul class=\"resp-tabs-list\">
                        <li ><span>Collection Chicha</span></li>

                    </ul>

                    <div class=\"resp-tabs-container\">
                        <div class=\"tab-1 resp-tab-content\" aria-labelledby=\"tab_item-0\">

                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 23
            echo "                                <div class=\"col-md-3 product-men\">

                                    <div class=\"men-pro-item simpleCart_shelfItem\">
                                        <div class=\"men-thumb-item\">
                                            <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["produit"], "image", array()))), "html", null, true);
            echo "\" alt=\"\" class=\"pro-image-front\">
                                            <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["produit"], "image", array()))), "html", null, true);
            echo "\" alt=\"\" class=\"pro-image-back\">
                                            <div class=\"men-cart-pro\">
                                                <div class=\"inner-men-cart-pro\">
                                                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voirplus_homepage", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" class=\"link-product-add-cart\">Voir Plus</a>

                                                </div>
                                            </div>


                                        </div>
                                        <div class=\"item-info-product \">
                                            <h4>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</h4>
                                            <div class=\"info-product-price\">
                                                <span class=\"item_price\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " DT</span>

                                            </div>
                                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("LikeProduit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" class=\"item_add single-item hvr-outline-out button2\">J'aime</a> <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nbjaimes", array()), "html", null, true);
            echo "</span>



                                            <form method=\"POST\" action=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AjouterAuPanier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">
                                                <input type=\"text\" name=\"quantite\" placeholder=\"choisir votre quantite...\" required>

                                                <label></label>
                                                <input type=\"submit\" value=\"valider\">
                                            </form>



                                        </div>
                                    </div>,

                                </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("OtherProduit");
        echo "\" class=\"item_add single-item hvr-outline-out button2\">Ajouter votre Produit</a>

";
        
        $__internal_630dfa445f46981913b099d77658f882101674f78b210be4f0db104bb65495cb->leave($__internal_630dfa445f46981913b099d77658f882101674f78b210be4f0db104bb65495cb_prof);

        
        $__internal_785d427ec8b3bae8bfaa130e593c33c41774d69d93fd07c65aed9204b70648b9->leave($__internal_785d427ec8b3bae8bfaa130e593c33c41774d69d93fd07c65aed9204b70648b9_prof);

    }

    public function getTemplateName()
    {
        return "@Produit/Default/Produit/Vetement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 72,  139 => 63,  118 => 48,  109 => 44,  103 => 41,  98 => 39,  87 => 31,  81 => 28,  77 => 27,  71 => 23,  67 => 22,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'ProduitBundle::Front.html.twig' %}



{% block body %}



    <div class=\"product-easy\">
        <div class=\"container\">

            <div class=\"sap_tabs\">
                <div id=\"horizontalTab\" style=\"display: block; width: 10%; margin: 0px;\">
                    <ul class=\"resp-tabs-list\">
                        <li ><span>Collection Chicha</span></li>

                    </ul>

                    <div class=\"resp-tabs-container\">
                        <div class=\"tab-1 resp-tab-content\" aria-labelledby=\"tab_item-0\">

                            {% for produit in produits %}
                                <div class=\"col-md-3 product-men\">

                                    <div class=\"men-pro-item simpleCart_shelfItem\">
                                        <div class=\"men-thumb-item\">
                                            <img src=\"{{ asset( 'images/' ~ produit.image) }}\" alt=\"\" class=\"pro-image-front\">
                                            <img src=\"{{ asset( 'images/' ~ produit.image) }}\" alt=\"\" class=\"pro-image-back\">
                                            <div class=\"men-cart-pro\">
                                                <div class=\"inner-men-cart-pro\">
                                                    <a href=\"{{ path('voirplus_homepage',{'id':produit.id}) }}\" class=\"link-product-add-cart\">Voir Plus</a>

                                                </div>
                                            </div>


                                        </div>
                                        <div class=\"item-info-product \">
                                            <h4>{{ produit.nom }}</h4>
                                            <div class=\"info-product-price\">
                                                <span class=\"item_price\">{{ produit.prix }} DT</span>

                                            </div>
                                            <a href=\"{{ path('LikeProduit',{'id':produit.id}) }}\" class=\"item_add single-item hvr-outline-out button2\">J'aime</a> <span>{{ produit.nbjaimes }}</span>



                                            <form method=\"POST\" action=\"{{ path('AjouterAuPanier',{'id':produit.id}) }}\">
                                                <input type=\"text\" name=\"quantite\" placeholder=\"choisir votre quantite...\" required>

                                                <label></label>
                                                <input type=\"submit\" value=\"valider\">
                                            </form>



                                        </div>
                                    </div>,

                                </div>

                            {% endfor %}



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href=\"{{ path('OtherProduit') }}\" class=\"item_add single-item hvr-outline-out button2\">Ajouter votre Produit</a>

{% endblock %}", "@Produit/Default/Produit/Vetement.twig", "C:\\wamp64\\www\\medina1\\src\\ProduitBundle\\Resources\\views\\Default\\Produit\\Vetement.twig");
    }
}

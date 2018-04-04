<?php

/* Front.html.twig */
class __TwigTemplate_8e23124ae7a1544aca7644ef9c86f00936705a039c546fdde47c7eb061a0890c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'script' => array($this, 'block_script'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a9d0fdcab5a39718ca9e70be174bf6b8bb85203351c20467bdfb469138ad212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9d0fdcab5a39718ca9e70be174bf6b8bb85203351c20467bdfb469138ad212->enter($__internal_1a9d0fdcab5a39718ca9e70be174bf6b8bb85203351c20467bdfb469138ad212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front.html.twig"));

        $__internal_a83f9cb0267843b4984876702c55e8ccbbf1be698eec84ae54a624b92f8e7015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83f9cb0267843b4984876702c55e8ccbbf1be698eec84ae54a624b92f8e7015->enter($__internal_a83f9cb0267843b4984876702c55e8ccbbf1be698eec84ae54a624b92f8e7015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front.html.twig"));

        // line 1
        echo "<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Souk El Medina</title>
    <!--css-->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("OurDesignModif/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--css-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--search jQuery-->
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <!--search jQuery-->
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$(\"#slider\").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: \"callbacks\",
                pager: true,
            });
        });
    </script>
    <!--mycart-->
    <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- cart -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/simpleCart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- cart -->
    <!--start-rate-->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jstarbox.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jstarbox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
    <script type=\"text/javascript\">
        jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' '+val);
                        return val;
                    }
                })
            });
        });
    </script>

    ";
        // line 70
        $this->displayBlock('script', $context, $blocks);
        // line 72
        echo "


    <!--//End-rate-->
</head>
<body>
<!--header-->
";
        // line 79
        $this->displayBlock('header', $context, $blocks);
        // line 218
        echo "<!--header-->
<!--banner-->
";
        // line 220
        $this->displayBlock('body', $context, $blocks);
        // line 481
        echo "<!---footer--->
";
        // line 482
        $this->displayBlock('footer', $context, $blocks);
        // line 540
        echo "<!--copy-->

</body>
</html>";
        
        $__internal_1a9d0fdcab5a39718ca9e70be174bf6b8bb85203351c20467bdfb469138ad212->leave($__internal_1a9d0fdcab5a39718ca9e70be174bf6b8bb85203351c20467bdfb469138ad212_prof);

        
        $__internal_a83f9cb0267843b4984876702c55e8ccbbf1be698eec84ae54a624b92f8e7015->leave($__internal_a83f9cb0267843b4984876702c55e8ccbbf1be698eec84ae54a624b92f8e7015_prof);

    }

    // line 70
    public function block_script($context, array $blocks = array())
    {
        $__internal_c476ac76d765dde5a223dfb38526a1b9706f590a1a03bcbe29075cac63cd741d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c476ac76d765dde5a223dfb38526a1b9706f590a1a03bcbe29075cac63cd741d->enter($__internal_c476ac76d765dde5a223dfb38526a1b9706f590a1a03bcbe29075cac63cd741d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_ea2c6d10897c169de5a8dd4f800229599232480e5c6171cb7b2ee08e9b30c53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2c6d10897c169de5a8dd4f800229599232480e5c6171cb7b2ee08e9b30c53d->enter($__internal_ea2c6d10897c169de5a8dd4f800229599232480e5c6171cb7b2ee08e9b30c53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 71
        echo "    ";
        
        $__internal_ea2c6d10897c169de5a8dd4f800229599232480e5c6171cb7b2ee08e9b30c53d->leave($__internal_ea2c6d10897c169de5a8dd4f800229599232480e5c6171cb7b2ee08e9b30c53d_prof);

        
        $__internal_c476ac76d765dde5a223dfb38526a1b9706f590a1a03bcbe29075cac63cd741d->leave($__internal_c476ac76d765dde5a223dfb38526a1b9706f590a1a03bcbe29075cac63cd741d_prof);

    }

    // line 79
    public function block_header($context, array $blocks = array())
    {
        $__internal_0cb4459bd1049775370e10c9e33cda27c74a36bb1eb18eaacd489f19c4ff68d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb4459bd1049775370e10c9e33cda27c74a36bb1eb18eaacd489f19c4ff68d6->enter($__internal_0cb4459bd1049775370e10c9e33cda27c74a36bb1eb18eaacd489f19c4ff68d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ec10af48dac31404316fc12de14f2e1267e3f3b587e602ccd5f2d741291f334b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec10af48dac31404316fc12de14f2e1267e3f3b587e602ccd5f2d741291f334b->enter($__internal_ec10af48dac31404316fc12de14f2e1267e3f3b587e602ccd5f2d741291f334b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 80
        echo "    <div class=\"header\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"top-left\">
                    <a href=\"#\"> Help  <i class=\"glyphicon glyphicon-phone\" aria-hidden=\"true\"></i> +0123-456-789</a>
                </div>
                <div class=\"top-right\">
                    <ul>
                        <li><a href=\"checkout.html\">Checkout</a></li>
                        <li><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"> Create Account </a></li>
                        <li> ";
        // line 90
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 91
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                    <i class=\"icon-key\"></i>Log Out
                                </a>
                            ";
        } else {
            // line 95
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a>

                            ";
        }
        // line 98
        echo "
                        </li>
                    </ul>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <div class=\"heder-bottom\">
            <div class=\"container\">
                <div class=\"logo-nav\">
                    <div class=\"logo-nav-left\">
                        <h1><a href=\"#\">Souk <span>Medina</span></a></h1>
                    </div>
                    <div class=\"logo-nav-left1\">
                        <nav class=\"navbar navbar-default\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class=\"navbar-header nav_2\">
                                <button type=\"button\" class=\"navbar-toggle collapsed navbar-toggle1\" data-toggle=\"collapse\" data-target=\"#bs-megadropdown-tabs\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                            </div>
                            <div class=\"collapse navbar-collapse\" id=\"bs-megadropdown-tabs\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"active\"><a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("base_homepage");
        echo "\" class=\"act\">Home</a></li>
                                    <!-- Mega Menu -->
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Produit<b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu multi-column columns-3\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <ul class=\"multi-column-dropdown\">
                                                        <h6>categorie1</h6>
                                                        <li><a href=\"#\">test yhez lel events</a></li>

                                                    </ul>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <ul class=\"multi-column-dropdown\">
                                                        <h6>Submenu2</h6>
                                                        <li><a href=\"#\">Sunglasses</a></li>

                                                    </ul>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <a href=\"products.html\"><img src=\"images/woo.jpg\" alt=\" \"/></a>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <a href=\"products.html\"><img src=\"images/woo1.jpg\" alt=\" \"/></a>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Locaux/Espaces <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu multi-column columns-3\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <ul class=\"multi-column-dropdown\">
                                                        ";
        // line 160
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 161
            echo "
                                                        <a href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_local", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">   <h6> Mes Locaux</h6> </a>
                                                        ";
        }
        // line 164
        echo "                                                    </ul>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <ul class=\"multi-column-dropdown\">
                                                        ";
        // line 168
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 169
            echo "                                                       <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout_local");
            echo "\">    <h6>Ajouter des  Locaux </h6></a>
                                                        ";
        }
        // line 171
        echo "                                                    </ul>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <a href=\"products1.html\"><img src=\"images/woo3.jpg\" alt=\" \"/></a>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <a href=\"products1.html\"><img src=\"images/woo4.jpg\" alt=\" \"/></a>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li><a href=\"#X\">Annonces</a></li>
                                    <li><a href=\"#X\">Evenements</a></li>
                                    <li><a href=\"mail.html\">Blog</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class=\"logo-nav-right\">
                        <ul class=\"cd-header-buttons\">
                            <li><a class=\"cd-search-trigger\" href=\"#cd-search\"> <span></span></a></li>
                        </ul> <!-- cd-header-buttons -->
                        <div id=\"cd-search\" class=\"cd-search\">
                            <form action=\"#\" method=\"post\">
                                <input name=\"Search\" type=\"search\" placeholder=\"Search...\">
                            </form>
                        </div>
                    </div>
                    <div class=\"header-right2\">
                        <div class=\"cart box_1\">
                            <a href=\"checkout.html\">
                                <h3> <div class=\"total\">
                                        <span class=\"simpleCart_total\"></span> (<span id=\"simpleCart_quantity\" class=\"simpleCart_quantity\"></span> items)</div>
                                    <img src=\"images/bag.png\" alt=\"\" />
                                </h3>
                            </a>
                            <p><a href=\"javascript:;\" class=\"simpleCart_empty\">Empty Cart</a></p>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_ec10af48dac31404316fc12de14f2e1267e3f3b587e602ccd5f2d741291f334b->leave($__internal_ec10af48dac31404316fc12de14f2e1267e3f3b587e602ccd5f2d741291f334b_prof);

        
        $__internal_0cb4459bd1049775370e10c9e33cda27c74a36bb1eb18eaacd489f19c4ff68d6->leave($__internal_0cb4459bd1049775370e10c9e33cda27c74a36bb1eb18eaacd489f19c4ff68d6_prof);

    }

    // line 220
    public function block_body($context, array $blocks = array())
    {
        $__internal_65233641fbe1b4669c54a3f4412200dcbbfc32946953562fb81b5b464121f515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65233641fbe1b4669c54a3f4412200dcbbfc32946953562fb81b5b464121f515->enter($__internal_65233641fbe1b4669c54a3f4412200dcbbfc32946953562fb81b5b464121f515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b60a9f5b62b3083dcff7588df5777febfb49b985d7ea88162d3af09c747a0000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60a9f5b62b3083dcff7588df5777febfb49b985d7ea88162d3af09c747a0000->enter($__internal_b60a9f5b62b3083dcff7588df5777febfb49b985d7ea88162d3af09c747a0000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 221
        $this->displayBlock('container', $context, $blocks);
        // line 223
        echo "




    <div class=\"modal fade\" id=\"myModal1\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-info\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"news-gr\">
                        <div class=\"col-md-5 new-grid1\">
                            <img src=\"images/p5.jpg\" class=\"img-responsive\" alt=\"\">
                        </div>
                        <div class=\"col-md-7 new-grid\">
                            <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                            <h6>Quick Overview</h6>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            <div class=\"color-quality\">
                                <div class=\"color-quality-left\">
                                    <h6>Color : </h6>
                                    <ul>
                                        <li><a href=\"#\"><span></span>Red</a></li>
                                        <li><a href=\"#\" class=\"brown\"><span></span>Yellow</a></li>
                                        <li><a href=\"#\" class=\"purple\"><span></span>Purple</a></li>
                                        <li><a href=\"#\" class=\"gray\"><span></span>Violet</a></li>
                                    </ul>
                                </div>
                                <div class=\"color-quality-right\">
                                    <h6>Quality :</h6>
                                    <div class=\"quantity\">
                                        <div class=\"quantity-select\">
                                            <div class=\"entry value-minus1\">&nbsp;</div>
                                            <div class=\"entry value1\"><span>1</span></div>
                                            <div class=\"entry value-plus1 active\">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        \$('.value-plus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                            divUpd.text(newVal);
                                        });
                                        \$('.value-minus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                            if(newVal>=1) divUpd.text(newVal);
                                        });
                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"women\">
                                <span class=\"size\">XL / XXL / S </span>
                                <p ><del>\$100.00</del><em class=\"item_price\"> \$70.00 </em></p>
                                <div class=\"add\">
                                    <button class=\"btn btn-danger my-cart-btn my-cart-b\" data-id=\"3\" data-name=\"Kabuli Chana\" data-summary=\"summary 3\" data-price=\"2.00\" data-quantity=\"1\" data-image=\"images/of2.png\">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"myModal2\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-info\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"news-gr\">
                        <div class=\"col-md-5 new-grid1\">
                            <img src=\"images/p7.jpg\" class=\"img-responsive\" alt=\"\">
                        </div>
                        <div class=\"col-md-7 new-grid\">
                            <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                            <h6>Quick Overview</h6>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            <div class=\"color-quality\">
                                <div class=\"color-quality-left\">
                                    <h6>Color : </h6>
                                    <ul>
                                        <li><a href=\"#\"><span></span>Red</a></li>
                                        <li><a href=\"#\" class=\"brown\"><span></span>Yellow</a></li>
                                        <li><a href=\"#\" class=\"purple\"><span></span>Purple</a></li>
                                        <li><a href=\"#\" class=\"gray\"><span></span>Violet</a></li>
                                    </ul>
                                </div>
                                <div class=\"color-quality-right\">
                                    <h6>Quality :</h6>
                                    <div class=\"quantity\">
                                        <div class=\"quantity-select\">
                                            <div class=\"entry value-minus1\">&nbsp;</div>
                                            <div class=\"entry value1\"><span>1</span></div>
                                            <div class=\"entry value-plus1 active\">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        \$('.value-plus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                            divUpd.text(newVal);
                                        });
                                        \$('.value-minus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                            if(newVal>=1) divUpd.text(newVal);
                                        });
                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"women\">
                                <span class=\"size\">XL / XXL / S </span>
                                <p ><del>\$100.00</del><em class=\"item_price\"> \$70.00 </em></p>
                                <div class=\"add\">
                                    <button class=\"btn btn-danger my-cart-btn my-cart-b\" data-id=\"3\" data-name=\"Kabuli Chana\" data-summary=\"summary 3\" data-price=\"2.00\" data-quantity=\"1\" data-image=\"images/of2.png\">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"myModal3\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-info\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"news-gr\">
                        <div class=\"col-md-5 new-grid1\">
                            <img src=\"images/p10.jpg\" class=\"img-responsive\" alt=\"\">
                        </div>
                        <div class=\"col-md-7 new-grid\">
                            <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                            <h6>Quick Overview</h6>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            <div class=\"color-quality\">
                                <div class=\"color-quality-left\">
                                    <h6>Color : </h6>
                                    <ul>
                                        <li><a href=\"#\"><span></span>Red</a></li>
                                        <li><a href=\"#\" class=\"brown\"><span></span>Yellow</a></li>
                                        <li><a href=\"#\" class=\"purple\"><span></span>Purple</a></li>
                                        <li><a href=\"#\" class=\"gray\"><span></span>Violet</a></li>
                                    </ul>
                                </div>
                                <div class=\"color-quality-right\">
                                    <h6>Quality :</h6>
                                    <div class=\"quantity\">
                                        <div class=\"quantity-select\">
                                            <div class=\"entry value-minus1\">&nbsp;</div>
                                            <div class=\"entry value1\"><span>1</span></div>
                                            <div class=\"entry value-plus1 active\">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        \$('.value-plus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                            divUpd.text(newVal);
                                        });
                                        \$('.value-minus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                            if(newVal>=1) divUpd.text(newVal);
                                        });
                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"women\">
                                <span class=\"size\">XL / XXL / S </span>
                                <p ><del>\$100.00</del><em class=\"item_price\"> \$70.00 </em></p>
                                <div class=\"add\">
                                    <button class=\"btn btn-danger my-cart-btn my-cart-b\" data-id=\"3\" data-name=\"Kabuli Chana\" data-summary=\"summary 3\" data-price=\"2.00\" data-quantity=\"1\" data-image=\"images/of2.png\">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"myModal4\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-info\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"news-gr\">
                        <div class=\"col-md-5 new-grid1\">
                            <img src=\"images/p12.jpg\" class=\"img-responsive\" alt=\"\">
                        </div>
                        <div class=\"col-md-7 new-grid\">
                            <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                            <h6>Quick Overview</h6>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            <div class=\"color-quality\">
                                <div class=\"color-quality-left\">
                                    <h6>Color : </h6>
                                    <ul>
                                        <li><a href=\"#\"><span></span>Red</a></li>
                                        <li><a href=\"#\" class=\"brown\"><span></span>Yellow</a></li>
                                        <li><a href=\"#\" class=\"purple\"><span></span>Purple</a></li>
                                        <li><a href=\"#\" class=\"gray\"><span></span>Violet</a></li>
                                    </ul>
                                </div>
                                <div class=\"color-quality-right\">
                                    <h6>Quality :</h6>
                                    <div class=\"quantity\">
                                        <div class=\"quantity-select\">
                                            <div class=\"entry value-minus1\">&nbsp;</div>
                                            <div class=\"entry value1\"><span>1</span></div>
                                            <div class=\"entry value-plus1 active\">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        \$('.value-plus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                            divUpd.text(newVal);
                                        });
                                        \$('.value-minus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                            if(newVal>=1) divUpd.text(newVal);
                                        });
                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"women\">
                                <span class=\"size\">XL / XXL / S </span>
                                <p ><del>\$100.00</del><em class=\"item_price\"> \$70.00 </em></p>
                                <div class=\"add\">
                                    <button class=\"btn btn-danger my-cart-btn my-cart-b\" data-id=\"3\" data-name=\"Kabuli Chana\" data-summary=\"summary 3\" data-price=\"2.00\" data-quantity=\"1\" data-image=\"images/of2.png\">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_b60a9f5b62b3083dcff7588df5777febfb49b985d7ea88162d3af09c747a0000->leave($__internal_b60a9f5b62b3083dcff7588df5777febfb49b985d7ea88162d3af09c747a0000_prof);

        
        $__internal_65233641fbe1b4669c54a3f4412200dcbbfc32946953562fb81b5b464121f515->leave($__internal_65233641fbe1b4669c54a3f4412200dcbbfc32946953562fb81b5b464121f515_prof);

    }

    // line 221
    public function block_container($context, array $blocks = array())
    {
        $__internal_04b2c78e97362f8c3dc259c11b5b1cf2d05767add7643d248fc35c9ea9777673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b2c78e97362f8c3dc259c11b5b1cf2d05767add7643d248fc35c9ea9777673->enter($__internal_04b2c78e97362f8c3dc259c11b5b1cf2d05767add7643d248fc35c9ea9777673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_1f0fb6ecec2fd2dbd624a2b3c3f8a143c813ad0e003a72c2ab083668ac19f929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0fb6ecec2fd2dbd624a2b3c3f8a143c813ad0e003a72c2ab083668ac19f929->enter($__internal_1f0fb6ecec2fd2dbd624a2b3c3f8a143c813ad0e003a72c2ab083668ac19f929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 222
        echo " ";
        
        $__internal_1f0fb6ecec2fd2dbd624a2b3c3f8a143c813ad0e003a72c2ab083668ac19f929->leave($__internal_1f0fb6ecec2fd2dbd624a2b3c3f8a143c813ad0e003a72c2ab083668ac19f929_prof);

        
        $__internal_04b2c78e97362f8c3dc259c11b5b1cf2d05767add7643d248fc35c9ea9777673->leave($__internal_04b2c78e97362f8c3dc259c11b5b1cf2d05767add7643d248fc35c9ea9777673_prof);

    }

    // line 482
    public function block_footer($context, array $blocks = array())
    {
        $__internal_69b4083cd3cca3627b0daf840d246b02034346f951c0f40d63ce847c9e42c538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b4083cd3cca3627b0daf840d246b02034346f951c0f40d63ce847c9e42c538->enter($__internal_69b4083cd3cca3627b0daf840d246b02034346f951c0f40d63ce847c9e42c538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b27ea3cd7cc274457366cf2e464bfda7626046e2ab8042ab649e077d32bdabc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27ea3cd7cc274457366cf2e464bfda7626046e2ab8042ab649e077d32bdabc4->enter($__internal_b27ea3cd7cc274457366cf2e464bfda7626046e2ab8042ab649e077d32bdabc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 483
        echo "    <div class=\"footer-w3l\">
        <div class=\"container\">
            <div class=\"footer-grids\">
                <div class=\"col-md-3 footer-grid\">
                    <h4>About </h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class=\"social-icon\">
                        <a href=\"#\"><i class=\"icon\"></i></a>
                        <a href=\"#\"><i class=\"icon1\"></i></a>
                        <a href=\"#\"><i class=\"icon2\"></i></a>
                        <a href=\"#\"><i class=\"icon3\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-3 footer-grid\">
                    <h4>My Account</h4>
                    <ul>
                        <li><a href=\"checkout.html\">Checkout</a></li>
                        <li><a href=\"login.html\">Login</a></li>
                        <li><a href=\"registered.html\"> Create Account </a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 footer-grid\">
                    <h4>Information</h4>
                    <ul>
                        <li><a href=\"index.html\">Home</a></li>
                        <li><a href=\"products.html\">Produit</a></li>
                        <li><a href=\"products1.html\">Local/Espace</a></li>
                        <li><a href=\"#\">Evenements</a></li>
                        <li><a href=\"mail.html\">Blog</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 footer-grid foot\">
                    <h4>Contacts</h4>
                    <ul>
                        <li><i class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></i><a href=\"#\">E Comertown Rd, Westby, USA</a></li>
                        <li><i class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></i><a href=\"#\">1 599-033-5036</a></li>
                        <li><i class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></i><a href=\"mailto:example@mail.com\"> example@mail.com</a></li>
                    </ul>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </div>
    <!---footer--->
    <!--copy-->
    <div class=\"copy-section\">
        <div class=\"container\">
            <div class=\"copy-left\">
                <p>&copy; 2018 Souk El Medina . All rights reserved | Design by <a href=\"http://soukElMedina.com\">Spiritus</a></p>
            </div>
            <div class=\"copy-right\">
                <img src=\"images/card.png\" alt=\"\"/>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_b27ea3cd7cc274457366cf2e464bfda7626046e2ab8042ab649e077d32bdabc4->leave($__internal_b27ea3cd7cc274457366cf2e464bfda7626046e2ab8042ab649e077d32bdabc4_prof);

        
        $__internal_69b4083cd3cca3627b0daf840d246b02034346f951c0f40d63ce847c9e42c538->leave($__internal_69b4083cd3cca3627b0daf840d246b02034346f951c0f40d63ce847c9e42c538_prof);

    }

    public function getTemplateName()
    {
        return "Front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 483,  672 => 482,  662 => 222,  653 => 221,  386 => 223,  384 => 221,  375 => 220,  319 => 171,  313 => 169,  311 => 168,  305 => 164,  300 => 162,  297 => 161,  295 => 160,  256 => 124,  228 => 98,  221 => 95,  213 => 91,  211 => 90,  207 => 89,  196 => 80,  187 => 79,  177 => 71,  168 => 70,  155 => 540,  153 => 482,  150 => 481,  148 => 220,  144 => 218,  142 => 79,  133 => 72,  131 => 70,  105 => 47,  101 => 46,  95 => 43,  90 => 41,  74 => 28,  69 => 26,  62 => 22,  52 => 15,  48 => 14,  44 => 13,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Souk El Medina</title>
    <!--css-->
    <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
    <link href=\"{{ asset('OurDesignModif/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"{{ asset('css/font-awesome.css') }}\" rel=\"stylesheet\">
    <!--css-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--search jQuery-->
    <script src=\"{{ asset('js/main.js') }}\"></script>
    <!--search jQuery-->
    <script src=\"{{ asset('js/responsiveslides.min.js') }}\"></script>
    <script>
        \$(function () {
            \$(\"#slider\").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: \"callbacks\",
                pager: true,
            });
        });
    </script>
    <!--mycart-->
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap-3.1.1.min.js') }}\"></script>
    <!-- cart -->
    <script src=\"{{ asset('js/simpleCart.min.js') }}\"></script>
    <!-- cart -->
    <!--start-rate-->
    <script src=\"{{ asset('js/jstarbox.js') }}\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('css/jstarbox.css') }}\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
    <script type=\"text/javascript\">
        jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' '+val);
                        return val;
                    }
                })
            });
        });
    </script>

    {%  block script %}
    {% endblock %}



    <!--//End-rate-->
</head>
<body>
<!--header-->
{% block header %}
    <div class=\"header\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"top-left\">
                    <a href=\"#\"> Help  <i class=\"glyphicon glyphicon-phone\" aria-hidden=\"true\"></i> +0123-456-789</a>
                </div>
                <div class=\"top-right\">
                    <ul>
                        <li><a href=\"checkout.html\">Checkout</a></li>
                        <li><a href=\"{{ path('fos_user_registration_register') }}\"> Create Account </a></li>
                        <li> {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    <i class=\"icon-key\"></i>Log Out
                                </a>
                            {% else %}
                                <a href=\"{{ path('fos_user_security_login') }}\">Login</a>

                            {% endif %}

                        </li>
                    </ul>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        <div class=\"heder-bottom\">
            <div class=\"container\">
                <div class=\"logo-nav\">
                    <div class=\"logo-nav-left\">
                        <h1><a href=\"#\">Souk <span>Medina</span></a></h1>
                    </div>
                    <div class=\"logo-nav-left1\">
                        <nav class=\"navbar navbar-default\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class=\"navbar-header nav_2\">
                                <button type=\"button\" class=\"navbar-toggle collapsed navbar-toggle1\" data-toggle=\"collapse\" data-target=\"#bs-megadropdown-tabs\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                            </div>
                            <div class=\"collapse navbar-collapse\" id=\"bs-megadropdown-tabs\">
                                <ul class=\"nav navbar-nav\">
                                    <li class=\"active\"><a href=\"{{ path('base_homepage') }}\" class=\"act\">Home</a></li>
                                    <!-- Mega Menu -->
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Produit<b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu multi-column columns-3\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <ul class=\"multi-column-dropdown\">
                                                        <h6>categorie1</h6>
                                                        <li><a href=\"#\">test yhez lel events</a></li>

                                                    </ul>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <ul class=\"multi-column-dropdown\">
                                                        <h6>Submenu2</h6>
                                                        <li><a href=\"#\">Sunglasses</a></li>

                                                    </ul>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <a href=\"products.html\"><img src=\"images/woo.jpg\" alt=\" \"/></a>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <a href=\"products.html\"><img src=\"images/woo1.jpg\" alt=\" \"/></a>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Locaux/Espaces <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu multi-column columns-3\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <ul class=\"multi-column-dropdown\">
                                                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

                                                        <a href=\"{{ path('all_local',{'id':app.user.id}) }}\">   <h6> Mes Locaux</h6> </a>
                                                        {% endif %}
                                                    </ul>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <ul class=\"multi-column-dropdown\">
                                                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                                       <a href=\"{{ path('ajout_local') }}\">    <h6>Ajouter des  Locaux </h6></a>
                                                        {% endif %}
                                                    </ul>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <a href=\"products1.html\"><img src=\"images/woo3.jpg\" alt=\" \"/></a>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <a href=\"products1.html\"><img src=\"images/woo4.jpg\" alt=\" \"/></a>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li><a href=\"#X\">Annonces</a></li>
                                    <li><a href=\"#X\">Evenements</a></li>
                                    <li><a href=\"mail.html\">Blog</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class=\"logo-nav-right\">
                        <ul class=\"cd-header-buttons\">
                            <li><a class=\"cd-search-trigger\" href=\"#cd-search\"> <span></span></a></li>
                        </ul> <!-- cd-header-buttons -->
                        <div id=\"cd-search\" class=\"cd-search\">
                            <form action=\"#\" method=\"post\">
                                <input name=\"Search\" type=\"search\" placeholder=\"Search...\">
                            </form>
                        </div>
                    </div>
                    <div class=\"header-right2\">
                        <div class=\"cart box_1\">
                            <a href=\"checkout.html\">
                                <h3> <div class=\"total\">
                                        <span class=\"simpleCart_total\"></span> (<span id=\"simpleCart_quantity\" class=\"simpleCart_quantity\"></span> items)</div>
                                    <img src=\"images/bag.png\" alt=\"\" />
                                </h3>
                            </a>
                            <p><a href=\"javascript:;\" class=\"simpleCart_empty\">Empty Cart</a></p>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
<!--header-->
<!--banner-->
{% block body %}
{% block container %}
 {% endblock %}





    <div class=\"modal fade\" id=\"myModal1\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-info\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"news-gr\">
                        <div class=\"col-md-5 new-grid1\">
                            <img src=\"images/p5.jpg\" class=\"img-responsive\" alt=\"\">
                        </div>
                        <div class=\"col-md-7 new-grid\">
                            <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                            <h6>Quick Overview</h6>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            <div class=\"color-quality\">
                                <div class=\"color-quality-left\">
                                    <h6>Color : </h6>
                                    <ul>
                                        <li><a href=\"#\"><span></span>Red</a></li>
                                        <li><a href=\"#\" class=\"brown\"><span></span>Yellow</a></li>
                                        <li><a href=\"#\" class=\"purple\"><span></span>Purple</a></li>
                                        <li><a href=\"#\" class=\"gray\"><span></span>Violet</a></li>
                                    </ul>
                                </div>
                                <div class=\"color-quality-right\">
                                    <h6>Quality :</h6>
                                    <div class=\"quantity\">
                                        <div class=\"quantity-select\">
                                            <div class=\"entry value-minus1\">&nbsp;</div>
                                            <div class=\"entry value1\"><span>1</span></div>
                                            <div class=\"entry value-plus1 active\">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        \$('.value-plus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                            divUpd.text(newVal);
                                        });
                                        \$('.value-minus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                            if(newVal>=1) divUpd.text(newVal);
                                        });
                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"women\">
                                <span class=\"size\">XL / XXL / S </span>
                                <p ><del>\$100.00</del><em class=\"item_price\"> \$70.00 </em></p>
                                <div class=\"add\">
                                    <button class=\"btn btn-danger my-cart-btn my-cart-b\" data-id=\"3\" data-name=\"Kabuli Chana\" data-summary=\"summary 3\" data-price=\"2.00\" data-quantity=\"1\" data-image=\"images/of2.png\">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"myModal2\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-info\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"news-gr\">
                        <div class=\"col-md-5 new-grid1\">
                            <img src=\"images/p7.jpg\" class=\"img-responsive\" alt=\"\">
                        </div>
                        <div class=\"col-md-7 new-grid\">
                            <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                            <h6>Quick Overview</h6>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            <div class=\"color-quality\">
                                <div class=\"color-quality-left\">
                                    <h6>Color : </h6>
                                    <ul>
                                        <li><a href=\"#\"><span></span>Red</a></li>
                                        <li><a href=\"#\" class=\"brown\"><span></span>Yellow</a></li>
                                        <li><a href=\"#\" class=\"purple\"><span></span>Purple</a></li>
                                        <li><a href=\"#\" class=\"gray\"><span></span>Violet</a></li>
                                    </ul>
                                </div>
                                <div class=\"color-quality-right\">
                                    <h6>Quality :</h6>
                                    <div class=\"quantity\">
                                        <div class=\"quantity-select\">
                                            <div class=\"entry value-minus1\">&nbsp;</div>
                                            <div class=\"entry value1\"><span>1</span></div>
                                            <div class=\"entry value-plus1 active\">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        \$('.value-plus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                            divUpd.text(newVal);
                                        });
                                        \$('.value-minus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                            if(newVal>=1) divUpd.text(newVal);
                                        });
                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"women\">
                                <span class=\"size\">XL / XXL / S </span>
                                <p ><del>\$100.00</del><em class=\"item_price\"> \$70.00 </em></p>
                                <div class=\"add\">
                                    <button class=\"btn btn-danger my-cart-btn my-cart-b\" data-id=\"3\" data-name=\"Kabuli Chana\" data-summary=\"summary 3\" data-price=\"2.00\" data-quantity=\"1\" data-image=\"images/of2.png\">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"myModal3\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-info\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"news-gr\">
                        <div class=\"col-md-5 new-grid1\">
                            <img src=\"images/p10.jpg\" class=\"img-responsive\" alt=\"\">
                        </div>
                        <div class=\"col-md-7 new-grid\">
                            <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                            <h6>Quick Overview</h6>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            <div class=\"color-quality\">
                                <div class=\"color-quality-left\">
                                    <h6>Color : </h6>
                                    <ul>
                                        <li><a href=\"#\"><span></span>Red</a></li>
                                        <li><a href=\"#\" class=\"brown\"><span></span>Yellow</a></li>
                                        <li><a href=\"#\" class=\"purple\"><span></span>Purple</a></li>
                                        <li><a href=\"#\" class=\"gray\"><span></span>Violet</a></li>
                                    </ul>
                                </div>
                                <div class=\"color-quality-right\">
                                    <h6>Quality :</h6>
                                    <div class=\"quantity\">
                                        <div class=\"quantity-select\">
                                            <div class=\"entry value-minus1\">&nbsp;</div>
                                            <div class=\"entry value1\"><span>1</span></div>
                                            <div class=\"entry value-plus1 active\">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        \$('.value-plus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                            divUpd.text(newVal);
                                        });
                                        \$('.value-minus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                            if(newVal>=1) divUpd.text(newVal);
                                        });
                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"women\">
                                <span class=\"size\">XL / XXL / S </span>
                                <p ><del>\$100.00</del><em class=\"item_price\"> \$70.00 </em></p>
                                <div class=\"add\">
                                    <button class=\"btn btn-danger my-cart-btn my-cart-b\" data-id=\"3\" data-name=\"Kabuli Chana\" data-summary=\"summary 3\" data-price=\"2.00\" data-quantity=\"1\" data-image=\"images/of2.png\">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"myModal4\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content modal-info\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"news-gr\">
                        <div class=\"col-md-5 new-grid1\">
                            <img src=\"images/p12.jpg\" class=\"img-responsive\" alt=\"\">
                        </div>
                        <div class=\"col-md-7 new-grid\">
                            <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                            <h6>Quick Overview</h6>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            <div class=\"color-quality\">
                                <div class=\"color-quality-left\">
                                    <h6>Color : </h6>
                                    <ul>
                                        <li><a href=\"#\"><span></span>Red</a></li>
                                        <li><a href=\"#\" class=\"brown\"><span></span>Yellow</a></li>
                                        <li><a href=\"#\" class=\"purple\"><span></span>Purple</a></li>
                                        <li><a href=\"#\" class=\"gray\"><span></span>Violet</a></li>
                                    </ul>
                                </div>
                                <div class=\"color-quality-right\">
                                    <h6>Quality :</h6>
                                    <div class=\"quantity\">
                                        <div class=\"quantity-select\">
                                            <div class=\"entry value-minus1\">&nbsp;</div>
                                            <div class=\"entry value1\"><span>1</span></div>
                                            <div class=\"entry value-plus1 active\">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        \$('.value-plus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                            divUpd.text(newVal);
                                        });
                                        \$('.value-minus1').on('click', function(){
                                            var divUpd = \$(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                            if(newVal>=1) divUpd.text(newVal);
                                        });
                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"women\">
                                <span class=\"size\">XL / XXL / S </span>
                                <p ><del>\$100.00</del><em class=\"item_price\"> \$70.00 </em></p>
                                <div class=\"add\">
                                    <button class=\"btn btn-danger my-cart-btn my-cart-b\" data-id=\"3\" data-name=\"Kabuli Chana\" data-summary=\"summary 3\" data-price=\"2.00\" data-quantity=\"1\" data-image=\"images/of2.png\">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
<!---footer--->
{% block footer %}
    <div class=\"footer-w3l\">
        <div class=\"container\">
            <div class=\"footer-grids\">
                <div class=\"col-md-3 footer-grid\">
                    <h4>About </h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class=\"social-icon\">
                        <a href=\"#\"><i class=\"icon\"></i></a>
                        <a href=\"#\"><i class=\"icon1\"></i></a>
                        <a href=\"#\"><i class=\"icon2\"></i></a>
                        <a href=\"#\"><i class=\"icon3\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-3 footer-grid\">
                    <h4>My Account</h4>
                    <ul>
                        <li><a href=\"checkout.html\">Checkout</a></li>
                        <li><a href=\"login.html\">Login</a></li>
                        <li><a href=\"registered.html\"> Create Account </a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 footer-grid\">
                    <h4>Information</h4>
                    <ul>
                        <li><a href=\"index.html\">Home</a></li>
                        <li><a href=\"products.html\">Produit</a></li>
                        <li><a href=\"products1.html\">Local/Espace</a></li>
                        <li><a href=\"#\">Evenements</a></li>
                        <li><a href=\"mail.html\">Blog</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 footer-grid foot\">
                    <h4>Contacts</h4>
                    <ul>
                        <li><i class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></i><a href=\"#\">E Comertown Rd, Westby, USA</a></li>
                        <li><i class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></i><a href=\"#\">1 599-033-5036</a></li>
                        <li><i class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></i><a href=\"mailto:example@mail.com\"> example@mail.com</a></li>
                    </ul>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </div>
    <!---footer--->
    <!--copy-->
    <div class=\"copy-section\">
        <div class=\"container\">
            <div class=\"copy-left\">
                <p>&copy; 2018 Souk El Medina . All rights reserved | Design by <a href=\"http://soukElMedina.com\">Spiritus</a></p>
            </div>
            <div class=\"copy-right\">
                <img src=\"images/card.png\" alt=\"\"/>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}
<!--copy-->

</body>
</html>", "Front.html.twig", "C:\\wamp64\\www\\medina1\\app\\Resources\\views\\Front.html.twig");
    }
}

<?php

/* Front.html.twig */
class __TwigTemplate_8e23124ae7a1544aca7644ef9c86f00936705a039c546fdde47c7eb061a0890c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3084725cf04c5e26d2628d2d75710d42df367f6798182bf1654643f00806b161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3084725cf04c5e26d2628d2d75710d42df367f6798182bf1654643f00806b161->enter($__internal_3084725cf04c5e26d2628d2d75710d42df367f6798182bf1654643f00806b161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front.html.twig"));

        $__internal_3bd306c1b5ed626e6359df9e29f248e09ab7b1880766e07d53e02cf7b2ccdb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd306c1b5ed626e6359df9e29f248e09ab7b1880766e07d53e02cf7b2ccdb65->enter($__internal_3bd306c1b5ed626e6359df9e29f248e09ab7b1880766e07d53e02cf7b2ccdb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Front.html.twig"));

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
    <!--//End-rate-->
</head>
<body>
<!--header-->
";
        // line 73
        $this->displayBlock('header', $context, $blocks);
        // line 207
        echo "<!--header-->
<!--banner-->
";
        // line 209
        $this->displayBlock('body', $context, $blocks);
        // line 470
        echo "<!---footer--->
";
        // line 471
        $this->displayBlock('footer', $context, $blocks);
        // line 529
        echo "<!--copy-->

</body>
</html>";
        
        $__internal_3084725cf04c5e26d2628d2d75710d42df367f6798182bf1654643f00806b161->leave($__internal_3084725cf04c5e26d2628d2d75710d42df367f6798182bf1654643f00806b161_prof);

        
        $__internal_3bd306c1b5ed626e6359df9e29f248e09ab7b1880766e07d53e02cf7b2ccdb65->leave($__internal_3bd306c1b5ed626e6359df9e29f248e09ab7b1880766e07d53e02cf7b2ccdb65_prof);

    }

    // line 73
    public function block_header($context, array $blocks = array())
    {
        $__internal_f43424b214cc9dcf9b8ffabb0ee93576c911f12408716cb552666daf34430f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f43424b214cc9dcf9b8ffabb0ee93576c911f12408716cb552666daf34430f23->enter($__internal_f43424b214cc9dcf9b8ffabb0ee93576c911f12408716cb552666daf34430f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d17b3673c9364afdea7845e959ba909384c251372a5f6d69b4ec7a43c1bdb4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17b3673c9364afdea7845e959ba909384c251372a5f6d69b4ec7a43c1bdb4d2->enter($__internal_d17b3673c9364afdea7845e959ba909384c251372a5f6d69b4ec7a43c1bdb4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 74
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
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"> Create Account </a></li>
                        <li> ";
        // line 84
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 85
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                    <i class=\"icon-key\"></i>Log Out
                                </a>
                            ";
        } else {
            // line 89
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a>

                            ";
        }
        // line 92
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
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("base_homepage");
        echo "\" class=\"act\">Home</a></li>
                                    <!-- Mega Menu -->
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Produit<b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu multi-column columns-3\">
                                            <div class=\"row\">

                                                    <ul class=\"multi-column-dropdown\">
                                                        <h6>Les Articles</h6>
                                                        <li><a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Vetement_homepage");
        echo "\">Vetements</a></li>
                                                        <li><a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("base_homepage");
        echo "\">Accesoires</a></li>
                                                        <li><a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("base_homepage");
        echo "\">Produits Artisanale</a></li>

                                                    </ul>
                                                </div>


                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Locaux/Espaces <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu multi-column columns-3\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <ul class=\"multi-column-dropdown\">
                                                        <h6>Submenu1</h6>
                                                        <li><a href=\"products.html\">Clothing</a></li>
                                                        <li><a href=\"products.html\">Wallets</a></li>
                                                        <li><a href=\"products.html\">Shoes</a></li>
                                                        <li><a href=\"products.html\">Watches</a></li>
                                                        <li><a href=\"products.html\"> Underwear </a></li>
                                                        <li><a href=\"products.html\">Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <ul class=\"multi-column-dropdown\">
                                                        <h6>Submenu2</h6>
                                                        <li><a href=\"products.html\">Sunglasses</a></li>
                                                        <li><a href=\"products.html\">Wallets,Bags</a></li>
                                                        <li><a href=\"products.html\">Footwear</a></li>
                                                        <li><a href=\"products.html\">Watches</a></li>
                                                        <li><a href=\"products.html\">Accessories</a></li>
                                                        <li><a href=\"products.html\">Jewellery</a></li>
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
        
        $__internal_d17b3673c9364afdea7845e959ba909384c251372a5f6d69b4ec7a43c1bdb4d2->leave($__internal_d17b3673c9364afdea7845e959ba909384c251372a5f6d69b4ec7a43c1bdb4d2_prof);

        
        $__internal_f43424b214cc9dcf9b8ffabb0ee93576c911f12408716cb552666daf34430f23->leave($__internal_f43424b214cc9dcf9b8ffabb0ee93576c911f12408716cb552666daf34430f23_prof);

    }

    // line 209
    public function block_body($context, array $blocks = array())
    {
        $__internal_9837c9e5482202376c5012d393a043a2b8b0d4a1cf49978d06a410a4d00ac578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9837c9e5482202376c5012d393a043a2b8b0d4a1cf49978d06a410a4d00ac578->enter($__internal_9837c9e5482202376c5012d393a043a2b8b0d4a1cf49978d06a410a4d00ac578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_050a9fe54c6306f3b370fd7ca82ebd86499ce423714f8d82ac8c5837871b5a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050a9fe54c6306f3b370fd7ca82ebd86499ce423714f8d82ac8c5837871b5a62->enter($__internal_050a9fe54c6306f3b370fd7ca82ebd86499ce423714f8d82ac8c5837871b5a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 210
        $this->displayBlock('container', $context, $blocks);
        // line 212
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
        
        $__internal_050a9fe54c6306f3b370fd7ca82ebd86499ce423714f8d82ac8c5837871b5a62->leave($__internal_050a9fe54c6306f3b370fd7ca82ebd86499ce423714f8d82ac8c5837871b5a62_prof);

        
        $__internal_9837c9e5482202376c5012d393a043a2b8b0d4a1cf49978d06a410a4d00ac578->leave($__internal_9837c9e5482202376c5012d393a043a2b8b0d4a1cf49978d06a410a4d00ac578_prof);

    }

    // line 210
    public function block_container($context, array $blocks = array())
    {
        $__internal_c931577993aafab064ded987fce7253d6384a3a0ccaa065b64bf03a58cd88c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c931577993aafab064ded987fce7253d6384a3a0ccaa065b64bf03a58cd88c0d->enter($__internal_c931577993aafab064ded987fce7253d6384a3a0ccaa065b64bf03a58cd88c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_1d2f6acf8dbaeb946b763bb167be7d1f4779a69eb85ad472435cfa5bcc92ecce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2f6acf8dbaeb946b763bb167be7d1f4779a69eb85ad472435cfa5bcc92ecce->enter($__internal_1d2f6acf8dbaeb946b763bb167be7d1f4779a69eb85ad472435cfa5bcc92ecce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 211
        echo " ";
        
        $__internal_1d2f6acf8dbaeb946b763bb167be7d1f4779a69eb85ad472435cfa5bcc92ecce->leave($__internal_1d2f6acf8dbaeb946b763bb167be7d1f4779a69eb85ad472435cfa5bcc92ecce_prof);

        
        $__internal_c931577993aafab064ded987fce7253d6384a3a0ccaa065b64bf03a58cd88c0d->leave($__internal_c931577993aafab064ded987fce7253d6384a3a0ccaa065b64bf03a58cd88c0d_prof);

    }

    // line 471
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7e9812c04fc875f52fcce9278a6adc4bd5ca1f814a55623089e430749ee1a62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9812c04fc875f52fcce9278a6adc4bd5ca1f814a55623089e430749ee1a62f->enter($__internal_7e9812c04fc875f52fcce9278a6adc4bd5ca1f814a55623089e430749ee1a62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_4fd8e8d4cf26d49ca9f9a4a775a99afc414a4428a45701a3ce69182b9b1327ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd8e8d4cf26d49ca9f9a4a775a99afc414a4428a45701a3ce69182b9b1327ce->enter($__internal_4fd8e8d4cf26d49ca9f9a4a775a99afc414a4428a45701a3ce69182b9b1327ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 472
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
        
        $__internal_4fd8e8d4cf26d49ca9f9a4a775a99afc414a4428a45701a3ce69182b9b1327ce->leave($__internal_4fd8e8d4cf26d49ca9f9a4a775a99afc414a4428a45701a3ce69182b9b1327ce_prof);

        
        $__internal_7e9812c04fc875f52fcce9278a6adc4bd5ca1f814a55623089e430749ee1a62f->leave($__internal_7e9812c04fc875f52fcce9278a6adc4bd5ca1f814a55623089e430749ee1a62f_prof);

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
        return array (  642 => 472,  633 => 471,  623 => 211,  614 => 210,  347 => 212,  345 => 210,  336 => 209,  248 => 129,  244 => 128,  240 => 127,  228 => 118,  200 => 92,  193 => 89,  185 => 85,  183 => 84,  179 => 83,  168 => 74,  159 => 73,  146 => 529,  144 => 471,  141 => 470,  139 => 209,  135 => 207,  133 => 73,  104 => 47,  100 => 46,  94 => 43,  89 => 41,  73 => 28,  68 => 26,  61 => 22,  51 => 15,  47 => 14,  43 => 13,  29 => 1,);
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

                                                    <ul class=\"multi-column-dropdown\">
                                                        <h6>Les Articles</h6>
                                                        <li><a href=\"{{ path('Vetement_homepage') }}\">Vetements</a></li>
                                                        <li><a href=\"{{ path('base_homepage') }}\">Accesoires</a></li>
                                                        <li><a href=\"{{ path('base_homepage') }}\">Produits Artisanale</a></li>

                                                    </ul>
                                                </div>


                                        </ul>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Locaux/Espaces <b class=\"caret\"></b></a>
                                        <ul class=\"dropdown-menu multi-column columns-3\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <ul class=\"multi-column-dropdown\">
                                                        <h6>Submenu1</h6>
                                                        <li><a href=\"products.html\">Clothing</a></li>
                                                        <li><a href=\"products.html\">Wallets</a></li>
                                                        <li><a href=\"products.html\">Shoes</a></li>
                                                        <li><a href=\"products.html\">Watches</a></li>
                                                        <li><a href=\"products.html\"> Underwear </a></li>
                                                        <li><a href=\"products.html\">Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class=\"col-sm-3  multi-gd-img\">
                                                    <ul class=\"multi-column-dropdown\">
                                                        <h6>Submenu2</h6>
                                                        <li><a href=\"products.html\">Sunglasses</a></li>
                                                        <li><a href=\"products.html\">Wallets,Bags</a></li>
                                                        <li><a href=\"products.html\">Footwear</a></li>
                                                        <li><a href=\"products.html\">Watches</a></li>
                                                        <li><a href=\"products.html\">Accessories</a></li>
                                                        <li><a href=\"products.html\">Jewellery</a></li>
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

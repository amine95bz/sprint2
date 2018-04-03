<?php

/* ::Back.html.twig */
class __TwigTemplate_94c049d517b95492808b5829d8cbc86728254b17ba7c41c5d63799ded4b73131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_796e2b77c8b4e84333fba5af4cb53b9b3fd2239991b9193d5bfa02f034f04978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796e2b77c8b4e84333fba5af4cb53b9b3fd2239991b9193d5bfa02f034f04978->enter($__internal_796e2b77c8b4e84333fba5af4cb53b9b3fd2239991b9193d5bfa02f034f04978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Back.html.twig"));

        $__internal_e1d93b03a092a7e9e28af2c39b250faaa0ced92807a7807026ba3b5a81c52a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d93b03a092a7e9e28af2c39b250faaa0ced92807a7807026ba3b5a81c52a41->enter($__internal_e1d93b03a092a7e9e28af2c39b250faaa0ced92807a7807026ba3b5a81c52a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Back.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/assets/img/favicon.ico"), "html", null, true);
        echo "\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

    <title>Espace admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />


    <!-- Bootstrap core CSS     -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Animation library for notifications   -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/assets/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/assets/css/light-bootstrap-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=\"assets/css/demo.css\" rel=\"stylesheet\" />


    <!--     Fonts and icons     -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/assets/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

</head>
<body>

<div class=\"wrapper\">
    <div class=\"sidebar\" data-color=\"orange\" data-image=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/assets/img/sidebar-2.jpg"), "html", null, true);
        echo "\">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color=\"blue | azure | green | orange | red | purple\"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class=\"sidebar-wrapper\">
            <div class=\"logo\">
                <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
                    <h3>Souk El Medina</h3>
                </a>
            </div>

            <ul class=\"nav\">
                <li class=\"active\">
                    <a href=\"dashboard.html\">
                        <i class=\"pe-7s-graph\"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href=\"user.html\">
                        <i class=\"pe-7s-user\"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href=\"table.html\">
                        <i class=\"pe-7s-note2\"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href=\"typography.html\">
                        <i class=\"pe-7s-news-paper\"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href=\"icons.html\">
                        <i class=\"pe-7s-science\"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href=\"maps.html\">
                        <i class=\"pe-7s-map-marker\"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href=\"notifications.html\">
                        <i class=\"pe-7s-bell\"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class=\"active-pro\">
                    <a href=\"upgrade.html\">
                        <i class=\"pe-7s-rocket\"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"main-panel\">
        <nav class=\"navbar navbar-default navbar-fixed\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation-example-2\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Dashboard</a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-left\">
                        <li>
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-dashboard\"></i>
                                <p class=\"hidden-lg hidden-md\">Dashboard</p>
                            </a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-globe\"></i>
                                <b class=\"caret hidden-sm hidden-xs\"></b>
                                <span class=\"notification hidden-sm hidden-xs\">5</span>
                                <p class=\"hidden-lg hidden-md\">
                                    5 Notifications
                                    <b class=\"caret\"></b>
                                </p>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Notification 1</a></li>
                                <li><a href=\"#\">Notification 2</a></li>
                                <li><a href=\"#\">Notification 3</a></li>
                                <li><a href=\"#\">Notification 4</a></li>
                                <li><a href=\"#\">Another notification</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"\">
                                <i class=\"fa fa-search\"></i>
                                <p class=\"hidden-lg hidden-md\">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"\">
                                <p>Account</p>
                            </a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <p>
                                    Dropdown
                                    <b class=\"caret\"></b>
                                </p>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class=\"separator hidden-lg hidden-md\"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Email Statistics</h4>
                                <p class=\"category\">Last Campaign Performance</p>
                            </div>
                            <div class=\"content\">
                                <div id=\"chartPreferences\" class=\"ct-chart ct-perfect-fourth\"></div>

                                <div class=\"footer\">
                                    <div class=\"legend\">
                                        <i class=\"fa fa-circle text-info\"></i> Open
                                        <i class=\"fa fa-circle text-danger\"></i> Bounce
                                        <i class=\"fa fa-circle text-warning\"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"fa fa-clock-o\"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-8\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Users Behavior</h4>
                                <p class=\"category\">24 Hours performance</p>
                            </div>
                            <div class=\"content\">
                                <div id=\"chartHours\" class=\"ct-chart\"></div>
                                <div class=\"footer\">
                                    <div class=\"legend\">
                                        <i class=\"fa fa-circle text-info\"></i> Open
                                        <i class=\"fa fa-circle text-danger\"></i> Click
                                        <i class=\"fa fa-circle text-warning\"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"fa fa-history\"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"card \">
                            <div class=\"header\">
                                <h4 class=\"title\">2014 Sales</h4>
                                <p class=\"category\">All products including Taxes</p>
                            </div>
                            <div class=\"content\">
                                <div id=\"chartActivity\" class=\"ct-chart\"></div>

                                <div class=\"footer\">
                                    <div class=\"legend\">
                                        <i class=\"fa fa-circle text-info\"></i> Tesla Model S
                                        <i class=\"fa fa-circle text-danger\"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"fa fa-check\"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"card \">
                            <div class=\"header\">
                                <h4 class=\"title\">Tasks</h4>
                                <p class=\"category\">Backend development</p>
                            </div>
                            <div class=\"content\">
                                <div class=\"table-full-width\">
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label class=\"checkbox\">
                                                    <input type=\"checkbox\" value=\"\" data-toggle=\"checkbox\">
                                                </label>
                                            </td>
                                            <td>Sign contract for \"What are conference organizers afraid of?\"</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-xs\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class=\"checkbox\">
                                                    <input type=\"checkbox\" value=\"\" data-toggle=\"checkbox\" checked=\"\">
                                                </label>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-xs\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class=\"checkbox\">
                                                    <input type=\"checkbox\" value=\"\" data-toggle=\"checkbox\" checked=\"\">
                                                </label>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-xs\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class=\"checkbox\">
                                                    <input type=\"checkbox\" value=\"\" data-toggle=\"checkbox\">
                                                </label>
                                            </td>
                                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-xs\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class=\"checkbox\">
                                                    <input type=\"checkbox\" value=\"\" data-toggle=\"checkbox\">
                                                </label>
                                            </td>
                                            <td>Read \"Following makes Medium better\"</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-xs\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class=\"checkbox\">
                                                    <input type=\"checkbox\" value=\"\" data-toggle=\"checkbox\">
                                                </label>
                                            </td>
                                            <td>Unfollow 5 enemies from twitter</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-xs\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class=\"footer\">
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"fa fa-history\"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class=\"footer\">
            <div class=\"container-fluid\">
                <nav class=\"pull-left\">
                    <ul>
                        <li>
                            <a href=\"#\">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class=\"copyright pull-right\">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/assets/js/bootstrap-checkbox-radio-switch.js"), "html", null, true);
        echo "\"></script>

<!--  Charts Plugin -->
<script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/assets/js/chartist.min.js"), "html", null, true);
        echo "\"></script>

<!--  Notifications Plugin    -->
<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/assets/js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>

<!--  Google Maps Plugin    -->
<script type=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/text/javascript"), "html", null, true);
        echo "\" src=\"https://maps.googleapis.com/maps/api/js?sensor=false\"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/ssets/js/light-bootstrap-dashboard.js"), "html", null, true);
        echo "\"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/assets/js/demo.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
    \$(document).ready(function(){

        demo.initChartist();

        \$.notify({
            icon: 'pe-7s-gift',
            message: \"Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer.\"

        },{
            type: 'info',
            timer: 4000
        });

    });
</script>

</html>
";
        
        $__internal_796e2b77c8b4e84333fba5af4cb53b9b3fd2239991b9193d5bfa02f034f04978->leave($__internal_796e2b77c8b4e84333fba5af4cb53b9b3fd2239991b9193d5bfa02f034f04978_prof);

        
        $__internal_e1d93b03a092a7e9e28af2c39b250faaa0ced92807a7807026ba3b5a81c52a41->leave($__internal_e1d93b03a092a7e9e28af2c39b250faaa0ced92807a7807026ba3b5a81c52a41_prof);

    }

    public function getTemplateName()
    {
        return "::Back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 447,  506 => 444,  500 => 441,  494 => 438,  488 => 435,  482 => 432,  476 => 429,  472 => 428,  78 => 37,  69 => 31,  56 => 21,  50 => 18,  44 => 15,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('Back/assets/img/favicon.ico')}}\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

    <title>Espace admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />


    <!-- Bootstrap core CSS     -->
    <link href=\"{{ asset('Back/assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />

    <!-- Animation library for notifications   -->
    <link href=\"{{ asset('Back/assets/css/animate.min.css')}}\" rel=\"stylesheet\"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href=\"{{ asset('Back/assets/css/light-bootstrap-dashboard.css')}}\" rel=\"stylesheet\"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=\"assets/css/demo.css\" rel=\"stylesheet\" />


    <!--     Fonts and icons     -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href=\"{{ asset('Back/assets/css/pe-icon-7-stroke.css')}}\" rel=\"stylesheet\" />

</head>
<body>

<div class=\"wrapper\">
    <div class=\"sidebar\" data-color=\"orange\" data-image=\"{{ asset('Back/assets/img/sidebar-2.jpg')}}\">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color=\"blue | azure | green | orange | red | purple\"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class=\"sidebar-wrapper\">
            <div class=\"logo\">
                <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
                    <h3>Souk El Medina</h3>
                </a>
            </div>

            <ul class=\"nav\">
                <li class=\"active\">
                    <a href=\"dashboard.html\">
                        <i class=\"pe-7s-graph\"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href=\"user.html\">
                        <i class=\"pe-7s-user\"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href=\"table.html\">
                        <i class=\"pe-7s-note2\"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href=\"typography.html\">
                        <i class=\"pe-7s-news-paper\"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href=\"icons.html\">
                        <i class=\"pe-7s-science\"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href=\"maps.html\">
                        <i class=\"pe-7s-map-marker\"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href=\"notifications.html\">
                        <i class=\"pe-7s-bell\"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class=\"active-pro\">
                    <a href=\"upgrade.html\">
                        <i class=\"pe-7s-rocket\"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class=\"main-panel\">
        <nav class=\"navbar navbar-default navbar-fixed\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navigation-example-2\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Dashboard</a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-left\">
                        <li>
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-dashboard\"></i>
                                <p class=\"hidden-lg hidden-md\">Dashboard</p>
                            </a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-globe\"></i>
                                <b class=\"caret hidden-sm hidden-xs\"></b>
                                <span class=\"notification hidden-sm hidden-xs\">5</span>
                                <p class=\"hidden-lg hidden-md\">
                                    5 Notifications
                                    <b class=\"caret\"></b>
                                </p>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Notification 1</a></li>
                                <li><a href=\"#\">Notification 2</a></li>
                                <li><a href=\"#\">Notification 3</a></li>
                                <li><a href=\"#\">Notification 4</a></li>
                                <li><a href=\"#\">Another notification</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"\">
                                <i class=\"fa fa-search\"></i>
                                <p class=\"hidden-lg hidden-md\">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"\">
                                <p>Account</p>
                            </a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <p>
                                    Dropdown
                                    <b class=\"caret\"></b>
                                </p>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class=\"separator hidden-lg hidden-md\"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Email Statistics</h4>
                                <p class=\"category\">Last Campaign Performance</p>
                            </div>
                            <div class=\"content\">
                                <div id=\"chartPreferences\" class=\"ct-chart ct-perfect-fourth\"></div>

                                <div class=\"footer\">
                                    <div class=\"legend\">
                                        <i class=\"fa fa-circle text-info\"></i> Open
                                        <i class=\"fa fa-circle text-danger\"></i> Bounce
                                        <i class=\"fa fa-circle text-warning\"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"fa fa-clock-o\"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-8\">
                        <div class=\"card\">
                            <div class=\"header\">
                                <h4 class=\"title\">Users Behavior</h4>
                                <p class=\"category\">24 Hours performance</p>
                            </div>
                            <div class=\"content\">
                                <div id=\"chartHours\" class=\"ct-chart\"></div>
                                <div class=\"footer\">
                                    <div class=\"legend\">
                                        <i class=\"fa fa-circle text-info\"></i> Open
                                        <i class=\"fa fa-circle text-danger\"></i> Click
                                        <i class=\"fa fa-circle text-warning\"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"fa fa-history\"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"card \">
                            <div class=\"header\">
                                <h4 class=\"title\">2014 Sales</h4>
                                <p class=\"category\">All products including Taxes</p>
                            </div>
                            <div class=\"content\">
                                <div id=\"chartActivity\" class=\"ct-chart\"></div>

                                <div class=\"footer\">
                                    <div class=\"legend\">
                                        <i class=\"fa fa-circle text-info\"></i> Tesla Model S
                                        <i class=\"fa fa-circle text-danger\"></i> BMW 5 Series
                                    </div>
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"fa fa-check\"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6\">
                        <div class=\"card \">
                            <div class=\"header\">
                                <h4 class=\"title\">Tasks</h4>
                                <p class=\"category\">Backend development</p>
                            </div>
                            <div class=\"content\">
                                <div class=\"table-full-width\">
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label class=\"checkbox\">
                                                    <input type=\"checkbox\" value=\"\" data-toggle=\"checkbox\">
                                                </label>
                                            </td>
                                            <td>Sign contract for \"What are conference organizers afraid of?\"</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-xs\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class=\"checkbox\">
                                                    <input type=\"checkbox\" value=\"\" data-toggle=\"checkbox\" checked=\"\">
                                                </label>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-xs\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class=\"checkbox\">
                                                    <input type=\"checkbox\" value=\"\" data-toggle=\"checkbox\" checked=\"\">
                                                </label>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-xs\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class=\"checkbox\">
                                                    <input type=\"checkbox\" value=\"\" data-toggle=\"checkbox\">
                                                </label>
                                            </td>
                                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-xs\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class=\"checkbox\">
                                                    <input type=\"checkbox\" value=\"\" data-toggle=\"checkbox\">
                                                </label>
                                            </td>
                                            <td>Read \"Following makes Medium better\"</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-xs\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class=\"checkbox\">
                                                    <input type=\"checkbox\" value=\"\" data-toggle=\"checkbox\">
                                                </label>
                                            </td>
                                            <td>Unfollow 5 enemies from twitter</td>
                                            <td class=\"td-actions text-right\">
                                                <button type=\"button\" rel=\"tooltip\" title=\"Edit Task\" class=\"btn btn-info btn-simple btn-xs\">
                                                    <i class=\"fa fa-edit\"></i>
                                                </button>
                                                <button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
                                                    <i class=\"fa fa-times\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class=\"footer\">
                                    <hr>
                                    <div class=\"stats\">
                                        <i class=\"fa fa-history\"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class=\"footer\">
            <div class=\"container-fluid\">
                <nav class=\"pull-left\">
                    <ul>
                        <li>
                            <a href=\"#\">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class=\"copyright pull-right\">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href=\"http://www.creative-tim.com\">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src=\"{{ asset('Back/assets/js/jquery-1.10.2.js')}}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('Back/assets/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src=\"{{ asset('Back/assets/js/bootstrap-checkbox-radio-switch.js')}}\"></script>

<!--  Charts Plugin -->
<script src=\"{{ asset('Back/assets/js/chartist.min.js')}}\"></script>

<!--  Notifications Plugin    -->
<script src=\"{{ asset('Back/assets/js/bootstrap-notify.js')}}\"></script>

<!--  Google Maps Plugin    -->
<script type=\"{{ asset('Back/text/javascript')}}\" src=\"https://maps.googleapis.com/maps/api/js?sensor=false\"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src=\"{{ asset('Back/ssets/js/light-bootstrap-dashboard.js')}}\"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src=\"{{ asset('Back/assets/js/demo.js')}}\"></script>

<script type=\"text/javascript\">
    \$(document).ready(function(){

        demo.initChartist();

        \$.notify({
            icon: 'pe-7s-gift',
            message: \"Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer.\"

        },{
            type: 'info',
            timer: 4000
        });

    });
</script>

</html>
", "::Back.html.twig", "C:\\wamp64\\www\\medina1\\app/Resources\\views/Back.html.twig");
    }
}

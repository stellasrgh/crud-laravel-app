 <title>Metro Panel Flat Bootstarp Resposive Website Template| Home :: w3layouts</title>
    <link href="{{ asset('backend-tas') }}/css/bootstrap.css" rel="stylesheet" type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{ asset('backend-tas') }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <script src="{{asset('backend-tas')}}/js/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('backend-tas') }}/css/font-awesome.css">
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Metro Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <script>
        $(document).ready(function(c) {
            $('.alert-close').on('click', function(c) {
                $('.calender-left').fadeOut('slow', function(c) {
                    $('.calender-left').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close1').on('click', function(c) {
                $('.calender-right').fadeOut('slow', function(c) {
                    $('.calender-right').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close2').on('click', function(c) {
                $('.graph').fadeOut('slow', function(c) {
                    $('.graph').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close3').on('click', function(c) {
                $('.site-report').fadeOut('slow', function(c) {
                    $('.site-report').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close4').on('click', function(c) {
                $('.total-sale').fadeOut('slow', function(c) {
                    $('.total-sale').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close5').on('click', function(c) {
                $('.to-do').fadeOut('slow', function(c) {
                    $('.to-do').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close7').on('click', function(c) {
                $('.user-trends').fadeOut('slow', function(c) {
                    $('.user-trends').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close6').on('click', function(c) {
                $('.world-map').fadeOut('slow', function(c) {
                    $('.world-map').remove();
                });
            });
        });
    </script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-48014931-1', 'codyhouse.co');
        ga('send', 'pageview');

        jQuery(document).ready(function($) {
            $('.close-carbon-adv').on('click', function() {
                $('#carbonads-container').hide();
            });
        });
    </script>
    <script src="{{asset('backend-tas')}}/js/zingchart.min.js"></script>
    <script src="{{asset('backend-tas')}}/js/zingchart.jquery.js"></script>
    <script src="{{asset('backend-tas')}}/js/jquery.easydropdown.js"></script>
    <script src="{{asset('backend-tas')}}/js/jquery.nicescroll.js"></script>

    <link href="{{ asset('backend-tas') }}/css/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('backend-tas')}}/js/jquery.vmap.js" type="text/javascript"></script>
    <script src="{{asset('backend-tas')}}/js/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="{{asset('backend-tas')}}/js/jquery.vmap.sampledata.js" type="text/javascript"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: '#333333',
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#666666',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#C8EEFF', '#006491'],
                normalizeFunction: 'polynomial'
            });
        });
    </script>
    <!----Calender -------->
    <link rel="stylesheet" href="{{ asset('backend-tas') }}/css/clndr.css" type="text/css" />
    <script src="{{asset('backend-tas')}}/js/underscore-min.js"></script>
    <script src="{{asset('backend-tas')}}/js/moment-2.2.1.js"></script>
    <script src="{{asset('backend-tas')}}/js/clndr.js"></script>
    <script src="{{asset('backend-tas')}}/js/site.js"></script>
    <!----End Calender -------->
    <script src="{{asset('backend-tas')}}/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#horizontalTab,#horizontalTab1,#horizontalTab2').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true // 100% fit in a container
            });
        });
    </script>
    <link href="{{ asset('backend-tas') }}/css/nav.css" rel="stylesheet" type="text/css" media="all" />
    <script src="{{asset('backend-tas')}}/js/main.js"></script> <!-- Resource jQuery -->
    <!-- chart -->
    <script src="{{asset('backend-tas')}}/js/Chart1.js"></script>
    <!-- //chart -->

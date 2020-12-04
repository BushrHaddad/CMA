<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('page_title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords"
        content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />



    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />


    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="/css/flexslider.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Modernizr JS -->
    <script src="/js/modernizr-2.6.2.min.js"></script>

    <link type="text/css" rel="stylesheet" href="css/lightslider.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/lightslider.js"></script>

</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container-fluid">
                <div class="row">
                    <div class="top-menu">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 menu-1" >
                                    <ul>
                                        <div class="col-sm-4">
                                            <form id="form" class="row">
                                                <div class="col-sm-4 field">
                                                    <button class="btn btn-primary">@lang('titles.search')</button>
                                                </div>

                                                <div class="col-sm-8 field">
                                                    <input type="text" name="query" placeholder="ابحث .."
                                                        id="search-query" class="form-control">
                                                </div>

                                            </form>
                                        </div>

                                        <div class="col-sm-8">
                                            @yield('active_index')
                                        </div>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <script>
            $(document).ready(function() {
                var previousScroll = 0,
                    headerOrgOffset = $('#mainnav').offset().top;

                $(window).scroll(function() {
                    var currentScroll = $(this).scrollTop();
                    if (currentScroll > headerOrgOffset) {
                        if (currentScroll > previousScroll) {
                            $('#mainnav').fadeOut();
                        } else {
                            $('#mainnav').fadeIn();
                            $('#mainnav').addClass('fixed');

                        }
                    } else {
                        $('#mainnav').removeClass('fixed');
                    }
                    previousScroll = currentScroll;
                });

            });
            </script>
        </nav>


        @yield('page_content')

        <footer id="fh5co-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-4 fh5co-widget">
                        <h4>Paper</h4>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta
                            adipisci architecto culpa amet.</p>
                    </div>
                    <div class="col-md-4 col-md-push-1">
                        <ul class="fh5co-footer-links">
                            <li><a href="jesus">تعرف على يسوع</a></li>
                            <li><a href="about">من نحن</a></li>
                            <li><a href="contact">تواصل</a></li>
                            <li><a href="donate">تبرع</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-md-push-1">
                        <h4>Contact Information</h4>
                        <ul class="fh5co-footer-links">
                            <li>198 West 21th Street, <br> Suite 721 N ew York NY 10016</li>
                            <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                            <li><a href="http://freehtml5.co">FreeHTML5.co</a></li>
                        </ul>
                    </div>

                </div>

                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; كنيسة الاتحاد المسيحي في سوريا ولبنان. All Rights
                                Reserved.</small>
                            <small class="block">Designed by <a href="http://freehtml5.co/"
                                    target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/"
                                    target="_blank">Unsplash</a></small>
                        </p>
                        <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-email"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="/js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="/js/jquery.flexslider-min.js"></script>
    <!-- Magnific Popup -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/magnific-popup-options.js"></script>
    <!-- Main -->
    <script src="/js/main.js"></script>

</body>

</html>
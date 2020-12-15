<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('page_title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />

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

    <!-- Vendor CSS Files -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> 



    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="/css/flexslider.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Modernizr JS -->
    <script src="/js/modernizr-2.6.2.min.js"></script>


    @php
    $locale = App::getLocale();
    $rtl = FALSE;

    if (App::isLocale('en')) {
    $rtl = FALSE;
    }
    else{
    $rtl = TRUE;
    }
    @endphp

</head>

<body class="class= {{ $rtl ? 'rtl' : 'ltr'}} ">

    <div class="fh5co-loader"></div>

    <div id="page">

        <nav class="fh5co-nav" role="navigation" id="mainnav">
            <div class="container-fluid">
                <div class="row">
                    <div class="top-menu">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 menu-1">
                                    <ul>
                                        <div class="col-sm-4">
                                            <form id="form" class="row" method="POST" action="{{route('search')}}">
                                                @csrf
                                                <div class="col-sm-12 field">
                                                    <input type="text" placeholder="@lang('titles.search') ..."
                                                        name="query" id="search-query" class="form-control">
                                                </div>
                                                <!-- Search Button -->
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
                    <div class="col-md-4 text-center">
                        <h4>@lang('titles.footer_verse_title')</h4>
                        <p>@lang('titles.footer_verse')</p>
                    </div>
                    <div class="col-md-4">
                        <ul class="fh5co-footer-links">
                            <li><a href="/">@lang('titles.main')</a></li>
                            <li><a href="jesus">@lang('titles.know_jesus')</a></li>
                            <li><a href="sermons">@lang('titles.sermons')</a></li>
                            <li><a href="hymns">@lang('titles.hymns')</a></li>
                            <li><a href="articles">@lang('titles.articles')</a></li>
                            <li class="has-dropdown">
                                <a href="#">@lang('titles.other_services')</a>
                                <ul class="dropdown">
                                    <li><a href="#">@lang('titles.events')</a></li>
                                    <li><a href="#">@lang('titles.books')</a></li>
                                    <li><a href="#">@lang('titles.devotions')</a></li>
                                </ul>
                            </li>
                            <li><a href="about">@lang('titles.who_we_are')</a></li>
                            <li class="active"><a href="contact">@lang('titles.contact')</a></li>
                            <li><a href="donate">@lang('titles.donate')</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h4>@lang('titles.contact')</h4>
                        <ul class="fh5co-footer-links">
                            <li>شارع أبو خليل القباني، دمشق - القصور</li>
                            <li><a href="tel://1234567920">01111111111 </a></li>
                            <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                        </ul>
                    </div>

                </div>

                <div class="row copyright text-center">
                    <div class="col-md-12">
                        <p>
                            <small class="block">@lang('titles.church_name')</small>
                        </p>
                        <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="https://www.facebook.com/EvangelicalChristainAllianceChurch"><i
                                        class="icon-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCXaubVFH2Ahgd_Ovv-sf73w"><i
                                        class="icon-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/cma.damascus/"><i class="icon-instagram"></i></a>
                            </li>
                            <li><a href="https://twitter.com/AllianceChurchM"><i class="icon-twitter"></i></a></li>
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

    <!-- Related to Hero Carousal  -->
    <!-- <script src="/vendor/jquery/jquery.min.js"></script>  -->
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
@extends('layouts.layout')

@section('page_content')

<!-- ============ Hero Section ======= -->
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <!-- <ol class="carousel-indicators"></ol> -->

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="background-image: url(/imgs/slide2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">We are professional</h2>
                            <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</p>
                            <a href="#featured-services"
                                class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(/imgs/slide3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">At vero eos et accusamus</h2>
                            <p class="animate__animated animate__fadeInUp">Nam libero tempore, cum soluta nobis est
                                eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus,
                                omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut
                                officiis debitis aut.</p>
                            <a href="#featured-services"
                                class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section>

<!-- =========== Content Section ============= -->
<div id="CMA-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-padded-right">
                <div class="row">
                    <div class="col-md-12">
                        <div class="CMA-blog animate-box">
                            <div class="title title-pin text-center">
                                <span class="posted-on">Nov. 15th 2016</span>
                                <h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
                                <span class="category">Lifestyle</span>
                            </div>
                            <a href="#"><img class="img-responsive" src="/imgs/blog-1.jpg" alt=""></a>
                            <div class="blog-text text-center">
                                <p>Text here</p>
                                <ul class="CMA-social-icons">
                                    <li>Share:</li>
                                    <li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <aside id="CMA-sidebar" class="col-md-3">
                <div>
                    <div class="side animate-box">
                        <div class="col-md-12 col-md-offset-0 text-center CMA-heading CMA-heading-sidebar">
                            <h2><span>@lang('titles.featured')</span></h2>
                        </div>
                        @for($i = 0 ; $i < 3 ; $i++) <div class="blog-entry">
                            <a href="#">
                                <img src="/imgs/blog-1.jpg" class="img-responsive" alt="">
                                <div class="desc">
                                    <span class="date">Dec. 25, 2016</span>
                                    <h3>Most Beautiful Site in 2016</h3>
                                </div>
                            </a>
                    </div>
                    @endfor

                </div>

                <div class="side animate-box">
                    <div class="col-md-12 col-md-offset-0 text-center CMA-heading CMA-heading-sidebar">
                        <h2><span>@lang('titles.topics')</span></h2>
                    </div>
                    <ul class="category">
                        @for($i = 0 ; $i< 5 ; $i++) <li><a href="#"><i class="icon-check"></i>موضوع</a></li>
                            @endfor
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</div>

<!-- ============ Latest Section ============== -->
<aside id="cards">
    <div class="container">
        <div class="row">

            @for ($i = 0; $i < 2; $i++) @for($j=0; $j < 2;$j++) <div class="col-md-3">
                <a href="https://www.desiringgod.org/labs/why-do-we-thank-god-for-our-love" class="grid-x1-3 card">
                    <div class="card_label">
                        <div class="card_label_inner">
                            <h5>عظات</h3>
                        </div>
                    </div>
                    <div class="card_landscape_img">
                        <img alt="Mastered by Matchless Love: The Sweet Experience of Irresistible Grace"
                            class="lazyloaded img-responsive" src="/imgs/slide1.jpg">
                        <!-- <img alt="Mastered by Matchless Love: The Sweet Experience of Irresistible Grace"
                            src="https://dg.imgix.net/mastered-by-matchless-love-fnmnxrrn-en/landscape/mastered-by-matchless-love-fnmnxrrn-57924c2b124b642671b640f9b7278390.jpg?ts=1600490981&amp;ixlib=rails-4.0.2&amp;auto=format%2Ccompress&amp;fit=min&amp;w=800&amp;h=450&amp;dpr=2&amp;ch=Width%2CDPR"
                            data-src="https://dg.imgix.net/mastered-by-matchless-love-fnmnxrrn-en/landscape/mastered-by-matchless-love-fnmnxrrn-57924c2b124b642671b640f9b7278390.jpg?ts=1600490981&amp;ixlib=rails-4.0.2&amp;auto=format%2Ccompress&amp;fit=min&amp;w=800&amp;h=450&amp;dpr=2&amp;ch=Width%2CDPR"
                            class="lazyloaded"> -->
                    </div>

                    <div class="card_body">
                        <h2 class="card_body_title"> ماهي مكانتك في المسيح؟</h2>
                        <div class="card_body_date">10/18/2020</div>
                        <div class="card_body_subtitle"></div>

                    </div>
                    <!-- <div class="row card_footer">
                        <div class="card_author">
                            <img alt="" class="card_author_image"
                                src="https://dg.imgix.net/john-piper-t1zc1vhs-en/square/john-piper-t1zc1vhs-bb4f7ebdfa75335bd1534e50dc3bbc7c.jpg?ts=1549038789&amp;ixlib=rails-4.1.0&amp;auto=format%2Ccompress&amp;fit=min&amp;w=30&amp;h=30&amp;dpr=2&amp;ch=Width%2CDPR">
                            <span class="card_author_text">طلال شماس</span>
                        </div>
                        <span class="share_count">172 Shares</span>
                    </div> -->

                </a>
        </div>
        @endfor
        <div class="col-md-6 ">
            <a href="https://www.desiringgod.org/labs/why-do-we-thank-god-for-our-love" class="grid-x1-6 card">

                <div class="col-md-6 card_portrait_img_container ">
                    <div class="card_label">
                        <div class="card_label_inner">
                            <h5>عظات</h3>
                        </div>
                    </div>

                    <div class="card_portrait_img ">
                        <img alt="Mastered by Matchless Love: The Sweet Experience of Irresistible Grace"
                            class="lazyloaded img-responsive" src="/imgs/slide1.jpg">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card_body">
                        <h2 class="card_body_title"> ماهي مكانتك في المسيح؟</h2>
                        <div class="card_body_date">10/18/2020</div>
                        <div class="card_body_subtitle"></div>
                    </div>

                    <!-- <div class="card_footer">
                        <div class="card_author">
                            <img alt="" class="card_author_image"
                                src="https://dg.imgix.net/john-piper-t1zc1vhs-en/square/john-piper-t1zc1vhs-bb4f7ebdfa75335bd1534e50dc3bbc7c.jpg?ts=1549038789&amp;ixlib=rails-4.1.0&amp;auto=format%2Ccompress&amp;fit=min&amp;w=30&amp;h=30&amp;dpr=2&amp;ch=Width%2CDPR">
                            <span class="card_author_text">طلال شماس</span>
                        </div>
                        <span class="share_count">172 Shares</span>
                    </div> -->

                </div>

            </a>
        </div>
        @endfor
    </div>
    </div>
</aside>

<!-- ============ Map Content =================-->
<div id='map-churches' class='map'>
    <iframe style="border:0; width: 100%; height: 500px;"
        src="https://www.google.com/maps/d/embed?mid=1BGMUfx5wvpfThi-ZRlyM2TVPXSEZF6QB" frameborder="1" allowfullscreen>
    </iframe>
</div>

</div>
<!-- Footer -->
@endsection